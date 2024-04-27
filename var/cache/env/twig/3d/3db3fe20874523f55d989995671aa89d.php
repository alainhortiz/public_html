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

/* macros/tablas.html.twig */
class __TwigTemplate_71d243b996311efa60c2fc872aa157ac extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/tablas.html.twig"));

        // line 36
        yield "
";
        // line 280
        yield "
";
        // line 413
        yield "




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 1
    public function macro_tabla_ventas($__arreglo__ = null, $__tipo__ = null, $__moneda__ = null, $__tipoEncabezado__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "arreglo" => $__arreglo__,
            "tipo" => $__tipo__,
            "moneda" => $__moneda__,
            "tipoEncabezado" => $__tipoEncabezado__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tabla_ventas"));

            // line 2
            yield "<thead class=\"text-center\">
<tr>
    <th>Pack</th>
    <th>";
            // line 5
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["tipoEncabezado"]) || array_key_exists("tipoEncabezado", $context) ? $context["tipoEncabezado"] : (function () { throw new RuntimeError('Variable "tipoEncabezado" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "</th>
    <th>Fecha</th>
    <th>Código</th>
    ";
            // line 8
            if (((isset($context["tipoEncabezado"]) || array_key_exists("tipoEncabezado", $context) ? $context["tipoEncabezado"] : (function () { throw new RuntimeError('Variable "tipoEncabezado" does not exist.', 8, $this->source); })()) == "Producto")) {
                // line 9
                yield "        <th>Cantidad</th>
    ";
            }
            // line 11
            yield "    <th>Ganancia x Amortización</th>
    <th>Ganancia x Beneficio</th>
</tr>
</thead>
<tbody class=\"text-center\">
";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["arreglo"]) || array_key_exists("arreglo", $context) ? $context["arreglo"] : (function () { throw new RuntimeError('Variable "arreglo" does not exist.', 16, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["ven"]) {
                // line 17
                yield "    ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ven"], "producto", [], "any", false, false, false, 17), "tipoProducto", [], "any", false, false, false, 17) == (isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 17, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ven"], "producto", [], "any", false, false, false, 17), "tipodemoneda", [], "any", false, false, false, 17) == (isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 17, $this->source); })()))) && (CoreExtension::getAttribute($this->env, $this->source, $context["ven"], "royaltie", [], "any", false, false, false, 17) != 0))) {
                    // line 18
                    yield "        <tr class=\"text-center\">
            <td>";
                    // line 19
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ven"], "pack", [], "any", false, false, false, 19)) ? ("SI") : ("-"));
                    yield "</td>
            <td>";
                    // line 20
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ven"], "producto", [], "any", false, false, false, 20), "nombre", [], "any", false, false, false, 20), "html", null, true);
                    yield "</td>
            <td>";
                    // line 21
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ven"], "venta", [], "any", false, false, false, 21), "fecha", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true);
                    yield "</td>
            <td>";
                    // line 22
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ven"], "venta", [], "any", false, false, false, 22), "codigo", [], "any", false, false, false, 22), "html", null, true);
                    yield "</td>
            ";
                    // line 23
                    if (((isset($context["tipoEncabezado"]) || array_key_exists("tipoEncabezado", $context) ? $context["tipoEncabezado"] : (function () { throw new RuntimeError('Variable "tipoEncabezado" does not exist.', 23, $this->source); })()) == "Producto")) {
                        // line 24
                        yield "                <td>";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ven"], "cantidad", [], "any", false, false, false, 24), "html", null, true);
                        yield "</td>
            ";
                    }
                    // line 26
                    yield "            <td>";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ven"], "pagoAmortizacion", [], "any", false, false, false, 26), 2, ".", ","), "html", null, true);
                    yield "</td>
            <td>";
                    // line 27
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ven"], "royaltie", [], "any", false, false, false, 27), 2, ".", ","), "html", null, true);
                    yield "</td>
        </tr>
    ";
                }
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 31
                yield "    <tr>
        <td colspan=\"7\">No se encontraron registros</td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ven'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function macro_tabla_solicitud_pagos($__arreglo__ = null, $__estado__ = null, $__tipo__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "arreglo" => $__arreglo__,
            "estado" => $__estado__,
            "tipo" => $__tipo__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tabla_solicitud_pagos"));

            // line 38
            yield "    <div class=\"table-responsive\" style=\"padding-left: 5px\">
        <table class=\"table table-bordered table-striped display\" id=\"\">
            <thead class=\"text-center\">
            <tr>
                ";
            // line 42
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 43
                yield "                    <th>Usuario</th>
                ";
            }
            // line 45
            yield "                <th>Fecha</th>
                <th>Tipo de Producto</th>
                <th>Royalties Pagados</th>
                <th>Factura</th>
                <th>M&eacute;todo de Pago</th>
                ";
            // line 50
            if (((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 50, $this->source); })()) == "rechazados")) {
                // line 51
                yield "                    <th>Concepto</th>
                ";
            }
            // line 53
            yield "                ";
            if (((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 53, $this->source); })()) == "solicitud")) {
                // line 54
                yield "                    <th>Acciones</th>
                ";
            }
            // line 56
            yield "            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["arreglo"]) || array_key_exists("arreglo", $context) ? $context["arreglo"] : (function () { throw new RuntimeError('Variable "arreglo" does not exist.', 59, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["solicitar"]) {
                // line 60
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "estado", [], "any", false, false, false, 60) == (isset($context["estado"]) || array_key_exists("estado", $context) ? $context["estado"] : (function () { throw new RuntimeError('Variable "estado" does not exist.', 60, $this->source); })()))) {
                    // line 61
                    yield "                    <tr data-id=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "id", [], "any", false, false, false, 61), "html", null, true);
                    yield "\">
                        ";
                    // line 62
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 63
                        yield "                            <td>";
                        yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::capitalizeStringFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "user", [], "any", false, false, false, 63), "nombre", [], "any", false, false, false, 63)) . " ") . Twig\Extension\CoreExtension::capitalizeStringFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "user", [], "any", false, false, false, 63), "apellidos", [], "any", false, false, false, 63))), "html", null, true);
                        yield "</td>
                        ";
                    }
                    // line 65
                    yield "                        <td>";
                    ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "fecha", [], "any", false, false, false, 65)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "fecha", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true)) : (yield ""));
                    yield "</td>
                        ";
                    // line 66
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "tipoPago", [], "any", false, false, false, 66) == 1)) {
                        // line 67
                        yield "                            <td>General</td>
                            <td class=\"text-bold\">";
                        // line 68
                        yield Twig\Extension\EscaperExtension::escape($this->env, (Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 68), 2, ".", ",") . " USD"), "html", null, true);
                        yield "</td>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 69
