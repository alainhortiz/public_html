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

/* venta_servicios/show.html.twig */
class __TwigTemplate_cbf2d71b929d18ee2a91e32d00cfc520 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "venta_servicios/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "venta_servicios/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Servicios de la Venta";
        
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
                    <div class=\"card-header\" style=\"background-color: #343a40\">
                        <div class=\"card-title text-white\">
                            <h3>Servicios de la Venta ";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["venta"]) || array_key_exists("venta", $context) ? $context["venta"] : (function () { throw new RuntimeError('Variable "venta" does not exist.', 21, $this->source); })()), "codigo", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataVentaServicios\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Concepto</th>
                                        <th>Descripción</th>
                                        <th>Documento</th>
                                        <th>Usuario</th>
                                        <th>Royalties</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["venta"]) || array_key_exists("venta", $context) ? $context["venta"] : (function () { throw new RuntimeError('Variable "venta" does not exist.', 39, $this->source); })()), "ventas", [], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["ventaServicio"]) {
            // line 40
            yield "                                        <tr>
                                            <td>";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaServicio"], "producto", [], "any", false, false, false, 41), "nombre", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                            <td>";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaServicio"], "producto", [], "any", false, false, false, 42), "conceptoServicio", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                            <td>";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaServicio"], "producto", [], "any", false, false, false, 43), "descripcionServicio", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                            ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaServicio"], "producto", [], "any", false, false, false, 44), "documentoServicio", [], "any", false, false, false, 44)) {
                // line 45
                yield "                                                <td>
                                                    <a href=\"";
                // line 46
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaServicio"], "producto", [], "any", false, false, false, 46), "documentoServicio", [], "any", false, false, false, 46))), "html", null, true);
                yield "\"
                                                       target=\"_blank\">Ver
                                                        Documento</a>
                                                </td>
                                            ";
            } else {
                // line 51
                yield "                                                <td>-</td>
                                            ";
            }
            // line 53
            yield "                                            <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaServicio"], "producto", [], "any", false, false, false, 53), "user", [], "any", false, false, false, 53), "nombre", [], "any", false, false, false, 53) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaServicio"], "producto", [], "any", false, false, false, 53), "user", [], "any", false, false, false, 53), "apellidos", [], "any", false, false, false, 53)), "html", null, true);
            yield "</td>
                                            <td>";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ventaServicio"], "royaltie", [], "any", false, false, false, 54), 2, ".", ","), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ventaServicio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style=\"padding: 20px\">
                            <a class=\"btn btn-danger\" style=\"float: left\"
                               href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicios_index");
        yield "\">Regresar</a>
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

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        yield "            ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
            <!-- DataTables -->
            <script src=\"";
        // line 75
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 76
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 77
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 78
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
            <script>
                \$(function () {

                    \$('#dataVentaServicios').DataTable({
                        \"paging\": true,
                        \"lengthChange\": false,
                        \"searching\": false,
                        \"lengthMenu\": [[10], [10]],
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
        return "venta_servicios/show.html.twig";
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
        return array (  234 => 78,  230 => 77,  226 => 76,  222 => 75,  216 => 73,  209 => 72,  193 => 63,  185 => 57,  176 => 54,  171 => 53,  167 => 51,  159 => 46,  156 => 45,  154 => 44,  150 => 43,  146 => 42,  142 => 41,  139 => 40,  135 => 39,  114 => 21,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Servicios de la Venta{% endblock %}

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
                    <div class=\"card-header\" style=\"background-color: #343a40\">
                        <div class=\"card-title text-white\">
                            <h3>Servicios de la Venta {{ venta.codigo }}</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataVentaServicios\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Concepto</th>
                                        <th>Descripción</th>
                                        <th>Documento</th>
                                        <th>Usuario</th>
                                        <th>Royalties</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for ventaServicio in venta.ventas() %}
                                        <tr>
                                            <td>{{ ventaServicio.producto.nombre }}</td>
                                            <td>{{ ventaServicio.producto.conceptoServicio }}</td>
                                            <td>{{ ventaServicio.producto.descripcionServicio }}</td>
                                            {% if ventaServicio.producto.documentoServicio %}
                                                <td>
                                                    <a href=\"{{ asset('uploads/' ~ ventaServicio.producto.documentoServicio) }}\"
                                                       target=\"_blank\">Ver
                                                        Documento</a>
                                                </td>
                                            {% else %}
                                                <td>-</td>
                                            {% endif %}
                                            <td>{{ ventaServicio.producto.user.nombre ~ ' ' ~ ventaServicio.producto.user.apellidos }}</td>
                                            <td>{{ ventaServicio.royaltie|number_format(2, '.', ',') }}</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style=\"padding: 20px\">
                            <a class=\"btn btn-danger\" style=\"float: left\"
                               href=\"{{ path('app_venta_servicios_index') }}\">Regresar</a>
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

                    \$('#dataVentaServicios').DataTable({
                        \"paging\": true,
                        \"lengthChange\": false,
                        \"searching\": false,
                        \"lengthMenu\": [[10], [10]],
                        \"ordering\": true,
                        \"info\": true,
                        \"autoWidth\": false,
                        \"responsive\": true,
                    });
                });
            </script>
        {% endblock %}
", "venta_servicios/show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\venta_servicios\\show.html.twig");
    }
}
