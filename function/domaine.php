<?php

function showDomaine($domaines){

    require_once "./composant/domaine.phtml";

    echo '
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
';


    foreach ($domaines as $domaine){

        require "./composant/oneDomaine.phtml";

    }

    echo '
    </ul>
</div>
';

}