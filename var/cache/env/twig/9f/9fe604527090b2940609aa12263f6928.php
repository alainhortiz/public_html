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

/* correo/plantillaCorreo.html.twig */
class __TwigTemplate_baefcdb8b3324cb05ddcb38d3b904e12 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "correo/plantillaCorreo.html.twig"));

        // line 1
        yield "<h1>Hola!</h1>

<p>";
        // line 3
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</p>

<p>Sistema de Royalties de Magos Artesanos</p>

<p>Saludos!</p>



<h2><a href=\"http://eltaumaturgo.com/login\">www.eltaumaturgo.com</a></h2>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "correo/plantillaCorreo.html.twig";
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
        return array (  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Hola!</h1>

<p>{{ mensaje }}</p>

<p>Sistema de Royalties de Magos Artesanos</p>

<p>Saludos!</p>



<h2><a href=\"http://eltaumaturgo.com/login\">www.eltaumaturgo.com</a></h2>
", "correo/plantillaCorreo.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\correo\\plantillaCorreo.html.twig");
    }
}
