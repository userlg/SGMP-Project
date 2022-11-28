<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\ServiceProvider;

use Illuminate\Notifications\Messages\MailMessage;

use Illuminate\Support\Facades\Lang;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        VerifyEmail::$toMailCallback = function ($notifiable, $verificationUrl) {
            return (new MailMessage)
                ->greeting('Hola, nuevo usuario')
                ->subject(Lang::get('Verifica Tu Direccion Email'))
                ->line(Lang::get('Clickea el boton abajo'))
                ->action(Lang::get('Verificar Email'), $verificationUrl)
                ->line(Lang::get('Si no has creado alguna cuenta, la solicitud vence en 5 minutos'))
                ->salutation("Saludos");
        };
    }
}
