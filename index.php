<?php require 'classes/Database.php';

$database = new Database();
$rows = $database->query('SELECT * FROM posts');
$rows = $database->resultset();

print_r($rows);

?>
