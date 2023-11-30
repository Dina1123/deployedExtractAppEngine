<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/service.proto

namespace Google\Cloud\AlloyDb\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for creating batches of instances in a cluster.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1alpha.BatchCreateInstancesResponse</code>
 */
class BatchCreateInstancesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Created instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1alpha.Instance instances = 1;</code>
     */
    private $instances;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AlloyDb\V1alpha\Instance>|\Google\Protobuf\Internal\RepeatedField $instances
     *           Created instances.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Alpha\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Created instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1alpha.Instance instances = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Created instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1alpha.Instance instances = 1;</code>
     * @param array<\Google\Cloud\AlloyDb\V1alpha\Instance>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AlloyDb\V1alpha\Instance::class);
        $this->instances = $arr;

        return $this;
    }

}

