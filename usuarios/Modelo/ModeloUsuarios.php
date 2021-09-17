<?php

require_once '../../conexion.php';

class Usuarios extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function listarPerfiles()
    {
        $listaPerfiles = null;
        $consulta = $this->db->prepare("SELECT * FROM perfiles");  //cual va hacer la consulta y la base de datos
        $consulta->execute();  //En esta linea ejecutamos la consulta
        while ($aux = $consulta->fetch()) {   //en esta linea le decimos que la informacino va traer va hacer = consulta
            $listaPerfiles[] = $aux;
        }
        return $listaPerfiles;
    }

    public function listarUsuario()
    {
        $listarUsuario = null;
        $consulta = $this->db->prepare("SELECT U.*,P.perfil FROM `usuarios` U
        INNER JOIN perfiles AS P ON P.id_perfil=U.id_perfil");
        $consulta->execute();
        while ($aux = $consulta->fetch()) {
            $listarUsuario[] = $aux;
        }
        return $listarUsuario;
    }

    public function listarUsuarioById($id)
    {
        $listarUsuarioById = null;
        $consulta = $this->db->prepare("SELECT U.*,P.perfil FROM `usuarios` U
        INNER JOIN perfiles AS P ON P.id_perfil=U.id_perfil WHERE id_usuario=:id");
        $consulta->bindParam(":id", $id);
        $consulta->execute();
        while ($aux = $consulta->fetch()) {
            $listarUsuarioById[] = $aux;
        }
        return $listarUsuarioById;
    }

    public function insetarUsuario($nombre, $correo, $telefono, $id_perfil)
    {
        $statement = $this->db->prepare("INSERT INTO `usuarios`(`nombre`, `correo`, `telefono`, `id_perfil`)
         VALUES (:nombre,:correo,:telefono,:id_perfil)");
        $statement->bindParam(":nombre", $nombre);
        $statement->bindParam(":correo", $correo);
        $statement->bindParam(":telefono", $telefono);
        $statement->bindParam(":id_perfil", $id_perfil);
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function actualizarUsuarios($id, $nombre, $correo, $telefono, $id_perfil)
    {
        $statement = $this->db->prepare("UPDATE `usuarios` SET `nombre`=:nombre,`correo`=:correo,`telefono`=:telefono,`id_perfil`=:id_perfil WHERE id_usuario=:id");
        $statement->bindParam(":id", $id);
        $statement->bindParam(":nombre", $nombre);
        $statement->bindParam(":correo", $correo);
        $statement->bindParam(":telefono", $telefono);
        $statement->bindParam(":id_perfil", $id_perfil);
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminarUsuario($id)
    {
        $statement = $this->db->prepare("DELETE FROM `usuarios` WHERE id_usuario= :id");
        $statement->bindParam(':id', $id);
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
