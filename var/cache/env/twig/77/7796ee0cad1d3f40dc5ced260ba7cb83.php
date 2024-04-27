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

/* producto/show.html.twig */
class __TwigTemplate_c40af27768d80e4a5f4f15f1eaa840f7 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Producto";
        
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
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 31, $this->source); })()), "tipoProducto", [], "any", false, false, false, 31) == 1)) {
            // line 32
            yield "                                            <td>General</td>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 33, $this->source); })()), "tipoProducto", [], "any", false, false, false, 33) == 2)) {
            // line 34
            yield "                                            <td>Libro</td>
                                        ";
        }
        // line 36
        yield "                                    </tr>
                                    <tr>
                                        <th>Nombre</th>
                                        <td>";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 39, $this->source); })()), "nombre", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>IDD</th>
                                        <td>";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 43, $this->source); })()), "idd", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
                                    </tr>
                                    ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 45, $this->source); })()), "imagen", [], "any", false, false, false, 45)) {
            // line 46
            yield "                                        <tr>
                                            <th>Imagen</th>
                                            <td>
                                                <div class=\"product-image-thumb active\"><img width=\"50\" height=\"50\"
                                                                                             src=\"";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 50, $this->source); })()), "imagen", [], "any", false, false, false, 50))), "html", null, true);
            yield "\"
                                                                                             alt=\"Foto Producto\"></div>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 55
        yield "                                    <tr>
                                        <th>Beneficio por Venta</th>
                                        <td>";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 57, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 57), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Moneda</th>
                                        <td>";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 61, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 61), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Stock</th>
                                        <td>";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 65, $this->source); })()), "stock", [], "any", false, false, false, 65), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Aviso Stock</th>
                                        <td>";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 69, $this->source); })()), "stockAdvertencia", [], "any", false, false, false, 69), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Usuario Asignado</th>
                                        <td>";
        // line 73
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "nombre", [], "any", false, false, false, 73) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "apellidos", [], "any", false, false, false, 73)), "html", null, true)) : (yield ""));
        yield "</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        ";
        // line 79
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 79, $this->source); })()), "amortizaciones", [], "any", false, false, false, 79)) > 0)) {
            // line 80
            yield "                            <div class=\"row\">
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
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 99, $this->source); })()), "amortizaciones", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
                // line 100
                yield "                                            <tr class=\"text-center\">
                                                <td>";
                // line 101
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "costoProduccion", [], "any", false, false, false, 101), 2, ".", ","), "html", null, true);
                yield "</td>
                                                <td>";
                // line 102
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 102), 2, ".", ","), "html", null, true);
                yield "</td>
                                                <td>";
                // line 103
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 103), 2, ".", ","), "html", null, true);
                yield "</td>
                                                ";
                // line 104
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "isAdministrador", [], "any", false, false, false, 104) == "1")) {
                    // line 105
                    yield "                                                    <td>Administrador</td>
                                                ";
                } else {
                    // line 107
                    yield "                                                    <td>";
                    yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "nombre", [], "any", false, false, false, 107) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "apellidos", [], "any", false, false, false, 107)), "html", null, true);
                    yield "</td>
                                                ";
                }
                // line 109
                yield "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        ";
        }
        // line 116
        yield "                    </div>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\"
                           href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        yield "\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"";
        // line 122
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_form_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122)]), "html", null, true);
        yield "\">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- DataTables -->
    <script src=\"";
        // line 133
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 134
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 135
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 136
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "producto/show.html.twig";
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
        return array (  328 => 136,  324 => 135,  320 => 134,  316 => 133,  310 => 131,  303 => 130,  288 => 122,  282 => 119,  277 => 116,  270 => 111,  263 => 109,  257 => 107,  253 => 105,  251 => 104,  247 => 103,  243 => 102,  239 => 101,  236 => 100,  232 => 99,  211 => 80,  209 => 79,  200 => 73,  193 => 69,  186 => 65,  179 => 61,  172 => 57,  168 => 55,  160 => 50,  154 => 46,  152 => 45,  147 => 43,  140 => 39,  135 => 36,  131 => 34,  129 => 33,  126 => 32,  124 => 31,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
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
