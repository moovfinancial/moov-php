<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class FulfillmentDetails
{
    /**
     *
     * @var bool $hasPhysicalGoods
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hasPhysicalGoods')]
    public bool $hasPhysicalGoods;

    /**
     *
     * @var bool $isShippingProduct
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('isShippingProduct')]
    public bool $isShippingProduct;

    /**
     *
     * @var int $shipmentDurationDays
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('shipmentDurationDays')]
    public int $shipmentDurationDays;

    /**
     *
     * @var ReturnPolicyType $returnPolicy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('returnPolicy')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\ReturnPolicyType')]
    public ReturnPolicyType $returnPolicy;

    /**
     * @param  bool  $hasPhysicalGoods
     * @param  bool  $isShippingProduct
     * @param  int  $shipmentDurationDays
     * @param  ReturnPolicyType  $returnPolicy
     * @phpstan-pure
     */
    public function __construct(bool $hasPhysicalGoods, bool $isShippingProduct, int $shipmentDurationDays, ReturnPolicyType $returnPolicy)
    {
        $this->hasPhysicalGoods = $hasPhysicalGoods;
        $this->isShippingProduct = $isShippingProduct;
        $this->shipmentDurationDays = $shipmentDurationDays;
        $this->returnPolicy = $returnPolicy;
    }
}