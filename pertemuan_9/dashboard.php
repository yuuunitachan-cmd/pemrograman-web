<?php
$page_title = "Dashboard - Todo List App";
include 'includes/header.php';

if(!isset($_SESSION['id_pengguna'])) {
    header("Location: index.php");
    exit();
}
?>

<div class="min-h-screen pb-12">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-check-double text-white"></i>
                    </div>
                    <h1 class="text-xl font-bold text-gray-800">Todo List</h1>
                </div>
                
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700 font-semibold" id="user_name">
                        <i class="fas fa-user-circle mr-2"></i><?php echo $_SESSION['nama_lengkap']; ?>
                    </span>
                    <button onclick="logout()" 
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">
                        <i class="fas fa-sign-out-alt mr-2"></i>Keluar
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Total Tugas</p>
                        <p class="text-3xl font-bold text-gray-800" id="total_tugas">0</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-tasks text-blue-500 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-yellow-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Belum Selesai</p>
                        <p class="text-3xl font-bold text-gray-800" id="belum_selesai">0</p>
                    </div>
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-clock text-yellow-500 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Selesai</p>
                        <p class="text-3xl font-bold text-gray-800" id="selesai">0</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-check-circle text-green-500 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-red-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Prioritas Tinggi</p>
                        <p class="text-3xl font-bold text-gray-800" id="prioritas_tinggi">0</p>
                    </div>
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter & Add Button -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                    <select id="filter_kategori" onchange="loadTugas()" 
                            class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        <option value="">Semua Kategori</option>
                    </select>
                    
                    <select id="filter_status" onchange="loadTugas()" 
                            class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        <option value="">Semua Status</option>
                        <option value="belum">Belum Dikerjakan</option>
                        <option value="proses">Dalam Proses</option>
                        <option value="selesai">Selesai</option>
                    </select>

                    <select id="filter_prioritas" onchange="loadTugas()" 
                            class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        <option value="">Semua Prioritas</option>
                        <option value="tinggi">Tinggi</option>
                        <option value="sedang">Sedang</option>
                        <option value="rendah">Rendah</option>
                    </select>
                </div>

                <button onclick="openModal()" 
                        class="bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white px-6 py-2 rounded-lg font-semibold transition transform hover:scale-105 shadow-lg">
                    <i class="fas fa-plus mr-2"></i>Tambah Tugas
                </button>
            </div>
        </div>

        <!-- Tasks List -->
        <div id="tasks_container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tasks will be loaded here -->
        </div>

        <!-- Empty State -->
        <div id="empty_state" class="hidden text-center py-16">
            <i class="fas fa-inbox text-gray-300 text-6xl mb-4"></i>
            <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada tugas</h3>
            <p class="text-gray-500 mb-6">Mulai tambahkan tugas pertamamu!</p>
            <button onclick="openModal()" 
                    class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-indigo-600 hover:to-purple-700 transition">
                <i class="fas fa-plus mr-2"></i>Tambah Tugas
            </button>
        </div>
    </div>
</div>

