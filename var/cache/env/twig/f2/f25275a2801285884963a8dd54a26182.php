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

/* asignar_producto/index.html.twig */
class __TwigTemplate_cd9970d1e947ef8e29eacc819e96a2db extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "asignar_producto/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "asignar_producto/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Productos Asignados";
        
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
                            <h3>Productos Asignados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Imagen del Producto</th>
                                        <th>Tipo de Producto</th>
                                        <th>I.D.D</th>
                                        <th>Nombre</th>
                                        <th>Vendidos</th>
                                        <th>Beneficio por Venta</th>
                                        <th>Stock</th>
                                        <th>Amortización</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 42
            echo "                                        ";
            $context["vendidos"] = 0;
            // line 43
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["producto"], "ventas", [], "method", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
                // line 44
                echo "                                            ";
                $context["vendidos"] = ((isset($context["vendidos"]) || array_key_exists("vendidos", $context) ? $context["vendidos"] : (function () { throw new RuntimeError('Variable "vendidos" does not exist.', 44, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["venta"], "cantidad", [], "any", false, false, false, 44));
                // line 45
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                        <tr class=\"text-center\">
                                            ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 47)) {
                // line 48
                echo "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 49))), "html", null, true);
                echo "\"
                                                         alt=\"Foto Producto\"></td>
                                            ";
            } else {
                // line 52
                echo "                                                <td>-</td>
                                            ";
            }
            // line 54
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 54) == 1)) {
                // line 55
                echo "                                                <td>General</td>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 56
$context["producto"], "tipoProducto", [], "any", false, false, false, 56) == 2)) {
                // line 57
                echo "                                                <td>Libro</td>
                                            ";
            }
            // line 59
            echo "                                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "idd", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["vendidos"]) || array_key_exists("vendidos", $context) ? $context["vendidos"] : (function () { throw new RuntimeError('Variable "vendidos" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 62) . " ") . twig_get_attribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 62)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                            ";
            // line 64
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 64)) > 0)) {
                // line 65
                echo "                                                <td>Si</td>
                                            ";
            } else {
                // line 67
                echo "                                                <td>No</td>
                                            ";
            }
            // line 69
            echo "                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                                        <tr>
                                            <td colspan=\"7\">No se encontraron productos asignados</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
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

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- DataTables -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {

            \$('#dataProductos').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
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
        return "asignar_producto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 92,  266 => 91,  262 => 90,  258 => 89,  252 => 87,  245 => 86,  229 => 75,  220 => 71,  214 => 69,  210 => 67,  206 => 65,  204 => 64,  200 => 63,  196 => 62,  192 => 61,  188 => 60,  183 => 59,  179 => 57,  177 => 56,  174 => 55,  171 => 54,  167 => 52,  161 => 49,  158 => 48,  156 => 47,  153 => 46,  147 => 45,  144 => 44,  139 => 43,  136 => 42,  131 => 41,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Productos Asignados{% endblock %}

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
                            <h3>Productos Asignados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Imagen del Producto</th>
                                        <th>Tipo de Producto</th>
                                        <th>I.D.D</th>
                                        <th>Nombre</th>
                                        <th>Vendidos</th>
                                        <th>Beneficio por Venta</th>
                                        <th>Stock</th>
                                        <th>Amortización</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for producto in productos %}
                                        {% set vendidos = 0 %}
                                        {% for venta in producto.ventas() %}
                                            {% set vendidos = vendidos + venta.cantidad %}
                                        {% endfor %}
                                        <tr class=\"text-center\">
                                            {% if producto.imagen %}
                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"{{ asset('uploads/' ~ producto.imagen) }}\"
                                                         alt=\"Foto Producto\"></td>
                                            {% else %}
                                                <td>-</td>
                                            {% endif %}
                                            {% if producto.tipoProducto == 1 %}
                                                <td>General</td>
                                            {% elseif producto.tipoProducto == 2 %}
                                                <td>Libro</td>
                                            {% endif %}
                                            <td>{{ producto.idd }}</td>
                                            <td>{{ producto.nombre }}</td>
                                            <td>{{ vendidos }}</td>
                                            <td>{{ producto.beneficioxventa ~ ' ' ~ producto.tipodemoneda }}</td>
                                            <td>{{ producto.Stock }}</td>
                                            {% if producto.amortizaciones|length > 0 %}
                                                <td>Si</td>
                                            {% else %}
                                                <td>No</td>
                                            {% endif %}
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"7\">No se encontraron productos asignados</td>
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

            \$('#dataProductos').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[10], [10]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });
        });
    </script>
{% endblock %}
", "asignar_producto/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\asignar_producto\\index.html.twig");
    }
}
