<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The feedback that the customer has about a certain answer in the
 * conversation.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.AnswerFeedback</code>
 */
class AnswerFeedback extends \Google\Protobuf\Internal\Message
{
    /**
     * The correctness level of an answer.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnswerFeedback.CorrectnessLevel correctness_level = 1;</code>
     */
    private $correctness_level = 0;
    /**
     * Indicates whether an answer or item was clicked by the human agent.
     *
     * Generated from protobuf field <code>bool clicked = 2;</code>
     */
    private $clicked = false;
    /**
     * Indicates whether an answer or item was displayed to the human agent in the
     * agent desktop UI.
     *
     * Generated from protobuf field <code>bool displayed = 3;</code>
     */
    private $displayed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $correctness_level
     *           The correctness level of an answer.
     *     @type bool $clicked
     *           Indicates whether an answer or item was clicked by the human agent.
     *     @type bool $displayed
     *           Indicates whether an answer or item was displayed to the human agent in the
     *           agent desktop UI.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The correctness level of an answer.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnswerFeedback.CorrectnessLevel correctness_level = 1;</code>
     * @return int
     */
    public function getCorrectnessLevel()
    {
        return $this->correctness_level;
    }

    /**
     * The correctness level of an answer.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnswerFeedback.CorrectnessLevel correctness_level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCorrectnessLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\AnswerFeedback\CorrectnessLevel::class);
        $this->correctness_level = $var;

        return $this;
    }

    /**
     * Indicates whether an answer or item was clicked by the human agent.
     *
     * Generated from protobuf field <code>bool clicked = 2;</code>
     * @return bool
     */
    public function getClicked()
    {
        return $this->clicked;
    }

    /**
     * Indicates whether an answer or item was clicked by the human agent.
     *
     * Generated from protobuf field <code>bool clicked = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setClicked($var)
    {
        GPBUtil::checkBool($var);
        $this->clicked = $var;

        return $this;
    }

    /**
     * Indicates whether an answer or item was displayed to the human agent in the
     * agent desktop UI.
     *
     * Generated from protobuf field <code>bool displayed = 3;</code>
     * @return bool
     */
    public function getDisplayed()
    {
        return $this->displayed;
    }

    /**
     * Indicates whether an answer or item was displayed to the human agent in the
     * agent desktop UI.
     *
     * Generated from protobuf field <code>bool displayed = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisplayed($var)
    {
        GPBUtil::checkBool($var);
        $this->displayed = $var;

        return $this;
    }

}

