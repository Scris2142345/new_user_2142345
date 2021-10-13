function limpiar() {
    document.getElementById('formulario').reset();
}
function sumar() {
    var x = parseInt(document.getElementById('Valor').value);
    var y = parseInt(document.getElementById('Valor2').value);
   document.getElementById('el resultado').innerHTML = x + y;
}
function restar() {
    var x = parseInt(document.getElementById('Valor').value);
    var y = parseInt(document.getElementById('Valor2').value);
   document.getElementById('el resultado').innerHTML = x - y;
}
function multiplicar() {
    var x = parseInt(document.getElementById('Valor').value);
    var y = parseInt(document.getElementById('Valor2').value);
   document.getElementById('el resultado').innerHTML = x * y;
}
function dividir() {
    var x = parseInt(document.getElementById('Valor').value);
    var y = parseInt(document.getElementById('Valor2').value);
   document.getElementById('el resultado').innerHTML = x / y;
}