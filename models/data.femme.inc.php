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
                "couturier" => "",
                "prix" => $row['price'],
            ];
        }
    }


    $conn->close();


    return $images;
}

// Appeler la fonction pour récupérer les données
$images = getProductsData();

// // Afficher le tableau résultant
// echo "<pre>";
// print_r($image);
// echo "</pre>";

$imageContainers = '';
foreach ($images as $product) {
    $imageContainers .= '<div style="border: 1px solid #ddd; padding: 10px; width: 300px;">
         <img src="' . $product['image'] . '" alt="' . $product['titre'] . '" style="max-width: 100%; height: auto;">
         <h3>' . $product['titre'] . '</h3>
         <p>' . $product['description'] . '</p>
         <p>Prix:' . $product['prix'] . '</p>
     </div>';
};

$image = [

    $img1 = [
        "id" => 1,
        'titre' => "Robe kabyle verte",
        "image" => "../imageRobes/vetementfemme/robeKabyle_1.jpg",
        "description" => "Robe longue traditionnel pour femme de couleur verte avec col en v et motif de fleur.",
        "couturier" => "",
        "prix" => "30$",

    ],

    $img2 = [
        "id" => 2,
        "titre" => "Robe kabyle blanche",
        "image" => "../imageRobes/vetementfemme/robeKabyle_2.jpg",
        "description" => "Robe longue traditionnel pour femme de couleur blanche avec col en v et motif de fleur.",
        "couturier" => "",
        "prix" => "30$",

    ],

    $img3 = [
        "id" => 3,
        "titre" => "Robe kabyle vert fonce",
        "image" => "../imageRobes/vetementfemme/robeKabyle_3.jpg",
        "description" => "Robe longue traditionnel pour femme de couleur vert foncer avec col en v et motif de fleur.",
        "couturier" => "",
        "prix" => "35$",

    ],

    $img4 = [
        "id" => 4,
        "titre" => "Robe kabyle aqua",
        "image" => "../imageRobes/vetementfemme/robeKabyle_4.jpg",
        "description" => "Robe longue traditionnel pour femme de couleur aqua avec col en v et motif de fleur.",
        "couturier" => "",
        "prix" => "30$",

    ],
    $img5 = [
        "id" => 5,
        "titre" => "Robe kabyle traditionnel",
        "image" => "../imageRobes/vetementfemme/robeKabyle_5.jpg",
        "description" => "Robe longue traditionnel pour femme de couleur jaune avec col en v et motif broder traditionnel.",
        "couturier" => "",
        "prix" => "40$",

    ],
    $img6 = [
        "id" => 6,
        "titre" => "Robe kabyle blanche",
        "image" => "../imageRobes/vetementfemme/robeKabyle_6.jpg",
        "description" => "Robe longue traditionnel pour femme de couleur blanche avec col en v et motif de fleur.",
        "couturier" => "",
        "prix" => "30$",

    ],
];
