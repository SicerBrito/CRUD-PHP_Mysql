<?php

//TODO: En caso de que el servidor falle o este fallando alguna cosa me mostrara los errores (Es opcional).
ini_set('display_errors',1);
error_reporting(E_ALL);

include('./php/datos.php');

//TODO: Creamos variables en las cuales vamos a recibir por el metodo $_POST los datos
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


// TODO: Creamos una variable llamada registro que va a ser a la cual le vamos a insertar lo datos.
$registro = "INSERT INTO `users` (`name`, `user`, `email`, `password`) VALUES ('$nombre','$usuario','$email','$password')"; //TODO: Insertamos en la tabla users valores a cada una de sus columnas (`name`, `user`, `email`, `password`) los datos que sean almacenados en las variables.

$resultado = mysqli_query($conexion, $registro) or die ("Error de registro"); //TODO: Nos va a almacenar todo lo que estamos haciendo en la variable conexion que esta en el archivo datos.php y tambien toca llamar a la variable donde insertamos todos los datos.


mysqli_close($conexion); //TODO: Aqui cerramos la conexion a la base de datos.


// Redireccionar a otro archivo con mensaje
header("Location: ./index.php?mensaje=Registro exitoso");
exit; // Asegurarse de que el código se detenga después de la redirección
?>