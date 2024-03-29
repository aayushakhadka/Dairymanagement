<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')

    <style>

    </style>
</head>

<body class="bg-gradient-to-br from-amber-900 to-amber-300 flex items-center justify-center h-screen">

    <div class=" flex items-center justify-center h-[screen]">
        <div class="flex flex-col gap-4 items-center justify-center bg-lime-100 h-[20rem] p-[3rem] rounded-tl-[3rem] rounded-br-[3rem] shadow-lg">
            <h1 class="font-bold text-4xl text-black mb-8 ">Dairy Management</h1>
            <div class="flex space-x-4">
                <a href="/login" class="bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-full shadow-md transition duration-300">Login</a>
                <a href="/register" class="bg-yellow-500 hover:bg-yellow-600 text-white py-3 px-6 rounded-full shadow-md transition duration-300">Register</a>

            </div>
            <div class="flex space-x-4">
                <a href="/orders/create" class="bg-yellow-500 hover:bg-green-600 text-white py-3 px-6 rounded-full shadow-md transition duration-300">Order</a>
                <a href="/payments/create" class="bg-green-500 hover:bg-yellow-600 text-white py-3 px-6 rounded-full shadow-md transition duration-300">Payments</a>

            </div>
        </div>
        <div>

</body>
</body>

</html>