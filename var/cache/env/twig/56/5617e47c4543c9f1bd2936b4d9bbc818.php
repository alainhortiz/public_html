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

/* security/login.html.twig */
class __TwigTemplate_91b082fb65639f788a10ecacdf83b99e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"><img src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/MagosArtesanos.png"), "html", null, true);
        yield "\" alt=\"Logo Artesanos\"
                                                   height=\"100\" width=\"300\"></a>
        </div>
        <!-- /.login-logo -->
        <div class=\"card\">
            <div class=\"card-body login-card-body\">
                <p class=\"login-box-msg\">Entre para comenzar su sesi&oacute;n</p>

                <form method=\"post\">
                    ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            yield "                        <div class=\"alert alert-danger\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            yield "</div>
                    ";
        }
        // line 21
        yield "
                    ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            yield "                        <div class=\"mb-3\">
                            Su cuenta no ha sido activada todavía ";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 27
        yield "

                    <div class=\"input-group mb-3\">
                        <input type=\"email\" value=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\"
                               class=\"form-control\" required autofocus placeholder=\"Entre el Email\">
                        <div class=\"input-group-append\">
                            <div class=\"input-group-text\">
                                <span class=\"fas fa-envelope\"></span>
                            </div>
                        </div>
                    </div>

                    <div class=\"input-group mb-3\">
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"
                               autocomplete=\"current-password\" required placeholder=\"Entre su contraseña\">
                        <div class=\"input-group-append\">
                            <div class=\"input-group-text\">
                                <span class=\"fas fa-lock\"></span>
                            </div>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                    >
";
        // line 55
        yield "                    <div class=\"row\">
                        <div class=\"col-sm-6 float-left\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Iniciar sesión</button>
                        </div>
                        <div class=\"col-sm-6 float-right\">
                            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_registro");
        yield "\">
                                <button type=\"button\" class=\"btn btn-primary btn-block float-right\">Registrarse</button>
                            </a>
                        </div>
                    </div>

                </form>
                <br>
                <p class=\"mb-1 text-center\">
                    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">Olvid&oacute; el password?</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  168 => 69,  156 => 60,  149 => 55,  144 => 50,  121 => 30,  116 => 27,  110 => 24,  107 => 23,  105 => 22,  102 => 21,  96 => 19,  94 => 18,  80 => 9,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}
    <body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('app_login') }}\"><img src=\"{{ asset('dist/img/MagosArtesanos.png') }}\" alt=\"Logo Artesanos\"
                                                   height=\"100\" width=\"300\"></a>
        </div>
        <!-- /.login-logo -->
        <div class=\"card\">
            <div class=\"card-body login-card-body\">
                <p class=\"login-box-msg\">Entre para comenzar su sesi&oacute;n</p>

                <form method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    {% if app.user %}
                        <div class=\"mb-3\">
                            Su cuenta no ha sido activada todavía {{ app.user.email }}
                        </div>
                    {% endif %}


                    <div class=\"input-group mb-3\">
                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\"
                               class=\"form-control\" required autofocus placeholder=\"Entre el Email\">
                        <div class=\"input-group-append\">
                            <div class=\"input-group-text\">
                                <span class=\"fas fa-envelope\"></span>
                            </div>
                        </div>
                    </div>

                    <div class=\"input-group mb-3\">
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"
                               autocomplete=\"current-password\" required placeholder=\"Entre su contraseña\">
                        <div class=\"input-group-append\">
                            <div class=\"input-group-text\">
                                <span class=\"fas fa-lock\"></span>
                            </div>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >
{#                        <p class=\"mb-1 text-center\">#}
{#                            <a href=\"{{ path('app_forgot_password_request') }}\">Olvid&oacute; el password?</a>#}
{#                        </p>#}
                    <div class=\"row\">
                        <div class=\"col-sm-6 float-left\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Iniciar sesión</button>
                        </div>
                        <div class=\"col-sm-6 float-right\">
                            <a href=\"{{ path('app_user_form_registro') }}\">
                                <button type=\"button\" class=\"btn btn-primary btn-block float-right\">Registrarse</button>
                            </a>
                        </div>
                    </div>

                </form>
                <br>
                <p class=\"mb-1 text-center\">
                    <a href=\"{{ path('app_forgot_password_request') }}\">Olvid&oacute; el password?</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    </body>

{% endblock %}

", "security/login.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\security\\login.html.twig");
    }
}
