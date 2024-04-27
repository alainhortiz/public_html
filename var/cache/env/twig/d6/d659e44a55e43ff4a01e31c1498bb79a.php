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

/* pack/index.html.twig */
class __TwigTemplate_6d09659d846c0e521080504c58b68574 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pack/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de Packs de Productos";
        
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
                            <h3>Listado de Packs de Productos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_new");
        echo "\">
                                    <button type=\"button\" class=\"btn btn-block bg-gradient-success\">Crear Nuevo Pack
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataPacks\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Beneficio por Venta</th>
                                        <th>Cantidad de Productos</th>
                                        <th>Vendidos</th>
                                        <th>Disponible</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 56
            echo "                                        ";
            $context["disponible"] = 0;
            // line 57
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pack"], "productos", [], "method", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 58
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 58), "stock", [], "any", false, false, false, 58) <= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 58), "stockAdvertencia", [], "any", false, false, false, 58))) {
                    // line 59
                    echo "                                                ";
                    $context["disponible"] = 1;
                    // line 60
                    echo "                                            ";
                }
                // line 61
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                        <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\" class=\"text-center\">
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "nombre", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                            ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, $context["pack"], "imagen", [], "any", false, false, false, 64)) {
                // line 65
                echo "                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["pack"], "imagen", [], "any", false, false, false, 66))), "html", null, true);
                echo "\"
                                                         alt=\"Foto Pack\"></td>
                                            ";
            } else {
                // line 69
                echo "                                                <td>-</td>
                                            ";
            }
            // line 71
            echo "                                            <td>";
            echo twig_escape_filter($this->env, ((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "beneficioxventa", [], "any", false, false, false, 71), 2, ".", ",") . " ") . twig_get_attribute($this->env, $this->source, $context["pack"], "tipodemoneda", [], "any", false, false, false, 71)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "productos", [], "any", false, false, false, 72)), "html", null, true);
            echo "</td>
                                            <td>-</td>
                                            ";
            // line 74
            if (((isset($context["disponible"]) || array_key_exists("disponible", $context) ? $context["disponible"] : (function () { throw new RuntimeError('Variable "disponible" does not exist.', 74, $this->source); })()) == 1)) {
                // line 75
                echo "                                                <td>No</td>
                                            ";
            } else {
                // line 77
                echo "                                                <td>Si</td>
                                            ";
            }
            // line 79
            echo "                                            <td style=\"margin: 0 auto;\">
                                                <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">
                                                    <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                                <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 86)]), "html", null, true);
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
            // line 101
            echo "                                        <tr>
                                            <td colspan=\"7\">No se encontraron registros</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
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

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {

            \$('#dataPacks').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[6], [6]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            \$('#dataPacks tbody').on('click', '.delete', function () {

                let row = \$(this).parents('tr');

                let mat_datos = {id: row.data('id')};

                let Ruta = Routing.generate('app_pack_delete');

                let opcion = confirm(\"Esta seguro que desea eliminar el pack de productos seleccionado?\");
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
                            toastr[\"success\"]('El pack de productos ha sido borrado', \"Notificación\")
                            window.location.href = \"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
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
        return "pack/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 161,  311 => 125,  307 => 124,  303 => 123,  299 => 122,  294 => 120,  290 => 119,  284 => 117,  277 => 116,  261 => 105,  252 => 101,  232 => 86,  223 => 80,  220 => 79,  216 => 77,  212 => 75,  210 => 74,  205 => 72,  200 => 71,  196 => 69,  190 => 66,  187 => 65,  185 => 64,  181 => 63,  176 => 62,  170 => 61,  167 => 60,  164 => 59,  161 => 58,  156 => 57,  153 => 56,  148 => 55,  124 => 34,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listado de Packs de Productos{% endblock %}

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
                            <h3>Listado de Packs de Productos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <a href=\"{{ path('app_pack_new') }}\">
                                    <button type=\"button\" class=\"btn btn-block bg-gradient-success\">Crear Nuevo Pack
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataPacks\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Beneficio por Venta</th>
                                        <th>Cantidad de Productos</th>
                                        <th>Vendidos</th>
                                        <th>Disponible</th>
                                        <th class=\"text-center\">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"text-center\">
                                    {% for pack in packs %}
                                        {% set disponible = 0 %}
                                        {% for producto in pack.productos() %}
                                            {% if producto.producto.stock <= producto.producto.stockAdvertencia %}
                                                {% set disponible = 1 %}
                                            {% endif %}
                                        {% endfor %}
                                        <tr data-id=\"{{ pack.id }}\" class=\"text-center\">
                                            <td>{{ pack.nombre }}</td>
                                            {% if pack.imagen %}
                                                <td><img width=\"80\" height=\"80\"
                                                         src=\"{{ asset('uploads/' ~ pack.imagen) }}\"
                                                         alt=\"Foto Pack\"></td>
                                            {% else %}
                                                <td>-</td>
                                            {% endif %}
                                            <td>{{ pack.beneficioxventa|number_format(2, '.', ',') ~ ' ' ~ pack.tipodemoneda }}</td>
                                            <td>{{ pack.productos|length }}</td>
                                            <td>-</td>
                                            {% if disponible == 1 %}
                                                <td>No</td>
                                            {% else %}
                                                <td>Si</td>
                                            {% endif %}
                                            <td style=\"margin: 0 auto;\">
                                                <a href=\"{{ path('app_pack_show', {'id': pack.id}) }}\">
                                                    <button class=\"btn btn-info\" data-toggle=\"tooltip\"
                                                            title=\"ver\"><i
                                                                class=\"fas fa-info\"></i>
                                                    </button>
                                                </a>
                                                <a href=\"{{ path('app_pack_edit', {'id': pack.id}) }}\">
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
                                            <td colspan=\"7\">No se encontraron registros</td>
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

            \$('#dataPacks').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[6], [6]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            \$('#dataPacks tbody').on('click', '.delete', function () {

                let row = \$(this).parents('tr');

                let mat_datos = {id: row.data('id')};

                let Ruta = Routing.generate('app_pack_delete');

                let opcion = confirm(\"Esta seguro que desea eliminar el pack de productos seleccionado?\");
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
                            toastr[\"success\"]('El pack de productos ha sido borrado', \"Notificación\")
                            window.location.href = \"{{ path('app_pack_index') }}\";
                        } else {
                            toastr[\"error\"](data, \"Notificación\")
                        }
                    });
                }
            });

        });
    </script>
{% endblock %}
", "pack/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\pack\\index.html.twig");
    }
}
