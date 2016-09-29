<?php

$temperaturaInt = $_GET["temperaturaInt"];
$humedadInt = $_GET["humedadInt"];
$temperaturaExt = $_GET["temperaturaExt"];
$humedadExt = $_GET["humedadExt"];

$text ="Temperatura Interna: {$temperaturaInt} C  Humedad Interna: {$humedadInt} % \r\n";
$text .= "Temperatura Externa: {$temperaturaExt} C  Humedad Externa: {$humedadExt} % \r\n";
$text .= "Enviado el " . date('d/m/Y', time());

$para	= "christianmancha@outlook.com";
$subject ="Temperature Report";

$from 	= "Invernadero@semanai.com";
$header = 'From: ' . $from . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

//send email

mail($para, $subject, utf8_decode($text), $header);

?>
