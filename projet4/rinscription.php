<?php

require_once 'presentation.php';
entete();
menu();
echo 'Confirmation d\'inscription';   /* permet de récuperer les données du formulaire */
$Nom = addslashes($_POST['Nom']);
$Prenom = addslashes($_POST['Prenom']);
$calendrier = addslashes($_POST['calendrier']);
$Adresse = addslashes($_POST['Adresse']);
$CodePostal = addslashes($_POST['CodePostal']);
$Ville = addslashes($_POST['Ville']);
$Sexe = addslashes($_POST['Sexe']);
$Telephone = addslashes($_POST['Telephone']);
$email = addslashes($_POST['email']);
$Login = addslashes($_POST['Login']);
$psw = addslashes($_POST['psw']);

echo "<br />";				/* permet d'afficher les données du formulaire */
echo 'Nom: '.$Nom;
echo 'Prenom: '.$Prenom;
echo 'calendrier: '.$calendrier;
echo 'Adresse: '.$Adresse;
echo 'CodePostal: '.$CodePostal;
echo 'Ville: '.$Ville;
echo 'Sexe: '.$Sexe;
echo 'Telephone: '.$Telephone;
echo 'email: '.$email;
echo 'Login: '.$Login;
echo 'psw: '.$psw;

echo "<br />";
echo "<br />";



$serveur='localhost'; 		/* Connexion a la base de données */
$user='root';
$mdp='bacsig';
$bd='bdallonfoot';
$connexionMysql=mysql_connect($serveur,$user,$mdp);
$connexionBd=mysql_select_db($bd,$connexionMysql);
mysql_query("set names 'utf8'");  /* permet d'encoder les données en utf-8 */
$req="INSERT INTO Inscription(Nom,Prenom,calendrier,Adresse,CodePostal,Ville,Sexe,Telephone,email,Login,psw)
	VALUES ('$Nom','$Prenom','$calendrier','$Adresse','$CodePostal','$Ville','$Sexe','$Telephone','$email','$Login','$psw');";  /* Permet d'insérer les valeurs récupérer dans le formulaire  dans la table correspondante de la base de données. */
echo $req;
$requete=mysql_query($req);




baspage();
  
?>
