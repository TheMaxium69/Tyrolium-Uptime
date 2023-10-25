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

    $dataUrl = 'http://127.0.0.1/Tyrolium-Uptime/data.json';

} else if ($APP_ENV == "PROD") {

    $dataUrl = 'https://tyrolium.fr/uptime/data.json';

}

// img by : https://www.flaticon.com/fr/chercher?author_id=572&style_id=&type=standard&word=serveur