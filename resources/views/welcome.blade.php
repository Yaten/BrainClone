<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BrainClone</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-6eb85457.css') }}">
    <script src="{{ asset('build/assets/app-a6d2e222.js') }}"></script>

</head>
<body class="antialiased">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="box-content h-32 w-32 flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
            <div class="flex items-center gap-4 ">
                <form class="p-4 flex space-x-4 justify-center items-center" action="/" method="post">
                    @csrf
                    <label for="message">Question:</label>
                    <input id="message" type="text" name="message" autocomplete="off" class="border rounded-md  p-2 flex-1"/>
                    <a class="bg-gray-800 text-white p-2 rounded-md" href="/reset">Reset</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
