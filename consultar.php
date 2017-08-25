<?php
// Otros scripts
include("conexion.php");
include("estilo1.css");
// Conecto a la base de datos
$con = mysqli_connect($host,$user,$pw) or die ("problemas al conectar");
mysqli_select_db($con,$db) or die ("problema al conectar a la base de datos");
// Realiza la consulta
$sql = "SELECT * FROM productos";
$resultado = mysqli_query($con, $sql);
// Imprime los resultados mientras existan datos
while ($fila = mysqli_fetch_assoc($resultado)) 
        {
    echo $fila['id'];
    echo " ";
    echo $fila['descripcion'];
    echo "</br>";
}
?>
<br> <br>
          <form action="index.php" method="post" name="return">
          <input type="submit" value="REGRESAR!" />
        </form>
