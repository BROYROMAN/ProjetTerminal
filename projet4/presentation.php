<?php
	function entete() {
		echo'<!doctype html >
			<html lang="fr">
	<head>
		<meta charset ="utf-8">
		<title> AllOnFoot </title>
	</head>
	<body>';
	}
	function baspage() {
		echo'</body>
		     </html>';
	}
	function menu() {
		echo '
    <ul>
      <li><a href="ajoutclient.php">Ajouter un client</a></li>
	<li><a href="listeclient.php">Liste des client</a></li>
	<li><a href="ajoutproduit.php">Ajouter un produit</a></li>
	<li><a href="listeproduit.php">Listes des produits</a></li>
	<li><a href="ajouttype.php">Ajouter un type</a></li>
	<li><a href="listetype.php">Liste des types</a></li>
	<li><a href="ajoutcommande.php">Ajouter une commande</a></li>
	<li><a href="listecommande.php">Liste des commandes</a></li>
	<li><a href="ajoutlignedecommande.php">Ajouter ligne de commande</a></li>
	<li><a href="listelignedecommande.php">Liste des lignes de commandes</a></li>
	<li><a href="ajouttaille.php">Ajouter une taille</a></li>
	<li><a href="listetaille.php">Liste des tailles</a></li>
	<li><a href="ajoutpointure.php">Ajouter une pointure</a></li>
	<li><a href="listepointure.php">Liste des pointures</a></li>
    </ul>
    ';
	}
?>

	
