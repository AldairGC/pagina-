<?php
    require 'bd_bd.php';
    
    $passA = $_POST['passA'];
    $userBD = "root";
    $passUserBD = "aldairGC15";

    $userBD = "id14167982_savenet";
    $passUserBD = "T]|*<S0kckgI/xng";
    
    $obj = new DB('root', 'aldairGC15'); #$userBD, $passUserBD);    
    $validar = $obj->NewPass($passA);
    if ($validar == false)
    {
        header('location: ../login_register.html');
    }
    else //verdadero
    {
        header('location: ../index.php');
    }
    
?>
