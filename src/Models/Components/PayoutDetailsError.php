<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class PayoutDetailsError
{
    /**
     *
     * @var ?string $allowedMethods
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allowedMethods')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $allowedMethods = null;

    /**
     *
     * @var ?PayoutRecipientError $recipient
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recipient')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\PayoutRecipientError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PayoutRecipientError $recipient = null;

    /**
     * @param  ?string  $allowedMethods
     * @param  ?PayoutRecipientError  $recipient
     */
    public function __construct(?string $allowedMethods = null, ?PayoutRecipientError $recipient = null)
    {
        $this->allowedMethods = $allowedMethods;
        $this->recipient = $recipient;
    }
}