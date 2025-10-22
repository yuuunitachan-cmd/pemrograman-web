<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['id_pengguna'])) {
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit();
}

// SIMPLE DATABASE CONNECTION - No class needed
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'todo_app';

try {
    $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "SELECT * FROM kategori WHERE id_pengguna = :id_pengguna ORDER BY nama_kategori";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id_pengguna", $_SESSION['id_pengguna']);
    $stmt->execute();

    $kategori = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        'success' => true,
        'data' => $kategori
    ]);
    
} catch(PDOException $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Database error: ' . $e->getMessage()
    ]);
}
?>