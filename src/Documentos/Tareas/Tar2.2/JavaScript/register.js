function goBack() {
    window.history.back();
}

function getData() {
    var bandera = true;
    var regexPassword = RegExp("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}");
    var regexEmail = RegExp("^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$");
    var regexPhone = RegExp("^[0-9]*$");
    name = document.getElementById('nameF').value;
    lastname = document.getElementById('lastnameF').value;
    username = document.getElementById('usernameF').value;
    password = document.getElementById('passwordF').value;
    email = document.getElementById('emailF').value;
    phone = document.getElementById('phoneF').value;
    // date = document.getElementById('dateF').value;
    emptyData(name, 'name');
    emptyData(lastname, 'lastname');
    emptyData(username, 'username');
    if (!regexPassword.test(password)) {
        bandera = false;
        document.getElementById('passwordFail').innerHTML = 'La contraseña debe contener al menos una mayúscula, minúscula, un número y ser de 8 caractéres de largo';
    } else {
        emptyData(password, 'password');
    }
    if (!regexEmail.test(email)) {
        bandera = false;
        document.getElementById('emailFail').innerHTML = 'El correo debe seguir la estructura: [usuario]@[proveedor].[extensión]';
    } else {
        emptyData(email, 'email');
    }
    if (!regexPhone.test(phone)) {
        bandera = false;
        document.getElementById('phoneFail').innerHTML = 'Los caractéres válidos son únicamente números';
    } else {
        emptyData(phone, 'phone')
    }
    if (bandera) {
        alert('Éxito');
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