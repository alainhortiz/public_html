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

/* direccion_recogida/index.html.twig */
class __TwigTemplate_cfb64119857b1d027524bfcf04710a00 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "direccion_recogida/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "direccion_recogida/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dirección de Recogida";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 6
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
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Dirección de Recogida</h3>
                        </div>
                    </div>
                    ";
        // line 25
        if ( !(isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                        <div class=\"col-md-3\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\" id=\"btnAddDireccion\"><i
                                        class=\"fa fa-plus\"></i> Crear Nueva Dirección
                            </button>
                        </div>
                    ";
        }
        // line 32
        echo "                    <div class=\"card-body\">
                        <div class=\"row\">
                            <table class=\"table table-bordered table-striped\" id=\"dataDireccion\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Nombre del contacto</th>
                                    <th>Dirección</th>
                                    <th>Télefono</th>
                                    <th>Código Postal</th>
                                    <th>Población</th>
                                    <th>Provincia</th>
                                    <th>País</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
            // line 49
            echo "                                    <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "nombre", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "direccion", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "telefono", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "codigoPostal", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "poblacion", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "provincia", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "pais", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                        <td style=\"margin: 0 auto;\">
                                            <button class=\"btn btn-success editar\"
                                                    data-toggle=\"tooltip\"
                                                    title=\"Editar\"><i
                                                        class=\"fas fa-edit\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "                                    <tr>
                                        <td colspan=\"8\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 77
        echo twig_include($this->env, $context, "direccion_recogida/modalAddDireccion.html.twig");
        echo "
        ";
        // line 78
        echo twig_include($this->env, $context, "direccion_recogida/modalEditDireccion.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script>
        \$(function () {

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

            let idDireccion;

            \$('#btnAddDireccion').on('click', function () {
                \$('#modalAddDireccion').modal('show');
            });

            \$('#btnAddGuardar').on('click', function () {
                let Ruta = Routing.generate('app_direccion_new');

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre del contacto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                \$('#modalAddDireccion').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    direccion: \$('#direccion').val(),
                    telefono: \$('#telefono').val(),
                    poblacion: \$('#poblacion').val(),
                    provincia: \$('#provincia').val(),
                    pais: \$('#pais').val(),
                    codigoPostal: \$('#codigoPostal').val()
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalAddDireccion input').each(function () {
                            \$(this).val('');
                        });
                        window.location.href = \"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_direccion_index");
        echo "\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

            \$('#dataDireccion tbody').on('click', '.editar', function () {
                let row = \$(this).parents('tr');
                idDireccion = row.data('id');
                \$(\"#nombreEdit\").val('');
                \$(\"#direccionEdit\").val('');
                \$(\"#telefonoEdit\").val('');
                ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 161, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
            // line 162
            echo "                        \$(\"#nombreEdit\").val('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "nombre", [], "any", false, false, false, 162), "html", null, true);
            echo "');
                        \$(\"#direccionEdit\").val('";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "direccion", [], "any", false, false, false, 163), "html", null, true);
            echo "');
                        \$(\"#telefonoEdit\").val('";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "telefono", [], "any", false, false, false, 164), "html", null, true);
            echo "');
                        \$(\"#codigoPostalEdit\").val('";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "codigoPostal", [], "any", false, false, false, 165), "html", null, true);
            echo "');
                        \$(\"#poblacionEdit\").val('";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "poblacion", [], "any", false, false, false, 166), "html", null, true);
            echo "');
                        \$(\"#provinciaEdit\").val('";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "provincia", [], "any", false, false, false, 167), "html", null, true);
            echo "');
                        \$(\"#paisEdit\").val('";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dir"], "pais", [], "any", false, false, false, 168), "html", null, true);
            echo "');
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                \$('#modalEditDireccion').modal('show');
            });

            \$('#btnEditGuardar').on('click', function () {
                let Ruta = Routing.generate('app_direccion_update');

                //Validaciones
                if (\$(\"#nombreEdit\").val() === '') {
                    toastr[\"error\"]('El nombre del contacto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                \$('#modalEditDireccion').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idDireccion: idDireccion,
                    nombre: \$('#nombreEdit').val(),
                    direccion: \$('#direccionEdit').val(),
                    telefono: \$('#telefonoEdit').val(),
                    poblacion: \$('#poblacionEdit').val(),
                    provincia: \$('#provinciaEdit').val(),
                    pais: \$('#paisEdit').val(),
                    codigoPostal: \$('#codigoPostalEdit').val()
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalEditDireccion input').each(function () {
                            \$(this).val('');
                        });
                        window.location.href = \"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_direccion_index");
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
        return "direccion_recogida/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 207,  339 => 170,  331 => 168,  327 => 167,  323 => 166,  319 => 165,  315 => 164,  311 => 163,  306 => 162,  302 => 161,  285 => 147,  221 => 86,  217 => 85,  211 => 83,  204 => 82,  194 => 78,  190 => 77,  181 => 70,  172 => 66,  157 => 56,  153 => 55,  149 => 54,  145 => 53,  141 => 52,  137 => 51,  133 => 50,  128 => 49,  123 => 48,  105 => 32,  97 => 26,  95 => 25,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dirección de Recogida{% endblock %}

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
                            <h3>Dirección de Recogida</h3>
                        </div>
                    </div>
                    {% if not direccion %}
                        <div class=\"col-md-3\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\" id=\"btnAddDireccion\"><i
                                        class=\"fa fa-plus\"></i> Crear Nueva Dirección
                            </button>
                        </div>
                    {% endif %}
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <table class=\"table table-bordered table-striped\" id=\"dataDireccion\">
                                <thead class=\"text-center\">
                                <tr>
                                    <th>Nombre del contacto</th>
                                    <th>Dirección</th>
                                    <th>Télefono</th>
                                    <th>Código Postal</th>
                                    <th>Población</th>
                                    <th>Provincia</th>
                                    <th>País</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody class=\"text-center\">
                                {% for dir in direccion %}
                                    <tr data-id=\"{{ dir.id }}\">
                                        <td>{{ dir.nombre }}</td>
                                        <td>{{ dir.direccion }}</td>
                                        <td>{{ dir.telefono }}</td>
                                        <td>{{ dir.codigoPostal }}</td>
                                        <td>{{ dir.poblacion }}</td>
                                        <td>{{ dir.provincia }}</td>
                                        <td>{{ dir.pais }}</td>
                                        <td style=\"margin: 0 auto;\">
                                            <button class=\"btn btn-success editar\"
                                                    data-toggle=\"tooltip\"
                                                    title=\"Editar\"><i
                                                        class=\"fas fa-edit\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"8\">No se encontraron registros</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ include('direccion_recogida/modalAddDireccion.html.twig') }}
        {{ include('direccion_recogida/modalEditDireccion.html.twig') }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Acceso a Rutas del Controller -->
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script>
        \$(function () {

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

            let idDireccion;

            \$('#btnAddDireccion').on('click', function () {
                \$('#modalAddDireccion').modal('show');
            });

            \$('#btnAddGuardar').on('click', function () {
                let Ruta = Routing.generate('app_direccion_new');

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre del contacto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                \$('#modalAddDireccion').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    direccion: \$('#direccion').val(),
                    telefono: \$('#telefono').val(),
                    poblacion: \$('#poblacion').val(),
                    provincia: \$('#provincia').val(),
                    pais: \$('#pais').val(),
                    codigoPostal: \$('#codigoPostal').val()
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalAddDireccion input').each(function () {
                            \$(this).val('');
                        });
                        window.location.href = \"{{ path('app_direccion_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

            \$('#dataDireccion tbody').on('click', '.editar', function () {
                let row = \$(this).parents('tr');
                idDireccion = row.data('id');
                \$(\"#nombreEdit\").val('');
                \$(\"#direccionEdit\").val('');
                \$(\"#telefonoEdit\").val('');
                {% for dir in direccion %}
                        \$(\"#nombreEdit\").val('{{ dir.nombre }}');
                        \$(\"#direccionEdit\").val('{{ dir.direccion }}');
                        \$(\"#telefonoEdit\").val('{{ dir.telefono }}');
                        \$(\"#codigoPostalEdit\").val('{{ dir.codigoPostal }}');
                        \$(\"#poblacionEdit\").val('{{ dir.poblacion }}');
                        \$(\"#provinciaEdit\").val('{{ dir.provincia }}');
                        \$(\"#paisEdit\").val('{{ dir.pais }}');
                {% endfor %}
                \$('#modalEditDireccion').modal('show');
            });

            \$('#btnEditGuardar').on('click', function () {
                let Ruta = Routing.generate('app_direccion_update');

                //Validaciones
                if (\$(\"#nombreEdit\").val() === '') {
                    toastr[\"error\"]('El nombre del contacto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                \$('#modalEditDireccion').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idDireccion: idDireccion,
                    nombre: \$('#nombreEdit').val(),
                    direccion: \$('#direccionEdit').val(),
                    telefono: \$('#telefonoEdit').val(),
                    poblacion: \$('#poblacionEdit').val(),
                    provincia: \$('#provinciaEdit').val(),
                    pais: \$('#paisEdit').val(),
                    codigoPostal: \$('#codigoPostalEdit').val()
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalEditDireccion input').each(function () {
                            \$(this).val('');
                        });
                        window.location.href = \"{{ path('app_direccion_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

        });
    </script>
{% endblock %}
", "direccion_recogida/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\direccion_recogida\\index.html.twig");
    }
}
