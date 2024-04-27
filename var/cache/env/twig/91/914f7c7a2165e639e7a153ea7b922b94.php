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

/* transferencia_bancaria/index.html.twig */
class __TwigTemplate_abd0c8bd2d09911c210b50bb6d39cf0a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transferencia_bancaria/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "transferencia_bancaria/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Transferencia Bancaria";
        
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
                            <h3>Transferencia Bancaria</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transferencia_bancaria_new");
        yield "\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                        class=\"fa fa-user-plus\"></i> Crear Cuenta Transferencia Bancaria
                            </button>
                        </a>
                    </div>
                    <table class=\"table\">
                        <thead class=\"text-center\">
                        <tr>
                            <th>Id</th>
                            <th>Nombre del Banco</th>
                            <th>Nombre del Titular</th>
                            <th>Numero de Cuenta</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody class=\"text-center\">
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transferencia_bancarias"]) || array_key_exists("transferencia_bancarias", $context) ? $context["transferencia_bancarias"] : (function () { throw new RuntimeError('Variable "transferencia_bancarias" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transferencia_bancarium"]) {
            // line 36
            yield "                            <tr>
                                <td>";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transferencia_bancarium"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                                <td>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transferencia_bancarium"], "nombrebanco", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                                <td>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transferencia_bancarium"], "nombretitular", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                <td>";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transferencia_bancarium"], "numerocuenta", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                <td width=\"180\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transferencia_bancaria_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transferencia_bancarium"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\">
                                                <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                        title=\"ver\"><i
                                                            class=\"fas fa-info\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">

                                            <a href=\"";
            // line 53
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transferencia_bancaria_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transferencia_bancarium"], "id", [], "any", false, false, false, 53)]), "html", null, true);
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
            // line 62
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transferencia_bancaria_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transferencia_bancarium"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\"
                                                  onsubmit=\"return confirm('Está segur@ que desea eliminar esta cuenta?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\"
                                                       value=\"";
            // line 66
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["transferencia_bancarium"], "id", [], "any", false, false, false, 66))), "html", null, true);
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
            // line 77
            yield "                            <tr>
                                <td colspan=\"5\">No se encontraron registros</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transferencia_bancarium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
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
        return "transferencia_bancaria/index.html.twig";
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
        return array (  192 => 81,  183 => 77,  167 => 66,  160 => 62,  148 => 53,  136 => 44,  129 => 40,  125 => 39,  121 => 38,  117 => 37,  114 => 36,  109 => 35,  89 => 18,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Transferencia Bancaria{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Transferencia Bancaria</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"{{ path('app_transferencia_bancaria_new') }}\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                        class=\"fa fa-user-plus\"></i> Crear Cuenta Transferencia Bancaria
                            </button>
                        </a>
                    </div>
                    <table class=\"table\">
                        <thead class=\"text-center\">
                        <tr>
                            <th>Id</th>
                            <th>Nombre del Banco</th>
                            <th>Nombre del Titular</th>
                            <th>Numero de Cuenta</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody class=\"text-center\">
                        {% for transferencia_bancarium in transferencia_bancarias %}
                            <tr>
                                <td>{{ transferencia_bancarium.id }}</td>
                                <td>{{ transferencia_bancarium.nombrebanco }}</td>
                                <td>{{ transferencia_bancarium.nombretitular }}</td>
                                <td>{{ transferencia_bancarium.numerocuenta }}</td>
                                <td width=\"180\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"{{ path('app_transferencia_bancaria_show', {'id': transferencia_bancarium.id}) }}\">
                                                <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                        title=\"ver\"><i
                                                            class=\"fas fa-info\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">

                                            <a href=\"{{ path('app_transferencia_bancaria_edit', {'id': transferencia_bancarium.id}) }}\">
                                                <button class=\"btn btn-block btn-success\" data-toggle=\"tooltip\"
                                                        title=\"Editar\"><i
                                                            class=\"fas fa-edit\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <form method=\"post\"
                                                  action=\"{{ path('app_transferencia_bancaria_delete', {'id': transferencia_bancarium.id}) }}\"
                                                  onsubmit=\"return confirm('Está segur@ que desea eliminar esta cuenta?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\"
                                                       value=\"{{ csrf_token('delete' ~ transferencia_bancarium.id) }}\">
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
                                <td colspan=\"5\">No se encontraron registros</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "transferencia_bancaria/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\transferencia_bancaria\\index.html.twig");
    }
}
