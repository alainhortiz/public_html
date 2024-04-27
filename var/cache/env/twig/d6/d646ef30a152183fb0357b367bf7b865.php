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

/* empresa/index.html.twig */
class __TwigTemplate_d8197d3b2cfb62008bde9da2535a6e50 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "empresa/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Información de la Empresa";
        
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
                            <h3>Información de la Empresa</h3>
                        </div>
                    </div>
                    ";
        // line 18
        echo "                    ";
        // line 19
        echo "                    ";
        // line 20
        echo "                    ";
        // line 21
        echo "                    ";
        // line 22
        echo "                    ";
        // line 23
        echo "                    ";
        // line 24
        echo "                    <div class=\"card-body\">
                        <div class=\"row\">
                            <table class=\"table table-bordered table-striped\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Nombre</th>
                                    <th>No</th>
                                    <th>Direccion</th>
                                    <th>Ciudad</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 38
            echo "                                    <tr>
                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "nombre", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "no", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "direccion", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "ciudad", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                        <td>
                                            <div class=\"row\">
                                                ";
            // line 46
            echo "                                                ";
            // line 47
            echo "                                                ";
            // line 48
            echo "                                                ";
            // line 49
            echo "                                                ";
            // line 50
            echo "                                                ";
            // line 51
            echo "                                                ";
            // line 52
            echo "                                                ";
            // line 53
            echo "                                                <div class=\"col-sm-6\">
                                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">
                                                        <button style=\"margin-left: 50%\"
                                                                class=\"btn btn-block btn-success\" data-toggle=\"tooltip\"
                                                                title=\"Editar\"><i
                                                                    class=\"fas fa-edit\"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "                                    <tr>
                                        <td colspan=\"4\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </tbody>
                            </table>
                        </div>
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
        return "empresa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 70,  173 => 66,  156 => 54,  153 => 53,  151 => 52,  149 => 51,  147 => 50,  145 => 49,  143 => 48,  141 => 47,  139 => 46,  133 => 42,  129 => 41,  125 => 40,  121 => 39,  118 => 38,  113 => 37,  98 => 24,  96 => 23,  94 => 22,  92 => 21,  90 => 20,  88 => 19,  86 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Información de la Empresa{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Información de la Empresa</h3>
                        </div>
                    </div>
                    {# <div class=\"col-md-3\"> #}
                    {# <a href=\"{{ path('app_empresa_new') }}\"> #}
                    {# <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i #}
                    {# class=\"fa fa-user-plus\"></i> Crear Nueva Empresa #}
                    {# </button> #}
                    {# </a> #}
                    {# </div> #}
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <table class=\"table table-bordered table-striped\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Nombre</th>
                                    <th>No</th>
                                    <th>Direccion</th>
                                    <th>Ciudad</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                {% for empresa in empresas %}
                                    <tr>
                                        <td>{{ empresa.nombre }}</td>
                                        <td>{{ empresa.no }}</td>
                                        <td>{{ empresa.direccion }}</td>
                                        <td>{{ empresa.ciudad }}</td>
                                        <td>
                                            <div class=\"row\">
                                                {# <div class=\"col-sm-4\"> #}
                                                {# <a href=\"{{ path('app_empresa_show', {'id': empresa.id}) }}\"> #}
                                                {# <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\" #}
                                                {# title=\"ver\"><i #}
                                                {# class=\"fas fa-info\"></i> #}
                                                {# </button> #}
                                                {# </a> #}
                                                {# </div> #}
                                                <div class=\"col-sm-6\">
                                                    <a href=\"{{ path('app_empresa_edit', {'id': empresa.id}) }}\">
                                                        <button style=\"margin-left: 50%\"
                                                                class=\"btn btn-block btn-success\" data-toggle=\"tooltip\"
                                                                title=\"Editar\"><i
                                                                    class=\"fas fa-edit\"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\">No se encontraron registros</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "empresa/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\empresa\\index.html.twig");
    }
}
