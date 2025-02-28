<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class RefundCardDetails
{
    /**
     *
     * @var RefundCardStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\RefundCardStatus')]
    public RefundCardStatus $status;

    /**
     *
     * @var ?CardTransactionFailureCode $failureCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('failureCode')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardTransactionFailureCode|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CardTransactionFailureCode $failureCode = null;

    /**
     *
     * @var ?\DateTime $initiatedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('initiatedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $initiatedOn = null;

    /**
     *
     * @var ?\DateTime $confirmedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('confirmedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $confirmedOn = null;

    /**
     *
     * @var ?\DateTime $settledOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('settledOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $settledOn = null;

    /**
     *
     * @var ?\DateTime $failedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('failedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $failedOn = null;

    /**
     *
     * @var ?\DateTime $completedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('completedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $completedOn = null;

    /**
     * @param  RefundCardStatus  $status
     * @param  ?CardTransactionFailureCode  $failureCode
     * @param  ?\DateTime  $initiatedOn
     * @param  ?\DateTime  $confirmedOn
     * @param  ?\DateTime  $settledOn
     * @param  ?\DateTime  $failedOn
     * @param  ?\DateTime  $completedOn
     * @phpstan-pure
     */
    public function __construct(RefundCardStatus $status, ?CardTransactionFailureCode $failureCode = null, ?\DateTime $initiatedOn = null, ?\DateTime $confirmedOn = null, ?\DateTime $settledOn = null, ?\DateTime $failedOn = null, ?\DateTime $completedOn = null)
    {
        $this->status = $status;
        $this->failureCode = $failureCode;
        $this->initiatedOn = $initiatedOn;
        $this->confirmedOn = $confirmedOn;
        $this->settledOn = $settledOn;
        $this->failedOn = $failedOn;
        $this->completedOn = $completedOn;
    }
}