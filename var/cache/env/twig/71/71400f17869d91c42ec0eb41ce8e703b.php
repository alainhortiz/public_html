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

/* royalties_acumulados/index.html.twig */
class __TwigTemplate_9987a9fbbd3e64051ea3c31d5487c656 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "royalties_acumulados/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "royalties_acumulados/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Royalties Acumulados";
        
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
        yield "    <div class=\"content-wrapper\" style=\"min-height: 256px;\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <section class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-12\">
                            <h4>Royalties Acumulados</h4>
                        </div>
                        <!-- /.col -->
                        <div class=\"col-sm-4 col-12 float-right\">
                            <div class=\"info-box\">
                                <span class=\"info-box-icon bg-warning\"><i class=\"fas fa-money-bill\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total de Royalties Acumulados</span>
                                    <span class=\"info-box-number\">€ ";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["ventasmensual"]) || array_key_exists("ventasmensual", $context) ? $context["ventasmensual"] : (function () { throw new RuntimeError('Variable "ventasmensual" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <!-- /.card-header -->
                                <div class=\"card-body table-responsive p-0\">
                                    <table class=\"table table-hover text-nowrap\">
                                        <thead class=\"text-center\">
                                        <tr>
                                            <th>I.D.</th>
                                            <th>Nombre</th>
                                            <th>Fecha</th>
                                            <th>R.A.</th>
                                            <th>€</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"text-center\">
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td>R.A.</td>
                                            <td>256</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
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
        return "royalties_acumulados/index.html.twig";
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
        return array (  93 => 22,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Royalties Acumulados{% endblock %}

{% block page %}
    <div class=\"content-wrapper\" style=\"min-height: 256px;\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <section class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-12\">
                            <h4>Royalties Acumulados</h4>
                        </div>
                        <!-- /.col -->
                        <div class=\"col-sm-4 col-12 float-right\">
                            <div class=\"info-box\">
                                <span class=\"info-box-icon bg-warning\"><i class=\"fas fa-money-bill\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total de Royalties Acumulados</span>
                                    <span class=\"info-box-number\">€ {{ ventasmensual }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <!-- /.card-header -->
                                <div class=\"card-body table-responsive p-0\">
                                    <table class=\"table table-hover text-nowrap\">
                                        <thead class=\"text-center\">
                                        <tr>
                                            <th>I.D.</th>
                                            <th>Nombre</th>
                                            <th>Fecha</th>
                                            <th>R.A.</th>
                                            <th>€</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"text-center\">
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td>R.A.</td>
                                            <td>256</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
{% endblock %}
", "royalties_acumulados/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\royalties_acumulados\\index.html.twig");
    }
}
