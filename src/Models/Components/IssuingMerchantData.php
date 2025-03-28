<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class IssuingMerchantData
{
    /**
     * External identifier used to identify the merchant with the card brand.
     *
     * @var ?string $networkID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('networkID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $networkID = null;

    /**
     * Name of the merchant.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The merchant's location.
     *
     * @var ?string $city
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('city')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $city = null;

    /**
     * Two-letter country code.
     *
     * @var ?string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $country = null;

    /**
     * The merchant's five-digit postal code.
     *
     * @var ?string $postalCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('postalCode')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $postalCode = null;

    /**
     * The merchant's two-letter state abbreviation.
     *
     * @var ?string $state
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('state')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $state = null;

    /**
     * The Merchant Category Code.
     *
     * @var ?string $mcc
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mcc')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $mcc = null;

    /**
     * @param  ?string  $networkID
     * @param  ?string  $name
     * @param  ?string  $city
     * @param  ?string  $country
     * @param  ?string  $postalCode
     * @param  ?string  $state
     * @param  ?string  $mcc
     * @phpstan-pure
     */
    public function __construct(?string $networkID = null, ?string $name = null, ?string $city = null, ?string $country = null, ?string $postalCode = null, ?string $state = null, ?string $mcc = null)
    {
        $this->networkID = $networkID;
        $this->name = $name;
        $this->city = $city;
        $this->country = $country;
        $this->postalCode = $postalCode;
        $this->state = $state;
        $this->mcc = $mcc;
    }
}