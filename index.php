<?php
$config = require_once "config.php";
if(isset($_GET['station'])){
	$station = urlencode($_GET['station']);
} else {
	$station = urlencode($config->station);
}
$station_board = json_decode(file_get_contents($config->api_root . "stationboard?station=" . $station), true);

foreach($station_board['stationboard'] as $departure){
	$departureTimestamp = new DateTime($departure['departureTimestamp']);
	echo $departureTimestamp->format('H:i') . " " . $departure['category'] . " " . $departure['number'] . " " . $departure['to'] . " " . $departure['plattform'] . "<br>";
}

