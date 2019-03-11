<?php

// print_r($_GET);
// print_r($_POST);

if ('POST' === $_SERVER['REQUEST_METHOD']) 
/* C'est une Yoda condition.
Une affectation renvoie toujours true, 
donc pour voir l'erreure, il inverse la condition */
 {
    echo $_POST['sentence'] ?? 'No sentence';
}
