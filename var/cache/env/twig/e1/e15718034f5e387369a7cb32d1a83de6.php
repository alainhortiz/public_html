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

/* direccion_recogida/index.html.twig */
class __TwigTemplate_476d15623591b8871f46d283e9734a83 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dirección de Recogida";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 6
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
                            <h3>Dirección de Recogida</h3>
                        </div>
                    </div>
                    ";
        // line 25
        if ( !(isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 25, $this->source); })())) {
            // line 26
            yield "                        <div class=\"col-md-3\">
                            <button type=\"button\" class=\"btn btn-block bg-gradient-success\" id=\"btnAddDireccion\"><i
                                        class=\"fa fa-plus\"></i> Crear Nueva Dirección
                            </button>
                        </div>
                    ";
        }
        // line 32
        yield "                    <div class=\"card-body\">
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
            // line 49
            yield "                                    <tr data-id=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "\">
                                        <td>";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "nombre", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                        <td>";
            // line 51
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "direccion", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                                        <td>";
            // line 52
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "telefono", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                                        <td>";
            // line 53
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "codigoPostal", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                        <td>";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "poblacion", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                                        <td>";
            // line 55
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "provincia", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                        <td>";
            // line 56
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "pais", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
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
            yield "                                    <tr>
                                        <td colspan=\"8\">No se encontraron registros</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 77
        yield Twig\Extension\CoreExtension::include($this->env, $context, "direccion_recogida/modalAddDireccion.html.twig");
        yield "
        ";
        // line 78
        yield Twig\Extension\CoreExtension::include($this->env, $context, "direccion_recogida/modalEditDireccion.html.twig");
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 85
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_direccion_index");
        yield "\";
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 161, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
            // line 162
            yield "                        \$(\"#nombreEdit\").val('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "nombre", [], "any", false, false, false, 162), "html", null, true);
            yield "');
                        \$(\"#direccionEdit\").val('";
            // line 163
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "direccion", [], "any", false, false, false, 163), "html", null, true);
            yield "');
                        \$(\"#telefonoEdit\").val('";
            // line 164
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "telefono", [], "any", false, false, false, 164), "html", null, true);
            yield "');
                        \$(\"#codigoPostalEdit\").val('";
            // line 165
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "codigoPostal", [], "any", false, false, false, 165), "html", null, true);
            yield "');
                        \$(\"#poblacionEdit\").val('";
            // line 166
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "poblacion", [], "any", false, false, false, 166), "html", null, true);
            yield "');
                        \$(\"#provinciaEdit\").val('";
            // line 167
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "provincia", [], "any", false, false, false, 167), "html", null, true);
            yield "');
                        \$(\"#paisEdit\").val('";
            // line 168
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dir"], "pais", [], "any", false, false, false, 168), "html", null, true);
            yield "');
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "                \$('#modalEditDireccion').modal('show');
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_direccion_index");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
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
        return "direccion_recogida/index.html.twig";
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
        return array (  381 => 207,  342 => 170,  334 => 168,  330 => 167,  326 => 166,  322 => 165,  318 => 164,  314 => 163,  309 => 162,  305 => 161,  288 => 147,  224 => 86,  220 => 85,  214 => 83,  207 => 82,  196 => 78,  192 => 77,  183 => 70,  174 => 66,  159 => 56,  155 => 55,  151 => 54,  147 => 53,  143 => 52,  139 => 51,  135 => 50,  130 => 49,  125 => 48,  107 => 32,  99 => 26,  97 => 25,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
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
