<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/domain_mapping.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A domain serving an App Engine application.
 *
 * Generated from protobuf message <code>google.appengine.v1.DomainMapping</code>
 */
class DomainMapping extends \Google\Protobuf\Internal\Message
{
    /**
     * Full path to the `DomainMapping` resource in the API. Example:
     * `apps/myapp/domainMapping/example.com`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Relative name of the domain serving the application. Example:
     * `example.com`.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    private $id = '';
    /**
     * SSL configuration for this domain. If unconfigured, this domain will not
     * serve with SSL.
     *
     * Generated from protobuf field <code>.google.appengine.v1.SslSettings ssl_settings = 3;</code>
     */
    private $ssl_settings = null;
    /**
     * The resource records required to configure this domain mapping. These
     * records must be added to the domain's DNS configuration in order to
     * serve the application via this domain mapping.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.ResourceRecord resource_records = 4;</code>
     */
    private $resource_records;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Full path to the `DomainMapping` resource in the API. Example:
     *           `apps/myapp/domainMapping/example.com`.
     *           &#64;OutputOnly
     *     @type string $id
     *           Relative name of the domain serving the application. Example:
     *           `example.com`.
     *     @type \Google\Cloud\AppEngine\V1\SslSettings $ssl_settings
     *           SSL configuration for this domain. If unconfigured, this domain will not
     *           serve with SSL.
     *     @type array<\Google\Cloud\AppEngine\V1\ResourceRecord>|\Google\Protobuf\Internal\RepeatedField $resource_records
     *           The resource records required to configure this domain mapping. These
     *           records must be added to the domain's DNS configuration in order to
     *           serve the application via this domain mapping.
     *           &#64;OutputOnly
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\DomainMapping::initOnce();
        parent::__construct($data);
    }

    /**
     * Full path to the `DomainMapping` resource in the API. Example:
     * `apps/myapp/domainMapping/example.com`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Full path to the `DomainMapping` resource in the API. Example:
     * `apps/myapp/domainMapping/example.com`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Relative name of the domain serving the application. Example:
     * `example.com`.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Relative name of the domain serving the application. Example:
     * `example.com`.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * SSL configuration for this domain. If unconfigured, this domain will not
     * serve with SSL.
     *
     * Generated from protobuf field <code>.google.appengine.v1.SslSettings ssl_settings = 3;</code>
     * @return \Google\Cloud\AppEngine\V1\SslSettings|null
     */
    public function getSslSettings()
    {
        return $this->ssl_settings;
    }

    public function hasSslSettings()
    {
        return isset($this->ssl_settings);
    }

    public function clearSslSettings()
    {
        unset($this->ssl_settings);
    }

    /**
     * SSL configuration for this domain. If unconfigured, this domain will not
     * serve with SSL.
     *
     * Generated from protobuf field <code>.google.appengine.v1.SslSettings ssl_settings = 3;</code>
     * @param \Google\Cloud\AppEngine\V1\SslSettings $var
     * @return $this
     */
    public function setSslSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppEngine\V1\SslSettings::class);
        $this->ssl_settings = $var;

        return $this;
    }

    /**
     * The resource records required to configure this domain mapping. These
     * records must be added to the domain's DNS configuration in order to
     * serve the application via this domain mapping.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.ResourceRecord resource_records = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceRecords()
    {
        return $this->resource_records;
    }

    /**
     * The resource records required to configure this domain mapping. These
     * records must be added to the domain's DNS configuration in order to
     * serve the application via this domain mapping.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.ResourceRecord resource_records = 4;</code>
     * @param array<\Google\Cloud\AppEngine\V1\ResourceRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceRecords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AppEngine\V1\ResourceRecord::class);
        $this->resource_records = $arr;

        return $this;
    }

}

