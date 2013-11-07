<?php
session_start();

include('fnc/fnc.php');

?>

<!DOCTYPE html>

<html>

<head>
	<title>Sistema de Facturacion</title>

    <script src="src/mootools-core-1.4.5.js"></script>
    <script src="src/mootools-more-1.4.0.1.js"></script>
	
    <script src="src/script.js"></script>
    <?php include('fnc/fnc_controlJs.php'); ?>
   
    <?php include('fnc/fnc_controlCss.php'); ?>
</head>

<body id="documento">

<?php include('fnc/fnc_controlModulos.php'); ?>


</body>
</html>