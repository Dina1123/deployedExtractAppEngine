<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/access.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an access event.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Access</code>
 */
class Access extends \Google\Protobuf\Internal\Message
{
    /**
     * Associated email, such as "foo&#64;google.com".
     * The email address of the authenticated user (or service account on behalf
     * of third party principal) making the request. For third party identity
     * callers, the `principal_subject` field is populated instead of this field.
     * For privacy reasons, the principal email address is sometimes redacted.
     * For more information, see [Caller identities in audit
     * logs](https://cloud.google.com/logging/docs/audit#user-id).
     *
     * Generated from protobuf field <code>string principal_email = 1;</code>
     */
    private $principal_email = '';
    /**
     * Caller's IP address, such as "1.1.1.1".
     *
     * Generated from protobuf field <code>string caller_ip = 2;</code>
     */
    private $caller_ip = '';
    /**
     * The caller IP's geolocation, which identifies where the call came from.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Geolocation caller_ip_geo = 3;</code>
     */
    private $caller_ip_geo = null;
    /**
     * What kind of user agent is associated, for example operating system shells,
     * embedded or stand-alone applications, etc.
     *
     * Generated from protobuf field <code>string user_agent_family = 4;</code>
     */
    private $user_agent_family = '';
    /**
     * This is the API service that the service account made a call to, e.g.
     * "iam.googleapis.com"
     *
     * Generated from protobuf field <code>string service_name = 5;</code>
     */
    private $service_name = '';
    /**
     * The method that the service account called, e.g. "SetIamPolicy".
     *
     * Generated from protobuf field <code>string method_name = 6;</code>
     */
    private $method_name = '';
    /**
     * A string representing the principal_subject associated with the identity.
     * As compared to `principal_email`, supports principals that aren't
     * associated with email addresses, such as third party principals. For most
     * identities, the format will be `principal://iam.googleapis.com/{identity
     * pool name}/subjects/{subject}` except for some GKE identities
     * (GKE_WORKLOAD, FREEFORM, GKE_HUB_WORKLOAD) that are still in the legacy
     * format `serviceAccount:{identity pool name}[{subject}]`
     *
     * Generated from protobuf field <code>string principal_subject = 7;</code>
     */
    private $principal_subject = '';
    /**
     * The name of the service account key used to create or exchange
     * credentials for authenticating the service account making the request.
     * This is a scheme-less URI full resource name. For example:
     * "//iam.googleapis.com/projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}/keys/{key}"
     *
     * Generated from protobuf field <code>string service_account_key_name = 8;</code>
     */
    private $service_account_key_name = '';
    /**
     * Identity delegation history of an authenticated service account that makes
     * the request. It contains information on the real authorities that try to
     * access GCP resources by delegating on a service account. When multiple
     * authorities are present, they are guaranteed to be sorted based on the
     * original ordering of the identity delegation events.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.ServiceAccountDelegationInfo service_account_delegation_info = 9;</code>
     */
    private $service_account_delegation_info;
    /**
     * A string that represents the username of a user, user account, or other
     * entity involved in the access event. What the entity is and what its role
     * in the access event is depends on the finding that this field appears in.
     * The entity is likely not an IAM principal, but could be a user that is
     * logged into an operating system, if the finding is VM-related, or a user
     * that is logged into some type of application that is involved in the
     * access event.
     *
     * Generated from protobuf field <code>string user_name = 11;</code>
     */
    private $user_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $principal_email
     *           Associated email, such as "foo&#64;google.com".
     *           The email address of the authenticated user (or service account on behalf
     *           of third party principal) making the request. For third party identity
     *           callers, the `principal_subject` field is populated instead of this field.
     *           For privacy reasons, the principal email address is sometimes redacted.
     *           For more information, see [Caller identities in audit
     *           logs](https://cloud.google.com/logging/docs/audit#user-id).
     *     @type string $caller_ip
     *           Caller's IP address, such as "1.1.1.1".
     *     @type \Google\Cloud\SecurityCenter\V1\Geolocation $caller_ip_geo
     *           The caller IP's geolocation, which identifies where the call came from.
     *     @type string $user_agent_family
     *           What kind of user agent is associated, for example operating system shells,
     *           embedded or stand-alone applications, etc.
     *     @type string $service_name
     *           This is the API service that the service account made a call to, e.g.
     *           "iam.googleapis.com"
     *     @type string $method_name
     *           The method that the service account called, e.g. "SetIamPolicy".
     *     @type string $principal_subject
     *           A string representing the principal_subject associated with the identity.
     *           As compared to `principal_email`, supports principals that aren't
     *           associated with email addresses, such as third party principals. For most
     *           identities, the format will be `principal://iam.googleapis.com/{identity
     *           pool name}/subjects/{subject}` except for some GKE identities
     *           (GKE_WORKLOAD, FREEFORM, GKE_HUB_WORKLOAD) that are still in the legacy
     *           format `serviceAccount:{identity pool name}[{subject}]`
     *     @type string $service_account_key_name
     *           The name of the service account key used to create or exchange
     *           credentials for authenticating the service account making the request.
     *           This is a scheme-less URI full resource name. For example:
     *           "//iam.googleapis.com/projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}/keys/{key}"
     *     @type array<\Google\Cloud\SecurityCenter\V1\ServiceAccountDelegationInfo>|\Google\Protobuf\Internal\RepeatedField $service_account_delegation_info
     *           Identity delegation history of an authenticated service account that makes
     *           the request. It contains information on the real authorities that try to
     *           access GCP resources by delegating on a service account. When multiple
     *           authorities are present, they are guaranteed to be sorted based on the
     *           original ordering of the identity delegation events.
     *     @type string $user_name
     *           A string that represents the username of a user, user account, or other
     *           entity involved in the access event. What the entity is and what its role
     *           in the access event is depends on the finding that this field appears in.
     *           The entity is likely not an IAM principal, but could be a user that is
     *           logged into an operating system, if the finding is VM-related, or a user
     *           that is logged into some type of application that is involved in the
     *           access event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Access::initOnce();
        parent::__construct($data);
    }

