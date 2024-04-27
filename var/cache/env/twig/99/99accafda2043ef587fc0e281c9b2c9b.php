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
class __TwigTemplate_c59acdb2009be7972445cc098b7496fb extends Template
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
                        <h3 class=\"card-title\">Listado de Productos</h3>
                        <div class=\"card-tools\">
                            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_list_pdf");
        echo "\">
                                <button class=\"btn btn-dark\" data-toggle=\"tooltip\"
                                        title=\"exportar a pdf listado de productos\"><i
                                            class=\"fas fa-file-pdf\"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <a href=\"";
        // line 41
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
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 67
            echo "                                    ";
            $context["vendidos"] = 0;
            // line 68
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["producto"], "ventas", [], "method", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
                // line 69
                echo "                                        ";
                $context["vendidos"] = ((isset($context["vendidos"]) || array_key_exists("vendidos", $context) ? $context["vendidos"] : (function () { throw new RuntimeError('Variable "vendidos" does not exist.', 69, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["venta"], "cantidad", [], "any", false, false, false, 69));
                // line 70
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                    ";
            $context["disponible"] = 0;
            // line 72
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 72) <= twig_get_attribute($this->env, $this->source, $context["producto"], "stockAdvertencia", [], "any", false, false, false, 72))) {
                // line 73
                echo "                                        ";
                $context["disponible"] = 1;
                // line 74
                echo "                                    ";
            }
            // line 75
            echo "                                    <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\" class=\"text-center\">
                                        ";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 76) == 1)) {
                // line 77
                echo "                                            <td>General</td>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 78
$context["producto"], "tipoProducto", [], "any", false, false, false, 78) == 2)) {
                // line 79
                echo "                                            <td>Libro</td>
                                        ";
            }
            // line 81
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "idd", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                        ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 83)) {
                // line 84
                echo "                                            <td>
                                                <div class=\"product-image-thumb active\"><img width=\"80\" height=\"80\"
                                                                                             src=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 86))), "html", null, true);
                echo "\"
                                                                                             alt=\"Foto Producto\">
                                                </div>
                                            </td>
                                        ";
            } else {
                // line 91
                echo "                                            <td>-</td>
                                        ";
            }
            // line 93
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                                        ";
            // line 94
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 94)) > 0)) {
                // line 95
                echo "                                            <td>Si</td>
                                        ";
            } else {
                // line 97
                echo "                                            <td>No</td>
                                        ";
            }
            // line 99
            echo "                                        <td>";
            echo twig_escape_filter($this->env, (isset($context["vendidos"]) || array_key_exists("vendidos", $context) ? $context["vendidos"] : (function () { throw new RuntimeError('Variable "vendidos" does not exist.', 99, $this->source); })()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 100
            echo twig_escape_filter($this->env, ((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 100), 2, ".", ",") . " ") . twig_get_attribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 100)), "html", null, true);
            echo "</td>
                                        <td>";
            // line 101
            ((twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 101)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 101), "nombre", [], "any", false, false, false, 101) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 101), "apellidos", [], "any", false, false, false, 101)), "html", null, true))) : (print ("")));
            echo "</td>
                                        ";
            // line 102
            if (((isset($context["disponible"]) || array_key_exists("disponible", $context) ? $context["disponible"] : (function () { throw new RuntimeError('Variable "disponible" does not exist.', 102, $this->source); })()) == 1)) {
                // line 103
                echo "                                            <td>Si</td>
                                        ";
            } else {
                // line 105
                echo "                                            <td>No</td>
                                        ";
            }
            // line 107
            echo "                                        <td style=\"margin: 0 auto;\">
                                            <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_show", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\">
                                                <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                        title=\"ver\"><i
                                                            class=\"fas fa-info\"></i>
                                                </button>
                                            </a>
                                            <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\">
                                                <button class=\"btn btn-dark\" data-toggle=\"tooltip\"
                                                        title=\"exportar a pdf este producto\"><i
                                                            class=\"fas fa-file-pdf\"></i>
                                                </button>
                                            </a>
                                            ";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "cantidadVentas", [], "method", false, false, false, 120) == 0)) {
                // line 121
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_form_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 121)]), "html", null, true);
                echo "\">
                                                    <button class=\"btn btn-success\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Editar\"><i
                                                                class=\"fas fa-edit\"></i>
                                                    </button>
                                                </a>
                                            ";
            }
            // line 129
            echo "                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 132
            echo "                                    <tr>
                                        <td colspan=\"9\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
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
        // line 191
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
        return array (  416 => 191,  377 => 155,  373 => 154,  369 => 153,  365 => 152,  360 => 150,  356 => 149,  350 => 147,  343 => 146,  328 => 136,  319 => 132,  312 => 129,  300 => 121,  298 => 120,  289 => 114,  280 => 108,  277 => 107,  273 => 105,  269 => 103,  267 => 102,  263 => 101,  259 => 100,  254 => 99,  250 => 97,  246 => 95,  244 => 94,  239 => 93,  235 => 91,  227 => 86,  223 => 84,  221 => 83,  217 => 82,  212 => 81,  208 => 79,  206 => 78,  203 => 77,  201 => 76,  196 => 75,  193 => 74,  190 => 73,  187 => 72,  184 => 71,  178 => 70,  175 => 69,  170 => 68,  167 => 67,  162 => 66,  134 => 41,  119 => 29,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
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
                        <h3 class=\"card-title\">Listado de Productos</h3>
                        <div class=\"card-tools\">
                            <a href=\"{{ path('app_producto_list_pdf') }}\">
                                <button class=\"btn btn-dark\" data-toggle=\"tooltip\"
                                        title=\"exportar a pdf listado de productos\"><i
                                            class=\"fas fa-file-pdf\"></i>
                                </button>
                            </a>
                        </div>
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
                                            <a href=\"{{ path('app_producto_pdf', {'id': producto.id}) }}\">
                                                <button class=\"btn btn-dark\" data-toggle=\"tooltip\"
                                                        title=\"exportar a pdf este producto\"><i
                                                            class=\"fas fa-file-pdf\"></i>
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
