<?php
$name = "Nikolaos Kyriazis";
$site_type = "Academic site";
$request = (isset($_GET['id']) ? $_GET['id'] : 'about');

$content = new SQLite3('content');
?>