$context["solicitar"], "tipoPago", [], "any", false, false, false, 69) == 2)) {
                        // line 70
                        yield "                            <td>General</td>
                            <td class=\"text-bold\">";
                        // line 71
                        yield Twig\Extension\EscaperExtension::escape($this->env, (Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 71), 2, ".", ",") . " EUR"), "html", null, true);
                        yield "</td>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 72
$context["solicitar"], "tipoPago", [], "any", false, false, false, 72) == 3)) {
                        // line 73
                        yield "                            <td>libro</td>
                            <td class=\"text-bold\">";
                        // line 74
                        yield Twig\Extension\EscaperExtension::escape($this->env, (Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 74), 2, ".", ",") . " USD"), "html", null, true);
                        yield "</td>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 75
$context["solicitar"], "tipoPago", [], "any", false, false, false, 75) == 4)) {
                        // line 76
                        yield "                            <td>libro</td>
                            <td class=\"text-bold\">";
                        // line 77
                        yield Twig\Extension\EscaperExtension::escape($this->env, (Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 77), 2, ".", ",") . " EUR"), "html", null, true);
                        yield "</td>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 78
$context["solicitar"], "tipoPago", [], "any", false, false, false, 78) == 5)) {
                        // line 79
                        yield "                            <td>Servicio</td>
                            <td class=\"text-bold\">";
                        // line 80
                        yield Twig\Extension\EscaperExtension::escape($this->env, (Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 80), 2, ".", ",") . " USD"), "html", null, true);
                        yield "</td>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 81
$context["solicitar"], "tipoPago", [], "any", false, false, false, 81) == 6)) {
                        // line 82
                        yield "                            <td>Servicio</td>
                            <td class=\"text-bold\">";
                        // line 83
                        yield Twig\Extension\EscaperExtension::escape($this->env, (Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 83), 2, ".", ",") . " EUR"), "html", null, true);
                        yield "</td>
                        ";
                    }
                    // line 85
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "factura", [], "any", false, false, false, 85) != "")) {
                        // line 86
                        yield "                            <td><a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "factura", [], "any", false, false, false, 86))), "html", null, true);
                        yield "\"
                                   target=\"_blank\">Ver
                                    Factura</a>
                            </td>
                        ";
                    } else {
                        // line 91
                        yield "                            <td>Sin Factura</td>
                        ";
                    }
                    // line 93
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "metododepago", [], "any", false, false, false, 93) == "WesterUnion")) {
                        // line 94
                        yield "                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Wester Union</b></h2>
                                                <p class=\"text-muted text-sm\">
                                                    <b>Destinatario: </b> ";
                        // line 101
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 101)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 101), "nombre", [], "any", false, false, false, 101) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 101), "primerApellido", [], "any", false, false, false, 101)) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 101), "segundoApellido", [], "any", false, false, false, 101)), "html", null, true)) : (yield ""));
                        yield "
                                                </p>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                        ";
                        // line 106
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "westerUnion", [], "any", false, false, false, 106)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 106), "email", [], "any", false, false, false, 106), "html", null, true)) : (yield ""));
                        yield "
                                                    </li>
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-building\"></i></span>
                                                        Ciudad: ";
                        // line 110
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "westerUnion", [], "any", false, false, false, 110)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 110), "ciudad", [], "any", false, false, false, 110), "html", null, true)) : (yield ""));
                        yield "
                                                    </li>
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-phone\"></i></span>
                                                        Phone
                                                        #: ";
                        // line 115
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "westerUnion", [], "any", false, false, false, 115)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 115), "numeromovil", [], "any", false, false, false, 115), "html", null, true)) : (yield ""));
                        yield "
                                                    </li>
                                                    <li class=\"small\">
                                                        Código MTCN: ";
                        // line 118
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 118)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 118), "html", null, true)) : (yield ""));
                        yield "
                                                    </li>
                                                    ";
                        // line 120
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 120) != "")) {
                            // line 121
                            yield "                                                        <li class=\"small\">
                                                            <a href=\"";
                            // line 122
                            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 122))), "html", null, true);
                            yield "\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    ";
                        }
                        // line 126
                        yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 132
$context["solicitar"], "metododepago", [], "any", false, false, false, 132) == "Paypal")) {
                        // line 133
                        yield "                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Paypal</b></h2>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                        ";
                        // line 142
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "paypal", [], "any", false, false, false, 142)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "paypal", [], "any", false, false, false, 142), "email", [], "any", false, false, false, 142), "html", null, true)) : (yield ""));
                        yield "
                                                    </li>
                                                    <li class=\"small\">No. Transacción:
                                                        ";
                        // line 145
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 145)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 145), "html", null, true)) : (yield ""));
                        yield "
                                                    </li>
                                                    ";
                        // line 147
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 147) != "")) {
                            // line 148
                            yield "                                                        <li class=\"small\">
                                                            <a href=\"";
                            // line 149
                            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 149))), "html", null, true);
                            yield "\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    ";
                        }
                        // line 153
                        yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 159
$context["solicitar"], "metododepago", [], "any", false, false, false, 159) == "Bizum")) {
                        // line 160
                        yield "                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Bizum</b></h2>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-phone\"></i></span>
                                                        Phone #: ";
                        // line 169
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "bizum", [], "any", false, false, false, 169)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "bizum", [], "any", false, false, false, 169), "telefono", [], "any", false, false, false, 169), "html", null, true)) : (yield ""));
                        yield "
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 177
$context["solicitar"], "metododepago", [], "any", false, false, false, 177) == "Transferencia")) {
                        // line 178
                        yield "                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Transferencia</b></h2>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-bank\"></i></span> No.Cuenta
                                                        (IBAN):
                                                        ";
                        // line 188
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "transferenciaBancaria", [], "any", false, false, false, 188)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "transferenciaBancaria", [], "any", false, false, false, 188), "numerocuenta", [], "any", false, false, false, 188), "html", null, true)) : (yield ""));
                        yield "
                                                    </li>
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-user\"></i></span> Titular:
                                                        ";
                        // line 192
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "transferenciaBancaria", [], "any", false, false, false, 192)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "transferenciaBancaria", [], "any", false, false, false, 192), "titular", [], "any", false, false, false, 192), "html", null, true)) : (yield ""));
                        yield "
                                                    </li>
                                                    ";
                        // line 194
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 194) != "")) {
                            // line 195
                            yield "                                                        <li class=\"small\">
                                                            <a href=\"";
                            // line 196
                            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 196))), "html", null, true);
                            yield "\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    ";
                        }
                        // line 200
                        yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 206
