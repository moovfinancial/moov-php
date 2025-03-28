<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** OnboardingInviteRequest - Request to create an onboarding invite. */
class OnboardingInviteRequest
{
    /**
     *   List of [scopes](https://docs.moov.io/api/authentication/scopes/) you request to use on this
     *
     *   account. These values are used to determine what can be done with the account onboarded.
     *
     * @var array<ApplicationScope> $scopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scopes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\MoovPhp\Models\Components\ApplicationScope>')]
    public array $scopes;

    /**
     *   List of [capabilities](https://docs.moov.io/guides/accounts/capabilities/) you intend to request for this
     *
     *   account. These values are used to determine what information to collect from the user during onboarding.
     *
     * @var array<CapabilityID> $capabilities
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('capabilities')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\MoovPhp\Models\Components\CapabilityID>')]
    public array $capabilities;

    /**
     * List of fee plan codes to assign the account created by the invitee.
     *
     * @var array<string> $feePlanCodes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feePlanCodes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $feePlanCodes;

    /**
     * Optional URL to redirect the user to after they complete the onboarding process.
     *
     * @var ?string $returnURL
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('returnURL')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $returnURL = null;

    /**
     * Optional URL to your organization's terms of service.
     *
     * @var ?string $termsOfServiceURL
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('termsOfServiceURL')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $termsOfServiceURL = null;

    /**
     *
     * @var ?CreateAccount $prefill
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prefill')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CreateAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateAccount $prefill = null;

    /**
     * @param  array<ApplicationScope>  $scopes
     * @param  array<CapabilityID>  $capabilities
     * @param  array<string>  $feePlanCodes
     * @param  ?string  $returnURL
     * @param  ?string  $termsOfServiceURL
     * @param  ?CreateAccount  $prefill
     * @phpstan-pure
     */
    public function __construct(array $scopes, array $capabilities, array $feePlanCodes, ?string $returnURL = null, ?string $termsOfServiceURL = null, ?CreateAccount $prefill = null)
    {
        $this->scopes = $scopes;
        $this->capabilities = $capabilities;
        $this->feePlanCodes = $feePlanCodes;
        $this->returnURL = $returnURL;
        $this->termsOfServiceURL = $termsOfServiceURL;
        $this->prefill = $prefill;
    }
}