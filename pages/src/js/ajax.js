// boton ir-arriba ----------------------------------------------
$(document).ready(function () {

    $('.ir-arriba').click(function () {
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.ir-arriba').slideDown(300);
        } else {
            $('.ir-arriba').slideUp(300);
        }
    });
});
/*
-
-
-
*/

//  iniciar inputMask 
$(document).ready(function () {
    $(":input").inputmask();
});

/*
-
-
-
*/

// Formulario Editar Usuario -----------------------------------------
$('#btnUpdateUsuario').click(function () {
    $.ajax({
            url: 'updateUsuario.php',
            type: 'POST',
            data: $('#formUpdateUsuario').serialize(),
        })
        .done(function (res) {
            $('#respuestaUpdateUsuario').html(res)
        })
});

//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdateUsuario").on('click', function () {
    $("#btnUpdateUsuario").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateUsuario").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
//Formulario Asignar Contraseña -----------------------------------------
$('#btnUpdatePass').click(function () {
    $.ajax({
            url: 'updatePass.php',
            type: 'POST',
            data: $('#formUpdatePass').serialize(),
        })
        .done(function (res) {
            $('#respuestaUpdatePass').html(res)
        })
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdatePass").on('click', function () {
    $("#btnUpdatePass").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdatePass").css('visibility', 'visible');
    }, 300000);
});
//Cargar texto al habilitar un chekc
function test() {
    if (document.getElementById("check").checked) {
        document.getElementById("pass").value = "SIN_PASSWORD";
    } else {
        document.getElementById("pass").value = "";
    }
}
/*
-
-
-
*/
// Formulario Eliminar Usuario -----------------------------------------------------
$('.btnBorrarUsuario').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar este usuario? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteUsuario.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudUsuarios.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});
/*
-
-
-
*/
// Formulario Asignar Permisos ------------------------------------------------------------
$(document).ready(function () {
    $('#btnNuevoPermiso').click(function () {
        $.ajax({
                url: 'addNuevoPermiso.php',
                type: 'POST',
                data: $('#formNuevoPermiso').serialize(),
            })
            .done(function (res) {
                $('#respuestaNuevoPermiso').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevoPermiso").on('click', function () {
    $("#btnNuevoPermiso").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoPermiso").css('visibility', 'visible');
    }, 300000);
});
// 
/*
-
-
-
*/
// Formulario Crear Usuario----------------------------------------------------
$(document).ready(function () {
    $('#btnNuevoUsuario').click(function () {
        $.ajax({
                url: 'addNuevoUsuario.php',
                type: 'POST',
                data: $('#formNuevoUsuario').serialize(),
                beforeSend: function () {
                    $('.btnNuevoUsuario').val('Enviando...');
                }
            })
            .done(function (res) {
                $('#respuestaNuevoUsuario').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevoUsuario").on('click', function () {
    $("#btnNuevoUsuario").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoUsuario").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// Actualizar permisos a usuarios --------------------------------------------
$('#btnUpdatePermisoUsuario').click(function () {
    $.ajax({
            url: 'updatePermisoUsuario.php',
            type: 'POST',
            data: $('#formAsigPermUsuario').serialize(),
        })
        .done(function (res) {
            $('#respuestaUpdatePermisoUsuario').html(res)
        })
});

//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdatePermisoUsuario").on('click', function () {
    $("#btnUpdatePermisoUsuario").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdatePermisoUsuario").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/


/*
-
-
-
*/
// Modificar formulario Modulo Inicio
$("form").on("submit", function (e) {
    e.preventDefault();
    var datos = $(this).serializeArray();
    var imagen = new FormData($("#formUpdateImgInicio")[0]);

    $.each(datos, function (key, input) {
        imagen.append(input.name, input.value);
    });
    $.ajax({
            type: 'post',
            url: 'updateImgInicio.php',
            data: imagen,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response != 0) {
                    $('#formUpdateImgInicio')[0].reset();
                } else {
                    $("#fracaso").delay(500).fadeIn("slow");
                }
            }
        })
        .done(function (res) {
            $('#respuestaUpdateImgInicio').html(res)
        })
});
/*
-
-
-
*/


/*
-
-
-
*/

/*
-
-
-
*/

/*
-
-
-
*/

/*
-
-
-
*/

/*
-
-
-
*/


/*
-
-
-
*/

/*
-
-
-
*/

/*
-
-
-
*/