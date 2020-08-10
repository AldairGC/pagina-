<?php
    require 'bd_bd.php';
    
    $nombre = $_POST['nombreU'];
    $aPaterno = $_POST['Apaterno'];
    $aMaterno = $_POST['Amaterno'];
    $Fnacimiento = $_POST['fechaN'];
    $Enacimiento = $_POST['estadoN'];
    $curp = $_POST['curp'];
    $rfc = $_POST['rfc'];

    $userBD = "id14167982_savenet";
    $passUserBD = "T]|*<S0kckgI/xng";
        
    $obj = new DB('root', 'aldairGC15'); #$userBD, $passUserBD);      
    $validar = $obj->DatasUser($nombre, $aPaterno, $aMaterno, $Fnacimiento, $Enacimiento , $curp, $rfc);
    if ($validar == false)
    {
        header("location: ../datosU/try_datos.php");
    }
    else //verdadero o ningun error 
    {
        header('location: ../datosU/contacto.php');
    }
    
?>
