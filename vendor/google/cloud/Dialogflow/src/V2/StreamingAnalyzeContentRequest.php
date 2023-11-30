<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message sent by the client to the
 * [Participants.StreamingAnalyzeContent][google.cloud.dialogflow.v2.Participants.StreamingAnalyzeContent]
 * method.
 * Multiple request messages should be sent in order:
 * 1.  The first message must contain
 *     [participant][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.participant],
 *     [config][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.config]
 *     and optionally
 *     [query_params][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.query_params].
 *     If you want to receive an audio response, it should also contain
 *     [reply_audio_config][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.reply_audio_config].
 *     The message must not contain
 *     [input][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.input].
 * 2.  If
 * [config][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.config] in
 * the first message
 *     was set to
 *     [audio_config][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.audio_config],
 *     all subsequent messages must contain
 *     [input_audio][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.input_audio]
 *     to continue with Speech recognition. However, note that:
 *     * Dialogflow will bill you for the audio so far.
 *     * Dialogflow discards all Speech recognition results in favor of the
 *       text input.
 *  3. If
 *  [StreamingAnalyzeContentRequest.config][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.config]
 *  in the first message was set
 *    to
 *    [StreamingAnalyzeContentRequest.text_config][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.text_config],
 *    then the second message must contain only
 *    [input_text][google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest.input_text].
 *    Moreover, you must not send more than two messages.
 *  After you sent all input, you must half-close or abort the request stream.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.StreamingAnalyzeContentRequest</code>
 */
class StreamingAnalyzeContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the participant this text comes from.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *
     * Generated from protobuf field <code>string participant = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $participant = '';
    /**
     * Speech synthesis configuration.
     * The speech synthesis settings for a virtual agent that may be configured
     * for the associated conversation profile are not used when calling
     * StreamingAnalyzeContent. If this configuration is not supplied, speech
     * synthesis is disabled.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig reply_audio_config = 4;</code>
     */
    private $reply_audio_config = null;
    /**
     * Parameters for a Dialogflow virtual-agent query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 7;</code>
     */
    private $query_params = null;
    /**
     * Parameters for a human assist query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AssistQueryParameters assist_query_params = 8;</code>
     */
    private $assist_query_params = null;
    /**
     * Additional parameters to be put into Dialogflow CX session parameters. To
     * remove a parameter from the session, clients should explicitly set the
     * parameter value to null.
     * Note: this field should only be used if you are connecting to a Dialogflow
     * CX agent.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct cx_parameters = 13;</code>
     */
    private $cx_parameters = null;
    /**
     * Enable partial virtual agent responses. If this flag is not enabled,
     * response stream still contains only one final response even if some
     * `Fulfillment`s in Dialogflow virtual agent have been configured to return
     * partial responses.
     *
     * Generated from protobuf field <code>bool enable_partial_automated_agent_reply = 12;</code>
     */
    private $enable_partial_automated_agent_reply = false;
    protected $config;
    protected $input;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $participant
     *           Required. The name of the participant this text comes from.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *     @type \Google\Cloud\Dialogflow\V2\InputAudioConfig $audio_config
     *           Instructs the speech recognizer how to process the speech audio.
     *     @type \Google\Cloud\Dialogflow\V2\InputTextConfig $text_config
     *           The natural language text to be processed.
     *     @type \Google\Cloud\Dialogflow\V2\OutputAudioConfig $reply_audio_config
     *           Speech synthesis configuration.
     *           The speech synthesis settings for a virtual agent that may be configured
     *           for the associated conversation profile are not used when calling
     *           StreamingAnalyzeContent. If this configuration is not supplied, speech
     *           synthesis is disabled.
     *     @type string $input_audio
     *           The input audio content to be recognized. Must be sent if `audio_config`
     *           is set in the first message. The complete audio over all streaming
     *           messages must not exceed 1 minute.
     *     @type string $input_text
     *           The UTF-8 encoded natural language text to be processed. Must be sent if
     *           `text_config` is set in the first message. Text length must not exceed
     *           256 bytes for virtual agent interactions. The `input_text` field can be
     *           only sent once.
     *     @type \Google\Cloud\Dialogflow\V2\TelephonyDtmfEvents $input_dtmf
     *           The DTMF digits used to invoke intent and fill in parameter value.
     *           This input is ignored if the previous response indicated that DTMF input
     *           is not accepted.
     *     @type \Google\Cloud\Dialogflow\V2\QueryParameters $query_params
     *           Parameters for a Dialogflow virtual-agent query.
     *     @type \Google\Cloud\Dialogflow\V2\AssistQueryParameters $assist_query_params
     *           Parameters for a human assist query.
     *     @type \Google\Protobuf\Struct $cx_parameters
     *           Additional parameters to be put into Dialogflow CX session parameters. To
     *           remove a parameter from the session, clients should explicitly set the
     *           parameter value to null.
     *           Note: this field should only be used if you are connecting to a Dialogflow
     *           CX agent.
     *     @type bool $enable_partial_automated_agent_reply
     *           Enable partial virtual agent responses. If this flag is not enabled,
     *           response stream still contains only one final response even if some
     *           `Fulfillment`s in Dialogflow virtual agent have been configured to return
     *           partial responses.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the participant this text comes from.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *
     * Generated from protobuf field <code>string participant = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Required. The name of the participant this text comes from.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *
     * Generated from protobuf field <code>string participant = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParticipant($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant = $var;

        return $this;
    }

    /**
     * Instructs the speech recognizer how to process the speech audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InputAudioConfig audio_config = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2\InputAudioConfig|null
     */
    public function getAudioConfig()
    {
        return $this->readOneof(2);
    }

    public function hasAudioConfig()
    {
        return $this->hasOneof(2);
    }

    /**
     * Instructs the speech recognizer how to process the speech audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InputAudioConfig audio_config = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\InputAudioConfig $var
     * @return $this
     */
    public function setAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\InputAudioConfig::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The natural language text to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InputTextConfig text_config = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2\InputTextConfig|null
     */
    public function getTextConfig()
    {
        return $this->readOneof(3);
    }

    public function hasTextConfig()
    {
        return $this->hasOneof(3);
    }

    /**
     * The natural language text to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InputTextConfig text_config = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2\InputTextConfig $var
     * @return $this
     */
    public function setTextConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\InputTextConfig::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Speech synthesis configuration.
     * The speech synthesis settings for a virtual agent that may be configured
     * for the associated conversation profile are not used when calling
     * StreamingAnalyzeContent. If this configuration is not supplied, speech
     * synthesis is disabled.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig reply_audio_config = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2\OutputAudioConfig|null
     */
    public function getReplyAudioConfig()
    {
        return $this->reply_audio_config;
    }

    public function hasReplyAudioConfig()
    {
        return isset($this->reply_audio_config);
    }

    public function clearReplyAudioConfig()
    {
        unset($this->reply_audio_config);
    }

    /**
     * Speech synthesis configuration.
     * The speech synthesis settings for a virtual agent that may be configured
     * for the associated conversation profile are not used when calling
     * StreamingAnalyzeContent. If this configuration is not supplied, speech
     * synthesis is disabled.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig reply_audio_config = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2\OutputAudioConfig $var
     * @return $this
     */
    public function setReplyAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\OutputAudioConfig::class);
        $this->reply_audio_config = $var;

        return $this;
    }

    /**
     * The input audio content to be recognized. Must be sent if `audio_config`
     * is set in the first message. The complete audio over all streaming
     * messages must not exceed 1 minute.
     *
     * Generated from protobuf field <code>bytes input_audio = 5;</code>
     * @return string
     */
    public function getInputAudio()
    {
        return $this->readOneof(5);
    }

    public function hasInputAudio()
    {
        return $this->hasOneof(5);
    }

    /**
     * The input audio content to be recognized. Must be sent if `audio_config`
     * is set in the first message. The complete audio over all streaming
     * messages must not exceed 1 minute.
     *
     * Generated from protobuf field <code>bytes input_audio = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInputAudio($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The UTF-8 encoded natural language text to be processed. Must be sent if
     * `text_config` is set in the first message. Text length must not exceed
     * 256 bytes for virtual agent interactions. The `input_text` field can be
     * only sent once.
     *
     * Generated from protobuf field <code>string input_text = 6;</code>
     * @return string
     */
    public function getInputText()
    {
        return $this->readOneof(6);
    }

    public function hasInputText()
    {
        return $this->hasOneof(6);
    }

    /**
     * The UTF-8 encoded natural language text to be processed. Must be sent if
     * `text_config` is set in the first message. Text length must not exceed
     * 256 bytes for virtual agent interactions. The `input_text` field can be
     * only sent once.
     *
     * Generated from protobuf field <code>string input_text = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setInputText($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The DTMF digits used to invoke intent and fill in parameter value.
     * This input is ignored if the previous response indicated that DTMF input
     * is not accepted.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.TelephonyDtmfEvents input_dtmf = 9;</code>
     * @return \Google\Cloud\Dialogflow\V2\TelephonyDtmfEvents|null
     */
    public function getInputDtmf()
    {
        return $this->readOneof(9);
    }

    public function hasInputDtmf()
    {
        return $this->hasOneof(9);
    }

    /**
     * The DTMF digits used to invoke intent and fill in parameter value.
     * This input is ignored if the previous response indicated that DTMF input
     * is not accepted.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.TelephonyDtmfEvents input_dtmf = 9;</code>
     * @param \Google\Cloud\Dialogflow\V2\TelephonyDtmfEvents $var
     * @return $this
     */
    public function setInputDtmf($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\TelephonyDtmfEvents::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Parameters for a Dialogflow virtual-agent query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 7;</code>
     * @return \Google\Cloud\Dialogflow\V2\QueryParameters|null
     */
    public function getQueryParams()
    {
        return $this->query_params;
    }

    public function hasQueryParams()
    {
        return isset($this->query_params);
    }

    public function clearQueryParams()
    {
        unset($this->query_params);
    }

    /**
     * Parameters for a Dialogflow virtual-agent query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 7;</code>
     * @param \Google\Cloud\Dialogflow\V2\QueryParameters $var
     * @return $this
     */
    public function setQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\QueryParameters::class);
        $this->query_params = $var;

        return $this;
    }

    /**
     * Parameters for a human assist query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AssistQueryParameters assist_query_params = 8;</code>
     * @return \Google\Cloud\Dialogflow\V2\AssistQueryParameters|null
     */
    public function getAssistQueryParams()
    {
        return $this->assist_query_params;
    }

    public function hasAssistQueryParams()
    {
        return isset($this->assist_query_params);
    }

    public function clearAssistQueryParams()
    {
        unset($this->assist_query_params);
    }

    /**
     * Parameters for a human assist query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AssistQueryParameters assist_query_params = 8;</code>
     * @param \Google\Cloud\Dialogflow\V2\AssistQueryParameters $var
     * @return $this
     */
    public function setAssistQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\AssistQueryParameters::class);
        $this->assist_query_params = $var;

        return $this;
    }

    /**
     * Additional parameters to be put into Dialogflow CX session parameters. To
     * remove a parameter from the session, clients should explicitly set the
     * parameter value to null.
     * Note: this field should only be used if you are connecting to a Dialogflow
     * CX agent.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct cx_parameters = 13;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getCxParameters()
    {
        return $this->cx_parameters;
    }

    public function hasCxParameters()
    {
        return isset($this->cx_parameters);
    }

    public function clearCxParameters()
    {
        unset($this->cx_parameters);
    }

    /**
     * Additional parameters to be put into Dialogflow CX session parameters. To
     * remove a parameter from the session, clients should explicitly set the
     * parameter value to null.
     * Note: this field should only be used if you are connecting to a Dialogflow
     * CX agent.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct cx_parameters = 13;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setCxParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->cx_parameters = $var;

        return $this;
    }

    /**
     * Enable partial virtual agent responses. If this flag is not enabled,
     * response stream still contains only one final response even if some
     * `Fulfillment`s in Dialogflow virtual agent have been configured to return
     * partial responses.
     *
     * Generated from protobuf field <code>bool enable_partial_automated_agent_reply = 12;</code>
     * @return bool
     */
    public function getEnablePartialAutomatedAgentReply()
    {
        return $this->enable_partial_automated_agent_reply;
    }

    /**
     * Enable partial virtual agent responses. If this flag is not enabled,
     * response stream still contains only one final response even if some
     * `Fulfillment`s in Dialogflow virtual agent have been configured to return
     * partial responses.
     *
     * Generated from protobuf field <code>bool enable_partial_automated_agent_reply = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePartialAutomatedAgentReply($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_partial_automated_agent_reply = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfig()
    {
        return $this->whichOneof("config");
    }

    /**
     * @return string
     */
    public function getInput()
    {
        return $this->whichOneof("input");
    }

}
