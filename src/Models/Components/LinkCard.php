<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class LinkCard
{
    /**
     *
     * @var string $cardNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardNumber')]
    public string $cardNumber;

    /**
     *
     * @var string $cardCvv
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardCvv')]
    public string $cardCvv;

    /**
     * The expiration date of the card or token.
     *
     * @var CardExpiration $expiration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiration')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardExpiration')]
    public CardExpiration $expiration;

    /**
     *
     * @var CardAddress $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billingAddress')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardAddress')]
    public CardAddress $billingAddress;

    /**
     * Wraps a compact-serialized JSON Web Encryption (JWE) token used for secure transmission of sensitive data (e.g., PCI information) through intermediaries. 
     *
     * This token is encrypted using the public key from /end-to-end-keys and wraps an AES key. For details and examples, refer to our 
     * [GitHub repository](https://github.com/moovfinancial/moov-go/blob/main/examples/e2ee/e2ee_test.go).
     *
     * @var ?E2EEToken $e2ee
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('e2ee')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\E2EEToken|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?E2EEToken $e2ee = null;

    /**
     *
     * @var ?string $holderName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('holderName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $holderName = null;

    /**
     *
     * @var ?bool $cardOnFile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardOnFile')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $cardOnFile = null;

    /**
     *
     * @var ?string $merchantAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('merchantAccountID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $merchantAccountID = null;

    /**
     *
     * @var ?bool $verifyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('verifyName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $verifyName = null;

    /**
     * @param  string  $cardNumber
     * @param  string  $cardCvv
     * @param  CardExpiration  $expiration
     * @param  CardAddress  $billingAddress
     * @param  ?E2EEToken  $e2ee
     * @param  ?string  $holderName
     * @param  ?bool  $cardOnFile
     * @param  ?string  $merchantAccountID
     * @param  ?bool  $verifyName
     * @phpstan-pure
     */
    public function __construct(string $cardNumber, string $cardCvv, CardExpiration $expiration, CardAddress $billingAddress, ?E2EEToken $e2ee = null, ?string $holderName = null, ?bool $cardOnFile = null, ?string $merchantAccountID = null, ?bool $verifyName = null)
    {
        $this->cardNumber = $cardNumber;
        $this->cardCvv = $cardCvv;
        $this->expiration = $expiration;
        $this->billingAddress = $billingAddress;
        $this->e2ee = $e2ee;
        $this->holderName = $holderName;
        $this->cardOnFile = $cardOnFile;
        $this->merchantAccountID = $merchantAccountID;
        $this->verifyName = $verifyName;
    }
}