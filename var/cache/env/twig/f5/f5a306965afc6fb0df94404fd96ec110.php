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

/* tipo_notificacion/index.html.twig */
class __TwigTemplate_6ba20fea67f561cf16540d328aa52779 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tipo de Notificaciones";
        
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tipo_notificacions"]) || array_key_exists("tipo_notificacions", $context) ? $context["tipo_notificacions"] : (function () { throw new RuntimeError('Variable "tipo_notificacions" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tipo_notificacion"]) {
            // line 31
            yield "                                    <tr>
                                        <td class=\"hidden\">";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tipo_notificacion"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                                        <td class=\"text-center\">";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tipo_notificacion"], "codigo", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                        <td>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tipo_notificacion"], "nombre", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                        <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tipo_notificacion"], "mensaje", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                                        <td style=\"margin: 0 auto;\">
                                                <a href=\"";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tipo_notificacion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tipo_notificacion"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\">
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
            yield "                                    <tr>
                                        <td colspan=\"5\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo_notificacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return "tipo_notificacion/index.html.twig";
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
        return array (  150 => 51,  141 => 47,  126 => 37,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  106 => 31,  101 => 30,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
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
