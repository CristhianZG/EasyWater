<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=easywater;host=localhost","root","");
switch($_GET['q']){
		// Buscar Último Dato
		case 1:
		    $statement=$pdo->prepare("SELECT temperatura,fecha FROM capturas where nombreSensor='DHT-11A' order by 2 desc");
			$statement->execute();
			$results=$statement->fetchAll(PDO::FETCH_ASSOC);
			$json=json_encode($results);
			echo $json;
		break; 
		// Buscar Todos los datos
		case 2:			
			$statement=$pdo->prepare("SELECT temperatura,fecha FROM capturas where nombreSensor='DHT-11B' order by 2 desc");
			$statement->execute();
			$results=$statement->fetchAll(PDO::FETCH_ASSOC);
			$json=json_encode($results);
			echo $json;
		break;
	case 3:
		$statement = $pdo->prepare("SELECT temperatura,fecha FROM capturas where nombreSensor='DHT-11C' order by 2 desc");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
		$json = json_encode($results);
		echo $json;
    break;
}
