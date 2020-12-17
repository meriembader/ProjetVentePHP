<?php
	
	include_once "../../config.php";

	/**
	* 
	*/
	class categorieC
	{
		
		function afficher(){
			$db = config::getConnexion();
			$sql = "SELECT * FROM categorie ";
			$liste = $db->query($sql);
			return $liste;
		}

		function ajouter($categorie){
			$db = config::getConnexion();
			$sql = "INSERT INTO categrie VALUES(:reference,:nom)";
			$req = $db->prepare($sql);
			$req->bindValue(':reference',$categorie->getReference());
			$req->bindValue(':nom',$categorie->getNom());
			$req->execute();
		}

		function recuperer($nom){
			$db = config::getConnexion();
			$sql = "SELECT * FROM categorie WHERE nom=:nom";
			$req=$db->prepare($sql);
			$req->bindValue(':nom',$nom);
			return $req;
		}

		
	}


?>
