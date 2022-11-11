<div>
    {{-- Base Template Component --}}
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SGMP || {{ $title }}</title>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    @vite(['resources/js/app.js'])
    <livewire:styles />

    <body class="bg-white box-content dark:bg-night transition-all duration-300 ease-linear">

        <x-layouts.navbar />

        <h2 class="font-bold text-center mb-10 text-pink-500">Testing tailwind Css</h2>

        {{ $slot }}

        <livewire:scripts />
    </body>

    </html>
</div>
