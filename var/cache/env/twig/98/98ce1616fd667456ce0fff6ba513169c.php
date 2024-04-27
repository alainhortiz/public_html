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

/* solicitar_pago_royal_acumulado/_form.html.twig */
class __TwigTemplate_5a2a72c26e0c7c268bd7542530d977b8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_pago_royal_acumulado/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newpagoroyalacum"]]);
        yield "
<form role=\"form\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_new");
        yield "\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        yield "
                </div>
                <div class=\"input-group\">
                    <div class=\"input-group date\" data-target-input=\"nearest\">
                        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "fecha", [], "any", false, false, false, 11), 'widget');
        yield "
                        <div class=\"input-group-append\" data-target=\"#reservationdate\" data-toggle=\"datetimepicker\">
                            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "royaltiespagar", [], "any", false, false, false, 21), 'widget');
        yield "
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <input id=\"acumulado\" class=\"form-control\" name=\"acumulado\" value=\"Royal Acumulado: ";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["saldo"]) || array_key_exists("saldo", $context) ? $context["saldo"] : (function () { throw new RuntimeError('Variable "saldo" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\" disabled placeholder=\"Royal Acumulado\">
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "metododepago", [], "any", false, false, false, 34), 'widget');
        yield "
                </div>
            </div>
        </div>
        ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 39
            yield "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "estado", [], "any", false, false, false, 42), 'widget');
            yield "
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 47
            yield "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
            // line 50
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "estado", [], "any", false, false, false, 50), 'widget', ["attr" => ["disabled" => "disabled"]]);
            yield "
                    </div>
                </div>
            </div>
        ";
        }
        // line 55
        yield "        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <!-- <label for=\"customFile\">Custom File</label> -->
                <div class=\"custom-file\">
                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "factura", [], "any", false, false, false, 59), 'widget');
        yield "
                    <label class=\"custom-file-label\" for=\"servicio_imagen\">Adjuntar factura de pago</label>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
        yield "\">
            Cancelar</a>
    </div>
    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "_token", [], "any", false, false, false, 70), 'row');
        yield "
</form>
";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "solicitar_pago_royal_acumulado/_form.html.twig";
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
        return array (  155 => 72,  150 => 70,  144 => 67,  133 => 59,  127 => 55,  119 => 50,  114 => 47,  106 => 42,  101 => 39,  99 => 38,  92 => 34,  82 => 27,  73 => 21,  60 => 11,  53 => 7,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newpagoroyalacum'}}) }}
<form role=\"form\" action=\"{{ path('app_solicitar_pago_royal_acumulado_new') }}\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    {{ form_errors(form) }}
                </div>
                <div class=\"input-group\">
                    <div class=\"input-group date\" data-target-input=\"nearest\">
                        {{ form_widget(form.fecha) }}
                        <div class=\"input-group-append\" data-target=\"#reservationdate\" data-toggle=\"datetimepicker\">
                            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                {{ form_widget(form.royaltiespagar) }}
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <input id=\"acumulado\" class=\"form-control\" name=\"acumulado\" value=\"Royal Acumulado: {{ saldo }}\" disabled placeholder=\"Royal Acumulado\">
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    {{ form_widget(form.metododepago) }}
                </div>
            </div>
        </div>
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.estado) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.estado,{\"attr\":{\"disabled\":\"disabled\"}}) }}
                    </div>
                </div>
            </div>
        {% endif %}
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <!-- <label for=\"customFile\">Custom File</label> -->
                <div class=\"custom-file\">
                    {{ form_widget(form.factura) }}
                    <label class=\"custom-file-label\" for=\"servicio_imagen\">Adjuntar factura de pago</label>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_solicitar_pago_royal_acumulado_index') }}\">
            Cancelar</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}

", "solicitar_pago_royal_acumulado/_form.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\solicitar_pago_royal_acumulado\\_form.html.twig");
    }
}