    /**
     * Associated email, such as "foo&#64;google.com".
     * The email address of the authenticated user (or service account on behalf
     * of third party principal) making the request. For third party identity
     * callers, the `principal_subject` field is populated instead of this field.
     * For privacy reasons, the principal email address is sometimes redacted.
     * For more information, see [Caller identities in audit
     * logs](https://cloud.google.com/logging/docs/audit#user-id).
     *
     * Generated from protobuf field <code>string principal_email = 1;</code>
     * @return string
     */
    public function getPrincipalEmail()
    {
        return $this->principal_email;
    }

    /**
     * Associated email, such as "foo&#64;google.com".
     * The email address of the authenticated user (or service account on behalf
     * of third party principal) making the request. For third party identity
     * callers, the `principal_subject` field is populated instead of this field.
     * For privacy reasons, the principal email address is sometimes redacted.
     * For more information, see [Caller identities in audit
     * logs](https://cloud.google.com/logging/docs/audit#user-id).
     *
     * Generated from protobuf field <code>string principal_email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipalEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal_email = $var;

        return $this;
    }

    /**
     * Caller's IP address, such as "1.1.1.1".
     *
     * Generated from protobuf field <code>string caller_ip = 2;</code>
     * @return string
     */
    public function getCallerIp()
    {
        return $this->caller_ip;
    }

    /**
     * Caller's IP address, such as "1.1.1.1".
     *
     * Generated from protobuf field <code>string caller_ip = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCallerIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->caller_ip = $var;

        return $this;
    }

    /**
     * The caller IP's geolocation, which identifies where the call came from.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Geolocation caller_ip_geo = 3;</code>
     * @return \Google\Cloud\SecurityCenter\V1\Geolocation|null
     */
    public function getCallerIpGeo()
    {
        return $this->caller_ip_geo;
    }

    public function hasCallerIpGeo()
    {
        return isset($this->caller_ip_geo);
    }

    public function clearCallerIpGeo()
    {
        unset($this->caller_ip_geo);
    }

