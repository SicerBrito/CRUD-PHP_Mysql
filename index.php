<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./img/database.png">
    <title>CRUD_PHP_Mysql</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="app.js" defer type="module"></script>
</head>
<body>

    <header class="encabezado">
        <div class="navbar">
            <div class="logo">
                <h1>CRUD-PHP_MYSQL</h1>
                <button id="openModal1" class="btn btn-success">Iniciar Sesion</button>
                <button id="openModal2" class="btn btn-success">Registrase</button>
            </div>
                <nav>
                    <a href="#">Inicio</a>
                    <a href="#">Tabla</a>
                    <a href="#">Contactanos</a>
                    <a href="./php/comentarios.php">Comentarios</a>
                </nav>
        </div>
    </header>


        <?php include('./php/modals.php'); ?>

        <?php
        // Verificar si hay un mensaje en la URL
        if (isset($_GET['mensaje'])) {
            $mensaje = $_GET['mensaje'];
        ?>
        <!-- Mostrar el modal con el mensaje -->
        <div id="modal" class="modalCentro">
            <div class="modalCentro-content">
                <h3><?php echo $mensaje; ?></h3>
            </div>
        </div>

        <script>
            // JavaScript para mostrar y ocultar el modal
            document.addEventListener("DOMContentLoaded", function() {
                var modal = document.getElementById("modal");
                modal.style.display = "block";
                setTimeout(function() {
                    modal.style.display = "none";
                }, 2000); // Ocultar el modal después de 3 segundos (ajusta el valor según tus necesidades)
            });
        </script>
        <?php } ?>



</body>
</html>