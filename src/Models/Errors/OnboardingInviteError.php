<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Errors;

use Moov\OpenAPI\Utils;
class OnboardingInviteError
{
    /**
     *
     * @var ?string $returnURL
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('returnURL')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $returnURL = null;

    /**
     *
     * @var ?string $termsOfServiceURL
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('termsOfServiceURL')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $termsOfServiceURL = null;

    /**
     * $scopes
     *
     * @var ?array<string, string> $scopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scopes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $scopes = null;

    /**
     * $capabilities
     *
     * @var ?array<string, string> $capabilities
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('capabilities')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $capabilities = null;

    /**
     * $feePlanCodes
     *
     * @var ?array<string, string> $feePlanCodes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feePlanCodes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $feePlanCodes = null;

    /**
     * @param  ?string  $returnURL
     * @param  ?string  $termsOfServiceURL
     * @param  ?array<string, string>  $scopes
     * @param  ?array<string, string>  $capabilities
     * @param  ?array<string, string>  $feePlanCodes
     * @phpstan-pure
     */
    public function __construct(?string $returnURL = null, ?string $termsOfServiceURL = null, ?array $scopes = null, ?array $capabilities = null, ?array $feePlanCodes = null)
    {
        $this->returnURL = $returnURL;
        $this->termsOfServiceURL = $termsOfServiceURL;
        $this->scopes = $scopes;
        $this->capabilities = $capabilities;
        $this->feePlanCodes = $feePlanCodes;
    }

    public function toException(): OnboardingInviteErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new OnboardingInviteErrorThrowable($message, (int) $code, $this);
    }
}