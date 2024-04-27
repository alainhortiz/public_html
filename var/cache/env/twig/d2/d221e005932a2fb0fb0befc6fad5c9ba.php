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

/* producto/index.html.twig */
class __TwigTemplate_d906115a40463dd685460406943d1ae1 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Listado de Productos";
        
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
        yield "    <div class=\"preload hidden\">
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_list_pdf");
        yield "\">
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_form_new");
        yield "\">
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 67
            yield "                                    ";
            $context["vendidos"] = 0;
            // line 68
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "ventas", [], "method", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
                // line 69
                yield "                                        ";
                $context["vendidos"] = ((isset($context["vendidos"]) || array_key_exists("vendidos", $context) ? $context["vendidos"] : (function () { throw new RuntimeError('Variable "vendidos" does not exist.', 69, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "cantidad", [], "any", false, false, false, 69));
                // line 70
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "                                    ";
            $context["disponible"] = 0;
            // line 72
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 72) <= CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "stockAdvertencia", [], "any", false, false, false, 72))) {
                // line 73
                yield "                                        ";
                $context["disponible"] = 1;
                // line 74
                yield "                                    ";
            }
            // line 75
            yield "                                    <tr data-id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "\" class=\"text-center\">
                                        ";
            // line 76
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 76) == 1)) {
                // line 77
                yield "                                            <td>General</td>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 78
$context["producto"], "tipoProducto", [], "any", false, false, false, 78) == 2)) {
                // line 79
                yield "                                            <td>Libro</td>
                                        ";
            }
            // line 81
            yield "                                        <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "idd", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                                        <td>";
            // line 82
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                                        ";
            // line 83
            if (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 83)) {
                // line 84
                yield "                                            <td>
                                                <div class=\"product-image-thumb active\"><img width=\"80\" height=\"80\"
                                                                                             src=\"";
                // line 86
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 86))), "html", null, true);
                yield "\"
                                                                                             alt=\"Foto Producto\">
                                                </div>
                                            </td>
                                        ";
            } else {
                // line 91
                yield "                                            <td>-</td>
                                        ";
            }
            // line 93
            yield "                                        <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                                        ";
            // line 94
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 94)) > 0)) {
                // line 95
                yield "                                            <td>Si</td>
                                        ";
            } else {
                // line 97
                yield "                                            <td>No</td>
                                        ";
            }
            // line 99
            yield "                                        <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["vendidos"]) || array_key_exists("vendidos", $context) ? $context["vendidos"] : (function () { throw new RuntimeError('Variable "vendidos" does not exist.', 99, $this->source); })()), "html", null, true);
            yield "</td>
                                        <td>";
            // line 100
            yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 100), 2, ".", ",") . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 100)), "html", null, true);
            yield "</td>
                                        <td>";
            // line 101
            ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 101)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 101), "nombre", [], "any", false, false, false, 101) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 101), "apellidos", [], "any", false, false, false, 101)), "html", null, true)) : (yield ""));
            yield "</td>
                                        ";
            // line 102
            if (((isset($context["disponible"]) || array_key_exists("disponible", $context) ? $context["disponible"] : (function () { throw new RuntimeError('Variable "disponible" does not exist.', 102, $this->source); })()) == 1)) {
                // line 103
                yield "                                            <td>Si</td>
                                        ";
            } else {
                // line 105
                yield "                                            <td>No</td>
                                        ";
            }
            // line 107
            yield "                                        <td style=\"margin: 0 auto;\">
                                            <a href=\"";
            // line 108
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\">
                                                <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                        title=\"ver\"><i
                                                            class=\"fas fa-info\"></i>
                                                </button>
                                            </a>
                                            <a href=\"";
            // line 114
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            yield "\">
                                                <button class=\"btn btn-dark\" data-toggle=\"tooltip\"
                                                        title=\"exportar a pdf este producto\"><i
                                                            class=\"fas fa-file-pdf\"></i>
                                                </button>
                                            </a>
                                            ";
            // line 120
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "cantidadVentas", [], "method", false, false, false, 120) == 0)) {
                // line 121
                yield "                                                <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_form_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 121)]), "html", null, true);
                yield "\">
                                                    <button class=\"btn btn-success\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Editar\"><i
                                                                class=\"fas fa-edit\"></i>
                                                    </button>
                                                </a>
                                            ";
            }
            // line 129
            yield "                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 132
            yield "                                    <tr>
                                        <td colspan=\"9\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "                                </tbody>
                            </table>
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

    // line 146
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 149
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 152
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 153
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 154
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 155
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        yield "\";
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "producto/index.html.twig";
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
        return array (  420 => 191,  381 => 155,  377 => 154,  373 => 153,  369 => 152,  364 => 150,  360 => 149,  354 => 147,  347 => 146,  331 => 136,  322 => 132,  315 => 129,  303 => 121,  301 => 120,  292 => 114,  283 => 108,  280 => 107,  276 => 105,  272 => 103,  270 => 102,  266 => 101,  262 => 100,  257 => 99,  253 => 97,  249 => 95,  247 => 94,  242 => 93,  238 => 91,  230 => 86,  226 => 84,  224 => 83,  220 => 82,  215 => 81,  211 => 79,  209 => 78,  206 => 77,  204 => 76,  199 => 75,  196 => 74,  193 => 73,  190 => 72,  187 => 71,  181 => 70,  178 => 69,  173 => 68,  170 => 67,  165 => 66,  137 => 41,  122 => 29,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
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
