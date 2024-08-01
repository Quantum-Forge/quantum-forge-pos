<?php

namespace App\Interface;

enum PaymentMethodEnum: string
{
    case Cash = 'form.cash';
    case CreditCard = 'form.credit_card';
    case DebitCard = 'form.debit_card';
    case BankTransfer = 'form.bank_transfer';
    case OVO = 'form.e_wallet.ovo';
    case GoPay = 'form.e_wallet.gopay';
    case Dana = 'form.e_wallet.dana';
    case LinkAja = 'form.e_wallet.linkaja';
    case ShopeePay = 'form.e_wallet.shopeepay';
    case QRCode = 'form.qr_code';
    case Cheque = 'form.cheque';

    public function displayName(): string
    {
        return __($this->value);
    }
}

class PaymentMethod
{
    public static function getAllPaymentMethod(): array
    {
        return [
            PaymentMethodEnum::Cash,
            PaymentMethodEnum::CreditCard,
            PaymentMethodEnum::DebitCard,
            PaymentMethodEnum::BankTransfer,
            PaymentMethodEnum::OVO,
            PaymentMethodEnum::GoPay,
            PaymentMethodEnum::Dana,
            PaymentMethodEnum::LinkAja,
            PaymentMethodEnum::ShopeePay,
            PaymentMethodEnum::QRCode,
            PaymentMethodEnum::Cheque,
        ];
    }

    public static function getAllPaymentMethodDisplayNames(): array
    {
        return array_map(fn($method) => $method->displayName(), self::getAllPaymentMethod());
    }
}
