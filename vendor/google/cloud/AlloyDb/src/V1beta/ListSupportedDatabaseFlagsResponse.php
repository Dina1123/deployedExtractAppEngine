<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/service.proto

namespace Google\Cloud\AlloyDb\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for response to listing SupportedDatabaseFlags.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1beta.ListSupportedDatabaseFlagsResponse</code>
 */
class ListSupportedDatabaseFlagsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of SupportedDatabaseFlags.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1beta.SupportedDatabaseFlag supported_database_flags = 1;</code>
     */
    private $supported_database_flags;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AlloyDb\V1beta\SupportedDatabaseFlag>|\Google\Protobuf\Internal\RepeatedField $supported_database_flags
     *           The list of SupportedDatabaseFlags.
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Beta\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of SupportedDatabaseFlags.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1beta.SupportedDatabaseFlag supported_database_flags = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedDatabaseFlags()
    {
        return $this->supported_database_flags;
    }

    /**
     * The list of SupportedDatabaseFlags.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1beta.SupportedDatabaseFlag supported_database_flags = 1;</code>
     * @param array<\Google\Cloud\AlloyDb\V1beta\SupportedDatabaseFlag>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedDatabaseFlags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AlloyDb\V1beta\SupportedDatabaseFlag::class);
        $this->supported_database_flags = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

