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

/* producto_agotado/indexUser.html.twig */
class __TwigTemplate_a1c9df1307be499ac256b63945e598d3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto_agotado/indexUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto_agotado/indexUser.html.twig", 1);
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
        yield "    <!-- Content Wrapper. Contains page content -->
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
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 39
            yield "                                        <tr class=\"text-center\">
                                            ";
            // line 40
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 40) == 1)) {
                // line 41
                yield "                                                <td>General</td>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 42
$context["producto"], "tipoProducto", [], "any", false, false, false, 42) == 2)) {
                // line 43
                yield "                                                <td>Libro</td>
                                            ";
            }
            // line 45
            yield "                                            <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                            ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 46)) {
                // line 47
                yield "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 48
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 48))), "html", null, true);
                yield "\"
                                                         alt=\"Foto Producto\"></td>
                                            ";
            } else {
                // line 51
                yield "                                                <td>-</td>
                                            ";
            }
            // line 53
            yield "                                            <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 53) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 53)), "html", null, true);
            yield "</td>
                                            <td>";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            yield "                                        <tr>
                                            <td colspan=\"5\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                                    </tbody>
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

        return; yield '';
    }

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- DataTables -->
    <script src=\"";
        // line 75
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 76
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 77
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 78
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
        return "producto_agotado/indexUser.html.twig";
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
        return array (  234 => 78,  230 => 77,  226 => 76,  222 => 75,  216 => 73,  209 => 72,  192 => 61,  183 => 57,  175 => 54,  170 => 53,  166 => 51,  160 => 48,  157 => 47,  155 => 46,  150 => 45,  146 => 43,  144 => 42,  141 => 41,  139 => 40,  136 => 39,  131 => 38,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
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
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for producto in productos %}
                                        <tr class=\"text-center\">
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
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"5\">No se encontraron registros</td>
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
                \"lengthMenu\": [[6], [6]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });
        });
    </script>
{% endblock %}
", "producto_agotado/indexUser.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto_agotado\\indexUser.html.twig");
    }
}
