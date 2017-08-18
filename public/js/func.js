$(document).ready(function () {
    var client_li = $('#clients li');
    if (client_li) {
        $(client_li).on('click', function (e) {
            var clicked = $(e.target),
                data = clicked.data('client-id');

            $('#idcliente').val(data);
        });
    }

    var client_table_solicitud = $('#table_ot').find('tbody tr td button');
    if (client_table_solicitud) {
        $(client_table_solicitud).on('click', function (e) {
            var clicked = $(e.target),
                data = clicked.data('ot-id');
            $('#ot').val(data);
        })
    }

    var table_evaluar= $('#table_sfondos').find('tbody tr td button');
    if (table_evaluar) {
        $(table_evaluar).on('click', function (e) {
            var clicked = $(e.target),
                data = clicked.data('fondo-id');
            $('#idsol').val(data);
        })
    }

    var personal_table_solicitud= $('#table_personal').find('tbody tr td button');
    if (personal_table_solicitud) {
        $(personal_table_solicitud).on('click', function (e) {
            var clicked = $(e.target),
                data = clicked.data('personal-id');
            $('#id_receptor').val(data);
        })
    }

    var registroEgresoAjax = $('#registro_egreso_ajax');
    if (registroEgresoAjax != undefined) {
        registroEgresoAjax.on('submit', function (e) {
            e.preventDefault();
            $(this).find('button[type="submit"]').toggleClass('disabled');

            $.ajax({
                method: "POST",
                async: true,
                url: $(registroEgresoAjax).attr('action'),
                data: $(registroEgresoAjax).serialize(),
                success: function (response) {
                    $(registroEgresoAjax).find('button[type="submit"]').toggleClass('disabled');
                    $('#success_egreso').removeClass('hide').text(response.message);

                    if ($('#nro_solicitud').val()) {
                        $('#patch_modificar_transferir').submit();
                    }

                    setTimeout(function (){
                        location.reload();
                    }, 1000);
                },
                error: function (error) {
                    alert(error.message);
                    $(registroEgresoAjax).find('button[type="submit"]').toggleClass('disabled');
                }
            });
        });
    }

    var regiones = $("#region");
    if (regiones.length) {
        $(regiones).change(function (e) {
            $.get(`../api/provincia/${$(this).val()}`, function (res, status) {
                $("#provincia").empty();

                $.each(res, function (index, value) {
                    $("#provincia").append(`<option value=${value.PV_COD}>${value.PV_DESC}</option>`);
                })
            });
        });

        $("#provincia").change(function (e) {
            $.get(`../api/ciudad/${$(this).val()}`, function (res, status) {
                $("#ciudad").empty();

                $.each(res, function (index, value) {
                    $("#ciudad").append(`<option value=${value.CIU_COD}>${value.CIU_DESC}</option>`);
                })
            });
        })
    }

    var $rubros_div = $("#rubro");
    if ($rubros_div.length) {
        append_what(window.rubros, $rubros_div)

        $rubros_div.on('change', function (e) {
            $el = $("#subrubro");
            $el.empty();
            $valor = $(this).find(':selected').data('val');
            append_what(window.subrubros[$valor], $el);
        });
    }
});

function append_what(array, element) {
    for (i in array) {
        $(element).append(`<option value="${array[i]}" data-val="${i}">${array[i]}</option>`);
    }
}

  $("#documentos").on("show.bs.modal", function(e) {
    var id = $(e.relatedTarget).data('solicitud-id');
    $.get('/verDocumentos/' + id, function( data ) {
      alert(data);
      $(".modal-body").html(data);
    });
});
