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

/* producto/index.html.twig */
class __TwigTemplate_5986c0a20fca5881bd3b02dbd9d955fc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de Productos";
        
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
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de Productos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_form_new");
        echo "\">
                                    <button type=\"button\" class=\"btn btn-block bg-gradient-success\">Crear Nuevo Producto
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Tipo de Producto</th>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Imagen del Producto</th>
                                        <th>Stock</th>
                                        <th>Amortización</th>
                                        <th>Vendidos</th>
                                        <th>Beneficio por Venta</th>
                                        <th>Usuario Asignado</th>
                                        <th>Producto Agotado</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 60
            echo "                                        ";
            $context["vendidos"] = 0;
            // line 61
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["producto"], "ventas", [], "method", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
                // line 62
                echo "                                            ";
                $context["vendidos"] = ((isset($context["vendidos"]) || array_key_exists("vendidos", $context) ? $context["vendidos"] : (function () { throw new RuntimeError('Variable "vendidos" does not exist.', 62, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["venta"], "cantidad", [], "any", false, false, false, 62));
                // line 63
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                                        ";
            $context["disponible"] = 0;
            // line 65
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 65) <= twig_get_attribute($this->env, $this->source, $context["producto"], "stockAdvertencia", [], "any", false, false, false, 65))) {
                // line 66
                echo "                                            ";
                $context["disponible"] = 1;
                // line 67
                echo "                                        ";
            }
            // line 68
            echo "                                        <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\" class=\"text-center\">
                                            ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 69) == 1)) {
                // line 70
                echo "                                                <td>General</td>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 71
$context["producto"], "tipoProducto", [], "any", false, false, false, 71) == 2)) {
                // line 72
                echo "                                                <td>Libro</td>
                                            ";
            }
            // line 74
            echo "                                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "idd", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                                            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                            ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 76)) {
                // line 77
                echo "                                                <td>
                                                    <div class=\"product-image-thumb active\"><img width=\"80\" height=\"80\"
                                                                                                 src=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 79))), "html", null, true);
                echo "\"
                                                                                                 alt=\"Foto Producto\">
                                                    </div>
                                                </td>
                                            ";
            } else {
                // line 84
                echo "                                                <td>-</td>
                                            ";
            }
            // line 86
            echo "                                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                                            ";
            // line 87
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 87)) > 0)) {
                // line 88
                echo "                                                <td>Si</td>
                                            ";
            } else {
                // line 90
                echo "                                                <td>No</td>
                                            ";
            }
            // line 92
            echo "                                            <td>";
            echo twig_escape_filter($this->env, (isset($context["vendidos"]) || array_key_exists("vendidos", $context) ? $context["vendidos"] : (function () { throw new RuntimeError('Variable "vendidos" does not exist.', 92, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 93
            echo twig_escape_filter($this->env, ((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 93), 2, ".", ",") . " ") . twig_get_attribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 93)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 94
            ((twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 94)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 94), "nombre", [], "any", false, false, false, 94) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 94), "apellidos", [], "any", false, false, false, 94)), "html", null, true))) : (print ("")));
            echo "</td>
                                            ";
            // line 95
            if (((isset($context["disponible"]) || array_key_exists("disponible", $context) ? $context["disponible"] : (function () { throw new RuntimeError('Variable "disponible" does not exist.', 95, $this->source); })()) == 1)) {
                // line 96
                echo "                                                <td>Si</td>
                                            ";
            } else {
                // line 98
                echo "                                                <td>No</td>
                                            ";
            }
            // line 100
            echo "                                            <td style=\"margin: 0 auto;\">
                                                <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_show", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                                ";
            // line 107
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "cantidadVentas", [], "method", false, false, false, 107) == 0)) {
                // line 108
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_form_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\">
                                                        <button class=\"btn btn-success\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Editar\"><i
                                                                    class=\"fas fa-edit\"></i>
                                                        </button>
                                                    </a>
                                                ";
            }
            // line 116
            echo "                                                <button class=\"btn btn-danger delete\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Eliminar\"><i
                                                            class=\"fas fa-trash\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            echo "                                        <tr>
                                            <td colspan=\"9\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
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

    // line 139
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {

            \$('#dataProductos').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[6], [6]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            \$('#dataProductos tbody').on('click', '.delete', function () {

                let row = \$(this).parents('tr');

                let mat_datos = {id: row.data('id')};

                let Ruta = Routing.generate('app_producto_delete');

                let opcion = confirm(\"Esta seguro que desea eliminar el producto seleccionado?\");
                if (opcion === true) {
                    \$(\".preload\").removeClass('hidden');

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"html\",
                        data: mat_datos,
                    }).done(function (data) {
                        \$(\".preload\").addClass('hidden');
                        if (data === 'ok') {
                            toastr[\"success\"]('El producto ha sido borrado', \"Notificación\")
                            window.location.href = \"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\";
                        } else {
                            toastr[\"error\"](data, \"Notificación\")
                        }
                    });
                }
            });

        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "producto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 184,  364 => 148,  360 => 147,  356 => 146,  352 => 145,  347 => 143,  343 => 142,  337 => 140,  330 => 139,  314 => 128,  305 => 124,  293 => 116,  281 => 108,  279 => 107,  270 => 101,  267 => 100,  263 => 98,  259 => 96,  257 => 95,  253 => 94,  249 => 93,  244 => 92,  240 => 90,  236 => 88,  234 => 87,  229 => 86,  225 => 84,  217 => 79,  213 => 77,  211 => 76,  207 => 75,  202 => 74,  198 => 72,  196 => 71,  193 => 70,  191 => 69,  186 => 68,  183 => 67,  180 => 66,  177 => 65,  174 => 64,  168 => 63,  165 => 62,  160 => 61,  157 => 60,  152 => 59,  124 => 34,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listado de Productos{% endblock %}

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
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de Productos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <a href=\"{{ path('app_producto_form_new') }}\">
                                    <button type=\"button\" class=\"btn btn-block bg-gradient-success\">Crear Nuevo Producto
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Tipo de Producto</th>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Imagen del Producto</th>
                                        <th>Stock</th>
                                        <th>Amortización</th>
                                        <th>Vendidos</th>
                                        <th>Beneficio por Venta</th>
                                        <th>Usuario Asignado</th>
                                        <th>Producto Agotado</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for producto in productos %}
                                        {% set vendidos = 0 %}
                                        {% for venta in producto.ventas() %}
                                            {% set vendidos = vendidos + venta.cantidad %}
                                        {% endfor %}
                                        {% set disponible = 0 %}
                                        {% if producto.stock <= producto.stockAdvertencia %}
                                            {% set disponible = 1 %}
                                        {% endif %}
                                        <tr data-id=\"{{ producto.id }}\" class=\"text-center\">
                                            {% if producto.tipoProducto == 1 %}
                                                <td>General</td>
                                            {% elseif producto.tipoProducto == 2 %}
                                                <td>Libro</td>
                                            {% endif %}
                                            <td>{{ producto.idd }}</td>
                                            <td>{{ producto.nombre }}</td>
                                            {% if producto.imagen %}
                                                <td>
                                                    <div class=\"product-image-thumb active\"><img width=\"80\" height=\"80\"
                                                                                                 src=\"{{ asset('uploads/' ~ producto.imagen) }}\"
                                                                                                 alt=\"Foto Producto\">
                                                    </div>
                                                </td>
                                            {% else %}
                                                <td>-</td>
                                            {% endif %}
                                            <td>{{ producto.Stock }}</td>
                                            {% if producto.amortizaciones|length > 0 %}
                                                <td>Si</td>
                                            {% else %}
                                                <td>No</td>
                                            {% endif %}
                                            <td>{{ vendidos }}</td>
                                            <td>{{ producto.beneficioxventa|number_format(2, '.', ',') ~ ' ' ~ producto.tipodemoneda }}</td>
                                            <td>{{ producto.user ? producto.user.nombre ~ ' ' ~ producto.user.apellidos }}</td>
                                            {% if disponible == 1 %}
                                                <td>Si</td>
                                            {% else %}
                                                <td>No</td>
                                            {% endif %}
                                            <td style=\"margin: 0 auto;\">
                                                <a href=\"{{ path('app_producto_show', {'id': producto.id}) }}\">
                                                    <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                                {% if producto.cantidadVentas() == 0 %}
                                                    <a href=\"{{ path('app_producto_form_edit', {'id': producto.id}) }}\">
                                                        <button class=\"btn btn-success\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Editar\"><i
                                                                    class=\"fas fa-edit\"></i>
                                                        </button>
                                                    </a>
                                                {% endif %}
                                                <button class=\"btn btn-danger delete\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Eliminar\"><i
                                                            class=\"fas fa-trash\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"9\">No se encontraron registros</td>
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
    <!-- Acceso a Rutas del Controller -->
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
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
                \"lengthMenu\": [[6], [6]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            \$('#dataProductos tbody').on('click', '.delete', function () {

                let row = \$(this).parents('tr');

                let mat_datos = {id: row.data('id')};

                let Ruta = Routing.generate('app_producto_delete');

                let opcion = confirm(\"Esta seguro que desea eliminar el producto seleccionado?\");
                if (opcion === true) {
                    \$(\".preload\").removeClass('hidden');

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"html\",
                        data: mat_datos,
                    }).done(function (data) {
                        \$(\".preload\").addClass('hidden');
                        if (data === 'ok') {
                            toastr[\"success\"]('El producto ha sido borrado', \"Notificación\")
                            window.location.href = \"{{ path('app_producto_index') }}\";
                        } else {
                            toastr[\"error\"](data, \"Notificación\")
                        }
                    });
                }
            });

        });
    </script>
{% endblock %}

", "producto/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto\\index.html.twig");
    }
}
