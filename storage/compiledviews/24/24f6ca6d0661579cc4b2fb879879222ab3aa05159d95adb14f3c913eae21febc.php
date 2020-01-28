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

/* frontend/partials/nav.twig.php */
class __TwigTemplate_a3fc2f10801950bf34a934458495bec29c661909a19e6baec4f76a54e2f83412 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"container blueBackground\">
    <ul class=\"nav item flexStart\">
        <li><a href=\"/\">ChassisPHP</a></li>
    </ul>
    <ul class=\"nav container flexEnd\">
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/about\">About</a></li>
    </ul>
</nav>

";
    }

    public function getTemplateName()
    {
        return "frontend/partials/nav.twig.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/partials/nav.twig.php", "/home/roger/projects/ChassisPHP-Skeleton/resources/views/frontend/partials/nav.twig.php");
    }
}
