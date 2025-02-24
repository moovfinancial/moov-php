<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class GeneratedByCardID
{
    /**
     *
     * @var ?string $cardID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('CardID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $cardID = null;

    /**
     * @param  ?string  $cardID
     * @phpstan-pure
     */
    public function __construct(?string $cardID = null)
    {
        $this->cardID = $cardID;
    }
}