<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class End2EndEncryptionError
{
    /**
     *
     * @var ?string $token
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $token = null;

    /**
     * @param  ?string  $token
     * @phpstan-pure
     */
    public function __construct(?string $token = null)
    {
        $this->token = $token;
    }
}