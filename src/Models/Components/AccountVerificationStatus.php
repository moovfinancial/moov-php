<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/**
 * Possible states an account verification can be in.
 *
 * @deprecated  enum: This will be removed in a future release, please migrate away from it as soon as possible.
 */
enum AccountVerificationStatus: string
{
    case Unverified = 'unverified';
    case Pending = 'pending';
    case Resubmit = 'resubmit';
    case Review = 'review';
    case Verified = 'verified';
    case Failed = 'failed';
}
