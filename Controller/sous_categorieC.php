<?php
	include_once "../../config.php";
	include_once "categorieC.php";
	/**
	* 
	*/
	class sous_categorieC
	{
		function recuperer($reference_categorie){
			$db = config::getConnexion();
			$sql = "SELECT * FROM sous_categorie WHERE reference_categorie = $reference_categorie";
			$liste = $db->query($sql);
			return $liste;
		}

		function ajouter($sous_categorie,$reference_categorie){
			$db = config::getConnexion();
			$sql = "INSERT INTO sous_categorie VALUES (:reference,:nom,:reference_categorie)";
			$req = $db->prepare($sql);
			$req->bindValue(':reference',$sous_categorie->getReference());
			$req->bindValue(':nom',$sous_categorie->getNom());
			$sous_categorie->setReference_categorie($reference_categorie);
			$req->bindValue(':reference_categorie',$sous_categorie->getReference_categorie());
			$req->execute();
		}

		function recuperer1($nom){
			$db = config::getConnexion();
			$sql = "SELECT reference FROM sous_categorie where nom=:nom";
			$req=$db->prepare($sql);
			$req->bindValue(':nom',$nom);
			return $req;
		}

		function afficher(){
			$db = config::getConnexion();
			$sql = "SELECT reference FROM sous_categorie";
			$req=$db->prepare($sql);
			return $req;
		}
		/*function recuperer1($reference){
			$db = config::getConnexion();
			$sql = "SELECT nom FROM sous_categorie WHERE reference_categorie = $reference";
			$l = $db->query($sql);
			return $l;
		}*/
	}


  ?>0