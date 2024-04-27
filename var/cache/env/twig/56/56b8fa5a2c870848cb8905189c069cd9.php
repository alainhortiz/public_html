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

/* ayuda/index.html.twig */
class __TwigTemplate_4a5772b8d53b52e60dfc869871741c6e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ayuda/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ayuda/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Videos de Ayuda";
        
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
                            <h3>Videos de Ayuda</h3>
                        </div>
                    </div>
                    ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                        <div class=\"col-lg-3 col-12\">
                            <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ayuda_new");
            echo "\">
                                <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                            class=\"fa fa-video\"></i> Crear Nuevo Video de Ayuda
                                </button>
                            </a>
                        </div>
                    ";
        }
        // line 26
        echo "                    <div class=\"card-body\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ayudas"]) || array_key_exists("ayudas", $context) ? $context["ayudas"] : (function () { throw new RuntimeError('Variable "ayudas" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ayuda"]) {
            // line 28
            echo "                            <div class=\"row\">
                                <!-- Box Comment -->
                                <div class=\"col-md-12\">
                                    <div class=\"card card-widget collapsed-card\">
                                        <div class=\"card-header\">
                                            <div class=\"user-block\">
                                                <img class=\"img-circle\" src=\"../dist/img/help.png\" alt=\"User Image\">
                                                <span class=\"username\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ayuda"], "titulo", [], "any", false, false, false, 35), "html", null, true);
            echo "</span>
                                                <span class=\"description\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ayuda"], "descripcion", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <div class=\"card-tools\">
                                                ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 41
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ayuda_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ayuda"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">
                                                        <button type=\"button\" class=\"btn btn-tool\" title=\"Modificar\">
                                                            <i class=\"far fa-edit\"></i>
                                                        </button>
                                                    </a>
                                                ";
            }
            // line 47
            echo "                                                <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                    <i class=\"fas fa-plus\"></i>
                                                </button>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class=\"card-body\">
                                            <div style=\"position: relative; max-width: 745px;height: 419px;\">
                                                <iframe style=\"position: absolute;  width: 100%; height: 100%; left: 0; top: 0;\" src=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ayuda"], "url", [], "any", false, false, false, 56), "html", null, true);
            echo "\" width=\"745\" height=\"419\" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "                            <span class=\"username\"><a href=\"#\">No hay videos que mostrar</a></span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ayuda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "ayuda/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 67,  166 => 65,  152 => 56,  141 => 47,  131 => 41,  129 => 40,  122 => 36,  118 => 35,  109 => 28,  104 => 27,  101 => 26,  91 => 19,  88 => 18,  86 => 17,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Videos de Ayuda{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Videos de Ayuda</h3>
                        </div>
                    </div>
                    {% if is_granted('ROLE_ADMIN') %}
                        <div class=\"col-lg-3 col-12\">
                            <a href=\"{{ path('app_ayuda_new') }}\">
                                <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                            class=\"fa fa-video\"></i> Crear Nuevo Video de Ayuda
                                </button>
                            </a>
                        </div>
                    {% endif %}
                    <div class=\"card-body\">
                        {% for ayuda in ayudas %}
                            <div class=\"row\">
                                <!-- Box Comment -->
                                <div class=\"col-md-12\">
                                    <div class=\"card card-widget collapsed-card\">
                                        <div class=\"card-header\">
                                            <div class=\"user-block\">
                                                <img class=\"img-circle\" src=\"../dist/img/help.png\" alt=\"User Image\">
                                                <span class=\"username\">{{ ayuda.titulo }}</span>
                                                <span class=\"description\">{{ ayuda.descripcion }}</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <div class=\"card-tools\">
                                                {% if is_granted('ROLE_ADMIN') %}
                                                    <a href=\"{{ path('app_ayuda_edit', {'id': ayuda.id}) }}\">
                                                        <button type=\"button\" class=\"btn btn-tool\" title=\"Modificar\">
                                                            <i class=\"far fa-edit\"></i>
                                                        </button>
                                                    </a>
                                                {% endif %}
                                                <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                    <i class=\"fas fa-plus\"></i>
                                                </button>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class=\"card-body\">
                                            <div style=\"position: relative; max-width: 745px;height: 419px;\">
                                                <iframe style=\"position: absolute;  width: 100%; height: 100%; left: 0; top: 0;\" src=\"{{ ayuda.url }}\" width=\"745\" height=\"419\" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        {% else %}
                            <span class=\"username\"><a href=\"#\">No hay videos que mostrar</a></span>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "ayuda/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\ayuda\\index.html.twig");
    }
}
