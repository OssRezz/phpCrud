<?php

require '../Modelo/ModeloUsuarios.php';
require '../../tools/Modal.php';

$modal = new Modal();
$usuarios = new Usuarios();

$id = $_POST['id'];

if ($usuarios->eliminarUsuario($id)) {

    $modal->modalAlerta("primary", "Eliminar usuario", "El usuario se ha eliminado exitosamente");
} else {

    $modal->modalInfo("danger", "Modal de informacion", "Este usuario no se puede eliminar");
}
