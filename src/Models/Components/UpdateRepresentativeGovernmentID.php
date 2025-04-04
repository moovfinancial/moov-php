<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class UpdateRepresentativeGovernmentID
{
    /**
     *
     * @var ?UpdateRepresentativeSsn $ssn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ssn')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\UpdateRepresentativeSsn|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateRepresentativeSsn $ssn = null;

    /**
     *
     * @var ?UpdateRepresentativeItin $itin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('itin')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\UpdateRepresentativeItin|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateRepresentativeItin $itin = null;

    /**
     * @param  ?UpdateRepresentativeSsn  $ssn
     * @param  ?UpdateRepresentativeItin  $itin
     * @phpstan-pure
     */
    public function __construct(?UpdateRepresentativeSsn $ssn = null, ?UpdateRepresentativeItin $itin = null)
    {
        $this->ssn = $ssn;
        $this->itin = $itin;
    }
}