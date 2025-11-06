<?php
session_start();
header('Content-Type: application/json');

// Koneksi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'todo_app';

try {
    $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Koneksi database gagal: ' . $e->getMessage()]);
    exit();
}

$input = file_get_contents("php://input");
$data = json_decode($input);

// Validasi input
if (!isset($data->nama_lengkap) || !isset($data->username) || !isset($data->email) || !isset($data->password)) {
    echo json_encode(['success' => false, 'message' => 'Semua field harus diisi']);
    exit();
}

if (strlen($data->password) < 6) {
    echo json_encode(['success' => false, 'message' => 'Password minimal 6 karakter']);
    exit();
}

// Cek apakah username atau email sudah digunakan
$checkQuery = "SELECT id FROM pengguna WHERE username = ? OR email = ?";
$checkStmt = $db->prepare($checkQuery);
$checkStmt->execute([$data->username, $data->email]);

if ($checkStmt->rowCount() > 0) {
    echo json_encode(['success' => false, 'message' => 'Username atau email sudah digunakan']);
    exit();
}

// Insert user baru
$query = "INSERT INTO pengguna (nama_lengkap, username, email, password) VALUES (?, ?, ?, ?)";
$stmt = $db->prepare($query);

// Hash password
$hashedPassword = password_hash($data->password, PASSWORD_DEFAULT);

$success = $stmt->execute([
    trim($data->nama_lengkap),
    trim($data->username),
    trim($data->email),
    $hashedPassword
]);

if ($success) {
    echo json_encode(['success' => true, 'message' => 'Registrasi berhasil! Silakan login.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Gagal melakukan registrasi']);
}
?>