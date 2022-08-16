<?php
include_once "Csatlakozas.php";
$abKapcsolat = new Csatlakozas();
$belepes = $abKapcsolat->belepes($_POST['bej_email'],$_POST['bej_jelszo']);
if($belepes){
    header("Location: ../view/to_do.html");
}
else{
    
}
?>