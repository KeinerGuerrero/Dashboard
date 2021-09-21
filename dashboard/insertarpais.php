<?php
include("conexion1.php");
$con=conectar();

$id_pais=$_POST['id_pais'];
$nom_pais=$_POST['nom_pais'];




$sql="INSERT INTO pais values('$id_pais','$nom_pais')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pais.php");
    
}else {
}
?>