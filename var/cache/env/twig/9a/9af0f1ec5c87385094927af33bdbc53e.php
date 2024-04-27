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

/* producto/details_show.html.twig */
class __TwigTemplate_edb39b9fa39e831d8fb335a7ad5be260 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/details_show.html.twig"));

        // line 1
        $this->displayBlock('page', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 2
        echo "\t<!-- Content Wrapper. Contains page content -->
\t<div
\t\tclass=\"content\">
\t\t<!-- Content Header (Page header) -->
\t\t<div class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t<h3>Descripción del Producto</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"table\" style=\"padding-left: 5px\">
\t\t\t\t\t\t\t\t<table class=\"table\" id=\"dataProductos\">
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Tipo</th>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 21, $this->source); })()), "tipoProducto", [], "any", false, false, false, 21) == 1)) {
            // line 22
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>General</td>
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 23, $this->source); })()), "tipoProducto", [], "any", false, false, false, 23) == 2)) {
            // line 24
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>Libro</td>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 29, $this->source); })()), "nombre", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>IDD</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 33, $this->source); })()), "idd", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 35, $this->source); })()), "imagen", [], "any", false, false, false, 35)) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Imagen</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-thumb active\"><img width=\"50\" height=\"50\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 39, $this->source); })()), "imagen", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" alt=\"Foto Producto\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Beneficio por Venta</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 45, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Moneda</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 49, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Stock</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 53, $this->source); })()), "stock", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Aviso Stock</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 57, $this->source); })()), "stockAdvertencia", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Usuario Asignado</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 61
        ((twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "nombre", [], "any", false, false, false, 61) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "apellidos", [], "any", false, false, false, 61)), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 67
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 67, $this->source); })()), "amortizaciones", [], "any", false, false, false, 67)) > 0)) {
            // line 68
            echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t<h3>Amortizaciones</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"table\" style=\"padding-left: 5px\">
\t\t\t\t\t\t\t\t\t<table class=\"table\" id=\"dataAmortizaciones\">
\t\t\t\t\t\t\t\t\t\t<thead class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Costo de Producción</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Precio de Venta</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Por liquidar</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Beneficiado</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 87, $this->source); })()), "amortizaciones", [], "any", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 89
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "costoProduccion", [], "any", false, false, false, 89), 2, ".", ","), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 90
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 90), 2, ".", ","), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 91
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 91), 2, ".", ","), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["amortizacion"], "isAdministrador", [], "any", false, false, false, 92) == "1")) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Administrador</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "nombre", [], "any", false, false, false, 95) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "apellidos", [], "any", false, false, false, 95)), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "producto/details_show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  227 => 105,  219 => 99,  212 => 97,  206 => 95,  202 => 93,  200 => 92,  196 => 91,  192 => 90,  188 => 89,  185 => 88,  181 => 87,  160 => 68,  158 => 67,  149 => 61,  142 => 57,  135 => 53,  128 => 49,  121 => 45,  117 => 43,  110 => 39,  105 => 36,  103 => 35,  98 => 33,  91 => 29,  86 => 26,  82 => 24,  80 => 23,  77 => 22,  75 => 21,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page %}
\t<!-- Content Wrapper. Contains page content -->
\t<div
\t\tclass=\"content\">
\t\t<!-- Content Header (Page header) -->
\t\t<div class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t<h3>Descripción del Producto</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"table\" style=\"padding-left: 5px\">
\t\t\t\t\t\t\t\t<table class=\"table\" id=\"dataProductos\">
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Tipo</th>
\t\t\t\t\t\t\t\t\t\t\t{% if producto.tipoProducto == 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t<td>General</td>
\t\t\t\t\t\t\t\t\t\t\t{% elseif producto.tipoProducto == 2 %}
\t\t\t\t\t\t\t\t\t\t\t\t<td>Libro</td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ producto.nombre }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>IDD</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ producto.idd }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% if producto.imagen %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Imagen</th>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-thumb active\"><img width=\"50\" height=\"50\" src=\"{{ asset('uploads/' ~ producto.imagen) }}\" alt=\"Foto Producto\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Beneficio por Venta</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ producto.beneficioxventa }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Moneda</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ producto.tipodemoneda }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Stock</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ producto.stock }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Aviso Stock</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ producto.stockAdvertencia }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Usuario Asignado</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ producto.user ? producto.user.nombre ~ ' ' ~ producto.user.apellidos }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if producto.amortizaciones|length > 0 %}
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t<h3>Amortizaciones</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"table\" style=\"padding-left: 5px\">
\t\t\t\t\t\t\t\t\t<table class=\"table\" id=\"dataAmortizaciones\">
\t\t\t\t\t\t\t\t\t\t<thead class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Costo de Producción</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Precio de Venta</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Por liquidar</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Beneficiado</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t{% for amortizacion in producto.amortizaciones %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ amortizacion.costoProduccion|number_format(2, '.', ',') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ amortizacion.precioVenta|number_format(2, '.', ',') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ amortizacion.saldoRestante|number_format(2, '.', ',') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if amortizacion.isAdministrador == '1' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Administrador</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ producto.user.nombre ~ ' ' ~ producto.user.apellidos }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "producto/details_show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto\\details_show.html.twig");
    }
}
