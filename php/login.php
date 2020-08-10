<?php
    require 'bd_bd.php';

    $user = $_POST['userName'];
    $password = $_POST['userPw'];

    $userBD = "id14167982_savenet";
    $passUserBD = "T]|*<S0kckgI/xng";

    $obj = new DB('root', 'aldairGC15'); #$userBD, $passUserBD);     
    $validar = $obj->validar_user($user, $password);
    if ($validar == false)
    {
        header('location: ../datosU/try_login.html'); 
    }
    else //verdadero
    {
        header('Location: ../index.php');
    }
?>


