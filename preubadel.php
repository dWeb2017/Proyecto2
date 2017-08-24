
<?php

include("conexion.php");

$dat = filter_input(INPUT_POST, 'dat');
$con = mysqli_connect($host,$user,$pw) or die ("problemas al conectar");
mysqli_select_db($con,$db) or die ("problema al conectar a la base de datos");
//mysql_select_db("productos"); 


$sql = "delete from productos where id = '$dat'";  
mysqli_query($con, $sql);
    echo "Datos borradps";

?>
