<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/**
 * MXAuthorizationCode - The authorization code of a MX account which allows a processor to retrieve a linked payment account. 
 *
 *
 * `sandbox` - When linking a bank account to a `sandbox` account using a MX authorization code it will utilize MX's sandbox environment. 
 * The MX authorization code provided must be generated from MX's sandbox environment.
 */
class MXAuthorizationCode
{
    /**
     *
     * @var string $authorizationCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authorizationCode')]
    public string $authorizationCode;

    /**
     * @param  string  $authorizationCode
     * @phpstan-pure
     */
    public function __construct(string $authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
    }
}