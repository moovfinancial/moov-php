<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** FacilitatorFee - Total or markup fee. */
class FacilitatorFee
{
    /**
     * Total facilitator fee in cents. Only either `total` or `totalDecimal` can be set.
     *
     * @var ?int $total
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $total = null;

    /**
     * Same as `total`, but a decimal-formatted numerical string that represents up to 9 decimal place precision. 
     *
     *
     * Only either `total` or `totalDecimal` can be set. Set this field if you expect the fee to be in fractions of a cent.
     *
     * @var ?string $totalDecimal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('totalDecimal')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $totalDecimal = null;

    /**
     * Markup facilitator fee in cents. Only either `markup` or `markupDecimal` can be set.
     *
     * @var ?int $markup
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('markup')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $markup = null;

    /**
     * Same as `markup`, but a decimal-formatted numerical string that represents up to 9 decimal place precision. 
     *
     * Only either `markup` or `markupDecimal` can be set. Set this field if you expect the fee to be in fractions of a cent.
     *
     * @var ?string $markupDecimal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('markupDecimal')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $markupDecimal = null;

    /**
     * @param  ?int  $total
     * @param  ?string  $totalDecimal
     * @param  ?int  $markup
     * @param  ?string  $markupDecimal
     * @phpstan-pure
     */
    public function __construct(?int $total = null, ?string $totalDecimal = null, ?int $markup = null, ?string $markupDecimal = null)
    {
        $this->total = $total;
        $this->totalDecimal = $totalDecimal;
        $this->markup = $markup;
        $this->markupDecimal = $markupDecimal;
    }
}