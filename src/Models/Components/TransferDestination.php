<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class TransferDestination
{
    /**
     *
     * @var string $paymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethodID')]
    public string $paymentMethodID;

    /**
     *
     * @var string $paymentMethodType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethodType')]
    public string $paymentMethodType;

    /**
     *
     * @var TransferAccount $account
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\TransferAccount')]
    public TransferAccount $account;

    /**
     * A bank account as contained within a payment method.
     *
     * @var ?PaymentMethodsBankAccount $bankAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bankAccount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\PaymentMethodsBankAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentMethodsBankAccount $bankAccount = null;

    /**
     *
     * @var ?PaymentMethodsWallet $wallet
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('wallet')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\PaymentMethodsWallet|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentMethodsWallet $wallet = null;

    /**
     * A card as contained within a payment method.
     *
     * @var ?PaymentMethodsCard $card
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('card')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\PaymentMethodsCard|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentMethodsCard $card = null;

    /**
     * ACH specific details about the transaction.
     *
     * @var ?ACHTransactionDetails $achDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('achDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\ACHTransactionDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ACHTransactionDetails $achDetails = null;

    /**
     * Describes an Apple Pay token on a Moov account.
     *
     * @var ?ApplePayResponse $applePay
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('applePay')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\ApplePayResponse|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ApplePayResponse $applePay = null;

    /**
     * Card-specific details about the transaction.
     *
     * @var ?CardTransactionDetails $cardDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\CardTransactionDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CardTransactionDetails $cardDetails = null;

    /**
     * RTP specific details about the transaction.
     *
     * @var ?RTPTransactionDetails $rtpDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rtpDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\RTPTransactionDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?RTPTransactionDetails $rtpDetails = null;

    /**
     * @param  string  $paymentMethodID
     * @param  string  $paymentMethodType
     * @param  TransferAccount  $account
     * @param  ?PaymentMethodsBankAccount  $bankAccount
     * @param  ?PaymentMethodsWallet  $wallet
     * @param  ?PaymentMethodsCard  $card
     * @param  ?ACHTransactionDetails  $achDetails
     * @param  ?ApplePayResponse  $applePay
     * @param  ?CardTransactionDetails  $cardDetails
     * @param  ?RTPTransactionDetails  $rtpDetails
     * @phpstan-pure
     */
    public function __construct(string $paymentMethodID, string $paymentMethodType, TransferAccount $account, ?PaymentMethodsBankAccount $bankAccount = null, ?PaymentMethodsWallet $wallet = null, ?PaymentMethodsCard $card = null, ?ACHTransactionDetails $achDetails = null, ?ApplePayResponse $applePay = null, ?CardTransactionDetails $cardDetails = null, ?RTPTransactionDetails $rtpDetails = null)
    {
        $this->paymentMethodID = $paymentMethodID;
        $this->paymentMethodType = $paymentMethodType;
        $this->account = $account;
        $this->bankAccount = $bankAccount;
        $this->wallet = $wallet;
        $this->card = $card;
        $this->achDetails = $achDetails;
        $this->applePay = $applePay;
        $this->cardDetails = $cardDetails;
        $this->rtpDetails = $rtpDetails;
    }
}