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

/* macros/tablas.html.twig */
class __TwigTemplate_fac8e704f3b053b00ca02e2e6f8fd377 extends Template
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
        echo "
";
        // line 280
        echo "
";
        // line 413
        echo "




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tabla_ventas"));

            // line 2
            echo "<thead class=\"text-center\">
<tr>
    <th>Pack</th>
    <th>";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["tipoEncabezado"]) || array_key_exists("tipoEncabezado", $context) ? $context["tipoEncabezado"] : (function () { throw new RuntimeError('Variable "tipoEncabezado" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "</th>
    <th>Fecha</th>
    <th>Código</th>
    ";
            // line 8
            if (((isset($context["tipoEncabezado"]) || array_key_exists("tipoEncabezado", $context) ? $context["tipoEncabezado"] : (function () { throw new RuntimeError('Variable "tipoEncabezado" does not exist.', 8, $this->source); })()) == "Producto")) {
                // line 9
                echo "        <th>Cantidad</th>
    ";
            }
            // line 11
            echo "    <th>Ganancia x Amortización</th>
    <th>Ganancia x Beneficio</th>
</tr>
</thead>
<tbody class=\"text-center\">
";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arreglo"]) || array_key_exists("arreglo", $context) ? $context["arreglo"] : (function () { throw new RuntimeError('Variable "arreglo" does not exist.', 16, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["ven"]) {
                // line 17
                echo "    ";
                if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ven"], "producto", [], "any", false, false, false, 17), "tipoProducto", [], "any", false, false, false, 17) == (isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 17, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ven"], "producto", [], "any", false, false, false, 17), "tipodemoneda", [], "any", false, false, false, 17) == (isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 17, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, $context["ven"], "royaltie", [], "any", false, false, false, 17) != 0))) {
                    // line 18
                    echo "        <tr class=\"text-center\">
            <td>";
                    // line 19
                    echo ((twig_get_attribute($this->env, $this->source, $context["ven"], "pack", [], "any", false, false, false, 19)) ? ("SI") : ("-"));
                    echo "</td>
            <td>";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ven"], "producto", [], "any", false, false, false, 20), "nombre", [], "any", false, false, false, 20), "html", null, true);
                    echo "</td>
            <td>";
                    // line 21
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ven"], "venta", [], "any", false, false, false, 21), "fecha", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ven"], "venta", [], "any", false, false, false, 22), "codigo", [], "any", false, false, false, 22), "html", null, true);
                    echo "</td>
            ";
                    // line 23
                    if (((isset($context["tipoEncabezado"]) || array_key_exists("tipoEncabezado", $context) ? $context["tipoEncabezado"] : (function () { throw new RuntimeError('Variable "tipoEncabezado" does not exist.', 23, $this->source); })()) == "Producto")) {
                        // line 24
                        echo "                <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ven"], "cantidad", [], "any", false, false, false, 24), "html", null, true);
                        echo "</td>
            ";
                    }
                    // line 26
                    echo "            <td>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ven"], "pagoAmortizacion", [], "any", false, false, false, 26), 2, ".", ","), "html", null, true);
                    echo "</td>
            <td>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ven"], "royaltie", [], "any", false, false, false, 27), 2, ".", ","), "html", null, true);
                    echo "</td>
        </tr>
    ";
                }
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 31
                echo "    <tr>
        <td colspan=\"7\">No se encontraron registros</td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ven'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
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

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tabla_solicitud_pagos"));

            // line 38
            echo "    <div class=\"table-responsive\" style=\"padding-left: 5px\">
        <table class=\"table table-bordered table-striped display\" id=\"\">
            <thead class=\"text-center\">
            <tr>
                ";
            // line 42
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 43
                echo "                    <th>Usuario</th>
                ";
            }
            // line 45
            echo "                <th>Fecha</th>
                <th>Tipo de Producto</th>
                <th>Royalties Pagados</th>
                <th>Factura</th>
                <th>M&eacute;todo de Pago</th>
                ";
            // line 50
            if (((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 50, $this->source); })()) == "rechazados")) {
                // line 51
                echo "                    <th>Concepto</th>
                ";
            }
            // line 53
            echo "                ";
            if (((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 53, $this->source); })()) == "solicitud")) {
                // line 54
                echo "                    <th>Acciones</th>
                ";
            }
            // line 56
            echo "            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arreglo"]) || array_key_exists("arreglo", $context) ? $context["arreglo"] : (function () { throw new RuntimeError('Variable "arreglo" does not exist.', 59, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["solicitar"]) {
                // line 60
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "estado", [], "any", false, false, false, 60) == (isset($context["estado"]) || array_key_exists("estado", $context) ? $context["estado"] : (function () { throw new RuntimeError('Variable "estado" does not exist.', 60, $this->source); })()))) {
                    // line 61
                    echo "                    <tr data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "id", [], "any", false, false, false, 61), "html", null, true);
                    echo "\">
                        ";
                    // line 62
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 63
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "user", [], "any", false, false, false, 63), "nombre", [], "any", false, false, false, 63)) . " ") . twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "user", [], "any", false, false, false, 63), "apellidos", [], "any", false, false, false, 63))), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 65
                    echo "                        <td>";
                    ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "fecha", [], "any", false, false, false, 65)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "fecha", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true))) : (print ("")));
                    echo "</td>
                        ";
                    // line 66
                    if ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "tipoPago", [], "any", false, false, false, 66) == 1)) {
                        // line 67
                        echo "                            <td>General</td>
                            <td class=\"text-bold\">";
                        // line 68
                        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 68), 2, ".", ",") . " USD"), "html", null, true);
                        echo "</td>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 69
