<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Cloud\AppEngine\V1;

use UnexpectedValueException;

/**
 * Actions to take when the user is not logged in.
 *
 * Protobuf type <code>google.appengine.v1.AuthFailAction</code>
 */
class AuthFailAction
{
    /**
     * Not specified. `AUTH_FAIL_ACTION_REDIRECT` is assumed.
     *
     * Generated from protobuf enum <code>AUTH_FAIL_ACTION_UNSPECIFIED = 0;</code>
     */
    const AUTH_FAIL_ACTION_UNSPECIFIED = 0;
    /**
     * Redirects user to "accounts.google.com". The user is redirected back to the
     * application URL after signing in or creating an account.
     *
     * Generated from protobuf enum <code>AUTH_FAIL_ACTION_REDIRECT = 1;</code>
     */
    const AUTH_FAIL_ACTION_REDIRECT = 1;
    /**
     * Rejects request with a `401` HTTP status code and an error
     * message.
     *
     * Generated from protobuf enum <code>AUTH_FAIL_ACTION_UNAUTHORIZED = 2;</code>
     */
    const AUTH_FAIL_ACTION_UNAUTHORIZED = 2;

    private static $valueToName = [
        self::AUTH_FAIL_ACTION_UNSPECIFIED => 'AUTH_FAIL_ACTION_UNSPECIFIED',
        self::AUTH_FAIL_ACTION_REDIRECT => 'AUTH_FAIL_ACTION_REDIRECT',
        self::AUTH_FAIL_ACTION_UNAUTHORIZED => 'AUTH_FAIL_ACTION_UNAUTHORIZED',
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
