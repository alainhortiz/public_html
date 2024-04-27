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

/* venta_productos/_form.html.twig */
class __TwigTemplate_da550fd2734a133a5c02aeec374d925f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "venta_productos/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newventaproducto"]]);
        yield "
<form role=\"form\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_productos_new");
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "codigo", [], "any", false, false, false, 21), 'widget');
        yield "
            </div>
        </div>
        <div id=\"wrapper\">
            <div id=\"element\" class=\"row\"
                 style=\"width:600px;padding: 5px;border: 1px solid darkgray;margin-left: 5px; \">
                <div class=\"col-sm-2\">
                    <button id=\"masmas\" type=\"button\" class=\"list_add btn btn-block bg-gradient-success\"
                            style=\"margin-top: 23px;\"><i
                                class=\"fa fa-solid fa-plus\"></i>
                    </button>
                </div>
                <div class=\"col-sm-3\" style=\"margin-top: 23px;\">
                    <div class=\"form-group\" data-select2-id=\"48\">
                        <select id=\"venta_productos_listadoproducto\" name=\"productosfull\" class=\"form-control select2\"
                                style=\"width: 100%;\" data-select2-id=\"1\"
                                tabindex=\"-1\" aria-hidden=\"true\">
                            <option selected=\"selected\">Productos</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-group\">
                        <input id=\"usuarios\" name=\"usuarios\" class=\"form-control\"
                               style=\"width: 100px; margin-top: 23px;\"
                               disabled placeholder=\"Usuario\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"form-group\">
                        <input id=\"royaltie\" name=\"royaltie\" class=\"form-control\"
                               style=\"width: 100px; margin-top: 23px;margin-left: -20px\"
                               disabled placeholder=\"Royalties\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <button onclick=\"removerows()\" type=\"button\" class=\"list_cancel btn btn-block bg-gradient-danger\"
                            style=\"margin-top: 23px;\"><i
                                class=\"fa fa-solid fa-trash\"></i>
                    </button>
                </div>
            </div>
            <div class=\"results\"></div>
        </div>
    </div>
    <div style=\"margin-top: 20px\">
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_productos_index");
        yield "\"> Cancelar</a>
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
        return "venta_productos/_form.html.twig";
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
        return array (  133 => 72,  128 => 70,  123 => 68,  73 => 21,  60 => 11,  53 => 7,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newventaproducto'}}) }}
<form role=\"form\" action=\"{{ path('app_venta_productos_new') }}\">
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
                {{ form_widget(form.codigo) }}
            </div>
        </div>
        <div id=\"wrapper\">
            <div id=\"element\" class=\"row\"
                 style=\"width:600px;padding: 5px;border: 1px solid darkgray;margin-left: 5px; \">
                <div class=\"col-sm-2\">
                    <button id=\"masmas\" type=\"button\" class=\"list_add btn btn-block bg-gradient-success\"
                            style=\"margin-top: 23px;\"><i
                                class=\"fa fa-solid fa-plus\"></i>
                    </button>
                </div>
                <div class=\"col-sm-3\" style=\"margin-top: 23px;\">
                    <div class=\"form-group\" data-select2-id=\"48\">
                        <select id=\"venta_productos_listadoproducto\" name=\"productosfull\" class=\"form-control select2\"
                                style=\"width: 100%;\" data-select2-id=\"1\"
                                tabindex=\"-1\" aria-hidden=\"true\">
                            <option selected=\"selected\">Productos</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-group\">
                        <input id=\"usuarios\" name=\"usuarios\" class=\"form-control\"
                               style=\"width: 100px; margin-top: 23px;\"
                               disabled placeholder=\"Usuario\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"form-group\">
                        <input id=\"royaltie\" name=\"royaltie\" class=\"form-control\"
                               style=\"width: 100px; margin-top: 23px;margin-left: -20px\"
                               disabled placeholder=\"Royalties\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <button onclick=\"removerows()\" type=\"button\" class=\"list_cancel btn btn-block bg-gradient-danger\"
                            style=\"margin-top: 23px;\"><i
                                class=\"fa fa-solid fa-trash\"></i>
                    </button>
                </div>
            </div>
            <div class=\"results\"></div>
        </div>
    </div>
    <div style=\"margin-top: 20px\">
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_venta_productos_index') }}\"> Cancelar</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}


", "venta_productos/_form.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\venta_productos\\_form.html.twig");
    }
}
