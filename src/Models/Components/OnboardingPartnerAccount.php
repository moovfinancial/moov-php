<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** OnboardingPartnerAccount - The account that created the onboarding invite. */
class OnboardingPartnerAccount
{
    /**
     * The account ID of the partner that created the invite.
     *
     * @var string $accountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountID')]
    public string $accountID;

    /**
     * The operating mode for an account.
     *
     * @var Mode $accountMode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountMode')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\Mode')]
    public Mode $accountMode;

    /**
     * The name of the Moov account used to create the onboarding invite.
     *
     * @var string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('displayName')]
    public string $displayName;

    /**
     * @param  string  $accountID
     * @param  Mode  $accountMode
     * @param  string  $displayName
     * @phpstan-pure
     */
    public function __construct(string $accountID, Mode $accountMode, string $displayName)
    {
        $this->accountID = $accountID;
        $this->accountMode = $accountMode;
        $this->displayName = $displayName;
    }
}