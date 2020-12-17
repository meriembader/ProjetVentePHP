<?php

	/**
	* 
	*/
	class categorie
	{
		private $reference;
		private $nom;


		function __construct($reference,$nom)
		{
			$this->reference=$reference;
			$this->nom=$nom;
		}

		function getReference(){
			return $this->reference;
		}
		function getNom(){
			return $this->nom;
		}

		function setReference($reference){
			$this->reference=$reference;
		}
		function setNom($nom){
			$this->nom=$nom;
		}
	}
	

  ?>
