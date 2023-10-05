<?php

declare(strict_types=1);

use Merkeleon\PhpCryptocurrencyAddressValidation\Drivers;
use Merkeleon\PhpCryptocurrencyAddressValidation\Enums\CurrencyEnum;

return [
    CurrencyEnum::BEACON->value => [
        [
            'driver' => Drivers\Bech32Driver::class,
            'mainnet' => ['bnb' => null],
            'testnet' => ['tbnb' => null]
        ],
    ],
    CurrencyEnum::BITCOIN_CASH->value => [
        [
            'driver' => Drivers\Base32Driver::class,
            'mainnet' => ['bitcoincash:' => null],
            'testnet' => ['bchtest:' => null, 'bchreg:' => null,]
        ],
        [
            'driver' => Drivers\DefaultBase58Driver::class,
            'mainnet' => ['1' => '00', '3' => '05'],
            'testnet' => ['2' => 'C4', 'm' => '6F']
        ],
    ],
    CurrencyEnum::SOLANA->value => [
        [
            'driver' => Drivers\SolanaDriver::class,
        ],
    ],
    CurrencyEnum::BITCOIN->value => [
        [
            'driver' => Drivers\DefaultBase58Driver::class,
            'mainnet' => ['1' => '00', '3' => '05'],
            'testnet' => ['2' => 'C4', 'm' => '6F']
        ],
        [
            'driver' => Drivers\Bech32Driver::class,
            'mainnet' => ['bc' => null],
            'testnet' => ['tb' => null, 'bcrt' => null]
        ],
    ],
    CurrencyEnum::CARDANO->value => [
        [
            'driver' => Drivers\CardanoDriver::class,
            'mainnet' => ['addr' => null],
            'testnet' => ['addr_test' => null],
        ],
        [
            'driver' => Drivers\CborDriver::class,
            'mainnet' => ['A' => 33, 'D' => 66],
            'testnet' => ['2' => 40, '3' => 73],
        ],
    ],
    CurrencyEnum::DASHCOIN->value => [
        [
            'driver' => Drivers\DefaultBase58Driver::class,
            'mainnet' => ['X' => '4C', '7' => '10'],
            'testnet' => ['y' => '8C', '8' => '13']
        ],
    ],
    CurrencyEnum::DOGECOIN->value => [
        [
            'driver' => Drivers\DefaultBase58Driver::class,
            'mainnet' => ['D' => '1E', '9' => '16', 'A' => '16'],
            'testnet' => ['n' => '71', 'm' => '6F', '2' => 'C4',],
        ],
    ],
    CurrencyEnum::EOS->value => [
        [
            'driver' => Drivers\EosDriver::class,
        ],
    ],
    CurrencyEnum::ETHEREUM->value => [
        [
            'driver' => Drivers\KeccakStrictDriver::class,
        ],
    ],
    CurrencyEnum::LITECOIN->value => [
        [
            'driver' => Drivers\DefaultBase58Driver::class,
            'mainnet' => ['L' => '30', 'M' => '32', '3' => '05'],
            'testnet' => ['m' => '6F', '2' => 'C4', 'Q' => '3A']
        ],
        [
            'driver' => Drivers\Bech32Driver::class,
            'mainnet' => ['ltc' => null],
            'testnet' => ['tltc' => null, 'rltc' => null]
        ],
    ],
    CurrencyEnum::RIPPLE->value => [
        [
            'driver' => Drivers\XrpBase58Driver::class,
            'mainnet' => ['r' => '00'],
        ],
        [
            'driver' => Drivers\XrpXAddressDriver::class,
            'mainnet' => ['X' => null],
            'testnet' => ['T' => null],
        ],
    ],
    CurrencyEnum::TRON->value => [
        [
            'driver' => Drivers\DefaultBase58Driver::class,
            'mainnet' => ['T' => '41'],
        ],
    ],
    CurrencyEnum::ZCASH->value => [
        [
            'driver' => Drivers\DefaultBase58Driver::class,
            'mainnet' => ['t' => '1C'],
        ],
    ],
];
