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

/* user_inactivos/index.html.twig */
class __TwigTemplate_5c87b5cda8fa42c2460431ac27f4535e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_inactivos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_inactivos/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Listado de Usuarios Inactivos";
        
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
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de Usuarios Inactivos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataUser\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Avatar</th>
                                        <th>Nombre</th>
                                        <th>Empresa</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["usersI"]) || array_key_exists("usersI", $context) ? $context["usersI"] : (function () { throw new RuntimeError('Variable "usersI" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            yield "                                        <tr data-id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "\">
                                            ";
            // line 47
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 47)) {
                // line 48
                yield "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 49
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 49))), "html", null, true);
                yield "\"
                                                         alt=\"Avatar Usuario\"></td>
                                            ";
            } else {
                // line 52
                yield "                                                <td>-</td>
                                            ";
            }
            // line 54
            yield "                                            <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 54) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "apellidos", [], "any", false, false, false, 54)), "html", null, true);
            yield "</td>
                                            <td>";
            // line 55
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "empresa", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                            <td style=\"margin: 0 auto;\">
                                                <div class=\"row\" style=\"margin-left: 35px;\">
                                                    ";
            // line 58
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 58) == false)) {
                // line 59
                yield "                                                        <button class=\"btn btn-primary activar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Activar Usuario\"><i
                                                                    class=\"fas fa-check\"></i>
                                                        </button>
                                                    ";
            }
            // line 65
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "emitirfactura", [], "any", false, false, false, 65) == false)) {
                // line 66
                yield "                                                        <button style=\"margin-left: 10px;\"
                                                                class=\"btn btn-secondary emitir\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Emitir factura\"><i
                                                                    class=\"fas fa-address-card\"></i>
                                                        </button>
                                                    ";
            }
            // line 73
            yield "                                                    <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\">
                                                        <button style=\"margin-left: 10px;\"
                                                                class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                                title=\"ver\"><i
                                                                    class=\"fas fa-info\"></i>
                                                        </button>
                                                    </a>
                                                    <form method=\"post\"
                                                          action=\"";
            // line 81
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\"
                                                          onsubmit=\"return confirm('Está seguro que desea eliminar este usuario?');\">
                                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                        <input type=\"hidden\" name=\"_token\"
                                                               value=\"";
            // line 85
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 85))), "html", null, true);
            yield "\">
                                                        <button style=\"margin-left: 10px;\"
                                                                class=\"btn btn-danger\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Eliminar\"><i
                                                                    class=\"fas fa-trash\"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 97
            yield "                                        <tr>
                                            <td colspan=\"15\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                                    </tbody>
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

        return; yield '';
    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 115
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 118
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 119
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 120
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 121
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$(function () {

            \$('#dataUser').DataTable({
                \"paging\": true,
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
                \"hideDuration\": \"500\",
                \"timeOut\": \"3000\",
                \"extendedTimeOut\": \"500\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            let idUsuario;

            \$('#dataUser tbody').on('click', '.activar', function () {

                let row = \$(this).parents('tr');
                idUsuario = row.data('id');

                let Ruta = Routing.generate('app_user_activar', {'id': idUsuario});

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idUsuario: idUsuario
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('Se activo el usuario', \"Notificación\")
                        window.location.href = \"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_inactivos");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });

            });

            \$('#dataUser tbody').on('click', '.emitir', function () {

                let row = \$(this).parents('tr');
                idUsuario = row.data('id');

                let Ruta = Routing.generate('app_user_emitir', {'id': idUsuario});

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idUsuario: idUsuario
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('Se autorizo al usuario a emitir factura', \"Notificación\")
                        window.location.href = \"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_inactivos");
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
        return "user_inactivos/index.html.twig";
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
        return array (  387 => 210,  353 => 179,  292 => 121,  288 => 120,  284 => 119,  280 => 118,  275 => 116,  271 => 115,  265 => 113,  258 => 112,  241 => 101,  232 => 97,  215 => 85,  208 => 81,  196 => 73,  187 => 66,  184 => 65,  176 => 59,  174 => 58,  168 => 55,  163 => 54,  159 => 52,  153 => 49,  150 => 48,  148 => 47,  143 => 46,  138 => 45,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listado de Usuarios Inactivos{% endblock %}

{% block stylesheets %}
    {{ parent() }}
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
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Listado de Usuarios Inactivos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataUser\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Avatar</th>
                                        <th>Nombre</th>
                                        <th>Empresa</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for user in usersI %}
                                        <tr data-id=\"{{ user.id }}\">
                                            {% if user.avatar %}
                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"{{ asset('uploads/' ~ user.avatar) }}\"
                                                         alt=\"Avatar Usuario\"></td>
                                            {% else %}
                                                <td>-</td>
                                            {% endif %}
                                            <td>{{ user.nombre ~ ' ' ~ user.apellidos }}</td>
                                            <td>{{ user.empresa }}</td>
                                            <td style=\"margin: 0 auto;\">
                                                <div class=\"row\" style=\"margin-left: 35px;\">
                                                    {% if user.isActive == false %}
                                                        <button class=\"btn btn-primary activar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Activar Usuario\"><i
                                                                    class=\"fas fa-check\"></i>
                                                        </button>
                                                    {% endif %}
                                                    {% if user.emitirfactura == false %}
                                                        <button style=\"margin-left: 10px;\"
                                                                class=\"btn btn-secondary emitir\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Emitir factura\"><i
                                                                    class=\"fas fa-address-card\"></i>
                                                        </button>
                                                    {% endif %}
                                                    <a href=\"{{ path('app_user_show', {'id': user.id}) }}\">
                                                        <button style=\"margin-left: 10px;\"
                                                                class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                                title=\"ver\"><i
                                                                    class=\"fas fa-info\"></i>
                                                        </button>
                                                    </a>
                                                    <form method=\"post\"
                                                          action=\"{{ path('app_user_delete', {'id': user.id}) }}\"
                                                          onsubmit=\"return confirm('Está seguro que desea eliminar este usuario?');\">
                                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                        <input type=\"hidden\" name=\"_token\"
                                                               value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                                        <button style=\"margin-left: 10px;\"
                                                                class=\"btn btn-danger\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Eliminar\"><i
                                                                    class=\"fas fa-trash\"></i>
                                                        </button>
                                                    </form>
                                                </div>
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

            \$('#dataUser').DataTable({
                \"paging\": true,
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
                \"hideDuration\": \"500\",
                \"timeOut\": \"3000\",
                \"extendedTimeOut\": \"500\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            let idUsuario;

            \$('#dataUser tbody').on('click', '.activar', function () {

                let row = \$(this).parents('tr');
                idUsuario = row.data('id');

                let Ruta = Routing.generate('app_user_activar', {'id': idUsuario});

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idUsuario: idUsuario
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('Se activo el usuario', \"Notificación\")
                        window.location.href = \"{{ path('app_user_inactivos') }}\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });

            });

            \$('#dataUser tbody').on('click', '.emitir', function () {

                let row = \$(this).parents('tr');
                idUsuario = row.data('id');

                let Ruta = Routing.generate('app_user_emitir', {'id': idUsuario});

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idUsuario: idUsuario
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        toastr[\"success\"]('Se autorizo al usuario a emitir factura', \"Notificación\")
                        window.location.href = \"{{ path('app_user_inactivos') }}\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });

            });


        });
    </script>
{% endblock %}
", "user_inactivos/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\user_inactivos\\index.html.twig");
    }
}
