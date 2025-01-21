<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** UpdateEvidence - The template for adding optional properties. */
class UpdateEvidence
{
    /**
     * The text to associate with the dispute as evidence.
     *
     * @var ?string $text
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('text')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $text = null;

    /**
     *
     * @var ?EvidenceType $evidenceType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('evidenceType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\EvidenceType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EvidenceType $evidenceType = null;

    /**
     * @param  ?string  $text
     * @param  ?EvidenceType  $evidenceType
     */
    public function __construct(?string $text = null, ?EvidenceType $evidenceType = null)
    {
        $this->text = $text;
        $this->evidenceType = $evidenceType;
    }
}