<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** CardPaymentSettings - User provided settings to manage card payments. This data is only allowed on a business account. */
class CardPaymentSettings
{
    /**
     * The description that shows up on credit card transactions. This will default to the accounts display name on account creation.
     *
     * @var ?string $statementDescriptor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('statementDescriptor')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $statementDescriptor = null;

    /**
     * @param  ?string  $statementDescriptor
     * @phpstan-pure
     */
    public function __construct(?string $statementDescriptor = null)
    {
        $this->statementDescriptor = $statementDescriptor;
    }
}