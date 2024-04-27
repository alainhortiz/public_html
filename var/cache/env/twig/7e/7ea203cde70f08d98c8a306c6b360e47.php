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

/* user/registroUser.html.twig */
class __TwigTemplate_83f1d6c53889accfa38ad8aaeeec8606 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/registroUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/registroUser.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Registro de Usuario";
        
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
                                    Registro de Nuevo Usuario
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                                                <div class=\"col-sm-12\">
                                    <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                        Subir Avatar <input type=\"file\" name=\"upload\" id=\"upload\"/>
                                    </form>
                                </div>
                                                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Nombre\"
                                                                               id=\"nombre\"
                                                                               name=\"nombre\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"apellidos\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Apellidos\"
                                                                                  id=\"apellidos\"
                                                                                  name=\"apellidos\">
                                        </div>
                                    </div>
                                </div>
                                                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"empresa\"></label><input type=\"text\" class=\"form-control\"
                                                                                placeholder=\"Empresa\"
                                                                                id=\"empresa\"
                                                                                name=\"empresa\">
                                        </div>
                                    </div>
                                </div>
                                                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"direccion\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Dirección\"
                                                                                  id=\"direccion\"
                                                                                  name=\"direccion\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                                                        <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"poblacion\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Población\"
                                                                                  id=\"poblacion\"
                                                                                  name=\"poblacion\">
                                        </div>
                                    </div>
                                                                        <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"pais\"></label><input type=\"text\" class=\"form-control\"
                                                                             placeholder=\"País\"
                                                                             id=\"pais\"
                                                                             name=\"pais\">
                                        </div>
                                    </div>
                                </div>
                                                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"email\"></label><input type=\"text\" class=\"form-control\"
                                                                              placeholder=\"Email(usuario)\"
                                                                              id=\"email\"
                                                                              name=\"email\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"postal\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Código Postal\"
                                                                               id=\"postal\"
                                                                               name=\"postal\">
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                                                        <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"telefono\"></label><input type=\"text\" class=\"form-control\"
                                                                                 placeholder=\"telefono\"
                                                                                 id=\"telefono\"
                                                                                 name=\"telefono\">
                                        </div>
                                    </div>
                                                                        <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"provincia\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Provincia\"
                                                                                  id=\"provincia\"
                                                                                  name=\"provincia\">
                                        </div>
                                    </div>
                                </div>
                                                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"nif\"></label><input type=\"text\" class=\"form-control\"
                                                                            placeholder=\"NIF/CIF\"
                                                                            id=\"nif\"
                                                                            name=\"nif\">
                                        </div>
                                    </div>
                                </div>
                                                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"input-group mb-3\">
                                            <label for=\"password\"></label><input type=\"password\" name=\"password\"
                                                                                 id=\"password\" class=\"form-control\"
                                                                                 autocomplete=\"current-password\"
                                                                                 required placeholder=\"Contraseña\">
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
                                                                                     placeholder=\"Confirmar Contraseña\">
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

    // line 211
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 212
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 214
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <script>
        \$(document).ready(function () {

            //Declaracion de variables
            let fichero;
            let siFichero = 0;
            let reg = new RegExp(/^([\\da-z_\\.-]+)@([\\da-z\\.-]+)\\.([a-z\\.]{2,6})\$/);

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
        // line 243
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\";
            });

            //Función que valida la dirección de correo
            function validarEmail(valor) {
                return reg.test(valor.toLowerCase().trim());
            }

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

            function soloLetras(e) {
                var key = e.keyCode || e.which,
                    tecla = String.fromCharCode(key).toLowerCase(),
                    letras = \" áéíóúabcdefghijklmnñopqrstuvwxyz\",
                    especiales = [8, 37, 39, 46],
                    tecla_especial = false;

                for (var i in especiales) {
                    if (key == especiales[i]) {
                        tecla_especial = true;
                        break;
                    }
                }

                if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                    return false;
                }
            }

            \$(\"#upload\").on('change', function (e) {
                let fichero = \$(\"#upload\").val();
                let input = document.getElementById('upload');
                let file = input.files[0]; //2 000 000
                let allowedExtensions = /(.jpg|.png)\$/i;

                if (!allowedExtensions.exec(fichero)) {
                    toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .jpg, .png.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else if (file.size > 2000000) {
                    toastr[\"error\"]('El tamano del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else {
                    //aqui subo el fichero y guardo el nombre
                    let Ruta = Routing.generate('app_user_fichero');
                    let form = document.getElementById(\"myform\");
                    siFichero = 1;

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"json\",
                        data: new FormData(form),
                        contentType: false,
                        processData: false,
                        cache: false
                    }).done(function (data) {
                        fichero = data['fichero'];
                    });
                }
            });

            \$('#btnGuardar').on('click', function () {

                let Ruta = Routing.generate('app_user_registro');

                //Validaciones

                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#apellidos\").val() === '') {
                    toastr[\"error\"]('El apellido es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                if (\$(\"#email\").val() === '') {
                    toastr[\"error\"]('La dirección de correo es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                } else {
                    if (!validarEmail(\$(\"#email\").val())) {
                        toastr[\"error\"]('Teclee una dirección de correo válida', \"Advertencia\")
                        return false;
                    }
                }

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

                if (siFichero === 0) {
                    fichero = '';
                } else {
                    fichero = document.getElementById('upload').files[0].name;
                }

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    apellidos: \$('#apellidos').val(),
                    empresa: \$('#empresa').val(),
                    direccion: \$('#direccion').val(),
                    poblacion: \$('#poblacion').val(),
                    pais: \$('#pais').val(),
                    email: \$('#email').val(),
                    postal: \$('#postal').val(),
                    telefono: \$('#telefono').val(),
                    provincia: \$('#provincia').val(),
                    nif: \$('#nif').val(),
                    password: \$('#password').val(),
                    fichero: fichero
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('El usuario ha sido registrado.', \"Notificación\")
                        window.location.href = \"";
        // line 423
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\";
                    } else if (data === 'correo') {
                        toastr[\"error\"]('El usuario ha sido registrado pero no se pudo enviar el correo al administrador, no hay comunicación con el servidor', \"Advertencia\")
                        window.location.href = \"";
        // line 426
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
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
        return "user/registroUser.html.twig";
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
        return array (  511 => 426,  505 => 423,  322 => 243,  291 => 215,  287 => 214,  281 => 212,  274 => 211,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro de Usuario{% endblock %}

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
                                    Registro de Nuevo Usuario
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                {# Imagen #}
                                <div class=\"col-sm-12\">
                                    <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                        Subir Avatar <input type=\"file\" name=\"upload\" id=\"upload\"/>
                                    </form>
                                </div>
                                {# Nombre #}
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Nombre\"
                                                                               id=\"nombre\"
                                                                               name=\"nombre\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"apellidos\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Apellidos\"
                                                                                  id=\"apellidos\"
                                                                                  name=\"apellidos\">
                                        </div>
                                    </div>
                                </div>
                                {# Empresa #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"empresa\"></label><input type=\"text\" class=\"form-control\"
                                                                                placeholder=\"Empresa\"
                                                                                id=\"empresa\"
                                                                                name=\"empresa\">
                                        </div>
                                    </div>
                                </div>
                                {# Direccion #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"direccion\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Dirección\"
                                                                                  id=\"direccion\"
                                                                                  name=\"direccion\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    {# Poblacion #}
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"poblacion\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Población\"
                                                                                  id=\"poblacion\"
                                                                                  name=\"poblacion\">
                                        </div>
                                    </div>
                                    {# Pais #}
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"pais\"></label><input type=\"text\" class=\"form-control\"
                                                                             placeholder=\"País\"
                                                                             id=\"pais\"
                                                                             name=\"pais\">
                                        </div>
                                    </div>
                                </div>
                                {# Email #}
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"email\"></label><input type=\"text\" class=\"form-control\"
                                                                              placeholder=\"Email(usuario)\"
                                                                              id=\"email\"
                                                                              name=\"email\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"postal\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Código Postal\"
                                                                               id=\"postal\"
                                                                               name=\"postal\">
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    {# Telefono #}
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"telefono\"></label><input type=\"text\" class=\"form-control\"
                                                                                 placeholder=\"telefono\"
                                                                                 id=\"telefono\"
                                                                                 name=\"telefono\">
                                        </div>
                                    </div>
                                    {# Provincia #}
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"provincia\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Provincia\"
                                                                                  id=\"provincia\"
                                                                                  name=\"provincia\">
                                        </div>
                                    </div>
                                </div>
                                {# NIF #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"nif\"></label><input type=\"text\" class=\"form-control\"
                                                                            placeholder=\"NIF/CIF\"
                                                                            id=\"nif\"
                                                                            name=\"nif\">
                                        </div>
                                    </div>
                                </div>
                                {# Password #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"input-group mb-3\">
                                            <label for=\"password\"></label><input type=\"password\" name=\"password\"
                                                                                 id=\"password\" class=\"form-control\"
                                                                                 autocomplete=\"current-password\"
                                                                                 required placeholder=\"Contraseña\">
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
                                                                                     placeholder=\"Confirmar Contraseña\">
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

            //Declaracion de variables
            let fichero;
            let siFichero = 0;
            let reg = new RegExp(/^([\\da-z_\\.-]+)@([\\da-z\\.-]+)\\.([a-z\\.]{2,6})\$/);

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
                window.location.href = \"{{ path('app_user_index') }}\";
            });

            //Función que valida la dirección de correo
            function validarEmail(valor) {
                return reg.test(valor.toLowerCase().trim());
            }

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

            function soloLetras(e) {
                var key = e.keyCode || e.which,
                    tecla = String.fromCharCode(key).toLowerCase(),
                    letras = \" áéíóúabcdefghijklmnñopqrstuvwxyz\",
                    especiales = [8, 37, 39, 46],
                    tecla_especial = false;

                for (var i in especiales) {
                    if (key == especiales[i]) {
                        tecla_especial = true;
                        break;
                    }
                }

                if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                    return false;
                }
            }

            \$(\"#upload\").on('change', function (e) {
                let fichero = \$(\"#upload\").val();
                let input = document.getElementById('upload');
                let file = input.files[0]; //2 000 000
                let allowedExtensions = /(.jpg|.png)\$/i;

                if (!allowedExtensions.exec(fichero)) {
                    toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .jpg, .png.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else if (file.size > 2000000) {
                    toastr[\"error\"]('El tamano del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else {
                    //aqui subo el fichero y guardo el nombre
                    let Ruta = Routing.generate('app_user_fichero');
                    let form = document.getElementById(\"myform\");
                    siFichero = 1;

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"json\",
                        data: new FormData(form),
                        contentType: false,
                        processData: false,
                        cache: false
                    }).done(function (data) {
                        fichero = data['fichero'];
                    });
                }
            });

            \$('#btnGuardar').on('click', function () {

                let Ruta = Routing.generate('app_user_registro');

                //Validaciones

                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#apellidos\").val() === '') {
                    toastr[\"error\"]('El apellido es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                if (\$(\"#email\").val() === '') {
                    toastr[\"error\"]('La dirección de correo es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                } else {
                    if (!validarEmail(\$(\"#email\").val())) {
                        toastr[\"error\"]('Teclee una dirección de correo válida', \"Advertencia\")
                        return false;
                    }
                }

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

                if (siFichero === 0) {
                    fichero = '';
                } else {
                    fichero = document.getElementById('upload').files[0].name;
                }

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    apellidos: \$('#apellidos').val(),
                    empresa: \$('#empresa').val(),
                    direccion: \$('#direccion').val(),
                    poblacion: \$('#poblacion').val(),
                    pais: \$('#pais').val(),
                    email: \$('#email').val(),
                    postal: \$('#postal').val(),
                    telefono: \$('#telefono').val(),
                    provincia: \$('#provincia').val(),
                    nif: \$('#nif').val(),
                    password: \$('#password').val(),
                    fichero: fichero
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('El usuario ha sido registrado.', \"Notificación\")
                        window.location.href = \"{{ path('app_login') }}\";
                    } else if (data === 'correo') {
                        toastr[\"error\"]('El usuario ha sido registrado pero no se pudo enviar el correo al administrador, no hay comunicación con el servidor', \"Advertencia\")
                        window.location.href = \"{{ path('app_login') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

        });
    </script>
{% endblock %}

", "user/registroUser.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\user\\registroUser.html.twig");
    }
}
