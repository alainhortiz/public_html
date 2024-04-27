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

/* estado/index.html.twig */
class __TwigTemplate_b1e008d2379dab7fe2f9b7e720ccb00f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "estado/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "estado/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Estado de Cuentas";
        
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
                            <h3>Listado de Usuarios</h3>
                        </div>
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
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                                        <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
                                            ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 47)) {
                // line 48
                echo "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 49))), "html", null, true);
                echo "\"
                                                         alt=\"Avatar Usuario\"></td>
                                            ";
            } else {
                // line 52
                echo "                                                <td>-</td>
                                            ";
            }
            // line 54
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 54)) {
                // line 55
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 55), 0, [], "array", false, false, false, 55) == "ROLE_ADMIN")) {
                    // line 56
                    echo "                                                    <td>Administrador</td>
                                                ";
                } else {
                    // line 58
                    echo "                                                    <td>Usuario</td>
                                                ";
                }
                // line 60
                echo "                                            ";
            }
            // line 61
            echo "                                            <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 61) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "apellidos", [], "any", false, false, false, 61)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "empresa", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                            <td style=\"margin: 0 auto;\">
                                                <div>
                                                    <button class=\"btn btn-primary usd\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Ver cuenta en dólares\"><i
                                                                class=\"fas fa-dollar-sign\"></i>
                                                    </button>
                                                    <button class=\"btn btn-secondary eur\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Ver cuenta en euros\"><i
                                                                class=\"fas fa-euro-sign\"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                                        <tr>
                                            <td colspan=\"5\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row\" id=\"tablaMovimientos\" style=\"display: none\">
                            <div class=\"card-title\">
                                <h3 id=\"mostrarMovimientos\">Movimientos</h3>
                            </div>
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataMovimientos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th class=\"hidden\">id</th>
                                        <th>Fecha</th>
                                        <th>Acumulado</th>
                                        <th>Acción</th>
                                        <th>Código Venta</th>
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

    // line 113
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- DataTables -->
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script>
        \$(function () {

            let tableUser = \$('#dataUser').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[8], [8]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            let tableMovimiento = \$('#dataMovimientos').DataTable({
                \"paging\": true,
                \"order\": [0, \"desc\"],
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[8], [8]],
                \"ordering\": true,
                \"info\": true,
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
                \"hideDuration\": \"1000\",
                \"timeOut\": \"5000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            //Declaracion de variables
            let idUsuario, id, tipoMoneda, accion;
            let movimientos = [];

            \$('#dataUser tbody').on('click', '.usd', function () {
                let row = \$(this).parents('tr');
                idUsuario = parseInt(row.data('id'));
                mostrarMovimientos('usd');
            });

            \$('#dataUser tbody').on('click', '.eur', function () {
                let row = \$(this).parents('tr');
                idUsuario = parseInt(row.data('id'));
                mostrarMovimientos('eur');
            });

            function mostrarMovimientos(moneda) {
                movimientos = [];
                ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientos"]) || array_key_exists("movimientos", $context) ? $context["movimientos"] : (function () { throw new RuntimeError('Variable "movimientos" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 186
            echo "                id = parseInt('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movimiento"], "user", [], "any", false, false, false, 186), "id", [], "any", false, false, false, 186), "html", null, true);
            echo "');
                tipoMoneda = '";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "tipodemoneda", [], "any", false, false, false, 187), "html", null, true);
            echo "';
                switch (parseInt('";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "accion", [], "any", false, false, false, 188), "html", null, true);
            echo "')) {
                    case 1:
                        accion = 'Ingreso por concepto de ingreso de royalties';
                        break;
                    case 2:
                        accion = 'Retiro por concepto de retiro de royalties';
                        break;
                    case 3:
                        accion = 'Ingreso por concepto de amortización del producto';
                        break;
                    case 4:
                        accion = 'Ingreso por concepto de beneficio de royalties';
                        break;
                    case 5:
                        accion = 'Retiro por concepto de solicitud de pago de royalties';
                        break;
                    case 6:
                        accion = 'Ingreso por concepto de cancelación de solicitud de pago de royalties';
                        break;
                    case 7:
                        accion = 'Retiro de royalties por concepto de cancelación de venta';
                        break;
                    case 8:
                        accion = 'Retiro de saldo de amortización por concepto de cancelación de venta';
                        break;
                }
                if (id === idUsuario) {
                    if (moneda === 'usd' && tipoMoneda === 'USD') {
                        movimientos.push([
                            '";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "id", [], "any", false, false, false, 217), "html", null, true);
            echo "',
                            '";
            // line 218
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "fecha", [], "any", false, false, false, 218), "Y-m-d h:i:s"), "html", null, true);
            echo "',
                            '";
            // line 219
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "saldo", [], "any", false, false, false, 219), 2, ".", ","), "html", null, true);
            echo "',
                            accion,
                            '";
            // line 221
            ((twig_get_attribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 221)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 221), "codigo", [], "any", false, false, false, 221), "html", null, true))) : (print ("")));
            echo "'
                        ]);
                    } else if (moneda === 'eur' && tipoMoneda === 'EUR') {
                        movimientos.push([
                            '";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "id", [], "any", false, false, false, 225), "html", null, true);
            echo "',
                            '";
            // line 226
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "fecha", [], "any", false, false, false, 226), "Y-m-d h:i:s"), "html", null, true);
            echo "',
                            '";
            // line 227
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimiento"], "saldo", [], "any", false, false, false, 227), 2, ".", ","), "html", null, true);
            echo "',
                            accion,
                            '";
            // line 229
            ((twig_get_attribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 229)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movimiento"], "venta", [], "any", false, false, false, 229), "codigo", [], "any", false, false, false, 229), "html", null, true))) : (print ("")));
            echo "'
                        ]);
                    }
                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "                if (movimientos.length !== 0) {
                    \$('#mostrarMovimientos').text('Movimientos de lo acumulado en la cuenta en ' + moneda.toUpperCase());
                    \$('#tablaMovimientos').css(\"display\", \"block\");
                    tableMovimiento = \$('#dataMovimientos').DataTable({
                        destroy: true,
                        data: movimientos,
                        columns: [
                            {class: \"hidden\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"}
                        ],
                        \"order\": [0, \"desc\"],
                        \"lengthMenu\": [[6], [6]]
                    });
                } else {
                    \$('#tablaMovimientos').css(\"display\", \"none\");
                    toastr[\"info\"]('Esta cuenta no tiene movimientos.', \"Información\")
                    return false;
                }
            }

        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "estado/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 234,  426 => 229,  421 => 227,  417 => 226,  413 => 225,  406 => 221,  401 => 219,  397 => 218,  393 => 217,  361 => 188,  357 => 187,  352 => 186,  348 => 185,  282 => 122,  278 => 121,  273 => 119,  269 => 118,  265 => 117,  261 => 116,  255 => 114,  248 => 113,  213 => 83,  204 => 79,  182 => 62,  177 => 61,  174 => 60,  170 => 58,  166 => 56,  163 => 55,  160 => 54,  156 => 52,  150 => 49,  147 => 48,  145 => 47,  140 => 46,  135 => 45,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Estado de Cuentas{% endblock %}

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
                            <h3>Listado de Usuarios</h3>
                        </div>
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
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for user in users %}
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
                                            <td style=\"margin: 0 auto;\">
                                                <div>
                                                    <button class=\"btn btn-primary usd\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Ver cuenta en dólares\"><i
                                                                class=\"fas fa-dollar-sign\"></i>
                                                    </button>
                                                    <button class=\"btn btn-secondary eur\"
                                                            data-toggle=\"tooltip\"
                                                            title=\"Ver cuenta en euros\"><i
                                                                class=\"fas fa-euro-sign\"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"5\">No se encontraron registros</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row\" id=\"tablaMovimientos\" style=\"display: none\">
                            <div class=\"card-title\">
                                <h3 id=\"mostrarMovimientos\">Movimientos</h3>
                            </div>
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataMovimientos\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th class=\"hidden\">id</th>
                                        <th>Fecha</th>
                                        <th>Acumulado</th>
                                        <th>Acción</th>
                                        <th>Código Venta</th>
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
    <!-- Acceso a Rutas del Controller -->
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script>
        \$(function () {

            let tableUser = \$('#dataUser').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[8], [8]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            let tableMovimiento = \$('#dataMovimientos').DataTable({
                \"paging\": true,
                \"order\": [0, \"desc\"],
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[8], [8]],
                \"ordering\": true,
                \"info\": true,
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
                \"hideDuration\": \"1000\",
                \"timeOut\": \"5000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            //Declaracion de variables
            let idUsuario, id, tipoMoneda, accion;
            let movimientos = [];

            \$('#dataUser tbody').on('click', '.usd', function () {
                let row = \$(this).parents('tr');
                idUsuario = parseInt(row.data('id'));
                mostrarMovimientos('usd');
            });

            \$('#dataUser tbody').on('click', '.eur', function () {
                let row = \$(this).parents('tr');
                idUsuario = parseInt(row.data('id'));
                mostrarMovimientos('eur');
            });

            function mostrarMovimientos(moneda) {
                movimientos = [];
                {% for movimiento in movimientos %}
                id = parseInt('{{ movimiento.user.id }}');
                tipoMoneda = '{{ movimiento.tipodemoneda }}';
                switch (parseInt('{{ movimiento.accion }}')) {
                    case 1:
                        accion = 'Ingreso por concepto de ingreso de royalties';
                        break;
                    case 2:
                        accion = 'Retiro por concepto de retiro de royalties';
                        break;
                    case 3:
                        accion = 'Ingreso por concepto de amortización del producto';
                        break;
                    case 4:
                        accion = 'Ingreso por concepto de beneficio de royalties';
                        break;
                    case 5:
                        accion = 'Retiro por concepto de solicitud de pago de royalties';
                        break;
                    case 6:
                        accion = 'Ingreso por concepto de cancelación de solicitud de pago de royalties';
                        break;
                    case 7:
                        accion = 'Retiro de royalties por concepto de cancelación de venta';
                        break;
                    case 8:
                        accion = 'Retiro de saldo de amortización por concepto de cancelación de venta';
                        break;
                }
                if (id === idUsuario) {
                    if (moneda === 'usd' && tipoMoneda === 'USD') {
                        movimientos.push([
                            '{{ movimiento.id }}',
                            '{{ movimiento.fecha|date('Y-m-d h:i:s') }}',
                            '{{ movimiento.saldo|number_format(2, '.', ',') }}',
                            accion,
                            '{{ movimiento.venta ? movimiento.venta.codigo : '' }}'
                        ]);
                    } else if (moneda === 'eur' && tipoMoneda === 'EUR') {
                        movimientos.push([
                            '{{ movimiento.id }}',
                            '{{ movimiento.fecha|date('Y-m-d h:i:s') }}',
                            '{{ movimiento.saldo|number_format(2, '.', ',') }}',
                            accion,
                            '{{ movimiento.venta ? movimiento.venta.codigo : '' }}'
                        ]);
                    }
                }
                {% endfor %}
                if (movimientos.length !== 0) {
                    \$('#mostrarMovimientos').text('Movimientos de lo acumulado en la cuenta en ' + moneda.toUpperCase());
                    \$('#tablaMovimientos').css(\"display\", \"block\");
                    tableMovimiento = \$('#dataMovimientos').DataTable({
                        destroy: true,
                        data: movimientos,
                        columns: [
                            {class: \"hidden\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"},
                            {class: \"text-center\"}
                        ],
                        \"order\": [0, \"desc\"],
                        \"lengthMenu\": [[6], [6]]
                    });
                } else {
                    \$('#tablaMovimientos').css(\"display\", \"none\");
                    toastr[\"info\"]('Esta cuenta no tiene movimientos.', \"Información\")
                    return false;
                }
            }

        });
    </script>
{% endblock %}
", "estado/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\estado\\index.html.twig");
    }
}
