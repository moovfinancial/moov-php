<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class EnrichedIndustryCodes
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
     * @param  ?string  $naics
     * @param  ?string  $sic
     * @phpstan-pure
     */
    public function __construct(?string $naics = null, ?string $sic = null)
    {
        $this->naics = $naics;
        $this->sic = $sic;
    }
}