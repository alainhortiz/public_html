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

/* ventas/index.html.twig */
class __TwigTemplate_01ae5b016d364e1db09e67cd523da021 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ventas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ventas/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mis Ventas";
        
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
        yield "    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Mis Ventas</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <!-- Default box -->
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-4 col-lg-4\">
                        ";
        // line 31
        if (((isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 31, $this->source); })()) > 0)) {
            // line 32
            yield "                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarGeneralUSD\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en USD de productos generales\">
                                    <span class=\"info-box-icon bg-info\"><i class=\"fa fa-dollar-sign\"></i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Generales</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> ";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 42, $this->source); })()), 2, ".", ","), "html", null, true);
            yield "</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
        }
        // line 50
        yield "                        ";
        if (((isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 50, $this->source); })()) > 0)) {
            // line 51
            yield "                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarGeneralEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en EUR de productos generales\">
                                    <span class=\"info-box-icon bg-info\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Generales</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> ";
            // line 62
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 62, $this->source); })()), 2, ".", ","), "html", null, true);
            yield "</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
        }
        // line 70
        yield "                        ";
        if (((isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 70, $this->source); })()) > 0)) {
            // line 71
            yield "                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarLibroUSD\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en USD de libros\">
                                    <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-dollar-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Libros</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> ";
            // line 82
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 82, $this->source); })()), 2, ".", ","), "html", null, true);
            yield "</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
        }
        // line 90
        yield "                        ";
        if (((isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 90, $this->source); })()) > 0)) {
            // line 91
            yield "                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarLibroEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en EUR de libros\">
                                    <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Libros</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> ";
            // line 102
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 102, $this->source); })()), 2, ".", ","), "html", null, true);
            yield "</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
        }
        // line 110
        yield "                        ";
        if (((isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 110, $this->source); })()) > 0)) {
            // line 111
            yield "                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarServiciosUSD\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en USD de servicios\">
                                    <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-dollar-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Servicios</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> ";
            // line 122
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 122, $this->source); })()), 2, ".", ","), "html", null, true);
            yield "</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
        }
        // line 130
        yield "                        ";
        if (((isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 130, $this->source); })()) > 0)) {
            // line 131
            yield "                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarServiciosEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en EUR de servicios\">
                                    <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Servicios</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> ";
            // line 142
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 142, $this->source); })()), 2, ".", ","), "html", null, true);
            yield "</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        ";
        }
        // line 150
        yield "                    </div>
                    ";
        // line 151
        $macros["tabla"] = $this->loadTemplate("macros/tablas.html.twig", "ventas/index.html.twig", 151)->unwrap();
        // line 152
        yield "                    <div class=\"col-12 col-md-8 col-lg-8\">
                        <div class=\"col-12\">
                            <!-- LISTADO DE VENTAS -->
                            <div class=\"card\" id=\"GeneralUSD\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de productos generales en USD</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataGeneralUSD\">
                                            ";
        // line 163
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_ventas", [(isset($context["ventasProductos"]) || array_key_exists("ventasProductos", $context) ? $context["ventasProductos"] : (function () { throw new RuntimeError('Variable "ventasProductos" does not exist.', 163, $this->source); })()), 1, "USD", "Producto"], 163, $context, $this->getSourceContext());
        yield "
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class=\"card\" id=\"GeneralEUR\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de productos generales en EUR</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataGeneralEUR\">
                                            ";
        // line 177
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_ventas", [(isset($context["ventasProductos"]) || array_key_exists("ventasProductos", $context) ? $context["ventasProductos"] : (function () { throw new RuntimeError('Variable "ventasProductos" does not exist.', 177, $this->source); })()), 1, "EUR", "Producto"], 177, $context, $this->getSourceContext());
        yield "
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class=\"card\" id=\"LibroUSD\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de libros en USD</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataLibroUSD\">
                                            ";
        // line 191
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_ventas", [(isset($context["ventasProductos"]) || array_key_exists("ventasProductos", $context) ? $context["ventasProductos"] : (function () { throw new RuntimeError('Variable "ventasProductos" does not exist.', 191, $this->source); })()), 2, "USD", "Producto"], 191, $context, $this->getSourceContext());
        yield "
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class=\"card\" id=\"LibroEUR\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de libros en EUR</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataLibroEUR\">
                                            ";
        // line 205
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_ventas", [(isset($context["ventasProductos"]) || array_key_exists("ventasProductos", $context) ? $context["ventasProductos"] : (function () { throw new RuntimeError('Variable "ventasProductos" does not exist.', 205, $this->source); })()), 2, "EUR", "Producto"], 205, $context, $this->getSourceContext());
        yield "
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class=\"card\" id=\"ServicioUSD\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de servicios en USD</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataServicioUSD\">
                                            ";
        // line 219
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_ventas", [(isset($context["ventasProductos"]) || array_key_exists("ventasProductos", $context) ? $context["ventasProductos"] : (function () { throw new RuntimeError('Variable "ventasProductos" does not exist.', 219, $this->source); })()), 3, "USD", "Servicio"], 219, $context, $this->getSourceContext());
        yield "
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class=\"card\" id=\"ServicioEUR\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de servicios en EUR</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataServicioEUR\">
                                            ";
        // line 233
        yield CoreExtension::callMacro($macros["tabla"], "macro_tabla_ventas", [(isset($context["ventasProductos"]) || array_key_exists("ventasProductos", $context) ? $context["ventasProductos"] : (function () { throw new RuntimeError('Variable "ventasProductos" does not exist.', 233, $this->source); })()), 3, "EUR", "Servicio"], 233, $context, $this->getSourceContext());
        yield "
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div><!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 249
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 250
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- DataTables -->
    <script src=\"";
        // line 252
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 253
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 254
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 255
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$(function () {

            let saldoAcumulado = 0;

            \$('#dataGeneralUSD, #dataGeneralEUR, #dataLibroUSD, #dataLibroEUR, #dataServicioUSD, #dataServicioEUR').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[7], [7]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            \$('#mostrarGeneralUSD').on('click', function () {
                saldoAcumulado = parseFloat('";
        // line 273
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["bolsaGeneralDolar"]) || array_key_exists("bolsaGeneralDolar", $context) ? $context["bolsaGeneralDolar"] : (function () { throw new RuntimeError('Variable "bolsaGeneralDolar" does not exist.', 273, $this->source); })()), "html", null, true);
        yield "');
                \$('#GeneralEUR').css(\"display\", \"none\");
                \$('#LibroUSD').css(\"display\", \"none\");
                \$('#LibroEUR').css(\"display\", \"none\");
                \$('#ServicioUSD').css(\"display\", \"none\");
                \$('#ServicioEUR').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#GeneralUSD').css(\"display\", \"block\");
                }
            });

            \$('#mostrarGeneralEUR').on('click', function () {
                saldoAcumulado = parseFloat('";
        // line 285
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["bolsaGeneralEuros"]) || array_key_exists("bolsaGeneralEuros", $context) ? $context["bolsaGeneralEuros"] : (function () { throw new RuntimeError('Variable "bolsaGeneralEuros" does not exist.', 285, $this->source); })()), "html", null, true);
        yield "');
                \$('#GeneralUSD').css(\"display\", \"none\");
                \$('#LibroUSD').css(\"display\", \"none\");
                \$('#LibroEUR').css(\"display\", \"none\");
                \$('#ServicioUSD').css(\"display\", \"none\");
                \$('#ServicioEUR').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#GeneralEUR').css(\"display\", \"block\");
                }
            });

            \$('#mostrarLibroUSD').on('click', function () {
                saldoAcumulado = parseFloat('";
        // line 297
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["bolsaLibroDolar"]) || array_key_exists("bolsaLibroDolar", $context) ? $context["bolsaLibroDolar"] : (function () { throw new RuntimeError('Variable "bolsaLibroDolar" does not exist.', 297, $this->source); })()), "html", null, true);
        yield "');
                \$('#GeneralUSD').css(\"display\", \"none\");
                \$('#GeneralEUR').css(\"display\", \"none\");
                \$('#LibroEUR').css(\"display\", \"none\");
                \$('#ServicioUSD').css(\"display\", \"none\");
                \$('#ServicioEUR').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#LibroUSD').css(\"display\", \"block\");
                }
            });

            \$('#mostrarLibroEUR').on('click', function () {
                saldoAcumulado = parseFloat('";
        // line 309
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["bolsaLibroEuros"]) || array_key_exists("bolsaLibroEuros", $context) ? $context["bolsaLibroEuros"] : (function () { throw new RuntimeError('Variable "bolsaLibroEuros" does not exist.', 309, $this->source); })()), "html", null, true);
        yield "');
                \$('#GeneralUSD').css(\"display\", \"none\");
                \$('#GeneralEUR').css(\"display\", \"none\");
                \$('#LibroUSD').css(\"display\", \"none\");
                \$('#ServicioUSD').css(\"display\", \"none\");
                \$('#ServicioEUR').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#LibroEUR').css(\"display\", \"block\");
                }
            });

            \$('#mostrarServiciosUSD').on('click', function () {
                saldoAcumulado = parseFloat('";
        // line 321
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["bolsaServicioDolar"]) || array_key_exists("bolsaServicioDolar", $context) ? $context["bolsaServicioDolar"] : (function () { throw new RuntimeError('Variable "bolsaServicioDolar" does not exist.', 321, $this->source); })()), "html", null, true);
        yield "');
                \$('#GeneralUSD').css(\"display\", \"none\");
                \$('#GeneralEUR').css(\"display\", \"none\");
                \$('#LibroUSD').css(\"display\", \"none\");
                \$('#LibroEUR').css(\"display\", \"none\");
                \$('#ServicioEUR').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#ServicioUSD').css(\"display\", \"block\");
                }
            });

            \$('#mostrarServiciosEUR').on('click', function () {
                saldoAcumulado = parseFloat('";
        // line 333
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["bolsaServicioEuros"]) || array_key_exists("bolsaServicioEuros", $context) ? $context["bolsaServicioEuros"] : (function () { throw new RuntimeError('Variable "bolsaServicioEuros" does not exist.', 333, $this->source); })()), "html", null, true);
        yield "');
                \$('#GeneralUSD').css(\"display\", \"none\");
                \$('#GeneralEUR').css(\"display\", \"none\");
                \$('#LibroUSD').css(\"display\", \"none\");
                \$('#LibroEUR').css(\"display\", \"none\");
                \$('#ServicioUSD').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#ServicioEUR').css(\"display\", \"block\");
                }
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
        return "ventas/index.html.twig";
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
        return array (  531 => 333,  516 => 321,  501 => 309,  486 => 297,  471 => 285,  456 => 273,  435 => 255,  431 => 254,  427 => 253,  423 => 252,  417 => 250,  410 => 249,  387 => 233,  370 => 219,  353 => 205,  336 => 191,  319 => 177,  302 => 163,  289 => 152,  287 => 151,  284 => 150,  273 => 142,  260 => 131,  257 => 130,  246 => 122,  233 => 111,  230 => 110,  219 => 102,  206 => 91,  203 => 90,  192 => 82,  179 => 71,  176 => 70,  165 => 62,  152 => 51,  149 => 50,  138 => 42,  126 => 32,  124 => 31,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mis Ventas{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
{% endblock %}

{% block page %}
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Mis Ventas</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <!-- Default box -->
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-4 col-lg-4\">
                        {% if bolsaGeneralDolar > 0 %}
                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarGeneralUSD\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en USD de productos generales\">
                                    <span class=\"info-box-icon bg-info\"><i class=\"fa fa-dollar-sign\"></i></span>
                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Generales</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> {{ bolsaGeneralDolar|number_format(2, '.', ',') }}</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        {% if bolsaGeneralEuros > 0 %}
                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarGeneralEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en EUR de productos generales\">
                                    <span class=\"info-box-icon bg-info\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Generales</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> {{ bolsaGeneralEuros|number_format(2, '.', ',') }}</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        {% if bolsaLibroDolar > 0 %}
                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarLibroUSD\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en USD de libros\">
                                    <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-dollar-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Libros</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> {{ bolsaLibroDolar|number_format(2, '.', ',') }}</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        {% if bolsaLibroEuros > 0 %}
                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarLibroEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en EUR de libros\">
                                    <span class=\"info-box-icon bg-danger\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Productos Libros</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> {{ bolsaLibroEuros|number_format(2, '.', ',') }}</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        {% if bolsaServicioDolar > 0 %}
                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarServiciosUSD\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en USD de servicios\">
                                    <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-dollar-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Servicios</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en D&oacute;lares</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-dollar-sign\"></i> {{ bolsaServicioDolar|number_format(2, '.', ',') }}</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                        {% if bolsaServicioEuros > 0 %}
                            <div class=\"col-12\">
                                <div class=\"info-box\" id=\"mostrarServiciosEUR\" type=\"button\"
                                     data-toggle=\"tooltip\"
                                     data-placement=\"top\"
                                     title=\"Mostrar ventas en EUR de servicios\">
                                    <span class=\"info-box-icon bg-warning\"><i class=\"fa fa-euro-sign\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text text-bold\">Servicios</span>
                                        <span class=\"info-box-text\">Royalties Acumulados Bolsa en Euros</span>
                                        <span class=\"info-box-number\"><i
                                                    class=\"fa fa-euro-sign\"></i> {{ bolsaServicioEuros|number_format(2, '.', ',') }}</span>
                                        <span class=\"info-box-text text-bold text-right\">Mostrar</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        {% endif %}
                    </div>
                    {% import 'macros/tablas.html.twig' as tabla %}
                    <div class=\"col-12 col-md-8 col-lg-8\">
                        <div class=\"col-12\">
                            <!-- LISTADO DE VENTAS -->
                            <div class=\"card\" id=\"GeneralUSD\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de productos generales en USD</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataGeneralUSD\">
                                            {{ tabla.tabla_ventas(ventasProductos,1,'USD','Producto') }}
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class=\"card\" id=\"GeneralEUR\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de productos generales en EUR</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataGeneralEUR\">
                                            {{ tabla.tabla_ventas(ventasProductos,1,'EUR','Producto') }}
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class=\"card\" id=\"LibroUSD\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de libros en USD</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataLibroUSD\">
                                            {{ tabla.tabla_ventas(ventasProductos,2,'USD','Producto') }}
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class=\"card\" id=\"LibroEUR\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de libros en EUR</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataLibroEUR\">
                                            {{ tabla.tabla_ventas(ventasProductos,2,'EUR','Producto') }}
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class=\"card\" id=\"ServicioUSD\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de servicios en USD</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataServicioUSD\">
                                            {{ tabla.tabla_ventas(ventasProductos,3,'USD','Servicio') }}
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class=\"card\" id=\"ServicioEUR\" style=\"display: none\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\"><strong>Ventas de servicios en EUR</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\" style=\"padding-left: 5px\">
                                        <table class=\"table table-bordered table-striped\" id=\"dataServicioEUR\">
                                            {{ tabla.tabla_ventas(ventasProductos,3,'EUR','Servicio') }}
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div><!-- /.card -->
        </section>
        <!-- /.content -->
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

            let saldoAcumulado = 0;

            \$('#dataGeneralUSD, #dataGeneralEUR, #dataLibroUSD, #dataLibroEUR, #dataServicioUSD, #dataServicioEUR').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"lengthMenu\": [[7], [7]],
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
                \"responsive\": true,
            });

            \$('#mostrarGeneralUSD').on('click', function () {
                saldoAcumulado = parseFloat('{{ bolsaGeneralDolar }}');
                \$('#GeneralEUR').css(\"display\", \"none\");
                \$('#LibroUSD').css(\"display\", \"none\");
                \$('#LibroEUR').css(\"display\", \"none\");
                \$('#ServicioUSD').css(\"display\", \"none\");
                \$('#ServicioEUR').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#GeneralUSD').css(\"display\", \"block\");
                }
            });

            \$('#mostrarGeneralEUR').on('click', function () {
                saldoAcumulado = parseFloat('{{ bolsaGeneralEuros }}');
                \$('#GeneralUSD').css(\"display\", \"none\");
                \$('#LibroUSD').css(\"display\", \"none\");
                \$('#LibroEUR').css(\"display\", \"none\");
                \$('#ServicioUSD').css(\"display\", \"none\");
                \$('#ServicioEUR').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#GeneralEUR').css(\"display\", \"block\");
                }
            });

            \$('#mostrarLibroUSD').on('click', function () {
                saldoAcumulado = parseFloat('{{ bolsaLibroDolar }}');
                \$('#GeneralUSD').css(\"display\", \"none\");
                \$('#GeneralEUR').css(\"display\", \"none\");
                \$('#LibroEUR').css(\"display\", \"none\");
                \$('#ServicioUSD').css(\"display\", \"none\");
                \$('#ServicioEUR').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#LibroUSD').css(\"display\", \"block\");
                }
            });

            \$('#mostrarLibroEUR').on('click', function () {
                saldoAcumulado = parseFloat('{{ bolsaLibroEuros }}');
                \$('#GeneralUSD').css(\"display\", \"none\");
                \$('#GeneralEUR').css(\"display\", \"none\");
                \$('#LibroUSD').css(\"display\", \"none\");
                \$('#ServicioUSD').css(\"display\", \"none\");
                \$('#ServicioEUR').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#LibroEUR').css(\"display\", \"block\");
                }
            });

            \$('#mostrarServiciosUSD').on('click', function () {
                saldoAcumulado = parseFloat('{{ bolsaServicioDolar }}');
                \$('#GeneralUSD').css(\"display\", \"none\");
                \$('#GeneralEUR').css(\"display\", \"none\");
                \$('#LibroUSD').css(\"display\", \"none\");
                \$('#LibroEUR').css(\"display\", \"none\");
                \$('#ServicioEUR').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#ServicioUSD').css(\"display\", \"block\");
                }
            });

            \$('#mostrarServiciosEUR').on('click', function () {
                saldoAcumulado = parseFloat('{{ bolsaServicioEuros }}');
                \$('#GeneralUSD').css(\"display\", \"none\");
                \$('#GeneralEUR').css(\"display\", \"none\");
                \$('#LibroUSD').css(\"display\", \"none\");
                \$('#LibroEUR').css(\"display\", \"none\");
                \$('#ServicioUSD').css(\"display\", \"none\");
                if (saldoAcumulado > 0) {
                    \$('#ServicioEUR').css(\"display\", \"block\");
                }
            });


        });
    </script>
{% endblock %}
", "ventas/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\ventas\\index.html.twig");
    }
}
