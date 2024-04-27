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

/* servicio/editServicio.html.twig */
class __TwigTemplate_f500d0d4a97a22fa8b2cc55582edf339 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'page' => [$this, 'block_page'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "servicio/editServicio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "servicio/editServicio.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modificar Servicio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Select2 -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/css/select2.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 12
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 13
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
                                    <i class=\"fas fa-edit\"></i>
                                    Modificar servicio
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 37
        yield "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Teclee el nombre\"
                                                                               id=\"nombre\"
                                                                               name=\"nombre\" value=\"";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 43, $this->source); })()), "nombre", [], "any", false, false, false, 43), "html", null, true);
        yield "\"
                                                                               onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 49
        yield "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"beneficio\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Teclee el beneficio\"
                                                                                  id=\"beneficio\" value=\"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 54, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 54), "html", null, true);
        yield "\"
                                                                                  name=\"nombre\">
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 60
        yield "                                <div class=\"row\">
                                    <div class=\"col-md-12 col-12\" style=\"margin-top: 5px\">
                                        <div class=\"form-group\">
                                            <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                                Tipo de Moneda
                                            </h5>
                                            <label>
                                                <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoMoneda\"
                                                       value=\"USD\" ";
        // line 68
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 68, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 68) == "USD")) ? ("checked") : (""));
        yield ">
                                            </label>
                                            <label for=\"tipoMoneda\">USD</label>

                                            <label>
                                                <input style=\"margin-left: 20px\" type=\"radio\"
                                                       name=\"tipoMoneda\"
                                                       value=\"EUR\" ";
        // line 75
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 75, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 75) == "EUR")) ? ("checked") : (""));
        yield ">
                                            </label>
                                            <label for=\"tipoMoneda\">EUR</label>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 82
        yield "                                <div class=\"col-12\" style=\"margin-top: 20px\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\"
                                               placeholder=\"Teclee el concepto\" id=\"concepto\"
                                               name=\"concepto\" value=\"";
        // line 86
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 86, $this->source); })()), "conceptoServicio", [], "any", false, false, false, 86), "html", null, true);
        yield "\">
                                    </div>
                                </div>
                                ";
        // line 90
        yield "                                <div class=\"col-12\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\"
                                               placeholder=\"Teclee la descripción\" id=\"descripcion\"
                                               name=\"descripcion\" value=\"";
        // line 94
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 94, $this->source); })()), "descripcionServicio", [], "any", false, false, false, 94), "html", null, true);
        yield "\">
                                    </div>
                                </div>
                                ";
        // line 98
        yield "                                <div class=\"col-sm-12\">
                                    <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                        Documento <input type=\"file\" name=\"upload\" id=\"upload\" value=\"";
        // line 100
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 100, $this->source); })()), "documentoServicio", [], "any", false, false, false, 100), "html", null, true);
        yield "\"/>
                                    </form>
                                </div>
                                ";
        // line 104
        yield "                                <div class=\"col-12\" style=\"margin-top: 20px\">
                                    <div class=\"form-group\">
                                        <label for=\"usuario\"></label><select class=\"form-control\" id=\"usuario\"
                                                                             name=\"usuario\">
                                            <option value=\"";
        // line 108
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "nombre", [], "any", false, false, false, 108) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "apellidos", [], "any", false, false, false, 108)), "html", null, true);
        yield "</option>
                                            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 110
            yield "                                                <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 110), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 110) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "apellidos", [], "any", false, false, false, 110)), "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "                                        </select>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 117
        yield "                            <div class=\"card-footer\">
                                <div class=\"row justify-content-center\">
                                    <div>
                                        <button type=\"button\" class=\"btn btn-primary\"
                                                id=\"btnGuardar\"
                                                data-toggle=\"tooltip\"
                                                data-placement=\"top\"
                                                title=\"Guardar el servicio\">Guardar
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

    // line 143
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Select2 -->
    <script src=\"";
        // line 146
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 148
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <script>
        \$(document).ready(function () {

            let fichero;
            let siFichero = 0;

            \$('#usuario').select2();

            toastr.options = {
                \"closeButton\": false,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-right\",
                \"preventDuplicates\": true,
                \"onclick\": null,
                \"showDuration\": \"300\",
                \"hideDuration\": \"500\",
                \"timeOut\": \"3000\",
                \"extendedTimeOut\": \"500\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            \$('#beneficio').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#beneficio').val().length;
                    let indexPunto = \$('#beneficio').val().indexOf('.');
                    let indexComa = \$('#beneficio').val().indexOf(',');

                    if (tecla.charCode === 44) {
                        if (len === 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexComa > 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexPunto !== -1) {
                            return false;
                        }
                    }else if (tecla.charCode === 46) {
                        if (len === 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexPunto > 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexComa !== -1) {
                            return false;
                        }
                    }
                    if (indexPunto > 0) {
                        let CharAfterdot = (len + 1) - indexPunto;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }else if (indexComa > 0) {
                        let CharAfterdot = (len + 1) - indexComa;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$('#btnCancelar').on('click', function ()
            {
                window.location.href = \"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_index");
        yield "\";
            });

            \$(\"#upload\").on('change', function (e) {
                let fichero = \$(\"#upload\").val();
                let input = document.getElementById('upload');
                let file = input.files[0]; //2 000 000
                let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

                if (!allowedExtensions.exec(fichero)) {
                    toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else if (file.size > 2000000) {
                    toastr[\"error\"]('El tamano del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else {
                    //aqui subo el fichero y guardo el nombre
                    let Ruta = Routing.generate('app_servicio_fichero');
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

                let Ruta = Routing.generate('app_servicio_update', {'id': ";
        // line 261
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 261, $this->source); })()), "id", [], "any", false, false, false, 261), "html", null, true);
        yield "});

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#beneficio\").val() === '' || \$(\"#beneficio\").val() === '0') {
                    toastr[\"error\"]('El beneficio es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#concepto\").val() === '') {
                    toastr[\"error\"]('El concepto de servicio es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#descripcion\").val() === '') {
                    toastr[\"error\"]('La descripción del servicio es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#usuario\").val() === '0') {
                    toastr[\"error\"]('Debe asignar un usuario al producto, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                if (siFichero === 0){
                    fichero = '';
                }else{
                    fichero = document.getElementById('upload').files[0].name;
                }

                \$(\".preload\").removeClass('hidden');

                //Declaracion de variables
                let tipoServicio = 3;

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    tipoProducto: tipoServicio,
                    beneficio: parseFloat(\$('#beneficio').val().replace(',','.')),
                    tipoMoneda: \$('input:radio[name=tipoMoneda]:checked').val(),
                    concepto: \$(\"#concepto\").val(),
                    descripcion: \$(\"#descripcion\").val(),
                    usuario: \$(\"#usuario\").val(),
                    usuarioAnterior: '";
        // line 304
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 304, $this->source); })()), "user", [], "any", false, false, false, 304), "id", [], "any", false, false, false, 304), "html", null, true);
        yield "',
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
                        toastr[\"success\"]('El servicio ha sido modificado.', \"Notificación\")
                        window.location.href = \"";
        // line 317
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_index");
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
        return "servicio/editServicio.html.twig";
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
        return array (  490 => 317,  474 => 304,  428 => 261,  386 => 222,  310 => 149,  306 => 148,  301 => 146,  295 => 144,  288 => 143,  256 => 117,  250 => 112,  239 => 110,  235 => 109,  229 => 108,  223 => 104,  217 => 100,  213 => 98,  207 => 94,  201 => 90,  195 => 86,  189 => 82,  180 => 75,  170 => 68,  160 => 60,  152 => 54,  145 => 49,  137 => 43,  129 => 37,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modificar Servicio{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Select2 -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/select2/css/select2.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}\">
{% endblock %}

{% block page %}
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
                                    <i class=\"fas fa-edit\"></i>
                                    Modificar servicio
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                {# Nombre #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Teclee el nombre\"
                                                                               id=\"nombre\"
                                                                               name=\"nombre\" value=\"{{ servicio.nombre }}\"
                                                                               onkeypress=\"return soloLetras(event)\">
                                        </div>
                                    </div>
                                </div>
                                {# Beneficio por venta #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"beneficio\"></label><input type=\"text\" class=\"form-control\"
                                                                                  placeholder=\"Teclee el beneficio\"
                                                                                  id=\"beneficio\" value=\"{{ servicio.beneficioxventa }}\"
                                                                                  name=\"nombre\">
                                        </div>
                                    </div>
                                </div>
                                {# Tipo de Moneda #}
                                <div class=\"row\">
                                    <div class=\"col-md-12 col-12\" style=\"margin-top: 5px\">
                                        <div class=\"form-group\">
                                            <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                                Tipo de Moneda
                                            </h5>
                                            <label>
                                                <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoMoneda\"
                                                       value=\"USD\" {{ (servicio.tipodemoneda == 'USD') ? 'checked' }}>
                                            </label>
                                            <label for=\"tipoMoneda\">USD</label>

                                            <label>
                                                <input style=\"margin-left: 20px\" type=\"radio\"
                                                       name=\"tipoMoneda\"
                                                       value=\"EUR\" {{ (servicio.tipodemoneda == 'EUR') ? 'checked' }}>
                                            </label>
                                            <label for=\"tipoMoneda\">EUR</label>
                                        </div>
                                    </div>
                                </div>
                                {# Concepto #}
                                <div class=\"col-12\" style=\"margin-top: 20px\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\"
                                               placeholder=\"Teclee el concepto\" id=\"concepto\"
                                               name=\"concepto\" value=\"{{ servicio.conceptoServicio }}\">
                                    </div>
                                </div>
                                {# Descripción #}
                                <div class=\"col-12\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\"
                                               placeholder=\"Teclee la descripción\" id=\"descripcion\"
                                               name=\"descripcion\" value=\"{{ servicio.descripcionServicio }}\">
                                    </div>
                                </div>
                                {# Docuemnto #}
                                <div class=\"col-sm-12\">
                                    <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                        Documento <input type=\"file\" name=\"upload\" id=\"upload\" value=\"{{ servicio.documentoServicio }}\"/>
                                    </form>
                                </div>
                                {# Usuario #}
                                <div class=\"col-12\" style=\"margin-top: 20px\">
                                    <div class=\"form-group\">
                                        <label for=\"usuario\"></label><select class=\"form-control\" id=\"usuario\"
                                                                             name=\"usuario\">
                                            <option value=\"{{ servicio.user.id }}\">{{ servicio.user.nombre ~ ' ' ~ servicio.user.apellidos }}</option>
                                            {% for user in  users %}
                                                <option value=\"{{ user.id }}\">{{ user.nombre ~ ' ' ~ user.apellidos }}</option>
                                            {% endfor %}
                                        </select>
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
                                                title=\"Guardar el servicio\">Guardar
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
    <!-- Select2 -->
    <script src=\"{{ asset('plugins/select2/js/select2.full.min.js') }}\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script>
        \$(document).ready(function () {

            let fichero;
            let siFichero = 0;

            \$('#usuario').select2();

            toastr.options = {
                \"closeButton\": false,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-right\",
                \"preventDuplicates\": true,
                \"onclick\": null,
                \"showDuration\": \"300\",
                \"hideDuration\": \"500\",
                \"timeOut\": \"3000\",
                \"extendedTimeOut\": \"500\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            \$('#beneficio').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#beneficio').val().length;
                    let indexPunto = \$('#beneficio').val().indexOf('.');
                    let indexComa = \$('#beneficio').val().indexOf(',');

                    if (tecla.charCode === 44) {
                        if (len === 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexComa > 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexPunto !== -1) {
                            return false;
                        }
                    }else if (tecla.charCode === 46) {
                        if (len === 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexPunto > 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexComa !== -1) {
                            return false;
                        }
                    }
                    if (indexPunto > 0) {
                        let CharAfterdot = (len + 1) - indexPunto;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }else if (indexComa > 0) {
                        let CharAfterdot = (len + 1) - indexComa;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$('#btnCancelar').on('click', function ()
            {
                window.location.href = \"{{ path('app_servicio_index') }}\";
            });

            \$(\"#upload\").on('change', function (e) {
                let fichero = \$(\"#upload\").val();
                let input = document.getElementById('upload');
                let file = input.files[0]; //2 000 000
                let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

                if (!allowedExtensions.exec(fichero)) {
                    toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else if (file.size > 2000000) {
                    toastr[\"error\"]('El tamano del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else {
                    //aqui subo el fichero y guardo el nombre
                    let Ruta = Routing.generate('app_servicio_fichero');
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

                let Ruta = Routing.generate('app_servicio_update', {'id': {{ servicio.id }}});

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#beneficio\").val() === '' || \$(\"#beneficio\").val() === '0') {
                    toastr[\"error\"]('El beneficio es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#concepto\").val() === '') {
                    toastr[\"error\"]('El concepto de servicio es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#descripcion\").val() === '') {
                    toastr[\"error\"]('La descripción del servicio es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#usuario\").val() === '0') {
                    toastr[\"error\"]('Debe asignar un usuario al producto, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                if (siFichero === 0){
                    fichero = '';
                }else{
                    fichero = document.getElementById('upload').files[0].name;
                }

                \$(\".preload\").removeClass('hidden');

                //Declaracion de variables
                let tipoServicio = 3;

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    tipoProducto: tipoServicio,
                    beneficio: parseFloat(\$('#beneficio').val().replace(',','.')),
                    tipoMoneda: \$('input:radio[name=tipoMoneda]:checked').val(),
                    concepto: \$(\"#concepto\").val(),
                    descripcion: \$(\"#descripcion\").val(),
                    usuario: \$(\"#usuario\").val(),
                    usuarioAnterior: '{{ servicio.user.id }}',
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
                        toastr[\"success\"]('El servicio ha sido modificado.', \"Notificación\")
                        window.location.href = \"{{ path('app_servicio_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

        });
    </script>
{% endblock %}

", "servicio/editServicio.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\servicio\\editServicio.html.twig");
    }
}
