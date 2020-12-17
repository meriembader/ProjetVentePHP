 <?php
 
  include_once "../Controller/produitC.php";
  include_once "../Model/produit.php";
$produitC=new produitC();
 
 if(isset($_POST['supprimer'])){
    
    $produitC->supprimerproduit($_POST['reference']);
    header('location: list_produits.php');
  } /*
  else if (isset($_GET['modif'])) {

    $Produit=new Produit($_GET['R'],$_GET['Nom'],$_GET['Quantite'],$_GET['Prix'],$_GET['date'],$_GET['Description'],$_GET['sous']);
    $produitC->modifierproduit($Produit,$Produit->getReference());
    header('location: LISTE PRODUIT.php');
  }
   $produitC=new produitC();
    if (
        isset($_POST["reference"]) && isset($_POST["nom"]) &&isset($_POST["prix"]) && isset($_POST["chemin_img"])) {
        if (
            !empty($_POST["reference"]) && 
            !empty($_POST["nom"]) && 
            !empty($_POST["prix"]) && 
            !empty($_POST["chemmin_img"])
        ) {
            $produit = new produit($_POST['reference'],$_POST['nom'], $_POST['prix'],$_POST['chemin_img']);
            $produitC->ajouter($produit);
            header('Location:list_produits.php');
        }
        else
            $error = "Missing information";
    }
      $produit = new produit($_POST['reference'],$_POST['nom'], $_POST['prix'],$_POST['chemin_img'],$_POST['quantite_total'],$_POST['description']);
   /* $reference=$_GET["reference"];
     $nom=$_GET["nom"];
      $chemin_img=$_GET["chemin_img"];
       $prix=$_GET["prix"];
       $produitC->ajouter($produit);
        header('Location:list_produits.php');*/
  ?>
