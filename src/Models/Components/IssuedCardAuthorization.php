<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class IssuedCardAuthorization
{
    /**
     *
     * @var string $authorizationID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authorizationID')]
    public string $authorizationID;

    /**
     *
     * @var string $issuedCardID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('issuedCardID')]
    public string $issuedCardID;

    /**
     *
     * @var string $fundingWalletID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('fundingWalletID')]
    public string $fundingWalletID;

    /**
     * The name of the network a card transaction is routed through.
     *
     * @var CardIssuingNetwork $network
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('network')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardIssuingNetwork')]
    public CardIssuingNetwork $network;

    /**
     * A decimal-formatted numerical string that represents up to 2 decimal place precision. In USD for example, 12.34 is $12.34 and 0.99 is $0.99.
     *
     * @var string $authorizedAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authorizedAmount')]
    public string $authorizedAmount;

    /**
     * Status of a card issuing authorization.
     *
     * @var IssuingAuthorizationStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\IssuingAuthorizationStatus')]
    public IssuingAuthorizationStatus $status;

    /**
     *
     * @var IssuingMerchantData $merchantData
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('merchantData')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\IssuingMerchantData')]
    public IssuingMerchantData $merchantData;

    /**
     *
     * @var \DateTime $createdOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdOn')]
    public \DateTime $createdOn;

    /**
     * List of card transaction IDs associated with this authorization.
     *
     * @var ?array<string> $cardTransactions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardTransactions')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $cardTransactions = null;

    /**
     * @param  string  $authorizationID
     * @param  string  $issuedCardID
     * @param  string  $fundingWalletID
     * @param  CardIssuingNetwork  $network
     * @param  string  $authorizedAmount
     * @param  IssuingAuthorizationStatus  $status
     * @param  IssuingMerchantData  $merchantData
     * @param  \DateTime  $createdOn
     * @param  ?array<string>  $cardTransactions
     * @phpstan-pure
     */
    public function __construct(string $authorizationID, string $issuedCardID, string $fundingWalletID, CardIssuingNetwork $network, string $authorizedAmount, IssuingAuthorizationStatus $status, IssuingMerchantData $merchantData, \DateTime $createdOn, ?array $cardTransactions = null)
    {
        $this->authorizationID = $authorizationID;
        $this->issuedCardID = $issuedCardID;
        $this->fundingWalletID = $fundingWalletID;
        $this->network = $network;
        $this->authorizedAmount = $authorizedAmount;
        $this->status = $status;
        $this->merchantData = $merchantData;
        $this->createdOn = $createdOn;
        $this->cardTransactions = $cardTransactions;
    }
}