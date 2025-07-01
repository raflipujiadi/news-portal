<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
<h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
<form method="POST" action="{{ route('login') }}">
    @csrf
<div class="mb-4">
    <div class="form-group">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email address</label>
        <input type="email" class="form-control shadow appearance-noneborder rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline" id="email" name="email" required>
    </div>
</div>
<div class="mb-4">
    <div class="form-group">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
        <input type="password" class="form-control shadow appearance-noneborder rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline" id="password" name="password" required>
    </div>
</div>
<div class="flex items-center justify-between">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:shadow-outline">Login</button>
</button>
</div>
<div class="mb-6">
<a href="{{ route('password.request') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Forgot your password?</a>
<a href="{{ route('register') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Don't have an account? Register</a>
</div>
</form>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif