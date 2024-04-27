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

/* historial_retiro_saldo/index.html.twig */
class __TwigTemplate_cc484c87a0fd97575afbe56bfac46d49 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Retiros de royalties realizados";
        
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
        echo "    <!-- Content Wrapper. Contains page content -->
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
            echo "                                            <th>Usuario</th>
                                        ";
        }
        // line 33
        echo "                                        <th>Fecha</th>
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
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retiros"]) || array_key_exists("retiros", $context) ? $context["retiros"] : (function () { throw new RuntimeError('Variable "retiros" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["retiro"]) {
            // line 42
            echo "                                        ";
            if ((((twig_get_attribute($this->env, $this->source, $context["retiro"], "tipoSaldo", [], "any", false, false, false, 42) == 1) || (twig_get_attribute($this->env, $this->source, $context["retiro"], "tipoSaldo", [], "any", false, false, false, 42) == 3)) || (twig_get_attribute($this->env, $this->source, $context["retiro"], "tipoSaldo", [], "any", false, false, false, 42) == 5))) {
                // line 43
                echo "                                            ";
                $context["moneda"] = "USD";
                // line 44
                echo "                                        ";
            } else {
                // line 45
                echo "                                            ";
                $context["moneda"] = "EUR";
                // line 46
                echo "                                        ";
            }
            // line 47
            echo "                                        <tr class=\"text-center\">
                                            ";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "                                                <td>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["retiro"], "user", [], "any", false, false, false, 49), "nombre", [], "any", false, false, false, 49) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["retiro"], "user", [], "any", false, false, false, 49), "apellidos", [], "any", false, false, false, 49)), "html", null, true);
                echo "</td>
                                            ";
            }
            // line 51
            echo "                                            <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retiro"], "fecha", [], "any", false, false, false, 51), "Y-m-d h:i:s"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 52
            echo twig_escape_filter($this->env, ((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retiro"], "cantidad", [], "any", false, false, false, 52), 2, ".", ",") . " ") . (isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 52, $this->source); })())), "html", null, true);
            echo "</td>
                                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retiro"], "motivo", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                            ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["retiro"], "documento", [], "any", false, false, false, 54)) {
                // line 55
                echo "                                                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["retiro"], "documento", [], "any", false, false, false, 55))), "html", null, true);
                echo "\"
                                                       target=\"_blank\">Ver
                                                        Documento adjunto</a>
                                                </td>
                                            ";
            } else {
                // line 60
                echo "                                                <td>-</td>
                                            ";
            }
            // line 62
            echo "                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "                                        <tr>
                                            <td colspan=\"5\">No se encontraron retiros realizados</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retiro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- DataTables -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
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

    }

    public function getTemplateName()
    {
        return "historial_retiro_saldo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 85,  249 => 84,  245 => 83,  241 => 82,  235 => 80,  228 => 79,  212 => 68,  203 => 64,  197 => 62,  193 => 60,  184 => 55,  182 => 54,  178 => 53,  174 => 52,  169 => 51,  163 => 49,  161 => 48,  158 => 47,  155 => 46,  152 => 45,  149 => 44,  146 => 43,  143 => 42,  137 => 41,  135 => 40,  126 => 33,  122 => 31,  120 => 30,  101 => 13,  94 => 12,  85 => 9,  81 => 8,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
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
