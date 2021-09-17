<?php
require '../../tools/Modal.php';
require '../Modelo/ModeloUsuarios.php';


$modal = new Modal();
$usuarios = new Usuarios();

$id = $_POST['id'];

if ($id) {
    $Usuario = $usuarios->listarUsuarioById($id);
    if ($Usuario) {
        foreach ($Usuario as $Usuario) {
            $id_usuario = $Usuario['id_usuario'];
            $nombre = $Usuario['nombre'];
            $correo = $Usuario['correo'];
            $telefono = $Usuario['telefono'];
            $id_perfil = $Usuario['id_perfil'];
            $nombrePerfil = $Usuario['perfil'];
        }


        $content = "<div class='form-group'>";
        $content .= " <div class='col'>";
        $content .= "     <label for='nombre'>Nombre</label>";
        $content .= "     <input type='text' id='id_usuario' value='$id_usuario' hidden>";
        $content .= "     <input type='text' id='nombreUser' class='form-control' value='$nombre'>";
        $content .= " </div> ";
        $content .= "</div>";
        $content .= "<div class='form-group'>";
        $content .= " <div class='col'>";
        $content .= "     <label for='correo'>Correo</label>";
        $content .= "     <input type='email' id='correoUser' class='form-control' value='$correo'>";
        $content .= " </div> ";
        $content .= "</div>";
        $content .= "<div class='form-group'>";
        $content .= " <div class='col'>";
        $content .= "     <label for='telefono'>Valor de pago</label>";
        $content .= "     <input type='number' id='telefonoUser' class='form-control' value='$telefono'>";
        $content .= " </div> ";
        $content .= "</div>";

        $content .= "<div class='form-group mb-3'>";
        $content .= " <div class='col'>";
        $content .= "     <label for='telefono'>Valor de pago</label>";
        $content .= "     <select name='selectPerfil' id='selectPerfil' class='form-control'>";
        $content .= "     <option value='$id_perfil'>$nombrePerfil</option>";

        $Perfiles = $usuarios->listarPerfiles();
        if ($Perfiles  != null) {
            foreach ($Perfiles as $Perfiles) {
                $perfil = $Perfiles['id_perfil'];
                $perfilName = $Perfiles['perfil'];

                if ($id_perfil != $perfil) {
                    $content .= "     <option value='$perfil'>$perfilName</option>";
                }
            }
        }
        $content .= " </select> ";
        $content .= " </div> ";
        $content .= "</div>";
        $content .= "<div class='form-group'> ";
        $content .= "  <div class='col'>";
        $content .= "    <button type='button' id='btn-update-User' class='btn btn-outline-success btn-block rounded-0' >Actualizar estudiante</button>";
        $content .= " </div> ";
        $content .= "</div>";

        $modal->modalUpdate("Actualizar usuario", $content);
    } else {
        $modal->modalAlerta("danger", "Actualizar usuario", "El usuario no esta en el sistema.");
    }
}
