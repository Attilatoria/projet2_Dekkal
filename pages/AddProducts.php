<?php
include_once "../models/CRUD.php";
// Vérifier si le formulaire a été soumis

// Exécuter la requête
if ($conn->query($sql) === TRUE) {
    echo "Les données ont été insérées avec succès.";
} else {
    echo "Erreur lors de l'insertion des données : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();


?>

<a href="#" class="link">Listes des photos</a>
<p class="error">Remplir le formulaire</p>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="">Ajouter une photo</label>
    <input type=" file" name="image" id="image">
    <br><br>
    <label for="">Description</label>
    <textarea name="desc" id="desc" cols="20" rows="2"></textarea>
    <br><br>
    <label for="">Nom du produit</label>
    <input type="text" name="name">
    <br><br>
    <label for="">Quantiter</label>
    <input type="number" name="qty">
    <label for="">Prix</label>
    <input type="number" name="price">
    <br>
    <button type="submit" name="submit">Ajouter</button>

</form>