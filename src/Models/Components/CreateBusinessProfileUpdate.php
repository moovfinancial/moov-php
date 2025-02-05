<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class CreateBusinessProfileUpdate
{
    /**
     * The legal name under which the entity is registered.
     *
     * @var ?string $legalBusinessName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('legalBusinessName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $legalBusinessName = null;

    /**
     * A registered trade name under which the business operates, if different from its legal name.
     *
     * @var ?string $doingBusinessAs
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('doingBusinessAs')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $doingBusinessAs = null;

    /**
     * The type of entity represented by this business.
     *
     * @var ?BusinessType $businessType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('businessType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\BusinessType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BusinessType $businessType = null;

    /**
     *
     * @var ?AddressUpdate $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\AddressUpdate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AddressUpdate $address = null;

    /**
     *
     * @var ?PhoneNumber $phone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\PhoneNumber|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PhoneNumber $phone = null;

    /**
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     *
     * @var ?string $website
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('website')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $website = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * An EIN (employer identification number) for the business. For sole proprietors, an SSN can be used as the EIN.
     *
     * @var ?TaxIDUpdate $taxID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('taxID')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\TaxIDUpdate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TaxIDUpdate $taxID = null;

    /**
     *
     * @var ?IndustryCodesUpdate $industryCodes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('industryCodes')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\IndustryCodesUpdate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?IndustryCodesUpdate $industryCodes = null;

    /**
     * If the business is a financial institution, this field describes its primary regulator.
     *
     * @var ?PrimaryRegulator $primaryRegulator
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('primaryRegulator')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\PrimaryRegulator|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PrimaryRegulator $primaryRegulator = null;

    /**
     * @param  ?string  $legalBusinessName
     * @param  ?string  $doingBusinessAs
     * @param  ?BusinessType  $businessType
     * @param  ?AddressUpdate  $address
     * @param  ?PhoneNumber  $phone
     * @param  ?string  $email
     * @param  ?string  $website
     * @param  ?string  $description
     * @param  ?TaxIDUpdate  $taxID
     * @param  ?IndustryCodesUpdate  $industryCodes
     * @param  ?PrimaryRegulator  $primaryRegulator
     * @phpstan-pure
     */
    public function __construct(?string $legalBusinessName = null, ?string $doingBusinessAs = null, ?BusinessType $businessType = null, ?AddressUpdate $address = null, ?PhoneNumber $phone = null, ?string $email = null, ?string $website = null, ?string $description = null, ?TaxIDUpdate $taxID = null, ?IndustryCodesUpdate $industryCodes = null, ?PrimaryRegulator $primaryRegulator = null)
    {
        $this->legalBusinessName = $legalBusinessName;
        $this->doingBusinessAs = $doingBusinessAs;
        $this->businessType = $businessType;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->website = $website;
        $this->description = $description;
        $this->taxID = $taxID;
        $this->industryCodes = $industryCodes;
        $this->primaryRegulator = $primaryRegulator;
    }
}