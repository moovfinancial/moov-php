<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** WebhookWalletAvailableBalance - The available balance of a wallet. */
class WebhookWalletAvailableBalance
{
    /**
     *
     * @var string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public string $currency;

    /**
     *
     * @var int $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    public int $value;

    /**
     *
     * @var string $valueDecimal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('valueDecimal')]
    public string $valueDecimal;

    /**
     * @param  string  $currency
     * @param  int  $value
     * @param  string  $valueDecimal
     * @phpstan-pure
     */
    public function __construct(string $currency, int $value, string $valueDecimal)
    {
        $this->currency = $currency;
        $this->value = $value;
        $this->valueDecimal = $valueDecimal;
    }
}