<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class AchDebitFundPaymentMethod
{
    /**
     * ID of the payment method.
     *
     * @var string $paymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethodID')]
    public string $paymentMethodID;

    /**
     * Describes a bank account linked to a Moov account.
     *
     * @var BankAccount $bankAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bankAccount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\BankAccount')]
    public BankAccount $bankAccount;

    /**
     *
     * @var AchDebitFundPaymentMethodPaymentMethodType $paymentMethodType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethodType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\AchDebitFundPaymentMethodPaymentMethodType')]
    public AchDebitFundPaymentMethodPaymentMethodType $paymentMethodType;

    /**
     * @param  string  $paymentMethodID
     * @param  BankAccount  $bankAccount
     * @param  AchDebitFundPaymentMethodPaymentMethodType  $paymentMethodType
     */
    public function __construct(string $paymentMethodID, BankAccount $bankAccount, AchDebitFundPaymentMethodPaymentMethodType $paymentMethodType)
    {
        $this->paymentMethodID = $paymentMethodID;
        $this->bankAccount = $bankAccount;
        $this->paymentMethodType = $paymentMethodType;
    }
}