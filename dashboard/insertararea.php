<?php
include("conexion1.php");
$con=conectar();

$id_area=$_POST['id_area'];
$nom_area=$_POST['nom_area'];
$est_area=$_POST['est_area'];


$sql="INSERT INTO areas values('$id_area','$nom_area','$est_area')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: areas.php");
    
}else {
}
?>