<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/**
 * PatchAccountCustomerSupport - User-provided information that can be displayed on credit card transactions for customers to use when
 *
 * contacting a customer support team. This data is only allowed on a business account.
 */
class PatchAccountCustomerSupport
{
    /**
     *
     * @var ?PhoneNumber $phone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PhoneNumber|null')]
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
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\AddressUpdate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AddressUpdate $address = null;

    /**
     *
     * @var ?string $website
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('website')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $website = null;

    /**
     * @param  ?PhoneNumber  $phone
     * @param  ?string  $email
     * @param  ?AddressUpdate  $address
     * @param  ?string  $website
     * @phpstan-pure
     */
    public function __construct(?PhoneNumber $phone = null, ?string $email = null, ?AddressUpdate $address = null, ?string $website = null)
    {
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->website = $website;
    }
}