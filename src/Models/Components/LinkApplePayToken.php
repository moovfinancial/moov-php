<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/**
 * LinkApplePayToken -   Contains the user's payment information as returned from Apple Pay.
 *
 *
 *   Refer to [Apple's documentation](https://developer.apple.com/documentation/apple_pay_on_the_web/applepaypaymenttoken) 
 *   for more information.
 */
class LinkApplePayToken
{
    /**
     *   Contains the encrypted payment data.
     *
     *
     *   Refer to [Apple's documentation](https://developer.apple.com/documentation/apple_pay_on_the_web/applepaypaymenttoken/1916115-paymentdata) 
     *   for more information.
     *
     * @var LinkApplePaymentData $paymentData
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentData')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\LinkApplePaymentData')]
    public LinkApplePaymentData $paymentData;

    /**
     *   Provides information about the underlying card.
     *
     *
     *   Refer to [Apple's documentation](https://developer.apple.com/documentation/apple_pay_on_the_web/applepaypaymenttoken/1916113-paymentmethod) 
     *   for more information.
     *
     * @var LinkApplePaymentMethod $paymentMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethod')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\LinkApplePaymentMethod')]
    public LinkApplePaymentMethod $paymentMethod;

    /**
     * A unique identifier provided by Apple Pay for this payment.
     *
     * @var string $transactionIdentifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transactionIdentifier')]
    public string $transactionIdentifier;

    /**
     * @param  LinkApplePaymentData  $paymentData
     * @param  LinkApplePaymentMethod  $paymentMethod
     * @param  string  $transactionIdentifier
     */
    public function __construct(LinkApplePaymentData $paymentData, LinkApplePaymentMethod $paymentMethod, string $transactionIdentifier)
    {
        $this->paymentData = $paymentData;
        $this->paymentMethod = $paymentMethod;
        $this->transactionIdentifier = $transactionIdentifier;
    }
}