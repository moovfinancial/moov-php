<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class WebhookDataRefundCreated
{
    /**
     *
     * @var string $accountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountID')]
    public string $accountID;

    /**
     *
     * @var string $transferID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transferID')]
    public string $transferID;

    /**
     *
     * @var string $refundID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refundID')]
    public string $refundID;

    /**
     * @param  string  $accountID
     * @param  string  $transferID
     * @param  string  $refundID
     * @phpstan-pure
     */
    public function __construct(string $accountID, string $transferID, string $refundID)
    {
        $this->accountID = $accountID;
        $this->transferID = $transferID;
        $this->refundID = $refundID;
    }
}