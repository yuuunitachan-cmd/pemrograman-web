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

// Cek kepemilikan tugas
$checkQuery = "SELECT id FROM tugas WHERE id = ? AND id_pengguna = ?";
$checkStmt = $db->prepare($checkQuery);
$checkStmt->execute([$data->id, $_SESSION['id_pengguna']]);

if ($checkStmt->rowCount() === 0) {
    echo json_encode(['success' => false, 'message' => 'Tugas tidak ditemukan']);
    exit();
}

// Update status (untuk tombol Selesai/Mulai)
if (isset($data->status)) {
    $updateQuery = "UPDATE tugas SET status = ? WHERE id = ? AND id_pengguna = ?";
    $updateStmt = $db->prepare($updateQuery);
    $success = $updateStmt->execute([$data->status, $data->id, $_SESSION['id_pengguna']]);
    
    if ($success) {
        echo json_encode(['success' => true, 'message' => 'Status berhasil diupdate']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Gagal update status']);
    }
    exit();
}

// Update data lengkap (untuk tombol Edit)
$allowedFields = ['judul', 'deskripsi', 'id_kategori', 'prioritas', 'status', 'tanggal_deadline', 'waktu_deadline'];
$updates = [];
$params = [];

foreach ($allowedFields as $field) {
    if (isset($data->$field)) {
        $updates[] = "$field = ?";
        $params[] = $data->$field;
    }
}

if (count($updates) === 0) {
    echo json_encode(['success' => false, 'message' => 'Tidak ada data yang diupdate']);
    exit();
}

$params[] = $data->id;
$params[] = $_SESSION['id_pengguna'];

$updateQuery = "UPDATE tugas SET " . implode(', ', $updates) . " WHERE id = ? AND id_pengguna = ?";
$updateStmt = $db->prepare($updateQuery);
$success = $updateStmt->execute($params);

if ($success) {
    echo json_encode(['success' => true, 'message' => 'Tugas berhasil diupdate']);
} else {
    echo json_encode(['success' => false, 'message' => 'Gagal mengupdate tugas']);
}
?>