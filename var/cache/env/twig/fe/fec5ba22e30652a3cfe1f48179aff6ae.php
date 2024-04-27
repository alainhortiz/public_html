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

/* user/_form.html.twig */
class __TwigTemplate_68177947caed0a6dcbf0a89e3308fddc extends Template
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newusuario"]]);
        yield "
<form role=\"form\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"custom-file\">
                    ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "avatar", [], "any", false, false, false, 7), 'widget');
        yield "
                    <label class=\"custom-file-label\" for=\"producto_imagen\">Subir Avatar</label>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors');
        yield "
                </div>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nombre", [], "any", false, false, false, 19), 'widget');
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
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "apellidos", [], "any", false, false, false, 28), 'widget');
        yield "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "empresa", [], "any", false, false, false, 36), 'widget');
        yield "
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "direccion", [], "any", false, false, false, 43), 'widget');
        yield "
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "poblacion", [], "any", false, false, false, 51), 'widget');
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
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "pais", [], "any", false, false, false, 60), 'widget');
        yield "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'widget');
        yield "
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "nifcif", [], "any", false, false, false, 76), 'widget');
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
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "provincia", [], "any", false, false, false, 85), 'widget');
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
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "telefono", [], "any", false, false, false, 94), 'widget');
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
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "password", [], "any", false, false, false, 103), 'widget');
        yield "
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 108
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 109
            yield "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
            // line 111
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "emitirfactura", [], "any", false, false, false, 111), 'widget');
            yield "
                </div>
            </div>
        ";
        } else {
            // line 115
            yield "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
            // line 117
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "emitirfactura", [], "any", false, false, false, 117), 'widget', ["attr" => ["style" => "display:none", "disabled" => "disabled"]]);
            yield "
                </div>
            </div>
        ";
        }
        // line 121
        yield "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 122
            yield "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
            // line 124
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "roles", [], "any", false, false, false, 124), 'widget');
            yield "
                </div>
            </div>
        ";
        } else {
            // line 128
            yield "            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
            // line 130
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "roles", [], "any", false, false, false, 130), 'widget', ["attr" => ["style" => "display:none", "disabled" => "disabled"]]);
            yield "
                </div>
            </div>
        ";
        }
        // line 134
        yield "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 135
            yield "            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    ";
            // line 137
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "isActive", [], "any", false, false, false, 137), 'widget');
            yield "
                </div>
            </div>
        ";
        } else {
            // line 141
            yield "        ";
        }
        // line 142
        yield "        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "captcha", [], "any", false, false, false, 144), 'widget');
        yield "
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        ";
        // line 150
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 151
            yield "            <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\"> Cancelar</a>
        ";
        } else {
            // line 153
            yield "            <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"> Cancelar</a>
        ";
        }
        // line 155
        yield "    </div>
    ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "_token", [], "any", false, false, false, 156), 'row');
        yield "
</form>
";
        // line 158
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), 'form_end');
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
        return "user/_form.html.twig";
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
        return array (  294 => 158,  289 => 156,  286 => 155,  280 => 153,  274 => 151,  272 => 150,  263 => 144,  259 => 142,  256 => 141,  249 => 137,  245 => 135,  242 => 134,  235 => 130,  231 => 128,  224 => 124,  220 => 122,  217 => 121,  210 => 117,  206 => 115,  199 => 111,  195 => 109,  193 => 108,  185 => 103,  173 => 94,  161 => 85,  149 => 76,  138 => 68,  127 => 60,  115 => 51,  104 => 43,  94 => 36,  83 => 28,  71 => 19,  64 => 15,  53 => 7,  45 => 2,  41 => 1,);
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
