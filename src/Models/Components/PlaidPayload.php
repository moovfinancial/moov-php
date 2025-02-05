<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** PlaidPayload - Describes the account to link to the Moov account using a Plaid processor token. */
class PlaidPayload
{
    /**
     * The details of a Plaid processor integration for a linked funding source. 
     *
     *
     * `sandbox` - When linking a bank account to a `sandbox` account using a Plaid processor token a default bank account
     * response will be used. The following default data will be used to generate the bank account in this flow:
     *
     * ```
     *   RoutingNumber: "011401533",
     *   AccountNumber: "1111222233330000",
     *   AccountType:   "checking",
     *   Mask:          "0000"
     * ```
     *
     * @var PlaidIntegration $plaid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('plaid')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\PlaidIntegration')]
    public PlaidIntegration $plaid;

    /**
     * @param  PlaidIntegration  $plaid
     * @phpstan-pure
     */
    public function __construct(PlaidIntegration $plaid)
    {
        $this->plaid = $plaid;
    }
}