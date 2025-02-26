<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class FeePlanAgreement
{
    /**
     *
     * @var string $agreementID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('agreementID')]
    public string $agreementID;

    /**
     *
     * @var string $planID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('planID')]
    public string $planID;

    /**
     * The name of the agreement.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var \DateTime $acceptedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('acceptedOn')]
    public \DateTime $acceptedOn;

    /**
     *
     * @var FeePlanAgreementStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\FeePlanAgreementStatus')]
    public FeePlanAgreementStatus $status;

    /**
     * Specifies the card processing pricing model
     *
     * @var CardAcquiringModel $cardAcquiringModel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cardAcquiringModel')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\CardAcquiringModel')]
    public CardAcquiringModel $cardAcquiringModel;

    /**
     * $billableFees
     *
     * @var array<BillableFee> $billableFees
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billableFees')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\OpenAPI\Models\Components\BillableFee>')]
    public array $billableFees;

    /**
     *
     * @var ?string $accountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountID = null;

    /**
     * The description of the agreement.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * @param  string  $agreementID
     * @param  string  $planID
     * @param  string  $name
     * @param  \DateTime  $acceptedOn
     * @param  FeePlanAgreementStatus  $status
     * @param  CardAcquiringModel  $cardAcquiringModel
     * @param  array<BillableFee>  $billableFees
     * @param  ?string  $accountID
     * @param  ?string  $description
     * @phpstan-pure
     */
    public function __construct(string $agreementID, string $planID, string $name, \DateTime $acceptedOn, FeePlanAgreementStatus $status, CardAcquiringModel $cardAcquiringModel, array $billableFees, ?string $accountID = null, ?string $description = null)
    {
        $this->agreementID = $agreementID;
        $this->planID = $planID;
        $this->name = $name;
        $this->acceptedOn = $acceptedOn;
        $this->status = $status;
        $this->cardAcquiringModel = $cardAcquiringModel;
        $this->billableFees = $billableFees;
        $this->accountID = $accountID;
        $this->description = $description;
    }
}