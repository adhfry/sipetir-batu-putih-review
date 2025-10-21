@extends('layouts.admin')

@section('title', 'Layanan Dukcapil')
@section('page-title', 'Layanan Dukcapil')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Monitoring Layanan Dukcapil</h2>
            <p class="text-sm text-slate-500 mt-1">Koordinasi data kependudukan dengan Dispendukcapil.</p>
        </div>
    </div>

    <!-- Statistik Layanan Dukcapil -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <div class="bg-slate-50 p-5 rounded-lg border border-slate-200">
            <h3 class="text-base font-semibold text-slate-500">Permohonan Legalisasi</h3>
            <p class="text-2xl font-bold mt-1">12 <span class="text-sm font-medium text-slate-500">dokumen</span></p>
        </div>
        <div class="bg-slate-50 p-5 rounded-lg border border-slate-200">
            <h3 class="text-base font-semibold text-slate-500">Perekaman Identitas Baru</h3>
            <p class="text-2xl font-bold mt-1">5 <span class="text-sm font-medium text-slate-500">warga</span></p>
        </div>
        <div class="bg-slate-50 p-5 rounded-lg border border-slate-200">
            <h3 class="text-base font-semibold text-slate-500">Pembaruan Data Dasar</h3>
            <p class="text-2xl font-bold mt-1">8 <span class="text-sm font-medium text-slate-500">warga</span></p>
        </div>
    </div>

    <!-- Tabel Data Layanan Dukcapil -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-slate-500">
            <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Pemohon</th>
                    <th scope="col" class="px-6 py-3">Jenis Layanan</th>
                    <th scope="col" class="px-6 py-3">Asal Desa</th>
                    <th scope="col" class="px-6 py-3">Tanggal Pengajuan</th>
                    <th scope="col" class="px-6 py-3 text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data Dukcapil -->
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Muhammad Hasan</td>
                    <td class="px-6 py-4">Legalisasi Kartu Keluarga</td>
                    <td class="px-6 py-4">Batuputih Daya</td>
                    <td class="px-6 py-4">21 Okt 2025</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Dalam
                            Proses</span></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Aminah</td>
                    <td class="px-6 py-4">Perekaman KTP-el</td>
                    <td class="px-6 py-4">Badur</td>
                    <td class="px-6 py-4">20 Okt 2025</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Selesai</span>
                    </td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Joko Susilo</td>
                    <td class="px-6 py-4">Pembaruan Data (Pindah Alamat)</td>
                    <td class="px-6 py-4">Juruan Laok</td>
                    <td class="px-6 py-4">18 Okt 2025</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Selesai</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection