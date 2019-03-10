<?php
$config = require_once "config.php";
if(isset($_GET['station'])){
	$station = urlencode($_GET['station']);
} else {
	$station = urlencode($config->station);
}
$station_board = json_decode(file_get_contents($config->api_root . "stationboard?station=" . $station), true);

foreach($station_board['stationboard'] as $departure){
	echo date_format($departure['departureTimestamp'], 'H:i') . " " . $departure['category'] . " " . $departure['number'] . " " . $departure['to'] . " " . $departure['plattform'] . "<br>";
}

