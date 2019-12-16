function checkUser() {
    username = document.getElementById('usernameF').value;
    password = document.getElementById('passwordF').value;
    // date = document.getElementById('dateF').value;
    if ((username == 'Ab12345678') && (password == 'Ab12345678')) {
        document.getElementById('validacion').innerHTML = '';
        alert("Éxito");
    } else {
        document.getElementById('validacion').innerHTML = 'Usuario o contraseña incorrecta';
    }
}