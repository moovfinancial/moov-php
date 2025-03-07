<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class IssuedCardTransaction
{
    /**
     *
     * @var string $cardTransactionID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardTransactionID')]
    public string $cardTransactionID;

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
     * A decimal-formatted numerical string that represents up to 2 decimal place precision. In USD for example, 12.34 is $12.34 and 0.99 is $0.99.
     *
     * @var string $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public string $amount;

    /**
     *
     * @var \DateTime $authorizedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authorizedOn')]
    public \DateTime $authorizedOn;

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
     *
     * @var ?string $authorizationID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authorizationID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $authorizationID = null;

    /**
     * @param  string  $cardTransactionID
     * @param  string  $issuedCardID
     * @param  string  $fundingWalletID
     * @param  string  $amount
     * @param  \DateTime  $authorizedOn
     * @param  IssuingMerchantData  $merchantData
     * @param  \DateTime  $createdOn
     * @param  ?string  $authorizationID
     * @phpstan-pure
     */
    public function __construct(string $cardTransactionID, string $issuedCardID, string $fundingWalletID, string $amount, \DateTime $authorizedOn, IssuingMerchantData $merchantData, \DateTime $createdOn, ?string $authorizationID = null)
    {
        $this->cardTransactionID = $cardTransactionID;
        $this->issuedCardID = $issuedCardID;
        $this->fundingWalletID = $fundingWalletID;
        $this->amount = $amount;
        $this->authorizedOn = $authorizedOn;
        $this->merchantData = $merchantData;
        $this->createdOn = $createdOn;
        $this->authorizationID = $authorizationID;
    }
}