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

/* solicitar_pago_royal_acumulado/_form.html.twig */
class __TwigTemplate_aa79bec86a7839b70144c56143da7762 extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newpagoroyalacum"]]);
        echo "
<form role=\"form\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_new");
        echo "\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        echo "
                </div>
                <div class=\"input-group\">
                    <div class=\"input-group date\" data-target-input=\"nearest\">
                        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "fecha", [], "any", false, false, false, 11), 'widget');
        echo "
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "royaltiespagar", [], "any", false, false, false, 21), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <input id=\"acumulado\" class=\"form-control\" name=\"acumulado\" value=\"Royal Acumulado: ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["saldo"]) || array_key_exists("saldo", $context) ? $context["saldo"] : (function () { throw new RuntimeError('Variable "saldo" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" disabled placeholder=\"Royal Acumulado\">
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "metododepago", [], "any", false, false, false, 34), 'widget');
        echo "
                </div>
            </div>
        </div>
        ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "estado", [], "any", false, false, false, 42), 'widget');
            echo "
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 47
            echo "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "estado", [], "any", false, false, false, 50), 'widget', ["attr" => ["disabled" => "disabled"]]);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 55
        echo "        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <!-- <label for=\"customFile\">Custom File</label> -->
                <div class=\"custom-file\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "factura", [], "any", false, false, false, 59), 'widget');
        echo "
                    <label class=\"custom-file-label\" for=\"servicio_imagen\">Adjuntar factura de pago</label>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
        echo "\">
            Cancelar</a>
    </div>
    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "_token", [], "any", false, false, false, 70), 'row');
        echo "
</form>
";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "solicitar_pago_royal_acumulado/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 72,  149 => 70,  143 => 67,  132 => 59,  126 => 55,  118 => 50,  113 => 47,  105 => 42,  100 => 39,  98 => 38,  91 => 34,  81 => 27,  72 => 21,  59 => 11,  52 => 7,  44 => 2,  40 => 1,);
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
