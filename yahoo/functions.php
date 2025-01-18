<?php



/**
 * Function to calculate compound interest.
 */
function calculateCompoundInterest(float $principal, float $rate, int $time, int $frequency = 1): float
{
    $amount = $principal * pow((1 + ($rate / 100) / $frequency), $frequency * $time);
    return round($amount, 2);
}

/**
 * Function to format currency.
 */
function formatCurrency(float $amount, string $currency = 'USD'): string
{
    return number_format($amount, 2) . " " . strtoupper($currency);
}

/**
 * Function to calculate monthly installments (EMI).
 */
function calculateEMI(float $principal, float $annualRate, int $months): float
{
    $monthlyRate = ($annualRate / 100) / 12;
    $emi = ($principal * $monthlyRate * pow(1 + $monthlyRate, $months)) / (pow(1 + $monthlyRate, $months) - 1);
    return round($emi, 2);
}

/**
 * Function to generate unique invoice number.
 */
function generateInvoiceNumber(string $prefix = 'INV'): string
{
    return $prefix . "-" . date('Ymd') . "-" . rand(1000, 9999);
}

/**
 * Function to calculate tax.
 */
function calculateTax(float $amount, float $rate): float
{
    return round($amount * ($rate / 100), 2);
}

/**
 * Function to calculate discount.
 */
function calculateDiscount(float $amount, float $discountRate): array
{
    $discount = round($amount * ($discountRate / 100), 2);
    $finalPrice = $amount - $discount;
    return [
        'discount' => $discount,
        'finalPrice' => $finalPrice
    ];
}

/**
 * Function to format a date for reporting.
 */
function formatDateForReport(string $date): string
{
    return date('l, d F Y', strtotime($date));
}

/**
 * Function to generate unique transaction ID.
 */
function generateTransactionID(): string
{
    return strtoupper(uniqid('TXN'));
}

/**
 * Function to calculate percentage change.
 */
function calculatePercentageChange(float $oldValue, float $newValue): float
{
    if ($oldValue == 0) {
        return 0;
    }
    return round((($newValue - $oldValue) / $oldValue) * 100, 2);
}

/**
 * Function to split a payment into equal installments.
 */
function splitIntoInstallments(float $amount, int $installments): array
{
    $equalInstallment = round($amount / $installments, 2);
    $installmentsArray = array_fill(0, $installments, $equalInstallment);

    $installmentsArray[$installments - 1] += $amount - array_sum($installmentsArray);
    return $installmentsArray;
}

/**
 * Function to validate IBAN.
 */
function validateIBAN(string $iban): bool
{
    $iban = strtolower(str_replace(' ', '', $iban));
    $checkSum = substr($iban, 0, 4);
    $iban = substr($iban, 4) . $checkSum;
    $iban = strtr($iban, 'abcdefghijklmnopqrstuvwxyz', '12345678901234567890123456');
    return bcmod($iban, '97') == 1;
}






