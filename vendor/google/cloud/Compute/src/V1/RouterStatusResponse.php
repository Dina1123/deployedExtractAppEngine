<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterStatusResponse</code>
 */
class RouterStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of resource.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterStatus result = 139315229;</code>
     */
    private $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           Type of resource.
     *     @type \Google\Cloud\Compute\V1\RouterStatus $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of resource.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * Type of resource.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterStatus result = 139315229;</code>
     * @return \Google\Cloud\Compute\V1\RouterStatus|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterStatus result = 139315229;</code>
     * @param \Google\Cloud\Compute\V1\RouterStatus $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\RouterStatus::class);
        $this->result = $var;

        return $this;
    }

}

