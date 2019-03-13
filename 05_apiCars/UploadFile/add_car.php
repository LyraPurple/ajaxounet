<!DOCTYPE html>
<html lang="fr">
  <head>
<!--    -------Adresse de le fichier d'origine -------
  06_Mars_MatthieuMota/DepotGitCours/ajax/05-cars/add_car.php
        -------Adresse de le fichier d'origine ------- -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>

    <?php
        $db = new PDO('mysql:host=127.0.0.1;dbname=trotro;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);

        // Déclarage de les variables
        $brand = null;
        $model = null;
        $price = null;
        $image = null;

        // Vérification de les variables
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $price = intval($_POST['price']);/* "intval" fait la même vérification que "is_numeric", un seul de les deux suffit. */
            $image = $_FILES['image'];

            $errors = [];

            if (strlen($brand) <= 2) {
                $errors['brand'] = 'Marque invalide.';
            }

            if (strlen($model) <= 2) {
                $errors['model'] = 'Modèle invalide.';
            }

            if (!is_numeric($price) || $price < 1) {/* "intval" fait la même vérification que "is_numeric", un seul de les deux suffit. */
                $errors['price'] = 'Prix invalide.';
            }

            if ($image['error'] !== 0) {/* "Le message d'erreur 0 signifie que c'est valide, que ça a marché. Donc on regarde pour les !=0 */
                $errors['image'] = 'Vous n\'avez pas ajouté d\'image.';
            }

            // Deux façons de vérifiay l'éxtension de la image, il faut en choisir une.
            // L'image est un jpg, jpeg, png, gif
            if (!isset($errors['image'])) {
                $extension = pathinfo($image['name'])['extension']; // Renvoie l'extension du fichier uploadé

                
            // Méthode 1
                if (!in_array(strtolower($extension), ['jpeg', 'jpg', 'png', 'gif'])) {
                    $errors['image'] = 'Image pas valide';
                }
                
                
            // Méthode 2
                if (!preg_match('/\.(jpg|jpeg|png|gif)$/mi', $extension)) {
                    $errors['image'] = 'Image pas valide';
                }
            }

            var_dump($errors);

            if (empty($errors)) {
                // On fait l'upload
                var_dump($image);
                /* uniqid()
                        Génère un identifiant unique, préfixé, basé sur la date et heure courante en microsecondes. 
                        Retourne un identifiant unique basé sur l'horodatage, sous la forme d'une chaîne de caractères. 
                        http://php.net/manual/fr/function.uniqid.php */
                $fileName = uniqid().'_'.$image['name'];
                
                /* __DIR__ 
                        Constantes magiques	
                        Permet de d'écrire le chemin absolue du fichier, pour le retrouver en toute circonstance. 
                        C'est l'équivalent de dirname(__FILE__). Ce nom de dossier ne contiendra pas de slash final, 
                        sauf si c'est le dossier racine. 
                        https://secure.php.net/manual/fr/language.constants.predefined.php */
                move_uploaded_file($image['tmp_name'], __DIR__ . '/img/'.$fileName);/* 'tmp_name', chemin vers le fichier (temporaire) */
                /* move_uploaded_file
                        Déplace un fichier téléchargé
                        Retourne TRUE en cas de succès. 
                        http://php.net/manual/fr/function.move-uploaded-file.php */

                // On peut faire la requête
                $query = $db->prepare('INSERT INTO cars (brand, model, price, image) VALUES (:brand, :model, :price, :image)');
                $query->bindValue(':brand', $brand);
                $query->bindValue(':model', $model);
                $query->bindValue(':price', $price);
                $query->bindValue(':image', $fileName); 
                /* On a dû enregistrer $fileName à l'avance dans une variable, 
                            car on devait s'en servir   et ici, 
                                                        et pour move_uploaded_file
                            On ne pouvait pas générer plusieurs fois uniqid(), autrement ça créé 2 fichiers.*/

                if ($query->execute()) {
                    echo '<div class="alert alert-success">
                        La voiture a été ajoutée!
                    </div>';
                }
            }
        }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="brand">Marque :</label>
                        <input type="text" name="brand" id="brand" class="form-control" value="<?= $brand; ?>">
                    </div>
                    <div class="form-group">
                        <label for="model">Modèle :</label>
                        <input type="text" name="model" id="model" class="form-control" value="<?= $model; ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Prix :</label>
                        <input type="text" name="price" id="price" class="form-control" value="<?= $price; ?>">
                    </div>
                    <div class="form-group">
                        <label for="image">Image :</label>
                        <!-- Penser à noter le type="file" du champ. -->
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-block">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
    
        

    </script>
  </body>
</html>
