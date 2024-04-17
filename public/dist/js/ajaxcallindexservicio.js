$(function () {

    let Ruta = Routing.generate('app_servicio_index');

    $('#listosv').click(function () {
        var select = document.getElementById("serviciosb");

        $.ajax({
            data: {'servicioindex': select},
            dataType: 'json',
            type: 'POST',
            url: Ruta
        }).done(function (r) {
            console.log(r);
            $(r).each(function (i, v) {
                $("#usuarios").val(v.nombre);
                $("#royaltie").val(v.beneficioxventa);
            })
        });
    })
})