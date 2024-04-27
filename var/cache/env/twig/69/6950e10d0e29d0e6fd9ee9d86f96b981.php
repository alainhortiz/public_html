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

/* registro_pagos/index.html.twig */
class __TwigTemplate_18d4abde032920988787d4b93edcd77a extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Pagos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 6
        echo "    <!-- Content Wrapper. Contains page content -->
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
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitar_pago_royal_acumulados"]) || array_key_exists("solicitar_pago_royal_acumulados", $context) ? $context["solicitar_pago_royal_acumulados"] : (function () { throw new RuntimeError('Variable "solicitar_pago_royal_acumulados" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["solicitar_pago_royal_acumulado"]) {
            // line 31
            echo "                            <tr>
                                <td>";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["solicitar_pago_royal_acumulado"], "fecha", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar_pago_royal_acumulado"], "fecha", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["royalacum"]) || array_key_exists("royalacum", $context) ? $context["royalacum"] : (function () { throw new RuntimeError('Variable "royalacum" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar_pago_royal_acumulado"], "royaltiespagar", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["saldo"]) || array_key_exists("saldo", $context) ? $context["saldo"] : (function () { throw new RuntimeError('Variable "saldo" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar_pago_royal_acumulado"], "metododepago", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "                            <tr>
                                <td colspan=\"5\">No se encontraron registros</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitar_pago_royal_acumulado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registro_pagos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 43,  131 => 39,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  104 => 31,  99 => 30,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
