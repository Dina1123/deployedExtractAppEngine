<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1\CompilationResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An error encountered when attempting to compile a Dataform project.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.CompilationResult.CompilationError</code>
 */
class CompilationError extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The error's top level message.
     *
     * Generated from protobuf field <code>string message = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $message = '';
    /**
     * Output only. The error's full stack trace.
     *
     * Generated from protobuf field <code>string stack = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $stack = '';
    /**
     * Output only. The path of the file where this error occurred, if available, relative to
     * the project root.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $path = '';
    /**
     * Output only. The identifier of the action where this error occurred, if available.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target action_target = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $action_target = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           Output only. The error's top level message.
     *     @type string $stack
     *           Output only. The error's full stack trace.
     *     @type string $path
     *           Output only. The path of the file where this error occurred, if available, relative to
     *           the project root.
     *     @type \Google\Cloud\Dataform\V1beta1\Target $action_target
     *           Output only. The identifier of the action where this error occurred, if available.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The error's top level message.
     *
     * Generated from protobuf field <code>string message = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Output only. The error's top level message.
     *
     * Generated from protobuf field <code>string message = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Output only. The error's full stack trace.
     *
     * Generated from protobuf field <code>string stack = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * Output only. The error's full stack trace.
     *
     * Generated from protobuf field <code>string stack = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStack($var)
    {
        GPBUtil::checkString($var, True);
        $this->stack = $var;

        return $this;
    }

    /**
     * Output only. The path of the file where this error occurred, if available, relative to
     * the project root.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Output only. The path of the file where this error occurred, if available, relative to
     * the project root.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Output only. The identifier of the action where this error occurred, if available.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target action_target = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataform\V1beta1\Target|null
     */
    public function getActionTarget()
    {
        return $this->action_target;
    }

    public function hasActionTarget()
    {
        return isset($this->action_target);
    }

    public function clearActionTarget()
    {
        unset($this->action_target);
    }

    /**
     * Output only. The identifier of the action where this error occurred, if available.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target action_target = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataform\V1beta1\Target $var
     * @return $this
     */
    public function setActionTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\Target::class);
        $this->action_target = $var;

        return $this;
    }

}

