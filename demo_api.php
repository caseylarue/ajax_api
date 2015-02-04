<?php
	// $ch = curl_init("http://www.alexa.com");
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// $data = curl_exec($ch);
	// echo $data;

	$ch = curl_init("http://maps.googleapis.com/maps/api/directions/json?origin=Seattle,WA&destination=NewYork,NY&sensor=false");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = json_decode(curl_exec($ch));
	var_dump($data);
?>