<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/certificate.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An SSL certificate that a user has been authorized to administer. A user
 * is authorized to administer any certificate that applies to one of their
 * authorized domains.
 *
 * Generated from protobuf message <code>google.appengine.v1.AuthorizedCertificate</code>
 */
class AuthorizedCertificate extends \Google\Protobuf\Internal\Message
{
    /**
     * Full path to the `AuthorizedCertificate` resource in the API. Example:
     * `apps/myapp/authorizedCertificates/12345`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Relative name of the certificate. This is a unique value autogenerated
     * on `AuthorizedCertificate` resource creation. Example: `12345`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    private $id = '';
    /**
     * The user-specified display name of the certificate. This is not
     * guaranteed to be unique. Example: `My Certificate`.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    private $display_name = '';
    /**
     * Topmost applicable domains of this certificate. This certificate
     * applies to these domains and their subdomains. Example: `example.com`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>repeated string domain_names = 4;</code>
     */
    private $domain_names;
    /**
     * The time when this certificate expires. To update the renewal time on this
     * certificate, upload an SSL certificate with a different expiration time
     * using [`AuthorizedCertificates.UpdateAuthorizedCertificate`]().
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 5;</code>
     */
    private $expire_time = null;
    /**
     * The SSL certificate serving the `AuthorizedCertificate` resource. This
     * must be obtained independently from a certificate authority.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CertificateRawData certificate_raw_data = 6;</code>
     */
    private $certificate_raw_data = null;
    /**
     * Only applicable if this certificate is managed by App Engine. Managed
     * certificates are tied to the lifecycle of a `DomainMapping` and cannot be
     * updated or deleted via the `AuthorizedCertificates` API. If this
     * certificate is manually administered by the user, this field will be empty.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.appengine.v1.ManagedCertificate managed_certificate = 7;</code>
     */
    private $managed_certificate = null;
    /**
     * The full paths to user visible Domain Mapping resources that have this
     * certificate mapped. Example: `apps/myapp/domainMappings/example.com`.
     * This may not represent the full list of mapped domain mappings if the user
     * does not have `VIEWER` permissions on all of the applications that have
     * this certificate mapped. See `domain_mappings_count` for a complete count.
     * Only returned by `GET` or `LIST` requests when specifically requested by
     * the `view=FULL_CERTIFICATE` option.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>repeated string visible_domain_mappings = 8;</code>
     */
    private $visible_domain_mappings;
    /**
     * Aggregate count of the domain mappings with this certificate mapped. This
     * count includes domain mappings on applications for which the user does not
     * have `VIEWER` permissions.
     * Only returned by `GET` or `LIST` requests when specifically requested by
     * the `view=FULL_CERTIFICATE` option.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>int32 domain_mappings_count = 9;</code>
     */
    private $domain_mappings_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Full path to the `AuthorizedCertificate` resource in the API. Example:
     *           `apps/myapp/authorizedCertificates/12345`.
     *           &#64;OutputOnly
     *     @type string $id
     *           Relative name of the certificate. This is a unique value autogenerated
     *           on `AuthorizedCertificate` resource creation. Example: `12345`.
     *           &#64;OutputOnly
     *     @type string $display_name
     *           The user-specified display name of the certificate. This is not
     *           guaranteed to be unique. Example: `My Certificate`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $domain_names
     *           Topmost applicable domains of this certificate. This certificate
     *           applies to these domains and their subdomains. Example: `example.com`.
     *           &#64;OutputOnly
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           The time when this certificate expires. To update the renewal time on this
     *           certificate, upload an SSL certificate with a different expiration time
     *           using [`AuthorizedCertificates.UpdateAuthorizedCertificate`]().
     *           &#64;OutputOnly
     *     @type \Google\Cloud\AppEngine\V1\CertificateRawData $certificate_raw_data
     *           The SSL certificate serving the `AuthorizedCertificate` resource. This
     *           must be obtained independently from a certificate authority.
     *     @type \Google\Cloud\AppEngine\V1\ManagedCertificate $managed_certificate
     *           Only applicable if this certificate is managed by App Engine. Managed
     *           certificates are tied to the lifecycle of a `DomainMapping` and cannot be
     *           updated or deleted via the `AuthorizedCertificates` API. If this
     *           certificate is manually administered by the user, this field will be empty.
     *           &#64;OutputOnly
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $visible_domain_mappings
     *           The full paths to user visible Domain Mapping resources that have this
     *           certificate mapped. Example: `apps/myapp/domainMappings/example.com`.
     *           This may not represent the full list of mapped domain mappings if the user
     *           does not have `VIEWER` permissions on all of the applications that have
     *           this certificate mapped. See `domain_mappings_count` for a complete count.
     *           Only returned by `GET` or `LIST` requests when specifically requested by
     *           the `view=FULL_CERTIFICATE` option.
     *           &#64;OutputOnly
     *     @type int $domain_mappings_count
     *           Aggregate count of the domain mappings with this certificate mapped. This
     *           count includes domain mappings on applications for which the user does not
     *           have `VIEWER` permissions.
     *           Only returned by `GET` or `LIST` requests when specifically requested by
     *           the `view=FULL_CERTIFICATE` option.
     *           &#64;OutputOnly
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Certificate::initOnce();
        parent::__construct($data);
    }

    /**
     * Full path to the `AuthorizedCertificate` resource in the API. Example:
     * `apps/myapp/authorizedCertificates/12345`.
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
     * Full path to the `AuthorizedCertificate` resource in the API. Example:
     * `apps/myapp/authorizedCertificates/12345`.
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
     * Relative name of the certificate. This is a unique value autogenerated
     * on `AuthorizedCertificate` resource creation. Example: `12345`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Relative name of the certificate. This is a unique value autogenerated
     * on `AuthorizedCertificate` resource creation. Example: `12345`.
     * &#64;OutputOnly
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
     * The user-specified display name of the certificate. This is not
     * guaranteed to be unique. Example: `My Certificate`.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The user-specified display name of the certificate. This is not
     * guaranteed to be unique. Example: `My Certificate`.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Topmost applicable domains of this certificate. This certificate
     * applies to these domains and their subdomains. Example: `example.com`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>repeated string domain_names = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomainNames()
    {
        return $this->domain_names;
    }

    /**
     * Topmost applicable domains of this certificate. This certificate
     * applies to these domains and their subdomains. Example: `example.com`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>repeated string domain_names = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomainNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->domain_names = $arr;

        return $this;
    }

    /**
     * The time when this certificate expires. To update the renewal time on this
     * certificate, upload an SSL certificate with a different expiration time
     * using [`AuthorizedCertificates.UpdateAuthorizedCertificate`]().
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * The time when this certificate expires. To update the renewal time on this
     * certificate, upload an SSL certificate with a different expiration time
     * using [`AuthorizedCertificates.UpdateAuthorizedCertificate`]().
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * The SSL certificate serving the `AuthorizedCertificate` resource. This
     * must be obtained independently from a certificate authority.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CertificateRawData certificate_raw_data = 6;</code>
     * @return \Google\Cloud\AppEngine\V1\CertificateRawData|null
     */
    public function getCertificateRawData()
    {
        return $this->certificate_raw_data;
    }

    public function hasCertificateRawData()
    {
        return isset($this->certificate_raw_data);
    }

    public function clearCertificateRawData()
    {
        unset($this->certificate_raw_data);
    }

    /**
     * The SSL certificate serving the `AuthorizedCertificate` resource. This
     * must be obtained independently from a certificate authority.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CertificateRawData certificate_raw_data = 6;</code>
     * @param \Google\Cloud\AppEngine\V1\CertificateRawData $var
     * @return $this
     */
    public function setCertificateRawData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppEngine\V1\CertificateRawData::class);
        $this->certificate_raw_data = $var;

        return $this;
    }

    /**
     * Only applicable if this certificate is managed by App Engine. Managed
     * certificates are tied to the lifecycle of a `DomainMapping` and cannot be
     * updated or deleted via the `AuthorizedCertificates` API. If this
     * certificate is manually administered by the user, this field will be empty.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.appengine.v1.ManagedCertificate managed_certificate = 7;</code>
     * @return \Google\Cloud\AppEngine\V1\ManagedCertificate|null
     */
    public function getManagedCertificate()
    {
        return $this->managed_certificate;
    }

    public function hasManagedCertificate()
    {
        return isset($this->managed_certificate);
    }

    public function clearManagedCertificate()
    {
        unset($this->managed_certificate);
    }

    /**
     * Only applicable if this certificate is managed by App Engine. Managed
     * certificates are tied to the lifecycle of a `DomainMapping` and cannot be
     * updated or deleted via the `AuthorizedCertificates` API. If this
     * certificate is manually administered by the user, this field will be empty.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.appengine.v1.ManagedCertificate managed_certificate = 7;</code>
     * @param \Google\Cloud\AppEngine\V1\ManagedCertificate $var
     * @return $this
     */
    public function setManagedCertificate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppEngine\V1\ManagedCertificate::class);
        $this->managed_certificate = $var;

        return $this;
    }

    /**
     * The full paths to user visible Domain Mapping resources that have this
     * certificate mapped. Example: `apps/myapp/domainMappings/example.com`.
     * This may not represent the full list of mapped domain mappings if the user
     * does not have `VIEWER` permissions on all of the applications that have
     * this certificate mapped. See `domain_mappings_count` for a complete count.
     * Only returned by `GET` or `LIST` requests when specifically requested by
     * the `view=FULL_CERTIFICATE` option.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>repeated string visible_domain_mappings = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVisibleDomainMappings()
    {
        return $this->visible_domain_mappings;
    }

    /**
     * The full paths to user visible Domain Mapping resources that have this
     * certificate mapped. Example: `apps/myapp/domainMappings/example.com`.
     * This may not represent the full list of mapped domain mappings if the user
     * does not have `VIEWER` permissions on all of the applications that have
     * this certificate mapped. See `domain_mappings_count` for a complete count.
     * Only returned by `GET` or `LIST` requests when specifically requested by
     * the `view=FULL_CERTIFICATE` option.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>repeated string visible_domain_mappings = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVisibleDomainMappings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->visible_domain_mappings = $arr;

        return $this;
    }

    /**
     * Aggregate count of the domain mappings with this certificate mapped. This
     * count includes domain mappings on applications for which the user does not
     * have `VIEWER` permissions.
     * Only returned by `GET` or `LIST` requests when specifically requested by
     * the `view=FULL_CERTIFICATE` option.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>int32 domain_mappings_count = 9;</code>
     * @return int
     */
    public function getDomainMappingsCount()
    {
        return $this->domain_mappings_count;
    }

    /**
     * Aggregate count of the domain mappings with this certificate mapped. This
     * count includes domain mappings on applications for which the user does not
     * have `VIEWER` permissions.
     * Only returned by `GET` or `LIST` requests when specifically requested by
     * the `view=FULL_CERTIFICATE` option.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>int32 domain_mappings_count = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDomainMappingsCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->domain_mappings_count = $var;

        return $this;
    }

}

