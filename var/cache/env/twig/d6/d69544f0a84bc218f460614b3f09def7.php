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

/* paypal/show.html.twig */
class __TwigTemplate_1dcc361d98f8919fec7d01194fadb78a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paypal/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paypal/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paypal";
        
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
                            <h3>Paypal</h3>
                        </div>
                    </div>
                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>N&uacute;mero de Cuenta</th>
                            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 25, $this->source); })()), "numerocuenta", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                        </tr>
                        </tbody>
                    </table>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paypal_index");
        echo "\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paypal_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "paypal/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  105 => 30,  97 => 25,  90 => 21,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paypal{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Paypal</h3>
                        </div>
                    </div>
                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ paypal.id }}</td>
                        </tr>
                        <tr>
                            <th>N&uacute;mero de Cuenta</th>
                            <td>{{ paypal.numerocuenta }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\" href=\"{{ path('app_paypal_index') }}\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"{{ path('app_paypal_edit', {'id': paypal.id}) }}\">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "paypal/show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\paypal\\show.html.twig");
    }
}
