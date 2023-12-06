<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Vetement pour femme</title>
    <link rel="stylesheet" type="text/css" href="../css/vetement.css">
</head>

<body>
    <form method="post">
        <?php
        include '../models/data.femme.inc.php';
        $dbImageData = getProductsData();
        $imageContainer = '';
        foreach ($image as $img) {
            $dbImage = array_filter($dbImageData, function ($dbImg) use ($img) {
                return $dbImg['id'] == $img['id'];
            });

            // Si des informations de la base de données sont trouvées, les fusionner avec les informations du tableau
            if (!empty($dbImage)) {
                $dbImage = reset($dbImage); // Récupérer le premier élément du tableau (la valeur unique)
                $img = array_merge($img, $dbImage);
            }

            $imageContainer .= '<div class="card">
            <img class="card-img-top" src="' . $img['image'] . '" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">' . $img['titre'] . '</h5>
                <p class="card-text">' . $img['description'] . '</p>
                <button type="submit" name="ajouter" id="ajouter' . $img['id'] . '" class="btn btn-info" value="' . $img['id'] . '"><img id="cart" src="./media/cart.png" /></button>    
                <button type="button" class="btn btn-warning price">' . $img['prix'] . '</button>         
                <a href="detailimage.php?id=' . $img['id'] . '" class="btn btn-info" id="Details">Details</a>
            </div>
        </div>';
        }


        // Envelopper les images dans une div "container" pour les afficher côte à côte
        echo '<div class="image-container">' . $imageContainer . '</div>';


        ?>
    </form>
</body>

</html>