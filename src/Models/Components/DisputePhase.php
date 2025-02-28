<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** The phase of a dispute within the dispute lifecycle. */
enum DisputePhase: string
{
    case PreDispute = 'pre-dispute';
    case Inquiry = 'inquiry';
    case Chargeback = 'chargeback';
    case Unknown = 'unknown';
}
