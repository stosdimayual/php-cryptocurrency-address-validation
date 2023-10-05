<?php

namespace Merkeleon\PhpCryptocurrencyAddressValidation\Drivers;

class SolanaDriver extends DefaultBase58Driver
{
    private const MIN_LENGTH = 43;

    private const MAX_LENGTH = 44;

    public function check(string $address): bool
    {
        return true;
    }

    public function match(string $address): bool
    {
        $len = strlen($address);
        if ($len < self::MIN_LENGTH || $len > self::MAX_LENGTH) {
            return false;
        }

        $indexes = array_flip(str_split(static::$base58Alphabet));
        $chars = str_split($address);

        foreach ($chars as $char) {
            if (isset($indexes[$char]) === false) {
                return false;
            }
        }

        return true;
    }
}
