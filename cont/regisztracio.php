<?php
    //var_dump($_POST);
    include_once 'Csatlakozas.php';
    $ab = new Csatlakozas();
    $sikerE = $ab->regisztral($_POST['reg_email'], $_POST['reg_szoveg'], $_POST['reg_jelszo']);
    /* echo $sikerE; */
    if($sikerE){
        echo "siker";
    }else{
        echo "nem siker";
    }
?>