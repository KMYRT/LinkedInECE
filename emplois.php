<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Mon réseau</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="emplois.css" rel="stylesheet">
  </head>


  <body>

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


    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">

          <a class="nav-link" href="#">Amis
          <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>

        <a class="nav-link" href="#">Recherche</a>
        <a class="nav-link" href="#">Suggestions</a>
        <a class="nav-link" href="#">Demandes en attente</a>
      </nav>
    </div>

    <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="https://getbootstrap.com/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Mon réseau</h6>
          <small>LinkedECE</small>
        </div>
      </div>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Suggestions</h6>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Full Name</strong>
              <a href="#">Ajouter</a>
            </div>
            <span class="d-block">@username</span>
          </div>
        </div>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Full Name</strong>
              <a href="#">Ajouter</a>
            </div>
            <span class="d-block">@username</span>
          </div>
        </div>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Full Name</strong>
              <a href="#">Ajouter</a>
            </div>
            <span class="d-block">@username</span>
          </div>
        </div>
        <small class="d-block text-right mt-3">
          <a href="#">All suggestions</a>
        </small>
      </div>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>
