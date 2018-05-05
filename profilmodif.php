<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=web','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$publication=$_POST['publication'];
$modif_publi=$_POST['modif_publi'];

if (isset($_POST['modifier'])){
    $req_publi = $pdo->prepare('SELECT * FROM publication WHERE id_utilisateur = ?');
    $req_publi->execute(array($_SESSION['id_utilisateur']));
    $id_publi =$req_publi['id_publi'];
    echo id_publi;

    $req1= $pdo->prepare('UPDATE publication SET contenu=? WHERE id_publi=?');
    $req1->execute(array($modif_publi,$id_publi));
    header("Location:profilmodif.php");
}


if (isset($_POST['supprimer'])){
    $req_publi = $pdo->prepare('SELECT * FROM publication WHERE id_utilisateur = ?');
    $req_publi->execute(array($_SESSION['id_utilisateur']));
    $id_publi =$publi['id_publi'];


    $req1= $pdo->prepare('DELETE FROM publication WHERE id_publi=?');
    $req1->execute(array($id_publi));
    header("Location:profil.php");
}

if (isset($_POST['modif_profil'])){

    $_SESSION['email']= $_POST['email'];
    $_SESSION['nom']=$_POST['nom'];
    $_SESSION['adresse']=$_POST['adresse'];
    $_SESSION['prenom']=$_POST['prenom'];
    $_SESSION['date_naissance']=$_POST['dateNaissance'];
    $_SESSION['pseudo']=$_POST['pseudo'];
    $_SESSION['telephone']=$_POST['telephone'];


    $req_modif = $pdo->prepare('UPDATE utilisateur SET nom = ?, prenom = ?, email = ?, date_naissance = ?, pseudo = ?, adresse = ?, telephone = ? WHERE id_utilisateur = ?');
    $req_modif->execute(array($_SESSION['nom'],$_SESSION['prenom'],$_SESSION['email'],$_SESSION['date_naissance'],$_SESSION['pseudo'],$_SESSION['adresse'],$_SESSION['telephone'],$_SESSION['id_utilisateur']));
    $id_publi =$req_publi['id_publi'];
    echo id_publi;

    $req1= $pdo->prepare('UPDATE publication SET contenu=? WHERE id_publi=?');
    $req1->execute(array($modif_publi,$id_publi));
    header("Location:profil.php");
}



   if(isset($_FILES['photoprofil'])){
      $errors= array();
      $file_name = $_FILES['photoprofil']['name'];
      $file_size =$_FILES['photoprofil']['size'];
      $file_tmp =$_FILES['photoprofil']['tmp_name'];
      $file_type=$_FILES['photoprofil']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['photoprofil']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
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

              <div class="col-md-6">
                  <h3>Modifiez votre profil</h3>

                    <form method="post" class="needs-validation" action="trtm_inscr.php">
                         <div>
                             <label>Photo de profil</label>

                                <form method="post"  action="profilmodif.php">
                                    <img src="images/<?php echo $_SESSION['profilpic']; ?>" alt="photoprofil" width="100" height="100" />
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <input type="file" name="photoprofil" />
                                    </form>
                                        <div>
                                            <label for="prenom">Prenom</label>
                                            <input type="text" class="form-control" value="<?php echo $_SESSION['prenom'] ?>" name="prenom" placeholder="" value="" required>
                                        </div>
                                        <div>
                                            <label for="nom">Nom</label>
                                            <input type="text" class="form-control" value="<?php echo $_SESSION['nom'] ?>" name="nom" placeholder="" value="" required>
                                        </div>

                                        <div>
                                            <div class="input-group">
                                                <label for="pseudo">Pseudo</label>
                                                <input type="text" class="form-control" value="<?php echo $_SESSION['pseudo'] ?>" name="pseudo" placeholder="Pseudo" required>
                                            </div>
                                          </div>

                                          <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" value="<?php echo $_SESSION['email'] ?>" name="email" placeholder="you@example.com">
                                          </div>

                                          <div class="mb-3">
                                            <label for="adresse">Addresse</label>
                                            <input type="text" class="form-control" value="<?php echo $_SESSION['adresse'] ?>" name="adresse" placeholder="" required>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-5 mb-3">
                                              <label for="telephone">Telephone</label>
                                              <input type="text" class="form-control" value="<?php echo $_SESSION['telephone'] ?>" name="telephone" placeholder="06..." required>

                                            </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-5 mb-3">
                                                  <label for="dateNaissance">Date de Naissance</label>
                                                  <input type="date" class="form-control" value="<?php echo $_SESSION['date_naissance'] ?>" name="dateNaissance" required>
                                              </div>
                                          </div>
                                          <hr class="mb-4">
                                            <a href="profil.php"><button class="btn btn-success btn-lg " name="modif_profil" type="submit">Modifier</button></a>
                                        </form>
                                  <div>
                                    <div>
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
                                                <form method="post" action="profilmodif.php">
                                                <input type="text" id="inputModif" value="<?php echo $publi['contenu'] ?> " width=150 class="form-control" name="modif_publi" required>
                                                <button class=" btn btn-xs btn-primary" type="submit" name="modifer">Modifier</button>
                                                <button class=" btn btn-xs btn-primary" type="submit" name="supprimer">Supprimer</button>
                                                </form>
                                            </div>
                                            <?php
                                                }
                                              }
                                              ?>
                                        </div>
                                    </section>

                                    </div>
                                     </div>
                        </div>
                  </form></div>


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




