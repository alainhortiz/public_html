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

/* producto/new.html.twig */
class __TwigTemplate_05bf9701a594e32a291ee5932945205b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo Producto";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <body class=\"hold-transition register-page\">
    <div class=\"register-box text-center\">
        <div class=\"card\" style=\"width: 435px;\">
            <div class=\"card-body\">
                <h3>Registro de Nuevo Producto</h3>
                <br>
                ";
        // line 18
        echo twig_include($this->env, $context, "producto/_form.html.twig");
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
        return "producto/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  73 => 12,  66 => 11,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nuevo Producto{% endblock %}

{#{% block pagecss %}#}
{#    <!-- Select2 -->#}
{#    <link rel=\"stylesheet\" href=\"{{ asset('plugins/select2/css/select2.min.css') }}\">#}
{#    <link rel=\"stylesheet\" href=\"{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}\">#}
{#{% endblock %}#}

{% block body %}
    <body class=\"hold-transition register-page\">
    <div class=\"register-box text-center\">
        <div class=\"card\" style=\"width: 435px;\">
            <div class=\"card-body\">
                <h3>Registro de Nuevo Producto</h3>
                <br>
                {{ include('producto/_form.html.twig') }}
            </div>
        </div>
    </div>
    </body>
{% endblock %}

{#{% block pagescript %}#}
{#    <!-- Select2 -->#}
{#    <script src=\"{{ asset('plugins/select2/js/select2.full.min.js') }}\"></script>#}
{#    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>#}
{#    <script src=\"{{ path('fos_js_routing_js',{callback: 'fos.Router.setData'}) }}\"></script>#}
{#    <script src=\"{{ asset('dist/js/ajaxcall.js') }}\"></script>#}
{#{% endblock %}#}", "producto/new.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto\\new.html.twig");
    }
}
