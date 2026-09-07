<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - Kota Jakarta Barat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#FAF9F5] font-sans antialiased text-gray-800 flex h-screen overflow-hidden">

    <aside class="w-64 bg-[#0B5C3D] text-white flex flex-col justify-between p-5">
        <div>
            <div class="flex items-center gap-3 mb-8">
                <div class="p-2 bg-emerald-600 rounded-lg">
                    <i class="fa-solid fa-shapes text-xl"></i>
                </div>
                <div>
                    <h1 class="font-bold text-lg leading-tight">Panel Admin</h1>
                    <p class="text-xs text-emerald-200">Kota Jakarta Barat</p>
                </div>
            </div>

            <nav class="space-y-1">
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-[#136C4A] text-white rounded-xl text-sm font-medium">
                    <i class="fa-solid fa-border-all w-5"></i> Dashboard
                </a>
                <a href="{{ route('data-masyarakat') }}" class="flex items-center gap-3 px-4 py-3 text-emerald-100 hover:bg-[#136C4A] rounded-xl text-sm font-medium transition">
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

        <div class="space-y-3">
            <button class="w-full bg-white text-[#0B5C3D] font-semibold py-2.5 rounded-xl text-sm shadow hover:bg-emerald-50 transition">
                Bantuan Teknis
            </button>
            <a href="{{ route('beranda') }}" class="flex items-center gap-3 px-2 py-2 text-emerald-100 hover:text-white text-sm font-medium">
                <i class="fa-solid fa-arrow-right-from-bracket w-5"></i> Keluar
            </a>
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto p-8">
        <div class="flex justify-end items-center gap-6 mb-6 text-gray-600 text-sm">
            <button class="hover:text-gray-900"><i class="fa-regular fa-bell text-lg"></i></button>
            <button class="hover:text-gray-900"><i class="fa-regular fa-circle-question text-lg"></i></button>
            <span class="font-medium cursor-pointer">Support</span>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Selamat Datang, Admin</h2>
            <p class="text-gray-500 text-sm">Kelola data masyarakat dan kesempatan kerja.</p>
        </div>

        <div class="grid grid-cols-4 gap-5 mb-8">
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-start">
                <div>
                    <p class="text-xs font-semibold text-gray-500 mb-1">Total Masyarakat</p>
                    <p class="text-2xl font-bold text-gray-900">1,245</p>
                </div>
                <div class="p-2 text-blue-600">
                    <i class="fa-solid fa-users-gear text-lg"></i>
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-start">
                <div>
                    <p class="text-xs font-semibold text-gray-500 mb-1">Membutuhkan Pekerjaan</p>
                    <p class="text-2xl font-bold text-gray-900">328</p>
                </div>
                <div class="p-2 text-red-500">
                    <i class="fa-solid fa-id-card-clip text-lg"></i>
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-start">
                <div>
                    <p class="text-xs font-semibold text-gray-500 mb-1">Kebutuhan UKPD</p>
                    <p class="text-2xl font-bold text-gray-900">48</p>
                </div>
                <div class="p-2 text-amber-600">
                    <i class="fa-solid fa-building text-lg"></i>
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-start">
                <div>
                    <p class="text-xs font-semibold text-gray-500 mb-1">Kebutuhan CSR</p>
                    <p class="text-2xl font-bold text-gray-900">27</p>
                </div>
                <div class="p-2 text-blue-500">
                    <i class="fa-solid fa-hand-holding-heart text-lg"></i>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-6 mb-8">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-6">Status Masyarakat</h3>
                <div class="space-y-4 text-xs font-semibold text-gray-600">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span>Membutuhkan Pekerjaan</span>
                            <span class="text-gray-900">328</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-red-500 h-2 rounded-full" style="width: 80%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span>Processing</span>
                            <span class="text-gray-900">56</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-amber-600 h-2 rounded-full" style="width: 30%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span>Accepted</span>
                            <span class="text-gray-900">42</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 25%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span>Placed</span>
                            <span class="text-gray-900">31</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-gray-400 h-2 rounded-full" style="width: 18%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between">
                <h3 class="font-bold text-gray-900">Kebutuhan Pekerjaan</h3>
                
                <div class="flex justify-center items-center my-4">
                    <div class="relative w-36 h-36 rounded-full border-8 border-amber-600 border-t-amber-700 flex items-center justify-center">
                        <div class="text-center">
                            <span class="text-xl font-bold text-gray-900 block">75</span>
                            <span class="text-xs text-gray-400">Total</span>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center gap-6 text-xs font-medium text-gray-600">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                        <span>UKPD (48)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-600"></span>
                        <span>CSR (27)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-4 bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-5">Rekomendasi Terbaru</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                        <div>
                            <p class="font-bold text-sm text-gray-800">Driver Operasional</p>
                            <p class="text-xs text-gray-400 font-medium">Match: 95%</p>
                        </div>
                        <button class="w-8 h-8 rounded-full bg-[#0B5C3D] text-white flex items-center justify-center text-xs">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>

                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                        <div>
                            <p class="font-bold text-sm text-gray-800">Operator Gudang</p>
                            <p class="text-xs text-gray-400 font-medium">Match: 89%</p>
                        </div>
                        <button class="w-8 h-8 rounded-full bg-[#0B5C3D] text-white flex items-center justify-center text-xs">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>

                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                        <div>
                            <p class="font-bold text-sm text-gray-800">Teknisi Lapangan</p>
                            <p class="text-xs text-gray-400 font-medium">Match: 84%</p>
                        </div>
                        <button class="w-8 h-8 rounded-full bg-[#0B5C3D] text-white flex items-center justify-center text-xs">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-span-8 bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <div class="flex justify-between items-center mb-5">
                    <h3 class="font-bold text-gray-900">Masyarakat Terbaru</h3>
                    <a href="#" class="text-xs text-gray-500 font-semibold hover:underline">Lihat Semua</a>
                </div>

                <table class="w-full text-left text-xs">
                    <thead>
                        <tr class="text-gray-400 border-b border-gray-100">
                            <th class="pb-3 font-semibold">Nama</th>
                            <th class="pb-3 font-semibold">Wilayah</th>
                            <th class="pb-3 font-semibold">Keahlian</th>
                            <th class="pb-3 font-semibold">Status</th>
                            <th class="pb-3 font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr>
                            <td class="py-3 font-semibold text-gray-800">Budi Santoso</td>
                            <td class="py-3 text-gray-500">Jakarta Selatan</td>
                            <td class="py-3 text-gray-500">Mengemudi</td>
                            <td class="py-3">
                                <span class="px-2.5 py-1 bg-red-100 text-red-600 rounded-full font-semibold text-[10px]">Pending</span>
                            </td>
                            <td class="py-3 text-center text-emerald-700 cursor-pointer">
                                <i class="fa-solid fa-pen text-xs"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 font-semibold text-gray-800">Siti Aminah</td>
                            <td class="py-3 text-gray-500">Jakarta Timur</td>
                            <td class="py-3 text-gray-500">Administrasi</td>
                            <td class="py-3">
                                <span class="px-2.5 py-1 bg-teal-100 text-teal-700 rounded-full font-semibold text-[10px]">Diproses</span>
                            </td>
                            <td class="py-3 text-center text-emerald-700 cursor-pointer">
                                <i class="fa-solid fa-pen text-xs"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 font-semibold text-gray-800">Agus Setiawan</td>
                            <td class="py-3 text-gray-500">Jakarta Barat</td>
                            <td class="py-3 text-gray-500">Teknik Listrik</td>
                            <td class="py-3">
                                <span class="px-2.5 py-1 bg-emerald-800 text-white rounded-full font-semibold text-[10px]">Ditempatkan</span>
                            </td>
                            <td class="py-3 text-center text-emerald-700 cursor-pointer">
                                <i class="fa-solid fa-pen text-xs"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>