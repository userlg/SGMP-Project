@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">

            @if (trim($slot) === 'SGMP')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                <img src="https://i.imgur.com/lD8lBAb.png" style="width: 200px; height: 200px;" alt="Logo"
                    class="logo">
                <br>
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
