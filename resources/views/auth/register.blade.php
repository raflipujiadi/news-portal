<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
        <form action="{{  route('register') }}" method="post">
        @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" class="shadow appearance-noneborder rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline" value="old('name')" required autofocus>
                @error('name')
                    <p class="text-red-500 text-x italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" class="shadow appearance-noneborder rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline" value="old('name')" required autofocus>
                @error('email')
                    <p class="text-red-500 text-x italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <input type="password" name="password" id="password" class="shadow appearance-noneborder rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline" value="old('name')" required autofocus>
                @error('password')
                    <p class="text-red-500 text-x italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="shadow appearance-noneborder rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline" value="old('name')" required autofocus>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:shadow-outline">
                    Register
                </button>
                <a href="{{ route('login') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Already have an account? Login
                </a>
            </div>
        </form>
    </div>
</body>
</html>