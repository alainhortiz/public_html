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

/* solicitar_recogida/modalAddSolicitud.html.twig */
class __TwigTemplate_e8c3ef0daa9e38c2420175a06614fc66 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_recogida/modalAddSolicitud.html.twig"));

        // line 1
        yield "<div id=\"modalAddSolicitud\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">REGISTRO SOLICITUD DE
                    RECOGIDA </h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 14
        yield "                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label id=\"fecha\" name=\"fecha\">
                                Fecha de Solicitud: ";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y-m-d"), "html", null, true);
        yield "
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <section>
                            Por favor, ten en cuenta que debes dar 48 horas de margen para que se
                            realice la gestión y que los sábados, domingos y festivos no se realizan recogidas
                        </section>
                    </div>
                </div>
                <div class=\"row\" style=\"margin-top: 5px\">
                    <span><strong>Dirección de recogida</strong></span>
                </div>
                <div class=\"row\" style=\"margin-top: 10px\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\"
                                   placeholder=\"Teclee el nombre del contacto\"
                                   id=\"nombre\"
                                   name=\"nombre\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee el teléfono del contacto\"
                                                                 id=\"telefono\"
                                                                 name=\"telefono\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\"
                                   placeholder=\"Teclee la dirección de recogida\"
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
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <label for=\"addPreferencia\">Comentarios</label>
                        <textarea style=\" width: 100%; resize: none ; height: 100px ; margin-top: 2px\"
                                  id=\"addPreferencia\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnAddSolicitudGuardar\">Guardar
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
        return "solicitar_recogida/modalAddSolicitud.html.twig";
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
        return array (  61 => 18,  55 => 14,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalAddSolicitud\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-default\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal- modal-dialog-centered modal-\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"background-color: #303132\">
                <h6 class=\"modal-title text-uppercase text-white\" id=\"modal-title-default\">REGISTRO SOLICITUD DE
                    RECOGIDA </h6>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                {# fecha de solicitud #}
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label id=\"fecha\" name=\"fecha\">
                                Fecha de Solicitud: {{ \"now\"|date('Y-m-d') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <section>
                            Por favor, ten en cuenta que debes dar 48 horas de margen para que se
                            realice la gestión y que los sábados, domingos y festivos no se realizan recogidas
                        </section>
                    </div>
                </div>
                <div class=\"row\" style=\"margin-top: 5px\">
                    <span><strong>Dirección de recogida</strong></span>
                </div>
                <div class=\"row\" style=\"margin-top: 10px\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\"
                                   placeholder=\"Teclee el nombre del contacto\"
                                   id=\"nombre\"
                                   name=\"nombre\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\"
                                                                  placeholder=\"Teclee el teléfono del contacto\"
                                                                 id=\"telefono\"
                                                                 name=\"telefono\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\"
                                   placeholder=\"Teclee la dirección de recogida\"
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
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <label for=\"addPreferencia\">Comentarios</label>
                        <textarea style=\" width: 100%; resize: none ; height: 100px ; margin-top: 2px\"
                                  id=\"addPreferencia\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-sm text-white\" style=\"background-color: #303132\"
                        id=\"btnAddSolicitudGuardar\">Guardar
                </button>
                <button type=\"button\" class=\"btn btn-link  text-dark ml-auto\" data-dismiss=\"modal\">Cancelar</button>
            </div>
        </div>
    </div>
</div>
", "solicitar_recogida/modalAddSolicitud.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\solicitar_recogida\\modalAddSolicitud.html.twig");
    }
}
