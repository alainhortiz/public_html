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

/* westerunion/show.html.twig */
class __TwigTemplate_4864a54bd2a76d0f05ecba8936c2b595 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "westerunion/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "westerunion/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Westerunion";
        
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
                            <h3>Westerunion</h3>
                        </div>
                    </div>
                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["westerunion"]) || array_key_exists("westerunion", $context) ? $context["westerunion"] : (function () { throw new RuntimeError('Variable "westerunion" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nombre</th>
                            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["westerunion"]) || array_key_exists("westerunion", $context) ? $context["westerunion"] : (function () { throw new RuntimeError('Variable "westerunion" does not exist.', 25, $this->source); })()), "nombre", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Apellido Paterno</th>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["westerunion"]) || array_key_exists("westerunion", $context) ? $context["westerunion"] : (function () { throw new RuntimeError('Variable "westerunion" does not exist.', 29, $this->source); })()), "apellidoPaterno", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Apellido Materno</th>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["westerunion"]) || array_key_exists("westerunion", $context) ? $context["westerunion"] : (function () { throw new RuntimeError('Variable "westerunion" does not exist.', 33, $this->source); })()), "apellidoMaterno", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Correo</th>
                            <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["westerunion"]) || array_key_exists("westerunion", $context) ? $context["westerunion"] : (function () { throw new RuntimeError('Variable "westerunion" does not exist.', 37, $this->source); })()), "correo", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Ciudad</th>
                            <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["westerunion"]) || array_key_exists("westerunion", $context) ? $context["westerunion"] : (function () { throw new RuntimeError('Variable "westerunion" does not exist.', 41, $this->source); })()), "ciudad", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Numero de Movil</th>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["westerunion"]) || array_key_exists("westerunion", $context) ? $context["westerunion"] : (function () { throw new RuntimeError('Variable "westerunion" does not exist.', 45, $this->source); })()), "numeromovil", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
                        </tr>
                        </tbody>
                    </table>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_westerunion_index");
        echo "\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_westerunion_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["westerunion"]) || array_key_exists("westerunion", $context) ? $context["westerunion"] : (function () { throw new RuntimeError('Variable "westerunion" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">Editar</a>
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
        return "westerunion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 53,  140 => 50,  132 => 45,  125 => 41,  118 => 37,  111 => 33,  104 => 29,  97 => 25,  90 => 21,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ westerunion.id }}</td>
                        </tr>
                        <tr>
                            <th>Nombre</th>
                            <td>{{ westerunion.nombre }}</td>
                        </tr>
                        <tr>
                            <th>Apellido Paterno</th>
                            <td>{{ westerunion.apellidoPaterno }}</td>
                        </tr>
                        <tr>
                            <th>Apellido Materno</th>
                            <td>{{ westerunion.apellidoMaterno }}</td>
                        </tr>
                        <tr>
                            <th>Correo</th>
                            <td>{{ westerunion.correo }}</td>
                        </tr>
                        <tr>
                            <th>Ciudad</th>
                            <td>{{ westerunion.ciudad }}</td>
                        </tr>
                        <tr>
                            <th>Numero de Movil</th>
                            <td>{{ westerunion.numeromovil }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\" href=\"{{ path('app_westerunion_index') }}\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"{{ path('app_westerunion_edit', {'id': westerunion.id}) }}\">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "westerunion/show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\westerunion\\show.html.twig");
    }
}
