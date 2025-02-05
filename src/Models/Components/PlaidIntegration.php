<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/**
 * PlaidIntegration - The details of a Plaid processor integration for a linked funding source. 
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
 */
class PlaidIntegration
{
    /**
     *
     * @var string $token
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token')]
    public string $token;

    /**
     * @param  string  $token
     * @phpstan-pure
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }
}