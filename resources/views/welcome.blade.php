@extends('layouts.app')

@section('title', 'SIPETIR - Pelayanan Terpadu Satu Pintu Kecamatan Batuputih')

@section('content')

<!-- Hero Section -->
<section class="relative pt-16 pb-24 overflow-hidden gradient-bg">
    <div class="container mx-auto px-6 text-center">
        <div class="max-w-3xl mx-auto">
            <span
                class="inline-block px-4 py-1.5 text-sm font-semibold text-primary-700 bg-primary-100 rounded-full mb-4">
                One Stop Service
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 mb-6 leading-tight">
                Pelayanan Cepat & Terintegrasi di Ujung Jari Anda
            </h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto mb-10">
                Selamat datang di SIPETIR, sistem informasi pelayanan terpadu Kecamatan Batuputih untuk segala kebutuhan
                administrasi Anda.
            </p>
            <a href="#layanan"
                class="bg-primary-600 text-white px-8 py-4 rounded-lg shadow-lg hover:bg-primary-700 transition-all duration-300 transform hover:scale-105 text-lg font-semibold">
                Jelajahi Layanan Kami
            </a>
        </div>
    </div>
    <!-- Decorative shapes -->
    <div
        class="absolute top-0 left-0 -translate-x-1/3 -translate-y-1/3 w-96 h-96 bg-primary-200/40 rounded-full blur-3xl opacity-60">
    </div>
    <div
        class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-96 h-96 bg-sky-200/40 rounded-full blur-3xl opacity-60">
    </div>
</section>

<!-- Layanan Kami Section -->
<section id="layanan" class="py-20">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Satu Sistem, Berbagai Kemudahan</h2>
            <p class="mt-4 text-slate-600">
                SIPETIR menyederhanakan proses layanan dan digitalisasi administrasi publik melalui tiga layanan utama.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1: Layanan Publik -->
            <div
                class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-xl flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-slate-900">Layanan Desa</h3>
                <p class="text-slate-600 mb-6">Urus surat rekomendasi, keterangan, hingga konsultasi administrasi
                    pemerintahan desa dengan cepat, akuntabel, dan terdokumentasi.</p>
                <a href="/layanan-publik"
                    class="font-semibold text-primary-600 hover:text-primary-800 transition duration-300">Selengkapnya
                    &rarr;</a>
            </div>

            <!-- Card 2: Layanan Dukcapil -->
            <div
                class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-sky-100 text-sky-600 rounded-xl flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 012-2h4a2 2 0 012 2v1m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-slate-900">Layanan Dukcapil</h3>
                <p class="text-slate-600 mb-6">Koordinasi data kependudukan, legalisasi dokumen, perekaman identitas,
                    dan pembaruan data dasar warga menjadi lebih mudah.</p>
                <a href="/layanan-dukcapil"
                    class="font-semibold text-primary-600 hover:text-primary-800 transition duration-300">Selengkapnya
                    &rarr;</a>
            </div>

            <!-- Card 3: Layanan BUMDes -->
            <div
                class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-slate-900">Layanan BUMDes</h3>
                <p class="text-slate-600 mb-6">Sarana pembinaan dan pelaporan Badan Usaha Milik Desa (BUMDes) secara
                    digital untuk pemantauan yang lebih efektif.</p>
                <a href="/layanan-bumdes"
                    class="font-semibold text-primary-600 hover:text-primary-800 transition duration-300">Lihat Detail
                    &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Tentang Kami Section -->
<section id="tentang" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Inovasi Digital dari Kecamatan Batuputih</h2>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    SIPETIR adalah inovasi yang dikembangkan oleh Kasi PMD Kecamatan Batuputih untuk mewujudkan
                    pelayanan publik yang cepat, transparan, dan terintegrasi. Dengan konsep "One Stop Service", seluruh
                    kebutuhan layanan masyarakat dan desa kini dapat diakses melalui satu sistem terpadu. Fokus kami
                    adalah pada penyederhanaan proses dan digitalisasi administrasi untuk kemudahan Anda.
                </p>
                <div class="mt-6 flex justify-center">
                    <div class="bg-slate-200 rounded-2xl p-2 shadow-lg">
                        <div
                            class="rounded-xl overflow-hidden border-4 border-white h-64 md:h-80 lg:h-96 w-full max-w-3xl">
                            <img src="{{ asset('img/kantor-kecamatan.png') }}" alt="Kantor Kecamatan Batuputih"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div class="feature-card bg-slate-50 p-6 rounded-xl transition-all duration-300">
                    <div
                        class="feature-icon w-12 h-12 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-lg mt-4">Cepat & Efisien</h4>
                    <p class="text-sm text-slate-500 mt-1">Memangkas birokrasi dan waktu tunggu.</p>
                </div>
                <div class="feature-card bg-slate-50 p-6 rounded-xl transition-all duration-300 mt-6">
                    <div
                        class="feature-icon w-12 h-12 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-lg mt-4">Transparan</h4>
                    <p class="text-sm text-slate-500 mt-1">Proses dapat dipantau dengan jelas.</p>
                </div>
                <div class="feature-card bg-slate-50 p-6 rounded-xl transition-all duration-300">
                    <div
                        class="feature-icon w-12 h-12 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9V3m-9 9h18" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-lg mt-4">Terintegrasi</h4>
                    <p class="text-sm text-slate-500 mt-1">Semua layanan dalam satu platform.</p>
                </div>
                <div class="feature-card bg-slate-50 p-6 rounded-xl transition-all duration-300 mt-6">
                    <div
                        class="feature-icon w-12 h-12 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-lg mt-4">Akuntabel</h4>
                    <p class="text-sm text-slate-500 mt-1">Setiap proses tercatat secara digital.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Berita Section -->
