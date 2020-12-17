<?php
  include_once "../Controller/produitC.php";
  include_once "../Model/produit.php";
  include_once "../views/layout.php";

  function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'projet';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
$msg = '';
$pdo = pdo_connect_mysql();
// Check if the produit id exists, for example update.php?id=1 will get the produit with the id of 1
if (isset($_GET['reference'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
      //  $reference = isset($_POST['reference']) ? $_POST['reference'] : NULL;
        $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $prix = isset($_POST['prix']) ? $_POST['prix'] : '';
        $chemin_img = isset($_POST['chemin_img']) ? $_POST['chemin_img'] : '';
        $quantite_total = isset($_POST['quantite_total']) ? $_POST['quantite_total'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE produit SET  nom = ?, prix = ?, chemin_img = ?, quantite_total = ?, description = ? WHERE reference = ?');
        $stmt->execute([ $nom, $prix, $chemin_img, $quantite_total, $description, $_GET['reference']]);
        $msg = 'Updated Successfully!';
    }
    // Get the produit from the produits table
 $stmt = $pdo->prepare('SELECT * FROM produit WHERE reference = ?');
   $stmt->execute([$_GET['reference']]);
  $produit = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$produit) {
       exit('produit doesn\'t exist with that reference!');
    }
} 
else {
    exit('No reference specified!');
}

?>
   <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                   
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="row">
                            <div class="col-md-12">

        <button><a href="list_produits.php">Retour à la liste des produits</a></button>
        
     
     
    
        <form action="modifier_produit.php?reference=<?=$produit['reference']?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='nom' value ="<?php echo $produit['nom'];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>prix</td>
            <td><input type='text' name='prix'  value ="<?php echo $produit['prix'];?>" class='form-control' /></td>
        </tr>
        
        <tr>
            <td>chemin_img</td>
            <td><input type='text' name='chemin_img'  value ="<?php echo $produit['chemin_img'];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>quantite_total</td>
            <td><input type='text' name='quantite_total'value ="<?php echo $produit['quantite_total'];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>description</td>
            <td><input type='text' name='description'value ="<?php echo $produit['description'];?>" class='form-control' /></td>
        </tr>
     
       
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save Changes' class='btn btn-primary' />
                <a href='index.php' class='btn btn-danger'>Back to read products</a>
            </td>
        </tr>
    </table>
</form>
<?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>

      <?php
  
  ?>
    </div>
                                    <!-- END DATA TABLE -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>