<?php 
require_once 'conexion/conexion_PDO.php';

$conexion = new Conexion();
$conexion->conectar();

$ch = curl_init('https://realemail.expeditedaddons.com/?api_key=P78RD20A46QI3H3XGNZ975J1CVWL96SFMEBO8TYK01U425&email=memojl08@gmail.com&fix_typos=false');

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>
