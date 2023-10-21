<?php


function showGroup($groups, $servers){

    foreach ($groups as $group){
        require "./composant/group.phtml";
        showServersByGroup($servers, $group);
    }

}