<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class CreateProfileError
{
    /**
     *
     * @var ?CreateIndividualError $individual
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('individual')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\CreateIndividualError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateIndividualError $individual = null;

    /**
     *
     * @var ?CreateBusinessError $business
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('business')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\CreateBusinessError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateBusinessError $business = null;

    /**
     * @param  ?CreateIndividualError  $individual
     * @param  ?CreateBusinessError  $business
     */
    public function __construct(?CreateIndividualError $individual = null, ?CreateBusinessError $business = null)
    {
        $this->individual = $individual;
        $this->business = $business;
    }
}