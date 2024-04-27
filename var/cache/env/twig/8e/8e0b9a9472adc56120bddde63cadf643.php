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

/* paypal/index.html.twig */
class __TwigTemplate_9d700c9326b41f9397b1544962291d00 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paypal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paypal/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Paypal";
        
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
                            <h3>Listado de Paypal</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paypal_new");
        yield "\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                        class=\"fa fa-user-plus\"></i> Crear Nuevo Paypal
                            </button>
                        </a>
                    </div>
                    <table class=\"table\">
                        <thead class=\"text-center\">
                        <tr>
                            <th>Id</th>
                            <th>N&uacute;mero de Cuenta</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody class=\"text-center\">
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paypals"]) || array_key_exists("paypals", $context) ? $context["paypals"] : (function () { throw new RuntimeError('Variable "paypals" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["paypal"]) {
            // line 34
            yield "                            <tr>
                                <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["paypal"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                                <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["paypal"], "numerocuenta", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                                <td width=\"180\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paypal_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["paypal"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\">
                                                <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                        title=\"ver\"><i
                                                            class=\"fas fa-info\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">

                                            <a href=\"";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paypal_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["paypal"], "id", [], "any", false, false, false, 49)]), "html", null, true);
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
            // line 58
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paypal_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["paypal"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\"
                                                  onsubmit=\"return confirm('Está segur@ que desea eliminar esta cuenta?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\"
                                                       value=\"";
            // line 62
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["paypal"], "id", [], "any", false, false, false, 62))), "html", null, true);
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
            // line 73
            yield "                            <tr>
                                <td colspan=\"3\">No se encontraron registros</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paypal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        return "paypal/index.html.twig";
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
        return array (  182 => 77,  173 => 73,  157 => 62,  150 => 58,  138 => 49,  126 => 40,  119 => 36,  115 => 35,  112 => 34,  107 => 33,  89 => 18,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
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
                            <h3>Listado de Paypal</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"{{ path('app_paypal_new') }}\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                        class=\"fa fa-user-plus\"></i> Crear Nuevo Paypal
                            </button>
                        </a>
                    </div>
                    <table class=\"table\">
                        <thead class=\"text-center\">
                        <tr>
                            <th>Id</th>
                            <th>N&uacute;mero de Cuenta</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody class=\"text-center\">
                        {% for paypal in paypals %}
                            <tr>
                                <td>{{ paypal.id }}</td>
                                <td>{{ paypal.numerocuenta }}</td>
                                <td width=\"180\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"{{ path('app_paypal_show', {'id': paypal.id}) }}\">
                                                <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                        title=\"ver\"><i
                                                            class=\"fas fa-info\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">

                                            <a href=\"{{ path('app_paypal_edit', {'id': paypal.id}) }}\">
                                                <button class=\"btn btn-block btn-success\" data-toggle=\"tooltip\"
                                                        title=\"Editar\"><i
                                                            class=\"fas fa-edit\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <form method=\"post\"
                                                  action=\"{{ path('app_paypal_delete', {'id': paypal.id}) }}\"
                                                  onsubmit=\"return confirm('Está segur@ que desea eliminar esta cuenta?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\"
                                                       value=\"{{ csrf_token('delete' ~ paypal.id) }}\">
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
                                <td colspan=\"3\">No se encontraron registros</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "paypal/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\paypal\\index.html.twig");
    }
}
