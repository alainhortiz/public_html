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

/* servicio/show.html.twig */
class __TwigTemplate_544972d25c610b1a027f87fa16f12278 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page' => [$this, 'block_page'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "servicio/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "servicio/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Servicio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 6
        yield "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\" style=\"background-color: #343a40\">
                        <div class=\"card-title text-white\">
                            <h3>Servicio</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataServicios\">
                                    <tbody>
                                    <tr>
                                        <th>Nombre</th>
                                        <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 24, $this->source); })()), "nombre", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Beneficio por Venta</th>
                                        <td>";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 28, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Moneda</th>
                                        <td>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 32, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Concepto</th>
                                        <td>";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 36, $this->source); })()), "conceptoServicio", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Descripción</th>
                                        <td>";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 40, $this->source); })()), "descripcionServicio", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
                                    </tr>
                                    ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 42, $this->source); })()), "documentoServicio", [], "any", false, false, false, 42)) {
            // line 43
            yield "                                        <tr>
                                            <td><a href=\"";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 44, $this->source); })()), "documentoServicio", [], "any", false, false, false, 44))), "html", null, true);
            yield "\"
                                                   target=\"_blank\">Ver
                                                    Documento</a>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 50
        yield "                                    <tr>
                                        <th>Usuario Asignado</th>
                                        <td>";
        // line 52
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "nombre", [], "any", false, false, false, 52) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "apellidos", [], "any", false, false, false, 52)), "html", null, true)) : (yield ""));
        yield "</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\"
                           href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_index");
        yield "\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"";
        // line 66
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_form_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "servicio/show.html.twig";
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
        return array (  166 => 66,  160 => 63,  146 => 52,  142 => 50,  133 => 44,  130 => 43,  128 => 42,  123 => 40,  116 => 36,  109 => 32,  102 => 28,  95 => 24,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Servicio{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\" style=\"background-color: #343a40\">
                        <div class=\"card-title text-white\">
                            <h3>Servicio</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataServicios\">
                                    <tbody>
                                    <tr>
                                        <th>Nombre</th>
                                        <td>{{ producto.nombre }}</td>
                                    </tr>
                                    <tr>
                                        <th>Beneficio por Venta</th>
                                        <td>{{ producto.beneficioxventa }}</td>
                                    </tr>
                                    <tr>
                                        <th>Moneda</th>
                                        <td>{{ producto.tipodemoneda }}</td>
                                    </tr>
                                    <tr>
                                        <th>Concepto</th>
                                        <td>{{ producto.conceptoServicio }}</td>
                                    </tr>
                                    <tr>
                                        <th>Descripción</th>
                                        <td>{{ producto.descripcionServicio }}</td>
                                    </tr>
                                    {% if producto.documentoServicio %}
                                        <tr>
                                            <td><a href=\"{{ asset('uploads/' ~ producto.documentoServicio) }}\"
                                                   target=\"_blank\">Ver
                                                    Documento</a>
                                            </td>
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <th>Usuario Asignado</th>
                                        <td>{{ producto.user ? producto.user.nombre ~ ' ' ~ producto.user.apellidos }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\"
                           href=\"{{ path('app_servicio_index') }}\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"{{ path('app_servicio_form_edit', {'id': producto.id}) }}\">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "servicio/show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\servicio\\show.html.twig");
    }
}
