<?php
require '../../tools/Modal.php';
require '../Modelo/ModeloUsuarios.php';

$modal = new Modal();
$usuarios = new Usuarios();

$id = $_POST['id_usuario'];
$nombre = $_POST['nombreUser'];
$correo = $_POST['correoUser'];
$telefono = $_POST['telefonoUser'];
$id_perfil = $_POST['selectPerfil'];




if (empty($nombre) != 1  && empty($correo) != 1 && empty($telefono) != 1) {

    if ($usuarios->actualizarUsuarios($id, $nombre, $correo, $telefono, $id_perfil)) {
        $modal->modalAlerta("success", "Actualizacion exitosa", "El usuario se actualizo correctamente");
    }
} else {
    $modal->modalAlerta("danger", "Modal de informacion", "Todos los campos son requeridos.");
}
