<?php
include_once '../controllers/addProduit.php';

$produit = new produits();
$AddProduit = $produit->newProduct();

?>
<link rel="stylesheet" href="../css/addproduit.css">
<a href="VetementFemme.php" class="link">Listes des photos</a>

<div class="addproduit">
<p class="error"><u>Remplir le formulaire</p></u>

<form action="#" method="POST" enctype="multipart/form-data">
    <label for="">Ajouter une photo</label>
    <input type="file" name="image" id="image">
    <br><br>
    <label for="">Description</label>
    <textarea name="desc" id="desc" cols="20" rows="2"></textarea>
    <br><br>
    <label for="">Nom du produit</label>
    <input type="text" name="name">
    <br><br>
    <label for="">Quantiter</label>
    <input type="number" name="qty">
    <br><br>
    <label for="">Prix</label>
    <input type="number" name="price">
    <br>
    <button type="submit" name="submit">Ajouter</button>

</form>
</div>