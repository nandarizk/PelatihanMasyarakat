<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Masyarakat - Panel Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#FAF9F5] font-sans antialiased text-gray-800 flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#0B5C3D] text-white flex flex-col justify-between p-5 shrink-0">
        <div>
            <!-- Logo & Title -->
            <div class="flex items-center gap-3 mb-8">
                <div class="p-2 bg-emerald-600 rounded-lg">
                    <i class="fa-solid fa-shapes text-xl"></i>
                </div>
                <div>
                    <h1 class="font-bold text-lg leading-tight">Panel Admin</h1>
                    <p class="text-xs text-emerald-200">Kota Jakarta Barat</p>
                </div>
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
        <div class="space-y-3">
            <button class="w-full bg-white text-[#0B5C3D] font-semibold py-2.5 rounded-xl text-sm shadow hover:bg-emerald-50 transition">
                Bantuan Teknis
            </button>
            <a href="{{ route('beranda') }}" class="flex items-center gap-3 px-2 py-2 text-emerald-100 hover:text-white text-sm font-medium">
                <i class="fa-solid fa-arrow-right-from-bracket w-5"></i> Keluar
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-10 flex flex-col justify-between">
        <div>
            <!-- Header Title -->
            <div class="mb-8">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">DATA MASYARAKAT</h2>
                <p class="text-gray-500 text-sm mt-1">Kelola data masyarakat yang membutuhkan kesempatan kerja.</p>
            </div>

            <!-- Filter Card -->
            <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100 mb-6 flex flex-wrap items-center justify-between gap-4">
                <form action="#" method="GET" class="flex flex-wrap items-center gap-3 flex-1">
                    <!-- Search Bar -->
                    <div class="relative min-w-[240px] flex-1">
                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="text" name="search" placeholder="Cari nama atau NIK" class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-full text-xs focus:outline-none focus:border-emerald-600 bg-white">
                    </div>

                    <!-- Dropdown Kecamatan -->
                    <select name="kecamatan" class="px-4 py-2.5 border border-gray-200 rounded-full text-xs text-gray-600 bg-white focus:outline-none focus:border-emerald-600 cursor-pointer">
                        <option value="">Kecamatan</option>
                    </select>

                    <!-- Dropdown Pendidikan -->
                    <select name="pendidikan" class="px-4 py-2.5 border border-gray-200 rounded-full text-xs text-gray-600 bg-white focus:outline-none focus:border-emerald-600 cursor-pointer">
                        <option value="">Pendidikan</option>
                    </select>

                    <!-- Dropdown Status Pekerjaan -->
                    <select name="status" class="px-4 py-2.5 border border-gray-200 rounded-full text-xs text-gray-600 bg-white focus:outline-none focus:border-emerald-600 cursor-pointer">
                        <option value="">Status Pekerjaan</option>
                    </select>
                </form>

                <!-- Action Button -->
                <a href="#" class="bg-[#0B5C3D] hover:bg-[#08472f] text-white px-5 py-2.5 rounded-full text-xs font-semibold flex items-center gap-2 transition shadow-sm">
                    <i class="fa-solid fa-plus"></i> Tambah Masyarakat
                </a>
            </div>

            <!-- Data Table Container -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <table class="w-full text-left text-xs">
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

        <!-- Footer Pagination -->
        <div class="mt-6 flex justify-between items-center text-xs text-gray-500 pt-4">
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

</body>
</html>