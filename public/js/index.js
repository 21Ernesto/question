function realizarBusquedaTseltal() {
    var query = $('#person_nrodoc').val();
    var _token = $('input[name="_token"]').val();
    var url = $('#person_nrodoc').data('url');

    $.ajax({
        url: url,
        method: "POST",
        data: {
            query: query,
            _token: _token
        },
        success: function(data) {
            $('#person_nrodoc_list').fadeIn();
            $('#person_nrodoc_list').html(data);
        }
    });
}

function rellenarCampos(personData) {

    var parsedData = personData;

    if (parsedData) {
        $('#nombres').val(parsedData.person_name);
        $('#apellido_pate').val(parsedData.person_lastname);
        $('#apellido_mate').val(parsedData.person_firstname);
        $('#contacto').val(parsedData.person_email);
        $('#localidad').val(parsedData.person_addressmain);
        $('#edad').val(parsedData.person_age);
    }

}




$(document).ready(function() {
    $('#buscar').click(function() {
        realizarBusquedaTseltal();
    });

    $('#person_nrodoc').keyup(function(e) {
        var query = $(this).val();
        if (e.keyCode === 13) {
            var _token = $('input[name="_token"]').val();
            var url = $(this).data('url');

            $.ajax({
                url: url,
                method: "POST",
                data: {
                    query: query,
                    _token: _token
                },
                success: function(data) {
                    $('#person_nrodoc_list').fadeIn();
                    $('#person_nrodoc_list').html(data);
                }
            });
        } else {
            $('#person_nrodoc_list').fadeOut();
        }
    });

    $('#person_nrodoc_list').on('click', 'li', function() {
        var personData = $(this).data('person');
        rellenarCampos(personData);
        $('#person_nrodoc_list').fadeOut();
    });
});




// OCULTAR DIV DE INFO
$(document).ready(function() {

    $('#anonimo-no').prop('checked', true);
    $('#seguimiento-si').prop('checked', true);
    $('#div-info').show();

    // Manejar el cambio en los checkboxes
    $('input[name="anonimo"]').change(function() {
        if ($('#anonimo-si').prop('checked')) {
            // Si se selecciona "Sí", ocultar el div
            $('#div-info').hide();
            // Desmarcar el checkbox "No"
            $('#anonimo-no').prop('checked', false);

        } else {
            // Si se selecciona "No", mostrar el div
            $('#div-info').show();
            // Desmarcar el checkbox "Sí"
            $('#anonimo-si').prop('checked', false);


        }
    });
    $('#anonimo-si').click(function() {
        $('#anonimo-no').prop('checked', false);
    });

    $('#anonimo-no').click(function() {
        $('#anonimo-si').prop('checked', false);
    });
});


// MARCAR SOLO UN GENERO
document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll('input[name="genero"]');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            checkboxes.forEach(function (otherCheckbox) {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        });
    });
});

// MARCAR SOLO UN GRUPO
document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll('input[name="grupo"]');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            checkboxes.forEach(function (otherCheckbox) {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        });
    });
});
