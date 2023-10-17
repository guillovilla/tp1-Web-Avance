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
    <title>Creer un client</title>
    <style>
        input{
            display: block;
            margin: 5px;
        }
    </style>
</head>
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
        <input type="submit" value="save">
    </form>
    
</body>
</html>