<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class ScheduleListResponse
{
    /**
     *
     * @var string $destinationAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('destinationAccountID')]
    public string $destinationAccountID;

    /**
     * The operating mode for an account.
     *
     * @var Mode $mode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mode')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\Mode')]
    public Mode $mode;

    /**
     *
     * @var string $ownerAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ownerAccountID')]
    public string $ownerAccountID;

    /**
     *
     * @var string $partnerAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('partnerAccountID')]
    public string $partnerAccountID;

    /**
     *
     * @var string $scheduleID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scheduleID')]
    public string $scheduleID;

    /**
     *
     * @var string $sourceAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sourceAccountID')]
    public string $sourceAccountID;

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
     * Simple description to place on the transfer.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * $occurrences
     *
     * @var ?array<OccurrencesResponse> $occurrences
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('occurrences')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\MoovPhp\Models\Components\OccurrencesResponse>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $occurrences = null;

    /**
     * Defines configuration for recurring transfers.
     *
     * @var ?Recur $recur
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recur')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\Recur|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Recur $recur = null;

    /**
     *
     * @var ?\DateTime $disabledOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disabledOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $disabledOn = null;

    /**
     *
     * @var ?PartialScheduleAccount $sourceAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sourceAccount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PartialScheduleAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PartialScheduleAccount $sourceAccount = null;

    /**
     *
     * @var ?PartialScheduleAccount $destinationAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('destinationAccount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PartialScheduleAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PartialScheduleAccount $destinationAccount = null;

    /**
     *
     * @var ?PartialScheduleAccount $partnerAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('partnerAccount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\PartialScheduleAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PartialScheduleAccount $partnerAccount = null;

    /**
     * @param  string  $destinationAccountID
     * @param  Mode  $mode
     * @param  string  $ownerAccountID
     * @param  string  $partnerAccountID
     * @param  string  $scheduleID
     * @param  string  $sourceAccountID
     * @param  \DateTime  $createdOn
     * @param  \DateTime  $updatedOn
     * @param  ?string  $description
     * @param  ?array<OccurrencesResponse>  $occurrences
     * @param  ?Recur  $recur
     * @param  ?\DateTime  $disabledOn
     * @param  ?PartialScheduleAccount  $sourceAccount
     * @param  ?PartialScheduleAccount  $destinationAccount
     * @param  ?PartialScheduleAccount  $partnerAccount
     * @phpstan-pure
     */
    public function __construct(string $destinationAccountID, Mode $mode, string $ownerAccountID, string $partnerAccountID, string $scheduleID, string $sourceAccountID, \DateTime $createdOn, \DateTime $updatedOn, ?string $description = null, ?array $occurrences = null, ?Recur $recur = null, ?\DateTime $disabledOn = null, ?PartialScheduleAccount $sourceAccount = null, ?PartialScheduleAccount $destinationAccount = null, ?PartialScheduleAccount $partnerAccount = null)
    {
        $this->destinationAccountID = $destinationAccountID;
        $this->mode = $mode;
        $this->ownerAccountID = $ownerAccountID;
        $this->partnerAccountID = $partnerAccountID;
        $this->scheduleID = $scheduleID;
        $this->sourceAccountID = $sourceAccountID;
        $this->createdOn = $createdOn;
        $this->updatedOn = $updatedOn;
        $this->description = $description;
        $this->occurrences = $occurrences;
        $this->recur = $recur;
        $this->disabledOn = $disabledOn;
        $this->sourceAccount = $sourceAccount;
        $this->destinationAccount = $destinationAccount;
        $this->partnerAccount = $partnerAccount;
    }
}