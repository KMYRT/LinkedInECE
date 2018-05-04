<?php include ('trtm_connexion.php')
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

<div class="container">
  <body class="text-center">
      <div class="container">
        <h1 class="h3 text-center font-weight-normal">Bienvenue sur LinkedECE</h1>
          <h2 class="h3 text-center font-weight-normal"></h2>
        <form class="form-horizontal" method="post" action="trtm_connexion.php">
        <img src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">E-mail :</label>
                <div class="col-sm-10">
                    <input type="email" id="inputEmail" name ="email" class="form-control" placeholder="Adresse email" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPseudo" class="control-label col-sm-2">Pseudo :</label>
                <div class="col-sm-10">
                    <input type="text" id="inputPseudo" class="form-control" placeholder="Pseudo" name="pseudo" required>
                </div>
            </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Se souvenir de moi
            </label>
            </div>
            <button class="btn btn-xs btn-primary" type="submit" name="connexion">Connexion</button>
            <a href="register.php"><button class=" btn btn-xs btn-primary" type="button" name="inscription">S'inscrire</button></a>
            <p class="mt-3 text-muted">&copy; 2017-2018</p>
     </form>
  </div>
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
