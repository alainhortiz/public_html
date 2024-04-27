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

/* ayuda/new.html.twig */
class __TwigTemplate_40c8ecaf4faf54088caf1861be2e9711 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ayuda/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ayuda/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nuevo video de ayuda";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_pagescript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        // line 6
        yield "    ";
        if ( !(null === (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 6, $this->source); })()))) {
            // line 7
            yield "        ";
            if (((isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 7, $this->source); })()) == 1)) {
                // line 8
                yield "            <script type=\"text/javascript\">
                jQuery(document).ready(function (\$) {
                    toastr[\"error\"](\"Teclee una dirección url válida\")

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
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        yield "    <body class=\"hold-transition register-page\">
    <div class=\"register-box text-center\">
        <div class=\"card\" style=\"width: 435px;\">
            <div class=\"card-body\">
                <h3>Registro de nuevo video de ayuda</h3>
                <br>
                ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "ayuda/_form.html.twig");
        yield "
            </div>
        </div>
    </div>
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ayuda/new.html.twig";
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
        return array (  132 => 42,  124 => 36,  117 => 35,  108 => 32,  82 => 8,  79 => 7,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nuevo video de ayuda{% endblock %}

{% block pagescript %}
    {% if mensaje is not null %}
        {% if mensaje == 1 %}
            <script type=\"text/javascript\">
                jQuery(document).ready(function (\$) {
                    toastr[\"error\"](\"Teclee una dirección url válida\")

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
                <h3>Registro de nuevo video de ayuda</h3>
                <br>
                {{ include('ayuda/_form.html.twig') }}
            </div>
        </div>
    </div>
    </body>
{% endblock %}
", "ayuda/new.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\ayuda\\new.html.twig");
    }
}
