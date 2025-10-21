@extends('layouts.app')

@section('title', 'Login - SIPETIR')

@section('content')
<div class="flex items-center justify-center min-h-[calc(100vh-200px)] gradient-bg py-12 px-4 sm:px-6 lg:px-8">
    <div
        class="max-w-md w-full bg-white/80 backdrop-blur-md p-8 md:p-10 rounded-2xl shadow-2xl space-y-8 border border-slate-200">
        <div>
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo SIPETIR" class="h-12 mx-auto mb-6">
            <h2 class="text-center text-3xl font-extrabold text-gray-900">
                Masuk ke Akun Anda
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Gunakan akun yang telah terdaftar untuk mengakses dashboard.
            </p>
        </div>
        <form id="loginForm" class="mt-8 space-y-6" onsubmit="handleLogin(event)">
            <div id="error-message"
                class="hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Gagal!</strong>
                <span class="block sm:inline">Username atau password salah.</span>
            </div>
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input id="username" name="username" type="text" required
                        class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                        placeholder="Username">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" required
                        class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                        placeholder="Password">
                </div>
            </div>

            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Masuk
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function handleLogin(event) {
        event.preventDefault();
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');
        const errorMessage = document.getElementById('error-message');

        // Static credentials: username and password are the same
        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();

        if (username !== '' && username === password) {
            // Login success
            errorMessage.classList.add('hidden');
            // Redirect to dashboard
            window.location.href = "/dashboard";
        } else {
            // Login failed
            errorMessage.classList.remove('hidden');
            usernameInput.focus();
        }
    }
</script>
@endsection