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

/* user/index.html.twig */
class __TwigTemplate_fb627db520bd8fbd3de04d5c67551c53 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Listado de Usuarios";
        
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
                            <h3>Listado de Usuarios Activos</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_new");
        yield "\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                        class=\"fa fa-user-plus\"></i> Crear Nuevo Usuario
                            </button>
                        </a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataUser\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Avatar</th>
                                        <th>Rol</th>
                                        <th>Nombre</th>
                                        <th>Empresa</th>
                                        <th>Productos asignados</th>
                                        <th>Servicios asignados</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 55
            yield "                                        ";
            $context["cantProductos"] = 0;
            // line 56
            yield "                                        ";
            $context["cantServicios"] = 0;
            // line 57
            yield "                                        ";
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "productos", [], "any", false, false, false, 57)) > 0)) {
                // line 58
                yield "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "productos", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                    // line 59
                    yield "                                                ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 59) == 1) || (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 59) == 2)) && (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "isActive", [], "any", false, false, false, 59) == 1))) {
                        // line 60
                        yield "                                                    ";
                        $context["cantProductos"] = ((isset($context["cantProductos"]) || array_key_exists("cantProductos", $context) ? $context["cantProductos"] : (function () { throw new RuntimeError('Variable "cantProductos" does not exist.', 60, $this->source); })()) + 1);
                        // line 61
                        yield "                                                ";
                    } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 61) == 3) && (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "isActive", [], "any", false, false, false, 61) == 1))) {
                        // line 62
                        yield "                                                    ";
                        $context["cantServicios"] = ((isset($context["cantServicios"]) || array_key_exists("cantServicios", $context) ? $context["cantServicios"] : (function () { throw new RuntimeError('Variable "cantServicios" does not exist.', 62, $this->source); })()) + 1);
                        // line 63
                        yield "                                                ";
                    }
                    // line 64
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                yield "                                        ";
            }
            // line 66
            yield "                                        <tr data-id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 66), "html", null, true);
            yield "\">
                                            ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 67)) {
                // line 68
                yield "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 69
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 69))), "html", null, true);
                yield "\"
                                                         alt=\"Avatar Usuario\"></td>
                                            ";
            } else {
                // line 72
                yield "                                                <td>-</td>
                                            ";
            }
            // line 74
            yield "                                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 74)) {
                // line 75
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 75), 0, [], "array", false, false, false, 75) == "ROLE_ADMIN")) {
                    // line 76
                    yield "                                                    <td>Administrador</td>
                                                ";
                } else {
                    // line 78
                    yield "                                                    <td>Usuario</td>
                                                ";
                }
                // line 80
                yield "                                            ";
            }
            // line 81
            yield "                                            <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 81) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "apellidos", [], "any", false, false, false, 81)), "html", null, true);
            yield "</td>
                                            <td>";
            // line 82
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "empresa", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                                            <td>";
            // line 83
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["cantProductos"]) || array_key_exists("cantProductos", $context) ? $context["cantProductos"] : (function () { throw new RuntimeError('Variable "cantProductos" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "</td>
                                            <td>";
            // line 84
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["cantServicios"]) || array_key_exists("cantServicios", $context) ? $context["cantServicios"] : (function () { throw new RuntimeError('Variable "cantServicios" does not exist.', 84, $this->source); })()), "html", null, true);
            yield "</td>
                                            <td style=\"margin: 0 auto;\">
                                                <button class=\"btn btn-secondary ingresar\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Ingresar saldo\"><i
                                                            class=\"fas fa-dollar-sign\"></i>
                                                </button>
                                                <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                                        title=\"Retirar saldo\">
                                                    <i class=\"fas fa-exchange-alt\"></i>
                                                </button>
                                                <a href=\"";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            yield "\">
                                                    <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                                <a href=\"";
            // line 101
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_form_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\">
                                                    <button class=\"btn btn-warning\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Restear contraseña\"><i
                                                                class=\"fas fa-lock\"></i>
                                                    </button>
                                                </a>
                                                <a href=\"";
            // line 108
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\">
                                                    <button class=\"btn btn-success\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Editar\"><i
                                                                class=\"fas fa-edit\"></i>
                                                    </button>
                                                </a>
                                                <button class=\"btn btn-danger delete\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Eliminar\"><i
                                                            class=\"fas fa-trash\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 123
            yield "                                        <tr>
                                            <td colspan=\"15\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 135
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/modalAddRetiroSaldo.html.twig");
        yield "
        ";
        // line 136
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/modalAddIngresoSaldo.html.twig");
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 140
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 141
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- DataTables -->
    <script src=\"";
        // line 143
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 144
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 145
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 146
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 148
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <script>
        \$(function () {

            let table = \$('#dataUser').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[8], [8]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"scrollY\": 300,
                \"scrollCollapse\": true
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
                \"hideDuration\": \"1000\",
                \"timeOut\": \"5000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            let nombre, id, saldoGeneralUSD, saldoGeneralEUR, saldoLibroUSD, saldoLibroEUR, saldoServicioUSD,
                saldoServicioEUR, usuarioId, acumulado;

            \$('#addRoyaltie').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#addRoyaltie').val().length;
                    let index = \$('#addRoyaltie').val().indexOf('.');

                    if (index > 0 && tecla.charCode === 46) {
                        return false;
                    }

                    if (index > 0) {
                        let CharAfterdot = (len + 1) - index;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$('#addRoyaltieIngreso').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#addRoyaltieIngreso').val().length;
                    let index = \$('#addRoyaltieIngreso').val().indexOf('.');

                    if (index > 0 && tecla.charCode === 46) {
                        return false;
                    }

                    if (index > 0) {
                        let CharAfterdot = (len + 1) - index;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$('#tipoProducto').on('change', function () {
                ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 230
            yield "                id = parseInt('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 230), "html", null, true);
            yield "');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('";
            // line 232
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 232), "html", null, true);
            yield "');
                    saldoGeneralEUR = parseFloat('";
            // line 233
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 233), "html", null, true);
            yield "');
                    saldoLibroUSD = parseFloat('";
            // line 234
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 234), "html", null, true);
            yield "');
                    saldoLibroEUR = parseFloat('";
            // line 235
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 235), "html", null, true);
            yield "');
                    saldoServicioUSD = parseFloat('";
            // line 236
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 236), "html", null, true);
            yield "');
                    saldoServicioEUR = parseFloat('";
            // line 237
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 237), "html", null, true);
            yield "');
                    acumulado = 0;
                    switch (parseInt(\$('#tipoProducto').val())) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('";
            // line 242
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 242), "html", null, true);
            yield "');
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('";
            // line 247
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 247), "html", null, true);
            yield "');
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('";
            // line 252
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 252), "html", null, true);
            yield "');
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('";
            // line 257
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 257), "html", null, true);
            yield "');
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('";
            // line 262
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 262), "html", null, true);
            yield "');
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('";
            // line 267
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 267), "html", null, true);
            yield "');
                            }
                            break;
                    }
                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        yield "                \$(\"#modalTitle\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
            });

            \$('#tipoProductoIngreso').on('change', function () {
                ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 277, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 278
            yield "                    id = parseInt('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 278), "html", null, true);
            yield "');
                    if (id === usuarioId) {
                        saldoGeneralUSD = parseFloat('";
            // line 280
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 280), "html", null, true);
            yield "');
                        saldoGeneralEUR = parseFloat('";
            // line 281
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 281), "html", null, true);
            yield "');
                        saldoLibroUSD = parseFloat('";
            // line 282
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 282), "html", null, true);
            yield "');
                        saldoLibroEUR = parseFloat('";
            // line 283
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 283), "html", null, true);
            yield "');
                        saldoServicioUSD = parseFloat('";
            // line 284
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 284), "html", null, true);
            yield "');
                        saldoServicioEUR = parseFloat('";
            // line 285
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 285), "html", null, true);
            yield "');
                        acumulado = 0;
                        switch (parseInt(\$('#tipoProductoIngreso').val())) {
                            case 1:
                                if(saldoGeneralUSD !== 0){
                                    acumulado = parseFloat('";
            // line 290
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 290), "html", null, true);
            yield "');
                                }
                                break;
                            case 2:
                                if(saldoGeneralEUR !== 0){
                                    acumulado = parseFloat('";
            // line 295
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 295), "html", null, true);
            yield "');
                                }
                                break;
                            case 3:
                                if(saldoLibroUSD !== 0){
                                    acumulado = parseFloat('";
            // line 300
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 300), "html", null, true);
            yield "');
                                }
                                break;
                            case 4:
                                if(saldoLibroEUR !== 0){
                                    acumulado = parseFloat('";
            // line 305
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 305), "html", null, true);
            yield "');
                                }
                                break;
                            case 5:
                                if(saldoServicioUSD !== 0){
                                    acumulado = parseFloat('";
            // line 310
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 310), "html", null, true);
            yield "');
                                }
                                break;
                            case 6:
                                if(saldoServicioEUR !== 0){
                                    acumulado = parseFloat('";
            // line 315
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 315), "html", null, true);
            yield "');
                                }
                                break;
                        }
                    }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        yield "                \$(\"#modalTitleIngreso\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
            });

            let fichero;
            let siFichero = 0;

            \$('#dataUser tbody').on('click', '.retirar', function () {
                let row = \$(this).parents('tr');
                let fila = table.row(row).data();
                usuarioId = parseInt(row.data('id'));
                nombre = fila[2];
                ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 332, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 333
            yield "                id = parseInt('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 333), "html", null, true);
            yield "');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('";
            // line 335
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 335), "html", null, true);
            yield "');
                    saldoGeneralEUR = parseFloat('";
            // line 336
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 336), "html", null, true);
            yield "');
                    saldoLibroUSD = parseFloat('";
            // line 337
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 337), "html", null, true);
            yield "');
                    saldoLibroEUR = parseFloat('";
            // line 338
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 338), "html", null, true);
            yield "');
                    saldoServicioUSD = parseFloat('";
            // line 339
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 339), "html", null, true);
            yield "');
                    saldoServicioEUR = parseFloat('";
            // line 340
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 340), "html", null, true);
            yield "');
                    acumulado = 0;
                    switch (parseInt(\$('input:radio[name=tipoProducto]:checked').val())) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('";
            // line 345
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 345), "html", null, true);
            yield "');
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('";
            // line 350
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 350), "html", null, true);
            yield "');
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('";
            // line 355
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 355), "html", null, true);
            yield "');
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('";
            // line 360
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 360), "html", null, true);
            yield "');
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('";
            // line 365
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 365), "html", null, true);
            yield "');
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('";
            // line 370
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 370), "html", null, true);
            yield "');
                            }
                            break;
                    }

                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        yield "                \$(\"#modalTitle\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
                limpiarModalRetiro()
                \$('#modalAddRetiroSaldo').modal('show');

            });

            \$(\"#uploadDocumentoRetiro\").on('change', function (e) {
                let fichero = \$(\"#uploadDocumentoRetiro\").val();
                let input = document.getElementById('uploadDocumentoRetiro');
                let file = input.files[0]; //2 000 000
                let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

                if (!allowedExtensions.exec(fichero)) {
                    toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                    \$(\"#uploadDocumentoRetiro\").val('');
                    return false;
                } else if (file.size > 2000000) {
                    toastr[\"error\"]('El tamaño del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                    \$(\"#uploadDocumentoRetiro\").val('');
                    return false;
                } else {
                    //aqui subo el fichero y guardo el nombre
                    let Ruta = Routing.generate('app_fichero_retiro');
                    let form = document.getElementById(\"myformRetiro\");
                    siFichero = 1;

                    \$(\".preload\").removeClass('hidden');

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"json\",
                        data: new FormData(form),
                        contentType: false,
                        processData: false,
                        cache: false
                    }).done(function (data) {
                        \$(\".preload\").addClass('hidden');
                        fichero = data['fichero'];
                    });
                }
            });

            \$('#btnAddGuardar').on('click', function () {

                //Validaciones

                if (\$(\"#tipoProducto\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar un tipo de cuenta, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                if (\$(\"#addRoyaltie\").val() === '') {
                    toastr[\"error\"]('Teclee la cantidad de royaltie a retirar', \"Advertencia\")
                    return false;
                }

                if (\$(\"#addMotivo\").val() === '') {
                    toastr[\"error\"]('Teclee el motivo', \"Advertencia\")
                    return false;
                }

                if (siFichero === 0){
                    fichero = '';
                }else{
                    fichero = document.getElementById('uploadDocumentoRetiro').files[0].name;
                }

                let Ruta = Routing.generate('app_retiro_saldo_acumulado_new');

                \$('#modalAddRetiroSaldo').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idUsuario: usuarioId,
                    royaltie: parseFloat(\$(\"#addRoyaltie\").val()),
                    tipoSaldo: parseInt(\$(\"#tipoProducto\").val()),
                    motivo: \$(\"#addMotivo\").val(),
                    saldoAcumulado: acumulado,
                    fichero: fichero
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        toastr[\"success\"]('Retiro de saldo registrado', \"Notificación\")
                        window.location.href = \"";
        // line 469
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });
            });

            \$('#dataUser tbody').on('click', '.ingresar', function () {
                let row = \$(this).parents('tr');
                let fila = table.row(row).data();
                usuarioId = parseInt(row.data('id'));
                nombre = fila[2];
                ";
        // line 481
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 481, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 482
            yield "                id = parseInt('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 482), "html", null, true);
            yield "');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('";
            // line 484
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 484), "html", null, true);
            yield "');
                    saldoGeneralEUR = parseFloat('";
            // line 485
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 485), "html", null, true);
            yield "');
                    saldoLibroUSD = parseFloat('";
            // line 486
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 486), "html", null, true);
            yield "');
                    saldoLibroEUR = parseFloat('";
            // line 487
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 487), "html", null, true);
            yield "');
                    saldoServicioUSD = parseFloat('";
            // line 488
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 488), "html", null, true);
            yield "');
                    saldoServicioEUR = parseFloat('";
            // line 489
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 489), "html", null, true);
            yield "');
                    acumulado = 0;
                    switch (parseInt(\$('input:radio[name=tipoProductoIngreso]:checked').val())) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('";
            // line 494
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 494), "html", null, true);
            yield "');
                                tipoSaldo = 1;
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('";
            // line 500
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 500), "html", null, true);
            yield "');
                                tipoSaldo = 2;
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('";
            // line 506
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 506), "html", null, true);
            yield "');
                                tipoSaldo = 3;
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('";
            // line 512
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 512), "html", null, true);
            yield "');
                                tipoSaldo = 4;
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('";
            // line 518
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 518), "html", null, true);
            yield "');
                                tipoSaldo = 5;
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('";
            // line 524
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 524), "html", null, true);
            yield "');
                                tipoSaldo = 6;
                            }
                            break;
                    }

                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        yield "                \$(\"#modalTitleIngreso\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
                limpiarModalIngreso();
                \$('#modalAddIngresoSaldo').modal('show');

            });

            \$(\"#uploadDocumentoIngreso\").on('change', function (e) {
                let fichero = \$(\"#uploadDocumentoIngreso\").val();
                let input = document.getElementById('uploadDocumentoIngreso');
                let file = input.files[0]; //2 000 000
                let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

                if (!allowedExtensions.exec(fichero)) {
                    toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                    \$(\"#uploadDocumentoIngreso\").val('');
                    return false;
                } else if (file.size > 2000000) {
                    toastr[\"error\"]('El tamaño del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                    \$(\"#uploadDocumentoIngreso\").val('');
                    return false;
                } else {
                    //aqui subo el fichero y guardo el nombre
                    let Ruta = Routing.generate('app_fichero_ingreso');
                    let form = document.getElementById(\"myformIngreso\");
                    siFichero = 1;

                    \$(\".preload\").removeClass('hidden');

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"json\",
                        data: new FormData(form),
                        contentType: false,
                        processData: false,
                        cache: false
                    }).done(function (data) {
                        \$(\".preload\").addClass('hidden');
                        fichero = data['fichero'];
                    });
                }
            });

            \$('#btnAddGuardarIngreso').on('click', function () {

                //Validaciones

                if (\$(\"#tipoProductoIngreso\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar un tipo de cuenta, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                if (\$(\"#addRoyaltieIngreso\").val() === '') {
                    toastr[\"error\"]('Teclee la cantidad de royaltie a ingresar', \"Advertencia\")
                    return false;
                }

                if (\$(\"#addMotivoIngreso\").val() === '') {
                    toastr[\"error\"]('Teclee el motivo', \"Advertencia\")
                    return false;
                }

                if (siFichero === 0){
                    fichero = '';
                }else{
                    fichero = document.getElementById('uploadDocumentoIngreso').files[0].name;
                }

                let Ruta = Routing.generate('app_ingreso_saldo_acumulado_new');

                \$('#modalAddIngresoSaldo').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idUsuario: usuarioId,
                    royaltie: parseFloat(\$(\"#addRoyaltieIngreso\").val()),
                    tipoSaldo: parseInt(\$(\"#tipoProductoIngreso\").val()),
                    motivo: \$(\"#addMotivoIngreso\").val(),
                    saldoAcumulado: acumulado,
                    fichero: fichero
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        toastr[\"success\"]('Ingreso de saldo registrado', \"Notificación\")
                        window.location.href = \"";
        // line 624
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });
            });

            \$('#dataUser tbody').on('click', '.delete', function () {

                let row = \$(this).parents('tr');

                let mat_datos = {id: row.data('id')};

                let Ruta = Routing.generate('app_user_delete');

                let opcion = confirm(\"Esta seguro que desea eliminar el usuario seleccionado?\");
                if (opcion === true) {
                    \$(\".preload\").removeClass('hidden');

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"html\",
                        data: mat_datos,
                    }).done(function (data) {
                        \$(\".preload\").addClass('hidden');
                        if (data === 'ok') {
                            toastr[\"success\"]('Se ha borrado el usuario seleccionado', \"Notificación\")
                            window.location.href = \"";
        // line 652
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\";
                        } else {
                            toastr[\"error\"](data, \"Notificación\")
                        }
                    });
                }

            });

            function limpiarModalIngreso()
            {
                \$('#modalAddIngresoSaldo input').each(function () {
                    \$(this).val('');
                });

                \$('#modalAddIngresoSaldo textarea').each(function () {
                    \$(this).val('');
                });
                \$('#tipoProductoIngreso').val(0);
            }

            function limpiarModalRetiro()
            {
                \$('#modalAddRetiroSaldo input').each(function () {
                    \$(this).val('');
                });

                \$('#modalAddRetiroSaldo textarea').each(function () {
                    \$(this).val('');
                });
                \$('#tipoProducto').val(0);
            }

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
        return "user/index.html.twig";
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
        return array (  1068 => 652,  1037 => 624,  943 => 532,  929 => 524,  920 => 518,  911 => 512,  902 => 506,  893 => 500,  884 => 494,  876 => 489,  872 => 488,  868 => 487,  864 => 486,  860 => 485,  856 => 484,  850 => 482,  846 => 481,  831 => 469,  737 => 377,  724 => 370,  716 => 365,  708 => 360,  700 => 355,  692 => 350,  684 => 345,  676 => 340,  672 => 339,  668 => 338,  664 => 337,  660 => 336,  656 => 335,  650 => 333,  646 => 332,  633 => 321,  621 => 315,  613 => 310,  605 => 305,  597 => 300,  589 => 295,  581 => 290,  573 => 285,  569 => 284,  565 => 283,  561 => 282,  557 => 281,  553 => 280,  547 => 278,  543 => 277,  537 => 273,  525 => 267,  517 => 262,  509 => 257,  501 => 252,  493 => 247,  485 => 242,  477 => 237,  473 => 236,  469 => 235,  465 => 234,  461 => 233,  457 => 232,  451 => 230,  447 => 229,  364 => 149,  360 => 148,  355 => 146,  351 => 145,  347 => 144,  343 => 143,  337 => 141,  330 => 140,  319 => 136,  315 => 135,  305 => 127,  296 => 123,  276 => 108,  266 => 101,  257 => 95,  243 => 84,  239 => 83,  235 => 82,  230 => 81,  227 => 80,  223 => 78,  219 => 76,  216 => 75,  213 => 74,  209 => 72,  203 => 69,  200 => 68,  198 => 67,  193 => 66,  190 => 65,  184 => 64,  181 => 63,  178 => 62,  175 => 61,  172 => 60,  169 => 59,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  150 => 54,  125 => 32,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listado de Usuarios{% endblock %}

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
                            <h3>Listado de Usuarios Activos</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"{{ path('app_user_form_new') }}\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><i
                                        class=\"fa fa-user-plus\"></i> Crear Nuevo Usuario
                            </button>
                        </a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataUser\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Avatar</th>
                                        <th>Rol</th>
                                        <th>Nombre</th>
                                        <th>Empresa</th>
                                        <th>Productos asignados</th>
                                        <th>Servicios asignados</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for user in users %}
                                        {% set cantProductos = 0 %}
                                        {% set cantServicios = 0 %}
                                        {% if user.productos|length > 0 %}
                                            {% for producto in user.productos %}
                                                {% if (producto.tipoProducto == 1 or producto.tipoProducto == 2) and producto.isActive == 1 %}
                                                    {% set cantProductos = cantProductos + 1 %}
                                                {% elseif producto.tipoProducto == 3 and producto.isActive == 1 %}
                                                    {% set cantServicios = cantServicios + 1 %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                        <tr data-id=\"{{ user.id }}\">
                                            {% if user.avatar %}
                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"{{ asset('uploads/' ~ user.avatar) }}\"
                                                         alt=\"Avatar Usuario\"></td>
                                            {% else %}
                                                <td>-</td>
                                            {% endif %}
                                            {% if user.roles %}
                                                {% if user.roles[0] == 'ROLE_ADMIN' %}
                                                    <td>Administrador</td>
                                                {% else %}
                                                    <td>Usuario</td>
                                                {% endif %}
                                            {% endif %}
                                            <td>{{ user.nombre ~ ' ' ~ user.apellidos }}</td>
                                            <td>{{ user.empresa }}</td>
                                            <td>{{ cantProductos }}</td>
                                            <td>{{ cantServicios }}</td>
                                            <td style=\"margin: 0 auto;\">
                                                <button class=\"btn btn-secondary ingresar\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Ingresar saldo\"><i
                                                            class=\"fas fa-dollar-sign\"></i>
                                                </button>
                                                <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                                        title=\"Retirar saldo\">
                                                    <i class=\"fas fa-exchange-alt\"></i>
                                                </button>
                                                <a href=\"{{ path('app_user_show', {'id': user.id}) }}\">
                                                    <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                                <a href=\"{{ path('app_reset_form_new', {'id': user.id}) }}\">
                                                    <button class=\"btn btn-warning\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Restear contraseña\"><i
                                                                class=\"fas fa-lock\"></i>
                                                    </button>
                                                </a>
                                                <a href=\"{{ path('app_user_form_edit', {'id': user.id}) }}\">
                                                    <button class=\"btn btn-success\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Editar\"><i
                                                                class=\"fas fa-edit\"></i>
                                                    </button>
                                                </a>
                                                <button class=\"btn btn-danger delete\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Eliminar\"><i
                                                            class=\"fas fa-trash\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"15\">No se encontraron registros</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ include('user/modalAddRetiroSaldo.html.twig') }}
        {{ include('user/modalAddIngresoSaldo.html.twig') }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- DataTables -->
    <script src=\"{{ asset('plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script>
        \$(function () {

            let table = \$('#dataUser').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[8], [8]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"scrollY\": 300,
                \"scrollCollapse\": true
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
                \"hideDuration\": \"1000\",
                \"timeOut\": \"5000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            let nombre, id, saldoGeneralUSD, saldoGeneralEUR, saldoLibroUSD, saldoLibroEUR, saldoServicioUSD,
                saldoServicioEUR, usuarioId, acumulado;

            \$('#addRoyaltie').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#addRoyaltie').val().length;
                    let index = \$('#addRoyaltie').val().indexOf('.');

                    if (index > 0 && tecla.charCode === 46) {
                        return false;
                    }

                    if (index > 0) {
                        let CharAfterdot = (len + 1) - index;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$('#addRoyaltieIngreso').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#addRoyaltieIngreso').val().length;
                    let index = \$('#addRoyaltieIngreso').val().indexOf('.');

                    if (index > 0 && tecla.charCode === 46) {
                        return false;
                    }

                    if (index > 0) {
                        let CharAfterdot = (len + 1) - index;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$('#tipoProducto').on('change', function () {
                {% for user in users %}
                id = parseInt('{{ user.id }}');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('{{ user.saldoGeneralUSD }}');
                    saldoGeneralEUR = parseFloat('{{ user.saldoGeneralEUR }}');
                    saldoLibroUSD = parseFloat('{{ user.saldoLibroUSD }}');
                    saldoLibroEUR = parseFloat('{{ user.saldoLibroEUR }}');
                    saldoServicioUSD = parseFloat('{{ user.saldoServicioUSD }}');
                    saldoServicioEUR = parseFloat('{{ user.saldoServicioEUR }}');
                    acumulado = 0;
                    switch (parseInt(\$('#tipoProducto').val())) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('{{ user.saldoGeneralUSD }}');
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('{{ user.saldoGeneralEUR }}');
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('{{ user.saldoLibroUSD }}');
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('{{ user.saldoLibroEUR }}');
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('{{ user.saldoServicioUSD }}');
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('{{ user.saldoServicioEUR }}');
                            }
                            break;
                    }
                }
                {% endfor %}
                \$(\"#modalTitle\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
            });

            \$('#tipoProductoIngreso').on('change', function () {
                {% for user in users %}
                    id = parseInt('{{ user.id }}');
                    if (id === usuarioId) {
                        saldoGeneralUSD = parseFloat('{{ user.saldoGeneralUSD }}');
                        saldoGeneralEUR = parseFloat('{{ user.saldoGeneralEUR }}');
                        saldoLibroUSD = parseFloat('{{ user.saldoLibroUSD }}');
                        saldoLibroEUR = parseFloat('{{ user.saldoLibroEUR }}');
                        saldoServicioUSD = parseFloat('{{ user.saldoServicioUSD }}');
                        saldoServicioEUR = parseFloat('{{ user.saldoServicioEUR }}');
                        acumulado = 0;
                        switch (parseInt(\$('#tipoProductoIngreso').val())) {
                            case 1:
                                if(saldoGeneralUSD !== 0){
                                    acumulado = parseFloat('{{ user.saldoGeneralUSD }}');
                                }
                                break;
                            case 2:
                                if(saldoGeneralEUR !== 0){
                                    acumulado = parseFloat('{{ user.saldoGeneralEUR }}');
                                }
                                break;
                            case 3:
                                if(saldoLibroUSD !== 0){
                                    acumulado = parseFloat('{{ user.saldoLibroUSD }}');
                                }
                                break;
                            case 4:
                                if(saldoLibroEUR !== 0){
                                    acumulado = parseFloat('{{ user.saldoLibroEUR }}');
                                }
                                break;
                            case 5:
                                if(saldoServicioUSD !== 0){
                                    acumulado = parseFloat('{{ user.saldoServicioUSD }}');
                                }
                                break;
                            case 6:
                                if(saldoServicioEUR !== 0){
                                    acumulado = parseFloat('{{ user.saldoServicioEUR }}');
                                }
                                break;
                        }
                    }
                {% endfor %}
                \$(\"#modalTitleIngreso\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
            });

            let fichero;
            let siFichero = 0;

            \$('#dataUser tbody').on('click', '.retirar', function () {
                let row = \$(this).parents('tr');
                let fila = table.row(row).data();
                usuarioId = parseInt(row.data('id'));
                nombre = fila[2];
                {% for user in users %}
                id = parseInt('{{ user.id }}');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('{{ user.saldoGeneralUSD }}');
                    saldoGeneralEUR = parseFloat('{{ user.saldoGeneralEUR }}');
                    saldoLibroUSD = parseFloat('{{ user.saldoLibroUSD }}');
                    saldoLibroEUR = parseFloat('{{ user.saldoLibroEUR }}');
                    saldoServicioUSD = parseFloat('{{ user.saldoServicioUSD }}');
                    saldoServicioEUR = parseFloat('{{ user.saldoServicioEUR }}');
                    acumulado = 0;
                    switch (parseInt(\$('input:radio[name=tipoProducto]:checked').val())) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('{{ user.saldoGeneralUSD }}');
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('{{ user.saldoGeneralEUR }}');
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('{{ user.saldoLibroUSD }}');
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('{{ user.saldoLibroEUR }}');
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('{{ user.saldoServicioUSD }}');
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('{{ user.saldoServicioEUR }}');
                            }
                            break;
                    }

                }
                {% endfor %}
                \$(\"#modalTitle\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
                limpiarModalRetiro()
                \$('#modalAddRetiroSaldo').modal('show');

            });

            \$(\"#uploadDocumentoRetiro\").on('change', function (e) {
                let fichero = \$(\"#uploadDocumentoRetiro\").val();
                let input = document.getElementById('uploadDocumentoRetiro');
                let file = input.files[0]; //2 000 000
                let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

                if (!allowedExtensions.exec(fichero)) {
                    toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                    \$(\"#uploadDocumentoRetiro\").val('');
                    return false;
                } else if (file.size > 2000000) {
                    toastr[\"error\"]('El tamaño del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                    \$(\"#uploadDocumentoRetiro\").val('');
                    return false;
                } else {
                    //aqui subo el fichero y guardo el nombre
                    let Ruta = Routing.generate('app_fichero_retiro');
                    let form = document.getElementById(\"myformRetiro\");
                    siFichero = 1;

                    \$(\".preload\").removeClass('hidden');

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"json\",
                        data: new FormData(form),
                        contentType: false,
                        processData: false,
                        cache: false
                    }).done(function (data) {
                        \$(\".preload\").addClass('hidden');
                        fichero = data['fichero'];
                    });
                }
            });

            \$('#btnAddGuardar').on('click', function () {

                //Validaciones

                if (\$(\"#tipoProducto\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar un tipo de cuenta, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                if (\$(\"#addRoyaltie\").val() === '') {
                    toastr[\"error\"]('Teclee la cantidad de royaltie a retirar', \"Advertencia\")
                    return false;
                }

                if (\$(\"#addMotivo\").val() === '') {
                    toastr[\"error\"]('Teclee el motivo', \"Advertencia\")
                    return false;
                }

                if (siFichero === 0){
                    fichero = '';
                }else{
                    fichero = document.getElementById('uploadDocumentoRetiro').files[0].name;
                }

                let Ruta = Routing.generate('app_retiro_saldo_acumulado_new');

                \$('#modalAddRetiroSaldo').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idUsuario: usuarioId,
                    royaltie: parseFloat(\$(\"#addRoyaltie\").val()),
                    tipoSaldo: parseInt(\$(\"#tipoProducto\").val()),
                    motivo: \$(\"#addMotivo\").val(),
                    saldoAcumulado: acumulado,
                    fichero: fichero
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        toastr[\"success\"]('Retiro de saldo registrado', \"Notificación\")
                        window.location.href = \"{{ path('app_user_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });
            });

            \$('#dataUser tbody').on('click', '.ingresar', function () {
                let row = \$(this).parents('tr');
                let fila = table.row(row).data();
                usuarioId = parseInt(row.data('id'));
                nombre = fila[2];
                {% for user in users %}
                id = parseInt('{{ user.id }}');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('{{ user.saldoGeneralUSD }}');
                    saldoGeneralEUR = parseFloat('{{ user.saldoGeneralEUR }}');
                    saldoLibroUSD = parseFloat('{{ user.saldoLibroUSD }}');
                    saldoLibroEUR = parseFloat('{{ user.saldoLibroEUR }}');
                    saldoServicioUSD = parseFloat('{{ user.saldoServicioUSD }}');
                    saldoServicioEUR = parseFloat('{{ user.saldoServicioEUR }}');
                    acumulado = 0;
                    switch (parseInt(\$('input:radio[name=tipoProductoIngreso]:checked').val())) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('{{ user.saldoGeneralUSD }}');
                                tipoSaldo = 1;
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('{{ user.saldoGeneralEUR }}');
                                tipoSaldo = 2;
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('{{ user.saldoLibroUSD }}');
                                tipoSaldo = 3;
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('{{ user.saldoLibroEUR }}');
                                tipoSaldo = 4;
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('{{ user.saldoServicioUSD }}');
                                tipoSaldo = 5;
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('{{ user.saldoServicioEUR }}');
                                tipoSaldo = 6;
                            }
                            break;
                    }

                }
                {% endfor %}
                \$(\"#modalTitleIngreso\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
                limpiarModalIngreso();
                \$('#modalAddIngresoSaldo').modal('show');

            });

            \$(\"#uploadDocumentoIngreso\").on('change', function (e) {
                let fichero = \$(\"#uploadDocumentoIngreso\").val();
                let input = document.getElementById('uploadDocumentoIngreso');
                let file = input.files[0]; //2 000 000
                let allowedExtensions = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png)\$/i;

                if (!allowedExtensions.exec(fichero)) {
                    toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .docx, .xlsx, .pptx .pdf, .jpg, .png.', \"Advertencia\")
                    \$(\"#uploadDocumentoIngreso\").val('');
                    return false;
                } else if (file.size > 2000000) {
                    toastr[\"error\"]('El tamaño del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                    \$(\"#uploadDocumentoIngreso\").val('');
                    return false;
                } else {
                    //aqui subo el fichero y guardo el nombre
                    let Ruta = Routing.generate('app_fichero_ingreso');
                    let form = document.getElementById(\"myformIngreso\");
                    siFichero = 1;

                    \$(\".preload\").removeClass('hidden');

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"json\",
                        data: new FormData(form),
                        contentType: false,
                        processData: false,
                        cache: false
                    }).done(function (data) {
                        \$(\".preload\").addClass('hidden');
                        fichero = data['fichero'];
                    });
                }
            });

            \$('#btnAddGuardarIngreso').on('click', function () {

                //Validaciones

                if (\$(\"#tipoProductoIngreso\").val() === '0') {
                    toastr[\"error\"]('Debe seleccionar un tipo de cuenta, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                if (\$(\"#addRoyaltieIngreso\").val() === '') {
                    toastr[\"error\"]('Teclee la cantidad de royaltie a ingresar', \"Advertencia\")
                    return false;
                }

                if (\$(\"#addMotivoIngreso\").val() === '') {
                    toastr[\"error\"]('Teclee el motivo', \"Advertencia\")
                    return false;
                }

                if (siFichero === 0){
                    fichero = '';
                }else{
                    fichero = document.getElementById('uploadDocumentoIngreso').files[0].name;
                }

                let Ruta = Routing.generate('app_ingreso_saldo_acumulado_new');

                \$('#modalAddIngresoSaldo').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idUsuario: usuarioId,
                    royaltie: parseFloat(\$(\"#addRoyaltieIngreso\").val()),
                    tipoSaldo: parseInt(\$(\"#tipoProductoIngreso\").val()),
                    motivo: \$(\"#addMotivoIngreso\").val(),
                    saldoAcumulado: acumulado,
                    fichero: fichero
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        toastr[\"success\"]('Ingreso de saldo registrado', \"Notificación\")
                        window.location.href = \"{{ path('app_user_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });
            });

            \$('#dataUser tbody').on('click', '.delete', function () {

                let row = \$(this).parents('tr');

                let mat_datos = {id: row.data('id')};

                let Ruta = Routing.generate('app_user_delete');

                let opcion = confirm(\"Esta seguro que desea eliminar el usuario seleccionado?\");
                if (opcion === true) {
                    \$(\".preload\").removeClass('hidden');

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"html\",
                        data: mat_datos,
                    }).done(function (data) {
                        \$(\".preload\").addClass('hidden');
                        if (data === 'ok') {
                            toastr[\"success\"]('Se ha borrado el usuario seleccionado', \"Notificación\")
                            window.location.href = \"{{ path('app_user_index') }}\";
                        } else {
                            toastr[\"error\"](data, \"Notificación\")
                        }
                    });
                }

            });

            function limpiarModalIngreso()
            {
                \$('#modalAddIngresoSaldo input').each(function () {
                    \$(this).val('');
                });

                \$('#modalAddIngresoSaldo textarea').each(function () {
                    \$(this).val('');
                });
                \$('#tipoProductoIngreso').val(0);
            }

            function limpiarModalRetiro()
            {
                \$('#modalAddRetiroSaldo input').each(function () {
                    \$(this).val('');
                });

                \$('#modalAddRetiroSaldo textarea').each(function () {
                    \$(this).val('');
                });
                \$('#tipoProducto').val(0);
            }

        });
    </script>
{% endblock %}
", "user/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\user\\index.html.twig");
    }
}
