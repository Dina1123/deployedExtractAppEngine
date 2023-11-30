<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/environment.proto

namespace Google\Cloud\Dataflow\V1beta3;

use UnexpectedValueException;

/**
 * Specifies the algorithm used to determine the number of worker
 * processes to run at any given point in time, based on the amount of
 * data left to process, the number of workers, and how quickly
 * existing workers are processing data.
 *
 * Protobuf type <code>google.dataflow.v1beta3.AutoscalingAlgorithm</code>
 */
class AutoscalingAlgorithm
{
    /**
     * The algorithm is unknown, or unspecified.
     *
     * Generated from protobuf enum <code>AUTOSCALING_ALGORITHM_UNKNOWN = 0;</code>
     */
    const AUTOSCALING_ALGORITHM_UNKNOWN = 0;
    /**
     * Disable autoscaling.
     *
     * Generated from protobuf enum <code>AUTOSCALING_ALGORITHM_NONE = 1;</code>
     */
    const AUTOSCALING_ALGORITHM_NONE = 1;
    /**
     * Increase worker count over time to reduce job execution time.
     *
     * Generated from protobuf enum <code>AUTOSCALING_ALGORITHM_BASIC = 2;</code>
     */
    const AUTOSCALING_ALGORITHM_BASIC = 2;

    private static $valueToName = [
        self::AUTOSCALING_ALGORITHM_UNKNOWN => 'AUTOSCALING_ALGORITHM_UNKNOWN',
        self::AUTOSCALING_ALGORITHM_NONE => 'AUTOSCALING_ALGORITHM_NONE',
        self::AUTOSCALING_ALGORITHM_BASIC => 'AUTOSCALING_ALGORITHM_BASIC',
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

