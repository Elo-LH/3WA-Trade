<?php

$db = new PDO(
    'mysql:host=localhost;dbname=3wa_trade;charset=utf8',
    'root',
    ''
);

$query = $db->prepare('SELECT title from categories');
$query->execute();
$categories = $query->fetchAll();



?>