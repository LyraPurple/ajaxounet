<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Révision de formulaire </title>
</head>
<body>
    <!-- http://localhost/ajax/03_Formulaire/ -->
    <h1>Formulaire basique</h1>
    <!--
        Formulaire avec AJAX:
        1. Ajouter Bootstrap sur la page.
        2. Ajouter un formulaire en POST avec deux champs (Nom et message).
        3. Le formulaire sera traité sur le fichier worker.php (action).
        4. On va vérifier que le nom et le message fasse au moins 2 caractères.
        5. Si le formulaire est valide, on affiche "Succès".
        6. S'il y a des erreurs, on les affiche.
    -->



    <form class="container">
    <div class="row">
        <div class="col-md-2 form-group" action="./worker.php" method="post">
        <label for="Praynom">Pray deul' nom</label>
            <input type="text" class="form-control" name="praynounet" id=praynom placeholder="Eul' Praynom">
        </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea">Le message del la vida</label>
            <textarea class="form-control" name="messageounet" id="exampleFormControlTextarea" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyay</button>
    </form>
    <script>
    var form = $('form');

form.on('submit', function (event) {
    event.preventDefault(); // On n'exécute pas la requête POST directement

    var formData = form.serialize(); // On récupère les données du formulaire

    // On exécute la requête POST via AJAX
    $.ajax({
        type: 'POST',
        url: form.attr('action'),
        data: formData,
        // On peut forcer le contenu en JSON si le serveur
        // ne renvoie pas la bonne en-tête
        // dataType: 'json'
    }).done(function (message) {
        console.log(message);
    });
});

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>