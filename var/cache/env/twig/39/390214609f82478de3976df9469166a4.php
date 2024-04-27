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

/* empresa/index.html.twig */
class __TwigTemplate_edf60e28858104d7bc641968ff6d8d27 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Información de la Empresa";
        
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
                            <h3>Información de la Empresa</h3>
                        </div>
                    </div>
                    ";
        // line 18
        yield "                    ";
        // line 19
        yield "                    ";
        // line 20
        yield "                    ";
        // line 21
        yield "                    ";
        // line 22
        yield "                    ";
        // line 23
        yield "                    ";
        // line 24
        yield "                    <div class=\"card-body\">
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 38
            yield "                                    <tr>
                                        <td>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "nombre", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                        <td>";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "no", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                        <td>";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "direccion", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                        <td>";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "ciudad", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                        <td>
                                            <div class=\"row\">
                                                ";
            // line 46
            yield "                                                ";
            // line 47
            yield "                                                ";
            // line 48
            yield "                                                ";
            // line 49
            yield "                                                ";
            // line 50
            yield "                                                ";
            // line 51
            yield "                                                ";
            // line 52
            yield "                                                ";
            // line 53
            yield "                                                <div class=\"col-sm-6\">
                                                    <a href=\"";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\">
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
            yield "                                    <tr>
                                        <td colspan=\"4\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                                </tbody>
                            </table>
                        </div>
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
        return "empresa/index.html.twig";
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
        return array (  184 => 70,  175 => 66,  158 => 54,  155 => 53,  153 => 52,  151 => 51,  149 => 50,  147 => 49,  145 => 48,  143 => 47,  141 => 46,  135 => 42,  131 => 41,  127 => 40,  123 => 39,  120 => 38,  115 => 37,  100 => 24,  98 => 23,  96 => 22,  94 => 21,  92 => 20,  90 => 19,  88 => 18,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
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
