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

/* producto_agotado/detailUser.html.twig */
class __TwigTemplate_0c227eb5d82e1e731d66ed8d7d581665 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto_agotado/detailUser.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('page', $context, $blocks);
        // line 67
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 1
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 2
        yield "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <div class=\"login-logo\" style=\"float: left\">
                                <a href=\"";
        // line 11
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
                                    <th style=\"text-align: center\">Beneficios</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 33
            yield "                                    <tr>
                                        ";
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 34)) {
                // line 35
                yield "                                            <td class=\"text-center\">
                                                <div class=\"product-image-thumb active\"><img width=\"80\" height=\"80\"
                                                                                             src=\"";
                // line 37
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 37))), "html", null, true);
                yield "\"
                                                                                             alt=\"Foto Producto\">
                                                </div>

                                            </td>
                                        ";
            } else {
                // line 43
                yield "                                            <td>-</td>
                                        ";
            }
            // line 45
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 45) == 1)) {
                // line 46
                yield "                                            <td style=\"padding-left: 5px\">General</td>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 47
$context["producto"], "tipoProducto", [], "any", false, false, false, 47) == 2)) {
                // line 48
                yield "                                            <td style=\"padding-left: 5px\">Libro</td>
                                        ";
            }
            // line 50
            yield "                                        <td style=\"padding-left: 5px\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                        <td style=\"text-align: right;padding-left: 10px\">";
            // line 51
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 51) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 51)), "html", null, true);
            yield "</td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            yield "                                    <tr>
                                        <td colspan=\"4\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        return "producto_agotado/detailUser.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  158 => 58,  149 => 54,  141 => 51,  136 => 50,  132 => 48,  130 => 47,  127 => 46,  124 => 45,  120 => 43,  111 => 37,  107 => 35,  105 => 34,  102 => 33,  97 => 32,  71 => 11,  60 => 2,  53 => 1,  44 => 67,  42 => 1,);
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
                                    <th style=\"text-align: center\">Beneficios</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for producto in productos %}
                                    <tr>
                                        {% if producto.imagen %}
                                            <td class=\"text-center\">
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
                                        <td style=\"padding-left: 5px\">{{ producto.nombre }}</td>
                                        <td style=\"text-align: right;padding-left: 10px\">{{ producto.beneficioxventa ~ ' ' ~ producto.tipodemoneda }}</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\">No se encontraron registros</td>
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

", "producto_agotado/detailUser.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto_agotado\\detailUser.html.twig");
    }
}
