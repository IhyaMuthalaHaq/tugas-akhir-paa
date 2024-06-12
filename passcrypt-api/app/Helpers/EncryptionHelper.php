<?php

namespace App\Helpers;

class EncryptionHelper
{
    public static function encrypt($string, $key)
    {
        return base64_encode(openssl_encrypt($string, 'AES-128-ECB', $key, OPENSSL_RAW_DATA));
    }

    public static function decrypt($string, $key)
    {
        return openssl_decrypt(base64_decode($string), 'AES-128-ECB', $key, OPENSSL_RAW_DATA);
    }
}
