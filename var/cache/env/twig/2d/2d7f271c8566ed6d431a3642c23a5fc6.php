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

/* pack/addPack.html.twig */
class __TwigTemplate_714ee9c7474084069d3c5e47da346b38 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/addPack.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pack/addPack.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nuevo pack de productos";
        
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
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        yield "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 15
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 16
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
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card card-success card-outline\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-edit\"></i>
                                    Nuevo pack de productos
                                </h3>
                                <div class=\"caption\" style=\"float: right\">
                                    <label for=\"beneficioPack\" id=\"mostrarBeneficio\">Beneficio total: 0</label>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    ";
        // line 44
        yield "                                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Teclee el nombre\"
                                                                               id=\"nombre\"
                                                                               name=\"nombre\">
                                        </div>
                                    </div>
                                    ";
        // line 53
        yield "                                    <div class=\"col-lg-4 col-md-4 col-sm-12\" style=\"margin-top: 30px\">
                                        <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                            Imagen <input type=\"file\" name=\"upload\" id=\"upload\"/>
                                        </form>
                                    </div>
                                    ";
        // line 59
        yield "                                    <div class=\"col-lg-4 col-md-4 col-sm-12\" style=\"margin-top: 30px\">
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
        // line 81
        yield "                                    <div class=\"col-lg-8 col-md-8 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"producto\"></label><select class=\"form-control select2\"
                                                                                  style=\"width: 100%;\" id=\"producto\"
                                                                                  name=\"producto\">
                                                <option value=\"0\">Seleccione el producto disponible</option>
                                                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 88
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 88) == 1)) {
                // line 89
                yield "                                                        ";
                $context["tipo"] = "Producto general";
                // line 90
                yield "                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 90) == 2)) {
                // line 91
                yield "                                                        ";
                $context["tipo"] = "Producto libro";
                // line 92
                yield "                                                    ";
            }
            // line 93
            yield "                                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 93), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, (((((((((((((((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 93, $this->source); })()) . "-") . "I.D.D: ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "idd", [], "any", false, false, false, 93)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 93)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 93)) . " en stock") . "- asignado a: ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 93), "nombre", [], "any", false, false, false, 93)) . " - con beneficio de venta: ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 93)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 93)), "html", null, true);
            yield "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                                            </select>
                                        </div>
                                    </div>
                                    ";
        // line 99
        yield "                                    <div class=\"col-lg-2 col-md-2 col-sm-6\">
                                        <div class=\"form-group\">
                                            <label for=\"beneficio\"></label><input type=\"text\"
                                                                                         class=\"form-control\"
                                                                                         placeholder=\"Teclee el beneficio\"
                                                                                         id=\"beneficio\"
                                                                                         name=\"beneficio\">
                                        </div>
                                    </div>
                                    ";
        // line 109
        yield "                                    <div class=\"col-lg-2 col-md-2 col-sm-2\" style=\"margin-top: 20px\">
                                        <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                title=\"Adicionar al pack\" id=\"btnAdicionar\"><i
                                                    class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                ";
        // line 117
        yield "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"valorVenta\">Productos del pack</label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                            <thead class=\"text-center\">
                                            <tr>
                                                <th>Id</th>
                                                <th>Tipo de Producto</th>
                                                <th>Nombre</th>
                                                <th>Stock</th>
                                                <th>Usuario Asignado</th>
                                                <th>Beneficio x Venta</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 144
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

    // line 170
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 171
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Select2 -->
    <script src=\"";
        // line 173
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        yield "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 175
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 176
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 177
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 178
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 180
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <script>
        \$(document).ready(function () {

            //Declaracion de variables
            let productos = [];
            let packProductos = [];
            let beneficioTotal = 0;
            let fichero;
            let siFichero = 0;

            \$('#producto').select2();

            let tableProductos = \$('#dataProductos').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[5], [5]],
                \"ordering\": false,
                \"info\": false,
                \"autoWidth\": false,
                \"responsive\": true,
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
                \"extendedTimeOut\": \"7000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            \$('#btnCancelar').on('click', function () {
                window.location.href = \"";
        // line 224
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\";
            });

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

            //Adicionar en la tabla un producto
            \$('#btnAdicionar').on('click', function () {

                //Validaciones
                if (\$(\"#producto\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar el producto que desea incluir en el pack, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#beneficio\").val() === '' || \$(\"#beneficio\").val() === '0') {
                    toastr[\"error\"]('El beneficio de venta del producto seleccionado es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                //Comprobar que no exista el producto
                let n;
                let existe = false;
                for (n = 0; n < packProductos.length; n++) {
                    if (packProductos[n]['idProducto'] === \$(\"#producto\").val()) {
                        existe = true;
                        break;
                    }
                }
                if (existe) {
                    toastr[\"error\"]('Este producto ya existe en el pack.', \"Advertencia\")
                    return false;
                }

                let idProducto = \$('#producto').val();
                let tipo, idProductoSeleccionado;
                let beneficioVenta = 0;
                if (idProducto !== '0') {
                    ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 302, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 303
            yield "                        idProductoSeleccionado = '";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 303), "html", null, true);
            yield "';
                        if (idProducto === idProductoSeleccionado) {
                            //Tipo de Libro
                            ";
            // line 306
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 306) == 1)) {
                // line 307
                yield "                            tipo = 'General';
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 308
$context["producto"], "tipoProducto", [], "any", false, false, false, 308) == 2)) {
                // line 309
                yield "                            tipo = 'Libro';
                            ";
            }
            // line 311
            yield "                            beneficioVenta = parseFloat(\$('#beneficio').val().replace(',','.'));
                            beneficioTotal += beneficioVenta;
                            productos.push([
                                idProducto,
                                tipo,
                                '";
            // line 316
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 316), "html", null, true);
            yield "',
                                '";
            // line 317
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 317), "html", null, true);
            yield "',
                                '";
            // line 318
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 318), "nombre", [], "any", false, false, false, 318) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 318), "apellidos", [], "any", false, false, false, 318)), "html", null, true);
            yield "',
                                beneficioVenta.toFixed(2)
                            ]);
                            packProductos.push({
                                idProducto: idProducto,
                                beneficioVenta: beneficioVenta.toFixed(2)
                            });
                    }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        yield "                    //Adicionar a la tabla
                    tableProductos = \$('#dataProductos').DataTable({
                        destroy: true,
                        data: productos,
                        columns: [
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {
                                defaultContent: \"<button class='btn btn-block btn-danger delete' data-toggle='tooltip' title='Quitar del pack'>\"
                                    + \"<i class='fas fa-trash'></i></button>\",
                                class: \"text-center\"
                            }
                        ],
                        \"lengthMenu\": [[10], [10]]
                    });
                    \$('#mostrarBeneficio').text('Beneficio total: ' + beneficioTotal.toFixed(2));
                }
            });

            //Borrar de la tabla un producto
            \$('#dataProductos tbody').on('click', '.delete', function () {
                let row = \$(this).parents('tr');
                let fila = tableProductos.row(row).data();
                beneficioTotal -= fila[5];
                let n;
                for (n = 0; n < packProductos.length; n++) {
                    if (packProductos[n]['idProducto'] === fila[0]) {
                        packProductos.splice(n, 1);
                        break;
                    }
                }
                for (n = 0; n < productos.length; n++) {
                    if (productos[n][0] === fila[0]) {
                        productos.splice(n, 1);
                        break;
                    }
                }
                row.fadeOut();
                \$('#mostrarBeneficio').text('Beneficio total: ' + beneficioTotal.toFixed(2));
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

                let Ruta = Routing.generate('app_pack_insert');

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre del pack es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (tableProductos.rows().count() < 2) {
                    toastr[\"error\"]('Debe incluir al menos dos productos en el pack.', \"Advertencia\")
                    return false;
                }
                //datatable completo
                //console.log(tableProductos.rows().data().toArray());

                if (siFichero === 0) {
                    fichero = '';
                } else {
                    fichero = document.getElementById('upload').files[0].name;
                }

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    fichero: fichero,
                    tipoMoneda: \$('input:radio[name=tipoMoneda]:checked').val(),
                    beneficioTotal: beneficioTotal,
                    productos: packProductos
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('El pack de productos ha sido registrado.', \"Notificación\")
                        window.location.href = \"";
        // line 447
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
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
        return "pack/addPack.html.twig";
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
        return array (  645 => 447,  523 => 327,  508 => 318,  504 => 317,  500 => 316,  493 => 311,  489 => 309,  487 => 308,  484 => 307,  482 => 306,  475 => 303,  471 => 302,  390 => 224,  344 => 181,  340 => 180,  335 => 178,  331 => 177,  327 => 176,  323 => 175,  318 => 173,  312 => 171,  305 => 170,  273 => 144,  245 => 117,  236 => 109,  225 => 99,  220 => 95,  209 => 93,  206 => 92,  203 => 91,  200 => 90,  197 => 89,  194 => 88,  190 => 87,  182 => 81,  159 => 59,  152 => 53,  142 => 44,  113 => 16,  106 => 15,  96 => 12,  92 => 11,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nuevo pack de productos{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Select2 -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/select2/css/select2.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}\">
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
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
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card card-success card-outline\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-edit\"></i>
                                    Nuevo pack de productos
                                </h3>
                                <div class=\"caption\" style=\"float: right\">
                                    <label for=\"beneficioPack\" id=\"mostrarBeneficio\">Beneficio total: 0</label>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    {# nombre #}
                                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Teclee el nombre\"
                                                                               id=\"nombre\"
                                                                               name=\"nombre\">
                                        </div>
                                    </div>
                                    {# imagen #}
                                    <div class=\"col-lg-4 col-md-4 col-sm-12\" style=\"margin-top: 30px\">
                                        <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                            Imagen <input type=\"file\" name=\"upload\" id=\"upload\"/>
                                        </form>
                                    </div>
                                    {# Tipo de Moneda #}
                                    <div class=\"col-lg-4 col-md-4 col-sm-12\" style=\"margin-top: 30px\">
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
                                    {# Producto #}
                                    <div class=\"col-lg-8 col-md-8 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"producto\"></label><select class=\"form-control select2\"
                                                                                  style=\"width: 100%;\" id=\"producto\"
                                                                                  name=\"producto\">
                                                <option value=\"0\">Seleccione el producto disponible</option>
                                                {% for producto in  productos %}
                                                    {% if producto.tipoProducto == 1 %}
                                                        {% set tipo = 'Producto general' %}
                                                    {% elseif producto.tipoProducto == 2 %}
                                                        {% set tipo = 'Producto libro' %}
                                                    {% endif %}
                                                    <option value=\"{{ producto.id }}\">{{ tipo ~ '-' ~ 'I.D.D: ' ~ producto.idd ~ '-' ~ producto.nombre ~ '-' ~ producto.stock ~ ' en stock' ~ '- asignado a: ' ~ producto.user.nombre ~ ' - con beneficio de venta: ' ~ producto.beneficioxventa ~ ' ' ~ producto.tipodemoneda }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    {# Beneficio por venta de producto #}
                                    <div class=\"col-lg-2 col-md-2 col-sm-6\">
                                        <div class=\"form-group\">
                                            <label for=\"beneficio\"></label><input type=\"text\"
                                                                                         class=\"form-control\"
                                                                                         placeholder=\"Teclee el beneficio\"
                                                                                         id=\"beneficio\"
                                                                                         name=\"beneficio\">
                                        </div>
                                    </div>
                                    {# Botón adicionar #}
                                    <div class=\"col-lg-2 col-md-2 col-sm-2\" style=\"margin-top: 20px\">
                                        <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                title=\"Adicionar al pack\" id=\"btnAdicionar\"><i
                                                    class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                {# Listado de Productos #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"valorVenta\">Productos del pack</label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                            <thead class=\"text-center\">
                                            <tr>
                                                <th>Id</th>
                                                <th>Tipo de Producto</th>
                                                <th>Nombre</th>
                                                <th>Stock</th>
                                                <th>Usuario Asignado</th>
                                                <th>Beneficio x Venta</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
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
    <!-- Select2 -->
    <script src=\"{{ asset('plugins/select2/js/select2.full.min.js') }}\"></script>
    <!-- DataTables -->
    <script src=\"{{ asset('plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script>
        \$(document).ready(function () {

            //Declaracion de variables
            let productos = [];
            let packProductos = [];
            let beneficioTotal = 0;
            let fichero;
            let siFichero = 0;

            \$('#producto').select2();

            let tableProductos = \$('#dataProductos').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[5], [5]],
                \"ordering\": false,
                \"info\": false,
                \"autoWidth\": false,
                \"responsive\": true,
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
                \"extendedTimeOut\": \"7000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            \$('#btnCancelar').on('click', function () {
                window.location.href = \"{{ path('app_pack_index') }}\";
            });

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

            //Adicionar en la tabla un producto
            \$('#btnAdicionar').on('click', function () {

                //Validaciones
                if (\$(\"#producto\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar el producto que desea incluir en el pack, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#beneficio\").val() === '' || \$(\"#beneficio\").val() === '0') {
                    toastr[\"error\"]('El beneficio de venta del producto seleccionado es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                //Comprobar que no exista el producto
                let n;
                let existe = false;
                for (n = 0; n < packProductos.length; n++) {
                    if (packProductos[n]['idProducto'] === \$(\"#producto\").val()) {
                        existe = true;
                        break;
                    }
                }
                if (existe) {
                    toastr[\"error\"]('Este producto ya existe en el pack.', \"Advertencia\")
                    return false;
                }

                let idProducto = \$('#producto').val();
                let tipo, idProductoSeleccionado;
                let beneficioVenta = 0;
                if (idProducto !== '0') {
                    {% for producto in  productos %}
                        idProductoSeleccionado = '{{ producto.id }}';
                        if (idProducto === idProductoSeleccionado) {
                            //Tipo de Libro
                            {% if producto.tipoProducto == 1 %}
                            tipo = 'General';
                            {% elseif producto.tipoProducto == 2 %}
                            tipo = 'Libro';
                            {% endif %}
                            beneficioVenta = parseFloat(\$('#beneficio').val().replace(',','.'));
                            beneficioTotal += beneficioVenta;
                            productos.push([
                                idProducto,
                                tipo,
                                '{{ producto.nombre }}',
                                '{{ producto.stock }}',
                                '{{ producto.user.nombre ~ ' ' ~ producto.user.apellidos }}',
                                beneficioVenta.toFixed(2)
                            ]);
                            packProductos.push({
                                idProducto: idProducto,
                                beneficioVenta: beneficioVenta.toFixed(2)
                            });
                    }
                    {% endfor %}
                    //Adicionar a la tabla
                    tableProductos = \$('#dataProductos').DataTable({
                        destroy: true,
                        data: productos,
                        columns: [
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {
                                defaultContent: \"<button class='btn btn-block btn-danger delete' data-toggle='tooltip' title='Quitar del pack'>\"
                                    + \"<i class='fas fa-trash'></i></button>\",
                                class: \"text-center\"
                            }
                        ],
                        \"lengthMenu\": [[10], [10]]
                    });
                    \$('#mostrarBeneficio').text('Beneficio total: ' + beneficioTotal.toFixed(2));
                }
            });

            //Borrar de la tabla un producto
            \$('#dataProductos tbody').on('click', '.delete', function () {
                let row = \$(this).parents('tr');
                let fila = tableProductos.row(row).data();
                beneficioTotal -= fila[5];
                let n;
                for (n = 0; n < packProductos.length; n++) {
                    if (packProductos[n]['idProducto'] === fila[0]) {
                        packProductos.splice(n, 1);
                        break;
                    }
                }
                for (n = 0; n < productos.length; n++) {
                    if (productos[n][0] === fila[0]) {
                        productos.splice(n, 1);
                        break;
                    }
                }
                row.fadeOut();
                \$('#mostrarBeneficio').text('Beneficio total: ' + beneficioTotal.toFixed(2));
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

                let Ruta = Routing.generate('app_pack_insert');

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre del pack es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (tableProductos.rows().count() < 2) {
                    toastr[\"error\"]('Debe incluir al menos dos productos en el pack.', \"Advertencia\")
                    return false;
                }
                //datatable completo
                //console.log(tableProductos.rows().data().toArray());

                if (siFichero === 0) {
                    fichero = '';
                } else {
                    fichero = document.getElementById('upload').files[0].name;
                }

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    fichero: fichero,
                    tipoMoneda: \$('input:radio[name=tipoMoneda]:checked').val(),
                    beneficioTotal: beneficioTotal,
                    productos: packProductos
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('El pack de productos ha sido registrado.', \"Notificación\")
                        window.location.href = \"{{ path('app_pack_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });


            });

        });
    </script>
{% endblock %}

", "pack/addPack.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\pack\\addPack.html.twig");
    }
}
