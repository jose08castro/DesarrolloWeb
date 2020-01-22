<?php
    class ValidacionUsuarios {
        // Properties
        //private $variable;
    
        // Methods
        function check_index($sql, $passwordF){
            if($fila=mysqli_fetch_assoc($sql)){
                if($passwordF==$fila['contrasenna']){
                    header("Location: v_activeSession.php");
                }else{
                    echo "<script type='text/javascript'>alert('Usuario o contraseña incorrecto')</script>";
                    echo "<script>window.history.back();</script>";
                }
            }else{
                echo "<script type='text/javascript'>alert('Usuario o contraseña incorrecto')</script>";
                echo "<script>window.history.back();</script>";
            }
        }

        function check_password($sql, $passwordF, $newPasswordF, $newPasswordFComprobation){
            if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}.*$/', $newPasswordF)){
                if($fila=mysqli_fetch_assoc($sql)){
                    if($newPasswordF==$newPasswordFComprobation){
                        if($passwordF==$fila['contrasenna']){
                            return true;
                        }else{
                            echo "<script type='text/javascript'>alert('Usuario o contraseña incorrecto')</script>";
                            echo "<script>window.history.back();</script>";
                        }
                    }else{
                        echo "<script type='text/javascript'>alert('Las nuevas contraseñas no concuerdan')</script>";
                        echo "<script>window.history.back();</script>";
                    }
                }else{
                    echo "<script type='text/javascript'>alert('Usuario o contraseña incorrecto')</script>";
                    echo "<script>window.history.back();</script>";
                }
            }else{
                echo "<script type='text/javascript'>alert('La contraseña debe contener una mayúscula, una minúscula, un número y ser de mínimo 8 dígitos')</script>";
                echo "<script>window.history.back();</script>";
            }
        }

        function check_register($sql, $passwordF){
            if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}.*$/', $passwordF)){
                if($fila=mysqli_fetch_assoc($sql)){
                    echo "<script type='text/javascript'>alert('Usuario o correo ya registrados')</script>";
                    echo "<script>window.history.back();</script>";
                }else{
                    return true;
                }
            }else{
                echo "<script type='text/javascript'>alert('La contraseña debe contener una mayúscula, una minúscula, un número y ser de mínimo 8 dígitos')</script>";
                echo "<script>window.history.back();</script>";
            }
        }

        function check_empty_space($space){
            if($space==null){
                echo "<script type='text/javascript'>alert('Ningún espacio puede ser vacío')</script>";
                echo "<script>window.history.back();</script>";
            }
        }


    }
?>