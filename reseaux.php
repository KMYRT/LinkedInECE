<?php
session_start();

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

  <body>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-12 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Réseaux</h1>

        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
    </div>


    </body>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>

</html>
