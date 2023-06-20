<?php

$host = 'localhost';
$db = 'db_dime';
$username = 'root';
$password = '';

// Connecting

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Konekcijata e uspesna";
} catch(PDOException $e) {
    echo "Konekcijata ne e uspeshna " . $e->getMessage();
}

?>
