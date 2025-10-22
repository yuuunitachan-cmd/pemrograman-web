<?php
session_start();
header('Content-Type: application/json');

// Cek session
if (!isset($_SESSION['id_pengguna'])) {
    echo json_encode(['success' => false, 'message' => 'Silakan login kembali']);
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
    echo json_encode(['success' => false, 'message' => 'Koneksi database gagal']);
    exit();
}

// Query data tugas
$query = "SELECT t.*, k.nama_kategori, k.warna 
          FROM tugas t 
          LEFT JOIN kategori k ON t.id_kategori = k.id 
          WHERE t.id_pengguna = ? 
          ORDER BY t.dibuat_pada DESC";

$stmt = $db->prepare($query);
$stmt->execute([$_SESSION['id_pengguna']]);
$tugas = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode([
    'success' => true,
    'data' => $tugas
]);
?>