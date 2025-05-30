<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class WebhookDataCancellationCreated
{
    /**
     *
     * @var string $cancellationID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cancellationID')]
    public string $cancellationID;

    /**
     *
     * @var string $transferID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transferID')]
    public string $transferID;

    /**
     *
     * @var CancellationStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CancellationStatus')]
    public CancellationStatus $status;

    /**
     * @param  string  $cancellationID
     * @param  string  $transferID
     * @param  CancellationStatus  $status
     * @phpstan-pure
     */
    public function __construct(string $cancellationID, string $transferID, CancellationStatus $status)
    {
        $this->cancellationID = $cancellationID;
        $this->transferID = $transferID;
        $this->status = $status;
    }
}