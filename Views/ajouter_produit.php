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
    $pdo = pdo_connect_mysql();
    // Check if the produit reference exists, for example update.php?reference=1 will get the produit with the reference of 1
   
        if (!empty($_POST)) {
            $reference = isset($_POST['reference']) && !empty($_POST['reference']) && $_POST['reference'] != 'auto' ? $_POST['reference'] : NULL;
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $prix = isset($_POST['prix']) ? $_POST['prix'] : '';
            $chemin_img = isset($_POST['chemin_img']) ? $_POST['chemin_img'] : '';
            $quantite_total = isset($_POST['quantite_total']) ? $_POST['quantite_total'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            
            $stmt = $pdo->prepare('INSERT INTO produit VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([$reference, $nom, $prix, $chemin_img, $quantite_total, $description]);
            // Output message
            $msg = 'Created Successfully!';
        }


    
?>
 