$context["solicitar"], "metododepago", [], "any", false, false, false, 206) == "Voucher")) {
                        // line 207
                        yield "                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Voucher</b></h2>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"> Cupón de Descuento:
                                                        ";
                        // line 215
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 215)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 215), "html", null, true)) : (yield ""));
                        yield "
                                                    </li>
                                                    ";
                        // line 217
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 217) != "")) {
                            // line 218
                            yield "                                                        <li class=\"small\">
                                                            <a href=\"";
                            // line 219
                            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 219))), "html", null, true);
                            yield "\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    ";
                        }
                        // line 223
                        yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        ";
                    } else {
                        // line 230
                        yield "                            <td>";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "metododepago", [], "any", false, false, false, 230), "html", null, true);
                        yield "</td>
                        ";
                    }
                    // line 232
                    yield "                        ";
                    if (((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 232, $this->source); })()) == "rechazados")) {
                        // line 233
                        yield "                            <td>";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "motivoRechazo", [], "any", false, false, false, 233), "html", null, true);
                        yield "</td>
                        ";
                    }
                    // line 235
                    yield "                        ";
                    if (((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 235, $this->source); })()) == "solicitud")) {
                        // line 236
                        yield "                            <td style=\"margin: 0 auto;\">
                                ";
                        // line 237
                        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                            // line 238
                            yield "                                    <button class=\"btn btn-success aprobar\"
                                            data-toggle=\"tooltip\"
                                            title=\"Realizar pago\"><i
                                                class=\"fas fa-check\"></i>
                                    </button>
                                    <button class=\"btn btn-secondary rechazar\"
                                            data-toggle=\"tooltip\"
                                            title=\"Rechazar pago\"><i
                                                class=\"fas fa-ban\"></i>
                                    </button>
                                ";
                        } else {
                            // line 249
                            yield "                                    <form method=\"post\"
                                          action=\"";
                            // line 250
                            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "id", [], "any", false, false, false, 250)]), "html", null, true);
                            yield "\"
                                          onsubmit=\"return confirm('Está segur@ que desea eliminar este pago?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"";
                            // line 254
                            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["solicitar"], "id", [], "any", false, false, false, 254))), "html", null, true);
                            yield "\">
                                        <button class=\"btn btn-danger\"
                                                data-toggle=\"tooltip\"
                                                title=\"Eliminar\"><i
                                                    class=\"fas fa-trash\"></i>
                                        </button>
                                    </form>
                                ";
                        }
                        // line 262
                        yield "                            </td>
                        ";
                    }
                    // line 264
                    yield "                    </tr>
                ";
                }
                // line 266
                yield "            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 267
                yield "                <tr>
                    ";
                // line 268
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 269
                    yield "                        <td colspan=\"6\">No se encontraron registros</td>
                    ";
                } else {
                    // line 271
                    yield "                        <td colspan=\"6\">No se encontraron registros</td>
                    ";
                }
                // line 273
                yield "
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            yield "            </tbody>
        </table>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 281
    public function macro_tabla_retiro_pagos($__arreglo__ = null, $__moneda__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "arreglo" => $__arreglo__,
            "moneda" => $__moneda__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tabla_retiro_pagos"));

            // line 282
            yield "    <div class=\"table-responsive\" style=\"padding-left: 5px\">
        <table class=\"table table-bordered table-striped display\" id=\"\">
            <thead class=\"text-center\">
            <tr>
                <th>Usuarios</th>
                <th>Correo</th>
                <th>Saldo Inicial</th>
                <th>Royalties Acumulados</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
            // line 294
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["arreglo"]) || array_key_exists("arreglo", $context) ? $context["arreglo"] : (function () { throw new RuntimeError('Variable "arreglo" does not exist.', 294, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
                // line 295
                yield "                ";
                if ((((isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 295, $this->source); })()) == "saldoGeneralUSD") && (CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 295) != 0))) {
                    // line 296
                    yield "                    <tr data-id=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 296), "html", null, true);
                    yield "\">
                        <td>";
                    // line 297
                    yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 297) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 297)), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 298
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 298), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 299
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoInicialGeneralUSD", [], "any", false, false, false, 299), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 300
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 300), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                ";
                } elseif (((                // line 313
(isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 313, $this->source); })()) == "saldoGeneralEUR") && (CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 313) != 0))) {
                    // line 314
                    yield "                    <tr data-id=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 314), "html", null, true);
                    yield "\">
                        <td>";
                    // line 315
                    yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 315) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 315)), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 316
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 316), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 317
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoInicialGeneralEUR", [], "any", false, false, false, 317), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 318
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 318), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                ";
                } elseif (((                // line 331
(isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 331, $this->source); })()) == "saldoLibroUSD") && (CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 331) != 0))) {
                    // line 332
                    yield "                    <tr data-id=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 332), "html", null, true);
                    yield "\">
                        <td>";
                    // line 333
                    yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 333) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 333)), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 334
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 334), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 335
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoInicialLibroUSD", [], "any", false, false, false, 335), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 336
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 336), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                ";
                } elseif (((                // line 349
(isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 349, $this->source); })()) == "saldoLibroEUR") && (CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 349) != 0))) {
                    // line 350
                    yield "                    <tr data-id=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 350), "html", null, true);
                    yield "\">
                        <td>";
                    // line 351
                    yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 351) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 351)), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 352
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 352), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 353
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoInicialLibroEUR", [], "any", false, false, false, 353), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 354
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 354), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                ";
                } elseif (((                // line 367
(isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 367, $this->source); })()) == "saldoServicioUSD") && (CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 367) != 0))) {
                    // line 368
                    yield "                    <tr data-id=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 368), "html", null, true);
                    yield "\">
                        <td>";
                    // line 369
                    yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 369) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 369)), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 370
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 370), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 371
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoInicialServicioUSD", [], "any", false, false, false, 371), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 372
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 372), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                ";
                } elseif (((                // line 385
(isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 385, $this->source); })()) == "saldoServicioEUR") && (CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 385) != 0))) {
                    // line 386
                    yield "                    <tr data-id=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 386), "html", null, true);
                    yield "\">
                        <td>";
                    // line 387
                    yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 387) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 387)), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 388
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 388), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 389
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoInicialServicioEUR", [], "any", false, false, false, 389), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 390
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 390), 2, ".", ","), "html", null, true);
                    yield "</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                ";
                }
                // line 404
                yield "            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 405
                yield "                <tr>
                    <td colspan=\"4\">No se encontraron registros</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            yield "            </tbody>
        </table>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "macros/tablas.html.twig";
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
        return array (  898 => 409,  889 => 405,  884 => 404,  867 => 390,  863 => 389,  859 => 388,  855 => 387,  850 => 386,  848 => 385,  832 => 372,  828 => 371,  824 => 370,  820 => 369,  815 => 368,  813 => 367,  797 => 354,  793 => 353,  789 => 352,  785 => 351,  780 => 350,  778 => 349,  762 => 336,  758 => 335,  754 => 334,  750 => 333,  745 => 332,  743 => 331,  727 => 318,  723 => 317,  719 => 316,  715 => 315,  710 => 314,  708 => 313,  692 => 300,  688 => 299,  684 => 298,  680 => 297,  675 => 296,  672 => 295,  667 => 294,  653 => 282,  637 => 281,  626 => 276,  618 => 273,  614 => 271,  610 => 269,  608 => 268,  605 => 267,  600 => 266,  596 => 264,  592 => 262,  581 => 254,  574 => 250,  571 => 249,  558 => 238,  556 => 237,  553 => 236,  550 => 235,  544 => 233,  541 => 232,  535 => 230,  526 => 223,  519 => 219,  516 => 218,  514 => 217,  509 => 215,  499 => 207,  497 => 206,  489 => 200,  482 => 196,  479 => 195,  477 => 194,  472 => 192,  465 => 188,  453 => 178,  451 => 177,  440 => 169,  429 => 160,  427 => 159,  419 => 153,  412 => 149,  409 => 148,  407 => 147,  402 => 145,  396 => 142,  385 => 133,  383 => 132,  375 => 126,  368 => 122,  365 => 121,  363 => 120,  358 => 118,  352 => 115,  344 => 110,  337 => 106,  329 => 101,  320 => 94,  317 => 93,  313 => 91,  304 => 86,  301 => 85,  296 => 83,  293 => 82,  291 => 81,  287 => 80,  284 => 79,  282 => 78,  278 => 77,  275 => 76,  273 => 75,  269 => 74,  266 => 73,  264 => 72,  260 => 71,  257 => 70,  255 => 69,  251 => 68,  248 => 67,  246 => 66,  241 => 65,  235 => 63,  233 => 62,  228 => 61,  225 => 60,  220 => 59,  215 => 56,  211 => 54,  208 => 53,  204 => 51,  202 => 50,  195 => 45,  191 => 43,  189 => 42,  183 => 38,  166 => 37,  151 => 31,  142 => 27,  137 => 26,  131 => 24,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  110 => 18,  107 => 17,  102 => 16,  95 => 11,  91 => 9,  89 => 8,  83 => 5,  78 => 2,  60 => 1,  47 => 413,  44 => 280,  41 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro tabla_ventas(arreglo,tipo,moneda,tipoEncabezado) %}
