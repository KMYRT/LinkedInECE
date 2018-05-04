<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=web','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$publication=$_POST['publication'];


if (isset($_POST['modifier'])){
    $req1= $pdo->prepare('UPDATE publication(id_utilisateur, nb_jaime, nb_comm, heure, date, contenu) VALUES(?, ?, ?, CURTIME(), CURDATE(), ?) WHERE id_publi=?');
    $req1->execute(array($_SESSION['id_utilisateur'],0,0,$publication,1));
    header("Location:profil.php");
}


if (isset($_POST['supprimer'])){
    $req1= $pdo->prepare('DELETE FROM publication WHERE id_publi=?');
    $req1->execute(array($id_publi));
    header("Location:profil.php");
}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Header</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
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
                padding-top: 5px;
                padding-left: 5px;
                padding-bottom: 5px;
                padding-right: 5px;
                float:right;
                width:auto;
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

              <nav>


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

                <?php $req_publi = $pdo->prepare('SELECT * FROM publication WHERE id_utilisateur = ?');
                      $req_publi->execute(array($_SESSION['id_utilisateur']));
                      while ($publi = $req_publi->fetch())
			          {

                        $id_publi =$publi['id_publi'];
                        if($publi['contenu']!=NULL){ ?>
                    <div class="bloc">
                        <h2>@<?php echo $_SESSION['prenom'] ?></h2>
                        <p><br><?php echo $publi['contenu'] ?></p>
                        <form method="post" action="profilmodif.php">
                        <label val="<?php echo $pulication?>" ></label>
                        <button class=" btn btn-xs btn-primary" type="submit" name="modifer">Modifier</button>
                        <button class=" btn btn-xs btn-primary" type="submit" name="supprimer">Supprimer</button>
                        </form>
                    </div>
                    <?php
                        }
                      }
                      ?>
                    s
                </div>
            </section>
        </div>
        </body>
    <br>
    <br>
    <br>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 ECE Student's</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>

</html>




