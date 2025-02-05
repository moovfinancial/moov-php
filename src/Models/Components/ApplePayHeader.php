<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/**
 * ApplePayHeader - Information needed to decrypt Apple Pay payment data.
 *
 *
 * Refer to [Apple's documentation](https://developer.apple.com/documentation/passkit/payment-token-format-reference#Header-keys-and-values) 
 * for more information.
 */
class ApplePayHeader
{
    /**
     * A base64-encoded, SHA-256 hash of the merchant's public key.
     *
     * @var string $publicKeyHash
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('publicKeyHash')]
    public string $publicKeyHash;

    /**
     * A device-generated identifier for the transaction.
     *
     * @var string $transactionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transactionId')]
    public string $transactionId;

    /**
     * Base64-encoded ephemeral public key, used for ECC-encrypted payment data.
     *
     * @var ?string $ephemeralPublicKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ephemeralPublicKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ephemeralPublicKey = null;

    /**
     * @param  string  $publicKeyHash
     * @param  string  $transactionId
     * @param  ?string  $ephemeralPublicKey
     * @phpstan-pure
     */
    public function __construct(string $publicKeyHash, string $transactionId, ?string $ephemeralPublicKey = null)
    {
        $this->publicKeyHash = $publicKeyHash;
        $this->transactionId = $transactionId;
        $this->ephemeralPublicKey = $ephemeralPublicKey;
    }
}