<section id="berita" class="py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Berita & Informasi Terkini</h2>
            <p class="mt-4 text-slate-600">Ikuti perkembangan terbaru dari kegiatan dan inovasi di lingkungan Kecamatan
                Batuputih.</p>
        </div>
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- DUMMY BERITA 1 -->
            <div
                class="bg-white rounded-xl overflow-hidden flex flex-col group shadow-md hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-video bg-slate-200 flex items-center justify-center text-slate-400">
                    <p></p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-sm font-semibold text-blue-600">21 Oktober 2025</span>
                    <h3 class="mt-2 text-xl font-bold text-slate-800 group-hover:text-blue-700 transition duration-300">
                        Kecamatan Batuputih Resmi Luncurkan Aplikasi SIPETIR
                    </h3>
                    <p class="mt-3 text-slate-500 text-sm flex-grow">
                        Langkah maju dalam digitalisasi layanan publik, SIPETIR diharapkan mampu meningkatkan
                        efisiensi...
                    </p>
                    <a href="#" class="mt-4 font-semibold text-blue-600 self-start">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
            <!-- DUMMY BERITA 2 -->
            <div
                class="bg-white rounded-xl overflow-hidden flex flex-col group shadow-md hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-video bg-slate-200 flex items-center justify-center text-slate-400">
                    <p></p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-sm font-semibold text-blue-600">15 Oktober 2025</span>
                    <h3 class="mt-2 text-xl font-bold text-slate-800 group-hover:text-blue-700 transition duration-300">
                        Aparat Desa se-Kecamatan Batuputih Ikuti Pelatihan Digital
                    </h3>
                    <p class="mt-3 text-slate-500 text-sm flex-grow">
                        Dalam rangka persiapan implementasi SIPETIR, seluruh aparat desa diberikan pelatihan intensif...
                    </p>
                    <a href="#" class="mt-4 font-semibold text-blue-600 self-start">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
            <!-- DUMMY BERITA 3 -->
            <div
                class="bg-white rounded-xl overflow-hidden flex flex-col group shadow-md hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-video bg-slate-200 flex items-center justify-center text-slate-400">
                    <p></p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-sm font-semibold text-blue-600">10 Oktober 2025</span>
                    <h3 class="mt-2 text-xl font-bold text-slate-800 group-hover:text-blue-700 transition duration-300">
                        BUMDes Desa Maju Jaya Raih Penghargaan Tingkat Kabupaten
                    </h3>
                    <p class="mt-3 text-slate-500 text-sm flex-grow">
                        Berkat inovasi produk dan manajemen yang baik, BUMDes Maju Jaya menjadi contoh sukses...
                    </p>
                    <a href="#" class="mt-4 font-semibold text-blue-600 self-start">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kontak Kami Section -->
<section id="kontak" class="py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Hubungi Kami</h2>
            <p class="mt-4 text-slate-600">
                Kami siap membantu Anda. Jangan ragu untuk menghubungi kami melalui informasi di bawah ini atau kunjungi
                kantor kami langsung.
            </p>
        </div>

        <div class="grid lg:grid-cols-5 gap-12 items-start">
            <!-- Detail Kontak -->
            <div class="lg:col-span-2 space-y-6">
                <div class="flex items-start gap-4">
                    <div
                        class="w-12 h-12 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-slate-800">Alamat Kantor</h4>
                        <p class="text-slate-600">Jl. Raya Batuputih No. 1, Kecamatan Batuputih, Kabupaten Sumenep, Jawa
                            Timur 69453</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div
                        class="w-12 h-12 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-slate-800">Email Resmi</h4>
                        <p class="text-slate-600">kontak@kec-batuputih.sumenepkab.go.id</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div
                        class="w-12 h-12 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-slate-800">Nomor Telepon</h4>
                        <p class="text-slate-600">(0328) 415001</p>
                    </div>
                </div>
            </div>

            <!-- Peta Google Maps -->
            <div class="lg:col-span-3">
                <div class="rounded-2xl overflow-hidden shadow-2xl h-96 border-4 border-white">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.3920914252171!2d113.917748111279!3d-6.916386465701598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9ee502721fa3d%3A0x42f6ce6dd8651e3e!2sKantor%20Kecamatan%20Batuputih!5e0!3m2!1sid!2sid!4v1760941919366!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection