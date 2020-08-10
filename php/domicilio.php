<?php
    require 'bd_bd.php';
    
    $calle = $_POST['calle'];
    $numeroE = $_POST['numero'];
    $colonia = $_POST['colonia'];
    $codigoP = $_POST['codigo'];

    $userBD = "id14167982_savenet";
    $passUserBD = "T]|*<S0kckgI/xng";
    
    $obj = new DB('root', 'aldairGC15'); #$userBD, $passUserBD);    
    $validar = $obj->Domicilio($calle, $numeroE, $colonia, $codigoP);
    if ($validar == false)
    {
        header('location: ../datosU/try_domicilio.php');
    }
    else //verdadero
    {
        header('location: ../datosU/cuentaB.php');
    }
    
?>
