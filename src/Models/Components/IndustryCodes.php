<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class IndustryCodes
{
    /**
     *
     * @var ?string $naics
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('naics')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $naics = null;

    /**
     *
     * @var ?string $sic
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sic')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sic = null;

    /**
     *
     * @var ?string $mcc
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mcc')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $mcc = null;

    /**
     * @param  ?string  $naics
     * @param  ?string  $sic
     * @param  ?string  $mcc
     * @phpstan-pure
     */
    public function __construct(?string $naics = null, ?string $sic = null, ?string $mcc = null)
    {
        $this->naics = $naics;
        $this->sic = $sic;
        $this->mcc = $mcc;
    }
}