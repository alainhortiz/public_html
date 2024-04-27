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

/* tipo_notificacion/show.html.twig */
class __TwigTemplate_2bd31b0e9b93023953ef42b0aac94c02 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tipo_notificacion/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tipo_notificacion/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TipoNotificacion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>TipoNotificacion</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codigo</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 16, $this->source); })()), "codigo", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 20, $this->source); })()), "nombre", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mensaje</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 24, $this->source); })()), "mensaje", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>";
        // line 28
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 28, $this->source); })()), "correo", [], "any", false, false, false, 28)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tipo_notificacion_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tipo_notificacion_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "tipo_notificacion/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tipo_notificacion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  122 => 35,  117 => 33,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}TipoNotificacion{% endblock %}

{% block body %}
    <h1>TipoNotificacion</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ tipo_notificacion.id }}</td>
            </tr>
            <tr>
                <th>Codigo</th>
                <td>{{ tipo_notificacion.codigo }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ tipo_notificacion.nombre }}</td>
            </tr>
            <tr>
                <th>Mensaje</th>
                <td>{{ tipo_notificacion.mensaje }}</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>{{ tipo_notificacion.correo ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_tipo_notificacion_index') }}\">back to list</a>

    <a href=\"{{ path('app_tipo_notificacion_edit', {'id': tipo_notificacion.id}) }}\">edit</a>

    {{ include('tipo_notificacion/_delete_form.html.twig') }}
{% endblock %}
", "tipo_notificacion/show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\tipo_notificacion\\show.html.twig");
    }
}
