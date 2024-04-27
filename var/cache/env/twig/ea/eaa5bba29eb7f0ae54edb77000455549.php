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

/* tipo_notificacion/index.html.twig */
class __TwigTemplate_8f1b4a696fcb4f1ba82f387549f91802 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tipo_notificacion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tipo_notificacion/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tipo de Notificaciones";
        
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
                            <h3>Tipo de Notificaciones</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <table class=\"table table-bordered table-striped\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th class=\"hidden\">Id</th>
                                    <th class=\"text-center\">Código</th>
                                    <th>Nombre</th>
                                    <th>Mensaje</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_notificacions"]) || array_key_exists("tipo_notificacions", $context) ? $context["tipo_notificacions"] : (function () { throw new RuntimeError('Variable "tipo_notificacions" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tipo_notificacion"]) {
            // line 31
            echo "                                    <tr>
                                        <td class=\"hidden\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_notificacion"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                        <td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_notificacion"], "codigo", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_notificacion"], "nombre", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_notificacion"], "mensaje", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                        <td style=\"margin: 0 auto;\">
                                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tipo_notificacion_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["tipo_notificacion"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">
                                                    <button
                                                            class=\"btn btn-block btn-success\" data-toggle=\"tooltip\"
                                                            title=\"Modificar mensaje\"><i
                                                                class=\"fas fa-edit\"></i>
                                                    </button>
                                                </a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                                    <tr>
                                        <td colspan=\"5\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo_notificacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return "tipo_notificacion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 51,  139 => 47,  124 => 37,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  104 => 31,  99 => 30,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tipo de Notificaciones{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Tipo de Notificaciones</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <table class=\"table table-bordered table-striped\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th class=\"hidden\">Id</th>
                                    <th class=\"text-center\">Código</th>
                                    <th>Nombre</th>
                                    <th>Mensaje</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for tipo_notificacion in tipo_notificacions %}
                                    <tr>
                                        <td class=\"hidden\">{{ tipo_notificacion.id }}</td>
                                        <td class=\"text-center\">{{ tipo_notificacion.codigo }}</td>
                                        <td>{{ tipo_notificacion.nombre }}</td>
                                        <td>{{ tipo_notificacion.mensaje }}</td>
                                        <td style=\"margin: 0 auto;\">
                                                <a href=\"{{ path('app_tipo_notificacion_edit', {'id': tipo_notificacion.id}) }}\">
                                                    <button
                                                            class=\"btn btn-block btn-success\" data-toggle=\"tooltip\"
                                                            title=\"Modificar mensaje\"><i
                                                                class=\"fas fa-edit\"></i>
                                                    </button>
                                                </a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\">No se encontraron registros</td>
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
", "tipo_notificacion/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\tipo_notificacion\\index.html.twig");
    }
}
