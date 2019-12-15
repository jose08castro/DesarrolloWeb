//Arrays de datos:

meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"]
lasemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"]
diassemana = ["lun", "mar", "mié", "jue", "vie", "sáb", "dom"]

window.onload = function() {
    //fecha actual
    hoy = new Date(); //Objeto fecha actual
    diasemhoy = hoy.getDay();
    diahoy = hoy.getDate();
    meshoy = hoy.getMonth();
    annohoy = hoy.getFullYear();

    //Elementos del DOM: en cabecera de calendario
    tit = document.getElementById("titulos"); //cabecera del calendario
    ant = document.getElementById("anterior"); //mes anterior
    pos = document.getElementById("posterior"); //mes posterior

    //Elementos del DOM en primera fila
    f0 = document.getElementById("fila0");

    //Pie del calendario
    pie = document.getElementById("fechaactual");
    pie.innerHTML += lasemana[diasemhoy] + ", " + diahoy + " de " + meses[meshoy] + " de " + annohoy;

    //formulario: datos iniciales:
    document.buscar.buscaano.value = annohoy;

    //definir elementos iniciales:
    mescal = meshoy;
    annocal = annohoy;

    cabecera();
    primeralinea();
    escribirdias();
}

function cabecera() {
    tit.innerHTML = meses[mescal] + " de " + annocal;
    mesant = mescal - 1
    mespos = mescal + 1
    if (mesant < 0) { mesant = 11; }
    if (mespos > 11) { mespos = 0; }
    ant.innerHTML = meses[mesant]
    pos.innerHTML = meses[mespos]
}

function primeralinea() {
    for (i = 0; i < 7; i++) {
        celda0 = f0.getElementsByTagName("th")[i];
        celda0.innerHTML = diassemana[i];
    }
}

function escribirdias() {
    primeromes = new Date(annocal, mescal, "1");
    prsem = primeromes.getDay();
    prsem--;
    if (prsem == -1) { prsem = 6; }
    diaprmes = primeromes.getDate();
    prcelda = diaprmes - prsem;
    empezar = primeromes.setDate(prcelda);
    diames = new Date();
    diames.setTime(empezar);

    for (i = 1; i < 7; i++) {
        fila = document.getElementById("fila" + i);
        for (j = 0; j < 7; j++) {
            midia = diames.getDate();
            mimes = diames.getMonth();
            mianno = diames.getFullYear();
            celda = fila.getElementsByTagName("td")[j];
            celda.innerHTML = midia;

            celda.style.backgroundColor = "9bf5ff"
            celda.style.color = "#492736"

            if (j == 6) {
                celda.style.color = "#f11445"
            }

            if (mimes != mescal) {
                celda.style.color = "a0babc";
            }

            if (mimes == meshoy && midia == diahoy && mianno == annohoy) {
                celda.style.backgroundColor = "#f0b19e";
                celda.innerHTML = "<cite title='Fecha Actual'>" + midia + "</cite>";
            }

            midia = midia + 1;
            diames.setDate(midia);
        }
    }
}

function mesantes() {
    nuevomes = new Date();
    primeromes--;
    nuevomes.setTime(primeromes);
    mescal = nuevomes.getMonth();
    annocal = nuevomes.getFullYear();
    cabecera();
    escribirdias();
}

function mesdespues() {
    nuevomes = new Date();
    tiempounix = primeromes.getTime();
    tiempounix = tiempounix + (45 * 24 * 60 * 60 * 1000);
    nuevomes.setTime(tiempounix);
    mescal = nuevomes.getMonth();
    annocal = nuevomes.getFullYear();
    cabecera();
    escribirdias();
}

function actualizar() {
    mescal = hoy.getMonth();
    annocal = hoy.getFullYear();
    cabecera();
    escribirdias();
}

function mifecha() {
    mianno = document.buscar.buscaano.value;
    listameses = document.buscar.buscames;
    opciones = listameses.options;
    num = ListeningStateChangedEvent.selectedIndex
    mimes = opciones[num].value;
    if (isNaN(mianno) || mianno < 1) {
        alert("El ano no es válido:\n debe ser un número mayor a 0")
    } else {
        mife = new Date();
        mife.setMonth(mimes);
        mife.setFullYear(mianno);
        mescal = mife.getMonth();
        annocal = mife.getFullYear();
        cabecera();
        escribirdias();
    }
}