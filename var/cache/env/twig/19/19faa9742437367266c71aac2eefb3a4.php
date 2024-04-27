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

/* venta_productos/show.html.twig */
class __TwigTemplate_20a9c7cb2accbb2aeb15375929183cfa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "venta_productos/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "venta_productos/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Productos de la Venta";
        
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
                            <h3>Productos de la Venta ";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["venta"]) || array_key_exists("venta", $context) ? $context["venta"] : (function () { throw new RuntimeError('Variable "venta" does not exist.', 21, $this->source); })()), "codigo", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataVentaProductos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Pack</th>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>I.D.D</th>
                                        <th>Cantidad</th>
                                        <th>Usuario</th>
                                        <th>Ganancia x Amortización</th>
                                        <th>Ganancia x Beneficio</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["venta"]) || array_key_exists("venta", $context) ? $context["venta"] : (function () { throw new RuntimeError('Variable "venta" does not exist.', 41, $this->source); })()), "ventas", [], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["ventaProducto"]) {
            // line 42
            yield "                                        <tr>
                                            <td>";
            // line 43
            ((CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "pack", [], "any", false, false, false, 43)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "pack", [], "any", false, false, false, 43), "nombre", [], "any", false, false, false, 43), "html", null, true)) : (yield "-"));
            yield "</td>
                                            ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 44), "imagen", [], "any", false, false, false, 44)) {
                // line 45
                yield "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 46
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 46), "imagen", [], "any", false, false, false, 46))), "html", null, true);
                yield "\"
                                                         alt=\"Foto Producto\"></td>
                                            ";
            } else {
                // line 49
                yield "                                                <td>-</td>
                                            ";
            }
            // line 51
            yield "                                            <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 51), "nombre", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                                            <td>";
            // line 52
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 52), "idd", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                                            <td>";
            // line 53
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "cantidad", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                            <td>";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 54), "user", [], "any", false, false, false, 54), "nombre", [], "any", false, false, false, 54) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 54), "user", [], "any", false, false, false, 54), "apellidos", [], "any", false, false, false, 54)), "html", null, true);
            yield "</td>
                                            <td>";
            // line 55
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "pagoAmortizacion", [], "any", false, false, false, 55), 2, ".", ","), "html", null, true);
            yield "</td>
                                            <td>";
            // line 56
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ventaProducto"], "royaltie", [], "any", false, false, false, 56), 2, ".", ","), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ventaProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style=\"padding: 20px\">
                            <a class=\"btn btn-danger\" style=\"float: left\"
                               href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_productos_index");
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

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        yield "            ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
            <!-- DataTables -->
            <script src=\"";
        // line 77
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 78
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 79
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 80
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
            <script>
                \$(function () {

                    \$('#dataVentaProductos').DataTable({
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
        return "venta_productos/show.html.twig";
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
        return array (  242 => 80,  238 => 79,  234 => 78,  230 => 77,  224 => 75,  217 => 74,  201 => 65,  193 => 59,  184 => 56,  180 => 55,  176 => 54,  172 => 53,  168 => 52,  163 => 51,  159 => 49,  153 => 46,  150 => 45,  148 => 44,  144 => 43,  141 => 42,  137 => 41,  114 => 21,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Productos de la Venta{% endblock %}

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
                            <h3>Productos de la Venta {{ venta.codigo }}</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataVentaProductos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Pack</th>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>I.D.D</th>
                                        <th>Cantidad</th>
                                        <th>Usuario</th>
                                        <th>Ganancia x Amortización</th>
                                        <th>Ganancia x Beneficio</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for ventaProducto in venta.ventas() %}
                                        <tr>
                                            <td>{{ ventaProducto.pack ? ventaProducto.pack.nombre : '-' }}</td>
                                            {% if ventaProducto.producto.imagen %}
                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"{{ asset('uploads/' ~ ventaProducto.producto.imagen) }}\"
                                                         alt=\"Foto Producto\"></td>
                                            {% else %}
                                                <td>-</td>
                                            {% endif %}
                                            <td>{{ ventaProducto.producto.nombre }}</td>
                                            <td>{{ ventaProducto.producto.idd }}</td>
                                            <td>{{ ventaProducto.cantidad }}</td>
                                            <td>{{ ventaProducto.producto.user.nombre ~ ' ' ~ ventaProducto.producto.user.apellidos }}</td>
                                            <td>{{ ventaProducto.pagoAmortizacion|number_format(2, '.', ',') }}</td>
                                            <td>{{ ventaProducto.royaltie|number_format(2, '.', ',') }}</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style=\"padding: 20px\">
                            <a class=\"btn btn-danger\" style=\"float: left\"
                               href=\"{{ path('app_venta_productos_index') }}\">Regresar</a>
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

                    \$('#dataVentaProductos').DataTable({
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
", "venta_productos/show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\venta_productos\\show.html.twig");
    }
}
