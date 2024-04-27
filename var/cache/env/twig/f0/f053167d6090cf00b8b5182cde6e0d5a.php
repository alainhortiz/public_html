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

/* producto/show.html.twig */
class __TwigTemplate_7c5e45f71902a09e69e6bc64628832b2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Producto";
        
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
                            <h3>Producto</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                    <tbody>
                                    <tr>
                                        <th>Tipo</th>
                                        ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 31, $this->source); })()), "tipoProducto", [], "any", false, false, false, 31) == 1)) {
            // line 32
            echo "                                            <td>General</td>
                                        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 33, $this->source); })()), "tipoProducto", [], "any", false, false, false, 33) == 2)) {
            // line 34
            echo "                                            <td>Libro</td>
                                        ";
        }
        // line 36
        echo "                                    </tr>
                                    <tr>
                                        <th>Nombre</th>
                                        <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 39, $this->source); })()), "nombre", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>IDD</th>
                                        <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 43, $this->source); })()), "idd", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 45, $this->source); })()), "imagen", [], "any", false, false, false, 45)) {
            // line 46
            echo "                                        <tr>
                                            <th>Imagen</th>
                                            <td>
                                                <div class=\"product-image-thumb active\"><img width=\"50\" height=\"50\"
                                                                                             src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 50, $this->source); })()), "imagen", [], "any", false, false, false, 50))), "html", null, true);
            echo "\"
                                                                                             alt=\"Foto Producto\"></div>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 55
        echo "                                    <tr>
                                        <th>Beneficio por Venta</th>
                                        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 57, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Moneda</th>
                                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 61, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Stock</th>
                                        <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 65, $this->source); })()), "stock", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Aviso Stock</th>
                                        <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 69, $this->source); })()), "stockAdvertencia", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Usuario Asignado</th>
                                        <td>";
        // line 73
        ((twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "nombre", [], "any", false, false, false, 73) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "apellidos", [], "any", false, false, false, 73)), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        ";
        // line 79
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 79, $this->source); })()), "amortizaciones", [], "any", false, false, false, 79)) > 0)) {
            // line 80
            echo "                            <div class=\"row\">
                                <div class=\"card-header\" style=\"background-color: #343a40\">
                                    <div class=\"card-title text-white\">
                                        <h3>Amortizaciones</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                    <table class=\"table table-bordered table-striped\" id=\"dataAmortizaciones\">
                                        <thead class=\"text-center\">
                                        <tr>
                                            <th>Costo de Producción</th>
                                            <th>Precio de Venta</th>
                                            <th>Por liquidar</th>
                                            <th>Beneficiado</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"text-center\">
                                        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 99, $this->source); })()), "amortizaciones", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
                // line 100
                echo "                                            <tr class=\"text-center\">
                                                <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "costoProduccion", [], "any", false, false, false, 101), 2, ".", ","), "html", null, true);
                echo "</td>
                                                <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 102), 2, ".", ","), "html", null, true);
                echo "</td>
                                                <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 103), 2, ".", ","), "html", null, true);
                echo "</td>
                                                ";
                // line 104
                if ((twig_get_attribute($this->env, $this->source, $context["amortizacion"], "isAdministrador", [], "any", false, false, false, 104) == "1")) {
                    // line 105
                    echo "                                                    <td>Administrador</td>
                                                ";
                } else {
                    // line 107
                    echo "                                                    <td>";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "nombre", [], "any", false, false, false, 107) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "apellidos", [], "any", false, false, false, 107)), "html", null, true);
                    echo "</td>
                                                ";
                }
                // line 109
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        ";
        }
        // line 116
        echo "                    </div>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\"
                           href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_form_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122)]), "html", null, true);
        echo "\">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- DataTables -->
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {

            \$('#dataAmortizaciones').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[1], [1]],
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
        return "producto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 136,  320 => 135,  316 => 134,  312 => 133,  306 => 131,  299 => 130,  285 => 122,  279 => 119,  274 => 116,  267 => 111,  260 => 109,  254 => 107,  250 => 105,  248 => 104,  244 => 103,  240 => 102,  236 => 101,  233 => 100,  229 => 99,  208 => 80,  206 => 79,  197 => 73,  190 => 69,  183 => 65,  176 => 61,  169 => 57,  165 => 55,  157 => 50,  151 => 46,  149 => 45,  144 => 43,  137 => 39,  132 => 36,  128 => 34,  126 => 33,  123 => 32,  121 => 31,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Producto{% endblock %}

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
                            <h3>Producto</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                    <tbody>
                                    <tr>
                                        <th>Tipo</th>
                                        {% if producto.tipoProducto == 1 %}
                                            <td>General</td>
                                        {% elseif producto.tipoProducto == 2 %}
                                            <td>Libro</td>
                                        {% endif %}
                                    </tr>
                                    <tr>
                                        <th>Nombre</th>
                                        <td>{{ producto.nombre }}</td>
                                    </tr>
                                    <tr>
                                        <th>IDD</th>
                                        <td>{{ producto.idd }}</td>
                                    </tr>
                                    {% if producto.imagen %}
                                        <tr>
                                            <th>Imagen</th>
                                            <td>
                                                <div class=\"product-image-thumb active\"><img width=\"50\" height=\"50\"
                                                                                             src=\"{{ asset('uploads/' ~ producto.imagen) }}\"
                                                                                             alt=\"Foto Producto\"></div>
                                            </td>
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <th>Beneficio por Venta</th>
                                        <td>{{ producto.beneficioxventa }}</td>
                                    </tr>
                                    <tr>
                                        <th>Moneda</th>
                                        <td>{{ producto.tipodemoneda }}</td>
                                    </tr>
                                    <tr>
                                        <th>Stock</th>
                                        <td>{{ producto.stock }}</td>
                                    </tr>
                                    <tr>
                                        <th>Aviso Stock</th>
                                        <td>{{ producto.stockAdvertencia }}</td>
                                    </tr>
                                    <tr>
                                        <th>Usuario Asignado</th>
                                        <td>{{ producto.user ? producto.user.nombre ~ ' ' ~ producto.user.apellidos }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {% if producto.amortizaciones|length > 0 %}
                            <div class=\"row\">
                                <div class=\"card-header\" style=\"background-color: #343a40\">
                                    <div class=\"card-title text-white\">
                                        <h3>Amortizaciones</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                    <table class=\"table table-bordered table-striped\" id=\"dataAmortizaciones\">
                                        <thead class=\"text-center\">
                                        <tr>
                                            <th>Costo de Producción</th>
                                            <th>Precio de Venta</th>
                                            <th>Por liquidar</th>
                                            <th>Beneficiado</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"text-center\">
                                        {% for amortizacion in producto.amortizaciones %}
                                            <tr class=\"text-center\">
                                                <td>{{ amortizacion.costoProduccion|number_format(2, '.', ',') }}</td>
                                                <td>{{ amortizacion.precioVenta|number_format(2, '.', ',') }}</td>
                                                <td>{{ amortizacion.saldoRestante|number_format(2, '.', ',') }}</td>
                                                {% if amortizacion.isAdministrador == '1' %}
                                                    <td>Administrador</td>
                                                {% else %}
                                                    <td>{{ producto.user.nombre ~ ' ' ~ producto.user.apellidos }}</td>
                                                {% endif %}
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\"
                           href=\"{{ path('app_producto_index') }}\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"{{ path('app_producto_form_edit', {'id': producto.id}) }}\">Editar</a>
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

            \$('#dataAmortizaciones').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[1], [1]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

        });
    </script>
{% endblock %}
", "producto/show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto\\show.html.twig");
    }
}
