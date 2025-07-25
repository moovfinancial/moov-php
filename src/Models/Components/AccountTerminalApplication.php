<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** AccountTerminalApplication - Describes link between an account and a terminal application. */
class AccountTerminalApplication
{
    /**
     * ID of the merchant account.
     *
     * @var string $accountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountID')]
    public string $accountID;

    /**
     * ID of the terminal application.
     *
     * @var string $terminalApplicationID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terminalApplicationID')]
    public string $terminalApplicationID;

    /**
     * @param  string  $accountID
     * @param  string  $terminalApplicationID
     * @phpstan-pure
     */
    public function __construct(string $accountID, string $terminalApplicationID)
    {
        $this->accountID = $accountID;
        $this->terminalApplicationID = $terminalApplicationID;
    }
}