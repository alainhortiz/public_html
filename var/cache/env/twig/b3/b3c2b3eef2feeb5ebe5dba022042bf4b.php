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

/* amortizacion/indexUsuario.html.twig */
class __TwigTemplate_93e69c54883536527ac4533d36c839eb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amortizacion/indexUsuario.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "amortizacion/indexUsuario.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de Mis Productos Amortizados";
        
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
                            <h3>Listado de Mis Productos Amortizados</h3>
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
                echo "                                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" class=\"text-center\">
                                                ";
                // line 50
                if ((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 50) == 1)) {
                    // line 51
                    echo "                                                    <td>General</td>
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 52
$context["producto"], "tipoProducto", [], "any", false, false, false, 52) == 2)) {
                    // line 53
                    echo "                                                    <td>Libro</td>
                                                ";
                }
                // line 55
                echo "                                                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                                                ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                                                    <td><img width=\"80\" height=\"80\"
                                                             src=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 58))), "html", null, true);
                    echo "\"
                                                             alt=\"Foto Producto\"></td>
                                                ";
                } else {
                    // line 61
                    echo "                                                    <td>-</td>
                                                ";
                }
                // line 63
                echo "                                                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Stock", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                                                <td>";
                // line 64
                ((twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 64), "nombre", [], "any", false, false, false, 64) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "user", [], "any", false, false, false, 64), "apellidos", [], "any", false, false, false, 64)), "html", null, true))) : (print ("")));
                echo "</td>
                                                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "amortizaciones", [], "any", false, false, false, 65)), "html", null, true);
                echo "</td>
                                                <td style=\"margin: 0 auto;\">
                                                    <button class=\"btn btn-info amortizacion\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Ver amortizaciones\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        ";
            }
            // line 75
            echo "                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 76
            echo "                                        <tr>
                                            <td colspan=\"7\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- DataTables -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 133
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
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["amortizaciones"]) || array_key_exists("amortizaciones", $context) ? $context["amortizaciones"] : (function () { throw new RuntimeError('Variable "amortizaciones" does not exist.', 269, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["amortizacion"]) {
            // line 270
            echo "                idP = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "producto", [], "any", false, false, false, 270), "id", [], "any", false, false, false, 270), "html", null, true);
            echo "');
                if (idP === idProducto) {
                    ";
            // line 272
            if ((twig_get_attribute($this->env, $this->source, $context["amortizacion"], "isAdministrador", [], "any", false, false, false, 272) == "1")) {
                // line 273
                echo "                    amortizaciones.push([
                        '";
                // line 274
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "id", [], "any", false, false, false, 274), "html", null, true);
                echo "',
                        '";
                // line 275
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "costoProduccion", [], "any", false, false, false, 275), 2, ".", ","), "html", null, true);
                echo "',
                        '";
                // line 276
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 276), 2, ".", ","), "html", null, true);
                echo "',
                        '";
                // line 277
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 277), 2, ".", ","), "html", null, true);
                echo "',
                        'Administrador'
                    ]);
                    ";
            } else {
                // line 281
                echo "                    amortizaciones.push([
                        '";
                // line 282
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "id", [], "any", false, false, false, 282), "html", null, true);
                echo "',
                        '";
                // line 283
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "costoProduccion", [], "any", false, false, false, 283), 2, ".", ","), "html", null, true);
                echo "',
                        '";
                // line 284
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "precioVenta", [], "any", false, false, false, 284), 2, ".", ","), "html", null, true);
                echo "',
                        '";
                // line 285
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "saldoRestante", [], "any", false, false, false, 285), 2, ".", ","), "html", null, true);
                echo "',
                        '";
                // line 286
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "producto", [], "any", false, false, false, 286), "user", [], "any", false, false, false, 286), "nombre", [], "any", false, false, false, 286) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["amortizacion"], "producto", [], "any", false, false, false, 286), "user", [], "any", false, false, false, 286), "apellidos", [], "any", false, false, false, 286)), "html", null, true);
                echo "'
                    ]);
                    ";
            }
            // line 289
            echo "                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amortizacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
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
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ventasProductos"]) || array_key_exists("ventasProductos", $context) ? $context["ventasProductos"] : (function () { throw new RuntimeError('Variable "ventasProductos" does not exist.', 327, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
            // line 328
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["venta"], "amortizacion", [], "any", false, false, false, 328)) {
                // line 329
                echo "                        idA = parseInt('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["venta"], "amortizacion", [], "any", false, false, false, 329), "id", [], "any", false, false, false, 329), "html", null, true);
                echo "');
                        if (idA === idAmortizacion) {
                            ventas.push([
                                '";
                // line 332
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["venta"], "venta", [], "any", false, false, false, 332), "codigo", [], "any", false, false, false, 332), "html", null, true);
                echo "',
                                '";
                // line 333
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "pagoAmortizacion", [], "any", false, false, false, 333), 2, ".", ","), "html", null, true);
                echo "'
                            ]);
                        }
                    ";
            }
            // line 337
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
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

        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "amortizacion/indexUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 338,  562 => 337,  555 => 333,  551 => 332,  544 => 329,  541 => 328,  537 => 327,  499 => 291,  492 => 289,  486 => 286,  482 => 285,  478 => 284,  474 => 283,  470 => 282,  467 => 281,  460 => 277,  456 => 276,  452 => 275,  448 => 274,  445 => 273,  443 => 272,  437 => 270,  433 => 269,  294 => 133,  290 => 132,  286 => 131,  282 => 130,  276 => 128,  269 => 127,  217 => 80,  208 => 76,  203 => 75,  190 => 65,  186 => 64,  181 => 63,  177 => 61,  171 => 58,  168 => 57,  166 => 56,  161 => 55,  157 => 53,  155 => 52,  152 => 51,  150 => 50,  145 => 49,  142 => 48,  137 => 47,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listado de Mis Productos Amortizados{% endblock %}

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
                            <h3>Listado de Mis Productos Amortizados</h3>
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
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
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

        });
    </script>
{% endblock %}

", "amortizacion/indexUsuario.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\amortizacion\\indexUsuario.html.twig");
    }
}
