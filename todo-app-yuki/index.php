<?php
$page_title = "Login - Todo List App";
include 'includes/header.php';

// Redirect jika sudah login
if(isset($_SESSION['id_pengguna'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<div class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="max-w-md w-full">
        <!-- Logo/Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl mb-4 shadow-lg">
                <i class="fas fa-check-double text-white text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-800">Todo List App</h1>
            <p class="text-gray-600 mt-2">Kelola tugasmu dengan mudah</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Masuk</h2>
            
            <div id="alert" class="hidden mb-4 p-4 rounded-lg"></div>

            <form id="loginForm">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-user mr-2"></i>Username atau Email
                    </label>
                    <input type="text" id="login_username" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                           placeholder="Masukkan username atau email" required>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-lock mr-2"></i>Password
                    </label>
                    <div class="relative">
                        <input type="password" id="login_password" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                               placeholder="Masukkan password" required>
                        <button type="button" onclick="togglePassword('login_password')" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                            <i class="fas fa-eye" id="login_password_icon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" 
                        class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold py-3 rounded-lg hover:from-indigo-600 hover:to-purple-700 transition transform hover:scale-105 shadow-lg">
                    <i class="fas fa-sign-in-alt mr-2"></i>Masuk
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">
                    Belum punya akun? 
                    <a href="register.php" class="text-indigo-600 font-semibold hover:text-indigo-700">Daftar di sini</a>
                </p>
            </div>

            <!-- Demo Account Info -->
            <div class="mt-6 bg-indigo-50 border border-indigo-200 rounded-lg p-4">
                <p class="text-sm text-indigo-800 font-semibold mb-2">
                    <i class="fas fa-info-circle mr-2"></i>Akun Demo:
                </p>
                <p class="text-sm text-indigo-700">Username: <strong>yunita</strong></p>
                <p class="text-sm text-indigo-700">Password: <strong>yntkts</strong></p>
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

document.getElementById('loginForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const username = document.getElementById('login_username').value;
    const password = document.getElementById('login_password').value;
    const alert = document.getElementById('alert');

    try {
        const response = await fetch('api/login.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({username, password})
        });

        const data = await response.json();

        if (data.success) {
            alert.className = 'mb-4 p-4 rounded-lg bg-green-100 border border-green-400 text-green-700';
            alert.textContent = '✓ Login berhasil! Mengalihkan...';
            alert.classList.remove('hidden');
            
            setTimeout(() => {
                window.location.href = 'dashboard.php';
            }, 1000);
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
