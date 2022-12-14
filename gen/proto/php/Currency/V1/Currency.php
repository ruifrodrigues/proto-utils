<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: currency/v1/currency.proto

namespace Currency\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>currency.v1.Currency</code>
 */
class Currency
{
    /**
     * Generated from protobuf enum <code>CURRENCY_UNSPECIFIED = 0;</code>
     */
    const CURRENCY_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>CURRENCY_EUR = 1;</code>
     */
    const CURRENCY_EUR = 1;
    /**
     * Generated from protobuf enum <code>CURRENCY_USD = 2;</code>
     */
    const CURRENCY_USD = 2;
    /**
     * Generated from protobuf enum <code>CURRENCY_GBP = 3;</code>
     */
    const CURRENCY_GBP = 3;
    /**
     * Generated from protobuf enum <code>CURRENCY_SEK = 4;</code>
     */
    const CURRENCY_SEK = 4;
    /**
     * Generated from protobuf enum <code>CURRENCY_NOK = 5;</code>
     */
    const CURRENCY_NOK = 5;
    /**
     * Generated from protobuf enum <code>CURRENCY_CNY = 6;</code>
     */
    const CURRENCY_CNY = 6;
    /**
     * Generated from protobuf enum <code>CURRENCY_YEN = 7;</code>
     */
    const CURRENCY_YEN = 7;
    /**
     * Generated from protobuf enum <code>CURRENCY_JPY = 8;</code>
     */
    const CURRENCY_JPY = 8;
    /**
     * Generated from protobuf enum <code>CURRENCY_KRW = 9;</code>
     */
    const CURRENCY_KRW = 9;
    /**
     * Generated from protobuf enum <code>CURRENCY_ILS = 10;</code>
     */
    const CURRENCY_ILS = 10;
    /**
     * Generated from protobuf enum <code>CURRENCY_ZAR = 11;</code>
     */
    const CURRENCY_ZAR = 11;
    /**
     * Generated from protobuf enum <code>CURRENCY_CHF = 12;</code>
     */
    const CURRENCY_CHF = 12;
    /**
     * Generated from protobuf enum <code>CURRENCY_INR = 13;</code>
     */
    const CURRENCY_INR = 13;
    /**
     * Generated from protobuf enum <code>CURRENCY_MYR = 14;</code>
     */
    const CURRENCY_MYR = 14;
    /**
     * Generated from protobuf enum <code>CURRENCY_DKK = 15;</code>
     */
    const CURRENCY_DKK = 15;
    /**
     * Generated from protobuf enum <code>CURRENCY_AED = 16;</code>
     */
    const CURRENCY_AED = 16;
    /**
     * Generated from protobuf enum <code>CURRENCY_SGD = 17;</code>
     */
    const CURRENCY_SGD = 17;
    /**
     * Generated from protobuf enum <code>CURRENCY_KES = 18;</code>
     */
    const CURRENCY_KES = 18;
    /**
     * Generated from protobuf enum <code>CURRENCY_TRY = 19;</code>
     */
    const CURRENCY_TRY = 19;
    /**
     * Generated from protobuf enum <code>CURRENCY_IDR = 20;</code>
     */
    const CURRENCY_IDR = 20;
    /**
     * Generated from protobuf enum <code>CURRENCY_PLN = 21;</code>
     */
    const CURRENCY_PLN = 21;
    /**
     * Generated from protobuf enum <code>CURRENCY_ISK = 22;</code>
     */
    const CURRENCY_ISK = 22;
    /**
     * Generated from protobuf enum <code>CURRENCY_HKD = 23;</code>
     */
    const CURRENCY_HKD = 23;
    /**
     * Generated from protobuf enum <code>CURRENCY_PEN = 24;</code>
     */
    const CURRENCY_PEN = 24;
    /**
     * Generated from protobuf enum <code>CURRENCY_BRL = 25;</code>
     */
    const CURRENCY_BRL = 25;
    /**
     * Generated from protobuf enum <code>CURRENCY_RUB = 26;</code>
     */
    const CURRENCY_RUB = 26;
    /**
     * Generated from protobuf enum <code>CURRENCY_CAD = 27;</code>
     */
    const CURRENCY_CAD = 27;
    /**
     * Generated from protobuf enum <code>CURRENCY_OMR = 28;</code>
     */
    const CURRENCY_OMR = 28;
    /**
     * Generated from protobuf enum <code>CURRENCY_THB = 29;</code>
     */
    const CURRENCY_THB = 29;
    /**
     * Generated from protobuf enum <code>CURRENCY_PHP = 30;</code>
     */
    const CURRENCY_PHP = 30;
    /**
     * Generated from protobuf enum <code>CURRENCY_COP = 31;</code>
     */
    const CURRENCY_COP = 31;
    /**
     * Generated from protobuf enum <code>CURRENCY_XOF = 32;</code>
     */
    const CURRENCY_XOF = 32;
    /**
     * Generated from protobuf enum <code>CURRENCY_ARS = 33;</code>
     */
    const CURRENCY_ARS = 33;
    /**
     * Generated from protobuf enum <code>CURRENCY_NZD = 34;</code>
     */
    const CURRENCY_NZD = 34;
    /**
     * Generated from protobuf enum <code>CURRENCY_AUD = 35;</code>
     */
    const CURRENCY_AUD = 35;
    /**
     * Generated from protobuf enum <code>CURRENCY_TWD = 36;</code>
     */
    const CURRENCY_TWD = 36;

