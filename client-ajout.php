<?php
require_once('class/CRUD.php');

$crud = new CRUD;
$insert = $crud->insert('usager', $_POST);

header("location:client-index.php");

?>