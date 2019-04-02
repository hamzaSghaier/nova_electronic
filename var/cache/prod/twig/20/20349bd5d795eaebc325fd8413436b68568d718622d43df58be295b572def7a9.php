<?php

/* @PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig */
class __TwigTemplate_7055994c6a725eb4b5608ab9219f706a7427007d45b01da6d2352f950ce80eca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'admin_form_order_delivery_slip_pdf' => array($this, 'block_admin_form_order_delivery_slip_pdf'),
            'admin_form_order_delivery_slip_options' => array($this, 'block_admin_form_order_delivery_slip_options'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig", 27);
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pdfForm"] ?? null), 'form_start', array("attr" => array("class" => "form", "autocomplete" => "off"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_delivery_slip_pdf")));
        echo "
    <div class=\"row justify-content-center\">
      ";
        // line 32
        $this->displayBlock('admin_form_order_delivery_slip_pdf', $context, $blocks);
        // line 65
        echo "    </div>
  ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pdfForm"] ?? null), 'form_end');
        echo "

  ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionsForm"] ?? null), 'form_start', array("attr" => array("class" => "form")));
        echo "
    <div class=\"row justify-content-center\">
      ";
        // line 70
        $this->displayBlock('admin_form_order_delivery_slip_options', $context, $blocks);
        // line 110
        echo "    </div>
  ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 32
    public function block_admin_form_order_delivery_slip_pdf($context, array $blocks = array())
    {
        // line 33
        echo "        <div class=\"col-xl-10\">
          <div class=\"card\" id=\"delivery_pdf_fieldset\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">print</i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Print PDF", array(), "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block row\">
              <div class=\"card-text\">
                <div class=\"form-group row\">
                  ";
        // line 41
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", array(), "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", array(), "Admin.Orderscustomers.Help"));
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["pdfForm"] ?? null), "pdf", array()), "date_from", array()), 'errors');
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["pdfForm"] ?? null), "pdf", array()), "date_from", array()), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"form-group row\">
                  ";
        // line 48
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", array(), "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", array(), "Admin.Orderscustomers.Help"));
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["pdfForm"] ?? null), "pdf", array()), "date_to", array()), 'errors');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["pdfForm"] ?? null), "pdf", array()), "date_to", array()), 'widget');
        echo "
                  </div>
                </div>
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["pdfForm"] ?? null), 'rest');
        echo "
              </div>
            </div>
            <div class=\"card-footer\">
              <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate PDF", array(), "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 70
    public function block_admin_form_order_delivery_slip_options($context, array $blocks = array())
    {
        // line 71
        echo "        <div class=\"col-xl-10\">
          <div class=\"card\" id=\"delivery_options_fieldset\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">settings</i> ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery slip options", array(), "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block row\">
              <div class=\"card-text\">
                <div class=\"form-group row\">
                  ";
        // line 79
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery prefix", array(), "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prefix used for delivery slips.", array(), "Admin.Orderscustomers.Help"));
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["optionsForm"] ?? null), "options", array()), "prefix", array()), 'errors');
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["optionsForm"] ?? null), "options", array()), "prefix", array()), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"form-group row\">
                  ";
        // line 86
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery Number", array(), "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The next delivery slip will begin with this number and then increase with each additional slip.", array(), "Admin.Orderscustomers.Help"));
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["optionsForm"] ?? null), "options", array()), "number", array()), 'errors');
        echo "
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["optionsForm"] ?? null), "options", array()), "number", array()), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"form-group row\">
                  ";
        // line 93
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable product image", array(), "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adds an image before product name on Delivery-slip", array(), "Admin.Orderscustomers.Help"));
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["optionsForm"] ?? null), "options", array()), "enable_product_image", array()), 'errors');
        echo "
                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["optionsForm"] ?? null), "options", array()), "enable_product_image", array()), 'widget');
        echo "
                  </div>
                </div>
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["optionsForm"] ?? null), 'rest');
        echo "
              </div>
            </div>
            <div class=\"card-footer\">
              <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        // line 115
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_delivery.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 117,  218 => 115,  215 => 114,  205 => 104,  197 => 99,  191 => 96,  187 => 95,  182 => 93,  175 => 89,  171 => 88,  166 => 86,  159 => 82,  155 => 81,  150 => 79,  142 => 74,  137 => 71,  134 => 70,  124 => 59,  116 => 54,  110 => 51,  106 => 50,  101 => 48,  94 => 44,  90 => 43,  85 => 41,  77 => 36,  72 => 33,  69 => 32,  63 => 111,  60 => 110,  58 => 70,  53 => 68,  48 => 66,  45 => 65,  43 => 32,  37 => 30,  34 => 29,  30 => 25,  28 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Delivery/slip.html.twig");
    }
}
