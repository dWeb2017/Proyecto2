<?php
// Otros scripts
include("conexion.php");
// Conecto a la base de datos
$con = mysqli_connect($host,$user,$pw) or die ("problemas al conectar");
mysqli_select_db($con,$db) or die ("problema al conectar a la base de datos");
// Realiza la consulta
$sql = "SELECT * FROM cliente";
$resultado = mysqli_query($con, $sql);
// Imprime los resultados mientras existan datos
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo $fila['Nombre'];
    echo " ";
    echo $fila['Apellido'];
    echo "</br>";
}
?>