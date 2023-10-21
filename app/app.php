<?php

//Systeme
include "env.php";
require_once "./function/Import.php";
includeAllFilesInDirectory($functionPath);
$data = getData($dataUrl);

// Variable Data
$servers = $data['serv'];
$groups = $data['group'];
$domaines = $data['domaine'];

// Content
showGroup($groups, $servers);

showDomaine($domaines);
