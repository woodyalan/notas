<?php


class Hash
{
    public static function criptografar(string $texto): string
    {
        return sodium_crypto_pwhash_str(
            $texto,
            SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE,
            SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE
        );
    }

    public static function compararCriptografado(string $textoCodificado, string $textoNaoCodificado): bool
    {
        return sodium_crypto_pwhash_str_verify(
            $textoCodificado,
            $textoNaoCodificado
        );
    }
}