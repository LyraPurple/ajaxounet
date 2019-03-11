<?php


sleep(3); /* Simule une mauvaise connexion: Attend 3 secondes avant d'éxécuter le code. */
$sentences = [
    'Hello world!',
    'Great server',
    'Amazing ajax request',
    'A random sentence',
    'Sentence generator'
];

echo $sentences[array_rand($sentences)];