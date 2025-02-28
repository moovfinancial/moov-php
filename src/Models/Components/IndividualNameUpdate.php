<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class IndividualNameUpdate
{
    /**
     * The individual's first given name.
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('firstName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * The individual's second given name, if any.
     *
     * @var ?string $middleName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('middleName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $middleName = null;

    /**
     * The individual's family name.
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * Suffix of a given name.
     *
     * @var ?string $suffix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('suffix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $suffix = null;

    /**
     * @param  ?string  $firstName
     * @param  ?string  $middleName
     * @param  ?string  $lastName
     * @param  ?string  $suffix
     * @phpstan-pure
     */
    public function __construct(?string $firstName = null, ?string $middleName = null, ?string $lastName = null, ?string $suffix = null)
    {
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->suffix = $suffix;
    }
}