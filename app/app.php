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

//Structure
echo "<header>";
require_once "./composant/navbar.phtml";
require_once "./composant/header.phtml";
echo "</header><main>";

showGroup($groups, $servers);

showDomaine($domaines);


echo "</main><footer>";
require_once "./composant/footer.phtml";
echo "</footer>";