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

/* amortizacion/index.html.twig */
class __TwigTemplate_c47ccd79cbafee185d7bb01dd0fda2ae extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Listado de Productos Amortizados";
        
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
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        yield "\"/>
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
        yield "    <div class=\"preload hidden\">
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 48
            yield "                                        ";
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 48)) > 0)) {
                // line 49
                yield "                                            ";
                $context["agregar"] = 0;
                // line 50
                yield "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
                    // line 51
                    yield "                                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 51) != 0)) {
                        // line 52
                        yield "                                                    ";
                        $context["agregar"] = 1;
                        // line 53
                        yield "                                                ";
                    }
                    // line 54
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                yield "                                            <tr data-id=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 55), "html", null, true);
                yield "\" class=\"text-center\">
                                                ";
                // line 56
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 56) == 1)) {
                    // line 57
                    yield "                                                    <td>General</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 58
$context["producto"], "tipoProducto", [], "any", false, false, false, 58) == 2)) {
                    // line 59
                    yield "                                                    <td>Libro</td>
                                                ";
                }
                // line 61
                yield "                                                <td>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 61), "html", null, true);
                yield "</td>
                                                ";
                // line 62
                if (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 62)) {
                    // line 63
                    yield "                                                    <td><img width=\"80\" height=\"80\"
                                                             src=\"";
                    // line 64
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 64))), "html", null, true);
                    yield "\"
                                                             alt=\"Foto Producto\"></td>
                                                ";
                } else {
                    // line 67
                    yield "                                                    <td>-</td>
                                                ";
                }
                // line 69
                yield "                                                <td>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 69), "html", null, true);
                yield "</td>
                                                <td>";
                // line 70
                ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 70)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 70), "nombre", [], "any", false, false, false, 70) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 70), "apellidos", [], "any", false, false, false, 70)), "html", null, true)) : (yield ""));
                yield "</td>
                                                <td>";
                // line 71
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 71)), "html", null, true);
                yield "</td>
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
                    yield "                                                        <button class=\"btn btn-primary agregar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Agregar una amortización\"><i
                                                                    class=\"fas fa-plus\"></i>
                                                        </button>
                                                    ";
                }
                // line 85
                yield "                                                </td>
                                            </tr>
                                        ";
            }
            // line 88
            yield "                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            yield "                                        <tr>
                                            <td colspan=\"7\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                                    </tbody>
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "amortizacion/modalAddAmortizacion.html.twig");
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 141
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 142
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 144
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 147
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 148
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 149
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 150
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["amortizaciones"]) || array_key_exists("amortizaciones", $context) ? $context["amortizaciones"] : (function () { throw new RuntimeError('Variable "amortizaciones" does not exist.', 286, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
            // line 287
            yield "                idP = parseInt('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "producto", [], "any", false, false, false, 287), "id", [], "any", false, false, false, 287), "html", null, true);
            yield "');
                if (idP === idProducto) {
                    ";
            // line 289
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "isAdministrador", [], "any", false, false, false, 289) == "1")) {
                // line 290
                yield "                    amortizaciones.push([
                        '";
                // line 291
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "id", [], "any", false, false, false, 291), "html", null, true);
                yield "',
                        '";
                // line 292
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "costoProduccion", [], "any", false, false, false, 292), 2, ".", ","), "html", null, true);
                yield "',
                        '";
                // line 293
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 293), 2, ".", ","), "html", null, true);
                yield "',
                        '";
                // line 294
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 294), 2, ".", ","), "html", null, true);
                yield "',
                        'Administrador'
                    ]);
                    ";
            } else {
                // line 298
                yield "                    amortizaciones.push([
                        '";
                // line 299
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "id", [], "any", false, false, false, 299), "html", null, true);
                yield "',
                        '";
                // line 300
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "costoProduccion", [], "any", false, false, false, 300), 2, ".", ","), "html", null, true);
                yield "',
                        '";
                // line 301
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 301), 2, ".", ","), "html", null, true);
                yield "',
                        '";
                // line 302
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 302), 2, ".", ","), "html", null, true);
                yield "',
                        '";
                // line 303
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "producto", [], "any", false, false, false, 303), "user", [], "any", false, false, false, 303), "nombre", [], "any", false, false, false, 303) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "producto", [], "any", false, false, false, 303), "user", [], "any", false, false, false, 303), "apellidos", [], "any", false, false, false, 303)), "html", null, true);
                yield "'
                    ]);
                    ";
            }
            // line 306
            yield "                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        yield "                if (amortizaciones.length !== 0) {
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ventasProductos"]) || array_key_exists("ventasProductos", $context) ? $context["ventasProductos"] : (function () { throw new RuntimeError('Variable "ventasProductos" does not exist.', 344, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
            // line 345
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "amortizacion", [], "any", false, false, false, 345)) {
                // line 346
                yield "                        idA = parseInt('";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "amortizacion", [], "any", false, false, false, 346), "id", [], "any", false, false, false, 346), "html", null, true);
                yield "');
                        if (idA === idAmortizacion) {
                            ventas.push([
                                '";
                // line 349
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "venta", [], "any", false, false, false, 349), "codigo", [], "any", false, false, false, 349), "html", null, true);
                yield "',
                                '";
                // line 350
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "pagoAmortizacion", [], "any", false, false, false, 350), 2, ".", ","), "html", null, true);
                yield "'
                            ]);
                        }
                    ";
            }
            // line 354
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        yield "                if (ventas.length !== 0) {
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 400, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 401
            yield "                producto = parseInt('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 401), "html", null, true);
            yield "')
                if (producto === idProducto) {
                    ";
            // line 403
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 403));
            foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
                // line 404
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 404) > 0)) {
                    // line 405
                    yield "                    toastr[\"error\"]('Este producto tiene una amortización pendiente por liquidar.', \"Advertencia\")
                    return false;
                    ";
                }
                // line 408
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            yield "                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 411
        yield "
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amortizacion_index");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
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
        return "amortizacion/index.html.twig";
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
        return array (  734 => 441,  702 => 411,  695 => 409,  689 => 408,  684 => 405,  681 => 404,  677 => 403,  671 => 401,  667 => 400,  620 => 355,  614 => 354,  607 => 350,  603 => 349,  596 => 346,  593 => 345,  589 => 344,  551 => 308,  544 => 306,  538 => 303,  534 => 302,  530 => 301,  526 => 300,  522 => 299,  519 => 298,  512 => 294,  508 => 293,  504 => 292,  500 => 291,  497 => 290,  495 => 289,  489 => 287,  485 => 286,  346 => 150,  342 => 149,  338 => 148,  334 => 147,  329 => 145,  325 => 144,  319 => 142,  312 => 141,  301 => 137,  255 => 93,  246 => 89,  241 => 88,  236 => 85,  228 => 79,  226 => 78,  216 => 71,  212 => 70,  207 => 69,  203 => 67,  197 => 64,  194 => 63,  192 => 62,  187 => 61,  183 => 59,  181 => 58,  178 => 57,  176 => 56,  171 => 55,  165 => 54,  162 => 53,  159 => 52,  156 => 51,  151 => 50,  148 => 49,  145 => 48,  140 => 47,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
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
