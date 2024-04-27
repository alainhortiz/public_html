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

/* user/editUser.html.twig */
class __TwigTemplate_591bd451728a757332b317f63a20475d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/editUser.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modificar Usuario";
        
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
                                    Modificar Usuario
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 30
        yield "                                <div class=\"col-sm-12\">
                                    <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                        Subir Avatar <input type=\"file\" name=\"upload\" id=\"upload\"/>
                                    </form>
                                </div>
                                ";
        // line 36
        yield "                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Nombre\"
                                                                               id=\"nombre\"
                                                                               name=\"nombre\" value=\"";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "nombre", [], "any", false, false, false, 42), "html", null, true);
        yield "\"
                                                                               onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"apellidos\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Apellidos\"
                                                                                  id=\"apellidos\"
                                                                                  name=\"apellidos\"
                                                                                  value=\"";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "apellidos", [], "any", false, false, false, 52), "html", null, true);
        yield "\"
                                                                                  onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 58
        yield "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"empresa\"></label><input type=\"text\" class=\"form-control\"
                                                                                placeholder=\"Empresa\"
                                                                                id=\"empresa\"
                                                                                name=\"empresa\"
                                                                                value=\"";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "empresa", [], "any", false, false, false, 65), "html", null, true);
        yield "\"
                                                                                onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 71
        yield "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"direccion\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Dirección\"
                                                                                  id=\"direccion\"
                                                                                  name=\"direccion\"
                                                                                  value=\"";
        // line 78
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "direccion", [], "any", false, false, false, 78), "html", null, true);
        yield "\"
                                                                                  onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    ";
        // line 85
        yield "                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"poblacion\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Población\"
                                                                                  id=\"poblacion\"
                                                                                  name=\"poblacion\"
                                                                                  value=\"";
        // line 91
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "poblacion", [], "any", false, false, false, 91), "html", null, true);
        yield "\"
                                                                                  onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                    ";
        // line 96
        yield "                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"pais\"></label><input type=\"text\" class=\"form-control\"
                                                                             placeholder=\"País\"
                                                                             id=\"pais\"
                                                                             name=\"pais\" value=\"";
        // line 101
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "pais", [], "any", false, false, false, 101), "html", null, true);
        yield "\"
                                                                             onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 107
        yield "                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"email\"></label><input type=\"text\" class=\"form-control\"
                                                                              placeholder=\"Email(usuario)\"
                                                                              id=\"email\" value=\"";
        // line 112
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "email", [], "any", false, false, false, 112), "html", null, true);
        yield "\"
                                                                              name=\"email\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"postal\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Código Postal\"
                                                                               id=\"postal\" value=\"";
        // line 120
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "codigoPostal", [], "any", false, false, false, 120), "html", null, true);
        yield "\"
                                                                               name=\"postal\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    ";
        // line 127
        yield "                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"telefono\"></label><input type=\"text\" class=\"form-control\"
                                                                                 placeholder=\"telefono\"
                                                                                 id=\"telefono\"
                                                                                 value=\"";
        // line 132
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "telefono", [], "any", false, false, false, 132), "html", null, true);
        yield "\"
                                                                                 name=\"telefono\">
                                        </div>
                                    </div>
                                    ";
        // line 137
        yield "                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"provincia\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Provincia\"
                                                                                  id=\"provincia\"
                                                                                  name=\"provincia\"
                                                                                  value=\"";
        // line 143
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "provincia", [], "any", false, false, false, 143), "html", null, true);
        yield "\"
                                                                                  onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 149
        yield "                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"nif\"></label><input type=\"text\" class=\"form-control\"
                                                                            placeholder=\"NIF/CIF\"
                                                                            id=\"nif\" value=\"";
        // line 154
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 154, $this->source); })()), "nifcif", [], "any", false, false, false, 154), "html", null, true);
        yield "\"
                                                                            name=\"nif\">
                                        </div>
                                    </div>
                                    ";
        // line 158
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 159
            yield "                                        <div class=\"col-6\">
                                            <div class=\"form-group\">
                                                <label>
                                                    <input style=\"margin-top: 40px\" type=\"checkbox\"
                                                           id=\"factura\" ";
            // line 163
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 163, $this->source); })()), "emitirfactura", [], "any", false, false, false, 163) == "1")) ? ("checked") : (""));
            yield ">
                                                </label>
                                                <label for=\"factura\">Emitir factura</label>
                                            </div>
                                        </div>
                                    ";
        }
        // line 169
        yield "                                </div>
                                ";
        // line 171
        yield "                                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 172
            yield "                                    <div class=\"row\">
                                        <div class=\"col-md-12 col-12\" style=\"margin-top: 5px\">
                                            <div class=\"form-group\">
                                                <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                                    Roles
                                                </h5>
                                                <label>
                                                    <input style=\"margin-left: 20px\" type=\"radio\" name=\"rol\"
                                                           value=\"ROLE_ADMIN\" ";
            // line 180
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 180, $this->source); })()), "roles", [], "any", false, false, false, 180), 0, [], "array", false, false, false, 180) == "ROLE_ADMIN")) ? ("checked") : (""));
            yield ">
                                                </label>
                                                <label for=\"rol\">Administrador</label>

                                                <label>
                                                    <input style=\"margin-left: 20px\" type=\"radio\"
                                                           name=\"rol\"
                                                           value=\"ROLE_USER\" ";
            // line 187
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 187, $this->source); })()), "roles", [], "any", false, false, false, 187), 0, [], "array", false, false, false, 187) == "ROLE_USER")) ? ("checked") : (""));
            yield ">
                                                </label>
                                                <label for=\"rol\">Usuario</label>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 194
        yield "                            </div>
                            ";
        // line 196
        yield "                            <div class=\"card-footer\">
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

    // line 222
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 223
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 225
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 226
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
                ";
        // line 254
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 255
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\";
                ";
        } else {
            // line 257
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
            yield "\";
                ";
        }
        // line 259
        yield "            });

            //Función que valida la dirección de correo
            function validarEmail(valor) {
                return reg.test(valor.toLowerCase().trim());
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

                let Ruta = Routing.generate('app_user_update', {'id': ";
        // line 303
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 303, $this->source); })()), "id", [], "any", false, false, false, 303), "html", null, true);
        yield "});

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

                if (siFichero === 0) {
                    fichero = '';
                } else {
                    fichero = document.getElementById('upload').files[0].name;
                }

                let factura = 0;
                if (\$('#factura').prop('checked')) {
                    factura = 1;
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
                    rol: \$('input:radio[name=rol]:checked').val(),
                    factura: factura,
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
                        toastr[\"success\"]('El usuario ha sido modificado.', \"Notificación\")
                        ";
        // line 365
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 366
            yield "                        window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\";
                        ";
        } else {
            // line 368
            yield "                        window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
            yield "\";
                        ";
        }
        // line 370
        yield "                    } else {
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
        return "user/editUser.html.twig";
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
        return array (  548 => 370,  542 => 368,  536 => 366,  534 => 365,  469 => 303,  423 => 259,  417 => 257,  411 => 255,  409 => 254,  378 => 226,  374 => 225,  368 => 223,  361 => 222,  329 => 196,  326 => 194,  316 => 187,  306 => 180,  296 => 172,  293 => 171,  290 => 169,  281 => 163,  275 => 159,  273 => 158,  266 => 154,  259 => 149,  251 => 143,  243 => 137,  236 => 132,  229 => 127,  220 => 120,  209 => 112,  202 => 107,  194 => 101,  187 => 96,  180 => 91,  172 => 85,  163 => 78,  154 => 71,  146 => 65,  137 => 58,  129 => 52,  116 => 42,  108 => 36,  101 => 30,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modificar Usuario{% endblock %}

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
                                    Modificar Usuario
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
                                                                               name=\"nombre\" value=\"{{ user.nombre }}\"
                                                                               onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"apellidos\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Apellidos\"
                                                                                  id=\"apellidos\"
                                                                                  name=\"apellidos\"
                                                                                  value=\"{{ user.apellidos }}\"
                                                                                  onkeypress=\"return soloLetras(event)\">
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
                                                                                name=\"empresa\"
                                                                                value=\"{{ user.empresa }}\"
                                                                                onkeypress=\"return soloLetras(event)\">
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
                                                                                  name=\"direccion\"
                                                                                  value=\"{{ user.direccion }}\"
                                                                                  onkeypress=\"return soloLetras(event)\">
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
                                                                                  name=\"poblacion\"
                                                                                  value=\"{{ user.poblacion }}\"
                                                                                  onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                    {# Pais #}
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"pais\"></label><input type=\"text\" class=\"form-control\"
                                                                             placeholder=\"País\"
                                                                             id=\"pais\"
                                                                             name=\"pais\" value=\"{{ user.pais }}\"
                                                                             onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                </div>
                                {# Email #}
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"email\"></label><input type=\"text\" class=\"form-control\"
                                                                              placeholder=\"Email(usuario)\"
                                                                              id=\"email\" value=\"{{ user.email }}\"
                                                                              name=\"email\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"postal\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Código Postal\"
                                                                               id=\"postal\" value=\"{{ user.codigoPostal }}\"
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
                                                                                 value=\"{{ user.telefono }}\"
                                                                                 name=\"telefono\">
                                        </div>
                                    </div>
                                    {# Provincia #}
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"provincia\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Provincia\"
                                                                                  id=\"provincia\"
                                                                                  name=\"provincia\"
                                                                                  value=\"{{ user.provincia }}\"
                                                                                  onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                </div>
                                {# NIF #}
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"nif\"></label><input type=\"text\" class=\"form-control\"
                                                                            placeholder=\"NIF/CIF\"
                                                                            id=\"nif\" value=\"{{ user.nifcif }}\"
                                                                            name=\"nif\">
                                        </div>
                                    </div>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <div class=\"col-6\">
                                            <div class=\"form-group\">
                                                <label>
                                                    <input style=\"margin-top: 40px\" type=\"checkbox\"
                                                           id=\"factura\" {{ (user.emitirfactura == '1') ? 'checked' }}>
                                                </label>
                                                <label for=\"factura\">Emitir factura</label>
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                                {# Roles #}
                                {% if is_granted('ROLE_ADMIN') %}
                                    <div class=\"row\">
                                        <div class=\"col-md-12 col-12\" style=\"margin-top: 5px\">
                                            <div class=\"form-group\">
                                                <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                                    Roles
                                                </h5>
                                                <label>
                                                    <input style=\"margin-left: 20px\" type=\"radio\" name=\"rol\"
                                                           value=\"ROLE_ADMIN\" {{ (user.roles[0] == 'ROLE_ADMIN') ? 'checked' }}>
                                                </label>
                                                <label for=\"rol\">Administrador</label>

                                                <label>
                                                    <input style=\"margin-left: 20px\" type=\"radio\"
                                                           name=\"rol\"
                                                           value=\"ROLE_USER\" {{ (user.roles[0] == 'ROLE_USER') ? 'checked' }}>
                                                </label>
                                                <label for=\"rol\">Usuario</label>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
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
                {% if is_granted('ROLE_ADMIN') %}
                window.location.href = \"{{ path('app_user_index') }}\";
                {% else %}
                window.location.href = \"{{ path('app_resumen') }}\";
                {% endif %}
            });

            //Función que valida la dirección de correo
            function validarEmail(valor) {
                return reg.test(valor.toLowerCase().trim());
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

                let Ruta = Routing.generate('app_user_update', {'id': {{ user.id }}});

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

                if (siFichero === 0) {
                    fichero = '';
                } else {
                    fichero = document.getElementById('upload').files[0].name;
                }

                let factura = 0;
                if (\$('#factura').prop('checked')) {
                    factura = 1;
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
                    rol: \$('input:radio[name=rol]:checked').val(),
                    factura: factura,
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
                        toastr[\"success\"]('El usuario ha sido modificado.', \"Notificación\")
                        {% if is_granted('ROLE_ADMIN') %}
                        window.location.href = \"{{ path('app_user_index') }}\";
                        {% else %}
                        window.location.href = \"{{ path('app_resumen') }}\";
                        {% endif %}
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

        });
    </script>
{% endblock %}

", "user/editUser.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\user\\editUser.html.twig");
    }
}
