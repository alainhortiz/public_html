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

/* security/login.html.twig */
class __TwigTemplate_bb3dce92ddc0f2a1b60db8cb50c70c84 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/MagosArtesanos.png"), "html", null, true);
        echo "\" alt=\"Logo Artesanos\"
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
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 21
        echo "
                    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "                        <div class=\"mb-3\">
                            Su cuenta no ha sido activada todavía ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 27
        echo "

                    <div class=\"input-group mb-3\">
                        <input type=\"email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\"
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >
";
        // line 55
        echo "                    <div class=\"row\">
                        <div class=\"col-sm-6 float-left\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Iniciar sesión</button>
                        </div>
                        <div class=\"col-sm-6 float-right\">
                            <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_registro");
        echo "\">
                                <button type=\"button\" class=\"btn btn-primary btn-block float-right\">Registrarse</button>
                            </a>
                        </div>
                    </div>

                </form>
                <br>
                <p class=\"mb-1 text-center\">
                    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Olvid&oacute; el password?</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 69,  154 => 60,  147 => 55,  142 => 50,  119 => 30,  114 => 27,  108 => 24,  105 => 23,  103 => 22,  100 => 21,  94 => 19,  92 => 18,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
