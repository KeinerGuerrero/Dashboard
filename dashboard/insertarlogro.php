<?php
include("conexion1.php");
$con=conectar();

$id_logro=$_POST['id_logro'];
$nom_logro=$_POST['nom_logro'];
$per_logro=$_POST['per_logro'];
$id_ano_esc=$_POST['id_ano_esc'];


$sql="INSERT INTO logros values('$id_logro','$nom_logro','$per_logro','$id_ano_esc')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: logro.php");
    
}else {
}
?>