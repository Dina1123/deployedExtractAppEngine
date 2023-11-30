<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a sink used to export log entries to one of the following
 * destinations in any project: a Cloud Storage bucket, a BigQuery dataset, a
 * Pub/Sub topic or a Cloud Logging log bucket. A logs filter controls which log
 * entries are exported. The sink must be created within a project,
 * organization, billing account, or folder.
 *
 * Generated from protobuf message <code>google.logging.v2.LogSink</code>
 */
class LogSink extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The client-assigned sink identifier, unique within the project.
     * For example: `"my-syslog-errors-to-pubsub"`. Sink identifiers are limited
     * to 100 characters and can include only the following characters: upper and
     * lower-case alphanumeric characters, underscores, hyphens, and periods.
     * First character has to be alphanumeric.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Required. The export destination:
     *     "storage.googleapis.com/[GCS_BUCKET]"
     *     "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET]"
     *     "pubsub.googleapis.com/projects/[PROJECT_ID]/topics/[TOPIC_ID]"
     * The sink's `writer_identity`, set when the sink is created, must have
     * permission to write to the destination or else the log entries are not
     * exported. For more information, see
     * [Exporting Logs with
     * Sinks](https://cloud.google.com/logging/docs/api/tasks/exporting-logs).
     *
     * Generated from protobuf field <code>string destination = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $destination = '';
    /**
     * Optional. An [advanced logs
     * filter](https://cloud.google.com/logging/docs/view/advanced-queries). The
     * only exported log entries are those that are in the resource owning the
     * sink and that match the filter.
     * For example:
     *   `logName="projects/[PROJECT_ID]/logs/[LOG_ID]" AND severity>=ERROR`
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. A description of this sink.
     * The maximum length of the description is 8000 characters.
     *
     * Generated from protobuf field <code>string description = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Optional. If set to true, then this sink is disabled and it does not export any log
     * entries.
     *
     * Generated from protobuf field <code>bool disabled = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $disabled = false;
    /**
     * Optional. Log entries that match any of these exclusion filters will not be exported.
     * If a log entry is matched by both `filter` and one of `exclusion_filters`
     * it will not be exported.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogExclusion exclusions = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $exclusions;
    /**
     * Deprecated. This field is unused.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogSink.VersionFormat output_version_format = 6 [deprecated = true];</code>
     * @deprecated
     */
    protected $output_version_format = 0;
    /**
     * Output only. An IAM identity&mdash;a service account or group&mdash;under which Cloud
     * Logging writes the exported log entries to the sink's destination. This
     * field is set by
     * [sinks.create][google.logging.v2.ConfigServiceV2.CreateSink] and
     * [sinks.update][google.logging.v2.ConfigServiceV2.UpdateSink] based on the
     * value of `unique_writer_identity` in those methods.
     * Until you grant this identity write-access to the destination, log entry
     * exports from this sink will fail. For more information, see [Granting
     * Access for a
     * Resource](https://cloud.google.com/iam/docs/granting-roles-to-service-accounts#granting_access_to_a_service_account_for_a_resource).
     * Consult the destination service's documentation to determine the
     * appropriate IAM roles to assign to the identity.
     * Sinks that have a destination that is a log bucket in the same project as
     * the sink do not have a writer_identity and no additional permissions are
     * required.
     *
     * Generated from protobuf field <code>string writer_identity = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $writer_identity = '';
    /**
     * Optional. This field applies only to sinks owned by organizations and folders. If the
     * field is false, the default, only the logs owned by the sink's parent
     * resource are available for export. If the field is true, then log entries
     * from all the projects, folders, and billing accounts contained in the
     * sink's parent resource are also available for export. Whether a particular
     * log entry from the children is exported depends on the sink's filter
     * expression.
     * For example, if this field is true, then the filter
     * `resource.type=gce_instance` would export all Compute Engine VM instance
     * log entries from all projects in the sink's parent.
     * To only export entries from certain child projects, filter on the project
     * part of the log name:
     *   logName:("projects/test-project1/" OR "projects/test-project2/") AND
     *   resource.type=gce_instance
     *
     * Generated from protobuf field <code>bool include_children = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $include_children = false;
    /**
     * Output only. The creation timestamp of the sink.
     * This field may not be present for older sinks.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The last update timestamp of the sink.
     * This field may not be present for older sinks.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    protected $options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The client-assigned sink identifier, unique within the project.
     *           For example: `"my-syslog-errors-to-pubsub"`. Sink identifiers are limited
     *           to 100 characters and can include only the following characters: upper and
     *           lower-case alphanumeric characters, underscores, hyphens, and periods.
     *           First character has to be alphanumeric.
     *     @type string $destination
     *           Required. The export destination:
     *               "storage.googleapis.com/[GCS_BUCKET]"
     *               "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET]"
     *               "pubsub.googleapis.com/projects/[PROJECT_ID]/topics/[TOPIC_ID]"
     *           The sink's `writer_identity`, set when the sink is created, must have
     *           permission to write to the destination or else the log entries are not
     *           exported. For more information, see
     *           [Exporting Logs with
     *           Sinks](https://cloud.google.com/logging/docs/api/tasks/exporting-logs).
     *     @type string $filter
     *           Optional. An [advanced logs
     *           filter](https://cloud.google.com/logging/docs/view/advanced-queries). The
     *           only exported log entries are those that are in the resource owning the
     *           sink and that match the filter.
     *           For example:
     *             `logName="projects/[PROJECT_ID]/logs/[LOG_ID]" AND severity>=ERROR`
     *     @type string $description
     *           Optional. A description of this sink.
     *           The maximum length of the description is 8000 characters.
     *     @type bool $disabled
     *           Optional. If set to true, then this sink is disabled and it does not export any log
     *           entries.
     *     @type array<\Google\Cloud\Logging\V2\LogExclusion>|\Google\Protobuf\Internal\RepeatedField $exclusions
     *           Optional. Log entries that match any of these exclusion filters will not be exported.
     *           If a log entry is matched by both `filter` and one of `exclusion_filters`
     *           it will not be exported.
     *     @type int $output_version_format
     *           Deprecated. This field is unused.
     *     @type string $writer_identity
     *           Output only. An IAM identity&mdash;a service account or group&mdash;under which Cloud
     *           Logging writes the exported log entries to the sink's destination. This
     *           field is set by
     *           [sinks.create][google.logging.v2.ConfigServiceV2.CreateSink] and
     *           [sinks.update][google.logging.v2.ConfigServiceV2.UpdateSink] based on the
     *           value of `unique_writer_identity` in those methods.
     *           Until you grant this identity write-access to the destination, log entry
     *           exports from this sink will fail. For more information, see [Granting
     *           Access for a
     *           Resource](https://cloud.google.com/iam/docs/granting-roles-to-service-accounts#granting_access_to_a_service_account_for_a_resource).
     *           Consult the destination service's documentation to determine the
     *           appropriate IAM roles to assign to the identity.
     *           Sinks that have a destination that is a log bucket in the same project as
     *           the sink do not have a writer_identity and no additional permissions are
     *           required.
     *     @type bool $include_children
     *           Optional. This field applies only to sinks owned by organizations and folders. If the
     *           field is false, the default, only the logs owned by the sink's parent
     *           resource are available for export. If the field is true, then log entries
     *           from all the projects, folders, and billing accounts contained in the
     *           sink's parent resource are also available for export. Whether a particular
     *           log entry from the children is exported depends on the sink's filter
     *           expression.
     *           For example, if this field is true, then the filter
     *           `resource.type=gce_instance` would export all Compute Engine VM instance
     *           log entries from all projects in the sink's parent.
     *           To only export entries from certain child projects, filter on the project
     *           part of the log name:
     *             logName:("projects/test-project1/" OR "projects/test-project2/") AND
     *             resource.type=gce_instance
     *     @type \Google\Cloud\Logging\V2\BigQueryOptions $bigquery_options
     *           Optional. Options that affect sinks exporting data to BigQuery.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation timestamp of the sink.
     *           This field may not be present for older sinks.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last update timestamp of the sink.
     *           This field may not be present for older sinks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The client-assigned sink identifier, unique within the project.
     * For example: `"my-syslog-errors-to-pubsub"`. Sink identifiers are limited
     * to 100 characters and can include only the following characters: upper and
     * lower-case alphanumeric characters, underscores, hyphens, and periods.
     * First character has to be alphanumeric.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The client-assigned sink identifier, unique within the project.
     * For example: `"my-syslog-errors-to-pubsub"`. Sink identifiers are limited
     * to 100 characters and can include only the following characters: upper and
     * lower-case alphanumeric characters, underscores, hyphens, and periods.
     * First character has to be alphanumeric.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The export destination:
     *     "storage.googleapis.com/[GCS_BUCKET]"
     *     "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET]"
     *     "pubsub.googleapis.com/projects/[PROJECT_ID]/topics/[TOPIC_ID]"
     * The sink's `writer_identity`, set when the sink is created, must have
     * permission to write to the destination or else the log entries are not
     * exported. For more information, see
     * [Exporting Logs with
     * Sinks](https://cloud.google.com/logging/docs/api/tasks/exporting-logs).
     *
     * Generated from protobuf field <code>string destination = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Required. The export destination:
     *     "storage.googleapis.com/[GCS_BUCKET]"
     *     "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET]"
     *     "pubsub.googleapis.com/projects/[PROJECT_ID]/topics/[TOPIC_ID]"
     * The sink's `writer_identity`, set when the sink is created, must have
     * permission to write to the destination or else the log entries are not
     * exported. For more information, see
     * [Exporting Logs with
     * Sinks](https://cloud.google.com/logging/docs/api/tasks/exporting-logs).
     *
     * Generated from protobuf field <code>string destination = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * Optional. An [advanced logs
     * filter](https://cloud.google.com/logging/docs/view/advanced-queries). The
     * only exported log entries are those that are in the resource owning the
     * sink and that match the filter.
     * For example:
     *   `logName="projects/[PROJECT_ID]/logs/[LOG_ID]" AND severity>=ERROR`
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. An [advanced logs
     * filter](https://cloud.google.com/logging/docs/view/advanced-queries). The
     * only exported log entries are those that are in the resource owning the
     * sink and that match the filter.
     * For example:
     *   `logName="projects/[PROJECT_ID]/logs/[LOG_ID]" AND severity>=ERROR`
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. A description of this sink.
     * The maximum length of the description is 8000 characters.
     *
     * Generated from protobuf field <code>string description = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. A description of this sink.
     * The maximum length of the description is 8000 characters.
     *
     * Generated from protobuf field <code>string description = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. If set to true, then this sink is disabled and it does not export any log
     * entries.
     *
     * Generated from protobuf field <code>bool disabled = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Optional. If set to true, then this sink is disabled and it does not export any log
     * entries.
     *
     * Generated from protobuf field <code>bool disabled = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * Optional. Log entries that match any of these exclusion filters will not be exported.
     * If a log entry is matched by both `filter` and one of `exclusion_filters`
     * it will not be exported.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogExclusion exclusions = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExclusions()
    {
        return $this->exclusions;
    }

    /**
     * Optional. Log entries that match any of these exclusion filters will not be exported.
     * If a log entry is matched by both `filter` and one of `exclusion_filters`
     * it will not be exported.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogExclusion exclusions = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Logging\V2\LogExclusion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExclusions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Logging\V2\LogExclusion::class);
        $this->exclusions = $arr;

        return $this;
    }

    /**
     * Deprecated. This field is unused.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogSink.VersionFormat output_version_format = 6 [deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getOutputVersionFormat()
    {
        @trigger_error('output_version_format is deprecated.', E_USER_DEPRECATED);
        return $this->output_version_format;
    }

    /**
     * Deprecated. This field is unused.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogSink.VersionFormat output_version_format = 6 [deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setOutputVersionFormat($var)
    {
        @trigger_error('output_version_format is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkEnum($var, \Google\Cloud\Logging\V2\LogSink\VersionFormat::class);
        $this->output_version_format = $var;

        return $this;
    }

    /**
     * Output only. An IAM identity&mdash;a service account or group&mdash;under which Cloud
     * Logging writes the exported log entries to the sink's destination. This
     * field is set by
     * [sinks.create][google.logging.v2.ConfigServiceV2.CreateSink] and
     * [sinks.update][google.logging.v2.ConfigServiceV2.UpdateSink] based on the
     * value of `unique_writer_identity` in those methods.
     * Until you grant this identity write-access to the destination, log entry
     * exports from this sink will fail. For more information, see [Granting
     * Access for a
     * Resource](https://cloud.google.com/iam/docs/granting-roles-to-service-accounts#granting_access_to_a_service_account_for_a_resource).
     * Consult the destination service's documentation to determine the
     * appropriate IAM roles to assign to the identity.
     * Sinks that have a destination that is a log bucket in the same project as
     * the sink do not have a writer_identity and no additional permissions are
     * required.
     *
     * Generated from protobuf field <code>string writer_identity = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getWriterIdentity()
    {
        return $this->writer_identity;
    }

    /**
     * Output only. An IAM identity&mdash;a service account or group&mdash;under which Cloud
     * Logging writes the exported log entries to the sink's destination. This
     * field is set by
     * [sinks.create][google.logging.v2.ConfigServiceV2.CreateSink] and
     * [sinks.update][google.logging.v2.ConfigServiceV2.UpdateSink] based on the
     * value of `unique_writer_identity` in those methods.
     * Until you grant this identity write-access to the destination, log entry
     * exports from this sink will fail. For more information, see [Granting
     * Access for a
     * Resource](https://cloud.google.com/iam/docs/granting-roles-to-service-accounts#granting_access_to_a_service_account_for_a_resource).
     * Consult the destination service's documentation to determine the
     * appropriate IAM roles to assign to the identity.
     * Sinks that have a destination that is a log bucket in the same project as
     * the sink do not have a writer_identity and no additional permissions are
     * required.
     *
     * Generated from protobuf field <code>string writer_identity = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setWriterIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->writer_identity = $var;

        return $this;
    }

    /**
     * Optional. This field applies only to sinks owned by organizations and folders. If the
     * field is false, the default, only the logs owned by the sink's parent
     * resource are available for export. If the field is true, then log entries
     * from all the projects, folders, and billing accounts contained in the
     * sink's parent resource are also available for export. Whether a particular
     * log entry from the children is exported depends on the sink's filter
     * expression.
     * For example, if this field is true, then the filter
     * `resource.type=gce_instance` would export all Compute Engine VM instance
     * log entries from all projects in the sink's parent.
     * To only export entries from certain child projects, filter on the project
     * part of the log name:
     *   logName:("projects/test-project1/" OR "projects/test-project2/") AND
     *   resource.type=gce_instance
     *
     * Generated from protobuf field <code>bool include_children = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getIncludeChildren()
    {
        return $this->include_children;
    }

    /**
     * Optional. This field applies only to sinks owned by organizations and folders. If the
     * field is false, the default, only the logs owned by the sink's parent
     * resource are available for export. If the field is true, then log entries
     * from all the projects, folders, and billing accounts contained in the
     * sink's parent resource are also available for export. Whether a particular
     * log entry from the children is exported depends on the sink's filter
     * expression.
     * For example, if this field is true, then the filter
     * `resource.type=gce_instance` would export all Compute Engine VM instance
     * log entries from all projects in the sink's parent.
     * To only export entries from certain child projects, filter on the project
     * part of the log name:
     *   logName:("projects/test-project1/" OR "projects/test-project2/") AND
     *   resource.type=gce_instance
     *
     * Generated from protobuf field <code>bool include_children = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeChildren($var)
    {
        GPBUtil::checkBool($var);
        $this->include_children = $var;

        return $this;
    }

    /**
     * Optional. Options that affect sinks exporting data to BigQuery.
     *
     * Generated from protobuf field <code>.google.logging.v2.BigQueryOptions bigquery_options = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Logging\V2\BigQueryOptions|null
     */
    public function getBigqueryOptions()
    {
        return $this->readOneof(12);
    }

    public function hasBigqueryOptions()
    {
        return $this->hasOneof(12);
    }

    /**
     * Optional. Options that affect sinks exporting data to BigQuery.
     *
     * Generated from protobuf field <code>.google.logging.v2.BigQueryOptions bigquery_options = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Logging\V2\BigQueryOptions $var
     * @return $this
     */
    public function setBigqueryOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Logging\V2\BigQueryOptions::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Output only. The creation timestamp of the sink.
     * This field may not be present for older sinks.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The creation timestamp of the sink.
     * This field may not be present for older sinks.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The last update timestamp of the sink.
     * This field may not be present for older sinks.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last update timestamp of the sink.
     * This field may not be present for older sinks.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOptions()
    {
        return $this->whichOneof("options");
    }

}

