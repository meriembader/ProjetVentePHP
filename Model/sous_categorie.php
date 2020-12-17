<?php

	/**
	* 
	*/
	class sous_categorie
	{
		private $reference;
		private $nom;
		private $reference_categorie;
		
		function __construct($reference,$nom,$reference_categorie)
		{
			$this->reference=$reference;
			$this->nom=$nom;
			$this->reference_categorie=$reference_categorie;
		}

		function getReference(){
			return $this->reference;
		}
		function getNom(){
			return $this->nom;
		}
		function getReference_categorie(){
			return $this->reference_categorie;
		}

		function setReference($reference){
			$this->reference=$reference;
		}
		function setNom($nom){
			$this->nom=$nom;
		}
		function setReference_categorie($reference_categorie){
			$this->reference_categorie=$reference_categorie;
		}
	}

  ?>