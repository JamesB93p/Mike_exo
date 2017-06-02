<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
	header("Access-Control-Allow-Methods: GET, POST, PUT");
	header('Content-Type: image/png, image/jpg');
	
	if(!empty($_POST)){
		$mysqli = mysqli_connect("localhost","root","","monsite");

		/* Vérifie la connexion */
		if (mysqli_connect_errno()) {
			printf("Échec de la connexion : %s\n", mysqli_connect_error());
			exit();
		}

		$mysqli->query("
			CREATE TABLE `users` (
				`id` int(11) NOT NULL PRIMARY KEY,
				`name` varchar(20) NOT NULL,
				`userName` varchar(20) NOT NULL,
				`email` varchar(50) NOT NULL,
				`phone` varchar(15) NOT NULL,
				`password` varchar(20) NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=latin1;
		");

		/* Préparation de la commande d'insertion */
		$query = "INSERT INTO users (name, userName, email, phone, password) VALUES (?, ?, ?, ?, ?)";
		$stmt = $mysqli->prepare($query);

		$stmt->bind_param($_POST["name"], $_POST["userName"], $_POST["email"], $_POST["phone"], $_POST["password"]);

		/* Exécute la requête */
		$stmt->execute();

		/* Ferme la requête */
		$stmt->close();
		
		$_POST["id"] = $mysqli->insert_id;
		
		echo json_encode($_POST);
	}else{
		// echo json_encode( array( "error"=>"true","message"=>"Methode POST error" ) );
		echo var_dump( $_POST );
	}
?>