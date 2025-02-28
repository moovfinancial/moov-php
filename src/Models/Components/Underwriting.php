<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** Underwriting - Describes underwriting values (in USD) used for card payment acceptance. */
class Underwriting
{
    /**
     *
     * @var int $averageTransactionSize
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('averageTransactionSize')]
    public int $averageTransactionSize;

    /**
     *
     * @var int $maxTransactionSize
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('maxTransactionSize')]
    public int $maxTransactionSize;

    /**
     *
     * @var int $averageMonthlyTransactionVolume
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('averageMonthlyTransactionVolume')]
    public int $averageMonthlyTransactionVolume;

    /**
     *
     * @var UnderwritingStatus $status
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\UnderwritingStatus')]
    public UnderwritingStatus $status;

    /**
     *
     * @var VolumeByCustomerType $volumeByCustomerType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('volumeByCustomerType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\VolumeByCustomerType')]
    public VolumeByCustomerType $volumeByCustomerType;

    /**
     *
     * @var CardVolumeDistribution $cardVolumeDistribution
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardVolumeDistribution')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardVolumeDistribution')]
    public CardVolumeDistribution $cardVolumeDistribution;

    /**
     *
     * @var FulfillmentDetails $fulfillment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('fulfillment')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\FulfillmentDetails')]
    public FulfillmentDetails $fulfillment;

    /**
     * @param  int  $averageTransactionSize
     * @param  int  $maxTransactionSize
     * @param  int  $averageMonthlyTransactionVolume
     * @param  UnderwritingStatus  $status
     * @param  VolumeByCustomerType  $volumeByCustomerType
     * @param  CardVolumeDistribution  $cardVolumeDistribution
     * @param  FulfillmentDetails  $fulfillment
     * @phpstan-pure
     */
    public function __construct(int $averageTransactionSize, int $maxTransactionSize, int $averageMonthlyTransactionVolume, UnderwritingStatus $status, VolumeByCustomerType $volumeByCustomerType, CardVolumeDistribution $cardVolumeDistribution, FulfillmentDetails $fulfillment)
    {
        $this->averageTransactionSize = $averageTransactionSize;
        $this->maxTransactionSize = $maxTransactionSize;
        $this->averageMonthlyTransactionVolume = $averageMonthlyTransactionVolume;
        $this->status = $status;
        $this->volumeByCustomerType = $volumeByCustomerType;
        $this->cardVolumeDistribution = $cardVolumeDistribution;
        $this->fulfillment = $fulfillment;
    }
}