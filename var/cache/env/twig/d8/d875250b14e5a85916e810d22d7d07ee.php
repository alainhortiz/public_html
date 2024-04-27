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

/* historial_retiro_saldo/index.html.twig */
class __TwigTemplate_26cd392fb64cdad11b23a8a553f95222 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historial_retiro_saldo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historial_retiro_saldo/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Retiros de royalties realizados";
        
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
        yield "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\" style=\"background-color: #343a40\">
                        <div class=\"card-title text-white\">
                            <h3>Retiros de royalties realizados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataRetiros\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 31
            yield "                                            <th>Usuario</th>
                                        ";
        }
        // line 33
        yield "                                        <th>Fecha</th>
                                        <th>Cantidad</th>
                                        <th>Motivo</th>
                                        <th>Documento</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 40
        $context["moneda"] = "";
        // line 41
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["retiros"]) || array_key_exists("retiros", $context) ? $context["retiros"] : (function () { throw new RuntimeError('Variable "retiros" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["retiro"]) {
            // line 42
            yield "                                        ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["retiro"], "tipoSaldo", [], "any", false, false, false, 42) == 1) || (CoreExtension::getAttribute($this->env, $this->source, $context["retiro"], "tipoSaldo", [], "any", false, false, false, 42) == 3)) || (CoreExtension::getAttribute($this->env, $this->source, $context["retiro"], "tipoSaldo", [], "any", false, false, false, 42) == 5))) {
                // line 43
                yield "                                            ";
                $context["moneda"] = "USD";
                // line 44
                yield "                                        ";
            } else {
                // line 45
                yield "                                            ";
                $context["moneda"] = "EUR";
                // line 46
                yield "                                        ";
            }
            // line 47
            yield "                                        <tr class=\"text-center\">
                                            ";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 49
                yield "                                                <td>";
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["retiro"], "user", [], "any", false, false, false, 49), "nombre", [], "any", false, false, false, 49) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["retiro"], "user", [], "any", false, false, false, 49), "apellidos", [], "any", false, false, false, 49)), "html", null, true);
                yield "</td>
                                            ";
            }
            // line 51
            yield "                                            <td>";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["retiro"], "fecha", [], "any", false, false, false, 51), "Y-m-d h:i:s"), "html", null, true);
            yield "</td>
                                            <td>";
            // line 52
            yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["retiro"], "cantidad", [], "any", false, false, false, 52), 2, ".", ",") . " ") . (isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 52, $this->source); })())), "html", null, true);
            yield "</td>
                                            <td>";
            // line 53
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["retiro"], "motivo", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                            ";
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, $context["retiro"], "documento", [], "any", false, false, false, 54)) {
                // line 55
                yield "                                                <td><a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["retiro"], "documento", [], "any", false, false, false, 55))), "html", null, true);
                yield "\"
                                                       target=\"_blank\">Ver
                                                        Documento adjunto</a>
                                                </td>
                                            ";
            } else {
                // line 60
                yield "                                                <td>-</td>
                                            ";
            }
            // line 62
            yield "                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            yield "                                        <tr>
                                            <td colspan=\"5\">No se encontraron retiros realizados</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retiro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- DataTables -->
    <script src=\"";
        // line 82
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 83
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 84
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 85
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$(function () {

            \$('#dataRetiros').DataTable({
                \"paging\": true,
                \"order\": [1, \"desc\"],
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[10], [10]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
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
        return "historial_retiro_saldo/index.html.twig";
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
        return array (  257 => 85,  253 => 84,  249 => 83,  245 => 82,  239 => 80,  232 => 79,  215 => 68,  206 => 64,  200 => 62,  196 => 60,  187 => 55,  185 => 54,  181 => 53,  177 => 52,  172 => 51,  166 => 49,  164 => 48,  161 => 47,  158 => 46,  155 => 45,  152 => 44,  149 => 43,  146 => 42,  140 => 41,  138 => 40,  129 => 33,  125 => 31,  123 => 30,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Retiros de royalties realizados{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"card-header\" style=\"background-color: #343a40\">
                        <div class=\"card-title text-white\">
                            <h3>Retiros de royalties realizados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                <table class=\"table table-bordered table-striped\" id=\"dataRetiros\">
                                    <thead class=\"text-center\">
                                    <tr>
                                        {% if is_granted('ROLE_ADMIN') %}
                                            <th>Usuario</th>
                                        {% endif %}
                                        <th>Fecha</th>
                                        <th>Cantidad</th>
                                        <th>Motivo</th>
                                        <th>Documento</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% set moneda = '' %}
                                    {% for retiro in retiros %}
                                        {% if retiro.tipoSaldo == 1 or retiro.tipoSaldo == 3 or retiro.tipoSaldo == 5 %}
                                            {% set moneda = 'USD' %}
                                        {% else %}
                                            {% set moneda = 'EUR' %}
                                        {% endif %}
                                        <tr class=\"text-center\">
                                            {% if is_granted('ROLE_ADMIN') %}
                                                <td>{{ retiro.user.nombre ~ ' ' ~ retiro.user.apellidos }}</td>
                                            {% endif %}
                                            <td>{{ retiro.fecha|date('Y-m-d h:i:s') }}</td>
                                            <td>{{ retiro.cantidad|number_format(2, '.', ',') ~ ' ' ~ moneda }}</td>
                                            <td>{{ retiro.motivo }}</td>
                                            {% if retiro.documento %}
                                                <td><a href=\"{{ asset('uploads/' ~ retiro.documento) }}\"
                                                       target=\"_blank\">Ver
                                                        Documento adjunto</a>
                                                </td>
                                            {% else %}
                                                <td>-</td>
                                            {% endif %}
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"5\">No se encontraron retiros realizados</td>
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
    <!-- DataTables -->
    <script src=\"{{ asset('plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}\"></script>
    <script>
        \$(function () {

            \$('#dataRetiros').DataTable({
                \"paging\": true,
                \"order\": [1, \"desc\"],
                \"lengthChange\": false,
                \"searching\": true,
                \"lengthMenu\": [[10], [10]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });
        });
    </script>
{% endblock %}
", "historial_retiro_saldo/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\historial_retiro_saldo\\index.html.twig");
    }
}
