<?php
$dsn = 'mysql:host=localhost; dbname=g-wallet';
$username = 'root';
$password = '';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}


?>
