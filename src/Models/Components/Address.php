<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class Address
{
    /**
     *
     * @var string $addressLine1
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addressLine1')]
    public string $addressLine1;

    /**
     *
     * @var string $city
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('city')]
    public string $city;

    /**
     *
     * @var string $stateOrProvince
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('stateOrProvince')]
    public string $stateOrProvince;

    /**
     *
     * @var string $postalCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('postalCode')]
    public string $postalCode;

    /**
     *
     * @var string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    public string $country;

    /**
     *
     * @var ?string $addressLine2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addressLine2')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $addressLine2 = null;

    /**
     * @param  string  $addressLine1
     * @param  string  $city
     * @param  string  $stateOrProvince
     * @param  string  $postalCode
     * @param  string  $country
     * @param  ?string  $addressLine2
     * @phpstan-pure
     */
    public function __construct(string $addressLine1, string $city, string $stateOrProvince, string $postalCode, string $country, ?string $addressLine2 = null)
    {
        $this->addressLine1 = $addressLine1;
        $this->city = $city;
        $this->stateOrProvince = $stateOrProvince;
        $this->postalCode = $postalCode;
        $this->country = $country;
        $this->addressLine2 = $addressLine2;
    }
}