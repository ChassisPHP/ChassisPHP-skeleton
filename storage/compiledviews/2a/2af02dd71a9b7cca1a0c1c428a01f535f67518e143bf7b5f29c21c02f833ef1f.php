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

/* backend/pages/login.php */
class __TwigTemplate_17fb8603b0b6fcb3cb6a6ade407f2957dd01f064a8d78f248d6cd54939ce90ba extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("backend/layout.twig.php", "backend/pages/login.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "ChassisPHP Login";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<article class=\"main-content\">

    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "content", [], "any", true, true, false, 6)) {
            // line 7
            echo "    <div class=\"item alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "type", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
        ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "content", [], "any", false, false, false, 8), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 11
        echo "
    <header>
      <h1>Log In</h1>
    </header>

    <form action=\"/backend/login\" method=\"post\">
        <div class=\"form-group\">
          <label>Email</label>
          <input name=\"email\" placeholder=\"email\" class=\"input-control\" />
        </div>

        <div class=\"form-group\">
          <label>Password</label>
          <input type=\"password\" name=\"passwd\" value=\"password\" class=\"input-control\" />
        </div>

        <div class=\"form-group\">
          <label>&nbsp;</label>
          <button type=\"submit\">Log In</button>
          <button>Cancel</button>
        </div>

        ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "content", [], "any", false, false, false, 33) == "Wrong Email or Password, please try again")) {
            // line 34
            echo "        <a href='/backend/forgot'>Click here to reset your password</a>
        ";
        }
        // line 36
        echo "    </form>

</article>
";
    }

    public function getTemplateName()
    {
        return "backend/pages/login.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  101 => 34,  99 => 33,  75 => 11,  69 => 8,  64 => 7,  62 => 6,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/pages/login.php", "/home/roger/projects/ChassisPHP-Skeleton/resources/views/backend/pages/login.php");
    }
}
