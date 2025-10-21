@extends('layouts.admin')

@section('title', 'Laporan Desa')
@section('page-title', 'Laporan Pemerintah Desa')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Monitoring Laporan ADD & DD</h2>
            <p class="text-sm text-slate-500 mt-1">Laporan Alokasi Dana Desa dan Dana Desa dari 14 desa.</p>
        </div>
        <div class="mt-4 sm:mt-0 flex space-x-2">
            <select
                class="block w-full sm:w-auto rounded-md border-slate-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 text-sm">
                <option>Semua Status</option>
                <option>Sudah Cair</option>
                <option>Proses Verifikasi</option>
                <option>Belum Mengajukan</option>
            </select>
            <button class="px-4 py-2 text-sm font-medium text-white bg-primary-600 rounded-md hover:bg-primary-700">
                Filter
            </button>
        </div>
    </div>

    <!-- Tabel Data Laporan Desa -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-slate-500">
            <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Desa</th>
                    <th scope="col" class="px-6 py-3 text-center">Status ADD</th>
                    <th scope="col" class="px-6 py-3 text-center">Status DD</th>
                    <th scope="col" class="px-6 py-3">Update Terakhir</th>
                    <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data Desa -->
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Desa Batuputih Laok</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah
                            Cair</span></td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah
                            Cair</span></td>
                    <td class="px-6 py-4">15 Okt 2025</td>
                    <td class="px-6 py-4 text-center"><a href="#"
                            class="font-medium text-primary-600 hover:underline">Detail</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Desa Juruan Laok</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah
                            Cair</span></td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Proses
                            Verifikasi</span></td>
                    <td class="px-6 py-4">20 Okt 2025</td>
                    <td class="px-6 py-4 text-center"><a href="#"
                            class="font-medium text-primary-600 hover:underline">Detail</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Desa Gedang-Gedang</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Sudah
                            Cair</span></td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full">Belum
                            Mengajukan</span></td>
                    <td class="px-6 py-4">01 Sep 2025</td>
                    <td class="px-6 py-4 text-center"><a href="#"
                            class="font-medium text-primary-600 hover:underline">Detail</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Desa Larangan</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full">Belum
                            Mengajukan</span></td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full">Belum
                            Mengajukan</span></td>
                    <td class="px-6 py-4">-</td>
                    <td class="px-6 py-4 text-center"><a href="#"
                            class="font-medium text-primary-600 hover:underline">Detail</a></td>
                </tr>
                <!-- Tambahkan data dummy desa lainnya jika perlu -->
            </tbody>
        </table>
    </div>
</div>
@endsection