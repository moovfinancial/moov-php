<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class AchDebitCollectPaymentMethod
{
    /**
     * ID of the payment method.
     *
     * @var string $paymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethodID')]
    public string $paymentMethodID;

    /**
     *
     * @var AchDebitCollectPaymentMethodPaymentMethodType $paymentMethodType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethodType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\AchDebitCollectPaymentMethodPaymentMethodType')]
    public AchDebitCollectPaymentMethodPaymentMethodType $paymentMethodType;

    /**
     * A bank account as contained within a payment method.
     *
     * @var PaymentMethodsBankAccount $bankAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bankAccount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\PaymentMethodsBankAccount')]
    public PaymentMethodsBankAccount $bankAccount;

    /**
     * @param  string  $paymentMethodID
     * @param  AchDebitCollectPaymentMethodPaymentMethodType  $paymentMethodType
     * @param  PaymentMethodsBankAccount  $bankAccount
     * @phpstan-pure
     */
    public function __construct(string $paymentMethodID, AchDebitCollectPaymentMethodPaymentMethodType $paymentMethodType, PaymentMethodsBankAccount $bankAccount)
    {
        $this->paymentMethodID = $paymentMethodID;
        $this->paymentMethodType = $paymentMethodType;
        $this->bankAccount = $bankAccount;
    }
}