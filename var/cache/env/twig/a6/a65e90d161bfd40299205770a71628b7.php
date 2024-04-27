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

/* retiros_saldos_acumulados/index.html.twig */
class __TwigTemplate_9854755af32019f14f6f6f7bdd74f4b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'page' => [$this, 'block_page'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "retiros_saldos_acumulados/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "retiros_saldos_acumulados/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Distribución de Royalties";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 13
        echo "    <div class=\"preload hidden\">
        <div class=\"logo\"></div>
        <div class=\"loader-frame\">
            <div class=\"loader1\" id=\"loader1\"></div>
            <div class=\"loader2\" id=\"loader2\"></div>
        </div>
    </div>
    <!-- Header -->
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "                    <div class=\"row\">
                        ";
            // line 28
            if (((isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 28, $this->source); })()) != 0)) {
                // line 29
                echo "                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" type=\"button\" id=\"addGeneralUSD\" data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-info\"><i class=\"fa fa-dollar-sign\"></i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Generales</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> ";
                // line 38
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 38, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 46
            echo "                        <!-- /.col -->
                        ";
            // line 47
            if (((isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 47, $this->source); })()) != 0)) {
                // line 48
                echo "                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" id=\"addGeneralEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-info\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Generales</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> ";
                // line 59
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 59, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 67
            echo "                        <!-- /.col -->
                        ";
            // line 68
            if (((isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 68, $this->source); })()) != 0)) {
                // line 69
                echo "                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" id=\"addLibroUSD\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-dollar-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Libros</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> ";
                // line 80
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 80, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 88
            echo "                        <!-- /.col -->
                        ";
            // line 89
            if (((isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 89, $this->source); })()) != 0)) {
                // line 90
                echo "                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" id=\"addLibroEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Libros</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> ";
                // line 101
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 101, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 109
            echo "                        <!-- /.col -->
                        ";
            // line 110
            if (((isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 110, $this->source); })()) != 0)) {
                // line 111
                echo "                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" id=\"addServicioUSD\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-dollar-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Servicios</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Dólares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> ";
                // line 122
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 122, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 130
            echo "                        <!-- /.col -->
                        ";
            // line 131
            if (((isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 131, $this->source); })()) != 0)) {
                // line 132
                echo "                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" id=\"addServicioEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Servicios</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> ";
                // line 143
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 143, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 151
            echo "                        <!-- /.col -->
                    </div>
                ";
        }
        // line 154
        echo "                <div class=\"card\" id=\"tarjeta\" style=\"display: none\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3 id=\"nameListado\">Distribución del saldo por usuarios</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 161
        $macros["tabla"] = $this->loadTemplate("macros/tablas.html.twig", "retiros_saldos_acumulados/index.html.twig", 161)->unwrap();
        // line 162
        echo "                        <div class=\"row\" id=\"tablaGeneralUSD\" style=\"display: none\">
                            ";
        // line 163
        echo twig_call_macro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 163, $this->source); })()), "saldoGeneralUSD"], 163, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"row\" id=\"tablaGeneralEUR\" style=\"display: none\">
                            ";
        // line 166
        echo twig_call_macro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 166, $this->source); })()), "saldoGeneralEUR"], 166, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"row\" id=\"tablaLibroUSD\" style=\"display: none\">
                            ";
        // line 169
        echo twig_call_macro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 169, $this->source); })()), "saldoLibroUSD"], 169, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"row\" id=\"tablaLibroEUR\" style=\"display: none\">
                            ";
        // line 172
        echo twig_call_macro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 172, $this->source); })()), "saldoLibroEUR"], 172, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"row\" id=\"tablaServicioUSD\" style=\"display: none\">
                            ";
        // line 175
        echo twig_call_macro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 175, $this->source); })()), "saldoServicioUSD"], 175, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"row\" id=\"tablaServicioEUR\" style=\"display: none\">
                            ";
        // line 178
        echo twig_call_macro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 178, $this->source); })()), "saldoServicioEUR"], 178, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    ";
        // line 181
        echo twig_include($this->env, $context, "retiros_saldos_acumulados/modalAddRetiroSaldo.html.twig");
        echo "
                    ";
        // line 182
        echo twig_include($this->env, $context, "retiros_saldos_acumulados/modalAddIngresoSaldo.html.twig");
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 189
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 190
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<!-- DataTables -->
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Acceso a Rutas del Controller -->
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
<script>
    \$(document).ready(function () {

        //Declaracion de variables
        let tipoSaldo = 0;
        let moneda = '';

        ";
        // line 206
        if ((twig_length_filter($this->env, (isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 206, $this->source); })())) > 0)) {
            // line 207
            echo "                let table = \$('table.display').DataTable({
                    \"paging\": true,
                    \"lengthChange\": false,
                    \"searching\": true,
                    \"lengthMenu\": [[6], [6]],
                    \"ordering\": true,
                    \"info\": true,
                    \"autoWidth\": false,
                    \"responsive\": true,
                });
        ";
        }
        // line 218
        echo "
        toastr.options = {
            \"closeButton\": false,
            \"debug\": false,
            \"newestOnTop\": false,
            \"progressBar\": true,
            \"positionClass\": \"toast-top-right\",
            \"preventDuplicates\": true,
            \"onclick\": null,
            \"showDuration\": \"300\",
            \"hideDuration\": \"1000\",
            \"timeOut\": \"5000\",
            \"extendedTimeOut\": \"1000\",
            \"showEasing\": \"swing\",
            \"hideEasing\": \"linear\",
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }

        ";
        // line 237
        if ( !(null === (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 237, $this->source); })()))) {
            // line 238
            echo "        ";
            if (((isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 238, $this->source); })()) != 0)) {
                // line 239
                echo "        toastr[\"error\"]('";
                echo twig_escape_filter($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 239, $this->source); })()), "html", null, true);
                echo "', \"Notificación\")
        ";
            }
            // line 241
            echo "        ";
        }
        // line 242
        echo "
        \$('#addRoyaltie').keypress(function (tecla) {
            if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                return false;
            } else {
                let len = \$('#addRoyaltie').val().length;
                let indexPunto = \$('#addRoyaltie').val().indexOf('.');
                let indexComa = \$('#addRoyaltie').val().indexOf(',');

                if (tecla.charCode === 44) {
                    if (len === 0 && tecla.charCode === 44) {
                        return false;
                    }
                    if (indexComa > 0 && tecla.charCode === 44) {
                        return false;
                    }
                    if (indexPunto !== -1) {
                        return false;
                    }
                }else if (tecla.charCode === 46) {
                    if (len === 0 && tecla.charCode === 46) {
                        return false;
                    }
                    if (indexPunto > 0 && tecla.charCode === 46) {
                        return false;
                    }
                    if (indexComa !== -1) {
                        return false;
                    }
                }
                if (indexPunto > 0) {
                    let CharAfterdot = (len + 1) - indexPunto;
                    if (CharAfterdot > 3) {
                        return false;
                    }
                }else if (indexComa > 0) {
                    let CharAfterdot = (len + 1) - indexComa;
                    if (CharAfterdot > 3) {
                        return false;
                    }
                }
            }
            return true;
        });

        \$('#addRoyaltieIngreso').keypress(function (tecla) {
            if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                return false;
            } else {
                let len = \$('#addRoyaltieIngreso').val().length;
                let indexPunto = \$('#addRoyaltieIngreso').val().indexOf('.');
                let indexComa = \$('#addRoyaltieIngreso').val().indexOf(',');

                if (tecla.charCode === 44) {
                    if (len === 0 && tecla.charCode === 44) {
                        return false;
                    }
                    if (indexComa > 0 && tecla.charCode === 44) {
                        return false;
                    }
                    if (indexPunto !== -1) {
                        return false;
                    }
                }else if (tecla.charCode === 46) {
                    if (len === 0 && tecla.charCode === 46) {
                        return false;
                    }
                    if (indexPunto > 0 && tecla.charCode === 46) {
                        return false;
                    }
                    if (indexComa !== -1) {
                        return false;
                    }
                }
                if (indexPunto > 0) {
                    let CharAfterdot = (len + 1) - indexPunto;
                    if (CharAfterdot > 3) {
                        return false;
                    }
                }else if (indexComa > 0) {
                    let CharAfterdot = (len + 1) - indexComa;
                    if (CharAfterdot > 3) {
                        return false;
                    }
                }
            }
            return true;
        });

        \$('#addGeneralUSD').on('click', function () {
            tipoSaldo = 1;
            moneda = 'USD';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de productos generales en dólares\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"none\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"none\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"none\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"none\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"block\");
        });

        \$('#addGeneralEUR').on('click', function () {
            tipoSaldo = 2;
            moneda = 'EUR';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de productos generales en euros\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"none\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"none\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"none\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"none\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"block\");
        });

        \$('#addLibroUSD').on('click', function () {
            tipoSaldo = 3;
            moneda = 'USD';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de libros en dólares\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"none\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"none\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"none\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"none\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"block\");
        });

        \$('#addLibroEUR').on('click', function () {
            tipoSaldo = 4;
            moneda = 'EUR';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de libros en euros\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"none\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"none\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"none\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"none\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"block\");
        });

        \$('#addServicioUSD').on('click', function () {
            tipoSaldo = 5;
            moneda = 'USD';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de servicios en dólares\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"none\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"none\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"none\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"none\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"block\");
        });

        \$('#addServicioEUR').on('click', function () {
            tipoSaldo = 6;
            moneda = 'EUR';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de servicios en euros\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"none\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"none\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"none\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"none\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"block\");
        });

        let usuarioId;
        let usuario;
        let acumulado;
        let id;
        let saldoGeneralUSD, saldoGeneralEUR, saldoLibroUSD, saldoLibroEUR, saldoServicioUSD, saldoServicioEUR;
        let fichero;
        let siFichero = 0;

        \$('table.display tbody').on('click', '.retirar', function () {
            let row = \$(this).parents('tr');
            let fila = table.row(row).data();
            usuarioId = parseInt(row.data('id'));
            usuario = fila[0];
            ";
        // line 423
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 423, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
            // line 424
            echo "                id = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 424), "html", null, true);
            echo "');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('";
            // line 426
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 426), "html", null, true);
            echo "');
                    saldoGeneralEUR = parseFloat('";
            // line 427
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 427), "html", null, true);
            echo "');
                    saldoLibroUSD = parseFloat('";
            // line 428
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 428), "html", null, true);
            echo "');
                    saldoLibroEUR = parseFloat('";
            // line 429
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 429), "html", null, true);
            echo "');
                    saldoServicioUSD = parseFloat('";
            // line 430
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 430), "html", null, true);
            echo "');
                    saldoServicioEUR = parseFloat('";
            // line 431
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 431), "html", null, true);
            echo "');
                    switch (tipoSaldo) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('";
            // line 435
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 435), "html", null, true);
            echo "');
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('";
            // line 440
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 440), "html", null, true);
            echo "');
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('";
            // line 445
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 445), "html", null, true);
            echo "');
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('";
            // line 450
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 450), "html", null, true);
            echo "');
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('";
            // line 455
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 455), "html", null, true);
            echo "');
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('";
            // line 460
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 460), "html", null, true);
            echo "');
                            }
                            break;
                    }

                }
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 467
        echo "            \$(\"#modaTitleRetiro\").text(\"RETIRO DE SALDO A \" + usuario.toUpperCase());
            \$(\"#labelAddRoyaltie\").text(\"Royalties a retirar: \" + acumulado + ' ' + moneda);
            \$('#modalAddRetiroSaldo').modal('show');

        });

        \$('table.display tbody').on('click', '.ingresar', function () {
            let row = \$(this).parents('tr');
            let fila = table.row(row).data();
            usuarioId = parseInt(row.data('id'));
            usuario = fila[0];
            ";
        // line 478
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 478, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
            // line 479
            echo "            id = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 479), "html", null, true);
            echo "');
            if (id === usuarioId) {
                saldoGeneralUSD = parseFloat('";
            // line 481
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 481), "html", null, true);
            echo "');
                saldoGeneralEUR = parseFloat('";
            // line 482
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 482), "html", null, true);
            echo "');
                saldoLibroUSD = parseFloat('";
            // line 483
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 483), "html", null, true);
            echo "');
                saldoLibroEUR = parseFloat('";
            // line 484
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 484), "html", null, true);
            echo "');
                saldoServicioUSD = parseFloat('";
            // line 485
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 485), "html", null, true);
            echo "');
                saldoServicioEUR = parseFloat('";
            // line 486
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 486), "html", null, true);
            echo "');
                switch (tipoSaldo) {
                    case 1:
                        if(saldoGeneralUSD !== 0){
                            acumulado = parseFloat('";
            // line 490
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 490), "html", null, true);
            echo "');
                        }
                        break;
                    case 2:
                        if(saldoGeneralEUR !== 0){
                            acumulado = parseFloat('";
            // line 495
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 495), "html", null, true);
            echo "');
                        }
                        break;
                    case 3:
                        if(saldoLibroUSD !== 0){
                            acumulado = parseFloat('";
            // line 500
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 500), "html", null, true);
            echo "');
                        }
                        break;
                    case 4:
                        if(saldoLibroEUR !== 0){
                            acumulado = parseFloat('";
            // line 505
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 505), "html", null, true);
            echo "');
                        }
                        break;
                    case 5:
                        if(saldoServicioUSD !== 0){
                            acumulado = parseFloat('";
            // line 510
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 510), "html", null, true);
            echo "');
                        }
                        break;
                    case 6:
                        if(saldoServicioEUR !== 0){
                            acumulado = parseFloat('";
            // line 515
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 515), "html", null, true);
            echo "');
                        }
                        break;
                }

            }
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        echo "            \$(\"#modaTitleRetiro\").text(\"INGRESO DE SALDO A \" + usuario.toUpperCase());
            \$('#modalAddIngresoSaldo').modal('show');

        });

        \$(\"#uploadDocumentoRetiro\").on('change', function (e) {
            let fichero = \$(\"#uploadDocumentoRetiro\").val();
            let input = document.getElementById('uploadDocumentoRetiro');
            let file = input.files[0]; //2 000 000
            let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

            if (!allowedExtensions.exec(fichero)) {
                toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                \$(\"#uploadDocumentoRetiro\").val('');
                return false;
            } else if (file.size > 2000000) {
                toastr[\"error\"]('El tamaño del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                \$(\"#uploadDocumentoRetiro\").val('');
                return false;
            } else {
                //aqui subo el fichero y guardo el nombre
                let Ruta = Routing.generate('app_fichero_retiro');
                let form = document.getElementById(\"myformRetiro\");
                siFichero = 1;

                \$(\".preload\").removeClass('hidden');

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"json\",
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    cache: false
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    fichero = data['fichero'];
                });
            }
        });

        \$(\"#uploadDocumentoIngreso\").on('change', function (e) {
            let fichero = \$(\"#uploadDocumentoIngreso\").val();
            let input = document.getElementById('uploadDocumentoIngreso');
            let file = input.files[0]; //2 000 000
            let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

            if (!allowedExtensions.exec(fichero)) {
                toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                \$(\"#uploadDocumentoIngreso\").val('');
                return false;
            } else if (file.size > 2000000) {
                toastr[\"error\"]('El tamaño del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                \$(\"#uploadDocumentoIngreso\").val('');
                return false;
            } else {
                //aqui subo el fichero y guardo el nombre
                let Ruta = Routing.generate('app_fichero_ingreso');
                let form = document.getElementById(\"myformIngreso\");
                siFichero = 1;

                \$(\".preload\").removeClass('hidden');

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"json\",
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    cache: false
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    fichero = data['fichero'];
                });
            }
        });

        \$('#btnAddGuardar').on('click', function () {

            //Validaciones

            if (\$(\"#addRoyaltie\").val() === '' || \$(\"#addRoyaltie\").val() === '0') {
                toastr[\"error\"]('Teclee la cantidad de royaltie a retirar', \"Advertencia\")
                return false;
            }

            if (\$(\"#addMotivo\").val() === '') {
                toastr[\"error\"]('Teclee el motivo', \"Advertencia\")
                return false;
            }

            if (siFichero === 0){
                fichero = '';
            }else{
                fichero = document.getElementById('uploadDocumentoRetiro').files[0].name;
            }

            let Ruta = Routing.generate('app_retiro_saldo_acumulado_new');

            \$('#modalAddRetiroSaldo').modal('hide');

            \$(\".preload\").removeClass('hidden');

            let mat_datos = {
                idUsuario: usuarioId,
                royaltie: parseFloat(\$(\"#addRoyaltie\").val().replace(',','.')),
                tipoSaldo: tipoSaldo,
                motivo: \$(\"#addMotivo\").val(),
                saldoAcumulado: acumulado,
                fichero: fichero
            };

            \$.ajax({
                url: Ruta,
                type: \"post\",
                dataType: \"html\",
                data: mat_datos,
            }).done(function (data) {
                \$(\".preload\").addClass('hidden');
                if (data === 'ok') {
                    limpiarModalRetiro();
                    toastr[\"success\"]('Retiro de saldo registrado', \"Notificación\")
                    window.location.href = \"";
        // line 646
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_retiros_saldos_acumulados");
        echo "\";
                } else {
                    toastr[\"error\"](data, \"Notificación\")
                }
            });
        });

        \$('#btnAddGuardarIngreso').on('click', function () {

            //Validaciones

            if (\$(\"#addRoyaltieIngreso\").val() === '' || \$(\"#addRoyaltieIngreso\").val() === '0') {
                toastr[\"error\"]('Teclee la cantidad de royaltie a ingresar', \"Advertencia\")
                return false;
            }

            if (\$(\"#addMotivoIngreso\").val() === '') {
                toastr[\"error\"]('Teclee el motivo', \"Advertencia\")
                return false;
            }

            if (siFichero === 0){
                fichero = '';
            }else{
                fichero = document.getElementById('uploadDocumentoIngreso').files[0].name;
            }

            let Ruta = Routing.generate('app_ingreso_saldo_acumulado_new');

            \$('#modalAddIngresoSaldo').modal('hide');

            \$(\".preload\").removeClass('hidden');

            let mat_datos = {
                idUsuario: usuarioId,
                royaltie: parseFloat(\$(\"#addRoyaltieIngreso\").val().replace(',','.')),
                tipoSaldo: tipoSaldo,
                motivo: \$(\"#addMotivoIngreso\").val(),
                saldoAcumulado: acumulado,
                fichero: fichero
            };

            \$.ajax({
                url: Ruta,
                type: \"post\",
                dataType: \"html\",
                data: mat_datos,
            }).done(function (data) {
                \$(\".preload\").addClass('hidden');
                if (data === 'ok') {
                    limpiarModalIngreso();
                    toastr[\"success\"]('Ingreso de saldo registrado', \"Notificación\")
                    window.location.href = \"";
        // line 698
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_retiros_saldos_acumulados");
        echo "\";
                } else {
                    toastr[\"error\"](data, \"Notificación\")
                }
            });
        });

        function limpiarModalIngreso()
        {
            \$('#modalAddIngresoSaldo input').each(function () {
                \$(this).val('');
            });

            \$('#modalAddIngresoSaldo textarea').each(function () {
                \$(this).val('');
            });
        }

        function limpiarModalRetiro()
        {
            \$('#modalAddRetiroSaldo input').each(function () {
                \$(this).val('');
            });

            \$('#modalAddRetiroSaldo textarea').each(function () {
                \$(this).val('');
            });
        }

    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "retiros_saldos_acumulados/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1014 => 698,  959 => 646,  833 => 522,  820 => 515,  812 => 510,  804 => 505,  796 => 500,  788 => 495,  780 => 490,  773 => 486,  769 => 485,  765 => 484,  761 => 483,  757 => 482,  753 => 481,  747 => 479,  743 => 478,  730 => 467,  717 => 460,  709 => 455,  701 => 450,  693 => 445,  685 => 440,  677 => 435,  670 => 431,  666 => 430,  662 => 429,  658 => 428,  654 => 427,  650 => 426,  644 => 424,  640 => 423,  457 => 242,  454 => 241,  448 => 239,  445 => 238,  443 => 237,  422 => 218,  409 => 207,  407 => 206,  396 => 198,  392 => 197,  387 => 195,  383 => 194,  379 => 193,  375 => 192,  369 => 190,  362 => 189,  349 => 182,  345 => 181,  339 => 178,  333 => 175,  327 => 172,  321 => 169,  315 => 166,  309 => 163,  306 => 162,  304 => 161,  295 => 154,  290 => 151,  279 => 143,  266 => 132,  264 => 131,  261 => 130,  250 => 122,  237 => 111,  235 => 110,  232 => 109,  221 => 101,  208 => 90,  206 => 89,  203 => 88,  192 => 80,  179 => 69,  177 => 68,  174 => 67,  163 => 59,  150 => 48,  148 => 47,  145 => 46,  134 => 38,  123 => 29,  121 => 28,  118 => 27,  116 => 26,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Distribución de Royalties{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
{% endblock %}

{% block page %}
    <div class=\"preload hidden\">
        <div class=\"logo\"></div>
        <div class=\"loader-frame\">
            <div class=\"loader1\" id=\"loader1\"></div>
            <div class=\"loader2\" id=\"loader2\"></div>
        </div>
    </div>
    <!-- Header -->
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"row\">
                        {% if bolsaGeneralDolar != 0 %}
                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" type=\"button\" id=\"addGeneralUSD\" data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-info\"><i class=\"fa fa-dollar-sign\"></i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Generales</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> {{ bolsaGeneralDolar|number_format(2, '.', ',') }}</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        <!-- /.col -->
                        {% if bolsaGeneralEuros != 0 %}
                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" id=\"addGeneralEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-info\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Generales</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> {{ bolsaGeneralEuros|number_format(2, '.', ',') }}</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        <!-- /.col -->
                        {% if bolsaLibroDolar != 0 %}
                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" id=\"addLibroUSD\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-dollar-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Libros</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> {{ bolsaLibroDolar|number_format(2, '.', ',') }}</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        <!-- /.col -->
                        {% if bolsaLibroEuros != 0 %}
                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" id=\"addLibroEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Libros</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> {{ bolsaLibroEuros|number_format(2, '.', ',') }}</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        <!-- /.col -->
                        {% if bolsaServicioDolar != 0 %}
                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" id=\"addServicioUSD\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-dollar-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Servicios</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Dólares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> {{ bolsaServicioDolar|number_format(2, '.', ',') }}</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        <!-- /.col -->
                        {% if bolsaServicioEuros != 0 %}
                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" id=\"addServicioEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar distribución por usuarios\">
                                    <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Servicios</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> {{ bolsaServicioEuros|number_format(2, '.', ',') }}</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        <!-- /.col -->
                    </div>
                {% endif %}
                <div class=\"card\" id=\"tarjeta\" style=\"display: none\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3 id=\"nameListado\">Distribución del saldo por usuarios</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        {% import 'macros/tablas.html.twig' as tabla %}
                        <div class=\"row\" id=\"tablaGeneralUSD\" style=\"display: none\">
                            {{ tabla.tabla_retiro_pagos(acumulados,'saldoGeneralUSD') }}
                        </div>
                        <div class=\"row\" id=\"tablaGeneralEUR\" style=\"display: none\">
                            {{ tabla.tabla_retiro_pagos(acumulados,'saldoGeneralEUR') }}
                        </div>
                        <div class=\"row\" id=\"tablaLibroUSD\" style=\"display: none\">
                            {{ tabla.tabla_retiro_pagos(acumulados,'saldoLibroUSD') }}
                        </div>
                        <div class=\"row\" id=\"tablaLibroEUR\" style=\"display: none\">
                            {{ tabla.tabla_retiro_pagos(acumulados,'saldoLibroEUR') }}
                        </div>
                        <div class=\"row\" id=\"tablaServicioUSD\" style=\"display: none\">
                            {{ tabla.tabla_retiro_pagos(acumulados,'saldoServicioUSD') }}
                        </div>
                        <div class=\"row\" id=\"tablaServicioEUR\" style=\"display: none\">
                            {{ tabla.tabla_retiro_pagos(acumulados,'saldoServicioEUR') }}
                        </div>
                    </div>
                    {{ include('retiros_saldos_acumulados/modalAddRetiroSaldo.html.twig') }}
                    {{ include('retiros_saldos_acumulados/modalAddIngresoSaldo.html.twig') }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

 {% block javascripts %}
     {{ parent() }}
<!-- DataTables -->
<script src=\"{{ asset('plugins/datatables/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}\"></script>
<script src=\"{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}\"></script>
<script src=\"{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}\"></script>
<!-- Acceso a Rutas del Controller -->
<script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
<script>
    \$(document).ready(function () {

        //Declaracion de variables
        let tipoSaldo = 0;
        let moneda = '';

        {% if acumulados|length > 0 %}
                let table = \$('table.display').DataTable({
                    \"paging\": true,
                    \"lengthChange\": false,
                    \"searching\": true,
                    \"lengthMenu\": [[6], [6]],
                    \"ordering\": true,
                    \"info\": true,
                    \"autoWidth\": false,
                    \"responsive\": true,
                });
        {% endif %}

        toastr.options = {
            \"closeButton\": false,
            \"debug\": false,
            \"newestOnTop\": false,
            \"progressBar\": true,
            \"positionClass\": \"toast-top-right\",
            \"preventDuplicates\": true,
            \"onclick\": null,
            \"showDuration\": \"300\",
            \"hideDuration\": \"1000\",
            \"timeOut\": \"5000\",
            \"extendedTimeOut\": \"1000\",
            \"showEasing\": \"swing\",
            \"hideEasing\": \"linear\",
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        }

        {% if mensaje is not null %}
        {% if mensaje != 0 %}
        toastr[\"error\"]('{{ mensaje }}', \"Notificación\")
        {% endif %}
        {% endif %}

        \$('#addRoyaltie').keypress(function (tecla) {
            if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                return false;
            } else {
                let len = \$('#addRoyaltie').val().length;
                let indexPunto = \$('#addRoyaltie').val().indexOf('.');
                let indexComa = \$('#addRoyaltie').val().indexOf(',');

                if (tecla.charCode === 44) {
                    if (len === 0 && tecla.charCode === 44) {
                        return false;
                    }
                    if (indexComa > 0 && tecla.charCode === 44) {
                        return false;
                    }
                    if (indexPunto !== -1) {
                        return false;
                    }
                }else if (tecla.charCode === 46) {
                    if (len === 0 && tecla.charCode === 46) {
                        return false;
                    }
                    if (indexPunto > 0 && tecla.charCode === 46) {
                        return false;
                    }
                    if (indexComa !== -1) {
                        return false;
                    }
                }
                if (indexPunto > 0) {
                    let CharAfterdot = (len + 1) - indexPunto;
                    if (CharAfterdot > 3) {
                        return false;
                    }
                }else if (indexComa > 0) {
                    let CharAfterdot = (len + 1) - indexComa;
                    if (CharAfterdot > 3) {
                        return false;
                    }
                }
            }
            return true;
        });

        \$('#addRoyaltieIngreso').keypress(function (tecla) {
            if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                return false;
            } else {
                let len = \$('#addRoyaltieIngreso').val().length;
                let indexPunto = \$('#addRoyaltieIngreso').val().indexOf('.');
                let indexComa = \$('#addRoyaltieIngreso').val().indexOf(',');

                if (tecla.charCode === 44) {
                    if (len === 0 && tecla.charCode === 44) {
                        return false;
                    }
                    if (indexComa > 0 && tecla.charCode === 44) {
                        return false;
                    }
                    if (indexPunto !== -1) {
                        return false;
                    }
                }else if (tecla.charCode === 46) {
                    if (len === 0 && tecla.charCode === 46) {
                        return false;
                    }
                    if (indexPunto > 0 && tecla.charCode === 46) {
                        return false;
                    }
                    if (indexComa !== -1) {
                        return false;
                    }
                }
                if (indexPunto > 0) {
                    let CharAfterdot = (len + 1) - indexPunto;
                    if (CharAfterdot > 3) {
                        return false;
                    }
                }else if (indexComa > 0) {
                    let CharAfterdot = (len + 1) - indexComa;
                    if (CharAfterdot > 3) {
                        return false;
                    }
                }
            }
            return true;
        });

        \$('#addGeneralUSD').on('click', function () {
            tipoSaldo = 1;
            moneda = 'USD';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de productos generales en dólares\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"none\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"none\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"none\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"none\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"block\");
        });

        \$('#addGeneralEUR').on('click', function () {
            tipoSaldo = 2;
            moneda = 'EUR';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de productos generales en euros\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"none\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"none\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"none\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"none\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"block\");
        });

        \$('#addLibroUSD').on('click', function () {
            tipoSaldo = 3;
            moneda = 'USD';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de libros en dólares\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"none\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"none\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"none\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"none\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"block\");
        });

        \$('#addLibroEUR').on('click', function () {
            tipoSaldo = 4;
            moneda = 'EUR';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de libros en euros\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"none\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"none\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"none\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"none\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"block\");
        });

        \$('#addServicioUSD').on('click', function () {
            tipoSaldo = 5;
            moneda = 'USD';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de servicios en dólares\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"none\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"none\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"none\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"none\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"block\");
        });

        \$('#addServicioEUR').on('click', function () {
            tipoSaldo = 6;
            moneda = 'EUR';
            \$(\"#nameListado\").text(\"Distribución del saldo por usuarios de servicios en euros\");
            \$(\"#tablaGeneralUSD\").css(\"display\", \"none\");
            \$(\"#tablaGeneralEUR\").css(\"display\", \"none\");
            \$(\"#tablaLibroUSD\").css(\"display\", \"none\");
            \$(\"#tablaLibroEUR\").css(\"display\", \"none\");
            \$(\"#tablaServicioUSD\").css(\"display\", \"none\");
            \$(\"#tarjeta\").css(\"display\", \"block\");
            \$(\"#tablaServicioEUR\").css(\"display\", \"block\");
        });

        let usuarioId;
        let usuario;
        let acumulado;
        let id;
        let saldoGeneralUSD, saldoGeneralEUR, saldoLibroUSD, saldoLibroEUR, saldoServicioUSD, saldoServicioEUR;
        let fichero;
        let siFichero = 0;

        \$('table.display tbody').on('click', '.retirar', function () {
            let row = \$(this).parents('tr');
            let fila = table.row(row).data();
            usuarioId = parseInt(row.data('id'));
            usuario = fila[0];
            {% for venta in acumulados %}
                id = parseInt('{{ venta.id }}');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('{{ venta.saldoGeneralUSD }}');
                    saldoGeneralEUR = parseFloat('{{ venta.saldoGeneralEUR }}');
                    saldoLibroUSD = parseFloat('{{ venta.saldoLibroUSD }}');
                    saldoLibroEUR = parseFloat('{{ venta.saldoLibroEUR }}');
                    saldoServicioUSD = parseFloat('{{ venta.saldoServicioUSD }}');
                    saldoServicioEUR = parseFloat('{{ venta.saldoServicioEUR }}');
                    switch (tipoSaldo) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('{{ venta.saldoGeneralUSD }}');
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('{{ venta.saldoGeneralEUR }}');
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('{{ venta.saldoLibroUSD }}');
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('{{ venta.saldoLibroEUR }}');
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('{{ venta.saldoServicioUSD }}');
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('{{ venta.saldoServicioEUR }}');
                            }
                            break;
                    }

                }
            {% endfor %}
            \$(\"#modaTitleRetiro\").text(\"RETIRO DE SALDO A \" + usuario.toUpperCase());
            \$(\"#labelAddRoyaltie\").text(\"Royalties a retirar: \" + acumulado + ' ' + moneda);
            \$('#modalAddRetiroSaldo').modal('show');

        });

        \$('table.display tbody').on('click', '.ingresar', function () {
            let row = \$(this).parents('tr');
            let fila = table.row(row).data();
            usuarioId = parseInt(row.data('id'));
            usuario = fila[0];
            {% for venta in acumulados %}
            id = parseInt('{{ venta.id }}');
            if (id === usuarioId) {
                saldoGeneralUSD = parseFloat('{{ venta.saldoGeneralUSD }}');
                saldoGeneralEUR = parseFloat('{{ venta.saldoGeneralEUR }}');
                saldoLibroUSD = parseFloat('{{ venta.saldoLibroUSD }}');
                saldoLibroEUR = parseFloat('{{ venta.saldoLibroEUR }}');
                saldoServicioUSD = parseFloat('{{ venta.saldoServicioUSD }}');
                saldoServicioEUR = parseFloat('{{ venta.saldoServicioEUR }}');
                switch (tipoSaldo) {
                    case 1:
                        if(saldoGeneralUSD !== 0){
                            acumulado = parseFloat('{{ venta.saldoGeneralUSD }}');
                        }
                        break;
                    case 2:
                        if(saldoGeneralEUR !== 0){
                            acumulado = parseFloat('{{ venta.saldoGeneralEUR }}');
                        }
                        break;
                    case 3:
                        if(saldoLibroUSD !== 0){
                            acumulado = parseFloat('{{ venta.saldoLibroUSD }}');
                        }
                        break;
                    case 4:
                        if(saldoLibroEUR !== 0){
                            acumulado = parseFloat('{{ venta.saldoLibroEUR }}');
                        }
                        break;
                    case 5:
                        if(saldoServicioUSD !== 0){
                            acumulado = parseFloat('{{ venta.saldoServicioUSD }}');
                        }
                        break;
                    case 6:
                        if(saldoServicioEUR !== 0){
                            acumulado = parseFloat('{{ venta.saldoServicioEUR }}');
                        }
                        break;
                }

            }
            {% endfor %}
            \$(\"#modaTitleRetiro\").text(\"INGRESO DE SALDO A \" + usuario.toUpperCase());
            \$('#modalAddIngresoSaldo').modal('show');

        });

        \$(\"#uploadDocumentoRetiro\").on('change', function (e) {
            let fichero = \$(\"#uploadDocumentoRetiro\").val();
            let input = document.getElementById('uploadDocumentoRetiro');
            let file = input.files[0]; //2 000 000
            let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

            if (!allowedExtensions.exec(fichero)) {
                toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                \$(\"#uploadDocumentoRetiro\").val('');
                return false;
            } else if (file.size > 2000000) {
                toastr[\"error\"]('El tamaño del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                \$(\"#uploadDocumentoRetiro\").val('');
                return false;
            } else {
                //aqui subo el fichero y guardo el nombre
                let Ruta = Routing.generate('app_fichero_retiro');
                let form = document.getElementById(\"myformRetiro\");
                siFichero = 1;

                \$(\".preload\").removeClass('hidden');

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"json\",
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    cache: false
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    fichero = data['fichero'];
                });
            }
        });

        \$(\"#uploadDocumentoIngreso\").on('change', function (e) {
            let fichero = \$(\"#uploadDocumentoIngreso\").val();
            let input = document.getElementById('uploadDocumentoIngreso');
            let file = input.files[0]; //2 000 000
            let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

            if (!allowedExtensions.exec(fichero)) {
                toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                \$(\"#uploadDocumentoIngreso\").val('');
                return false;
            } else if (file.size > 2000000) {
                toastr[\"error\"]('El tamaño del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                \$(\"#uploadDocumentoIngreso\").val('');
                return false;
            } else {
                //aqui subo el fichero y guardo el nombre
                let Ruta = Routing.generate('app_fichero_ingreso');
                let form = document.getElementById(\"myformIngreso\");
                siFichero = 1;

                \$(\".preload\").removeClass('hidden');

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"json\",
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    cache: false
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    fichero = data['fichero'];
                });
            }
        });

        \$('#btnAddGuardar').on('click', function () {

            //Validaciones

            if (\$(\"#addRoyaltie\").val() === '' || \$(\"#addRoyaltie\").val() === '0') {
                toastr[\"error\"]('Teclee la cantidad de royaltie a retirar', \"Advertencia\")
                return false;
            }

            if (\$(\"#addMotivo\").val() === '') {
                toastr[\"error\"]('Teclee el motivo', \"Advertencia\")
                return false;
            }

            if (siFichero === 0){
                fichero = '';
            }else{
                fichero = document.getElementById('uploadDocumentoRetiro').files[0].name;
            }

            let Ruta = Routing.generate('app_retiro_saldo_acumulado_new');

            \$('#modalAddRetiroSaldo').modal('hide');

            \$(\".preload\").removeClass('hidden');

            let mat_datos = {
                idUsuario: usuarioId,
                royaltie: parseFloat(\$(\"#addRoyaltie\").val().replace(',','.')),
                tipoSaldo: tipoSaldo,
                motivo: \$(\"#addMotivo\").val(),
                saldoAcumulado: acumulado,
                fichero: fichero
            };

            \$.ajax({
                url: Ruta,
                type: \"post\",
                dataType: \"html\",
                data: mat_datos,
            }).done(function (data) {
                \$(\".preload\").addClass('hidden');
                if (data === 'ok') {
                    limpiarModalRetiro();
                    toastr[\"success\"]('Retiro de saldo registrado', \"Notificación\")
                    window.location.href = \"{{ path('app_retiros_saldos_acumulados') }}\";
                } else {
                    toastr[\"error\"](data, \"Notificación\")
                }
            });
        });

        \$('#btnAddGuardarIngreso').on('click', function () {

            //Validaciones

            if (\$(\"#addRoyaltieIngreso\").val() === '' || \$(\"#addRoyaltieIngreso\").val() === '0') {
                toastr[\"error\"]('Teclee la cantidad de royaltie a ingresar', \"Advertencia\")
                return false;
            }

            if (\$(\"#addMotivoIngreso\").val() === '') {
                toastr[\"error\"]('Teclee el motivo', \"Advertencia\")
                return false;
            }

            if (siFichero === 0){
                fichero = '';
            }else{
                fichero = document.getElementById('uploadDocumentoIngreso').files[0].name;
            }

            let Ruta = Routing.generate('app_ingreso_saldo_acumulado_new');

            \$('#modalAddIngresoSaldo').modal('hide');

            \$(\".preload\").removeClass('hidden');

            let mat_datos = {
                idUsuario: usuarioId,
                royaltie: parseFloat(\$(\"#addRoyaltieIngreso\").val().replace(',','.')),
                tipoSaldo: tipoSaldo,
                motivo: \$(\"#addMotivoIngreso\").val(),
                saldoAcumulado: acumulado,
                fichero: fichero
            };

            \$.ajax({
                url: Ruta,
                type: \"post\",
                dataType: \"html\",
                data: mat_datos,
            }).done(function (data) {
                \$(\".preload\").addClass('hidden');
                if (data === 'ok') {
                    limpiarModalIngreso();
                    toastr[\"success\"]('Ingreso de saldo registrado', \"Notificación\")
                    window.location.href = \"{{ path('app_retiros_saldos_acumulados') }}\";
                } else {
                    toastr[\"error\"](data, \"Notificación\")
                }
            });
        });

        function limpiarModalIngreso()
        {
            \$('#modalAddIngresoSaldo input').each(function () {
                \$(this).val('');
            });

            \$('#modalAddIngresoSaldo textarea').each(function () {
                \$(this).val('');
            });
        }

        function limpiarModalRetiro()
        {
            \$('#modalAddRetiroSaldo input').each(function () {
                \$(this).val('');
            });

            \$('#modalAddRetiroSaldo textarea').each(function () {
                \$(this).val('');
            });
        }

    });
</script>
{% endblock %}
", "retiros_saldos_acumulados/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\retiros_saldos_acumulados\\index.html.twig");
    }
}
