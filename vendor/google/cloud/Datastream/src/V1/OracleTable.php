<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Oracle table.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.OracleTable</code>
 */
class OracleTable extends \Google\Protobuf\Internal\Message
{
    /**
     * Table name.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     */
    private $table = '';
    /**
     * Oracle columns in the schema.
     * When unspecified as part of include/exclude objects, includes/excludes
     * everything.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.OracleColumn oracle_columns = 2;</code>
     */
    private $oracle_columns;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table
     *           Table name.
     *     @type array<\Google\Cloud\Datastream\V1\OracleColumn>|\Google\Protobuf\Internal\RepeatedField $oracle_columns
     *           Oracle columns in the schema.
     *           When unspecified as part of include/exclude objects, includes/excludes
     *           everything.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Table name.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Table name.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

    /**
     * Oracle columns in the schema.
     * When unspecified as part of include/exclude objects, includes/excludes
     * everything.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.OracleColumn oracle_columns = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOracleColumns()
    {
        return $this->oracle_columns;
    }

    /**
     * Oracle columns in the schema.
     * When unspecified as part of include/exclude objects, includes/excludes
     * everything.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.OracleColumn oracle_columns = 2;</code>
     * @param array<\Google\Cloud\Datastream\V1\OracleColumn>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOracleColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastream\V1\OracleColumn::class);
        $this->oracle_columns = $arr;

        return $this;
    }

}
