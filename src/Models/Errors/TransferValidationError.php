<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Errors;

use Moov\MoovPhp\Utils;
class TransferValidationError
{
    /**
     *
     * @var ?string $transfer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Transfer')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $transfer = null;

    /**
     *
     * @var ?string $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $amount = null;

    /**
     *
     * @var ?string $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $source = null;

    /**
     *
     * @var ?string $sourcePaymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sourcePaymentMethodID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sourcePaymentMethodID = null;

    /**
     *
     * @var ?string $destinationPaymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('destinationPaymentMethodID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $destinationPaymentMethodID = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?string $facilitatorFeeTotalDecimal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('FacilitatorFee.TotalDecimal')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $facilitatorFeeTotalDecimal = null;

    /**
     *
     * @var ?string $facilitatorFeeMarkupDecimal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('FacilitatorFee.MarkupDecimal')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $facilitatorFeeMarkupDecimal = null;

    /**
     *
     * @var ?string $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $metadata = null;

    /**
     * Used for generic errors when invalid request data isn't attributed to a single request field.
     *
     * @var ?string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     * @param  ?string  $transfer
     * @param  ?string  $amount
     * @param  ?string  $source
     * @param  ?string  $sourcePaymentMethodID
     * @param  ?string  $destinationPaymentMethodID
     * @param  ?string  $description
     * @param  ?string  $facilitatorFeeTotalDecimal
     * @param  ?string  $facilitatorFeeMarkupDecimal
     * @param  ?string  $metadata
     * @param  ?string  $error
     * @phpstan-pure
     */
    public function __construct(?string $transfer = null, ?string $amount = null, ?string $source = null, ?string $sourcePaymentMethodID = null, ?string $destinationPaymentMethodID = null, ?string $description = null, ?string $facilitatorFeeTotalDecimal = null, ?string $facilitatorFeeMarkupDecimal = null, ?string $metadata = null, ?string $error = null)
    {
        $this->transfer = $transfer;
        $this->amount = $amount;
        $this->source = $source;
        $this->sourcePaymentMethodID = $sourcePaymentMethodID;
        $this->destinationPaymentMethodID = $destinationPaymentMethodID;
        $this->description = $description;
        $this->facilitatorFeeTotalDecimal = $facilitatorFeeTotalDecimal;
        $this->facilitatorFeeMarkupDecimal = $facilitatorFeeMarkupDecimal;
        $this->metadata = $metadata;
        $this->error = $error;
    }

    public function toException(): TransferValidationErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new TransferValidationErrorThrowable($message, (int) $code, $this);
    }
}