@extends('layouts.admin')

@section('title', 'Laporan Desa')
@section('page-title', 'Laporan Desa')

@section('content')
<!-- Statistik Ringkasan -->
<div class.blade.php="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h4 class="text-slate-500 font-medium">Total Desa</h4>
        <p class="text-3xl font-bold text-slate-800 mt-1">14</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h4 class="text-slate-500 font-medium">ADD Tahap II Cair</h4>
        <p class="text-3xl font-bold text-slate-800 mt-1">12 <span class="text-lg font-medium text-slate-500">/
                14</span></p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h4 class="text-slate-500 font-medium">DD Tahap II Cair</h4>
        <p class="text-3xl font-bold text-slate-800 mt-1">6 <span class="text-lg font-medium text-slate-500">/ 14</span>
        </p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h4 class="text-slate-500 font-medium">Desa Belum Cair Penuh</h4>
        <p class="text-3xl font-bold text-slate-800 mt-1">6 <span class="text-lg font-medium text-slate-500">/ 14</span>
        </p>
    </div>
</div>

<!-- Tabel Laporan -->
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Rekapitulasi Pencairan ADD & DD Tahun 2025</h2>
            <p class="text-sm text-slate-500 mt-1">Monitor status pencairan dana untuk seluruh desa.</p>
        </div>
        <div class="mt-4 sm:mt-0 flex items-center space-x-2">
            <select
                class="block w-full sm:w-auto rounded-md border-slate-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 text-sm">
                <option>Semua Tahap</option>
                <option>ADD Tahap I</option>
                <option>ADD Tahap II</option>
                <option>DD Tahap I</option>
                <option>DD Tahap II</option>
            </select>
            <input type="text" placeholder="Cari desa..."
                class="block w-full sm:w-auto rounded-md border-slate-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 text-sm">
        </div>
    </div>

    <!-- Tabel Data -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-slate-500">
            <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Desa</th>
                    <th scope="col" class="px-6 py-3 text-center">ADD Tahap I</th>
                    <th scope="col" class="px-6 py-3 text-center">ADD Tahap II</th>
                    <th scope="col" class="px-6 py-3 text-center">DD Tahap I</th>
                    <th scope="col" class="px-6 py-3 text-center">DD Tahap II</th>
                    <th scope="col" class="px-6 py-3">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <!-- DATA DARI FOTO -->
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Juruan Daya</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4">-</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Gedang-Gedang</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4">Sdh monitoring</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Aeng Merah</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4">Sudah</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Bull'an</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4">-</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Batuputih Daya</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Belum</span>
                    </td>
                    <td class="px-6 py-4">-</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Larangan Barma</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Belum</span>
                    </td>
                    <td class="px-6 py-4">-</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Batuputih Kenek</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4">✓</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Larangan Kerta</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Belum</span>
                    </td>
                    <td class="px-6 py-4">-</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Juruan Laok</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4">Sudah</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Badur</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4">-</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Batuputih Laok</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Belum</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Belum</span>
                    </td>
                    <td class="px-6 py-4">-</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Sergang</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4">✓</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Tengedan</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Belum</span>
                    </td>
                    <td class="px-6 py-4">-</td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Bantelan</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Belum</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah</span>
                    </td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Belum</span>
                    </td>
                    <td class="px-6 py-4">-</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection