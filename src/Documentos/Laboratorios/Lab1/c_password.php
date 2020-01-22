<?php
    include('ControllerUsuarios.php');
    if(isset($_POST['sendEmail'])){
        $emailF=$_POST['emailF'];
        echo'<script type="text/javascript">alert("Profesora: la función del correo está creada en el archivo DAOUsuarios, y en c_password está comentada la llamada al mismo. Esto ya que debo tener un servidor de correo en la pc; siento, complicaba de más el ejercicio.");window.location.href="v_password.php";</script>';
        //$DAO = new DAOUsuarios();
        //$DAO->send_email($emailF);
    }elseif(isset($_POST['back'])){
        header("Location: index.php");
    }elseif(isset($_POST['accept'])){
        $usernameF=$_POST['usernameF'];
        $passwordF=$_POST['passwordF'];
        $passwordPF=$_POST['passwordPF'];
        $passworddPF=$_POST['passworddPF'];
        $CU = new ControllerUsuarios();
        $CU->password($usernameF, $passwordF, $passwordPF, $passworddPF);
    }
?>