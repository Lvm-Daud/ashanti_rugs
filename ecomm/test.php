<?php
// require 'vendor/autoload.php'; // Autoload
// use App\oop\Core\Table\Table;

require('oop/Core/Table/Table.php');

$db = new Table();



$db->table = 'orders'; // Table name
$response = $db->all();
var_dump($response);
?>