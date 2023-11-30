<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/volume.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for updating a volume.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.UpdateVolumeRequest</code>
 */
class UpdateVolumeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The volume to update.
     * The `name` field is used to identify the volume to update.
     * Format: projects/{project}/locations/{location}/volumes/{volume}
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume volume = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $volume = null;
    /**
     * The list of fields to update.
     * The only currently supported fields are:
     *   `snapshot_auto_delete_behavior`
     *   `snapshot_schedule_policy_name`
     *   'labels'
     *   'snapshot_enabled'
     *   'snapshot_reservation_detail.reserved_space_percent'
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BareMetalSolution\V2\Volume $volume
     *           Required. The volume to update.
     *           The `name` field is used to identify the volume to update.
     *           Format: projects/{project}/locations/{location}/volumes/{volume}
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to update.
     *           The only currently supported fields are:
     *             `snapshot_auto_delete_behavior`
     *             `snapshot_schedule_policy_name`
     *             'labels'
     *             'snapshot_enabled'
     *             'snapshot_reservation_detail.reserved_space_percent'
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Volume::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The volume to update.
     * The `name` field is used to identify the volume to update.
     * Format: projects/{project}/locations/{location}/volumes/{volume}
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume volume = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BareMetalSolution\V2\Volume|null
     */
    public function getVolume()
    {
        return $this->volume;
    }

    public function hasVolume()
    {
        return isset($this->volume);
    }

    public function clearVolume()
    {
        unset($this->volume);
    }

    /**
     * Required. The volume to update.
     * The `name` field is used to identify the volume to update.
     * Format: projects/{project}/locations/{location}/volumes/{volume}
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume volume = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BareMetalSolution\V2\Volume $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BareMetalSolution\V2\Volume::class);
        $this->volume = $var;

        return $this;
    }

    /**
     * The list of fields to update.
     * The only currently supported fields are:
     *   `snapshot_auto_delete_behavior`
     *   `snapshot_schedule_policy_name`
     *   'labels'
     *   'snapshot_enabled'
     *   'snapshot_reservation_detail.reserved_space_percent'
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The list of fields to update.
     * The only currently supported fields are:
     *   `snapshot_auto_delete_behavior`
     *   `snapshot_schedule_policy_name`
     *   'labels'
     *   'snapshot_enabled'
     *   'snapshot_reservation_detail.reserved_space_percent'
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

