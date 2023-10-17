<?php
require_once('class/CRUD.php');

$crud = new CRUD;
$delete = $crud->delete('usager', $_POST['id']);

?>