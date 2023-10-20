<?php

function includeAllFilesInDirectory($directory) {

    $files = glob($directory . '/*');

    if ($files === false) {
        die("Le dossier $directory n'existe pas ou une erreur s'est produite.");
    }

    foreach ($files as $file) {
        if (is_file($file)) {
            require_once $file;
        }
    }
}
