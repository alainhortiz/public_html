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

/* direccion_recogida/modalEditDireccion.html.twig */
class __TwigTemplate_1cdd4fed21445bf35d30fa8c2902e6a1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "direccion_recogida/modalEditDireccion.html.twig"));

        // line 1
        echo "<div id=\"modalEditDireccion\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">MODIFICAR DIRECCIÓN DE RECOGIDA</h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"nombreEdit\"></label><input type=\"text\" class=\"form-control\"
                                                               placeholder=\"Teclee el nombre\"
                                                               id=\"nombreEdit\"
                                                               name=\"nombreEdit\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"telefonoEdit\"></label><input type=\"text\" class=\"form-control\"
                                                                 placeholder=\"Teclee el teléfono\"
                                                                 id=\"telefonoEdit\"
                                                                 name=\"telefonoEdit\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label for=\"direccionEdit\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee la dirección\"
                                                                  id=\"direccionEdit\"
                                                                  name=\"direccionEdit\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"codigoPostalEdit\"></label><input type=\"text\" class=\"form-control\"
                                                                     placeholder=\"Teclee el código postal\"
                                                                     id=\"codigoPostalEdit\"
                                                                     name=\"codigoPostalEdit\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"poblacionEdit\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee la población\"
                                                                  id=\"poblacionEdit\"
                                                                  name=\"poblacionEdit\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"provinciaEdit\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee la provincia\"
                                                                  id=\"provinciaEdit\"
                                                                  name=\"provinciaEdit\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"paisEdit\"></label><input type=\"text\" class=\"form-control\"
                                                             placeholder=\"Teclee el país\"
                                                             id=\"paisEdit\"
                                                             name=\"paisEdit\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnEditGuardar\">Guardar
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
        return "direccion_recogida/modalEditDireccion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalEditDireccion\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">MODIFICAR DIRECCIÓN DE RECOGIDA</h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"nombreEdit\"></label><input type=\"text\" class=\"form-control\"
                                                               placeholder=\"Teclee el nombre\"
                                                               id=\"nombreEdit\"
                                                               name=\"nombreEdit\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"telefonoEdit\"></label><input type=\"text\" class=\"form-control\"
                                                                 placeholder=\"Teclee el teléfono\"
                                                                 id=\"telefonoEdit\"
                                                                 name=\"telefonoEdit\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label for=\"direccionEdit\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee la dirección\"
                                                                  id=\"direccionEdit\"
                                                                  name=\"direccionEdit\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"codigoPostalEdit\"></label><input type=\"text\" class=\"form-control\"
                                                                     placeholder=\"Teclee el código postal\"
                                                                     id=\"codigoPostalEdit\"
                                                                     name=\"codigoPostalEdit\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"poblacionEdit\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee la población\"
                                                                  id=\"poblacionEdit\"
                                                                  name=\"poblacionEdit\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"provinciaEdit\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee la provincia\"
                                                                  id=\"provinciaEdit\"
                                                                  name=\"provinciaEdit\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"paisEdit\"></label><input type=\"text\" class=\"form-control\"
                                                             placeholder=\"Teclee el país\"
                                                             id=\"paisEdit\"
                                                             name=\"paisEdit\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnEditGuardar\">Guardar
                </button>
                <button type=\"button\" class=\"btn btn-link  text-dark ml-auto\" data-dismiss=\"modal\">Cancelar</button>
            </div>
        </div>
    </div>
</div>
", "direccion_recogida/modalEditDireccion.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\direccion_recogida\\modalEditDireccion.html.twig");
    }
}
