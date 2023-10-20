<?php

function pingHost($host) {

    $output = shell_exec("ping " . escapeshellarg($host));

    echo "<pre>$output</pre>";
}
