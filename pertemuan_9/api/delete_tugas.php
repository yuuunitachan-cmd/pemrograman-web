<?php
session_start();
header('Content-Type: application/json');

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

$input = file_get_contents("php://input");
$data = json_decode($input);

if (!isset($data->id)) {
    echo json_encode(['success' => false, 'message' => 'ID tugas harus diisi']);
    exit();
}

// Hapus tugas
$query = "DELETE FROM tugas WHERE id = ? AND id_pengguna = ?";
$stmt = $db->prepare($query);
$success = $stmt->execute([$data->id, $_SESSION['id_pengguna']]);

if ($success && $stmt->rowCount() > 0) {
    echo json_encode(['success' => true, 'message' => 'Tugas berhasil dihapus']);
} else {
    echo json_encode(['success' => false, 'message' => 'Tugas tidak ditemukan']);
}
?>