<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class FeePlan
{
    /**
     *
     * @var string $planID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('planID')]
    public string $planID;

    /**
     * The name of the fee plan.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Specifies the card processing pricing model
     *
     * @var CardAcquiringModel $cardAcquiringModel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardAcquiringModel')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardAcquiringModel')]
    public CardAcquiringModel $cardAcquiringModel;

    /**
     * Additional usage-based fees for this plan.
     *
     * @var array<BillableFee> $billableFees
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billableFees')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\MoovPhp\Models\Components\BillableFee>')]
    public array $billableFees;

    /**
     * The minimum spending amount that must be met in the billing period. If actual usage is below the minimum amount, account is charged the difference.
     *
     * @var MinimumCommitment $minimumCommitment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('minimumCommitment')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\MinimumCommitment')]
    public MinimumCommitment $minimumCommitment;

    /**
     * Fixed recurring amount paid in the billing period regardless of usage.
     *
     * @var MonthlyPlatformFee $monthlyPlatformFee
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('monthlyPlatformFee')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\MonthlyPlatformFee')]
    public MonthlyPlatformFee $monthlyPlatformFee;

    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public \DateTime $createdAt;

    /**
     * A description of the fee plan.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * @param  string  $planID
     * @param  string  $name
     * @param  CardAcquiringModel  $cardAcquiringModel
     * @param  array<BillableFee>  $billableFees
     * @param  MinimumCommitment  $minimumCommitment
     * @param  MonthlyPlatformFee  $monthlyPlatformFee
     * @param  \DateTime  $createdAt
     * @param  ?string  $description
     * @phpstan-pure
     */
    public function __construct(string $planID, string $name, CardAcquiringModel $cardAcquiringModel, array $billableFees, MinimumCommitment $minimumCommitment, MonthlyPlatformFee $monthlyPlatformFee, \DateTime $createdAt, ?string $description = null)
    {
        $this->planID = $planID;
        $this->name = $name;
        $this->cardAcquiringModel = $cardAcquiringModel;
        $this->billableFees = $billableFees;
        $this->minimumCommitment = $minimumCommitment;
        $this->monthlyPlatformFee = $monthlyPlatformFee;
        $this->createdAt = $createdAt;
        $this->description = $description;
    }
}