<?php

function includeAllFilesInDirectory($directory) {
    // Utilisez la fonction glob pour obtenir la liste des fichiers dans le dossier
    $files = glob($directory . '/*');

    if ($files === false) {
        // Gestion d'erreur si le dossier n'existe pas ou s'il y a une autre erreur
        die("Le dossier $directory n'existe pas ou une erreur s'est produite.");
    }

    // Inclure chaque fichier trouvé
    foreach ($files as $file) {
        if (is_file($file)) {
            require_once $file;
        }
    }
}
