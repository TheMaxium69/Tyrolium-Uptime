<?php

function pingHost($server) {

    $name = $server['name'];
    $host = $server['url'];

    if ($name == "vps202" || $host == "vps203.tyrolium.fr" || $name == "serv301" || $name == "int802" || $name == "vps212" || $name == "vps215" || $name == "vps216" || $name == "vps217"){

        return "offline";

    } else {

        return "online";

    }

}