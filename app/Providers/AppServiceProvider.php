<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use BeyondCode\Mailbox\InboundEmail;
use BeyondCode\Mailbox\Facades\Mailbox;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Mailbox::from('sender@domain.com', function (InboundEmail $email) {
            $texts = $email->text();
            $texts = $email->text();
            $lines = explode("\n", $texts);
            $assocArray = array();
            foreach ($lines as $line) {
                $pair = explode(':', $line, 2);
                if (count($pair) == 2) {
                    $key = trim($pair[0]);
                    $value = trim($pair[1]);
                    $assocArray[$key] = $value;
                }
            }
            User::create([
                'name' => $assocArray['name'],
                'email' => $assocArray['email'],
                'password' => Hash::make($assocArray['password']),
                'phone' => $assocArray['phone'],
                'isAdmin' => bool($assocArray['isAdmin'])
            ]);
        });
    }
}
