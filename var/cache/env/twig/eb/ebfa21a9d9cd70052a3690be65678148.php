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

/* amortizacion/index.html.twig */
class __TwigTemplate_747a0387d83d3f3e23dd0c38e8522399 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amortizacion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "amortizacion/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de Productos Amortizados";
        
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
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 13
        echo "    <div class=\"preload hidden\">
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
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de Productos Amortizados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Tipo de Producto</th>
                                        <th>Producto</th>
                                        <th>Imagen</th>
                                        <th>Stock</th>
                                        <th>Usuario Asignado</th>
                                        <th>Cantidad de Amortizaciones</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 48
            echo "                                        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 48)) > 0)) {
                // line 49
                echo "                                            ";
                $context["agregar"] = 0;
                // line 50
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
                    // line 51
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 51) != 0)) {
                        // line 52
                        echo "                                                    ";
                        $context["agregar"] = 1;
                        // line 53
                        echo "                                                ";
                    }
                    // line 54
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\" class=\"text-center\">
                                                ";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 56) == 1)) {
                    // line 57
                    echo "                                                    <td>General</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 58
$context["producto"], "tipoProducto", [], "any", false, false, false, 58) == 2)) {
                    // line 59
                    echo "                                                    <td>Libro</td>
                                                ";
                }
                // line 61
                echo "                                                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                                                ";
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "                                                    <td><img width=\"80\" height=\"80\"
                                                             src=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 64))), "html", null, true);
                    echo "\"
                                                             alt=\"Foto Producto\"></td>
                                                ";
                } else {
                    // line 67
                    echo "                                                    <td>-</td>
                                                ";
                }
                // line 69
                echo "                                                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                                                <td>";
                // line 70
                ((twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 70), "nombre", [], "any", false, false, false, 70) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 70), "apellidos", [], "any", false, false, false, 70)), "html", null, true))) : (print ("")));
                echo "</td>
                                                <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 71)), "html", null, true);
                echo "</td>
                                                <td style=\"margin: 0 auto;\">
                                                    <button class=\"btn btn-info amortizacion\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Ver amortizaciones\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                    ";
                // line 78
                if (((isset($context["agregar"]) || array_key_exists("agregar", $context) ? $context["agregar"] : (function () { throw new RuntimeError('Variable "agregar" does not exist.', 78, $this->source); })()) == 0)) {
                    // line 79
                    echo "                                                        <button class=\"btn btn-primary agregar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Agregar una amortización\"><i
                                                                    class=\"fas fa-plus\"></i>
                                                        </button>
                                                    ";
                }
                // line 85
                echo "                                                </td>
                                            </tr>
                                        ";
            }
            // line 88
            echo "                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            echo "                                        <tr>
                                            <td colspan=\"7\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row\" id=\"tablaAmortizaciones\" style=\"display: none\">
                            <div class=\"card-title\">
                                <h3>Amortizaciones</h3>
                            </div>
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataAmortizaciones\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th class=\"hidden\">id</th>
                                        <th>Costo de Producción</th>
                                        <th>Precio de Venta</th>
                                        <th>Por liquidar</th>
                                        <th>Beneficiado</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\"></tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row\" id=\"tablaVentas\" style=\"display: none\">
                            <div class=\"card-title\">
                                <h3>Ventas realizadas</h3>
                            </div>
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataVentas\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Código</th>
                                        <th>Liquidación</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 137
        echo twig_include($this->env, $context, "amortizacion/modalAddAmortizacion.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 141
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 142
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {

            let tableProductos = \$('#dataProductos').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[3], [3]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            let tableAmortizaciones = \$('#dataAmortizaciones').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[1], [1]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            let tableVentas = \$('#dataVentas').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[1], [1]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
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

            //Declaracion de variables
            let idP, idProducto, idA, idAmortizacion;
            let amortizaciones = [];
            let ventas = [];

            \$('#dataProductos tbody').on('click', '.amortizacion', function () {
                let row = \$(this).parents('tr');
                idProducto = parseInt(row.data('id'));
                amortizaciones = [];
                \$('#tablaAmortizaciones').css(\"display\", \"none\");
                \$('#tablaVentas').css(\"display\", \"none\");
                ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["amortizaciones"]) || array_key_exists("amortizaciones", $context) ? $context["amortizaciones"] : (function () { throw new RuntimeError('Variable "amortizaciones" does not exist.', 286, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
            // line 287
            echo "                idP = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "producto", [], "any", false, false, false, 287), "id", [], "any", false, false, false, 287), "html", null, true);
            echo "');
                if (idP === idProducto) {
                    ";
            // line 289
            if ((twig_get_attribute($this->env, $this->source, $context["amortizacion"], "isAdministrador", [], "any", false, false, false, 289) == "1")) {
                // line 290
                echo "                    amortizaciones.push([
                        '";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "id", [], "any", false, false, false, 291), "html", null, true);
                echo "',
                        '";
                // line 292
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "costoProduccion", [], "any", false, false, false, 292), 2, ".", ","), "html", null, true);
                echo "',
                        '";
                // line 293
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 293), 2, ".", ","), "html", null, true);
                echo "',
                        '";
                // line 294
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 294), 2, ".", ","), "html", null, true);
                echo "',
                        'Administrador'
                    ]);
                    ";
            } else {
                // line 298
                echo "                    amortizaciones.push([
                        '";
                // line 299
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "id", [], "any", false, false, false, 299), "html", null, true);
                echo "',
                        '";
                // line 300
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "costoProduccion", [], "any", false, false, false, 300), 2, ".", ","), "html", null, true);
                echo "',
                        '";
                // line 301
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 301), 2, ".", ","), "html", null, true);
                echo "',
                        '";
                // line 302
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 302), 2, ".", ","), "html", null, true);
                echo "',
                        '";
                // line 303
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "producto", [], "any", false, false, false, 303), "user", [], "any", false, false, false, 303), "nombre", [], "any", false, false, false, 303) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "producto", [], "any", false, false, false, 303), "user", [], "any", false, false, false, 303), "apellidos", [], "any", false, false, false, 303)), "html", null, true);
                echo "'
                    ]);
                    ";
            }
            // line 306
            echo "                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "                if (amortizaciones.length !== 0) {
                    \$('#tablaAmortizaciones').css(\"display\", \"block\");
                    tableAmortizaciones = \$('#dataAmortizaciones').DataTable({
                        destroy: true,
                        data: amortizaciones,
                        columns: [
                            {class: \"hidden\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {
                                defaultContent: \"<div>\" + \"<a href='#' \" +
                                    \"<button class='btn btn-info ventas' \" +
                                    \" data-toggle='tooltip' title='Ver ventas'> \" +
                                    \"<i class='fas fa-info'></i>\" +
                                    \"</button>\" +
                                    \"</div>\"
                            }
                        ],
                        \"order\": [[ 0, \"desc\" ]],
                        \"lengthMenu\": [[6], [6]]
                    });
                } else {
                    \$('#tablaAmortizaciones').css(\"display\", \"none\");
                    toastr[\"info\"]('Este producto no tiene amortizaciones.', \"Información\")
                    return false;
                }
            });

            \$('#dataAmortizaciones tbody').on('click', '.ventas', function () {
                let row = \$(this).parents('tr');
                let fila = tableAmortizaciones.row(row).data();
                idAmortizacion = parseInt(fila[0]);
                ventas = [];
                \$('#tablaVentas').css(\"display\", \"none\");
                ";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ventasProductos"]) || array_key_exists("ventasProductos", $context) ? $context["ventasProductos"] : (function () { throw new RuntimeError('Variable "ventasProductos" does not exist.', 344, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
            // line 345
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["venta"], "amortizacion", [], "any", false, false, false, 345)) {
                // line 346
                echo "                        idA = parseInt('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["venta"], "amortizacion", [], "any", false, false, false, 346), "id", [], "any", false, false, false, 346), "html", null, true);
                echo "');
                        if (idA === idAmortizacion) {
                            ventas.push([
                                '";
                // line 349
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["venta"], "venta", [], "any", false, false, false, 349), "codigo", [], "any", false, false, false, 349), "html", null, true);
                echo "',
                                '";
                // line 350
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "pagoAmortizacion", [], "any", false, false, false, 350), 2, ".", ","), "html", null, true);
                echo "'
                            ]);
                        }
                    ";
            }
            // line 354
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        echo "                if (ventas.length !== 0) {
                    \$('#tablaVentas').css(\"display\", \"block\");
                    tableVentas = \$('#dataVentas').DataTable({
                        destroy: true,
                        data: ventas,
                        columns: [
                            {class: \"text-center\"},
                            {class: \"text-center\"}
                        ],
                        \"lengthMenu\": [[2], [2]]
                    });
                } else {
                    \$('#tablaVentas').css(\"display\", \"none\");
                    toastr[\"info\"]('Esta amortización no se liquido en ninguna venta.', \"Información\")
                    return false;
                }
            });

            \$('#dataProductos tbody').on('click', '.agregar', function () {
                let row = \$(this).parents('tr');
                idProducto = row.data('id');

                \$('#modalAddAmortizacion').modal('show');
            });

            \$('#btnAddGuardar').on('click', function () {

                let isAdministrador = 1;
                let producto;

                //Validaciones
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

                ";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 400, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 401
            echo "                producto = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 401), "html", null, true);
            echo "')
                if (producto === idProducto) {
                    ";
            // line 403
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 403));
            foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
                // line 404
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 404) > 0)) {
                    // line 405
                    echo "                    toastr[\"error\"]('Este producto tiene una amortización pendiente por liquidar.', \"Advertencia\")
                    return false;
                    ";
                }
                // line 408
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            echo "                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 411
        echo "
                if (\$('input:radio[name=beneficiado]:checked').val() === '1') {
                    isAdministrador = 0;
                }

                let Ruta = Routing.generate('app_amortizacion_new', {'id': idProducto});

                \$('#modalAddAmortizacion').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idProducto: idProducto,
                    costo: parseFloat(\$('#costo').val().replace(',','.')),
                    precio: parseFloat(\$('#precio').val().replace(',','.')),
                    isAdministrador: isAdministrador
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalAddAmortizacion input').each(function () {
                            \$(this).val('');
                        });
                        toastr[\"success\"]('Se registro la amortización en este producto', \"Notificación\")
                        window.location.href = \"";
        // line 441
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amortizacion_index");
        echo "\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
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
        return "amortizacion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  730 => 441,  698 => 411,  691 => 409,  685 => 408,  680 => 405,  677 => 404,  673 => 403,  667 => 401,  663 => 400,  616 => 355,  610 => 354,  603 => 350,  599 => 349,  592 => 346,  589 => 345,  585 => 344,  547 => 308,  540 => 306,  534 => 303,  530 => 302,  526 => 301,  522 => 300,  518 => 299,  515 => 298,  508 => 294,  504 => 293,  500 => 292,  496 => 291,  493 => 290,  491 => 289,  485 => 287,  481 => 286,  342 => 150,  338 => 149,  334 => 148,  330 => 147,  325 => 145,  321 => 144,  315 => 142,  308 => 141,  298 => 137,  252 => 93,  243 => 89,  238 => 88,  233 => 85,  225 => 79,  223 => 78,  213 => 71,  209 => 70,  204 => 69,  200 => 67,  194 => 64,  191 => 63,  189 => 62,  184 => 61,  180 => 59,  178 => 58,  175 => 57,  173 => 56,  168 => 55,  162 => 54,  159 => 53,  156 => 52,  153 => 51,  148 => 50,  145 => 49,  142 => 48,  137 => 47,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listado de Productos Amortizados{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
{% endblock %}

{% block page %}
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
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de Productos Amortizados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataProductos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Tipo de Producto</th>
                                        <th>Producto</th>
                                        <th>Imagen</th>
                                        <th>Stock</th>
                                        <th>Usuario Asignado</th>
                                        <th>Cantidad de Amortizaciones</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for producto in productos %}
                                        {% if producto.amortizaciones|length > 0 %}
                                            {% set agregar = 0 %}
                                            {% for amortizacion in producto.amortizaciones %}
                                                {% if amortizacion.saldoRestante != 0 %}
                                                    {% set agregar = 1 %}
                                                {% endif %}
                                            {% endfor %}
                                            <tr data-id=\"{{ producto.id }}\" class=\"text-center\">
                                                {% if producto.tipoProducto == 1 %}
                                                    <td>General</td>
                                                {% elseif producto.tipoProducto == 2 %}
                                                    <td>Libro</td>
                                                {% endif %}
                                                <td>{{ producto.nombre }}</td>
                                                {% if producto.imagen %}
                                                    <td><img width=\"80\" height=\"80\"
                                                             src=\"{{ asset('uploads/' ~ producto.imagen) }}\"
                                                             alt=\"Foto Producto\"></td>
                                                {% else %}
                                                    <td>-</td>
                                                {% endif %}
                                                <td>{{ producto.Stock }}</td>
                                                <td>{{ producto.user ? producto.user.nombre ~ ' ' ~ producto.user.apellidos }}</td>
                                                <td>{{ producto.amortizaciones|length }}</td>
                                                <td style=\"margin: 0 auto;\">
                                                    <button class=\"btn btn-info amortizacion\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Ver amortizaciones\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                    {% if agregar == 0 %}
                                                        <button class=\"btn btn-primary agregar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Agregar una amortización\"><i
                                                                    class=\"fas fa-plus\"></i>
                                                        </button>
                                                    {% endif %}
                                                </td>
                                            </tr>
                                        {% endif %}
                                    {% else %}
                                        <tr>
                                            <td colspan=\"7\">No se encontraron registros</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row\" id=\"tablaAmortizaciones\" style=\"display: none\">
                            <div class=\"card-title\">
                                <h3>Amortizaciones</h3>
                            </div>
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataAmortizaciones\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th class=\"hidden\">id</th>
                                        <th>Costo de Producción</th>
                                        <th>Precio de Venta</th>
                                        <th>Por liquidar</th>
                                        <th>Beneficiado</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\"></tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row\" id=\"tablaVentas\" style=\"display: none\">
                            <div class=\"card-title\">
                                <h3>Ventas realizadas</h3>
                            </div>
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataVentas\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Código</th>
                                        <th>Liquidación</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ include('amortizacion/modalAddAmortizacion.html.twig') }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Acceso a Rutas del Controller -->
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <!-- DataTables -->
    <script src=\"{{ asset('plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}\"></script>
    <script>
        \$(function () {

            let tableProductos = \$('#dataProductos').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[3], [3]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            let tableAmortizaciones = \$('#dataAmortizaciones').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[1], [1]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            let tableVentas = \$('#dataVentas').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[1], [1]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
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

            //Declaracion de variables
            let idP, idProducto, idA, idAmortizacion;
            let amortizaciones = [];
            let ventas = [];

            \$('#dataProductos tbody').on('click', '.amortizacion', function () {
                let row = \$(this).parents('tr');
                idProducto = parseInt(row.data('id'));
                amortizaciones = [];
                \$('#tablaAmortizaciones').css(\"display\", \"none\");
                \$('#tablaVentas').css(\"display\", \"none\");
                {% for amortizacion in amortizaciones %}
                idP = parseInt('{{ amortizacion.producto.id }}');
                if (idP === idProducto) {
                    {% if amortizacion.isAdministrador == '1' %}
                    amortizaciones.push([
                        '{{ amortizacion.id }}',
                        '{{ amortizacion.costoProduccion|number_format(2, '.', ',') }}',
                        '{{ amortizacion.precioVenta|number_format(2, '.', ',') }}',
                        '{{ amortizacion.saldoRestante|number_format(2, '.', ',') }}',
                        'Administrador'
                    ]);
                    {% else %}
                    amortizaciones.push([
                        '{{ amortizacion.id }}',
                        '{{ amortizacion.costoProduccion|number_format(2, '.', ',') }}',
                        '{{ amortizacion.precioVenta|number_format(2, '.', ',') }}',
                        '{{ amortizacion.saldoRestante|number_format(2, '.', ',') }}',
                        '{{ amortizacion.producto.user.nombre ~ ' ' ~ amortizacion.producto.user.apellidos }}'
                    ]);
                    {% endif %}
                }
                {% endfor %}
                if (amortizaciones.length !== 0) {
                    \$('#tablaAmortizaciones').css(\"display\", \"block\");
                    tableAmortizaciones = \$('#dataAmortizaciones').DataTable({
                        destroy: true,
                        data: amortizaciones,
                        columns: [
                            {class: \"hidden\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {
                                defaultContent: \"<div>\" + \"<a href='#' \" +
                                    \"<button class='btn btn-info ventas' \" +
                                    \" data-toggle='tooltip' title='Ver ventas'> \" +
                                    \"<i class='fas fa-info'></i>\" +
                                    \"</button>\" +
                                    \"</div>\"
                            }
                        ],
                        \"order\": [[ 0, \"desc\" ]],
                        \"lengthMenu\": [[6], [6]]
                    });
                } else {
                    \$('#tablaAmortizaciones').css(\"display\", \"none\");
                    toastr[\"info\"]('Este producto no tiene amortizaciones.', \"Información\")
                    return false;
                }
            });

            \$('#dataAmortizaciones tbody').on('click', '.ventas', function () {
                let row = \$(this).parents('tr');
                let fila = tableAmortizaciones.row(row).data();
                idAmortizacion = parseInt(fila[0]);
                ventas = [];
                \$('#tablaVentas').css(\"display\", \"none\");
                {% for venta in ventasProductos %}
                    {% if venta.amortizacion %}
                        idA = parseInt('{{ venta.amortizacion.id }}');
                        if (idA === idAmortizacion) {
                            ventas.push([
                                '{{ venta.venta.codigo }}',
                                '{{ venta.pagoAmortizacion|number_format(2, '.', ',') }}'
                            ]);
                        }
                    {% endif %}
                {% endfor %}
                if (ventas.length !== 0) {
                    \$('#tablaVentas').css(\"display\", \"block\");
                    tableVentas = \$('#dataVentas').DataTable({
                        destroy: true,
                        data: ventas,
                        columns: [
                            {class: \"text-center\"},
                            {class: \"text-center\"}
                        ],
                        \"lengthMenu\": [[2], [2]]
                    });
                } else {
                    \$('#tablaVentas').css(\"display\", \"none\");
                    toastr[\"info\"]('Esta amortización no se liquido en ninguna venta.', \"Información\")
                    return false;
                }
            });

            \$('#dataProductos tbody').on('click', '.agregar', function () {
                let row = \$(this).parents('tr');
                idProducto = row.data('id');

                \$('#modalAddAmortizacion').modal('show');
            });

            \$('#btnAddGuardar').on('click', function () {

                let isAdministrador = 1;
                let producto;

                //Validaciones
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

                {% for producto in productos %}
                producto = parseInt('{{ producto.id }}')
                if (producto === idProducto) {
                    {% for amortizacion in producto.amortizaciones %}
                    {% if amortizacion.saldoRestante > 0 %}
                    toastr[\"error\"]('Este producto tiene una amortización pendiente por liquidar.', \"Advertencia\")
                    return false;
                    {% endif %}
                    {% endfor %}
                }
                {% endfor %}

                if (\$('input:radio[name=beneficiado]:checked').val() === '1') {
                    isAdministrador = 0;
                }

                let Ruta = Routing.generate('app_amortizacion_new', {'id': idProducto});

                \$('#modalAddAmortizacion').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idProducto: idProducto,
                    costo: parseFloat(\$('#costo').val().replace(',','.')),
                    precio: parseFloat(\$('#precio').val().replace(',','.')),
                    isAdministrador: isAdministrador
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalAddAmortizacion input').each(function () {
                            \$(this).val('');
                        });
                        toastr[\"success\"]('Se registro la amortización en este producto', \"Notificación\")
                        window.location.href = \"{{ path('app_amortizacion_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });
            });

        });
    </script>
{% endblock %}

", "amortizacion/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\amortizacion\\index.html.twig");
    }
}
