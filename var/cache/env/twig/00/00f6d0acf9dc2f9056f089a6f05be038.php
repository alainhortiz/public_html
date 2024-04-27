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

/* pack/addPack.html.twig */
class __TwigTemplate_333f0365ddfd7619dedb8edda79046e7 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nuevo pack de productos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- Select2 -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"), "html", null, true);
        echo "\">
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 16
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
        echo "                                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Teclee el nombre\"
                                                                               id=\"nombre\"
                                                                               name=\"nombre\">
                                        </div>
                                    </div>
                                    ";
        // line 53
        echo "                                    <div class=\"col-lg-4 col-md-4 col-sm-12\" style=\"margin-top: 30px\">
                                        <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                            Imagen <input type=\"file\" name=\"upload\" id=\"upload\"/>
                                        </form>
                                    </div>
                                    ";
        // line 59
        echo "                                    <div class=\"col-lg-4 col-md-4 col-sm-12\" style=\"margin-top: 30px\">
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
        echo "                                    <div class=\"col-lg-8 col-md-8 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"producto\"></label><select class=\"form-control select2\"
                                                                                  style=\"width: 100%;\" id=\"producto\"
                                                                                  name=\"producto\">
                                                <option value=\"0\">Seleccione el producto disponible</option>
                                                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 88
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 88) == 1)) {
                // line 89
                echo "                                                        ";
                $context["tipo"] = "Producto general";
                // line 90
                echo "                                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 90) == 2)) {
                // line 91
                echo "                                                        ";
                $context["tipo"] = "Producto libro";
                // line 92
                echo "                                                    ";
            }
            // line 93
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 93), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((((((((((((((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 93, $this->source); })()) . "-") . "I.D.D: ") . twig_get_attribute($this->env, $this->source, $context["producto"], "idd", [], "any", false, false, false, 93)) . "-") . twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 93)) . "-") . twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 93)) . " en stock") . "- asignado a: ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 93), "nombre", [], "any", false, false, false, 93)) . " - con beneficio de venta: ") . twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 93)) . " ") . twig_get_attribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 93)), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                                            </select>
                                        </div>
                                    </div>
                                    ";
        // line 99
        echo "                                    <div class=\"col-lg-2 col-md-2 col-sm-6\">
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
        echo "                                    <div class=\"col-lg-2 col-md-2 col-sm-2\" style=\"margin-top: 20px\">
                                        <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                title=\"Adicionar al pack\" id=\"btnAdicionar\"><i
                                                    class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                ";
        // line 117
        echo "                                <div class=\"row\">
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

    // line 170
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 171
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Select2 -->
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        echo "\";
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 302, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 303
            echo "                        idProductoSeleccionado = '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 303), "html", null, true);
            echo "';
                        if (idProducto === idProductoSeleccionado) {
                            //Tipo de Libro
                            ";
            // line 306
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 306) == 1)) {
                // line 307
                echo "                            tipo = 'General';
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 308
$context["producto"], "tipoProducto", [], "any", false, false, false, 308) == 2)) {
                // line 309
                echo "                            tipo = 'Libro';
                            ";
            }
            // line 311
            echo "                            beneficioVenta = parseFloat(\$('#beneficio').val().replace(',','.'));
                            beneficioTotal += beneficioVenta;
                            productos.push([
                                idProducto,
                                tipo,
                                '";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 316), "html", null, true);
            echo "',
                                '";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 317), "html", null, true);
            echo "',
                                '";
            // line 318
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 318), "nombre", [], "any", false, false, false, 318) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 318), "apellidos", [], "any", false, false, false, 318)), "html", null, true);
            echo "',
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
        echo "                    //Adicionar a la tabla
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
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
        return "pack/addPack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 447,  519 => 327,  504 => 318,  500 => 317,  496 => 316,  489 => 311,  485 => 309,  483 => 308,  480 => 307,  478 => 306,  471 => 303,  467 => 302,  386 => 224,  340 => 181,  336 => 180,  331 => 178,  327 => 177,  323 => 176,  319 => 175,  314 => 173,  308 => 171,  301 => 170,  270 => 144,  242 => 117,  233 => 109,  222 => 99,  217 => 95,  206 => 93,  203 => 92,  200 => 91,  197 => 90,  194 => 89,  191 => 88,  187 => 87,  179 => 81,  156 => 59,  149 => 53,  139 => 44,  110 => 16,  103 => 15,  94 => 12,  90 => 11,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
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
