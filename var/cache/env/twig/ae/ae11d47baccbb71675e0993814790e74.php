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

/* direccion_recogida/modalAddDireccion.html.twig */
class __TwigTemplate_a0d146ea385a7d0a28cd006141a39ae5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "direccion_recogida/modalAddDireccion.html.twig"));

        // line 1
        echo "<div id=\"modalAddDireccion\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">REGISTRO DIRECCIÓN DE RECOGIDA</h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee el nombre\"
                                                                  id=\"nombre\"
                                                                  name=\"nombre\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"telefono\"></label><input type=\"text\" class=\"form-control\"
                                                                 placeholder=\"Teclee el teléfono\"
                                                                 id=\"telefono\"
                                                                 name=\"telefono\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label for=\"direccion\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee la dirección\"
                                                                  id=\"direccion\"
                                                                  name=\"direccion\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"codigoPostal\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee el código postal\"
                                                                  id=\"codigoPostal\"
                                                                  name=\"codigoPostal\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"poblacion\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee la población\"
                                                                  id=\"poblacion\"
                                                                  name=\"poblacion\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"provincia\"></label><input type=\"text\" class=\"form-control\"
                                                                     placeholder=\"Teclee la provincia\"
                                                                     id=\"provincia\"
                                                                     name=\"provincia\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"pais\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee el país\"
                                                                  id=\"pais\"
                                                                  name=\"pais\">
                        </div>
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
        return "direccion_recogida/modalAddDireccion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalAddDireccion\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">REGISTRO DIRECCIÓN DE RECOGIDA</h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"nombre\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee el nombre\"
                                                                  id=\"nombre\"
                                                                  name=\"nombre\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"telefono\"></label><input type=\"text\" class=\"form-control\"
                                                                 placeholder=\"Teclee el teléfono\"
                                                                 id=\"telefono\"
                                                                 name=\"telefono\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label for=\"direccion\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee la dirección\"
                                                                  id=\"direccion\"
                                                                  name=\"direccion\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"codigoPostal\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee el código postal\"
                                                                  id=\"codigoPostal\"
                                                                  name=\"codigoPostal\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"poblacion\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee la población\"
                                                                  id=\"poblacion\"
                                                                  name=\"poblacion\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"provincia\"></label><input type=\"text\" class=\"form-control\"
                                                                     placeholder=\"Teclee la provincia\"
                                                                     id=\"provincia\"
                                                                     name=\"provincia\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label for=\"pais\"></label><input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee el país\"
                                                                  id=\"pais\"
                                                                  name=\"pais\">
                        </div>
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
", "direccion_recogida/modalAddDireccion.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\direccion_recogida\\modalAddDireccion.html.twig");
    }
}
