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
<div id='liste-oeuvres'>
<?php require_once(__DIR__ . '/oeuvres.php');

    /*etape4*/
    /*parcourir le tableau d'oeuvre *afficher la vignette de l'oeuvre */
    foreach ($arts as $art) 
    {
        echo "<article class='oeuvre'>";
        echo "<a href='oeuvre.php?id={$art['id']}'>";
        echo "<img src='{$art['img']}' alt='{$art['img']}'>";
        echo "<h2>{$art['title']}</h2>";
        echo "<p class='description'>{$art['author']}</p>";
        echo "</article>";
    }

?>
</div>

    </main>

    <?php require_once(__DIR__ . '/footer.php'); ?>

</body>
</html>
