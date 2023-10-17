<?php
require_once('class/CRUD.php');

$crud = new CRUD;
$insert = $crud->insert('livre', $_POST);

header("location:livres-index.php");

?>