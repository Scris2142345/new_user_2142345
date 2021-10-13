/*1) Crea una clase llamada Cuenta que tendrá los siguientes atributos: titular y cantidad.

El titular será obligatorio y la cantidad es opcional.

-Tendrá dos métodos especiales:

ingresar: se ingresa una cantidad a la cuenta

Retirar: se retira una cantidad a la cuenta.*/
var ll = function() {
	var valorl = document.getElementById("valorl").value;
	//var id = document.getElementById("id").value;
}

class cuenta{
	constructor(cantidad,titular){
	this.titular=titular;
	this.cantidad=cantidad;
}
 ingresar(){
 	let valor1 = parseInt(prompt("ingresar valor"));
 	let suma = this.cantidad + valor1;
 	document.write(`Usuario ${this.titular}, su saldo es ${this.cantidad} en total es ${suma} Dolares`);

 } 
 retirar(){
 	let valor2 = parseInt(prompt("ingresar valor"));
 	let resta = this.cantidad - valor2;
 	document.write(`Usuario ${this.titular}, su saldo es ${this.cantidad} en total es ${resta} Dolares`);
 }
}
let x = 5000;
let pp = prompt("ingrese su nombre");
const titular=new cuenta(5000,pp);
alert(`Su cuenta es de , ${x} Dolares` );


let sesion2 = prompt(`¿Quiere ingresar dinero ?`)
if (sesion2=="si" || sesion2=="SI"){
titular.ingresar();
} else if (sesion2=="no" || sesion2=="NO");



let sesion = prompt(`¿Quiere retirar dinero?`)
if (sesion=="si" || sesion=="SI"){
titular.retirar();
} else if (sesion=="no" || sesion=="NO");



/*const x = new cuenta();
console.log(x.Ingresar(1000));

const ll = new cuenta();
console.log(ll.Retirar(4900)); 

const z = new cuenta(0);
console.log(z.info);*/