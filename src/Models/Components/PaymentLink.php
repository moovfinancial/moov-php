<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class PaymentLink
{
    /**
     * Unique code identifying this payment link.
     *
     * @var string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    public string $code;

    /**
     * The operating mode for an account.
     *
     * @var Mode $mode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mode')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\Mode')]
    public Mode $mode;

    /**
     *
     * @var PaymentLinkStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PaymentLinkStatus')]
    public PaymentLinkStatus $status;

    /**
     * The partner's Moov account ID.
     *
     * @var string $partnerAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('partnerAccountID')]
    public string $partnerAccountID;

    /**
     * The merchant's Moov account ID.
     *
     * @var string $merchantAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('merchantAccountID')]
    public string $merchantAccountID;

    /**
     * The merchant's preferred payment method ID. Must be a wallet payment method.
     *
     * @var string $merchantPaymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('merchantPaymentMethodID')]
    public string $merchantPaymentMethodID;

    /**
     * Link to the payment landing page for this payment link.
     *
     * @var string $link
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('link')]
    public string $link;

    /**
     *
     * @var Amount $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\Amount')]
    public Amount $amount;

    /**
     * The number of times this payment link has been used.
     *
     * @var int $uses
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('uses')]
    public int $uses;

    /**
     * Customizable display options for a payment link.
     *
     * @var PaymentLinkDisplayOptions $display
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PaymentLinkDisplayOptions')]
    public PaymentLinkDisplayOptions $display;

    /**
     *
     * @var PaymentLinkCustomerOptions $customer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PaymentLinkCustomerOptions')]
    public PaymentLinkCustomerOptions $customer;

    /**
     *
     * @var \DateTime $createdOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdOn')]
    public \DateTime $createdOn;

    /**
     *
     * @var \DateTime $updatedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedOn')]
    public \DateTime $updatedOn;

    /**
     * An optional limit on the number of times this payment link can be used. 
     *
     *
     * **For payouts, `maxUses` is always 1.**
     *
     * @var ?int $maxUses
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('maxUses')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $maxUses = null;

    /**
     * The timestamp when this payment link was last used.
     *
     * @var ?\DateTime $lastUsedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastUsedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $lastUsedOn = null;

    /**
     * An optional expiration date for this payment link.
     *
     * @var ?\DateTime $expiresOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiresOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $expiresOn = null;

    /**
     * Options for payment links used to collect payment.
     *
     * @var ?PaymentLinkPaymentDetails $payment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PaymentLinkPaymentDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentLinkPaymentDetails $payment = null;

    /**
     *
     * @var ?PaymentLinkPayoutDetails $payout
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payout')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PaymentLinkPayoutDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentLinkPayoutDetails $payout = null;

    /**
     *
     * @var ?\DateTime $disabledOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disabledOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $disabledOn = null;

    /**
     * @param  string  $code
     * @param  Mode  $mode
     * @param  PaymentLinkStatus  $status
     * @param  string  $partnerAccountID
     * @param  string  $merchantAccountID
     * @param  string  $merchantPaymentMethodID
     * @param  string  $link
     * @param  Amount  $amount
     * @param  int  $uses
     * @param  PaymentLinkDisplayOptions  $display
     * @param  PaymentLinkCustomerOptions  $customer
     * @param  \DateTime  $createdOn
     * @param  \DateTime  $updatedOn
     * @param  ?int  $maxUses
     * @param  ?\DateTime  $lastUsedOn
     * @param  ?\DateTime  $expiresOn
     * @param  ?PaymentLinkPaymentDetails  $payment
     * @param  ?PaymentLinkPayoutDetails  $payout
     * @param  ?\DateTime  $disabledOn
     * @phpstan-pure
     */
    public function __construct(string $code, Mode $mode, PaymentLinkStatus $status, string $partnerAccountID, string $merchantAccountID, string $merchantPaymentMethodID, string $link, Amount $amount, int $uses, PaymentLinkDisplayOptions $display, PaymentLinkCustomerOptions $customer, \DateTime $createdOn, \DateTime $updatedOn, ?int $maxUses = null, ?\DateTime $lastUsedOn = null, ?\DateTime $expiresOn = null, ?PaymentLinkPaymentDetails $payment = null, ?PaymentLinkPayoutDetails $payout = null, ?\DateTime $disabledOn = null)
    {
        $this->code = $code;
        $this->mode = $mode;
        $this->status = $status;
        $this->partnerAccountID = $partnerAccountID;
        $this->merchantAccountID = $merchantAccountID;
        $this->merchantPaymentMethodID = $merchantPaymentMethodID;
        $this->link = $link;
        $this->amount = $amount;
        $this->uses = $uses;
        $this->display = $display;
        $this->customer = $customer;
        $this->createdOn = $createdOn;
        $this->updatedOn = $updatedOn;
        $this->maxUses = $maxUses;
        $this->lastUsedOn = $lastUsedOn;
        $this->expiresOn = $expiresOn;
        $this->payment = $payment;
        $this->payout = $payout;
        $this->disabledOn = $disabledOn;
    }
}