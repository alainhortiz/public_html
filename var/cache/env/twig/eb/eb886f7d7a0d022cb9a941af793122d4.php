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

/* venta_productos/show.html.twig */
class __TwigTemplate_b689a962b9365c89f150de731a36a8c3 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Productos de la Venta";
        
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
                    <div class=\"card-header\" style=\"background-color: #343a40\">
                        <div class=\"card-title text-white\">
                            <h3>Productos de la Venta ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["venta"]) || array_key_exists("venta", $context) ? $context["venta"] : (function () { throw new RuntimeError('Variable "venta" does not exist.', 21, $this->source); })()), "codigo", [], "any", false, false, false, 21), "html", null, true);
        echo "</h3>
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["venta"]) || array_key_exists("venta", $context) ? $context["venta"] : (function () { throw new RuntimeError('Variable "venta" does not exist.', 41, $this->source); })()), "ventas", [], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["ventaProducto"]) {
            // line 42
            echo "                                        <tr>
                                            <td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "pack", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "pack", [], "any", false, false, false, 43), "nombre", [], "any", false, false, false, 43), "html", null, true))) : (print ("-")));
            echo "</td>
                                            ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 44), "imagen", [], "any", false, false, false, 44)) {
                // line 45
                echo "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 46), "imagen", [], "any", false, false, false, 46))), "html", null, true);
                echo "\"
                                                         alt=\"Foto Producto\"></td>
                                            ";
            } else {
                // line 49
                echo "                                                <td>-</td>
                                            ";
            }
            // line 51
            echo "                                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 51), "nombre", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 52), "idd", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "cantidad", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 54), "user", [], "any", false, false, false, 54), "nombre", [], "any", false, false, false, 54) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "producto", [], "any", false, false, false, 54), "user", [], "any", false, false, false, 54), "apellidos", [], "any", false, false, false, 54)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "pagoAmortizacion", [], "any", false, false, false, 55), 2, ".", ","), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ventaProducto"], "royaltie", [], "any", false, false, false, 56), 2, ".", ","), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ventaProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style=\"padding: 20px\">
                            <a class=\"btn btn-danger\" style=\"float: left\"
                               href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_productos_index");
        echo "\">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "            ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <!-- DataTables -->
            <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
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

    }

    public function getTemplateName()
    {
        return "venta_productos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 80,  234 => 79,  230 => 78,  226 => 77,  220 => 75,  213 => 74,  198 => 65,  190 => 59,  181 => 56,  177 => 55,  173 => 54,  169 => 53,  165 => 52,  160 => 51,  156 => 49,  150 => 46,  147 => 45,  145 => 44,  141 => 43,  138 => 42,  134 => 41,  111 => 21,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
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
