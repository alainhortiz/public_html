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

/* user/show.html.twig */
class __TwigTemplate_ff864d099de228bfebcb664fcf0aa3be extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Datos de Cuenta";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 6
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <section class=\"content\">
                    <!-- Default box -->
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            ";
        // line 15
        if ((((isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 15, $this->source); })()) < 0) || ((isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 15, $this->source); })()) > 0))) {
            // line 16
            echo "                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\" data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\" disabled>
                                        <span class=\"info-box-icon bg-info\"><i class=\"fa fa-dollar-sign\"></i></span>
                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Productos Generales</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-dollar-sign\"></i> ";
            // line 25
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 25, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            ";
        }
        // line 32
        echo "                            <!-- /.col -->
                            ";
        // line 33
        if ((((isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 33, $this->source); })()) < 0) || ((isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 33, $this->source); })()) > 0))) {
            // line 34
            echo "                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\"
                                         data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\">
                                        <span class=\"info-box-icon bg-info\"><i class=\"fa fa-euro-sign\"></i></span>

                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Productos Generales</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-euro-sign\"></i> ";
            // line 45
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 45, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            ";
        }
        // line 52
        echo "                            <!-- /.col -->
                            ";
        // line 53
        if ((((isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 53, $this->source); })()) < 0) || ((isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 53, $this->source); })()) > 0))) {
            // line 54
            echo "                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\"
                                         data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\">
                                        <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-dollar-sign\"></i></span>

                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Libros</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-dollar-sign\"></i> ";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 65, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            ";
        }
        // line 72
        echo "                            <!-- /.col -->
                            ";
        // line 73
        if ((((isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 73, $this->source); })()) < 0) || ((isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 73, $this->source); })()) > 0))) {
            // line 74
            echo "                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\"
                                         data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\">
                                        <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-euro-sign\"></i></span>

                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Productos Libros</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-euro-sign\"></i> ";
            // line 85
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 85, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            ";
        }
        // line 92
        echo "                            <!-- /.col -->
                            ";
        // line 93
        if ((((isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 93, $this->source); })()) < 0) || ((isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 93, $this->source); })()) > 0))) {
            // line 94
            echo "                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\"
                                         data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\">
                                        <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-dollar-sign\"></i></span>

                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Servicios</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-dollar-sign\"></i> ";
            // line 105
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 105, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            ";
        }
        // line 112
        echo "                            <!-- /.col -->
                            ";
        // line 113
        if ((((isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 113, $this->source); })()) < 0) || ((isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 113, $this->source); })()) > 0))) {
            // line 114
            echo "                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\"
                                         data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\">
                                        <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-euro-sign\"></i></span>

                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Servicios</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-euro-sign\"></i> ";
            // line 125
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 125, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            ";
        }
        // line 132
        echo "                            <!-- /.col -->
                        </div>
                    </div><!-- /.card -->
                </section>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Informaci&oacute;n de la cuenta de ";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "nombre", [], "any", false, false, false, 139), "html", null, true);
        echo "</h3>
                        </div>
                    </div>

                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>Nombre</th>
                            <td>";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 147, $this->source); })()), "nombre", [], "any", false, false, false, 147), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Apellidos</th>
                            <td>";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "apellidos", [], "any", false, false, false, 151), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Empresa</th>
                            <td>";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 155, $this->source); })()), "empresa", [], "any", false, false, false, 155), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>NIF/CIF</th>
                            <td>";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 159, $this->source); })()), "nifcif", [], "any", false, false, false, 159), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Direcci&oacute;n</th>
                            <td>";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 163, $this->source); })()), "direccion", [], "any", false, false, false, 163), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Poblaci&oacute;n</th>
                            <td>";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "poblacion", [], "any", false, false, false, 167), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Provincia</th>
                            <td>";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 171, $this->source); })()), "provincia", [], "any", false, false, false, 171), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Pa&iacute;s</th>
                            <td>";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 175, $this->source); })()), "pais", [], "any", false, false, false, 175), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "email", [], "any", false, false, false, 179), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Código Postal</th>
                            <td>";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 183, $this->source); })()), "codigoPostal", [], "any", false, false, false, 183), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Roles</th>
                            <td>";
        // line 187
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 187, $this->source); })()), "roles", [], "any", false, false, false, 187)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 187, $this->source); })()), "roles", [], "any", false, false, false, 187)), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tel&eacute;fono</th>
                            <td>";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 191, $this->source); })()), "telefono", [], "any", false, false, false, 191), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Emite Factura</th>
                            <td>";
        // line 195
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 195, $this->source); })()), "emitirfactura", [], "any", false, false, false, 195)) ? ("Si") : ("No"));
        echo "</td>
                        </tr>
                        <tr>
                            <th>Productos Asignados</th>
                            ";
        // line 199
        if ((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 199, $this->source); })())) {
            // line 200
            echo "                                <td class=\"form-group\">
                                    <label>
                                        <select multiple=\"\" class=\"custom-select\" disabled=\"\">
                                            ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 203, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["usuarioid"]) {
                // line 204
                echo "                                                <option>";
                echo twig_escape_filter($this->env, $context["usuarioid"], "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarioid'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                                        </select>
                                    </label>
                                </td>
                            ";
        } else {
            // line 210
            echo "                                <td>No tiene</td>
                            ";
        }
        // line 212
        echo "                        </tr>
                        <tr>
                            <th>Servicios Asignados</th>
                            ";
        // line 215
        if ((isset($context["servicios"]) || array_key_exists("servicios", $context) ? $context["servicios"] : (function () { throw new RuntimeError('Variable "servicios" does not exist.', 215, $this->source); })())) {
            // line 216
            echo "                                <td class=\"form-group\">
                                    <label>
                                        <select multiple=\"\" class=\"custom-select\" disabled=\"\">
                                            ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["servicios"]) || array_key_exists("servicios", $context) ? $context["servicios"] : (function () { throw new RuntimeError('Variable "servicios" does not exist.', 219, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["usuariosid"]) {
                // line 220
                echo "                                                <option>";
                echo twig_escape_filter($this->env, $context["usuariosid"], "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuariosid'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                                        </select>
                                    </label>
                                </td>
                            ";
        } else {
            // line 226
            echo "                                <td>No tiene</td>
                            ";
        }
        // line 228
        echo "                        </tr>
                        </tbody>
                    </table>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\" href=\"";
        // line 232
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 235, $this->source); })()), "id", [], "any", false, false, false, 235)]), "html", null, true);
        echo "\">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 235,  429 => 232,  423 => 228,  419 => 226,  413 => 222,  404 => 220,  400 => 219,  395 => 216,  393 => 215,  388 => 212,  384 => 210,  378 => 206,  369 => 204,  365 => 203,  360 => 200,  358 => 199,  351 => 195,  344 => 191,  337 => 187,  330 => 183,  323 => 179,  316 => 175,  309 => 171,  302 => 167,  295 => 163,  288 => 159,  281 => 155,  274 => 151,  267 => 147,  256 => 139,  247 => 132,  237 => 125,  224 => 114,  222 => 113,  219 => 112,  209 => 105,  196 => 94,  194 => 93,  191 => 92,  181 => 85,  168 => 74,  166 => 73,  163 => 72,  153 => 65,  140 => 54,  138 => 53,  135 => 52,  125 => 45,  112 => 34,  110 => 33,  107 => 32,  97 => 25,  86 => 16,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Datos de Cuenta{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <section class=\"content\">
                    <!-- Default box -->
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            {% if bolsaGeneralDolar < 0  or bolsaGeneralDolar > 0 %}
                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\" data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\" disabled>
                                        <span class=\"info-box-icon bg-info\"><i class=\"fa fa-dollar-sign\"></i></span>
                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Productos Generales</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-dollar-sign\"></i> {{ bolsaGeneralDolar|number_format(2, '.', ',') }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            {% endif %}
                            <!-- /.col -->
                            {% if bolsaGeneralEuros < 0 or bolsaGeneralEuros > 0 %}
                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\"
                                         data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\">
                                        <span class=\"info-box-icon bg-info\"><i class=\"fa fa-euro-sign\"></i></span>

                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Productos Generales</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-euro-sign\"></i> {{ bolsaGeneralEuros|number_format(2, '.', ',') }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            {% endif %}
                            <!-- /.col -->
                            {% if bolsaLibroDolar < 0 or bolsaLibroDolar > 0 %}
                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\"
                                         data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\">
                                        <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-dollar-sign\"></i></span>

                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Libros</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-dollar-sign\"></i> {{ bolsaLibroDolar|number_format(2, '.', ',') }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            {% endif %}
                            <!-- /.col -->
                            {% if bolsaLibroEuros < 0 or bolsaLibroEuros > 0 %}
                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\"
                                         data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\">
                                        <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-euro-sign\"></i></span>

                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Productos Libros</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-euro-sign\"></i> {{ bolsaLibroEuros|number_format(2, '.', ',') }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            {% endif %}
                            <!-- /.col -->
                            {% if bolsaServicioDolar < 0 or bolsaServicioDolar > 0 %}
                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\"
                                         data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\">
                                        <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-dollar-sign\"></i></span>

                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Servicios</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-dollar-sign\"></i> {{ bolsaServicioDolar|number_format(2, '.', ',') }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            {% endif %}
                            <!-- /.col -->
                            {% if bolsaServicioEuros < 0 or bolsaServicioEuros > 0 %}
                                <div class=\"col-12 col-sm-4 col-md-4\">
                                    <div class=\"info-box\"
                                         data-toggle=\"tooltip\"
                                         data-placement=\"top\"
                                         title=\"Solicitar pago de royalties\">
                                        <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-euro-sign\"></i></span>

                                        <div class=\"info-box-content\">
                                            <span class=\"info-box-text text-bold\">Servicios</span>
                                            <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                            <span class=\"info-box-number\"><i
                                                        class=\"fa fa-euro-sign\"></i> {{ bolsaServicioEuros|number_format(2, '.', ',') }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            {% endif %}
                            <!-- /.col -->
                        </div>
                    </div><!-- /.card -->
                </section>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3>Informaci&oacute;n de la cuenta de {{ user.nombre }}</h3>
                        </div>
                    </div>

                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>Nombre</th>
                            <td>{{ user.nombre }}</td>
                        </tr>
                        <tr>
                            <th>Apellidos</th>
                            <td>{{ user.apellidos }}</td>
                        </tr>
                        <tr>
                            <th>Empresa</th>
                            <td>{{ user.empresa }}</td>
                        </tr>
                        <tr>
                            <th>NIF/CIF</th>
                            <td>{{ user.nifcif }}</td>
                        </tr>
                        <tr>
                            <th>Direcci&oacute;n</th>
                            <td>{{ user.direccion }}</td>
                        </tr>
                        <tr>
                            <th>Poblaci&oacute;n</th>
                            <td>{{ user.poblacion }}</td>
                        </tr>
                        <tr>
                            <th>Provincia</th>
                            <td>{{ user.provincia }}</td>
                        </tr>
                        <tr>
                            <th>Pa&iacute;s</th>
                            <td>{{ user.pais }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ user.email }}</td>
                        </tr>
                        <tr>
                            <th>Código Postal</th>
                            <td>{{ user.codigoPostal }}</td>
                        </tr>
                        <tr>
                            <th>Roles</th>
                            <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                        </tr>
                        <tr>
                            <th>Tel&eacute;fono</th>
                            <td>{{ user.telefono }}</td>
                        </tr>
                        <tr>
                            <th>Emite Factura</th>
                            <td>{{ user.emitirfactura ? 'Si' : 'No' }}</td>
                        </tr>
                        <tr>
                            <th>Productos Asignados</th>
                            {% if productos %}
                                <td class=\"form-group\">
                                    <label>
                                        <select multiple=\"\" class=\"custom-select\" disabled=\"\">
                                            {% for usuarioid in productos %}
                                                <option>{{ usuarioid }}</option>
                                            {% endfor %}
                                        </select>
                                    </label>
                                </td>
                            {% else %}
                                <td>No tiene</td>
                            {% endif %}
                        </tr>
                        <tr>
                            <th>Servicios Asignados</th>
                            {% if servicios %}
                                <td class=\"form-group\">
                                    <label>
                                        <select multiple=\"\" class=\"custom-select\" disabled=\"\">
                                            {% for usuariosid in servicios %}
                                                <option>{{ usuariosid }}</option>
                                            {% endfor %}
                                        </select>
                                    </label>
                                </td>
                            {% else %}
                                <td>No tiene</td>
                            {% endif %}
                        </tr>
                        </tbody>
                    </table>
                    <div style=\"padding: 20px\">
                        <a class=\"btn btn-danger\" style=\"float: left\" href=\"{{ path('app_user_index') }}\">Regresar</a>

                        <a class=\"btn btn-success\" style=\"float: right\"
                           href=\"{{ path('app_user_form_edit', {'id': user.id}) }}\">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "user/show.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\user\\show.html.twig");
    }
}
