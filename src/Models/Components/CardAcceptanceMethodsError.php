<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class CardAcceptanceMethodsError
{
    /**
     *
     * @var ?string $inPersonPercentage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('inPersonPercentage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $inPersonPercentage = null;

    /**
     *
     * @var ?string $mailOrPhonePercentage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mailOrPhonePercentage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $mailOrPhonePercentage = null;

    /**
     *
     * @var ?string $onlinePercentage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('onlinePercentage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $onlinePercentage = null;

    /**
     * @param  ?string  $inPersonPercentage
     * @param  ?string  $mailOrPhonePercentage
     * @param  ?string  $onlinePercentage
     * @phpstan-pure
     */
    public function __construct(?string $inPersonPercentage = null, ?string $mailOrPhonePercentage = null, ?string $onlinePercentage = null)
    {
        $this->inPersonPercentage = $inPersonPercentage;
        $this->mailOrPhonePercentage = $mailOrPhonePercentage;
        $this->onlinePercentage = $onlinePercentage;
    }
}