<?php require_once(__DIR__ . '/oeuvres.php'); ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php require_once(__DIR__ . '/header.php'); ?>
<main>
    <?php

$id = $_GET['id'];/*stocker identifiant dans l'url*/

$index = array_search($id, array_column($arts, 'id'));
       

    if(isset ($index) && $index !==false) { /*verifier si index est définie*/
        $art = $arts[$index];
        if(is_array($art) && isset($art['id'])) {

        echo "<a href='oeuvre.php?id={$art['id']}'>"; /*vérifier si $art est bien un tableu*/
        echo "<article id='detail-oeuvre'>";
        
        echo "<div id='img-oeuvre'>";
        echo "<a href='oeuvre.php?id={$art['id']}'>";
        echo "<img src='{$art['img']}' alt='{$art['img']}'>";
        echo "</a>";
        echo "</div>";

        echo "<div id='contenu-oeuvre'>";
        echo "<a href='oeuvre.php?id={$art['id']}'>";
        echo "<h2>{$art['title']}</h2>";
        echo "<p class='description'>{$art['author']}</p>";
        echo "<p class='description-complete'>{$art['text']}</p>";
        echo "</a>";
        echo "</div>";
        echo "</article>";
     } }

    else {
        echo "Les données de l'œuvre ne sont pas valides.";
    }
   
?>
</main>
<?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>
