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

/* pack/editPack.html.twig */
class __TwigTemplate_a74a3ee571cd764aab660f1cac6a3a9b extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modificar pack de productos";
        
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
                                    Modificar pack de productos
                                </h3>
                                <div class=\"caption\" style=\"float: right\">
                                    <label for=\"beneficioPack\" id=\"mostrarBeneficio\">Beneficio total: ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 38, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 38), "html", null, true);
        echo "</label>
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
                                                                               name=\"nombre\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 49, $this->source); })()), "nombre", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                    ";
        // line 53
        echo "                                    <div class=\"col-lg-4 col-md-4 col-sm-12\" style=\"margin-top: 30px\">
                                        <div class=\"form-group\">
                                            <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                                Tipo de Moneda
                                            </h5>
                                            <label>
                                                <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoMoneda\"
                                                       value=\"USD\" ";
        // line 60
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 60, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 60) == "USD")) ? ("checked") : (""));
        echo ">
                                            </label>
                                            <label for=\"tipoMoneda\">USD</label>

                                            <label>
                                                <input style=\"margin-left: 20px\" type=\"radio\"
                                                       name=\"tipoMoneda\"
                                                       value=\"EUR\" ";
        // line 67
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 67, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 67) == "EUR")) ? ("checked") : (""));
        echo ">
                                            </label>
                                            <label for=\"tipoMoneda\">EUR</label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    ";
        // line 75
        echo "                                    <div class=\"col-lg-8 col-md-8 col-sm-12\">
                                        <div class=\"form-group\">
                                            <label for=\"producto\"></label><select class=\"form-control select2\"
                                                                                  style=\"width: 100%;\" id=\"producto\"
                                                                                  name=\"producto\">
                                                <option value=\"0\">Seleccione el producto disponible</option>
                                                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 82
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 82) == 1)) {
                // line 83
                echo "                                                        ";
                $context["tipo"] = "Producto general";
                // line 84
                echo "                                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 84) == 2)) {
                // line 85
                echo "                                                        ";
                $context["tipo"] = "Producto libro";
                // line 86
                echo "                                                    ";
            }
            // line 87
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((((((((((((((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 87, $this->source); })()) . "-") . "I.D.D: ") . twig_get_attribute($this->env, $this->source, $context["producto"], "idd", [], "any", false, false, false, 87)) . "-") . twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 87)) . "-") . twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 87)) . " en stock") . "- asignado a: ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 87), "nombre", [], "any", false, false, false, 87)) . " - con beneficio de venta: ") . twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 87)) . " ") . twig_get_attribute($this->env, $this->source, $context["producto"], "tipodemoneda", [], "any", false, false, false, 87)), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                            </select>
                                        </div>
                                    </div>
                                    ";
        // line 93
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
        // line 103
        echo "                                    <div class=\"col-lg-2 col-md-2 col-sm-2\" style=\"margin-top: 20px\">
                                        <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                title=\"Adicionar al pack\" id=\"btnAdicionar\"><i
                                                    class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                ";
        // line 111
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
                                            <tbody class=\"text-center\">
                                            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 133, $this->source); })()), "productos", [], "any", false, false, false, 133));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 134
            echo "                                                <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 134), "html", null, true);
            echo "\" class=\"text-center\">
                                                    <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135), "html", null, true);
            echo "</td>
                                                    ";
            // line 136
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 136), "tipoProducto", [], "any", false, false, false, 136) == 1)) {
                // line 137
                echo "                                                        <td>General</td>
                                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 138
$context["producto"], "producto", [], "any", false, false, false, 138), "tipoProducto", [], "any", false, false, false, 138) == 2)) {
                // line 139
                echo "                                                        <td>Libro</td>
                                                    ";
            }
            // line 141
            echo "                                                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 141), "nombre", [], "any", false, false, false, 141), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 142), "Stock", [], "any", false, false, false, 142), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 143
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 143), "user", [], "any", false, false, false, 143)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 143), "user", [], "any", false, false, false, 143), "nombre", [], "any", false, false, false, 143) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 143), "user", [], "any", false, false, false, 143), "apellidos", [], "any", false, false, false, 143)), "html", null, true))) : (print ("")));
            echo "</td>
                                                    <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 144), 2, ".", ","), "html", null, true);
            echo "</td>
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
            echo "                                                <tr>
                                                    <td colspan=\"7\">No se encontraron registros</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 169
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
        ";
        // line 192
        echo twig_include($this->env, $context, "pack/modalEditBeneficio.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 196
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 197
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Select2 -->
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script>
        \$(document).ready(function () {

            //Declaracion de variables
            let productos = [];
            let packProductos = [];
            let beneficioTotal = parseFloat('";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 214, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 214), "html", null, true);
        echo "');
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 245, $this->source); })()), "productos", [], "any", false, false, false, 245));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 246
            echo "                    id = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 246), "id", [], "any", false, false, false, 246), "html", null, true);
            echo "')
                    bV = parseFloat('";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 247), "html", null, true);
            echo "')
                    //Tipo de Libro
                    ";
            // line 249
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 249), "tipoProducto", [], "any", false, false, false, 249) == 1)) {
                // line 250
                echo "                            tipo = 'General';
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 251
$context["producto"], "producto", [], "any", false, false, false, 251), "tipoProducto", [], "any", false, false, false, 251) == 2)) {
                // line 252
                echo "                            tipo = 'Libro';
                    ";
            }
            // line 254
            echo "                    productos.push([
                        id,
                        tipo,
                        '";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 257), "nombre", [], "any", false, false, false, 257), "html", null, true);
            echo "',
                        '";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 258), "stock", [], "any", false, false, false, 258), "html", null, true);
            echo "',
                        '";
            // line 259
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 259), "user", [], "any", false, false, false, 259), "nombre", [], "any", false, false, false, 259) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 259), "user", [], "any", false, false, false, 259), "apellidos", [], "any", false, false, false, 259)), "html", null, true);
            echo "',
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
        echo "
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 409, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 410
            echo "                        idProductoSeleccionado = '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 410), "html", null, true);
            echo "';
                        if (idProducto === idProductoSeleccionado) {
                            //Tipo de Libro
                            ";
            // line 413
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 413) == 1)) {
                // line 414
                echo "                            tipo = 'General';
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 415
$context["producto"], "tipoProducto", [], "any", false, false, false, 415) == 2)) {
                // line 416
                echo "                            tipo = 'Libro';
                            ";
            }
            // line 418
            echo "                            beneficioVenta = parseFloat(\$('#beneficio').val().replace(',','.'));
                            beneficioTotal += beneficioVenta;
                            tableProductos.row.add([
                                idProducto,
                                tipo,
                                '";
            // line 423
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 423), "html", null, true);
            echo "',
                                '";
            // line 424
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 424), "html", null, true);
            echo "',
                                '";
            // line 425
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 425), "nombre", [], "any", false, false, false, 425) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 425), "apellidos", [], "any", false, false, false, 425)), "html", null, true);
            echo "',
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
        echo "                    \$('#mostrarBeneficio').text('Beneficio total: ' + beneficioTotal.toFixed(2));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["packProductos"]) || array_key_exists("packProductos", $context) ? $context["packProductos"] : (function () { throw new RuntimeError('Variable "packProductos" does not exist.', 507, $this->source); })()), "id", [], "any", false, false, false, 507), "html", null, true);
        echo "',
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        echo "\";
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

    }

    public function getTemplateName()
    {
        return "pack/editPack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  808 => 523,  789 => 507,  714 => 434,  699 => 425,  695 => 424,  691 => 423,  684 => 418,  680 => 416,  678 => 415,  675 => 414,  673 => 413,  666 => 410,  662 => 409,  537 => 287,  515 => 267,  501 => 259,  497 => 258,  493 => 257,  488 => 254,  484 => 252,  482 => 251,  479 => 250,  477 => 249,  472 => 247,  467 => 246,  463 => 245,  429 => 214,  419 => 207,  415 => 206,  410 => 204,  406 => 203,  402 => 202,  398 => 201,  393 => 199,  387 => 197,  380 => 196,  370 => 192,  345 => 169,  338 => 163,  329 => 159,  309 => 144,  305 => 143,  301 => 142,  296 => 141,  292 => 139,  290 => 138,  287 => 137,  285 => 136,  281 => 135,  276 => 134,  271 => 133,  247 => 111,  238 => 103,  227 => 93,  222 => 89,  211 => 87,  208 => 86,  205 => 85,  202 => 84,  199 => 83,  196 => 82,  192 => 81,  184 => 75,  174 => 67,  164 => 60,  155 => 53,  149 => 49,  142 => 44,  134 => 38,  110 => 16,  103 => 15,  94 => 12,  90 => 11,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
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
