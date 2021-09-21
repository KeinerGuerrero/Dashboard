<?php

include("conexion1.php");
$con=conectar();

$id_doc=$_POST['id_doc'];
$tipo_doc=$_POST['tipo_doc'];
$nom_doc=$_POST['nom_doc'];
$ap_doc=$_POST['ap_doc'];
$gen_doc=$_POST['gen_doc'];
$direc_doc=$_POST['direc_doc'];
$ed_doc=$_POST['ed_doc'];
$tel_doc=$_POST['tel_doc'];
$emdoc=$_POST['emdoc'];
$id_pais=$_POST['id_pais'];
$id_ciu=$_POST['id_ciu'];
$id_area=$_POST['id_area'];
$id_asig=$_POST['id_asig'];

$sql="UPDATE docentes SET  tipo_doc='$tipo_doc', nom_doc='$nom_doc', ap_doc='$ap_doc', gen_doc='$gen_doc', direc_doc='$direc_doc', ed_doc='$ed_doc', tel_doc='$tel_doc', emdoc='$emdoc', id_pais='$id_pais', id_ciu='$id_ciu', id_area='$id_area', id_asig='$id_asig'  WHERE id_doc='$id_doc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: docentes1.php");
    }
?>