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

/* solicitar_recogida/_form.html.twig */
class __TwigTemplate_33456fd8de93a5e21498989800ce35fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_recogida/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newrecogida"]]);
        yield "
<form role=\"form\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_new");
        yield "\">
    <div class=\"row\">
        ";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 5
            yield "            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"text-danger\">
                        ";
            // line 8
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
            yield "
                    </div>
                    <div class=\"input-group\">
                        ";
            // line 11
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nombre", [], "any", false, false, false, 11), 'widget');
            yield "
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 16
            yield "            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"text-danger\">
                        ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'errors');
            yield "
                    </div>
                    <div class=\"input-group\">
                        ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nombre", [], "any", false, false, false, 22), 'widget', ["attr" => ["style" => "display:none"]]);
            yield "
                    </div>
                </div>
            </div>
        ";
        }
        // line 27
        yield "        <div class=\"col-sm-12\" style=\"margin-bottom: 20px\">
            <div class=\"input-group\">
                <div class=\"input-group date\" data-target-input=\"nearest\">
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "fecha", [], "any", false, false, false, 30), 'widget');
        yield "
                    <div class=\"input-group-append\" data-target=\"#reservationdate\" data-toggle=\"datetimepicker\">
                        <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <label>Hora Inicial</label>
                <div class=\"input-group\">
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "hora", [], "any", false, false, false, 42), 'widget');
        yield "
                </div>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <label>Hora Final</label>
                <div class=\"input-group\">
                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "horafinal", [], "any", false, false, false, 51), 'widget');
        yield "
                </div>
            </div>
        </div>
        ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 56
            yield "            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "numeroenvio", [], "any", false, false, false, 59), 'widget');
            yield "
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
            // line 66
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "estado", [], "any", false, false, false, 66), 'widget');
            yield "
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 71
            yield "            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
            // line 74
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "numeroenvio", [], "any", false, false, false, 74), 'widget', ["attr" => ["style" => "display:none"]]);
            yield "
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "estado", [], "any", false, false, false, 81), 'widget', ["attr" => ["style" => "display:none"]]);
            yield "
                    </div>
                </div>
            </div>
        ";
        }
        // line 86
        yield "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 87
            yield "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
            // line 90
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "usuarioid", [], "any", false, false, false, 90), 'widget');
            yield "
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 95
            yield "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
            // line 98
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "usuarioid", [], "any", false, false, false, 98), 'widget', ["attr" => ["style" => "display:none"]]);
            yield "
                        <select id=\"solicitar_recogida_usuarioid\" name=\"solicitar_recogida[usuarioid]\"
                                class=\"form-control\" hidden>
                            <option value=\"";
            // line 101
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "nombre", [], "any", false, false, false, 101), "html", null, true);
            yield "</option>
                        </select>
                    </div>
                </div>
            </div>
        ";
        }
        // line 107
        yield "    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
        yield "\"> Cancelar</a>
    </div>
    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "_token", [], "any", false, false, false, 112), 'row');
        yield "
</form>
";
        // line 114
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), 'form_end');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "solicitar_recogida/_form.html.twig";
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
        return array (  230 => 114,  225 => 112,  220 => 110,  215 => 107,  204 => 101,  198 => 98,  193 => 95,  185 => 90,  180 => 87,  177 => 86,  169 => 81,  159 => 74,  154 => 71,  146 => 66,  136 => 59,  131 => 56,  129 => 55,  122 => 51,  110 => 42,  95 => 30,  90 => 27,  82 => 22,  76 => 19,  71 => 16,  63 => 11,  57 => 8,  52 => 5,  50 => 4,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newrecogida'}}) }}
<form role=\"form\" action=\"{{ path('app_solicitar_recogida_new') }}\">
    <div class=\"row\">
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"text-danger\">
                        {{ form_errors(form) }}
                    </div>
                    <div class=\"input-group\">
                        {{ form_widget(form.nombre) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"text-danger\">
                        {{ form_errors(form) }}
                    </div>
                    <div class=\"input-group\">
                        {{ form_widget(form.nombre, { 'attr': {'style': 'display:none'}}) }}
                    </div>
                </div>
            </div>
        {% endif %}
        <div class=\"col-sm-12\" style=\"margin-bottom: 20px\">
            <div class=\"input-group\">
                <div class=\"input-group date\" data-target-input=\"nearest\">
                    {{ form_widget(form.fecha) }}
                    <div class=\"input-group-append\" data-target=\"#reservationdate\" data-toggle=\"datetimepicker\">
                        <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <label>Hora Inicial</label>
                <div class=\"input-group\">
                    {{ form_widget(form.hora) }}
                </div>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <label>Hora Final</label>
                <div class=\"input-group\">
                    {{ form_widget(form.horafinal) }}
                </div>
            </div>
        </div>
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.numeroenvio) }}
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.estado) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.numeroenvio, { 'attr': {'style': 'display:none'}}) }}
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.estado, { 'attr': {'style': 'display:none'}}) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.usuarioid) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.usuarioid, { 'attr': {'style': 'display:none'}}) }}
                        <select id=\"solicitar_recogida_usuarioid\" name=\"solicitar_recogida[usuarioid]\"
                                class=\"form-control\" hidden>
                            <option value=\"{{ app.user.id }}\">{{ app.user.nombre }}</option>
                        </select>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_solicitar_recogida_index') }}\"> Cancelar</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}", "solicitar_recogida/_form.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\solicitar_recogida\\_form.html.twig");
    }
}