<!-- Modal Form -->
<div id="taskModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-6 rounded-t-2xl">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold" id="modal_title">Tambah Tugas Baru</h2>
                <button onclick="closeModal()" class="text-white hover:text-gray-200 text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <form id="taskForm" class="p-6">
            <input type="hidden" id="task_id">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">
                    <i class="fas fa-heading mr-2"></i>Judul Tugas *
                </label>
                <input type="text" id="judul" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500"
                       placeholder="Masukkan judul tugas">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">
                    <i class="fas fa-align-left mr-2"></i>Deskripsi
                </label>
                <textarea id="deskripsi" rows="4"
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500"
                          placeholder="Tambahkan deskripsi (opsional)"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-tag mr-2"></i>Kategori *
                    </label>
                    <select id="id_kategori" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        <option value="">Pilih Kategori</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-flag mr-2"></i>Prioritas *
                    </label>
                    <select id="prioritas" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        <option value="rendah">Rendah</option>
                        <option value="sedang" selected>Sedang</option>
                        <option value="tinggi">Tinggi</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-calendar mr-2"></i>Tanggal Deadline
                    </label>
                    <input type="date" id="tanggal_deadline"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <i class="fas fa-clock mr-2"></i>Waktu Deadline
                    </label>
                    <input type="time" id="waktu_deadline"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                </div>
            </div>

            <div class="mb-6" id="status_field" style="display: none;">
                <label class="block text-gray-700 text-sm font-semibold mb-2">
                    <i class="fas fa-tasks mr-2"></i>Status
                </label>
                <select id="status"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                    <option value="belum">Belum Dikerjakan</option>
                    <option value="proses">Dalam Proses</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>

            <div class="flex gap-3">
                <button type="button" onclick="closeModal()"
                        class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-3 rounded-lg transition">
                    <i class="fas fa-times mr-2"></i>Batal
                </button>
                <button type="submit"
                        class="flex-1 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-semibold py-3 rounded-lg transition">
                    <i class="fas fa-save mr-2"></i>Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
let kategoriList = [];

// Load initial data
document.addEventListener('DOMContentLoaded', () => {
    loadKategori();
    loadTugas();
});

async function loadKategori() {
    try {
        console.log('🚀 Memuat kategori...');
        
const hardcodedKategori = [
    {id: 1, nama_kategori: 'Pribadi', warna: '#10B981'},
    {id: 2, nama_kategori: 'Belanja', warna: '#F59E0B'},
    {id: 3, nama_kategori: 'Tugas', warna: '#3B82F6'},
    {id: 4, nama_kategori: 'Lainnya', warna: '#6B7280'}
];
        kategoriList = hardcodedKategori;
        
        // Update dropdown filter
        const filterSelect = document.getElementById('filter_kategori');
        filterSelect.innerHTML = '<option value="">Semua Kategori</option>';
        
        // Update dropdown form
        const formSelect = document.getElementById('id_kategori');
        formSelect.innerHTML = '<option value="">Pilih Kategori</option>';
        
        hardcodedKategori.forEach(kat => {
            filterSelect.innerHTML += `<option value="${kat.id}">${kat.nama_kategori}</option>`;
            formSelect.innerHTML += `<option value="${kat.id}">${kat.nama_kategori}</option>`;
        });
        
        console.log('✅ Kategori berhasil dimuat!', hardcodedKategori.length + ' kategori');
        
        // Load tugas
        loadTugas();
        
    } catch (error) {
        console.error('❌ Error:', error);
    }
}

async function loadTugas() {
    const kategori = document.getElementById('filter_kategori').value;
    const status = document.getElementById('filter_status').value;
    const prioritas = document.getElementById('filter_prioritas').value;
    
    let url = 'api/get_tugas.php?';
    if (kategori) url += `kategori=${kategori}&`;
    if (status) url += `status=${status}&`;
    if (prioritas) url += `prioritas=${prioritas}`;

    try {
        const response = await fetch(url);
        const data = await response.json();
        
        if (data.success) {
            displayTugas(data.data);
            updateStats(data.data);
        }
    } catch (error) {
        console.error('Error loading tugas:', error);
    }
}

