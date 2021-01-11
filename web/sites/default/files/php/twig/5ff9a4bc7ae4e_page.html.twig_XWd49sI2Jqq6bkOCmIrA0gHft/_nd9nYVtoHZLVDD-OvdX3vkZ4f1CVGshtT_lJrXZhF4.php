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

/* themes/contrib/zuvi/templates/layout/page.html.twig */
class __TwigTemplate_765b6c617941758d5337d4cc7f1d36b01c39c35c1117c75f2941ef21b77cef66 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("include" => 52);
        $filters = array("escape" => 59);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        $this->loadTemplate("@zuvi/template-parts/header.html.twig", "themes/contrib/zuvi/templates/layout/page.html.twig", 52)->display($context);
        // line 53
        $this->loadTemplate("@zuvi/template-parts/highlighted.html.twig", "themes/contrib/zuvi/templates/layout/page.html.twig", 53)->display($context);
        // line 54
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container main-container clear\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 57
        echo "    <main id=\"main\" class=\"page-content\">
      ";
        // line 58
        $this->loadTemplate("@zuvi/template-parts/content_top.html.twig", "themes/contrib/zuvi/templates/layout/page.html.twig", 58)->display($context);
        // line 59
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
      ";
        // line 60
        $this->loadTemplate("@zuvi/template-parts/content_bottom.html.twig", "themes/contrib/zuvi/templates/layout/page.html.twig", 60)->display($context);
        // line 61
        echo "    </main>
    ";
        // line 62
        $this->loadTemplate("@zuvi/template-parts/sidebar_left.html.twig", "themes/contrib/zuvi/templates/layout/page.html.twig", 62)->display($context);
        // line 63
        echo "    ";
        $this->loadTemplate("@zuvi/template-parts/sidebar_right.html.twig", "themes/contrib/zuvi/templates/layout/page.html.twig", 63)->display($context);
        // line 64
        echo "  </div> ";
        // line 65
        echo "</div>";
        // line 66
        $this->loadTemplate("@zuvi/template-parts/footer.html.twig", "themes/contrib/zuvi/templates/layout/page.html.twig", 66)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/zuvi/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 66,  92 => 65,  90 => 64,  87 => 63,  85 => 62,  82 => 61,  80 => 60,  75 => 59,  73 => 58,  70 => 57,  66 => 54,  64 => 53,  62 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/zuvi/templates/layout/page.html.twig", "D:\\wamp64\\www\\DrupalSite\\web\\themes\\contrib\\zuvi\\templates\\layout\\page.html.twig");
    }
}
