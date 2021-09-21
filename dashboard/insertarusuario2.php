<?php
include("conexion2.php");
$con=conectar();

$id_usu=$_POST['id_usu'];
$nom_usu=$_POST['nom_usu'];
$apel_usu=$_POST['apel_usu'];
$pass_usu=$_POST['pass_usu'];
$per_usu=$_POST['per_usu'];
$est_usu=$_POST['est_usu'];




$sql="INSERT INTO usuarios VALUES ('$id_usu','$nom_usu','$apel_usu','$pass_usu','$per_usu','$est_usu')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario2.php");
    
}else {
}
?>