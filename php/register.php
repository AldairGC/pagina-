<?php
    require 'bd_bd.php';
    
    $nameUser = $_POST['USER'];
    $passw = $_POST['PW'];
    $correo = $_POST['EMAIL'];

    $userBD = "id14167982_savenet";
    $passUserBD = "T]|*<S0kckgI/xng";

    $obj = new DB('root', 'aldairGC15'); #$userBD, $passUserBD);     
    $validar = $obj->insert_user($nameUser, $passw, $correo);
    if ($validar == false)
    {
        header('location: ../datosU/try_register.html');    
    }
    else //verdadero
    {
        header('location: ../datosU/datos.php');
    }
?>