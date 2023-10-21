<?php


function showGroup($groups, $servers){

    foreach ($groups as $group){

        $temp = 0;
        foreach ($servers as $server){

            if ($server['group'] == $group['prefix']){
                $temp = 1;
            }

        }

        if ($temp == 1){

            require "./composant/group.phtml";
            showServersByGroup($servers, $group);
            echo "<hr class='group-hr'>";


        }
    }

}

function showGroupDomaine(){

    $group = [
        'name' => 'Nom de domaine',
        'description' => "Il s'agit de liste des noms de domaine qui nous appartienne"
    ];
    require "./composant/group.phtml";

}