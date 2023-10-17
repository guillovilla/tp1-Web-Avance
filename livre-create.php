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
    <title>Creer un client</title>
    <style>
        input, select{
            display: block;
            margin: 5px;
        }
    </style>
</head>
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
        <input type="submit" value="save">
    </form>
    
</body>
</html>