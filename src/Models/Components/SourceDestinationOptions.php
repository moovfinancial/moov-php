<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class SourceDestinationOptions
{
    /**
     *
     * @var ?string $accountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountID = null;

    /**
     *
     * @var ?string $paymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethodID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $paymentMethodID = null;

    /**
     * @param  ?string  $accountID
     * @param  ?string  $paymentMethodID
     * @phpstan-pure
     */
    public function __construct(?string $accountID = null, ?string $paymentMethodID = null)
    {
        $this->accountID = $accountID;
        $this->paymentMethodID = $paymentMethodID;
    }
}