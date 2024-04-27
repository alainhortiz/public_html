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

/* venta_servicios/addVentaServicio.html.twig */
class __TwigTemplate_8f0bfa84a6f78f243bc65efb44f60acc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "venta_servicios/addVentaServicio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "venta_servicios/addVentaServicio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Venta de Servicios";
        
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
                        <div class=\"card card-primary card-outline\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-edit\"></i>
                                    Nueva venta de servicios
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
                                            <label for=\"servicio\"></label><select class=\"form-control select2\"
                                                                                  style=\"width: 100%;\" id=\"servicio\"
                                                                                  name=\"servicio\">
                                                <option value=\"0\">Seleccione el servicio</option>
                                                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicios"]) || array_key_exists("servicios", $context) ? $context["servicios"] : (function () { throw new RuntimeError('Variable "servicios" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 67
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["servicio"], "nombre", [], "any", false, false, false, 67) . "-") . twig_get_attribute($this->env, $this->source, $context["servicio"], "conceptoServicio", [], "any", false, false, false, 67)), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                            </select>
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
        // line 80
        echo "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"valorVenta\">Servicios de la venta</label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataServicios\">
                                            <thead class=\"text-center\">
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Concepto</th>
                                                <th>Usuario Asignado</th>
                                                <th>Ganancia</th>
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
        // line 108
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

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Select2 -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script>
        \$(document).ready(function () {

            //Declaracion de variables
            let servicios = [];
            let ventaServicios = [];

            \$('#producto').select2();

            let tableServicios = \$('#dataServicios').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[10], [10]],
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
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicios_index");
        echo "\";
            });

            //Adicionar en la tabla un servicio
            \$('#btnAdicionar').on('click', function () {

                //Validaciones
                if (\$(\"#servicio\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar el servicio que desea incluir en la venta, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                //Comprobar que no exista el producto
                let n;
                let existe = false;
                for (n = 0; n < ventaServicios.length; n++) {
                    if (ventaServicios[n]['idServicio'] == \$(\"#servicio\").val()) {
                        existe = true;
                        break;
                    }
                }
                if (existe) {
                    toastr[\"error\"]('Este servicio ya existe en la venta.', \"Advertencia\")
                    return false;
                }

                let idServicio = \$('#servicio').val();
                let idServicioSeleccionado;
                let ganancia = 0;
                if (idServicio !== '0') {
                    ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicios"]) || array_key_exists("servicios", $context) ? $context["servicios"] : (function () { throw new RuntimeError('Variable "servicios" does not exist.', 214, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 215
            echo "                    idServicioSeleccionado = '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "id", [], "any", false, false, false, 215), "html", null, true);
            echo "';
                    if (idServicio === idServicioSeleccionado) {

                        //Ganancia
                        ganancia = parseFloat('";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "beneficioxventa", [], "any", false, false, false, 219), "html", null, true);
            echo "');
                        servicios.push([
                            idServicio,
                            '";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "nombre", [], "any", false, false, false, 222), "html", null, true);
            echo "',
                            '";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "conceptoServicio", [], "any", false, false, false, 223), "html", null, true);
            echo "',
                            '";
            // line 224
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["servicio"], "user", [], "any", false, false, false, 224), "nombre", [], "any", false, false, false, 224) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["servicio"], "user", [], "any", false, false, false, 224), "apellidos", [], "any", false, false, false, 224)), "html", null, true);
            echo "',
                            ganancia,
                            '";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "tipodemoneda", [], "any", false, false, false, 226), "html", null, true);
            echo "'
                        ]);
                        ventaServicios.push({
                            idServicio: idServicio,
                            idUsuario: '";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["servicio"], "user", [], "any", false, false, false, 230), "id", [], "any", false, false, false, 230), "html", null, true);
            echo "',
                            royalties: ganancia
                        });
                    }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "                    //Adicionar a la tabla
                    tableServicios = \$('#dataServicios').DataTable({
                        destroy: true,
                        data: servicios,
                        columns: [
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
                        \"lengthMenu\": [[10], [10]]
                    });
                }
            });

            //Borrar de la tabla un servicio
            \$('#dataServicios tbody').on('click', '.delete', function () {
                let row = \$(this).parents('tr');
                let fila = tableServicios.row(row).data();
                let n;
                for (n = 0; n < ventaServicios.length; n++) {
                    if (ventaServicios[n]['idServicio'] == fila[0]) {
                        ventaServicios.splice(n, 1);
                        break;
                    }
                }
                for (n = 0; n < servicios.length; n++) {
                    if (servicios[n][0] == fila[0]) {
                        servicios.splice(n, 1);
                        break;
                    }
                }
                row.fadeOut();
            });

            \$('#btnGuardar').on('click', function () {

                let Ruta = Routing.generate('app_venta_servicio_insert');

                //Validaciones
                if (\$(\"#fecha\").val() === '') {
                    toastr[\"error\"]('La fecha de la venta es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#codigo\").val() === '') {
                    toastr[\"error\"]('El código de la venta es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (tableServicios.rows().count() === 0) {
                    toastr[\"error\"]('Debe incluir al menos un servicio en la venta.', \"Advertencia\")
                    return false;
                }
                //datatable completo
                //console.log(tableProductos.rows().data().toArray());

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    fecha: \$('#fecha').val(),
                    codigo: \$('#codigo').val(),
                    servicios: ventaServicios
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('La venta de servicios ha sido registrada.', \"Notificación\")
                        window.location.href = \"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicios_index");
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
        return "venta_servicios/addVentaServicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 314,  413 => 235,  402 => 230,  395 => 226,  390 => 224,  386 => 223,  382 => 222,  376 => 219,  368 => 215,  364 => 214,  332 => 185,  289 => 145,  285 => 144,  280 => 142,  276 => 141,  272 => 140,  268 => 139,  263 => 137,  257 => 135,  250 => 134,  219 => 108,  190 => 80,  178 => 69,  167 => 67,  163 => 66,  135 => 40,  110 => 16,  103 => 15,  94 => 12,  90 => 11,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Venta de Servicios{% endblock %}

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
                        <div class=\"card card-primary card-outline\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-edit\"></i>
                                    Nueva venta de servicios
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
                                            <label for=\"servicio\"></label><select class=\"form-control select2\"
                                                                                  style=\"width: 100%;\" id=\"servicio\"
                                                                                  name=\"servicio\">
                                                <option value=\"0\">Seleccione el servicio</option>
                                                {% for servicio in  servicios %}
                                                    <option value=\"{{ servicio.id }}\">{{ servicio.nombre ~ '-' ~ servicio.conceptoServicio }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 col-sm-2\" style=\"margin-top: 20px\">
                                        <button class=\"btn btn-block btn-info\" data-toggle=\"tooltip\"
                                                title=\"Adicionar a la venta\" id=\"btnAdicionar\"><i
                                                    class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                {# Servicios #}
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label for=\"valorVenta\">Servicios de la venta</label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataServicios\">
                                            <thead class=\"text-center\">
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Concepto</th>
                                                <th>Usuario Asignado</th>
                                                <th>Ganancia</th>
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
            let servicios = [];
            let ventaServicios = [];

            \$('#producto').select2();

            let tableServicios = \$('#dataServicios').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[10], [10]],
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
                window.location.href = \"{{ path('app_venta_servicios_index') }}\";
            });

            //Adicionar en la tabla un servicio
            \$('#btnAdicionar').on('click', function () {

                //Validaciones
                if (\$(\"#servicio\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar el servicio que desea incluir en la venta, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                //Comprobar que no exista el producto
                let n;
                let existe = false;
                for (n = 0; n < ventaServicios.length; n++) {
                    if (ventaServicios[n]['idServicio'] == \$(\"#servicio\").val()) {
                        existe = true;
                        break;
                    }
                }
                if (existe) {
                    toastr[\"error\"]('Este servicio ya existe en la venta.', \"Advertencia\")
                    return false;
                }

                let idServicio = \$('#servicio').val();
                let idServicioSeleccionado;
                let ganancia = 0;
                if (idServicio !== '0') {
                    {% for servicio in  servicios %}
                    idServicioSeleccionado = '{{ servicio.id }}';
                    if (idServicio === idServicioSeleccionado) {

                        //Ganancia
                        ganancia = parseFloat('{{ servicio.beneficioxventa }}');
                        servicios.push([
                            idServicio,
                            '{{ servicio.nombre }}',
                            '{{ servicio.conceptoServicio }}',
                            '{{ servicio.user.nombre ~ ' ' ~ servicio.user.apellidos }}',
                            ganancia,
                            '{{ servicio.tipodemoneda }}'
                        ]);
                        ventaServicios.push({
                            idServicio: idServicio,
                            idUsuario: '{{ servicio.user.id }}',
                            royalties: ganancia
                        });
                    }
                    {% endfor %}
                    //Adicionar a la tabla
                    tableServicios = \$('#dataServicios').DataTable({
                        destroy: true,
                        data: servicios,
                        columns: [
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
                        \"lengthMenu\": [[10], [10]]
                    });
                }
            });

            //Borrar de la tabla un servicio
            \$('#dataServicios tbody').on('click', '.delete', function () {
                let row = \$(this).parents('tr');
                let fila = tableServicios.row(row).data();
                let n;
                for (n = 0; n < ventaServicios.length; n++) {
                    if (ventaServicios[n]['idServicio'] == fila[0]) {
                        ventaServicios.splice(n, 1);
                        break;
                    }
                }
                for (n = 0; n < servicios.length; n++) {
                    if (servicios[n][0] == fila[0]) {
                        servicios.splice(n, 1);
                        break;
                    }
                }
                row.fadeOut();
            });

            \$('#btnGuardar').on('click', function () {

                let Ruta = Routing.generate('app_venta_servicio_insert');

                //Validaciones
                if (\$(\"#fecha\").val() === '') {
                    toastr[\"error\"]('La fecha de la venta es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#codigo\").val() === '') {
                    toastr[\"error\"]('El código de la venta es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (tableServicios.rows().count() === 0) {
                    toastr[\"error\"]('Debe incluir al menos un servicio en la venta.', \"Advertencia\")
                    return false;
                }
                //datatable completo
                //console.log(tableProductos.rows().data().toArray());

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    fecha: \$('#fecha').val(),
                    codigo: \$('#codigo').val(),
                    servicios: ventaServicios
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('La venta de servicios ha sido registrada.', \"Notificación\")
                        window.location.href = \"{{ path('app_venta_servicios_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });


            });

        });
    </script>
{% endblock %}

", "venta_servicios/addVentaServicio.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\venta_servicios\\addVentaServicio.html.twig");
    }
}
