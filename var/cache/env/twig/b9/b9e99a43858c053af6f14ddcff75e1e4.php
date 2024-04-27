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

/* estado/indexUser.html.twig */
class __TwigTemplate_d1898f76848ebec5603e06c5578a4962 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "estado/indexUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "estado/indexUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mi Estado de Cuentas";
        
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
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Mi Estado de Cuentas</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"card-title\">
                                <h3>Movimientos del acumulado en la cuenta en USD</h3>
                            </div>
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataMovimientosUSD\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th class=\"hidden\">id</th>
                                        <th>Fecha</th>
                                        <th>Acumulado</th>
                                        <th>Acción</th>
                                        <th>Código Venta</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientos"]) || array_key_exists("movimientos", $context) ? $context["movimientos"] : (function () { throw new RuntimeError('Variable "movimientos" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 42
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["movimiento"], "tipodemoneda", [], "any", false, false, false, 42) == "USD")) {
                // line 43
                echo "                                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\">
                                                <td class=\"hidden\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                                                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "fecha", [], "any", false, false, false, 45), "Y-m-d h:i:s"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "saldo", [], "any", false, false, false, 46), 2, ".", ","), "html", null, true);
                echo "</td>
                                                ";
                // line 47
                if ((twig_get_attribute($this->env, $this->source, $context["movimiento"], "accion", [], "any", false, false, false, 47) == 1)) {
                    // line 48
                    echo "                                                    <td>Ingreso por concepto de ingreso de royalties</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 49
$context["movimiento"], "accion", [], "any", false, false, false, 49) == 2)) {
                    // line 50
                    echo "                                                    <td>Retiro por concepto de retiro de royalties</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 51
$context["movimiento"], "accion", [], "any", false, false, false, 51) == 3)) {
                    // line 52
                    echo "                                                    <td>Ingreso por concepto de amortización del producto</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 53
$context["movimiento"], "accion", [], "any", false, false, false, 53) == 4)) {
                    // line 54
                    echo "                                                    <td>Ingreso por concepto de beneficio de royalties</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 55
$context["movimiento"], "accion", [], "any", false, false, false, 55) == 5)) {
                    // line 56
                    echo "                                                    <td>Retiro por concepto de solicitud de pago de royalties</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 57
$context["movimiento"], "accion", [], "any", false, false, false, 57) == 6)) {
                    // line 58
                    echo "                                                    <td>Ingreso por concepto de cancelación de solicitud de pago de royalties</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 59
$context["movimiento"], "accion", [], "any", false, false, false, 59) == 7)) {
                    // line 60
                    echo "                                                    <td>Retiro de royalties por concepto de cancelación de venta</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 61
$context["movimiento"], "accion", [], "any", false, false, false, 61) == 8)) {
                    // line 62
                    echo "                                                    <td>Retiro de saldo de amortización por concepto de cancelación de venta</td>
                                                ";
                }
                // line 64
                echo "                                                <td>";
                ((twig_get_attribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 64), "codigo", [], "any", false, false, false, 64), "html", null, true))) : (print ("")));
                echo "</td>
                                            </tr>
                                        ";
            }
            // line 67
            echo "                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "                                        <tr>
                                            <td colspan=\"4\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"card-title\">
                                <h3>Movimientos del acumulado en la cuenta en EUR</h3>
                            </div>
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataMovimientosEUR\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th class=\"hidden\">id</th>
                                        <th>Fecha</th>
                                        <th>Acumulado</th>
                                        <th>Acción</th>
                                        <th>Código Venta</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientos"]) || array_key_exists("movimientos", $context) ? $context["movimientos"] : (function () { throw new RuntimeError('Variable "movimientos" does not exist.', 92, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 93
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["movimiento"], "tipodemoneda", [], "any", false, false, false, 93) == "EUR")) {
                // line 94
                echo "                                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "id", [], "any", false, false, false, 94), "html", null, true);
                echo "\">
                                                <td class=\"hidden\">";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "id", [], "any", false, false, false, 95), "html", null, true);
                echo "</td>
                                                <td>";
                // line 96
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "fecha", [], "any", false, false, false, 96), "Y-m-d h:i:s"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 97
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "saldo", [], "any", false, false, false, 97), 2, ".", ","), "html", null, true);
                echo "</td>
                                                ";
                // line 98
                if ((twig_get_attribute($this->env, $this->source, $context["movimiento"], "accion", [], "any", false, false, false, 98) == 1)) {
                    // line 99
                    echo "                                                    <td>Ingreso por concepto de ingreso de royalties</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 100
$context["movimiento"], "accion", [], "any", false, false, false, 100) == 2)) {
                    // line 101
                    echo "                                                    <td>Retiro por concepto de retiro de royalties</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 102
$context["movimiento"], "accion", [], "any", false, false, false, 102) == 3)) {
                    // line 103
                    echo "                                                    <td>Ingreso por concepto de amortización del producto</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 104
$context["movimiento"], "accion", [], "any", false, false, false, 104) == 4)) {
                    // line 105
                    echo "                                                    <td>Ingreso por concepto de beneficio de royalties</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 106
$context["movimiento"], "accion", [], "any", false, false, false, 106) == 5)) {
                    // line 107
                    echo "                                                    <td>Retiro por concepto de solicitud de pago de royalties</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 108
$context["movimiento"], "accion", [], "any", false, false, false, 108) == 6)) {
                    // line 109
                    echo "                                                    <td>Ingreso por concepto de cancelación de solicitud de pago de royalties</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 110
$context["movimiento"], "accion", [], "any", false, false, false, 110) == 7)) {
                    // line 111
                    echo "                                                    <td>Retiro de royalties por concepto de cancelación de venta</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 112
$context["movimiento"], "accion", [], "any", false, false, false, 112) == 8)) {
                    // line 113
                    echo "                                                    <td>Retiro de saldo de amortización por concepto de cancelación de venta</td>
                                                ";
                }
                // line 115
                echo "                                                <td>";
                ((twig_get_attribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 115)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 115), "codigo", [], "any", false, false, false, 115), "html", null, true))) : (print ("")));
                echo "</td>
                                            </tr>
                                        ";
            }
            // line 118
            echo "                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 119
            echo "                                        <tr>
                                            <td colspan=\"4\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- DataTables -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {

            \$('#dataMovimientosUSD, #dataMovimientosEUR').DataTable({
                \"paging\": true,
                \"order\": [0, \"desc\"],
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[6], [6]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "estado/indexUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 140,  364 => 139,  360 => 138,  356 => 137,  350 => 135,  343 => 134,  327 => 123,  318 => 119,  313 => 118,  306 => 115,  302 => 113,  300 => 112,  297 => 111,  295 => 110,  292 => 109,  290 => 108,  287 => 107,  285 => 106,  282 => 105,  280 => 104,  277 => 103,  275 => 102,  272 => 101,  270 => 100,  267 => 99,  265 => 98,  261 => 97,  257 => 96,  253 => 95,  248 => 94,  245 => 93,  240 => 92,  218 => 72,  209 => 68,  204 => 67,  197 => 64,  193 => 62,  191 => 61,  188 => 60,  186 => 59,  183 => 58,  181 => 57,  178 => 56,  176 => 55,  173 => 54,  171 => 53,  168 => 52,  166 => 51,  163 => 50,  161 => 49,  158 => 48,  156 => 47,  152 => 46,  148 => 45,  144 => 44,  139 => 43,  136 => 42,  131 => 41,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mi Estado de Cuentas{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Mi Estado de Cuentas</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"card-title\">
                                <h3>Movimientos del acumulado en la cuenta en USD</h3>
                            </div>
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataMovimientosUSD\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th class=\"hidden\">id</th>
                                        <th>Fecha</th>
                                        <th>Acumulado</th>
                                        <th>Acción</th>
                                        <th>Código Venta</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for movimiento in movimientos %}
                                        {% if movimiento.tipodemoneda == 'USD' %}
                                            <tr data-id=\"{{ movimiento.id }}\">
                                                <td class=\"hidden\">{{ movimiento.id }}</td>
                                                <td>{{ movimiento.fecha|date('Y-m-d h:i:s') }}</td>
                                                <td>{{ movimiento.saldo|number_format(2, '.', ',') }}</td>
                                                {% if movimiento.accion == 1 %}
                                                    <td>Ingreso por concepto de ingreso de royalties</td>
                                                {% elseif movimiento.accion == 2 %}
                                                    <td>Retiro por concepto de retiro de royalties</td>
                                                {% elseif movimiento.accion == 3 %}
                                                    <td>Ingreso por concepto de amortización del producto</td>
                                                {% elseif movimiento.accion == 4 %}
                                                    <td>Ingreso por concepto de beneficio de royalties</td>
                                                {% elseif movimiento.accion == 5 %}
                                                    <td>Retiro por concepto de solicitud de pago de royalties</td>
                                                {% elseif movimiento.accion == 6 %}
                                                    <td>Ingreso por concepto de cancelación de solicitud de pago de royalties</td>
                                                {% elseif movimiento.accion == 7 %}
                                                    <td>Retiro de royalties por concepto de cancelación de venta</td>
                                                {% elseif movimiento.accion == 8 %}
                                                    <td>Retiro de saldo de amortización por concepto de cancelación de venta</td>
                                                {% endif %}
                                                <td>{{ movimiento.venta ?  movimiento.venta.codigo : '' }}</td>
                                            </tr>
                                        {% endif %}
                                    {% else %}
                                        <tr>
                                            <td colspan=\"4\">No se encontraron registros</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"card-title\">
                                <h3>Movimientos del acumulado en la cuenta en EUR</h3>
                            </div>
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataMovimientosEUR\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th class=\"hidden\">id</th>
                                        <th>Fecha</th>
                                        <th>Acumulado</th>
                                        <th>Acción</th>
                                        <th>Código Venta</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for movimiento in movimientos %}
                                        {% if movimiento.tipodemoneda == 'EUR' %}
                                            <tr data-id=\"{{ movimiento.id }}\">
                                                <td class=\"hidden\">{{ movimiento.id }}</td>
                                                <td>{{ movimiento.fecha|date('Y-m-d h:i:s') }}</td>
                                                <td>{{ movimiento.saldo|number_format(2, '.', ',') }}</td>
                                                {% if movimiento.accion == 1 %}
                                                    <td>Ingreso por concepto de ingreso de royalties</td>
                                                {% elseif movimiento.accion == 2 %}
                                                    <td>Retiro por concepto de retiro de royalties</td>
                                                {% elseif movimiento.accion == 3 %}
                                                    <td>Ingreso por concepto de amortización del producto</td>
                                                {% elseif movimiento.accion == 4 %}
                                                    <td>Ingreso por concepto de beneficio de royalties</td>
                                                {% elseif movimiento.accion == 5 %}
                                                    <td>Retiro por concepto de solicitud de pago de royalties</td>
                                                {% elseif movimiento.accion == 6 %}
                                                    <td>Ingreso por concepto de cancelación de solicitud de pago de royalties</td>
                                                {% elseif movimiento.accion == 7 %}
                                                    <td>Retiro de royalties por concepto de cancelación de venta</td>
                                                {% elseif movimiento.accion == 8 %}
                                                    <td>Retiro de saldo de amortización por concepto de cancelación de venta</td>
                                                {% endif %}
                                                <td>{{ movimiento.venta ?  movimiento.venta.codigo : '' }}</td>
                                            </tr>
                                        {% endif %}
                                    {% else %}
                                        <tr>
                                            <td colspan=\"4\">No se encontraron registros</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
    <script>
        \$(function () {

            \$('#dataMovimientosUSD, #dataMovimientosEUR').DataTable({
                \"paging\": true,
                \"order\": [0, \"desc\"],
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[6], [6]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });
        });
    </script>
{% endblock %}
", "estado/indexUser.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\estado\\indexUser.html.twig");
    }
}