<thead class=\"text-center\">
<tr>
    <th>Pack</th>
    <th>{{ tipoEncabezado }}</th>
    <th>Fecha</th>
    <th>Código</th>
    {% if tipoEncabezado == 'Producto' %}
        <th>Cantidad</th>
    {% endif %}
    <th>Ganancia x Amortización</th>
    <th>Ganancia x Beneficio</th>
</tr>
</thead>
<tbody class=\"text-center\">
{% for ven in arreglo %}
    {% if ven.producto.tipoProducto == tipo and ven.producto.tipodemoneda == moneda and ven.royaltie != 0 %}
        <tr class=\"text-center\">
            <td>{{ ven.pack ? 'SI' : '-' }}</td>
            <td>{{ ven.producto.nombre }}</td>
            <td>{{ ven.venta.fecha|date('Y-m-d') }}</td>
            <td>{{ ven.venta.codigo }}</td>
            {% if tipoEncabezado == 'Producto' %}
                <td>{{ ven.cantidad }}</td>
            {% endif %}
            <td>{{ ven.pagoAmortizacion|number_format(2, '.', ',') }}</td>
            <td>{{ ven.royaltie|number_format(2, '.', ',') }}</td>
        </tr>
    {% endif %}
{% else %}
    <tr>
        <td colspan=\"7\">No se encontraron registros</td>
    </tr>
{% endfor %}
{% endmacro %}

