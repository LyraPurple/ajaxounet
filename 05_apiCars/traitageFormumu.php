<?php
sleep(1);
header('Content-Type: application/json');
// On vérifie que le formulaire a été soumis
if ('POST' === $_SERVER['REQUEST_METHOD']) {
    // On récupère les champs du formulaire
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    // On prépare le tableau avec les erreurs
    $errors = [];

    if (empty($brand)) { // Vérifie si l'brand est vide
    $isValid = false;
    echo 'Le brand est vide. <br />';
    }

    if (empty($model)) { // Vérifie si l'model est vide
    $isValid = false;
    echo 'Le model est vide. <br />';
    }
    if (empty($price)) { // Vérifie si l'price est vide
    $isValid = false;
    echo 'Le price est vide. <br />';
    }
    if (empty($image)) { // Vérifie si l'image est vide
    $isValid = false;
    echo 'L\'image est vide. <br />';
    }
        
    // On vérifie si le formulaire contient des erreurs
    if (empty($errors)) {
        echo json_encode(['success' => [
            'brand' => $brand,
            'model' => $model
            'price' => $price,
            'image' => $image
        ]]);
    } else {
        echo json_encode(['errors' => $errors]);
    }
}

?>