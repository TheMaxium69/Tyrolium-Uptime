<?php

function OneByServer($server){

    require "./composant/oneServer.phtml";

}

function showServers($servers){

    foreach ($servers as $server){

        OneByServer($server);

    }
}

function showServersByGroup($servers, $group){

    var_dump($servers, $group);

    foreach ($servers as $server){

        if ($group['prefix'] == $server['group']){

            OneByServer($server);

        }

    }
}