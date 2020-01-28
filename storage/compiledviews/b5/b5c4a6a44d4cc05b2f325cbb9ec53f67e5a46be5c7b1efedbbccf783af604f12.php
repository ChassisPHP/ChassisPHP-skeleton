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

/* backend/partials/nav.twig.php */
class __TwigTemplate_cb6610a728f40ca37038904655c1d588658f15c3e151934839952f9e161a15c9 extends \Twig\Template
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
        <li><a href=\"/backend/users\">Users</a></li>
        <li><a href=\"/backend/content\">Content</a></li>
        <li><a href=\"/backend/images\">Images</a></li>
        <li><a href=\"/backend/albums\">Albums</a></li>
        ";
        // line 11
        if ((isset($context["loggedInUser"]) || array_key_exists("loggedInUser", $context))) {
            // line 12
            echo "            <li><a href=\"/backend/logout\">Logout</a></li>
            <li>";
            // line 13
            echo twig_escape_filter($this->env, ($context["loggedInUser"] ?? null), "html", null, true);
            echo "</li>
        ";
        }
        // line 15
        echo "    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "backend/partials/nav.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  54 => 13,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/partials/nav.twig.php", "/home/roger/projects/ChassisPHP-Skeleton/resources/views/backend/partials/nav.twig.php");
    }
}
