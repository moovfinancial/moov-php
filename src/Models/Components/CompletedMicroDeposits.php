<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class CompletedMicroDeposits
{
    /**
     *
     * @var MicroDepositStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\MicroDepositStatus')]
    public MicroDepositStatus $status;

    /**
     * @param  MicroDepositStatus  $status
     */
    public function __construct(MicroDepositStatus $status)
    {
        $this->status = $status;
    }
}