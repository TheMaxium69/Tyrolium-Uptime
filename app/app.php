<?php

include "env.php";
require_once "./function/Import.php";
includeAllFilesInDirectory($functionPath);


echo "<header>";
require_once "./composant/navbar.phtml";
require_once "./composant/header.phtml";
echo "</header><main>";


OneByServer($exemple_server);



echo "</main><footer>";
require_once "./composant/footer.phtml";
echo "</footer>";