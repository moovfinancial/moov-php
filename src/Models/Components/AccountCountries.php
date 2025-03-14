<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** AccountCountries - The countries in which an account operates. */
class AccountCountries
{
    /**
     * $countries
     *
     * @var array<string> $countries
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('countries')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $countries;

    /**
     * @param  array<string>  $countries
     * @phpstan-pure
     */
    public function __construct(array $countries)
    {
        $this->countries = $countries;
    }
}