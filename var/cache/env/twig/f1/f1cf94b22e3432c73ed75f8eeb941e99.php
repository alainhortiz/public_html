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

/* metodo_de_pago/modalAddWesterUnion.html.twig */
class __TwigTemplate_49663674b8d9ff1f48eda2db5af027d6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metodo_de_pago/modalAddWesterUnion.html.twig"));

        // line 1
        echo "<div id=\"modalAddWesterUnion\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">MÉTODO DE PAGO WESTER UNION</h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"col-sm-12\">
                    <label for=\"addWesterNombre\">Nombre</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el nombre ...\" id=\"addWesterNombre\"
                           name=\"addWesterNombre\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addWesterPrimerApellido\">Primer Apellido</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el primer apellido ...\" id=\"addWesterPrimerApellido\"
                           name=\"addWesterPrimerApellido\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addWesterSegundoApellido\">Segundo Apellido</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el segundo apellido ...\" id=\"addWesterSegundoApellido\"
                           name=\"addWesterSegundoApellido\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addWesterCorreo\">Correo</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el correo ...\" id=\"addWesterCorreo\"
                           name=\"addWesterCorreo\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addWesterCiudad\">Ciudad o Pueblo</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee la ciudad o el pueblo ...\" id=\"addWesterCiudad\"
                           name=\"addWesterCiudad\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addWesterTelefono\">Telefóno</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el telefóno ...\" id=\"addWesterTelefono\"
                           name=\"addWesterTelefono\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnAddWesterGuardar\">Guardar
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
        return "metodo_de_pago/modalAddWesterUnion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalAddWesterUnion\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">MÉTODO DE PAGO WESTER UNION</h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"col-sm-12\">
                    <label for=\"addWesterNombre\">Nombre</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el nombre ...\" id=\"addWesterNombre\"
                           name=\"addWesterNombre\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addWesterPrimerApellido\">Primer Apellido</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el primer apellido ...\" id=\"addWesterPrimerApellido\"
                           name=\"addWesterPrimerApellido\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addWesterSegundoApellido\">Segundo Apellido</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el segundo apellido ...\" id=\"addWesterSegundoApellido\"
                           name=\"addWesterSegundoApellido\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addWesterCorreo\">Correo</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el correo ...\" id=\"addWesterCorreo\"
                           name=\"addWesterCorreo\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addWesterCiudad\">Ciudad o Pueblo</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee la ciudad o el pueblo ...\" id=\"addWesterCiudad\"
                           name=\"addWesterCiudad\">
                </div>
                <div class=\"col-sm-12\">
                    <label for=\"addWesterTelefono\">Telefóno</label>
                    <input type=\"text\" class=\"form-control\"
                           placeholder=\"Teclee el telefóno ...\" id=\"addWesterTelefono\"
                           name=\"addWesterTelefono\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnAddWesterGuardar\">Guardar
                </button>
                <button type=\"button\" class=\"btn btn-link  text-dark ml-auto\" data-dismiss=\"modal\">Cancelar</button>
            </div>
        </div>
    </div>
</div>
", "metodo_de_pago/modalAddWesterUnion.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\metodo_de_pago\\modalAddWesterUnion.html.twig");
    }
}
