<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'service/PositionService.php';
    create();
}

function create() {
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];
    $date = $_GET['date'];
    $imei = $_GET['imei'];
    
    $ss = new PositionService();

    $ss->create(new Position(1, $latitude, $longitude, $date, $imei));
}
