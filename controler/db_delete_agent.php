<?php
$dsn = 'mysql:host=localhost;dbname=abbank';
$username = 'root';
$password = 'root';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}