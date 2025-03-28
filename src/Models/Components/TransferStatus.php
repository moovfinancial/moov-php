<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** Status of a transfer. */
enum TransferStatus: string
{
    case Created = 'created';
    case Pending = 'pending';
    case Completed = 'completed';
    case Failed = 'failed';
    case Reversed = 'reversed';
    case Queued = 'queued';
    case Canceled = 'canceled';
}
