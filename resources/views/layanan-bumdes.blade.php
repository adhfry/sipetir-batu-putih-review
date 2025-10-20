@extends('layouts.app')

@section('title', 'Layanan BUMDes - SIPETIR')

@section('content')

<!-- Page Header -->
<section class="bg-primary-600 text-white pt-16 pb-20 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-black/10"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold">Layanan Pembinaan & Pelaporan BUMDes</h1>
        <p class="mt-4 text-lg max-w-3xl mx-auto text-primary-100">
            Digitalisasi pembinaan dan pelaporan untuk Badan Usaha Milik Desa yang lebih maju, transparan, dan
            akuntabel.
        </p>
    </div>
</section>

<!-- Data & Statistik Section -->
<section class="py-20 -mt-10 relative z-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-6 rounded-xl shadow-lg border border-slate-100">
                <h3 class="text-4xl font-extrabold text-primary-600">14</h3>
                <p class="text-slate-500 font-semibold mt-1">Desa Terdaftar</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg border border-slate-100">
                <h3 class="text-4xl font-extrabold text-primary-600">12</h3>
                <p class="text-slate-500 font-semibold mt-1">BUMDes Aktif</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg border border-slate-100">
                <h3 class="text-4xl font-extrabold text-primary-600">50+</h3>
                <p class="text-slate-500 font-semibold mt-1">Produk Unggulan</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg border border-slate-100">
                <h3 class="text-4xl font-extrabold text-primary-600">100%</h3>
                <p class="text-slate-500 font-semibold mt-1">Laporan Digital</p>
            </div>
        </div>
    </div>
</section>

<!-- Fitur Utama Section -->
<section class="py-10">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Mengganti Sistem Manual Menjadi Digital</h2>
            <p class="mt-4 text-slate-600">
                Fitur ini dirancang khusus untuk memudahkan pengurus BUMDes dalam melaporkan dan Kasi PMD dalam memantau
                perkembangan usaha.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
                class="bg-white p-8 rounded-xl border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Pelaporan Keuangan Digital</h3>
                <p class="text-slate-500">Unggah laporan keuangan BUMDes dengan mudah dalam format digital, mengurangi
                    penggunaan kertas dan mempermudah pengarsipan.</p>
            </div>
            <div
                class="bg-white p-8 rounded-xl border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Pemantauan Progres Usaha</h3>
                <p class="text-slate-500">Kasi PMD dapat memantau progres kegiatan usaha setiap BUMDes secara real-time
                    melalui dashboard terpusat.</p>
            </div>
            <div
                class="bg-white p-8 rounded-xl border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Validasi Data Langsung</h3>
                <p class="text-slate-500">Mempercepat proses validasi data BUMDes oleh kecamatan tanpa perlu menunggu
                    laporan fisik yang memakan waktu.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tentang Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <span class="text-sm font-bold uppercase text-primary-600">Tentang Layanan BUMDes</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-2">Mendorong Pertumbuhan Ekonomi Desa</h2>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Layanan BUMDes dalam SIPETIR diciptakan sebagai platform terpadu untuk mengakselerasi kemandirian
                    ekonomi desa. Kami percaya bahwa dengan data yang akurat dan pembinaan yang terarah, BUMDes dapat
                    menjadi pilar utama perekonomian lokal.
                </p>
                <ul class="mt-6 space-y-4">
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span><strong class="font-semibold">Meningkatkan Transparansi:</strong> Pelaporan digital
                            memastikan semua transaksi dan kegiatan dapat diawasi dengan mudah.</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span><strong class="font-semibold">Memperluas Jangkauan Pasar:</strong> Melalui fitur E-Katalog
                            (segera hadir), produk unggulan desa dapat dipromosikan lebih luas.</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span><strong class="font-semibold">Pembinaan Berbasis Data:</strong> Kasi PMD dapat memberikan
                            bimbingan yang lebih tepat sasaran berdasarkan data kinerja BUMDes.</span>
                    </li>
                </ul>
            </div>
            <div class="order-1 lg:order-2">
                <div class="bg-slate-200 h-96 rounded-2xl flex items-center justify-center text-slate-500 shadow-lg">
                    <p>[Gambar representasi BUMDes yang modern dan sukses]</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Alur Proses Section -->
