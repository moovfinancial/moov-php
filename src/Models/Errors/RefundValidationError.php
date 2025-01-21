<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Errors;


use Moov\OpenAPI\Utils;

class RefundValidationError
{
    /**
     *
     * @var ?string $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $amount = null;

    /**
     * Used for generic errors when invalid request data isn't attributed to a single request field.
     *
     * @var ?string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     * @param  ?string  $amount
     * @param  ?string  $error
     */
    public function __construct(?string $amount = null, ?string $error = null)
    {
        $this->amount = $amount;
        $this->error = $error;
    }

    public function toException(): RefundValidationErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new RefundValidationErrorThrowable($message, (int) $code, $this);
    }
}