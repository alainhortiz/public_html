<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* retiros_saldos_acumulados/index.html.twig */
class __TwigTemplate_2a6d782dd17c5e5eacbd759eaf00a9ca extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Distribución de Royalties";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        yield "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 12
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 13
        yield "    <div class=\"preload hidden\">
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
            yield "                    <div class=\"row\">
                        ";
            // line 28
            if (((isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 28, $this->source); })()) != 0)) {
                // line 29
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 38, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 46
            yield "                        <!-- /.col -->
                        ";
            // line 47
            if (((isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 47, $this->source); })()) != 0)) {
                // line 48
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 59, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 67
            yield "                        <!-- /.col -->
                        ";
            // line 68
            if (((isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 68, $this->source); })()) != 0)) {
                // line 69
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 80, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 88
            yield "                        <!-- /.col -->
                        ";
            // line 89
            if (((isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 89, $this->source); })()) != 0)) {
                // line 90
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 101, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 109
            yield "                        <!-- /.col -->
                        ";
            // line 110
            if (((isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 110, $this->source); })()) != 0)) {
                // line 111
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 122, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 130
            yield "                        <!-- /.col -->
                        ";
            // line 131
            if (((isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 131, $this->source); })()) != 0)) {
                // line 132
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 143, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                        <i class=\"fa fa-eye text-right\"></i>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 151
            yield "                        <!-- /.col -->
                    </div>
                ";
        }
        // line 154
        yield "                <div class=\"card\" id=\"tarjeta\" style=\"display: none\">
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
        yield "                        <div class=\"row\" id=\"tablaGeneralUSD\" style=\"display: none\">
                            ";
        // line 163
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 163, $this->source); })()), "saldoGeneralUSD"], 163, $context, $this->getSourceContext());
        yield "
                        </div>
                        <div class=\"row\" id=\"tablaGeneralEUR\" style=\"display: none\">
                            ";
        // line 166
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 166, $this->source); })()), "saldoGeneralEUR"], 166, $context, $this->getSourceContext());
        yield "
                        </div>
                        <div class=\"row\" id=\"tablaLibroUSD\" style=\"display: none\">
                            ";
        // line 169
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 169, $this->source); })()), "saldoLibroUSD"], 169, $context, $this->getSourceContext());
        yield "
                        </div>
                        <div class=\"row\" id=\"tablaLibroEUR\" style=\"display: none\">
                            ";
        // line 172
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 172, $this->source); })()), "saldoLibroEUR"], 172, $context, $this->getSourceContext());
        yield "
                        </div>
                        <div class=\"row\" id=\"tablaServicioUSD\" style=\"display: none\">
                            ";
        // line 175
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 175, $this->source); })()), "saldoServicioUSD"], 175, $context, $this->getSourceContext());
        yield "
                        </div>
                        <div class=\"row\" id=\"tablaServicioEUR\" style=\"display: none\">
                            ";
        // line 178
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_retiro_pagos", [(isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 178, $this->source); })()), "saldoServicioEUR"], 178, $context, $this->getSourceContext());
        yield "
                        </div>
                    </div>
                    ";
        // line 181
        yield Twig\Extension\CoreExtension::include($this->env, $context, "retiros_saldos_acumulados/modalAddRetiroSaldo.html.twig");
        yield "
                    ";
        // line 182
        yield Twig\Extension\CoreExtension::include($this->env, $context, "retiros_saldos_acumulados/modalAddIngresoSaldo.html.twig");
        yield "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 189
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 190
        yield "     ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<!-- DataTables -->
