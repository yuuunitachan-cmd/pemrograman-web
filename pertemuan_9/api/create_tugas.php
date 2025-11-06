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

$input = file_get_contents("php://input");
$data = json_decode($input);

// Validasi
if (!isset($data->judul) || empty(trim($data->judul))) {
    echo json_encode(['success' => false, 'message' => 'Judul tugas harus diisi']);
    exit();
}

// INSERT tugas baru
$query = "INSERT INTO tugas (id_pengguna, judul, deskripsi, id_kategori, prioritas, status, tanggal_deadline, waktu_deadline) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $db->prepare($query);
$success = $stmt->execute([
    $_SESSION['id_pengguna'],
    trim($data->judul),
    isset($data->deskripsi) ? trim($data->deskripsi) : null,
    isset($data->id_kategori) && !empty($data->id_kategori) ? $data->id_kategori : null,
    $data->prioritas ?? 'sedang',
    $data->status ?? 'belum',
    isset($data->tanggal_deadline) && !empty($data->tanggal_deadline) ? $data->tanggal_deadline : null,
    isset($data->waktu_deadline) && !empty($data->waktu_deadline) ? $data->waktu_deadline : null
]);

if ($success) {
    echo json_encode(['success' => true, 'message' => 'Tugas berhasil dibuat', 'id' => $db->lastInsertId()]);
} else {
    echo json_encode(['success' => false, 'message' => 'Gagal membuat tugas']);
}
?>
