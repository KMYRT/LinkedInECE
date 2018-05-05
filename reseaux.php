<?php
session_start();

try {
        $pdo = new PDO('mysql:host=localhost;dbname=web','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        if($pdo!=0){
            echo 'Connexion reussie';
        }
    }catch (PDOException $e) {
        echo 'Erreur connexion BDD'.$e->getMessage();
    }

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
    <style>
        .bloc {
            padding-top: 5px;
            padding-left: 5px;
            padding-bottom: 5px;
            padding-right: 5px;
            margin-bottom: 20px;
            margin-top: 20px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -moz-box-shadow: 0 0 20px #555;
            -webkit-box-shadow: 0 0 20px #555;
            box-shadow: 0 0 20px #555;
            width:auto;
        }
      </style>

    <title>my Réseau</title>

    <!-- Bootstrap core CSS
    <link href="bootstrap.min.css" rel="stylesheet">-->

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


      <section class="jumbotron text-center">
        <div class="container">
          <h2 class="jumbotron-heading">Mon Réseau</h2>
        </div>
        <div class="container">
            <?php
              $req_ami = $pdo->prepare('SELECT * FROM utilisateur INNER JOIN amitie ON utilisateur.id_utilisateur = amitie.id_ami WHERE amitie.id_utilisateur = ?');
              $req_ami->execute(array($_SESSION['id_utilisateur']));
              while ($ami = $req_ami->fetch())
              {
                if($ami!=NULL){
            ?>
                  <div class="col-md-4">
                    <div class="bloc">
                    <?php echo $ami['prenom'],' ', $ami['nom'] ;?>
                      <div>
                        <img class="card-img-top" src="images/<?php echo $ami['profil_pic']; ?>" alt="Card image cap" height="150" width="150" />
                        <button type="button" class="btn btn-sm btn-outline-secondary" name="btn<?php $ami['id_utilisateur']  ?>">Ajouter</button>
                      </div>
                    </div>
            </div>
           <?php
                }
              }
           ?>
        </div>
      </section>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <hr class="mb-4">
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
