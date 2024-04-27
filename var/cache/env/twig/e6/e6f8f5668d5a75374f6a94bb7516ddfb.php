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

/* solicitar_recogida/index.html.twig */
class __TwigTemplate_ec13b555120bf75d1abaaaa6c2feaa9f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_recogida/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "solicitar_recogida/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Solicitar Recogida";
        
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
                            <h1>Listado de Solicitudes Recogidas</h1>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 33
            yield "                            <div class=\"row\">
                                <div class=\"col-md-3\">
                                    <button type=\"button\" class=\"btn btn-block bg-gradient-success\"
                                            id=\"btnNuevaSolicitud\">Crear Nueva
                                        Solicitud
                                    </button>
                                </div>
                            </div>
                        ";
        }
        // line 42
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 43
            yield "                            <div class=\"row\">
                                <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                    <table class=\"table table-bordered table-striped\" id=\"dataSolicitudAdmin\">
                                        <thead class=\"text-center\">
                                        <tr>
                                            <th>Fecha de Solicitud</th>
                                            <th>Usuario</th>
                                            <th>Preferencia</th>
                                            <th>Estado</th>
                                            <th>Fecha de recogida</th>
                                            <th>Hora de recogida</th>
                                            <th>Link de envío</th>
                                            <th>Comentarios</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"text-center\">
                                        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["solicitar_recogidas"]) || array_key_exists("solicitar_recogidas", $context) ? $context["solicitar_recogidas"] : (function () { throw new RuntimeError('Variable "solicitar_recogidas" does not exist.', 60, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["solicitar_recogida"]) {
                // line 61
                yield "                                            <tr data-id=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "id", [], "any", false, false, false, 61), "html", null, true);
                yield "\">
                                                <td>";
                // line 62
                ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "fechaSolicitud", [], "any", false, false, false, 62)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "fechaSolicitud", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true)) : (yield ""));
                yield "</td>
                                                <td>";
                // line 63
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "user", [], "any", false, false, false, 63), "nombre", [], "any", false, false, false, 63) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "user", [], "any", false, false, false, 63), "apellidos", [], "any", false, false, false, 63)), "html", null, true);
                yield "</td>
                                                <td>";
                // line 64
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "indicadorSolicitud", [], "any", false, false, false, 64), "html", null, true);
                yield "</td>
                                                <td>";
                // line 65
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "estado", [], "any", false, false, false, 65), "html", null, true);
                yield "</td>
                                                <td>";
                // line 66
                ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "fechaRecogida", [], "any", false, false, false, 66)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "fechaRecogida", [], "any", false, false, false, 66), "Y-m-d"), "html", null, true)) : (yield ""));
                yield "</td>
                                                <td>";
                // line 67
                ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "horaRecogida", [], "any", false, false, false, 67)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((("De " . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "horaRecogida", [], "any", false, false, false, 67), "H:i:s")) . " a ") . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "horaFinRecogida", [], "any", false, false, false, 67), "H:i:s")), "html", null, true)) : (yield ""));
                yield "</td>
                                                ";
                // line 68
                if (CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "linkRecogida", [], "any", false, false, false, 68)) {
                    // line 69
                    yield "                                                    <td><a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "linkRecogida", [], "any", false, false, false, 69), "html", null, true);
                    yield "\"
                                                           target=\"_blank\">Ver datos del envío</a>
                                                    </td>
                                                ";
                } else {
                    // line 73
                    yield "                                                    <td></td>
                                                ";
                }
                // line 75
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "estado", [], "any", false, false, false, 75) == "Aprobada")) {
                    // line 76
                    yield "                                                    <td>";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "observacionRecogida", [], "any", false, false, false, 76), "html", null, true);
                    yield "</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 77
