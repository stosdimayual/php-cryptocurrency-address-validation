<?php

declare(strict_types=1);

namespace Merkeleon\PhpCryptocurrencyAddressValidation;

use Illuminate\Support\ServiceProvider;

class AddressValidationServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            path: __DIR__ . '/../config/address_validation.php',
            key: 'cryptocurrency_address_validation'
        );
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/address_validation.php' => config_path('address_validation.php'),
        ]);
    }
}
