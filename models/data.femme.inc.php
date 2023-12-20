<?php
global $images;
function getProductsData()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecom2_project";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }


    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);

    // Tableau pour stocker les données récupérées


    // Vérifier si des données ont été trouvées
    if ($result->num_rows > 0) {
        // Parcourir chaque ligne de résultats
        while ($row = $result->fetch_assoc()) {
            // Ajouter les données dans le tableau $image
            $images[] = [
                "id" => $row['id'],
                "titre" => $row['name'],
                "image" => $row['url_img'],
                "description" => $row['description'],
                "couturier" => "Zazi Dekkal",
                "prix" => $row['price'],
            ];
        }
    }


    $conn->close();


    return $images;
}

// Appeler la fonction pour récupérer les données
$images = getProductsData();



$imageContainers = '';
foreach ($images as $product) {
    $imageContainers .= '<div style="border: 1px solid #ddd; padding: 10px; width: 300px;">
         <img src="' . $product['image'] . '" alt="' . $product['titre'] . '" style="max-width: 100%; height: auto;">
         <h3>' . $product['titre'] . '</h3>
         <p>' . $product['description'] . '</p>
         <p>Prix:' . $product['prix'] . '</p>
     </div>';
};