$context["solicitar_recogida"], "estado", [], "any", false, false, false, 77) == "Rechazada")) {
                    // line 78
                    yield "                                                    <td>";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "motivoRechazo", [], "any", false, false, false, 78), "html", null, true);
                    yield "</td>
                                                ";
                } else {
                    // line 80
                    yield "                                                    <td></td>
                                                ";
                }
                // line 82
                yield "                                                <td style=\"margin: 0 auto;\">
                                                    ";
                // line 83
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "nombreContactoRecogida", [], "any", false, false, false, 83) != "")) {
                    // line 84
                    yield "                                                        <button
                                                                class=\"btn btn-primary ver\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Ver dirección de recogida\"><i
                                                                    class=\"fas fa-eye\"></i>
                                                        </button>
                                                    ";
                }
                // line 91
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "estado", [], "any", false, false, false, 91) == "Sin aprobar")) {
                    // line 92
                    yield "                                                        <button
                                                                class=\"btn btn-success aprobar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Aprobar solicitud\"><i
                                                                    class=\"fas fa-check\"></i>
                                                        </button>
                                                        <button
                                                                class=\"btn btn-secondary rechazar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Rechazar solicitud\"><i
                                                                    class=\"fas fa-ban\"></i>
                                                        </button>
                                                    ";
                }
                // line 105
                yield "                                                </td>
                                            </tr>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 108
                yield "                                            <tr>
                                                <td colspan=\"9\">No se encontraron registros</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitar_recogida'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        ";
        } else {
            // line 117
            yield "                            <div class=\"row\">
                                <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                    <table class=\"table table-bordered table-striped\" id=\"dataSolicitudUser\">
                                        <thead class=\"text-center\">
                                        <tr>
                                            <th>Fecha de Solicitud</th>
                                            <th>Preferencia</th>
                                            <th>Estado</th>
                                            <th>Fecha de recogida</th>
                                            <th>Hora de recogida</th>
                                            <th>Link de envío</th>
                                            <th>Comentarios</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"text-center\">
                                        ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["solicitar_recogidas"]) || array_key_exists("solicitar_recogidas", $context) ? $context["solicitar_recogidas"] : (function () { throw new RuntimeError('Variable "solicitar_recogidas" does not exist.', 133, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["solicitar_recogida"]) {
                // line 134
                yield "                                            <tr data-id=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "id", [], "any", false, false, false, 134), "html", null, true);
                yield "\">
                                                <td>";
                // line 135
                ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "fechaSolicitud", [], "any", false, false, false, 135)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "fechaSolicitud", [], "any", false, false, false, 135), "Y-m-d"), "html", null, true)) : (yield ""));
                yield "</td>
                                                <td>";
                // line 136
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "indicadorSolicitud", [], "any", false, false, false, 136), "html", null, true);
                yield "</td>
                                                <td>";
                // line 137
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "estado", [], "any", false, false, false, 137), "html", null, true);
                yield "</td>
                                                <td>";
                // line 138
                ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "fechaRecogida", [], "any", false, false, false, 138)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "fechaRecogida", [], "any", false, false, false, 138), "Y-m-d"), "html", null, true)) : (yield ""));
                yield "</td>
                                                <td>";
                // line 139
                ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "horaRecogida", [], "any", false, false, false, 139)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((("De " . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "horaRecogida", [], "any", false, false, false, 139), "H:i:s")) . " a ") . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "horaFinRecogida", [], "any", false, false, false, 139), "H:i:s")), "html", null, true)) : (yield ""));
                yield "</td>
                                                ";
                // line 140
                if (CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "linkRecogida", [], "any", false, false, false, 140)) {
                    // line 141
                    yield "                                                    <td><a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "linkRecogida", [], "any", false, false, false, 141), "html", null, true);
                    yield "\"
                                                           target=\"_blank\">Ver datos del envío</a>
                                                    </td>
                                                ";
                } else {
                    // line 145
                    yield "                                                    <td></td>
                                                ";
                }
                // line 147
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "estado", [], "any", false, false, false, 147) == "Aprobada")) {
                    // line 148
                    yield "                                                    <td>";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "observacionRecogida", [], "any", false, false, false, 148), "html", null, true);
                    yield "</td>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 149
