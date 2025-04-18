<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


enum WalletTransactionType: string
{
    case AccountFunding = 'account-funding';
    case AchReversal = 'ach-reversal';
    case AutoSweep = 'auto-sweep';
    case CardPayment = 'card-payment';
    case CardDecline = 'card-decline';
    case CardReversal = 'card-reversal';
    case CashOut = 'cash-out';
    case Dispute = 'dispute';
    case DisputeReversal = 'dispute-reversal';
    case FacilitatorFee = 'facilitator-fee';
    case IssuingRefund = 'issuing-refund';
    case IssuingTransaction = 'issuing-transaction';
    case IssuingTransactionAdjustment = 'issuing-transaction-adjustment';
    case IssuingAuthHold = 'issuing-auth-hold';
    case IssuingAuthRelease = 'issuing-auth-release';
    case IssuingDecline = 'issuing-decline';
    case MoovFee = 'moov-fee';
    case Payment = 'payment';
    case Payout = 'payout';
    case Refund = 'refund';
    case RefundFailure = 'refund-failure';
    case RtpFailure = 'rtp-failure';
    case TopUp = 'top-up';
    case WalletTransfer = 'wallet-transfer';
    case Adjustment = 'adjustment';
}
