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

/* reset_password/resetPassword.html.twig */
class __TwigTemplate_6166d81c5815d136ff37b1f7d0b8f720 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/resetPassword.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/resetPassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cambiar contraseña";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Alerta -->
    <div class=\"preload hidden\">
        <div class=\"logo\"></div>
        <div class=\"loader-frame\">
            <div class=\"loader1\" id=\"loader1\"></div>
            <div class=\"loader2\" id=\"loader2\"></div>
        </div>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid mt-5\" style=\"width: 500px;\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card card-info card-outline\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-user-edit\"></i>
                                    Cambiar contraseña
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 30
        echo "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"input-group mb-3\">
                                            <label for=\"password\"></label><input type=\"password\" name=\"password\"
                                                                                 id=\"password\" class=\"form-control\"
                                                                                 autocomplete=\"current-password\"
                                                                                 required placeholder=\"Nueva Contraseña\">
                                            <div class=\"input-group-append\">
                                                <div class=\"input-group-text\">
                                                    <span class=\"fas fa-eye-slash\" id=\"verClaveNew\"
                                                          style=\"cursor: pointer\"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 47
        echo "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"input-group mb-3\">
                                            <label for=\"confPassword\"></label><input type=\"password\" name=\"confPassword\"
                                                                                     id=\"confPassword\"
                                                                                     class=\"form-control\"
                                                                                     autocomplete=\"current-password\"
                                                                                     required
                                                                                     placeholder=\"Confirmar nueva contraseña\">
                                            <div class=\"input-group-append\">
                                                <div class=\"input-group-text\">
                                                    <span class=\"fas fa-eye-slash\" id=\"verClaveNewConfirm\"
                                                          style=\"cursor: pointer\"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 67
        echo "                            <div class=\"card-footer\">
                                <div class=\"row justify-content-center\">
                                    <div>
                                        <button type=\"button\" class=\"btn btn-primary\"
                                                id=\"btnGuardar\"
                                                data-toggle=\"tooltip\"
                                                data-placement=\"top\"
                                                title=\"Guardar el producto\">Guardar
                                        </button>
                                        <button type=\"button\" class=\"btn btn-danger\"
                                                id=\"btnCancelar\"
                                                data-toggle=\"tooltip\"
                                                data-placement=\"top\"
                                                title=\"Salir\">Cancelar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script>
        \$(document).ready(function () {

            toastr.options = {
                \"closeButton\": false,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-right\",
                \"preventDuplicates\": true,
                \"onclick\": null,
                \"showDuration\": \"300\",
                \"hideDuration\": \"1000\",
                \"timeOut\": \"5000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            \$('#btnCancelar').on('click', function () {
                window.location.href = \"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
        echo "\";
            });


            \$('#verClaveNew').on(\"mousedown\", function () {

                if (\$(\"#password\").val() !== '') {
                    \$('#password').prop(\"type\", \"text\");
                }
            });

            \$('#verClaveNew').on(\"mouseup\", function () {

                if (\$(\"#password\").val() !== '') {
                    \$('#password').prop(\"type\", \"password\");
                }
            });

            \$('#verClaveNew').on(\"mouseout\", function () {

                if (\$(\"#password\").val() !== '') {
                    \$('#password').prop(\"type\", \"password\");
                }
            });

            \$('#verClaveNewConfirm').on(\"mousedown\", function () {

                if (\$(\"#confPassword\").val() !== '') {
                    \$('#confPassword').prop(\"type\", \"text\");
                }
            });

            \$('#verClaveNewConfirm').on(\"mouseup\", function () {

                if (\$(\"#confPassword\").val() !== '') {
                    \$('#confPassword').prop(\"type\", \"password\");
                }
            });

            \$('#verClaveNewConfirm').on(\"mouseout\", function () {

                if (\$(\"#confPassword\").val() !== '') {
                    \$('#confPassword').prop(\"type\", \"password\");
                }
            });

            \$('#btnGuardar').on('click', function () {

                let Ruta = Routing.generate('app_reset_cambiar');

                //Validaciones

                if (\$(\"#password\").val() === '') {
                    toastr[\"error\"]('La contraseña es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#confPassword\").val() === '') {
                    toastr[\"error\"]('Debe confirmar la contraseña, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                let passNew = \$(\"#password\").val();
                let passNewConfirm = \$(\"#confPassword\").val();

                if (passNewConfirm !== passNew) {
                    toastr[\"error\"]('La contraseña no coincide con la confirmación, inténtelo de nuevo.', \"Advertencia\")
                    \$(\"#password\").val('');
                    \$(\"#confPassword\").val('');
                    return false;
                }

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    userId: parseInt('";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 194, $this->source); })()), "html", null, true);
        echo "'),
                    password: \$('#password').val()
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('La contraseña ha sido cambiada.', \"Notificación\")
                        window.location.href = \"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
        echo "\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 207,  289 => 194,  212 => 120,  186 => 97,  182 => 96,  176 => 94,  169 => 93,  138 => 67,  117 => 47,  99 => 30,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cambiar contraseña{% endblock %}

{% block body %}
    <!-- Alerta -->
    <div class=\"preload hidden\">
        <div class=\"logo\"></div>
        <div class=\"loader-frame\">
            <div class=\"loader1\" id=\"loader1\"></div>
            <div class=\"loader2\" id=\"loader2\"></div>
        </div>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid mt-5\" style=\"width: 500px;\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card card-info card-outline\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-user-edit\"></i>
                                    Cambiar contraseña
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                {# Password #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"input-group mb-3\">
                                            <label for=\"password\"></label><input type=\"password\" name=\"password\"
                                                                                 id=\"password\" class=\"form-control\"
                                                                                 autocomplete=\"current-password\"
                                                                                 required placeholder=\"Nueva Contraseña\">
                                            <div class=\"input-group-append\">
                                                <div class=\"input-group-text\">
                                                    <span class=\"fas fa-eye-slash\" id=\"verClaveNew\"
                                                          style=\"cursor: pointer\"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {# ConfPassword #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"input-group mb-3\">
                                            <label for=\"confPassword\"></label><input type=\"password\" name=\"confPassword\"
                                                                                     id=\"confPassword\"
                                                                                     class=\"form-control\"
                                                                                     autocomplete=\"current-password\"
                                                                                     required
                                                                                     placeholder=\"Confirmar nueva contraseña\">
                                            <div class=\"input-group-append\">
                                                <div class=\"input-group-text\">
                                                    <span class=\"fas fa-eye-slash\" id=\"verClaveNewConfirm\"
                                                          style=\"cursor: pointer\"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {# Botones #}
                            <div class=\"card-footer\">
                                <div class=\"row justify-content-center\">
                                    <div>
                                        <button type=\"button\" class=\"btn btn-primary\"
                                                id=\"btnGuardar\"
                                                data-toggle=\"tooltip\"
                                                data-placement=\"top\"
                                                title=\"Guardar el producto\">Guardar
                                        </button>
                                        <button type=\"button\" class=\"btn btn-danger\"
                                                id=\"btnCancelar\"
                                                data-toggle=\"tooltip\"
                                                data-placement=\"top\"
                                                title=\"Salir\">Cancelar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Acceso a Rutas del Controller -->
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script>
        \$(document).ready(function () {

            toastr.options = {
                \"closeButton\": false,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-right\",
                \"preventDuplicates\": true,
                \"onclick\": null,
                \"showDuration\": \"300\",
                \"hideDuration\": \"1000\",
                \"timeOut\": \"5000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            \$('#btnCancelar').on('click', function () {
                window.location.href = \"{{ path('app_resumen') }}\";
            });


            \$('#verClaveNew').on(\"mousedown\", function () {

                if (\$(\"#password\").val() !== '') {
                    \$('#password').prop(\"type\", \"text\");
                }
            });

            \$('#verClaveNew').on(\"mouseup\", function () {

                if (\$(\"#password\").val() !== '') {
                    \$('#password').prop(\"type\", \"password\");
                }
            });

            \$('#verClaveNew').on(\"mouseout\", function () {

                if (\$(\"#password\").val() !== '') {
                    \$('#password').prop(\"type\", \"password\");
                }
            });

            \$('#verClaveNewConfirm').on(\"mousedown\", function () {

                if (\$(\"#confPassword\").val() !== '') {
                    \$('#confPassword').prop(\"type\", \"text\");
                }
            });

            \$('#verClaveNewConfirm').on(\"mouseup\", function () {

                if (\$(\"#confPassword\").val() !== '') {
                    \$('#confPassword').prop(\"type\", \"password\");
                }
            });

            \$('#verClaveNewConfirm').on(\"mouseout\", function () {

                if (\$(\"#confPassword\").val() !== '') {
                    \$('#confPassword').prop(\"type\", \"password\");
                }
            });

            \$('#btnGuardar').on('click', function () {

                let Ruta = Routing.generate('app_reset_cambiar');

                //Validaciones

                if (\$(\"#password\").val() === '') {
                    toastr[\"error\"]('La contraseña es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#confPassword\").val() === '') {
                    toastr[\"error\"]('Debe confirmar la contraseña, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                let passNew = \$(\"#password\").val();
                let passNewConfirm = \$(\"#confPassword\").val();

                if (passNewConfirm !== passNew) {
                    toastr[\"error\"]('La contraseña no coincide con la confirmación, inténtelo de nuevo.', \"Advertencia\")
                    \$(\"#password\").val('');
                    \$(\"#confPassword\").val('');
                    return false;
                }

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    userId: parseInt('{{ user }}'),
                    password: \$('#password').val()
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('La contraseña ha sido cambiada.', \"Notificación\")
                        window.location.href = \"{{ path('app_resumen') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

        });
    </script>
{% endblock %}

", "reset_password/resetPassword.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\reset_password\\resetPassword.html.twig");
    }
}
