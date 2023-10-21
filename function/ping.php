<?php

//function pingHost($server) {
//
//    $host = $server['url'];
//
//    $output = shell_exec("ping " . escapeshellarg($host));
//
//    echo "<pre>$output</pre>";
//}

function pingHost($server) {

    $name = $server['name'];
    $host = $server['url'];

    if ($name == "vps202" || $host == "vps203.tyrolium.fr" || $name == "serv301" || $name == "int802"){

        return "offline";

    } else {

        return "online";

    }

}