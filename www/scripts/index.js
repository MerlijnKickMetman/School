function tafels(Nmmr1) {
    let Keuze = Nmmr1;
    let tmpvar = "";
    for (x = 1; x < 11; x++) {
        tmpvar += '<p id="Tafels' + x + '"></p>';
    }
    document.getElementById("Tafels").innerHTML = tmpvar;
    for (x = 1; x < 11; x++) {
        Uitkomst = Keuze * x;
        document.getElementById("Tafels" + x).innerHTML = x + " x " + Keuze + " = " + Uitkomst;
    }
}

var a = 0;
var b = 0;
var score = 0;
function generateRandom()
{
    a = Math.floor((Math.random() * 1) + 1);
    b = Math.floor((Math.random() * 10) + 10);
    document.getElementById("rndNumber1").innerHTML = a;
    document.getElementById("rndNumber2").innerHTML = b;

}