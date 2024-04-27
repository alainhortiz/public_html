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

/* base.html.twig */
class __TwigTemplate_82b8f9a04fd799612321e1f4de86f823 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 11
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
    ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "</head>


";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 987
        echo "</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenidos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <!-- Google Font: Source Sans Pro -->
        <link rel=\"stylesheet\"
              href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
        <!-- Ionicons -->
";
        // line 17
        echo "        <!-- daterange picker -->
        ";
        // line 19
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
        <!-- overlayScrollbars -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
        <!-- Toastr -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/toastr/toastr.min.css"), "html", null, true);
        echo "\">

        <!-- iCheck for checkboxes and radio inputs -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">


        <!-- Google Font: Source Sans Pro -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
        ";
        // line 36
        $this->displayBlock('pagecss', $context, $blocks);
        // line 38
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 36
    public function block_pagecss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagecss"));

        // line 37
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- overlayScrollbars -->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 51
        echo "        ";
        // line 52
        echo "
        <!-- InputMask -->
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/inputmask/min/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        echo "\"></script>
        <!-- ChartJS -->
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Toastr -->
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/toastr/toastr.min.js"), "html", null, true);
        echo "\"></script>

        <!-- PAGE SCRIPTS -->
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/pages/dashboard2.js"), "html", null, true);
        echo "\"></script>

        <!-- NOTIFICACIONES -->
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/notificacion/jquery.pulsate.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/notificacion/ui-general.js"), "html", null, true);
        echo "\"></script>
        <script>
            jQuery(document).ready(function () {
                ";
        // line 82
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 83
            echo "                ";
            if (((isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 83, $this->source); })()) > 0)) {
                // line 84
                echo "                UIGeneral.init();
                ";
            }
            // line 86
            echo "                ";
        } else {
            // line 87
            echo "                ";
            if (((isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 87, $this->source); })()) > 0)) {
                // line 88
                echo "                UIGeneral.init();
                ";
            }
            // line 90
            echo "                ";
        }
        // line 91
        echo "            });
        </script>

        ";
        // line 94
        $this->displayBlock('pagescript', $context, $blocks);
        // line 96
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 94
    public function block_pagescript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        // line 95
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 101
        echo "    <body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/MagosArtesanos.png"), "html", null, true);
        echo "\" alt=\"Logo Sitio\"
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
            echo "                    ";
            if (((isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 121, $this->source); })()) > 0)) {
                // line 122
                echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                                <i id=\"pulsate-regular\" class=\"far fa-bell\"></i>
                                <span class=\"badge badge-dark navbar-badge\">";
                // line 125
                echo twig_escape_filter($this->env, (isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 125, $this->source); })()), "html", null, true);
                echo "</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                                ";
                // line 128
                if (((isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 128, $this->source); })()) == 1)) {
                    // line 129
                    echo "                                    <span class=\"dropdown-item dropdown-header\">";
                    echo twig_escape_filter($this->env, (isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 129, $this->source); })()), "html", null, true);
                    echo " Notificación</span>
                                ";
                } else {
                    // line 131
                    echo "                                    <span class=\"dropdown-item dropdown-header\">";
                    echo twig_escape_filter($this->env, (isset($context["totalNotificacionesAdmin"]) || array_key_exists("totalNotificacionesAdmin", $context) ? $context["totalNotificacionesAdmin"] : (function () { throw new RuntimeError('Variable "totalNotificacionesAdmin" does not exist.', 131, $this->source); })()), "html", null, true);
                    echo " Notificaciones</span>
                                ";
                }
                // line 133
                echo "                                <div class=\"dropdown-divider\"></div>
                                ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notificacionesAdmin"]) || array_key_exists("notificacionesAdmin", $context) ? $context["notificacionesAdmin"] : (function () { throw new RuntimeError('Variable "notificacionesAdmin" does not exist.', 134, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                    // line 135
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 135) == 1)) {
                        // line 136
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_user_inactivos", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 136)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-users mr-2\"></i>Usuarios inactivos
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 139
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 139), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 142
$context["notificacion"], "tipo", [], "any", false, false, false, 142) == 2)) {
                        // line 143
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_producto_agotado", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 143)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-copy mr-2\"></i>Productos agotados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 146
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 146), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 149
$context["notificacion"], "tipo", [], "any", false, false, false, 149) == 6)) {
                        // line 150
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_recogida", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 150)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Solicitudes de recogida
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 153
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 153), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 156
$context["notificacion"], "tipo", [], "any", false, false, false, 156) == 3)) {
                        // line 157
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_pago_royal_acumulado", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 157)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-tree mr-2\"></i>Solicitudes de pago
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 160
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 160), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    }
                    // line 164
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "                            </div>
                        </li>
                    ";
            }
            // line 168
            echo "                ";
        } else {
            // line 169
            echo "                    ";
            if (((isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 169, $this->source); })()) > 0)) {
                // line 170
                echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                                <i id=\"pulsate-regular\" class=\"far fa-bell\"></i>
                                <span class=\"badge badge-dark navbar-badge\">";
                // line 173
                echo twig_escape_filter($this->env, (isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 173, $this->source); })()), "html", null, true);
                echo "</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                                ";
                // line 176
                if (((isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 176, $this->source); })()) == 1)) {
                    // line 177
                    echo "                                    <span class=\"dropdown-item dropdown-header\">";
                    echo twig_escape_filter($this->env, (isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 177, $this->source); })()), "html", null, true);
                    echo " Notificación</span>
                                ";
                } else {
                    // line 179
                    echo "                                    <span class=\"dropdown-item dropdown-header\">";
                    echo twig_escape_filter($this->env, (isset($context["totalNotificacionesUser"]) || array_key_exists("totalNotificacionesUser", $context) ? $context["totalNotificacionesUser"] : (function () { throw new RuntimeError('Variable "totalNotificacionesUser" does not exist.', 179, $this->source); })()), "html", null, true);
                    echo " Notificaciones</span>
                                ";
                }
                // line 181
                echo "                                <div class=\"dropdown-divider\"></div>
                                ";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notificacionesUser"]) || array_key_exists("notificacionesUser", $context) ? $context["notificacionesUser"] : (function () { throw new RuntimeError('Variable "notificacionesUser" does not exist.', 182, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                    // line 183
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 183) == 4)) {
                        // line 184
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_pago_royal_acumulado", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 184)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-tree mr-2\"></i>Pagos realizados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 187
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 187), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 190
$context["notificacion"], "tipo", [], "any", false, false, false, 190) == 5)) {
                        // line 191
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_pago_royal_acumulado", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 191)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-times-circle mr-2\"></i>Pagos rechazados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 194
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 194), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 197
$context["notificacion"], "tipo", [], "any", false, false, false, 197) == 7)) {
                        // line 198
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_asignar_producto", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 198)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-copy mr-2\"></i>Productos asignados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 201
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 201), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 204
$context["notificacion"], "tipo", [], "any", false, false, false, 204) == 8)) {
                        // line 205
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_servicios_asignados", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 205)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-wrench mr-2\"></i>Servicios asignados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 208
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 208), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 211
$context["notificacion"], "tipo", [], "any", false, false, false, 211) == 9)) {
                        // line 212
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_recogida", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 212)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Solicitudes aprobadas
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 215
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 215), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 218
$context["notificacion"], "tipo", [], "any", false, false, false, 218) == 10)) {
                        // line 219
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_retiros_saldos_acumulados", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 219)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Retiros saldos
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 222
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 222), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 225
$context["notificacion"], "tipo", [], "any", false, false, false, 225) == 11)) {
                        // line 226
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_solicitar_recogida", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 226)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Solicitudes rechazadas
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 229
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 229), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 232
$context["notificacion"], "tipo", [], "any", false, false, false, 232) == 12)) {
                        // line 233
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_producto_agotado_user", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 233)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Productos agotados
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 236
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 236), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 239
$context["notificacion"], "tipo", [], "any", false, false, false, 239) == 13)) {
                        // line 240
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notificaciones_ingresos_saldos_acumulados", ["tipo" => twig_get_attribute($this->env, $this->source, $context["notificacion"], "tipo", [], "any", false, false, false, 240)]), "html", null, true);
                        echo "\"
                                           class=\"dropdown-item\">
                                            <i class=\"fas fa-paperclip mr-2\"></i>Ingresos saldos
                                            <span class=\"float-right text-muted text-sm\">";
                        // line 243
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notificacion"], "cant", [], "any", false, false, false, 243), "html", null, true);
                        echo "</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                    ";
                    }
                    // line 247
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 248
                echo "                            </div>
                        </li>
                    ";
            }
            // line 251
            echo "                ";
        }
        // line 252
        echo "            </ul>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [], "any", false, false, false, 265), "id", [], "any", false, false, false, 265)]), "html", null, true);
        echo "\" class=\"dropdown-item\">
                            <i class=\"fa fa-user-edit\"> Perfil</i>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_form_new", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "user", [], "any", false, false, false, 269), "id", [], "method", false, false, false, 269)]), "html", null, true);
        echo "\" class=\"dropdown-item\">
                            <i class=\"fa fa-cog\"> Cambiar contraseña</i>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 273
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"dropdown-item\">
                            <i class=\"fa fa-cog\"> Salir</i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav align-items-center  ml-auto ml-md-0 \">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link pr-0\" href=\"";
        // line 281
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ayuda_index");
        echo "\" role=\"button\" aria-haspopup=\"true\"
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306), "avatar", [], "any", false, false, false, 306)) {
            // line 307
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 307, $this->source); })()), "user", [], "any", false, false, false, 307), "id", [], "any", false, false, false, 307)]), "html", null, true);
            echo "\">
                            <div class=\"image\">
                                <img
                                        src=\"";
            // line 310
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 310, $this->source); })()), "user", [], "any", false, false, false, 310), "avatar", [], "any", false, false, false, 310))), "html", null, true);
            echo "\"
                                        style=\"background-color: white;\"
                                        class=\"img-circle elevation-2\"
                                        alt=\"User Image\">
                            </div>
                        </a>
                    ";
        }
        // line 317
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
        echo "\">
                        <div class=\"info\">
                            <a href=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_form_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "id", [], "any", false, false, false, 319)]), "html", null, true);
        echo "\"
                               class=\"d-block\">";
        // line 320
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "user", [], "any", false, false, false, 320), "nombre", [], "any", false, false, false, 320)) . " ") . twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "user", [], "any", false, false, false, 320), "apellidos", [], "any", false, false, false, 320))), "html", null, true);
        echo "</a>
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
            echo "                            ";
            if (((isset($context["resumen"]) || array_key_exists("resumen", $context) ? $context["resumen"] : (function () { throw new RuntimeError('Variable "resumen" does not exist.', 332, $this->source); })()) == 1)) {
                // line 333
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 334
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 342
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 343
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 351
            echo "                        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 352
            echo "                            ";
            if (((isset($context["resumen"]) || array_key_exists("resumen", $context) ? $context["resumen"] : (function () { throw new RuntimeError('Variable "resumen" does not exist.', 352, $this->source); })()) == 1)) {
                // line 353
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 354
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 362
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 363
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 371
            echo "                        ";
        }
        // line 372
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 373
            echo "                        ";
        } else {
            // line 374
            echo "                            ";
            if (((isset($context["asignarp"]) || array_key_exists("asignarp", $context) ? $context["asignarp"] : (function () { throw new RuntimeError('Variable "asignarp" does not exist.', 374, $this->source); })()) == 1)) {
                // line 375
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 376
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignar_producto");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fa fa-copy\"></i>
                                        <p>
                                            Mis Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 384
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 385
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignar_producto");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-copy\"></i>
                                        <p>
                                            Mis Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 393
            echo "                        ";
        }
        // line 394
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 395
            echo "                        ";
        } else {
            // line 396
            echo "                            ";
            if (((isset($context["asignars"]) || array_key_exists("asignars", $context) ? $context["asignars"] : (function () { throw new RuntimeError('Variable "asignars" does not exist.', 396, $this->source); })()) == 1)) {
                // line 397
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 398
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicios_asignados");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-wrench\"></i>
                                        <p>
                                            Mis Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 406
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 407
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicios_asignados");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-wrench\"></i>
                                        <p>
                                            Mis Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 415
            echo "                        ";
        }
        // line 416
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 417
            echo "                            ";
            if (((isset($context["empres"]) || array_key_exists("empres", $context) ? $context["empres"] : (function () { throw new RuntimeError('Variable "empres" does not exist.', 417, $this->source); })()) == 1)) {
                // line 418
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 419
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-archive\"></i>
                                        <p>
                                            Empresa
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 427
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 428
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-archive\"></i>
                                        <p>
                                            Empresa
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 436
            echo "                        ";
        }
        // line 437
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 438
            echo "                        ";
        } else {
            // line 439
            echo "                            ";
            if (((isset($context["ventas"]) || array_key_exists("ventas", $context) ? $context["ventas"] : (function () { throw new RuntimeError('Variable "ventas" does not exist.', 439, $this->source); })()) == 1)) {
                // line 440
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 441
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ventas");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-shopping-cart\"></i>
                                        <p>
                                            Mis Ventas
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 449
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 450
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ventas");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-shopping-cart\"></i>
                                        <p>
                                            Mis Ventas
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 458
            echo "                        ";
        }
        // line 459
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 460
            echo "                            ";
            if (((isset($context["usuar"]) || array_key_exists("usuar", $context) ? $context["usuar"] : (function () { throw new RuntimeError('Variable "usuar" does not exist.', 460, $this->source); })()) == 1)) {
                // line 461
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 462
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Activos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 470
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 471
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Activos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 479
            echo "                        ";
        }
        // line 480
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 481
            echo "                            ";
            if (((isset($context["usuarI"]) || array_key_exists("usuarI", $context) ? $context["usuarI"] : (function () { throw new RuntimeError('Variable "usuarI" does not exist.', 481, $this->source); })()) == 1)) {
                // line 482
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 483
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_inactivos");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Inactivos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 491
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 492
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_inactivos");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-users\"></i>
                                        <p>
                                            Usuarios Inactivos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 500
            echo "                        ";
        }
        // line 501
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 502
            echo "                            ";
            if (((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 502, $this->source); })()) == 1)) {
                // line 503
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 504
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 512
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 513
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 521
            echo "                        ";
        }
        // line 522
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 523
            echo "                            ";
            if (((isset($context["amortizacion"]) || array_key_exists("amortizacion", $context) ? $context["amortizacion"] : (function () { throw new RuntimeError('Variable "amortizacion" does not exist.', 523, $this->source); })()) == 1)) {
                // line 524
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 525
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amortizacion_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 533
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 534
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amortizacion_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 542
            echo "                        ";
        } else {
            // line 543
            echo "                            ";
            if (((isset($context["amortizacionUser"]) || array_key_exists("amortizacionUser", $context) ? $context["amortizacionUser"] : (function () { throw new RuntimeError('Variable "amortizacionUser" does not exist.', 543, $this->source); })()) == 1)) {
                // line 544
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 545
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amortizacion_user_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 553
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 554
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amortizacion_user_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Amortizaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 562
            echo "                        ";
        }
        // line 563
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 564
            echo "                            ";
            if (((isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 564, $this->source); })()) == 1)) {
                // line 565
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 566
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-wrench\"></i>
                                        <p>
                                            Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 574
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 575
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicio_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-wrench\"></i>
                                        <p>
                                            Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 583
            echo "                        ";
        }
        // line 584
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 585
            echo "                            ";
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 585, $this->source); })()) == 1)) {
                // line 586
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 587
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Packs de Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 595
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 596
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Packs de Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 604
            echo "                        ";
        }
        // line 605
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 606
            echo "                            ";
            if (((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 606, $this->source); })()) == 1)) {
                // line 607
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 608
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_productos_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 616
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 617
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_productos_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Productos
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 625
            echo "                        ";
        }
        // line 626
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 627
            echo "                            ";
            if (((isset($context["vs"]) || array_key_exists("vs", $context) ? $context["vs"] : (function () { throw new RuntimeError('Variable "vs" does not exist.', 627, $this->source); })()) == 1)) {
                // line 628
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 629
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicios_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 637
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 638
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicios_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas de Servicios
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 646
            echo "                        ";
        }
        // line 647
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 648
            echo "                            ";
            if (((isset($context["canceladas"]) || array_key_exists("canceladas", $context) ? $context["canceladas"] : (function () { throw new RuntimeError('Variable "canceladas" does not exist.', 648, $this->source); })()) == 1)) {
                // line 649
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 650
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ventas_canceladas");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas Canceladas
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 658
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 659
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ventas_canceladas");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-table\"></i>
                                        <p>
                                            Ventas Canceladas
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 667
            echo "                        ";
        }
        // line 668
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 669
            echo "                            ";
            if (((isset($context["royaltiesp"]) || array_key_exists("royaltiesp", $context) ? $context["royaltiesp"] : (function () { throw new RuntimeError('Variable "royaltiesp" does not exist.', 669, $this->source); })()) == 1)) {
                // line 670
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 671
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
                echo "\"
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
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 681
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Liquidar Pago Royalties
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 689
            echo "                        ";
        } else {
            // line 690
            echo "                            ";
            if (((isset($context["royaltiesp"]) || array_key_exists("royaltiesp", $context) ? $context["royaltiesp"] : (function () { throw new RuntimeError('Variable "royaltiesp" does not exist.', 690, $this->source); })()) == 1)) {
                // line 691
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 692
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
                echo "\"
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
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 702
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_pago_royal_acumulado_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Mis Solicitudes de Pago
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 710
            echo "                        ";
        }
        // line 711
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 712
            echo "                        ";
        } else {
            // line 713
            echo "                            ";
            if (((isset($context["direcc"]) || array_key_exists("direcc", $context) ? $context["direcc"] : (function () { throw new RuntimeError('Variable "direcc" does not exist.', 713, $this->source); })()) == 1)) {
                // line 714
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 715
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_direccion_index");
                echo "\"
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
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 725
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_direccion_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Mi Dirección de Recogida
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 733
            echo "                        ";
        }
        // line 734
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 735
            echo "                            ";
            if (((isset($context["retir"]) || array_key_exists("retir", $context) ? $context["retir"] : (function () { throw new RuntimeError('Variable "retir" does not exist.', 735, $this->source); })()) == 1)) {
                // line 736
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 737
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_retiros_saldos_acumulados");
                echo "\"
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
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 747
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_retiros_saldos_acumulados");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-tree\"></i>
                                        <p>
                                            Distribución Royalties
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 755
            echo "                        ";
        }
        // line 756
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 757
            echo "                            ";
            if (((isset($context["recogida"]) || array_key_exists("recogida", $context) ? $context["recogida"] : (function () { throw new RuntimeError('Variable "recogida" does not exist.', 757, $this->source); })()) == 1)) {
                // line 758
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 759
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Solicitud de Recogidas
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 767
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 768
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Solicitud de Recogidas
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 776
            echo "                        ";
        } else {
            // line 777
            echo "                            ";
            if (((isset($context["recogida"]) || array_key_exists("recogida", $context) ? $context["recogida"] : (function () { throw new RuntimeError('Variable "recogida" does not exist.', 777, $this->source); })()) == 1)) {
                // line 778
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 779
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Mis Solicitudes de Recogida
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 787
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 788
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Mis Solicitudes de Recogida
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 796
            echo "                        ";
        }
        // line 797
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 798
            echo "                            ";
            if (((isset($context["productAgot"]) || array_key_exists("productAgot", $context) ? $context["productAgot"] : (function () { throw new RuntimeError('Variable "productAgot" does not exist.', 798, $this->source); })()) == 1)) {
                // line 799
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 800
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_agotado_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 808
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 809
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_agotado_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 817
            echo "                        ";
        } else {
            // line 818
            echo "                            ";
            if (((isset($context["productAgot"]) || array_key_exists("productAgot", $context) ? $context["productAgot"] : (function () { throw new RuntimeError('Variable "productAgot" does not exist.', 818, $this->source); })()) == 1)) {
                // line 819
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 820
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_agotado_user");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Mis Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 828
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 829
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_agotado_user");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-copy\"></i>
                                        <p>
                                            Mis Productos Agotados
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 837
            echo "                        ";
        }
        // line 838
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 839
            echo "                        ";
        } else {
            // line 840
            echo "                            ";
            if (((isset($context["buy"]) || array_key_exists("buy", $context) ? $context["buy"] : (function () { throw new RuntimeError('Variable "buy" does not exist.', 840, $this->source); })()) == 1)) {
                // line 841
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 842
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metodo_de_pago");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fa fa-credit-card\"></i>
                                        <p>
                                            Mis Formas de Pago
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 850
                echo "                                <li class=\"nav-item has-treeview\">
                                    <a href=\"";
                // line 851
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metodo_de_pago");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fa fa-credit-card\"></i>
                                        <p>
                                            Mis Formas de Pago
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 859
            echo "                        ";
        }
        // line 860
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 861
            echo "                            ";
            if (((isset($context["estad"]) || array_key_exists("estad", $context) ? $context["estad"] : (function () { throw new RuntimeError('Variable "estad" does not exist.', 861, $this->source); })()) == 1)) {
                // line 862
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 863
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_estado_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Estado de cuentas
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 871
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 872
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_estado_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Estado de cuentas
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 880
            echo "                        ";
        } else {
            // line 881
            echo "                            ";
            if (((isset($context["estadUser"]) || array_key_exists("estadUser", $context) ? $context["estadUser"] : (function () { throw new RuntimeError('Variable "estadUser" does not exist.', 881, $this->source); })()) == 1)) {
                // line 882
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 883
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_estado_user_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Estados de cuentas
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 891
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 892
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_estado_user_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-dollar-sign\"></i>
                                        <p>
                                            Mis Estados de cuentas
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 900
            echo "                        ";
        }
        // line 901
        echo "                        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 902
            echo "                            ";
            if (((isset($context["hist"]) || array_key_exists("hist", $context) ? $context["hist"] : (function () { throw new RuntimeError('Variable "hist" does not exist.', 902, $this->source); })()) == 1)) {
                // line 903
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 904
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historial_retiro_saldo_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Retiro Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 912
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 913
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historial_retiro_saldo_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Retiro Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 921
            echo "                        ";
        }
        // line 922
        echo "                        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 923
            echo "                            ";
            if (((isset($context["ing"]) || array_key_exists("ing", $context) ? $context["ing"] : (function () { throw new RuntimeError('Variable "ing" does not exist.', 923, $this->source); })()) == 1)) {
                // line 924
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 925
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ingreso_saldo_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Ingreso Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 933
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 934
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ingreso_saldo_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                        <p>
                                            Ingreso Royalties Realizados
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 942
            echo "                        ";
        }
        // line 943
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 944
            echo "                            ";
            if (((isset($context["tipoNot"]) || array_key_exists("tipoNot", $context) ? $context["tipoNot"] : (function () { throw new RuntimeError('Variable "tipoNot" does not exist.', 944, $this->source); })()) == 1)) {
                // line 945
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 946
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tipo_notificacion_index");
                echo "\" class=\"nav-link active\">
                                        <i class=\"nav-icon fas fa-bell\"></i>
                                        <p>
                                            Notificaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            } else {
                // line 954
                echo "                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 955
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tipo_notificacion_index");
                echo "\" class=\"nav-link\">
                                        <i class=\"nav-icon fas fa-bell\"></i>
                                        <p>
                                            Notificaciones
                                        </p>
                                    </a>
                                </li>
                            ";
            }
            // line 963
            echo "                        ";
        }
        // line 964
        echo "                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        ";
        // line 970
        $this->displayBlock('page', $context, $blocks);
        // line 973
        echo "        <!-- Control Sidebar -->
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

    }

    // line 970
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 971
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1912 => 971,  1905 => 970,  1885 => 973,  1883 => 970,  1875 => 964,  1872 => 963,  1861 => 955,  1858 => 954,  1847 => 946,  1844 => 945,  1841 => 944,  1838 => 943,  1835 => 942,  1824 => 934,  1821 => 933,  1810 => 925,  1807 => 924,  1804 => 923,  1801 => 922,  1798 => 921,  1787 => 913,  1784 => 912,  1773 => 904,  1770 => 903,  1767 => 902,  1764 => 901,  1761 => 900,  1750 => 892,  1747 => 891,  1736 => 883,  1733 => 882,  1730 => 881,  1727 => 880,  1716 => 872,  1713 => 871,  1702 => 863,  1699 => 862,  1696 => 861,  1693 => 860,  1690 => 859,  1679 => 851,  1676 => 850,  1665 => 842,  1662 => 841,  1659 => 840,  1656 => 839,  1653 => 838,  1650 => 837,  1639 => 829,  1636 => 828,  1625 => 820,  1622 => 819,  1619 => 818,  1616 => 817,  1605 => 809,  1602 => 808,  1591 => 800,  1588 => 799,  1585 => 798,  1582 => 797,  1579 => 796,  1568 => 788,  1565 => 787,  1554 => 779,  1551 => 778,  1548 => 777,  1545 => 776,  1534 => 768,  1531 => 767,  1520 => 759,  1517 => 758,  1514 => 757,  1511 => 756,  1508 => 755,  1497 => 747,  1494 => 746,  1482 => 737,  1479 => 736,  1476 => 735,  1473 => 734,  1470 => 733,  1459 => 725,  1456 => 724,  1444 => 715,  1441 => 714,  1438 => 713,  1435 => 712,  1432 => 711,  1429 => 710,  1418 => 702,  1415 => 701,  1403 => 692,  1400 => 691,  1397 => 690,  1394 => 689,  1383 => 681,  1380 => 680,  1368 => 671,  1365 => 670,  1362 => 669,  1359 => 668,  1356 => 667,  1345 => 659,  1342 => 658,  1331 => 650,  1328 => 649,  1325 => 648,  1322 => 647,  1319 => 646,  1308 => 638,  1305 => 637,  1294 => 629,  1291 => 628,  1288 => 627,  1285 => 626,  1282 => 625,  1271 => 617,  1268 => 616,  1257 => 608,  1254 => 607,  1251 => 606,  1248 => 605,  1245 => 604,  1234 => 596,  1231 => 595,  1220 => 587,  1217 => 586,  1214 => 585,  1211 => 584,  1208 => 583,  1197 => 575,  1194 => 574,  1183 => 566,  1180 => 565,  1177 => 564,  1174 => 563,  1171 => 562,  1160 => 554,  1157 => 553,  1146 => 545,  1143 => 544,  1140 => 543,  1137 => 542,  1126 => 534,  1123 => 533,  1112 => 525,  1109 => 524,  1106 => 523,  1103 => 522,  1100 => 521,  1089 => 513,  1086 => 512,  1075 => 504,  1072 => 503,  1069 => 502,  1066 => 501,  1063 => 500,  1052 => 492,  1049 => 491,  1038 => 483,  1035 => 482,  1032 => 481,  1029 => 480,  1026 => 479,  1015 => 471,  1012 => 470,  1001 => 462,  998 => 461,  995 => 460,  992 => 459,  989 => 458,  978 => 450,  975 => 449,  964 => 441,  961 => 440,  958 => 439,  955 => 438,  952 => 437,  949 => 436,  938 => 428,  935 => 427,  924 => 419,  921 => 418,  918 => 417,  915 => 416,  912 => 415,  901 => 407,  898 => 406,  887 => 398,  884 => 397,  881 => 396,  878 => 395,  875 => 394,  872 => 393,  861 => 385,  858 => 384,  847 => 376,  844 => 375,  841 => 374,  838 => 373,  835 => 372,  832 => 371,  821 => 363,  818 => 362,  807 => 354,  804 => 353,  801 => 352,  798 => 351,  787 => 343,  784 => 342,  773 => 334,  770 => 333,  767 => 332,  765 => 331,  751 => 320,  747 => 319,  741 => 317,  731 => 310,  724 => 307,  722 => 306,  694 => 281,  683 => 273,  676 => 269,  669 => 265,  654 => 252,  651 => 251,  646 => 248,  640 => 247,  633 => 243,  626 => 240,  624 => 239,  618 => 236,  611 => 233,  609 => 232,  603 => 229,  596 => 226,  594 => 225,  588 => 222,  581 => 219,  579 => 218,  573 => 215,  566 => 212,  564 => 211,  558 => 208,  551 => 205,  549 => 204,  543 => 201,  536 => 198,  534 => 197,  528 => 194,  521 => 191,  519 => 190,  513 => 187,  506 => 184,  503 => 183,  499 => 182,  496 => 181,  490 => 179,  484 => 177,  482 => 176,  476 => 173,  471 => 170,  468 => 169,  465 => 168,  460 => 165,  454 => 164,  447 => 160,  440 => 157,  438 => 156,  432 => 153,  425 => 150,  423 => 149,  417 => 146,  410 => 143,  408 => 142,  402 => 139,  395 => 136,  392 => 135,  388 => 134,  385 => 133,  379 => 131,  373 => 129,  371 => 128,  365 => 125,  360 => 122,  357 => 121,  355 => 120,  345 => 113,  331 => 101,  324 => 100,  317 => 95,  310 => 94,  303 => 96,  301 => 94,  296 => 91,  293 => 90,  289 => 88,  286 => 87,  283 => 86,  279 => 84,  276 => 83,  274 => 82,  268 => 79,  264 => 78,  258 => 75,  252 => 72,  246 => 69,  241 => 67,  237 => 66,  233 => 65,  229 => 64,  222 => 60,  216 => 57,  211 => 55,  207 => 54,  203 => 52,  201 => 51,  197 => 49,  192 => 47,  187 => 45,  182 => 43,  178 => 41,  171 => 40,  164 => 37,  157 => 36,  150 => 38,  148 => 36,  140 => 31,  134 => 28,  129 => 26,  124 => 24,  119 => 22,  112 => 19,  109 => 17,  103 => 12,  96 => 11,  83 => 7,  76 => 987,  74 => 100,  69 => 97,  67 => 40,  64 => 39,  61 => 11,  55 => 7,  47 => 1,);
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
