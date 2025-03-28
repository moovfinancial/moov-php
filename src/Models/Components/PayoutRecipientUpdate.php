<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/**
 * PayoutRecipientUpdate - Specify the intended recipient of the payout.
 *
 *
 * This information will be used to authenticate the end user when they follow the payment link.
 */
class PayoutRecipientUpdate
{
    /**
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * @param  ?string  $email
     * @phpstan-pure
     */
    public function __construct(?string $email = null)
    {
        $this->email = $email;
    }
}