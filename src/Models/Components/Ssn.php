<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class Ssn
{
    /**
     *
     * @var ?string $full
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('full')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $full = null;

    /**
     *
     * @var ?string $lastFour
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastFour')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastFour = null;

    /**
     * @param  ?string  $full
     * @param  ?string  $lastFour
     */
    public function __construct(?string $full = null, ?string $lastFour = null)
    {
        $this->full = $full;
        $this->lastFour = $lastFour;
    }
}