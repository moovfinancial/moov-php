<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** Transfer - Details of a Transfer. */
class Transfer
{
    /**
     *
     * @var string $transferID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transferID')]
    public string $transferID;

    /**
     *
     * @var \DateTime $createdOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdOn')]
    public \DateTime $createdOn;

    /**
     * Status of a transfer.
     *
     * @var TransferStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\TransferStatus')]
    public TransferStatus $status;

    /**
     *
     * @var Amount $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\Amount')]
    public Amount $amount;

    /**
     *
     * @var ?TransferSource $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\TransferSource|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TransferSource $source = null;

    /**
     *
     * @var ?TransferDestination $destination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('destination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\TransferDestination|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TransferDestination $destination = null;

    /**
     *
     * @var ?\DateTime $completedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('completedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $completedOn = null;

    /**
     * Reason for a transfer's failure.
     *
     * @var ?TransferFailureReason $failureReason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('failureReason')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\TransferFailureReason|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TransferFailureReason $failureReason = null;

    /**
     * An optional description of the transfer for your own internal use.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * Free-form key-value pair list. Useful for storing information that is not captured elsewhere.
     *
     * @var ?array<string, string> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * Total or markup fee.
     *
     * @var ?FacilitatorFee $facilitatorFee
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('facilitatorFee')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\FacilitatorFee|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?FacilitatorFee $facilitatorFee = null;

    /**
     * Fees charged to your platform account for transfers.
     *
     * @var ?int $moovFee
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('moovFee')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $moovFee = null;

    /**
     * Same as `moovFee`, but a decimal-formatted numerical string that represents up to 9 decimal place precision.
     *
     * @var ?int $moovFeeDecimal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('moovFeeDecimal')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $moovFeeDecimal = null;

    /**
     * Processing and pass-through costs that add up to the moovFee.
     *
     * @var ?MoovFeeDetails $moovFeeDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('moovFeeDetails')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\MoovFeeDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MoovFeeDetails $moovFeeDetails = null;

    /**
     *
     * @var ?string $groupID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('groupID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $groupID = null;

    /**
     *
     * @var ?Amount $refundedAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refundedAmount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\Amount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Amount $refundedAmount = null;

    /**
     * $refunds
     *
     * @var ?array<CardAcquiringRefund> $refunds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refunds')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\OpenAPI\Models\Components\CardAcquiringRefund>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $refunds = null;

    /**
     *
     * @var ?Amount $disputedAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disputedAmount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\Amount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Amount $disputedAmount = null;

    /**
     * $disputes
     *
     * @var ?array<CardAcquiringDispute> $disputes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disputes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\OpenAPI\Models\Components\CardAcquiringDispute>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $disputes = null;

    /**
     *
     * @var ?string $sweepID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sweepID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sweepID = null;

    /**
     *
     * @var ?string $scheduleID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scheduleID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $scheduleID = null;

    /**
     *
     * @var ?string $occurrenceID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('occurrenceID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $occurrenceID = null;

    /**
     * @param  string  $transferID
     * @param  \DateTime  $createdOn
     * @param  TransferStatus  $status
     * @param  Amount  $amount
     * @param  ?TransferSource  $source
     * @param  ?TransferDestination  $destination
     * @param  ?\DateTime  $completedOn
     * @param  ?TransferFailureReason  $failureReason
     * @param  ?string  $description
     * @param  ?array<string, string>  $metadata
     * @param  ?FacilitatorFee  $facilitatorFee
     * @param  ?int  $moovFee
     * @param  ?int  $moovFeeDecimal
     * @param  ?MoovFeeDetails  $moovFeeDetails
     * @param  ?string  $groupID
     * @param  ?Amount  $refundedAmount
     * @param  ?array<CardAcquiringRefund>  $refunds
     * @param  ?Amount  $disputedAmount
     * @param  ?array<CardAcquiringDispute>  $disputes
     * @param  ?string  $sweepID
     * @param  ?string  $scheduleID
     * @param  ?string  $occurrenceID
     * @phpstan-pure
     */
    public function __construct(string $transferID, \DateTime $createdOn, TransferStatus $status, Amount $amount, ?TransferSource $source = null, ?TransferDestination $destination = null, ?\DateTime $completedOn = null, ?TransferFailureReason $failureReason = null, ?string $description = null, ?array $metadata = null, ?FacilitatorFee $facilitatorFee = null, ?int $moovFee = null, ?int $moovFeeDecimal = null, ?MoovFeeDetails $moovFeeDetails = null, ?string $groupID = null, ?Amount $refundedAmount = null, ?array $refunds = null, ?Amount $disputedAmount = null, ?array $disputes = null, ?string $sweepID = null, ?string $scheduleID = null, ?string $occurrenceID = null)
    {
        $this->transferID = $transferID;
        $this->createdOn = $createdOn;
        $this->status = $status;
        $this->amount = $amount;
        $this->source = $source;
        $this->destination = $destination;
        $this->completedOn = $completedOn;
        $this->failureReason = $failureReason;
        $this->description = $description;
        $this->metadata = $metadata;
        $this->facilitatorFee = $facilitatorFee;
        $this->moovFee = $moovFee;
        $this->moovFeeDecimal = $moovFeeDecimal;
        $this->moovFeeDetails = $moovFeeDetails;
        $this->groupID = $groupID;
        $this->refundedAmount = $refundedAmount;
        $this->refunds = $refunds;
        $this->disputedAmount = $disputedAmount;
        $this->disputes = $disputes;
        $this->sweepID = $sweepID;
        $this->scheduleID = $scheduleID;
        $this->occurrenceID = $occurrenceID;
    }
}