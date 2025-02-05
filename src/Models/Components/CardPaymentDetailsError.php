<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class CardPaymentDetailsError
{
    /**
     *
     * @var ?string $dynamicDescriptor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dynamicDescriptor')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $dynamicDescriptor = null;

    /**
     * @param  ?string  $dynamicDescriptor
     * @phpstan-pure
     */
    public function __construct(?string $dynamicDescriptor = null)
    {
        $this->dynamicDescriptor = $dynamicDescriptor;
    }
}