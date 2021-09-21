<?php
include("conexion1.php");
$con=conectar();

$id_ciu=$_POST['id_ciu'];
$nom_ciu=$_POST['nom_ciu'];




$sql="INSERT INTO ciudad values('$id_ciu','$nom_ciu')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ciudad.php");
    
}else {
}
?>