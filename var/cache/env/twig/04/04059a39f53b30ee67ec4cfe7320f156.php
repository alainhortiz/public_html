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

/* user/modalAddIngresoSaldo.html.twig */
class __TwigTemplate_b3bdaf3c737935d29e8f839d5c305870 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/modalAddIngresoSaldo.html.twig"));

        // line 1
        echo "<div id=\"modalAddIngresoSaldo\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modalTitleIngreso\"></h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"col-sm-12\">
                    <div class=\"form-group\">
                        <label id=\"fechaIngreso\">
                            Fecha de Ingreso: ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "
                        </label>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <label>
                        Tipos de Cuentas
                    </label>
                    <div class=\"form-group\">
                        <select class=\"form-control\" id=\"tipoProductoIngreso\"
                                name=\"tipoProductoIngreso\">
                            <option value=\"0\">Seleccione el tipo de cuenta</option>
                                <option value=\"1\">Producto General en USD</option>
                                <option value=\"2\">Producto General en EUR</option>
                                <option value=\"3\">Producto Libro en USD</option>
                                <option value=\"4\">Producto Libro en EUR</option>
                                <option value=\"5\">Servicio en USD</option>
                                <option value=\"6\">Servicio en EUR</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addRoyaltieIngreso\" id=\"labelAddRoyaltieIngreso\">Royalties a ingresar</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee la cantidad\" id=\"addRoyaltieIngreso\"
                           name=\"addRoyaltieIngreso\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addMotivoIngreso\">Concepto</label>
                    <textarea style=\" width: 100%; resize: none ; height: 100px ; margin-top: 2px\"
                              id=\"addMotivoIngreso\"></textarea>
                </div>
                <div class=\"col-sm-12\">
                    <form id=\"myformIngreso\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                        Documento adjunto<input type=\"file\" name=\"uploadDocumentoIngreso\" id=\"uploadDocumentoIngreso\"/>
                    </form>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnAddGuardarIngreso\">Guardar
                </button>
                <button type=\"button\" class=\"btn btn-link  text-dark ml-auto\" data-dismiss=\"modal\">Cancelar</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/modalAddIngresoSaldo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalAddIngresoSaldo\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modalTitleIngreso\"></h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"col-sm-12\">
                    <div class=\"form-group\">
                        <label id=\"fechaIngreso\">
                            Fecha de Ingreso: {{ \"now\"|date('Y-m-d') }}
                        </label>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <label>
                        Tipos de Cuentas
                    </label>
                    <div class=\"form-group\">
                        <select class=\"form-control\" id=\"tipoProductoIngreso\"
                                name=\"tipoProductoIngreso\">
                            <option value=\"0\">Seleccione el tipo de cuenta</option>
                                <option value=\"1\">Producto General en USD</option>
                                <option value=\"2\">Producto General en EUR</option>
                                <option value=\"3\">Producto Libro en USD</option>
                                <option value=\"4\">Producto Libro en EUR</option>
                                <option value=\"5\">Servicio en USD</option>
                                <option value=\"6\">Servicio en EUR</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addRoyaltieIngreso\" id=\"labelAddRoyaltieIngreso\">Royalties a ingresar</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee la cantidad\" id=\"addRoyaltieIngreso\"
                           name=\"addRoyaltieIngreso\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addMotivoIngreso\">Concepto</label>
                    <textarea style=\" width: 100%; resize: none ; height: 100px ; margin-top: 2px\"
                              id=\"addMotivoIngreso\"></textarea>
                </div>
                <div class=\"col-sm-12\">
                    <form id=\"myformIngreso\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                        Documento adjunto<input type=\"file\" name=\"uploadDocumentoIngreso\" id=\"uploadDocumentoIngreso\"/>
                    </form>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnAddGuardarIngreso\">Guardar
                </button>
                <button type=\"button\" class=\"btn btn-link  text-dark ml-auto\" data-dismiss=\"modal\">Cancelar</button>
            </div>
        </div>
    </div>
</div>
", "user/modalAddIngresoSaldo.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\user\\modalAddIngresoSaldo.html.twig");
    }
}
