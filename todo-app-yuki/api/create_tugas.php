<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['id_pengguna'])) {
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit();
}

// Koneksi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'todo_app';

try {
    $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    exit();
}

// Query data tugas
$query = "SELECT t.*, k.nama_kategori, k.warna 
          FROM tugas t 
          LEFT JOIN kategori k ON t.id_kategori = k.id 
          WHERE t.id_pengguna = :id_pengguna 
          ORDER BY t.dibuat_pada DESC";

$stmt = $db->prepare($query);
$stmt->bindParam(":id_pengguna", $_SESSION['id_pengguna']);
$stmt->execute();

$tugas = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode([
    'success' => true,
    'data' => $tugas
]);
?>