{% macro tabla_solicitud_pagos(arreglo,estado,tipo) %}
    <div class=\"table-responsive\" style=\"padding-left: 5px\">
        <table class=\"table table-bordered table-striped display\" id=\"\">
            <thead class=\"text-center\">
            <tr>
                {% if is_granted('ROLE_ADMIN') %}
                    <th>Usuario</th>
                {% endif %}
                <th>Fecha</th>
                <th>Tipo de Producto</th>
                <th>Royalties Pagados</th>
                <th>Factura</th>
                <th>M&eacute;todo de Pago</th>
                {% if tipo == 'rechazados' %}
                    <th>Concepto</th>
                {% endif %}
                {% if tipo == 'solicitud' %}
                    <th>Acciones</th>
                {% endif %}
            </tr>
            </thead>
            <tbody class=\"text-center\">
            {% for solicitar in arreglo %}
                {% if solicitar.estado == estado %}
                    <tr data-id=\"{{ solicitar.id }}\">
                        {% if is_granted('ROLE_ADMIN') %}
                            <td>{{ solicitar.user.nombre|capitalize ~ ' ' ~ solicitar.user.apellidos|capitalize }}</td>
                        {% endif %}
                        <td>{{ solicitar.fecha ? solicitar.fecha|date('Y-m-d') : '' }}</td>
                        {% if  solicitar.tipoPago == 1 %}
                            <td>General</td>
                            <td class=\"text-bold\">{{ solicitar.royaltiespagar|number_format(2, '.', ',') ~ ' USD' }}</td>
                        {% elseif solicitar.tipoPago == 2 %}
                            <td>General</td>
                            <td class=\"text-bold\">{{ solicitar.royaltiespagar|number_format(2, '.', ',') ~ ' EUR' }}</td>
                        {% elseif solicitar.tipoPago == 3 %}
                            <td>libro</td>
                            <td class=\"text-bold\">{{ solicitar.royaltiespagar|number_format(2, '.', ',') ~ ' USD' }}</td>
                        {% elseif solicitar.tipoPago == 4 %}
                            <td>libro</td>
                            <td class=\"text-bold\">{{ solicitar.royaltiespagar|number_format(2, '.', ',') ~ ' EUR' }}</td>
                        {% elseif solicitar.tipoPago == 5 %}
                            <td>Servicio</td>
                            <td class=\"text-bold\">{{ solicitar.royaltiespagar|number_format(2, '.', ',') ~ ' USD' }}</td>
                        {% elseif solicitar.tipoPago == 6 %}
                            <td>Servicio</td>
                            <td class=\"text-bold\">{{ solicitar.royaltiespagar|number_format(2, '.', ',') ~ ' EUR' }}</td>
                        {% endif %}
                        {% if solicitar.factura != '' %}
                            <td><a href=\"{{ asset('uploads/' ~ solicitar.factura) }}\"
                                   target=\"_blank\">Ver
                                    Factura</a>
                            </td>
                        {% else %}
                            <td>Sin Factura</td>
                        {% endif %}
                        {% if solicitar.metododepago == 'WesterUnion' %}
                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Wester Union</b></h2>
                                                <p class=\"text-muted text-sm\">
                                                    <b>Destinatario: </b> {{ solicitar.westerunion ? solicitar.westerunion.nombre ~ ' ' ~ solicitar.westerunion.primerApellido ~ ' ' ~ solicitar.westerunion.segundoApellido : '' }}
                                                </p>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                        {{ solicitar.westerUnion ? solicitar.westerunion.email: '' }}
                                                    </li>
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-building\"></i></span>
                                                        Ciudad: {{ solicitar.westerUnion ? solicitar.westerunion.ciudad: '' }}
                                                    </li>
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-phone\"></i></span>
                                                        Phone
                                                        #: {{ solicitar.westerUnion ? solicitar.westerunion.numeromovil: '' }}
                                                    </li>
                                                    <li class=\"small\">
                                                        Código MTCN: {{ solicitar.info ? solicitar.info: '' }}
                                                    </li>
                                                    {% if solicitar.documentoAprobacion != '' %}
                                                        <li class=\"small\">
                                                            <a href=\"{{ asset('uploads/' ~ solicitar.documentoAprobacion) }}\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    {% endif %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        {% elseif  solicitar.metododepago == 'Paypal' %}
                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Paypal</b></h2>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                        {{ solicitar.paypal ? solicitar.paypal.email: '' }}
                                                    </li>
                                                    <li class=\"small\">No. Transacción:
                                                        {{ solicitar.info ? solicitar.info: '' }}
                                                    </li>
                                                    {% if solicitar.documentoAprobacion != '' %}
                                                        <li class=\"small\">
                                                            <a href=\"{{ asset('uploads/' ~ solicitar.documentoAprobacion) }}\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    {% endif %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        {% elseif  solicitar.metododepago == 'Bizum' %}
                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Bizum</b></h2>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-phone\"></i></span>
                                                        Phone #: {{ solicitar.bizum ? solicitar.bizum.telefono: '' }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        {% elseif  solicitar.metododepago == 'Transferencia' %}
                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Transferencia</b></h2>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-bank\"></i></span> No.Cuenta
                                                        (IBAN):
                                                        {{ solicitar.transferenciaBancaria ? solicitar.transferenciaBancaria.numerocuenta: '' }}
                                                    </li>
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-user\"></i></span> Titular:
                                                        {{ solicitar.transferenciaBancaria ? solicitar.transferenciaBancaria.titular: '' }}
                                                    </li>
                                                    {% if solicitar.documentoAprobacion != '' %}
                                                        <li class=\"small\">
                                                            <a href=\"{{ asset('uploads/' ~ solicitar.documentoAprobacion) }}\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    {% endif %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        {% elseif  solicitar.metododepago == 'Voucher' %}
                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Voucher</b></h2>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"> Cupón de Descuento:
                                                        {{ solicitar.info ? solicitar.info: '' }}
                                                    </li>
                                                    {% if solicitar.documentoAprobacion != '' %}
                                                        <li class=\"small\">
                                                            <a href=\"{{ asset('uploads/' ~ solicitar.documentoAprobacion) }}\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    {% endif %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        {% else %}
                            <td>{{ solicitar.metododepago }}</td>
                        {% endif %}
                        {% if tipo == 'rechazados' %}
                            <td>{{ solicitar.motivoRechazo }}</td>
                        {% endif %}
                        {% if tipo == 'solicitud' %}
                            <td style=\"margin: 0 auto;\">
                                {% if is_granted('ROLE_ADMIN') %}
                                    <button class=\"btn btn-success aprobar\"
                                            data-toggle=\"tooltip\"
                                            title=\"Realizar pago\"><i
                                                class=\"fas fa-check\"></i>
                                    </button>
                                    <button class=\"btn btn-secondary rechazar\"
                                            data-toggle=\"tooltip\"
                                            title=\"Rechazar pago\"><i
                                                class=\"fas fa-ban\"></i>
                                    </button>
                                {% else %}
                                    <form method=\"post\"
                                          action=\"{{ path('app_solicitar_pago_royal_acumulado_delete', {'id': solicitar.id}) }}\"
                                          onsubmit=\"return confirm('Está segur@ que desea eliminar este pago?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"{{ csrf_token('delete' ~ solicitar.id) }}\">
                                        <button class=\"btn btn-danger\"
                                                data-toggle=\"tooltip\"
                                                title=\"Eliminar\"><i
                                                    class=\"fas fa-trash\"></i>
                                        </button>
                                    </form>
                                {% endif %}
                            </td>
                        {% endif %}
                    </tr>
                {% endif %}
            {% else %}
                <tr>
                    {% if is_granted('ROLE_ADMIN') %}
                        <td colspan=\"6\">No se encontraron registros</td>
                    {% else %}
                        <td colspan=\"6\">No se encontraron registros</td>
                    {% endif %}

                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endmacro %}

