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

// Build query dengan filter
$query = "SELECT t.*, k.nama_kategori, k.warna 
          FROM tugas t 
          LEFT JOIN kategori k ON t.id_kategori = k.id 
          WHERE t.id_pengguna = ?";

$params = [$_SESSION['id_pengguna']];

// Filter kategori
if (isset($_GET['kategori']) && !empty($_GET['kategori'])) {
    $query .= " AND t.id_kategori = ?";
    $params[] = $_GET['kategori'];
}

// Filter status
if (isset($_GET['status']) && !empty($_GET['status'])) {
    $query .= " AND t.status = ?";
    $params[] = $_GET['status'];
}

// Filter prioritas
if (isset($_GET['prioritas']) && !empty($_GET['prioritas'])) {
    $query .= " AND t.prioritas = ?";
    $params[] = $_GET['prioritas'];
}

$query .= " ORDER BY t.dibuat_pada DESC";

$stmt = $db->prepare($query);
$stmt->execute($params);
$tugas = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode([
    'success' => true,
    'data' => $tugas
]);
?>