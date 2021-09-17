<?php
require '../Modelo/ModeloUsuarios.php';

$usuarios = new Usuarios();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Usuarios</title>
</head>

<body>
    <div class="container">

        <div class="row mb-5">
            <div class="col d-flex justify-content-center">
                <h1 class="">Usuarios</h1>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col d-flex justify-content-center">
                <a href="../../index.php" class="btn btn-outline-primary">Inicio</a>
            </div>
        </div>
        <div class="row">
            <div class="col-4 d-flex justify-content-center">

                <div class="card" style="width: 28em;">
                    <div class="card-header text-primary"><i class="fas fa-user-plus"></i> Formularios de usuarios</div>

                    <div class="card-body pb-0">

                        <div class="form-group">
                            <label for="noombre">Nombre</label>
                            <input type="text" id="nombre" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" id="correo" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="number" id="telefono" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="perfil">Perfil</label>
                            <select class="form-control" id="perfil">
                                <?php
                                $Perfiles = $usuarios->listarPerfiles();
                                if ($Perfiles != null) {
                                    foreach ($Perfiles as $listaPerfiles) {
                                ?>
                                        <option value="<?php echo $listaPerfiles['id_perfil'] ?>"><?php echo $listaPerfiles['perfil'] ?></option>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <option disabled selected>no hay datos registrados</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group d-flex justify-content-center mb-5">
                            <button type="button" id="btn-insertar-usuario" class="btn btn-outline-dark">Registrar usuario</button>
                        </div>

                        <div id="respuesta"></div>
                    </div>
                </div>

            </div>

            <div class="col-8">
                <table class="table table-responsive  table-sm table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Perfil</th>
                        <th>Opciones</th>
                    </tr>
                    <tr>
                        <?php
                        $listaUsuario = $usuarios->listarUsuario();
                        if ($listaUsuario != null) {
                            foreach ($listaUsuario as $listaUsuario) {
                        ?>
                                <td><?php echo $listaUsuario['id_usuario'] ?></td>
                                <td><?php echo $listaUsuario['nombre'] ?></td>
                                <td><?php echo $listaUsuario['correo'] ?></td>
                                <td><?php echo $listaUsuario['telefono'] ?></td>
                                <td><?php echo $listaUsuario['perfil'] ?></td>
                                <td class="btn-group">
                                    <button value="<?php echo $listaUsuario['id_usuario'] ?>" id="btn-actualizar-usuario" class="btn btn-link btn-sm"><i class="fas fa-wrench fa-xs" style="pointer-events: none;"></i>Editar</button>
                                    <button value="<?php echo $listaUsuario['id_usuario'] ?>" id="btn-eliminar-usuario" class="btn btn-link"><i class="fas fa-user-minus text-danger" style="pointer-events: none;"></i>Borrar</button>
                                </td>
                    </tr>
            <?php
                            }
                        }
            ?>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>