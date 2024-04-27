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

/* venta_servicios/new.html.twig */
class __TwigTemplate_de835330ff0be02826a367147a90cbab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pagecss' => [$this, 'block_pagecss'],
            'body' => [$this, 'block_body'],
            'pagescript' => [$this, 'block_pagescript'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "venta_servicios/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "venta_servicios/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nueva Venta Servicios";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_pagecss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagecss"));

        // line 6
        yield "     <!-- Select2 -->
     <link rel=\"stylesheet\" href=\"";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/css/select2.min.css"), "html", null, true);
        yield "\">
     <link rel=\"stylesheet\" href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        yield "    <body class=\"hold-transition register-page\">
    <div class=\"register-box text-center\">
        <div class=\"card\" style=\"width: 435px;\">
            <div class=\"card-body\">
                <h3>Nueva Venta de Servicios</h3>
                <br>
                ";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "venta_servicios/_form.html.twig");
        yield "
            </div>
        </div>
    </div>
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 26
    public function block_pagescript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        // line 27
        yield "    <!-- Select2 -->
    <script src=\"";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <script src=\"";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/ajaxcallservicio.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "venta_servicios/new.html.twig";
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
        return array (  145 => 31,  141 => 30,  137 => 29,  133 => 28,  130 => 27,  123 => 26,  109 => 19,  101 => 13,  94 => 12,  84 => 8,  80 => 7,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nueva Venta Servicios{% endblock %}

{% block pagecss %}
     <!-- Select2 -->
     <link rel=\"stylesheet\" href=\"{{ asset('plugins/select2/css/select2.min.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}\">
{% endblock %}


{% block body %}
    <body class=\"hold-transition register-page\">
    <div class=\"register-box text-center\">
        <div class=\"card\" style=\"width: 435px;\">
            <div class=\"card-body\">
                <h3>Nueva Venta de Servicios</h3>
                <br>
                {{ include('venta_servicios/_form.html.twig') }}
            </div>
        </div>
    </div>
    </body>
{% endblock %}

{% block pagescript %}
    <!-- Select2 -->
    <script src=\"{{ asset('plugins/select2/js/select2.full.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js',{callback: 'fos.Router.setData'}) }}\"></script>
    <script src=\"{{ asset('dist/js/ajaxcallservicio.js') }}\"></script>
{% endblock %}", "venta_servicios/new.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\venta_servicios\\new.html.twig");
    }
}
