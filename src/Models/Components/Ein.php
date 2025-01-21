<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class Ein
{
    /**
     *
     * @var string $number
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('number')]
    public string $number;

    /**
     * @param  string  $number
     */
    public function __construct(string $number)
    {
        $this->number = $number;
    }
}