function displayTugas(tasks) {
    const container = document.getElementById('tasks_container');
    const emptyState = document.getElementById('empty_state');
    
    if (tasks.length === 0) {
        container.innerHTML = '';
        emptyState.classList.remove('hidden');
        return;
    }
    
    emptyState.classList.add('hidden');
    container.innerHTML = '';
    
    tasks.forEach(task => {
        const priorityColors = {
            'tinggi': 'bg-red-100 text-red-800 border-red-300',
            'sedang': 'bg-yellow-100 text-yellow-800 border-yellow-300',
            'rendah': 'bg-green-100 text-green-800 border-green-300'
        };
        
        const statusColors = {
            'belum': 'bg-gray-100 text-gray-800',
            'proses': 'bg-blue-100 text-blue-800',
            'selesai': 'bg-green-100 text-green-800'
        };
        
        const statusIcons = {
            'belum': 'fa-circle',
            'proses': 'fa-spinner',
            'selesai': 'fa-check-circle'
        };
        
        const statusText = {
            'belum': 'Belum Dikerjakan',
            'proses': 'Dalam Proses',
            'selesai': 'Selesai'
        };

        const kategori = kategoriList.find(k => k.id == task.id_kategori);
        const kategoriWarna = kategori ? kategori.warna : '#6366f1';
        
        const card = document.createElement('div');
        card.className = 'bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border-t-4';
        card.style.borderTopColor = kategoriWarna;
        
        let deadlineHtml = '';
        if (task.tanggal_deadline) {
            const deadline = new Date(task.tanggal_deadline);
            const today = new Date();
            const isOverdue = deadline < today && task.status !== 'selesai';
            
            deadlineHtml = `
                <div class="flex items-center text-sm ${isOverdue ? 'text-red-600' : 'text-gray-600'} mb-2">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <span>${formatDate(task.tanggal_deadline)}</span>
                    ${task.waktu_deadline ? `<i class="fas fa-clock ml-3 mr-2"></i><span>${task.waktu_deadline}</span>` : ''}
                    ${isOverdue ? '<span class="ml-2 text-xs bg-red-100 text-red-800 px-2 py-1 rounded">Terlambat</span>' : ''}
                </div>
            `;
        }
        
        card.innerHTML = `
            <div class="p-6">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="text-lg font-bold text-gray-800 flex-1 pr-2">${escapeHtml(task.judul)}</h3>
                    <div class="flex gap-2">
                        <button onclick="editTask(${task.id})" 
                                class="text-blue-600 hover:text-blue-800 transition">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button onclick="deleteTask(${task.id})" 
                                class="text-red-600 hover:text-red-800 transition">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                
                ${task.deskripsi ? `<p class="text-gray-600 text-sm mb-4 line-clamp-2">${escapeHtml(task.deskripsi)}</p>` : ''}
                
                ${deadlineHtml}
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 rounded-full text-xs font-semibold ${priorityColors[task.prioritas]} border">
                        <i class="fas fa-flag mr-1"></i>${task.prioritas.toUpperCase()}
                    </span>
                    <span class="px-3 py-1 rounded-full text-xs font-semibold ${statusColors[task.status]}">
                        <i class="fas ${statusIcons[task.status]} mr-1"></i>${statusText[task.status]}
                    </span>
                    ${task.nama_kategori ? `
                        <span class="px-3 py-1 rounded-full text-xs font-semibold text-white" 
                              style="background-color: ${kategoriWarna}">
                            <i class="fas fa-tag mr-1"></i>${escapeHtml(task.nama_kategori)}
                        </span>
                    ` : ''}
                </div>
                
                <div class="flex gap-2">
                    ${task.status !== 'selesai' ? `
                        <button onclick="quickUpdateStatus(${task.id}, 'selesai')"
                                class="flex-1 bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg text-sm font-semibold transition">
                            <i class="fas fa-check mr-1"></i>Selesai
                        </button>
                    ` : ''}
                    ${task.status === 'belum' ? `
                        <button onclick="quickUpdateStatus(${task.id}, 'proses')"
                                class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg text-sm font-semibold transition">
                            <i class="fas fa-play mr-1"></i>Mulai
                        </button>
                    ` : ''}
                </div>
            </div>
        `;
        
        container.appendChild(card);
    });
}

function updateStats(tasks) {
    document.getElementById('total_tugas').textContent = tasks.length;
    document.getElementById('belum_selesai').textContent = tasks.filter(t => t.status !== 'selesai').length;
    document.getElementById('selesai').textContent = tasks.filter(t => t.status === 'selesai').length;
    document.getElementById('prioritas_tinggi').textContent = tasks.filter(t => t.prioritas === 'tinggi').length;
}

