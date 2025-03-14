<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** TerminalCard - Describes payment card details captured with tap or in-person payment. */
class TerminalCard
{
    /**
     * How the card information was entered into the point of sale terminal.
     *
     * @var ?EntryMode $entryMode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('entryMode')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\EntryMode|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EntryMode $entryMode = null;

    /**
     * The card brand.
     *
     * @var ?CardBrand $brand
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('brand')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardBrand|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CardBrand $brand = null;

    /**
     *
     * @var ?string $bin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bin')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $bin = null;

    /**
     * The type of the card.
     *
     * @var ?CardType $cardType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CardType $cardType = null;

    /**
     * The expiration date of the card or token.
     *
     * @var ?CardExpiration $expiration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiration')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardExpiration|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CardExpiration $expiration = null;

    /**
     * Uniquely identifies a linked payment card or token.
     *
     * For Apple Pay, the fingerprint is based on the tokenized card number and may vary based on the user's device.
     * This field can be used to identify specific payment methods across multiple accounts on your platform.
     *
     * @var ?string $fingerprint
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('fingerprint')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $fingerprint = null;

    /**
     * The name of the cardholder as it appears on the card.
     *
     * @var ?string $holderName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('holderName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $holderName = null;

    /**
     * Financial institution that issued the card.
     *
     * @var ?string $issuer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('issuer')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $issuer = null;

    /**
     * Country where the card was issued.
     *
     * @var ?string $issuerCountry
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('issuerCountry')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $issuerCountry = null;

    /**
     * Last four digits of the card number
     *
     * @var ?string $lastFourCardNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastFourCardNumber')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastFourCardNumber = null;

    /**
     * @param  ?EntryMode  $entryMode
     * @param  ?CardBrand  $brand
     * @param  ?string  $bin
     * @param  ?CardType  $cardType
     * @param  ?CardExpiration  $expiration
     * @param  ?string  $fingerprint
     * @param  ?string  $holderName
     * @param  ?string  $issuer
     * @param  ?string  $issuerCountry
     * @param  ?string  $lastFourCardNumber
     * @phpstan-pure
     */
    public function __construct(?EntryMode $entryMode = null, ?CardBrand $brand = null, ?string $bin = null, ?CardType $cardType = null, ?CardExpiration $expiration = null, ?string $fingerprint = null, ?string $holderName = null, ?string $issuer = null, ?string $issuerCountry = null, ?string $lastFourCardNumber = null)
    {
        $this->entryMode = $entryMode;
        $this->brand = $brand;
        $this->bin = $bin;
        $this->cardType = $cardType;
        $this->expiration = $expiration;
        $this->fingerprint = $fingerprint;
        $this->holderName = $holderName;
        $this->issuer = $issuer;
        $this->issuerCountry = $issuerCountry;
        $this->lastFourCardNumber = $lastFourCardNumber;
    }
}