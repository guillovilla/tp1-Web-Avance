<?php
require_once('class/CRUD.php');
$crud = new CRUD;
$usager = $crud->select('usager', 'nom');

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
    <form class="form-modif" action="client-ajout.php" method="post">
        <label>Nom
            <input type="text" name="nom">
        </label>
        <label>Prenom
            <input type="text" name="prenom">
        </label>
        <label>Adresse
            <input type="text" name="adresse">
        </label>
        <label>Phone
            <input type="text" name="phone">
        </label>
        <label>Courriel
            <input type="email" name="courriel">
        </label>
        <input type="submit" value="sauvegarder">
    </form>
    
</body>
</html>