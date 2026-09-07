<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Masyarakat - Panel Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#FAF9F5] font-sans antialiased text-gray-800 flex h-screen overflow-hidden relative">

    <!-- Mobile Overlay Backdrop -->
    <div id="sidebar-overlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden transition-opacity"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed md:static inset-y-0 left-0 z-50 w-64 bg-[#0B5C3D] text-white flex flex-col justify-between p-5 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out shrink-0">
        <div>
            <!-- Header Sidebar & Close Button for Mobile -->
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-emerald-600 rounded-lg">
                        <i class="fa-solid fa-shapes text-xl"></i>
                    </div>
                    <div>
                        <h1 class="font-bold text-lg leading-tight">Panel Admin</h1>
                        <p class="text-xs text-emerald-200">Kota Jakarta Barat</p>
                    </div>
                </div>
                <!-- Tombol Tutup Sidebar (Hanya Mobile) -->
                <button onclick="toggleSidebar()" class="md:hidden text-emerald-200 hover:text-white p-1">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <!-- Nav Links -->
            <nav class="space-y-1">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-emerald-100 hover:bg-[#136C4A] rounded-xl text-sm font-medium transition">
                    <i class="fa-solid fa-border-all w-5"></i> Dashboard
                </a>
                
                <!-- Menu Data Masyarakat (Aktif) -->
                <a href="{{ route('data-masyarakat') }}" class="flex items-center gap-3 px-4 py-3 bg-[#136C4A] text-white rounded-xl text-sm font-medium">
                    <i class="fa-solid fa-graduation-cap w-5"></i> Data Masyarakat
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-emerald-100 hover:bg-[#136C4A] rounded-xl text-sm font-medium transition">
                    <i class="fa-solid fa-users w-5"></i> Pemberdayaan
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-emerald-100 hover:bg-[#136C4A] rounded-xl text-sm font-medium transition">
                    <i class="fa-solid fa-chart-simple w-5"></i> Rekomendasi Pekerjaan
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-emerald-100 hover:bg-[#136C4A] rounded-xl text-sm font-medium transition">
                    <i class="fa-solid fa-chart-line w-5"></i> Penempatan
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-emerald-100 hover:bg-[#136C4A] rounded-xl text-sm font-medium transition">
                    <i class="fa-solid fa-gear w-5"></i> Pengaturan
                </a>
            </nav>
        </div>

        <!-- Sidebar Footer -->
        <div class="space-y-3 pt-4">
            <button class="w-full bg-white text-[#0B5C3D] font-semibold py-2.5 rounded-xl text-sm shadow hover:bg-emerald-50 transition">
                Bantuan Teknis
            </button>
            <a href="{{ route('beranda') }}" class="flex items-center gap-3 px-2 py-2 text-emerald-100 hover:text-white text-sm font-medium">
                <i class="fa-solid fa-arrow-right-from-bracket w-5"></i> Keluar
            </a>
        </div>
    </aside>

    <!-- Main Content Container -->
    <div class="flex-1 flex flex-col h-screen overflow-y-auto">
        <main class="p-4 sm:p-6 md:p-10 flex-1 flex flex-col justify-between">
            <div>
                <!-- Top Header Bar (Hamburger Button for Mobile) -->
                <div class="flex items-center justify-between md:hidden mb-4">
                    <button onclick="toggleSidebar()" class="p-2 text-gray-700 hover:text-emerald-800 rounded-lg bg-white border border-gray-200">
                        <i class="fa-solid fa-bars text-lg"></i>
                    </button>
                    <span class="text-xs font-bold text-[#0B5C3D]">DATA MASYARAKAT</span>
                </div>

                <!-- Header Title -->
                <div class="mb-6 sm:mb-8">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">DATA MASYARAKAT</h2>
                    <p class="text-gray-500 text-xs sm:text-sm mt-1">Kelola data masyarakat yang membutuhkan kesempatan kerja.</p>
                </div>

                <!-- Filter Card -->
                <div class="bg-white p-4 rounded-2xl sm:rounded-3xl shadow-sm border border-gray-100 mb-6 flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-4">
                    <form action="#" method="GET" class="flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-3 flex-1">
                        <!-- Search Bar -->
                        <div class="relative min-w-full sm:min-w-[200px] lg:min-w-[240px] flex-1">
                            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                            <input type="text" name="search" placeholder="Cari nama atau NIK" class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-full text-xs focus:outline-none focus:border-emerald-600 bg-white">
                        </div>

                        <!-- Dropdown Kecamatan -->
                        <select name="kecamatan" class="px-4 py-2.5 border border-gray-200 rounded-full text-xs text-gray-600 bg-white focus:outline-none focus:border-emerald-600 cursor-pointer w-full sm:w-auto">
                            <option value="">Kecamatan</option>
                        </select>

                        <!-- Dropdown Pendidikan -->
                        <select name="pendidikan" class="px-4 py-2.5 border border-gray-200 rounded-full text-xs text-gray-600 bg-white focus:outline-none focus:border-emerald-600 cursor-pointer w-full sm:w-auto">
                            <option value="">Pendidikan</option>
                        </select>

                        <!-- Dropdown Status Pekerjaan -->
                        <select name="status" class="px-4 py-2.5 border border-gray-200 rounded-full text-xs text-gray-600 bg-white focus:outline-none focus:border-emerald-600 cursor-pointer w-full sm:w-auto">
                            <option value="">Status Pekerjaan</option>
                        </select>
                    </form>

                    <!-- Action Button -->
                    <a href="#" class="bg-[#0B5C3D] hover:bg-[#08472f] text-white px-5 py-2.5 rounded-full text-xs font-semibold flex items-center justify-center gap-2 transition shadow-sm shrink-0">
                        <i class="fa-solid fa-plus"></i> Tambah Masyarakat
                    </a>
                </div>

                <!-- Data Table Container (Responsive Scroll Horizontal) -->
                <div class="bg-white rounded-2xl sm:rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs min-w-[700px]">
                            <thead>
                                <tr class="bg-indigo-50/40 text-gray-600 border-b border-gray-100">
                                    <th class="py-4 px-6 font-semibold">Nama & NIK</th>
                                    <th class="py-4 px-6 font-semibold">Wilayah</th>
                                    <th class="py-4 px-6 font-semibold">Pendidikan & Keahlian</th>
                                    <th class="py-4 px-6 font-semibold">Pendapatan</th>
                                    <th class="py-4 px-6 font-semibold">Status</th>
                                    <th class="py-4 px-6 font-semibold text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <!-- Area Data (Siap dihubungkan ke Database nanti) -->
                                <tr>
                                    <td colspan="6" class="py-12 text-center text-gray-400 font-medium">
                                        Data tabel akan ditampilkan di sini dari database.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Footer Pagination -->
            <div class="mt-6 flex flex-col sm:flex-row gap-4 justify-between items-center text-xs text-gray-500 pt-4">
                <p>Menampilkan 0 data</p>
                <div class="flex items-center gap-1">
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-gray-200 text-gray-400">
                        <i class="fa-solid fa-chevron-left text-[10px]"></i>
                    </button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-full bg-[#0B5C3D] text-white font-bold">1</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-gray-200 text-gray-600">
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </button>
                </div>
            </div>
        </main>
    </div>

    <!-- Script JavaScript Toggle Mobile Sidebar -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }
    </script>
</body>
</html>