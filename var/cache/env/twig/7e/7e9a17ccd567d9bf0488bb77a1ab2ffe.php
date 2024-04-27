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

/* producto_agotado/index.html.twig */
class __TwigTemplate_53ce99a2e7915f1124eaa98af4be6c25 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto_agotado/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto_agotado/index.html.twig", 1);
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
                            <h3>Listado de Productos Agotados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Tipo de Producto</th>
                                        <th>Nombre</th>
                                        <th>Imagen del Producto</th>
                                        <th>Beneficio por Venta</th>
                                        <th>Stock</th>
                                        <th>Usuario Asignado</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 48
            echo "                                        <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"text-center\">
                                            ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 49) == 1)) {
                // line 50
                echo "                                                <td>General</td>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["producto"], "tipoProducto", [], "any", false, false, false, 51) == 2)) {
                // line 52
                echo "                                                <td>Libro</td>
                                            ";
            }
            // line 54
            echo "                                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                            ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 55)) {
                // line 56
                echo "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 57))), "html", null, true);
                echo "\"
                                                         alt=\"Foto Producto\"></td>
                                            ";
            } else {
                // line 60
                echo "                                                <td>-</td>
                                            ";
            }
            // line 62
            echo "                                            <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 62) . " ") . twig_get_attribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 62)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                            <td>";
            // line 64
            ((twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 64), "nombre", [], "any", false, false, false, 64) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 64), "apellidos", [], "any", false, false, false, 64)), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td style=\"margin: 0 auto;\">
                                                <button style=\"margin-left: 20px\"
                                                        class=\"btn btn-primary stock\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Agregar stock\"><i
                                                            class=\"fas fa-plus\"></i>
                                                </button>
                                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_show", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">
                                                    <button style=\"margin-left: 20px\"
                                                            class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "                                        <tr>
                                            <td colspan=\"7\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 94
        echo twig_include($this->env, $context, "producto_agotado/modalAddStock.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
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

            toastr.options = {
                \"closeButton\": false,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-right\",
                \"preventDuplicates\": true,
                \"onclick\": null,
                \"showDuration\": \"300\",
                \"hideDuration\": \"500\",
                \"timeOut\": \"3000\",
                \"extendedTimeOut\": \"500\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            let idProducto;

            \$('#dataProductos tbody').on('click', '.stock', function () {
                let row = \$(this).parents('tr');
                idProducto = row.data('id');

                \$('#modalAddStock').modal('show');
            });

            \$('#btnAddGuardar').on('click', function () {

                //Validaciones
                if (\$(\"#stock\").val() == '') {
                    toastr[\"error\"]('El stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#avisoStock\").val() == '') {
                    toastr[\"error\"]('El aviso de stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (parseInt(\$(\"#avisoStock\").val()) > parseInt(\$(\"#stock\").val())) {
                    toastr[\"error\"]('El aviso de stock no puede ser mayor que el stock del producto.', \"Advertencia\")
                    return false;
                }

                let Ruta = Routing.generate('app_producto_agotado_stock', {'id': idProducto});

                \$('#modalAddStock').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    stock: parseInt(\$(\"#stock\").val()),
                    aviso: parseInt(\$(\"#avisoStock\").val()),
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalAddStock input').each(function () {
                            \$(this).val('');
                        });
                        toastr[\"success\"]('Se registro el aumento del stock de este producto', \"Notificación\")
                        window.location.href = \"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_agotado_index");
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
        return "producto_agotado/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 188,  276 => 107,  272 => 106,  268 => 105,  264 => 104,  259 => 102,  255 => 101,  249 => 99,  242 => 98,  232 => 94,  222 => 86,  213 => 82,  198 => 72,  187 => 64,  183 => 63,  178 => 62,  174 => 60,  168 => 57,  165 => 56,  163 => 55,  158 => 54,  154 => 52,  152 => 51,  149 => 50,  147 => 49,  142 => 48,  137 => 47,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
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
                            <h3>Listado de Productos Agotados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Tipo de Producto</th>
                                        <th>Nombre</th>
                                        <th>Imagen del Producto</th>
                                        <th>Beneficio por Venta</th>
                                        <th>Stock</th>
                                        <th>Usuario Asignado</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for producto in productos %}
                                        <tr data-id=\"{{ producto.id }}\" class=\"text-center\">
                                            {% if producto.tipoProducto == 1 %}
                                                <td>General</td>
                                            {% elseif producto.tipoProducto == 2 %}
                                                <td>Libro</td>
                                            {% endif %}
                                            <td>{{ producto.nombre }}</td>
                                            {% if producto.imagen %}
                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"{{ asset('uploads/' ~ producto.imagen) }}\"
                                                         alt=\"Foto Producto\"></td>
                                            {% else %}
                                                <td>-</td>
                                            {% endif %}
                                            <td>{{ producto.beneficioxventa ~ ' ' ~ producto.tipodemoneda }}</td>
                                            <td>{{ producto.Stock }}</td>
                                            <td>{{ producto.user ? producto.user.nombre ~ ' ' ~ producto.user.apellidos }}</td>
                                            <td style=\"margin: 0 auto;\">
                                                <button style=\"margin-left: 20px\"
                                                        class=\"btn btn-primary stock\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Agregar stock\"><i
                                                            class=\"fas fa-plus\"></i>
                                                </button>
                                                <a href=\"{{ path('app_producto_show', {'id': producto.id}) }}\">
                                                    <button style=\"margin-left: 20px\"
                                                            class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"7\">No se encontraron registros</td>
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
        {{ include('producto_agotado/modalAddStock.html.twig') }}
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

            toastr.options = {
                \"closeButton\": false,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-right\",
                \"preventDuplicates\": true,
                \"onclick\": null,
                \"showDuration\": \"300\",
                \"hideDuration\": \"500\",
                \"timeOut\": \"3000\",
                \"extendedTimeOut\": \"500\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            let idProducto;

            \$('#dataProductos tbody').on('click', '.stock', function () {
                let row = \$(this).parents('tr');
                idProducto = row.data('id');

                \$('#modalAddStock').modal('show');
            });

            \$('#btnAddGuardar').on('click', function () {

                //Validaciones
                if (\$(\"#stock\").val() == '') {
                    toastr[\"error\"]('El stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#avisoStock\").val() == '') {
                    toastr[\"error\"]('El aviso de stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (parseInt(\$(\"#avisoStock\").val()) > parseInt(\$(\"#stock\").val())) {
                    toastr[\"error\"]('El aviso de stock no puede ser mayor que el stock del producto.', \"Advertencia\")
                    return false;
                }

                let Ruta = Routing.generate('app_producto_agotado_stock', {'id': idProducto});

                \$('#modalAddStock').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    stock: parseInt(\$(\"#stock\").val()),
                    aviso: parseInt(\$(\"#avisoStock\").val()),
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalAddStock input').each(function () {
                            \$(this).val('');
                        });
                        toastr[\"success\"]('Se registro el aumento del stock de este producto', \"Notificación\")
                        window.location.href = \"{{ path('app_producto_agotado_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });
            });

        });
    </script>
{% endblock %}
", "producto_agotado/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto_agotado\\index.html.twig");
    }
}
