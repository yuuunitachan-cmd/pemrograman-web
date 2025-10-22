<?php
$host = 'localhost';
$username = 'root';
$password = '';  // Biasanya kosong di XAMPP
$database = 'todolist';
$port = 3306;    // Port default MySQL

// Coba koneksi dengan error handling
try {
    $conn = mysqli_connect($host, $username, $password, $database, $port);
    
    if (!$conn) {
        throw new Exception("Koneksi gagal: " . mysqli_connect_error());
    }
    
    // Set encoding
    mysqli_set_charset($conn, "utf8");
    
    // echo "Koneksi database berhasil!"; // Uncomment untuk test
     
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>