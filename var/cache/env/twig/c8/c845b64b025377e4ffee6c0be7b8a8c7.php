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

/* producto_agotado/index.html.twig */
class __TwigTemplate_55063a54a283303a208780839a8a69fb extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 48
            yield "                                        <tr data-id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\" class=\"text-center\">
                                            ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 49) == 1)) {
                // line 50
                yield "                                                <td>General</td>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 51
$context["producto"], "tipoProducto", [], "any", false, false, false, 51) == 2)) {
                // line 52
                yield "                                                <td>Libro</td>
                                            ";
            }
            // line 54
            yield "                                            <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                                            ";
            // line 55
            if (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 55)) {
                // line 56
                yield "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 57
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 57))), "html", null, true);
                yield "\"
                                                         alt=\"Foto Producto\"></td>
                                            ";
            } else {
                // line 60
                yield "                                                <td>-</td>
                                            ";
            }
            // line 62
            yield "                                            <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 62) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 62)), "html", null, true);
            yield "</td>
                                            <td>";
            // line 63
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                                            <td>";
            // line 64
            ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 64)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 64), "nombre", [], "any", false, false, false, 64) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 64), "apellidos", [], "any", false, false, false, 64)), "html", null, true)) : (yield ""));
            yield "</td>
                                            <td style=\"margin: 0 auto;\">
                                                <button style=\"margin-left: 20px\"
                                                        class=\"btn btn-primary stock\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Agregar stock\"><i
                                                            class=\"fas fa-plus\"></i>
                                                </button>
                                                <a href=\"";
            // line 72
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\">
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
            yield "                                        <tr>
                                            <td colspan=\"7\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 94
        yield Twig\Extension\CoreExtension::include($this->env, $context, "producto_agotado/modalAddStock.html.twig");
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 101
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 104
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 105
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 106
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 107
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_agotado_index");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });
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
        return "producto_agotado/index.html.twig";
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
        return array (  364 => 188,  280 => 107,  276 => 106,  272 => 105,  268 => 104,  263 => 102,  259 => 101,  253 => 99,  246 => 98,  235 => 94,  225 => 86,  216 => 82,  201 => 72,  190 => 64,  186 => 63,  181 => 62,  177 => 60,  171 => 57,  168 => 56,  166 => 55,  161 => 54,  157 => 52,  155 => 51,  152 => 50,  150 => 49,  145 => 48,  140 => 47,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
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
