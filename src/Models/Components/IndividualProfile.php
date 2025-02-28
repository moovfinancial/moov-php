<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** IndividualProfile - Describes an individual. */
class IndividualProfile
{
    /**
     *
     * @var IndividualName $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\IndividualName')]
    public IndividualName $name;

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
     * @var ?Address $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $address = null;

    /**
     * Indicates whether this individual's birth date has been provided.
     *
     * @var ?bool $birthDateProvided
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('birthDateProvided')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $birthDateProvided = null;

    /**
     * Indicates whether a government ID (SSN, ITIN, etc.) has been provided for this individual.
     *
     * @var ?bool $governmentIDProvided
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('governmentIDProvided')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $governmentIDProvided = null;

    /**
     * @param  IndividualName  $name
     * @param  ?PhoneNumber  $phone
     * @param  ?string  $email
     * @param  ?Address  $address
     * @param  ?bool  $birthDateProvided
     * @param  ?bool  $governmentIDProvided
     * @phpstan-pure
     */
    public function __construct(IndividualName $name, ?PhoneNumber $phone = null, ?string $email = null, ?Address $address = null, ?bool $birthDateProvided = null, ?bool $governmentIDProvided = null)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->birthDateProvided = $birthDateProvided;
        $this->governmentIDProvided = $governmentIDProvided;
    }
}