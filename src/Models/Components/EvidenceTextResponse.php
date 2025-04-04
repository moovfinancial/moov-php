<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class EvidenceTextResponse
{
    /**
     *
     * @var string $evidenceID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('evidenceID')]
    public string $evidenceID;

    /**
     *
     * @var string $disputeID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disputeID')]
    public string $disputeID;

    /**
     *
     * @var EvidenceType $evidenceType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('evidenceType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\EvidenceType')]
    public EvidenceType $evidenceType;

    /**
     *
     * @var string $text
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('text')]
    public string $text;

    /**
     *
     * @var \DateTime $createdOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdOn')]
    public \DateTime $createdOn;

    /**
     * @param  string  $evidenceID
     * @param  string  $disputeID
     * @param  EvidenceType  $evidenceType
     * @param  string  $text
     * @param  \DateTime  $createdOn
     * @phpstan-pure
     */
    public function __construct(string $evidenceID, string $disputeID, EvidenceType $evidenceType, string $text, \DateTime $createdOn)
    {
        $this->evidenceID = $evidenceID;
        $this->disputeID = $disputeID;
        $this->evidenceType = $evidenceType;
        $this->text = $text;
        $this->createdOn = $createdOn;
    }
}