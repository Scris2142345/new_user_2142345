<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>POO</h1>
    <p>var ob=new Object();
        ob.nombre='nombre';
        ob.apellido='apellido';
        ob.nombreCompleto=function(){
            return nombre+''+this.apellido; // this es un objeto de object
        }
        console.log(ob.nombreCompleto())   // Imprimir el objeto
        
        // 2da forma
        
        var obj={
            nombre:'cristhain',
            apellido:'Gifuentes',
            nombreCompleto:function(){
                return nombre+''+apellido;
            }
        };
        console.log(obj.nombre);
        console.log(obj.apelli);
        console.log(obj.nombreCompleto());
        
        // 3ra forma
        
        var plantilla=fuction(){
            this.nombre='Nombre';
            this.apellido='Apellido';
        
            nombreCompleto=fuction(){
                return this.nombre+''+this.apellido;
        
            }
        }
        
        //herencia
         var obfuction = new Plantilla();
        
        console.log(typeof(obfuction));
        console.log(obfuction.nombre);
        console.log(obfuction.nombreCompleto());
        
        //imprimir function original
        
        console.log(typeof(plantilla));
        console.log(plantilla.nombre);
        console.log(nombreCompleto());
        
        //
        
        //----------------------
        // Ejercicio
        var obj={
            Num1:5,
            Num2:3,
            Num3:10;
        
            nombreCompleto:function(){
                if (Num1<Num3 & Num1>Num2) {
                    Num2;
                }else{
                    ' error ' ;
                }
                return Num1;
            }
        };
        
        console.log(obj.nombreCompleto());
        
        </p>

        <h2>
        Funcion flecha
        </h2>
        <p>var num1;
            var num2;
            
            function Saludar(){
              
                alert("Hola a todos");
              }
            
              // //
            
            
            function Restarimpares(num1,num2){
            
                var resultado= num1 + num2;
                while (n < 2){
                    n ++;
                    x + n;
                }
                if (resultado = ){
                    console.log("el resultado es:, var resultado");
                 } else{
                     console.log("Error solo numeros impares");
                    }
            
            
            }
            console.log();
            
            // // 
            
            var noombredelafuncion = (vector, tam) => {
                for (let i = 0; i < tam; ++i){
                    vector.push(math.round(mathc))
                }
                if (){
            } else{
            
            }
             return (nombredelafuncion());
            }
            console.log("");
            
            // //
            
            function Sumarpares(num1,num2){
              
                var resultado= num1 + num2;
                alert(“La suma es: ”+ resultado);
              }
              
              Sumar(8,9);</p>
              <h2>GET y SET</h2>
              <p>class  Aprediz extends Persona{
                constructor(NOMBRE, APELLIDO, POGRAMA, FICHA){
                    super(_NOMBRE, _APELLIDO);
                    this._PROGRAMA;
                    this.FICHA;
                }
            get NOMBRE(){
                return this._NOMBRE;
            }
            set NOMBRE(){
                this._NOMBRE=NOMBRE;
            }
            
            
            get APELLIDO(){
                return this._APELLIDO;
            }
            set APELLIDO(){
                this._APELLIDO=APELLIDO;
            }
            
            
            get PROGRAMA(){
                return this._PROGRAMA;
            }
            set PROGRAMA(){
                this._PROGRAMA=PROGRAMA;
            }
            
            
            get FICHA(){
                return this._FICHA;
            }
            set FICHA(){
                this._FICHA=FICHA;
            }
            
            
            
            }
            
            
            
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////
            var per=new Persona("Camile", "lee");
            console.log (per.APELLIDO);
            per.APELLIDO="kjkjjhjj";
            
            console.log(per.NombreCompleto());
            console.log (per.APELLIDO);</p>
            <h2>Clase principal</h2>
            <p>class Persona {
                constructor(NOMBRE, APELLIDO){
                    this._nombre=nombre,
                    this._apellido=apellido,
                    this._genero=genero,
                    this._edad=edad,
                    this._altura=altura,
                    this._peso=peso,
                    this._documento=;
                }
                ////////////////////////////////////////////////////////////////////////////////////////////////////7
                get NOMBRE(){
                    return this._NOMBRE;
                }
                set NOMBRE(){
                    this._NOMBRE=NOMBRE;
                }
                get APELLIDO(){
                    return this._APELLIDO;
                }
                set APELLIDO(){
                    this._APELLIDO=APELLIDO;
                }
                NombreCmpleto(){
                    return this._NOMBRE+" "+this._APELLIDO;
                }
            }</p>
</body>
</html>