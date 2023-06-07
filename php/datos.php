<?php

//!  "localhost" Es el servidor de XAMPP.
//!  "campus" Es el nombre del usuario.
//!  "campus2023" Es el contraseña.
//!  "CRUD-PHP" Nombre de la base de datos.
//!  "or die" En caso de que falle la conexion, me dice que hay un error de conexion.
$conexion = mysqli_connect("localhost","campus","campus2023","CRUD_PHP")or die("Error al conectarse");

echo 'Conectado <br>';

?>