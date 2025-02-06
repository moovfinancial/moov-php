<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class PaymentMethodsWallet
{
    /**
     *
     * @var string $walletID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('walletID')]
    public string $walletID;

    /**
     * @param  string  $walletID
     * @phpstan-pure
     */
    public function __construct(string $walletID)
    {
        $this->walletID = $walletID;
    }
}