<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* frontend/layout.twig.php */
class __TwigTemplate_6d7c8168019dcd09d0888202d948d849543973cc372094f52aca98c6a560d442 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/css/main.css\" />
</head>
<body>
    ";
        // line 9
        $this->loadTemplate("frontend/partials/nav.twig.php", "frontend/layout.twig.php", 9)->display($context);
        // line 10
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        echo "    
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "frontend/layout.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  63 => 5,  54 => 10,  52 => 9,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/layout.twig.php", "/home/roger/projects/ChassisPHP-Skeleton/resources/views/frontend/layout.twig.php");
    }
}
