<?php
require_once('class/CRUD.php');

$crud = new CRUD;
$update = $crud->update('usager', $_POST);

header("location:client-index.php");

?>