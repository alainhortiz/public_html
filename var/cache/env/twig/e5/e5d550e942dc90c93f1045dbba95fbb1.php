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

/* amortizacion/modalAddAmortizacion.html.twig */
class __TwigTemplate_1205743d8619b9e230d678f4358a2189 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amortizacion/modalAddAmortizacion.html.twig"));

        // line 1
        echo "<div id=\"modalAddAmortizacion\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">AGREGAR AMORTIZACIÓN </h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 13
        echo "                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label for=\"costo\"></label><input type=\"text\" class=\"form-control\"
                                                          placeholder=\"Teclee el costo de producción\"
                                                          id=\"costo\"
                                                          name=\"costo\">
                    </div>
                </div>
                ";
        // line 22
        echo "                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label for=\"precio\"></label><input type=\"text\" class=\"form-control\"
                                                           placeholder=\"Teclee el precio\"
                                                           id=\"precio\"
                                                           name=\"precio\">
                    </div>
                </div>
                ";
        // line 31
        echo "                <div class=\"col-12\" style=\"margin-top: 30px\">
                    <div class=\"form-group\">
                        <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                            Beneficiado
                        </h5>
                        <label>
                            <input style=\"margin-left: 20px\" type=\"radio\" name=\"beneficiado\"
                                   value=\"0\" checked>
                        </label>
                        <label for=\"beneficiado\">Administrador</label>

                        <label>
                            <input style=\"margin-left: 20px\" type=\"radio\"
                                   name=\"beneficiado\"
                                   value=\"1\">
                        </label>
                        <label for=\"beneficiado\">Usuario</label>
                    </div>
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

    }

    public function getTemplateName()
    {
        return "amortizacion/modalAddAmortizacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 31,  63 => 22,  53 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalAddAmortizacion\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">AGREGAR AMORTIZACIÓN </h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                {# Costo de Producción #}
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label for=\"costo\"></label><input type=\"text\" class=\"form-control\"
                                                          placeholder=\"Teclee el costo de producción\"
                                                          id=\"costo\"
                                                          name=\"costo\">
                    </div>
                </div>
                {# Precio de Venta #}
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label for=\"precio\"></label><input type=\"text\" class=\"form-control\"
                                                           placeholder=\"Teclee el precio\"
                                                           id=\"precio\"
                                                           name=\"precio\">
                    </div>
                </div>
                {# Beneficiado #}
                <div class=\"col-12\" style=\"margin-top: 30px\">
                    <div class=\"form-group\">
                        <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                            Beneficiado
                        </h5>
                        <label>
                            <input style=\"margin-left: 20px\" type=\"radio\" name=\"beneficiado\"
                                   value=\"0\" checked>
                        </label>
                        <label for=\"beneficiado\">Administrador</label>

                        <label>
                            <input style=\"margin-left: 20px\" type=\"radio\"
                                   name=\"beneficiado\"
                                   value=\"1\">
                        </label>
                        <label for=\"beneficiado\">Usuario</label>
                    </div>
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
", "amortizacion/modalAddAmortizacion.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\amortizacion\\modalAddAmortizacion.html.twig");
    }
}
