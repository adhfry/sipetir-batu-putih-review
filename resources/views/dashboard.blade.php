@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<!-- Statistik Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold text-slate-500">Total Desa</h3>
        <p class="text-3xl font-bold mt-1">14</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold text-slate-500">Laporan Masuk (Bulan Ini)</h3>
        <p class="text-3xl font-bold mt-1">8</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold text-slate-500">Perlu Verifikasi</h3>
        <p class="text-3xl font-bold mt-1 text-amber-500">2</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold text-slate-500">BUMDes Aktif</h3>
        <p class="text-3xl font-bold mt-1">12</p>
    </div>
</div>

<!-- Charts -->
<div class="grid grid-cols-1 lg:grid-cols-5 gap-6 mt-8">
    <div class="lg:col-span-3 bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-bold text-slate-800 mb-4">Grafik Laporan Masuk</h3>
        <div class="h-64 bg-slate-200 flex items-center justify-center rounded-md">
            <canvas id="laporanChart"></canvas>
        </div>
    </div>
    <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-bold text-slate-800 mb-4">Status Laporan BUMDes</h3>
        <div class="h-64 bg-slate-200 flex items-center justify-center rounded-md">
            <canvas id="bumdesChart"></canvas>
        </div>
    </div>
</div>

<!-- Recent Reports Table -->
<div class="mt-8 bg-white rounded-lg shadow-md overflow-hidden">
    <div class="p-6">
        <h3 class="text-xl font-bold text-slate-800">Laporan Terbaru</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-slate-500">
            <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Desa/BUMDes</th>
                    <th scope="col" class="px-6 py-3">Jenis Laporan</th>
                    <th scope="col" class="px-6 py-3">Tanggal</th>
                    <th scope="col" class="px-6 py-3 text-center">Status</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data -->
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 font-medium text-slate-900">BUMDes Yupiter</td>
                    <td class="px-6 py-4">Laporan Keuangan</td>
                    <td class="px-6 py-4">21 Okt 2025</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Menunggu
                            Verifikasi</span></td>
                    <td class="px-6 py-4"><a href="#" class="font-medium text-primary-600 hover:underline">Lihat</a>
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 font-medium text-slate-900">Desa Juruan Daya</td>
                    <td class="px-6 py-4">Laporan ADD Tahap II</td>
                    <td class="px-6 py-4">20 Okt 2025</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Menunggu
                            Verifikasi</span></td>
                    <td class="px-6 py-4"><a href="#" class="font-medium text-primary-600 hover:underline">Lihat</a>
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 font-medium text-slate-900">BUMDes Teratai</td>
                    <td class="px-6 py-4">Laporan Kegiatan</td>
                    <td class="px-6 py-4">19 Okt 2025</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Diterima</span>
                    </td>
                    <td class="px-6 py-4"><a href="#" class="font-medium text-primary-600 hover:underline">Lihat</a>
                    </td>
                </tr>
                <tr class="bg-white">
                    <td class="px-6 py-4 font-medium text-slate-900">Desa Gedang-Gedang</td>
                    <td class="px-6 py-4">Laporan DD Tahap II</td>
                    <td class="px-6 py-4">18 Okt 2025</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full">Ditolak</span>
                    </td>
                    <td class="px-6 py-4"><a href="#" class="font-medium text-primary-600 hover:underline">Lihat</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    // Data dummy untuk chart
    const laporanCtx = document.getElementById('laporanChart').getContext('2d');
    new Chart(laporanCtx, {
        type: 'bar',
        data: {
            labels: ['Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober'],
            datasets: [{
                label: 'Jumlah Laporan',
                data: [5, 9, 7, 11, 6, 8],
                backgroundColor: 'rgba(59, 130, 246, 0.5)',
                borderColor: 'rgba(59, 130, 246, 1)',
                borderWidth: 1
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    });

    const bumdesCtx = document.getElementById('bumdesChart').getContext('2d');
    new Chart(bumdesCtx, {
        type: 'doughnut',
        data: {
            labels: ['Diterima', 'Menunggu Verifikasi', 'Ditolak'],
            datasets: [{
                data: [9, 2, 1],
                backgroundColor: ['#10B981', '#F59E0B', '#EF4444'],
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    });
</script>
@endsection