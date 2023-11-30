<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the process document method.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ProcessRequest</code>
 */
class ProcessRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the
     * [Processor][google.cloud.documentai.v1.Processor] or
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion]
     * to use for processing. If a
     * [Processor][google.cloud.documentai.v1.Processor] is specified, the server
     * will use its [default
     * version][google.cloud.documentai.v1.Processor.default_processor_version].
     * Format: `projects/{project}/locations/{location}/processors/{processor}`,
     * or
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Whether Human Review feature should be skipped for this request. Default to
     * false.
     *
     * Generated from protobuf field <code>bool skip_human_review = 3;</code>
     */
    private $skip_human_review = false;
    /**
     * Specifies which fields to include in ProcessResponse's document.
     * Only supports top level document and pages field so it must be in the form
     * of `{document_field_name}` or `pages.{page_field_name}`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 6;</code>
     */
    private $field_mask = null;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document $inline_document
     *           An inline document proto.
     *     @type \Google\Cloud\DocumentAI\V1\RawDocument $raw_document
     *           A raw document content (bytes).
     *     @type string $name
     *           Required. The resource name of the
     *           [Processor][google.cloud.documentai.v1.Processor] or
     *           [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion]
     *           to use for processing. If a
     *           [Processor][google.cloud.documentai.v1.Processor] is specified, the server
     *           will use its [default
     *           version][google.cloud.documentai.v1.Processor.default_processor_version].
     *           Format: `projects/{project}/locations/{location}/processors/{processor}`,
     *           or
     *           `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *     @type bool $skip_human_review
     *           Whether Human Review feature should be skipped for this request. Default to
     *           false.
     *     @type \Google\Protobuf\FieldMask $field_mask
     *           Specifies which fields to include in ProcessResponse's document.
     *           Only supports top level document and pages field so it must be in the form
     *           of `{document_field_name}` or `pages.{page_field_name}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * An inline document proto.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document|null
     */
    public function getInlineDocument()
    {
        return $this->readOneof(4);
    }

    public function hasInlineDocument()
    {
        return $this->hasOneof(4);
    }

    /**
     * An inline document proto.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document $var
     * @return $this
     */
    public function setInlineDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A raw document content (bytes).
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.RawDocument raw_document = 5;</code>
     * @return \Google\Cloud\DocumentAI\V1\RawDocument|null
     */
    public function getRawDocument()
    {
        return $this->readOneof(5);
    }

    public function hasRawDocument()
    {
        return $this->hasOneof(5);
    }

    /**
     * A raw document content (bytes).
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.RawDocument raw_document = 5;</code>
     * @param \Google\Cloud\DocumentAI\V1\RawDocument $var
     * @return $this
     */
    public function setRawDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\RawDocument::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Required. The resource name of the
     * [Processor][google.cloud.documentai.v1.Processor] or
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion]
     * to use for processing. If a
     * [Processor][google.cloud.documentai.v1.Processor] is specified, the server
     * will use its [default
     * version][google.cloud.documentai.v1.Processor.default_processor_version].
     * Format: `projects/{project}/locations/{location}/processors/{processor}`,
     * or
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the
     * [Processor][google.cloud.documentai.v1.Processor] or
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion]
     * to use for processing. If a
     * [Processor][google.cloud.documentai.v1.Processor] is specified, the server
     * will use its [default
     * version][google.cloud.documentai.v1.Processor.default_processor_version].
     * Format: `projects/{project}/locations/{location}/processors/{processor}`,
     * or
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Whether Human Review feature should be skipped for this request. Default to
     * false.
     *
     * Generated from protobuf field <code>bool skip_human_review = 3;</code>
     * @return bool
     */
    public function getSkipHumanReview()
    {
        return $this->skip_human_review;
    }

    /**
     * Whether Human Review feature should be skipped for this request. Default to
     * false.
     *
     * Generated from protobuf field <code>bool skip_human_review = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipHumanReview($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_human_review = $var;

        return $this;
    }

    /**
     * Specifies which fields to include in ProcessResponse's document.
     * Only supports top level document and pages field so it must be in the form
     * of `{document_field_name}` or `pages.{page_field_name}`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 6;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getFieldMask()
    {
        return $this->field_mask;
    }

    public function hasFieldMask()
    {
        return isset($this->field_mask);
    }

    public function clearFieldMask()
    {
        unset($this->field_mask);
    }

    /**
     * Specifies which fields to include in ProcessResponse's document.
     * Only supports top level document and pages field so it must be in the form
     * of `{document_field_name}` or `pages.{page_field_name}`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 6;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->field_mask = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

