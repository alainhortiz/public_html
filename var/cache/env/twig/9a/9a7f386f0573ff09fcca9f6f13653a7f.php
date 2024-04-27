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

/* producto_agotado/modalAddStock.html.twig */
class __TwigTemplate_05f4b9610421f5f49bb545f7e0c9636a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto_agotado/modalAddStock.html.twig"));

        // line 1
        echo "<div id=\"modalAddStock\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">AGREGAR STOCK </h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 13
        echo "                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label for=\"stock\"></label><input type=\"text\" class=\"form-control input-number\"
                                                          placeholder=\"Stock\" id=\"stock\"
                                                          name=\"stock\">
                    </div>
                </div>
                ";
        // line 21
        echo "                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label for=\"avisoStock\"></label><input type=\"text\"
                                                               class=\"form-control input-number\"
                                                               placeholder=\"Aviso Stock\"
                                                               id=\"avisoStock\"
                                                               name=\"avisoStock\">
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
        return "producto_agotado/modalAddStock.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  53 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalAddStock\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">AGREGAR STOCK </h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                {# Stock #}
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label for=\"stock\"></label><input type=\"text\" class=\"form-control input-number\"
                                                          placeholder=\"Stock\" id=\"stock\"
                                                          name=\"stock\">
                    </div>
                </div>
                {# Aviso Stock #}
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label for=\"avisoStock\"></label><input type=\"text\"
                                                               class=\"form-control input-number\"
                                                               placeholder=\"Aviso Stock\"
                                                               id=\"avisoStock\"
                                                               name=\"avisoStock\">
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
", "producto_agotado/modalAddStock.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto_agotado\\modalAddStock.html.twig");
    }
}