$context["solicitar"], "tipoPago", [], "any", false, false, false, 69) == 2)) {
                        // line 70
                        echo "                            <td>General</td>
                            <td class=\"text-bold\">";
                        // line 71
                        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 71), 2, ".", ",") . " EUR"), "html", null, true);
                        echo "</td>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 72
$context["solicitar"], "tipoPago", [], "any", false, false, false, 72) == 3)) {
                        // line 73
                        echo "                            <td>libro</td>
                            <td class=\"text-bold\">";
                        // line 74
                        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 74), 2, ".", ",") . " USD"), "html", null, true);
                        echo "</td>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 75
$context["solicitar"], "tipoPago", [], "any", false, false, false, 75) == 4)) {
                        // line 76
                        echo "                            <td>libro</td>
                            <td class=\"text-bold\">";
                        // line 77
                        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 77), 2, ".", ",") . " EUR"), "html", null, true);
                        echo "</td>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 78
$context["solicitar"], "tipoPago", [], "any", false, false, false, 78) == 5)) {
                        // line 79
                        echo "                            <td>Servicio</td>
                            <td class=\"text-bold\">";
                        // line 80
                        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 80), 2, ".", ",") . " USD"), "html", null, true);
                        echo "</td>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 81
$context["solicitar"], "tipoPago", [], "any", false, false, false, 81) == 6)) {
                        // line 82
                        echo "                            <td>Servicio</td>
                            <td class=\"text-bold\">";
                        // line 83
                        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "royaltiespagar", [], "any", false, false, false, 83), 2, ".", ",") . " EUR"), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 85
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "factura", [], "any", false, false, false, 85) != "")) {
                        // line 86
                        echo "                            <td><a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["solicitar"], "factura", [], "any", false, false, false, 86))), "html", null, true);
                        echo "\"
                                   target=\"_blank\">Ver
                                    Factura</a>
                            </td>
                        ";
                    } else {
                        // line 91
                        echo "                            <td>Sin Factura</td>
                        ";
                    }
                    // line 93
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "metododepago", [], "any", false, false, false, 93) == "WesterUnion")) {
                        // line 94
                        echo "                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Wester Union</b></h2>
                                                <p class=\"text-muted text-sm\">
                                                    <b>Destinatario: </b> ";
                        // line 101
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 101)) ? (print (twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 101), "nombre", [], "any", false, false, false, 101) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 101), "primerApellido", [], "any", false, false, false, 101)) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 101), "segundoApellido", [], "any", false, false, false, 101)), "html", null, true))) : (print ("")));
                        echo "
                                                </p>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-mail-bulk\"></i></span> Correo:
                                                        ";
                        // line 106
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "westerUnion", [], "any", false, false, false, 106)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 106), "email", [], "any", false, false, false, 106), "html", null, true))) : (print ("")));
                        echo "
                                                    </li>
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-building\"></i></span>
                                                        Ciudad: ";
                        // line 110
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "westerUnion", [], "any", false, false, false, 110)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 110), "ciudad", [], "any", false, false, false, 110), "html", null, true))) : (print ("")));
                        echo "
                                                    </li>
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-phone\"></i></span>
                                                        Phone
                                                        #: ";
                        // line 115
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "westerUnion", [], "any", false, false, false, 115)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "westerunion", [], "any", false, false, false, 115), "numeromovil", [], "any", false, false, false, 115), "html", null, true))) : (print ("")));
                        echo "
                                                    </li>
                                                    <li class=\"small\">
                                                        Código MTCN: ";
                        // line 118
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 118)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 118), "html", null, true))) : (print ("")));
                        echo "
                                                    </li>
                                                    ";
                        // line 120
                        if ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 120) != "")) {
                            // line 121
                            echo "                                                        <li class=\"small\">
                                                            <a href=\"";
                            // line 122
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 122))), "html", null, true);
                            echo "\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    ";
                        }
                        // line 126
                        echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 132
