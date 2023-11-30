<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [ExplanationSpec][google.cloud.aiplatform.v1.ExplanationSpec] entries
 * that can be overridden at [online
 * explanation][google.cloud.aiplatform.v1.PredictionService.Explain] time.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExplanationSpecOverride</code>
 */
class ExplanationSpecOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * The parameters to be overridden. Note that the
     * [method][google.cloud.aiplatform.v1.ExplanationParameters.method] cannot be
     * changed. If not specified, no parameter is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationParameters parameters = 1;</code>
     */
    private $parameters = null;
    /**
     * The metadata to be overridden. If not specified, no metadata is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadataOverride metadata = 2;</code>
     */
    private $metadata = null;
    /**
     * The example-based explanations parameter overrides.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExamplesOverride examples_override = 3;</code>
     */
    private $examples_override = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\ExplanationParameters $parameters
     *           The parameters to be overridden. Note that the
     *           [method][google.cloud.aiplatform.v1.ExplanationParameters.method] cannot be
     *           changed. If not specified, no parameter is overridden.
     *     @type \Google\Cloud\AIPlatform\V1\ExplanationMetadataOverride $metadata
     *           The metadata to be overridden. If not specified, no metadata is overridden.
     *     @type \Google\Cloud\AIPlatform\V1\ExamplesOverride $examples_override
     *           The example-based explanations parameter overrides.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        parent::__construct($data);
    }

    /**
     * The parameters to be overridden. Note that the
     * [method][google.cloud.aiplatform.v1.ExplanationParameters.method] cannot be
     * changed. If not specified, no parameter is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationParameters parameters = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\ExplanationParameters|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * The parameters to be overridden. Note that the
     * [method][google.cloud.aiplatform.v1.ExplanationParameters.method] cannot be
     * changed. If not specified, no parameter is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationParameters parameters = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\ExplanationParameters $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExplanationParameters::class);
        $this->parameters = $var;

        return $this;
    }

    /**
     * The metadata to be overridden. If not specified, no metadata is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadataOverride metadata = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\ExplanationMetadataOverride|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * The metadata to be overridden. If not specified, no metadata is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadataOverride metadata = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\ExplanationMetadataOverride $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExplanationMetadataOverride::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * The example-based explanations parameter overrides.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExamplesOverride examples_override = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\ExamplesOverride|null
     */
    public function getExamplesOverride()
    {
        return $this->examples_override;
    }

    public function hasExamplesOverride()
    {
        return isset($this->examples_override);
    }

    public function clearExamplesOverride()
    {
        unset($this->examples_override);
    }

    /**
     * The example-based explanations parameter overrides.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExamplesOverride examples_override = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\ExamplesOverride $var
     * @return $this
     */
    public function setExamplesOverride($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExamplesOverride::class);
        $this->examples_override = $var;

        return $this;
    }

}