    /**
     * The caller IP's geolocation, which identifies where the call came from.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Geolocation caller_ip_geo = 3;</code>
     * @param \Google\Cloud\SecurityCenter\V1\Geolocation $var
     * @return $this
     */
    public function setCallerIpGeo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\Geolocation::class);
        $this->caller_ip_geo = $var;

        return $this;
    }

    /**
     * What kind of user agent is associated, for example operating system shells,
     * embedded or stand-alone applications, etc.
     *
     * Generated from protobuf field <code>string user_agent_family = 4;</code>
     * @return string
     */
    public function getUserAgentFamily()
    {
        return $this->user_agent_family;
    }

    /**
     * What kind of user agent is associated, for example operating system shells,
     * embedded or stand-alone applications, etc.
     *
     * Generated from protobuf field <code>string user_agent_family = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUserAgentFamily($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_agent_family = $var;

        return $this;
    }

    /**
     * This is the API service that the service account made a call to, e.g.
     * "iam.googleapis.com"
     *
     * Generated from protobuf field <code>string service_name = 5;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * This is the API service that the service account made a call to, e.g.
     * "iam.googleapis.com"
     *
     * Generated from protobuf field <code>string service_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * The method that the service account called, e.g. "SetIamPolicy".
     *
     * Generated from protobuf field <code>string method_name = 6;</code>
     * @return string
     */
    public function getMethodName()
    {
        return $this->method_name;
    }

    /**
     * The method that the service account called, e.g. "SetIamPolicy".
     *
     * Generated from protobuf field <code>string method_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMethodName($var)
    {
        GPBUtil::checkString($var, True);
        $this->method_name = $var;

        return $this;
    }

    /**
     * A string representing the principal_subject associated with the identity.
     * As compared to `principal_email`, supports principals that aren't
     * associated with email addresses, such as third party principals. For most
     * identities, the format will be `principal://iam.googleapis.com/{identity
     * pool name}/subjects/{subject}` except for some GKE identities
     * (GKE_WORKLOAD, FREEFORM, GKE_HUB_WORKLOAD) that are still in the legacy
     * format `serviceAccount:{identity pool name}[{subject}]`
     *
     * Generated from protobuf field <code>string principal_subject = 7;</code>
     * @return string
     */
    public function getPrincipalSubject()
    {
        return $this->principal_subject;
    }

    /**
     * A string representing the principal_subject associated with the identity.
     * As compared to `principal_email`, supports principals that aren't
     * associated with email addresses, such as third party principals. For most
     * identities, the format will be `principal://iam.googleapis.com/{identity
     * pool name}/subjects/{subject}` except for some GKE identities
     * (GKE_WORKLOAD, FREEFORM, GKE_HUB_WORKLOAD) that are still in the legacy
     * format `serviceAccount:{identity pool name}[{subject}]`
     *
     * Generated from protobuf field <code>string principal_subject = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipalSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal_subject = $var;

        return $this;
    }

    /**
     * The name of the service account key used to create or exchange
     * credentials for authenticating the service account making the request.
     * This is a scheme-less URI full resource name. For example:
     * "//iam.googleapis.com/projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}/keys/{key}"
     *
     * Generated from protobuf field <code>string service_account_key_name = 8;</code>
     * @return string
     */
    public function getServiceAccountKeyName()
    {
        return $this->service_account_key_name;
    }

    /**
     * The name of the service account key used to create or exchange
     * credentials for authenticating the service account making the request.
     * This is a scheme-less URI full resource name. For example:
     * "//iam.googleapis.com/projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}/keys/{key}"
     *
     * Generated from protobuf field <code>string service_account_key_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_key_name = $var;

        return $this;
    }

    /**
     * Identity delegation history of an authenticated service account that makes
     * the request. It contains information on the real authorities that try to
     * access GCP resources by delegating on a service account. When multiple
     * authorities are present, they are guaranteed to be sorted based on the
     * original ordering of the identity delegation events.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.ServiceAccountDelegationInfo service_account_delegation_info = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceAccountDelegationInfo()
    {
        return $this->service_account_delegation_info;
    }

    /**
     * Identity delegation history of an authenticated service account that makes
     * the request. It contains information on the real authorities that try to
     * access GCP resources by delegating on a service account. When multiple
     * authorities are present, they are guaranteed to be sorted based on the
     * original ordering of the identity delegation events.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.ServiceAccountDelegationInfo service_account_delegation_info = 9;</code>
     * @param array<\Google\Cloud\SecurityCenter\V1\ServiceAccountDelegationInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceAccountDelegationInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\ServiceAccountDelegationInfo::class);
        $this->service_account_delegation_info = $arr;

        return $this;
    }

    /**
     * A string that represents the username of a user, user account, or other
     * entity involved in the access event. What the entity is and what its role
     * in the access event is depends on the finding that this field appears in.
     * The entity is likely not an IAM principal, but could be a user that is
     * logged into an operating system, if the finding is VM-related, or a user
     * that is logged into some type of application that is involved in the
     * access event.
     *
     * Generated from protobuf field <code>string user_name = 11;</code>
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * A string that represents the username of a user, user account, or other
     * entity involved in the access event. What the entity is and what its role
     * in the access event is depends on the finding that this field appears in.
     * The entity is likely not an IAM principal, but could be a user that is
     * logged into an operating system, if the finding is VM-related, or a user
     * that is logged into some type of application that is involved in the
     * access event.
     *
     * Generated from protobuf field <code>string user_name = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setUserName($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_name = $var;

        return $this;
    }

}

