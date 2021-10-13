<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel='stylesheet' type='text/css' media='screen' href='style/style.css'>
</head>
<body>
	<div class="ll">

<?php 
$_POST['p'];


$x = $_POST['p']*40;
$y = $x/100;
$z = $_POST['p']*30;
$p = $z/100;

echo 'Ginecología tiene un presupuesto anual de :',$y ,'<br>';
echo 'Traumatología tiene un presupuesto anual de :',$p , '<br>';
echo 'Pediatría tiene un presupuesto anual de :',$p,'<br>';







 ?>
 </div>
 </body>
</html>