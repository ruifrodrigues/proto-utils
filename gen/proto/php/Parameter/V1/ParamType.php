<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: parameter/v1/parameter.proto

namespace Parameter\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>parameter.v1.ParamType</code>
 */
class ParamType
{
    /**
     * Generated from protobuf enum <code>PARAM_TYPE_UNSPECIFIED = 0;</code>
     */
    const PARAM_TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>PARAM_TYPE_INDUSTRY = 1;</code>
     */
    const PARAM_TYPE_INDUSTRY = 1;
    /**
     * Generated from protobuf enum <code>PARAM_TYPE_LOCATION = 2;</code>
     */
    const PARAM_TYPE_LOCATION = 2;
    /**
     * Generated from protobuf enum <code>PARAM_TYPE_REGION = 3;</code>
     */
    const PARAM_TYPE_REGION = 3;
    /**
     * Generated from protobuf enum <code>PARAM_TYPE_TAG = 4;</code>
     */
    const PARAM_TYPE_TAG = 4;
    /**
     * Generated from protobuf enum <code>PARAM_TYPE_REVENUE = 5;</code>
     */
    const PARAM_TYPE_REVENUE = 5;
    /**
     * Generated from protobuf enum <code>PARAM_TYPE_SDG = 6;</code>
     */
    const PARAM_TYPE_SDG = 6;
    /**
     * Generated from protobuf enum <code>PARAM_TYPE_SUB_INDUSTRY = 7;</code>
     */
    const PARAM_TYPE_SUB_INDUSTRY = 7;
    /**
     * Generated from protobuf enum <code>PARAM_TYPE_SLUG_LOCATION = 8;</code>
     */
    const PARAM_TYPE_SLUG_LOCATION = 8;

    private static $valueToName = [
        self::PARAM_TYPE_UNSPECIFIED => 'PARAM_TYPE_UNSPECIFIED',
        self::PARAM_TYPE_INDUSTRY => 'PARAM_TYPE_INDUSTRY',
        self::PARAM_TYPE_LOCATION => 'PARAM_TYPE_LOCATION',
        self::PARAM_TYPE_REGION => 'PARAM_TYPE_REGION',
        self::PARAM_TYPE_TAG => 'PARAM_TYPE_TAG',
        self::PARAM_TYPE_REVENUE => 'PARAM_TYPE_REVENUE',
        self::PARAM_TYPE_SDG => 'PARAM_TYPE_SDG',
        self::PARAM_TYPE_SUB_INDUSTRY => 'PARAM_TYPE_SUB_INDUSTRY',
        self::PARAM_TYPE_SLUG_LOCATION => 'PARAM_TYPE_SLUG_LOCATION',
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
