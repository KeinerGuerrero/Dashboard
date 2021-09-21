<?php
include("conexion2.php");
$con=conectar();

$tipo_doc=$_POST['tipo_doc'];
$nom_doc=$_POST['nom_doc'];



$sql="INSERT INTO tipodoc VALUES ('$tipo_doc','$nom_doc')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: documento2.php");
    
}else {
}
?>