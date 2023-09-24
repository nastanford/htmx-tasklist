<?php
include 'config.php';
// Create a PDO instance
$pdo = new PDO($dsn, $username, $password);
// Set PDO to throw exceptions on error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
