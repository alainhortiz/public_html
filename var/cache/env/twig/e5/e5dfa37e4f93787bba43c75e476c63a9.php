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

/* servicio/index.html.twig */
class __TwigTemplate_dbab4f23b0b4dfaf5e750864e72c447a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "servicio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "servicio/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de Servicios";
        
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
                            <h3>Listado de Servicios</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_form_new");
        echo "\">
                                    <button type=\"button\" class=\"btn btn-block bg-gradient-success\">Crear Nuevo Servicio
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataServicios\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Beneficio por Venta</th>
                                        <th>Concepto</th>
                                        <th>Documento</th>
                                        <th>Usuario Asignado</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicios"]) || array_key_exists("servicios", $context) ? $context["servicios"] : (function () { throw new RuntimeError('Variable "servicios" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 55
            echo "                                        <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\" class=\"text-center\">
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "nombre", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["servicio"], "beneficioxventa", [], "any", false, false, false, 57) . " ") . twig_get_attribute($this->env, $this->source, $context["servicio"], "tipodemoneda", [], "any", false, false, false, 57)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "conceptoServicio", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                            ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["servicio"], "documentoServicio", [], "any", false, false, false, 59)) {
                // line 60
                echo "                                                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["servicio"], "documentoServicio", [], "any", false, false, false, 60))), "html", null, true);
                echo "\"
                                                       target=\"_blank\">Ver
                                                        Documento</a>
                                                </td>
                                            ";
            } else {
                // line 65
                echo "                                                <td>-</td>
                                            ";
            }
            // line 67
            echo "                                            <td>";
            ((twig_get_attribute($this->env, $this->source, $context["servicio"], "user", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["servicio"], "user", [], "any", false, false, false, 67), "nombre", [], "any", false, false, false, 67) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["servicio"], "user", [], "any", false, false, false, 67), "apellidos", [], "any", false, false, false, 67)), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td style=\"margin: 0 auto;\">
                                                <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_show", ["id" => twig_get_attribute($this->env, $this->source, $context["servicio"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                                ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, $context["servicio"], "cantidadVentas", [], "method", false, false, false, 75) == 0)) {
                // line 76
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_form_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["servicio"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\">
                                                        <button class=\"btn btn-success\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Editar\"><i
                                                                    class=\"fas fa-edit\"></i>
                                                        </button>
                                                    </a>
                                                ";
            }
            // line 84
            echo "                                                <button class=\"btn btn-danger delete\"
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
            // line 92
            echo "                                        <tr>
                                            <td colspan=\"6\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                    </tbody>
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

    // line 107
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {

            \$('#dataServicios').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[7], [7]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            \$('#dataServicios tbody').on('click', '.delete', function () {

                let row = \$(this).parents('tr');

                let mat_datos = {id: row.data('id')};

                let Ruta = Routing.generate('app_servicio_delete');

                let opcion = confirm(\"Esta seguro que desea eliminar el servicio seleccionado?\");
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
                            toastr[\"success\"]('El servicio ha sido borrado', \"Notificación\")
                            window.location.href = \"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_index");
        echo "\";
                        } else {
                            toastr[\"error\"](data, \"Notificación\")
                        }
                    });
                }
            });

        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "servicio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 152,  284 => 116,  280 => 115,  276 => 114,  272 => 113,  267 => 111,  263 => 110,  257 => 108,  250 => 107,  234 => 96,  225 => 92,  213 => 84,  201 => 76,  199 => 75,  190 => 69,  184 => 67,  180 => 65,  171 => 60,  169 => 59,  165 => 58,  161 => 57,  157 => 56,  152 => 55,  147 => 54,  124 => 34,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listado de Servicios{% endblock %}

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
                            <h3>Listado de Servicios</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <a href=\"{{ path('app_servicio_form_new') }}\">
                                    <button type=\"button\" class=\"btn btn-block bg-gradient-success\">Crear Nuevo Servicio
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataServicios\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Beneficio por Venta</th>
                                        <th>Concepto</th>
                                        <th>Documento</th>
                                        <th>Usuario Asignado</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for servicio in servicios %}
                                        <tr data-id=\"{{ servicio.id }}\" class=\"text-center\">
                                            <td>{{ servicio.nombre }}</td>
                                            <td>{{ servicio.beneficioxventa ~ ' ' ~ servicio.tipodemoneda }}</td>
                                            <td>{{ servicio.conceptoServicio }}</td>
                                            {% if servicio.documentoServicio %}
                                                <td><a href=\"{{ asset('uploads/' ~ servicio.documentoServicio) }}\"
                                                       target=\"_blank\">Ver
                                                        Documento</a>
                                                </td>
                                            {% else %}
                                                <td>-</td>
                                            {% endif %}
                                            <td>{{ servicio.user ? servicio.user.nombre ~ ' ' ~ servicio.user.apellidos }}</td>
                                            <td style=\"margin: 0 auto;\">
                                                <a href=\"{{ path('app_servicio_show', {'id': servicio.id}) }}\">
                                                    <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                                {% if servicio.cantidadVentas() == 0 %}
                                                    <a href=\"{{ path('app_servicio_form_edit', {'id': servicio.id}) }}\">
                                                        <button class=\"btn btn-success\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Editar\"><i
                                                                    class=\"fas fa-edit\"></i>
                                                        </button>
                                                    </a>
                                                {% endif %}
                                                <button class=\"btn btn-danger delete\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Eliminar\"><i
                                                            class=\"fas fa-trash\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"6\">No se encontraron registros</td>
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

            \$('#dataServicios').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[7], [7]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            \$('#dataServicios tbody').on('click', '.delete', function () {

                let row = \$(this).parents('tr');

                let mat_datos = {id: row.data('id')};

                let Ruta = Routing.generate('app_servicio_delete');

                let opcion = confirm(\"Esta seguro que desea eliminar el servicio seleccionado?\");
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
                            toastr[\"success\"]('El servicio ha sido borrado', \"Notificación\")
                            window.location.href = \"{{ path('app_servicio_index') }}\";
                        } else {
                            toastr[\"error\"](data, \"Notificación\")
                        }
                    });
                }
            });

        });
    </script>
{% endblock %}

", "servicio/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\servicio\\index.html.twig");
    }
}
