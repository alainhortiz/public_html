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

/* producto/detail_index.html.twig */
class __TwigTemplate_98192496ac717c7898818937818e6623 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page' => [$this, 'block_page'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/detail_index.html.twig"));

        // line 1
        $this->displayBlock('page', $context, $blocks);
        // line 87
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 2
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content\">
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
                        <div class=\"table\" style=\"padding-left: 5px\">
                            <table class=\"table\" id=\"dataProductos\">
                                <thead>
                                <tr>
                                    <th>Tipo de Producto</th>
                                    <th>ID</th>
                                    <th>Nombre</th>
";
        // line 22
        echo "                                    <th>Stock</th>
                                    <th>Amortización</th>
                                    <th>Vendidos</th>
                                    <th>Beneficio por Venta</th>
                                    <th>Usuario Asignado</th>
                                    <th>Producto Agotado</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 32
            echo "                                    ";
            $context["vendidos"] = 0;
            // line 33
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["producto"], "ventas", [], "method", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
                // line 34
                echo "                                        ";
                $context["vendidos"] = ((isset($context["vendidos"]) || array_key_exists("vendidos", $context) ? $context["vendidos"] : (function () { throw new RuntimeError('Variable "vendidos" does not exist.', 34, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["venta"], "cantidad", [], "any", false, false, false, 34));
                // line 35
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                    ";
            $context["disponible"] = 0;
            // line 37
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 37) <= twig_get_attribute($this->env, $this->source, $context["producto"], "stockAdvertencia", [], "any", false, false, false, 37))) {
                // line 38
                echo "                                        ";
                $context["disponible"] = 1;
                // line 39
                echo "                                    ";
            }
            // line 40
            echo "                                    <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" class=\"text-center\">
                                        ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 41) == 1)) {
                // line 42
                echo "                                            <td>General</td>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 43
$context["producto"], "tipoProducto", [], "any", false, false, false, 43) == 2)) {
                // line 44
                echo "                                            <td>Libro</td>
                                        ";
            }
            // line 46
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "idd", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
";
            // line 58
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                        ";
            // line 59
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 59)) > 0)) {
                // line 60
                echo "                                            <td>Si</td>
                                        ";
            } else {
                // line 62
                echo "                                            <td>No</td>
                                        ";
            }
            // line 64
            echo "                                        <td>";
            echo twig_escape_filter($this->env, (isset($context["vendidos"]) || array_key_exists("vendidos", $context) ? $context["vendidos"] : (function () { throw new RuntimeError('Variable "vendidos" does not exist.', 64, $this->source); })()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, ((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 65), 2, ".", ",") . " ") . twig_get_attribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 65)), "html", null, true);
            echo "</td>
                                        <td>";
            // line 66
            ((twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 66), "nombre", [], "any", false, false, false, 66) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 66), "apellidos", [], "any", false, false, false, 66)), "html", null, true))) : (print ("")));
            echo "</td>
                                        ";
            // line 67
            if (((isset($context["disponible"]) || array_key_exists("disponible", $context) ? $context["disponible"] : (function () { throw new RuntimeError('Variable "disponible" does not exist.', 67, $this->source); })()) == 1)) {
                // line 68
                echo "                                            <td>Si</td>
                                        ";
            } else {
                // line 70
                echo "                                            <td>No</td>
                                        ";
            }
            // line 72
            echo "                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "                                    <tr>
                                        <td colspan=\"9\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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

    public function getTemplateName()
    {
        return "producto/detail_index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  203 => 78,  194 => 74,  188 => 72,  184 => 70,  180 => 68,  178 => 67,  174 => 66,  170 => 65,  165 => 64,  161 => 62,  157 => 60,  155 => 59,  150 => 58,  146 => 47,  141 => 46,  137 => 44,  135 => 43,  132 => 42,  130 => 41,  125 => 40,  122 => 39,  119 => 38,  116 => 37,  113 => 36,  107 => 35,  104 => 34,  99 => 33,  96 => 32,  91 => 31,  80 => 22,  59 => 2,  52 => 1,  43 => 87,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content\">
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
                        <div class=\"table\" style=\"padding-left: 5px\">
                            <table class=\"table\" id=\"dataProductos\">
                                <thead>
                                <tr>
                                    <th>Tipo de Producto</th>
                                    <th>ID</th>
                                    <th>Nombre</th>
{#                                    <th>Imagen del Producto</th>#}
                                    <th>Stock</th>
                                    <th>Amortización</th>
                                    <th>Vendidos</th>
                                    <th>Beneficio por Venta</th>
                                    <th>Usuario Asignado</th>
                                    <th>Producto Agotado</th>
                                </tr>
                                </thead>
                                <tbody>
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
{#                                        {% if producto.imagen %}#}
{#                                            <td>#}
{#                                                <div class=\"product-image-thumb active\"><img width=\"80\" height=\"80\"#}
{#                                                                                             src=\"{{ asset('uploads/' ~ producto.imagen) }}\"#}
{#                                                                                             alt=\"Foto Producto\">#}
{#                                                </div>#}
{#                                            </td>#}
{#                                        {% else %}#}
{#                                            <td>-</td>#}
{#                                        {% endif %}#}
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


", "producto/detail_index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto\\detail_index.html.twig");
    }
}
