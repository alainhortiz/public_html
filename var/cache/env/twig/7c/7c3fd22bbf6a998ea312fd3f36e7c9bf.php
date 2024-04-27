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

/* solicitar_pago_royal_acumulado/show.html.twig */
class __TwigTemplate_d8eb3fb12425d728bd37efb1d69e5a93 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_pago_royal_acumulado/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "solicitar_pago_royal_acumulado/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Pago Royal Acumulado";
        
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
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Pago Royal Acumulado</h3>
                        </div>
                    </div>

                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>Fecha</th>
                            <td>";
        // line 22
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["solicitar_pago_royal_acumulado"]) || array_key_exists("solicitar_pago_royal_acumulado", $context) ? $context["solicitar_pago_royal_acumulado"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulado" does not exist.', 22, $this->source); })()), "fecha", [], "any", false, false, false, 22)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["solicitar_pago_royal_acumulado"]) || array_key_exists("solicitar_pago_royal_acumulado", $context) ? $context["solicitar_pago_royal_acumulado"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulado" does not exist.', 22, $this->source); })()), "fecha", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
                        </tr>
                        <tr>
                            <th>Royalties a Pagar</th>
                            <td>";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["solicitar_pago_royal_acumulado"]) || array_key_exists("solicitar_pago_royal_acumulado", $context) ? $context["solicitar_pago_royal_acumulado"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulado" does not exist.', 26, $this->source); })()), "royaltiespagar", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Metodo de Pago</th>
                            <td>";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["solicitar_pago_royal_acumulado"]) || array_key_exists("solicitar_pago_royal_acumulado", $context) ? $context["solicitar_pago_royal_acumulado"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulado" does not exist.', 30, $this->source); })()), "metododepago", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Estado</th>
                            <td>";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["solicitar_pago_royal_acumulado"]) || array_key_exists("solicitar_pago_royal_acumulado", $context) ? $context["solicitar_pago_royal_acumulado"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulado" does not exist.', 34, $this->source); })()), "estado", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
                        </tr>
                        </tbody>
                    </table>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\"
                           href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
        yield "\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["solicitar_pago_royal_acumulado"]) || array_key_exists("solicitar_pago_royal_acumulado", $context) ? $context["solicitar_pago_royal_acumulado"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulado" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
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
        return "solicitar_pago_royal_acumulado/show.html.twig";
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
        return array (  129 => 43,  123 => 40,  114 => 34,  107 => 30,  100 => 26,  93 => 22,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Pago Royal Acumulado{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Pago Royal Acumulado</h3>
                        </div>
                    </div>

                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>Fecha</th>
                            <td>{{ solicitar_pago_royal_acumulado.fecha ? solicitar_pago_royal_acumulado.fecha|date('Y-m-d') : '' }}</td>
                        </tr>
                        <tr>
                            <th>Royalties a Pagar</th>
                            <td>{{ solicitar_pago_royal_acumulado.royaltiespagar }}</td>
                        </tr>
                        <tr>
                            <th>Metodo de Pago</th>
                            <td>{{ solicitar_pago_royal_acumulado.metododepago }}</td>
                        </tr>
                        <tr>
                            <th>Estado</th>
                            <td>{{ solicitar_pago_royal_acumulado.estado }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\"
                           href=\"{{ path('app_solicitar_pago_royal_acumulado_index') }}\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"{{ path('app_solicitar_pago_royal_acumulado_edit', {'id': solicitar_pago_royal_acumulado.id}) }}\">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "solicitar_pago_royal_acumulado/show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\solicitar_pago_royal_acumulado\\show.html.twig");
    }
}
