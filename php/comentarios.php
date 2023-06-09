<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/database.png">
    <title>CRUD_PHP_Mysql</title>
    <link rel="stylesheet" href="../css/comentarios.css">
    <script src="./js/main.js" defer type="module"></script>
</head>
<body>

    <?php

    include('datos.php');

    ?>

    <header class="encabezado">
        <div class="navbar">
            <div class="logo">
                <h1></h1>
            </div>
                <nav>
                    <a href="../index.php">Inicio</a>
                    <a href="#">Tabla</a>
                    <a href="#">Contactanos</a>
                    <a href="./php/comentarios.php">Comentarios</a>
                </nav>
        </div>
    </header>

    

    <div class="tabla">
    <h1>Comentarios</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Comentario</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $conexion = mysqli_connect("localhost","campus","campus2023","CRUD_PHP")or die("Error al conectarse");
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conexion, $sql);    //TODO: Almacenamiento de concexion en la tabla.
                
                    while ($mostrar = mysqli_fetch_array($result)) {
                            
                ?>
                                <tr>
                                    <th><?php echo $mostrar ['id']?></th>
                                    <td><?php echo $mostrar ['user']?></td>
                                    <td><?php echo $mostrar ['email']?></td>
                                    <td><?php echo $mostrar ['Comentario']?></td>
                                    <td><button class="btn btn-success" type="submit" name="editar">Editar</button></td>
                                    <td><button class="btn btn-danger" type="submit" name="eliminar">Eliminar</button></td>
                                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>