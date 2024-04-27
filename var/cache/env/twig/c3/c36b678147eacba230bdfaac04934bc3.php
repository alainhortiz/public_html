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

/* ayuda/index.html.twig */
class __TwigTemplate_a8ec1f8fee9a81d9f86d127c13a63c5c extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Videos de Ayuda";
        
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
                            <h3>Videos de Ayuda</h3>
                        </div>
                    </div>
                    ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            yield "                        <div class=\"col-lg-3 col-12\">
                            <a href=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ayuda_new");
            yield "\">
                                <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                            class=\"fa fa-video\"></i> Crear Nuevo Video de Ayuda
                                </button>
                            </a>
                        </div>
                    ";
        }
        // line 26
        yield "                    <div class=\"card-body\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ayudas"]) || array_key_exists("ayudas", $context) ? $context["ayudas"] : (function () { throw new RuntimeError('Variable "ayudas" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ayuda"]) {
            // line 28
            yield "                            <div class=\"row\">
                                <!-- Box Comment -->
                                <div class=\"col-md-12\">
                                    <div class=\"card card-widget collapsed-card\">
                                        <div class=\"card-header\">
                                            <div class=\"user-block\">
                                                <img class=\"img-circle\" src=\"../dist/img/help.png\" alt=\"User Image\">
                                                <span class=\"username\">";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ayuda"], "titulo", [], "any", false, false, false, 35), "html", null, true);
            yield "</span>
                                                <span class=\"description\">";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ayuda"], "descripcion", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <div class=\"card-tools\">
                                                ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 41
                yield "                                                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ayuda_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ayuda"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\">
                                                        <button type=\"button\" class=\"btn btn-tool\" title=\"Modificar\">
                                                            <i class=\"far fa-edit\"></i>
                                                        </button>
                                                    </a>
                                                ";
            }
            // line 47
            yield "                                                <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
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
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ayuda"], "url", [], "any", false, false, false, 56), "html", null, true);
            yield "\" width=\"745\" height=\"419\" allowfullscreen></iframe>
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
            yield "                            <span class=\"username\"><a href=\"#\">No hay videos que mostrar</a></span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ayuda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                    </div>
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
        return "ayuda/index.html.twig";
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
        return array (  175 => 67,  168 => 65,  154 => 56,  143 => 47,  133 => 41,  131 => 40,  124 => 36,  120 => 35,  111 => 28,  106 => 27,  103 => 26,  93 => 19,  90 => 18,  88 => 17,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
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
