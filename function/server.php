<?php

function OneByServer($server, $status){

    require "./composant/oneServer.phtml";

}

function showServers($servers){

    foreach ($servers as $server){

        OneByServer($server);

    }
}

function showServersByGroup($servers, $group){

    echo '<div class="row justify-content-center px-5" style="margin-left: auto; margin-right: auto">';

    foreach ($servers as $server){

        if ($group['prefix'] == $server['group']){



//            $status = pingHost($server['url']);
            $status = "online";

            OneByServer($server, $status);

        }

    }

    echo '</div>';
}