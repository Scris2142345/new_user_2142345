<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' type='text/css' media='screen' href='style/ccs1.css'>
</head>
<body>
	<h1>Resultados</h1>
	<div class="operacion">
<?php 

$_POST['parcial1']; 
$_POST['parcial2'];
$_POST['parcial3'];
$_POST['examenfinal'];
$_POST['trabajofinal'];


$x = $_POST['parcial1']+$_POST['parcial2']+$_POST['parcial3'];
$p = $x/3;
$promedio = 35*$p/100;
$examenf = 35*$_POST['examenfinal']/100;
$trab = 30*$_POST['trabajofinal']/100;
//Resultado
$Resultado = $promedio+$examenf+$trab ;
echo '<br>';
echo 'El promedio es: ', $p;
echo '<br>';
echo 'Examen Final :', $_POST['examenfinal'];
echo '<br>';
echo 'Trabajo Final :', $_POST['trabajofinal'];
echo "<br>";
echo 'El resultado total es :', $Resultado ;
echo " <br> ";

if($Resultado >= 3 ){
            echo "Felicitaciones usted aprobo";   

  }else{
         echo "No aprobado";
     }
/*echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"];
*/
 ?>
</div>
</body>
</html>



 