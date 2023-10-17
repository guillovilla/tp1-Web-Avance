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
    <title>Creer un client</title>
    <style>
        input, select{
            display: block;
            margin: 5px;
        }
    </style>
</head>
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
        <input type="submit" value="save">
    </form>
    
</body>
</html>