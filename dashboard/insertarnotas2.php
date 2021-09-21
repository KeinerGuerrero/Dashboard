<?php
include("conexion2.php");
$con=conectar();

$id_per_aca=$_POST['id_per_aca'];
$id_est=$_POST['id_est'];
$id_asig=$_POST['id_asig'];
$v_nota=$_POST['v_nota'];
$id_notas=$_POST['id_notas'];
$id_logro=$_POST['id_logro'];


$sql="INSERT INTO notas values('$id_per_aca','$id_est','$id_asig','$v_nota','$id_notas','$id_logro')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: notas2.php");
    
}else {
}
?>