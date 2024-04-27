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

/* venta_productos/addVentaProducto.html.twig */
class __TwigTemplate_0b6b4d89b97c80a546df3b7d6588015c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "venta_productos/addVentaProducto.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "venta_productos/addVentaProducto.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Venta de Productos";
        
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
                                    Nueva venta de productos
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 40
        echo "                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"fecha\"></label><input type=\"date\" class=\"form-control\"
                                                                              id=\"fecha\"
                                                                              name=\"fecha\"
                                            >
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"codigo\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Teclee el código\"
                                                                               id=\"codigo\"
                                                                               name=\"codigo\"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"pack\"></label><select class=\"form-control select2\"
                                                                                  style=\"width: 100%;\" id=\"pack\"
                                                                                  name=\"pack\">
                                                <option value=\"0\">Seleccione el pack disponible</option>
                                                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 67
            echo "                                                    ";
            $context["disponible"] = 1;
            // line 68
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pack"], "productos", [], "method", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 69
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 69), "stock", [], "any", false, false, false, 69) <= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 69), "stockAdvertencia", [], "any", false, false, false, 69))) {
                    // line 70
                    echo "                                                            ";
                    $context["disponible"] = 0;
                    // line 71
                    echo "                                                        ";
                }
                // line 72
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                                                    ";
            if (((isset($context["disponible"]) || array_key_exists("disponible", $context) ? $context["disponible"] : (function () { throw new RuntimeError('Variable "disponible" does not exist.', 73, $this->source); })()) == 1)) {
                // line 74
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 74), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((((((("Nombre: " . twig_get_attribute($this->env, $this->source, $context["pack"], "nombre", [], "any", false, false, false, 74)) . " -Beneficio: ") . twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "beneficioxventa", [], "any", false, false, false, 74), 2, ".", ",")) . " ") . twig_get_attribute($this->env, $this->source, $context["pack"], "tipodemoneda", [], "any", false, false, false, 74)) . " -Productos: ") . twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "productos", [], "any", false, false, false, 74))), "html", null, true);
                echo "</option>
                                                    ";
            }
            // line 76
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-6\">
                                        <div class=\"form-group\">
                                            <label for=\"cantidadPack\"></label><input type=\"number\" class=\"form-control\"
                                                                                 id=\"cantidadPack\" value=\"0\" min=\"0\"
                                                                                 name=\"cantidadPack\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 col-sm-2\" style=\"margin-top: 20px\">
                                        <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                title=\"Adicionar a la venta\" id=\"btnAdicionarPack\"><i
                                                    class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"producto\"></label><select class=\"form-control select2\"
                                                                                  style=\"width: 100%;\" id=\"producto\"
                                                                                  name=\"producto\">
                                                <option value=\"0\">Seleccione el producto disponible</option>
                                                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 102
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 102) == 1)) {
                // line 103
                echo "                                                        ";
                $context["tipo"] = "Producto general";
                // line 104
                echo "                                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 104) == 2)) {
                // line 105
                echo "                                                        ";
                $context["tipo"] = "Producto libro";
                // line 106
                echo "                                                    ";
            }
            // line 107
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 107), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((((((((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 107, $this->source); })()) . "-") . "I.D.D: ") . twig_get_attribute($this->env, $this->source, $context["producto"], "idd", [], "any", false, false, false, 107)) . "-") . twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 107)) . "-") . twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 107)) . " en stock"), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-6\">
                                        <div class=\"form-group\">
                                            <label for=\"cantidad\"></label><input type=\"number\" class=\"form-control\"
                                                                                 id=\"cantidad\" value=\"0\" min=\"0\"
                                                                                 name=\"cantidad\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 col-sm-2\" style=\"margin-top: 20px\">
                                        <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                title=\"Adicionar a la venta\" id=\"btnAdicionar\"><i
                                                    class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                ";
        // line 127
        echo "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"valorVenta\">Productos de la venta</label>
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
                                                <th>Cantidad</th>
                                                <th>Ganancia x Amortización</th>
                                                <th>Ganancia x Beneficio</th>
                                                <th>Moneda</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            ";
        // line 158
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

    // line 184
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Select2 -->
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script>
        \$(document).ready(function () {

            //Declaracion de variables
            let productos = [];
            let ventaProductos = [];

            \$('#pack, #producto').select2();

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
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_productos_index");
        echo "\";
            });

            //Adicionar en la tabla un producto
            \$('#btnAdicionarPack').on('click', function () {

                //Validaciones
                if (\$(\"#pack\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar el pack que desea incluir en la venta, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#cantidadPack\").val() === '' || \$(\"#cantidadPack\").val() === '0') {
                    toastr[\"error\"]('La cantidad de packs es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                //Comprobar que no exista el packs
                let n;
                let existe = false;
                for (n = 0; n < ventaProductos.length; n++) {
                    if (ventaProductos[n]['isPack'] === 1) {
                        if (ventaProductos[n]['idPack'] === \$(\"#pack\").val()) {
                            existe = true;
                            break;
                        }
                    }
                }
                if (existe) {
                    toastr[\"error\"]('Este pack ya existe en la venta.', \"Advertencia\")
                    return false;
                }

                let idPack = \$('#pack').val();
                let idProducto = null;
                let tipo, idPackSeleccionado,stock;
                let precio = 0;
                let deuda = 0;
                let cantidad = 0;
                let cantidadPagaDeuda = 0;
                let gananciaDeuda = 0;
                let gananciaBeneficio = 0;
                let beneficioVenta = 0;
                let restante = 0;
                let isAmortizacion = 0;
                let idAmortizacion = 0;
                let isRoyalties = 0;
                let isPack = 1;
                if (idPack !== '0') {
                    ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 283, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 284
            echo "                    idPackSeleccionado = '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 284), "html", null, true);
            echo "';
                    if (idPack === idPackSeleccionado) {
                        //Tipo de Producto
                        tipo = 'Pack ' + '";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "nombre", [], "any", false, false, false, 287), "html", null, true);
            echo "';
                        //Validar el stock
                        ";
            // line 289
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pack"], "productos", [], "method", false, false, false, 289));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 290
                echo "                            stock = parseInt('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 290), "stock", [], "any", false, false, false, 290), "html", null, true);
                echo "');
                            idProducto = parseInt('";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 291), "id", [], "any", false, false, false, 291), "html", null, true);
                echo "');
                            if (parseInt(\$(\"#cantidadPack\").val()) > stock) {
                                toastr[\"error\"]('La cantidad de ' + '";
                // line 293
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 293), "nombre", [], "any", false, false, false, 293), "html", null, true);
                echo "' + ' incluido en este pack, supera la disponibilidad del producto.', \"Advertencia\")
                                return false;
                            }
                            isAmortizacion = 0;
                            isRoyalties = 0;
                            //Amortizacion
                            ";
                // line 299
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 299), "amortizaciones", [], "any", false, false, false, 299)) > 0)) {
                    // line 300
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 300), "amortizaciones", [], "any", false, false, false, 300));
                    foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
                        // line 301
                        echo "                                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["amortizacion"], "isActive", [], "any", false, false, false, 301) == "1")) {
                            // line 302
                            echo "                                                    isAmortizacion = 1;
                                                    idAmortizacion = parseInt('";
                            // line 303
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "id", [], "any", false, false, false, 303), "html", null, true);
                            echo "');
                                                    beneficioVenta = parseFloat('";
                            // line 304
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 304), "html", null, true);
                            echo "');
                                                    precio = parseFloat('";
                            // line 305
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 305), "html", null, true);
                            echo "');
                                                    deuda = parseFloat('";
                            // line 306
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 306), "html", null, true);
                            echo "');
                                                    cantidad = parseInt(\$(\"#cantidadPack\").val());
                                                    cantidadPagaDeuda = deuda / precio;
                                                    if (cantidad >= cantidadPagaDeuda) {
                                                        gananciaDeuda = cantidadPagaDeuda * precio;
                                                        gananciaBeneficio = (cantidad * beneficioVenta) - gananciaDeuda;
                                                        isRoyalties = 1;
                                                    } else if (cantidad < cantidadPagaDeuda) {
                                                        gananciaDeuda = cantidad * precio;
                                                        gananciaBeneficio = 0;
                                                        isRoyalties = 0;
                                                    }
                                            ";
                        }
                        // line 319
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 320
                    echo "                            ";
                } else {
                    // line 321
                    echo "                                //Ganancia
                                gananciaBeneficio = parseInt(\$(\"#cantidadPack\").val()) * parseFloat('";
                    // line 322
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 322), "html", null, true);
                    echo "');
                                isRoyalties = 1;
                                isAmortizacion = 0;
                                gananciaDeuda = 0;
                            ";
                }
                // line 327
                echo "                            if (isAmortizacion === 0) {
                                //Ganancia
                                gananciaBeneficio = parseInt(\$(\"#cantidadPack\").val()) * parseFloat('";
                // line 329
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 329), "html", null, true);
                echo "');
                                isRoyalties = 1;
                                isAmortizacion = 0;
                                gananciaDeuda = 0;
                            }
                            restante = deuda - gananciaDeuda;
                            productos.push([
                                idPack,
                                tipo,
                                '";
                // line 338
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 338), "nombre", [], "any", false, false, false, 338), "html", null, true);
                echo "',
                                '";
                // line 339
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 339), "stock", [], "any", false, false, false, 339), "html", null, true);
                echo "',
                                '";
                // line 340
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 340), "user", [], "any", false, false, false, 340), "nombre", [], "any", false, false, false, 340) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 340), "user", [], "any", false, false, false, 340), "apellidos", [], "any", false, false, false, 340)), "html", null, true);
                echo "',
                                \$(\"#cantidadPack\").val(),
                                gananciaDeuda.toFixed(2),
                                gananciaBeneficio.toFixed(2),
                                '";
                // line 344
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "tipodemoneda", [], "any", false, false, false, 344), "html", null, true);
                echo "'
                            ]);
                            ventaProductos.push({
                                idPack: idPack,
                                idProducto: idProducto,
                                cantidad: parseInt(\$(\"#cantidadPack\").val()),
                                idUsuario: '";
                // line 350
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 350), "user", [], "any", false, false, false, 350), "id", [], "any", false, false, false, 350), "html", null, true);
                echo "',
                                isAmortizacion: isAmortizacion,
                                idAmortizacion: idAmortizacion,
                                pagoAmortizacion: gananciaDeuda.toFixed(2),
                                isRoyalties: isRoyalties,
                                isPack: isPack,
                                royalties: gananciaBeneficio.toFixed(2),
                                restante: restante.toFixed(2)
                            });
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                    }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
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
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {
                                defaultContent: \"<button class='btn btn-block btn-danger delete' data-toggle='tooltip' title='Quitar de la venta'>\"
                                    + \"<i class='fas fa-trash'></i></button>\",
                                class: \"text-center\"
                            }
                        ],
                        \"lengthMenu\": [[5], [5]]
                    });
                }
            });

            //Adicionar en la tabla un producto
            \$('#btnAdicionar').on('click', function () {

                //Validaciones
                if (\$(\"#producto\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar el producto que desea incluir en la venta, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#cantidad\").val() === '' || \$(\"#cantidad\").val() === '0') {
                    toastr[\"error\"]('La cantidad de productos es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                //Comprobar que no exista el producto
                let n;
                let existe = false;
                for (n = 0; n < ventaProductos.length; n++) {
                    if (ventaProductos[n]['idProducto'] == \$(\"#producto\").val()) {
                        existe = true;
                        break;
                    }
                }
                if (existe) {
                    toastr[\"error\"]('Este producto ya existe en la venta.', \"Advertencia\")
                    return false;
                }

                let idPack = null;
                let idProducto = \$('#producto').val();
                let tipo, idProductoSeleccionado,stock;
                let precio = 0;
                let deuda = 0;
                let cantidad = 0;
                let cantidadPagaDeuda = 0;
                let gananciaDeuda = 0;
                let gananciaBeneficio = 0;
                let beneficioVenta = 0;
                let restante = 0;
                let isAmortizacion = 0;
                let idAmortizacion = 0;
                let isRoyalties = 0;
                let isPack = 0;
                if (idProducto !== '0') {
                    ";
        // line 430
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 430, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 431
            echo "                    idProductoSeleccionado = '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 431), "html", null, true);
            echo "';
                    if (idProducto === idProductoSeleccionado) {
                        //Tipo de Libro
                        ";
            // line 434
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 434) == 1)) {
                // line 435
                echo "                        tipo = 'General';
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 436
$context["producto"], "tipoProducto", [], "any", false, false, false, 436) == 2)) {
                // line 437
                echo "                        tipo = 'Libro';
                        ";
            }
            // line 439
            echo "                        //Validar el stock
                        stock = parseInt('";
            // line 440
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 440), "html", null, true);
            echo "');
                        if (parseInt(\$(\"#cantidad\").val()) > stock) {
                            toastr[\"error\"]('La cantidad de supera la disponibilidad del producto.', \"Advertencia\")
                            return false;
                        }
                        isAmortizacion = 0;
                        isRoyalties = 0;
                        //Amortizacion
                        ";
            // line 448
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 448)) > 0)) {
                // line 449
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 449));
                foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
                    // line 450
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["amortizacion"], "isActive", [], "any", false, false, false, 450) == "1")) {
                        // line 451
                        echo "                                        isAmortizacion = 1;
                                        idAmortizacion = parseInt('";
                        // line 452
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "id", [], "any", false, false, false, 452), "html", null, true);
                        echo "');
                                        beneficioVenta = parseFloat('";
                        // line 453
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 453), "html", null, true);
                        echo "');
                                        precio = parseFloat('";
                        // line 454
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 454), "html", null, true);
                        echo "');
                                        deuda = parseFloat('";
                        // line 455
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 455), "html", null, true);
                        echo "');
                                        cantidad = parseInt(\$(\"#cantidad\").val());
                                        cantidadPagaDeuda = deuda / precio;
                                        if (cantidad > cantidadPagaDeuda) {
                                            gananciaDeuda = cantidadPagaDeuda * precio;
                                            gananciaBeneficio = (cantidad - cantidadPagaDeuda) * beneficioVenta;
                                            isRoyalties = 1;
                                        }else if (cantidad === cantidadPagaDeuda) {
                                            gananciaDeuda = cantidadPagaDeuda * precio;
                                            gananciaBeneficio = 0;
                                            isRoyalties = 0;
                                        }else if (cantidad < cantidadPagaDeuda) {
                                            gananciaDeuda = cantidad * precio;
                                            gananciaBeneficio = 0;
                                            isRoyalties = 0;
                                        }
                                        ";
                    }
                    // line 472
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 473
                echo "                        ";
            } else {
                // line 474
                echo "                                //Ganancia
                                gananciaBeneficio = parseInt(\$(\"#cantidad\").val()) * parseFloat('";
                // line 475
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 475), "html", null, true);
                echo "');
                                isRoyalties = 1;
                                isAmortizacion = 0;
                                gananciaDeuda = 0;
                        ";
            }
            // line 480
            echo "                        if (isAmortizacion === 0) {
                            //Ganancia
                            gananciaBeneficio = parseInt(\$(\"#cantidad\").val()) * parseFloat('";
            // line 482
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 482), "html", null, true);
            echo "');
                            isRoyalties = 1;
                            isAmortizacion = 0;
                            gananciaDeuda = 0;
                        }
                        restante = deuda - gananciaDeuda;
                        productos.push([
                            idProducto,
                            tipo,
                            '";
            // line 491
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 491), "html", null, true);
            echo "',
                            '";
            // line 492
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 492), "html", null, true);
            echo "',
                            '";
            // line 493
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 493), "nombre", [], "any", false, false, false, 493) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 493), "apellidos", [], "any", false, false, false, 493)), "html", null, true);
            echo "',
                            \$(\"#cantidad\").val(),
                            gananciaDeuda.toFixed(2),
                            gananciaBeneficio.toFixed(2),
                            '";
            // line 497
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 497), "html", null, true);
            echo "'
                        ]);
                        ventaProductos.push({
                            idPack: idPack,
                            idProducto: idProducto,
                            cantidad: parseInt(\$(\"#cantidad\").val()),
                            idUsuario: '";
            // line 503
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 503), "id", [], "any", false, false, false, 503), "html", null, true);
            echo "',
                            isAmortizacion: isAmortizacion,
                            idAmortizacion: idAmortizacion,
                            pagoAmortizacion: gananciaDeuda.toFixed(2),
                            isRoyalties: isRoyalties,
                            isPack: isPack,
                            royalties: gananciaBeneficio.toFixed(2),
                            restante: restante.toFixed(2)
                        });
                    }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
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
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {
                                defaultContent: \"<button class='btn btn-block btn-danger delete' data-toggle='tooltip' title='Quitar de la venta'>\"
                                    + \"<i class='fas fa-trash'></i></button>\",
                                class: \"text-center\"
                            }
                        ],
                        \"lengthMenu\": [[5], [5]]
                    });
                }
            });

            //Borrar de la tabla un producto
            \$('#dataProductos tbody').on('click', '.delete', function () {
                let row = \$(this).parents('tr');
                let fila = tableProductos.row(row).data();
                ventaProductos = ventaProductos.filter(id => id.idProducto !== fila[0]);
                productos = productos.filter(id => id[0] !== fila[0]);
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
                        {class: \"text-center\"},
                        {class: \"text-center\"},
                        {class: \"text-center\"},
                        {
                            defaultContent: \"<button class='btn btn-block btn-danger delete' data-toggle='tooltip' title='Quitar de la venta'>\"
                                + \"<i class='fas fa-trash'></i></button>\",
                            class: \"text-center\"
                        }
                    ],
                    \"lengthMenu\": [[5], [5]]
                });
            });

            \$('#btnGuardar').on('click', function () {

                let Ruta = Routing.generate('app_venta_producto_insert');

                //Validaciones
                if (\$(\"#fecha\").val() === '') {
                    toastr[\"error\"]('La fecha de la venta es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#codigo\").val() === '') {
                    toastr[\"error\"]('El código de la venta es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (tableProductos.rows().count() === 0) {
                    toastr[\"error\"]('Debe incluir al menos un producto en la venta.', \"Advertencia\")
                    return false;
                }
                //datatable completo
                //console.log(tableProductos.rows().data().toArray());

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    fecha: \$('#fecha').val(),
                    codigo: \$('#codigo').val(),
                    productos: ventaProductos
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('La venta de productos ha sido registrada.', \"Notificación\")
                        window.location.href = \"";
        // line 606
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_productos_index");
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
        return "venta_productos/addVentaProducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  963 => 606,  869 => 514,  852 => 503,  843 => 497,  836 => 493,  832 => 492,  828 => 491,  816 => 482,  812 => 480,  804 => 475,  801 => 474,  798 => 473,  792 => 472,  772 => 455,  768 => 454,  764 => 453,  760 => 452,  757 => 451,  754 => 450,  749 => 449,  747 => 448,  736 => 440,  733 => 439,  729 => 437,  727 => 436,  724 => 435,  722 => 434,  715 => 431,  711 => 430,  641 => 362,  634 => 360,  618 => 350,  609 => 344,  602 => 340,  598 => 339,  594 => 338,  582 => 329,  578 => 327,  570 => 322,  567 => 321,  564 => 320,  558 => 319,  542 => 306,  538 => 305,  534 => 304,  530 => 303,  527 => 302,  524 => 301,  519 => 300,  517 => 299,  508 => 293,  503 => 291,  498 => 290,  494 => 289,  489 => 287,  482 => 284,  478 => 283,  427 => 235,  384 => 195,  380 => 194,  375 => 192,  371 => 191,  367 => 190,  363 => 189,  358 => 187,  352 => 185,  345 => 184,  314 => 158,  282 => 127,  263 => 109,  252 => 107,  249 => 106,  246 => 105,  243 => 104,  240 => 103,  237 => 102,  233 => 101,  207 => 77,  201 => 76,  193 => 74,  190 => 73,  184 => 72,  181 => 71,  178 => 70,  175 => 69,  170 => 68,  167 => 67,  163 => 66,  135 => 40,  110 => 16,  103 => 15,  94 => 12,  90 => 11,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Venta de Productos{% endblock %}

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
                                    Nueva venta de productos
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                {# Fecha #}
                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"fecha\"></label><input type=\"date\" class=\"form-control\"
                                                                              id=\"fecha\"
                                                                              name=\"fecha\"
                                            >
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"codigo\"></label><input type=\"text\" class=\"form-control\"
                                                                               placeholder=\"Teclee el código\"
                                                                               id=\"codigo\"
                                                                               name=\"codigo\"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"pack\"></label><select class=\"form-control select2\"
                                                                                  style=\"width: 100%;\" id=\"pack\"
                                                                                  name=\"pack\">
                                                <option value=\"0\">Seleccione el pack disponible</option>
                                                {% for pack in  packs %}
                                                    {% set disponible = 1 %}
                                                    {% for producto in pack.productos() %}
                                                        {% if producto.producto.stock <= producto.producto.stockAdvertencia %}
                                                            {% set disponible = 0 %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    {% if disponible == 1 %}
                                                        <option value=\"{{ pack.id }}\">{{ 'Nombre: ' ~ pack.nombre ~ ' -Beneficio: ' ~ pack.beneficioxventa|number_format(2, '.', ',') ~ ' ' ~ pack.tipodemoneda ~ ' -Productos: ' ~ pack.productos|length }}</option>
                                                    {% endif %}
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-6\">
                                        <div class=\"form-group\">
                                            <label for=\"cantidadPack\"></label><input type=\"number\" class=\"form-control\"
                                                                                 id=\"cantidadPack\" value=\"0\" min=\"0\"
                                                                                 name=\"cantidadPack\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 col-sm-2\" style=\"margin-top: 20px\">
                                        <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                title=\"Adicionar a la venta\" id=\"btnAdicionarPack\"><i
                                                    class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
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
                                                    <option value=\"{{ producto.id }}\">{{ tipo ~ '-' ~ 'I.D.D: ' ~ producto.idd ~ '-' ~ producto.nombre ~ '-' ~ producto.stock ~ ' en stock' }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-6\">
                                        <div class=\"form-group\">
                                            <label for=\"cantidad\"></label><input type=\"number\" class=\"form-control\"
                                                                                 id=\"cantidad\" value=\"0\" min=\"0\"
                                                                                 name=\"cantidad\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 col-sm-2\" style=\"margin-top: 20px\">
                                        <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                title=\"Adicionar a la venta\" id=\"btnAdicionar\"><i
                                                    class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                {# Productos #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"valorVenta\">Productos de la venta</label>
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
                                                <th>Cantidad</th>
                                                <th>Ganancia x Amortización</th>
                                                <th>Ganancia x Beneficio</th>
                                                <th>Moneda</th>
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
            let ventaProductos = [];

            \$('#pack, #producto').select2();

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
                window.location.href = \"{{ path('app_venta_productos_index') }}\";
            });

            //Adicionar en la tabla un producto
            \$('#btnAdicionarPack').on('click', function () {

                //Validaciones
                if (\$(\"#pack\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar el pack que desea incluir en la venta, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#cantidadPack\").val() === '' || \$(\"#cantidadPack\").val() === '0') {
                    toastr[\"error\"]('La cantidad de packs es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                //Comprobar que no exista el packs
                let n;
                let existe = false;
                for (n = 0; n < ventaProductos.length; n++) {
                    if (ventaProductos[n]['isPack'] === 1) {
                        if (ventaProductos[n]['idPack'] === \$(\"#pack\").val()) {
                            existe = true;
                            break;
                        }
                    }
                }
                if (existe) {
                    toastr[\"error\"]('Este pack ya existe en la venta.', \"Advertencia\")
                    return false;
                }

                let idPack = \$('#pack').val();
                let idProducto = null;
                let tipo, idPackSeleccionado,stock;
                let precio = 0;
                let deuda = 0;
                let cantidad = 0;
                let cantidadPagaDeuda = 0;
                let gananciaDeuda = 0;
                let gananciaBeneficio = 0;
                let beneficioVenta = 0;
                let restante = 0;
                let isAmortizacion = 0;
                let idAmortizacion = 0;
                let isRoyalties = 0;
                let isPack = 1;
                if (idPack !== '0') {
                    {% for pack in  packs %}
                    idPackSeleccionado = '{{ pack.id }}';
                    if (idPack === idPackSeleccionado) {
                        //Tipo de Producto
                        tipo = 'Pack ' + '{{ pack.nombre }}';
                        //Validar el stock
                        {% for producto in pack.productos() %}
                            stock = parseInt('{{ producto.producto.stock }}');
                            idProducto = parseInt('{{ producto.producto.id }}');
                            if (parseInt(\$(\"#cantidadPack\").val()) > stock) {
                                toastr[\"error\"]('La cantidad de ' + '{{ producto.producto.nombre }}' + ' incluido en este pack, supera la disponibilidad del producto.', \"Advertencia\")
                                return false;
                            }
                            isAmortizacion = 0;
                            isRoyalties = 0;
                            //Amortizacion
                            {% if producto.producto.amortizaciones|length > 0 %}
                                    {% for amortizacion in  producto.producto.amortizaciones %}
                                            {% if amortizacion.isActive == '1' %}
                                                    isAmortizacion = 1;
                                                    idAmortizacion = parseInt('{{ amortizacion.id }}');
                                                    beneficioVenta = parseFloat('{{ producto.beneficioxventa }}');
                                                    precio = parseFloat('{{ amortizacion.precioVenta }}');
                                                    deuda = parseFloat('{{ amortizacion.saldoRestante }}');
                                                    cantidad = parseInt(\$(\"#cantidadPack\").val());
                                                    cantidadPagaDeuda = deuda / precio;
                                                    if (cantidad >= cantidadPagaDeuda) {
                                                        gananciaDeuda = cantidadPagaDeuda * precio;
                                                        gananciaBeneficio = (cantidad * beneficioVenta) - gananciaDeuda;
                                                        isRoyalties = 1;
                                                    } else if (cantidad < cantidadPagaDeuda) {
                                                        gananciaDeuda = cantidad * precio;
                                                        gananciaBeneficio = 0;
                                                        isRoyalties = 0;
                                                    }
                                            {% endif %}
                                    {% endfor %}
                            {% else %}
                                //Ganancia
                                gananciaBeneficio = parseInt(\$(\"#cantidadPack\").val()) * parseFloat('{{ producto.beneficioxventa }}');
                                isRoyalties = 1;
                                isAmortizacion = 0;
                                gananciaDeuda = 0;
                            {% endif %}
                            if (isAmortizacion === 0) {
                                //Ganancia
                                gananciaBeneficio = parseInt(\$(\"#cantidadPack\").val()) * parseFloat('{{ producto.beneficioxventa }}');
                                isRoyalties = 1;
                                isAmortizacion = 0;
                                gananciaDeuda = 0;
                            }
                            restante = deuda - gananciaDeuda;
                            productos.push([
                                idPack,
                                tipo,
                                '{{ producto.producto.nombre }}',
                                '{{ producto.producto.stock }}',
                                '{{ producto.producto.user.nombre ~ ' ' ~ producto.producto.user.apellidos }}',
                                \$(\"#cantidadPack\").val(),
                                gananciaDeuda.toFixed(2),
                                gananciaBeneficio.toFixed(2),
                                '{{ pack.tipodemoneda }}'
                            ]);
                            ventaProductos.push({
                                idPack: idPack,
                                idProducto: idProducto,
                                cantidad: parseInt(\$(\"#cantidadPack\").val()),
                                idUsuario: '{{ producto.producto.user.id }}',
                                isAmortizacion: isAmortizacion,
                                idAmortizacion: idAmortizacion,
                                pagoAmortizacion: gananciaDeuda.toFixed(2),
                                isRoyalties: isRoyalties,
                                isPack: isPack,
                                royalties: gananciaBeneficio.toFixed(2),
                                restante: restante.toFixed(2)
                            });
                        {% endfor %}
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
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {
                                defaultContent: \"<button class='btn btn-block btn-danger delete' data-toggle='tooltip' title='Quitar de la venta'>\"
                                    + \"<i class='fas fa-trash'></i></button>\",
                                class: \"text-center\"
                            }
                        ],
                        \"lengthMenu\": [[5], [5]]
                    });
                }
            });

            //Adicionar en la tabla un producto
            \$('#btnAdicionar').on('click', function () {

                //Validaciones
                if (\$(\"#producto\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar el producto que desea incluir en la venta, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#cantidad\").val() === '' || \$(\"#cantidad\").val() === '0') {
                    toastr[\"error\"]('La cantidad de productos es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                //Comprobar que no exista el producto
                let n;
                let existe = false;
                for (n = 0; n < ventaProductos.length; n++) {
                    if (ventaProductos[n]['idProducto'] == \$(\"#producto\").val()) {
                        existe = true;
                        break;
                    }
                }
                if (existe) {
                    toastr[\"error\"]('Este producto ya existe en la venta.', \"Advertencia\")
                    return false;
                }

                let idPack = null;
                let idProducto = \$('#producto').val();
                let tipo, idProductoSeleccionado,stock;
                let precio = 0;
                let deuda = 0;
                let cantidad = 0;
                let cantidadPagaDeuda = 0;
                let gananciaDeuda = 0;
                let gananciaBeneficio = 0;
                let beneficioVenta = 0;
                let restante = 0;
                let isAmortizacion = 0;
                let idAmortizacion = 0;
                let isRoyalties = 0;
                let isPack = 0;
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
                        //Validar el stock
                        stock = parseInt('{{ producto.stock }}');
                        if (parseInt(\$(\"#cantidad\").val()) > stock) {
                            toastr[\"error\"]('La cantidad de supera la disponibilidad del producto.', \"Advertencia\")
                            return false;
                        }
                        isAmortizacion = 0;
                        isRoyalties = 0;
                        //Amortizacion
                        {% if producto.amortizaciones|length > 0 %}
                                {% for amortizacion in  producto.amortizaciones %}
                                        {% if amortizacion.isActive == '1' %}
                                        isAmortizacion = 1;
                                        idAmortizacion = parseInt('{{ amortizacion.id }}');
                                        beneficioVenta = parseFloat('{{ producto.beneficioxventa }}');
                                        precio = parseFloat('{{ amortizacion.precioVenta }}');
                                        deuda = parseFloat('{{ amortizacion.saldoRestante }}');
                                        cantidad = parseInt(\$(\"#cantidad\").val());
                                        cantidadPagaDeuda = deuda / precio;
                                        if (cantidad > cantidadPagaDeuda) {
                                            gananciaDeuda = cantidadPagaDeuda * precio;
                                            gananciaBeneficio = (cantidad - cantidadPagaDeuda) * beneficioVenta;
                                            isRoyalties = 1;
                                        }else if (cantidad === cantidadPagaDeuda) {
                                            gananciaDeuda = cantidadPagaDeuda * precio;
                                            gananciaBeneficio = 0;
                                            isRoyalties = 0;
                                        }else if (cantidad < cantidadPagaDeuda) {
                                            gananciaDeuda = cantidad * precio;
                                            gananciaBeneficio = 0;
                                            isRoyalties = 0;
                                        }
                                        {% endif %}
                                {% endfor %}
                        {% else %}
                                //Ganancia
                                gananciaBeneficio = parseInt(\$(\"#cantidad\").val()) * parseFloat('{{ producto.beneficioxventa }}');
                                isRoyalties = 1;
                                isAmortizacion = 0;
                                gananciaDeuda = 0;
                        {% endif %}
                        if (isAmortizacion === 0) {
                            //Ganancia
                            gananciaBeneficio = parseInt(\$(\"#cantidad\").val()) * parseFloat('{{ producto.beneficioxventa }}');
                            isRoyalties = 1;
                            isAmortizacion = 0;
                            gananciaDeuda = 0;
                        }
                        restante = deuda - gananciaDeuda;
                        productos.push([
                            idProducto,
                            tipo,
                            '{{ producto.nombre }}',
                            '{{ producto.stock }}',
                            '{{ producto.user.nombre ~ ' ' ~ producto.user.apellidos }}',
                            \$(\"#cantidad\").val(),
                            gananciaDeuda.toFixed(2),
                            gananciaBeneficio.toFixed(2),
                            '{{ producto.tipodemoneda }}'
                        ]);
                        ventaProductos.push({
                            idPack: idPack,
                            idProducto: idProducto,
                            cantidad: parseInt(\$(\"#cantidad\").val()),
                            idUsuario: '{{ producto.user.id }}',
                            isAmortizacion: isAmortizacion,
                            idAmortizacion: idAmortizacion,
                            pagoAmortizacion: gananciaDeuda.toFixed(2),
                            isRoyalties: isRoyalties,
                            isPack: isPack,
                            royalties: gananciaBeneficio.toFixed(2),
                            restante: restante.toFixed(2)
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
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {
                                defaultContent: \"<button class='btn btn-block btn-danger delete' data-toggle='tooltip' title='Quitar de la venta'>\"
                                    + \"<i class='fas fa-trash'></i></button>\",
                                class: \"text-center\"
                            }
                        ],
                        \"lengthMenu\": [[5], [5]]
                    });
                }
            });

            //Borrar de la tabla un producto
            \$('#dataProductos tbody').on('click', '.delete', function () {
                let row = \$(this).parents('tr');
                let fila = tableProductos.row(row).data();
                ventaProductos = ventaProductos.filter(id => id.idProducto !== fila[0]);
                productos = productos.filter(id => id[0] !== fila[0]);
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
                        {class: \"text-center\"},
                        {class: \"text-center\"},
                        {class: \"text-center\"},
                        {
                            defaultContent: \"<button class='btn btn-block btn-danger delete' data-toggle='tooltip' title='Quitar de la venta'>\"
                                + \"<i class='fas fa-trash'></i></button>\",
                            class: \"text-center\"
                        }
                    ],
                    \"lengthMenu\": [[5], [5]]
                });
            });

            \$('#btnGuardar').on('click', function () {

                let Ruta = Routing.generate('app_venta_producto_insert');

                //Validaciones
                if (\$(\"#fecha\").val() === '') {
                    toastr[\"error\"]('La fecha de la venta es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#codigo\").val() === '') {
                    toastr[\"error\"]('El código de la venta es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (tableProductos.rows().count() === 0) {
                    toastr[\"error\"]('Debe incluir al menos un producto en la venta.', \"Advertencia\")
                    return false;
                }
                //datatable completo
                //console.log(tableProductos.rows().data().toArray());

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    fecha: \$('#fecha').val(),
                    codigo: \$('#codigo').val(),
                    productos: ventaProductos
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('La venta de productos ha sido registrada.', \"Notificación\")
                        window.location.href = \"{{ path('app_venta_productos_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });


            });

        });
    </script>
{% endblock %}

", "venta_productos/addVentaProducto.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\venta_productos\\addVentaProducto.html.twig");
    }
}
