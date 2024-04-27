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

/* base.html.twig */
class __TwigTemplate_bab4ad142382703e9b967731c7836fb3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'pagecss' => [$this, 'block_pagecss'],
            'javascripts' => [$this, 'block_javascripts'],
            'pagescript' => [$this, 'block_pagescript'],
            'body' => [$this, 'block_body'],
            'page' => [$this, 'block_page'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 11
        yield "    ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 39
        yield "
    ";
        // line 40
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 97
        yield "</head>


";
        // line 100
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 987
        yield "</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Bienvenidos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        yield "        <!-- Google Font: Source Sans Pro -->
        <link rel=\"stylesheet\"
              href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
        <!-- Ionicons -->
";
        // line 17
        yield "        <!-- daterange picker -->
        ";
        // line 19
        yield "        <link href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/estilos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\">
        <!-- overlayScrollbars -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        yield "\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        yield "\">
        <!-- Toastr -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/toastr/toastr.min.css"), "html", null, true);
        yield "\">

        <!-- iCheck for checkboxes and radio inputs -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        yield "\">


        <!-- Google Font: Source Sans Pro -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
        ";
        // line 36
        yield from $this->unwrap()->yieldBlock('pagecss', $context, $blocks);
        // line 38
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 36
    public function block_pagecss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagecss"));

        // line 37
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        yield "        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src=\"";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <!-- overlayScrollbars -->
        <script src=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        yield "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 49
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        yield "\"></script>
        ";
        // line 51
        yield "        ";
        // line 52
        yield "
        <!-- InputMask -->
        <script src=\"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/inputmask/min/jquery.inputmask.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        yield "\"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src=\"";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/demo.js"), "html", null, true);
        yield "\"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src=\"";
        // line 64
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/raphael/raphael.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 66
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        yield "\"></script>
        <!-- ChartJS -->
        <script src=\"";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

        <!-- Toastr -->
        <script src=\"";
        // line 72
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>

        <!-- PAGE SCRIPTS -->
        <script src=\"";
        // line 75
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/pages/dashboard2.js"), "html", null, true);
        yield "\"></script>

        <!-- NOTIFICACIONES -->
        <script src=\"";
        // line 78
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/notificacion/jquery.pulsate.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 79
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/notificacion/ui-general.js"), "html", null, true);
        yield "\"></script>
        <script>
            jQuery(document).ready(function () {
                ";
        // line 82
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 83
            yield "                ";
            if (((isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 83, $this->source); })()) > 0)) {
                // line 84
                yield "                UIGeneral.init();
                ";
            }
            // line 86
            yield "                ";
        } else {
            // line 87
            yield "                ";
            if (((isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 87, $this->source); })()) > 0)) {
                // line 88
                yield "                UIGeneral.init();
                ";
            }
            // line 90
            yield "                ";
        }
        // line 91
        yield "            });
        </script>

        ";
        // line 94
        yield from $this->unwrap()->yieldBlock('pagescript', $context, $blocks);
        // line 96
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 94
    public function block_pagescript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        // line 95
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 101
        yield "    <body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
    <div class=\"wrapper\">
        <!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <!-- Left navbar links -->
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                </li>

                <li>
                    <a href=\"#\" class=\"brand-link\">
                        <img src=\"";
        // line 113
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/MagosArtesanos.png"), "html", null, true);
        yield "\" alt=\"Logo Sitio\"
                             class=\"brand-image\">
                    </a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <!-- Notifications Dropdown Menu -->
                ";
        // line 120
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 121
            yield "                    ";
            if (((isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 121, $this->source); })()) > 0)) {
                // line 122
                yield "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                                <i id=\"pulsate-regular\" class=\"far fa-bell\"></i>
                                <span class=\"badge badge-dark navbar-badge\">";
                // line 125
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 125, $this->source); })()), "html", null, true);
                yield "</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                                ";
                // line 128
                if (((isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 128, $this->source); })()) == 1)) {
                    // line 129
                    yield "                                    <span class=\"dropdown-item dropdown-header\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 129, $this->source); })()), "html", null, true);
                    yield " Notificación</span>
                                ";
                } else {
                    // line 131
                    yield "                                    <span class=\"dropdown-item dropdown-header\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 131, $this->source); })()), "html", null, true);
                    yield " Notificaciones</span>
                                ";
                }
                // line 133
                yield "                                <div class=\"dropdown-divider\"></div>
                                ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notificacionesAdmin"]) || array_key_exists("notificacionesAdmin", $context) ? $context["notificacionesAdmin"] : (function () { throw new RuntimeError('Variable "notificacionesAdmin" does not exist.', 134, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                    // line 135
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 135) == 1)) {
                        // line 136
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_user_inactivos", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 136)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-users mr-2\"></i>Usuarios inactivos
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 139
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 139), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 142
$context["notificacion"], "tipo", [], "any", false, false, false, 142) == 2)) {
                        // line 143
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_producto_agotado", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 143)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-copy mr-2\"></i>Productos agotados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 146
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 146), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 149
$context["notificacion"], "tipo", [], "any", false, false, false, 149) == 6)) {
                        // line 150
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_recogida", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 150)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Solicitudes de recogida
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 153
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 153), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 156
$context["notificacion"], "tipo", [], "any", false, false, false, 156) == 3)) {
                        // line 157
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_pago_royal_acumulado", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 157)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-tree mr-2\"></i>Solicitudes de pago
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 160
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 160), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    }
                    // line 164
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                yield "                            </div>
                        </li>
                    ";
            }
            // line 168
            yield "                ";
        } else {
            // line 169
            yield "                    ";
            if (((isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 169, $this->source); })()) > 0)) {
                // line 170
                yield "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                                <i id=\"pulsate-regular\" class=\"far fa-bell\"></i>
                                <span class=\"badge badge-dark navbar-badge\">";
                // line 173
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 173, $this->source); })()), "html", null, true);
                yield "</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                                ";
                // line 176
                if (((isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 176, $this->source); })()) == 1)) {
                    // line 177
                    yield "                                    <span class=\"dropdown-item dropdown-header\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 177, $this->source); })()), "html", null, true);
                    yield " Notificación</span>
                                ";
                } else {
                    // line 179
                    yield "                                    <span class=\"dropdown-item dropdown-header\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 179, $this->source); })()), "html", null, true);
                    yield " Notificaciones</span>
                                ";
                }
                // line 181
                yield "                                <div class=\"dropdown-divider\"></div>
                                ";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notificacionesUser"]) || array_key_exists("notificacionesUser", $context) ? $context["notificacionesUser"] : (function () { throw new RuntimeError('Variable "notificacionesUser" does not exist.', 182, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                    // line 183
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 183) == 4)) {
                        // line 184
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_pago_royal_acumulado", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 184)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-tree mr-2\"></i>Pagos realizados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 187
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 187), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 190
$context["notificacion"], "tipo", [], "any", false, false, false, 190) == 5)) {
                        // line 191
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_pago_royal_acumulado", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 191)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-times-circle mr-2\"></i>Pagos rechazados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 194
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 194), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 197
$context["notificacion"], "tipo", [], "any", false, false, false, 197) == 7)) {
                        // line 198
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_asignar_producto", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 198)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-copy mr-2\"></i>Productos asignados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 201
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 201), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 204
$context["notificacion"], "tipo", [], "any", false, false, false, 204) == 8)) {
                        // line 205
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_servicios_asignados", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 205)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-wrench mr-2\"></i>Servicios asignados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 208
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 208), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 211
$context["notificacion"], "tipo", [], "any", false, false, false, 211) == 9)) {
                        // line 212
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_recogida", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 212)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Solicitudes aprobadas
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 215
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 215), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 218
$context["notificacion"], "tipo", [], "any", false, false, false, 218) == 10)) {
                        // line 219
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_retiros_saldos_acumulados", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 219)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Retiros saldos
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 222
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 222), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 225
$context["notificacion"], "tipo", [], "any", false, false, false, 225) == 11)) {
                        // line 226
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_recogida", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 226)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Solicitudes rechazadas
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 229
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 229), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 232
$context["notificacion"], "tipo", [], "any", false, false, false, 232) == 12)) {
                        // line 233
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_producto_agotado_user", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 233)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Productos agotados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 236
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 236), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 239
$context["notificacion"], "tipo", [], "any", false, false, false, 239) == 13)) {
                        // line 240
                        yield "                                        <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_ingresos_saldos_acumulados", ["tipo" => CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 240)]), "html", null, true);
                        yield "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Ingresos saldos
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 243
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 243), "html", null, true);
                        yield "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    }
                    // line 247
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 248
                yield "                            </div>
                        </li>
                    ";
            }
            // line 251
            yield "                ";
        }
        // line 252
        yield "            </ul>
            <ul class=\"navbar-nav align-items-center  ml-auto ml-md-0 \">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                       aria-expanded=\"false\">
                        <div class=\"media align-items-center text-dark\">
                            <div class=\"media-body  ml-2  d-none d-lg-block\">
                                <i class=\"fa fa-cog\"></i>
                            </div>
                        </div>
                    </a>
                    <div class=\"dropdown-menu  dropdown-menu-right \">
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 265
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [], "any", false, false, false, 265), "id", [], "any", false, false, false, 265)]), "html", null, true);
        yield "\" class=\"dropdown-item\">
                            <i class=\"fa fa-user-edit\"> Perfil</i>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 269
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_form_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "user", [], "any", false, false, false, 269), "id", [], "method", false, false, false, 269)]), "html", null, true);
        yield "\" class=\"dropdown-item\">
                            <i class=\"fa fa-cog\"> Cambiar contraseña</i>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"dropdown-item\">
                            <i class=\"fa fa-cog\"> Salir</i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav align-items-center  ml-auto ml-md-0 \">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link pr-0\" href=\"";
        // line 281
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ayuda_index");
        yield "\" role=\"button\" aria-haspopup=\"true\"
                       aria-expanded=\"false\">
                        <div class=\"media align-items-center text-dark\">
                            <div class=\"media-body  ml-2  d-none d-lg-block\">
                                <i class=\"fa fa-video\"></i>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            <!-- Brand Logo -->
            <a href=\"#\" class=\"brand-link\">
                <span class=\"brand-text font-weight-light\"><marquee>Magos Artesanos – Sistema de Royalties</marquee></span>
            </a>

            <!-- Sidebar -->
            <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->

                <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    ";
        // line 306
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "avatar", [], "any", false, false, false, 306)) {
            // line 307
            yield "                        <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 307, $this->source); })()), "user", [], "any", false, false, false, 307), "id", [], "any", false, false, false, 307)]), "html", null, true);
            yield "\">
                            <div class=\"image\">
                                <img
                                        src=\"";
            // line 310
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 310, $this->source); })()), "user", [], "any", false, false, false, 310), "avatar", [], "any", false, false, false, 310))), "html", null, true);
            yield "\"
                                        style=\"background-color: white;\"
                                        class=\"img-circle elevation-2\"
                                        alt=\"User Image\">
                            </div>
                        </a>
                    ";
        }
        // line 317
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
        yield "\">
                        <div class=\"info\">
                            <a href=\"";
        // line 319
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "id", [], "any", false, false, false, 319)]), "html", null, true);
        yield "\"
                               class=\"d-block\">";
        // line 320
        yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::capitalizeStringFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "user", [], "any", false, false, false, 320), "nombre", [], "any", false, false, false, 320)) . " ") . Twig\Extension\CoreExtension::capitalizeStringFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "user", [], "any", false, false, false, 320), "apellidos", [], "any", false, false, false, 320))), "html", null, true);
        yield "</a>
                        </div>
                    </a>
                </div>

                <!-- Sidebar Menu -->
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\"
                        data-accordion=\"false\">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        ";
        // line 331
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 332
            yield "                            ";
            if (((isset($context["resumen"]) || array_key_exists("resumen", $context) ? $context["resumen"] : (function () { throw new RuntimeError('Variable "resumen" does not exist.', 332, $this->source); })()) == 1)) {
                // line 333
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 334
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 342
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 343
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 351
            yield "                        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 352
            yield "                            ";
            if (((isset($context["resumen"]) || array_key_exists("resumen", $context) ? $context["resumen"] : (function () { throw new RuntimeError('Variable "resumen" does not exist.', 352, $this->source); })()) == 1)) {
                // line 353
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 354
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 362
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 363
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 371
            yield "                        ";
        }
        // line 372
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 373
            yield "                        ";
        } else {
            // line 374
            yield "                            ";
            if (((isset($context["asignarp"]) || array_key_exists("asignarp", $context) ? $context["asignarp"] : (function () { throw new RuntimeError('Variable "asignarp" does not exist.', 374, $this->source); })()) == 1)) {
                // line 375
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 376
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignar_producto");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fa fa-copy\"></i>
                                        <p>
                                            Mis Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 384
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 385
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignar_producto");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-copy\"></i>
                                        <p>
                                            Mis Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 393
            yield "                        ";
        }
        // line 394
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 395
            yield "                        ";
        } else {
            // line 396
            yield "                            ";
            if (((isset($context["asignars"]) || array_key_exists("asignars", $context) ? $context["asignars"] : (function () { throw new RuntimeError('Variable "asignars" does not exist.', 396, $this->source); })()) == 1)) {
                // line 397
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 398
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicios_asignados");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-wrench\"></i>
                                        <p>
                                            Mis Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 406
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 407
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicios_asignados");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-wrench\"></i>
                                        <p>
                                            Mis Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 415
            yield "                        ";
        }
        // line 416
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 417
            yield "                            ";
            if (((isset($context["empres"]) || array_key_exists("empres", $context) ? $context["empres"] : (function () { throw new RuntimeError('Variable "empres" does not exist.', 417, $this->source); })()) == 1)) {
                // line 418
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 419
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-archive\"></i>
                                        <p>
                                            Empresa
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 427
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 428
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-archive\"></i>
                                        <p>
                                            Empresa
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 436
            yield "                        ";
        }
        // line 437
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 438
            yield "                        ";
        } else {
            // line 439
            yield "                            ";
            if (((isset($context["ventas"]) || array_key_exists("ventas", $context) ? $context["ventas"] : (function () { throw new RuntimeError('Variable "ventas" does not exist.', 439, $this->source); })()) == 1)) {
                // line 440
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 441
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ventas");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-shopping-cart\"></i>
                                        <p>
                                            Mis Ventas
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 449
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 450
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ventas");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-shopping-cart\"></i>
                                        <p>
                                            Mis Ventas
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 458
            yield "                        ";
        }
        // line 459
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 460
            yield "                            ";
            if (((isset($context["usuar"]) || array_key_exists("usuar", $context) ? $context["usuar"] : (function () { throw new RuntimeError('Variable "usuar" does not exist.', 460, $this->source); })()) == 1)) {
                // line 461
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 462
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Activos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 470
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 471
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Activos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 479
            yield "                        ";
        }
        // line 480
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 481
            yield "                            ";
            if (((isset($context["usuarI"]) || array_key_exists("usuarI", $context) ? $context["usuarI"] : (function () { throw new RuntimeError('Variable "usuarI" does not exist.', 481, $this->source); })()) == 1)) {
                // line 482
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 483
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_inactivos");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Inactivos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 491
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 492
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_inactivos");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Inactivos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 500
            yield "                        ";
        }
        // line 501
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 502
            yield "                            ";
            if (((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 502, $this->source); })()) == 1)) {
                // line 503
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 504
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 512
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 513
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 521
            yield "                        ";
        }
        // line 522
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 523
            yield "                            ";
            if (((isset($context["amortizacion"]) || array_key_exists("amortizacion", $context) ? $context["amortizacion"] : (function () { throw new RuntimeError('Variable "amortizacion" does not exist.', 523, $this->source); })()) == 1)) {
                // line 524
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 525
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amortizacion_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 533
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 534
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amortizacion_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 542
            yield "                        ";
        } else {
            // line 543
            yield "                            ";
            if (((isset($context["amortizacionUser"]) || array_key_exists("amortizacionUser", $context) ? $context["amortizacionUser"] : (function () { throw new RuntimeError('Variable "amortizacionUser" does not exist.', 543, $this->source); })()) == 1)) {
                // line 544
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 545
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amortizacion_user_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 553
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 554
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amortizacion_user_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 562
            yield "                        ";
        }
        // line 563
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 564
            yield "                            ";
            if (((isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 564, $this->source); })()) == 1)) {
                // line 565
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 566
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-wrench\"></i>
                                        <p>
                                            Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 574
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 575
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-wrench\"></i>
                                        <p>
                                            Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 583
            yield "                        ";
        }
        // line 584
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 585
            yield "                            ";
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 585, $this->source); })()) == 1)) {
                // line 586
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 587
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Packs de Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 595
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 596
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Packs de Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 604
            yield "                        ";
        }
        // line 605
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 606
            yield "                            ";
            if (((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 606, $this->source); })()) == 1)) {
                // line 607
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 608
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_productos_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 616
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 617
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_productos_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 625
            yield "                        ";
        }
        // line 626
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 627
            yield "                            ";
            if (((isset($context["vs"]) || array_key_exists("vs", $context) ? $context["vs"] : (function () { throw new RuntimeError('Variable "vs" does not exist.', 627, $this->source); })()) == 1)) {
                // line 628
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 629
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicios_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 637
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 638
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicios_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 646
            yield "                        ";
        }
        // line 647
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 648
            yield "                            ";
            if (((isset($context["canceladas"]) || array_key_exists("canceladas", $context) ? $context["canceladas"] : (function () { throw new RuntimeError('Variable "canceladas" does not exist.', 648, $this->source); })()) == 1)) {
                // line 649
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 650
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ventas_canceladas");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas Canceladas
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 658
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 659
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ventas_canceladas");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas Canceladas
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 667
            yield "                        ";
        }
        // line 668
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 669
            yield "                            ";
            if (((isset($context["royaltiesp"]) || array_key_exists("royaltiesp", $context) ? $context["royaltiesp"] : (function () { throw new RuntimeError('Variable "royaltiesp" does not exist.', 669, $this->source); })()) == 1)) {
                // line 670
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 671
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
                yield "\"
                                       class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Liquidar Pago Royalties
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 680
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 681
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Liquidar Pago Royalties
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 689
            yield "                        ";
        } else {
            // line 690
            yield "                            ";
            if (((isset($context["royaltiesp"]) || array_key_exists("royaltiesp", $context) ? $context["royaltiesp"] : (function () { throw new RuntimeError('Variable "royaltiesp" does not exist.', 690, $this->source); })()) == 1)) {
                // line 691
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 692
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
                yield "\"
                                       class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Mis Solicitudes de Pago
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 701
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 702
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Mis Solicitudes de Pago
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 710
            yield "                        ";
        }
        // line 711
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 712
            yield "                        ";
        } else {
            // line 713
            yield "                            ";
            if (((isset($context["direcc"]) || array_key_exists("direcc", $context) ? $context["direcc"] : (function () { throw new RuntimeError('Variable "direcc" does not exist.', 713, $this->source); })()) == 1)) {
                // line 714
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 715
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_direccion_index");
                yield "\"
                                       class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Mi Dirección de Recogida
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 724
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 725
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_direccion_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Mi Dirección de Recogida
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 733
            yield "                        ";
        }
        // line 734
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 735
            yield "                            ";
            if (((isset($context["retir"]) || array_key_exists("retir", $context) ? $context["retir"] : (function () { throw new RuntimeError('Variable "retir" does not exist.', 735, $this->source); })()) == 1)) {
                // line 736
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 737
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_retiros_saldos_acumulados");
                yield "\"
                                       class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Distribución Royalties
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 746
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 747
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_retiros_saldos_acumulados");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Distribución Royalties
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 755
            yield "                        ";
        }
        // line 756
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 757
            yield "                            ";
            if (((isset($context["recogida"]) || array_key_exists("recogida", $context) ? $context["recogida"] : (function () { throw new RuntimeError('Variable "recogida" does not exist.', 757, $this->source); })()) == 1)) {
                // line 758
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 759
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Solicitud de Recogidas
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 767
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 768
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Solicitud de Recogidas
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 776
            yield "                        ";
        } else {
            // line 777
            yield "                            ";
            if (((isset($context["recogida"]) || array_key_exists("recogida", $context) ? $context["recogida"] : (function () { throw new RuntimeError('Variable "recogida" does not exist.', 777, $this->source); })()) == 1)) {
                // line 778
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 779
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Mis Solicitudes de Recogida
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 787
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 788
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Mis Solicitudes de Recogida
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 796
            yield "                        ";
        }
        // line 797
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 798
            yield "                            ";
            if (((isset($context["productAgot"]) || array_key_exists("productAgot", $context) ? $context["productAgot"] : (function () { throw new RuntimeError('Variable "productAgot" does not exist.', 798, $this->source); })()) == 1)) {
                // line 799
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 800
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_agotado_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 808
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 809
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_agotado_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 817
            yield "                        ";
        } else {
            // line 818
            yield "                            ";
            if (((isset($context["productAgot"]) || array_key_exists("productAgot", $context) ? $context["productAgot"] : (function () { throw new RuntimeError('Variable "productAgot" does not exist.', 818, $this->source); })()) == 1)) {
                // line 819
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 820
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_agotado_user");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Mis Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 828
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 829
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_agotado_user");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Mis Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 837
            yield "                        ";
        }
        // line 838
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 839
            yield "                        ";
        } else {
            // line 840
            yield "                            ";
            if (((isset($context["buy"]) || array_key_exists("buy", $context) ? $context["buy"] : (function () { throw new RuntimeError('Variable "buy" does not exist.', 840, $this->source); })()) == 1)) {
                // line 841
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 842
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metodo_de_pago");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fa fa-credit-card\"></i>
                                        <p>
                                            Mis Formas de Pago
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 850
                yield "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 851
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metodo_de_pago");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-credit-card\"></i>
                                        <p>
                                            Mis Formas de Pago
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 859
            yield "                        ";
        }
        // line 860
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 861
            yield "                            ";
            if (((isset($context["estad"]) || array_key_exists("estad", $context) ? $context["estad"] : (function () { throw new RuntimeError('Variable "estad" does not exist.', 861, $this->source); })()) == 1)) {
                // line 862
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 863
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_estado_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Estado de cuentas
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 871
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 872
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_estado_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Estado de cuentas
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 880
            yield "                        ";
        } else {
            // line 881
            yield "                            ";
            if (((isset($context["estadUser"]) || array_key_exists("estadUser", $context) ? $context["estadUser"] : (function () { throw new RuntimeError('Variable "estadUser" does not exist.', 881, $this->source); })()) == 1)) {
                // line 882
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 883
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_estado_user_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Estados de cuentas
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 891
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 892
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_estado_user_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Estados de cuentas
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 900
            yield "                        ";
        }
        // line 901
        yield "                        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 902
            yield "                            ";
            if (((isset($context["hist"]) || array_key_exists("hist", $context) ? $context["hist"] : (function () { throw new RuntimeError('Variable "hist" does not exist.', 902, $this->source); })()) == 1)) {
                // line 903
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 904
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historial_retiro_saldo_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Retiro Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 912
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 913
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historial_retiro_saldo_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Retiro Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 921
            yield "                        ";
        }
        // line 922
        yield "                        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 923
            yield "                            ";
            if (((isset($context["ing"]) || array_key_exists("ing", $context) ? $context["ing"] : (function () { throw new RuntimeError('Variable "ing" does not exist.', 923, $this->source); })()) == 1)) {
                // line 924
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 925
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ingreso_saldo_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Ingreso Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 933
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 934
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ingreso_saldo_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Ingreso Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 942
            yield "                        ";
        }
        // line 943
        yield "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 944
            yield "                            ";
            if (((isset($context["tipoNot"]) || array_key_exists("tipoNot", $context) ? $context["tipoNot"] : (function () { throw new RuntimeError('Variable "tipoNot" does not exist.', 944, $this->source); })()) == 1)) {
                // line 945
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 946
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tipo_notificacion_index");
                yield "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-bell\"></i>
                                        <p>
                                            Notificaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 954
                yield "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 955
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tipo_notificacion_index");
                yield "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-bell\"></i>
                                        <p>
                                            Notificaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 963
            yield "                        ";
        }
        // line 964
        yield "                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        ";
        // line 970
        yield from $this->unwrap()->yieldBlock('page', $context, $blocks);
        // line 973
        yield "        <!-- Control Sidebar -->
        <aside class=\"control-sidebar control-sidebar-dark\">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class=\"main-footer\">
            <strong>Copyright &copy; 2022 </strong>Versión v3.1 Todos los Derechos Reservados.
        </footer>
    </div>
    <!-- ./wrapper -->
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 970
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 971
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1920 => 971,  1913 => 970,  1892 => 973,  1890 => 970,  1882 => 964,  1879 => 963,  1868 => 955,  1865 => 954,  1854 => 946,  1851 => 945,  1848 => 944,  1845 => 943,  1842 => 942,  1831 => 934,  1828 => 933,  1817 => 925,  1814 => 924,  1811 => 923,  1808 => 922,  1805 => 921,  1794 => 913,  1791 => 912,  1780 => 904,  1777 => 903,  1774 => 902,  1771 => 901,  1768 => 900,  1757 => 892,  1754 => 891,  1743 => 883,  1740 => 882,  1737 => 881,  1734 => 880,  1723 => 872,  1720 => 871,  1709 => 863,  1706 => 862,  1703 => 861,  1700 => 860,  1697 => 859,  1686 => 851,  1683 => 850,  1672 => 842,  1669 => 841,  1666 => 840,  1663 => 839,  1660 => 838,  1657 => 837,  1646 => 829,  1643 => 828,  1632 => 820,  1629 => 819,  1626 => 818,  1623 => 817,  1612 => 809,  1609 => 808,  1598 => 800,  1595 => 799,  1592 => 798,  1589 => 797,  1586 => 796,  1575 => 788,  1572 => 787,  1561 => 779,  1558 => 778,  1555 => 777,  1552 => 776,  1541 => 768,  1538 => 767,  1527 => 759,  1524 => 758,  1521 => 757,  1518 => 756,  1515 => 755,  1504 => 747,  1501 => 746,  1489 => 737,  1486 => 736,  1483 => 735,  1480 => 734,  1477 => 733,  1466 => 725,  1463 => 724,  1451 => 715,  1448 => 714,  1445 => 713,  1442 => 712,  1439 => 711,  1436 => 710,  1425 => 702,  1422 => 701,  1410 => 692,  1407 => 691,  1404 => 690,  1401 => 689,  1390 => 681,  1387 => 680,  1375 => 671,  1372 => 670,  1369 => 669,  1366 => 668,  1363 => 667,  1352 => 659,  1349 => 658,  1338 => 650,  1335 => 649,  1332 => 648,  1329 => 647,  1326 => 646,  1315 => 638,  1312 => 637,  1301 => 629,  1298 => 628,  1295 => 627,  1292 => 626,  1289 => 625,  1278 => 617,  1275 => 616,  1264 => 608,  1261 => 607,  1258 => 606,  1255 => 605,  1252 => 604,  1241 => 596,  1238 => 595,  1227 => 587,  1224 => 586,  1221 => 585,  1218 => 584,  1215 => 583,  1204 => 575,  1201 => 574,  1190 => 566,  1187 => 565,  1184 => 564,  1181 => 563,  1178 => 562,  1167 => 554,  1164 => 553,  1153 => 545,  1150 => 544,  1147 => 543,  1144 => 542,  1133 => 534,  1130 => 533,  1119 => 525,  1116 => 524,  1113 => 523,  1110 => 522,  1107 => 521,  1096 => 513,  1093 => 512,  1082 => 504,  1079 => 503,  1076 => 502,  1073 => 501,  1070 => 500,  1059 => 492,  1056 => 491,  1045 => 483,  1042 => 482,  1039 => 481,  1036 => 480,  1033 => 479,  1022 => 471,  1019 => 470,  1008 => 462,  1005 => 461,  1002 => 460,  999 => 459,  996 => 458,  985 => 450,  982 => 449,  971 => 441,  968 => 440,  965 => 439,  962 => 438,  959 => 437,  956 => 436,  945 => 428,  942 => 427,  931 => 419,  928 => 418,  925 => 417,  922 => 416,  919 => 415,  908 => 407,  905 => 406,  894 => 398,  891 => 397,  888 => 396,  885 => 395,  882 => 394,  879 => 393,  868 => 385,  865 => 384,  854 => 376,  851 => 375,  848 => 374,  845 => 373,  842 => 372,  839 => 371,  828 => 363,  825 => 362,  814 => 354,  811 => 353,  808 => 352,  805 => 351,  794 => 343,  791 => 342,  780 => 334,  777 => 333,  774 => 332,  772 => 331,  758 => 320,  754 => 319,  748 => 317,  738 => 310,  731 => 307,  729 => 306,  701 => 281,  690 => 273,  683 => 269,  676 => 265,  661 => 252,  658 => 251,  653 => 248,  647 => 247,  640 => 243,  633 => 240,  631 => 239,  625 => 236,  618 => 233,  616 => 232,  610 => 229,  603 => 226,  601 => 225,  595 => 222,  588 => 219,  586 => 218,  580 => 215,  573 => 212,  571 => 211,  565 => 208,  558 => 205,  556 => 204,  550 => 201,  543 => 198,  541 => 197,  535 => 194,  528 => 191,  526 => 190,  520 => 187,  513 => 184,  510 => 183,  506 => 182,  503 => 181,  497 => 179,  491 => 177,  489 => 176,  483 => 173,  478 => 170,  475 => 169,  472 => 168,  467 => 165,  461 => 164,  454 => 160,  447 => 157,  445 => 156,  439 => 153,  432 => 150,  430 => 149,  424 => 146,  417 => 143,  415 => 142,  409 => 139,  402 => 136,  399 => 135,  395 => 134,  392 => 133,  386 => 131,  380 => 129,  378 => 128,  372 => 125,  367 => 122,  364 => 121,  362 => 120,  352 => 113,  338 => 101,  331 => 100,  323 => 95,  316 => 94,  308 => 96,  306 => 94,  301 => 91,  298 => 90,  294 => 88,  291 => 87,  288 => 86,  284 => 84,  281 => 83,  279 => 82,  273 => 79,  269 => 78,  263 => 75,  257 => 72,  251 => 69,  246 => 67,  242 => 66,  238 => 65,  234 => 64,  227 => 60,  221 => 57,  216 => 55,  212 => 54,  208 => 52,  206 => 51,  202 => 49,  197 => 47,  192 => 45,  187 => 43,  183 => 41,  176 => 40,  168 => 37,  161 => 36,  153 => 38,  151 => 36,  143 => 31,  137 => 28,  132 => 26,  127 => 24,  122 => 22,  115 => 19,  112 => 17,  106 => 12,  99 => 11,  85 => 7,  77 => 987,  75 => 100,  70 => 97,  68 => 40,  65 => 39,  62 => 11,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>{% block title %}Bienvenidos{% endblock %}</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    {% block stylesheets %}
        <!-- Google Font: Source Sans Pro -->
        <link rel=\"stylesheet\"
              href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
        <!-- Ionicons -->
{#        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">#}
        <!-- daterange picker -->
        {# <link rel=\"stylesheet\" href=\"{{ asset('plugins/daterangepicker/daterangepicker.css') }}\"> #}
        <link href=\"{{ asset('dist/css/estilos.css') }}\" rel=\"stylesheet\">

        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
        <!-- overlayScrollbars -->
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{ asset('dist/css/adminlte.min.css') }}\">
        <!-- Toastr -->
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/toastr/toastr.min.css') }}\">

        <!-- iCheck for checkboxes and radio inputs -->
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">


        <!-- Google Font: Source Sans Pro -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
        {% block pagecss %}
        {% endblock %}
    {% endblock %}

    {% block javascripts %}
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src=\"{{ asset('plugins/jquery/jquery.min.js') }}\"></script>
        <!-- Bootstrap -->
        <script src=\"{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
        <!-- overlayScrollbars -->
        <script src=\"{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
        <!-- AdminLTE App -->
        <script src=\"{{ asset('dist/js/adminlte.js') }}\"></script>
        {# <!-- date-range-picker --> #}
        {# <script src=\"{{ asset('plugins/daterangepicker/daterangepicker.js') }}\"></script> #}

        <!-- InputMask -->
        <script src=\"{{ asset('plugins/moment/moment.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src=\"{{ asset('dist/js/demo.js') }}\"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src=\"{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}\"></script>
        <script src=\"{{ asset('plugins/raphael/raphael.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}\"></script>
        <!-- ChartJS -->
        <script src=\"{{ asset('plugins/chart.js/Chart.min.js') }}\"></script>

        <!-- Toastr -->
        <script src=\"{{ asset('plugins/toastr/toastr.min.js') }}\"></script>

        <!-- PAGE SCRIPTS -->
        <script src=\"{{ asset('dist/js/pages/dashboard2.js') }}\"></script>

        <!-- NOTIFICACIONES -->
        <script src=\"{{ asset('plugins/notificacion/jquery.pulsate.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/notificacion/ui-general.js') }}\"></script>
        <script>
            jQuery(document).ready(function () {
                {% if is_granted('ROLE_ADMIN') %}
                {% if (totalNotificacionesAdmin > 0) %}
                UIGeneral.init();
                {% endif %}
                {% else %}
                {% if (totalNotificacionesUser > 0) %}
                UIGeneral.init();
                {% endif %}
                {% endif %}
            });
        </script>

        {% block pagescript %}
        {% endblock %}
    {% endblock %}
</head>


{% block body %}
    <body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
    <div class=\"wrapper\">
        <!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <!-- Left navbar links -->
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                </li>

                <li>
                    <a href=\"#\" class=\"brand-link\">
                        <img src=\"{{ asset('dist/img/MagosArtesanos.png') }}\" alt=\"Logo Sitio\"
                             class=\"brand-image\">
                    </a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <!-- Notifications Dropdown Menu -->
                {% if is_granted('ROLE_ADMIN') %}
                    {% if totalNotificacionesAdmin > 0 %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                                <i id=\"pulsate-regular\" class=\"far fa-bell\"></i>
                                <span class=\"badge badge-dark navbar-badge\">{{ totalNotificacionesAdmin }}</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                                {% if totalNotificacionesAdmin == 1 %}
                                    <span class=\"dropdown-item dropdown-header\">{{ totalNotificacionesAdmin }} Notificación</span>
                                {% else %}
                                    <span class=\"dropdown-item dropdown-header\">{{ totalNotificacionesAdmin }} Notificaciones</span>
                                {% endif %}
                                <div class=\"dropdown-divider\"></div>
                                {% for notificacion in notificacionesAdmin %}
                                    {% if notificacion.tipo == 1 %}
                                        <a href=\"{{ path('app_notificaciones_user_inactivos', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-users mr-2\"></i>Usuarios inactivos
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 2 %}
                                        <a href=\"{{ path('app_notificaciones_producto_agotado', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-copy mr-2\"></i>Productos agotados
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 6 %}
                                        <a href=\"{{ path('app_notificaciones_solicitar_recogida', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Solicitudes de recogida
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 3 %}
                                        <a href=\"{{ path('app_notificaciones_solicitar_pago_royal_acumulado', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-tree mr-2\"></i>Solicitudes de pago
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </li>
                    {% endif %}
                {% else %}
                    {% if totalNotificacionesUser > 0 %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                                <i id=\"pulsate-regular\" class=\"far fa-bell\"></i>
                                <span class=\"badge badge-dark navbar-badge\">{{ totalNotificacionesUser }}</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                                {% if totalNotificacionesUser == 1 %}
                                    <span class=\"dropdown-item dropdown-header\">{{ totalNotificacionesUser }} Notificación</span>
                                {% else %}
                                    <span class=\"dropdown-item dropdown-header\">{{ totalNotificacionesUser }} Notificaciones</span>
                                {% endif %}
                                <div class=\"dropdown-divider\"></div>
                                {% for notificacion in notificacionesUser %}
                                    {% if notificacion.tipo == 4 %}
                                        <a href=\"{{ path('app_notificaciones_solicitar_pago_royal_acumulado', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-tree mr-2\"></i>Pagos realizados
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 5 %}
                                        <a href=\"{{ path('app_notificaciones_solicitar_pago_royal_acumulado', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-times-circle mr-2\"></i>Pagos rechazados
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 7 %}
                                        <a href=\"{{ path('app_notificaciones_asignar_producto', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-copy mr-2\"></i>Productos asignados
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 8 %}
                                        <a href=\"{{ path('app_notificaciones_servicios_asignados', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-wrench mr-2\"></i>Servicios asignados
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 9 %}
                                        <a href=\"{{ path('app_notificaciones_solicitar_recogida', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Solicitudes aprobadas
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 10 %}
                                        <a href=\"{{ path('app_notificaciones_retiros_saldos_acumulados', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Retiros saldos
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 11 %}
                                        <a href=\"{{ path('app_notificaciones_solicitar_recogida', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Solicitudes rechazadas
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 12 %}
                                        <a href=\"{{ path('app_notificaciones_producto_agotado_user', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Productos agotados
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% elseif notificacion.tipo == 13 %}
                                        <a href=\"{{ path('app_notificaciones_ingresos_saldos_acumulados', {'tipo': notificacion.tipo}) }}\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Ingresos saldos
                                            <span class=\"float-right text-muted text-sm\">{{ notificacion.cant }}</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </li>
                    {% endif %}
                {% endif %}
            </ul>
            <ul class=\"navbar-nav align-items-center  ml-auto ml-md-0 \">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                       aria-expanded=\"false\">
                        <div class=\"media align-items-center text-dark\">
                            <div class=\"media-body  ml-2  d-none d-lg-block\">
                                <i class=\"fa fa-cog\"></i>
                            </div>
                        </div>
                    </a>
                    <div class=\"dropdown-menu  dropdown-menu-right \">
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"{{ path('app_user_form_edit', {'id': app.user.id}) }}\" class=\"dropdown-item\">
                            <i class=\"fa fa-user-edit\"> Perfil</i>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"{{ path('app_reset_form_new', {'id': app.user.id()}) }}\" class=\"dropdown-item\">
                            <i class=\"fa fa-cog\"> Cambiar contraseña</i>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"{{ path('app_logout') }}\" class=\"dropdown-item\">
                            <i class=\"fa fa-cog\"> Salir</i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav align-items-center  ml-auto ml-md-0 \">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link pr-0\" href=\"{{ path('app_ayuda_index') }}\" role=\"button\" aria-haspopup=\"true\"
                       aria-expanded=\"false\">
                        <div class=\"media align-items-center text-dark\">
                            <div class=\"media-body  ml-2  d-none d-lg-block\">
                                <i class=\"fa fa-video\"></i>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            <!-- Brand Logo -->
            <a href=\"#\" class=\"brand-link\">
                <span class=\"brand-text font-weight-light\"><marquee>Magos Artesanos – Sistema de Royalties</marquee></span>
            </a>

            <!-- Sidebar -->
            <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->

                <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    {% if app.user.avatar %}
                        <a href=\"{{ path('app_user_form_edit', {'id': app.user.id}) }}\">
                            <div class=\"image\">
                                <img
                                        src=\"{{ asset('uploads/' ~ app.user.avatar) }}\"
                                        style=\"background-color: white;\"
                                        class=\"img-circle elevation-2\"
                                        alt=\"User Image\">
                            </div>
                        </a>
                    {% endif %}
                    <a href=\"{{ path('app_resumen') }}\">
                        <div class=\"info\">
                            <a href=\"{{ path('app_user_form_edit', {'id': app.user.id}) }}\"
                               class=\"d-block\">{{ app.user.nombre|capitalize ~ ' ' ~ app.user.apellidos|capitalize }}</a>
                        </div>
                    </a>
                </div>

                <!-- Sidebar Menu -->
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\"
                        data-accordion=\"false\">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if resumen == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_resumen') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_resumen') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% elseif is_granted('ROLE_USER') %}
                            {% if resumen == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_resumen') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_resumen') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                        {% else %}
                            {% if asignarp == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_asignar_producto') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fa fa-copy\"></i>
                                        <p>
                                            Mis Productos
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_asignar_producto') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-copy\"></i>
                                        <p>
                                            Mis Productos
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                        {% else %}
                            {% if asignars == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_servicios_asignados') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-wrench\"></i>
                                        <p>
                                            Mis Servicios
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_servicios_asignados') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-wrench\"></i>
                                        <p>
                                            Mis Servicios
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if empres == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_empresa_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-archive\"></i>
                                        <p>
                                            Empresa
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_empresa_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-archive\"></i>
                                        <p>
                                            Empresa
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                        {% else %}
                            {% if ventas == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_ventas') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-shopping-cart\"></i>
                                        <p>
                                            Mis Ventas
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_ventas') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-shopping-cart\"></i>
                                        <p>
                                            Mis Ventas
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if usuar == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_user_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Activos
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_user_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Activos
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if usuarI == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_user_inactivos') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Inactivos
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_user_inactivos') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Inactivos
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if product == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_producto_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_producto_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if amortizacion == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_amortizacion_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_amortizacion_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% else %}
                            {% if amortizacionUser == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_amortizacion_user_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_amortizacion_user_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if service == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_servicio_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-wrench\"></i>
                                        <p>
                                            Servicios
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_servicio_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-wrench\"></i>
                                        <p>
                                            Servicios
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if pack == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_pack_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Packs de Productos
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_pack_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Packs de Productos
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if vp == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_venta_productos_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Productos
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_venta_productos_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Productos
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if vs == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_venta_servicios_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Servicios
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_venta_servicios_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Servicios
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if canceladas == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_ventas_canceladas') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas Canceladas
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_ventas_canceladas') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas Canceladas
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if royaltiesp == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_solicitar_pago_royal_acumulado_index') }}\"
                                       class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Liquidar Pago Royalties
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_solicitar_pago_royal_acumulado_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Liquidar Pago Royalties
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% else %}
                            {% if royaltiesp == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_solicitar_pago_royal_acumulado_index') }}\"
                                       class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Mis Solicitudes de Pago
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_solicitar_pago_royal_acumulado_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Mis Solicitudes de Pago
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                        {% else %}
                            {% if direcc == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_direccion_index') }}\"
                                       class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Mi Dirección de Recogida
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_direccion_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Mi Dirección de Recogida
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if retir == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_retiros_saldos_acumulados') }}\"
                                       class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Distribución Royalties
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_retiros_saldos_acumulados') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Distribución Royalties
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if recogida == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_solicitar_recogida_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Solicitud de Recogidas
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_solicitar_recogida_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Solicitud de Recogidas
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% else %}
                            {% if recogida == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_solicitar_recogida_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Mis Solicitudes de Recogida
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_solicitar_recogida_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Mis Solicitudes de Recogida
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if productAgot == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_producto_agotado_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_producto_agotado_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% else %}
                            {% if productAgot == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_producto_agotado_user') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Mis Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_producto_agotado_user') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Mis Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                        {% else %}
                            {% if buy == 1 %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_metodo_de_pago') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fa fa-credit-card\"></i>
                                        <p>
                                            Mis Formas de Pago
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item has-treeview\">
                                    <a href=\"{{ path('app_metodo_de_pago') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-credit-card\"></i>
                                        <p>
                                            Mis Formas de Pago
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if estad == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_estado_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Estado de cuentas
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_estado_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Estado de cuentas
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% else %}
                            {% if estadUser == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_estado_user_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Estados de cuentas
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_estado_user_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Estados de cuentas
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
                            {% if hist == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_historial_retiro_saldo_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Retiro Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_historial_retiro_saldo_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Retiro Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
                            {% if ing == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_ingreso_saldo_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Ingreso Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_ingreso_saldo_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Ingreso Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            {% if tipoNot == 1 %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_tipo_notificacion_index') }}\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-bell\"></i>
                                        <p>
                                            Notificaciones
                                        </p>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_tipo_notificacion_index') }}\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-bell\"></i>
                                        <p>
                                            Notificaciones
                                        </p>
                                    </a>
                                </li>
                            {% endif %}
                        {% endif %}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        {% block page %}

        {% endblock %}
        <!-- Control Sidebar -->
        <aside class=\"control-sidebar control-sidebar-dark\">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class=\"main-footer\">
            <strong>Copyright &copy; 2022 </strong>Versión v3.1 Todos los Derechos Reservados.
        </footer>
    </div>
    <!-- ./wrapper -->
    </body>
{% endblock %}
</html>", "base.html.twig", "D:\\SOAINT\\ESPAÑA\\Symfony\\public_html\\templates\\base.html.twig");
    }
}
