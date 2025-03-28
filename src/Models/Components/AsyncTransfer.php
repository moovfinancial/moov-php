<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class AsyncTransfer
{
    /**
     *
     * @var string $transferID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transferID')]
    public string $transferID;

    /**
     *
     * @var \DateTime $createdOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdOn')]
    public \DateTime $createdOn;

    /**
     * @param  string  $transferID
     * @param  \DateTime  $createdOn
     * @phpstan-pure
     */
    public function __construct(string $transferID, \DateTime $createdOn)
    {
        $this->transferID = $transferID;
        $this->createdOn = $createdOn;
    }
}