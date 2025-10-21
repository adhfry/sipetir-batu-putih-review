@extends('layouts.app')

@section('title', 'Layanan Desa - SIPETIR')

@section('content')

<!-- Page Header -->
<section class="bg-blue-600 text-white pt-16 pb-20 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-black/10"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold">Layanan Desa</h1>
        <p class="mt-4 text-lg max-w-3xl mx-auto text-blue-100">
            Kemudahan pengurusan surat keterangan, rekomendasi, dan administrasi umum lainnya untuk seluruh masyarakat
            Kecamatan Batuputih.
        </p>
    </div>
</section>

<!-- Jenis Layanan Section -->
<section class="py-20">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Jenis Surat yang Dilayani</h2>
            <p class="mt-4 text-slate-600">
                Berikut adalah beberapa jenis layanan administrasi desa yang dapat diajukan melalui SIPETIR.
            </p>
        </div>
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- DUMMY DATA LAYANAN -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 text-center">
                <h3 class="font-bold text-lg">Surat Keterangan Usaha (SKU)</h3>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-200 text-center">
                <h3 class="font-bold text-lg">Surat Keterangan Domisili</h3>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-200 text-center">
                <h3 class="font-bold text-lg">Surat Keterangan Tidak Mampu (SKTM)</h3>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-200 text-center">
                <h3 class="font-bold text-lg">Rekomendasi Izin Keramaian</h3>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-200 text-center">
                <h3 class="font-bold text-lg">Legalisasi Proposal</h3>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-200 text-center">
                <h3 class="font-bold text-lg">Dan Lain-lain</h3>
            </div>
        </div>
    </div>
</section>

<!-- Alur Proses Section -->
<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Alur Pengajuan Layanan</h2>
            <p class="mt-4 text-slate-600">Cepat, mudah, dan transparan. Ikuti 4 langkah berikut untuk mengajukan
                layanan.</p>
        </div>
        <div class="max-w-4xl mx-auto grid md:grid-cols-4 gap-8 text-center">
            <!-- DUMMY ALUR -->
            <div class="flex flex-col items-center">
                <div
                    class="w-16 h-16 bg-white border-2 border-blue-600 text-blue-600 rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                    1</div>
                <h4 class="mt-4 font-semibold">Datang ke Desa</h4>
                <p class="text-sm text-slate-500 mt-1">Minta surat pengantar dari kantor desa setempat.</p>
            </div>
            <div class="flex flex-col items-center">
                <div
                    class="w-16 h-16 bg-white border-2 border-blue-600 text-blue-600 rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                    2</div>
                <h4 class="mt-4 font-semibold">Login & Unggah</h4>
                <p class="text-sm text-slate-500 mt-1">Masuk ke sistem SIPETIR dan unggah surat pengantar beserta KTP.
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div
                    class="w-16 h-16 bg-white border-2 border-blue-600 text-blue-600 rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                    3</div>
                <h4 class="mt-4 font-semibold">Verifikasi</h4>
                <p class="text-sm text-slate-500 mt-1">Petugas kecamatan akan memverifikasi dokumen Anda.</p>
            </div>
            <div class="flex flex-col items-center">
                <div
                    class="w-16 h-16 bg-white border-2 border-blue-600 text-blue-600 rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                    4</div>
                <h4 class="mt-4 font-semibold">Ambil di Kecamatan</h4>
                <p class="text-sm text-slate-500 mt-1">Ambil surat yang sudah jadi di kantor kecamatan.</p>
            </div>
        </div>
    </div>
</section>

@endsection