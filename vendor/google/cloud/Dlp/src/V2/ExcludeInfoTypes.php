<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List of excluded infoTypes.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ExcludeInfoTypes</code>
 */
class ExcludeInfoTypes extends \Google\Protobuf\Internal\Message
{
    /**
     * InfoType list in ExclusionRule rule drops a finding when it overlaps or
     * contained within with a finding of an infoType from this list. For
     * example, for `InspectionRuleSet.info_types` containing "PHONE_NUMBER"` and
     * `exclusion_rule` containing `exclude_info_types.info_types` with
     * "EMAIL_ADDRESS" the phone number findings are dropped if they overlap
     * with EMAIL_ADDRESS finding.
     * That leads to "555-222-2222&#64;example.org" to generate only a single
     * finding, namely email address.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoType info_types = 1;</code>
     */
    private $info_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dlp\V2\InfoType>|\Google\Protobuf\Internal\RepeatedField $info_types
     *           InfoType list in ExclusionRule rule drops a finding when it overlaps or
     *           contained within with a finding of an infoType from this list. For
     *           example, for `InspectionRuleSet.info_types` containing "PHONE_NUMBER"` and
     *           `exclusion_rule` containing `exclude_info_types.info_types` with
     *           "EMAIL_ADDRESS" the phone number findings are dropped if they overlap
     *           with EMAIL_ADDRESS finding.
     *           That leads to "555-222-2222&#64;example.org" to generate only a single
     *           finding, namely email address.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * InfoType list in ExclusionRule rule drops a finding when it overlaps or
     * contained within with a finding of an infoType from this list. For
     * example, for `InspectionRuleSet.info_types` containing "PHONE_NUMBER"` and
     * `exclusion_rule` containing `exclude_info_types.info_types` with
     * "EMAIL_ADDRESS" the phone number findings are dropped if they overlap
     * with EMAIL_ADDRESS finding.
     * That leads to "555-222-2222&#64;example.org" to generate only a single
     * finding, namely email address.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoType info_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInfoTypes()
    {
        return $this->info_types;
    }

    /**
     * InfoType list in ExclusionRule rule drops a finding when it overlaps or
     * contained within with a finding of an infoType from this list. For
     * example, for `InspectionRuleSet.info_types` containing "PHONE_NUMBER"` and
     * `exclusion_rule` containing `exclude_info_types.info_types` with
     * "EMAIL_ADDRESS" the phone number findings are dropped if they overlap
     * with EMAIL_ADDRESS finding.
     * That leads to "555-222-2222&#64;example.org" to generate only a single
     * finding, namely email address.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoType info_types = 1;</code>
     * @param array<\Google\Cloud\Dlp\V2\InfoType>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInfoTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\InfoType::class);
        $this->info_types = $arr;

        return $this;
    }

}

