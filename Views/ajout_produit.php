<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de produit</title>
    <h1>Ajout de produit</h1>
</head>
    <body>
        <button><a href="list_produits.php">Retour à la liste des produits</a></button>
       <hr>

        
        <form action="ajouter_produit.php" method="POST">
            <table border="1" align="center">

                <tr>
                   
                    <td>
                        <label for="reference">Reference:
                        </label>
                    </td>
                    <td><input type="text" name="reference" id="reference" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20" ></td>
                </tr>
                
             
                <tr>
                  
                    <td>
                        <label for="prix">Prix(en DT):
                        </label>
                    </td>
                     <td>
                        <input type="prix" name="prix" id="prix" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="chemin_img">Image:
                        </label>
                    </td>
                    <td>
                        <input type="chemin_img" name="chemin_img" id="chemin_img"  >
                    </td>
                </tr>
                   <tr>
                  
                    <td>
                        <label for="quantite_total">Qunatité totale:
                        </label>
                    </td>
                     <td>
                        <input type="quantite_total" name="quantite_total" id="quantite_total"  >
                    </td>
                </tr>
                   <tr>
                  
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                     <td>
                        <input type="text" name="description" id="description" >
                    </td>
                </tr>
                   
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Enregistrer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
     
    </body>
</html>