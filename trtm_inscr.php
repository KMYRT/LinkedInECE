<?php

session_start();
$_SESSION['id_utilisateur']=0;
try {
        $pdo = new PDO('mysql:host=localhost;dbname=web','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        if($pdo!=0){
            echo 'Connexion reussie';
        }
    }catch (PDOException $e) {
        echo 'Erreur connexion BDD'.$e->getMessage();
    }
//parcourir la bdd
//chercher lepseudo correspondant à l'email verifier s'il est identique à celui rentré

if (isset($_POST['inscription']))
{

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
	$email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $date_naissance = $_POST['dateNaissance'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];

    $req_email = $pdo->prepare('SELECT email FROM utilisateur WHERE email=:email');
    $req_email->exec(array('email'=>$email));

    if(req_email==0){
    // Vérification de l'indentification
	$req = $pdo->prepare("INSERT INTO utilisateur SET nom=:nom, prenom=:prenom, email=:email, date_naissance=:dateNaissance, pseudo=:pseudo, adresse=:adresse, telephone=:telephone, profil_pic='defaultpic.png'");
    $req->execute(array('nom' => $nom, 'prenom' => $prenom,'email' => $email, 'dateNaissance' => $date_naissance, 'pseudo' => $pseudo,'adresse' => $adresse, 'telephone' => $telephone));

    //recupération id_utilisateur
    $req_id = $pdo->prepare('SELECT id_utilisateur from utilisateur WHERE email=:email');
    $req_id->execute(array($email));
    header("Location:connect.php");
    }
    else
    {
    echo 'Entre un autre email, il est déjà utilisé';
    header("Location:register.php");

    }
    $_SESSION['id_utilisateur']=$req_id['id_utilisateur'];



}

$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

?>




