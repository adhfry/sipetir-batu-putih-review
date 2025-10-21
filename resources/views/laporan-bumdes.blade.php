@extends('layouts.admin')

@section('title', 'Laporan BUMDes')
@section('page-title', 'Laporan BUMDes')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Monitoring Laporan BUMDes</h2>
            <p class="text-sm text-slate-500 mt-1">Laporan keuangan dan kegiatan dari semua BUMDes.</p>
        </div>
        <div class="mt-4 sm:mt-0">
            <input type="text" placeholder="Cari BUMDes..."
                class="block w-full sm:w-auto rounded-md border-slate-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 text-sm">
        </div>
    </div>

    <!-- Tabel Data Laporan BUMDes -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-slate-500">
            <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama BUMDes</th>
                    <th scope="col" class="px-6 py-3">Desa</th>
                    <th scope="col" class="px-6 py-3">Laporan Terakhir</th>
                    <th scope="col" class="px-6 py-3 text-center">Status</th>
                    <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data BUMDes -->
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">BUMDes Yupiter</td>
                    <td class="px-6 py-4">Juruan Laok</td>
                    <td class="px-6 py-4">Laporan Keuangan Q3</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-amber-800 bg-amber-100 rounded-full">Menunggu
                            Verifikasi</span></td>
                    <td class="px-6 py-4 text-center"><a href="#"
                            class="font-medium text-primary-600 hover:underline">Lihat Laporan</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">BUMDes Teratai</td>
                    <td class="px-6 py-4">Juruan Daya</td>
                    <td class="px-6 py-4">Laporan Kegiatan September</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Diterima</span>
                    </td>
                    <td class="px-6 py-4 text-center"><a href="#"
                            class="font-medium text-primary-600 hover:underline">Lihat Laporan</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">BUMDes Pesisir Jaya</td>
                    <td class="px-6 py-4">Batuputih Daya</td>
                    <td class="px-6 py-4">Laporan Keuangan Q2</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full">Ditolak (Perlu
                            Revisi)</span></td>
                    <td class="px-6 py-4 text-center"><a href="#"
                            class="font-medium text-primary-600 hover:underline">Lihat Laporan</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">BUMDes Tunas Harapan</td>
                    <td class="px-6 py-4">Bantelan</td>
                    <td class="px-6 py-4">-</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-slate-800 bg-slate-200 rounded-full">Belum Ada
                            Laporan</span></td>
                    <td class="px-6 py-4 text-center"><a href="#"
                            class="font-medium text-primary-600 hover:underline">Lihat Laporan</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection