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

/* tipo_notificacion/show.html.twig */
class __TwigTemplate_8e7130f71d42b17c94550da9797d03b4 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "TipoNotificacion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>TipoNotificacion</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Codigo</th>
                <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 16, $this->source); })()), "codigo", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 20, $this->source); })()), "nombre", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Mensaje</th>
                <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 24, $this->source); })()), "mensaje", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>";
        // line 28
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 28, $this->source); })()), "correo", [], "any", false, false, false, 28)) ? ("Yes") : ("No"));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tipo_notificacion_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tipo_notificacion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tipo_notificacion"]) || array_key_exists("tipo_notificacion", $context) ? $context["tipo_notificacion"] : (function () { throw new RuntimeError('Variable "tipo_notificacion" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "tipo_notificacion/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tipo_notificacion/show.html.twig";
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
        return array (  129 => 37,  124 => 35,  119 => 33,  111 => 28,  104 => 24,  97 => 20,  90 => 16,  83 => 12,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
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
