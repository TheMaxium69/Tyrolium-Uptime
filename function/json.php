<?php

function getData($url) {

    $recupData = file_get_contents($url);

    $data = json_decode($recupData, true);

    return $data;
}



