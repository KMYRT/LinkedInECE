<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=web','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$publication=$_POST['publication'];


if (isset($_POST['publier']) && $publication!=NULL){
    $req1= $pdo->prepare('INSERT INTO publication(id_utilisateur, nb_jaime, nb_comm, heure, date, contenu) VALUES(?, ?, ?, CURTIME(), CURDATE(), ?)');
    $req1->execute(array($_SESSION['id_utilisateur'],0,0,$publication));
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
            <ul class="nav navbar-nav">
              <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Inscription </a></li>
              <li><a href="connect.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
            </ul>
          </div>
        </nav>
        <div class="container">

              <nav>
                  <ul>
                      <div class="bloc2">
                          <aside>
                            <img src="images/<?php echo $_SESSION['profilpic']; ?>" alt="photoprofil" width="100" height="100" />
                          </aside>
                          <br>
                          <li><?php echo $_SESSION['prenom'] ?></li>
                          <li><?php echo $_SESSION['nom'] ?></li>
                          <li><?php echo $_SESSION['telephone'] ?></li>
                          <li>Pseudo : <?php echo $_SESSION['pseudo'] ?></li>
                          <li> Date de naissance : <?php echo $_SESSION['date_naissance'] ?></li>
                          <li>Adresse  : <?php echo $_SESSION['adresse'] ?></li>
                          <li>Email : <?php echo $_SESSION['email'] ?></li>
                          <a href="profilmodif.php"><button class=" btn btn-lg btn-primary" name="modifier_profil">Modifier votre profil</button></a>
                      </div>
                  </ul>

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


                        if($publi['contenu']!=NULL){ ?>
                    <div class="bloc">
                        <h2>@<?php echo $_SESSION['prenom'] ?></h2>
                        <p><br><?php echo $publi['contenu'] ?></p>
                        <p></p>
                    </div>
                    <?php
                        }
                      }
                      ?>
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




