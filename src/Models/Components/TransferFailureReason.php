<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/** Reason for a transfer's failure. */
enum TransferFailureReason: string
{
    case SourcePaymentError = 'source-payment-error';
    case DestinationPaymentError = 'destination-payment-error';
    case WalletInsufficientFunds = 'wallet-insufficient-funds';
    case RejectedHighRisk = 'rejected-high-risk';
    case ProcessingError = 'processing-error';
}
