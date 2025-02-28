<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** AsyncCreatedRefund - Asynchronous refund response */
class AsyncCreatedRefund
{
    /**
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
     * @var Amount $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\Amount')]
    public Amount $amount;

    /**
     * @param  string  $refundID
     * @param  \DateTime  $createdOn
     * @param  Amount  $amount
     * @phpstan-pure
     */
    public function __construct(string $refundID, \DateTime $createdOn, Amount $amount)
    {
        $this->refundID = $refundID;
        $this->createdOn = $createdOn;
        $this->amount = $amount;
    }
}