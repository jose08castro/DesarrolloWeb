<?php
    include('ControllerUsuarios.php');
    $usernameF=$_POST['usernameF'];
    $passwordF=$_POST['passwordF'];
    $CU = new ControllerUsuarios();
    $CU->session_start($usernameF, $passwordF);
?>