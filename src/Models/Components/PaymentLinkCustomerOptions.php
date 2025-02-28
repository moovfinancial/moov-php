<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class PaymentLinkCustomerOptions
{
    /**
     * If true, a billing address is required when completing the payment form.
     *
     * @var ?bool $requireAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('requireAddress')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $requireAddress = null;

    /**
     * If true, a phone number is required when completing the payment form.
     *
     * @var ?bool $requirePhone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('requirePhone')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $requirePhone = null;

    /**
     * Optional free-form metadata for the Moov account that will represent this customer.
     *
     * @var ?array<string, string> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * @param  ?bool  $requireAddress
     * @param  ?bool  $requirePhone
     * @param  ?array<string, string>  $metadata
     * @phpstan-pure
     */
    public function __construct(?bool $requireAddress = null, ?bool $requirePhone = null, ?array $metadata = null)
    {
        $this->requireAddress = $requireAddress;
        $this->requirePhone = $requirePhone;
        $this->metadata = $metadata;
    }
}