$context["solicitar_recogida"], "estado", [], "any", false, false, false, 149) == "Rechazada")) {
                    // line 150
                    yield "                                                    <td>";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "motivoRechazo", [], "any", false, false, false, 150), "html", null, true);
                    yield "</td>
                                                ";
                } else {
                    // line 152
                    yield "                                                    <td></td>
                                                ";
                }
                // line 154
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar_recogida"], "nombreContactoRecogida", [], "any", false, false, false, 154) != "")) {
                    // line 155
                    yield "                                                    <td style=\"margin: 0 auto;\">
                                                        <button class=\"btn btn-primary ver\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Ver dirección de recogida\"><i
                                                                    class=\"fas fa-eye\"></i>
                                                        </button>
                                                    </td>
                                                ";
                }
                // line 163
                yield "                                            </tr>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 165
                yield "                                            <tr>
                                                <td colspan=\"8\">No se encontraron registros</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitar_recogida'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        ";
        }
        // line 174
        yield "                    </div>
                </div>
            </div>
        </div>
        ";
        // line 178
        yield Twig\Extension\CoreExtension::include($this->env, $context, "solicitar_recogida/modalAddSolicitud.html.twig");
        yield "
        ";
        // line 179
        yield Twig\Extension\CoreExtension::include($this->env, $context, "solicitar_recogida/modalAprobarSolicitud.html.twig");
        yield "
        ";
        // line 180
        yield Twig\Extension\CoreExtension::include($this->env, $context, "solicitar_recogida/modalRechazoSolicitud.html.twig");
        yield "
        ";
        // line 181
        yield Twig\Extension\CoreExtension::include($this->env, $context, "solicitar_recogida/modalVerDireccion.html.twig");
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 185
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 186
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 188
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 191
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 192
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 193
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 194
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$(function () {


            ";
        // line 199
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["solicitar_recogidas"]) || array_key_exists("solicitar_recogidas", $context) ? $context["solicitar_recogidas"] : (function () { throw new RuntimeError('Variable "solicitar_recogidas" does not exist.', 199, $this->source); })())) > 0)) {
            // line 200
            yield "            \$('#dataSolicitudAdmin, #dataSolicitudUser').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[10], [10]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });
            ";
        }
        // line 211
        yield "
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

            let idSolicitud, diaSemanaRecogida, fechaAprobacion, idDireccion;
            const festivos = ['1/1', '6/1', '15/4', '15/8', '12/10', '1/11', '6/12', '8/12'];

            \$('#fechaRecogida').on('change', function () {
                const fecha = new Date(\$(\"#fechaRecogida\").val());
                diaSemanaRecogida = fecha.getDay() + 1;
                fechaAprobacion = fecha.setDate(fecha.getDate() + 1);
                fechaAprobacion = new Date(fechaAprobacion).toLocaleDateString('es', {
                    month: \"numeric\",
                    day: \"numeric\"
                });
            });

            \$('#btnNuevaSolicitud').on('click', function () {
                \$('#addPreferencia').val('');
                ";
        // line 245
        if ((isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 245, $this->source); })())) {
            // line 246
            yield "                    idDireccion = '";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 246, $this->source); })()), "id", [], "any", false, false, false, 246), "html", null, true);
            yield "';
                    \$('#nombre').val('";
            // line 247
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 247, $this->source); })()), "nombre", [], "any", false, false, false, 247), "html", null, true);
            yield "');
                    \$('#direccion').val('";
            // line 248
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 248, $this->source); })()), "direccion", [], "any", false, false, false, 248), "html", null, true);
            yield "');
                    \$('#telefono').val('";
            // line 249
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 249, $this->source); })()), "telefono", [], "any", false, false, false, 249), "html", null, true);
            yield "');
                    \$(\"#codigoPostal\").val('";
            // line 250
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 250, $this->source); })()), "codigoPostal", [], "any", false, false, false, 250), "html", null, true);
            yield "');
                    \$(\"#poblacion\").val('";
            // line 251
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 251, $this->source); })()), "poblacion", [], "any", false, false, false, 251), "html", null, true);
            yield "');
                    \$(\"#provincia\").val('";
            // line 252
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 252, $this->source); })()), "provincia", [], "any", false, false, false, 252), "html", null, true);
            yield "');
                    \$(\"#pais\").val('";
            // line 253
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["direccion"]) || array_key_exists("direccion", $context) ? $context["direccion"] : (function () { throw new RuntimeError('Variable "direccion" does not exist.', 253, $this->source); })()), "pais", [], "any", false, false, false, 253), "html", null, true);
            yield "');
                ";
        } else {
            // line 255
            yield "                    idDireccion = '';
                    \$('#nombre').val('');
                    \$('#direccion').val('');
                    \$('#telefono').val('');
                    \$(\"#codigoPostal\").val('');
                    \$(\"#poblacion\").val('');
                    \$(\"#provincia\").val('');
                    \$(\"#pais\").val('');
                ";
        }
        // line 264
        yield "
                \$('#modalAddSolicitud').modal('show');
            });

            \$('#dataSolicitudAdmin, #dataSolicitudUser tbody').on('click', '.ver', function () {

                let row = \$(this).parents('tr');
                let idSolicitudR = parseInt(row.data('id'));
                let id;

                ";
        // line 274
        if ((isset($context["solicitar_recogidas"]) || array_key_exists("solicitar_recogidas", $context) ? $context["solicitar_recogidas"] : (function () { throw new RuntimeError('Variable "solicitar_recogidas" does not exist.', 274, $this->source); })())) {
            // line 275
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["solicitar_recogidas"]) || array_key_exists("solicitar_recogidas", $context) ? $context["solicitar_recogidas"] : (function () { throw new RuntimeError('Variable "solicitar_recogidas" does not exist.', 275, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["solicitar"]) {
                // line 276
                yield "                id = parseInt('";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "id", [], "any", false, false, false, 276), "html", null, true);
                yield "');
                if (id === idSolicitudR) {
                    \$('#mostrarNombre').text('Nombre del contacto: ' + '";
                // line 278
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "nombreContactoRecogida", [], "any", false, false, false, 278), "html", null, true);
                yield "');
                    \$('#mostrarDireccion').text('Dirección de recogida: ' + '";
                // line 279
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "direccionContactoRecogida", [], "any", false, false, false, 279), "html", null, true);
                yield "');
                    \$('#mostrarTelefono').text('Teléfono del contacto: ' + '";
                // line 280
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "telefonoContactoRecogida", [], "any", false, false, false, 280), "html", null, true);
                yield "');
                    \$('#mostrarCodigo').text('Código postal: ' + '";
                // line 281
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "codigoPostalContactoRecogida", [], "any", false, false, false, 281), "html", null, true);
                yield "');
                    \$('#mostrarPoblacion').text('Población: ' + '";
                // line 282
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "poblacionContactoRecogida", [], "any", false, false, false, 282), "html", null, true);
                yield "');
                    \$('#mostrarProvincia').text('Provincia: ' + '";
                // line 283
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "provinciaContactoRecogida", [], "any", false, false, false, 283), "html", null, true);
                yield "');
                    \$('#mostrarPais').text('País: ' + '";
                // line 284
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "paisContactoRecogida", [], "any", false, false, false, 284), "html", null, true);
                yield "');
                }
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            yield "                ";
        }
        // line 288
        yield "
                \$('#modalVerDireccion').modal('show');

            });

            \$('#dataSolicitudAdmin tbody').on('click', '.aprobar', function () {

                let row = \$(this).parents('tr');
                idSolicitud = row.data('id');

                \$('#modalAprobarSolicitud').modal('show');

            });

            \$('#dataSolicitudAdmin tbody').on('click', '.rechazar', function () {

                let row = \$(this).parents('tr');
                idSolicitud = row.data('id');

                \$('#modalRechazoSolicitud').modal('show');

            });

            \$('#btnAddSolicitudGuardar').on('click', function () {

                let Ruta = Routing.generate('app_solicitar_recogida_insert');

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre del contacto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#addPreferencia\").val() === '') {
                    toastr[\"error\"]('La información de preferencia, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                \$('#modalAddSolicitud').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idDireccion: idDireccion,
                    nombre: \$('#nombre').val(),
                    direccion: \$('#direccion').val(),
                    telefono: \$('#telefono').val(),
                    poblacion: \$('#poblacion').val(),
                    provincia: \$('#provincia').val(),
                    pais: \$('#pais').val(),
                    codigoPostal: \$('#codigoPostal').val(),
                    preferencia: \$('#addPreferencia').val()
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        toastr[\"success\"]('El solicitud de recogida ha sido enviada.', \"Notificación\")
                        window.location.href = \"";
        // line 349
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

            \$('#btnAddGuardar').on('click', function () {

                //Validaciones
                //fin de seamana
                if (diaSemanaRecogida === 6 || diaSemanaRecogida === 7) {
                    toastr[\"error\"]('No se permite recogidas el fin de semana.', \"Advertencia\")
                    return false;
                }
                //dias festivos
                // if (festivos.includes(fechaAprobacion)) {
                //     toastr[\"error\"]('No se permite recogidas los días festivos.', \"Advertencia\")
                //     return false;
                // }

                if (\$(\"#fechaRecogida\").val() === '') {
                    toastr[\"error\"]('La fecha de recogida es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#horaRecogida\").val() === '') {
                    toastr[\"error\"]('La hora inicial de recogida es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#horaFinRecogida\").val() === '') {
                    toastr[\"error\"]('La hora final de recogida es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                let Ruta = Routing.generate('app_solicitar_recogida_update', {'id': idSolicitud});

                \$('#modalAprobarSolicitud').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    fechaRecogida: \$(\"#fechaRecogida\").val(),
                    horaRecogida: \$(\"#horaRecogida\").val(),
                    horaFinRecogida: \$(\"#horaFinRecogida\").val(),
                    linkRecogida: \$(\"#linkRecogida\").val(),
                    observacionRecogida: \$(\"#observacion\").val()
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalAprobarSolicitud input').each(function () {
                            \$(this).val('');
                        });
                        toastr[\"success\"]('La solicitud de recogida ha sido aprobada', \"Notificación\")
                        window.location.href = \"";
        // line 410
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });
            });

            \$('#btnAddRechazoGuardar').on('click', function () {

                //Validaciones

                if (\$(\"#addMotivo\").val() === '') {
                    toastr[\"error\"]('El comentario de rechazo, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                let Ruta = Routing.generate('app_solicitar_recogida_rechazar', {'id': idSolicitud});

                \$('#modalRechazoSolicitud').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    motivo: \$(\"#addMotivo\").val(),
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalRechazoSolicitud input').each(function () {
                            \$(this).val('');
                        });
                        toastr[\"success\"]('La solicitud de recogida ha sido rechazada', \"Notificación\")
                        window.location.href = \"";
        // line 448
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
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
        return "solicitar_recogida/index.html.twig";
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
        return array (  798 => 448,  757 => 410,  693 => 349,  630 => 288,  627 => 287,  618 => 284,  614 => 283,  610 => 282,  606 => 281,  602 => 280,  598 => 279,  594 => 278,  588 => 276,  583 => 275,  581 => 274,  569 => 264,  558 => 255,  553 => 253,  549 => 252,  545 => 251,  541 => 250,  537 => 249,  533 => 248,  529 => 247,  524 => 246,  522 => 245,  486 => 211,  473 => 200,  471 => 199,  463 => 194,  459 => 193,  455 => 192,  451 => 191,  446 => 189,  442 => 188,  436 => 186,  429 => 185,  418 => 181,  414 => 180,  410 => 179,  406 => 178,  400 => 174,  393 => 169,  384 => 165,  378 => 163,  368 => 155,  365 => 154,  361 => 152,  355 => 150,  353 => 149,  348 => 148,  345 => 147,  341 => 145,  333 => 141,  331 => 140,  327 => 139,  323 => 138,  319 => 137,  315 => 136,  311 => 135,  306 => 134,  301 => 133,  283 => 117,  276 => 112,  267 => 108,  260 => 105,  245 => 92,  242 => 91,  233 => 84,  231 => 83,  228 => 82,  224 => 80,  218 => 78,  216 => 77,  211 => 76,  208 => 75,  204 => 73,  196 => 69,  194 => 68,  190 => 67,  186 => 66,  182 => 65,  178 => 64,  174 => 63,  170 => 62,  165 => 61,  160 => 60,  141 => 43,  138 => 42,  127 => 33,  125 => 32,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Solicitar Recogida{% endblock %}

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
                            <h1>Listado de Solicitudes Recogidas</h1>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        {% if is_granted('ROLE_USER') %}
                            <div class=\"row\">
                                <div class=\"col-md-3\">
                                    <button type=\"button\" class=\"btn btn-block bg-gradient-success\"
                                            id=\"btnNuevaSolicitud\">Crear Nueva
                                        Solicitud
                                    </button>
                                </div>
                            </div>
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            <div class=\"row\">
                                <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                    <table class=\"table table-bordered table-striped\" id=\"dataSolicitudAdmin\">
                                        <thead class=\"text-center\">
                                        <tr>
                                            <th>Fecha de Solicitud</th>
                                            <th>Usuario</th>
                                            <th>Preferencia</th>
                                            <th>Estado</th>
                                            <th>Fecha de recogida</th>
                                            <th>Hora de recogida</th>
                                            <th>Link de envío</th>
                                            <th>Comentarios</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"text-center\">
                                        {% for solicitar_recogida in solicitar_recogidas %}
                                            <tr data-id=\"{{ solicitar_recogida.id }}\">
                                                <td>{{ solicitar_recogida.fechaSolicitud ? solicitar_recogida.fechaSolicitud|date('Y-m-d') : '' }}</td>
                                                <td>{{ solicitar_recogida.user.nombre ~ ' ' ~ solicitar_recogida.user.apellidos }}</td>
                                                <td>{{ solicitar_recogida.indicadorSolicitud }}</td>
                                                <td>{{ solicitar_recogida.estado }}</td>
                                                <td>{{ solicitar_recogida.fechaRecogida ? solicitar_recogida.fechaRecogida|date('Y-m-d') : '' }}</td>
                                                <td>{{ solicitar_recogida.horaRecogida ? 'De ' ~ solicitar_recogida.horaRecogida|date('H:i:s') ~ ' a ' ~ solicitar_recogida.horaFinRecogida|date('H:i:s') : '' }}</td>
                                                {% if solicitar_recogida.linkRecogida %}
                                                    <td><a href=\"{{ solicitar_recogida.linkRecogida }}\"
                                                           target=\"_blank\">Ver datos del envío</a>
                                                    </td>
                                                {% else %}
                                                    <td></td>
                                                {% endif %}
                                                {% if solicitar_recogida.estado == 'Aprobada' %}
                                                    <td>{{ solicitar_recogida.observacionRecogida }}</td>
                                                {% elseif solicitar_recogida.estado == 'Rechazada' %}
                                                    <td>{{ solicitar_recogida.motivoRechazo }}</td>
                                                {% else %}
                                                    <td></td>
                                                {% endif %}
                                                <td style=\"margin: 0 auto;\">
                                                    {% if solicitar_recogida.nombreContactoRecogida != '' %}
                                                        <button
                                                                class=\"btn btn-primary ver\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Ver dirección de recogida\"><i
                                                                    class=\"fas fa-eye\"></i>
                                                        </button>
                                                    {% endif %}
                                                    {% if solicitar_recogida.estado == 'Sin aprobar' %}
                                                        <button
                                                                class=\"btn btn-success aprobar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Aprobar solicitud\"><i
                                                                    class=\"fas fa-check\"></i>
                                                        </button>
                                                        <button
                                                                class=\"btn btn-secondary rechazar\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Rechazar solicitud\"><i
                                                                    class=\"fas fa-ban\"></i>
                                                        </button>
                                                    {% endif %}
                                                </td>
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"9\">No se encontraron registros</td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"row\">
                                <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                    <table class=\"table table-bordered table-striped\" id=\"dataSolicitudUser\">
                                        <thead class=\"text-center\">
                                        <tr>
                                            <th>Fecha de Solicitud</th>
                                            <th>Preferencia</th>
                                            <th>Estado</th>
                                            <th>Fecha de recogida</th>
                                            <th>Hora de recogida</th>
                                            <th>Link de envío</th>
                                            <th>Comentarios</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"text-center\">
                                        {% for solicitar_recogida in solicitar_recogidas %}
                                            <tr data-id=\"{{ solicitar_recogida.id }}\">
                                                <td>{{ solicitar_recogida.fechaSolicitud ? solicitar_recogida.fechaSolicitud|date('Y-m-d') : '' }}</td>
                                                <td>{{ solicitar_recogida.indicadorSolicitud }}</td>
                                                <td>{{ solicitar_recogida.estado }}</td>
                                                <td>{{ solicitar_recogida.fechaRecogida ? solicitar_recogida.fechaRecogida|date('Y-m-d') : '' }}</td>
                                                <td>{{ solicitar_recogida.horaRecogida ? 'De ' ~ solicitar_recogida.horaRecogida|date('H:i:s') ~ ' a ' ~ solicitar_recogida.horaFinRecogida|date('H:i:s') : '' }}</td>
                                                {% if solicitar_recogida.linkRecogida %}
                                                    <td><a href=\"{{ solicitar_recogida.linkRecogida }}\"
                                                           target=\"_blank\">Ver datos del envío</a>
                                                    </td>
                                                {% else %}
                                                    <td></td>
                                                {% endif %}
                                                {% if solicitar_recogida.estado == 'Aprobada' %}
                                                    <td>{{ solicitar_recogida.observacionRecogida }}</td>
                                                {% elseif solicitar_recogida.estado == 'Rechazada' %}
                                                    <td>{{ solicitar_recogida.motivoRechazo }}</td>
                                                {% else %}
                                                    <td></td>
                                                {% endif %}
                                                {% if solicitar_recogida.nombreContactoRecogida != '' %}
                                                    <td style=\"margin: 0 auto;\">
                                                        <button class=\"btn btn-primary ver\"
                                                                data-toggle=\"tooltip\"
                                                                title=\"Ver dirección de recogida\"><i
                                                                    class=\"fas fa-eye\"></i>
                                                        </button>
                                                    </td>
                                                {% endif %}
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
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        {{ include('solicitar_recogida/modalAddSolicitud.html.twig') }}
        {{ include('solicitar_recogida/modalAprobarSolicitud.html.twig') }}
        {{ include('solicitar_recogida/modalRechazoSolicitud.html.twig') }}
        {{ include('solicitar_recogida/modalVerDireccion.html.twig') }}
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


            {% if solicitar_recogidas|length > 0 %}
            \$('#dataSolicitudAdmin, #dataSolicitudUser').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[10], [10]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });
            {% endif %}

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

            let idSolicitud, diaSemanaRecogida, fechaAprobacion, idDireccion;
            const festivos = ['1/1', '6/1', '15/4', '15/8', '12/10', '1/11', '6/12', '8/12'];

            \$('#fechaRecogida').on('change', function () {
                const fecha = new Date(\$(\"#fechaRecogida\").val());
                diaSemanaRecogida = fecha.getDay() + 1;
                fechaAprobacion = fecha.setDate(fecha.getDate() + 1);
                fechaAprobacion = new Date(fechaAprobacion).toLocaleDateString('es', {
                    month: \"numeric\",
                    day: \"numeric\"
                });
            });

            \$('#btnNuevaSolicitud').on('click', function () {
                \$('#addPreferencia').val('');
                {% if direccion %}
                    idDireccion = '{{ direccion.id }}';
                    \$('#nombre').val('{{ direccion.nombre }}');
                    \$('#direccion').val('{{ direccion.direccion }}');
                    \$('#telefono').val('{{ direccion.telefono }}');
                    \$(\"#codigoPostal\").val('{{ direccion.codigoPostal }}');
                    \$(\"#poblacion\").val('{{ direccion.poblacion }}');
                    \$(\"#provincia\").val('{{ direccion.provincia }}');
                    \$(\"#pais\").val('{{ direccion.pais }}');
                {% else %}
                    idDireccion = '';
                    \$('#nombre').val('');
                    \$('#direccion').val('');
                    \$('#telefono').val('');
                    \$(\"#codigoPostal\").val('');
                    \$(\"#poblacion\").val('');
                    \$(\"#provincia\").val('');
                    \$(\"#pais\").val('');
                {% endif %}

                \$('#modalAddSolicitud').modal('show');
            });

            \$('#dataSolicitudAdmin, #dataSolicitudUser tbody').on('click', '.ver', function () {

                let row = \$(this).parents('tr');
                let idSolicitudR = parseInt(row.data('id'));
                let id;

                {% if solicitar_recogidas %}
                {% for solicitar in solicitar_recogidas %}
                id = parseInt('{{ solicitar.id }}');
                if (id === idSolicitudR) {
                    \$('#mostrarNombre').text('Nombre del contacto: ' + '{{ solicitar.nombreContactoRecogida }}');
                    \$('#mostrarDireccion').text('Dirección de recogida: ' + '{{ solicitar.direccionContactoRecogida }}');
                    \$('#mostrarTelefono').text('Teléfono del contacto: ' + '{{ solicitar.telefonoContactoRecogida }}');
                    \$('#mostrarCodigo').text('Código postal: ' + '{{ solicitar.codigoPostalContactoRecogida }}');
                    \$('#mostrarPoblacion').text('Población: ' + '{{ solicitar.poblacionContactoRecogida }}');
                    \$('#mostrarProvincia').text('Provincia: ' + '{{ solicitar.provinciaContactoRecogida }}');
                    \$('#mostrarPais').text('País: ' + '{{ solicitar.paisContactoRecogida }}');
                }
                {% endfor %}
                {% endif %}

                \$('#modalVerDireccion').modal('show');

            });

            \$('#dataSolicitudAdmin tbody').on('click', '.aprobar', function () {

                let row = \$(this).parents('tr');
                idSolicitud = row.data('id');

                \$('#modalAprobarSolicitud').modal('show');

            });

            \$('#dataSolicitudAdmin tbody').on('click', '.rechazar', function () {

                let row = \$(this).parents('tr');
                idSolicitud = row.data('id');

                \$('#modalRechazoSolicitud').modal('show');

            });

            \$('#btnAddSolicitudGuardar').on('click', function () {

                let Ruta = Routing.generate('app_solicitar_recogida_insert');

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre del contacto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#addPreferencia\").val() === '') {
                    toastr[\"error\"]('La información de preferencia, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                \$('#modalAddSolicitud').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    idDireccion: idDireccion,
                    nombre: \$('#nombre').val(),
                    direccion: \$('#direccion').val(),
                    telefono: \$('#telefono').val(),
                    poblacion: \$('#poblacion').val(),
                    provincia: \$('#provincia').val(),
                    pais: \$('#pais').val(),
                    codigoPostal: \$('#codigoPostal').val(),
                    preferencia: \$('#addPreferencia').val()
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        toastr[\"success\"]('El solicitud de recogida ha sido enviada.', \"Notificación\")
                        window.location.href = \"{{ path('app_solicitar_recogida_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

            \$('#btnAddGuardar').on('click', function () {

                //Validaciones
                //fin de seamana
                if (diaSemanaRecogida === 6 || diaSemanaRecogida === 7) {
                    toastr[\"error\"]('No se permite recogidas el fin de semana.', \"Advertencia\")
                    return false;
                }
                //dias festivos
                // if (festivos.includes(fechaAprobacion)) {
                //     toastr[\"error\"]('No se permite recogidas los días festivos.', \"Advertencia\")
                //     return false;
                // }

                if (\$(\"#fechaRecogida\").val() === '') {
                    toastr[\"error\"]('La fecha de recogida es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#horaRecogida\").val() === '') {
                    toastr[\"error\"]('La hora inicial de recogida es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#horaFinRecogida\").val() === '') {
                    toastr[\"error\"]('La hora final de recogida es obligatoria, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                let Ruta = Routing.generate('app_solicitar_recogida_update', {'id': idSolicitud});

                \$('#modalAprobarSolicitud').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    fechaRecogida: \$(\"#fechaRecogida\").val(),
                    horaRecogida: \$(\"#horaRecogida\").val(),
                    horaFinRecogida: \$(\"#horaFinRecogida\").val(),
                    linkRecogida: \$(\"#linkRecogida\").val(),
                    observacionRecogida: \$(\"#observacion\").val()
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalAprobarSolicitud input').each(function () {
                            \$(this).val('');
                        });
                        toastr[\"success\"]('La solicitud de recogida ha sido aprobada', \"Notificación\")
                        window.location.href = \"{{ path('app_solicitar_recogida_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });
            });

            \$('#btnAddRechazoGuardar').on('click', function () {

                //Validaciones

                if (\$(\"#addMotivo\").val() === '') {
                    toastr[\"error\"]('El comentario de rechazo, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }

                let Ruta = Routing.generate('app_solicitar_recogida_rechazar', {'id': idSolicitud});

                \$('#modalRechazoSolicitud').modal('hide');

                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    motivo: \$(\"#addMotivo\").val(),
                };

                \$.ajax({
                    url: Ruta,
                    type: \"post\",
                    dataType: \"html\",
                    data: mat_datos,
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');
                    if (data === 'ok') {
                        \$('#modalRechazoSolicitud input').each(function () {
                            \$(this).val('');
                        });
                        toastr[\"success\"]('La solicitud de recogida ha sido rechazada', \"Notificación\")
                        window.location.href = \"{{ path('app_solicitar_recogida_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Notificación\")
                    }
                });
            });

        });
    </script>
{% endblock %}
", "solicitar_recogida/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\solicitar_recogida\\index.html.twig");
    }
}
