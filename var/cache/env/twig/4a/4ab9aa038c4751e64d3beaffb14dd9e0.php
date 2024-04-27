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

/* metodo_de_pago/metodosEncontrados.html.twig */
class __TwigTemplate_4397fb8a425ff902a38a56dfb17715d3 extends Template
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
        echo "<div id=\"containerResultado\" style=\"display: block\">
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
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 14, $this->source); })())) ? (print (twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 14, $this->source); })()), 0, [], "array", false, false, false, 14), "nombre", [], "any", false, false, false, 14) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 14, $this->source); })()), 0, [], "array", false, false, false, 14), "primerApellido", [], "any", false, false, false, 14)) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 14, $this->source); })()), 0, [], "array", false, false, false, 14), "segundoApellido", [], "any", false, false, false, 14)), "html", null, true))) : (print ("")));
        echo " </p>
                                        <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                            <li class=\"small\"><span class=\"fa-li\"><i
                                                            class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                ";
        // line 18
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 18, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 18, $this->source); })()), 0, [], "array", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true))) : (print ("")));
        echo "
                                            </li>
                                            <li class=\"small\"><span class=\"fa-li\"><i
                                                            class=\"fas fa-lg fa-building\"></i></span> Ciudad: ";
        // line 21
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 21, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 21, $this->source); })()), 0, [], "array", false, false, false, 21), "ciudad", [], "any", false, false, false, 21), "html", null, true))) : (print ("")));
        echo "
                                            </li>
                                            <li class=\"small\"><span class=\"fa-li\"><i class=\"fas fa-lg fa-phone\"></i></span>
                                                Phone #: ";
        // line 24
        (((isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 24, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["westerUnion"]) || array_key_exists("westerUnion", $context) ? $context["westerUnion"] : (function () { throw new RuntimeError('Variable "westerUnion" does not exist.', 24, $this->source); })()), 0, [], "array", false, false, false, 24), "numeromovil", [], "any", false, false, false, 24), "html", null, true))) : (print ("")));
        echo "
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-5 text-center\">
                                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/westerunion.png"), "html", null, true);
        echo "\" alt=\"Westerunion\"
                                             class=\"img-circle img-fluid\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                ";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 36
            echo "                                    <div class=\"text-right\">
                                        <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editWester\"
                                           data-toggle=\"tooltip\"
                                           data-placement=\"top\" title=\"Registrar WesterUnion\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 44
        echo "                            </div>
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
        (((isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 56, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paypal"]) || array_key_exists("paypal", $context) ? $context["paypal"] : (function () { throw new RuntimeError('Variable "paypal" does not exist.', 56, $this->source); })()), 0, [], "array", false, false, false, 56), "email", [], "any", false, false, false, 56), "html", null, true))) : (print ("")));
        echo "
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-5 text-center\">
                                        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/paypal.png"), "html", null, true);
        echo "\" alt=\"Paypal\"
                                             class=\"img-circle img-fluid\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 68
            echo "                                    <div class=\"text-right\">
                                        <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editPaypal\"
                                           data-toggle=\"tooltip\"
                                           data-placement=\"top\" title=\"Registrar WesterUnion\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 76
        echo "                            </div>
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
        (((isset($context["bizum"]) || array_key_exists("bizum", $context) ? $context["bizum"] : (function () { throw new RuntimeError('Variable "bizum" does not exist.', 87, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bizum"]) || array_key_exists("bizum", $context) ? $context["bizum"] : (function () { throw new RuntimeError('Variable "bizum" does not exist.', 87, $this->source); })()), 0, [], "array", false, false, false, 87), "telefono", [], "any", false, false, false, 87), "html", null, true))) : (print ("")));
        echo "
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-5 text-center\">
                                        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/bizum.png"), "html", null, true);
        echo "\" alt=\"Bizum\"
                                             class=\"img-circle img-fluid\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                ";
        // line 98
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 99
            echo "                                    <div class=\"text-right\">
                                        <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editBizum\"
                                           data-toggle=\"tooltip\"
                                           data-placement=\"top\" title=\"Registrar WesterUnion\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 107
        echo "                            </div>
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
        (((isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 119, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transferencia"]) || array_key_exists("transferencia", $context) ? $context["transferencia"] : (function () { throw new RuntimeError('Variable "transferencia" does not exist.', 119, $this->source); })()), 0, [], "array", false, false, false, 119), "numerocuenta", [], "any", false, false, false, 119), "html", null, true))) : (print ("")));
        echo "
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"col-5 text-center\">
                                        <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/credit/transferenciaban.png"), "html", null, true);
        echo "\"
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
            echo "                                    <div class=\"text-right\">
                                        <a href=\"#\" class=\"btn btn-sm btn-primary\" type=\"button\" id=\"editTrans\"
                                           data-toggle=\"tooltip\"
                                           data-placement=\"top\" title=\"Registrar WesterUnion\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 140
        echo "                            </div>
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

    }

    public function getTemplateName()
    {
        return "metodo_de_pago/metodosEncontrados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 140,  222 => 132,  220 => 131,  210 => 124,  202 => 119,  188 => 107,  178 => 99,  176 => 98,  167 => 92,  159 => 87,  146 => 76,  136 => 68,  134 => 67,  125 => 61,  117 => 56,  103 => 44,  93 => 36,  91 => 35,  82 => 29,  74 => 24,  68 => 21,  62 => 18,  55 => 14,  40 => 1,);
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
