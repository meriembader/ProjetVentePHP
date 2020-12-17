<?php
  include_once "../Controller/produitC.php";
  include_once "../Model/produit.php";
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
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $reference = isset($_POST['reference']) ? $_POST['reference'] : NULL;
        $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $prix = isset($_POST['prix']) ? $_POST['prix'] : '';
        $chemin_img = isset($_POST['chemin_img']) ? $_POST['chemin_img'] : '';
        $quantite_total = isset($_POST['quantite_total']) ? $_POST['quantite_total'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE produit SET reference = ?, nom = ?, prix = ?, chemin_img = ?, quantite_total = ?, description = ? WHERE reference = ?');
        $stmt->execute([$reference, $nom, $prix, $chemin_img, $quantite_total, $description, $_GET['reference']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
   // $stmt = $pdo->prepare('SELECT * FROM contacts WHERE id = ?');
  //  $stmt->execute([$_GET['id']]);
  //  $contact = $stmt->fetch(PDO::FETCH_ASSOC);
  //  if (!$contact) {
 //       exit('Contact doesn\'t exist with that ID!');
 //   }
//} 
else {
    exit('No ID specified!');
}
}

?>