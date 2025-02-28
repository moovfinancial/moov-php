<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class PartnerPricing
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
     * The integer percentage value of the revenue split for partner.
     *
     * @var int $revenueShare
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revenueShare')]
    public int $revenueShare;

    /**
     * Specifies the card processing pricing model
     *
     * @var CardAcquiringModel $cardAcquiringModel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardAcquiringModel')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CardAcquiringModel')]
    public CardAcquiringModel $cardAcquiringModel;

    /**
     * $billableFees
     *
     * @var array<BillableFee> $billableFees
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billableFees')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\MoovPhp\Models\Components\BillableFee>')]
    public array $billableFees;

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
     * @param  int  $revenueShare
     * @param  CardAcquiringModel  $cardAcquiringModel
     * @param  array<BillableFee>  $billableFees
     * @param  \DateTime  $createdAt
     * @param  ?string  $description
     * @phpstan-pure
     */
    public function __construct(string $planID, string $name, int $revenueShare, CardAcquiringModel $cardAcquiringModel, array $billableFees, \DateTime $createdAt, ?string $description = null)
    {
        $this->planID = $planID;
        $this->name = $name;
        $this->revenueShare = $revenueShare;
        $this->cardAcquiringModel = $cardAcquiringModel;
        $this->billableFees = $billableFees;
        $this->createdAt = $createdAt;
        $this->description = $description;
    }
}