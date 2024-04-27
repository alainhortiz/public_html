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

/* paypal/index.html.twig */
class __TwigTemplate_d85c912215931228ef4986a748078a3f extends Template
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
                            <h3>Listado de Paypal</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paypal_new");
        echo "\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["paypals"]) || array_key_exists("paypals", $context) ? $context["paypals"] : (function () { throw new RuntimeError('Variable "paypals" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["paypal"]) {
            // line 34
            echo "                            <tr>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paypal"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paypal"], "numerocuenta", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                <td width=\"180\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paypal_show", ["id" => twig_get_attribute($this->env, $this->source, $context["paypal"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                                                <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                        title=\"ver\"><i
                                                            class=\"fas fa-info\"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class=\"col-sm-4\">

                                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paypal_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["paypal"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paypal_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["paypal"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\"
                                                  onsubmit=\"return confirm('Está segur@ que desea eliminar esta cuenta?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\"
                                                       value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["paypal"], "id", [], "any", false, false, false, 62))), "html", null, true);
            echo "\">
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
            echo "                            <tr>
                                <td colspan=\"3\">No se encontraron registros</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paypal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "paypal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 77,  171 => 73,  155 => 62,  148 => 58,  136 => 49,  124 => 40,  117 => 36,  113 => 35,  110 => 34,  105 => 33,  87 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
