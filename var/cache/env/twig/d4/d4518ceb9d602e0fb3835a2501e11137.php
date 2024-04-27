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

/* reset_password/resetPassword.html.twig */
class __TwigTemplate_003a26ec7715cb4529986ceed94a24ad extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Cambiar contraseña";
        
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
        yield "    <!-- Alerta -->
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 96
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
        yield "\";
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 194, $this->source); })()), "html", null, true);
        yield "'),
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reset_password/resetPassword.html.twig";
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
        return array (  302 => 207,  286 => 194,  209 => 120,  183 => 97,  179 => 96,  173 => 94,  166 => 93,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
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
