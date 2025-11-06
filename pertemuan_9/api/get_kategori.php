<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['id_pengguna'])) {
    echo json_encode(['success' => false, 'message' => 'Silakan login kembali']);
    exit();
}

// Koneksi database - PAKAI PORT 3306
$host = 'localhost';  // ← INI YANG BENAR! atau 'localhost:3306'
$username = 'root';
$password = '';
$database = 'todo_app';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->prepare("SELECT * FROM kategori WHERE id_pengguna = ? ORDER BY nama_kategori");
    $stmt->execute([$_SESSION['id_pengguna']]);
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