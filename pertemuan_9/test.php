<?php
$host = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'todo_app';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    echo "✅ KONEKSI DATABASE BERHASIL!";
} catch(PDOException $e) {
    echo "❌ ERROR: " . $e->getMessage();
}
?>