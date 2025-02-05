<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/**
 * CustomerSupport - User-provided information that can be displayed on credit card transactions for customers to use when
 *
 * contacting a customer support team. This data is only allowed on a business account.
 */
class CustomerSupport
{
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
     * @var ?string $website
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('website')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $website = null;

    /**
     * @param  ?PhoneNumber  $phone
     * @param  ?string  $email
     * @param  ?Address  $address
     * @param  ?string  $website
     * @phpstan-pure
     */
    public function __construct(?PhoneNumber $phone = null, ?string $email = null, ?Address $address = null, ?string $website = null)
    {
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->website = $website;
    }
}