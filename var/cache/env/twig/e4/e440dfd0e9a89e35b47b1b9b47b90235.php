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

/* pack/editPack.html.twig */
class __TwigTemplate_8c1f60b4958cdc820b007f792d134cbe extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/editPack.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pack/editPack.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modificar pack de productos";
        
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
                                    Modificar pack de productos
                                </h3>
                                <div class=\"caption\" style=\"float: right\">
                                    <label for=\"beneficioPack\" id=\"mostrarBeneficio\">Beneficio total: ";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 38, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 38), "html", null, true);
        yield "</label>
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
                                                                               name=\"nombre\" value=\"";
        // line 49
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 49, $this->source); })()), "nombre", [], "any", false, false, false, 49), "html", null, true);
        yield "\">
                                        </div>
                                    </div>
                                    ";
        // line 53
        yield "                                    <div class=\"col-lg-4 col-md-4 col-sm-12\" style=\"margin-top: 30px\">
                                        <div class=\"form-group\">
                                            <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                                Tipo de Moneda
                                            </h5>
                                            <label>
                                                <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoMoneda\"
                                                       value=\"USD\" ";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 60, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 60) == "USD")) ? ("checked") : (""));
        yield ">
                                            </label>
                                            <label for=\"tipoMoneda\">USD</label>

                                            <label>
                                                <input style=\"margin-left: 20px\" type=\"radio\"
                                                       name=\"tipoMoneda\"
                                                       value=\"EUR\" ";
        // line 67
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 67, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 67) == "EUR")) ? ("checked") : (""));
        yield ">
                                            </label>
                                            <label for=\"tipoMoneda\">EUR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    ";
        // line 75
        yield "                                    <div class=\"col-lg-8 col-md-8 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"producto\"></label><select class=\"form-control select2\"
                                                                                  style=\"width: 100%;\" id=\"producto\"
                                                                                  name=\"producto\">
                                                <option value=\"0\">Seleccione el producto disponible</option>
                                                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 82
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 82) == 1)) {
                // line 83
                yield "                                                        ";
                $context["tipo"] = "Producto general";
                // line 84
                yield "                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 84) == 2)) {
                // line 85
                yield "                                                        ";
                $context["tipo"] = "Producto libro";
                // line 86
                yield "                                                    ";
            }
            // line 87
            yield "                                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 87), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, (((((((((((((((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 87, $this->source); })()) . "-") . "I.D.D: ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "idd", [], "any", false, false, false, 87)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 87)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 87)) . " en stock") . "- asignado a: ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 87), "nombre", [], "any", false, false, false, 87)) . " - con beneficio de venta: ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 87)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 87)), "html", null, true);
            yield "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                                            </select>
                                        </div>
                                    </div>
                                    ";
        // line 93
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
        // line 103
        yield "                                    <div class=\"col-lg-2 col-md-2 col-sm-2\" style=\"margin-top: 20px\">
                                        <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                title=\"Adicionar al pack\" id=\"btnAdicionar\"><i
                                                    class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                ";
        // line 111
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
                                            <tbody class=\"text-center\">
                                            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 133, $this->source); })()), "productos", [], "any", false, false, false, 133));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 134
            yield "                                                <tr data-id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 134), "html", null, true);
            yield "\" class=\"text-center\">
                                                    <td>";
            // line 135
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135), "html", null, true);
            yield "</td>
                                                    ";
            // line 136
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 136), "tipoProducto", [], "any", false, false, false, 136) == 1)) {
                // line 137
                yield "                                                        <td>General</td>
                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 138
$context["producto"], "producto", [], "any", false, false, false, 138), "tipoProducto", [], "any", false, false, false, 138) == 2)) {
                // line 139
                yield "                                                        <td>Libro</td>
                                                    ";
            }
            // line 141
            yield "                                                    <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 141), "nombre", [], "any", false, false, false, 141), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 142
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 142), "Stock", [], "any", false, false, false, 142), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 143
            ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 143), "user", [], "any", false, false, false, 143)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 143), "user", [], "any", false, false, false, 143), "nombre", [], "any", false, false, false, 143) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 143), "user", [], "any", false, false, false, 143), "apellidos", [], "any", false, false, false, 143)), "html", null, true)) : (yield ""));
            yield "</td>
                                                    <td>";
            // line 144
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 144), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td style=\"margin: 0 auto;\">
                                                        <button class=\"btn btn-success editar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Modificar el beneficio\"><i
                                                                    class=\"fas fa-edit\"></i>
                                                        </button>
                                                        <button class=\"btn btn-danger delete\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Quitar del pack\"><i
                                                                    class=\"fas fa-trash\"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 159
            yield "                                                <tr>
                                                    <td colspan=\"7\">No se encontraron registros</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 169
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
        ";
        // line 192
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pack/modalEditBeneficio.html.twig");
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 196
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 197
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Select2 -->
    <script src=\"";
        // line 199
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        yield "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 201
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 202
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 203
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 204
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 206
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <script>
        \$(document).ready(function () {

            //Declaracion de variables
            let productos = [];
            let packProductos = [];
            let beneficioTotal = parseFloat('";
        // line 214
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 214, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 214), "html", null, true);
        yield "');
            let idProducto, tipo;
            let id, bV;

            \$('#producto').select2();

            let tableProductos = \$('#dataProductos').DataTable({
                columns: [
                    {class: \"text-center\"},
                    {class: \"text-center\"},
                    {class: \"text-center\"},
                    {class: \"text-center\"},
                    {class: \"text-center\"},
                    {class: \"text-center\"},
                    {
                        defaultContent: \"<button class='btn btn-danger delete' data-toggle='tooltip' title='Quitar del pack'>\"
                            + \"<i class='fas fa-trash'></i></button>\",
                        class: \"text-center\"
                    }
                ],
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[5], [5]],
                \"ordering\": false,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            //llenar el arreglo de productos
            ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 245, $this->source); })()), "productos", [], "any", false, false, false, 245));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 246
            yield "                    id = parseInt('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 246), "id", [], "any", false, false, false, 246), "html", null, true);
            yield "')
                    bV = parseFloat('";
            // line 247
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 247), "html", null, true);
            yield "')
                    //Tipo de Libro
                    ";
            // line 249
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 249), "tipoProducto", [], "any", false, false, false, 249) == 1)) {
                // line 250
                yield "                            tipo = 'General';
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 251
$context["producto"], "producto", [], "any", false, false, false, 251), "tipoProducto", [], "any", false, false, false, 251) == 2)) {
                // line 252
                yield "                            tipo = 'Libro';
                    ";
            }
            // line 254
            yield "                    productos.push([
                        id,
                        tipo,
                        '";
            // line 257
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 257), "nombre", [], "any", false, false, false, 257), "html", null, true);
            yield "',
                        '";
            // line 258
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 258), "stock", [], "any", false, false, false, 258), "html", null, true);
            yield "',
                        '";
            // line 259
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 259), "user", [], "any", false, false, false, 259), "nombre", [], "any", false, false, false, 259) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 259), "user", [], "any", false, false, false, 259), "apellidos", [], "any", false, false, false, 259)), "html", null, true);
            yield "',
                        bV.toFixed(2)
                    ]);
                    packProductos.push({
                        idProducto: id,
                        beneficioVenta: bV.toFixed(2)
                    });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        yield "
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
        // line 287
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

            \$('#addBeneficio').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#addBeneficio').val().length;
                    let indexPunto = \$('#addBeneficio').val().indexOf('.');
                    let indexComa = \$('#addBeneficio').val().indexOf(',');

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
                    if (packProductos[n]['idProducto'] === parseInt(\$(\"#producto\").val())) {
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
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 409, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 410
            yield "                        idProductoSeleccionado = '";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 410), "html", null, true);
            yield "';
                        if (idProducto === idProductoSeleccionado) {
                            //Tipo de Libro
                            ";
            // line 413
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 413) == 1)) {
                // line 414
                yield "                            tipo = 'General';
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 415
$context["producto"], "tipoProducto", [], "any", false, false, false, 415) == 2)) {
                // line 416
                yield "                            tipo = 'Libro';
                            ";
            }
            // line 418
            yield "                            beneficioVenta = parseFloat(\$('#beneficio').val().replace(',','.'));
                            beneficioTotal += beneficioVenta;
                            tableProductos.row.add([
                                idProducto,
                                tipo,
                                '";
            // line 423
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 423), "html", null, true);
            yield "',
                                '";
            // line 424
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 424), "html", null, true);
            yield "',
                                '";
            // line 425
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 425), "nombre", [], "any", false, false, false, 425) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 425), "apellidos", [], "any", false, false, false, 425)), "html", null, true);
            yield "',
                                beneficioVenta.toFixed(2)
                            ]).draw(false);
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
        // line 434
        yield "                    \$('#mostrarBeneficio').text('Beneficio total: ' + beneficioTotal.toFixed(2));
                }
            });

            //Borrar de la tabla un producto
            \$('#dataProductos tbody').on('click', '.delete', function () {
                let row = \$(this).parents('tr');
                let fila = tableProductos.row(row).data();
                beneficioTotal -= fila[5];
                let n;
                for (n = 0; n < packProductos.length; n++) {
                    if (packProductos[n]['idProducto'] === parseInt(fila[0])) {
                        packProductos.splice(n, 1);
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

                let Ruta = Routing.generate('app_pack_update');

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

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idPack: '";
        // line 507
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 507, $this->source); })()), "id", [], "any", false, false, false, 507), "html", null, true);
        yield "',
                    nombre: \$('#nombre').val(),
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
                        toastr[\"success\"]('El pack de productos ha sido modificado.', \"Notificación\")
                        window.location.href = \"";
        // line 523
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });


            });

            //Editar beneficio
            \$('#dataProductos tbody').on('click', '.editar', function () {
                let row = \$(this).parents('tr');
                let fila = tableProductos.row(row).data();
                idProducto = parseInt(fila[0]);
                \$(\"#modalTitle\").text(\"MODIFICAR BENEFICIO DE \" + fila[2].toUpperCase());
                \$('#modalEditBeneficio').modal('show');
            });

            \$('#btnGuardarBeneficio').on('click', function () {

                //Validaciones
                if (\$(\"#addBeneficio\").val() === '') {
                    toastr[\"error\"]('El beneficio es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                \$('#modalEditBeneficio').modal('hide');

                let n, beneficioVenta;
                beneficioTotal = 0;
                for (n = 0; n < packProductos.length; n++) {
                    if (packProductos[n]['idProducto'] === idProducto) {
                        beneficioVenta = parseFloat(\$('#addBeneficio').val().replace(',','.'));
                        packProductos[n]['beneficioVenta'] = beneficioVenta.toFixed(2);
                        break;
                    }
                }

                for (n = 0; n < productos.length; n++) {
                    if (productos[n][0] === idProducto) {
                        beneficioTotal += beneficioVenta;
                        productos[n][5] = beneficioVenta.toFixed(2);
                    }else {
                        beneficioTotal += parseFloat(productos[n][5]);
                    }
                }

                \$('#mostrarBeneficio').text('Beneficio total: ' + beneficioTotal);

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
                            defaultContent:
                                  \"<button class='btn btn-success editar' data-toggle='tooltip' title='Modificar el beneficio'>\"
                                + \"<i class='fas fa-edit'></i></button>\"
                                + \"<button class='btn btn-danger delete' data-toggle='tooltip' title='Quitar del pack'>\"
                                + \"<i class='fas fa-trash'></i></button>\",
                            class: \"text-center\"
                        }
                    ],
                    \"lengthMenu\": [[10], [10]]
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
        return "pack/editPack.html.twig";
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
        return array (  812 => 523,  793 => 507,  718 => 434,  703 => 425,  699 => 424,  695 => 423,  688 => 418,  684 => 416,  682 => 415,  679 => 414,  677 => 413,  670 => 410,  666 => 409,  541 => 287,  519 => 267,  505 => 259,  501 => 258,  497 => 257,  492 => 254,  488 => 252,  486 => 251,  483 => 250,  481 => 249,  476 => 247,  471 => 246,  467 => 245,  433 => 214,  423 => 207,  419 => 206,  414 => 204,  410 => 203,  406 => 202,  402 => 201,  397 => 199,  391 => 197,  384 => 196,  373 => 192,  348 => 169,  341 => 163,  332 => 159,  312 => 144,  308 => 143,  304 => 142,  299 => 141,  295 => 139,  293 => 138,  290 => 137,  288 => 136,  284 => 135,  279 => 134,  274 => 133,  250 => 111,  241 => 103,  230 => 93,  225 => 89,  214 => 87,  211 => 86,  208 => 85,  205 => 84,  202 => 83,  199 => 82,  195 => 81,  187 => 75,  177 => 67,  167 => 60,  158 => 53,  152 => 49,  145 => 44,  137 => 38,  113 => 16,  106 => 15,  96 => 12,  92 => 11,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modificar pack de productos{% endblock %}

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
                                    Modificar pack de productos
                                </h3>
                                <div class=\"caption\" style=\"float: right\">
                                    <label for=\"beneficioPack\" id=\"mostrarBeneficio\">Beneficio total: {{ packProductos.beneficioxventa }}</label>
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
                                                                               name=\"nombre\" value=\"{{ packProductos.nombre }}\">
                                        </div>
                                    </div>
                                    {# Tipo de Moneda #}
                                    <div class=\"col-lg-4 col-md-4 col-sm-12\" style=\"margin-top: 30px\">
                                        <div class=\"form-group\">
                                            <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                                Tipo de Moneda
                                            </h5>
                                            <label>
                                                <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoMoneda\"
                                                       value=\"USD\" {{ (packProductos.tipodemoneda == 'USD') ? 'checked' }}>
                                            </label>
                                            <label for=\"tipoMoneda\">USD</label>

                                            <label>
                                                <input style=\"margin-left: 20px\" type=\"radio\"
                                                       name=\"tipoMoneda\"
                                                       value=\"EUR\" {{ (packProductos.tipodemoneda == 'EUR') ? 'checked' }}>
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
                                            <tbody class=\"text-center\">
                                            {% for producto in packProductos.productos %}
                                                <tr data-id=\"{{ producto.id }}\" class=\"text-center\">
                                                    <td>{{ producto.producto.id }}</td>
                                                    {% if producto.producto.tipoProducto == 1 %}
                                                        <td>General</td>
                                                    {% elseif producto.producto.tipoProducto == 2 %}
                                                        <td>Libro</td>
                                                    {% endif %}
                                                    <td>{{ producto.producto.nombre }}</td>
                                                    <td>{{ producto.producto.Stock }}</td>
                                                    <td>{{ producto.producto.user ? producto.producto.user.nombre ~ ' ' ~ producto.producto.user.apellidos }}</td>
                                                    <td>{{ producto.beneficioxventa|number_format(2, '.', ',') }}</td>
                                                    <td style=\"margin: 0 auto;\">
                                                        <button class=\"btn btn-success editar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Modificar el beneficio\"><i
                                                                    class=\"fas fa-edit\"></i>
                                                        </button>
                                                        <button class=\"btn btn-danger delete\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Quitar del pack\"><i
                                                                    class=\"fas fa-trash\"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"7\">No se encontraron registros</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
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
        {{ include('pack/modalEditBeneficio.html.twig') }}
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
            let beneficioTotal = parseFloat('{{ packProductos.beneficioxventa }}');
            let idProducto, tipo;
            let id, bV;

            \$('#producto').select2();

            let tableProductos = \$('#dataProductos').DataTable({
                columns: [
                    {class: \"text-center\"},
                    {class: \"text-center\"},
                    {class: \"text-center\"},
                    {class: \"text-center\"},
                    {class: \"text-center\"},
                    {class: \"text-center\"},
                    {
                        defaultContent: \"<button class='btn btn-danger delete' data-toggle='tooltip' title='Quitar del pack'>\"
                            + \"<i class='fas fa-trash'></i></button>\",
                        class: \"text-center\"
                    }
                ],
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[5], [5]],
                \"ordering\": false,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            //llenar el arreglo de productos
            {% for producto in packProductos.productos %}
                    id = parseInt('{{ producto.producto.id }}')
                    bV = parseFloat('{{ producto.beneficioxventa }}')
                    //Tipo de Libro
                    {% if producto.producto.tipoProducto == 1 %}
                            tipo = 'General';
                    {% elseif producto.producto.tipoProducto == 2 %}
                            tipo = 'Libro';
                    {% endif %}
                    productos.push([
                        id,
                        tipo,
                        '{{ producto.producto.nombre }}',
                        '{{ producto.producto.stock }}',
                        '{{ producto.producto.user.nombre ~ ' ' ~ producto.producto.user.apellidos }}',
                        bV.toFixed(2)
                    ]);
                    packProductos.push({
                        idProducto: id,
                        beneficioVenta: bV.toFixed(2)
                    });
            {% endfor %}

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

            \$('#addBeneficio').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#addBeneficio').val().length;
                    let indexPunto = \$('#addBeneficio').val().indexOf('.');
                    let indexComa = \$('#addBeneficio').val().indexOf(',');

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
                    if (packProductos[n]['idProducto'] === parseInt(\$(\"#producto\").val())) {
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
                            tableProductos.row.add([
                                idProducto,
                                tipo,
                                '{{ producto.nombre }}',
                                '{{ producto.stock }}',
                                '{{ producto.user.nombre ~ ' ' ~ producto.user.apellidos }}',
                                beneficioVenta.toFixed(2)
                            ]).draw(false);
                            packProductos.push({
                                idProducto: idProducto,
                                beneficioVenta: beneficioVenta.toFixed(2)
                            });
                    }
                    {% endfor %}
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
                    if (packProductos[n]['idProducto'] === parseInt(fila[0])) {
                        packProductos.splice(n, 1);
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

                let Ruta = Routing.generate('app_pack_update');

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

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idPack: '{{ packProductos.id }}',
                    nombre: \$('#nombre').val(),
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
                        toastr[\"success\"]('El pack de productos ha sido modificado.', \"Notificación\")
                        window.location.href = \"{{ path('app_pack_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });


            });

            //Editar beneficio
            \$('#dataProductos tbody').on('click', '.editar', function () {
                let row = \$(this).parents('tr');
                let fila = tableProductos.row(row).data();
                idProducto = parseInt(fila[0]);
                \$(\"#modalTitle\").text(\"MODIFICAR BENEFICIO DE \" + fila[2].toUpperCase());
                \$('#modalEditBeneficio').modal('show');
            });

            \$('#btnGuardarBeneficio').on('click', function () {

                //Validaciones
                if (\$(\"#addBeneficio\").val() === '') {
                    toastr[\"error\"]('El beneficio es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                \$('#modalEditBeneficio').modal('hide');

                let n, beneficioVenta;
                beneficioTotal = 0;
                for (n = 0; n < packProductos.length; n++) {
                    if (packProductos[n]['idProducto'] === idProducto) {
                        beneficioVenta = parseFloat(\$('#addBeneficio').val().replace(',','.'));
                        packProductos[n]['beneficioVenta'] = beneficioVenta.toFixed(2);
                        break;
                    }
                }

                for (n = 0; n < productos.length; n++) {
                    if (productos[n][0] === idProducto) {
                        beneficioTotal += beneficioVenta;
                        productos[n][5] = beneficioVenta.toFixed(2);
                    }else {
                        beneficioTotal += parseFloat(productos[n][5]);
                    }
                }

                \$('#mostrarBeneficio').text('Beneficio total: ' + beneficioTotal);

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
                            defaultContent:
                                  \"<button class='btn btn-success editar' data-toggle='tooltip' title='Modificar el beneficio'>\"
                                + \"<i class='fas fa-edit'></i></button>\"
                                + \"<button class='btn btn-danger delete' data-toggle='tooltip' title='Quitar del pack'>\"
                                + \"<i class='fas fa-trash'></i></button>\",
                            class: \"text-center\"
                        }
                    ],
                    \"lengthMenu\": [[10], [10]]
                });
            });

        });
    </script>
{% endblock %}

", "pack/editPack.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\pack\\editPack.html.twig");
    }
}
