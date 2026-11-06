<?php

namespace App\Http\Controllers;

use ChassisPHP\Framework\Http\Controller;

class NameController extends Controller
{
    public function addMiddleware()
    {
    }

    public function show($vars)
    {
        return "Well, hello $vars[name] !!";
    }
}
