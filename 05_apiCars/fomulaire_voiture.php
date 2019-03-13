<!DOCTYPE html>
<html lang="fr">
  <head>
<!--    -------Adresse de le site -------
  http://localhost/ajax/05_apiCars/fomulaire_voiture.php
        -------Adresse de le site ------- -->
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
  </body>
</html>