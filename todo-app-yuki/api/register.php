<?php
session_start();
header('Content-Type: application/json');

// SIMPLE TEST - bypass database
$data = json_decode(file_get_contents("php://input"));

if (!isset($data->username) || !isset($data->password)) {
    echo json_encode(['success' => false, 'message' => 'Username dan password harus diisi']);
    exit();
}

// Test credentials
if ($data->username === 'yunita' && $data->password === 'yntkts') {
    $_SESSION['id_pengguna'] = 1;
    $_SESSION['username'] = 'yunita';
    $_SESSION['nama_lengkap'] = 'Yunita';
    $_SESSION['email'] = 'yunitanime@gmail.com';
    
    echo json_encode(['success' => true, 'message' => 'Login berhasil (TEST MODE)']);
} else {
    echo json_encode(['success' => false, 'message' => 'Login gagal (TEST MODE)']);
}
?>