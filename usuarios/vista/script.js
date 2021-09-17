$(document).ready(function () {

    $('#btn-insertar-usuario').click(function () {
        const nombre = $('#nombre').val();
        const apellido = $('#apellido').val();
        const correo = $('#correo').val();
        const telefono = $('#telefono').val();
        const perfil = $('#perfil').val();

        $.post('../control/ctrlInsertarUsuarios.php', {
            nombre: nombre,
            apellido: apellido,
            correo: correo,
            telefono: telefono,
            perfil: perfil
        }, function (responseText) {
            $('#respuesta').html(responseText);
        });
    });


    $(document).click(function (e) {
        let id;
        if (e.target.id === "btn-actualizar-usuario") {

            id = e.target.value;
            $.post('../control/ctrlModalActualizar.php', {
                id: id
            }, function (responseText) {
                $('#respuesta').html(responseText);
            });

        } else if (e.target.id === "btn-update-User") {

            const id_usuario = $('#id_usuario').val();
            const nombreUser = $('#nombreUser').val();
            const correoUser = $('#correoUser').val();
            const telefonoUser = $('#telefonoUser').val();
            const selectPerfil = $('#selectPerfil').val();

            $.post('../control/ctrlActualizarUsuario.php', {

                id_usuario: id_usuario,
                nombreUser: nombreUser,
                correoUser: correoUser,
                telefonoUser: telefonoUser,
                selectPerfil: selectPerfil

            }, function (responseText) {
                $('#respuesta').html(responseText);
            });

        } else if (e.target.id === "btn-eliminar-usuario") {

            id = e.target.value;
            $.post('../control/ctrlModalEliminar.php', {
                id: id
            }, function (responseText) {
                $('#respuesta').html(responseText);
            });

        } else if (e.target.id === "btn-delete-usuario") {

            id = e.target.value;
            $.post('../control/ctrlEliminarUsuario.php', {
                id: id
            }, function (responseText) {
                $('#respuesta').html(responseText);
            });

        }

    });

    $('.alert').alert();

});