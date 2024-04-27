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

/* producto_agotado/detail.html.twig */
class __TwigTemplate_8795f66bf15323c66a9649ed06d3ffa1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto_agotado/detail.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('page', $context, $blocks);
        // line 69
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 2
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 3
        yield "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content\">
        <!-- Content Header (Page header) -->
        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <div class=\"login-logo\" style=\"float: left\">
                                <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"><img src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/MagosArtesanos.png"), "html", null, true);
        yield "\"
                                                                       alt=\"Logo Artesanos\"
                                                                       height=\"80\" width=\"180\"></a>
                            </div>
                            <div style=\"padding-left: 5px;padding-top: 100px\">
                                <h3>Listado de Productos Agotados</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table\" style=\"padding-left: 5px\">
                            <table class=\"table\" id=\"dataProductos\">
                                <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Descripción</th>
                                    <th>Beneficios</th>
                                    <th style=\"text-align: right\">Usuario Asignado</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 35
            yield "                                    <tr data-id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\" class=\"text-center\">
                                        ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 36)) {
                // line 37
                yield "                                            <td>
                                                <div class=\"product-image-thumb active\"><img width=\"80\" height=\"80\"
                                                                                             src=\"";
                // line 39
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 39))), "html", null, true);
                yield "\"
                                                                                             alt=\"Foto Producto\">
                                                </div>
                                            </td>
                                        ";
            } else {
                // line 44
                yield "                                            <td>-</td>
                                        ";
            }
            // line 46
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 46) == 1)) {
                // line 47
                yield "                                            <td style=\"padding-left: 5px\">General</td>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 48
$context["producto"], "tipoProducto", [], "any", false, false, false, 48) == 2)) {
                // line 49
                yield "                                            <td style=\"padding-left: 5px\">Libro</td>
                                        ";
            }
            // line 51
            yield "                                        <td style=\"text-align: center;padding-left: 5px\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                                        <td>";
            // line 52
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 52) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 52)), "html", null, true);
            yield "</td>
                                        <td style=\"text-align: right;padding-left: 5px\">";
            // line 53
            ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 53)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 53), "nombre", [], "any", false, false, false, 53) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 53), "apellidos", [], "any", false, false, false, 53)), "html", null, true)) : (yield ""));
            yield "</td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            yield "                                    <tr>
                                        <td colspan=\"5\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "producto_agotado/detail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  168 => 60,  159 => 56,  151 => 53,  147 => 52,  142 => 51,  138 => 49,  136 => 48,  133 => 47,  130 => 46,  126 => 44,  118 => 39,  114 => 37,  112 => 36,  107 => 35,  102 => 34,  75 => 12,  64 => 3,  57 => 2,  47 => 69,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content\">
        <!-- Content Header (Page header) -->
        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <div class=\"login-logo\" style=\"float: left\">
                                <a href=\"{{ path('app_login') }}\"><img src=\"{{ asset('dist/img/MagosArtesanos.png') }}\"
                                                                       alt=\"Logo Artesanos\"
                                                                       height=\"80\" width=\"180\"></a>
                            </div>
                            <div style=\"padding-left: 5px;padding-top: 100px\">
                                <h3>Listado de Productos Agotados</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table\" style=\"padding-left: 5px\">
                            <table class=\"table\" id=\"dataProductos\">
                                <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Descripción</th>
                                    <th>Beneficios</th>
                                    <th style=\"text-align: right\">Usuario Asignado</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for producto in productos %}
                                    <tr data-id=\"{{ producto.id }}\" class=\"text-center\">
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
                                        {% if producto.tipoProducto == 1 %}
                                            <td style=\"padding-left: 5px\">General</td>
                                        {% elseif producto.tipoProducto == 2 %}
                                            <td style=\"padding-left: 5px\">Libro</td>
                                        {% endif %}
                                        <td style=\"text-align: center;padding-left: 5px\">{{ producto.nombre }}</td>
                                        <td>{{ producto.beneficioxventa ~ ' ' ~ producto.tipodemoneda }}</td>
                                        <td style=\"text-align: right;padding-left: 5px\">{{ producto.user ? producto.user.nombre ~ ' ' ~ producto.user.apellidos }}</td>
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
{% endblock %}


", "producto_agotado/detail.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto_agotado\\detail.html.twig");
    }
}
