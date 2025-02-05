<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class ACHException
{
    /**
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     *
     * @var ?string $reason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reason')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reason = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * @param  ?string  $code
     * @param  ?string  $reason
     * @param  ?string  $description
     * @phpstan-pure
     */
    public function __construct(?string $code = null, ?string $reason = null, ?string $description = null)
    {
        $this->code = $code;
        $this->reason = $reason;
        $this->description = $description;
    }
}