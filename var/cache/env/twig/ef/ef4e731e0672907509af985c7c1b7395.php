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

/* producto/editProducto.html.twig */
class __TwigTemplate_69cc6dffacdb7f63703ce23ef75c0650 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'page' => [$this, 'block_page'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/editProducto.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/editProducto.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modificar Producto";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Select2 -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/css/select2.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 12
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 13
        yield "    <!-- Alerta -->
    <div class=\"preload hidden\">
        <div class=\"logo\"></div>
        <div class=\"loader-frame\">
            <div class=\"loader1\" id=\"loader1\"></div>
            <div class=\"loader2\" id=\"loader2\"></div>
        </div>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid mt-5\">
                <div class=\"card card-info card-outline\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-edit\"></i>
                            Modificar producto
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            ";
        // line 36
        yield "                            <div class=\"col-md-7 col-lg-7 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"nombre\">Nombre</label><input type=\"text\" class=\"form-control\"
                                                                       placeholder=\"Teclee el nombre\"
                                                                       id=\"nombre\"
                                                                       name=\"nombre\"
                                                                       value=\"";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 42, $this->source); })()), "nombre", [], "any", false, false, false, 42), "html", null, true);
        yield "\"
                                                                       onkeypress=\"return soloLetras(event)\">
                                </div>
                            </div>
                            ";
        // line 47
        yield "                            <div class=\"col-md-5 col-lg-5 col-12\" style=\"margin-top: 30px\">
                                <div class=\"form-group\">
                                    <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                        Tipo de Producto
                                    </h5>
                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoProducto\"
                                               value=\"1\" ";
        // line 54
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 54, $this->source); })()), "tipoProducto", [], "any", false, false, false, 54) == "1")) ? ("checked") : (""));
        yield ">
                                    </label>
                                    <label for=\"tipoProducto\">General</label>

                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\"
                                               name=\"tipoProducto\"
                                               value=\"2\" ";
        // line 61
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 61, $this->source); })()), "tipoProducto", [], "any", false, false, false, 61) == "2")) ? ("checked") : (""));
        yield ">
                                    </label>
                                    <label for=\"tipoProducto\">Libro</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 69
        yield "                            <div class=\"col-md-4 col-lg-4 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"idd\">Id</label><input type=\"text\" class=\"form-control\"
                                                                    placeholder=\"Teclee el I.D.D\" id=\"idd\"
                                                                    value=\"";
        // line 73
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 73, $this->source); })()), "idd", [], "any", false, false, false, 73), "html", null, true);
        yield "\"
                                                                    name=\"idd\">
                                </div>
                            </div>
                            ";
        // line 78
        yield "                            <div class=\"col-md-3 col-lg-3 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"beneficio\">Beneficio</label><input type=\"text\" class=\"form-control\"
                                                                          placeholder=\"Teclee el beneficio\"
                                                                          id=\"beneficio\"
                                                                          value=\"";
        // line 83
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 83, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 83), "html", null, true);
        yield "\"
                                                                          name=\"beneficio\">
                                </div>
                            </div>
                            ";
        // line 88
        yield "                            <div class=\"col-md-5 col-lg-5 col-12\" style=\"margin-top: 30px\">
                                <div class=\"form-group\">
                                    <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                        Tipo de Moneda
                                    </h5>
                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoMoneda\"
                                               value=\"USD\" ";
        // line 95
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 95, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 95) == "USD")) ? ("checked") : (""));
        yield ">
                                    </label>
                                    <label for=\"tipoMoneda\">USD</label>

                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\"
                                               name=\"tipoMoneda\"
                                               value=\"EUR\" ";
        // line 102
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 102, $this->source); })()), "tipodemoneda", [], "any", false, false, false, 102) == "EUR")) ? ("checked") : (""));
        yield ">
                                    </label>
                                    <label for=\"tipoMoneda\">EUR</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 110
        yield "                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <label for=\"stock\">Stock</label><input type=\"text\" class=\"form-control input-number\"
                                           placeholder=\"Stock\" id=\"stock\" value=\"";
        // line 113
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 113, $this->source); })()), "stock", [], "any", false, false, false, 113), "html", null, true);
        yield "\"
                                           name=\"stock\">
                                </div>
                            </div>
                            ";
        // line 118
        yield "                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <label for=\"avisoStock\">Avisar cuando queden</label><input type=\"text\"
                                           class=\"form-control input-number\"
                                           placeholder=\"Aviso Stock\"
                                           id=\"avisoStock\"
                                           value=\"";
        // line 124
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 124, $this->source); })()), "stockAdvertencia", [], "any", false, false, false, 124), "html", null, true);
        yield "\"
                                           name=\"avisoStock\">
                                </div>
                            </div>
                            ";
        // line 129
        yield "                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <label for=\"usuario\">Cliente</label><select class=\"form-control\" id=\"usuario\"
                                            name=\"usuario\">
                                        <option value=\"";
        // line 133
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "nombre", [], "any", false, false, false, 133) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "apellidos", [], "any", false, false, false, 133)), "html", null, true);
        yield "</option>
                                        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 135
            yield "                                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 135), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 135) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "apellidos", [], "any", false, false, false, 135)), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 143
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 143, $this->source); })()), "imagen", [], "any", false, false, false, 143)) {
            // line 144
            yield "                                <div class=\"col-12\">
                                    <div class=\"product-image-thumb active\"><img
                                                src=\"";
            // line 146
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 146, $this->source); })()), "imagen", [], "any", false, false, false, 146))), "html", null, true);
            yield "\" alt=\"Imagen Producto\">
                                    </div>
                                </div>
                            ";
        }
        // line 150
        yield "                            <div class=\"col-12\" style=\"margin-top: 20px\">
                                <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                    Modificar Imagen <input type=\"file\" name=\"upload\" id=\"upload\"/>
                                </form>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-check\" style=\"margin-top: 20px; margin-left: 10px\">
                                <input type=\"checkbox\" class=\"form-check-input\"
                                       id=\"checkAmortizacion\" ";
        // line 159
        yield (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 159, $this->source); })()), "amortizaciones", [], "any", false, false, false, 159)) > 0)) ? ("checked") : (""));
        yield ">

                                <label class=\"form-check-label\" for=\"checkAmortizacion\">Gasto de Amortización</label>
                            </div>
                        </div>
                        <div id=\"mostrarAmortizacion\"
                             style=\"display: ";
        // line 165
        yield (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 165, $this->source); })()), "amortizaciones", [], "any", false, false, false, 165)) > 0)) ? ("block") : ("none"));
        yield "\">
                            <div class=\"row\">
                                ";
        // line 168
        yield "                                <div class=\"col-md-3 col-lg-3 col-12\">
                                    <div class=\"form-group\">
                                        <label for=\"costo\">Costo</label><input type=\"text\" class=\"form-control\"
                                                                          placeholder=\"Teclee el costo de producción\"
                                                                          id=\"costo\"
                                                                          value=\"";
        // line 173
        (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 173, $this->source); })()), "amortizaciones", [], "any", false, false, false, 173)) > 0)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 173, $this->source); })()), "amortizaciones", [], "any", false, false, false, 173), 0, [], "array", false, false, false, 173), "costoProduccion", [], "any", false, false, false, 173), "html", null, true)) : (yield ""));
        yield "\"
                                                                          name=\"costo\">
                                    </div>
                                </div>
                                ";
        // line 178
        yield "                                <div class=\"col-md-3 col-lg-3 col-12\">
                                    <div class=\"form-group\">
                                        <label for=\"precio\">Precio</label><input type=\"text\" class=\"form-control\"
                                                                           placeholder=\"Teclee el precio\"
                                                                           id=\"precio\"
                                                                           value=\"";
        // line 183
        (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 183, $this->source); })()), "amortizaciones", [], "any", false, false, false, 183)) > 0)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 183, $this->source); })()), "amortizaciones", [], "any", false, false, false, 183), 0, [], "array", false, false, false, 183), "precioVenta", [], "any", false, false, false, 183), "html", null, true)) : (yield ""));
        yield "\"
                                                                           name=\"precio\">
                                    </div>
                                </div>
                                ";
        // line 188
        yield "                                <div class=\"col-md-6 col-lg-6 col-12\" style=\"margin-top: 30px\">
                                    <div class=\"form-group\">
                                        <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                            Beneficiado
                                        </h5>
                                        <label>
                                            <input style=\"margin-left: 20px\" type=\"radio\" name=\"beneficiado\"
                                                   value=\"0\" ";
        // line 195
        yield ((((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 195, $this->source); })()), "amortizaciones", [], "any", false, false, false, 195)) > 0) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 195, $this->source); })()), "amortizaciones", [], "any", false, false, false, 195), 0, [], "array", false, false, false, 195), "isAdministrador", [], "any", false, false, false, 195) == "1"))) ? ("checked") : (""));
        yield ">
                                        </label>
                                        <label for=\"beneficiado\">Administrador</label>

                                        <label>
                                            <input style=\"margin-left: 20px\" type=\"radio\"
                                                   name=\"beneficiado\"
                                                   value=\"1\" ";
        // line 202
        yield ((((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 202, $this->source); })()), "amortizaciones", [], "any", false, false, false, 202)) > 0) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 202, $this->source); })()), "amortizaciones", [], "any", false, false, false, 202), 0, [], "array", false, false, false, 202), "isAdministrador", [], "any", false, false, false, 202) == "0"))) ? ("checked") : (""));
        yield ">
                                        </label>
                                        <label for=\"beneficiado\">Usuario</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 211
        yield "                    <div class=\"card-footer\">
                        <div class=\"row justify-content-center\">
                            <div>
                                <button type=\"button\" class=\"btn btn-primary\"
                                        id=\"btnGuardar\"
                                        data-toggle=\"tooltip\"
                                        data-placement=\"top\"
                                        title=\"Guardar el producto\">Guardar
                                </button>
                                <button type=\"button\" class=\"btn btn-danger\"
                                        id=\"btnCancelar\"
                                        data-toggle=\"tooltip\"
                                        data-placement=\"top\"
                                        title=\"Salir\">Cancelar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 235
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 236
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Select2 -->
    <script src=\"";
        // line 238
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"";
        // line 240
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        yield "\"></script>
    <script>
        \$(document).ready(function () {

            //Declaracion de variables
            let tipoProducto = 0;
            let fichero;
            let siFichero = 0;

            \$('#usuario').select2();

            toastr.options = {
                \"closeButton\": false,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-right\",
                \"preventDuplicates\": true,
                \"onclick\": null,
                \"showDuration\": \"300\",
                \"hideDuration\": \"500\",
                \"timeOut\": \"3000\",
                \"extendedTimeOut\": \"500\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            \$('#beneficio').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#beneficio').val().length;
                    let indexPunto = \$('#beneficio').val().indexOf('.');
                    let indexComa = \$('#beneficio').val().indexOf(',');

                    if (tecla.charCode === 44) {
                        if (len === 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexComa > 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexPunto !== -1) {
                            return false;
                        }
                    }else if (tecla.charCode === 46) {
                        if (len === 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexPunto > 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexComa !== -1) {
                            return false;
                        }
                    }
                    if (indexPunto > 0) {
                        let CharAfterdot = (len + 1) - indexPunto;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }else if (indexComa > 0) {
                        let CharAfterdot = (len + 1) - indexComa;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$('#costo').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#costo').val().length;
                    let indexPunto = \$('#costo').val().indexOf('.');
                    let indexComa = \$('#costo').val().indexOf(',');

                    if (tecla.charCode === 44) {
                        if (len === 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexComa > 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexPunto !== -1) {
                            return false;
                        }
                    }else if (tecla.charCode === 46) {
                        if (len === 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexPunto > 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexComa !== -1) {
                            return false;
                        }
                    }
                    if (indexPunto > 0) {
                        let CharAfterdot = (len + 1) - indexPunto;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }else if (indexComa > 0) {
                        let CharAfterdot = (len + 1) - indexComa;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$('#precio').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#precio').val().length;
                    let indexPunto = \$('#precio').val().indexOf('.');
                    let indexComa = \$('#precio').val().indexOf(',');

                    if (tecla.charCode === 44) {
                        if (len === 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexComa > 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexPunto !== -1) {
                            return false;
                        }
                    }else if (tecla.charCode === 46) {
                        if (len === 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexPunto > 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexComa !== -1) {
                            return false;
                        }
                    }
                    if (indexPunto > 0) {
                        let CharAfterdot = (len + 1) - indexPunto;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }else if (indexComa > 0) {
                        let CharAfterdot = (len + 1) - indexComa;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$(\"#checkAmortizacion\").on('change', function () {
                if (\$(this).is(':checked')) {
                    \$(\"#mostrarAmortizacion\").show();
                } else {
                    \$(\"#mostrarAmortizacion\").hide();
                    \$(\"#costo\").val('');
                    \$(\"#precio\").val('');
                }
            });

            \$('#btnCancelar').on('click', function () {
                window.location.href = \"";
        // line 413
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        yield "\";
            });

            \$(\"#upload\").on('change', function (e) {
                let fichero = \$(\"#upload\").val();
                let input = document.getElementById('upload');
                let file = input.files[0]; //2 000 000
                let allowedExtensions = /(.jpg|.png)\$/i;
                siFichero = 0;

                if (!allowedExtensions.exec(fichero)) {
                    toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .jpg, .png.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else if (file.size > 2000000) {
                    toastr[\"error\"]('El tamano del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else {
                    //aqui subo el fichero y guardo el nombre
                    let Ruta = Routing.generate('app_producto_fichero');
                    let form = document.getElementById(\"myform\");
                    siFichero = 1;

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"json\",
                        data: new FormData(form),
                        contentType: false,
                        processData: false,
                        cache: false
                    }).done(function (data) {
                        fichero = data['fichero'];
                    });
                }
            });

            \$('#btnGuardar').on('click', function () {

                let Ruta = Routing.generate('app_producto_update', {'id': ";
        // line 453
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 453, $this->source); })()), "id", [], "any", false, false, false, 453), "html", null, true);
        yield "});
                let isAdministrador = 1;
                let amortizacion = 0;

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#beneficio\").val() === '' || \$(\"#beneficio\").val() === '0') {
                    toastr[\"error\"]('El beneficio es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#idd\").val() === '') {
                    toastr[\"error\"]('El I.D.D del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#stock\").val() === '') {
                    toastr[\"error\"]('El stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#avisoStock\").val() === '') {
                    toastr[\"error\"]('El aviso de stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (parseInt(\$(\"#avisoStock\").val()) > parseInt(\$(\"#stock\").val())) {
                    toastr[\"error\"]('El aviso de stock no puede ser mayor que el stock del producto.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#usuario\").val() === '0') {
                    toastr[\"error\"]('Debe asignar un usuario al producto, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$('#checkAmortizacion').is(':checked')) {
                    amortizacion = 1;
                    if (\$(\"#costo\").val() === '' || \$(\"#costo\").val() === '0') {
                        toastr[\"error\"]('El costo de producción es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                        return false;
                    }
                    if (\$(\"#precio\").val() === '' || \$(\"#precio\").val() === '0') {
                        toastr[\"error\"]('El precio del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                        return false;
                    }
                    let saldo = parseFloat(\$(\"#stock\").val()) * parseFloat(\$(\"#precio\").val().replace(',','.'));
                    if (saldo < parseFloat(\$(\"#costo\").val().replace(',','.'))) {
                        toastr[\"error\"]('La cantidad de productos en stock no permite liquidar la amortización.', \"Advertencia\")
                        return false;
                    }
                    if (!\$('input:radio[name=beneficiado]').is(':checked')) {
                        toastr[\"error\"]('Debe seleccionar un beneficiado, no puede quedar en blanco.', \"Advertencia\")
                        return false;
                    }
                }

                if (\$('input:radio[name=beneficiado]:checked').val() === '1') {
                    isAdministrador = 0;
                }

                if (siFichero === 0) {
                    fichero = null;
                } else {
                    fichero = document.getElementById('upload').files[0].name;
                }


                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    tipoProducto: \$('input:radio[name=tipoProducto]:checked').val(),
                    beneficio: parseFloat(\$('#beneficio').val().replace(',','.')),
                    tipoMoneda: \$('input:radio[name=tipoMoneda]:checked').val(),
                    idd: \$(\"#idd\").val(),
                    stock: parseInt(\$(\"#stock\").val()),
                    avisStock: parseInt(\$(\"#avisoStock\").val()),
                    usuario: \$(\"#usuario\").val(),
                    usuarioAnterior: '";
        // line 529
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 529, $this->source); })()), "user", [], "any", false, false, false, 529), "id", [], "any", false, false, false, 529), "html", null, true);
        yield "',
                    fichero: fichero,
                    amortizacion: amortizacion,
                    costo: parseFloat(\$('#costo').val().replace(',','.')),
                    precio: parseFloat(\$('#precio').val().replace(',','.')),
                    isAdministrador: isAdministrador
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        if (\$('input:radio[name=tipoProducto]:checked').val() === '2') {
                            toastr[\"success\"]('El libro ha sido modificado.', \"Notificación\")
                        } else {
                            toastr[\"success\"]('El producto ha sido modificado.', \"Notificación\")
                        }
                        window.location.href = \"";
        // line 550
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        yield "\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "producto/editProducto.html.twig";
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
        return array (  759 => 550,  735 => 529,  656 => 453,  613 => 413,  438 => 241,  434 => 240,  429 => 238,  423 => 236,  416 => 235,  386 => 211,  375 => 202,  365 => 195,  356 => 188,  349 => 183,  342 => 178,  335 => 173,  328 => 168,  323 => 165,  314 => 159,  303 => 150,  296 => 146,  292 => 144,  289 => 143,  282 => 137,  271 => 135,  267 => 134,  261 => 133,  255 => 129,  248 => 124,  240 => 118,  233 => 113,  228 => 110,  218 => 102,  208 => 95,  199 => 88,  192 => 83,  185 => 78,  178 => 73,  172 => 69,  162 => 61,  152 => 54,  143 => 47,  136 => 42,  128 => 36,  104 => 13,  97 => 12,  87 => 9,  83 => 8,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modificar Producto{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Select2 -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/select2/css/select2.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}\">
{% endblock %}

{% block page %}
    <!-- Alerta -->
    <div class=\"preload hidden\">
        <div class=\"logo\"></div>
        <div class=\"loader-frame\">
            <div class=\"loader1\" id=\"loader1\"></div>
            <div class=\"loader2\" id=\"loader2\"></div>
        </div>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid mt-5\">
                <div class=\"card card-info card-outline\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-edit\"></i>
                            Modificar producto
                        </h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            {# Nombre #}
                            <div class=\"col-md-7 col-lg-7 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"nombre\">Nombre</label><input type=\"text\" class=\"form-control\"
                                                                       placeholder=\"Teclee el nombre\"
                                                                       id=\"nombre\"
                                                                       name=\"nombre\"
                                                                       value=\"{{ producto.nombre }}\"
                                                                       onkeypress=\"return soloLetras(event)\">
                                </div>
                            </div>
                            {# Tipo de Producto #}
                            <div class=\"col-md-5 col-lg-5 col-12\" style=\"margin-top: 30px\">
                                <div class=\"form-group\">
                                    <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                        Tipo de Producto
                                    </h5>
                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoProducto\"
                                               value=\"1\" {{ (producto.tipoProducto == '1') ? 'checked' }}>
                                    </label>
                                    <label for=\"tipoProducto\">General</label>

                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\"
                                               name=\"tipoProducto\"
                                               value=\"2\" {{ (producto.tipoProducto == '2') ? 'checked' }}>
                                    </label>
                                    <label for=\"tipoProducto\">Libro</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# IDD #}
                            <div class=\"col-md-4 col-lg-4 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"idd\">Id</label><input type=\"text\" class=\"form-control\"
                                                                    placeholder=\"Teclee el I.D.D\" id=\"idd\"
                                                                    value=\"{{ producto.idd }}\"
                                                                    name=\"idd\">
                                </div>
                            </div>
                            {# Beneficio por venta #}
                            <div class=\"col-md-3 col-lg-3 col-12\">
                                <div class=\"form-group\">
                                    <label for=\"beneficio\">Beneficio</label><input type=\"text\" class=\"form-control\"
                                                                          placeholder=\"Teclee el beneficio\"
                                                                          id=\"beneficio\"
                                                                          value=\"{{ producto.beneficioxventa }}\"
                                                                          name=\"beneficio\">
                                </div>
                            </div>
                            {# Tipo de Moneda #}
                            <div class=\"col-md-5 col-lg-5 col-12\" style=\"margin-top: 30px\">
                                <div class=\"form-group\">
                                    <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                        Tipo de Moneda
                                    </h5>
                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\" name=\"tipoMoneda\"
                                               value=\"USD\" {{ (producto.tipodemoneda == 'USD') ? 'checked' }}>
                                    </label>
                                    <label for=\"tipoMoneda\">USD</label>

                                    <label>
                                        <input style=\"margin-left: 20px\" type=\"radio\"
                                               name=\"tipoMoneda\"
                                               value=\"EUR\" {{ (producto.tipodemoneda == 'EUR') ? 'checked' }}>
                                    </label>
                                    <label for=\"tipoMoneda\">EUR</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Stock #}
                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <label for=\"stock\">Stock</label><input type=\"text\" class=\"form-control input-number\"
                                           placeholder=\"Stock\" id=\"stock\" value=\"{{ producto.stock }}\"
                                           name=\"stock\">
                                </div>
                            </div>
                            {# Aviso Stock #}
                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <label for=\"avisoStock\">Avisar cuando queden</label><input type=\"text\"
                                           class=\"form-control input-number\"
                                           placeholder=\"Aviso Stock\"
                                           id=\"avisoStock\"
                                           value=\"{{ producto.stockAdvertencia }}\"
                                           name=\"avisoStock\">
                                </div>
                            </div>
                            {# Usuario #}
                            <div class=\"col-md-4 col-lg-4 col-12\" style=\"margin-top: 20px\">
                                <div class=\"form-group\">
                                    <label for=\"usuario\">Cliente</label><select class=\"form-control\" id=\"usuario\"
                                            name=\"usuario\">
                                        <option value=\"{{ producto.user.id }}\">{{ producto.user.nombre ~ ' ' ~ producto.user.apellidos }}</option>
                                        {% for user in  users %}
                                            <option value=\"{{ user.id }}\">{{ user.nombre ~ ' ' ~ user.apellidos }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Imagen #}
                            {% if producto.imagen %}
                                <div class=\"col-12\">
                                    <div class=\"product-image-thumb active\"><img
                                                src=\"{{ asset('uploads/' ~ producto.imagen) }}\" alt=\"Imagen Producto\">
                                    </div>
                                </div>
                            {% endif %}
                            <div class=\"col-12\" style=\"margin-top: 20px\">
                                <form id=\"myform\" method=\"post\" ENCTYPE=\"multipart/form-data\">
                                    Modificar Imagen <input type=\"file\" name=\"upload\" id=\"upload\"/>
                                </form>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-check\" style=\"margin-top: 20px; margin-left: 10px\">
                                <input type=\"checkbox\" class=\"form-check-input\"
                                       id=\"checkAmortizacion\" {{ (producto.amortizaciones|length > 0) ? 'checked' }}>

                                <label class=\"form-check-label\" for=\"checkAmortizacion\">Gasto de Amortización</label>
                            </div>
                        </div>
                        <div id=\"mostrarAmortizacion\"
                             style=\"display: {{ (producto.amortizaciones|length > 0) ? 'block' : 'none' }}\">
                            <div class=\"row\">
                                {# Costo de Producción #}
                                <div class=\"col-md-3 col-lg-3 col-12\">
                                    <div class=\"form-group\">
                                        <label for=\"costo\">Costo</label><input type=\"text\" class=\"form-control\"
                                                                          placeholder=\"Teclee el costo de producción\"
                                                                          id=\"costo\"
                                                                          value=\"{{ (producto.amortizaciones|length > 0) ? producto.amortizaciones[0].costoProduccion }}\"
                                                                          name=\"costo\">
                                    </div>
                                </div>
                                {# Precio de Venta #}
                                <div class=\"col-md-3 col-lg-3 col-12\">
                                    <div class=\"form-group\">
                                        <label for=\"precio\">Precio</label><input type=\"text\" class=\"form-control\"
                                                                           placeholder=\"Teclee el precio\"
                                                                           id=\"precio\"
                                                                           value=\"{{ (producto.amortizaciones|length > 0) ? producto.amortizaciones[0].precioVenta }}\"
                                                                           name=\"precio\">
                                    </div>
                                </div>
                                {# Beneficiado #}
                                <div class=\"col-md-6 col-lg-6 col-12\" style=\"margin-top: 30px\">
                                    <div class=\"form-group\">
                                        <h5 class=\"card-title text-center\" style=\"margin-left: 20px\">
                                            Beneficiado
                                        </h5>
                                        <label>
                                            <input style=\"margin-left: 20px\" type=\"radio\" name=\"beneficiado\"
                                                   value=\"0\" {{ ((producto.amortizaciones|length > 0) and producto.amortizaciones[0].isAdministrador == '1') ? 'checked' }}>
                                        </label>
                                        <label for=\"beneficiado\">Administrador</label>

                                        <label>
                                            <input style=\"margin-left: 20px\" type=\"radio\"
                                                   name=\"beneficiado\"
                                                   value=\"1\" {{ ((producto.amortizaciones|length > 0) and producto.amortizaciones[0].isAdministrador == '0') ? 'checked' }}>
                                        </label>
                                        <label for=\"beneficiado\">Usuario</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# Botones #}
                    <div class=\"card-footer\">
                        <div class=\"row justify-content-center\">
                            <div>
                                <button type=\"button\" class=\"btn btn-primary\"
                                        id=\"btnGuardar\"
                                        data-toggle=\"tooltip\"
                                        data-placement=\"top\"
                                        title=\"Guardar el producto\">Guardar
                                </button>
                                <button type=\"button\" class=\"btn btn-danger\"
                                        id=\"btnCancelar\"
                                        data-toggle=\"tooltip\"
                                        data-placement=\"top\"
                                        title=\"Salir\">Cancelar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Select2 -->
    <script src=\"{{ asset('plugins/select2/js/select2.full.min.js') }}\"></script>
    <!-- Acceso a Rutas del Controller -->
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script>
        \$(document).ready(function () {

            //Declaracion de variables
            let tipoProducto = 0;
            let fichero;
            let siFichero = 0;

            \$('#usuario').select2();

            toastr.options = {
                \"closeButton\": false,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-right\",
                \"preventDuplicates\": true,
                \"onclick\": null,
                \"showDuration\": \"300\",
                \"hideDuration\": \"500\",
                \"timeOut\": \"3000\",
                \"extendedTimeOut\": \"500\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            \$('#beneficio').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#beneficio').val().length;
                    let indexPunto = \$('#beneficio').val().indexOf('.');
                    let indexComa = \$('#beneficio').val().indexOf(',');

                    if (tecla.charCode === 44) {
                        if (len === 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexComa > 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexPunto !== -1) {
                            return false;
                        }
                    }else if (tecla.charCode === 46) {
                        if (len === 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexPunto > 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexComa !== -1) {
                            return false;
                        }
                    }
                    if (indexPunto > 0) {
                        let CharAfterdot = (len + 1) - indexPunto;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }else if (indexComa > 0) {
                        let CharAfterdot = (len + 1) - indexComa;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$('#costo').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#costo').val().length;
                    let indexPunto = \$('#costo').val().indexOf('.');
                    let indexComa = \$('#costo').val().indexOf(',');

                    if (tecla.charCode === 44) {
                        if (len === 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexComa > 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexPunto !== -1) {
                            return false;
                        }
                    }else if (tecla.charCode === 46) {
                        if (len === 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexPunto > 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexComa !== -1) {
                            return false;
                        }
                    }
                    if (indexPunto > 0) {
                        let CharAfterdot = (len + 1) - indexPunto;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }else if (indexComa > 0) {
                        let CharAfterdot = (len + 1) - indexComa;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$('#precio').keypress(function (tecla) {
                if ((tecla.charCode < 48 || tecla.charCode > 57) && (tecla.charCode !== 44) && (tecla.charCode !== 46) && (tecla.charCode !== 8)) {
                    return false;
                } else {
                    let len = \$('#precio').val().length;
                    let indexPunto = \$('#precio').val().indexOf('.');
                    let indexComa = \$('#precio').val().indexOf(',');

                    if (tecla.charCode === 44) {
                        if (len === 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexComa > 0 && tecla.charCode === 44) {
                            return false;
                        }
                        if (indexPunto !== -1) {
                            return false;
                        }
                    }else if (tecla.charCode === 46) {
                        if (len === 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexPunto > 0 && tecla.charCode === 46) {
                            return false;
                        }
                        if (indexComa !== -1) {
                            return false;
                        }
                    }
                    if (indexPunto > 0) {
                        let CharAfterdot = (len + 1) - indexPunto;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }else if (indexComa > 0) {
                        let CharAfterdot = (len + 1) - indexComa;
                        if (CharAfterdot > 3) {
                            return false;
                        }
                    }
                }
                return true;
            });

            \$(\"#checkAmortizacion\").on('change', function () {
                if (\$(this).is(':checked')) {
                    \$(\"#mostrarAmortizacion\").show();
                } else {
                    \$(\"#mostrarAmortizacion\").hide();
                    \$(\"#costo\").val('');
                    \$(\"#precio\").val('');
                }
            });

            \$('#btnCancelar').on('click', function () {
                window.location.href = \"{{ path('app_producto_index') }}\";
            });

            \$(\"#upload\").on('change', function (e) {
                let fichero = \$(\"#upload\").val();
                let input = document.getElementById('upload');
                let file = input.files[0]; //2 000 000
                let allowedExtensions = /(.jpg|.png)\$/i;
                siFichero = 0;

                if (!allowedExtensions.exec(fichero)) {
                    toastr[\"error\"]('Sólo se pueden subir archivos con extensiones: .jpg, .png.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else if (file.size > 2000000) {
                    toastr[\"error\"]('El tamano del fichero no puede ser mayor que 2 MB.', \"Advertencia\")
                    \$(\"#upload\").val('');
                    return false;
                } else {
                    //aqui subo el fichero y guardo el nombre
                    let Ruta = Routing.generate('app_producto_fichero');
                    let form = document.getElementById(\"myform\");
                    siFichero = 1;

                    \$.ajax({
                        url: Ruta,
                        type: \"post\",
                        dataType: \"json\",
                        data: new FormData(form),
                        contentType: false,
                        processData: false,
                        cache: false
                    }).done(function (data) {
                        fichero = data['fichero'];
                    });
                }
            });

            \$('#btnGuardar').on('click', function () {

                let Ruta = Routing.generate('app_producto_update', {'id': {{ producto.id }}});
                let isAdministrador = 1;
                let amortizacion = 0;

                //Validaciones
                if (\$(\"#nombre\").val() === '') {
                    toastr[\"error\"]('El nombre es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#beneficio\").val() === '' || \$(\"#beneficio\").val() === '0') {
                    toastr[\"error\"]('El beneficio es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#idd\").val() === '') {
                    toastr[\"error\"]('El I.D.D del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#stock\").val() === '') {
                    toastr[\"error\"]('El stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#avisoStock\").val() === '') {
                    toastr[\"error\"]('El aviso de stock del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (parseInt(\$(\"#avisoStock\").val()) > parseInt(\$(\"#stock\").val())) {
                    toastr[\"error\"]('El aviso de stock no puede ser mayor que el stock del producto.', \"Advertencia\")
                    return false;
                }
                if (\$(\"#usuario\").val() === '0') {
                    toastr[\"error\"]('Debe asignar un usuario al producto, no puede quedar en blanco.', \"Advertencia\")
                    return false;
                }
                if (\$('#checkAmortizacion').is(':checked')) {
                    amortizacion = 1;
                    if (\$(\"#costo\").val() === '' || \$(\"#costo\").val() === '0') {
                        toastr[\"error\"]('El costo de producción es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                        return false;
                    }
                    if (\$(\"#precio\").val() === '' || \$(\"#precio\").val() === '0') {
                        toastr[\"error\"]('El precio del producto es obligatorio, no puede quedar en blanco.', \"Advertencia\")
                        return false;
                    }
                    let saldo = parseFloat(\$(\"#stock\").val()) * parseFloat(\$(\"#precio\").val().replace(',','.'));
                    if (saldo < parseFloat(\$(\"#costo\").val().replace(',','.'))) {
                        toastr[\"error\"]('La cantidad de productos en stock no permite liquidar la amortización.', \"Advertencia\")
                        return false;
                    }
                    if (!\$('input:radio[name=beneficiado]').is(':checked')) {
                        toastr[\"error\"]('Debe seleccionar un beneficiado, no puede quedar en blanco.', \"Advertencia\")
                        return false;
                    }
                }

                if (\$('input:radio[name=beneficiado]:checked').val() === '1') {
                    isAdministrador = 0;
                }

                if (siFichero === 0) {
                    fichero = null;
                } else {
                    fichero = document.getElementById('upload').files[0].name;
                }


                \$(\".preload\").removeClass('hidden');

                let mat_datos = {
                    nombre: \$('#nombre').val(),
                    tipoProducto: \$('input:radio[name=tipoProducto]:checked').val(),
                    beneficio: parseFloat(\$('#beneficio').val().replace(',','.')),
                    tipoMoneda: \$('input:radio[name=tipoMoneda]:checked').val(),
                    idd: \$(\"#idd\").val(),
                    stock: parseInt(\$(\"#stock\").val()),
                    avisStock: parseInt(\$(\"#avisoStock\").val()),
                    usuario: \$(\"#usuario\").val(),
                    usuarioAnterior: '{{ producto.user.id }}',
                    fichero: fichero,
                    amortizacion: amortizacion,
                    costo: parseFloat(\$('#costo').val().replace(',','.')),
                    precio: parseFloat(\$('#precio').val().replace(',','.')),
                    isAdministrador: isAdministrador
                };
                \$.ajax({
                    type: \"POST\",
                    dataType: \"html\",
                    url: Ruta,
                    data: mat_datos
                }).done(function (data) {
                    \$(\".preload\").addClass('hidden');

                    if (data === 'ok') {
                        if (\$('input:radio[name=tipoProducto]:checked').val() === '2') {
                            toastr[\"success\"]('El libro ha sido modificado.', \"Notificación\")
                        } else {
                            toastr[\"success\"]('El producto ha sido modificado.', \"Notificación\")
                        }
                        window.location.href = \"{{ path('app_producto_index') }}\";
                    } else {
                        toastr[\"error\"](data, \"Advertencia\")
                    }
                });

            });

        });
    </script>
{% endblock %}

", "producto/editProducto.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\producto\\editProducto.html.twig");
    }
}
