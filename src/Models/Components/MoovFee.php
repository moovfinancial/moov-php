<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** MoovFee - Moov fee charged to an account involved in a transfer. */
class MoovFee
{
    /**
     * ID of the account that fees were charged to.
     *
     * @var string $accountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountID')]
    public string $accountID;

    /**
     * Indicates whether the account charged was the partner, source, or destination of the transfer.
     *
     * @var TransferParty $transferParty
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transferParty')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\TransferParty')]
    public TransferParty $transferParty;

    /**
     * The total amount of fees charged to the account.
     *
     * @var AmountDecimal $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('totalAmount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\AmountDecimal')]
    public AmountDecimal $totalAmount;

    /**
     * List of fee IDs that sum to the totalAmount.
     *
     * @var array<string> $feeIDs
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feeIDs')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $feeIDs;

    /**
     * @param  string  $accountID
     * @param  TransferParty  $transferParty
     * @param  AmountDecimal  $totalAmount
     * @param  array<string>  $feeIDs
     * @phpstan-pure
     */
    public function __construct(string $accountID, TransferParty $transferParty, AmountDecimal $totalAmount, array $feeIDs)
    {
        $this->accountID = $accountID;
        $this->transferParty = $transferParty;
        $this->totalAmount = $totalAmount;
        $this->feeIDs = $feeIDs;
    }
}