<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** LinkAccountTerminalApplication - Describes a request to link an account with a terminal application. */
class LinkAccountTerminalApplication
{
    /**
     * ID of the terminal application.
     *
     * @var string $terminalApplicationID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terminalApplicationID')]
    public string $terminalApplicationID;

    /**
     * @param  string  $terminalApplicationID
     * @phpstan-pure
     */
    public function __construct(string $terminalApplicationID)
    {
        $this->terminalApplicationID = $terminalApplicationID;
    }
}