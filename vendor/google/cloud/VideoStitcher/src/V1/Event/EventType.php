<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/events.proto

namespace Google\Cloud\Video\Stitcher\V1\Event;

use UnexpectedValueException;

/**
 * Describes the event that occurred.
 *
 * Protobuf type <code>google.cloud.video.stitcher.v1.Event.EventType</code>
 */
class EventType
{
    /**
     * The event type is unspecified.
     *
     * Generated from protobuf enum <code>EVENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const EVENT_TYPE_UNSPECIFIED = 0;
    /**
     * First frame of creative ad viewed.
     *
     * Generated from protobuf enum <code>CREATIVE_VIEW = 1;</code>
     */
    const CREATIVE_VIEW = 1;
    /**
     * Creative ad started.
     *
     * Generated from protobuf enum <code>START = 2;</code>
     */
    const START = 2;
    /**
     * Start of an ad break.
     *
     * Generated from protobuf enum <code>BREAK_START = 3;</code>
     */
    const BREAK_START = 3;
    /**
     * End of an ad break.
     *
     * Generated from protobuf enum <code>BREAK_END = 4;</code>
     */
    const BREAK_END = 4;
    /**
     * Impression.
     *
     * Generated from protobuf enum <code>IMPRESSION = 5;</code>
     */
    const IMPRESSION = 5;
    /**
     * First quartile progress.
     *
     * Generated from protobuf enum <code>FIRST_QUARTILE = 6;</code>
     */
    const FIRST_QUARTILE = 6;
    /**
     * Midpoint progress.
     *
     * Generated from protobuf enum <code>MIDPOINT = 7;</code>
     */
    const MIDPOINT = 7;
    /**
     * Third quartile progress.
     *
     * Generated from protobuf enum <code>THIRD_QUARTILE = 8;</code>
     */
    const THIRD_QUARTILE = 8;
    /**
     * Ad progress completed.
     *
     * Generated from protobuf enum <code>COMPLETE = 9;</code>
     */
    const COMPLETE = 9;
    /**
     * Specific progress event with an offset.
     *
     * Generated from protobuf enum <code>PROGRESS = 10;</code>
     */
    const PROGRESS = 10;
    /**
     * Player muted.
     *
     * Generated from protobuf enum <code>MUTE = 11;</code>
     */
    const MUTE = 11;
    /**
     * Player unmuted.
     *
     * Generated from protobuf enum <code>UNMUTE = 12;</code>
     */
    const UNMUTE = 12;
    /**
     * Player paused.
     *
     * Generated from protobuf enum <code>PAUSE = 13;</code>
     */
    const PAUSE = 13;
    /**
     * Click event.
     *
     * Generated from protobuf enum <code>CLICK = 14;</code>
     */
    const CLICK = 14;
    /**
     * Click-through event.
     *
     * Generated from protobuf enum <code>CLICK_THROUGH = 15;</code>
     */
    const CLICK_THROUGH = 15;
    /**
     * Player rewinding.
     *
     * Generated from protobuf enum <code>REWIND = 16;</code>
     */
    const REWIND = 16;
    /**
     * Player resumed.
     *
     * Generated from protobuf enum <code>RESUME = 17;</code>
     */
    const RESUME = 17;
    /**
     * Error event.
     *
     * Generated from protobuf enum <code>ERROR = 18;</code>
     */
    const ERROR = 18;
    /**
     * Ad expanded to a larger size.
     *
     * Generated from protobuf enum <code>EXPAND = 21;</code>
     */
    const EXPAND = 21;
    /**
     * Ad collapsed to a smaller size.
     *
     * Generated from protobuf enum <code>COLLAPSE = 22;</code>
     */
    const COLLAPSE = 22;
    /**
     * Non-linear ad closed.
     *
     * Generated from protobuf enum <code>CLOSE = 24;</code>
     */
    const CLOSE = 24;
    /**
     * Linear ad closed.
     *
     * Generated from protobuf enum <code>CLOSE_LINEAR = 25;</code>
     */
    const CLOSE_LINEAR = 25;
    /**
     * Ad skipped.
     *
     * Generated from protobuf enum <code>SKIP = 26;</code>
     */
    const SKIP = 26;
    /**
     * Accept invitation event.
     *
     * Generated from protobuf enum <code>ACCEPT_INVITATION = 27;</code>
     */
    const ACCEPT_INVITATION = 27;

    private static $valueToName = [
        self::EVENT_TYPE_UNSPECIFIED => 'EVENT_TYPE_UNSPECIFIED',
        self::CREATIVE_VIEW => 'CREATIVE_VIEW',
        self::START => 'START',
        self::BREAK_START => 'BREAK_START',
        self::BREAK_END => 'BREAK_END',
        self::IMPRESSION => 'IMPRESSION',
        self::FIRST_QUARTILE => 'FIRST_QUARTILE',
        self::MIDPOINT => 'MIDPOINT',
        self::THIRD_QUARTILE => 'THIRD_QUARTILE',
        self::COMPLETE => 'COMPLETE',
        self::PROGRESS => 'PROGRESS',
        self::MUTE => 'MUTE',
        self::UNMUTE => 'UNMUTE',
        self::PAUSE => 'PAUSE',
        self::CLICK => 'CLICK',
        self::CLICK_THROUGH => 'CLICK_THROUGH',
        self::REWIND => 'REWIND',
        self::RESUME => 'RESUME',
        self::ERROR => 'ERROR',
        self::EXPAND => 'EXPAND',
        self::COLLAPSE => 'COLLAPSE',
        self::CLOSE => 'CLOSE',
        self::CLOSE_LINEAR => 'CLOSE_LINEAR',
        self::SKIP => 'SKIP',
        self::ACCEPT_INVITATION => 'ACCEPT_INVITATION',
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

