<?php

    include_once 'Csatlakozas';
    $ab = new Csatlakozas();
    $sikerE = $ab->regisztral($_POST['reg_email'], $_POST['reg_szoveg'], $_POST['reg_jelszo']);
    return $sikerE;

?>