<?php

include("conexion2.php");
$con=conectar();

$tipo_doc=$_POST['tipo_doc'];
$nom_doc=$_POST['nom_doc'];


$sql="UPDATE tipodoc SET  nom_doc='$nom_doc'  WHERE tipo_doc='$tipo_doc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: documento2.php");
    }
?>