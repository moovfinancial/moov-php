<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class UpsertUnderwriting
{
    /**
     *
     * @var ?GeographicReach $geographicReach
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('geographicReach')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\GeographicReach|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?GeographicReach $geographicReach = null;

    /**
     *
     * @var ?BusinessPresence $businessPresence
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('businessPresence')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\BusinessPresence|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BusinessPresence $businessPresence = null;

    /**
     *
     * @var ?PendingLitigation $pendingLitigation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pendingLitigation')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PendingLitigation|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PendingLitigation $pendingLitigation = null;

    /**
     *
     * @var ?VolumeShareByCustomerType $volumeShareByCustomerType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('volumeShareByCustomerType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\VolumeShareByCustomerType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?VolumeShareByCustomerType $volumeShareByCustomerType = null;

    /**
     *
     * @var ?CollectFunds $collectFunds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('collectFunds')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CollectFunds|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CollectFunds $collectFunds = null;

    /**
     *
     * @var ?MoneyTransfer $moneyTransfer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('moneyTransfer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\MoneyTransfer|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MoneyTransfer $moneyTransfer = null;

    /**
     *
     * @var ?SendFunds $sendFunds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sendFunds')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\SendFunds|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SendFunds $sendFunds = null;

    /**
     *
     * @var ?SubmissionIntent $submissionIntent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('submissionIntent')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\SubmissionIntent|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SubmissionIntent $submissionIntent = null;

    /**
     * @param  ?GeographicReach  $geographicReach
     * @param  ?BusinessPresence  $businessPresence
     * @param  ?PendingLitigation  $pendingLitigation
     * @param  ?VolumeShareByCustomerType  $volumeShareByCustomerType
     * @param  ?CollectFunds  $collectFunds
     * @param  ?MoneyTransfer  $moneyTransfer
     * @param  ?SendFunds  $sendFunds
     * @param  ?SubmissionIntent  $submissionIntent
     * @phpstan-pure
     */
    public function __construct(?GeographicReach $geographicReach = null, ?BusinessPresence $businessPresence = null, ?PendingLitigation $pendingLitigation = null, ?VolumeShareByCustomerType $volumeShareByCustomerType = null, ?CollectFunds $collectFunds = null, ?MoneyTransfer $moneyTransfer = null, ?SendFunds $sendFunds = null, ?SubmissionIntent $submissionIntent = null)
    {
        $this->geographicReach = $geographicReach;
        $this->businessPresence = $businessPresence;
        $this->pendingLitigation = $pendingLitigation;
        $this->volumeShareByCustomerType = $volumeShareByCustomerType;
        $this->collectFunds = $collectFunds;
        $this->moneyTransfer = $moneyTransfer;
        $this->sendFunds = $sendFunds;
        $this->submissionIntent = $submissionIntent;
    }
}