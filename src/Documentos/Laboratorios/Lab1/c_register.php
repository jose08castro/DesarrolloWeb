<?php
    include('ControllerUsuarios.php');
    if(isset($_POST['accept'])){
        $nameF=$_POST['nameF'];
        $lastnameF=$_POST['lastnameF'];
        $usernameF=$_POST['usernameF'];
        $passwordF=$_POST['passwordF'];
        $emailF=$_POST['emailF'];
        $phoneF=$_POST['phoneF'];
        $birthF=$_POST['birthF'];
        $CU = new ControllerUsuarios();
        $CU->register($nameF, $lastnameF, $usernameF, $passwordF, $emailF, $phoneF, $birthF);
    }elseif(isset($_POST['back'])){
        header("Location: index.php");
    }
?>