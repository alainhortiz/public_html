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

/* solicitar_pago_royal_acumulado/index.html.twig */
class __TwigTemplate_8e4e12b071305cba43f1f3fa3ea9d105 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_pago_royal_acumulado/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "solicitar_pago_royal_acumulado/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pago Royal Acumulado";
        
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
                <div class=\"row\">
                    ";
        // line 27
        if (((isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 27, $this->source); })()) != 0)) {
            // line 28
            echo "                        <div class=\"col-12 col-sm-4 col-md-4\">
                            <div class=\"info-box\" type=\"button\" id=\"addGeneralUSD\" data-toggle=\"tooltip\"
                                 data-placement=\"top\"
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-info\"><i class=\"fa fa-dollar-sign\"></i></span>
                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Productos Generales</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-dollar-sign\"></i> ";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 37, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                    ";
            // line 38
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 39
                echo "                                        <i class=\"fa fa-eye text-right\"></i>
                                    ";
            } else {
                // line 41
                echo "                                        <i class=\"fa fa-plus text-right\"></i>
                                    ";
            }
            // line 43
            echo "                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    ";
        }
        // line 49
        echo "                    <!-- /.col -->
                    ";
        // line 50
        if (((isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 50, $this->source); })()) != 0)) {
            // line 51
            echo "                        <div class=\"col-12 col-sm-4 col-md-4\">
                            <div class=\"info-box\" id=\"addGeneralEUR\" type=\"button\"
                                 data-toggle=\"tooltip\"
                                 data-placement=\"top\"
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-info\"><i class=\"fa fa-euro-sign\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Productos Generales</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-euro-sign\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 62, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                    ";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 64
                echo "                                        <i class=\"fa fa-eye text-right\"></i>
                                    ";
            } else {
                // line 66
                echo "                                        <i class=\"fa fa-plus text-right\"></i>
                                    ";
            }
            // line 68
            echo "                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    ";
        }
        // line 74
        echo "                    <!-- /.col -->
                    ";
        // line 75
        if (((isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 75, $this->source); })()) != 0)) {
            // line 76
            echo "                        <div class=\"col-12 col-sm-4 col-md-4\">
                            <div class=\"info-box\" id=\"addLibroUSD\" type=\"button\"
                                 data-toggle=\"tooltip\"
                                 data-placement=\"top\"
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-dollar-sign\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Libros</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-dollar-sign\"></i> ";
            // line 87
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 87, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                    ";
            // line 88
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 89
                echo "                                        <i class=\"fa fa-eye text-right\"></i>
                                    ";
            } else {
                // line 91
                echo "                                        <i class=\"fa fa-plus text-right\"></i>
                                    ";
            }
            // line 93
            echo "                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    ";
        }
        // line 99
        echo "                    <!-- /.col -->
                    ";
        // line 100
        if (((isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 100, $this->source); })()) != 0)) {
            // line 101
            echo "                        <div class=\"col-12 col-sm-4 col-md-4\">
                            <div class=\"info-box\" id=\"addLibroEUR\"
                                 data-toggle=\"tooltip\" type=\"button\"
                                 data-placement=\"top\"
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-euro-sign\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Productos Libros</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-euro-sign\"></i> ";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 112, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                    ";
            // line 113
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 114
                echo "                                        <i class=\"fa fa-eye text-right\"></i>
                                    ";
            } else {
                // line 116
                echo "                                        <i class=\"fa fa-plus text-right\"></i>
                                    ";
            }
            // line 118
            echo "                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    ";
        }
        // line 124
        echo "                    <!-- /.col  -->
                    ";
        // line 125
        if (((isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 125, $this->source); })()) != 0)) {
            // line 126
            echo "                        <div class=\"col-12 col-sm-4 col-md-4\">
                            <div class=\"info-box\" id=\"addServicioUSD\" type=\"button\"
                                 data-toggle=\"tooltip\"
                                 data-placement=\"top\"
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-dollar-sign\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Servicios</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-dollar-sign\"></i> ";
            // line 137
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 137, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                    ";
            // line 138
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 139
                echo "                                        <i class=\"fa fa-eye text-right\"></i>
                                    ";
            } else {
                // line 141
                echo "                                        <i class=\"fa fa-plus text-right\"></i>
                                    ";
            }
            // line 143
            echo "                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    ";
        }
        // line 149
        echo "                    <!-- /.col -->
                    ";
        // line 150
        if (((isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 150, $this->source); })()) != 0)) {
            // line 151
            echo "                        <div class=\"col-12 col-sm-4 col-md-4\">
                            <div class=\"info-box\" id=\"addServicioEUR\" type=\"button\"
                                 data-toggle=\"tooltip\"
                                 data-placement=\"top\"
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-euro-sign\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Servicios</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-euro-sign\"></i> ";
            // line 162
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 162, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                    ";
            // line 163
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 164
                echo "                                        <i class=\"fa fa-eye text-right\"></i>
                                    ";
            } else {
                // line 166
                echo "                                        <i class=\"fa fa-plus text-right\"></i>
                                    ";
            }
            // line 168
            echo "                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    ";
        }
        // line 174
        echo "                    <!-- /.col -->
                </div>
                <div class=\"card\" id=\"listadoSolicitud\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3 id=\"nameListado\">Listado de pagos solicitados hasta la fecha</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-4 col-12 float-right\" style=\"margin-top: 5px\">
                                <button id=\"btnListarSolicitud\" type=\"button\" class=\"btn btn-block bg-gradient-success\">
                                    <i
                                            class=\"fa fa-tasks\"></i> Solicitudes de pagos
                                </button>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-12 float-right\" style=\"margin-top: 5px\">
                                <button id=\"btnListarPagosRealizados\" type=\"button\"
                                        class=\"btn btn-block bg-gradient-gray\"><i
                                            class=\"fa fa-tasks\"></i> Registro de pagos realizados
                                </button>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-12 float-right\" style=\"margin-top: 5px\">
                                <button id=\"btnListarPagosRechazados\" type=\"button\"
                                        class=\"btn btn-block bg-gradient-gray\"><i
                                            class=\"fa fa-tasks\"></i> Registro de pagos rechazados
                                </button>
                            </div>
                        </div>
                        ";
        // line 204
        $macros["tabla"] = $this->loadTemplate("macros/tablas.html.twig", "solicitar_pago_royal_acumulado/index.html.twig", 204)->unwrap();
        // line 205
        echo "                        <div class=\"row\" id=\"tablaSolicitud\" style=\"display: block\">
                            ";
        // line 206
        echo twig_call_macro($macros["tabla"], "macro_tabla_solicitud_pagos", [(isset($context["solicitar_pago_royal_acumulados"]) || array_key_exists("solicitar_pago_royal_acumulados", $context) ? $context["solicitar_pago_royal_acumulados"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulados" does not exist.', 206, $this->source); })()), 0, "solicitud"], 206, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"row\" id=\"tablaPagos\" style=\"display: none\">
                            ";
        // line 209
        echo twig_call_macro($macros["tabla"], "macro_tabla_solicitud_pagos", [(isset($context["solicitar_pago_royal_acumulados"]) || array_key_exists("solicitar_pago_royal_acumulados", $context) ? $context["solicitar_pago_royal_acumulados"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulados" does not exist.', 209, $this->source); })()), 1, "pagados"], 209, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"row\" id=\"tablaRechazados\" style=\"display: none\">
                            ";
        // line 212
        echo twig_call_macro($macros["tabla"], "macro_tabla_solicitud_pagos", [(isset($context["solicitar_pago_royal_acumulados"]) || array_key_exists("solicitar_pago_royal_acumulados", $context) ? $context["solicitar_pago_royal_acumulados"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulados" does not exist.', 212, $this->source); })()), 2, "rechazados"], 212, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleGeneralUSD\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de productos generales en USD por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\" id=\"dataDetalleGeneralUSD\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 233, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 234
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoGeneralUSD", [], "any", false, false, false, 234) != 0)) {
                // line 235
                echo "                                        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 235), "html", null, true);
                echo "\">
                                            <td>";
                // line 236
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["detalle"], "nombre", [], "any", false, false, false, 236) . " ") . twig_get_attribute($this->env, $this->source, $context["detalle"], "apellidos", [], "any", false, false, false, 236)), "html", null, true);
                echo "</td>

                                            <td>";
                // line 238
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoGeneralUSD", [], "any", false, false, false, 238), 2, ".", ","), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            // line 241
            echo "                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 242
            echo "                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleGeneralEUR\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de productos generales en EUR por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 268, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 269
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoGeneralEUR", [], "any", false, false, false, 269) != 0)) {
                // line 270
                echo "                                        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 270), "html", null, true);
                echo "\">
                                            <td>";
                // line 271
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["detalle"], "nombre", [], "any", false, false, false, 271) . " ") . twig_get_attribute($this->env, $this->source, $context["detalle"], "apellidos", [], "any", false, false, false, 271)), "html", null, true);
                echo "</td>

                                            <td>";
                // line 273
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoGeneralEUR", [], "any", false, false, false, 273), 2, ".", ","), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            // line 276
            echo "                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 277
            echo "                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleLibroUSD\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de libros en USD por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                ";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 303, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 304
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoLibroUSD", [], "any", false, false, false, 304) != 0)) {
                // line 305
                echo "                                        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 305), "html", null, true);
                echo "\">
                                            <td>";
                // line 306
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["detalle"], "nombre", [], "any", false, false, false, 306) . " ") . twig_get_attribute($this->env, $this->source, $context["detalle"], "apellidos", [], "any", false, false, false, 306)), "html", null, true);
                echo "</td>

                                            <td>";
                // line 308
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoLibroUSD", [], "any", false, false, false, 308), 2, ".", ","), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            // line 311
            echo "                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 312
            echo "                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleLibroEUR\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de libros en EUR por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                ";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 338, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 339
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoLibroEUR", [], "any", false, false, false, 339) != 0)) {
                // line 340
                echo "                                        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 340), "html", null, true);
                echo "\">
                                            <td>";
                // line 341
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["detalle"], "nombre", [], "any", false, false, false, 341) . " ") . twig_get_attribute($this->env, $this->source, $context["detalle"], "apellidos", [], "any", false, false, false, 341)), "html", null, true);
                echo "</td>

                                            <td>";
                // line 343
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoLibroEUR", [], "any", false, false, false, 343), 2, ".", ","), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            // line 346
            echo "                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 347
            echo "                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleServicioUSD\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de servicios en USD por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                ";
        // line 373
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 373, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 374
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoServicioUSD", [], "any", false, false, false, 374) != 0)) {
                // line 375
                echo "                                        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 375), "html", null, true);
                echo "\">
                                            <td>";
                // line 376
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["detalle"], "nombre", [], "any", false, false, false, 376) . " ") . twig_get_attribute($this->env, $this->source, $context["detalle"], "apellidos", [], "any", false, false, false, 376)), "html", null, true);
                echo "</td>

                                            <td>";
                // line 378
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoServicioUSD", [], "any", false, false, false, 378), 2, ".", ","), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            // line 381
            echo "                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 382
            echo "                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 386
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleServicioEUR\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de servicios en EUR por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 408, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 409
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoServicioEUR", [], "any", false, false, false, 409) != 0)) {
                // line 410
                echo "                                        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 410), "html", null, true);
                echo "\">
                                            <td>";
                // line 411
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["detalle"], "nombre", [], "any", false, false, false, 411) . " ") . twig_get_attribute($this->env, $this->source, $context["detalle"], "apellidos", [], "any", false, false, false, 411)), "html", null, true);
                echo "</td>

                                            <td>";
                // line 413
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "saldoServicioEUR", [], "any", false, false, false, 413), 2, ".", ","), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            // line 416
            echo "                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 417
            echo "                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 428
        echo twig_include($this->env, $context, "solicitar_pago_royal_acumulado/modalAddSolicitudPago.html.twig");
        echo "
        ";
        // line 429
        echo twig_include($this->env, $context, "solicitar_pago_royal_acumulado/modalAddMotivoRechazo.html.twig");
        echo "
        ";
        // line 430
        echo twig_include($this->env, $context, "solicitar_pago_royal_acumulado/modalAddAprobarPago.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 434
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 435
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <!-- DataTables -->
     <script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
     <!-- Acceso a Rutas del Controller -->
     <script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 443
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
     <script>
         \$(document).ready(function () {

             //Declaracion de variables
             let tipoPago = 0;
             let saldoAcumulado, metodo = 0;
             let fichero = '';
             let siFichero = 0;
             let idSolicitud;

             ";
        // line 454
        if ((twig_length_filter($this->env, (isset($context["solicitar_pago_royal_acumulados"]) || array_key_exists("solicitar_pago_royal_acumulados", $context) ? $context["solicitar_pago_royal_acumulados"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulados" does not exist.', 454, $this->source); })())) > 0)) {
            // line 455
            echo "             \$('table.display').DataTable({
                 \"paging\": true,
                 \"lengthChange\": false,
                 \"searching\": true,
                 \"lengthMenu\": [[4], [4]],
                 \"ordering\": true,
                 \"info\": true,
                 \"autoWidth\": true,
                 \"scrollY\": 300,
                 \"scrollCollapse\": true
             });
             ";
        }
        // line 467
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
        // line 486
        if ( !(null === (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 486, $this->source); })()))) {
            // line 487
            echo "             ";
            if (((isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 487, $this->source); })()) != 0)) {
                // line 488
                echo "             toastr[\"error\"]('";
                echo twig_escape_filter($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 488, $this->source); })()), "html", null, true);
                echo "', \"Notificación\")
             ";
            }
            // line 490
            echo "             ";
        }
        // line 491
        echo "
             //validar decimal
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
                     } else if (tecla.charCode === 46) {
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
                     } else if (indexComa > 0) {
                         let CharAfterdot = (len + 1) - indexComa;
                         if (CharAfterdot > 3) {
                             return false;
                         }
                     }
                 }
                 return true;
             });

             \$('#btnListarSolicitud').on('click', function () {
                 \$(\"#nameListado\").text(\"Listado de solicitudes de pago hasta la fecha\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-success\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarSolicitud').addClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRealizados').addClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRechazados').addClass(\"bg-gradient-gray\");
                 \$(\"#tablaPagos\").css(\"display\", \"none\");
                 \$(\"#tablaRechazados\").css(\"display\", \"none\");
                 \$(\"#tablaSolicitud\").css(\"display\", \"block\");
             });

             \$('#btnListarPagosRealizados').on('click', function () {
                 \$(\"#nameListado\").text(\"Listado de pagos realizados hasta la fecha\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRealizados').addClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRechazados').addClass(\"bg-gradient-gray\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-success\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarSolicitud').addClass(\"bg-gradient-gray\");
                 \$(\"#tablaSolicitud\").css(\"display\", \"none\");
                 \$(\"#tablaRechazados\").css(\"display\", \"none\");
                 \$(\"#tablaPagos\").css(\"display\", \"block\");
             });

             \$('#btnListarPagosRechazados').on('click', function () {
                 \$(\"#nameListado\").text(\"Listado de pagos rechazados hasta la fecha\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRechazados').addClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRealizados').addClass(\"bg-gradient-gray\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-success\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarSolicitud').addClass(\"bg-gradient-gray\");
                 \$(\"#tablaSolicitud\").css(\"display\", \"none\");
                 \$(\"#tablaPagos\").css(\"display\", \"none\");
                 \$(\"#tablaRechazados\").css(\"display\", \"block\");
             });

             \$('#addGeneralUSD').on('click', function () {
                 tipoPago = 1;
                 saldoAcumulado = parseFloat('";
        // line 587
        echo twig_escape_filter($this->env, (isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 587, $this->source); })()), "html", null, true);
        echo "');
                 if (saldoAcumulado > 0) {
                     ";
        // line 589
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 590
            echo "                     \$('#detalleGeneralEUR').css(\"display\", \"none\");
                     \$('#detalleLibroUSD').css(\"display\", \"none\");
                     \$('#detalleLibroEUR').css(\"display\", \"none\");
                     \$('#detalleServicioUSD').css(\"display\", \"none\");
                     \$('#detalleServicioEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralUSD').css(\"display\", \"block\");
                     ";
        } else {
            // line 597
            echo "                     \$('#upload').val('');
                     \$('#modalAddSolicitudPago').modal('show');
                     ";
        }
        // line 600
        echo "                 }
             });

             \$('#addGeneralEUR').on('click', function () {
                 tipoPago = 2;
                 saldoAcumulado = parseFloat('";
        // line 605
        echo twig_escape_filter($this->env, (isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 605, $this->source); })()), "html", null, true);
        echo "');
                 ";
        // line 606
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 607
            echo "                 \$('#detalleGeneralUSD').css(\"display\", \"none\");
                 \$('#detalleLibroUSD').css(\"display\", \"none\");
                 \$('#detalleLibroEUR').css(\"display\", \"none\");
                 \$('#detalleServicioUSD').css(\"display\", \"none\");
                 \$('#detalleServicioEUR').css(\"display\", \"none\");
                 \$('#detalleGeneralEUR').css(\"display\", \"block\");
                 ";
        } else {
            // line 614
            echo "                 \$('#upload').val('');
                 \$('#modalAddSolicitudPago').modal('show');
                 ";
        }
        // line 617
        echo "             });

             \$('#addLibroUSD').on('click', function () {
                 tipoPago = 3;
                 saldoAcumulado = parseFloat('";
        // line 621
        echo twig_escape_filter($this->env, (isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 621, $this->source); })()), "html", null, true);
        echo "');
                 if (saldoAcumulado > 0) {
                     ";
        // line 623
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 624
            echo "                     \$('#detalleLibroEUR').css(\"display\", \"none\");
                     \$('#detalleServicioUSD').css(\"display\", \"none\");
                     \$('#detalleServicioEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralUSD').css(\"display\", \"none\");
                     \$('#detalleLibroUSD').css(\"display\", \"block\");
                     ";
        } else {
            // line 631
            echo "                     \$('#upload').val('');
                     \$('#modalAddSolicitudPago').modal('show');
                     ";
        }
        // line 634
        echo "                 }
             });

             \$('#addLibroEUR').on('click', function () {
                 tipoPago = 4;
                 saldoAcumulado = parseFloat('";
        // line 639
        echo twig_escape_filter($this->env, (isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 639, $this->source); })()), "html", null, true);
        echo "');
                 if (saldoAcumulado > 0) {
                     ";
        // line 641
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 642
            echo "                     \$('#detalleServicioUSD').css(\"display\", \"none\");
                     \$('#detalleServicioEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralUSD').css(\"display\", \"none\");
                     \$('#detalleLibroUSD').css(\"display\", \"none\");
                     \$('#detalleLibroEUR').css(\"display\", \"block\");
                     ";
        } else {
            // line 649
            echo "                     \$('#upload').val('');
                     \$('#modalAddSolicitudPago').modal('show');
                     ";
        }
        // line 652
        echo "                 }
             });

             \$('#addServicioUSD').on('click', function () {
                 tipoPago = 5;
                 saldoAcumulado = parseFloat('";
        // line 657
        echo twig_escape_filter($this->env, (isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 657, $this->source); })()), "html", null, true);
        echo "');
                 if (saldoAcumulado > 0) {
                     ";
        // line 659
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 660
            echo "                     \$('#detalleServicioEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralUSD').css(\"display\", \"none\");
                     \$('#detalleLibroUSD').css(\"display\", \"none\");
                     \$('#detalleLibroEUR').css(\"display\", \"none\");
                     \$('#detalleServicioUSD').css(\"display\", \"block\");
                     ";
        } else {
            // line 667
            echo "                     \$('#upload').val('');
                     \$('#modalAddSolicitudPago').modal('show');
                     ";
        }
        // line 670
        echo "                 }
             });

             \$('#addServicioEUR').on('click', function () {
                 tipoPago = 6;
                 saldoAcumulado = parseFloat('";
        // line 675
        echo twig_escape_filter($this->env, (isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 675, $this->source); })()), "html", null, true);
        echo "');
                 if (saldoAcumulado > 0) {
                     ";
        // line 677
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 678
            echo "                     \$('#detalleServicioEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralUSD').css(\"display\", \"none\");
                     \$('#detalleLibroUSD').css(\"display\", \"none\");
                     \$('#detalleServicioUSD').css(\"display\", \"none\");
                     \$('#detalleLibroEUR').css(\"display\", \"block\");
                     ";
        } else {
            // line 685
            echo "                     \$('#upload').val('');
                     \$('#modalAddSolicitudPago').modal('show');
                     ";
        }
        // line 688
        echo "                 }
             });

             \$(\"#upload\").on('change', function (e) {
                 let fichero = \$(\"#upload\").val();
                 let input = document.getElementById('upload');
                 let file = input.files[0]; //2 000 000
                 let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

                 if (!allowedExtensions.exec(fichero)) {
                     toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                     \$(\"#upload\").val('');
                     return false;
                 } else if (file.size > 2000000) {
                     toastr[\"error\"]('El tamano del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                     \$(\"#upload\").val('');
                     return false;
                 } else {
                     //aqui subo el fichero y guardo el nombre
                     let Ruta = Routing.generate('app_solicitar_pago_royal_acumulado_fichero');
                     let form = document.getElementById(\"myform\");
                     siFichero = 1;

                     \$.ajax({
                         url: Ruta,
                         type: \"post\",
                         dataType: \"json\",
                         data: new FormData(form),
                         contentType: false,
                         processData: false,
                         cache: false
                     }).done(function (data) {
                         fichero = data['fichero'];
                     });
                 }
             });

             \$(\"#uploadAdjunto\").on('change', function (e) {
                 let fichero = \$(\"#uploadAdjunto\").val();
                 let input = document.getElementById('uploadAdjunto');
                 let file = input.files[0]; //2 000 000
                 let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

                 if (!allowedExtensions.exec(fichero)) {
                     toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                     \$(\"#uploadAdjunto\").val('');
                     return false;
                 } else if (file.size > 2000000) {
                     toastr[\"error\"]('El tamano del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                     \$(\"#uploadAdjunto\").val('');
                     return false;
                 } else {
                     //aqui subo el fichero y guardo el nombre
                     let Ruta = Routing.generate('app_solicitar_pago_royal_acumulado_adjunto');
                     let form = document.getElementById(\"myformAdjunto\");
                     siFichero = 1;

                     \$.ajax({
                         url: Ruta,
                         type: \"post\",
                         dataType: \"json\",
                         data: new FormData(form),
                         contentType: false,
                         processData: false,
                         cache: false
                     }).done(function (data) {
                         fichero = data['fichero'];
                     });
                 }
             });

             \$('#btnAddGuardar').on('click', function () {

                 //Validaciones
                 if (\$(\"#addMetodo\").val() === '0') {
                     toastr[\"error\"]('Seleccione un método de pago', \"Advertencia\")
                     return false;
                 }

                 if (\$(\"#addRoyaltie\").val() === '') {
                     toastr[\"error\"]('Teclee la cantidad de royaltie', \"Advertencia\")
                     return false;
                 }

                 ";
        // line 772
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 772, $this->source); })()), "user", [], "any", false, false, false, 772), "emitirfactura", [], "any", false, false, false, 772) == true)) {
            // line 773
            echo "                 if (\$(\"#upload\").val() === '') {
                     toastr[\"error\"]('Seleccione la factura', \"Advertencia\")
                     return false;
                 }
                 ";
        }
        // line 778
        echo "
                 let Ruta = Routing.generate('app_solicitar_pago_royal_acumulado_new');

                 \$('#modalAddSolicitudPago').modal('hide');

                 \$(\".preload\").removeClass('hidden');

                 if (siFichero === 0) {
                     fichero = '';
                 } else {
                     fichero = document.getElementById('upload').files[0].name;
                 }

                 let mat_datos = {
                     fichero: fichero,
                     royaltie: parseFloat(\$(\"#addRoyaltie\").val().replace(',', '.')),
                     metodo: \$(\"#addMetodo\").val(),
                     tipoPago: tipoPago,
                     saldoAcumulado: saldoAcumulado,
                 };

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     \$(\".preload\").addClass('hidden');
                     if (data === 'ok') {
                         \$('#modalAddSolicitudPago input').each(function () {
                             \$(this).val('');
                         });
                         toastr[\"success\"]('Solicitud enviada al administrador', \"Notificación\")
                         window.location.href = \"";
        // line 811
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
        echo "\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

             \$('table.display tbody').on('click', '.rechazar', function () {
                 let row = \$(this).parents('tr');
                 idSolicitud = parseInt(row.data('id'));
                 \$(\"#addMotivo\").val('');
                 \$('#modalAddMotivoRechazo').modal('show');
             });

             \$('table.display tbody').on('click', '.aprobar', function () {

                 let row = \$(this).parents('tr');
                 idSolicitud = parseInt(row.data('id'));

                 //obtener el metodo de pago seleccionado
                 {
                     let idSolicitudSeleccionada;
                     ";
        // line 833
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitar_pago_royal_acumulados"]) || array_key_exists("solicitar_pago_royal_acumulados", $context) ? $context["solicitar_pago_royal_acumulados"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulados" does not exist.', 833, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitar"]) {
            // line 834
            echo "                     idSolicitudSeleccionada = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "id", [], "any", false, false, false, 834), "html", null, true);
            echo "');
                     if (idSolicitud === idSolicitudSeleccionada) {
                         ";
            // line 836
            if ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "metododepago", [], "any", false, false, false, 836) == "WesterUnion")) {
                // line 837
                echo "                         metodo = 1;
                         \$('#mostrarCodigo').css(\"display\", \"block\");
                         \$(\"#addInfo\").val('');
                         \$(\"#addInfo\").attr(\"placeholder\", \"Teclee el código MTCN\");
                         \$('#modalAddAprobarPago').modal('show');
                         ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 842
$context["solicitar"], "metododepago", [], "any", false, false, false, 842) == "Paypal")) {
                // line 843
                echo "                         metodo = 0;
                         \$('#mostrarCodigo').css(\"display\", \"block\");
                         \$(\"#addInfo\").val('');
                         \$(\"#addInfo\").attr(\"placeholder\", \"No. Transacción\");
                         \$('#modalAddAprobarPago').modal('show');
                         ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 848
$context["solicitar"], "metododepago", [], "any", false, false, false, 848) == "Voucher")) {
                // line 849
                echo "                         metodo = 0;
                         \$('#mostrarCodigo').css(\"display\", \"block\");
                         \$(\"#addInfo\").val('');
                         \$(\"#addInfo\").attr(\"placeholder\", \"Cupón de Descuento\");
                         \$('#modalAddAprobarPago').modal('show');
                         ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 854
$context["solicitar"], "metododepago", [], "any", false, false, false, 854) == "Transferencia")) {
                // line 855
                echo "                         metodo = 0;
                         \$('#mostrarCodigo').css(\"display\", \"none\");
                         \$(\"#addInfo\").val('');
                         \$('#modalAddAprobarPago').modal('show');
                         ";
            } else {
                // line 860
                echo "                         metodo = 0;
                         \$(\"#btnAddAbrobarGuardar\").trigger(\"click\");
                         ";
            }
            // line 863
            echo "                     }
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 865
        echo "                 }

             });

             \$('#btnAddRechazoGuardar').on('click', function () {

                 let Ruta = Routing.generate('app_solicitar_pago_royal_acumulado_rechazar');

                 \$('#modalAddMotivoRechazo').modal('hide');

                 let mat_datos = {
                     idSolicitud: idSolicitud,
                     motivo: \$(\"#addMotivo\").val(),
                 };

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     if (data === 'ok') {
                         toastr[\"success\"]('Rechazo de pago enviado al usuario', \"Notificación\")
                         window.location.href = \"";
        // line 888
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
        echo "\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

             \$('#btnAddAbrobarGuardar').on('click', function () {

                 //Validaciones
                 if (metodo === 1 && \$(\"#addInfo\").val() === '') {
                     toastr[\"error\"]('Teclee el código MTCN', \"Advertencia\")
                     return false;
                 }

                 let Ruta = Routing.generate('app_solicitar_pago_royal_acumulado_aprobar');

                 \$('#modalAddAprobarPago').modal('hide');

                 \$(\".preload\").removeClass('hidden');

                 if (siFichero === 0) {
                     fichero = '';
                 } else {
                     fichero = document.getElementById('uploadAdjunto').files[0].name;
                 }

                 let mat_datos = {
                     idSolicitud: idSolicitud,
                     fichero: fichero,
                     info: \$(\"#addInfo\").val(),
                 };

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     \$(\".preload\").addClass('hidden');
                     if (data === 'ok') {
                         toastr[\"success\"]('Aprobación de pago enviado al usuario', \"Notificación\")
                         window.location.href = \"";
        // line 930
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
        echo "\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

         });
     </script>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "solicitar_pago_royal_acumulado/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1439 => 930,  1394 => 888,  1369 => 865,  1362 => 863,  1357 => 860,  1350 => 855,  1348 => 854,  1341 => 849,  1339 => 848,  1332 => 843,  1330 => 842,  1323 => 837,  1321 => 836,  1315 => 834,  1311 => 833,  1286 => 811,  1251 => 778,  1244 => 773,  1242 => 772,  1156 => 688,  1151 => 685,  1142 => 678,  1140 => 677,  1135 => 675,  1128 => 670,  1123 => 667,  1114 => 660,  1112 => 659,  1107 => 657,  1100 => 652,  1095 => 649,  1086 => 642,  1084 => 641,  1079 => 639,  1072 => 634,  1067 => 631,  1058 => 624,  1056 => 623,  1051 => 621,  1045 => 617,  1040 => 614,  1031 => 607,  1029 => 606,  1025 => 605,  1018 => 600,  1013 => 597,  1004 => 590,  1002 => 589,  997 => 587,  899 => 491,  896 => 490,  890 => 488,  887 => 487,  885 => 486,  864 => 467,  850 => 455,  848 => 454,  834 => 443,  830 => 442,  825 => 440,  821 => 439,  817 => 438,  813 => 437,  807 => 435,  800 => 434,  790 => 430,  786 => 429,  782 => 428,  773 => 421,  764 => 417,  759 => 416,  753 => 413,  748 => 411,  743 => 410,  740 => 409,  735 => 408,  711 => 386,  702 => 382,  697 => 381,  691 => 378,  686 => 376,  681 => 375,  678 => 374,  673 => 373,  649 => 351,  640 => 347,  635 => 346,  629 => 343,  624 => 341,  619 => 340,  616 => 339,  611 => 338,  587 => 316,  578 => 312,  573 => 311,  567 => 308,  562 => 306,  557 => 305,  554 => 304,  549 => 303,  525 => 281,  516 => 277,  511 => 276,  505 => 273,  500 => 271,  495 => 270,  492 => 269,  487 => 268,  463 => 246,  454 => 242,  449 => 241,  443 => 238,  438 => 236,  433 => 235,  430 => 234,  425 => 233,  401 => 212,  395 => 209,  389 => 206,  386 => 205,  384 => 204,  352 => 174,  344 => 168,  340 => 166,  336 => 164,  334 => 163,  330 => 162,  317 => 151,  315 => 150,  312 => 149,  304 => 143,  300 => 141,  296 => 139,  294 => 138,  290 => 137,  277 => 126,  275 => 125,  272 => 124,  264 => 118,  260 => 116,  256 => 114,  254 => 113,  250 => 112,  237 => 101,  235 => 100,  232 => 99,  224 => 93,  220 => 91,  216 => 89,  214 => 88,  210 => 87,  197 => 76,  195 => 75,  192 => 74,  184 => 68,  180 => 66,  176 => 64,  174 => 63,  170 => 62,  157 => 51,  155 => 50,  152 => 49,  144 => 43,  140 => 41,  136 => 39,  134 => 38,  130 => 37,  119 => 28,  117 => 27,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pago Royal Acumulado{% endblock %}

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
                <div class=\"row\">
                    {% if bolsaGeneralDolar != 0 %}
                        <div class=\"col-12 col-sm-4 col-md-4\">
                            <div class=\"info-box\" type=\"button\" id=\"addGeneralUSD\" data-toggle=\"tooltip\"
                                 data-placement=\"top\"
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-info\"><i class=\"fa fa-dollar-sign\"></i></span>
                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Productos Generales</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-dollar-sign\"></i> {{ bolsaGeneralDolar|number_format(2, '.', ',') }}</span>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <i class=\"fa fa-eye text-right\"></i>
                                    {% else %}
                                        <i class=\"fa fa-plus text-right\"></i>
                                    {% endif %}
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
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-info\"><i class=\"fa fa-euro-sign\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Productos Generales</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-euro-sign\"></i> {{ bolsaGeneralEuros|number_format(2, '.', ',') }}</span>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <i class=\"fa fa-eye text-right\"></i>
                                    {% else %}
                                        <i class=\"fa fa-plus text-right\"></i>
                                    {% endif %}
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
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-dollar-sign\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Libros</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-dollar-sign\"></i> {{ bolsaLibroDolar|number_format(2, '.', ',') }}</span>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <i class=\"fa fa-eye text-right\"></i>
                                    {% else %}
                                        <i class=\"fa fa-plus text-right\"></i>
                                    {% endif %}
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    {% endif %}
                    <!-- /.col -->
                    {% if bolsaLibroEuros != 0 %}
                        <div class=\"col-12 col-sm-4 col-md-4\">
                            <div class=\"info-box\" id=\"addLibroEUR\"
                                 data-toggle=\"tooltip\" type=\"button\"
                                 data-placement=\"top\"
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-euro-sign\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Productos Libros</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-euro-sign\"></i> {{ bolsaLibroEuros|number_format(2, '.', ',') }}</span>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <i class=\"fa fa-eye text-right\"></i>
                                    {% else %}
                                        <i class=\"fa fa-plus text-right\"></i>
                                    {% endif %}
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    {% endif %}
                    <!-- /.col  -->
                    {% if bolsaServicioDolar != 0 %}
                        <div class=\"col-12 col-sm-4 col-md-4\">
                            <div class=\"info-box\" id=\"addServicioUSD\" type=\"button\"
                                 data-toggle=\"tooltip\"
                                 data-placement=\"top\"
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-dollar-sign\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Servicios</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-dollar-sign\"></i> {{ bolsaServicioDolar|number_format(2, '.', ',') }}</span>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <i class=\"fa fa-eye text-right\"></i>
                                    {% else %}
                                        <i class=\"fa fa-plus text-right\"></i>
                                    {% endif %}
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
                                 title=\"Solicitar pago de royalties\">
                                <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-euro-sign\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text text-bold\">Servicios</span>
                                    <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                    <span class=\"info-box-number\"><i
                                                class=\"fa fa-euro-sign\"></i> {{ bolsaServicioEuros|number_format(2, '.', ',') }}</span>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <i class=\"fa fa-eye text-right\"></i>
                                    {% else %}
                                        <i class=\"fa fa-plus text-right\"></i>
                                    {% endif %}
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    {% endif %}
                    <!-- /.col -->
                </div>
                <div class=\"card\" id=\"listadoSolicitud\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3 id=\"nameListado\">Listado de pagos solicitados hasta la fecha</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-4 col-12 float-right\" style=\"margin-top: 5px\">
                                <button id=\"btnListarSolicitud\" type=\"button\" class=\"btn btn-block bg-gradient-success\">
                                    <i
                                            class=\"fa fa-tasks\"></i> Solicitudes de pagos
                                </button>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-12 float-right\" style=\"margin-top: 5px\">
                                <button id=\"btnListarPagosRealizados\" type=\"button\"
                                        class=\"btn btn-block bg-gradient-gray\"><i
                                            class=\"fa fa-tasks\"></i> Registro de pagos realizados
                                </button>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-12 float-right\" style=\"margin-top: 5px\">
                                <button id=\"btnListarPagosRechazados\" type=\"button\"
                                        class=\"btn btn-block bg-gradient-gray\"><i
                                            class=\"fa fa-tasks\"></i> Registro de pagos rechazados
                                </button>
                            </div>
                        </div>
                        {% import 'macros/tablas.html.twig' as tabla %}
                        <div class=\"row\" id=\"tablaSolicitud\" style=\"display: block\">
                            {{ tabla.tabla_solicitud_pagos(solicitar_pago_royal_acumulados,0,'solicitud') }}
                        </div>
                        <div class=\"row\" id=\"tablaPagos\" style=\"display: none\">
                            {{ tabla.tabla_solicitud_pagos(solicitar_pago_royal_acumulados,1,'pagados') }}
                        </div>
                        <div class=\"row\" id=\"tablaRechazados\" style=\"display: none\">
                            {{ tabla.tabla_solicitud_pagos(solicitar_pago_royal_acumulados,2,'rechazados') }}
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleGeneralUSD\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de productos generales en USD por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\" id=\"dataDetalleGeneralUSD\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                {% for detalle in allUsers %}
                                    {% if detalle.saldoGeneralUSD != 0 %}
                                        <tr data-id=\"{{ detalle.id }}\">
                                            <td>{{ detalle.nombre  ~ ' ' ~ detalle.apellidos }}</td>

                                            <td>{{ detalle.saldoGeneralUSD|number_format(2, '.', ',') }}</td>
                                        </tr>
                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleGeneralEUR\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de productos generales en EUR por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                {% for detalle in allUsers %}
                                    {% if detalle.saldoGeneralEUR != 0 %}
                                        <tr data-id=\"{{ detalle.id }}\">
                                            <td>{{ detalle.nombre  ~ ' ' ~ detalle.apellidos }}</td>

                                            <td>{{ detalle.saldoGeneralEUR|number_format(2, '.', ',') }}</td>
                                        </tr>
                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleLibroUSD\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de libros en USD por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                {% for detalle in allUsers %}
                                    {% if detalle.saldoLibroUSD != 0 %}
                                        <tr data-id=\"{{ detalle.id }}\">
                                            <td>{{ detalle.nombre  ~ ' ' ~ detalle.apellidos }}</td>

                                            <td>{{ detalle.saldoLibroUSD|number_format(2, '.', ',') }}</td>
                                        </tr>
                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleLibroEUR\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de libros en EUR por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                {% for detalle in allUsers %}
                                    {% if detalle.saldoLibroEUR != 0 %}
                                        <tr data-id=\"{{ detalle.id }}\">
                                            <td>{{ detalle.nombre  ~ ' ' ~ detalle.apellidos }}</td>

                                            <td>{{ detalle.saldoLibroEUR|number_format(2, '.', ',') }}</td>
                                        </tr>
                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleServicioUSD\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de servicios en USD por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                {% for detalle in allUsers %}
                                    {% if detalle.saldoServicioUSD != 0 %}
                                        <tr data-id=\"{{ detalle.id }}\">
                                            <td>{{ detalle.nombre  ~ ' ' ~ detalle.apellidos }}</td>

                                            <td>{{ detalle.saldoServicioUSD|number_format(2, '.', ',') }}</td>
                                        </tr>
                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"card\" id=\"detalleServicioEUR\" style=\"display:none;\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de la bolsa de servicios en EUR por usuarios</h3>
                        </div>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\" style=\"padding-left: 5px\">
                            <table class=\"table table-bordered table-striped display\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Royalties Acumulados</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                {% for detalle in allUsers %}
                                    {% if detalle.saldoServicioEUR != 0 %}
                                        <tr data-id=\"{{ detalle.id }}\">
                                            <td>{{ detalle.nombre  ~ ' ' ~ detalle.apellidos }}</td>

                                            <td>{{ detalle.saldoServicioEUR|number_format(2, '.', ',') }}</td>
                                        </tr>
                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"2\">No se encontraron registros</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ include('solicitar_pago_royal_acumulado/modalAddSolicitudPago.html.twig') }}
        {{ include('solicitar_pago_royal_acumulado/modalAddMotivoRechazo.html.twig') }}
        {{ include('solicitar_pago_royal_acumulado/modalAddAprobarPago.html.twig') }}
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
             let tipoPago = 0;
             let saldoAcumulado, metodo = 0;
             let fichero = '';
             let siFichero = 0;
             let idSolicitud;

             {% if solicitar_pago_royal_acumulados|length > 0 %}
             \$('table.display').DataTable({
                 \"paging\": true,
                 \"lengthChange\": false,
                 \"searching\": true,
                 \"lengthMenu\": [[4], [4]],
                 \"ordering\": true,
                 \"info\": true,
                 \"autoWidth\": true,
                 \"scrollY\": 300,
                 \"scrollCollapse\": true
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

             //validar decimal
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
                     } else if (tecla.charCode === 46) {
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
                     } else if (indexComa > 0) {
                         let CharAfterdot = (len + 1) - indexComa;
                         if (CharAfterdot > 3) {
                             return false;
                         }
                     }
                 }
                 return true;
             });

             \$('#btnListarSolicitud').on('click', function () {
                 \$(\"#nameListado\").text(\"Listado de solicitudes de pago hasta la fecha\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-success\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarSolicitud').addClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRealizados').addClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRechazados').addClass(\"bg-gradient-gray\");
                 \$(\"#tablaPagos\").css(\"display\", \"none\");
                 \$(\"#tablaRechazados\").css(\"display\", \"none\");
                 \$(\"#tablaSolicitud\").css(\"display\", \"block\");
             });

             \$('#btnListarPagosRealizados').on('click', function () {
                 \$(\"#nameListado\").text(\"Listado de pagos realizados hasta la fecha\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRealizados').addClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRechazados').addClass(\"bg-gradient-gray\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-success\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarSolicitud').addClass(\"bg-gradient-gray\");
                 \$(\"#tablaSolicitud\").css(\"display\", \"none\");
                 \$(\"#tablaRechazados\").css(\"display\", \"none\");
                 \$(\"#tablaPagos\").css(\"display\", \"block\");
             });

             \$('#btnListarPagosRechazados').on('click', function () {
                 \$(\"#nameListado\").text(\"Listado de pagos rechazados hasta la fecha\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRechazados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRechazados').addClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-success\");
                 \$('#btnListarPagosRealizados').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarPagosRealizados').addClass(\"bg-gradient-gray\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-success\");
                 \$('#btnListarSolicitud').removeClass(\"bg-gradient-gray\");
                 \$('#btnListarSolicitud').addClass(\"bg-gradient-gray\");
                 \$(\"#tablaSolicitud\").css(\"display\", \"none\");
                 \$(\"#tablaPagos\").css(\"display\", \"none\");
                 \$(\"#tablaRechazados\").css(\"display\", \"block\");
             });

             \$('#addGeneralUSD').on('click', function () {
                 tipoPago = 1;
                 saldoAcumulado = parseFloat('{{ bolsaGeneralDolar }}');
                 if (saldoAcumulado > 0) {
                     {% if is_granted('ROLE_ADMIN') %}
                     \$('#detalleGeneralEUR').css(\"display\", \"none\");
                     \$('#detalleLibroUSD').css(\"display\", \"none\");
                     \$('#detalleLibroEUR').css(\"display\", \"none\");
                     \$('#detalleServicioUSD').css(\"display\", \"none\");
                     \$('#detalleServicioEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralUSD').css(\"display\", \"block\");
                     {% else %}
                     \$('#upload').val('');
                     \$('#modalAddSolicitudPago').modal('show');
                     {% endif %}
                 }
             });

             \$('#addGeneralEUR').on('click', function () {
                 tipoPago = 2;
                 saldoAcumulado = parseFloat('{{ bolsaGeneralEuros }}');
                 {% if is_granted('ROLE_ADMIN') %}
                 \$('#detalleGeneralUSD').css(\"display\", \"none\");
                 \$('#detalleLibroUSD').css(\"display\", \"none\");
                 \$('#detalleLibroEUR').css(\"display\", \"none\");
                 \$('#detalleServicioUSD').css(\"display\", \"none\");
                 \$('#detalleServicioEUR').css(\"display\", \"none\");
                 \$('#detalleGeneralEUR').css(\"display\", \"block\");
                 {% else %}
                 \$('#upload').val('');
                 \$('#modalAddSolicitudPago').modal('show');
                 {% endif %}
             });

             \$('#addLibroUSD').on('click', function () {
                 tipoPago = 3;
                 saldoAcumulado = parseFloat('{{ bolsaLibroDolar }}');
                 if (saldoAcumulado > 0) {
                     {% if is_granted('ROLE_ADMIN') %}
                     \$('#detalleLibroEUR').css(\"display\", \"none\");
                     \$('#detalleServicioUSD').css(\"display\", \"none\");
                     \$('#detalleServicioEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralUSD').css(\"display\", \"none\");
                     \$('#detalleLibroUSD').css(\"display\", \"block\");
                     {% else %}
                     \$('#upload').val('');
                     \$('#modalAddSolicitudPago').modal('show');
                     {% endif %}
                 }
             });

             \$('#addLibroEUR').on('click', function () {
                 tipoPago = 4;
                 saldoAcumulado = parseFloat('{{ bolsaLibroEuros }}');
                 if (saldoAcumulado > 0) {
                     {% if is_granted('ROLE_ADMIN') %}
                     \$('#detalleServicioUSD').css(\"display\", \"none\");
                     \$('#detalleServicioEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralUSD').css(\"display\", \"none\");
                     \$('#detalleLibroUSD').css(\"display\", \"none\");
                     \$('#detalleLibroEUR').css(\"display\", \"block\");
                     {% else %}
                     \$('#upload').val('');
                     \$('#modalAddSolicitudPago').modal('show');
                     {% endif %}
                 }
             });

             \$('#addServicioUSD').on('click', function () {
                 tipoPago = 5;
                 saldoAcumulado = parseFloat('{{ bolsaServicioDolar }}');
                 if (saldoAcumulado > 0) {
                     {% if is_granted('ROLE_ADMIN') %}
                     \$('#detalleServicioEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralUSD').css(\"display\", \"none\");
                     \$('#detalleLibroUSD').css(\"display\", \"none\");
                     \$('#detalleLibroEUR').css(\"display\", \"none\");
                     \$('#detalleServicioUSD').css(\"display\", \"block\");
                     {% else %}
                     \$('#upload').val('');
                     \$('#modalAddSolicitudPago').modal('show');
                     {% endif %}
                 }
             });

             \$('#addServicioEUR').on('click', function () {
                 tipoPago = 6;
                 saldoAcumulado = parseFloat('{{ bolsaServicioEuros }}');
                 if (saldoAcumulado > 0) {
                     {% if is_granted('ROLE_ADMIN') %}
                     \$('#detalleServicioEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralEUR').css(\"display\", \"none\");
                     \$('#detalleGeneralUSD').css(\"display\", \"none\");
                     \$('#detalleLibroUSD').css(\"display\", \"none\");
                     \$('#detalleServicioUSD').css(\"display\", \"none\");
                     \$('#detalleLibroEUR').css(\"display\", \"block\");
                     {% else %}
                     \$('#upload').val('');
                     \$('#modalAddSolicitudPago').modal('show');
                     {% endif %}
                 }
             });

             \$(\"#upload\").on('change', function (e) {
                 let fichero = \$(\"#upload\").val();
                 let input = document.getElementById('upload');
                 let file = input.files[0]; //2 000 000
                 let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

                 if (!allowedExtensions.exec(fichero)) {
                     toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                     \$(\"#upload\").val('');
                     return false;
                 } else if (file.size > 2000000) {
                     toastr[\"error\"]('El tamano del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                     \$(\"#upload\").val('');
                     return false;
                 } else {
                     //aqui subo el fichero y guardo el nombre
                     let Ruta = Routing.generate('app_solicitar_pago_royal_acumulado_fichero');
                     let form = document.getElementById(\"myform\");
                     siFichero = 1;

                     \$.ajax({
                         url: Ruta,
                         type: \"post\",
                         dataType: \"json\",
                         data: new FormData(form),
                         contentType: false,
                         processData: false,
                         cache: false
                     }).done(function (data) {
                         fichero = data['fichero'];
                     });
                 }
             });

             \$(\"#uploadAdjunto\").on('change', function (e) {
                 let fichero = \$(\"#uploadAdjunto\").val();
                 let input = document.getElementById('uploadAdjunto');
                 let file = input.files[0]; //2 000 000
                 let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

                 if (!allowedExtensions.exec(fichero)) {
                     toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                     \$(\"#uploadAdjunto\").val('');
                     return false;
                 } else if (file.size > 2000000) {
                     toastr[\"error\"]('El tamano del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                     \$(\"#uploadAdjunto\").val('');
                     return false;
                 } else {
                     //aqui subo el fichero y guardo el nombre
                     let Ruta = Routing.generate('app_solicitar_pago_royal_acumulado_adjunto');
                     let form = document.getElementById(\"myformAdjunto\");
                     siFichero = 1;

                     \$.ajax({
                         url: Ruta,
                         type: \"post\",
                         dataType: \"json\",
                         data: new FormData(form),
                         contentType: false,
                         processData: false,
                         cache: false
                     }).done(function (data) {
                         fichero = data['fichero'];
                     });
                 }
             });

             \$('#btnAddGuardar').on('click', function () {

                 //Validaciones
                 if (\$(\"#addMetodo\").val() === '0') {
                     toastr[\"error\"]('Seleccione un método de pago', \"Advertencia\")
                     return false;
                 }

                 if (\$(\"#addRoyaltie\").val() === '') {
                     toastr[\"error\"]('Teclee la cantidad de royaltie', \"Advertencia\")
                     return false;
                 }

                 {% if app.user.emitirfactura == true %}
                 if (\$(\"#upload\").val() === '') {
                     toastr[\"error\"]('Seleccione la factura', \"Advertencia\")
                     return false;
                 }
                 {% endif %}

                 let Ruta = Routing.generate('app_solicitar_pago_royal_acumulado_new');

                 \$('#modalAddSolicitudPago').modal('hide');

                 \$(\".preload\").removeClass('hidden');

                 if (siFichero === 0) {
                     fichero = '';
                 } else {
                     fichero = document.getElementById('upload').files[0].name;
                 }

                 let mat_datos = {
                     fichero: fichero,
                     royaltie: parseFloat(\$(\"#addRoyaltie\").val().replace(',', '.')),
                     metodo: \$(\"#addMetodo\").val(),
                     tipoPago: tipoPago,
                     saldoAcumulado: saldoAcumulado,
                 };

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     \$(\".preload\").addClass('hidden');
                     if (data === 'ok') {
                         \$('#modalAddSolicitudPago input').each(function () {
                             \$(this).val('');
                         });
                         toastr[\"success\"]('Solicitud enviada al administrador', \"Notificación\")
                         window.location.href = \"{{ path('app_solicitar_pago_royal_acumulado_index') }}\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

             \$('table.display tbody').on('click', '.rechazar', function () {
                 let row = \$(this).parents('tr');
                 idSolicitud = parseInt(row.data('id'));
                 \$(\"#addMotivo\").val('');
                 \$('#modalAddMotivoRechazo').modal('show');
             });

             \$('table.display tbody').on('click', '.aprobar', function () {

                 let row = \$(this).parents('tr');
                 idSolicitud = parseInt(row.data('id'));

                 //obtener el metodo de pago seleccionado
                 {
                     let idSolicitudSeleccionada;
                     {% for solicitar in  solicitar_pago_royal_acumulados %}
                     idSolicitudSeleccionada = parseInt('{{ solicitar.id }}');
                     if (idSolicitud === idSolicitudSeleccionada) {
                         {% if solicitar.metododepago == 'WesterUnion' %}
                         metodo = 1;
                         \$('#mostrarCodigo').css(\"display\", \"block\");
                         \$(\"#addInfo\").val('');
                         \$(\"#addInfo\").attr(\"placeholder\", \"Teclee el código MTCN\");
                         \$('#modalAddAprobarPago').modal('show');
                         {% elseif solicitar.metododepago == 'Paypal' %}
                         metodo = 0;
                         \$('#mostrarCodigo').css(\"display\", \"block\");
                         \$(\"#addInfo\").val('');
                         \$(\"#addInfo\").attr(\"placeholder\", \"No. Transacción\");
                         \$('#modalAddAprobarPago').modal('show');
                         {% elseif solicitar.metododepago == 'Voucher' %}
                         metodo = 0;
                         \$('#mostrarCodigo').css(\"display\", \"block\");
                         \$(\"#addInfo\").val('');
                         \$(\"#addInfo\").attr(\"placeholder\", \"Cupón de Descuento\");
                         \$('#modalAddAprobarPago').modal('show');
                         {% elseif solicitar.metododepago == 'Transferencia' %}
                         metodo = 0;
                         \$('#mostrarCodigo').css(\"display\", \"none\");
                         \$(\"#addInfo\").val('');
                         \$('#modalAddAprobarPago').modal('show');
                         {% else %}
                         metodo = 0;
                         \$(\"#btnAddAbrobarGuardar\").trigger(\"click\");
                         {% endif %}
                     }
                     {% endfor %}
                 }

             });

             \$('#btnAddRechazoGuardar').on('click', function () {

                 let Ruta = Routing.generate('app_solicitar_pago_royal_acumulado_rechazar');

                 \$('#modalAddMotivoRechazo').modal('hide');

                 let mat_datos = {
                     idSolicitud: idSolicitud,
                     motivo: \$(\"#addMotivo\").val(),
                 };

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     if (data === 'ok') {
                         toastr[\"success\"]('Rechazo de pago enviado al usuario', \"Notificación\")
                         window.location.href = \"{{ path('app_solicitar_pago_royal_acumulado_index') }}\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

             \$('#btnAddAbrobarGuardar').on('click', function () {

                 //Validaciones
                 if (metodo === 1 && \$(\"#addInfo\").val() === '') {
                     toastr[\"error\"]('Teclee el código MTCN', \"Advertencia\")
                     return false;
                 }

                 let Ruta = Routing.generate('app_solicitar_pago_royal_acumulado_aprobar');

                 \$('#modalAddAprobarPago').modal('hide');

                 \$(\".preload\").removeClass('hidden');

                 if (siFichero === 0) {
                     fichero = '';
                 } else {
                     fichero = document.getElementById('uploadAdjunto').files[0].name;
                 }

                 let mat_datos = {
                     idSolicitud: idSolicitud,
                     fichero: fichero,
                     info: \$(\"#addInfo\").val(),
                 };

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     \$(\".preload\").addClass('hidden');
                     if (data === 'ok') {
                         toastr[\"success\"]('Aprobación de pago enviado al usuario', \"Notificación\")
                         window.location.href = \"{{ path('app_solicitar_pago_royal_acumulado_index') }}\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

         });
     </script>
 {% endblock %}
", "solicitar_pago_royal_acumulado/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\solicitar_pago_royal_acumulado\\index.html.twig");
    }
}
