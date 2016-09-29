<?php

	if( isset($_POST['TempInterna']) && !empty($_POST['TempInterna']) &&
		isset($_POST['HumInterna']) && !empty($_POST['HumInterna']) &&
		isset($_POST['ToleranciaInt']) && !empty($_POST['ToleranciaInt']) ) {

		$TempInterna = $_POST['TempInterna'];
		$HumInterna = $_POST['HumInterna'];
		$ToleranciaInt = $_POST['ToleranciaInt'];
		$header = "https://api.thingspeak.com/update?api_key=BTHC90WLUASXWZG3&field1=" . $TempInterna . "&field2=" . $HumInterna . "&field3=" . $ToleranciaInt;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, 
		    $header
		);
		$content = curl_exec($ch);
		header("location:setPoint_exitoso.php");
	}
	
	else{
		print "Verifica que los datos que llenaste son correctos";
	}

?>