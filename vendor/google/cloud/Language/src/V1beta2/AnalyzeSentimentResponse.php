<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The sentiment analysis response message.
 *
 * Generated from protobuf message <code>google.cloud.language.v1beta2.AnalyzeSentimentResponse</code>
 */
class AnalyzeSentimentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The overall sentiment of the input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Sentiment document_sentiment = 1;</code>
     */
    private $document_sentiment = null;
    /**
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language] field for more details.
     *
     * Generated from protobuf field <code>string language = 2;</code>
     */
    private $language = '';
    /**
     * The sentiment for all the sentences in the document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1beta2.Sentence sentences = 3;</code>
     */
    private $sentences;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Language\V1beta2\Sentiment $document_sentiment
     *           The overall sentiment of the input document.
     *     @type string $language
     *           The language of the text, which will be the same as the language specified
     *           in the request or, if not specified, the automatically-detected language.
     *           See [Document.language][google.cloud.language.v1beta2.Document.language] field for more details.
     *     @type array<\Google\Cloud\Language\V1beta2\Sentence>|\Google\Protobuf\Internal\RepeatedField $sentences
     *           The sentiment for all the sentences in the document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * The overall sentiment of the input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Sentiment document_sentiment = 1;</code>
     * @return \Google\Cloud\Language\V1beta2\Sentiment|null
     */
    public function getDocumentSentiment()
    {
        return $this->document_sentiment;
    }

    public function hasDocumentSentiment()
    {
        return isset($this->document_sentiment);
    }

    public function clearDocumentSentiment()
    {
        unset($this->document_sentiment);
    }

    /**
     * The overall sentiment of the input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Sentiment document_sentiment = 1;</code>
     * @param \Google\Cloud\Language\V1beta2\Sentiment $var
     * @return $this
     */
    public function setDocumentSentiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\Sentiment::class);
        $this->document_sentiment = $var;

        return $this;
    }

    /**
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language] field for more details.
     *
     * Generated from protobuf field <code>string language = 2;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language] field for more details.
     *
     * Generated from protobuf field <code>string language = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;

        return $this;
    }

    /**
     * The sentiment for all the sentences in the document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1beta2.Sentence sentences = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSentences()
    {
        return $this->sentences;
    }

    /**
     * The sentiment for all the sentences in the document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1beta2.Sentence sentences = 3;</code>
     * @param array<\Google\Cloud\Language\V1beta2\Sentence>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSentences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1beta2\Sentence::class);
        $this->sentences = $arr;

        return $this;
    }

}

