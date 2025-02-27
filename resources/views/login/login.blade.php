<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

    <body class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-700">Login</h2>

            @if(session('error'))
                <div class="bg-red-500 text-white p-2 my-2 rounded">#</div>
            @endif
            <form action="{{route('login')}}" method="POST" class="mt-4">
                @csrf
                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" required class="w-full p-2 border rounded mt-1">
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" required class="w-full p-2 border rounded mt-1">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded mt-4">Login</button>
            </form>

            <p class="text-center text-gray-600 mt-4">Belum punya akun? 
                <a href="{{route('regis')}}" class="text-blue-500">Daftar</a>
            </p>
        </div>

    </body>
</html>
