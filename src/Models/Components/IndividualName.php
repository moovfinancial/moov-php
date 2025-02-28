<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class IndividualName
{
    /**
     * The individual's first given name.
     *
     * @var string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('firstName')]
    public string $firstName;

    /**
     * The individual's family name.
     *
     * @var string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastName')]
    public string $lastName;

    /**
     * The individual's second given name, if any.
     *
     * @var ?string $middleName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('middleName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $middleName = null;

    /**
     * Suffix of a given name.
     *
     * @var ?string $suffix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('suffix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $suffix = null;

    /**
     * @param  string  $firstName
     * @param  string  $lastName
     * @param  ?string  $middleName
     * @param  ?string  $suffix
     * @phpstan-pure
     */
    public function __construct(string $firstName, string $lastName, ?string $middleName = null, ?string $suffix = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->suffix = $suffix;
    }
}