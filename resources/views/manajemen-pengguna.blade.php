@extends('layouts.admin')

@section('title', 'Manajemen Pengguna')
@section('page-title', 'Manajemen Pengguna')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Daftar Pengguna Sistem</h2>
            <p class="text-sm text-slate-500 mt-1">Kelola akun aparat desa dan pengurus BUMDes.</p>
        </div>
        <div class="mt-4 sm:mt-0 flex items-center space-x-2">
            <input type="text" placeholder="Cari pengguna..."
                class="block w-full sm:w-auto rounded-md border-slate-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 text-sm">
            <button onclick="openModal()"
                class="px-4 py-2 text-sm font-medium text-white bg-primary-600 rounded-md hover:bg-primary-700 flex items-center whitespace-nowrap">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Tambah Pengguna
            </button>
        </div>
    </div>

    <!-- Tabel Data Pengguna -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-slate-500">
            <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Lengkap</th>
                    <th scope="col" class="px-6 py-3">Username</th>
                    <th scope="col" class="px-6 py-3">Hak Akses</th>
                    <th scope="col" class="px-6 py-3">Asal Desa/BUMDes</th>
                    <th scope="col" class="px-6 py-3 text-center">Status</th>
                    <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data Pengguna -->
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Ahmad Zaini</td>
                    <td class="px-6 py-4">zaini_juruanlaok</td>
                    <td class="px-6 py-4">Aparat Desa</td>
                    <td class="px-6 py-4">Desa Juruan Laok</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Aktif</span>
                    </td>
                    <td class="px-6 py-4 text-center"><button onclick="openModal(true)"
                            class="font-medium text-primary-600 hover:underline">Edit</button></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Siti Fatimah</td>
                    <td class="px-6 py-4">fatimah_bumdes</td>
                    <td class="px-6 py-4">Pengurus BUMDes</td>
                    <td class="px-6 py-4">BUMDes Teratai</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Aktif</span>
                    </td>
                    <td class="px-6 py-4 text-center"><button onclick="openModal(true)"
                            class="font-medium text-primary-600 hover:underline">Edit</button></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Budi Santoso</td>
                    <td class="px-6 py-4">budi_gedang</td>
                    <td class="px-6 py-4">Aparat Desa</td>
                    <td class="px-6 py-4">Desa Gedang-Gedang</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full">Nonaktif</span>
                    </td>
                    <td class="px-6 py-4 text-center"><button onclick="openModal(true)"
                            class="font-medium text-primary-600 hover:underline">Edit</button></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Dewi Lestari</td>
                    <td class="px-6 py-4">dewi_bumdespesisir</td>
                    <td class="px-6 py-4">Pengurus BUMDes</td>
                    <td class="px-6 py-4">BUMDes Pesisir Jaya</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Aktif</span>
                    </td>
                    <td class="px-6 py-4 text-center"><button onclick="openModal(true)"
                            class="font-medium text-primary-600 hover:underline">Edit</button></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Herman Syah</td>
                    <td class="px-6 py-4">herman_batuputihlaok</td>
                    <td class="px-6 py-4">Aparat Desa</td>
                    <td class="px-6 py-4">Desa Batuputih Laok</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Aktif</span>
                    </td>
                    <td class="px-6 py-4 text-center"><button onclick="openModal(true)"
                            class="font-medium text-primary-600 hover:underline">Edit</button></td>
                </tr>
                <tr class="bg-white border-b hover:bg-slate-50">
                    <td class="px-6 py-4 font-medium text-slate-900">Rina Wati</td>
                    <td class="px-6 py-4">rina_bumdestunas</td>
                    <td class="px-6 py-4">Pengurus BUMDes</td>
                    <td class="px-6 py-4">BUMDes Tunas Harapan</td>
                    <td class="px-6 py-4 text-center"><span
                            class="px-3 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">Aktif</span>
                    </td>
                    <td class="px-6 py-4 text-center"><button onclick="openModal(true)"
                            class="font-medium text-primary-600 hover:underline">Edit</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-between border-t border-slate-200 bg-white px-4 py-3 sm:px-6 mt-4">
        <div class="flex flex-1 justify-between sm:hidden">
            <a href="#"
                class="relative inline-flex items-center rounded-md border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Previous</a>
            <a href="#"
                class="relative ml-3 inline-flex items-center rounded-md border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Next</a>
        </div>
        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-slate-700">
                    Menampilkan
                    <span class="font-medium">1</span>
                    sampai
                    <span class="font-medium">6</span>
                    dari
                    <span class="font-medium">18</span>
                    hasil
                </p>
            </div>
            <div>
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                    <a href="#"
                        class="relative inline-flex items-center rounded-l-md px-2 py-2 text-slate-400 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-20 focus:outline-offset-0">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" aria-current="page"
                        class="relative z-10 inline-flex items-center bg-primary-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">1</a>
                    <a href="#"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-slate-900 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-20 focus:outline-offset-0">2</a>
                    <a href="#"
                        class="relative hidden items-center px-4 py-2 text-sm font-semibold text-slate-900 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                    <a href="#"
                        class="relative inline-flex items-center rounded-r-md px-2 py-2 text-slate-400 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-20 focus:outline-offset-0">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div id="userModal"
    class="hidden fixed inset-0 bg-black bg-opacity-60 z-50 flex justify-center items-center p-4 transition-opacity duration-300">
    <div id="modalContent"
        class="bg-white rounded-2xl shadow-2xl w-full max-w-lg transform scale-95 transition-transform duration-300">
        <!-- Modal Header -->
        <div class="flex justify-between items-center p-5 border-b">
            <h3 id="modalTitle" class="text-xl font-bold text-slate-900">Tambah Pengguna Baru</h3>
            <button onclick="closeModal()" class="text-slate-400 hover:text-slate-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <!-- Modal Body -->
        <div class="p-6 space-y-4">
            <div>
                <label for="namaLengkap" class="block text-sm font-medium text-slate-700">Nama Lengkap</label>
                <input type="text" id="namaLengkap"
                    class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm">
            </div>
            <div>
                <label for="username" class="block text-sm font-medium text-slate-700">Username</label>
                <input type="text" id="username"
                    class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                <input type="password" id="password"
                    class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm"
                    placeholder="Kosongkan jika tidak ingin mengubah">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="hakAkses" class="block text-sm font-medium text-slate-700">Hak Akses</label>
                    <select id="hakAkses"
                        class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm">
                        <option>Aparat Desa</option>
                        <option>Pengurus BUMDes</option>
                    </select>
                </div>
                <div>
                    <label for="status" class="block text-sm font-medium text-slate-700">Status</label>
                    <select id="status"
                        class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm">
                        <option>Aktif</option>
                        <option>Nonaktif</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="asal" class="block text-sm font-medium text-slate-700">Asal Desa / BUMDes</label>
                <input type="text" id="asal"
                    class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm">
            </div>
        </div>
        <!-- Modal Footer -->
        <div class="bg-slate-50 px-6 py-4 flex justify-end space-x-3 rounded-b-2xl">
            <button onclick="closeModal()" type="button"
                class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-md hover:bg-slate-50">Batal</button>
            <button type="button"
                class="px-4 py-2 text-sm font-medium text-white bg-primary-600 rounded-md hover:bg-primary-700">Simpan</button>
        </div>
    </div>
