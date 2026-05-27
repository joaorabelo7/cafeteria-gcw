<?php
$host = "localhost";
$db   = "cafeteria";
$user = "root";
$pass = "";   

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=cafeteria",
        "root",
        ""
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>