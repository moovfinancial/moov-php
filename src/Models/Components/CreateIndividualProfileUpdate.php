<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class CreateIndividualProfileUpdate
{
    /**
     *
     * @var ?IndividualNameUpdate $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\IndividualNameUpdate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?IndividualNameUpdate $name = null;

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
     * @var ?AddressUpdate $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\AddressUpdate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AddressUpdate $address = null;

    /**
     *
     * @var ?BirthDateUpdate $birthDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('birthDate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\BirthDateUpdate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BirthDateUpdate $birthDate = null;

    /**
     *
     * @var ?GovernmentID $governmentID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('governmentID')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\GovernmentID|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?GovernmentID $governmentID = null;

    /**
     * @param  ?IndividualNameUpdate  $name
     * @param  ?PhoneNumber  $phone
     * @param  ?string  $email
     * @param  ?AddressUpdate  $address
     * @param  ?BirthDateUpdate  $birthDate
     * @param  ?GovernmentID  $governmentID
     */
    public function __construct(?IndividualNameUpdate $name = null, ?PhoneNumber $phone = null, ?string $email = null, ?AddressUpdate $address = null, ?BirthDateUpdate $birthDate = null, ?GovernmentID $governmentID = null)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->birthDate = $birthDate;
        $this->governmentID = $governmentID;
    }
}