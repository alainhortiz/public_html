$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    let Ruta = Routing.generate('obtener_datos_servicios');

    $('#venta_servicios_servicios').change(function () {
        let seleccionado = $(this).children(":selected").val();
        $("#usuarios").empty();
        $("#royaltie").empty();

        $.ajax({
            data: {'servicio': seleccionado},
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

function cargar_servicios() {
    let RutaService = Routing.generate('obtener_serviciosall');
    var select = document.getElementsByName("serviciosfull")[0];
    $.ajax({
        //data: {'servicio': seleccionado},
        dataType: 'json',
        type: 'POST',
        url: RutaService
    }).done(function (r) {
        $(r).each(function (i, v) {
            var data = {
                id: v.id,
                text: v.nombre,
            };
            var newOption = new Option(data.text, data.id, false, false);
            $('#venta_servicios_servicios').append(newOption);
        })
    });
}

window.onload = cargar_servicios;