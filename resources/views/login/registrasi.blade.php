<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    @extends('layouts.app')
    @section('content')
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-700">Registrasi</h2>
            <div class="bg-red-500 text-white p-2 my-2 rounded">
            </div>
        <form action="action" method="POST" class="mt-4">
            <div>
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="name" required class="w-full p-2 border rounded mt-1">
            </div>
            <div class="mt-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" required class="w-full p-2 border rounded mt-1">
            </div>
            <div class="mt-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" required class="w-full p-2 border rounded mt-1">
            </div>
            <div class="mt-4">
                <label class="block text-gray-700">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required class="w-full p-2 border rounded mt-1">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white p-2 rounded mt-4">Daftar</button>
        </form>

        <p class="text-center text-gray-600 mt-4">Sudah punya akun? 
            <a href="{{route('login')}}" class="text-blue-500">Login</a>
        </p>
    </div>
    @endsection
</body>
</html>
