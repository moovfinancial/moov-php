<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** MaxPerTransaction - Specifies the maximum allowable spending for a single transaction, working as a transaction ceiling. */
class MaxPerTransaction
{
    /**
     * A 3-letter ISO 4217 currency code.
     *
     * @var string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public string $currency;

    /**
     * A decimal-formatted numerical string that represents up to 9 decimal place precision. 
     *
     *
     * For example, $12.987654321 is '12.987654321'.
     *
     * @var string $valueDecimal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('valueDecimal')]
    public string $valueDecimal;

    /**
     * @param  string  $currency
     * @param  string  $valueDecimal
     * @phpstan-pure
     */
    public function __construct(string $currency, string $valueDecimal)
    {
        $this->currency = $currency;
        $this->valueDecimal = $valueDecimal;
    }
}