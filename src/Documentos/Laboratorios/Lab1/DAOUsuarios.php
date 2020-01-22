<?php
    include("ValidacionUsuarios.php");
    class DAOUsuarios {
    // Properties
    private $nameF;
    private $lastnameF;
    private $usernameF;
    private $passwordF;
    private $emailF;
    private $phoneF;
    private $birthF;

    // Methods
    function set_name($name) {
        $this->nameF = $name;
    }
    function set_lastname($lastaname) {
        $this->lastnameF = $lastaname;
    }
    function set_username($username) {
        $this->usernameF = $username;
    }
    function set_password($password) {
        $this->passwordF = $password;
    }
    function set_email($email) {
        $this->emailF = $email;
    }
    function set_phone($phone) {
        $this->phoneF = $phone;
    }
    function set_birth($birth) {
        $this->birthF = $birth;
    }

    function get_name() {
        return $this->nameF;
    }

    function get_lastname() {
        return $this->lastnameF;
    }

    function get_username() {
        return $this->usernameF;
    }

    function get_password() {
        return $this->passwordF;
    }

    function get_email() {
        return $this->emailF;
    }

    function get_phone() {
        return $this->phoneF;
    }

    function get_birth() {
        return $this->birthF;
    }

    function connection($servername, $username, $password, $database){
        $conn = new mysqli($servername, $username, $password, $database);
	    // Revisar conexión
	    if ($conn->connect_error) {
		    die("Conexión fallida: " . $conn->connect_error);
	    }
        // echo "Conexión exitosa";
        return $conn;
    }

    function session_start($usernameF, $passwordF){
        $conn = $this->connection("localhost", "root", "", "lab_1");
        $sql=mysqli_query($conn,"SELECT * FROM usuario WHERE usuario='$usernameF'");
        $VU = new ValidacionUsuarios();
        $VU->check_index($sql, $passwordF);
        $conn->close();
    }

    function new_password($usernameF, $passwordF, $newPasswordF, $newPasswordFComprobation){
        $conn = $this->connection("localhost", "root", "", "lab_1");
        $sql=mysqli_query($conn,"SELECT * FROM usuario WHERE usuario='$usernameF'");
        $VU = new ValidacionUsuarios();
        if($VU->check_password($sql, $passwordF, $newPasswordF, $newPasswordFComprobation)){
            mysqli_query($conn, "UPDATE usuario SET contrasenna = '$newPasswordF' WHERE usuario='$usernameF'");
            echo "<script type='text/javascript'>alert('Contraseña cambiada con éxito')</script>";
            echo "<script>window.history.back();</script>";
        }
        $conn->close();
    }

    function new_user($nameF, $lastnameF, $usernameF, $passwordF, $emailF, $phoneF, $birthF){
        $conn = $this->connection("localhost", "root", "", "lab_1");
        $sql=mysqli_query($conn,"SELECT * FROM usuario WHERE usuario='$usernameF' or correo='$emailF'");
        $VU = new ValidacionUsuarios();
        if($VU->check_register($sql, $passwordF)){
            $sql = "INSERT INTO usuario(nombre, apellido, usuario, contrasenna, correo, numero, fechaNacimiento, ID) VALUES ('$nameF', '$lastnameF', '$usernameF', '$passwordF', '$emailF', '$phoneF', '$birthF', NULL)";            
            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>alert('Nuevo usuario registrado con ÉXITO')</script>";
                echo "<script>window.history.back();</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();
    }

    function send_email($to){
        $subject = "Recuperación de contraseña";
        $txt = "Su nueva contraseña es: ZYxw1234";
        $headers = "From: evelio08castro@gmail.com";
        mail($to, $subject, $txt, $headers);
    }

    }
?>