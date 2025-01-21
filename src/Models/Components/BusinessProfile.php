<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** BusinessProfile - Describes a business. */
class BusinessProfile
{
    /**
     * The legal name under which the entity is registered.
     *
     * @var string $legalBusinessName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('legalBusinessName')]
    public string $legalBusinessName;

    /**
     *
     * @var bool $ownersProvided
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ownersProvided')]
    public bool $ownersProvided;

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
     * @var ?Address $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $address = null;

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
     * Indicates whether a tax ID has been provided for this business.
     *
     * @var ?bool $taxIDProvided
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('taxIDProvided')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $taxIDProvided = null;

    /**
     * $representatives
     *
     * @var ?array<Representative> $representatives
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('representatives')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\OpenAPI\Models\Components\Representative>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $representatives = null;

    /**
     *
     * @var ?IndustryCodes $industryCodes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('industryCodes')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\IndustryCodes|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?IndustryCodes $industryCodes = null;

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
     * @param  string  $legalBusinessName
     * @param  bool  $ownersProvided
     * @param  ?string  $doingBusinessAs
     * @param  ?BusinessType  $businessType
     * @param  ?Address  $address
     * @param  ?PhoneNumber  $phone
     * @param  ?string  $email
     * @param  ?string  $website
     * @param  ?string  $description
     * @param  ?bool  $taxIDProvided
     * @param  ?array<Representative>  $representatives
     * @param  ?IndustryCodes  $industryCodes
     * @param  ?PrimaryRegulator  $primaryRegulator
     */
    public function __construct(string $legalBusinessName, bool $ownersProvided, ?string $doingBusinessAs = null, ?BusinessType $businessType = null, ?Address $address = null, ?PhoneNumber $phone = null, ?string $email = null, ?string $website = null, ?string $description = null, ?bool $taxIDProvided = null, ?array $representatives = null, ?IndustryCodes $industryCodes = null, ?PrimaryRegulator $primaryRegulator = null)
    {
        $this->legalBusinessName = $legalBusinessName;
        $this->ownersProvided = $ownersProvided;
        $this->doingBusinessAs = $doingBusinessAs;
        $this->businessType = $businessType;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->website = $website;
        $this->description = $description;
        $this->taxIDProvided = $taxIDProvided;
        $this->representatives = $representatives;
        $this->industryCodes = $industryCodes;
        $this->primaryRegulator = $primaryRegulator;
    }
}