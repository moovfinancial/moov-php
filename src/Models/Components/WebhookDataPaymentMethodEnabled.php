<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class WebhookDataPaymentMethodEnabled
{
    /**
     *
     * @var string $accountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountID')]
    public string $accountID;

    /**
     *
     * @var string $paymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethodID')]
    public string $paymentMethodID;

    /**
     *
     * @var string $sourceID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sourceID')]
    public string $sourceID;

    /**
     * @param  string  $accountID
     * @param  string  $paymentMethodID
     * @param  string  $sourceID
     * @phpstan-pure
     */
    public function __construct(string $accountID, string $paymentMethodID, string $sourceID)
    {
        $this->accountID = $accountID;
        $this->paymentMethodID = $paymentMethodID;
        $this->sourceID = $sourceID;
    }
}