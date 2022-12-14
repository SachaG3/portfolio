<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/screen.css">
    <link href="minecraft.ttf">
    <title>Portfolio</title>
</head>
<body>
    <nav>
        <div>
            <p id='Portfolio'>Porfolio</p>
            <?php
            include("php/menu.php")
            ?>
        </div>
    </nav>
    <section id="Accueil">
        <?php
            include("php/info.php");
            echo nomprenom();
        ?>
        <a class="button" href="#popup1">Clique ici </a>
        <img src="../img/images.jpg">
        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Salut je suis un developpeur en devenir !!!</h2>
                <a class="close" href="#">&times;</a>
            </div>
        </div>
    </section>
    <section id="A propos">
    
    </section>
</body>
</html>