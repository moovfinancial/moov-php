<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class SchedulePaymentMethod
{
    /**
     *
     * @var string $paymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethodID')]
    public string $paymentMethodID;

    /**
     *
     * @var ?AchDetails $achDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('achDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\AchDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AchDetails $achDetails = null;

    /**
     *
     * @var ?CardDetails $cardDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\CardDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CardDetails $cardDetails = null;

    /**
     * @param  string  $paymentMethodID
     * @param  ?AchDetails  $achDetails
     * @param  ?CardDetails  $cardDetails
     */
    public function __construct(string $paymentMethodID, ?AchDetails $achDetails = null, ?CardDetails $cardDetails = null)
    {
        $this->paymentMethodID = $paymentMethodID;
        $this->achDetails = $achDetails;
        $this->cardDetails = $cardDetails;
    }
}