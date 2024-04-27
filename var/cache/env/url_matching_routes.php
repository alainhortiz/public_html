<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/amortizacion' => [[['_route' => 'app_amortizacion_index', '_controller' => 'App\\Controller\\AmortizacionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/amortizacion/new' => [[['_route' => 'app_amortizacion_new', '_controller' => 'App\\Controller\\AmortizacionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/amortizacion/user' => [[['_route' => 'app_amortizacion_user_index', '_controller' => 'App\\Controller\\AmortizacionController::user'], null, ['GET' => 0], null, false, false, null]],
        '/asignar/producto' => [[['_route' => 'app_asignar_producto', '_controller' => 'App\\Controller\\AsignarProductoController::index'], null, null, null, false, false, null]],
        '/ayuda' => [[['_route' => 'app_ayuda_index', '_controller' => 'App\\Controller\\AyudaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ayuda/new' => [[['_route' => 'app_ayuda_new', '_controller' => 'App\\Controller\\AyudaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/bizum' => [[['_route' => 'app_bizum_index', '_controller' => 'App\\Controller\\BizumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bizum/new' => [[['_route' => 'app_bizum_new', '_controller' => 'App\\Controller\\BizumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/direccion' => [[['_route' => 'app_direccion_index', '_controller' => 'App\\Controller\\DireccionRecogidaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/direccion/insert' => [[['_route' => 'app_direccion_new', '_controller' => 'App\\Controller\\DireccionRecogidaController::insert'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/direccion/update' => [[['_route' => 'app_direccion_update', '_controller' => 'App\\Controller\\DireccionRecogidaController::update'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/empresa' => [[['_route' => 'app_empresa_index', '_controller' => 'App\\Controller\\EmpresaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/empresa/new' => [[['_route' => 'app_empresa_new', '_controller' => 'App\\Controller\\EmpresaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/estado' => [[['_route' => 'app_estado_index', '_controller' => 'App\\Controller\\EstadoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/estado/user' => [[['_route' => 'app_estado_user_index', '_controller' => 'App\\Controller\\EstadoController::user'], null, ['GET' => 0], null, false, false, null]],
        '/historial/retiro/saldo' => [[['_route' => 'app_historial_retiro_saldo_index', '_controller' => 'App\\Controller\\HistorialRetiroSaldoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ingresos/saldos' => [[['_route' => 'app_ingreso_saldo_index', '_controller' => 'App\\Controller\\IngresosSaldosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ingresos/saldos/newFicheroIngreso' => [[['_route' => 'app_fichero_ingreso', '_controller' => 'App\\Controller\\IngresosSaldosController::newFicheroIngreso'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ingresos/saldos/new' => [[['_route' => 'app_ingreso_saldo_acumulado_new', '_controller' => 'App\\Controller\\IngresosSaldosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/metodo_pago' => [[['_route' => 'app_metodo_de_pago', '_controller' => 'App\\Controller\\MetodoDePagoController::index'], null, null, null, true, false, null]],
        '/metodo_pago/listar' => [[['_route' => 'app_metodo_de_pago_user', '_controller' => 'App\\Controller\\MetodoDePagoController::listar'], null, null, null, false, false, null]],
        '/metodo_pago/resultado' => [[['_route' => 'app_metodo_de_pago_resultado', '_controller' => 'App\\Controller\\MetodoDePagoController::resultado'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/metodo_pago/westerunion' => [[['_route' => 'app_metodo_de_pago_westerunion', '_controller' => 'App\\Controller\\MetodoDePagoController::westerunion'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/metodo_pago/paypal' => [[['_route' => 'app_metodo_de_pago_paypal', '_controller' => 'App\\Controller\\MetodoDePagoController::paypal'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/metodo_pago/bizum' => [[['_route' => 'app_metodo_de_pago_bizum', '_controller' => 'App\\Controller\\MetodoDePagoController::bizum'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/metodo_pago/transferencia' => [[['_route' => 'app_metodo_de_pago_transferencia', '_controller' => 'App\\Controller\\MetodoDePagoController::transferencia'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pack' => [[['_route' => 'app_pack_index', '_controller' => 'App\\Controller\\PackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pack/new' => [[['_route' => 'app_pack_new', '_controller' => 'App\\Controller\\PackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pack/insert' => [[['_route' => 'app_pack_insert', '_controller' => 'App\\Controller\\PackController::insert'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/paypal' => [[['_route' => 'app_paypal_index', '_controller' => 'App\\Controller\\PaypalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/paypal/new' => [[['_route' => 'app_paypal_new', '_controller' => 'App\\Controller\\PaypalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/producto/agotado' => [[['_route' => 'app_producto_agotado_index', '_controller' => 'App\\Controller\\ProductoAgotadoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/producto/agotado/user' => [[['_route' => 'app_producto_agotado_user', '_controller' => 'App\\Controller\\ProductoAgotadoController::user'], null, ['GET' => 0], null, false, false, null]],
        '/producto' => [[['_route' => 'app_producto_index', '_controller' => 'App\\Controller\\ProductoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/producto/pdf' => [[['_route' => 'app_producto_list_pdf', '_controller' => 'App\\Controller\\ProductoController::generatePdfListProduct'], null, ['GET' => 0], null, false, false, null]],
        '/producto/misProductos' => [[['_route' => 'app_mis_productos', '_controller' => 'App\\Controller\\ProductoController::misProductos'], null, ['GET' => 0], null, false, false, null]],
        '/producto/formNew' => [[['_route' => 'app_producto_form_new', '_controller' => 'App\\Controller\\ProductoController::formNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/producto/newFichero' => [[['_route' => 'app_producto_fichero', '_controller' => 'App\\Controller\\ProductoController::newFichero'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/producto/new' => [[['_route' => 'app_producto_new', '_controller' => 'App\\Controller\\ProductoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ranking_usuarios' => [[['_route' => 'app_ranking_usuarios', '_controller' => 'App\\Controller\\RankingUsuariosController::index'], null, null, null, false, false, null]],
        '/registro_pagos' => [[['_route' => 'app_registro_pagos', '_controller' => 'App\\Controller\\RegistroPagosController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/reset-password/cambiar' => [[['_route' => 'app_reset_cambiar', '_controller' => 'App\\Controller\\ResetPasswordController::cambiar'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_resumen', '_controller' => 'App\\Controller\\ResumenController::index'], null, null, null, false, false, null]],
        '/productos_obtusuarios' => [[['_route' => 'productos_obtusuarios', '_controller' => 'App\\Controller\\ResumenController::obtusuarios'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/retiros/saldos/acumulados' => [[['_route' => 'app_retiros_saldos_acumulados', '_controller' => 'App\\Controller\\RetirosSaldosAcumuladosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/retiros/saldos/acumulados/newFicheroRetiro' => [[['_route' => 'app_fichero_retiro', '_controller' => 'App\\Controller\\RetirosSaldosAcumuladosController::newFicheroRetiro'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/retiros/saldos/acumulados/new' => [[['_route' => 'app_retiro_saldo_acumulado_new', '_controller' => 'App\\Controller\\RetirosSaldosAcumuladosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/royalties_acumulados' => [[['_route' => 'app_royalties_acumulados', '_controller' => 'App\\Controller\\RoyaltiesAcumuladosController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/servicio' => [[['_route' => 'app_servicio_index', '_controller' => 'App\\Controller\\ServicioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/servicio/misServicios' => [[['_route' => 'app_mis_servicios', '_controller' => 'App\\Controller\\ServicioController::misServicios'], null, ['GET' => 0], null, false, false, null]],
        '/servicio/formNew' => [[['_route' => 'app_servicio_form_new', '_controller' => 'App\\Controller\\ServicioController::formNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/servicio/newFichero' => [[['_route' => 'app_servicio_fichero', '_controller' => 'App\\Controller\\ServicioController::newFichero'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/servicio/new' => [[['_route' => 'app_servicio_new', '_controller' => 'App\\Controller\\ServicioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/servicios_asignados' => [[['_route' => 'app_servicios_asignados', '_controller' => 'App\\Controller\\ServiciosAsignadosController::index'], null, null, null, false, false, null]],
        '/solicitarpago_royalacumulado' => [[['_route' => 'app_solicitar_pago_royal_acumulado_index', '_controller' => 'App\\Controller\\SolicitarPagoRoyalAcumuladoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/solicitarpago_royalacumulado/newFichero' => [[['_route' => 'app_solicitar_pago_royal_acumulado_fichero', '_controller' => 'App\\Controller\\SolicitarPagoRoyalAcumuladoController::newFichero'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/solicitarpago_royalacumulado/newAdjunto' => [[['_route' => 'app_solicitar_pago_royal_acumulado_adjunto', '_controller' => 'App\\Controller\\SolicitarPagoRoyalAcumuladoController::newAdjunto'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/solicitarpago_royalacumulado/new' => [[['_route' => 'app_solicitar_pago_royal_acumulado_new', '_controller' => 'App\\Controller\\SolicitarPagoRoyalAcumuladoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/solicitarpago_royalacumulado/rechazo/aprobar' => [[['_route' => 'app_solicitar_pago_royal_acumulado_aprobar', '_controller' => 'App\\Controller\\SolicitarPagoRoyalAcumuladoController::aprobar'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/solicitarpago_royalacumulado/rechazo/denegar' => [[['_route' => 'app_solicitar_pago_royal_acumulado_rechazar', '_controller' => 'App\\Controller\\SolicitarPagoRoyalAcumuladoController::rechazar'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/solicitar_recogida' => [[['_route' => 'app_solicitar_recogida_index', '_controller' => 'App\\Controller\\SolicitarRecogidaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/solicitar_recogida/insert' => [[['_route' => 'app_solicitar_recogida_insert', '_controller' => 'App\\Controller\\SolicitarRecogidaController::insert'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tipo/notificacion' => [[['_route' => 'app_tipo_notificacion_index', '_controller' => 'App\\Controller\\TipoNotificacionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tipo/notificacion/new' => [[['_route' => 'app_tipo_notificacion_new', '_controller' => 'App\\Controller\\TipoNotificacionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transferencia_bancaria' => [[['_route' => 'app_transferencia_bancaria_index', '_controller' => 'App\\Controller\\TransferenciaBancariaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/transferencia_bancaria/new' => [[['_route' => 'app_transferencia_bancaria_new', '_controller' => 'App\\Controller\\TransferenciaBancariaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/inactivos' => [[['_route' => 'app_user_inactivos', '_controller' => 'App\\Controller\\UserController::inactivos'], null, ['GET' => 0], null, false, false, null]],
        '/user/formRegistro' => [[['_route' => 'app_user_form_registro', '_controller' => 'App\\Controller\\UserController::formRegistro'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/formNew' => [[['_route' => 'app_user_form_new', '_controller' => 'App\\Controller\\UserController::formNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/newFichero' => [[['_route' => 'app_user_fichero', '_controller' => 'App\\Controller\\UserController::newFichero'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/registro' => [[['_route' => 'app_user_registro', '_controller' => 'App\\Controller\\UserController::registro'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/venta_productos' => [[['_route' => 'app_venta_productos_index', '_controller' => 'App\\Controller\\VentaProductosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/venta_productos/new' => [[['_route' => 'app_venta_productos_new', '_controller' => 'App\\Controller\\VentaProductosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/venta_productos/insert' => [[['_route' => 'app_venta_producto_insert', '_controller' => 'App\\Controller\\VentaProductosController::insert'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/venta_servicios/serv' => [[['_route' => 'app_venta_servicios_index', '_controller' => 'App\\Controller\\VentaServiciosController::serv'], null, ['GET' => 0], null, false, false, null]],
        '/venta_servicios/new' => [[['_route' => 'app_venta_servicios_new', '_controller' => 'App\\Controller\\VentaServiciosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/venta_servicios/insert' => [[['_route' => 'app_venta_servicio_insert', '_controller' => 'App\\Controller\\VentaServiciosController::insert'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ventas/canceladas' => [[['_route' => 'app_ventas_canceladas', '_controller' => 'App\\Controller\\VentasCanceladasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ventas' => [[['_route' => 'app_ventas', '_controller' => 'App\\Controller\\VentasController::index'], null, null, null, false, false, null]],
        '/westerunion' => [[['_route' => 'app_westerunion_index', '_controller' => 'App\\Controller\\WesterunionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/westerunion/new' => [[['_route' => 'app_westerunion_new', '_controller' => 'App\\Controller\\WesterunionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ayuda/([^/]++)(?'
                    .'|(*:25)'
                    .'|/edit(*:37)'
                    .'|(*:44)'
                .')'
                .'|/bizum/([^/]++)(?'
                    .'|(*:70)'
                    .'|/edit(*:82)'
                    .'|(*:89)'
                .')'
                .'|/empresa/([^/]++)(?'
                    .'|(*:117)'
                    .'|/edit(*:130)'
                    .'|(*:138)'
                .')'
                .'|/notificaciones/(?'
                    .'|in(?'
                        .'|activos/([^/]++)(*:187)'
                        .'|gresos/saldos/acumulados/([^/]++)(*:228)'
                    .')'
                    .'|producto/agotado/(?'
                        .'|([^/]++)(*:265)'
                        .'|user/([^/]++)(*:286)'
                    .')'
                    .'|s(?'
                        .'|olicitar/(?'
                            .'|recogida/([^/]++)(*:328)'
                            .'|pago/([^/]++)(*:349)'
                        .')'
                        .'|ervicios/asignados/([^/]++)(*:385)'
                    .')'
                    .'|asignar/producto/([^/]++)(*:419)'
                    .'|retiros/saldos/acumulados/([^/]++)(*:461)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|ck/(?'
                            .'|([^/]++)(?'
                                .'|(*:496)'
                                .'|/edit(*:509)'
                            .')'
                            .'|update(*:524)'
                            .'|delete(*:538)'
                        .')'
                        .'|ypal/([^/]++)(?'
                            .'|(*:563)'
                            .'|/edit(*:576)'
                            .'|(*:584)'
                        .')'
                    .')'
                    .'|roducto/(?'
                        .'|agotado/([^/]++)/stock(*:627)'
                        .'|([^/]++)(*:643)'
                        .'|pdf/([^/]++)(*:663)'
                        .'|([^/]++)/(?'
                            .'|edit(*:687)'
                            .'|update(*:701)'
                        .')'
                        .'|delete(*:716)'
                    .')'
                .')'
                .'|/reset\\-password/(?'
                    .'|reset(?:/([^/]++))?(*:765)'
                    .'|([^/]++)/formNew(*:789)'
                .')'
                .'|/s(?'
                    .'|ervicio/(?'
                        .'|([^/]++)(?'
                            .'|(*:825)'
                            .'|/(?'
                                .'|edit(*:841)'
                                .'|update(*:855)'
                            .')'
                        .')'
                        .'|delete(*:871)'
                    .')'
                    .'|olicitar(?'
                        .'|pago_royalacumulado/([^/]++)(?'
                            .'|(*:922)'
                            .'|/edit(*:935)'
                            .'|(*:943)'
                        .')'
                        .'|_recogida/([^/]++)/(?'
                            .'|update(*:980)'
                            .'|rechazar(*:996)'
                        .')'
                    .')'
                .')'
                .'|/t(?'
                    .'|ipo/notificacion/([^/]++)(?'
                        .'|(*:1040)'
                        .'|/edit(*:1054)'
                        .'|(*:1063)'
                    .')'
                    .'|ransferencia_bancaria/([^/]++)(?'
                        .'|(*:1106)'
                        .'|/edit(*:1120)'
                        .'|(*:1129)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1160)'
                        .'|/(?'
                            .'|edit(*:1177)'
                            .'|update(*:1192)'
                        .')'
                    .')'
                    .'|obtener_usuariosall(*:1222)'
                    .'|([^/]++)/(?'
                        .'|activar(*:1250)'
                        .'|emitir(*:1265)'
                        .'|ingreso(*:1281)'
                    .')'
                    .'|delete(*:1297)'
                .')'
                .'|/venta_(?'
                    .'|productos/(?'
                        .'|([^/]++)(*:1338)'
                        .'|delete(*:1353)'
                    .')'
                    .'|servicios/(?'
                        .'|([^/]++)(*:1384)'
                        .'|delete(*:1399)'
                    .')'
                .')'
                .'|/westerunion/([^/]++)(?'
                    .'|(*:1434)'
                    .'|/edit(*:1448)'
                    .'|(*:1457)'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:1494)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'app_ayuda_show', '_controller' => 'App\\Controller\\AyudaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        37 => [[['_route' => 'app_ayuda_edit', '_controller' => 'App\\Controller\\AyudaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        44 => [[['_route' => 'app_ayuda_delete', '_controller' => 'App\\Controller\\AyudaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        70 => [[['_route' => 'app_bizum_show', '_controller' => 'App\\Controller\\BizumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'app_bizum_edit', '_controller' => 'App\\Controller\\BizumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'app_bizum_delete', '_controller' => 'App\\Controller\\BizumController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        117 => [[['_route' => 'app_empresa_show', '_controller' => 'App\\Controller\\EmpresaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        130 => [[['_route' => 'app_empresa_edit', '_controller' => 'App\\Controller\\EmpresaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        138 => [[['_route' => 'app_empresa_delete', '_controller' => 'App\\Controller\\EmpresaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        187 => [[['_route' => 'app_notificaciones_user_inactivos', '_controller' => 'App\\Controller\\NotificacionesController::inactivos'], ['tipo'], ['GET' => 0], null, false, true, null]],
        228 => [[['_route' => 'app_notificaciones_ingresos_saldos_acumulados', '_controller' => 'App\\Controller\\NotificacionesController::ingreso'], ['tipo'], null, null, false, true, null]],
        265 => [[['_route' => 'app_notificaciones_producto_agotado', '_controller' => 'App\\Controller\\NotificacionesController::agotado'], ['tipo'], ['GET' => 0], null, false, true, null]],
        286 => [[['_route' => 'app_notificaciones_producto_agotado_user', '_controller' => 'App\\Controller\\NotificacionesController::agotadoUser'], ['tipo'], ['GET' => 0], null, false, true, null]],
        328 => [[['_route' => 'app_notificaciones_solicitar_recogida', '_controller' => 'App\\Controller\\NotificacionesController::recogida'], ['tipo'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_notificaciones_solicitar_pago_royal_acumulado', '_controller' => 'App\\Controller\\NotificacionesController::acumulado'], ['tipo'], ['GET' => 0], null, false, true, null]],
        385 => [[['_route' => 'app_notificaciones_servicios_asignados', '_controller' => 'App\\Controller\\NotificacionesController::asignados'], ['tipo'], null, null, false, true, null]],
        419 => [[['_route' => 'app_notificaciones_asignar_producto', '_controller' => 'App\\Controller\\NotificacionesController::producto'], ['tipo'], null, null, false, true, null]],
        461 => [[['_route' => 'app_notificaciones_retiros_saldos_acumulados', '_controller' => 'App\\Controller\\NotificacionesController::retiro'], ['tipo'], null, null, false, true, null]],
        496 => [[['_route' => 'app_pack_show', '_controller' => 'App\\Controller\\PackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        509 => [[['_route' => 'app_pack_edit', '_controller' => 'App\\Controller\\PackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        524 => [[['_route' => 'app_pack_update', '_controller' => 'App\\Controller\\PackController::update'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        538 => [[['_route' => 'app_pack_delete', '_controller' => 'App\\Controller\\PackController::delete'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        563 => [[['_route' => 'app_paypal_show', '_controller' => 'App\\Controller\\PaypalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        576 => [[['_route' => 'app_paypal_edit', '_controller' => 'App\\Controller\\PaypalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        584 => [[['_route' => 'app_paypal_delete', '_controller' => 'App\\Controller\\PaypalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        627 => [[['_route' => 'app_producto_agotado_stock', '_controller' => 'App\\Controller\\ProductoAgotadoController::stock'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        643 => [[['_route' => 'app_producto_show', '_controller' => 'App\\Controller\\ProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        663 => [[['_route' => 'app_producto_pdf', '_controller' => 'App\\Controller\\ProductoController::generatePdfProduct'], ['id'], ['GET' => 0], null, false, true, null]],
        687 => [[['_route' => 'app_producto_form_edit', '_controller' => 'App\\Controller\\ProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        701 => [[['_route' => 'app_producto_update', '_controller' => 'App\\Controller\\ProductoController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        716 => [[['_route' => 'app_producto_delete', '_controller' => 'App\\Controller\\ProductoController::delete'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        765 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        789 => [[['_route' => 'app_reset_form_new', '_controller' => 'App\\Controller\\ResetPasswordController::formNew'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        825 => [[['_route' => 'app_servicio_show', '_controller' => 'App\\Controller\\ServicioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        841 => [[['_route' => 'app_servicio_form_edit', '_controller' => 'App\\Controller\\ServicioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        855 => [[['_route' => 'app_servicio_update', '_controller' => 'App\\Controller\\ServicioController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        871 => [[['_route' => 'app_servicio_delete', '_controller' => 'App\\Controller\\ServicioController::delete'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        922 => [[['_route' => 'app_solicitar_pago_royal_acumulado_show', '_controller' => 'App\\Controller\\SolicitarPagoRoyalAcumuladoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        935 => [[['_route' => 'app_solicitar_pago_royal_acumulado_edit', '_controller' => 'App\\Controller\\SolicitarPagoRoyalAcumuladoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        943 => [[['_route' => 'app_solicitar_pago_royal_acumulado_delete', '_controller' => 'App\\Controller\\SolicitarPagoRoyalAcumuladoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        980 => [[['_route' => 'app_solicitar_recogida_update', '_controller' => 'App\\Controller\\SolicitarRecogidaController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        996 => [[['_route' => 'app_solicitar_recogida_rechazar', '_controller' => 'App\\Controller\\SolicitarRecogidaController::rechazar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1040 => [[['_route' => 'app_tipo_notificacion_show', '_controller' => 'App\\Controller\\TipoNotificacionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1054 => [[['_route' => 'app_tipo_notificacion_edit', '_controller' => 'App\\Controller\\TipoNotificacionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1063 => [[['_route' => 'app_tipo_notificacion_delete', '_controller' => 'App\\Controller\\TipoNotificacionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1106 => [[['_route' => 'app_transferencia_bancaria_show', '_controller' => 'App\\Controller\\TransferenciaBancariaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1120 => [[['_route' => 'app_transferencia_bancaria_edit', '_controller' => 'App\\Controller\\TransferenciaBancariaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1129 => [[['_route' => 'app_transferencia_bancaria_delete', '_controller' => 'App\\Controller\\TransferenciaBancariaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1160 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1177 => [[['_route' => 'app_user_form_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1192 => [[['_route' => 'app_user_update', '_controller' => 'App\\Controller\\UserController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1222 => [[['_route' => 'obtener_usuariosall', '_controller' => 'App\\Controller\\UserController::usuariosall'], [], ['POST' => 0], null, false, false, null]],
        1250 => [[['_route' => 'app_user_activar', '_controller' => 'App\\Controller\\UserController::activar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1265 => [[['_route' => 'app_user_emitir', '_controller' => 'App\\Controller\\UserController::emitir'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1281 => [[['_route' => 'app_user_ingreso_saldo', '_controller' => 'App\\Controller\\UserController::ingreso'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1297 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1338 => [[['_route' => 'app_venta_productos_show', '_controller' => 'App\\Controller\\VentaProductosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1353 => [[['_route' => 'app_venta_productos_delete', '_controller' => 'App\\Controller\\VentaProductosController::delete'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1384 => [[['_route' => 'app_venta_servicios_show', '_controller' => 'App\\Controller\\VentaServiciosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1399 => [[['_route' => 'app_venta_servicios_delete', '_controller' => 'App\\Controller\\VentaServiciosController::delete'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1434 => [[['_route' => 'app_westerunion_show', '_controller' => 'App\\Controller\\WesterunionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1448 => [[['_route' => 'app_westerunion_edit', '_controller' => 'App\\Controller\\WesterunionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1457 => [[['_route' => 'app_westerunion_delete', '_controller' => 'App\\Controller\\WesterunionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1494 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
