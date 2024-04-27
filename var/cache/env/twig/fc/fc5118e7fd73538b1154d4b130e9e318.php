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

/* westerunion/index.html.twig */
class __TwigTemplate_864aaae96e81d58e387ea3ab8ccc05f8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "westerunion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "westerunion/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Westerunion";
        
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
                            <h3>Westerunion</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_westerunion_new");
        yield "\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                        class=\"fa fa-user-plus\"></i> Crear Westerunion
                            </button>
                        </a>
                    </div>
                    <table class=\"table\">
                        <thead class=\"text-center\">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Correo</th>
                            <th>Ciudad</th>
                            <th>Numero de Movil</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["westerunions"]) || array_key_exists("westerunions", $context) ? $context["westerunions"] : (function () { throw new RuntimeError('Variable "westerunions" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["westerunion"]) {
            // line 39
            yield "                            <tr>
                                <td>";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                <td>";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "nombre", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                <td>";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "apellidoPaterno", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                <td>";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "apellidoMaterno", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                <td>";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "correo", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                <td>";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "ciudad", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                <td>";
            // line 46
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "numeromovil", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                <td width=\"180\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_westerunion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\">
                                                <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                        title=\"ver\"><i
                                                            class=\"fas fa-info\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">

                                            <a href=\"";
            // line 59
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_westerunion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\">
                                                <button class=\"btn btn-block btn-success\" data-toggle=\"tooltip\"
                                                        title=\"Editar\"><i
                                                            class=\"fas fa-edit\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <form method=\"post\"
                                                  action=\"";
            // line 68
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_westerunion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\"
                                                  onsubmit=\"return confirm('Está segur@ que desea eliminar esta cuenta?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\"
                                                       value=\"";
            // line 72
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["westerunion"], "id", [], "any", false, false, false, 72))), "html", null, true);
            yield "\">
                                                <button class=\"btn btn-block btn-danger\" data-toggle=\"tooltip\"
                                                        title=\"Eliminar\"><i
                                                            class=\"fas fa-trash\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 83
            yield "                            <tr>
                                <td colspan=\"8\">No se encontraron registros</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['westerunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "                        </tbody>
                    </table>
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
        return "westerunion/index.html.twig";
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
        return array (  207 => 87,  198 => 83,  182 => 72,  175 => 68,  163 => 59,  151 => 50,  144 => 46,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  117 => 39,  112 => 38,  89 => 18,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Westerunion{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Westerunion</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"{{ path('app_westerunion_new') }}\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                        class=\"fa fa-user-plus\"></i> Crear Westerunion
                            </button>
                        </a>
                    </div>
                    <table class=\"table\">
                        <thead class=\"text-center\">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Correo</th>
                            <th>Ciudad</th>
                            <th>Numero de Movil</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for westerunion in westerunions %}
                            <tr>
                                <td>{{ westerunion.id }}</td>
                                <td>{{ westerunion.nombre }}</td>
                                <td>{{ westerunion.apellidoPaterno }}</td>
                                <td>{{ westerunion.apellidoMaterno }}</td>
                                <td>{{ westerunion.correo }}</td>
                                <td>{{ westerunion.ciudad }}</td>
                                <td>{{ westerunion.numeromovil }}</td>
                                <td width=\"180\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"{{ path('app_westerunion_show', {'id': westerunion.id}) }}\">
                                                <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                        title=\"ver\"><i
                                                            class=\"fas fa-info\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">

                                            <a href=\"{{ path('app_westerunion_edit', {'id': westerunion.id}) }}\">
                                                <button class=\"btn btn-block btn-success\" data-toggle=\"tooltip\"
                                                        title=\"Editar\"><i
                                                            class=\"fas fa-edit\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <form method=\"post\"
                                                  action=\"{{ path('app_westerunion_delete', {'id': westerunion.id}) }}\"
                                                  onsubmit=\"return confirm('Está segur@ que desea eliminar esta cuenta?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\"
                                                       value=\"{{ csrf_token('delete' ~ westerunion.id) }}\">
                                                <button class=\"btn btn-block btn-danger\" data-toggle=\"tooltip\"
                                                        title=\"Eliminar\"><i
                                                            class=\"fas fa-trash\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"8\">No se encontraron registros</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "westerunion/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\westerunion\\index.html.twig");
    }
}
