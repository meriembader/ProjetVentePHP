
<?php
	/**
	* 
	*/
	class Produit
	{
		public $reference;
		public $nom;
		public $quantite_total;
		public $prix;
		public $chemin_img;
		private $description;
		private $reference_sous_categorie;
		
		function __construct($reference,$nom,$quantite_total,$prix,$chemin_img,$description)
		{
			$this->reference=$reference;
			$this->nom=$nom;
			$this->quantite_total=$quantite_total;
			$this->prix=$prix;
			$this->chemin_img=$chemin_img;
			$this->description=$description;
			
		}

		function getReference(){
			return $this->reference;
		}
		function getNom(){
			return $this->nom;
		}
		function getQuantite_total(){
			return $this->quantite_total;
		}
		function getPrix(){
			return $this->prix;
		}
		function getChemin_img(){
			return $this->chemin_img;
		}
		function getDescription(){
			return $this->description;
		}
		

		function setReference($reference){
			$this->reference=$reference;
		}
		function setNom($nom){
			$this->nom=$nom;
		}
		function setQuantite_total($quantite_total){
			$this->quantite_total=$quantite_total;
		}
		function setPrix($prix){
			$this->prix=$prix;
		}
		function setChemin_img($chemin_img){
			$this->chemin_img=$chemin_img;
		}
		function setDescription($description){
			$this->description=$description;
		}
		
	}

  ?>
