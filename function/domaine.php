<?php

function showDomaine($domaines){

    showGroupDomaine();

    echo '
<div>
    <ul class="domaine-list list-group list-group-flush">
';


    foreach ($domaines as $domaine){

        require "./composant/oneDomaine.phtml";

    }

    echo '
    </ul>
</div>
';

}