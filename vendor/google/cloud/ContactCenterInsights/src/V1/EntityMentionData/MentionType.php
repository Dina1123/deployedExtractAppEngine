<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\EntityMentionData;

use UnexpectedValueException;

/**
 * The supported types of mentions.
 *
 * Protobuf type <code>google.cloud.contactcenterinsights.v1.EntityMentionData.MentionType</code>
 */
class MentionType
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>MENTION_TYPE_UNSPECIFIED = 0;</code>
     */
    const MENTION_TYPE_UNSPECIFIED = 0;
    /**
     * Proper noun.
     *
     * Generated from protobuf enum <code>PROPER = 1;</code>
     */
    const PROPER = 1;
    /**
     * Common noun (or noun compound).
     *
     * Generated from protobuf enum <code>COMMON = 2;</code>
     */
    const COMMON = 2;

    private static $valueToName = [
        self::MENTION_TYPE_UNSPECIFIED => 'MENTION_TYPE_UNSPECIFIED',
        self::PROPER => 'PROPER',
        self::COMMON => 'COMMON',
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


