<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class CardExpirationError
{
    /**
     *
     * @var ?string $month
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('month')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $month = null;

    /**
     *
     * @var ?string $year
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('year')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $year = null;

    /**
     * @param  ?string  $month
     * @param  ?string  $year
     */
    public function __construct(?string $month = null, ?string $year = null)
    {
        $this->month = $month;
        $this->year = $year;
    }
}