<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Alur Pelaporan yang Mudah</h2>
            <p class="mt-4 text-slate-600">Hanya dengan 4 langkah sederhana, laporan BUMDes Anda akan tercatat secara
                digital.</p>
        </div>
        <div class="max-w-4xl mx-auto grid md:grid-cols-4 gap-8 text-center relative">
            <!-- Connector line -->
            <div class="hidden md:block absolute top-8 left-0 w-full h-0.5 bg-slate-300"></div>

            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="w-16 h-16 bg-white border-2 border-primary-600 text-primary-600 rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                    1</div>
                <h4 class="mt-4 font-semibold">Login Pengurus</h4>
                <p class="text-sm text-slate-500 mt-1">Masuk ke sistem menggunakan akun yang terdaftar.</p>
            </div>
            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="w-16 h-16 bg-white border-2 border-primary-600 text-primary-600 rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                    2</div>
                <h4 class="mt-4 font-semibold">Unggah Laporan</h4>
                <p class="text-sm text-slate-500 mt-1">Pilih jenis laporan dan unggah file digital.</p>
            </div>
            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="w-16 h-16 bg-white border-2 border-primary-600 text-primary-600 rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                    3</div>
                <h4 class="mt-4 font-semibold">Verifikasi</h4>
                <p class="text-sm text-slate-500 mt-1">Kecamatan akan memeriksa dan memvalidasi laporan.</p>
            </div>
            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="w-16 h-16 bg-white border-2 border-primary-600 text-primary-600 rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                    4</div>
                <h4 class="mt-4 font-semibold">Selesai</h4>
                <p class="text-sm text-slate-500 mt-1">Laporan tersimpan dan terdokumentasi dengan baik.</p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Berita & Informasi Terkini</h2>
            <p class="mt-4 text-slate-600">
                Ikuti perkembangan terbaru, kisah sukses, dan tips seputar BUMDes di Kecamatan Batuputih.
            </p>
        </div>
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div class="bg-slate-50 rounded-xl overflow-hidden flex flex-col group">
                <div class="aspect-video bg-slate-200 flex items-center justify-center text-slate-400">
                    <p>[Gambar produk keripik singkong]</p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-sm font-semibold text-primary-600">Kisah Sukses</span>
                    <h3
                        class="mt-2 text-xl font-bold text-slate-800 group-hover:text-primary-700 transition duration-300">
                        BUMDes Maju Sejahtera Desa Juruan Laok Tembus Pasar Modern
                    </h3>
                    <p class="mt-3 text-slate-500 text-sm flex-grow">
                        Dengan inovasi kemasan dan pemasaran digital, produk keripik singkong BUMDes Maju Sejahtera kini
                        tersedia di berbagai toko modern...
                    </p>
                    <a href="#" class="mt-4 font-semibold text-primary-600 self-start">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
            <!-- Blog Post 2 -->
            <div class="bg-slate-50 rounded-xl overflow-hidden flex flex-col group">
                <div class="aspect-video bg-slate-200 flex items-center justify-center text-slate-400">
                    <p>[Gambar pelatihan keuangan]</p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-sm font-semibold text-primary-600">Pembinaan</span>
                    <h3
                        class="mt-2 text-xl font-bold text-slate-800 group-hover:text-primary-700 transition duration-300">
                        Tips Manajemen Keuangan Sederhana untuk Pengurus BUMDes
                    </h3>
                    <p class="mt-3 text-slate-500 text-sm flex-grow">
                        Pelajari cara mencatat pemasukan, pengeluaran, dan membuat laporan laba rugi sederhana untuk
                        BUMDes Anda agar lebih profesional...
                    </p>
                    <a href="#" class="mt-4 font-semibold text-primary-600 self-start">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
            <!-- Blog Post 3 -->
            <div class="bg-slate-50 rounded-xl overflow-hidden flex flex-col group">
                <div class="aspect-video bg-slate-200 flex items-center justify-center text-slate-400">
                    <div
                        class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-md">
                        S
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-primary-700">SIPETIR</h1>
                        <p class="text-xs text-slate-500 -mt-1">Kec. Batuputih</p>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-sm font-semibold text-primary-600">Inovasi</span>
                    <h3
                        class="mt-2 text-xl font-bold text-slate-800 group-hover:text-primary-700 transition duration-300">
                        SIPETIR: Momen Transformasi Digital BUMDes se-Kecamatan
                    </h3>
                    <p class="mt-3 text-slate-500 text-sm flex-grow">
                        Peluncuran sistem pelaporan digital ini diharapkan menjadi langkah awal untuk meningkatkan
                        efisiensi dan akuntabilitas pengelolaan BUMDes...
                    </p>
                    <a href="#" class="mt-4 font-semibold text-primary-600 self-start">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
