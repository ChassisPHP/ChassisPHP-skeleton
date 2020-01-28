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

/* backend/pages/albums.twig.php */
class __TwigTemplate_e0934dacc2b6eccdf2cc28a7fb7c429df89ec249db45734b95bfa7149fbebf23 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("backend/layout.twig.php", "backend/pages/albums.twig.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<article class=\"container itemCenter center column\">

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
        // line 10
        echo "
    <header class=\"item\">
        <h1>Albums</h1>
    </header>

    <a href=\"/backend/albums/create\" class=\"button blueBackground\">Add Album</a>
    <div class=\"item Rtable col90\">
        <div class=\"cell col20 bg-grey\">Name</div>
        <div class=\"cell col10 bg-grey\">Created By</div>
        <div class=\"cell col10 bg-grey\">Updated By</div>
        <div class=\"cell col10 bg-grey\">Pub Date</div>
        <div class=\"cell col10 bg-grey\">Last Updated</div>
        <div class=\"cell col5\"></div>
        <div class=\"cell col5\"></div>
    </div>

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["albums"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 27
            echo "    <div class=\"item Rtable col90\">
        <div class=\"Rtable-cell col20\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</div>
        <div class=\"Rtable-cell col10\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["album"], "CreatedBy", [], "any", false, false, false, 29), "Name", [], "any", false, false, false, 29), "html", null, true);
            echo "</div>
        <div class=\"Rtable-cell col10\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["album"], "UpdatedBy", [], "any", false, false, false, 30), "Name", [], "any", false, false, false, 30), "html", null, true);
            echo "</div>
        <div class=\"Rtable-cell col10\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "CreatedDate", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
            echo "</div>
        <div class=\"Rtable-cell col10\">";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "Updated", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
            echo "</div>
        <div class=\"Rtable-cell col5\"><a href=\"/backend/albums/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "ID", [], "any", false, false, false, 33), "html", null, true);
            echo "\">Details</a></div>
        <div class=\"Rtable-cell col5\"><a href=\"/backend/albums/delete/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "ID", [], "any", false, false, false, 34), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure?')\">Delete</a></div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "backend/pages/albums.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 37,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  89 => 27,  85 => 26,  67 => 10,  61 => 7,  56 => 6,  54 => 5,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/pages/albums.twig.php", "/home/roger/projects/ChassisPHP-Skeleton/resources/views/backend/pages/albums.twig.php");
    }
}
