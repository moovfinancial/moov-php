<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class UpdateCardAddress
{
    /**
     *
     * @var ?string $addressLine1
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addressLine1')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $addressLine1 = null;

    /**
     *
     * @var ?string $addressLine2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addressLine2')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $addressLine2 = null;

    /**
     *
     * @var ?string $city
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('city')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $city = null;

    /**
     *
     * @var ?string $stateOrProvince
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('stateOrProvince')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $stateOrProvince = null;

    /**
     *
     * @var ?string $postalCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('postalCode')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $postalCode = null;

    /**
     *
     * @var ?string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $country = null;

    /**
     * @param  ?string  $addressLine1
     * @param  ?string  $addressLine2
     * @param  ?string  $city
     * @param  ?string  $stateOrProvince
     * @param  ?string  $postalCode
     * @param  ?string  $country
     * @phpstan-pure
     */
    public function __construct(?string $addressLine1 = null, ?string $addressLine2 = null, ?string $city = null, ?string $stateOrProvince = null, ?string $postalCode = null, ?string $country = null)
    {
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->city = $city;
        $this->stateOrProvince = $stateOrProvince;
        $this->postalCode = $postalCode;
        $this->country = $country;
    }
}