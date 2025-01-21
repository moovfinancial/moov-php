<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** Representative - Describes a business representative. */
class Representative
{
    /**
     * Unique identifier for this representative.
     *
     * @var string $representativeID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('representativeID')]
    public string $representativeID;

    /**
     *
     * @var IndividualName $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\IndividualName')]
    public IndividualName $name;

    /**
     *
     * @var \DateTime $createdOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdOn')]
    public \DateTime $createdOn;

    /**
     *
     * @var \DateTime $updatedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedOn')]
    public \DateTime $updatedOn;

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
     * @var ?Address $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $address = null;

    /**
     * Indicates whether this representative's birth date has been provided.
     *
     * @var ?bool $birthDateProvided
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('birthDateProvided')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $birthDateProvided = null;

    /**
     * Indicates whether a government ID (SSN, ITIN, etc.) has been provided for this representative.
     *
     * @var ?bool $governmentIDProvided
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('governmentIDProvided')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $governmentIDProvided = null;

    /**
     * Describes the job responsibilities of a business representative.
     *
     * @var ?RepresentativeResponsibilities $responsibilities
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('responsibilities')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\RepresentativeResponsibilities|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?RepresentativeResponsibilities $responsibilities = null;

    /**
     *
     * @var ?\DateTime $disabledOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disabledOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $disabledOn = null;

    /**
     * @param  string  $representativeID
     * @param  IndividualName  $name
     * @param  \DateTime  $createdOn
     * @param  \DateTime  $updatedOn
     * @param  ?PhoneNumber  $phone
     * @param  ?string  $email
     * @param  ?Address  $address
     * @param  ?bool  $birthDateProvided
     * @param  ?bool  $governmentIDProvided
     * @param  ?RepresentativeResponsibilities  $responsibilities
     * @param  ?\DateTime  $disabledOn
     */
    public function __construct(string $representativeID, IndividualName $name, \DateTime $createdOn, \DateTime $updatedOn, ?PhoneNumber $phone = null, ?string $email = null, ?Address $address = null, ?bool $birthDateProvided = null, ?bool $governmentIDProvided = null, ?RepresentativeResponsibilities $responsibilities = null, ?\DateTime $disabledOn = null)
    {
        $this->representativeID = $representativeID;
        $this->name = $name;
        $this->createdOn = $createdOn;
        $this->updatedOn = $updatedOn;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->birthDateProvided = $birthDateProvided;
        $this->governmentIDProvided = $governmentIDProvided;
        $this->responsibilities = $responsibilities;
        $this->disabledOn = $disabledOn;
    }
}