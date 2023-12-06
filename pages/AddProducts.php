<?php

// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupérer les valeurs du formulaire
    $imageName = $_POST['image'];
    $description = $_POST['desc'];
    $productName = $_POST['name'];
    $quantity = $_POST['qty'];
    $price = $_POST['price'];

    // Validation des données (vous pouvez ajouter plus de validation selon vos besoins)

    // Connexion à la base de données (à remplacer par vos propres informations)
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecom2_project";

    $conn = new mysqli($host, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO product (name, qtty, price, url_img, description) VALUES ('$productName', $quantity, $price, '$imageName', '$description')";

    // Exécuter la requête
    if ($conn->query($sql) === TRUE) {
        echo "Les données ont été insérées avec succès.";
    } else {
        echo "Erreur lors de l'insertion des données : " . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
}

?>

<a href="#" class="link">Listes des photos</a>
<p class="error">Remplir le formulaire</p>
<form action="#" method="POST">
    <label for="">Ajouter une photo</label>
    <input type="file" name="image">
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