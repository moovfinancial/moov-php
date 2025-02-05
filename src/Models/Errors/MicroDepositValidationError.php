<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Errors;

use Moov\OpenAPI\Utils;
class MicroDepositValidationError
{
    /**
     *
     * @var ?string $amounts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amounts')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $amounts = null;

    /**
     * @param  ?string  $amounts
     * @phpstan-pure
     */
    public function __construct(?string $amounts = null)
    {
        $this->amounts = $amounts;
    }

    public function toException(): MicroDepositValidationErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new MicroDepositValidationErrorThrowable($message, (int) $code, $this);
    }
}