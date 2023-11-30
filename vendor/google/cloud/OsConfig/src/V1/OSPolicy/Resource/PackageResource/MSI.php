<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An MSI package. MSI packages only support INSTALLED state.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.MSI</code>
 */
class MSI extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The MSI package.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.File source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $source = null;
    /**
     * Additional properties to use during installation.
     * This should be in the format of Property=Setting.
     * Appended to the defaults of `ACTION=INSTALL
     * REBOOT=ReallySuppress`.
     *
     * Generated from protobuf field <code>repeated string properties = 2;</code>
     */
    private $properties;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\File $source
     *           Required. The MSI package.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $properties
     *           Additional properties to use during installation.
     *           This should be in the format of Property=Setting.
     *           Appended to the defaults of `ACTION=INSTALL
     *           REBOOT=ReallySuppress`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The MSI package.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.File source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\File|null
     */
    public function getSource()
    {
        return $this->source;
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * Required. The MSI package.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.File source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\File $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\File::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Additional properties to use during installation.
     * This should be in the format of Property=Setting.
     * Appended to the defaults of `ACTION=INSTALL
     * REBOOT=ReallySuppress`.
     *
     * Generated from protobuf field <code>repeated string properties = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Additional properties to use during installation.
     * This should be in the format of Property=Setting.
     * Appended to the defaults of `ACTION=INSTALL
     * REBOOT=ReallySuppress`.
     *
     * Generated from protobuf field <code>repeated string properties = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->properties = $arr;

        return $this;
    }

}

