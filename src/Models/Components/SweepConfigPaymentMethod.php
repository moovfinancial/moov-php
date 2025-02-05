<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/**
 * SweepConfigPaymentMethod - The payment method used to push or pull funds to a bank account.
 *
 * The push payment method can only be ach-credit-standard or ach-credit-same-day. The pull payment method can only be ach-debit-fund.
 */
class SweepConfigPaymentMethod
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
     * @var ?\DateTime $disabledOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disabledOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $disabledOn = null;

    /**
     * @param  string  $paymentMethodID
     * @param  ?\DateTime  $disabledOn
     * @phpstan-pure
     */
    public function __construct(string $paymentMethodID, ?\DateTime $disabledOn = null)
    {
        $this->paymentMethodID = $paymentMethodID;
        $this->disabledOn = $disabledOn;
    }
}