</div>

<script>
    const userModal = document.getElementById('userModal');
    const modalContent = document.getElementById('modalContent');
    const modalTitle = document.getElementById('modalTitle');

    // DUMMY DATA FOR EDITING
    const dummyData = {
        namaLengkap: 'Ahmad Zaini',
        username: 'zaini_juruanlaok',
        hakAkses: 'Aparat Desa',
        status: 'Aktif',
        asal: 'Desa Juruan Laok'
    };

    function openModal(isEdit = false) {
        if (isEdit) {
            modalTitle.innerText = 'Edit Pengguna';
            document.getElementById('namaLengkap').value = dummyData.namaLengkap;
            document.getElementById('username').value = dummyData.username;
            document.getElementById('hakAkses').value = dummyData.hakAkses;
            document.getElementById('status').value = dummyData.status;
            document.getElementById('asal').value = dummyData.asal;
        } else {
            modalTitle.innerText = 'Tambah Pengguna Baru';
             // Clear fields for new user
            document.getElementById('namaLengkap').value = '';
            document.getElementById('username').value = '';
            document.getElementById('hakAkses').value = 'Aparat Desa';
            document.getElementById('status').value = 'Aktif';
            document.getElementById('asal').value = '';
        }

        userModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        setTimeout(() => {
            userModal.classList.add('opacity-100');
            modalContent.classList.remove('scale-95');
        }, 10);
    }

    function closeModal() {
        userModal.classList.remove('opacity-100');
        modalContent.classList.add('scale-95');
        document.body.style.overflow = 'auto';
        setTimeout(() => {
            userModal.classList.add('hidden');
        }, 300);
    }
</script>
@endsection