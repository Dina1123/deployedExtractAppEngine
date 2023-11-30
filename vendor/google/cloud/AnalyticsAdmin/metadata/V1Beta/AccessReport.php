<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/access_report.proto

namespace GPBMetadata\Google\Analytics\Admin\V1Beta;

class AccessReport
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
1google/analytics/admin/v1beta/access_report.protogoogle.analytics.admin.v1beta")
AccessDimension
dimension_name (	"#
AccessMetric
metric_name (	"7
AccessDateRange

start_date (	
end_date (	"�
AccessFilterExpressionN
	and_group (29.google.analytics.admin.v1beta.AccessFilterExpressionListH M
or_group (29.google.analytics.admin.v1beta.AccessFilterExpressionListH O
not_expression (25.google.analytics.admin.v1beta.AccessFilterExpressionH D
access_filter (2+.google.analytics.admin.v1beta.AccessFilterH B
one_expression"h
AccessFilterExpressionListJ
expressions (25.google.analytics.admin.v1beta.AccessFilterExpression"�
AccessFilterJ
string_filter (21.google.analytics.admin.v1beta.AccessStringFilterH K
in_list_filter (21.google.analytics.admin.v1beta.AccessInListFilterH L
numeric_filter (22.google.analytics.admin.v1beta.AccessNumericFilterH L
between_filter (22.google.analytics.admin.v1beta.AccessBetweenFilterH 

field_name (	B

one_filter"�
AccessStringFilterO

match_type (2;.google.analytics.admin.v1beta.AccessStringFilter.MatchType
value (	
case_sensitive ("�
	MatchType
MATCH_TYPE_UNSPECIFIED 	
EXACT
BEGINS_WITH
	ENDS_WITH
CONTAINS
FULL_REGEXP
PARTIAL_REGEXP"<
AccessInListFilter
values (	
case_sensitive ("�
AccessNumericFilterO
	operation (2<.google.analytics.admin.v1beta.AccessNumericFilter.Operation:
value (2+.google.analytics.admin.v1beta.NumericValue"�
	Operation
OPERATION_UNSPECIFIED 	
EQUAL
	LESS_THAN
LESS_THAN_OR_EQUAL
GREATER_THAN
GREATER_THAN_OR_EQUAL"�
AccessBetweenFilter?

from_value (2+.google.analytics.admin.v1beta.NumericValue=
to_value (2+.google.analytics.admin.v1beta.NumericValue"J
NumericValue
int64_value (H 
double_value (H B
	one_value"�
AccessOrderByL
metric (2:.google.analytics.admin.v1beta.AccessOrderBy.MetricOrderByH R
	dimension (2=.google.analytics.admin.v1beta.AccessOrderBy.DimensionOrderByH 
desc ($
MetricOrderBy
metric_name (	�
DimensionOrderBy
dimension_name (	[

order_type (2G.google.analytics.admin.v1beta.AccessOrderBy.DimensionOrderBy.OrderType"i
	OrderType
ORDER_TYPE_UNSPECIFIED 
ALPHANUMERIC!
CASE_INSENSITIVE_ALPHANUMERIC
NUMERICB
one_order_by"/
AccessDimensionHeader
dimension_name (	")
AccessMetricHeader
metric_name (	"�
	AccessRowM
dimension_values (23.google.analytics.admin.v1beta.AccessDimensionValueG
metric_values (20.google.analytics.admin.v1beta.AccessMetricValue"%
AccessDimensionValue
value (	""
AccessMetricValue
value (	"�
AccessQuotaH
tokens_per_day (20.google.analytics.admin.v1beta.AccessQuotaStatusI
tokens_per_hour (20.google.analytics.admin.v1beta.AccessQuotaStatusM
concurrent_requests (20.google.analytics.admin.v1beta.AccessQuotaStatus\\
"server_errors_per_project_per_hour (20.google.analytics.admin.v1beta.AccessQuotaStatusU
tokens_per_project_per_hour (20.google.analytics.admin.v1beta.AccessQuotaStatus"8
AccessQuotaStatus
consumed (
	remaining (B|
!com.google.analytics.admin.v1betaBAccessReportProtoPZBgoogle.golang.org/genproto/googleapis/analytics/admin/v1beta;adminbproto3'
        , true);

        static::$is_initialized = true;
    }
}

