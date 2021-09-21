<?php
include("conexion1.php");
$con=conectar();

$id_per_aca=$_POST['id_per_aca'];
$nom_per=$_POST['nom_per'];




$sql="INSERT INTO periodo values('$id_per_aca','$nom_per')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: periodo.php");
    
}else {
}
?>