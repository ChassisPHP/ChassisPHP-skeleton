<?php

namespace App\Http\Controllers\Backend;

use Doctrine\ORM\Query;
use Database\Entities\User;
use Database\Entities\Image;
use ChassisPHP\Framework\Session;
use ChassisPHP\Framework\Connection;
use ChassisPHP\Framework\Http\Controller;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

class ImageController extends Controller
{
    protected $connection;
    private $loggedInUser;
    private $entityManager;
    private $loggedInUserId;

    public function __construct()
    {
        // Set up DB connection and entity
        $this->connection     = new Connection;
        $this->entityManager  = $this->connection->entityManager;
        $this->loggedInUser   = Session::get('name');
        $this->loggedInUserId = Session::get('user');
    }

    public function addMiddleware()
    {
        // Only allow logged in users
        $this->middlewareQueue->addMiddleware('AuthMiddleware', '\ChassisPHP\Framework\Http\Middleware\\');
    }

    public function index($message = null)
    {
        // Display all images from the DB
        $imageRepository = $this->entityManager->getRepository('Database\Entities\Image');
        $images = $imageRepository->findAll();
        return $this->view->render('backend/pages/images.twig.php', array(
            'images' => $images,
            'message' => $message,
            'loggedInUser' => $this->loggedInUser
        ));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
     */

    public function create($formVars = null)
    {
        $albumRepository = $this->entityManager->getRepository('Database\Entities\Album');
        $albums = $albumRepository->findAll();

        $message =  Session::getMessage();
        $formAction = "/backend/images/create";
        $formMethod = "post";
        $createdBy['name'] = $this->loggedInUser;
        $createdBy['id'] = $this->loggedInUserId;

        return $this->view->render('backend/pages/imageForm.twig.php', array(
            'albums'       => $albums,
            'formVars'     => $formVars,
            'action'       => $formAction,
            'method'       => $formMethod,
            'loggedInUser' => $this->loggedInUser,
            'createdBy'    => $createdBy,
            'message'      => $message
        ));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @return Response
     */

    public function store()
    {
        $formVars = $this->request->getParsedBody();
        $image = new Image;

        $timestamp = new \DateTime();
        $image->setPublicationDate($timestamp);

        $createdBy = $this->entityManager->find('Database\Entities\User', $formVars['createdById']);
        $image->setCreatedBy($createdBy);
        $image->setUpdatedBy($createdBy);

        $album = $this->entityManager->find('Database\Entities\Album', $formVars['albumId']);
        $image->setAlbum($album);

        $image->setFilename($_FILES["imageFile"]["name"]);

        $formVars['filename'] = $_FILES["imageFile"]["name"];

        $success = $this->hydrateAndPersist($image, $formVars);
        $message = Session::getMessage();

        if ($success && ($this->saveAs('storage/public/img', $formVars['filename']))) {
            return $this->index($message);
        } else {
            unset($formVars['position']);
            return $this->create($formVars);
        }
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function select($id, $message = null)
    {
        //
        $image = $this->entityManager->find('Database\Entities\Image', $id['ID']);
        $baseURL = baseURL();
        return $this->view->render('backend/pages/imageDetails.twig.php', array(
            'image' => $image,
            'baseURL' => $baseURL,
            'message' => $message,
            'loggedInUser' => $this->loggedInUser
        ));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {
        $image = $this->entityManager->find('Database\Entities\Image', $id['ID']);
        $imageId = $id['ID'];
        $imagCaption = $image->getCaption();
        $formAction = "/backend/images/update/$imageId";
        $formMethod = "post";
        $imageCreatedBy = $this->entityManager->getRepository('Database\Entities\User')->find($image->getCreatedBy());
        $createdBy['name'] = $imageCreatedBy->getName();
        $createdBy['id'] = $imageCreatedBy->getId();
        return $this->view->render('backend/pages/imageForm.twig.php', array(
            'formVars'   => $image,
            'action' => $formAction,
            'method' => $formMethod,
            'loggedInUser' => $this->loggedInUser,
            'createdBy' => $createdBy
        ));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function update($id)
    {
        $image = $this->entityManager->find('Database\Entities\Image', $id['ID']);

        $formVars = $this->request->getParsedBody();

        $createdBy = $this->entityManager->find('Database\Entities\User', $formVars['createdBy']);
        $formVars['createdBy'] = $createdBy;
        $updatedBy = $this->entityManager->getRepository('Database\Entities\User')->find($this->loggedInUserId);
        $image->setUpdatedBy($updatedBy);

        $this->hydrateAndPersist($image, $formVars);

        return $this->select($id);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        // remove content  from the DB
        $image = $this->entityManager->find('Database\Entities\Image', $id['ID']);
        if (!$image) {
            $message['type'] = 'alert-danger';
            $message['content'] = "Image ID " . $id['ID'] . " not found";
            return $this->index($message);
        }

        $filename = $image->getFilename();
        $this->entityManager->remove($image);
        $this->entityManager->flush();

        // Delete the file
        // TODO add error checking
        $path = dirname(__FILE__, 5);
        $filePath = $path . '/storage/public/img/' . $filename;
        if (file_exists($filePath)) {
            unlink($filePath);
            $message['type'] = 'alert-danger';
            $message['content'] = "Image \"$filename\" deleted succesfully";
            return $this->index($message);
        } else {
            //TODO throw error
            $message['type'] = 'alert-danger';
            $message['content'] = "Image file  \"$filename\" not found";
            return $this->index($message);
        }
    }

    /**
    * method to hydrate and persist an entity
    */
    private function hydrateAndPersist($image, $formVars)
    {
        $title = $formVars['title'];
        $position = $formVars['position'];
        $caption = $formVars['caption'];

        $timestamp = new \DateTime();
        $image->setUpdated($timestamp);
        $image->setTitle($title);
        $image->setPosition($position);
        $image->setCaption($caption);

        $this->entityManager->persist($image);

        try {
            $this->entityManager->flush();
            Session::setMessage('alert-info', "$title added succesfully");
            return true;
        } catch (UniqueConstraintViolationException $e) {
            Session::setMessage('alert-danger', "$title could not be added. Filename and Position must be unique.");
            return false;
        } catch (Exception $e) {
            Session::setMessage('alert-danger', "$title could not be added.");
            return false;
        }
    }

    /**
    * method to save a file
    * TODO refactor this method
    * out, and make it available
    * throughout the entire application
    */
    private function saveAs($savePath, $filename)
    {
        $filePath = $savePath . "/" . basename($filename);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
        // Check if image file is an actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["imageFile"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                //TODO Throw an error
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($filePath)) {
            //TODO handle this??? Add confirmation??
            //$uploadOk = 0;
        }
        // Check file size
        if ($_FILES["imageFile"]["size"] > 500000) {
            //TODO throw an error
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            // TODO throw an error "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return false;
            // if everything is ok, try to upload file
        } else {
            $path = dirname(__FILE__, 5);
            $filePath = $path . "/" . $filePath;
            if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $filePath)) {
                return true;
            } else {
                return false;
            }
        }
    }
}
