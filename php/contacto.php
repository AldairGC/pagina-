<?php
    require 'bd_bd.php';

    $tel1 = $_POST['tel1'];
    $tel2 = $_POST['tel2'];
    $email = $_POST['email'];

    $userBD = "id14167982_savenet";
    $passUserBD = "T]|*<S0kckgI/xng";
    
    $obj = new DB('root', 'aldairGC15'); #$userBD, $passUserBD);        
    $validar = $obj->Dcontactos($tel1, $tel2, $email);
    if ($validar == false)
    {
        header('location: ../datosU/try_contacto.php');
    }
    else //verdadero o ningun error 
    {
        header('location: ../datosU/domicilio.php');
    }
?>
