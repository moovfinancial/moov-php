<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Errors;

use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Utils;
class CreatePaymentLinkError
{
    /**
     *
     * @var ?string $partnerAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('partnerAccountID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $partnerAccountID = null;

    /**
     *
     * @var ?string $merchantPaymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('merchantPaymentMethodID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $merchantPaymentMethodID = null;

    /**
     *
     * @var ?Components\AmountValidationError $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\AmountValidationError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Components\AmountValidationError $amount = null;

    /**
     *
     * @var ?string $maxUses
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('maxUses')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $maxUses = null;

    /**
     *
     * @var ?string $expiresOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiresOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $expiresOn = null;

    /**
     *
     * @var ?Components\DisplayOptionsError $display
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\DisplayOptionsError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Components\DisplayOptionsError $display = null;

    /**
     *
     * @var ?Components\PaymentDetailsError $payment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PaymentDetailsError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Components\PaymentDetailsError $payment = null;

    /**
     *
     * @var ?Components\PayoutDetailsError $payout
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payout')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PayoutDetailsError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Components\PayoutDetailsError $payout = null;

    /**
     * @param  ?string  $partnerAccountID
     * @param  ?string  $merchantPaymentMethodID
     * @param  ?Components\AmountValidationError  $amount
     * @param  ?string  $maxUses
     * @param  ?string  $expiresOn
     * @param  ?Components\DisplayOptionsError  $display
     * @param  ?Components\PaymentDetailsError  $payment
     * @param  ?Components\PayoutDetailsError  $payout
     * @phpstan-pure
     */
    public function __construct(?string $partnerAccountID = null, ?string $merchantPaymentMethodID = null, ?Components\AmountValidationError $amount = null, ?string $maxUses = null, ?string $expiresOn = null, ?Components\DisplayOptionsError $display = null, ?Components\PaymentDetailsError $payment = null, ?Components\PayoutDetailsError $payout = null)
    {
        $this->partnerAccountID = $partnerAccountID;
        $this->merchantPaymentMethodID = $merchantPaymentMethodID;
        $this->amount = $amount;
        $this->maxUses = $maxUses;
        $this->expiresOn = $expiresOn;
        $this->display = $display;
        $this->payment = $payment;
        $this->payout = $payout;
    }

    public function toException(): CreatePaymentLinkErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new CreatePaymentLinkErrorThrowable($message, (int) $code, $this);
    }
}