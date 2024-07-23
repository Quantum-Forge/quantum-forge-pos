<?php

namespace App\Interface;

enum PaymentMethodEnum: string
{
    case Cash = 'Cash';
    case CreditCard = 'Credit Card';
    case Debit = 'Debit';
    case QRIS = 'QRIS';
    case Other = 'Other';

    public function displayName(): string
    {
        return $this->value;
    }
}

class PaymentMethod
{
    public static function getAllPaymentMethod(): array
    {
        return [
            PaymentMethodEnum::Cash,
            PaymentMethodEnum::CreditCard,
            PaymentMethodEnum::Debit,
            PaymentMethodEnum::QRIS,
            PaymentMethodEnum::Other,
        ];
    }

    public static function getAllPaymentMethodDisplayNames(): array
    {
        return array_map(fn($method) => $method->displayName(), self::getAllPaymentMethod());
    }
}
