<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class CompleteBankAccountVerification
{
    /**
     * Code provided by user from their bank account transactions
     *
     * @var string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    public string $code;

    /**
     * @param  string  $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }
}