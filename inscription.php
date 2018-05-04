<?php include ('trtm_inscr.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Header</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>


<nav class="navbar navbar-inverse navbar-dark bg-dark">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="accueil.php"><span class="glyphicon glyphicon-home"> LinkedECE</a></li>
      <li><a href="profil.php"><span class="glyphicon glyphicon-user"> Profil</a></li>
      <li><a href="reseaux.php"><span class="glyphicon glyphicon-globe"> Réseaux</a></li>
      <li><a href="emplois.php"><span class="glyphicon glyphicon-user"> Emplois</a></li>
      <li><a href="notif.php"><span class="glyphicon glyphicon-bell"> Notifications</a></li>
      <li><a href="albums.php"><span class="glyphicon glyphicon-picture"> Albums</a></li>
      <li><a href="messagerie.php"><span class="glyphicon glyphicon-envelope"> Messagerie</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Inscription </a></li>
      <li><a href="connect.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
    </ul>
  </div>
</nav>

<div class="container">
      <body class="bg-light">

          <div class="container">
            <div class="py-5 text-center">
              <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h2>Inscription</h2>
              <p class="lead">Inscrivez vous sur notre site de mise en réseau interne à l'ECE</p>
            </div>
            <div class="row">
              <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Coordonnées</h4>
                <form method="post" class="needs-validation" action="trtm_inscr.php">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="prenom">Prenom</label>
                      <input type="text" class="form-control" name="prenom" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Vous devez entrez un prénom valide.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="nom">Nom</label>
                      <input type="text" class="form-control" name="nom" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Vous devez entrez un nom valide.
                       </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="pseudo">Pseudo</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" required>
                      <div class="invalid-feedback" style="width: 100%;">
                        Votre pseudo n'est pas valide.
                      </div>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                      Vous devez entrer une adresse e-mail valide.
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="adresse">Addresse</label>
                    <input type="text" class="form-control" name="adresse" placeholder="" required>
                    <div class="invalid-feedback">
                      Vous devez entrer une adresse valide.
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-3">
                      <label for="telephone">Telephone</label>
                      <input type="text" class="form-control" name="telephone" placeholder="06..." required>
                      <div class="invalid-feedback">
                        Vous devez entrer un numéro de téléphone valide.
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-5 mb-3">
                          <label for="dateNaissance">Date de Naissance</label>
                          <input type="date" class="form-control" name="dateNaissance" required>
                          <div class="invalid-feedback">
                            Vous devez entrer une date de naissance correcte.
                          </div>
                      </div>
                  </div>
                  <hr class="mb-4">
                    <a href="connect.php"><button class="btn btn-success btn-lg btn-block" name="inscription" type="submit">S'enregistrer</button></a>
                </form>
              </div>
            </div>
          </div>
          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script>window.jQuery || document.write('<script src="jquery-slim.min.js"><\/script>')</script>
          <script src="popper.min.js"></script>
          <script src="bootstrap.min.css"></script>
          <script src="holder.min.js"></script>
          <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
              'use strict';

              window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false)
            })();
          </script>

          </body>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 ECE Student's</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
</html>
