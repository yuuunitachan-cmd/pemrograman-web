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
    echo json_encode(['success' => false, 'message' => 'Koneksi database gagal']);
    exit();
}

$data = json_decode(file_get_contents("php://input"));

if (!isset($data->username) || !isset($data->password)) {
    echo json_encode(['success' => false, 'message' => 'Username dan password harus diisi']);
    exit();
}

// Cari user di database
$query = "SELECT * FROM pengguna WHERE username = ? OR email = ?";
$stmt = $db->prepare($query);
$stmt->execute([$data->username, $data->username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Untuk demo account yunita/yntkts
if ($data->username === 'yunita' && $data->password === 'yunitanime321') {
    $_SESSION['id_pengguna'] = 1;
    $_SESSION['username'] = 'yunita';
    $_SESSION['nama_lengkap'] = 'yunitanime';
    $_SESSION['email'] = 'yunitanime@gmail.com';
    
    echo json_encode(['success' => true, 'message' => 'Login berhasil']);
} 
// Untuk user lain yang terdaftar di database
else if ($user && password_verify($data->password, $user['password'])) {
    $_SESSION['id_pengguna'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
    $_SESSION['email'] = $user['email'];
    
    echo json_encode(['success' => true, 'message' => 'Login berhasil']);
} else {
    echo json_encode(['success' => false, 'message' => 'Username atau password salah']);
}
?>