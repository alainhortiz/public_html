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

/* estado/indexUser.html.twig */
class __TwigTemplate_bacc740d89ea908a41e9b15f6c4ce9a0 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mi Estado de Cuentas";
        
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
        yield "    <!-- Content Wrapper. Contains page content -->
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["movimientos"]) || array_key_exists("movimientos", $context) ? $context["movimientos"] : (function () { throw new RuntimeError('Variable "movimientos" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 42
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "tipodemoneda", [], "any", false, false, false, 42) == "USD")) {
                // line 43
                yield "                                            <tr data-id=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "id", [], "any", false, false, false, 43), "html", null, true);
                yield "\">
                                                <td class=\"hidden\">";
                // line 44
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "id", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
                                                <td>";
                // line 45
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "fecha", [], "any", false, false, false, 45), "Y-m-d h:i:s"), "html", null, true);
                yield "</td>
                                                <td>";
                // line 46
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "saldo", [], "any", false, false, false, 46), 2, ".", ","), "html", null, true);
                yield "</td>
                                                ";
                // line 47
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "accion", [], "any", false, false, false, 47) == 1)) {
                    // line 48
                    yield "                                                    <td>Ingreso por concepto de ingreso de royalties</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 49
$context["movimiento"], "accion", [], "any", false, false, false, 49) == 2)) {
                    // line 50
                    yield "                                                    <td>Retiro por concepto de retiro de royalties</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 51
$context["movimiento"], "accion", [], "any", false, false, false, 51) == 3)) {
                    // line 52
                    yield "                                                    <td>Ingreso por concepto de amortización del producto</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 53
$context["movimiento"], "accion", [], "any", false, false, false, 53) == 4)) {
                    // line 54
                    yield "                                                    <td>Ingreso por concepto de beneficio de royalties</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 55
$context["movimiento"], "accion", [], "any", false, false, false, 55) == 5)) {
                    // line 56
                    yield "                                                    <td>Retiro por concepto de solicitud de pago de royalties</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 57
$context["movimiento"], "accion", [], "any", false, false, false, 57) == 6)) {
                    // line 58
                    yield "                                                    <td>Ingreso por concepto de cancelación de solicitud de pago de royalties</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 59
$context["movimiento"], "accion", [], "any", false, false, false, 59) == 7)) {
                    // line 60
                    yield "                                                    <td>Retiro de royalties por concepto de cancelación de venta</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 61
$context["movimiento"], "accion", [], "any", false, false, false, 61) == 8)) {
                    // line 62
                    yield "                                                    <td>Retiro de saldo de amortización por concepto de cancelación de venta</td>
                                                ";
                }
                // line 64
                yield "                                                <td>";
                ((CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 64)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 64), "codigo", [], "any", false, false, false, 64), "html", null, true)) : (yield ""));
                yield "</td>
                                            </tr>
                                        ";
            }
            // line 67
            yield "                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            yield "                                        <tr>
                                            <td colspan=\"4\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                                    </tbody>
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["movimientos"]) || array_key_exists("movimientos", $context) ? $context["movimientos"] : (function () { throw new RuntimeError('Variable "movimientos" does not exist.', 92, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 93
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "tipodemoneda", [], "any", false, false, false, 93) == "EUR")) {
                // line 94
                yield "                                            <tr data-id=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "id", [], "any", false, false, false, 94), "html", null, true);
                yield "\">
                                                <td class=\"hidden\">";
                // line 95
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "id", [], "any", false, false, false, 95), "html", null, true);
                yield "</td>
                                                <td>";
                // line 96
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "fecha", [], "any", false, false, false, 96), "Y-m-d h:i:s"), "html", null, true);
                yield "</td>
                                                <td>";
                // line 97
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "saldo", [], "any", false, false, false, 97), 2, ".", ","), "html", null, true);
                yield "</td>
                                                ";
                // line 98
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "accion", [], "any", false, false, false, 98) == 1)) {
                    // line 99
                    yield "                                                    <td>Ingreso por concepto de ingreso de royalties</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 100
$context["movimiento"], "accion", [], "any", false, false, false, 100) == 2)) {
                    // line 101
                    yield "                                                    <td>Retiro por concepto de retiro de royalties</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 102
$context["movimiento"], "accion", [], "any", false, false, false, 102) == 3)) {
                    // line 103
                    yield "                                                    <td>Ingreso por concepto de amortización del producto</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 104
$context["movimiento"], "accion", [], "any", false, false, false, 104) == 4)) {
                    // line 105
                    yield "                                                    <td>Ingreso por concepto de beneficio de royalties</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 106
$context["movimiento"], "accion", [], "any", false, false, false, 106) == 5)) {
                    // line 107
                    yield "                                                    <td>Retiro por concepto de solicitud de pago de royalties</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 108
$context["movimiento"], "accion", [], "any", false, false, false, 108) == 6)) {
                    // line 109
                    yield "                                                    <td>Ingreso por concepto de cancelación de solicitud de pago de royalties</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 110
$context["movimiento"], "accion", [], "any", false, false, false, 110) == 7)) {
                    // line 111
                    yield "                                                    <td>Retiro de royalties por concepto de cancelación de venta</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 112
$context["movimiento"], "accion", [], "any", false, false, false, 112) == 8)) {
                    // line 113
                    yield "                                                    <td>Retiro de saldo de amortización por concepto de cancelación de venta</td>
                                                ";
                }
                // line 115
                yield "                                                <td>";
                ((CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 115)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 115), "codigo", [], "any", false, false, false, 115), "html", null, true)) : (yield ""));
                yield "</td>
                                            </tr>
                                        ";
            }
            // line 118
            yield "                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 119
            yield "                                        <tr>
                                            <td colspan=\"4\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                                    </tbody>
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

        return; yield '';
    }

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- DataTables -->
    <script src=\"";
        // line 137
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 138
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 139
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 140
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "estado/indexUser.html.twig";
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
        return array (  372 => 140,  368 => 139,  364 => 138,  360 => 137,  354 => 135,  347 => 134,  330 => 123,  321 => 119,  316 => 118,  309 => 115,  305 => 113,  303 => 112,  300 => 111,  298 => 110,  295 => 109,  293 => 108,  290 => 107,  288 => 106,  285 => 105,  283 => 104,  280 => 103,  278 => 102,  275 => 101,  273 => 100,  270 => 99,  268 => 98,  264 => 97,  260 => 96,  256 => 95,  251 => 94,  248 => 93,  243 => 92,  221 => 72,  212 => 68,  207 => 67,  200 => 64,  196 => 62,  194 => 61,  191 => 60,  189 => 59,  186 => 58,  184 => 57,  181 => 56,  179 => 55,  176 => 54,  174 => 53,  171 => 52,  169 => 51,  166 => 50,  164 => 49,  161 => 48,  159 => 47,  155 => 46,  151 => 45,  147 => 44,  142 => 43,  139 => 42,  134 => 41,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
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
