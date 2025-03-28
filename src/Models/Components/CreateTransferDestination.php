<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** CreateTransferDestination - The final stage of a transfer and the ultimate recipient of the funds. */
class CreateTransferDestination
{
    /**
     *
     * @var string $paymentMethodID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentMethodID')]
    public string $paymentMethodID;

    /**
     *
     * @var ?CreateTransferDestinationCard $cardDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CreateTransferDestinationCard|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateTransferDestinationCard $cardDetails = null;

    /**
     *
     * @var ?CreateTransferDestinationACH $achDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('achDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CreateTransferDestinationACH|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateTransferDestinationACH $achDetails = null;

    /**
     * @param  string  $paymentMethodID
     * @param  ?CreateTransferDestinationCard  $cardDetails
     * @param  ?CreateTransferDestinationACH  $achDetails
     * @phpstan-pure
     */
    public function __construct(string $paymentMethodID, ?CreateTransferDestinationCard $cardDetails = null, ?CreateTransferDestinationACH $achDetails = null)
    {
        $this->paymentMethodID = $paymentMethodID;
        $this->cardDetails = $cardDetails;
        $this->achDetails = $achDetails;
    }
}