<?php
require '../../tools/Alert.php';
require '../../tools/Modal.php';
require '../Modelo/ModeloUsuarios.php';

$alert = new Alerta();
$modal = new Modal();
$usuarios = new Usuarios();

$nombre = $_POST['nombre'] . " " . $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$id_perfil = $_POST['perfil'];



if (empty($nombre) != 1  && empty($correo) != 1 && empty($telefono) != 1) {

    if ($usuarios->insetarUsuario($nombre, $correo, $telefono, $id_perfil)) {
        $alert->alertGuacamole("success", "El usuario se inserto exitosamente");
        // $modal->modalAlerta("primary", "Insercion exitosa", "El usuario se inserto exitosamente");
    }
} else {
    $modal->modalInfo("primary", "Modal de informacion", "Todos los campos son requeridos.");
}
