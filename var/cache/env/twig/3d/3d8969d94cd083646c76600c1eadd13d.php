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

/* solicitar_pago_royal_acumulado/modalAddSolicitudPago.html.twig */
class __TwigTemplate_e57cef82f14121471b4e98d3b335625e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_pago_royal_acumulado/modalAddSolicitudPago.html.twig"));

        // line 1
        yield "    <div id=\"modalAddSolicitudPago\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">NUEVA SOLICITUD DE
                    PAGO ";
        // line 7
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "emitirfactura", [], "any", false, false, false, 7) == true)) ? ("CON FACTURA") : (""));
        yield "</h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"col-sm-12\">
                    <div class=\"form-group\">
                        <div class=\"text-danger\">
                        </div>
                        <label id=\"fecha\" name=\"fecha\">
                            Fecha de Solicitud: ";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y-m-d"), "html", null, true);
        yield "
                        </label>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addProvincia\">Método de Pago</label>
                    <select
                            class=\"form-control\" id=\"addMetodo\"
                            name=\"addMetodo\">
                        <option value=\"0\">Seleccione ...</option>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["metodos"]) || array_key_exists("metodos", $context) ? $context["metodos"] : (function () { throw new RuntimeError('Variable "metodos" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["metodo"]) {
            // line 29
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["metodo"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["metodo"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metodo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "                    </select>
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addRoyaltie\">Royalties a pagar</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee la cantidad\" id=\"addRoyaltie\"
                           name=\"addRoyaltie\">
                </div>
                ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "emitirfactura", [], "any", false, false, false, 39) == true)) {
            // line 40
            yield "                    <div class=\"col-sm-12\" style=\"padding-top: 5px\">
                        <div class=\"register-box text-left\">
                            <div class=\"card\" style=\"width: 450px;\">
                                <div class=\"card-body\">
                                    <h6 class=\"text-bold\">Empresa:</h6>
                                    <h6>";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 45, $this->source); })()), 0, [], "array", false, false, false, 45), "nombre", [], "any", false, false, false, 45), "html", null, true);
            yield "</h6>
                                    <h6 class=\"text-bold\">No.:</h6>
                                    <h6>";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 47, $this->source); })()), 0, [], "array", false, false, false, 47), "no", [], "any", false, false, false, 47), "html", null, true);
            yield "</h6>
                                    <h6 class=\"text-bold\">Dirección:</h6>
                                    <h6>";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 49, $this->source); })()), 0, [], "array", false, false, false, 49), "direccion", [], "any", false, false, false, 49), "html", null, true);
            yield "</h6>
                                    <h6 class=\"text-bold\">Ciudad:</h6>
                                    <h6>";
            // line 51
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 51, $this->source); })()), 0, [], "array", false, false, false, 51), "ciudad", [], "any", false, false, false, 51), "html", null, true);
            yield "</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                            <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                <input type=\"file\" name=\"upload\" id=\"upload\" />
                            </form>
                    </div>
                ";
        }
        // line 63
        yield "            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnAddGuardar\">Guardar
                </button>
                <button type=\"button\" class=\"btn btn-link  text-dark ml-auto\" data-dismiss=\"modal\">Cancelar</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "solicitar_pago_royal_acumulado/modalAddSolicitudPago.html.twig";
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
        return array (  140 => 63,  125 => 51,  120 => 49,  115 => 47,  110 => 45,  103 => 40,  101 => 39,  91 => 31,  80 => 29,  76 => 28,  63 => 18,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div id=\"modalAddSolicitudPago\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">NUEVA SOLICITUD DE
                    PAGO {{ app.user.emitirfactura == true ? 'CON FACTURA' }}</h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"col-sm-12\">
                    <div class=\"form-group\">
                        <div class=\"text-danger\">
                        </div>
                        <label id=\"fecha\" name=\"fecha\">
                            Fecha de Solicitud: {{ \"now\"|date('Y-m-d') }}
                        </label>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addProvincia\">Método de Pago</label>
                    <select
                            class=\"form-control\" id=\"addMetodo\"
                            name=\"addMetodo\">
                        <option value=\"0\">Seleccione ...</option>
                        {% for metodo in metodos %}
                            <option value=\"{{ metodo }}\">{{ metodo }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addRoyaltie\">Royalties a pagar</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee la cantidad\" id=\"addRoyaltie\"
                           name=\"addRoyaltie\">
                </div>
                {% if app.user.emitirfactura == true %}
                    <div class=\"col-sm-12\" style=\"padding-top: 5px\">
                        <div class=\"register-box text-left\">
                            <div class=\"card\" style=\"width: 450px;\">
                                <div class=\"card-body\">
                                    <h6 class=\"text-bold\">Empresa:</h6>
                                    <h6>{{ empresa[0].nombre }}</h6>
                                    <h6 class=\"text-bold\">No.:</h6>
                                    <h6>{{ empresa[0].no }}</h6>
                                    <h6 class=\"text-bold\">Dirección:</h6>
                                    <h6>{{ empresa[0].direccion }}</h6>
                                    <h6 class=\"text-bold\">Ciudad:</h6>
                                    <h6>{{ empresa[0].ciudad }}</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                            <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                <input type=\"file\" name=\"upload\" id=\"upload\" />
                            </form>
                    </div>
                {% endif %}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnAddGuardar\">Guardar
                </button>
                <button type=\"button\" class=\"btn btn-link  text-dark ml-auto\" data-dismiss=\"modal\">Cancelar</button>
            </div>
        </div>
    </div>
</div>
", "solicitar_pago_royal_acumulado/modalAddSolicitudPago.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\solicitar_pago_royal_acumulado\\modalAddSolicitudPago.html.twig");
    }
}