$context["solicitar"], "metododepago", [], "any", false, false, false, 132) == "Paypal")) {
                        // line 133
                        echo "                            <td>
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
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "paypal", [], "any", false, false, false, 142)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "paypal", [], "any", false, false, false, 142), "email", [], "any", false, false, false, 142), "html", null, true))) : (print ("")));
                        echo "
                                                    </li>
                                                    <li class=\"small\">No. Transacción:
                                                        ";
                        // line 145
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 145)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 145), "html", null, true))) : (print ("")));
                        echo "
                                                    </li>
                                                    ";
                        // line 147
                        if ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 147) != "")) {
                            // line 148
                            echo "                                                        <li class=\"small\">
                                                            <a href=\"";
                            // line 149
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 149))), "html", null, true);
                            echo "\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    ";
                        }
                        // line 153
                        echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 159
$context["solicitar"], "metododepago", [], "any", false, false, false, 159) == "Bizum")) {
                        // line 160
                        echo "                            <td>
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
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "bizum", [], "any", false, false, false, 169)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "bizum", [], "any", false, false, false, 169), "telefono", [], "any", false, false, false, 169), "html", null, true))) : (print ("")));
                        echo "
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 177
$context["solicitar"], "metododepago", [], "any", false, false, false, 177) == "Transferencia")) {
                        // line 178
                        echo "                            <td>
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
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "transferenciaBancaria", [], "any", false, false, false, 188)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "transferenciaBancaria", [], "any", false, false, false, 188), "numerocuenta", [], "any", false, false, false, 188), "html", null, true))) : (print ("")));
                        echo "
                                                    </li>
                                                    <li class=\"small\"><span class=\"fa-li\"><i
                                                                    class=\"fas fa-lg fa-user\"></i></span> Titular:
                                                        ";
                        // line 192
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "transferenciaBancaria", [], "any", false, false, false, 192)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["solicitar"], "transferenciaBancaria", [], "any", false, false, false, 192), "titular", [], "any", false, false, false, 192), "html", null, true))) : (print ("")));
                        echo "
                                                    </li>
                                                    ";
                        // line 194
                        if ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 194) != "")) {
                            // line 195
                            echo "                                                        <li class=\"small\">
                                                            <a href=\"";
                            // line 196
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 196))), "html", null, true);
                            echo "\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    ";
                        }
                        // line 200
                        echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 206
