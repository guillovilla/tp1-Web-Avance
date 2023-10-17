<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp1</title>

    <link rel="stylesheet" href="assets/styles/styles.css">

</head>
<body>
    <header>
        <h1> Bibliothèque Municipale</h1>
    </header>
<nav>
        <ul role="menubar">
            <li role="menuitem" aria-label="Menu accueil" aria-haspopup="false"><a href="index.php">Accueil</a></li>
            <li role="menuitem" aria-label="Menu usager" aria-haspopup="false"><a href="client-index.php">Usagers</a></li>
            <li role="menuitem" aria-label="Menu livres" aria-haspopup="false"><a href="livres-index.php">Livres</a></li>
        </ul>
    </nav>
    <main>
    <div class="banner">
        <img src="img/bann.jpg" alt="">
    </div>
    
    <div class="buttons-container">
        <button class="main-button" onclick="window.location.href='client-index.php'">Usagers</button>
        <button class="main-button" onclick="window.location.href='livres-index.php'">Livres</button>
        
    </div>
</main>

    <footer>
        Copyright, 2023.

    </footer>
    
    
</body>
</html>