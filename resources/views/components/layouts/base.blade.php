<div>
    {{-- Base Template Component --}}
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SGMP || {{ $title }}</title>
    </head>
    @vite(['resources/js/app.js'])
    <livewire:styles />

    <body>
        <h2 class="font-bold text-center mb-10 text-pink-500">Testing tailwind Css</h2>
        {{ $slot }}

        <livewire:scripts />
    </body>

    </html>
</div>
