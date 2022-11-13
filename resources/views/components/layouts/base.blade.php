<div>
    {{-- Base Template Component --}}
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SGMP || {{ $title }}</title>
        <link rel="icon" href="{{ secure_asset('favicon.ico') }}">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    @vite(['resources/js/app.js'])
    <livewire:styles />

    <body class="bg-white box-content dark:bg-night transition-all duration-300 ease-linear">

        <x-layouts.navbar />

        <div class="py-5">

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4  font-medium text-sm  md:text-base md:text-xl text-center text-sred font-pacifico">
                    Un nuevo link de verification ha sido enviado!
                </div>
            @endif

            {{ $slot }}

        </div>

        <livewire:scripts />
    </body>

    </html>
</div>
