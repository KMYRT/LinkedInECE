<?php

session_start();

$_SESSION['id_utilisateur']="";
$_SESSION['email']="";
$_SESSION['nom']="";
$_SESSION['adresse']="";
$_SESSION['prenom']="";
$_SESSION['date_naissance']="";
$_SESSION['pseudo']="";
$_SESSION['telephone']="";
$_SESSION['profilpic']="";

try {
        $pdo = new PDO('mysql:host=localhost;dbname=web','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        if($pdo!=0){
            echo 'Connexion reussie';
        }
    }catch (PDOException $e) {
        echo 'Erreur connexion BDD'.$e->getMessage();
    }



// Vérification de l'indentification
$req1= $pdo->prepare('SELECT * FROM utilisateur WHERE email=:email AND pseudo=:pseudo');
$req1->execute(array('email' => $_POST['email'], 'pseudo' => $_POST['pseudo']));


$resul=$req1->fetch();



if (isset($_POST['connexion']))
{
if (!$resul)
{
    echo 'Erreur email ou pseudo !';
    header("Location:connect.php");
}
else
{
    echo 'Bienvenue';
    $_SESSION['id_utilisateur']=$resul['id_utilisateur'];
    $_SESSION['email']=$resul['email'];
    $_SESSION['nom']=$resul['nom'];
    $_SESSION['adresse']=$resul['adresse'];
    $_SESSION['prenom']=$resul['prenom'];
    $_SESSION['date_naissance']=$resul['date_naissance'];
    $_SESSION['pseudo']=$resul['pseudo'];
    $_SESSION['telephone']=$resul['telephone'];
    $_SESSION['profilpic']=$resul['profil_pic'] ;

    header("Location:profil.php");

}
}


?>

