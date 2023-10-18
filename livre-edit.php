<?php
if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];
    require_once('class/CRUD.php');
    $crud = new CRUD;
    $livre = $crud->selectId('livre', $id);
    extract($livre);
}else{
    header('location:livre-index.php');
}
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
    <h1>Modifier un livre</h1>
    <form action="livre-update.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <label>Titre
            <input type="text" name="titre" value="<?= $titre; ?>">
        </label>
        <label>Auteur
            <input type="text" name="auteur" value="<?= $auteur; ?>">
        </label>
        <label>ISBN
            <input type="text" name="isbn"  value="<?= $isbn; ?>">
        </label>
        <input type="submit" value="sauvegarder">
    </form>
    
</body>
</html>