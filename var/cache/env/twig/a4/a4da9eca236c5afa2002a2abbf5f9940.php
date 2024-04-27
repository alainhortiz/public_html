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

/* solicitar_recogida/modalRechazoSolicitud.html.twig */
class __TwigTemplate_71f7a134f3314f845f4d07bf3ac9e4d1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_recogida/modalRechazoSolicitud.html.twig"));

        // line 1
        yield "<div id=\"modalRechazoSolicitud\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">RECHAZO SOLICITUD DE
                    RECOGIDA ";
        // line 7
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "emitirfactura", [], "any", false, false, false, 7) == true)) ? ("CON FACTURA") : (""));
        yield "</h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"col-sm-12\">
                    <label for=\"addMotivo\">Comentario</label>
                    <textarea style=\" width: 100%; resize: none ; height: 100px ; margin-top: 2px\"
                              id=\"addMotivo\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnAddRechazoGuardar\">Guardar
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
        return "solicitar_recogida/modalRechazoSolicitud.html.twig";
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
        return array (  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalRechazoSolicitud\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">RECHAZO SOLICITUD DE
                    RECOGIDA {{ app.user.emitirfactura == true ? 'CON FACTURA' }}</h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"col-sm-12\">
                    <label for=\"addMotivo\">Comentario</label>
                    <textarea style=\" width: 100%; resize: none ; height: 100px ; margin-top: 2px\"
                              id=\"addMotivo\"></textarea>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnAddRechazoGuardar\">Guardar
                </button>
                <button type=\"button\" class=\"btn btn-link  text-dark ml-auto\" data-dismiss=\"modal\">Cancelar</button>
            </div>
        </div>
    </div>
</div>
", "solicitar_recogida/modalRechazoSolicitud.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\solicitar_recogida\\modalRechazoSolicitud.html.twig");
    }
}
