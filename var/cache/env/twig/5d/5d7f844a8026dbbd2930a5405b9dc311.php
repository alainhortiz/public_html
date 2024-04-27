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

/* producto/_form.html.twig */
class __TwigTemplate_a4febc1934a771ced39c5cdf39d35825 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newproducto"]]);
        yield "
<form role=\"form\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_new");
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nombre", [], "any", false, false, false, 10), 'widget');
        yield "
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"custom-file\">
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "imagen", [], "any", false, false, false, 17), 'widget');
        yield "
                    <label class=\"custom-file-label\" for=\"producto_imagen\">Adjuntar Imagen</label>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"form-check\">
                    <div id=\"producto_tipoproducto\">
                        <div class=\"row\" style=\"padding-top: 5px; padding-left: 15%\">
                            <div class=\"form-check\">
                                <input id=\"producto_tipoproducto_0\" class=\"form-check-input\" value=\"1\" type=\"radio\"
                                       required=\"required\" name=\"producto[tipoproducto]\" checked>
                                <label class=\"required form-check-label\" for=\"producto_tipoproducto_0\"
                                       style=\"padding-right: 10px;\">General</label>
                            </div>
                            <div class=\"form-check\">
                                <input id=\"producto_tipoproducto_1\" class=\"form-check-input\" value=\"2\" type=\"radio\"
                                       required=\"required\" name=\"producto[tipoproducto]\">
                                <label class=\"required form-check-label\" for=\"producto_tipoproducto_1\"
                                       style=\"padding-right: 10px;\">Libro</label>
                            </div>
                            <div class=\"form-check\">
                                <input id=\"producto_tipoproducto_2\" class=\"form-check-input\" value=\"3\" type=\"radio\"
                                       required=\"required\" name=\"producto[tipoproducto]\">
                                <label class=\"required form-check-label\" for=\"producto_tipoproducto_2\"
                                       style=\"padding-right: 10px;\">Servicio</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-8\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 53), 'widget');
        yield "
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"form-group\">
                <div class=\"form-check\">
                    <div id=\"producto_tipodemoneda\">
                        <div class=\"row\" style=\"padding-top: 5px;\">
                            <div class=\"form-check\">
                                <input id=\"producto_tipodemoneda_0\" class=\"form-check-input\" value=\"USD\" type=\"radio\"
                                       required=\"required\" name=\"producto[tipodemoneda]\" checked>
                                <label class=\"required form-check-label\" for=\"producto_tipodemoneda_0\"
                                       style=\"padding-right: 10px;\">USD</label>
                            </div>
                            <div class=\"form-check\">
                                <input id=\"producto_tipodemoneda_1\" class=\"form-check-input\" value=\"EUR\" type=\"radio\"
                                       required=\"required\" name=\"producto[tipodemoneda]\">
                                <label class=\"required form-check-label\" for=\"producto_tipodemoneda_1\">EUR</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "idd", [], "any", false, false, false, 81), 'widget');
        yield "
                </div>
            </div>
        </div>
        <div id=\"divProducto\" class=\"col-sm-12\" style=\"display:block;\">
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "stock", [], "any", false, false, false, 90), 'widget');
        yield "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "stockAdvertencia", [], "any", false, false, false, 99), 'widget');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"divServicio\" class=\"col-sm-12\" style=\"display:block;\">
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "conceptoServicio", [], "any", false, false, false, 109), 'widget');
        yield "
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "descripcionServicio", [], "any", false, false, false, 116), 'widget');
        yield "
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"custom-file\">
                        ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "documentoServicio", [], "any", false, false, false, 123), 'widget');
        yield "
                        <label class=\"custom-file-label\" for=\"producto_documentoServicio\">Adjuntar Documento</label>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131), 'widget');
        yield "
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        yield "\"> Cancelar</a>
    </div>
    ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "_token", [], "any", false, false, false, 139), 'row');
        yield "
</form>
";
        // line 141
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), 'form_end');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "producto/_form.html.twig";
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
        return array (  226 => 141,  221 => 139,  216 => 137,  207 => 131,  196 => 123,  186 => 116,  176 => 109,  163 => 99,  151 => 90,  139 => 81,  108 => 53,  69 => 17,  59 => 10,  53 => 7,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newproducto'}}) }}
<form role=\"form\" action=\"{{ path('app_producto_new') }}\">
    <div class=\"row\">
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
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"custom-file\">
                    {{ form_widget(form.imagen) }}
                    <label class=\"custom-file-label\" for=\"producto_imagen\">Adjuntar Imagen</label>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"form-check\">
                    <div id=\"producto_tipoproducto\">
                        <div class=\"row\" style=\"padding-top: 5px; padding-left: 15%\">
                            <div class=\"form-check\">
                                <input id=\"producto_tipoproducto_0\" class=\"form-check-input\" value=\"1\" type=\"radio\"
                                       required=\"required\" name=\"producto[tipoproducto]\" checked>
                                <label class=\"required form-check-label\" for=\"producto_tipoproducto_0\"
                                       style=\"padding-right: 10px;\">General</label>
                            </div>
                            <div class=\"form-check\">
                                <input id=\"producto_tipoproducto_1\" class=\"form-check-input\" value=\"2\" type=\"radio\"
                                       required=\"required\" name=\"producto[tipoproducto]\">
                                <label class=\"required form-check-label\" for=\"producto_tipoproducto_1\"
                                       style=\"padding-right: 10px;\">Libro</label>
                            </div>
                            <div class=\"form-check\">
                                <input id=\"producto_tipoproducto_2\" class=\"form-check-input\" value=\"3\" type=\"radio\"
                                       required=\"required\" name=\"producto[tipoproducto]\">
                                <label class=\"required form-check-label\" for=\"producto_tipoproducto_2\"
                                       style=\"padding-right: 10px;\">Servicio</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-8\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    {{ form_widget(form.beneficioxventa) }}
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"form-group\">
                <div class=\"form-check\">
                    <div id=\"producto_tipodemoneda\">
                        <div class=\"row\" style=\"padding-top: 5px;\">
                            <div class=\"form-check\">
                                <input id=\"producto_tipodemoneda_0\" class=\"form-check-input\" value=\"USD\" type=\"radio\"
                                       required=\"required\" name=\"producto[tipodemoneda]\" checked>
                                <label class=\"required form-check-label\" for=\"producto_tipodemoneda_0\"
                                       style=\"padding-right: 10px;\">USD</label>
                            </div>
                            <div class=\"form-check\">
                                <input id=\"producto_tipodemoneda_1\" class=\"form-check-input\" value=\"EUR\" type=\"radio\"
                                       required=\"required\" name=\"producto[tipodemoneda]\">
                                <label class=\"required form-check-label\" for=\"producto_tipodemoneda_1\">EUR</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    {{ form_widget(form.idd) }}
                </div>
            </div>
        </div>
        <div id=\"divProducto\" class=\"col-sm-12\" style=\"display:block;\">
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.stock) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.stockAdvertencia) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"divServicio\" class=\"col-sm-12\" style=\"display:block;\">
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.conceptoServicio) }}
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.descripcionServicio) }}
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <div class=\"custom-file\">
                        {{ form_widget(form.documentoServicio) }}
                        <label class=\"custom-file-label\" for=\"producto_documentoServicio\">Adjuntar Documento</label>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                {{ form_widget(form.user) }}
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_producto_index') }}\"> Cancelar</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}", "producto/_form.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto\\_form.html.twig");
    }
}
