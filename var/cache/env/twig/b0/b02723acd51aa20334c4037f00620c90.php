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

/* registro_pagos/index.html.twig */
class __TwigTemplate_fa3a0d8cee5044366674f239c247a3c8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registro_pagos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registro_pagos/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Registro de Pagos";
        
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
                            <h3>Registro de Pagos de Royalties Acumulados hasta la Fecha</h3>
                        </div>

                    </div>

                    <table class=\"table\">
                        <thead class=\"text-center\">
                        <tr>
                            <th>Fecha</th>
                            <th>Royalties Acumulados hasta la Fecha</th>
                            <th>Royalties Pagados</th>
                            <th>Saldo Royalties</th>
                            <th>M&eacute;todo de Pago</th>
                        </tr>
                        </thead>
                        <tbody class=\"text-center\">
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["solicitar_pago_royal_acumulados"]) || array_key_exists("solicitar_pago_royal_acumulados", $context) ? $context["solicitar_pago_royal_acumulados"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulados" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["solicitar_pago_royal_acumulado"]) {
            // line 31
            yield "                            <tr>
                                <td>";
            // line 32
            ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_pago_royal_acumulado"], "fecha", [], "any", false, false, false, 32)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_pago_royal_acumulado"], "fecha", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                                <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["royalacum"]) || array_key_exists("royalacum", $context) ? $context["royalacum"] : (function () { throw new RuntimeError('Variable "royalacum" does not exist.', 33, $this->source); })()), "html", null, true);
            yield "</td>
                                <td>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_pago_royal_acumulado"], "royaltiespagar", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["saldo"]) || array_key_exists("saldo", $context) ? $context["saldo"] : (function () { throw new RuntimeError('Variable "saldo" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "</td>
                                <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_pago_royal_acumulado"], "metododepago", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            yield "                            <tr>
                                <td colspan=\"5\">No se encontraron registros</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitar_pago_royal_acumulado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                        </tbody>
                    </table>
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
        return "registro_pagos/index.html.twig";
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
        return array (  142 => 43,  133 => 39,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  106 => 31,  101 => 30,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro de Pagos{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Registro de Pagos de Royalties Acumulados hasta la Fecha</h3>
                        </div>

                    </div>

                    <table class=\"table\">
                        <thead class=\"text-center\">
                        <tr>
                            <th>Fecha</th>
                            <th>Royalties Acumulados hasta la Fecha</th>
                            <th>Royalties Pagados</th>
                            <th>Saldo Royalties</th>
                            <th>M&eacute;todo de Pago</th>
                        </tr>
                        </thead>
                        <tbody class=\"text-center\">
                        {% for solicitar_pago_royal_acumulado in solicitar_pago_royal_acumulados %}
                            <tr>
                                <td>{{ solicitar_pago_royal_acumulado.fecha ? solicitar_pago_royal_acumulado.fecha|date('Y-m-d') : '' }}</td>
                                <td>{{ royalacum }}</td>
                                <td>{{ solicitar_pago_royal_acumulado.royaltiespagar }}</td>
                                <td>{{ saldo }}</td>
                                <td>{{ solicitar_pago_royal_acumulado.metododepago }}</td>
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
{% endblock %}
", "registro_pagos/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\registro_pagos\\index.html.twig");
    }
}
