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

/* producto/addProducto.html.twig */
class __TwigTemplate_9a03daa055218e6c55b590bf9a725c6e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/addProducto.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/addProducto.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nuevo Producto";
        
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
            <div class=\"container-fluid mt-5\">
                <div class=\"card card-info card-outline\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-edit\"></i>
                            Registro de nuevo producto
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            ";
        // line 36
        yield "                            <div class=\"col-md-7 col-lg-7 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                       placeholder=\"Teclee el nombre\"
                                                                       id=\"nombre\"
                                                                       name=\"nombre\">
                                </div>
                            </div>
                            ";
        // line 45
        yield "                            <div class=\"col-md-5 col-lg-5 col-12\" style=\"margin-top: 30px\">
                                <div class=\"form-group\">
                                    <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                        Tipo de Producto
                                    </h5>
                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoProducto\"
                                               value=\"1\" checked>
                                    </label>
                                    <label for=\"tipoProducto\">General</label>

                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\"
                                               name=\"tipoProducto\"
                                               value=\"2\">
                                    </label>
                                    <label for=\"tipoProducto\">Libro</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 67
        yield "                            <div class=\"col-md-4 col-lg-4 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"idd\"></label><input type=\"text\" class=\"form-control\"
                                                                    placeholder=\"Teclee el I.D.D\" id=\"idd\"
                                                                    name=\"idd\">
                                </div>
                            </div>
                            ";
        // line 75
        yield "                            <div class=\"col-md-3 col-lg-3 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"beneficio\"></label><input type=\"text\" class=\"form-control\"
                                                                          placeholder=\"Teclee el beneficio\"
                                                                          id=\"beneficio\"
                                                                          name=\"beneficio\">
                                </div>
                            </div>
                            ";
        // line 84
        yield "                            <div class=\"col-md-5 col-lg-5 col-12\" style=\"margin-top: 30px\">
                                <div class=\"form-group\">
                                    <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                        Tipo de Moneda
                                    </h5>
                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoMoneda\"
                                               value=\"USD\" checked>
                                    </label>
                                    <label for=\"tipoMoneda\">USD</label>

                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\"
                                               name=\"tipoMoneda\"
                                               value=\"EUR\">
                                    </label>
                                    <label for=\"tipoMoneda\">EUR</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 106
        yield "                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control input-number\"
                                           placeholder=\"Stock\" id=\"stock\"
                                           name=\"stock\">
                                </div>
                            </div>
                            ";
        // line 114
        yield "                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <input type=\"text\"
                                           class=\"form-control input-number\"
                                           placeholder=\"Aviso Stock\"
                                           id=\"avisoStock\"
                                           name=\"avisoStock\">
                                </div>
                            </div>
                            ";
        // line 124
        yield "                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <select class=\"form-control\" id=\"usuario\"
                                            name=\"usuario\">
                                        <option value=\"0\">Seleccione el usuario ...</option>
                                        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 130
            yield "                                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 130), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 130) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "apellidos", [], "any", false, false, false, 130)), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 138
        yield "                            <div class=\"col-12\" style=\"margin-top: 20px\">
                                <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                    Imagen <input type=\"file\" name=\"upload\" id=\"upload\"/>
                                </form>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-check\" style=\"margin-top: 20px; margin-left: 10px\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"checkAmortizacion\">
                                <label class=\"form-check-label\" for=\"checkAmortizacion\">Gasto de Amortización</label>
                            </div>
                        </div>
                        <div id=\"mostrarAmortizacion\" style=\"display: none\">
                            <div class=\"row\">
                                ";
        // line 153
        yield "                                <div class=\"col-md-3 col-lg-3 col-12\">
                                    <div class=\"form-group\">
                                        <label for=\"costo\"></label><input type=\"text\" class=\"form-control\"
                                                                          placeholder=\"Teclee el costo de producción\"
                                                                          id=\"costo\"
                                                                          name=\"costo\">
                                    </div>
                                </div>
                                ";
        // line 162
        yield "                                <div class=\"col-md-3 col-lg-3 col-12\">
                                    <div class=\"form-group\">
                                        <label for=\"precio\"></label><input type=\"text\" class=\"form-control\"
                                                                           placeholder=\"Teclee el precio\"
                                                                           id=\"precio\"
                                                                           name=\"precio\">
                                    </div>
                                </div>
                                ";
        // line 171
        yield "                                <div class=\"col-md-6 col-lg-6 col-12\" style=\"margin-top: 30px\">
                                    <div class=\"form-group\">
                                        <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                            Beneficiado
                                        </h5>
                                        <label>
                                            <input style=\"margin-left: 20px\" type=\"radio\" name=\"beneficiado\"
                                                   value=\"0\" checked>
                                        </label>
                                        <label for=\"beneficiado\">Administrador</label>

                                        <label>
                                            <input style=\"margin-left: 20px\" type=\"radio\"
                                                   name=\"beneficiado\"
                                                   value=\"1\">
                                        </label>
                                        <label for=\"beneficiado\">Usuario</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 194
        yield "                    <div class=\"card-footer\">
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 218
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 219
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Select2 -->
    <script src=\"";
        // line 221
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 223
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 224
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <script>
        \$(document).ready(function () {

            //Declaracion de variables
            let tipoProducto = 0;
            let fichero;
            let siFichero = 0;

            \$('#usuario').select2({
                placeholder: 'Seleccione el usuario ...'
            });

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

            \$('#costo').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#costo').val().length;
                    let indexPunto = \$('#costo').val().indexOf('.');
                    let indexComa = \$('#costo').val().indexOf(',');

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

            \$('#precio').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#precio').val().length;
                    let indexPunto = \$('#precio').val().indexOf('.');
                    let indexComa = \$('#precio').val().indexOf(',');

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

            \$(\"#checkAmortizacion\").on( 'change', function() {
                if( \$(this).is(':checked') ) {
                    \$(\"#mostrarAmortizacion\").show();
                } else {
                    \$(\"#mostrarAmortizacion\").hide();
                    \$(\"#costo\").val('');
                    \$(\"#precio\").val('');
                }
            });

            \$('#btnCancelar').on('click', function () {
                window.location.href = \"";
        // line 398
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        yield "\";
            });

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
                    let Ruta = Routing.generate('app_producto_fichero');
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

                let Ruta = Routing.generate('app_producto_new');
                let isAdministrador = 1;
                let amortizacion = 0;

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#beneficio\").val() === '' || \$(\"#beneficio\").val() === '0') {
                    toastr[\"error\"]('El beneficio es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#idd\").val() === '') {
                    toastr[\"error\"]('El I.D.D del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#stock\").val() === '') {
                    toastr[\"error\"]('El stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#avisoStock\").val() === '') {
                    toastr[\"error\"]('El aviso de stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (parseInt(\$(\"#avisoStock\").val()) > parseInt(\$(\"#stock\").val())) {
                    toastr[\"error\"]('El aviso de stock no puede ser mayor que el stock del producto.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#usuario\").val() === '0') {
                    toastr[\"error\"]('Debe asignar un usuario al producto, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if( \$('#checkAmortizacion').is(':checked') ) {
                    amortizacion = 1;
                    if (\$(\"#costo\").val() === '' || \$(\"#costo\").val() === '0') {
                        toastr[\"error\"]('El costo de producción es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                        return false;
                    }
                    if (\$(\"#precio\").val() === '' || \$(\"#precio\").val() === '0') {
                        toastr[\"error\"]('El precio del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                        return false;
                    }
                    let saldo = parseFloat(\$(\"#stock\").val()) * parseFloat(\$(\"#precio\").val().replace(',','.'));
                    if (saldo < parseFloat(\$(\"#costo\").val().replace(',','.'))) {
                        toastr[\"error\"]('La cantidad de productos en stock no permite liquidar la amortización.', \"Advertencia\")
                        return false;
                    }
                }

                if (\$('input:radio[name=beneficiado]:checked').val() === '1') {
                    isAdministrador = 0;
                }

                if (siFichero === 0) {
                    fichero = '';
                } else {
                    fichero = document.getElementById('upload').files[0].name;
                }

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    tipoProducto: \$('input:radio[name=tipoProducto]:checked').val(),
                    beneficio: parseFloat(\$('#beneficio').val().replace(',','.')),
                    tipoMoneda: \$('input:radio[name=tipoMoneda]:checked').val(),
                    idd: \$(\"#idd\").val(),
                    stock: parseInt(\$(\"#stock\").val()),
                    avisStock: parseInt(\$(\"#avisoStock\").val()),
                    usuario: \$(\"#usuario\").val(),
                    fichero: fichero,
                    amortizacion: amortizacion,
                    costo: parseFloat(\$('#costo').val().replace(',','.')),
                    precio: parseFloat(\$('#precio').val().replace(',','.')),
                    isAdministrador: isAdministrador
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        if (\$('input:radio[name=tipoProducto]:checked').val() === '2') {
                            toastr[\"success\"]('El libro ha sido registrado.', \"Notificación\")
                        } else {
                            toastr[\"success\"]('El producto ha sido registrado.', \"Notificación\")
                        }
                        window.location.href = \"";
        // line 528
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_form_new");
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
        return "producto/addProducto.html.twig";
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
        return array (  674 => 528,  541 => 398,  364 => 224,  360 => 223,  355 => 221,  349 => 219,  342 => 218,  312 => 194,  288 => 171,  278 => 162,  268 => 153,  252 => 138,  245 => 132,  234 => 130,  230 => 129,  223 => 124,  212 => 114,  203 => 106,  180 => 84,  170 => 75,  161 => 67,  138 => 45,  128 => 36,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nuevo Producto{% endblock %}

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
            <div class=\"container-fluid mt-5\">
                <div class=\"card card-info card-outline\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-edit\"></i>
                            Registro de nuevo producto
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            {# Nombre #}
                            <div class=\"col-md-7 col-lg-7 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                       placeholder=\"Teclee el nombre\"
                                                                       id=\"nombre\"
                                                                       name=\"nombre\">
                                </div>
                            </div>
                            {# Tipo de Producto #}
                            <div class=\"col-md-5 col-lg-5 col-12\" style=\"margin-top: 30px\">
                                <div class=\"form-group\">
                                    <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                        Tipo de Producto
                                    </h5>
                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoProducto\"
                                               value=\"1\" checked>
                                    </label>
                                    <label for=\"tipoProducto\">General</label>

                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\"
                                               name=\"tipoProducto\"
                                               value=\"2\">
                                    </label>
                                    <label for=\"tipoProducto\">Libro</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# IDD #}
                            <div class=\"col-md-4 col-lg-4 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"idd\"></label><input type=\"text\" class=\"form-control\"
                                                                    placeholder=\"Teclee el I.D.D\" id=\"idd\"
                                                                    name=\"idd\">
                                </div>
                            </div>
                            {# Beneficio por venta #}
                            <div class=\"col-md-3 col-lg-3 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"beneficio\"></label><input type=\"text\" class=\"form-control\"
                                                                          placeholder=\"Teclee el beneficio\"
                                                                          id=\"beneficio\"
                                                                          name=\"beneficio\">
                                </div>
                            </div>
                            {# Tipo de Moneda #}
                            <div class=\"col-md-5 col-lg-5 col-12\" style=\"margin-top: 30px\">
                                <div class=\"form-group\">
                                    <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                        Tipo de Moneda
                                    </h5>
                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoMoneda\"
                                               value=\"USD\" checked>
                                    </label>
                                    <label for=\"tipoMoneda\">USD</label>

                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\"
                                               name=\"tipoMoneda\"
                                               value=\"EUR\">
                                    </label>
                                    <label for=\"tipoMoneda\">EUR</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Stock #}
                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control input-number\"
                                           placeholder=\"Stock\" id=\"stock\"
                                           name=\"stock\">
                                </div>
                            </div>
                            {# Aviso Stock #}
                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <input type=\"text\"
                                           class=\"form-control input-number\"
                                           placeholder=\"Aviso Stock\"
                                           id=\"avisoStock\"
                                           name=\"avisoStock\">
                                </div>
                            </div>
                            {# Usuario #}
                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <select class=\"form-control\" id=\"usuario\"
                                            name=\"usuario\">
                                        <option value=\"0\">Seleccione el usuario ...</option>
                                        {% for user in  users %}
                                            <option value=\"{{ user.id }}\">{{ user.nombre ~ ' ' ~ user.apellidos }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Imagen #}
                            <div class=\"col-12\" style=\"margin-top: 20px\">
                                <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                    Imagen <input type=\"file\" name=\"upload\" id=\"upload\"/>
                                </form>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-check\" style=\"margin-top: 20px; margin-left: 10px\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"checkAmortizacion\">
                                <label class=\"form-check-label\" for=\"checkAmortizacion\">Gasto de Amortización</label>
                            </div>
                        </div>
                        <div id=\"mostrarAmortizacion\" style=\"display: none\">
                            <div class=\"row\">
                                {# Costo de Producción #}
                                <div class=\"col-md-3 col-lg-3 col-12\">
                                    <div class=\"form-group\">
                                        <label for=\"costo\"></label><input type=\"text\" class=\"form-control\"
                                                                          placeholder=\"Teclee el costo de producción\"
                                                                          id=\"costo\"
                                                                          name=\"costo\">
                                    </div>
                                </div>
                                {# Precio de Venta #}
                                <div class=\"col-md-3 col-lg-3 col-12\">
                                    <div class=\"form-group\">
                                        <label for=\"precio\"></label><input type=\"text\" class=\"form-control\"
                                                                           placeholder=\"Teclee el precio\"
                                                                           id=\"precio\"
                                                                           name=\"precio\">
                                    </div>
                                </div>
                                {# Beneficiado #}
                                <div class=\"col-md-6 col-lg-6 col-12\" style=\"margin-top: 30px\">
                                    <div class=\"form-group\">
                                        <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                            Beneficiado
                                        </h5>
                                        <label>
                                            <input style=\"margin-left: 20px\" type=\"radio\" name=\"beneficiado\"
                                                   value=\"0\" checked>
                                        </label>
                                        <label for=\"beneficiado\">Administrador</label>

                                        <label>
                                            <input style=\"margin-left: 20px\" type=\"radio\"
                                                   name=\"beneficiado\"
                                                   value=\"1\">
                                        </label>
                                        <label for=\"beneficiado\">Usuario</label>
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

            //Declaracion de variables
            let tipoProducto = 0;
            let fichero;
            let siFichero = 0;

            \$('#usuario').select2({
                placeholder: 'Seleccione el usuario ...'
            });

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

            \$('#costo').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#costo').val().length;
                    let indexPunto = \$('#costo').val().indexOf('.');
                    let indexComa = \$('#costo').val().indexOf(',');

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

            \$('#precio').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#precio').val().length;
                    let indexPunto = \$('#precio').val().indexOf('.');
                    let indexComa = \$('#precio').val().indexOf(',');

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

            \$(\"#checkAmortizacion\").on( 'change', function() {
                if( \$(this).is(':checked') ) {
                    \$(\"#mostrarAmortizacion\").show();
                } else {
                    \$(\"#mostrarAmortizacion\").hide();
                    \$(\"#costo\").val('');
                    \$(\"#precio\").val('');
                }
            });

            \$('#btnCancelar').on('click', function () {
                window.location.href = \"{{ path('app_producto_index') }}\";
            });

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
                    let Ruta = Routing.generate('app_producto_fichero');
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

                let Ruta = Routing.generate('app_producto_new');
                let isAdministrador = 1;
                let amortizacion = 0;

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#beneficio\").val() === '' || \$(\"#beneficio\").val() === '0') {
                    toastr[\"error\"]('El beneficio es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#idd\").val() === '') {
                    toastr[\"error\"]('El I.D.D del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#stock\").val() === '') {
                    toastr[\"error\"]('El stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#avisoStock\").val() === '') {
                    toastr[\"error\"]('El aviso de stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (parseInt(\$(\"#avisoStock\").val()) > parseInt(\$(\"#stock\").val())) {
                    toastr[\"error\"]('El aviso de stock no puede ser mayor que el stock del producto.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#usuario\").val() === '0') {
                    toastr[\"error\"]('Debe asignar un usuario al producto, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if( \$('#checkAmortizacion').is(':checked') ) {
                    amortizacion = 1;
                    if (\$(\"#costo\").val() === '' || \$(\"#costo\").val() === '0') {
                        toastr[\"error\"]('El costo de producción es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                        return false;
                    }
                    if (\$(\"#precio\").val() === '' || \$(\"#precio\").val() === '0') {
                        toastr[\"error\"]('El precio del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                        return false;
                    }
                    let saldo = parseFloat(\$(\"#stock\").val()) * parseFloat(\$(\"#precio\").val().replace(',','.'));
                    if (saldo < parseFloat(\$(\"#costo\").val().replace(',','.'))) {
                        toastr[\"error\"]('La cantidad de productos en stock no permite liquidar la amortización.', \"Advertencia\")
                        return false;
                    }
                }

                if (\$('input:radio[name=beneficiado]:checked').val() === '1') {
                    isAdministrador = 0;
                }

                if (siFichero === 0) {
                    fichero = '';
                } else {
                    fichero = document.getElementById('upload').files[0].name;
                }

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    tipoProducto: \$('input:radio[name=tipoProducto]:checked').val(),
                    beneficio: parseFloat(\$('#beneficio').val().replace(',','.')),
                    tipoMoneda: \$('input:radio[name=tipoMoneda]:checked').val(),
                    idd: \$(\"#idd\").val(),
                    stock: parseInt(\$(\"#stock\").val()),
                    avisStock: parseInt(\$(\"#avisoStock\").val()),
                    usuario: \$(\"#usuario\").val(),
                    fichero: fichero,
                    amortizacion: amortizacion,
                    costo: parseFloat(\$('#costo').val().replace(',','.')),
                    precio: parseFloat(\$('#precio').val().replace(',','.')),
                    isAdministrador: isAdministrador
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        if (\$('input:radio[name=tipoProducto]:checked').val() === '2') {
                            toastr[\"success\"]('El libro ha sido registrado.', \"Notificación\")
                        } else {
                            toastr[\"success\"]('El producto ha sido registrado.', \"Notificación\")
                        }
                        window.location.href = \"{{ path('app_producto_form_new') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

        });
    </script>
{% endblock %}

", "producto/addProducto.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto\\addProducto.html.twig");
    }
}
