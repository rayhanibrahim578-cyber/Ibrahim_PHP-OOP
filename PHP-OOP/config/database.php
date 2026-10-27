<?php  

$host = '127.0.0.1';
$db_name = 'book-oop';
$username = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    die("Connection failed: " . $ex->getMessage());
} 