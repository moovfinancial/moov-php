<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class UpsertSchedule
{
    /**
     * Simple description of what the schedule is.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * $occurrences
     *
     * @var ?array<Occurrence> $occurrences
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('occurrences')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\OpenAPI\Models\Components\Occurrence>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $occurrences = null;

    /**
     * Defines configuration for recurring transfers.
     *
     * @var ?Recur $recur
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recur')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\Recur|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Recur $recur = null;

    /**
     * @param  ?string  $description
     * @param  ?array<Occurrence>  $occurrences
     * @param  ?Recur  $recur
     */
    public function __construct(?string $description = null, ?array $occurrences = null, ?Recur $recur = null)
    {
        $this->description = $description;
        $this->occurrences = $occurrences;
        $this->recur = $recur;
    }
}