$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    let countvpl = 0;
    let countusuarios = 0;
    let countroyalite = 0;
    let Ruta = Routing.generate('obtener_datos');

    $('#masmas').on('click', function () {
        $('#wrapper').append('<div id="borrar">\n' +
            '            <div id="element" class="row"\n' +
            '                 style="width:600px;padding: 5px;border: 1px solid darkgray;margin-left: 5px; ">\n' +
            '                <div class="col-sm-2">\n' +
            '                    <button id="masmas" type="button" class="list_add btn btn-block bg-gradient-success"\n' +
            '                            style="margin-top: 23px;"><i\n' +
            '                                class="fa fa-solid fa-plus"></i>\n' +
            '                    </button>\n' +
            '                </div>\n' +
            '                <div class="col-sm-3" style="margin-top: 23px;">\n' +
            '                    <div class="form-group" data-select2-id="48">\n' +
            '                        <select id="venta_productos_listadoproducto' + countvpl + '" name="productosfull' + countvpl + '" class="form-control select2"\n' +
            '                                style="width: 100%;" data-select2-id="1"\n' +
            '                                tabindex="-1" aria-hidden="true">\n' +
            '                            <option selected="selected">Productos</option>\n' +
            '                        </select>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-sm-3">\n' +
            '                    <div class="form-group">\n' +
            '                        <input id="usuarios' + countusuarios + '" name="usuarios' + countusuarios + '" class="form-control"\n' +
            '                               style="width: 100px; margin-top: 23px;"\n' +
            '                               disabled placeholder="Usuario">\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-sm-2">\n' +
            '                    <div class="form-group">\n' +
            '                        <input id="royaltie' + countroyalite + '" name="royaltie' + countroyalite + '" class="form-control"\n' +
            '                               style="width: 100px; margin-top: 23px;margin-left: -20px"\n' +
            '                               disabled placeholder="Royalties">\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-sm-2">\n' +
            '                    <button onclick="removerows()" type="button" class="list_cancel btn btn-block bg-gradient-danger"\n' +
            '                            style="margin-top: 23px;"><i\n' +
            '                                class="fa fa-solid fa-trash"></i>\n' +
            '                    </button>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '            <div class="results"></div>\n' +
            '        </div>');
        countvpl++;
        countusuarios++;
        countroyalite++;
    })

    $("#venta_productos_listadoproducto").change(function () {
        let seleccionado = $(this).children(":selected").index();
        $("#usuarios").empty();
        $("#royaltie").empty();

        $.ajax({
            data: {'producto': seleccionado},
            dataType: 'json',
            type: 'POST',
            url: Ruta
        }).done(function (r) {
            $.each(r, function (k, v) {
                $("#usuarios").val(v.nombre);
                $("#royaltie").val(v.beneficioxventa);
            })
        });
    })

});

function removerows() {
    $('#borrar').remove();
}

function cargar_productos() {
    let RutaProducto = Routing.generate('obtener_productosall');
    let select = document.getElementsByName("productosfull")[0];

    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: RutaProducto
    }).done(function (r) {
        $(r).each(function (i, v) {
            const option = document.createElement("option");
            option.text = v.nombre;
            select.add(option);
        })
    });
}
window.onload = cargar_productos;


