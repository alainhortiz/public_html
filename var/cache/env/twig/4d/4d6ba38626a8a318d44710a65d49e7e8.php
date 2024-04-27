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

/* transferencia_bancaria/_form.html.twig */
class __TwigTemplate_68b4cba62793d704d711925465a1b662 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transferencia_bancaria/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newtransfer"]]);
        yield "
<form role=\"form\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transferencia_bancaria_new");
        yield "\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        yield "
                </div>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nombrebanco", [], "any", false, false, false, 11), 'widget');
        yield "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nombretitular", [], "any", false, false, false, 20), 'widget');
        yield "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "numerocuenta", [], "any", false, false, false, 28), 'widget');
        yield "
                </div>
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>

        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transferencia_bancaria_index");
        yield "\">
            Cancelar</a>
    </div>
    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "_token", [], "any", false, false, false, 39), 'row');
        yield "
</form>
";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "transferencia_bancaria/_form.html.twig";
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
        return array (  105 => 41,  100 => 39,  94 => 36,  83 => 28,  72 => 20,  60 => 11,  53 => 7,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newtransfer'}}) }}
<form role=\"form\" action=\"{{ path('app_transferencia_bancaria_new') }}\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    {{ form_errors(form) }}
                </div>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.nombrebanco) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.nombretitular) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    {{ form_widget(form.numerocuenta) }}
                </div>
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>

        <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_transferencia_bancaria_index') }}\">
            Cancelar</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}", "transferencia_bancaria/_form.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\transferencia_bancaria\\_form.html.twig");
    }
}
