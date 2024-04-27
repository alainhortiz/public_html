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

/* solicitar_pago_royal_acumulado/new.html.twig */
class __TwigTemplate_2976cce781c9cbaf1db0436d2906530e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pagescript' => [$this, 'block_pagescript'],
            'body' => [$this, 'block_body'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_pago_royal_acumulado/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "solicitar_pago_royal_acumulado/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo Pago Royal Acumulado";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_pagescript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        // line 6
        echo "    ";
        if ( !(null === (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "        ";
            if (((isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 7, $this->source); })()) == 1)) {
                // line 8
                echo "            <script type=\"text/javascript\">
                jQuery(document).ready(function (\$) {
                    toastr[\"error\"](\"No puedes poner mayor cantidad que la disponibilidad\", \"Notification \")

                    toastr.options = {
                        \"closeButton\": false,
                        \"debug\": false,
                        \"newestOnTop\": false,
                        \"progressBar\": true,
                        \"positionClass\": \"toast-top-right\",
                        \"preventDuplicates\": true,
                        \"onclick\": null,
                        \"showDuration\": \"300\",
                        \"hideDuration\": \"1000\",
                        \"timeOut\": \"5000\",
                        \"extendedTimeOut\": \"1000\",
                        \"showEasing\": \"swing\",
                        \"hideEasing\": \"linear\",
                        \"showMethod\": \"fadeIn\",
                        \"hideMethod\": \"fadeOut\"
                    }
                });
            </script>
        ";
            }
            // line 32
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "    <body class=\"hold-transition register-page\">
    <div class=\"register-box text-center\">
        <div class=\"card\" style=\"width: 435px;\">
            <div class=\"card-body\">
                <h3>Nuevo Pago Royal Acumulado</h3>
                <br>
                ";
        // line 42
        echo twig_include($this->env, $context, "solicitar_pago_royal_acumulado/_form.html.twig");
        echo "
            </div>
        </div>
    </div>
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "solicitar_pago_royal_acumulado/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  121 => 36,  114 => 35,  106 => 32,  80 => 8,  77 => 7,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nuevo Pago Royal Acumulado{% endblock %}

{% block pagescript %}
    {% if mensaje is not null %}
        {% if mensaje == 1 %}
            <script type=\"text/javascript\">
                jQuery(document).ready(function (\$) {
                    toastr[\"error\"](\"No puedes poner mayor cantidad que la disponibilidad\", \"Notification \")

                    toastr.options = {
                        \"closeButton\": false,
                        \"debug\": false,
                        \"newestOnTop\": false,
                        \"progressBar\": true,
                        \"positionClass\": \"toast-top-right\",
                        \"preventDuplicates\": true,
                        \"onclick\": null,
                        \"showDuration\": \"300\",
                        \"hideDuration\": \"1000\",
                        \"timeOut\": \"5000\",
                        \"extendedTimeOut\": \"1000\",
                        \"showEasing\": \"swing\",
                        \"hideEasing\": \"linear\",
                        \"showMethod\": \"fadeIn\",
                        \"hideMethod\": \"fadeOut\"
                    }
                });
            </script>
        {% endif %}
    {% endif %}
{% endblock %}

{% block body %}
    <body class=\"hold-transition register-page\">
    <div class=\"register-box text-center\">
        <div class=\"card\" style=\"width: 435px;\">
            <div class=\"card-body\">
                <h3>Nuevo Pago Royal Acumulado</h3>
                <br>
                {{ include('solicitar_pago_royal_acumulado/_form.html.twig') }}
            </div>
        </div>
    </div>
    </body>
{% endblock %}", "solicitar_pago_royal_acumulado/new.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\solicitar_pago_royal_acumulado\\new.html.twig");
    }
}
