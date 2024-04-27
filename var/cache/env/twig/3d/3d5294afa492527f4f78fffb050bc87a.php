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

/* solicitar_recogida/modalAprobarSolicitud.html.twig */
class __TwigTemplate_9146ebf4b0a85b8857037b1c0e0edaa5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_recogida/modalAprobarSolicitud.html.twig"));

        yield "<div id=\"modalAprobarSolicitud\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">APROBAR SOLICITUD DE
                    RECOGIDA </h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"col-sm-12\">
                    <label for=\"fechaRecogida\"></label>
                    <input type=\"date\" class=\"form-control\"
                           name=\"fechaRecogida\" id=\"fechaRecogida\"
                           placeholder=\"Seleccione la fecha de recogida\">
                </div>
                <div class=\"row\" style=\"margin-top: 20px;margin-left: 40px\">
                    <label for=\"horaRecogida\">De</label>
                    <div class=\"col-sm-4\">
                        <input type=\"time\" class=\"form-control\"
                               name=\"horaRecogida\" id=\"horaRecogida\">
                    </div>
                    <label for=\"horaFinRecogida\">a</label>
                    <div class=\"col-sm-4\">
                        <input type=\"time\" class=\"form-control\"
                               name=\"horaFinRecogida\" id=\"horaFinRecogida\">
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"linkRecogida\"></label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el link de la empresa\" id=\"linkRecogida\"
                           name=\"linkRecogida\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"observacion\">Observaciones</label>
                    <textarea style=\" width: 100%; resize: none ; height: 100px ; margin-top: 2px\"
                              id=\"observacion\"></textarea>
                </div>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "solicitar_recogida/modalAprobarSolicitud.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalAprobarSolicitud\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">APROBAR SOLICITUD DE
                    RECOGIDA </h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"col-sm-12\">
                    <label for=\"fechaRecogida\"></label>
                    <input type=\"date\" class=\"form-control\"
                           name=\"fechaRecogida\" id=\"fechaRecogida\"
                           placeholder=\"Seleccione la fecha de recogida\">
                </div>
                <div class=\"row\" style=\"margin-top: 20px;margin-left: 40px\">
                    <label for=\"horaRecogida\">De</label>
                    <div class=\"col-sm-4\">
                        <input type=\"time\" class=\"form-control\"
                               name=\"horaRecogida\" id=\"horaRecogida\">
                    </div>
                    <label for=\"horaFinRecogida\">a</label>
                    <div class=\"col-sm-4\">
                        <input type=\"time\" class=\"form-control\"
                               name=\"horaFinRecogida\" id=\"horaFinRecogida\">
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"linkRecogida\"></label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el link de la empresa\" id=\"linkRecogida\"
                           name=\"linkRecogida\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"observacion\">Observaciones</label>
                    <textarea style=\" width: 100%; resize: none ; height: 100px ; margin-top: 2px\"
                              id=\"observacion\"></textarea>
                </div>
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
", "solicitar_recogida/modalAprobarSolicitud.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\solicitar_recogida\\modalAprobarSolicitud.html.twig");
    }
}
