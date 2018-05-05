<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Album photo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>


    <title>Albums Photos</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <header>
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
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album example</h1>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/defaultpic.png" alt="Card image cap"/>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 ECE Student's</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