$context["solicitar"], "metododepago", [], "any", false, false, false, 206) == "Voucher")) {
                        // line 207
                        echo "                            <td>
                                <div class=\"card bg-light\">
                                    <div class=\"card-body pt-0\">
                                        <div class=\"row\" style=\"padding-top: 10px\">
                                            <div class=\"col-12\">
                                                <h2 class=\"lead\"><b>Voucher</b></h2>
                                                <ul class=\"ml-4 mb-0 fa-ul text-muted\">
                                                    <li class=\"small\"> Cupón de Descuento:
                                                        ";
                        // line 215
                        ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 215)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "info", [], "any", false, false, false, 215), "html", null, true))) : (print ("")));
                        echo "
                                                    </li>
                                                    ";
                        // line 217
                        if ((twig_get_attribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 217) != "")) {
                            // line 218
                            echo "                                                        <li class=\"small\">
                                                            <a href=\"";
                            // line 219
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["solicitar"], "documentoAprobacion", [], "any", false, false, false, 219))), "html", null, true);
                            echo "\"
                                                               target=\"_blank\">Ver Adjunto</a>
                                                        </li>
                                                    ";
                        }
                        // line 223
                        echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        ";
                    } else {
                        // line 230
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "metododepago", [], "any", false, false, false, 230), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 232
                    echo "                        ";
                    if (((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 232, $this->source); })()) == "rechazados")) {
                        // line 233
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitar"], "motivoRechazo", [], "any", false, false, false, 233), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 235
                    echo "                        ";
                    if (((isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new RuntimeError('Variable "tipo" does not exist.', 235, $this->source); })()) == "solicitud")) {
                        // line 236
                        echo "                            <td style=\"margin: 0 auto;\">
                                ";
                        // line 237
                        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                            // line 238
                            echo "                                    <button class=\"btn btn-success aprobar\"
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
                            echo "                                    <form method=\"post\"
                                          action=\"";
                            // line 250
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitar"], "id", [], "any", false, false, false, 250)]), "html", null, true);
                            echo "\"
                                          onsubmit=\"return confirm('Está segur@ que desea eliminar este pago?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"";
                            // line 254
                            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["solicitar"], "id", [], "any", false, false, false, 254))), "html", null, true);
                            echo "\">
                                        <button class=\"btn btn-danger\"
                                                data-toggle=\"tooltip\"
                                                title=\"Eliminar\"><i
                                                    class=\"fas fa-trash\"></i>
                                        </button>
                                    </form>
                                ";
                        }
                        // line 262
                        echo "                            </td>
                        ";
                    }
                    // line 264
                    echo "                    </tr>
                ";
                }
                // line 266
                echo "            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 267
                echo "                <tr>
                    ";
                // line 268
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 269
                    echo "                        <td colspan=\"6\">No se encontraron registros</td>
                    ";
                } else {
                    // line 271
                    echo "                        <td colspan=\"6\">No se encontraron registros</td>
                    ";
                }
                // line 273
                echo "
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "            </tbody>
        </table>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
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

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tabla_retiro_pagos"));

            // line 282
            echo "    <div class=\"table-responsive\" style=\"padding-left: 5px\">
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
            $context['_seq'] = twig_ensure_traversable((isset($context["arreglo"]) || array_key_exists("arreglo", $context) ? $context["arreglo"] : (function () { throw new RuntimeError('Variable "arreglo" does not exist.', 294, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
                // line 295
                echo "                ";
                if ((((isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 295, $this->source); })()) == "saldoGeneralUSD") && (twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 295) != 0))) {
                    // line 296
                    echo "                    <tr data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 296), "html", null, true);
                    echo "\">
                        <td>";
                    // line 297
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 297) . " ") . twig_get_attribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 297)), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 298
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 298), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 299
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoInicialGeneralUSD", [], "any", false, false, false, 299), 2, ".", ","), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 300
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralUSD", [], "any", false, false, false, 300), 2, ".", ","), "html", null, true);
                    echo "</td>
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
(isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 313, $this->source); })()) == "saldoGeneralEUR") && (twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 313) != 0))) {
                    // line 314
                    echo "                    <tr data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 314), "html", null, true);
                    echo "\">
                        <td>";
                    // line 315
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 315) . " ") . twig_get_attribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 315)), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 316
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 316), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 317
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoInicialGeneralEUR", [], "any", false, false, false, 317), 2, ".", ","), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 318
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoGeneralEUR", [], "any", false, false, false, 318), 2, ".", ","), "html", null, true);
                    echo "</td>
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
(isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 331, $this->source); })()) == "saldoLibroUSD") && (twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 331) != 0))) {
                    // line 332
                    echo "                    <tr data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 332), "html", null, true);
                    echo "\">
                        <td>";
                    // line 333
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 333) . " ") . twig_get_attribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 333)), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 334
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 334), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 335
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoInicialLibroUSD", [], "any", false, false, false, 335), 2, ".", ","), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 336
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroUSD", [], "any", false, false, false, 336), 2, ".", ","), "html", null, true);
                    echo "</td>
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
(isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 349, $this->source); })()) == "saldoLibroEUR") && (twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 349) != 0))) {
                    // line 350
                    echo "                    <tr data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 350), "html", null, true);
                    echo "\">
                        <td>";
                    // line 351
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 351) . " ") . twig_get_attribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 351)), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 352
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 352), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 353
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoInicialLibroEUR", [], "any", false, false, false, 353), 2, ".", ","), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 354
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoLibroEUR", [], "any", false, false, false, 354), 2, ".", ","), "html", null, true);
                    echo "</td>
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
(isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 367, $this->source); })()) == "saldoServicioUSD") && (twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 367) != 0))) {
                    // line 368
                    echo "                    <tr data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 368), "html", null, true);
                    echo "\">
                        <td>";
                    // line 369
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 369) . " ") . twig_get_attribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 369)), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 370
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 370), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 371
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoInicialServicioUSD", [], "any", false, false, false, 371), 2, ".", ","), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 372
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioUSD", [], "any", false, false, false, 372), 2, ".", ","), "html", null, true);
                    echo "</td>
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
(isset($context["moneda"]) || array_key_exists("moneda", $context) ? $context["moneda"] : (function () { throw new RuntimeError('Variable "moneda" does not exist.', 385, $this->source); })()) == "saldoServicioEUR") && (twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 385) != 0))) {
                    // line 386
                    echo "                    <tr data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "id", [], "any", false, false, false, 386), "html", null, true);
                    echo "\">
                        <td>";
                    // line 387
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["venta"], "nombre", [], "any", false, false, false, 387) . " ") . twig_get_attribute($this->env, $this->source, $context["venta"], "apellidos", [], "any", false, false, false, 387)), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 388
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "email", [], "any", false, false, false, 388), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 389
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoInicialServicioEUR", [], "any", false, false, false, 389), 2, ".", ","), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 390
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "saldoServicioEUR", [], "any", false, false, false, 390), 2, ".", ","), "html", null, true);
                    echo "</td>
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
                echo "            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 405
                echo "                <tr>
                    <td colspan=\"4\">No se encontraron registros</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            echo "            </tbody>
        </table>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros/tablas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  907 => 409,  898 => 405,  893 => 404,  876 => 390,  872 => 389,  868 => 388,  864 => 387,  859 => 386,  857 => 385,  841 => 372,  837 => 371,  833 => 370,  829 => 369,  824 => 368,  822 => 367,  806 => 354,  802 => 353,  798 => 352,  794 => 351,  789 => 350,  787 => 349,  771 => 336,  767 => 335,  763 => 334,  759 => 333,  754 => 332,  752 => 331,  736 => 318,  732 => 317,  728 => 316,  724 => 315,  719 => 314,  717 => 313,  701 => 300,  697 => 299,  693 => 298,  689 => 297,  684 => 296,  681 => 295,  676 => 294,  662 => 282,  645 => 281,  630 => 276,  622 => 273,  618 => 271,  614 => 269,  612 => 268,  609 => 267,  604 => 266,  600 => 264,  596 => 262,  585 => 254,  578 => 250,  575 => 249,  562 => 238,  560 => 237,  557 => 236,  554 => 235,  548 => 233,  545 => 232,  539 => 230,  530 => 223,  523 => 219,  520 => 218,  518 => 217,  513 => 215,  503 => 207,  501 => 206,  493 => 200,  486 => 196,  483 => 195,  481 => 194,  476 => 192,  469 => 188,  457 => 178,  455 => 177,  444 => 169,  433 => 160,  431 => 159,  423 => 153,  416 => 149,  413 => 148,  411 => 147,  406 => 145,  400 => 142,  389 => 133,  387 => 132,  379 => 126,  372 => 122,  369 => 121,  367 => 120,  362 => 118,  356 => 115,  348 => 110,  341 => 106,  333 => 101,  324 => 94,  321 => 93,  317 => 91,  308 => 86,  305 => 85,  300 => 83,  297 => 82,  295 => 81,  291 => 80,  288 => 79,  286 => 78,  282 => 77,  279 => 76,  277 => 75,  273 => 74,  270 => 73,  268 => 72,  264 => 71,  261 => 70,  259 => 69,  255 => 68,  252 => 67,  250 => 66,  245 => 65,  239 => 63,  237 => 62,  232 => 61,  229 => 60,  224 => 59,  219 => 56,  215 => 54,  212 => 53,  208 => 51,  206 => 50,  199 => 45,  195 => 43,  193 => 42,  187 => 38,  169 => 37,  150 => 31,  141 => 27,  136 => 26,  130 => 24,  128 => 23,  124 => 22,  120 => 21,  116 => 20,  112 => 19,  109 => 18,  106 => 17,  101 => 16,  94 => 11,  90 => 9,  88 => 8,  82 => 5,  77 => 2,  58 => 1,  46 => 413,  43 => 280,  40 => 36,);
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
