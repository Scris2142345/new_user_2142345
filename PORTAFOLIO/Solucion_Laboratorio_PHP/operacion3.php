<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel='stylesheet' type='text/css' media='screen' href='style/style.css'>
</head>
<body>
	<div class="ll">
<?php 

$_POST['nombre'];
$_POST['peso'];
$_POST['estatura'];


$estatura = $_POST['estatura']*$_POST['estatura'];
$imc = $_POST['peso']/$estatura;

echo $_POST['nombre'];
echo '<br>';
echo 'Indice de masa corporal es: ', $imc;
echo '<br>';
echo 'Su caso es el siguiente <br>';
if ($imc <= 18.5){
    echo "Esta por debajo del peso";
}elseif($imc <= 24.9){
        echo "Usted es saludable";
    }elseif($imc <= 29.9){
    		echo "Usted tiene sobrepeso";
    	}elseif($imc <= 39.9){
    		echo "Usted tiene obesidad";  
    		}elseif($imc >= 40){
    		echo "Tiene obesidad morbida";  
    }


 ?>
 </div>
 </body>
</html>