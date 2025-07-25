<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** The type of event that occurred. */
enum WebhookEventType: string
{
    case Wildcard = '*';
    case AccountCreated = 'account.created';
    case AccountUpdated = 'account.updated';
    case AccountDeleted = 'account.deleted';
    case BalanceUpdated = 'balance.updated';
    case BankAccountCreated = 'bankAccount.created';
    case BankAccountUpdated = 'bankAccount.updated';
    case BankAccountDeleted = 'bankAccount.deleted';
    case CancellationCreated = 'cancellation.created';
    case CancellationUpdated = 'cancellation.updated';
    case CardAutoUpdated = 'card.autoUpdated';
    case CapabilityRequested = 'capability.requested';
    case CapabilityUpdated = 'capability.updated';
    case DisputeCreated = 'dispute.created';
    case DisputeUpdated = 'dispute.updated';
    case NetworkIDUpdated = 'networkID.updated';
    case PaymentMethodEnabled = 'paymentMethod.enabled';
    case PaymentMethodDisabled = 'paymentMethod.disabled';
    case RefundCreated = 'refund.created';
    case RefundUpdated = 'refund.updated';
    case RepresentativeCreated = 'representative.created';
    case RepresentativeUpdated = 'representative.updated';
    case RepresentativeDeleted = 'representative.deleted';
    case SweepCreated = 'sweep.created';
    case SweepUpdated = 'sweep.updated';
    case TerminalApplicationCreated = 'terminalApplication.created';
    case TerminalApplicationUpdated = 'terminalApplication.updated';
    case TransferCreated = 'transfer.created';
    case TransferUpdated = 'transfer.updated';
    case WalletTransactionUpdated = 'walletTransaction.updated';
}
