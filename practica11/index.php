<html>
<head>
<title>practica 11 php</title>
</head>
<body>
<?php
	//Mariano Jimenez Alvaro
	//Usando variables en PHP
	echo"<h1>variables</h1>";
	$nombre='Mariano';//tipo de cadena
	$apellidos='Jimenez Alvaro';
	$edad=20;
	$salario=12345.50;
	$fechaNacimiento='25/10/1996';
	$estatus=true;
	echo $nombre.'<br/>';
	echo $apellidos.'<br/>';
	echo 'Nombre Completo:'.$nombre.' '.$apellidos.'<br/>';
	echo 'TU EDAD ES: '.$edad.'<br/>';
	echo 'TU SALARIO ES:'.$salario;
?>
	<h1>OPERADORES ARITMETICOS</h1>
<?php
		$a=5;
		$b=3;
		$suma=$a+$b;
		$resta=$a-$b;
		$multiplica=$a*$b;
		$divide=$a/$b;
		echo 'La suma de '.$a.'+'.$b.'='.$suma.'<br/>';
		echo 'La resta es '.$a.'-'.$b.'='.$resta.'<br/>';
		echo 'La multiplicacion es '.$a.'*'.$b.'='.$multiplica.'<br/>';
		echo 'La division es '.$a.'/'.$b.'='.$divide.'<br/>';
?>
</body>
</html>