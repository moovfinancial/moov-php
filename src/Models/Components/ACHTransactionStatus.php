<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** Status of a transaction within the ACH lifecycle. */
enum ACHTransactionStatus: string
{
    case Initiated = 'initiated';
    case Originated = 'originated';
    case Corrected = 'corrected';
    case Returned = 'returned';
    case Completed = 'completed';
}
