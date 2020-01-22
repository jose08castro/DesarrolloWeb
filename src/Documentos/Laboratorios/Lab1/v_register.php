<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>

    <meta name="author" content="José Evelio Castro Quesada">
    <meta name="description" content="Funciona como el formulario de registro de usuario (tarea 4).">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./CSS/LR_Style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./JavaScript/register.js"></script>
</head>

<body>
    <div class="container h-100" id="container1-r">
        <div id="containerT">
            <h2><b>Registro</b></h2>
        </div>
        <div class="row h-100 justify-content-center align-items-center" id="container2">
        <form action="c_register.php" method="post" class="col-12" >
                <div class="form-group">
                    <label for="name"><b class="inputs">Nombre(s)</b></label>
                    <input type="text" class="form-control" name="nameF" placeholder="Nombre(s)">
                    <label id="nameFail" class="error"></label>
                </div>
                <div class="form-group">
                    <label for="lastname"><b class="inputs">Apellido(s):</b></label>
                    <input type="text" class="form-control" name="lastnameF" placeholder="Apellido(s)">
                    <label id="lastnameFail" class="error"></label>
                </div>
                <div class="form-group">
                    <label for="username"><b class="inputs">Usuario</b></label>
                    <input type="text" class="form-control" name="usernameF" placeholder="Usuario">
                    <label id="usernameFail" class="error"></label>
                </div>
                <div class="form-group">
                    <label for="password"><b class="inputs">Contraseña</b></label>
                    <input type="password" class="form-control" name="passwordF" placeholder="Contraseña">
                    <label id="passwordFail" class="error"></label>
                </div>
                <div class="form-group">
                    <label for="email"><b class="inputs">Correo</b></label>
                    <input type="email" class="form-control" name="emailF" placeholder="Correo">
                    <label id="emailFail" class="error"></label>
                </div>
                <div class="form-group">
                    <label for="phone"><b class="inputs">Número telefónico</b></label>
                    <input type="text" class="form-control" name="phoneF" placeholder="Número telefónico">
                    <label id="phoneFail" class="error"></label>
                </div>
                <div class="form-group">
                    <label for="birth"><b class="inputs">Fecha de nacimiento</b></label>
                    <input type="date" class="form-control" name="birthF">
                    <label id="birthFail" class="error"></label>
                </div>
                <input type="submit" class="btn btn-danger b_SignIn" name="back" value="Atrás">
                <input type="submit" class="btn btn-dark b_SignIn" name="accept" value="Aceptar">
            </form>
        </div>
    </div>
</body>

</html>