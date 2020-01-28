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

/* backend/layout.twig.php */
class __TwigTemplate_f9c512189eea8ec0427c5db3308b3393b2d6291c138d8ea9798b39badea913bf extends \Twig\Template
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
        // line 10
        $this->loadTemplate("backend/partials/nav.twig.php", "backend/layout.twig.php", 10)->display(twig_array_merge($context, ["user" => ($context["all"] ?? null)]));
        // line 11
        echo "    <main class=\"content center itemCenter\">
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "    </main>    
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "backend/layout.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  67 => 5,  60 => 13,  58 => 12,  55 => 11,  53 => 10,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/layout.twig.php", "/home/roger/projects/ChassisPHP-Skeleton/resources/views/backend/layout.twig.php");
    }
}
