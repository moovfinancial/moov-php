<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Errors;

use Moov\MoovPhp\Utils;
class LinkApplePayError
{
    /**
     * Describes an error that wasn't attributable to a single request field.
     *
     * @var ?string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     * Describes an error within the `token.paymentData` request field.
     *
     * @var ?string $paymentData
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentData')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $paymentData = null;

    /**
     * Describes an error within the `token.paymentMethod` request field.
     *
     * @var ?string $paymentMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethod')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $paymentMethod = null;

    /**
     * Describes an error within the `token.transactionIdentifier` request field.
     *
     * @var ?string $transactionIdentifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transactionIdentifier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $transactionIdentifier = null;

    /**
     * @param  ?string  $error
     * @param  ?string  $paymentData
     * @param  ?string  $paymentMethod
     * @param  ?string  $transactionIdentifier
     * @phpstan-pure
     */
    public function __construct(?string $error = null, ?string $paymentData = null, ?string $paymentMethod = null, ?string $transactionIdentifier = null)
    {
        $this->error = $error;
        $this->paymentData = $paymentData;
        $this->paymentMethod = $paymentMethod;
        $this->transactionIdentifier = $transactionIdentifier;
    }

    public function toException(): LinkApplePayErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new LinkApplePayErrorThrowable($message, (int) $code, $this);
    }
}