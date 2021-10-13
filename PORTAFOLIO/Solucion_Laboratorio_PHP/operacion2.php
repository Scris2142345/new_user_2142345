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
$_POST['cantidad'];
$_POST['precio'];

$a = $_POST['cantidad']*50000;
$q = $_POST['precio']*5;
$y = $q/100;
$b = $a+450000+$y;

echo $_POST['nombre'];
echo '<br> Sueldo completo';
echo '<br>';
echo $b;



 ?>

</div>
 </body>
</html>