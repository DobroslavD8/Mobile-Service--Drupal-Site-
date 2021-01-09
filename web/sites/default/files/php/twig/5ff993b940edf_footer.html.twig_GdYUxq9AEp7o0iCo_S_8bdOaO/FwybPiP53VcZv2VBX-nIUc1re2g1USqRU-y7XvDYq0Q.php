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

/* @zuvi/template-parts/footer.html.twig */
class __TwigTemplate_df51001a08e91a18cbf2b5f01f5576adc96e8ff0a75bf0b169b35234692e1309 extends \Twig\Template
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
        $tags = array("if" => 3, "include" => 59);
        $filters = array("escape" => 6, "date" => 54);
        $functions = array("attach_library" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
                ['attach_library']
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
        // line 1
        echo "<!-- Start: Footer -->
<footer class=\"footer block-section clear\">
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 3)) {
            // line 4
            echo "    <section id=\"footer-top\">
      <div class=\"footer-top container clear\">
        ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 9
        echo "<!-- /footer-top -->

  ";
        // line 11
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 11) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 11))) {
            // line 12
            echo "    <section id=\"footer-blocks\">
      <div class=\"container footer-container clear\">   
        <div class=\"footer-block\">
          ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 15)) {
                // line 16
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 18
            echo "        </div> <!--/footer-first -->

        <div class=\"footer-block\">
          ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 21)) {
                // line 22
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 24
            echo "        </div> <!--/footer-second -->

        <div class=\"footer-block\">
          ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 27)) {
                // line 28
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 30
            echo "        </div> <!--/footer-three -->

        <div class=\"footer-block last-footer-block\">
          ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 33)) {
                // line 34
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 36
            echo "        </div> <!--/footer-fourth -->
      </div> <!--/container -->
    </section> <!--/footer-blocks -->
  ";
        }
        // line 39
        echo " ";
        // line 40
        echo "
  ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 41)) {
            // line 42
            echo "    <section id=\"footer-bottom\">
      <div class=\"footer-bottom container clear\">
        ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
      </div> <!-- /.container -->
    </section>
  ";
        }
        // line 47
        echo "<!-- /footer-bottom -->

 ";
        // line 49
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 50
            echo "  <section id=\"footer-bottom-last\">
    <div class=\"footer-bottom-last container clear\">
      ";
            // line 52
            if (($context["copyright_text"] ?? null)) {
                // line 53
                echo "          <div class=\"copyright\">
            &copy; ";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 54, $this->source), "html", null, true);
                echo ", All rights reserved.
          </div>
      ";
            }
            // line 57
            echo "      ";
            if (($context["all_icons_show"] ?? null)) {
                // line 58
                echo "        <div class=\"footer-social-icons\">
          ";
                // line 59
                $this->loadTemplate("@zuvi/template-parts/social-icons.html.twig", "@zuvi/template-parts/footer.html.twig", 59)->display($context);
                // line 60
                echo "        </div>
      ";
            }
            // line 62
            echo "      </div> <!--/.text_right -->
    </div> <!-- /.container -->
  </section> <!-- /footer-bottom-last -->
  ";
        }
        // line 65
        echo " <!-- end condition if copyright or social icons -->
</footer>
";
        // line 67
        if (($context["scrolltotop_on"] ?? null)) {
            // line 68
            echo "<div class=\"scrolltop\"><div class=\"scrolltop-icon\">&#x2191;</div></div>
";
        }
        // line 70
        echo "<!-- End: Footer -->
";
        // line 71
        if (($context["font_icon_fontawesome"] ?? null)) {
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("zuvi/fontawesome"), "html", null, true);
            echo "
";
        }
        // line 74
        if (($context["font_icon_material"] ?? null)) {
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("zuvi/material"), "html", null, true);
            echo "
";
        }
        // line 77
        echo "<style>
";
        // line 78
        if ((($context["circle_type"] ?? null) == "circle_solid")) {
            // line 79
            echo ".header-circle {
  background: var(--circle-color);
}
";
        }
        // line 83
        echo "</style>";
    }

    public function getTemplateName()
    {
        return "@zuvi/template-parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 83,  234 => 79,  232 => 78,  229 => 77,  224 => 75,  222 => 74,  217 => 72,  215 => 71,  212 => 70,  208 => 68,  206 => 67,  202 => 65,  196 => 62,  192 => 60,  190 => 59,  187 => 58,  184 => 57,  176 => 54,  173 => 53,  171 => 52,  167 => 50,  165 => 49,  161 => 47,  154 => 44,  150 => 42,  148 => 41,  145 => 40,  143 => 39,  137 => 36,  131 => 34,  129 => 33,  124 => 30,  118 => 28,  116 => 27,  111 => 24,  105 => 22,  103 => 21,  98 => 18,  92 => 16,  90 => 15,  85 => 12,  83 => 11,  79 => 9,  72 => 6,  68 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvi/template-parts/footer.html.twig", "D:\\wamp64\\www\\DrupalSite\\web\\themes\\contrib\\zuvi\\templates\\template-parts\\footer.html.twig");
    }
}