    private static $valueToName = [
        self::CURRENCY_UNSPECIFIED => 'CURRENCY_UNSPECIFIED',
        self::CURRENCY_EUR => 'CURRENCY_EUR',
        self::CURRENCY_USD => 'CURRENCY_USD',
        self::CURRENCY_GBP => 'CURRENCY_GBP',
        self::CURRENCY_SEK => 'CURRENCY_SEK',
        self::CURRENCY_NOK => 'CURRENCY_NOK',
        self::CURRENCY_CNY => 'CURRENCY_CNY',
        self::CURRENCY_YEN => 'CURRENCY_YEN',
        self::CURRENCY_JPY => 'CURRENCY_JPY',
        self::CURRENCY_KRW => 'CURRENCY_KRW',
        self::CURRENCY_ILS => 'CURRENCY_ILS',
        self::CURRENCY_ZAR => 'CURRENCY_ZAR',
        self::CURRENCY_CHF => 'CURRENCY_CHF',
        self::CURRENCY_INR => 'CURRENCY_INR',
        self::CURRENCY_MYR => 'CURRENCY_MYR',
        self::CURRENCY_DKK => 'CURRENCY_DKK',
        self::CURRENCY_AED => 'CURRENCY_AED',
        self::CURRENCY_SGD => 'CURRENCY_SGD',
        self::CURRENCY_KES => 'CURRENCY_KES',
        self::CURRENCY_TRY => 'CURRENCY_TRY',
        self::CURRENCY_IDR => 'CURRENCY_IDR',
        self::CURRENCY_PLN => 'CURRENCY_PLN',
        self::CURRENCY_ISK => 'CURRENCY_ISK',
        self::CURRENCY_HKD => 'CURRENCY_HKD',
        self::CURRENCY_PEN => 'CURRENCY_PEN',
        self::CURRENCY_BRL => 'CURRENCY_BRL',
        self::CURRENCY_RUB => 'CURRENCY_RUB',
        self::CURRENCY_CAD => 'CURRENCY_CAD',
        self::CURRENCY_OMR => 'CURRENCY_OMR',
        self::CURRENCY_THB => 'CURRENCY_THB',
        self::CURRENCY_PHP => 'CURRENCY_PHP',
        self::CURRENCY_COP => 'CURRENCY_COP',
        self::CURRENCY_XOF => 'CURRENCY_XOF',
        self::CURRENCY_ARS => 'CURRENCY_ARS',
        self::CURRENCY_NZD => 'CURRENCY_NZD',
        self::CURRENCY_AUD => 'CURRENCY_AUD',
        self::CURRENCY_TWD => 'CURRENCY_TWD',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

