<?php


// PROD and DEV
$APP_ENV = "DEV";

// File global
$functionPath = './function';


// Variable Share
$exemple_server = [
    "name" => "int601",
    "group" => "interne",
    "ip" => "90.1.1.1"
];

if ($APP_ENV == "DEV"){

    $dataUrl = 'http://127.0.0.1/Tyrolium-SolidServ-Uptime-Site/data.json';

} else if ($APP_ENV == "PROD") {

}

