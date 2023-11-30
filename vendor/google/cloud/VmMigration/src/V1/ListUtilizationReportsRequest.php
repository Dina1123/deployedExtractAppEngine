<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'ListUtilizationReports' request.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.ListUtilizationReportsRequest</code>
 */
class ListUtilizationReportsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Utilization Reports parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The level of details of each report.
     * Defaults to BASIC.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReportView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $view = 0;
    /**
     * Optional. The maximum number of reports to return. The service may return
     * fewer than this value. If unspecified, at most 500 reports will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Required. A page token, received from a previous `ListUtilizationReports`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListUtilizationReports`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $page_token = '';
    /**
     * Optional. The filter request.
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. the order by fields for the result.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The Utilization Reports parent.
     *     @type int $view
     *           Optional. The level of details of each report.
     *           Defaults to BASIC.
     *     @type int $page_size
     *           Optional. The maximum number of reports to return. The service may return
     *           fewer than this value. If unspecified, at most 500 reports will be
     *           returned. The maximum value is 1000; values above 1000 will be coerced to
     *           1000.
     *     @type string $page_token
     *           Required. A page token, received from a previous `ListUtilizationReports`
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListUtilizationReports`
     *           must match the call that provided the page token.
     *     @type string $filter
     *           Optional. The filter request.
     *     @type string $order_by
     *           Optional. the order by fields for the result.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Utilization Reports parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The Utilization Reports parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The level of details of each report.
     * Defaults to BASIC.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReportView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. The level of details of each report.
     * Defaults to BASIC.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReportView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\UtilizationReportView::class);
        $this->view = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of reports to return. The service may return
     * fewer than this value. If unspecified, at most 500 reports will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of reports to return. The service may return
     * fewer than this value. If unspecified, at most 500 reports will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Required. A page token, received from a previous `ListUtilizationReports`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListUtilizationReports`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Required. A page token, received from a previous `ListUtilizationReports`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListUtilizationReports`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The filter request.
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The filter request.
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
     * Optional. the order by fields for the result.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. the order by fields for the result.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

