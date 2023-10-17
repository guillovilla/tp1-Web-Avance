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
    <main>

        <h1>Client</h1>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Phone</th>
                <th>Courriel</th>
                <th>Editer</th>
                <th>Suprimer</th>
            </tr>

            <?php
            foreach($usager as $row){

            ?>

                <tr>
                    <td><?= $row['nom']?></a></td>
                    <td><?= $row['prenom']?></a></td>
                    <td><?= $row['adresse']?></td>
                    <td><?= $row['phone']?></td>
                    <td><?= $row['courriel']?></td>
                    <td><a href="client-edit.php?id=<?= $row['id']?>">Modifier</a></td>
                    <td><form action="client-delete.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <br>
                    <input type="submit" value="Delete">
                    </form></td>
                    
                </tr>
            <?php
            }
            ?>
            <td><a href="client-create.php">Ajouter un nouveau usager</a></td>
        </table>
  
                
    </main>
    <footer>
        Copyright, 2023.

    </footer>
    
    
</body>
</html>