<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class IssuingControlsError
{
    /**
     * $velocityLimits
     *
     * @var ?array<string, IssuingVelocityLimitError> $velocityLimits
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('velocityLimits')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, \Moov\OpenAPI\Models\Components\IssuingVelocityLimitError>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $velocityLimits = null;

    /**
     * @param  ?array<string, IssuingVelocityLimitError>  $velocityLimits
     * @phpstan-pure
     */
    public function __construct(?array $velocityLimits = null)
    {
        $this->velocityLimits = $velocityLimits;
    }
}