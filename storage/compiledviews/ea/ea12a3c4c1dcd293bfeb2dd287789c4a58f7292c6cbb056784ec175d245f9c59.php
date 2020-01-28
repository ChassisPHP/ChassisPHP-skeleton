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

/* backend/pages/users.php */
class __TwigTemplate_0e2d5b4c74f76aaccf1d65542261002951b499915b0e232984935bcb96882967 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/layout.twig.php";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/layout.twig.php", "backend/pages/users.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<article class=\"container itemCenter center column\">

    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "content", [], "any", true, true, false, 5)) {
            // line 6
            echo "    <div class=\"item alert ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "type", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
        ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "content", [], "any", false, false, false, 7), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 9
        echo " 
    
    <header class=\"item\">
        <h1>Active User Accounts</h1>
    </header>

    <a href=\"/backend/users/register\" class=\"button blueBackground\">Add User</a>
    <div class=\"item\">
        <div class=\"Rtable Rtable--5cols center\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <div class=\"Rtable-cell\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Id", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
            <div class=\"Rtable-cell\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Name", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
            <div class=\"Rtable-cell\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
            <div class=\"Rtable-cell\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userLevel", [], "any", false, false, false, 22), "html", null, true);
            echo "</div>
            <div class=\"Rtable-cell\"><a href=\"/backend/users/delete/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "ID", [], "any", false, false, false, 23), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure?')\">DELETE</a></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "backend/pages/users.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 25,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  82 => 19,  78 => 18,  67 => 9,  61 => 7,  56 => 6,  54 => 5,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/pages/users.php", "/home/roger/projects/ChassisPHP-Skeleton/resources/views/backend/pages/users.php");
    }
}
