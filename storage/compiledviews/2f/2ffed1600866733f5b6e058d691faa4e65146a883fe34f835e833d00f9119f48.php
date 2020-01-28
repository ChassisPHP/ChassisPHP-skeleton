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

/* backend/pages/images.twig.php */
class __TwigTemplate_96c9dc7b6ad9f689e1af5c5ca6bef4ac9b6cd22427e855885bceaf6abbfefc79 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("backend/layout.twig.php", "backend/pages/images.twig.php", 1);
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
        <h1>Images</h1>
    </header>

    <a href=\"/backend/images/create\" class=\"button blueBackground\">Add Image</a>
    <div class=\"item Rtable col90\">
        <div class=\"cell col20\">Title</div>
        <div class=\"cell col10\">Position</div>
        <div class=\"cell col20\">Album</div>
        <div class=\"cell col10\">Created By</div>
        <div class=\"cell col10\">Updated By</div>
        <div class=\"cell col10\">Pub Date</div>
        <div class=\"cell col10\">Last Updated</div>
        <div class=\"cell col5\"></div>
        <div class=\"cell col5\"></div>

        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 28
            echo "        <div class=\"cell col20\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "Title", [], "any", false, false, false, 28), "html", null, true);
            echo "</div>
        <div class=\"cell col10\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "Position", [], "any", false, false, false, 29), "html", null, true);
            echo "</div>
        <div class=\"cell col20\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "Album", [], "any", false, false, false, 30), "Name", [], "any", false, false, false, 30), "html", null, true);
            echo "</div>
        <div class=\"cell col10\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "CreatedBy", [], "any", false, false, false, 31), "Name", [], "any", false, false, false, 31), "html", null, true);
            echo "</div>
        <div class=\"cell col10\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "UpdatedBy", [], "any", false, false, false, 32), "Name", [], "any", false, false, false, 32), "html", null, true);
            echo "</div>
        <div class=\"cell col10\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "PublicationDate", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true);
            echo "</div>
        <div class=\"cell col10\">";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "Updated", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
            echo "</div>
        <div class=\"cell col5\"><a href=\"/backend/images/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "ID", [], "any", false, false, false, 35), "html", null, true);
            echo "\">Details</a></div>
        <div class=\"cell col5\"><a href=\"/backend/images/delete/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "ID", [], "any", false, false, false, 36), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure?')\">Delete</a></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "backend/pages/images.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 38,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  90 => 28,  86 => 27,  67 => 10,  61 => 7,  56 => 6,  54 => 5,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/pages/images.twig.php", "/home/roger/projects/ChassisPHP-Skeleton/resources/views/backend/pages/images.twig.php");
    }
}
