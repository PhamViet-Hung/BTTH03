<?php
require_once 'database.php';

$database = new Database();

$id = $_GET['id'];

$database->xoaBaiHat($id);

header('Location: index.php');
exit;
?>