<script src=\"";
        // line 192
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 193
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 194
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 195
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
<!-- Acceso a Rutas del Controller -->
<script src=\"";
        // line 197
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
<script>
    \$(document).ready(function () {

        //Declaracion de variables
        let tipoSaldo = 0;
        let moneda = '';

        ";
        // line 206
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 206, $this->source); })())) > 0)) {
            // line 207
            yield "                let table = \$('table.display').DataTable({
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
        yield "
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
            yield "        ";
            if (((isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 238, $this->source); })()) != 0)) {
                // line 239
                yield "        toastr[\"error\"]('";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 239, $this->source); })()), "html", null, true);
                yield "', \"Notificación\")
        ";
            }
            // line 241
            yield "        ";
        }
        // line 242
        yield "
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 423, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
            // line 424
            yield "                id = parseInt('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 424), "html", null, true);
            yield "');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('";
            // line 426
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 426), "html", null, true);
            yield "');
                    saldoGeneralEUR = parseFloat('";
            // line 427
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 427), "html", null, true);
            yield "');
                    saldoLibroUSD = parseFloat('";
            // line 428
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 428), "html", null, true);
            yield "');
                    saldoLibroEUR = parseFloat('";
            // line 429
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 429), "html", null, true);
            yield "');
                    saldoServicioUSD = parseFloat('";
            // line 430
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 430), "html", null, true);
            yield "');
                    saldoServicioEUR = parseFloat('";
            // line 431
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 431), "html", null, true);
            yield "');
                    switch (tipoSaldo) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('";
            // line 435
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 435), "html", null, true);
            yield "');
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('";
            // line 440
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 440), "html", null, true);
            yield "');
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('";
            // line 445
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 445), "html", null, true);
            yield "');
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('";
            // line 450
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 450), "html", null, true);
            yield "');
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('";
            // line 455
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 455), "html", null, true);
            yield "');
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('";
            // line 460
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 460), "html", null, true);
            yield "');
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
        yield "            \$(\"#modaTitleRetiro\").text(\"RETIRO DE SALDO A \" + usuario.toUpperCase());
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["acumulados"]) || array_key_exists("acumulados", $context) ? $context["acumulados"] : (function () { throw new RuntimeError('Variable "acumulados" does not exist.', 478, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
            // line 479
            yield "            id = parseInt('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 479), "html", null, true);
            yield "');
            if (id === usuarioId) {
                saldoGeneralUSD = parseFloat('";
            // line 481
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 481), "html", null, true);
            yield "');
                saldoGeneralEUR = parseFloat('";
            // line 482
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 482), "html", null, true);
            yield "');
                saldoLibroUSD = parseFloat('";
            // line 483
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 483), "html", null, true);
            yield "');
                saldoLibroEUR = parseFloat('";
            // line 484
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 484), "html", null, true);
            yield "');
                saldoServicioUSD = parseFloat('";
            // line 485
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 485), "html", null, true);
            yield "');
                saldoServicioEUR = parseFloat('";
            // line 486
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 486), "html", null, true);
            yield "');
                switch (tipoSaldo) {
                    case 1:
                        if(saldoGeneralUSD !== 0){
                            acumulado = parseFloat('";
            // line 490
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 490), "html", null, true);
            yield "');
                        }
                        break;
                    case 2:
                        if(saldoGeneralEUR !== 0){
                            acumulado = parseFloat('";
            // line 495
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 495), "html", null, true);
            yield "');
                        }
                        break;
                    case 3:
                        if(saldoLibroUSD !== 0){
                            acumulado = parseFloat('";
            // line 500
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 500), "html", null, true);
            yield "');
                        }
                        break;
                    case 4:
                        if(saldoLibroEUR !== 0){
                            acumulado = parseFloat('";
            // line 505
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 505), "html", null, true);
            yield "');
                        }
                        break;
                    case 5:
                        if(saldoServicioUSD !== 0){
                            acumulado = parseFloat('";
            // line 510
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 510), "html", null, true);
            yield "');
                        }
                        break;
                    case 6:
                        if(saldoServicioEUR !== 0){
                            acumulado = parseFloat('";
            // line 515
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 515), "html", null, true);
            yield "');
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
        yield "            \$(\"#modaTitleRetiro\").text(\"INGRESO DE SALDO A \" + usuario.toUpperCase());
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_retiros_saldos_acumulados");
        yield "\";
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_retiros_saldos_acumulados");
        yield "\";
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "retiros_saldos_acumulados/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1018 => 698,  963 => 646,  837 => 522,  824 => 515,  816 => 510,  808 => 505,  800 => 500,  792 => 495,  784 => 490,  777 => 486,  773 => 485,  769 => 484,  765 => 483,  761 => 482,  757 => 481,  751 => 479,  747 => 478,  734 => 467,  721 => 460,  713 => 455,  705 => 450,  697 => 445,  689 => 440,  681 => 435,  674 => 431,  670 => 430,  666 => 429,  662 => 428,  658 => 427,  654 => 426,  648 => 424,  644 => 423,  461 => 242,  458 => 241,  452 => 239,  449 => 238,  447 => 237,  426 => 218,  413 => 207,  411 => 206,  400 => 198,  396 => 197,  391 => 195,  387 => 194,  383 => 193,  379 => 192,  373 => 190,  366 => 189,  352 => 182,  348 => 181,  342 => 178,  336 => 175,  330 => 172,  324 => 169,  318 => 166,  312 => 163,  309 => 162,  307 => 161,  298 => 154,  293 => 151,  282 => 143,  269 => 132,  267 => 131,  264 => 130,  253 => 122,  240 => 111,  238 => 110,  235 => 109,  224 => 101,  211 => 90,  209 => 89,  206 => 88,  195 => 80,  182 => 69,  180 => 68,  177 => 67,  166 => 59,  153 => 48,  151 => 47,  148 => 46,  137 => 38,  126 => 29,  124 => 28,  121 => 27,  119 => 26,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
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
