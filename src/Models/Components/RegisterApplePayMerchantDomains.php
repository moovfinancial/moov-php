<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class RegisterApplePayMerchantDomains
{
    /**
     * A UTF-8 string to display in the Buy button.
     *
     * @var ?string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('displayName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayName = null;

    /**
     * A unique list of fully-qualified, top-level or sub-domain names where you will accept Apple Pay.
     *
     * @var ?array<string> $domains
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domains')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $domains = null;

    /**
     * @param  ?string  $displayName
     * @param  ?array<string>  $domains
     * @phpstan-pure
     */
    public function __construct(?string $displayName = null, ?array $domains = null)
    {
        $this->displayName = $displayName;
        $this->domains = $domains;
    }
}