{% macro tabla_retiro_pagos(arreglo,moneda) %}
    <div class=\"table-responsive\" style=\"padding-left: 5px\">
        <table class=\"table table-bordered table-striped display\" id=\"\">
            <thead class=\"text-center\">
            <tr>
                <th>Usuarios</th>
                <th>Correo</th>
                <th>Saldo Inicial</th>
                <th>Royalties Acumulados</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class=\"text-center\">
            {% for venta in arreglo %}
                {% if moneda == 'saldoGeneralUSD' and venta.saldoGeneralUSD != 0 %}
                    <tr data-id=\"{{ venta.id }}\">
                        <td>{{ venta.nombre  ~ ' ' ~ venta.apellidos }}</td>
                        <td>{{ venta.email }}</td>
                        <td>{{ venta.saldoInicialGeneralUSD|number_format(2, '.', ',') }}</td>
                        <td>{{ venta.saldoGeneralUSD|number_format(2, '.', ',') }}</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                {% elseif moneda == 'saldoGeneralEUR' and venta.saldoGeneralEUR != 0 %}
                    <tr data-id=\"{{ venta.id }}\">
                        <td>{{ venta.nombre  ~ ' ' ~ venta.apellidos }}</td>
                        <td>{{ venta.email }}</td>
                        <td>{{ venta.saldoInicialGeneralEUR|number_format(2, '.', ',') }}</td>
                        <td>{{ venta.saldoGeneralEUR|number_format(2, '.', ',') }}</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                {% elseif moneda == 'saldoLibroUSD' and venta.saldoLibroUSD != 0 %}
                    <tr data-id=\"{{ venta.id }}\">
                        <td>{{ venta.nombre  ~ ' ' ~ venta.apellidos }}</td>
                        <td>{{ venta.email }}</td>
                        <td>{{ venta.saldoInicialLibroUSD|number_format(2, '.', ',') }}</td>
                        <td>{{ venta.saldoLibroUSD|number_format(2, '.', ',') }}</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                {% elseif moneda == 'saldoLibroEUR' and venta.saldoLibroEUR != 0 %}
                    <tr data-id=\"{{ venta.id }}\">
                        <td>{{ venta.nombre  ~ ' ' ~ venta.apellidos }}</td>
                        <td>{{ venta.email }}</td>
                        <td>{{ venta.saldoInicialLibroEUR|number_format(2, '.', ',') }}</td>
                        <td>{{ venta.saldoLibroEUR|number_format(2, '.', ',') }}</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                {% elseif moneda == 'saldoServicioUSD' and venta.saldoServicioUSD != 0 %}
                    <tr data-id=\"{{ venta.id }}\">
                        <td>{{ venta.nombre  ~ ' ' ~ venta.apellidos }}</td>
                        <td>{{ venta.email }}</td>
                        <td>{{ venta.saldoInicialServicioUSD|number_format(2, '.', ',') }}</td>
                        <td>{{ venta.saldoServicioUSD|number_format(2, '.', ',') }}</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                {% elseif moneda == 'saldoServicioEUR' and venta.saldoServicioEUR != 0 %}
                    <tr data-id=\"{{ venta.id }}\">
                        <td>{{ venta.nombre  ~ ' ' ~ venta.apellidos }}</td>
                        <td>{{ venta.email }}</td>
                        <td>{{ venta.saldoInicialServicioEUR|number_format(2, '.', ',') }}</td>
                        <td>{{ venta.saldoServicioEUR|number_format(2, '.', ',') }}</td>
                        <td style=\"margin: 0 auto;\">
                            <button class=\"btn btn-secondary ingresar\"
                                    data-toggle=\"tooltip\"
                                    title=\"Ingresar saldo\"><i
                                        class=\"fas fa-dollar-sign\"></i>
                            </button>
                            <button class=\"btn btn-danger retirar\" data-toggle=\"tooltip\"
                                    title=\"Retirar saldo\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </button>
                        </td>
                    </tr>
                {% endif %}
            {% else %}
                <tr>
                    <td colspan=\"4\">No se encontraron registros</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endmacro %}





", "macros/tablas.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\macros\\tablas.html.twig");
    }
}
