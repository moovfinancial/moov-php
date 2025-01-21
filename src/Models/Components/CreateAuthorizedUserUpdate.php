<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** CreateAuthorizedUserUpdate - Fields for identifying an authorized individual. */
class CreateAuthorizedUserUpdate
{
    /**
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('firstName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     *
     * @var ?BirthDateUpdate $birthDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('birthDate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\BirthDateUpdate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BirthDateUpdate $birthDate = null;

    /**
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?BirthDateUpdate  $birthDate
     */
    public function __construct(?string $firstName = null, ?string $lastName = null, ?BirthDateUpdate $birthDate = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
    }
}