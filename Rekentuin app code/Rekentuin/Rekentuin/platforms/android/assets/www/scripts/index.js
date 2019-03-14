function tafels() {
    let Keuze = Nmmr1;
    let tmpvar = "";
    for (x = 1; x < 11; x++) {
        tmpvar += '<p id="Tafels' + x + '"></p>';
    }
    document.getElementById("Demo").innerHTML = tmpvar;
    for (x = 1; x < 11; x++) {
        Uitkomst = Keuze * x;
        document.getElementById("Tafels" + x).innerHTML = x + " x " + Keuze + " = " + Uitkomst;
    }
}
