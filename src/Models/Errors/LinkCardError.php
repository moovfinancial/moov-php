<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Errors;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils;
class LinkCardError
{
    /**
     *
     * @var ?string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     *
     * @var ?Components\End2EndEncryptionError $e2ee
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('e2ee')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\End2EndEncryptionError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Components\End2EndEncryptionError $e2ee = null;

    /**
     *
     * @var ?string $cardNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardNumber')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $cardNumber = null;

    /**
     *
     * @var ?string $cardCvv
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardCvv')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $cardCvv = null;

    /**
     *
     * @var ?string $expiration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $expiration = null;

    /**
     *
     * @var ?string $holderName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('holderName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $holderName = null;

    /**
     *
     * @var ?string $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billingAddress')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $billingAddress = null;

    /**
     *
     * @var ?string $cardOnFile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardOnFile')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $cardOnFile = null;

    /**
     *
     * @var ?string $merchantAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('merchantAccountID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $merchantAccountID = null;

    /**
     *
     * @var ?string $verifyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('verifyName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $verifyName = null;

    /**
     * @param  ?string  $error
     * @param  ?Components\End2EndEncryptionError  $e2ee
     * @param  ?string  $cardNumber
     * @param  ?string  $cardCvv
     * @param  ?string  $expiration
     * @param  ?string  $holderName
     * @param  ?string  $billingAddress
     * @param  ?string  $cardOnFile
     * @param  ?string  $merchantAccountID
     * @param  ?string  $verifyName
     * @phpstan-pure
     */
    public function __construct(?string $error = null, ?Components\End2EndEncryptionError $e2ee = null, ?string $cardNumber = null, ?string $cardCvv = null, ?string $expiration = null, ?string $holderName = null, ?string $billingAddress = null, ?string $cardOnFile = null, ?string $merchantAccountID = null, ?string $verifyName = null)
    {
        $this->error = $error;
        $this->e2ee = $e2ee;
        $this->cardNumber = $cardNumber;
        $this->cardCvv = $cardCvv;
        $this->expiration = $expiration;
        $this->holderName = $holderName;
        $this->billingAddress = $billingAddress;
        $this->cardOnFile = $cardOnFile;
        $this->merchantAccountID = $merchantAccountID;
        $this->verifyName = $verifyName;
    }

    public function toException(): LinkCardErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new LinkCardErrorThrowable($message, (int) $code, $this);
    }
}