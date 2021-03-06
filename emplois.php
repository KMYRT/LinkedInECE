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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="../../../../favicon.ico">
    <style>

            .bloc3 {
                padding-top: 5px;
                padding-left: 5px;
                padding-bottom: 5px;
                padding-right: 5px;
                margin-bottom: 20px;
                margin-top: 20px;
            }
            .bloc2 {
                padding-top: 5px;
                padding-left: 5px;
                padding-bottom: 5px;
                padding-right: 5px;
                float:left;
                width:300px;
                height: auto;
            }
            .bloc1 {
              margin-left:30em;
              text-align:center;
                padding-top: 10px;
                padding-left: 10px;
                padding-bottom: 10px;
                padding-right: 10px;
                float:auto;
                width:420px;
                height:auto;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                -moz-box-shadow: 0 0 20px #555;
                -webkit-box-shadow: 0 0 20px #555;
                box-shadow: 0 0 20px #555;
            }
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
                width:400px;
            }
            .bloc h2 {
                margin:auto;
                padding:5px;
                font-size:1.5em;
                color:#fff;
                background-color:#9DADC6;
                border:1px solid #8E98A4;
                border-bottom:0;
                -webkit-border-radius: 10px 10px 0 0;
                -moz-border-radius: 10px 10px 0 0;
                border-radius: 10px 10px 0 0;
            }

      </style>
    <title>Mon réseau</title>

   <!-- <link href="bootstrap.min.css" rel="stylesheet">-->



    <link href="emplois.css" rel="stylesheet">
  </head>


  <body>

      <nav name="header" class="navbar navbar-inverse ">
        <div class="container-fluid">
          <ul class="nav navbar-nav ">
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

      <section>
                <br>
                <div class="bloc1">
                <h3> Publications </h3>
                    <div class="bloc3">
                        <form method="post" action="profil.php">
                            <label for="publication">Entrez votre publication... </label>
                            <input type="text" class="form-control" name="publication" placeholder="" value=""><br>
                            <button class=" btn btn-xs btn-primary" type="submit" name="publier">Publier</button>
                        </form>


                    </div>

                <?php $req_publi = $pdo->query('SELECT utilisateur.nom, utilisateur.prenom, publication.contenu FROM utilisateur INNER JOIN publication ON utilisateur.id_utilisateur=publication.id_utilisateur');
                      while ($publi = $req_publi->fetch())
			          {

                        if($publi['contenu']!=NULL){ ?>
                    <div class="bloc">
                        <h2>@<?php echo $publi['prenom'] ?></h2>
                        <p><br><?php echo $publi['contenu'] ?></p>
                    </div>
                    <?php
                        }
                      }
                      ?>
                </div>
            </section>

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
    <br>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <hr class="mb-4">
        <p class="mb-1">&copy; 2017-2018 ECE Student's</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>

</html>
