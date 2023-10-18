<?php
require_once('class/CRUD.php');
$crud = new CRUD;
$usager = $crud->select('livre', 'titre');

?>
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
<body>
    <form class="form-modif" action="livre-ajout.php" method="post">
        <label>Titre
            <input type="text" name="titre">
        </label>
        <label>Auteur
            <input type="text" name="auteur">
        </label>
        <label>ISBN
            <input type="text" name="isbn">
        </label>
        <input type="submit" value="sauvegarder">
    </form>
    
</body>
</html>