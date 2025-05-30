<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class WebhookDataTerminalApplicationCreated
{
    /**
     *
     * @var string $terminalApplicationID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terminalApplicationID')]
    public string $terminalApplicationID;

    /**
     * Status of the terminal application.
     *
     * @var TerminalApplicationStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\TerminalApplicationStatus')]
    public TerminalApplicationStatus $status;

    /**
     * @param  string  $terminalApplicationID
     * @param  TerminalApplicationStatus  $status
     * @phpstan-pure
     */
    public function __construct(string $terminalApplicationID, TerminalApplicationStatus $status)
    {
        $this->terminalApplicationID = $terminalApplicationID;
        $this->status = $status;
    }
}