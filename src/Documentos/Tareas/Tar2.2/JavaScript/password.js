function goBack() {
    window.history.back();
}

function sendEmail() {
    var regexEmail = RegExp("^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$");
    email = document.getElementById('emailF').value;
    if (!regexEmail.test(email)) {
        document.getElementById('emailFail').innerHTML = 'El correo debe seguir la estructura: [usuario]@[proveedor].[extensión]';
    } else {
        document.getElementById('emailFail').innerHTML = '';
        //Funcion para enviar correo.
        alert("Correo enviado");
    }
}

function newPassword() {
    var bandera = true;
    var regexPassword = RegExp("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}");
    username = document.getElementById('usernameF').value;
    password = document.getElementById('passwordF').value;
    passwordP = document.getElementById('passwordPF').value;
    passworddP = document.getElementById('passworddPF').value;
    if (username != 'Ab12345678') {
        bandera = false;
        document.getElementById('usernameFail').innerHTML = 'Usuario inexistente';
    } else {
        document.getElementById('usernameFail').innerHTML = '';
    }
    if (password != 'Ab12345678') {
        bandera = false;
        document.getElementById('passwordFail').innerHTML = 'La contraseña actual no pertenece al usuario';
    } else {
        document.getElementById('passwordFail').innerHTML = '';
    }
    if (!regexPassword.test(passwordP)) {
        bandera = false;
        document.getElementById('passwordPFail').innerHTML = 'La contraseña debe contener al menos una mayúscula, minúscula, un número y ser de 8 caractéres de largo';
    } else {
        document.getElementById('passwordPFail').innerHTML = '';
    }
    if (passwordP != passworddP) {
        bandera = false;
        document.getElementById('passwordPFail').innerHTML = 'La nueva contraseña no concuerda con la confirmación';
    }
    if (bandera) {
        alert("Éxito");
    }
}

function emptyData(pData, pElement) {
    element = pElement + 'Fail';
    if (pData == '') {
        document.getElementById(element).innerHTML = 'Éste elemento no puede estar vacío';
    } else {
        document.getElementById(element).innerHTML = '';
    }
}