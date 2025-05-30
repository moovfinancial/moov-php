<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class WebhookDataBankAccountUpdated
{
    /**
     *
     * @var string $bankAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bankAccountID')]
    public string $bankAccountID;

    /**
     *
     * @var string $accountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountID')]
    public string $accountID;

    /**
     *
     * @var BankAccountStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\BankAccountStatus')]
    public BankAccountStatus $status;

    /**
     * The reason the bank account status changed to the current value.
     *
     * @var BankAccountStatusReason $statusReason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('statusReason')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\BankAccountStatusReason')]
    public BankAccountStatusReason $statusReason;

    /**
     * Reason for, and details related to, an `errored` or `verificationFailed` bank account status.
     *
     * @var ?BankAccountException $exceptionDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('exceptionDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\BankAccountException|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BankAccountException $exceptionDetails = null;

    /**
     * @param  string  $bankAccountID
     * @param  string  $accountID
     * @param  BankAccountStatus  $status
     * @param  BankAccountStatusReason  $statusReason
     * @param  ?BankAccountException  $exceptionDetails
     * @phpstan-pure
     */
    public function __construct(string $bankAccountID, string $accountID, BankAccountStatus $status, BankAccountStatusReason $statusReason, ?BankAccountException $exceptionDetails = null)
    {
        $this->bankAccountID = $bankAccountID;
        $this->accountID = $accountID;
        $this->status = $status;
        $this->statusReason = $statusReason;
        $this->exceptionDetails = $exceptionDetails;
    }
}