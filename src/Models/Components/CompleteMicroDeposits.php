<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** CompleteMicroDeposits - Request to complete the micro-deposit verification workflow. */
class CompleteMicroDeposits
{
    /**
     * Two positive integers, in cents, equal to the values of the micro-deposits sent to the bank account.
     *
     * @var array<int> $amounts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amounts')]
    #[\Speakeasy\Serializer\Annotation\Type('array<int>')]
    public array $amounts;

    /**
     * @param  array<int>  $amounts
     * @phpstan-pure
     */
    public function __construct(array $amounts)
    {
        $this->amounts = $amounts;
    }
}