<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class CreateTransfer
{
    /**
     * Where funds for a transfer originate. For the source, you must include either a `paymentMethodID` or a `transferID`.
     *
     * @var CreateTransferSource $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CreateTransferSource')]
    public CreateTransferSource $source;

    /**
     * The final stage of a transfer and the ultimate recipient of the funds.
     *
     * @var CreateTransferDestination $destination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('destination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CreateTransferDestination')]
    public CreateTransferDestination $destination;

    /**
     *
     * @var Amount $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\Amount')]
    public Amount $amount;

    /**
     * Total or markup fee.
     *
     * @var ?FacilitatorFee $facilitatorFee
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('facilitatorFee')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\FacilitatorFee|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?FacilitatorFee $facilitatorFee = null;

    /**
     * An optional description of the transfer that is used on receipts and for your own internal use.
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
     * Optional sales tax amount. `transfer.amount.value` should be inclusive of any sales tax and represents the total amount charged.
     *
     * @var ?Amount $salesTaxAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('salesTaxAmount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\Amount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Amount $salesTaxAmount = null;

    /**
     * Optional alias from a foreign/external system which can be used to reference this resource.
     *
     * @var ?string $foreignID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('foreignID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $foreignID = null;

    /**
     * @param  CreateTransferSource  $source
     * @param  CreateTransferDestination  $destination
     * @param  Amount  $amount
     * @param  ?FacilitatorFee  $facilitatorFee
     * @param  ?string  $description
     * @param  ?array<string, string>  $metadata
     * @param  ?Amount  $salesTaxAmount
     * @param  ?string  $foreignID
     * @phpstan-pure
     */
    public function __construct(CreateTransferSource $source, CreateTransferDestination $destination, Amount $amount, ?FacilitatorFee $facilitatorFee = null, ?string $description = null, ?array $metadata = null, ?Amount $salesTaxAmount = null, ?string $foreignID = null)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->amount = $amount;
        $this->facilitatorFee = $facilitatorFee;
        $this->description = $description;
        $this->metadata = $metadata;
        $this->salesTaxAmount = $salesTaxAmount;
        $this->foreignID = $foreignID;
    }
}