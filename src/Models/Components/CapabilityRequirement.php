<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** CapabilityRequirement - Represents individual and business data necessary to facilitate the enabling of a capability for an account. */
class CapabilityRequirement
{
    /**
     * $currentlyDue
     *
     * @var ?array<RequirementID> $currentlyDue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currentlyDue')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\MoovPhp\Models\Components\RequirementID>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $currentlyDue = null;

    /**
     * $errors
     *
     * @var ?array<RequirementError> $errors
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('errors')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\MoovPhp\Models\Components\RequirementError>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $errors = null;

    /**
     * @param  ?array<RequirementID>  $currentlyDue
     * @param  ?array<RequirementError>  $errors
     * @phpstan-pure
     */
    public function __construct(?array $currentlyDue = null, ?array $errors = null)
    {
        $this->currentlyDue = $currentlyDue;
        $this->errors = $errors;
    }
}