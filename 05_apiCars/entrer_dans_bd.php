<?php

// Connexion à la BDD
$db = new PDO('mysql:host=127.0.0.1;dbname=trotro;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

/**
 * Trotinettes à entrer dans la base de données
 */

$trotinetteS = [
    [ 'marque' => 'Troticool', 'modèle' => 'Slide', 'prix' => 520, 'image' => 'trotitinette_01.jpg'],
    [ 'marque' => 'ProtTrotte', 'modèle' => 'Protéiné', 'prix' => 245, 'image' => 'trotitinette_02.jpg'],
    [ 'marque' => 'DoudiTrotte', 'modèle' => 'Doudi', 'prix' => 666, 'image' => 'trotitinette_03.jpg'],
    [ 'marque' => 'DoudiTrotte', 'modèle' => 'Doudi', 'prix' => 245, 'image' => 'trotitinette_04.jpg'],
    [ 'marque' => 'Troticool', 'modèle' => 'Slide', 'prix' => 520, 'image' => 'trotitinette_05.jpg'],
    [ 'marque' => 'ProtTrotte', 'modèle' => 'Protéiné', 'prix' => 333, 'image' => 'trotitinette_06.jpg'],
    [ 'marque' => 'Trike', 'modèle' => 'BrobinetteX110', 'prix' => 400, 'image' => 'trotitinette_07.jpg'],
    [ 'marque' => 'DoudiTrotte', 'modèle' => 'Doudi', 'prix' => 245, 'image' => 'trotitinette_08.jpg'],
    [ 'marque' => 'Trike', 'modèle' => 'BrobinetteX100', 'prix' => 520, 'image' => 'trotitinette_09.jpg'],
    [ 'marque' =>  'DoudiTrotte', 'modèle' => 'Doudi', 'prix' => 80, 'image' => 'trotitinette_10.jpg'],
    [ 'marque' =>  'Trike', 'modèle' => 'BrobinetteX2', 'prix' => 60, 'image' => 'trotitinette_11.jpg'],
    [ 'marque' =>  'Trike', 'modèle' => 'Protéiné', 'prix' => 245, 'image' => 'trotitinette_12.jpg']
];

// On reset la table
$db->query('TRUNCATE TABLE trotitinette');

// On prépare la requête
$query = $db->prepare('INSERT INTO `trotitinette` (`id`, `marque`, `modèle`, `prix`, `image`) VALUES (:marque, :modèle, :prix, :image)');

// On exécute 6 requêtes
foreach ($trotinetteS as $trotinette) {
    $query->bindValue(':marque', $trotinette['marque']);
    $query->bindValue(':modèle', $trotinette['modèle']);
    $query->bindValue(':prix', $trotinette['prix']);
    $query->bindValue(':image', $trotinette['image']);
    $query->execute();
}
