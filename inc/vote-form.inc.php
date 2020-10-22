<?php

	if(isset($_POST['vote'])){
		$user = "root";
		$pass = "";
		$conn = new PDO("mysql:host=localhost;dbname=celswap;", $user, $pass);

		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		$today = date("j, n, Y");
		$ip =  $_SERVER['REMOTE_ADDR'];
		
		$in = "INSERT INTO votes(user_ip, vote_date) VALUES (?, ?)";
		$prep = $conn->prepare($in);
		$prep->execute([$ip, $today]);
		
		
	}

?>