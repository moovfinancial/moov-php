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
     * Describes a bank account linked to a Moov account.
     *
     * @var ?BankAccount $bankAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bankAccount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\BankAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BankAccount $bankAccount = null;

    /**
     *
     * @var mixed $wallet
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('wallet')]
    #[\Speakeasy\Serializer\Annotation\Type('mixed')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public mixed $wallet = null;

    /**
     *
     * @var mixed $card
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('card')]
    #[\Speakeasy\Serializer\Annotation\Type('mixed')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public mixed $card = null;

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
     *
     * @var mixed $applePay
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('applePay')]
    #[\Speakeasy\Serializer\Annotation\Type('mixed')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public mixed $applePay = null;

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
     * @param  ?BankAccount  $bankAccount
     * @param  mixed  $wallet
     * @param  mixed  $card
     * @param  ?ACHTransactionDetails  $achDetails
     * @param  mixed  $applePay
     * @param  ?CardTransactionDetails  $cardDetails
     * @param  ?RTPTransactionDetails  $rtpDetails
     */
    public function __construct(string $paymentMethodID, string $paymentMethodType, TransferAccount $account, ?BankAccount $bankAccount = null, mixed $wallet = null, mixed $card = null, ?ACHTransactionDetails $achDetails = null, mixed $applePay = null, ?CardTransactionDetails $cardDetails = null, ?RTPTransactionDetails $rtpDetails = null)
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