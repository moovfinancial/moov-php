<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class CreateIndividualProfile
{
    /**
     *
     * @var IndividualName $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\IndividualName')]
    public IndividualName $name;

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
     *
     * @var ?BirthDate $birthDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('birthDate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\BirthDate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BirthDate $birthDate = null;

    /**
     *
     * @var ?GovernmentID $governmentID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('governmentID')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\GovernmentID|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?GovernmentID $governmentID = null;

    /**
     * @param  IndividualName  $name
     * @param  ?PhoneNumber  $phone
     * @param  ?string  $email
     * @param  ?Address  $address
     * @param  ?BirthDate  $birthDate
     * @param  ?GovernmentID  $governmentID
     */
    public function __construct(IndividualName $name, ?PhoneNumber $phone = null, ?string $email = null, ?Address $address = null, ?BirthDate $birthDate = null, ?GovernmentID $governmentID = null)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->birthDate = $birthDate;
        $this->governmentID = $governmentID;
    }
}