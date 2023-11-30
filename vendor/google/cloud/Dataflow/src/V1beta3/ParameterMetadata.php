<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/templates.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for a specific parameter.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.ParameterMetadata</code>
 */
class ParameterMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parameter.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The label to display for the parameter.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     */
    private $label = '';
    /**
     * Required. The help text to display for the parameter.
     *
     * Generated from protobuf field <code>string help_text = 3;</code>
     */
    private $help_text = '';
    /**
     * Optional. Whether the parameter is optional. Defaults to false.
     *
     * Generated from protobuf field <code>bool is_optional = 4;</code>
     */
    private $is_optional = false;
    /**
     * Optional. Regexes that the parameter must match.
     *
     * Generated from protobuf field <code>repeated string regexes = 5;</code>
     */
    private $regexes;
    /**
     * Optional. The type of the parameter.
     * Used for selecting input picker.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.ParameterType param_type = 6;</code>
     */
    private $param_type = 0;
    /**
     * Optional. Additional metadata for describing this parameter.
     *
     * Generated from protobuf field <code>map<string, string> custom_metadata = 7;</code>
     */
    private $custom_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the parameter.
     *     @type string $label
     *           Required. The label to display for the parameter.
     *     @type string $help_text
     *           Required. The help text to display for the parameter.
     *     @type bool $is_optional
     *           Optional. Whether the parameter is optional. Defaults to false.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $regexes
     *           Optional. Regexes that the parameter must match.
     *     @type int $param_type
     *           Optional. The type of the parameter.
     *           Used for selecting input picker.
     *     @type array|\Google\Protobuf\Internal\MapField $custom_metadata
     *           Optional. Additional metadata for describing this parameter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Templates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parameter.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the parameter.
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
     * Required. The label to display for the parameter.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Required. The label to display for the parameter.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * Required. The help text to display for the parameter.
     *
     * Generated from protobuf field <code>string help_text = 3;</code>
     * @return string
     */
    public function getHelpText()
    {
        return $this->help_text;
    }

    /**
     * Required. The help text to display for the parameter.
     *
     * Generated from protobuf field <code>string help_text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHelpText($var)
    {
        GPBUtil::checkString($var, True);
        $this->help_text = $var;

        return $this;
    }

    /**
     * Optional. Whether the parameter is optional. Defaults to false.
     *
     * Generated from protobuf field <code>bool is_optional = 4;</code>
     * @return bool
     */
    public function getIsOptional()
    {
        return $this->is_optional;
    }

    /**
     * Optional. Whether the parameter is optional. Defaults to false.
     *
     * Generated from protobuf field <code>bool is_optional = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsOptional($var)
    {
        GPBUtil::checkBool($var);
        $this->is_optional = $var;

        return $this;
    }

    /**
     * Optional. Regexes that the parameter must match.
     *
     * Generated from protobuf field <code>repeated string regexes = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegexes()
    {
        return $this->regexes;
    }

    /**
     * Optional. Regexes that the parameter must match.
     *
     * Generated from protobuf field <code>repeated string regexes = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegexes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->regexes = $arr;

        return $this;
    }

    /**
     * Optional. The type of the parameter.
     * Used for selecting input picker.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.ParameterType param_type = 6;</code>
     * @return int
     */
    public function getParamType()
    {
        return $this->param_type;
    }

    /**
     * Optional. The type of the parameter.
     * Used for selecting input picker.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.ParameterType param_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setParamType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\ParameterType::class);
        $this->param_type = $var;

        return $this;
    }

    /**
     * Optional. Additional metadata for describing this parameter.
     *
     * Generated from protobuf field <code>map<string, string> custom_metadata = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getCustomMetadata()
    {
        return $this->custom_metadata;
    }

    /**
     * Optional. Additional metadata for describing this parameter.
     *
     * Generated from protobuf field <code>map<string, string> custom_metadata = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setCustomMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->custom_metadata = $arr;

        return $this;
    }

}

