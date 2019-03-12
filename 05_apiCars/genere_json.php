<?php
try {
    $Trotoiture = new PDO("mysql:host=127.0.0.1;dbname=trotro;charset=utf8", 'root', '');
    } catch (PDOException $exeptati) {
    print "Erreur !: " . $exeptati->getMessage() . "<br/>";
    die();
    }


/* Récupéray les 🛴 à mettre en tablôw  */

$requetesql_Trotiti = "SELECT * FROM trotitinette";
$resultat_requetesql_trotinettes = $Trotoiture->query($requetesql_Trotiti);
$trotinetteS = $resultat_requetesql_trotinettes->fetchAll(PDO::FETCH_ASSOC);



// Transformer le tableau en JSON (json_encode)
header('Content-Type: application/json');
echo json_encode($trotinetteS);

