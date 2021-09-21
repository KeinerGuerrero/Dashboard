<?php

include("conexion2.php");
$con=conectar();

$id_usu=$_POST['id_usu'];
$nom_usu=$_POST['nom_usu'];
$apel_usu=$_POST['nom_usu'];
$pass_usu=$_POST['apel_usu'];
$per_usu=$_POST['per_usu'];
$est_usu=$_POST['est_usu'];

$sql="UPDATE usuarios SET  nom_usu='$nom_usu', apel_usu='$apel_usu', pass_usu='$pass_usu', per_usu='$per_usu', est_usu='$est_usu'  WHERE id_usu='$id_usu'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario2.php");
    }
?>