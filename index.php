<?php
$config = require_once "config.php";
$station_board = json_decode(file_get_contents($config->api_root . "stationboard?station=" . urlencode($config->station)), true);
echo "<pre>"; print_r($station_board); echo "</pre>";