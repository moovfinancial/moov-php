<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** AccountNameVerification - The results of submitting cardholder name to a card network for verification. */
class AccountNameVerification
{
    /**
     *
     * @var CardVerificationResult $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('firstName')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\CardVerificationResult')]
    public CardVerificationResult $firstName;

    /**
     *
     * @var CardVerificationResult $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastName')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\CardVerificationResult')]
    public CardVerificationResult $lastName;

    /**
     *
     * @var CardVerificationResult $middleName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('middleName')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\CardVerificationResult')]
    public CardVerificationResult $middleName;

    /**
     *
     * @var CardVerificationResult $fullName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('fullName')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\CardVerificationResult')]
    public CardVerificationResult $fullName;

    /**
     * @param  CardVerificationResult  $firstName
     * @param  CardVerificationResult  $lastName
     * @param  CardVerificationResult  $middleName
     * @param  CardVerificationResult  $fullName
     */
    public function __construct(CardVerificationResult $firstName, CardVerificationResult $lastName, CardVerificationResult $middleName, CardVerificationResult $fullName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->fullName = $fullName;
    }
}