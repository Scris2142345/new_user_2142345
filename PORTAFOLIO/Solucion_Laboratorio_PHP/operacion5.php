<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel='stylesheet' type='text/css' media='screen' href='style/style.css'>
</head>
<body>
	<div class="ll">

<?php 
// Declarar
$_POST['nombrearticulo'];
$_POST['clave'];
$_POST['precio'];

//Operacion 

$op = $_POST['precio']*10;
$op2 = $op/100;
$clave1 = $_POST['precio']-$op2;

$cl = $_POST['precio']*20;
$cl2 = $cl/100;
$clave2 = $_POST['precio']-$cl2;

//Impresion

echo 'El articulo :', $_POST['nombrearticulo'], '<br>';
echo 'Clave  ',$_POST['clave'], '<br>';
echo 'Precio original : ', $_POST['precio'],'<br>';
if ($_POST['clave'] == 1){
    echo "Precio con descuento: ", $clave1;
}elseif($_POST['clave'] == 2){
        echo "Precio con descuento: ", $clave2;
    }else{
    	echo "Error..... clave no existe intentalo de nuevo";
    }
 ?>
 </div>
 </body>
</html>