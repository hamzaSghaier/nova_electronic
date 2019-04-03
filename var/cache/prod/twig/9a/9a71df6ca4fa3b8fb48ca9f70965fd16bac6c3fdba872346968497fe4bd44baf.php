<?php

/* @PrestaShop/Admin/Module/manage.html.twig */
class __TwigTemplate_cd5369bf985c109f059b63737227c088f9ede898d44726f280556fc4b5e75d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'catalog_categories_listing' => array($this, 'block_catalog_categories_listing'),
            'addon_card_see_more' => array($this, 'block_addon_card_see_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      ";
        // line 31
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 31)->display($context);
        // line 32
        echo "      ";
        // line 33
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 33)->display($context);
        // line 34
        echo "      ";
        // line 35
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 35)->display(array_merge($context, array("level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null))));
        // line 36
        echo "      ";
        // line 37
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 37)->display(array_merge($context, array("level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null))));
        // line 38
        echo "      ";
        // line 39
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 39)->display(array_merge($context, array("topMenuData" => ($context["topMenuData"] ?? null), "bulkActions" => ($context["bulkActions"] ?? null))));
        // line 40
        echo "
      ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 41)->display(array_merge($context, array("display_type" => "list", "origin" => "manage")));
        // line 42
        echo "
      ";
        // line 43
        $this->displayBlock('catalog_categories_listing', $context, $blocks);
        // line 62
        echo "    </div>
  </div>
";
    }

    // line 43
    public function block_catalog_categories_listing($context, array $blocks = array())
    {
        // line 44
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["categories"] ?? null), "subMenu", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 45
            echo "          <div class=\"module-short-list\">
            <span id=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "refMenu", array()), "html", null, true);
            echo "_modules\" class=\"module-search-result-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["category"], "name", array()), array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</span>

            ";
            // line 48
            if (twig_test_empty($this->getAttribute($context["category"], "modules", array()))) {
                // line 49
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 49)->display(array_merge($context, array("category" => $context["category"], "display_type" => "list", "origin" => "manage")));
                // line 50
                echo "            ";
            } else {
                // line 51
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 51)->display(array_merge($context, array("modules" => $this->getAttribute($context["category"], "modules", array()), "display_type" => "list", "origin" => "manage", "id" => $this->getAttribute($context["category"], "refMenu", array()))));
                // line 52
                echo "
              ";
                // line 53
                $this->displayBlock('addon_card_see_more', $context, $blocks);
                // line 58
                echo "            ";
            }
            // line 59
            echo "          </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "      ";
    }

    // line 53
    public function block_addon_card_see_more($context, array $blocks = array())
    {
        // line 54
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["category"] ?? null), "modules", array())) > ($context["maxModulesDisplayed"] ?? null))) {
            // line 55
            echo "                  ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/see_more.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 55)->display(array_merge($context, array("id" => $this->getAttribute(($context["category"] ?? null), "refMenu", array()))));
            // line 56
            echo "                ";
        }
        // line 57
        echo "              ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  154 => 56,  151 => 55,  148 => 54,  145 => 53,  141 => 61,  126 => 59,  123 => 58,  121 => 53,  118 => 52,  115 => 51,  112 => 50,  109 => 49,  107 => 48,  100 => 46,  97 => 45,  79 => 44,  76 => 43,  70 => 62,  68 => 43,  65 => 42,  63 => 41,  60 => 40,  57 => 39,  55 => 38,  52 => 37,  50 => 36,  47 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,  33 => 28,  30 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Module/manage.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/manage.html.twig");
    }
}
