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

/* metodo_de_pago/index.html.twig */
class __TwigTemplate_8b1ea1a0e806328af3427a62218a249c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metodo_de_pago/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metodo_de_pago/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Método de Pago";
        
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
        yield "    <div class=\"preload hidden\">
        <div class=\"logo\"></div>
        <div class=\"loader-frame\">
            <div class=\"loader1\" id=\"loader1\"></div>
            <div class=\"loader2\" id=\"loader2\"></div>
        </div>
    </div>
    <div class=\"content-wrapper\" style=\"min-height: 1517.4px;\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>M&eacute;todos de Pago</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <!-- Default box -->
            <div class=\"card card-solid\">
                <div class=\"card-body pb-0\">
                    <div class=\"row d-flex align-items-stretch\">
                        <div class=\"col-12 col-sm-6 col-md-4 align-items-stretch\">
                            <div class=\"card bg-light\">
                                <div class=\"card-body pt-0\">
                                    <div class=\"row\" style=\"padding-top: 10px\">
                                        <div class=\"col-7\">
                                            <h2 class=\"lead\"><b>Wester Union</b></h2>
                                            <p class=\"text-muted text-sm\">
                                                <b>Destinatario: </b> ";
        // line 38
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 38, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 38, $this->source); })()), "nombre", [], "any", false, false, false, 38) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 38, $this->source); })()), "primerApellido", [], "any", false, false, false, 38)) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 38, $this->source); })()), "segundoApellido", [], "any", false, false, false, 38)), "html", null, true)) : (yield ""));
        yield " </p>
                                            <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                <li class=\"small\"><span class=\"fa-li\"><i
                                                                class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                    ";
        // line 42
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 42, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), "html", null, true)) : (yield ""));
        yield "
                                                </li>
                                                <li class=\"small\"><span class=\"fa-li\"><i
                                                                class=\"fas fa-lg fa-building\"></i></span> Ciudad: ";
        // line 45
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 45, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 45, $this->source); })()), "ciudad", [], "any", false, false, false, 45), "html", null, true)) : (yield ""));
        yield "
                                                </li>
                                                <li class=\"small\"><span class=\"fa-li\"><i class=\"fas fa-lg fa-phone\"></i></span>
                                                    Phone #: ";
        // line 48
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 48, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 48, $this->source); })()), "numeromovil", [], "any", false, false, false, 48), "html", null, true)) : (yield ""));
        yield "
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-5 text-center\">
                                            <img src=\"";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/westerunion.png"), "html", null, true);
        yield "\" alt=\"Westerunion\"
                                                 class=\"img-circle img-fluid\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 60
            yield "                                        <div class=\"text-right\">
                                            <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editWester\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"top\" title=\"Registrar WesterUnion\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    ";
        }
        // line 68
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-6 col-md-3 align-items-stretch\">
                            <div class=\"card bg-light\">
                                <div class=\"card-body pt-0\">
                                    <div class=\"row\" style=\"padding-top: 10px\">
                                        <div class=\"col-7\">
                                            <h2 class=\"lead\"><b>Paypal</b></h2>
                                            <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                <li class=\"small\"><span class=\"fa-li\"><i
                                                                class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                    ";
        // line 80
        (((isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 80, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), "html", null, true)) : (yield ""));
        yield "
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-5 text-center\">
                                            <img src=\"";
        // line 85
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/paypal.png"), "html", null, true);
        yield "\" alt=\"Paypal\"
                                                 class=\"img-circle img-fluid\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    ";
        // line 91
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 92
            yield "                                        <div class=\"text-right\">
                                            <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editPaypal\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"top\" title=\"Registrar WesterUnion\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    ";
        }
        // line 100
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-6 col-md-2 align-items-stretch\">
                            <div class=\"card bg-light\">
                                <div class=\"card-body pt-0\">
                                    <div class=\"row\" style=\"padding-top: 10px\">
                                        <div class=\"col-7\">
                                            <h2 class=\"lead\"><b>Bizum</b></h2>
                                            <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                <li class=\"small\"><span class=\"fa-li\"><i class=\"fas fa-lg fa-phone\"></i></span>
                                                    Phone #: ";
        // line 111
        (((isset($context["bizum"]) || array_key_exists("bizum", $context) ? $context["bizum"] : (function () { throw new RuntimeError('Variable "bizum" does not exist.', 111, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bizum"]) || array_key_exists("bizum", $context) ? $context["bizum"] : (function () { throw new RuntimeError('Variable "bizum" does not exist.', 111, $this->source); })()), "telefono", [], "any", false, false, false, 111), "html", null, true)) : (yield ""));
        yield "
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-5 text-center\">
                                            <img src=\"";
        // line 116
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/bizum.png"), "html", null, true);
        yield "\" alt=\"Bizum\"
                                                 class=\"img-circle img-fluid\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    ";
        // line 122
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 123
            yield "                                        <div class=\"text-right\">
                                            <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editBizum\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"top\" title=\"Registrar WesterUnion\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    ";
        }
        // line 131
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-6 col-md-3 align-items-stretch\">
                            <div class=\"card bg-light\">
                                <div class=\"card-body pt-0\">
                                    <div class=\"row\" style=\"padding-top: 10px\">
                                        <div class=\"col-7\">
                                            <h2 class=\"lead\"><b>Transferencia</b></h2>
                                            <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                <li class=\"small\"><span class=\"fa-li\"><i
                                                                class=\"fas fa-lg fa-bank\"></i></span> No.Cuenta (IBAN):
                                                    ";
        // line 143
        (((isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 143, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 143, $this->source); })()), "numerocuenta", [], "any", false, false, false, 143), "html", null, true)) : (yield ""));
        yield "
                                                </li>
                                                <li class=\"small\"><span class=\"fa-li\"><i
                                                                class=\"fas fa-lg fa-user\"></i></span> Titular:
                                                    ";
        // line 147
        (((isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 147, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 147, $this->source); })()), "titular", [], "any", false, false, false, 147), "html", null, true)) : (yield ""));
        yield "
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-5 text-center\">
                                            <img src=\"";
        // line 152
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/transferenciaban.png"), "html", null, true);
        yield "\"
                                                 alt=\"Transferencia\"
                                                 class=\"img-circle img-fluid\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    ";
        // line 159
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 160
            yield "                                        <div class=\"text-right\">
                                            <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editTrans\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"top\" title=\"Registrar WesterUnion\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    ";
        }
        // line 168
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            ";
        // line 175
        yield Twig\Extension\CoreExtension::include($this->env, $context, "metodo_de_pago/modalAddWesterUnion.html.twig");
        yield "
            ";
        // line 176
        yield Twig\Extension\CoreExtension::include($this->env, $context, "metodo_de_pago/modalAddPaypal.html.twig");
        yield "
            ";
        // line 177
        yield Twig\Extension\CoreExtension::include($this->env, $context, "metodo_de_pago/modalAddBizum.html.twig");
        yield "
            ";
        // line 178
        yield Twig\Extension\CoreExtension::include($this->env, $context, "metodo_de_pago/modalAddTransferencia.html.twig");
        yield "
            <!-- /.card -->
        </section>
        <!-- /.content -->
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
        yield "     ";
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
     <script>
         \$(document).ready(function () {

             //Declaracion de variables
             let reg = new RegExp(/^([\\da-z_\\.-]+)@([\\da-z\\.-]+)\\.([a-z\\.]{2,6})\$/);

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

             ";
        // line 214
        if ( !(null === (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 214, $this->source); })()))) {
            // line 215
            yield "             ";
            if (((isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 215, $this->source); })()) != 0)) {
                // line 216
                yield "             toastr[\"error\"]('";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 216, $this->source); })()), "html", null, true);
                yield "', \"Notificación\")
             ";
            }
            // line 218
            yield "             ";
        }
        // line 219
        yield "
             //Si existe el método de pago cargo los valores en el formulario
             ";
        // line 221
        if ((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 221, $this->source); })())) {
            // line 222
            yield "             \$(\"#addWesterNombre\").val('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 222, $this->source); })()), "nombre", [], "any", false, false, false, 222), "html", null, true);
            yield "');
             \$(\"#addWesterPrimerApellido\").val('";
            // line 223
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 223, $this->source); })()), "primerApellido", [], "any", false, false, false, 223), "html", null, true);
            yield "');
             \$(\"#addWesterSegundoApellido\").val('";
            // line 224
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 224, $this->source); })()), "segundoApellido", [], "any", false, false, false, 224), "html", null, true);
            yield "');
             \$(\"#addWesterCorreo\").val('";
            // line 225
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 225, $this->source); })()), "email", [], "any", false, false, false, 225), "html", null, true);
            yield "');
             \$(\"#addWesterCiudad\").val('";
            // line 226
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 226, $this->source); })()), "ciudad", [], "any", false, false, false, 226), "html", null, true);
            yield "');
             \$(\"#addWesterTelefono\").val('";
            // line 227
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 227, $this->source); })()), "numeroMovil", [], "any", false, false, false, 227), "html", null, true);
            yield "');
             ";
        }
        // line 229
        yield "
             //Si existe el método de pago cargo los valores en el formulario
             ";
        // line 231
        if ((isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 231, $this->source); })())) {
            // line 232
            yield "             \$(\"#addPaypalCorreo\").val('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 232, $this->source); })()), "email", [], "any", false, false, false, 232), "html", null, true);
            yield "');
             ";
        }
        // line 234
        yield "
             //Si existe el método de pago cargo los valores en el formulario
             ";
        // line 236
        if ((isset($context["bizum"]) || array_key_exists("bizum", $context) ? $context["bizum"] : (function () { throw new RuntimeError('Variable "bizum" does not exist.', 236, $this->source); })())) {
            // line 237
            yield "             \$(\"#addBizumTelef\").val('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bizum"]) || array_key_exists("bizum", $context) ? $context["bizum"] : (function () { throw new RuntimeError('Variable "bizum" does not exist.', 237, $this->source); })()), "telefono", [], "any", false, false, false, 237), "html", null, true);
            yield "');
             ";
        }
        // line 239
        yield "
             //Si existe el método de pago cargo los valores en el formulario
             ";
        // line 241
        if ((isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 241, $this->source); })())) {
            // line 242
            yield "             \$(\"#addCuenta\").val('";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 242, $this->source); })()), "numerocuenta", [], "any", false, false, false, 242), "html", null, true);
            yield "');
             \$(\"#addTitular\").val('";
            // line 243
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 243, $this->source); })()), "titular", [], "any", false, false, false, 243), "html", null, true);
            yield "');
             ";
        }
        // line 245
        yield "
             //Función que valida la dirección de correo
             function validarEmail(valor) {
                 return reg.test(valor.toLowerCase().trim());
             }

             \$('#editWester').on('click', function () {
                 \$('#modalAddWesterUnion').modal('show');
             });

             \$('#editPaypal').on('click', function () {
                 \$('#modalAddPaypal').modal('show');
             });

             \$('#editBizum').on('click', function () {
                 \$('#modalAddBizum').modal('show');
             });

             \$('#editTrans').on('click', function () {
                 \$('#modalAddTransferencia').modal('show');
             });

             \$('#btnAddWesterGuardar').on('click', function () {

                 //Validaciones

                 if (\$(\"#addWesterNombre\").val() === '') {
                     toastr[\"error\"]('Teclee el nombre del destinatario', \"Advertencia\")
                     return false;
                 }

                 if (\$(\"#addWesterPrimerApellido\").val() === '') {
                     toastr[\"error\"]('Teclee el primer apellido del destinatario', \"Advertencia\")
                     return false;
                 }

                 if (\$(\"#addWesterCorreo\").val() === '') {
                     toastr[\"error\"]('Teclee la dirección de correo del destinatario', \"Advertencia\")
                     return false;
                 } else {
                     if (!validarEmail(\$(\"#addWesterCorreo\").val())) {
                         toastr[\"error\"]('Teclee una dirección de correo válida', \"Advertencia\")
                         return false;
                     }
                 }

                 if (\$(\"#addWesterCiudad\").val() === '') {
                     toastr[\"error\"]('Teclee la ciudad o el pueblo', \"Advertencia\")
                     return false;
                 }

                 if (\$(\"#addWesterTelefono\").val() === '') {
                     toastr[\"error\"]('Teclee el no. de telefóno', \"Advertencia\")
                     return false;
                 }

                 let Ruta = Routing.generate('app_metodo_de_pago_westerunion');

                 \$('#modalAddWesterUnion').modal('hide');

                 let mat_datos = {
                     nombre: \$(\"#addWesterNombre\").val(),
                     primerApellido: \$(\"#addWesterPrimerApellido\").val(),
                     segundoApellido: \$(\"#addWesterSegundoApellido\").val(),
                     correo: \$(\"#addWesterCorreo\").val(),
                     ciudad: \$(\"#addWesterCiudad\").val(),
                     movil: \$(\"#addWesterTelefono\").val()
                 };

                 \$(\".preload\").removeClass('hidden');

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     if (data === 'ok') {
                         \$(\".preload\").addClass('hidden');
                         \$('#modalAddWesterUnion input').each(function () {
                             \$(this).val('');
                         });
                         toastr[\"success\"]('Información de Wester Union registrada', \"Notificación\")
                         window.location.href = \"";
        // line 328
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metodo_de_pago_user");
        yield "\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

             \$('#btnAddPaypalGuardar').on('click', function () {

                 //Validaciones

                 if (\$(\"#addPaypalCorreo\").val() === '') {
                     toastr[\"error\"]('Teclee la dirección de correo', \"Advertencia\")
                     return false;
                 } else {
                     if (!validarEmail(\$(\"#addPaypalCorreo\").val())) {
                         toastr[\"error\"]('Teclee una dirección de correo válida', \"Advertencia\")
                         return false;
                     }
                 }

                 let Ruta = Routing.generate('app_metodo_de_pago_paypal');

                 \$('#modalAddPaypal').modal('hide');

                 let mat_datos = {
                     correo: \$(\"#addPaypalCorreo\").val()
                 };

                 \$(\".preload\").removeClass('hidden');

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     \$(\".preload\").addClass('hidden');
                     if (data === 'ok') {
                         \$('#modalAddPaypal input').each(function () {
                             \$(this).val('');
                         });
                         toastr[\"success\"]('Información de Paypal registrada', \"Notificación\")
                         window.location.href = \"";
        // line 371
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metodo_de_pago_user");
        yield "\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

             \$('#btnAddBizumGuardar').on('click', function () {

                 //Validaciones

                 if (\$(\"#addBizumTelef\").val() === '') {
                     toastr[\"error\"]('Teclee el no. de telefóno', \"Advertencia\")
                     return false;
                 }

                 let Ruta = Routing.generate('app_metodo_de_pago_bizum');

                 \$('#modalAddBizum').modal('hide');

                 let mat_datos = {
                     movil: \$(\"#addBizumTelef\").val()
                 };

                 \$(\".preload\").removeClass('hidden');

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     \$(\".preload\").addClass('hidden');
                     if (data === 'ok') {
                         \$('#modalAddBizum input').each(function () {
                             \$(this).val('');
                         });
                         toastr[\"success\"]('Información de Bizum registrada', \"Notificación\")
                         window.location.href = \"";
        // line 409
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metodo_de_pago_user");
        yield "\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

             \$('#btnAddTransferenciaGuardar').on('click', function () {

                 //Validaciones

                 if (\$(\"#addCuenta\").val() === '') {
                     toastr[\"error\"]('Teclee el no. de cuenta', \"Advertencia\")
                     return false;
                 }

                 let Ruta = Routing.generate('app_metodo_de_pago_transferencia');

                 \$('#modalAddTransferencia').modal('hide');

                 \$(\".preload\").removeClass('hidden');

                 let mat_datos = {
                     cuenta: \$(\"#addCuenta\").val(),
                     titular: \$(\"#addTitular\").val()
                 };

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     \$(\".preload\").addClass('hidden');
                     if (data === 'ok') {
                         \$('#modalAddTransferencia input').each(function () {
                             \$(this).val('');
                         });
                         toastr[\"success\"]('Información de la transferencia registrada', \"Notificación\")
                         window.location.href = \"";
        // line 448
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metodo_de_pago_user");
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
        return "metodo_de_pago/index.html.twig";
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
        return array (  674 => 448,  632 => 409,  591 => 371,  545 => 328,  460 => 245,  455 => 243,  450 => 242,  448 => 241,  444 => 239,  438 => 237,  436 => 236,  432 => 234,  426 => 232,  424 => 231,  420 => 229,  415 => 227,  411 => 226,  407 => 225,  403 => 224,  399 => 223,  394 => 222,  392 => 221,  388 => 219,  385 => 218,  379 => 216,  376 => 215,  374 => 214,  346 => 189,  342 => 188,  336 => 186,  329 => 185,  315 => 178,  311 => 177,  307 => 176,  303 => 175,  294 => 168,  284 => 160,  282 => 159,  272 => 152,  264 => 147,  257 => 143,  243 => 131,  233 => 123,  231 => 122,  222 => 116,  214 => 111,  201 => 100,  191 => 92,  189 => 91,  180 => 85,  172 => 80,  158 => 68,  148 => 60,  146 => 59,  137 => 53,  129 => 48,  123 => 45,  117 => 42,  110 => 38,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Método de Pago{% endblock %}

{% block page %}
    <div class=\"preload hidden\">
        <div class=\"logo\"></div>
        <div class=\"loader-frame\">
            <div class=\"loader1\" id=\"loader1\"></div>
            <div class=\"loader2\" id=\"loader2\"></div>
        </div>
    </div>
    <div class=\"content-wrapper\" style=\"min-height: 1517.4px;\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>M&eacute;todos de Pago</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <!-- Default box -->
            <div class=\"card card-solid\">
                <div class=\"card-body pb-0\">
                    <div class=\"row d-flex align-items-stretch\">
                        <div class=\"col-12 col-sm-6 col-md-4 align-items-stretch\">
                            <div class=\"card bg-light\">
                                <div class=\"card-body pt-0\">
                                    <div class=\"row\" style=\"padding-top: 10px\">
                                        <div class=\"col-7\">
                                            <h2 class=\"lead\"><b>Wester Union</b></h2>
                                            <p class=\"text-muted text-sm\">
                                                <b>Destinatario: </b> {{ westerUnion ? westerUnion.nombre ~ ' ' ~ westerUnion.primerApellido ~ ' ' ~ westerUnion.segundoApellido : '' }} </p>
                                            <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                <li class=\"small\"><span class=\"fa-li\"><i
                                                                class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                    {{ westerUnion ? westerUnion.email: '' }}
                                                </li>
                                                <li class=\"small\"><span class=\"fa-li\"><i
                                                                class=\"fas fa-lg fa-building\"></i></span> Ciudad: {{ westerUnion ? westerUnion.ciudad: '' }}
                                                </li>
                                                <li class=\"small\"><span class=\"fa-li\"><i class=\"fas fa-lg fa-phone\"></i></span>
                                                    Phone #: {{ westerUnion ? westerUnion.numeromovil: '' }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-5 text-center\">
                                            <img src=\"{{ asset('dist/img/credit/westerunion.png') }}\" alt=\"Westerunion\"
                                                 class=\"img-circle img-fluid\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    {% if is_granted('ROLE_USER') %}
                                        <div class=\"text-right\">
                                            <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editWester\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"top\" title=\"Registrar WesterUnion\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-6 col-md-3 align-items-stretch\">
                            <div class=\"card bg-light\">
                                <div class=\"card-body pt-0\">
                                    <div class=\"row\" style=\"padding-top: 10px\">
                                        <div class=\"col-7\">
                                            <h2 class=\"lead\"><b>Paypal</b></h2>
                                            <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                <li class=\"small\"><span class=\"fa-li\"><i
                                                                class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                    {{ paypal ? paypal.email: '' }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-5 text-center\">
                                            <img src=\"{{ asset('dist/img/credit/paypal.png') }}\" alt=\"Paypal\"
                                                 class=\"img-circle img-fluid\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    {% if is_granted('ROLE_USER') %}
                                        <div class=\"text-right\">
                                            <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editPaypal\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"top\" title=\"Registrar WesterUnion\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-6 col-md-2 align-items-stretch\">
                            <div class=\"card bg-light\">
                                <div class=\"card-body pt-0\">
                                    <div class=\"row\" style=\"padding-top: 10px\">
                                        <div class=\"col-7\">
                                            <h2 class=\"lead\"><b>Bizum</b></h2>
                                            <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                <li class=\"small\"><span class=\"fa-li\"><i class=\"fas fa-lg fa-phone\"></i></span>
                                                    Phone #: {{ bizum ? bizum.telefono: '' }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-5 text-center\">
                                            <img src=\"{{ asset('dist/img/credit/bizum.png') }}\" alt=\"Bizum\"
                                                 class=\"img-circle img-fluid\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    {% if is_granted('ROLE_USER') %}
                                        <div class=\"text-right\">
                                            <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editBizum\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"top\" title=\"Registrar WesterUnion\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-6 col-md-3 align-items-stretch\">
                            <div class=\"card bg-light\">
                                <div class=\"card-body pt-0\">
                                    <div class=\"row\" style=\"padding-top: 10px\">
                                        <div class=\"col-7\">
                                            <h2 class=\"lead\"><b>Transferencia</b></h2>
                                            <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                <li class=\"small\"><span class=\"fa-li\"><i
                                                                class=\"fas fa-lg fa-bank\"></i></span> No.Cuenta (IBAN):
                                                    {{ transferencia ? transferencia.numerocuenta: '' }}
                                                </li>
                                                <li class=\"small\"><span class=\"fa-li\"><i
                                                                class=\"fas fa-lg fa-user\"></i></span> Titular:
                                                    {{ transferencia ? transferencia.titular: '' }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-5 text-center\">
                                            <img src=\"{{ asset('dist/img/credit/transferenciaban.png') }}\"
                                                 alt=\"Transferencia\"
                                                 class=\"img-circle img-fluid\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    {% if is_granted('ROLE_USER') %}
                                        <div class=\"text-right\">
                                            <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editTrans\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"top\" title=\"Registrar WesterUnion\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            {{ include('metodo_de_pago/modalAddWesterUnion.html.twig') }}
            {{ include('metodo_de_pago/modalAddPaypal.html.twig') }}
            {{ include('metodo_de_pago/modalAddBizum.html.twig') }}
            {{ include('metodo_de_pago/modalAddTransferencia.html.twig') }}
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
{% endblock %}

 {% block javascripts %}
     {{ parent() }}
     <!-- Acceso a Rutas del Controller -->
     <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
     <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
     <script>
         \$(document).ready(function () {

             //Declaracion de variables
             let reg = new RegExp(/^([\\da-z_\\.-]+)@([\\da-z\\.-]+)\\.([a-z\\.]{2,6})\$/);

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

             {% if mensaje is not null %}
             {% if mensaje != 0 %}
             toastr[\"error\"]('{{ mensaje }}', \"Notificación\")
             {% endif %}
             {% endif %}

             //Si existe el método de pago cargo los valores en el formulario
             {% if westerUnion %}
             \$(\"#addWesterNombre\").val('{{ westerUnion.nombre }}');
             \$(\"#addWesterPrimerApellido\").val('{{ westerUnion.primerApellido }}');
             \$(\"#addWesterSegundoApellido\").val('{{ westerUnion.segundoApellido }}');
             \$(\"#addWesterCorreo\").val('{{ westerUnion.email }}');
             \$(\"#addWesterCiudad\").val('{{ westerUnion.ciudad }}');
             \$(\"#addWesterTelefono\").val('{{ westerUnion.numeroMovil }}');
             {% endif %}

             //Si existe el método de pago cargo los valores en el formulario
             {% if paypal %}
             \$(\"#addPaypalCorreo\").val('{{ paypal.email }}');
             {% endif %}

             //Si existe el método de pago cargo los valores en el formulario
             {% if bizum %}
             \$(\"#addBizumTelef\").val('{{ bizum.telefono }}');
             {% endif %}

             //Si existe el método de pago cargo los valores en el formulario
             {% if transferencia %}
             \$(\"#addCuenta\").val('{{ transferencia.numerocuenta }}');
             \$(\"#addTitular\").val('{{ transferencia.titular }}');
             {% endif %}

             //Función que valida la dirección de correo
             function validarEmail(valor) {
                 return reg.test(valor.toLowerCase().trim());
             }

             \$('#editWester').on('click', function () {
                 \$('#modalAddWesterUnion').modal('show');
             });

             \$('#editPaypal').on('click', function () {
                 \$('#modalAddPaypal').modal('show');
             });

             \$('#editBizum').on('click', function () {
                 \$('#modalAddBizum').modal('show');
             });

             \$('#editTrans').on('click', function () {
                 \$('#modalAddTransferencia').modal('show');
             });

             \$('#btnAddWesterGuardar').on('click', function () {

                 //Validaciones

                 if (\$(\"#addWesterNombre\").val() === '') {
                     toastr[\"error\"]('Teclee el nombre del destinatario', \"Advertencia\")
                     return false;
                 }

                 if (\$(\"#addWesterPrimerApellido\").val() === '') {
                     toastr[\"error\"]('Teclee el primer apellido del destinatario', \"Advertencia\")
                     return false;
                 }

                 if (\$(\"#addWesterCorreo\").val() === '') {
                     toastr[\"error\"]('Teclee la dirección de correo del destinatario', \"Advertencia\")
                     return false;
                 } else {
                     if (!validarEmail(\$(\"#addWesterCorreo\").val())) {
                         toastr[\"error\"]('Teclee una dirección de correo válida', \"Advertencia\")
                         return false;
                     }
                 }

                 if (\$(\"#addWesterCiudad\").val() === '') {
                     toastr[\"error\"]('Teclee la ciudad o el pueblo', \"Advertencia\")
                     return false;
                 }

                 if (\$(\"#addWesterTelefono\").val() === '') {
                     toastr[\"error\"]('Teclee el no. de telefóno', \"Advertencia\")
                     return false;
                 }

                 let Ruta = Routing.generate('app_metodo_de_pago_westerunion');

                 \$('#modalAddWesterUnion').modal('hide');

                 let mat_datos = {
                     nombre: \$(\"#addWesterNombre\").val(),
                     primerApellido: \$(\"#addWesterPrimerApellido\").val(),
                     segundoApellido: \$(\"#addWesterSegundoApellido\").val(),
                     correo: \$(\"#addWesterCorreo\").val(),
                     ciudad: \$(\"#addWesterCiudad\").val(),
                     movil: \$(\"#addWesterTelefono\").val()
                 };

                 \$(\".preload\").removeClass('hidden');

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     if (data === 'ok') {
                         \$(\".preload\").addClass('hidden');
                         \$('#modalAddWesterUnion input').each(function () {
                             \$(this).val('');
                         });
                         toastr[\"success\"]('Información de Wester Union registrada', \"Notificación\")
                         window.location.href = \"{{ path('app_metodo_de_pago_user') }}\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

             \$('#btnAddPaypalGuardar').on('click', function () {

                 //Validaciones

                 if (\$(\"#addPaypalCorreo\").val() === '') {
                     toastr[\"error\"]('Teclee la dirección de correo', \"Advertencia\")
                     return false;
                 } else {
                     if (!validarEmail(\$(\"#addPaypalCorreo\").val())) {
                         toastr[\"error\"]('Teclee una dirección de correo válida', \"Advertencia\")
                         return false;
                     }
                 }

                 let Ruta = Routing.generate('app_metodo_de_pago_paypal');

                 \$('#modalAddPaypal').modal('hide');

                 let mat_datos = {
                     correo: \$(\"#addPaypalCorreo\").val()
                 };

                 \$(\".preload\").removeClass('hidden');

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     \$(\".preload\").addClass('hidden');
                     if (data === 'ok') {
                         \$('#modalAddPaypal input').each(function () {
                             \$(this).val('');
                         });
                         toastr[\"success\"]('Información de Paypal registrada', \"Notificación\")
                         window.location.href = \"{{ path('app_metodo_de_pago_user') }}\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

             \$('#btnAddBizumGuardar').on('click', function () {

                 //Validaciones

                 if (\$(\"#addBizumTelef\").val() === '') {
                     toastr[\"error\"]('Teclee el no. de telefóno', \"Advertencia\")
                     return false;
                 }

                 let Ruta = Routing.generate('app_metodo_de_pago_bizum');

                 \$('#modalAddBizum').modal('hide');

                 let mat_datos = {
                     movil: \$(\"#addBizumTelef\").val()
                 };

                 \$(\".preload\").removeClass('hidden');

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     \$(\".preload\").addClass('hidden');
                     if (data === 'ok') {
                         \$('#modalAddBizum input').each(function () {
                             \$(this).val('');
                         });
                         toastr[\"success\"]('Información de Bizum registrada', \"Notificación\")
                         window.location.href = \"{{ path('app_metodo_de_pago_user') }}\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

             \$('#btnAddTransferenciaGuardar').on('click', function () {

                 //Validaciones

                 if (\$(\"#addCuenta\").val() === '') {
                     toastr[\"error\"]('Teclee el no. de cuenta', \"Advertencia\")
                     return false;
                 }

                 let Ruta = Routing.generate('app_metodo_de_pago_transferencia');

                 \$('#modalAddTransferencia').modal('hide');

                 \$(\".preload\").removeClass('hidden');

                 let mat_datos = {
                     cuenta: \$(\"#addCuenta\").val(),
                     titular: \$(\"#addTitular\").val()
                 };

                 \$.ajax({
                     url: Ruta,
                     type: \"post\",
                     dataType: \"html\",
                     data: mat_datos,
                 }).done(function (data) {
                     \$(\".preload\").addClass('hidden');
                     if (data === 'ok') {
                         \$('#modalAddTransferencia input').each(function () {
                             \$(this).val('');
                         });
                         toastr[\"success\"]('Información de la transferencia registrada', \"Notificación\")
                         window.location.href = \"{{ path('app_metodo_de_pago_user') }}\";
                     } else {
                         toastr[\"error\"](data, \"Notificación\")
                     }
                 });
             });

         });
     </script>
 {% endblock %}", "metodo_de_pago/index.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\metodo_de_pago\\index.html.twig");
    }
}
