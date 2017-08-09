
<style type ="text/css">
        body {color: white; font-family: Georgia, Times; padding-left:2em; background-color: blue}</style>
<?php
// Otros scripts
include("conexion.php");
// Obtiene los datos del formulario
$nombre = filter_input(INPUT_POST, 'nombre');
$apellido = filter_input(INPUT_POST, 'apellido');
// Valida que los campos no esten en blanco
if (!empty($nombre) && !empty($apellido))
{
    // Conecto a la base de datos
    $con = mysqli_connect($host,$user,$pw) or die ("problemas al conectar");
    mysqli_select_db($con,$db) or die ("problema al conectar a la base de datos");
    
    // Sql para insertar datos
    $sql = "INSERT INTO cliente (Nombre,Apellido) VALUES ('$nombre','$apellido')";
    mysqli_query($con, $sql);
    echo "Datos insertados exitosamente";
}
else
{
    echo "No se puede procesar datos en blanco";
}
?>