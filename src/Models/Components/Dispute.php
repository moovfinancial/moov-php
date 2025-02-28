<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** Dispute - Details of a card transaction dispute. */
class Dispute
{
    /**
     *
     * @var string $disputeID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disputeID')]
    public string $disputeID;

    /**
     *
     * @var string $merchantAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('merchantAccountID')]
    public string $merchantAccountID;

    /**
     *
     * @var Amount $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\Amount')]
    public Amount $amount;

    /**
     * Indicates the card network's category for the dispute. 
     *
     *
     * These codes may differ between card brands. You can find more information on the code from the networkReasonDescription field.
     *
     * @var string $networkReasonCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('networkReasonCode')]
    public string $networkReasonCode;

    /**
     *
     * @var DisputeTransferDetails $transfer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transfer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\DisputeTransferDetails')]
    public DisputeTransferDetails $transfer;

    /**
     *
     * @var \DateTime $respondBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('respondBy')]
    public \DateTime $respondBy;

    /**
     * The status of a particular dispute. 
     *
     *
     * Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/#dispute-statuses) to learn what each status means.
     *
     * @var DisputeStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\DisputeStatus')]
    public DisputeStatus $status;

    /**
     * The phase of a dispute within the dispute lifecycle.
     *
     * @var DisputePhase $phase
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phase')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\DisputePhase')]
    public DisputePhase $phase;

    /**
     *
     * @var \DateTime $createdOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdOn')]
    public \DateTime $createdOn;

    /**
     * Provides detail on the card network's categorization of the dispute.
     *
     * @var ?string $networkReasonDescription
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('networkReasonDescription')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $networkReasonDescription = null;

    /**
     * @param  string  $disputeID
     * @param  string  $merchantAccountID
     * @param  Amount  $amount
     * @param  string  $networkReasonCode
     * @param  DisputeTransferDetails  $transfer
     * @param  \DateTime  $respondBy
     * @param  DisputeStatus  $status
     * @param  DisputePhase  $phase
     * @param  \DateTime  $createdOn
     * @param  ?string  $networkReasonDescription
     * @phpstan-pure
     */
    public function __construct(string $disputeID, string $merchantAccountID, Amount $amount, string $networkReasonCode, DisputeTransferDetails $transfer, \DateTime $respondBy, DisputeStatus $status, DisputePhase $phase, \DateTime $createdOn, ?string $networkReasonDescription = null)
    {
        $this->disputeID = $disputeID;
        $this->merchantAccountID = $merchantAccountID;
        $this->amount = $amount;
        $this->networkReasonCode = $networkReasonCode;
        $this->transfer = $transfer;
        $this->respondBy = $respondBy;
        $this->status = $status;
        $this->phase = $phase;
        $this->createdOn = $createdOn;
        $this->networkReasonDescription = $networkReasonDescription;
    }
}