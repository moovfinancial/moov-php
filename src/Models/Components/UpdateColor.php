<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class UpdateColor
{
    /**
     *
     * @var ?string $accent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accent')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accent = null;

    /**
     * @param  ?string  $accent
     * @phpstan-pure
     */
    public function __construct(?string $accent = null)
    {
        $this->accent = $accent;
    }
}