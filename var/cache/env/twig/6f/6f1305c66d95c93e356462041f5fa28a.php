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

/* user/index.html.twig */
class __TwigTemplate_85ed1fd95250c2567b2a13ed063855c2 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de Usuarios";
        
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
                            <h3>Listado de Usuarios Activos</h3>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_new");
        echo "\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 55
            echo "                                        ";
            $context["cantProductos"] = 0;
            // line 56
            echo "                                        ";
            $context["cantServicios"] = 0;
            // line 57
            echo "                                        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "productos", [], "any", false, false, false, 57)) > 0)) {
                // line 58
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "productos", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                    // line 59
                    echo "                                                ";
                    if ((((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 59) == 1) || (twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 59) == 2)) && (twig_get_attribute($this->env, $this->source, $context["producto"], "isActive", [], "any", false, false, false, 59) == 1))) {
                        // line 60
                        echo "                                                    ";
                        $context["cantProductos"] = ((isset($context["cantProductos"]) || array_key_exists("cantProductos", $context) ? $context["cantProductos"] : (function () { throw new RuntimeError('Variable "cantProductos" does not exist.', 60, $this->source); })()) + 1);
                        // line 61
                        echo "                                                ";
                    } elseif (((twig_get_attribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 61) == 3) && (twig_get_attribute($this->env, $this->source, $context["producto"], "isActive", [], "any", false, false, false, 61) == 1))) {
                        // line 62
                        echo "                                                    ";
                        $context["cantServicios"] = ((isset($context["cantServicios"]) || array_key_exists("cantServicios", $context) ? $context["cantServicios"] : (function () { throw new RuntimeError('Variable "cantServicios" does not exist.', 62, $this->source); })()) + 1);
                        // line 63
                        echo "                                                ";
                    }
                    // line 64
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                                        ";
            }
            // line 66
            echo "                                        <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\">
                                            ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 67)) {
                // line 68
                echo "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 69))), "html", null, true);
                echo "\"
                                                         alt=\"Avatar Usuario\"></td>
                                            ";
            } else {
                // line 72
                echo "                                                <td>-</td>
                                            ";
            }
            // line 74
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 74)) {
                // line 75
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 75), 0, [], "array", false, false, false, 75) == "ROLE_ADMIN")) {
                    // line 76
                    echo "                                                    <td>Administrador</td>
                                                ";
                } else {
                    // line 78
                    echo "                                                    <td>Usuario</td>
                                                ";
                }
                // line 80
                echo "                                            ";
            }
            // line 81
            echo "                                            <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 81) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "apellidos", [], "any", false, false, false, 81)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "empresa", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                            <td>";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["cantProductos"]) || array_key_exists("cantProductos", $context) ? $context["cantProductos"] : (function () { throw new RuntimeError('Variable "cantProductos" does not exist.', 83, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["cantServicios"]) || array_key_exists("cantServicios", $context) ? $context["cantServicios"] : (function () { throw new RuntimeError('Variable "cantServicios" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "</td>
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                                <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_form_new", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-warning\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Restear contraseña\"><i
                                                                class=\"fas fa-lock\"></i>
                                                    </button>
                                                </a>
                                                <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\">
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
            echo "                                        <tr>
                                            <td colspan=\"15\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 135
        echo twig_include($this->env, $context, "user/modalAddRetiroSaldo.html.twig");
        echo "
        ";
        // line 136
        echo twig_include($this->env, $context, "user/modalAddIngresoSaldo.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 140
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 141
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- DataTables -->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 230
            echo "                id = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 230), "html", null, true);
            echo "');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 232), "html", null, true);
            echo "');
                    saldoGeneralEUR = parseFloat('";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 233), "html", null, true);
            echo "');
                    saldoLibroUSD = parseFloat('";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 234), "html", null, true);
            echo "');
                    saldoLibroEUR = parseFloat('";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 235), "html", null, true);
            echo "');
                    saldoServicioUSD = parseFloat('";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 236), "html", null, true);
            echo "');
                    saldoServicioEUR = parseFloat('";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 237), "html", null, true);
            echo "');
                    acumulado = 0;
                    switch (parseInt(\$('#tipoProducto').val())) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 242), "html", null, true);
            echo "');
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 247), "html", null, true);
            echo "');
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 252), "html", null, true);
            echo "');
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 257), "html", null, true);
            echo "');
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 262), "html", null, true);
            echo "');
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 267), "html", null, true);
            echo "');
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
        echo "                \$(\"#modalTitle\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
            });

            \$('#tipoProductoIngreso').on('change', function () {
                ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 277, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 278
            echo "                    id = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 278), "html", null, true);
            echo "');
                    if (id === usuarioId) {
                        saldoGeneralUSD = parseFloat('";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 280), "html", null, true);
            echo "');
                        saldoGeneralEUR = parseFloat('";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 281), "html", null, true);
            echo "');
                        saldoLibroUSD = parseFloat('";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 282), "html", null, true);
            echo "');
                        saldoLibroEUR = parseFloat('";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 283), "html", null, true);
            echo "');
                        saldoServicioUSD = parseFloat('";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 284), "html", null, true);
            echo "');
                        saldoServicioEUR = parseFloat('";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 285), "html", null, true);
            echo "');
                        acumulado = 0;
                        switch (parseInt(\$('#tipoProductoIngreso').val())) {
                            case 1:
                                if(saldoGeneralUSD !== 0){
                                    acumulado = parseFloat('";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 290), "html", null, true);
            echo "');
                                }
                                break;
                            case 2:
                                if(saldoGeneralEUR !== 0){
                                    acumulado = parseFloat('";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 295), "html", null, true);
            echo "');
                                }
                                break;
                            case 3:
                                if(saldoLibroUSD !== 0){
                                    acumulado = parseFloat('";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 300), "html", null, true);
            echo "');
                                }
                                break;
                            case 4:
                                if(saldoLibroEUR !== 0){
                                    acumulado = parseFloat('";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 305), "html", null, true);
            echo "');
                                }
                                break;
                            case 5:
                                if(saldoServicioUSD !== 0){
                                    acumulado = parseFloat('";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 310), "html", null, true);
            echo "');
                                }
                                break;
                            case 6:
                                if(saldoServicioEUR !== 0){
                                    acumulado = parseFloat('";
            // line 315
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 315), "html", null, true);
            echo "');
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
        echo "                \$(\"#modalTitleIngreso\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 332, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 333
            echo "                id = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 333), "html", null, true);
            echo "');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('";
            // line 335
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 335), "html", null, true);
            echo "');
                    saldoGeneralEUR = parseFloat('";
            // line 336
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 336), "html", null, true);
            echo "');
                    saldoLibroUSD = parseFloat('";
            // line 337
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 337), "html", null, true);
            echo "');
                    saldoLibroEUR = parseFloat('";
            // line 338
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 338), "html", null, true);
            echo "');
                    saldoServicioUSD = parseFloat('";
            // line 339
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 339), "html", null, true);
            echo "');
                    saldoServicioEUR = parseFloat('";
            // line 340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 340), "html", null, true);
            echo "');
                    acumulado = 0;
                    switch (parseInt(\$('input:radio[name=tipoProducto]:checked').val())) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('";
            // line 345
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 345), "html", null, true);
            echo "');
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 350), "html", null, true);
            echo "');
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('";
            // line 355
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 355), "html", null, true);
            echo "');
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 360), "html", null, true);
            echo "');
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 365), "html", null, true);
            echo "');
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('";
            // line 370
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 370), "html", null, true);
            echo "');
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
        echo "                \$(\"#modalTitle\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\";
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 481, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 482
            echo "                id = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 482), "html", null, true);
            echo "');
                if (id === usuarioId) {
                    saldoGeneralUSD = parseFloat('";
            // line 484
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 484), "html", null, true);
            echo "');
                    saldoGeneralEUR = parseFloat('";
            // line 485
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 485), "html", null, true);
            echo "');
                    saldoLibroUSD = parseFloat('";
            // line 486
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 486), "html", null, true);
            echo "');
                    saldoLibroEUR = parseFloat('";
            // line 487
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 487), "html", null, true);
            echo "');
                    saldoServicioUSD = parseFloat('";
            // line 488
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 488), "html", null, true);
            echo "');
                    saldoServicioEUR = parseFloat('";
            // line 489
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 489), "html", null, true);
            echo "');
                    acumulado = 0;
                    switch (parseInt(\$('input:radio[name=tipoProductoIngreso]:checked').val())) {
                        case 1:
                            if(saldoGeneralUSD !== 0){
                                acumulado = parseFloat('";
            // line 494
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralUSD", [], "any", false, false, false, 494), "html", null, true);
            echo "');
                                tipoSaldo = 1;
                            }
                            break;
                        case 2:
                            if(saldoGeneralEUR !== 0){
                                acumulado = parseFloat('";
            // line 500
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoGeneralEUR", [], "any", false, false, false, 500), "html", null, true);
            echo "');
                                tipoSaldo = 2;
                            }
                            break;
                        case 3:
                            if(saldoLibroUSD !== 0){
                                acumulado = parseFloat('";
            // line 506
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroUSD", [], "any", false, false, false, 506), "html", null, true);
            echo "');
                                tipoSaldo = 3;
                            }
                            break;
                        case 4:
                            if(saldoLibroEUR !== 0){
                                acumulado = parseFloat('";
            // line 512
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoLibroEUR", [], "any", false, false, false, 512), "html", null, true);
            echo "');
                                tipoSaldo = 4;
                            }
                            break;
                        case 5:
                            if(saldoServicioUSD !== 0){
                                acumulado = parseFloat('";
            // line 518
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioUSD", [], "any", false, false, false, 518), "html", null, true);
            echo "');
                                tipoSaldo = 5;
                            }
                            break;
                        case 6:
                            if(saldoServicioEUR !== 0){
                                acumulado = parseFloat('";
            // line 524
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "saldoServicioEUR", [], "any", false, false, false, 524), "html", null, true);
            echo "');
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
        echo "                \$(\"#modalTitleIngreso\").text(\"SALDO ACUMULADO DE \" + nombre.toUpperCase() + \" \" + acumulado);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\";
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

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1064 => 652,  1033 => 624,  939 => 532,  925 => 524,  916 => 518,  907 => 512,  898 => 506,  889 => 500,  880 => 494,  872 => 489,  868 => 488,  864 => 487,  860 => 486,  856 => 485,  852 => 484,  846 => 482,  842 => 481,  827 => 469,  733 => 377,  720 => 370,  712 => 365,  704 => 360,  696 => 355,  688 => 350,  680 => 345,  672 => 340,  668 => 339,  664 => 338,  660 => 337,  656 => 336,  652 => 335,  646 => 333,  642 => 332,  629 => 321,  617 => 315,  609 => 310,  601 => 305,  593 => 300,  585 => 295,  577 => 290,  569 => 285,  565 => 284,  561 => 283,  557 => 282,  553 => 281,  549 => 280,  543 => 278,  539 => 277,  533 => 273,  521 => 267,  513 => 262,  505 => 257,  497 => 252,  489 => 247,  481 => 242,  473 => 237,  469 => 236,  465 => 235,  461 => 234,  457 => 233,  453 => 232,  447 => 230,  443 => 229,  360 => 149,  356 => 148,  351 => 146,  347 => 145,  343 => 144,  339 => 143,  333 => 141,  326 => 140,  316 => 136,  312 => 135,  302 => 127,  293 => 123,  273 => 108,  263 => 101,  254 => 95,  240 => 84,  236 => 83,  232 => 82,  227 => 81,  224 => 80,  220 => 78,  216 => 76,  213 => 75,  210 => 74,  206 => 72,  200 => 69,  197 => 68,  195 => 67,  190 => 66,  187 => 65,  181 => 64,  178 => 63,  175 => 62,  172 => 61,  169 => 60,  166 => 59,  161 => 58,  158 => 57,  155 => 56,  152 => 55,  147 => 54,  122 => 32,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
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
