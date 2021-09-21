<?php
include("conexion1.php");
$con=conectar();

$id_est=$_POST['id_est'];
$tipo_doc=$_POST['tipo_doc'];
$nom_est=$_POST['nom_est'];
$ape_est=$_POST['ape_est'];
$ed_est=$_POST['ed_est'];
$fecnac_est=$_POST['fecnac_est'];
$gen_est=$_POST['gen_est'];
$dir_est=$_POST['dir_est'];
$tel_est=$_POST['tel_est'];
$em_est=$_POST['em_est'];
$id_pais=$_POST['id_pais'];
$id_ciu=$_POST['id_ciu'];
$id_curso=$_POST['id_curso'];


$sql="INSERT INTO estudiantes values('$id_est','$tipo_doc','$nom_est','$ape_est','$ed_est','$fecnac_est','$gen_est','$dir_est','$tel_est','$em_est','$id_pais','$id_ciu','$id_curso')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: estudiantes.php");
    
}else {
}
?>