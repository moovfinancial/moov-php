<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class BankAccountVerification
{
    /**
     *
     * @var BankAccountVerificationMethod $verificationMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('verificationMethod')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\BankAccountVerificationMethod')]
    public BankAccountVerificationMethod $verificationMethod;

    /**
     *
     * @var BankAccountVerificationStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\BankAccountVerificationStatus')]
    public BankAccountVerificationStatus $status;

    /**
     * Reason for, and details related to, an `errored` or `verificationFailed` bank account status.
     *
     * @var ?BankAccountException $exceptionDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('exceptionDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\BankAccountException|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BankAccountException $exceptionDetails = null;

    /**
     * @param  BankAccountVerificationMethod  $verificationMethod
     * @param  BankAccountVerificationStatus  $status
     * @param  ?BankAccountException  $exceptionDetails
     */
    public function __construct(BankAccountVerificationMethod $verificationMethod, BankAccountVerificationStatus $status, ?BankAccountException $exceptionDetails = null)
    {
        $this->verificationMethod = $verificationMethod;
        $this->status = $status;
        $this->exceptionDetails = $exceptionDetails;
    }
}