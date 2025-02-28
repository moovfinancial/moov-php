<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** CardAcquiringRefund - Details of a card refund. */
class CardAcquiringRefund
{
    /**
     * Identifier for the refund.
     *
     * @var string $refundID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refundID')]
    public string $refundID;

    /**
     *
     * @var \DateTime $createdOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdOn')]
    public \DateTime $createdOn;

    /**
     *
     * @var \DateTime $updatedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedOn')]
    public \DateTime $updatedOn;

    /**
     *
     * @var RefundStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\RefundStatus')]
    public RefundStatus $status;

    /**
     *
     * @var Amount $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\Amount')]
    public Amount $amount;

    /**
     *
     * @var ?RefundCardDetails $cardDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\RefundCardDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?RefundCardDetails $cardDetails = null;

    /**
     * @param  string  $refundID
     * @param  \DateTime  $createdOn
     * @param  \DateTime  $updatedOn
     * @param  RefundStatus  $status
     * @param  Amount  $amount
     * @param  ?RefundCardDetails  $cardDetails
     * @phpstan-pure
     */
    public function __construct(string $refundID, \DateTime $createdOn, \DateTime $updatedOn, RefundStatus $status, Amount $amount, ?RefundCardDetails $cardDetails = null)
    {
        $this->refundID = $refundID;
        $this->createdOn = $createdOn;
        $this->updatedOn = $updatedOn;
        $this->status = $status;
        $this->amount = $amount;
        $this->cardDetails = $cardDetails;
    }
}