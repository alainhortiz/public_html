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

/* pack/show.html.twig */
class __TwigTemplate_4f94f1758820c12bab2a70d335ffef69 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pack/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Pack de Productos";
        
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
                            <h3>Pack de Productos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataPack\">
                                    <tbody>
                                    <tr>
                                        <th>Nombre</th>
                                        <td>";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProducto"]) || array_key_exists("packProducto", $context) ? $context["packProducto"] : (function () { throw new RuntimeError('Variable "packProducto" does not exist.', 31, $this->source); })()), "nombre", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                                    </tr>
                                    ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProducto"]) || array_key_exists("packProducto", $context) ? $context["packProducto"] : (function () { throw new RuntimeError('Variable "packProducto" does not exist.', 33, $this->source); })()), "imagen", [], "any", false, false, false, 33)) {
            // line 34
            yield "                                        <tr>
                                            <th>Imagen</th>
                                            <td><img width=\"50\" height=\"50\"
                                                     src=\"";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProducto"]) || array_key_exists("packProducto", $context) ? $context["packProducto"] : (function () { throw new RuntimeError('Variable "packProducto" does not exist.', 37, $this->source); })()), "imagen", [], "any", false, false, false, 37))), "html", null, true);
            yield "\"
                                                     alt=\"Foto Pack\"></td>
                                        </tr>
                                    ";
        }
        // line 41
        yield "                                    <tr>
                                        <th>Beneficio total por venta</th>
                                        <td>";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProducto"]) || array_key_exists("packProducto", $context) ? $context["packProducto"] : (function () { throw new RuntimeError('Variable "packProducto" does not exist.', 43, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Moneda</th>
                                        <td>";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProducto"]) || array_key_exists("packProducto", $context) ? $context["packProducto"] : (function () { throw new RuntimeError('Variable "packProducto" does not exist.', 47, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 47), "html", null, true);
        yield "</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        ";
        // line 53
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProducto"]) || array_key_exists("packProducto", $context) ? $context["packProducto"] : (function () { throw new RuntimeError('Variable "packProducto" does not exist.', 53, $this->source); })()), "productos", [], "any", false, false, false, 53)) > 0)) {
            // line 54
            yield "                            <div class=\"row\">
                                <div class=\"card-header\" style=\"background-color: #343a40\">
                                    <div class=\"card-title text-white\">
                                        <h3>Productos</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                    <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                        <thead class=\"text-center\">
                                        <tr>
                                            <th>Tipo de Producto</th>
                                            <th>Nombre</th>
                                            <th>Imagen del Producto</th>
                                            <th>Stock</th>
                                            <th>Amortización</th>
                                            <th>Beneficio por Venta</th>
                                            <th>Usuario Asignado</th>
                                            <th>Producto Agotado</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"text-center\">
                                        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProducto"]) || array_key_exists("packProducto", $context) ? $context["packProducto"] : (function () { throw new RuntimeError('Variable "packProducto" does not exist.', 77, $this->source); })()), "productos", [], "any", false, false, false, 77));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 78
                yield "                                            ";
                $context["disponible"] = 0;
                // line 79
                yield "                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 79), "stock", [], "any", false, false, false, 79) <= CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 79), "stockAdvertencia", [], "any", false, false, false, 79))) {
                    // line 80
                    yield "                                                ";
                    $context["disponible"] = 1;
                    // line 81
                    yield "                                            ";
                }
                // line 82
                yield "                                            <tr data-id=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 82), "html", null, true);
                yield "\" class=\"text-center\">
                                                ";
                // line 83
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 83), "tipoProducto", [], "any", false, false, false, 83) == 1)) {
                    // line 84
                    yield "                                                    <td>General</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 85
$context["producto"], "producto", [], "any", false, false, false, 85), "tipoProducto", [], "any", false, false, false, 85) == 2)) {
                    // line 86
                    yield "                                                    <td>Libro</td>
                                                ";
                }
                // line 88
                yield "                                                <td>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 88), "nombre", [], "any", false, false, false, 88), "html", null, true);
                yield "</td>
                                                ";
                // line 89
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 89), "imagen", [], "any", false, false, false, 89)) {
                    // line 90
                    yield "                                                    <td><img width=\"80\" height=\"80\"
                                                             src=\"";
                    // line 91
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 91), "imagen", [], "any", false, false, false, 91))), "html", null, true);
                    yield "\"
                                                             alt=\"Foto Producto\"></td>
                                                ";
                } else {
                    // line 94
                    yield "                                                    <td>-</td>
                                                ";
                }
                // line 96
                yield "                                                <td>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 96), "Stock", [], "any", false, false, false, 96), "html", null, true);
                yield "</td>
                                                ";
                // line 97
                if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 97), "amortizaciones", [], "any", false, false, false, 97)) > 0)) {
                    // line 98
                    yield "                                                    <td>Si</td>
                                                ";
                } else {
                    // line 100
                    yield "                                                    <td>No</td>
                                                ";
                }
                // line 102
                yield "                                                <td>";
                yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 102), 2, ".", ",") . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProducto"]) || array_key_exists("packProducto", $context) ? $context["packProducto"] : (function () { throw new RuntimeError('Variable "packProducto" does not exist.', 102, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 102)), "html", null, true);
                yield "</td>
                                                <td>";
                // line 103
                ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 103), "user", [], "any", false, false, false, 103)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 103), "user", [], "any", false, false, false, 103), "nombre", [], "any", false, false, false, 103) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 103), "user", [], "any", false, false, false, 103), "apellidos", [], "any", false, false, false, 103)), "html", null, true)) : (yield ""));
                yield "</td>
                                                ";
                // line 104
                if (((isset($context["disponible"]) || array_key_exists("disponible", $context) ? $context["disponible"] : (function () { throw new RuntimeError('Variable "disponible" does not exist.', 104, $this->source); })()) == 1)) {
                    // line 105
                    yield "                                                    <td>Si</td>
                                                ";
                } else {
                    // line 107
                    yield "                                                    <td>No</td>
                                                ";
                }
                // line 109
                yield "                                            </tr>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 111
                yield "                                            <tr>
                                                <td colspan=\"7\">No se encontraron registros</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        ";
        }
        // line 120
        yield "                    </div>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\"
                           href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 131
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- DataTables -->
    <script src=\"";
        // line 134
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 135
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 136
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 137
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$(function () {

            \$('#dataProductos').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[3], [3]],
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
        return "pack/show.html.twig";
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
        return array (  344 => 137,  340 => 136,  336 => 135,  332 => 134,  326 => 132,  319 => 131,  304 => 123,  299 => 120,  292 => 115,  283 => 111,  277 => 109,  273 => 107,  269 => 105,  267 => 104,  263 => 103,  258 => 102,  254 => 100,  250 => 98,  248 => 97,  243 => 96,  239 => 94,  233 => 91,  230 => 90,  228 => 89,  223 => 88,  219 => 86,  217 => 85,  214 => 84,  212 => 83,  207 => 82,  204 => 81,  201 => 80,  198 => 79,  195 => 78,  190 => 77,  165 => 54,  163 => 53,  154 => 47,  147 => 43,  143 => 41,  136 => 37,  131 => 34,  129 => 33,  124 => 31,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pack de Productos{% endblock %}

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
                            <h3>Pack de Productos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataPack\">
                                    <tbody>
                                    <tr>
                                        <th>Nombre</th>
                                        <td>{{ packProducto.nombre }}</td>
                                    </tr>
                                    {% if packProducto.imagen %}
                                        <tr>
                                            <th>Imagen</th>
                                            <td><img width=\"50\" height=\"50\"
                                                     src=\"{{ asset('uploads/' ~ packProducto.imagen) }}\"
                                                     alt=\"Foto Pack\"></td>
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <th>Beneficio total por venta</th>
                                        <td>{{ packProducto.beneficioxventa }}</td>
                                    </tr>
                                    <tr>
                                        <th>Moneda</th>
                                        <td>{{ packProducto.tipodemoneda }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {% if packProducto.productos|length > 0 %}
                            <div class=\"row\">
                                <div class=\"card-header\" style=\"background-color: #343a40\">
                                    <div class=\"card-title text-white\">
                                        <h3>Productos</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                    <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                        <thead class=\"text-center\">
                                        <tr>
                                            <th>Tipo de Producto</th>
                                            <th>Nombre</th>
                                            <th>Imagen del Producto</th>
                                            <th>Stock</th>
                                            <th>Amortización</th>
                                            <th>Beneficio por Venta</th>
                                            <th>Usuario Asignado</th>
                                            <th>Producto Agotado</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"text-center\">
                                        {% for producto in packProducto.productos %}
                                            {% set disponible = 0 %}
                                            {% if producto.producto.stock <= producto.producto.stockAdvertencia %}
                                                {% set disponible = 1 %}
                                            {% endif %}
                                            <tr data-id=\"{{ producto.id }}\" class=\"text-center\">
                                                {% if producto.producto.tipoProducto == 1 %}
                                                    <td>General</td>
                                                {% elseif producto.producto.tipoProducto == 2 %}
                                                    <td>Libro</td>
                                                {% endif %}
                                                <td>{{ producto.producto.nombre }}</td>
                                                {% if producto.producto.imagen %}
                                                    <td><img width=\"80\" height=\"80\"
                                                             src=\"{{ asset('uploads/' ~ producto.producto.imagen) }}\"
                                                             alt=\"Foto Producto\"></td>
                                                {% else %}
                                                    <td>-</td>
                                                {% endif %}
                                                <td>{{ producto.producto.Stock }}</td>
                                                {% if producto.producto.amortizaciones|length > 0 %}
                                                    <td>Si</td>
                                                {% else %}
                                                    <td>No</td>
                                                {% endif %}
                                                <td>{{ producto.beneficioxventa|number_format(2, '.', ',') ~ ' ' ~ packProducto.tipodemoneda }}</td>
                                                <td>{{ producto.producto.user ? producto.producto.user.nombre ~ ' ' ~ producto.producto.user.apellidos }}</td>
                                                {% if disponible == 1 %}
                                                    <td>Si</td>
                                                {% else %}
                                                    <td>No</td>
                                                {% endif %}
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
                        {% endif %}
                    </div>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\"
                           href=\"{{ path('app_pack_index') }}\">Regresar</a>
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
                \"lengthMenu\": [[3], [3]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

        });
    </script>
{% endblock %}
", "pack/show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\pack\\show.html.twig");
    }
}
