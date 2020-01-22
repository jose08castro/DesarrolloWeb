<?php
    include("DAOUsuarios.php");
    class ControllerUsuarios {
        // Properties
        //private $variable;
    
        // Methods
        function session_start($usernameF, $passwordF) {
            $VU = new ValidacionUsuarios();
            $DAO = new DAOUsuarios();
            $VU->check_empty_space($usernameF);
            $VU->check_empty_space($passwordF);
            $DAO->session_start($usernameF, $passwordF);
        }

        function register($nameF, $lastnameF, $usernameF, $passwordF, $emailF, $phoneF, $birthF) {
            $VU = new ValidacionUsuarios();
            $DAO = new DAOUsuarios();
            $VU->check_empty_space($nameF);
            $VU->check_empty_space($lastnameF);
            $VU->check_empty_space($usernameF);
            $VU->check_empty_space($passwordF);
            $VU->check_empty_space($emailF);
            $VU->check_empty_space($phoneF);
            $VU->check_empty_space($birthF);
            $DAO->new_user($nameF, $lastnameF, $usernameF, $passwordF, $emailF, $phoneF, $birthF);
        }

        function password($usernameF, $passwordF, $passwordPF, $passworddPF) {
            $VU = new ValidacionUsuarios();
            $DAO = new DAOUsuarios();
            $VU->check_empty_space($passwordPF);
            $VU->check_empty_space($passworddPF);
            $VU->check_empty_space($usernameF);
            $VU->check_empty_space($passwordF);
            $DAO->new_password($usernameF, $passwordF, $passwordPF, $passworddPF);
        }
        
    }
?>