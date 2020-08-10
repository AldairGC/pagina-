<?php
    require 'bd_bd.php';

    $Ncuenta = $_POST['numero_Cuenta'];
    $Nbanco = $_POST['nombre_Banco'];
    $Clave = $_POST['clave'];
    $Beneficiario = $_POST['Beneficiario'];

    $userBD = "id14167982_savenet";
    $passUserBD = "T]|*<S0kckgI/xng";

    $obj = new DB('root', 'aldairGC15'); #$userBD, $passUserBD);    
    $validar = $obj->CuentaB($Ncuenta, $Nbanco, $Clave, $Beneficiario);
    if ($validar == false)
    {
        header('location: ../datosU/try_cuentaB.php');
    }
    else //verdadero
    {
        header('location: ../index.php');
    }

    
?>
