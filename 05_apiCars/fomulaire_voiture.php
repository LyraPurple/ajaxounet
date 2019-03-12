<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="./traitageFormumu.php" method="post">
                    <div class="form-group">
                        <label for="brand">brand :</label>
                        <input type="text" name="brand" id="brand" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="model">Message :</label>
                        <input type="text" name="model" id="model" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="price">price :</label>
                        <input type="text" name="price" id="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">image :</label>
                        <input type="text" name="image" id="image" class="form-control">
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

<!--     <script>
    
        var form = $('form');
        form.on('submit', function (event) {
            // On n'exécute pas la requête POST directement
            event.preventDefault();
            var formData = form.serialize(); // On récupère les données du formulaire
            // On exécute la requête POST via AJAX
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: formData,
                // On peut forcer le contenu en JSON si le serveur
                // ne renvoie pas la bonne en-tête
                // dataType: 'json'
                beforeSend: function () {
                    $('h1').html('Chargement en cours...');
                },
                complete: function () {
                    $('h1').html('');
                }
            }).done(function (response) {
                if (response.success) {
                    var message = response.success;
                    $('#success').append($('<li>'+message.name+' : '+message.message+'</li>'));
                }
                
                if (response.errors) {
                    console.log(response.errors);
                }
            });
        });
    
    </script> -->
  </body>
</html>