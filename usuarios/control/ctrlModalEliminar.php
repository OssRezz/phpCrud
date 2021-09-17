<?php
require '../../tools/Modal.php';
require '../Modelo/ModeloUsuarios.php';


$modal = new Modal();
$usuarios = new Usuarios();

$id = $_POST['id'];

if ($id) {
    $Usuario = $usuarios->listarUsuarioById($id);
    foreach ($Usuario as $Usuario) {
        $nombre = $Usuario['nombre'];
    }
    $content = "Seguro que desea eliminar a este usuario: $nombre?";
    $content .= "<div class='form-group mt-5'> ";
    $content .= "  <div class='col d-flex justify-content-end'>";
    $content .= "    <button type='button'  class='btn btn-outline-dark  rounded-0' id='btn-cancelar'>Cancelar</button>";
    $content .= "    <button type='button' id='btn-delete-usuario' value='$id' class='btn btn-outline-primary rounded-0' >Eliminar</button>";
    $content .= " </div> ";
    $content .= "</div>";
    $content .= "<script>$('#btn-cancelar').click(function(){location.reload()});</script>";


    $modal->modalUpdate("Eliminar usuario", $content);
}
