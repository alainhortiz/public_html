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

/* venta_servicios/_form.html.twig */
class __TwigTemplate_d836fed0eb212c45387e6302cd59ec60 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "venta_servicios/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newventaservicio"]]);
        yield "
<form role=\"form\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicios_new");
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
                    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "fecha", [], "any", false, false, false, 10), 'widget');
        yield "
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "codigo", [], "any", false, false, false, 17), 'widget');
        yield "
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"form-group\" data-select2-id=\"48\">
                <select id=\"venta_servicios_servicios\" name=\"serviciosfull\" class=\"form-control select2\"
                        style=\"width: 100%;\"
                        tabindex=\"-1\" aria-hidden=\"true\">
                    <option selected=\"selected\">Servicios</option>
                </select>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"form-group\">
                <input id=\"usuarios\" name=\"usuarios\" class=\"form-control\"
                       placeholder=\"Usuario\">
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"form-group\">
                <input id=\"royaltie\" name=\"royaltie\" class=\"form-control\"
                       placeholder=\"Royalties\">
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "concepto", [], "any", false, false, false, 44), 'widget');
        yield "
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <!-- <label for=\"customFile\">Custom File</label> -->
                <div class=\"custom-file\">
                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "documento", [], "any", false, false, false, 51), 'widget');
        yield "
                    <label class=\"custom-file-label\" for=\"servicio_imagen\">Adjuntar Documento</label>
                </div>
            </div>
        </div>

    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicios_index");
        yield "\"> Cancelar</a>
    </div>
    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "_token", [], "any", false, false, false, 62), 'row');
        yield "
</form>
";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
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
        return "venta_servicios/_form.html.twig";
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
        return array (  131 => 64,  126 => 62,  121 => 60,  109 => 51,  99 => 44,  69 => 17,  59 => 10,  53 => 7,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newventaservicio'}}) }}
<form role=\"form\" action=\"{{ path('app_venta_servicios_new') }}\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    {{ form_errors(form) }}
                </div>
                <div class=\"input-group\">
                    {{ form_widget(form.fecha) }}
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    {{ form_widget(form.codigo) }}
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"form-group\" data-select2-id=\"48\">
                <select id=\"venta_servicios_servicios\" name=\"serviciosfull\" class=\"form-control select2\"
                        style=\"width: 100%;\"
                        tabindex=\"-1\" aria-hidden=\"true\">
                    <option selected=\"selected\">Servicios</option>
                </select>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"form-group\">
                <input id=\"usuarios\" name=\"usuarios\" class=\"form-control\"
                       placeholder=\"Usuario\">
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"form-group\">
                <input id=\"royaltie\" name=\"royaltie\" class=\"form-control\"
                       placeholder=\"Royalties\">
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                {{ form_widget(form.concepto) }}
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <!-- <label for=\"customFile\">Custom File</label> -->
                <div class=\"custom-file\">
                    {{ form_widget(form.documento) }}
                    <label class=\"custom-file-label\" for=\"servicio_imagen\">Adjuntar Documento</label>
                </div>
            </div>
        </div>

    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_venta_servicios_index') }}\"> Cancelar</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}
", "venta_servicios/_form.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\venta_servicios\\_form.html.twig");
    }
}
