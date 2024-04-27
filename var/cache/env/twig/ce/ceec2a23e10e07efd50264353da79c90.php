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

/* user/_form.html.twig */
class __TwigTemplate_8372559e1b3f044508439275ec83284d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newusuario"]]);
        echo "
<form role=\"form\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"custom-file\">
                    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "avatar", [], "any", false, false, false, 7), 'widget');
        echo "
                    <label class=\"custom-file-label\" for=\"producto_imagen\">Subir Avatar</label>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors');
        echo "
                </div>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nombre", [], "any", false, false, false, 19), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "apellidos", [], "any", false, false, false, 28), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "empresa", [], "any", false, false, false, 36), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "direccion", [], "any", false, false, false, 43), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "poblacion", [], "any", false, false, false, 51), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "pais", [], "any", false, false, false, 60), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "nifcif", [], "any", false, false, false, 76), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "provincia", [], "any", false, false, false, 85), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "telefono", [], "any", false, false, false, 94), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "password", [], "any", false, false, false, 103), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 108
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 109
            echo "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "emitirfactura", [], "any", false, false, false, 111), 'widget');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 115
            echo "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "emitirfactura", [], "any", false, false, false, 117), 'widget', ["attr" => ["style" => "display:none", "disabled" => "disabled"]]);
            echo "
                </div>
            </div>
        ";
        }
        // line 121
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 122
            echo "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "roles", [], "any", false, false, false, 124), 'widget');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 128
            echo "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
            // line 130
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "roles", [], "any", false, false, false, 130), 'widget', ["attr" => ["style" => "display:none", "disabled" => "disabled"]]);
            echo "
                </div>
            </div>
        ";
        }
        // line 134
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 135
            echo "            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    ";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "isActive", [], "any", false, false, false, 137), 'widget');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 141
            echo "        ";
        }
        // line 142
        echo "        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "captcha", [], "any", false, false, false, 144), 'widget');
        echo "
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        ";
        // line 150
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 151
            echo "            <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\"> Cancelar</a>
        ";
        } else {
            // line 153
            echo "            <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Cancelar</a>
        ";
        }
        // line 155
        echo "    </div>
    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "_token", [], "any", false, false, false, 156), 'row');
        echo "
</form>
";
        // line 158
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 158,  288 => 156,  285 => 155,  279 => 153,  273 => 151,  271 => 150,  262 => 144,  258 => 142,  255 => 141,  248 => 137,  244 => 135,  241 => 134,  234 => 130,  230 => 128,  223 => 124,  219 => 122,  216 => 121,  209 => 117,  205 => 115,  198 => 111,  194 => 109,  192 => 108,  184 => 103,  172 => 94,  160 => 85,  148 => 76,  137 => 68,  126 => 60,  114 => 51,  103 => 43,  93 => 36,  82 => 28,  70 => 19,  63 => 15,  52 => 7,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newusuario'}}) }}
<form role=\"form\" action=\"{{ path('app_user_new') }}\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"custom-file\">
                    {{ form_widget(form.avatar) }}
                    <label class=\"custom-file-label\" for=\"producto_imagen\">Subir Avatar</label>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    {{ form_errors(form) }}
                </div>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.nombre) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.apellidos) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    {{ form_widget(form.empresa) }}
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    {{ form_widget(form.direccion) }}
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.poblacion) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.pais) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    {{ form_widget(form.email) }}
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.nifcif) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.provincia) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.telefono) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.password) }}
                    </div>
                </div>
            </div>
        </div>
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    {{ form_widget(form.emitirfactura) }}
                </div>
            </div>
        {% else %}
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    {{ form_widget(form.emitirfactura,{'attr': {'style':'display:none','disabled': 'disabled'}}) }}
                </div>
            </div>
        {% endif %}
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    {{ form_widget(form.roles) }}
                </div>
            </div>
        {% else %}
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    {{ form_widget(form.roles, {'attr': {'style':'display:none','disabled':'disabled'}}) }}
                </div>
            </div>
        {% endif %}
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    {{ form_widget(form.isActive) }}
                </div>
            </div>
        {% else %}
        {% endif %}
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                {{ form_widget(form.captcha) }}
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        {% if is_granted('ROLE_ADMIN') %}
            <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_user_index') }}\"> Cancelar</a>
        {% else %}
            <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_login') }}\"> Cancelar</a>
        {% endif %}
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}
", "user/_form.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\user\\_form.html.twig");
    }
}
