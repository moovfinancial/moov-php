<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** The type of event that occurred on the card. */
enum IssuedCardEventType: string
{
    case Authorization = 'authorization';
    case Reversal = 'reversal';
    case AuthorizationAdvice = 'authorization-advice';
    case AuthorizationExpiration = 'authorization-expiration';
    case AuthorizationIncremental = 'authorization-incremental';
    case Clearing = 'clearing';
}
