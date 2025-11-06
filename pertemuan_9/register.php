<?php
$page_title = "Daftar - Todo List App";
include 'includes/header.php';

if(isset($_SESSION['id_pengguna'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<div class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="max-w-md w-full">
        <div class="text-center mb-8">
            <a href="index.php" class="inline-block mb-4">
                <i class="fas fa-arrow-left text-indigo-600 hover:text-indigo-700"></i>
                <span class="ml-2 text-indigo-600 hover:text-indigo-700 font-semibold">Kembali</span>
            </a>
            <h1 class="text-3xl font-bold text-gray-800">Buat Akun Baru</h1>
            <p class="text-gray-600 mt-2">Daftar untuk mulai mengatur tugasmu</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8">
            <div id="alert" class="hidden mb-4 p-4 rounded-lg"></div>

            <form id="registerForm">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-id-card mr-2"></i>Nama Lengkap
                    </label>
                    <input type="text" id="nama_lengkap" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                           placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-user mr-2"></i>Username
                    </label>
                    <input type="text" id="username" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                           placeholder="Pilih username" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-envelope mr-2"></i>Email
                    </label>
                    <input type="email" id="email" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                           placeholder="email@example.com" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-lock mr-2"></i>Password
                    </label>
                    <div class="relative">
                        <input type="password" id="password" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                               placeholder="Minimal 6 karakter" required>
                        <button type="button" onclick="togglePassword('password')" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                            <i class="fas fa-eye" id="password_icon"></i>
                        </button>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-lock mr-2"></i>Konfirmasi Password
                    </label>
                    <div class="relative">
                        <input type="password" id="confirm_password" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                               placeholder="Ketik ulang password" required>
                        <button type="button" onclick="togglePassword('confirm_password')" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                            <i class="fas fa-eye" id="confirm_password_icon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" 
                        class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold py-3 rounded-lg hover:from-indigo-600 hover:to-purple-700 transition transform hover:scale-105 shadow-lg">
                    <i class="fas fa-user-plus mr-2"></i>Daftar
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">
                    Sudah punya akun? 
                    <a href="index.php" class="text-indigo-600 font-semibold hover:text-indigo-700">Masuk di sini</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(inputId + '_icon');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}

document.getElementById('registerForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const nama_lengkap = document.getElementById('nama_lengkap').value;
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirm_password = document.getElementById('confirm_password').value;
    const alert = document.getElementById('alert');

    if (password !== confirm_password) {
        alert.className = 'mb-4 p-4 rounded-lg bg-red-100 border border-red-400 text-red-700';
        alert.textContent = '✗ Password tidak cocok!';
        alert.classList.remove('hidden');
        return;
    }

    if (password.length < 6) {
        alert.className = 'mb-4 p-4 rounded-lg bg-red-100 border border-red-400 text-red-700';
        alert.textContent = '✗ Password minimal 6 karakter!';
        alert.classList.remove('hidden');
        return;
    }

    try {
        const response = await fetch('api/register.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({nama_lengkap, username, email, password})
        });

        const data = await response.json();

        if (data.success) {
            alert.className = 'mb-4 p-4 rounded-lg bg-green-100 border border-green-400 text-green-700';
            alert.textContent = '✓ Registrasi berhasil! Mengalihkan ke halaman login...';
            alert.classList.remove('hidden');
            
            setTimeout(() => {
                window.location.href = 'index.php';
            }, 2000);
        } else {
            alert.className = 'mb-4 p-4 rounded-lg bg-red-100 border border-red-400 text-red-700';
            alert.textContent = '✗ ' + data.message;
            alert.classList.remove('hidden');
        }
    } catch (error) {
        alert.className = 'mb-4 p-4 rounded-lg bg-red-100 border border-red-400 text-red-700';
        alert.textContent = '✗ Terjadi kesalahan: ' + error.message;
        alert.classList.remove('hidden');
    }
});
</script>

<?php include 'includes/footer.php'; ?>