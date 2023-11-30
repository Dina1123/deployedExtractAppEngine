<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/company.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class Company
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/cloud/talent/v4beta1/company.protogoogle.cloud.talent.v4beta1google/api/resource.proto(google/cloud/talent/v4beta1/common.proto"�
Company
name (	
display_name (	B�A
external_id (	B�A6
size (2(.google.cloud.talent.v4beta1.CompanySize
headquarters_address (	

eeo_text (	
website_uri (	
career_site_uri	 (	
	image_uri
 (	4
(keyword_searchable_job_custom_attributes (	BK
derived_info (20.google.cloud.talent.v4beta1.Company.DerivedInfoB�A
	suspended
DerivedInfoD
headquarters_location (2%.google.cloud.talent.v4beta1.Location:��A~
jobs.googleapis.com/Company7projects/{project}/tenants/{tenant}/companies/{company}&projects/{project}/companies/{company}Bx
com.google.cloud.talent.v4beta1BCompanyResourceProtoPZ7cloud.google.com/go/talent/apiv4beta1/talentpb;talentpb�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}
