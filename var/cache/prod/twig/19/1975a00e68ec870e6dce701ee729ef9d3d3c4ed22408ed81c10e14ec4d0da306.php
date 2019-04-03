<?php

/* @PrestaShop/Admin/Improve/Design/positions.html.twig */
class __TwigTemplate_d7a4d5cb768edd91e7c1e8e55edee1041c729bc7e6eaf96bdc23dbaeae715504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/positions.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"row\">
    ";
        // line 30
        if ( !($context["canMove"] ?? null)) {
            // line 31
            echo "      <p class=\"alert alert-warning\">
        ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you want to order/move the following data, please select a shop from the shop list.", array(), "Admin.Design.Notification"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 35
        echo "
    <div class=\"card col-9\">
      <div class=\"card-body\">
        <div class=\"card\">
          <form class=\"mt-2\" id=\"position-filters\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"row col-md-12 col-lg-6\">
                  <label class=\"form-control-label col-4 text-left mt-1\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show", array(), "Admin.Actions"), "html", null, true);
        echo "</label>
                  <div class=\"col-8\">
                    <select id=\"show-modules\" class=\"filter\">
                      <option value=\"all\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All modules", array(), "Admin.Design.Feature"), "html", null, true);
        echo "&nbsp;</option>
                      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 48
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\"";
            if ((($context["selectedModule"] ?? null) == $this->getAttribute($context["module"], "id", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "displayName", array()), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </select>
                  </div>
                </div>

                <div class=\"row col-md-12 col-lg-6\">
                  <label class=\"form-control-label col-5 text-center mt-1\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for a hook", array(), "Admin.Design.Feature"), "html", null, true);
        echo "</label>
                  <div class=\"input-group col-7\">
                    <div class=\"input-group-prepend\">
                      <div class=\"input-group-text\">
                        <i class=\"material-icons\">search</i>
                      </div>
                    </div>
                    <input type=\"text\" class=\"form-control\" id=\"hook-search\" name=\"hook-search\" placeholder=\"\">
                  </div>
                </div>
              </div>
            </div>

            <div class=\"container mt-3\">
              <div class=\"row\">
                <div class=\"col-lg-12\">
                  <p class=\"checkbox\">
                    <label class=\"form-control-label\" for=\"hook-position\">
                      <input type=\"checkbox\" id=\"hook-position\"/>
                      ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display non-positionable hooks", array(), "Admin.Design.Feature"), "html", null, true);
        echo "
                    </label>
                  </p>
                </div>
              </div>
            </div>
          </form>
        </div>

        <form id=\"module-positions-form\" method=\"post\" action=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_modules_positions_unhook");
        echo "\" data-update-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_improve_design_positions_update");
        echo "\">
          ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hook"]) {
            // line 85
            echo "            <section class=\"hook-panel";
            if ( !$this->getAttribute($context["hook"], "position", array(), "array")) {
                echo " hook-position";
            }
            echo "\"";
            if ( !$this->getAttribute($context["hook"], "position", array(), "array")) {
                echo " style=\"display:none;\"";
            }
            echo ">
              <a name=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "name", array(), "array"), "html", null, true);
            echo "\"></a>
              <header class=\"hook-panel-header\">
                <span class=\"hook-name\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "name", array(), "array"), "html", null, true);
            echo "</span>
                <label class=\"badge badge-primary badge-pill float-right\">
                  ";
            // line 90
            if (($this->getAttribute($context["hook"], "modules_count", array(), "array") && ($context["canMove"] ?? null))) {
                // line 91
                echo "                    <input type=\"checkbox\" class=\"hook-checker\" id=\"Ghook";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                echo "\" data-hook-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                echo "\" />
                  ";
            }
            // line 93
            echo "
                  ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "modules_count", array(), "array"), "html", null, true);
            echo "
                  ";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((($this->getAttribute($context["hook"], "modules_count", array(), "array") > 1)) ? ("Modules") : ("Module")), array(), "Admin.Global"), "html", null, true);
            echo "
                </label>

                ";
            // line 98
            if ($this->getAttribute($context["hook"], "description", array(), "array", true, true)) {
                // line 99
                echo "                  <div class=\"hook_description\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "description", array(), "array"), "html", null, true);
                echo "</div>
                ";
            }
            // line 101
            echo "              </header>

              ";
            // line 103
            if ($this->getAttribute($context["hook"], "modules_count", array(), "array")) {
                // line 104
                echo "                <section class=\"module-list\">
                  <ul class=\"list-unstyled";
                // line 105
                if (($this->getAttribute($context["hook"], "modules_count", array(), "array") > 1)) {
                    echo " sortable";
                }
                echo "\">
                    ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["hook"], "modules", array(), "array"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    if ($this->getAttribute(($context["modules"] ?? null), $this->getAttribute($context["module"], "id_module", array(), "array"), array(), "array", true, true)) {
                        // line 107
                        echo "                      ";
                        $context["moduleInstance"] = $this->getAttribute(($context["modules"] ?? null), $this->getAttribute($context["module"], "id_module", array(), "array"), array(), "array");
                        // line 108
                        echo "                      <li id=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", array(), "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? null), "id", array())), "html", null, true);
                        echo "\"
                        class=\"module-position-";
                        // line 109
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? null), "id", array()), "html", null, true);
                        echo " module-item";
                        if ((($context["canMove"] ?? null) && ($this->getAttribute($context["hook"], "modules_count", array(), "array") >= 2))) {
                            echo " draggable";
                        }
                        echo "\">

                        <div class=\"module-column-select\">
                          <input type=\"checkbox\" data-hook-id=\"";
                        // line 112
                        echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                        echo "\" class=\"modules-position-checkbox hook";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                        echo "\" name=\"unhooks[]\" value=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", array(), "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? null), "id", array())), "html", null, true);
                        echo "\"/>
                        </div>

                        ";
                        // line 115
                        if (( !($context["selectedModule"] ?? null) && ($this->getAttribute($context["hook"], "modules_count", array(), "array") > 1))) {
                            // line 116
                            echo "                          <div class=\"btn-toolbar text-center module-column-position";
                            if ((($context["canMove"] ?? null) && ($this->getAttribute($context["hook"], "modules_count", array(), "array") >= 2))) {
                                echo " dragHandle";
                            }
                            echo "\" id=\"td_";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["hook"], "id_hook", array(), "array") . "_") . $this->getAttribute(($context["moduleInstance"] ?? null), "id", array())), "html", null, true);
                            echo "\">
                            <div class=\"btn-group\">
                              <span class=\"index-position\">";
                            // line 118
                            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                            echo "</span>
                            </div>

                            ";
                            // line 121
                            if (($context["canMove"] ?? null)) {
                                // line 122
                                echo "                              <div class=\"btn-group-vertical module-buttons-update\">
                                <button class=\"btn btn-outline-primary btn-sm\"
                                  data-hook-id=\"";
                                // line 124
                                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                                echo "\"
                                  data-module-id=\"";
                                // line 125
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? null), "id", array()), "html", null, true);
                                echo "\"
                                  data-way=\"0\">
                                  <i class=\"material-icons\">expand_less</i>
                                </button>

                                <button class=\"btn btn-outline-primary btn-sm\"
                                  data-hook-id=\"";
                                // line 131
                                echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "id_hook", array(), "array"), "html", null, true);
                                echo "\"
                                  data-module-id=\"";
                                // line 132
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? null), "id", array()), "html", null, true);
                                echo "\"
                                  data-way=\"1\">
                                  <i class=\"material-icons\">expand_more</i>
                                </button>
                              </div>
                            ";
                            }
                            // line 138
                            echo "                          </div>
                        ";
                        }
                        // line 140
                        echo "
                        <div class=\"module-column-icon\">
                          <img src=\"";
                        // line 142
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("../modules/" . $this->getAttribute(($context["moduleInstance"] ?? null), "name", array())) . "/logo.png")), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? null), "displayName", array()));
                        echo "\" />
                        </div>

                        <div class=\"module-column-infos\">
                          <span class=\"module-name\">
                            ";
                        // line 147
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? null), "displayName", array()));
                        echo "
                            ";
                        // line 148
                        if ($this->getAttribute(($context["moduleInstance"] ?? null), "version", array())) {
                            // line 149
                            echo "                              <small class=\"text-muted\">&nbsp;-&nbsp;";
                            echo twig_escape_filter($this->env, sprintf("v%s", $this->getAttribute(($context["moduleInstance"] ?? null), "version", array())), "html", null, true);
                            echo "</small>
                            ";
                        }
                        // line 151
                        echo "                          </span>
                          <div class=\"module-description\">";
                        // line 152
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["moduleInstance"] ?? null), "description", array()));
                        echo "</div>
                        </div>

                        <div class=\"module-column-actions\">
                          <div class=\"btn-group\">
                            ";
                        // line 157
                        $context["linkParams"] = array("id_module" => $this->getAttribute(                        // line 158
($context["moduleInstance"] ?? null), "id", array()), "id_hook" => $this->getAttribute(                        // line 159
$context["hook"], "id_hook", array(), "array"), "editGraft" => 1);
                        // line 162
                        echo "                            ";
                        if (($context["selectedModule"] ?? null)) {
                            // line 163
                            echo "                              ";
                            $context["linkParams"] = twig_array_merge(($context["linkParams"] ?? null), array("show_modules" => ($context["selectedModule"] ?? null)));
                            // line 164
                            echo "                            ";
                        }
                        // line 165
                        echo "
                            <a class=\"btn btn-outline-primary btn-sm\" href=\"";
                        // line 166
                        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminModulesPositions", true, ($context["linkParams"] ?? null)), "html", null, true);
                        echo "\">
                              <i class=\"material-icons\">edit</i>
                              ";
                        // line 168
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", array(), "Admin.Actions"), "html", null, true);
                        echo "
                            </a>

                            <button class=\"btn btn-outline-primary btn-sm dropdown-toggle-split\" data-toggle=\"dropdown\" type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" data-reference=\"parent\">
                              <i class=\"material-icons\">expand_more</i>
                            </button>

                            <div class=\"dropdown-menu\">
                              <a class=\"dropdown-item\" href=\"";
                        // line 176
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_modules_positions_unhook", array("moduleId" => $this->getAttribute(($context["moduleInstance"] ?? null), "id", array()), "hookId" => $this->getAttribute($context["hook"], "id_hook", array(), "array"))), "html", null, true);
                        echo "\">
                                <i class=\"material-icons\">indeterminate_check_box</i>
                                ";
                        // line 178
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unhook", array(), "Admin.Design.Feature"), "html", null, true);
                        echo "
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "                  </ul>
                </section>
              ";
            }
            // line 188
            echo "            </section>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "
          <div id=\"unhook-button-position-bottom\">
            <button type=\"submit\" class=\"btn btn-default\" name=\"unhookform\">
              <i class=\"material-icons\">indeterminate_check_box</i>
              ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unhook the selection", array(), "Admin.Design.Feature"), "html", null, true);
        echo "
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class=\"col-3\">
      <div class=\"card\" id=\"modules-position-selection-panel\">
        <h3 class=\"card-header\"><i class=\"material-icons\">checked</i> ";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Selection", array(), "Admin.Global"), "html", null, true);
        echo "</h3>
        <div class=\"card-body\">
          <p>
            <span id=\"modules-position-single-selection\">";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1 module selected", array(), "Admin.Design.Feature"), "html", null, true);
        echo "</span>
            <span id=\"modules-position-multiple-selection\">
              <span id=\"modules-position-selection-count\"></span> ";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modules selected", array(), "Admin.Design.Feature"), "html", null, true);
        echo "
            </span>
          </p>
          <div class=\"text-center\">
            <button class=\"btn btn-primary\"><i class=\"icon-remove\"></i> ";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unhook the selection", array(), "Admin.Design.Feature"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 220
    public function block_javascripts($context, array $blocks = array())
    {
        // line 221
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/improve_design_positions.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/positions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 222,  449 => 221,  446 => 220,  435 => 212,  428 => 208,  423 => 206,  417 => 203,  405 => 194,  399 => 190,  392 => 188,  387 => 185,  370 => 178,  365 => 176,  354 => 168,  349 => 166,  346 => 165,  343 => 164,  340 => 163,  337 => 162,  335 => 159,  334 => 158,  333 => 157,  325 => 152,  322 => 151,  316 => 149,  314 => 148,  310 => 147,  300 => 142,  296 => 140,  292 => 138,  283 => 132,  279 => 131,  270 => 125,  266 => 124,  262 => 122,  260 => 121,  254 => 118,  244 => 116,  242 => 115,  232 => 112,  222 => 109,  217 => 108,  214 => 107,  203 => 106,  197 => 105,  194 => 104,  192 => 103,  188 => 101,  182 => 99,  180 => 98,  174 => 95,  170 => 94,  167 => 93,  159 => 91,  157 => 90,  152 => 88,  147 => 86,  136 => 85,  132 => 84,  126 => 83,  114 => 74,  92 => 55,  85 => 50,  70 => 48,  66 => 47,  62 => 46,  56 => 43,  46 => 35,  40 => 32,  37 => 31,  35 => 30,  32 => 29,  29 => 28,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/Design/positions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/positions.html.twig");
    }
}
