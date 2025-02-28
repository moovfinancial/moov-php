<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class UpdateCard
{
    /**
     * Wraps a compact-serialized JSON Web Encryption (JWE) token used for secure transmission of sensitive data (e.g., PCI information) through intermediaries. 
     *
     * This token is encrypted using the public key from /end-to-end-keys and wraps an AES key. For details and examples, refer to our 
     * [GitHub repository](https://github.com/moovfinancial/moov-go/blob/main/examples/e2ee/e2ee_test.go).
     *
     * @var ?E2EETokenUpdate $e2ee
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('e2ee')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\E2EETokenUpdate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?E2EETokenUpdate $e2ee = null;

    /**
     *
     * @var ?UpdateCardAddress $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billingAddress')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\UpdateCardAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateCardAddress $billingAddress = null;

    /**
     *
     * @var ?UpdateCardExpiration $expiration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiration')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\UpdateCardExpiration|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateCardExpiration $expiration = null;

    /**
     *
     * @var ?string $cardCvv
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardCvv')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $cardCvv = null;

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
     *
     * @var ?string $holderName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('holderName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $holderName = null;

    /**
     * @param  ?E2EETokenUpdate  $e2ee
     * @param  ?UpdateCardAddress  $billingAddress
     * @param  ?UpdateCardExpiration  $expiration
     * @param  ?string  $cardCvv
     * @param  ?bool  $cardOnFile
     * @param  ?string  $merchantAccountID
     * @param  ?bool  $verifyName
     * @param  ?string  $holderName
     * @phpstan-pure
     */
    public function __construct(?E2EETokenUpdate $e2ee = null, ?UpdateCardAddress $billingAddress = null, ?UpdateCardExpiration $expiration = null, ?string $cardCvv = null, ?bool $cardOnFile = null, ?string $merchantAccountID = null, ?bool $verifyName = null, ?string $holderName = null)
    {
        $this->e2ee = $e2ee;
        $this->billingAddress = $billingAddress;
        $this->expiration = $expiration;
        $this->cardCvv = $cardCvv;
        $this->cardOnFile = $cardOnFile;
        $this->merchantAccountID = $merchantAccountID;
        $this->verifyName = $verifyName;
        $this->holderName = $holderName;
    }
}