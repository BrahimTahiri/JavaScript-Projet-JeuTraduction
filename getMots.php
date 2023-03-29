<?php 
    $th = $_GET['th']; //Début du libellé du produit
    $bdd = new PDO('mysql:host=localhost;dbname=bloc2_javascript_projet_jeutraduction;charset=UTF8', 'root', 'root')
		or die('Erreur connexion à la base de données');
    $requete="SELECT * FROM mots WHERE themes = '$th';";
	$resultat= $bdd->query($requete);
	$Mots=$resultat->fetchAll(PDO::FETCH_ASSOC); 
	echo json_encode($Mots);
?>