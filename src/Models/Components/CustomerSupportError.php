<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class CustomerSupportError
{
    /**
     *
     * @var ?PhoneNumberError $phone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\PhoneNumberError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PhoneNumberError $phone = null;

    /**
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     *
     * @var ?AddressError $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\AddressError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AddressError $address = null;

    /**
     *
     * @var ?string $website
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('website')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $website = null;

    /**
     * @param  ?PhoneNumberError  $phone
     * @param  ?string  $email
     * @param  ?AddressError  $address
     * @param  ?string  $website
     */
    public function __construct(?PhoneNumberError $phone = null, ?string $email = null, ?AddressError $address = null, ?string $website = null)
    {
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->website = $website;
    }
}