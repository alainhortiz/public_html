function cargardatos() {
    let fechainicial = document.getElementById("reservationdateinicial").value;
    let fechafinal = document.getElementById('reservationdatefinal').value;
    let ordenar = $('#ordenar').children(":selected").val();
    let paginado = $('#paginado').children(":selected").val();
    let Ruta = Routing.generate('ventas_filtrado');

    $.ajax({
        data: {
            'fechaini': fechainicial.toLocaleString(),
            'fechafin': fechafinal.toLocaleString(),
            'orden': ordenar,
            'tamano': paginado
        },
        dataType: 'json',
        type: 'POST',
        url: Ruta,
    }).done(function (r) {
        console.log('Ya entre en done')
    })
}

function cargar_usuarios() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    let RutaService = Routing.generate('obtener_usuariosall');
    // var select = document.getElementsByName("productosfull")[0];

    $.ajax({
        //data: {'servicio': seleccionado},
        dataType: 'json',
        type: 'POST',
        url: RutaService
    }).done(function (r) {
        $(r).each(function (i, v) {
            var data = {
                id: v.id,
                text: v.nombre + ' ' + v.apellidos,
            };
            var newOption = new Option(data.text, data.id, false, false);
            $('#producto_user').append(newOption);
        })
    });
}

window.onload = cargar_usuarios;