function openModal(taskId = null) {
    const modal = document.getElementById('taskModal');
    const modalTitle = document.getElementById('modal_title');
    const statusField = document.getElementById('status_field');
    
    if (taskId) {
        modalTitle.textContent = 'Edit Tugas';
        statusField.style.display = 'block';
    } else {
        modalTitle.textContent = 'Tambah Tugas Baru';
        statusField.style.display = 'none';
        document.getElementById('taskForm').reset();
        document.getElementById('task_id').value = '';
    }
    
    modal.classList.remove('hidden');
}

function closeModal() {
    document.getElementById('taskModal').classList.add('hidden');
    document.getElementById('taskForm').reset();
}

async function editTask(id) {
    try {
        const response = await fetch(`api/get_tugas.php?id=${id}`);
        const data = await response.json();
        
        if (data.success && data.data.length > 0) {
            const task = data.data[0];
            
            document.getElementById('task_id').value = task.id;
            document.getElementById('judul').value = task.judul;
            document.getElementById('deskripsi').value = task.deskripsi || '';
            document.getElementById('id_kategori').value = task.id_kategori || '';
            document.getElementById('prioritas').value = task.prioritas;
            document.getElementById('status').value = task.status;
            document.getElementById('tanggal_deadline').value = task.tanggal_deadline || '';
            document.getElementById('waktu_deadline').value = task.waktu_deadline || '';
            
            openModal(id);
        }
    } catch (error) {
        console.error('Error loading task:', error);
        alert('Gagal memuat data tugas');
    }
}

async function deleteTask(id) {
    if (!confirm('Apakah Anda yakin ingin menghapus tugas ini?')) return;
    
    try {
        const response = await fetch('api/delete_tugas.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({id})
        });
        
        const data = await response.json();
        
        if (data.success) {
            loadTugas();
        } else {
            alert('Gagal menghapus tugas: ' + data.message);
        }
    } catch (error) {
        console.error('Error deleting task:', error);
        alert('Terjadi kesalahan saat menghapus tugas');
    }
}

async function quickUpdateStatus(id, status) {
    try {
        const response = await fetch('api/update_tugas.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({id, status})
        });
        
        const data = await response.json();
        
        if (data.success) {
            loadTugas();
        } else {
            alert('Gagal mengupdate status: ' + data.message);
        }
    } catch (error) {
        console.error('Error updating status:', error);
        alert('Terjadi kesalahan saat mengupdate status');
    }
}

document.getElementById('taskForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const id = document.getElementById('task_id').value;
    const judul = document.getElementById('judul').value;
    const deskripsi = document.getElementById('deskripsi').value;
    const id_kategori = document.getElementById('id_kategori').value;
    const prioritas = document.getElementById('prioritas').value;
    const status = document.getElementById('status').value || 'belum';
    const tanggal_deadline = document.getElementById('tanggal_deadline').value;
    const waktu_deadline = document.getElementById('waktu_deadline').value;
    
    const data = {
        judul,
        deskripsi,
        id_kategori: id_kategori || null,
        prioritas,
        status,
        tanggal_deadline: tanggal_deadline || null,
        waktu_deadline: waktu_deadline || null
    };
    
    if (id) {
        data.id = id;
    }
    
    const url = id ? 'api/update_tugas.php' : 'api/create_tugas.php';
    
    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(data)
        });
        
        const result = await response.json();
        
        if (result.success) {
            closeModal();
            loadTugas();
        } else {
            alert('Gagal menyimpan tugas: ' + result.message);
        }
    } catch (error) {
        console.error('Error saving task:', error);
        alert('Terjadi kesalahan saat menyimpan tugas');
    }
});

function logout() {
    if (confirm('Apakah Anda yakin ingin keluar?')) {
        window.location.href = 'api/logout.php';
    }
}

function formatDate(dateString) {
    const date = new Date(dateString);
    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
    return `${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`;
}

function escapeHtml(text) {
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, m => map[m]);
}
</script>

<?php include 'includes/footer.php'; ?>