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

/* metodo_de_pago/metodosEncontrados.html.twig */
class __TwigTemplate_2c72212311528fe6adf6a06635b717e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metodo_de_pago/metodosEncontrados.html.twig"));

        // line 1
        yield "<div id=\"containerResultado\" style=\"display: block\">
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
        // line 14
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 14, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 14, $this->source); })()), 0, [], "array", false, false, false, 14), "nombre", [], "any", false, false, false, 14) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 14, $this->source); })()), 0, [], "array", false, false, false, 14), "primerApellido", [], "any", false, false, false, 14)) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 14, $this->source); })()), 0, [], "array", false, false, false, 14), "segundoApellido", [], "any", false, false, false, 14)), "html", null, true)) : (yield ""));
        yield " </p>
                                        <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                            <li class=\"small\"><span class=\"fa-li\"><i
                                                            class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                ";
        // line 18
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 18, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 18, $this->source); })()), 0, [], "array", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true)) : (yield ""));
        yield "
                                            </li>
                                            <li class=\"small\"><span class=\"fa-li\"><i
                                                            class=\"fas fa-lg fa-building\"></i></span> Ciudad: ";
        // line 21
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 21, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 21, $this->source); })()), 0, [], "array", false, false, false, 21), "ciudad", [], "any", false, false, false, 21), "html", null, true)) : (yield ""));
        yield "
                                            </li>
                                            <li class=\"small\"><span class=\"fa-li\"><i class=\"fas fa-lg fa-phone\"></i></span>
                                                Phone #: ";
        // line 24
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 24, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 24, $this->source); })()), 0, [], "array", false, false, false, 24), "numeromovil", [], "any", false, false, false, 24), "html", null, true)) : (yield ""));
        yield "
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-5 text-center\">
                                        <img src=\"";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/westerunion.png"), "html", null, true);
        yield "\" alt=\"Westerunion\"
                                             class=\"img-circle img-fluid\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                ";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 36
            yield "                                    <div class=\"text-right\">
                                        <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editWester\"
                                           data-toggle=\"tooltip\"
                                           data-placement=\"top\" title=\"Registrar WesterUnion\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 44
        yield "                            </div>
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
        // line 56
        (((isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 56, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 56, $this->source); })()), 0, [], "array", false, false, false, 56), "email", [], "any", false, false, false, 56), "html", null, true)) : (yield ""));
        yield "
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-5 text-center\">
                                        <img src=\"";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/paypal.png"), "html", null, true);
        yield "\" alt=\"Paypal\"
                                             class=\"img-circle img-fluid\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 68
            yield "                                    <div class=\"text-right\">
                                        <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editPaypal\"
                                           data-toggle=\"tooltip\"
                                           data-placement=\"top\" title=\"Registrar WesterUnion\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 76
        yield "                            </div>
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
        // line 87
        (((isset($context["bizum"]) || array_key_exists("bizum", $context) ? $context["bizum"] : (function () { throw new RuntimeError('Variable "bizum" does not exist.', 87, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bizum"]) || array_key_exists("bizum", $context) ? $context["bizum"] : (function () { throw new RuntimeError('Variable "bizum" does not exist.', 87, $this->source); })()), 0, [], "array", false, false, false, 87), "telefono", [], "any", false, false, false, 87), "html", null, true)) : (yield ""));
        yield "
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-5 text-center\">
                                        <img src=\"";
        // line 92
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/bizum.png"), "html", null, true);
        yield "\" alt=\"Bizum\"
                                             class=\"img-circle img-fluid\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                ";
        // line 98
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 99
            yield "                                    <div class=\"text-right\">
                                        <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editBizum\"
                                           data-toggle=\"tooltip\"
                                           data-placement=\"top\" title=\"Registrar WesterUnion\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 107
        yield "                            </div>
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
                                                            class=\"fas fa-lg fa-bank\"></i></span> No:
                                                ";
        // line 119
        (((isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 119, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 119, $this->source); })()), 0, [], "array", false, false, false, 119), "numerocuenta", [], "any", false, false, false, 119), "html", null, true)) : (yield ""));
        yield "
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-5 text-center\">
                                        <img src=\"";
        // line 124
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/transferenciaban.png"), "html", null, true);
        yield "\"
                                             alt=\"Transferencia\"
                                             class=\"img-circle img-fluid\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                ";
        // line 131
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 132
            yield "                                    <div class=\"text-right\">
                                        <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editTrans\"
                                           data-toggle=\"tooltip\"
                                           data-placement=\"top\" title=\"Registrar WesterUnion\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 140
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "metodo_de_pago/metodosEncontrados.html.twig";
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
        return array (  233 => 140,  223 => 132,  221 => 131,  211 => 124,  203 => 119,  189 => 107,  179 => 99,  177 => 98,  168 => 92,  160 => 87,  147 => 76,  137 => 68,  135 => 67,  126 => 61,  118 => 56,  104 => 44,  94 => 36,  92 => 35,  83 => 29,  75 => 24,  69 => 21,  63 => 18,  56 => 14,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"containerResultado\" style=\"display: block\">
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
                                            <b>Destinatario: </b> {{ westerUnion ? westerUnion[0].nombre ~ ' ' ~ westerUnion[0].primerApellido ~ ' ' ~ westerUnion[0].segundoApellido : '' }} </p>
                                        <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                            <li class=\"small\"><span class=\"fa-li\"><i
                                                            class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                {{ westerUnion ? westerUnion[0].email: '' }}
                                            </li>
                                            <li class=\"small\"><span class=\"fa-li\"><i
                                                            class=\"fas fa-lg fa-building\"></i></span> Ciudad: {{ westerUnion ? westerUnion[0].ciudad: '' }}
                                            </li>
                                            <li class=\"small\"><span class=\"fa-li\"><i class=\"fas fa-lg fa-phone\"></i></span>
                                                Phone #: {{ westerUnion ? westerUnion[0].numeromovil: '' }}
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
                                                {{ paypal ? paypal[0].email: '' }}
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
                                                Phone #: {{ bizum ? bizum[0].telefono: '' }}
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
                                                            class=\"fas fa-lg fa-bank\"></i></span> No:
                                                {{ transferencia ? transferencia[0].numerocuenta: '' }}
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
        <!-- /.card -->
    </section>
</div>", "metodo_de_pago/metodosEncontrados.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\metodo_de_pago\\metodosEncontrados.html.twig");
    }
}
