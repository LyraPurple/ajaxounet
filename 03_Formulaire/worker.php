<?php

$praynom = $_POST['praynounet'];
$message = $_POST['messageounet'];

if ('POST' === $_SERVER['REQUEST_METHOD']){
    if (strlen($praynom) >= 2 && strlen($message) >=2){
        echo 'Succès';
    }
    if (strlen($praynom) <2){
        echo 'Erreur praynom';
    }
    if (strlen($message) <2){
        echo 'Erreur message';
    }
}