<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** ApplePayResponse - Describes an Apple Pay token on a Moov account. */
class ApplePayResponse
{
    /**
     * The card brand.
     *
     * @var CardBrand $brand
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('brand')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardBrand')]
    public CardBrand $brand;

    /**
     * The type of the card.
     *
     * @var CardType $cardType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardType')]
    public CardType $cardType;

    /**
     *   User-friendly name of the tokenized card returned by Apple.
     *
     *   
     *   It usually contains the brand and the last four digits of the underlying card.
     *   There is no standard format.
     *
     * @var string $cardDisplayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardDisplayName')]
    public string $cardDisplayName;

    /**
     * Uniquely identifies a linked payment card or token.
     *
     * For Apple Pay, the fingerprint is based on the tokenized card number and may vary based on the user's device.
     * This field can be used to identify specific payment methods across multiple accounts on your platform.
     *
     * @var string $fingerprint
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('fingerprint')]
    public string $fingerprint;

    /**
     * The expiration date of the card or token.
     *
     * @var CardExpiration $expiration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiration')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardExpiration')]
    public CardExpiration $expiration;

    /**
     * The last four digits of the Apple Pay token, which may differ from the tokenized card's last four digits.
     *
     * @var string $dynamicLastFour
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dynamicLastFour')]
    public string $dynamicLastFour;

    /**
     * Country where the underlying card was issued.
     *
     * @var ?string $issuerCountry
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('issuerCountry')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $issuerCountry = null;

    /**
     * @param  CardBrand  $brand
     * @param  CardType  $cardType
     * @param  string  $cardDisplayName
     * @param  string  $fingerprint
     * @param  CardExpiration  $expiration
     * @param  string  $dynamicLastFour
     * @param  ?string  $issuerCountry
     * @phpstan-pure
     */
    public function __construct(CardBrand $brand, CardType $cardType, string $cardDisplayName, string $fingerprint, CardExpiration $expiration, string $dynamicLastFour, ?string $issuerCountry = null)
    {
        $this->brand = $brand;
        $this->cardType = $cardType;
        $this->cardDisplayName = $cardDisplayName;
        $this->fingerprint = $fingerprint;
        $this->expiration = $expiration;
        $this->dynamicLastFour = $dynamicLastFour;
        $this->issuerCountry = $issuerCountry;
    }
}