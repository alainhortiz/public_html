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

/* resumen/index.html.twig */
class __TwigTemplate_30636d0f6ac29fb46040bdfedb94bb6a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resumen/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "resumen/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Resumen";
        
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
        yield "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Resumen</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\">Inicio</li>
                            <li class=\"breadcrumb-item active\">Resumen</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 27
            yield "            <!-- Main content -->
            <section class=\"content\">
                <div class=\"container-fluid\">
                    <!-- Info boxes -->
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"info-box\">
                                <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-users\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total Usuarios activos</span>
                                    <span class=\"info-box-number\">";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalu"]) || array_key_exists("totalu", $context) ? $context["totalu"] : (function () { throw new RuntimeError('Variable "totalu" does not exist.', 38, $this->source); })()), "html", null, true);
            yield "</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"info-box mb-3\">
                            <span class=\"info-box-icon bg-warning elevation-1\"><i
                                        class=\"fas fa-users\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total de Usuarios inactivos</span>
                                    <span class=\"info-box-number\">";
            // line 52
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totali"]) || array_key_exists("totali", $context) ? $context["totali"] : (function () { throw new RuntimeError('Variable "totali" does not exist.', 52, $this->source); })()), "html", null, true);
            yield "</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-2\">
                            <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-danger elevation-1\"><i
                                                class=\"fas fa-copy\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total Productos</span>
                                    <span class=\"info-box-number\">";
            // line 67
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalp"]) || array_key_exists("totalp", $context) ? $context["totalp"] : (function () { throw new RuntimeError('Variable "totalp" does not exist.', 67, $this->source); })()), "html", null, true);
            yield "</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-2\">
                            <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-blue elevation-1\"><i
                                                class=\"fas fa-wrench\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total Servicios</span>
                                    <span class=\"info-box-number\">";
            // line 83
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class=\"clearfix hidden-md-up\"></div>

                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-2\">
                            <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-success elevation-1\"><i
                                                class=\"fas fa-shopping-cart\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total de Ventas</span>
                                    <span class=\"info-box-number\">";
            // line 101
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalv"]) || array_key_exists("totalv", $context) ? $context["totalv"] : (function () { throw new RuntimeError('Variable "totalv" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- USERS LIST -->
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Nuevos Usuarios</strong></h3>

                                    <div class=\"card-tools\">
                                        <button type=\"button\" class=\"btn btn-tool\"
                                                data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-tool\"
                                                data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body p-0\">
                                    <ul class=\"users-list clearfix\">
                                        ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 130, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 131
                yield "                                            <li>
                                                ";
                // line 132
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 132)) {
                    // line 133
                    yield "                                                    <img src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 133))), "html", null, true);
                    yield "\"
                                                         alt=\"User Image\" width=\"80\" height=\"80\">
                                                ";
                } else {
                    // line 136
                    yield "                                                    <img src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/usuarioanonimo.png"), "html", null, true);
                    yield "\"
                                                         alt=\"User Image\" width=\"80\" height=\"80\">
                                                ";
                }
                // line 139
                yield "                                                <a class=\"users-list-name\" href=\"#\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 139), "html", null, true);
                yield "</a>
                                                <span class=\"users-list-date\">";
                // line 140
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["fecha"]) || array_key_exists("fecha", $context) ? $context["fecha"] : (function () { throw new RuntimeError('Variable "fecha" does not exist.', 140, $this->source); })()), "html", null, true);
                yield "</span>
                                                ";
                // line 141
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 141)) {
                    // line 142
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 142), 0, [], "array", false, false, false, 142) == "ROLE_ADMIN")) {
                        // line 143
                        yield "                                                        <span class=\"users-list-date\">Administrador</span>
                                                    ";
                    }
                    // line 145
                    yield "                                                ";
                }
                // line 146
                yield "                                            </li>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 148
                yield "                                            <li>
                                                <span>No se encontraron registros</span>
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            yield "                                    </ul>
                                    <!-- /.users-list -->
                                </div>
                                <!-- /.card-body -->
                                <div class=\"card-footer text-center\">
                                    <a href=\"";
            // line 157
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">Ver Todos los Usuarios</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!-- /.col -->

                        <!-- TABLE: LATEST ORDERS -->
                        <div class=\"col-md-12\">
                            <div class=\"card\">
                                <div class=\"card-header border-transparent\">
                                    <h3 class=\"card-title\"><strong>Últimas Ventas</strong></h3>

                                    <div class=\"card-tools\">
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                            <i class=\"fas fa-minus\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                            <i class=\"fas fa-times\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body p-0\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table m-0\">
                                            <thead>
                                            <tr>
                                                <th>ID Orden</th>
                                                <th>Fecha</th>
                                                <th class=\"text-center\">Cantidad de Productos</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ventasptotal"]) || array_key_exists("ventasptotal", $context) ? $context["ventasptotal"] : (function () { throw new RuntimeError('Variable "ventasptotal" does not exist.', 192, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
                // line 193
                yield "                                                <tr>
                                                    <td><a href=\"#\">";
                // line 194
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "codigo", [], "any", false, false, false, 194), "html", null, true);
                yield "</a></td>
                                                    <td>";
                // line 195
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "fecha", [], "any", false, false, false, 195), "Y-m-d"), "html", null, true);
                yield "</td>
                                                    <td class=\"text-center\">";
                // line 196
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "ventas", [], "any", false, false, false, 196)), "html", null, true);
                yield "</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            yield "                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>

                                <!-- /.card-footer -->
                            </div>
                        </div>
                        <!-- /.card -->

                        <div class=\"col-md-12\">
                            <!-- PRODUCT LIST -->
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Productos Adicionados Recientemente</strong></h3>

                                    <div class=\"card-tools\">
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                            <i class=\"fas fa-minus\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                            <i class=\"fas fa-times\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body p-0\">
                                    <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                                        ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ultimosproductos"]) || array_key_exists("ultimosproductos", $context) ? $context["ultimosproductos"] : (function () { throw new RuntimeError('Variable "ultimosproductos" does not exist.', 228, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 229
                yield "                                            <li class=\"item\">
                                                ";
                // line 230
                if (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 230)) {
                    // line 231
                    yield "                                                    <div class=\"product-img\">
                                                        <img src=\"";
                    // line 232
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 232))), "html", null, true);
                    yield "\"
                                                             alt=\"Product Image\"
                                                             class=\"img-size-64\">
                                                    </div>
                                                ";
                }
                // line 237
                yield "                                                <div class=\"product-info\">
                                                    <a href=\"#\" class=\"product-title\">";
                // line 238
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 238), "html", null, true);
                yield "
                                                        <span class=\"badge badge-warning float-right\">";
                // line 239
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "beneficioxventa", [], "any", false, false, false, 239), "html", null, true);
                yield "</span></a>
                                                </div>
                                            </li>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 243
                yield "                                            <li>
                                                <span>No se encontraron registros</span>
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            yield "                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class=\"card-footer text-center\">
                                    <a href=\"";
            // line 251
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            yield "\" class=\"uppercase\">Ver Todos los
                                        Productos</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        ";
        } else {
            // line 265
            yield "            <!-- Main content -->
            <section class=\"content\">
                <!-- Default box -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        ";
            // line 270
            if ((((isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 270, $this->source); })()) < 0) || ((isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 270, $this->source); })()) > 0))) {
                // line 271
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
                                <div class=\"info-box\" data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Solicitar pago de royalties\" disabled>
                                    <span class=\"info-box-icon bg-info\"><i class=\"fa fa-dollar-sign\"></i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Generales</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> ";
                // line 280
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 280, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 287
            yield "                        <!-- /.col -->
                        ";
            // line 288
            if ((((isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 288, $this->source); })()) < 0) || ((isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 288, $this->source); })()) > 0))) {
                // line 289
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                // line 300
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 300, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 307
            yield "                        <!-- /.col -->
                        ";
            // line 308
            if ((((isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 308, $this->source); })()) < 0) || ((isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 308, $this->source); })()) > 0))) {
                // line 309
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                // line 320
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 320, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 327
            yield "                        <!-- /.col -->
                        ";
            // line 328
            if ((((isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 328, $this->source); })()) < 0) || ((isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 328, $this->source); })()) > 0))) {
                // line 329
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                // line 340
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 340, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 347
            yield "                        <!-- /.col -->
                        ";
            // line 348
            if ((((isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 348, $this->source); })()) < 0) || ((isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 348, $this->source); })()) > 0))) {
                // line 349
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                // line 360
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 360, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 367
            yield "                        <!-- /.col -->
                        ";
            // line 368
            if ((((isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 368, $this->source); })()) < 0) || ((isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 368, $this->source); })()) > 0))) {
                // line 369
                yield "                            <div class=\"col-12 col-sm-4 col-md-4\">
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
                // line 380
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 380, $this->source); })()), 2, ".", ","), "html", null, true);
                yield "</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
            }
            // line 387
            yield "                        <!-- /.col -->
                    </div>
                    <div class=\"row col-12\">
                        <div class=\"col-md-6\">
                            <!-- PRODUCT LIST -->
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Productos asignados recientemente</strong></h3>

                                    <div class=\"card-tools\">
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                            <i class=\"fas fa-minus\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                            <i class=\"fas fa-times\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body p-0\">
                                    <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                                        ";
            // line 408
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["misProductos"]) || array_key_exists("misProductos", $context) ? $context["misProductos"] : (function () { throw new RuntimeError('Variable "misProductos" does not exist.', 408, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 409
                yield "                                            <li class=\"item\">
                                                ";
                // line 410
                if (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 410)) {
                    // line 411
                    yield "                                                    <div class=\"product-img\">
                                                        <img src=\"";
                    // line 412
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imagen", [], "any", false, false, false, 412))), "html", null, true);
                    yield "\"
                                                             alt=\"Product Image\"
                                                             class=\"img-size-64\">
                                                    </div>
                                                ";
                }
                // line 417
                yield "                                                <div class=\"product-info\">
                                                    <a href=\"#\" class=\"product-title\">";
                // line 418
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 418), "html", null, true);
                yield "
                                                        ";
                // line 419
                if (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 419)) {
                    // line 420
                    yield "                                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "tipoProducto", [], "any", false, false, false, 420) == 1)) {
                        // line 421
                        yield "                                                                <span class=\"badge badge-warning float-right\">General</span>
                                                            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 422
$context["producto"], "tipoProducto", [], "any", false, false, false, 422) == 2)) {
                        // line 423
                        yield "                                                                <span class=\"badge badge-warning float-right\">Libro</span>
                                                            ";
                    }
                    // line 425
                    yield "                                                        ";
                }
                // line 426
                yield "                                                    </a>
                                                </div>
                                            </li>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 430
                yield "                                            <li>
                                                <span>No tiene productos asignados</span>
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 434
            yield "                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class=\"card-footer text-center\">
                                    <a href=\"";
            // line 438
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mis_productos");
            yield "\" class=\"uppercase\">Ver Todos mis
                                        Productos</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class=\"col-md-6\">
                            <!-- SERVICE LIST -->
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Servicios asignados recientemente</strong></h3>
                                    <div class=\"card-tools\">
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                            <i class=\"fas fa-minus\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                            <i class=\"fas fa-times\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body p-0\">
                                    <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                                        ";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["misServicios"]) || array_key_exists("misServicios", $context) ? $context["misServicios"] : (function () { throw new RuntimeError('Variable "misServicios" does not exist.', 462, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
                // line 463
                yield "                                            <li class=\"item\">
                                                <div class=\"product-info\">
                                                    <a href=\"#\" class=\"product-title\">";
                // line 465
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["servicio"], "nombre", [], "any", false, false, false, 465), "html", null, true);
                yield "
                                                        ";
                // line 466
                if (CoreExtension::getAttribute($this->env, $this->source, $context["servicio"], "documentoServicio", [], "any", false, false, false, 466)) {
                    // line 467
                    yield "                                                            <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["servicio"], "documentoServicio", [], "any", false, false, false, 467))), "html", null, true);
                    yield "\"
                                                               target=\"_blank\"
                                                               class=\"badge badge-warning float-right\">Ver
                                                                Documento</a>
                                                        ";
                }
                // line 472
                yield "                                                    </a>
                                                </div>
                                            </li>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 476
                yield "                                            <li>
                                                <span>No tiene servicios asignados</span>
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 480
            yield "                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class=\"card-footer text-center\">
                                    <a href=\"";
            // line 484
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mis_servicios");
            yield "\" class=\"uppercase\">Ver Todos mis
                                        Servicios</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div><!-- /.card -->
            </section>
            <!-- /.content -->
        ";
        }
        // line 496
        yield "    </div>
    <!-- /.content-wrapper -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "resumen/index.html.twig";
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
        return array (  798 => 496,  783 => 484,  777 => 480,  768 => 476,  760 => 472,  751 => 467,  749 => 466,  745 => 465,  741 => 463,  736 => 462,  709 => 438,  703 => 434,  694 => 430,  686 => 426,  683 => 425,  679 => 423,  677 => 422,  674 => 421,  671 => 420,  669 => 419,  665 => 418,  662 => 417,  654 => 412,  651 => 411,  649 => 410,  646 => 409,  641 => 408,  618 => 387,  608 => 380,  595 => 369,  593 => 368,  590 => 367,  580 => 360,  567 => 349,  565 => 348,  562 => 347,  552 => 340,  539 => 329,  537 => 328,  534 => 327,  524 => 320,  511 => 309,  509 => 308,  506 => 307,  496 => 300,  483 => 289,  481 => 288,  478 => 287,  468 => 280,  457 => 271,  455 => 270,  448 => 265,  431 => 251,  425 => 247,  416 => 243,  407 => 239,  403 => 238,  400 => 237,  392 => 232,  389 => 231,  387 => 230,  384 => 229,  379 => 228,  348 => 199,  339 => 196,  335 => 195,  331 => 194,  328 => 193,  324 => 192,  286 => 157,  279 => 152,  270 => 148,  264 => 146,  261 => 145,  257 => 143,  254 => 142,  252 => 141,  248 => 140,  243 => 139,  236 => 136,  229 => 133,  227 => 132,  224 => 131,  219 => 130,  187 => 101,  166 => 83,  147 => 67,  129 => 52,  112 => 38,  99 => 27,  97 => 26,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Resumen{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Resumen</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\">Inicio</li>
                            <li class=\"breadcrumb-item active\">Resumen</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        {% if is_granted('ROLE_ADMIN') %}
            <!-- Main content -->
            <section class=\"content\">
                <div class=\"container-fluid\">
                    <!-- Info boxes -->
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"info-box\">
                                <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-users\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total Usuarios activos</span>
                                    <span class=\"info-box-number\">{{ totalu }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"info-box mb-3\">
                            <span class=\"info-box-icon bg-warning elevation-1\"><i
                                        class=\"fas fa-users\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total de Usuarios inactivos</span>
                                    <span class=\"info-box-number\">{{ totali }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-2\">
                            <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-danger elevation-1\"><i
                                                class=\"fas fa-copy\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total Productos</span>
                                    <span class=\"info-box-number\">{{ totalp }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-2\">
                            <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-blue elevation-1\"><i
                                                class=\"fas fa-wrench\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total Servicios</span>
                                    <span class=\"info-box-number\">{{ totals }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class=\"clearfix hidden-md-up\"></div>

                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-2\">
                            <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-success elevation-1\"><i
                                                class=\"fas fa-shopping-cart\"></i></span>

                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Total de Ventas</span>
                                    <span class=\"info-box-number\">{{ totalv }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- USERS LIST -->
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Nuevos Usuarios</strong></h3>

                                    <div class=\"card-tools\">
                                        <button type=\"button\" class=\"btn btn-tool\"
                                                data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-tool\"
                                                data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body p-0\">
                                    <ul class=\"users-list clearfix\">
                                        {% for user in users %}
                                            <li>
                                                {% if user.avatar %}
                                                    <img src=\"{{ asset('uploads/' ~ user.avatar) }}\"
                                                         alt=\"User Image\" width=\"80\" height=\"80\">
                                                {% else %}
                                                    <img src=\"{{ asset('dist/img/usuarioanonimo.png') }}\"
                                                         alt=\"User Image\" width=\"80\" height=\"80\">
                                                {% endif %}
                                                <a class=\"users-list-name\" href=\"#\">{{ user.nombre }}</a>
                                                <span class=\"users-list-date\">{{ fecha }}</span>
                                                {% if user.roles %}
                                                    {% if user.roles[0] == 'ROLE_ADMIN' %}
                                                        <span class=\"users-list-date\">Administrador</span>
                                                    {% endif %}
                                                {% endif %}
                                            </li>
                                        {% else %}
                                            <li>
                                                <span>No se encontraron registros</span>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                    <!-- /.users-list -->
                                </div>
                                <!-- /.card-body -->
                                <div class=\"card-footer text-center\">
                                    <a href=\"{{ path('app_user_index') }}\">Ver Todos los Usuarios</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!-- /.col -->

                        <!-- TABLE: LATEST ORDERS -->
                        <div class=\"col-md-12\">
                            <div class=\"card\">
                                <div class=\"card-header border-transparent\">
                                    <h3 class=\"card-title\"><strong>Últimas Ventas</strong></h3>

                                    <div class=\"card-tools\">
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                            <i class=\"fas fa-minus\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                            <i class=\"fas fa-times\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body p-0\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table m-0\">
                                            <thead>
                                            <tr>
                                                <th>ID Orden</th>
                                                <th>Fecha</th>
                                                <th class=\"text-center\">Cantidad de Productos</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for venta in ventasptotal %}
                                                <tr>
                                                    <td><a href=\"#\">{{ venta.codigo }}</a></td>
                                                    <td>{{ venta.fecha|date('Y-m-d') }}</td>
                                                    <td class=\"text-center\">{{ venta.ventas|length }}</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>

                                <!-- /.card-footer -->
                            </div>
                        </div>
                        <!-- /.card -->

                        <div class=\"col-md-12\">
                            <!-- PRODUCT LIST -->
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Productos Adicionados Recientemente</strong></h3>

                                    <div class=\"card-tools\">
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                            <i class=\"fas fa-minus\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                            <i class=\"fas fa-times\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body p-0\">
                                    <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                                        {% for producto in ultimosproductos %}
                                            <li class=\"item\">
                                                {% if producto.imagen %}
                                                    <div class=\"product-img\">
                                                        <img src=\"{{ asset('uploads/' ~ producto.imagen) }}\"
                                                             alt=\"Product Image\"
                                                             class=\"img-size-64\">
                                                    </div>
                                                {% endif %}
                                                <div class=\"product-info\">
                                                    <a href=\"#\" class=\"product-title\">{{ producto.nombre }}
                                                        <span class=\"badge badge-warning float-right\">{{ producto.beneficioxventa }}</span></a>
                                                </div>
                                            </li>
                                        {% else %}
                                            <li>
                                                <span>No se encontraron registros</span>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class=\"card-footer text-center\">
                                    <a href=\"{{ path('app_producto_index') }}\" class=\"uppercase\">Ver Todos los
                                        Productos</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        {% else %}
            <!-- Main content -->
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
                    <div class=\"row col-12\">
                        <div class=\"col-md-6\">
                            <!-- PRODUCT LIST -->
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Productos asignados recientemente</strong></h3>

                                    <div class=\"card-tools\">
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                            <i class=\"fas fa-minus\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                            <i class=\"fas fa-times\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body p-0\">
                                    <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                                        {% for producto in misProductos %}
                                            <li class=\"item\">
                                                {% if producto.imagen %}
                                                    <div class=\"product-img\">
                                                        <img src=\"{{ asset('uploads/' ~ producto.imagen) }}\"
                                                             alt=\"Product Image\"
                                                             class=\"img-size-64\">
                                                    </div>
                                                {% endif %}
                                                <div class=\"product-info\">
                                                    <a href=\"#\" class=\"product-title\">{{ producto.nombre }}
                                                        {% if producto.tipoProducto %}
                                                            {% if producto.tipoProducto == 1 %}
                                                                <span class=\"badge badge-warning float-right\">General</span>
                                                            {% elseif producto.tipoProducto == 2 %}
                                                                <span class=\"badge badge-warning float-right\">Libro</span>
                                                            {% endif %}
                                                        {% endif %}
                                                    </a>
                                                </div>
                                            </li>
                                        {% else %}
                                            <li>
                                                <span>No tiene productos asignados</span>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class=\"card-footer text-center\">
                                    <a href=\"{{ path('app_mis_productos') }}\" class=\"uppercase\">Ver Todos mis
                                        Productos</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class=\"col-md-6\">
                            <!-- SERVICE LIST -->
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Servicios asignados recientemente</strong></h3>
                                    <div class=\"card-tools\">
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                            <i class=\"fas fa-minus\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                            <i class=\"fas fa-times\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body p-0\">
                                    <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                                        {% for servicio in misServicios %}
                                            <li class=\"item\">
                                                <div class=\"product-info\">
                                                    <a href=\"#\" class=\"product-title\">{{ servicio.nombre }}
                                                        {% if servicio.documentoServicio %}
                                                            <a href=\"{{ asset('uploads/' ~ servicio.documentoServicio) }}\"
                                                               target=\"_blank\"
                                                               class=\"badge badge-warning float-right\">Ver
                                                                Documento</a>
                                                        {% endif %}
                                                    </a>
                                                </div>
                                            </li>
                                        {% else %}
                                            <li>
                                                <span>No tiene servicios asignados</span>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class=\"card-footer text-center\">
                                    <a href=\"{{ path('app_mis_servicios') }}\" class=\"uppercase\">Ver Todos mis
                                        Servicios</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div><!-- /.card -->
            </section>
            <!-- /.content -->
        {% endif %}
    </div>
    <!-- /.content-wrapper -->
{% endblock %}", "resumen/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\resumen\\index.html.twig");
    }
}
