<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace GPBMetadata\Google\Cloud\Dataform\V1Beta1;

class Dataform
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Type\Interval::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
,google/cloud/dataform/v1beta1/dataform.protogoogle.cloud.dataform.v1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/type/interval.proto"�

Repository
name (	B�A]
git_remote_settings (2;.google.cloud.dataform.v1beta1.Repository.GitRemoteSettingsB�A�
GitRemoteSettings
url (	B�A
default_branch (	B�A_
#authentication_token_secret_version (	B2�A�A,
*secretmanager.googleapis.com/SecretVersionb
token_status (2G.google.cloud.dataform.v1beta1.Repository.GitRemoteSettings.TokenStatusB�A"R
TokenStatus
TOKEN_STATUS_UNSPECIFIED 
	NOT_FOUND
INVALID	
VALID:j�Ag
"dataform.googleapis.com/RepositoryAprojects/{project}/locations/{location}/repositories/{repository}"�
ListRepositoriesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
order_by (	B�A
filter (	B�A"�
ListRepositoriesResponse?
repositories (2).google.cloud.dataform.v1beta1.Repository
next_page_token (	
unreachable (	"P
GetRepositoryRequest8
name (	B*�A�A$
"dataform.googleapis.com/Repository"�
CreateRepositoryRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationB

repository (2).google.cloud.dataform.v1beta1.RepositoryB�A
repository_id (	B�A"�
UpdateRepositoryRequest4
update_mask (2.google.protobuf.FieldMaskB�AB

repository (2).google.cloud.dataform.v1beta1.RepositoryB�A"b
DeleteRepositoryRequest8
name (	B*�A�A$
"dataform.googleapis.com/Repository
force ("V
FetchRemoteBranchesRequest8
name (	B*�A�A$
"dataform.googleapis.com/Repository"/
FetchRemoteBranchesResponse
branches (	"�
	Workspace
name (	B�A:��A}
!dataform.googleapis.com/WorkspaceXprojects/{project}/locations/{location}/repositories/{repository}/workspaces/{workspace}"�
ListWorkspacesRequest:
parent (	B*�A�A$
"dataform.googleapis.com/Repository
	page_size (B�A

page_token (	B�A
order_by (	B�A
filter (	B�A"�
ListWorkspacesResponse<

workspaces (2(.google.cloud.dataform.v1beta1.Workspace
next_page_token (	
unreachable (	"N
GetWorkspaceRequest7
name (	B)�A�A#
!dataform.googleapis.com/Workspace"�
CreateWorkspaceRequest:
parent (	B*�A�A$
"dataform.googleapis.com/Repository@
	workspace (2(.google.cloud.dataform.v1beta1.WorkspaceB�A
workspace_id (	B�A"Q
DeleteWorkspaceRequest7
name (	B)�A�A#
!dataform.googleapis.com/Workspace"=
CommitAuthor
name (	B�A
email_address (	B�A"�
PullGitCommitsRequest7
name (	B)�A�A#
!dataform.googleapis.com/Workspace
remote_branch (	B�A@
author (2+.google.cloud.dataform.v1beta1.CommitAuthorB�A"l
PushGitCommitsRequest7
name (	B)�A�A#
!dataform.googleapis.com/Workspace
remote_branch (	B�A"V
FetchFileGitStatusesRequest7
name (	B)�A�A#
!dataform.googleapis.com/Workspace"�
FetchFileGitStatusesResponses
uncommitted_file_changes (2Q.google.cloud.dataform.v1beta1.FetchFileGitStatusesResponse.UncommittedFileChange�
UncommittedFileChange
path (	f
state (2W.google.cloud.dataform.v1beta1.FetchFileGitStatusesResponse.UncommittedFileChange.State"W
State
STATE_UNSPECIFIED 	
ADDED
DELETED
MODIFIED
HAS_CONFLICTS"q
FetchGitAheadBehindRequest7
name (	B)�A�A#
!dataform.googleapis.com/Workspace
remote_branch (	B�A"L
FetchGitAheadBehindResponse
commits_ahead (
commits_behind ("�
CommitWorkspaceChangesRequest7
name (	B)�A�A#
!dataform.googleapis.com/Workspace@
author (2+.google.cloud.dataform.v1beta1.CommitAuthorB�A
commit_message (	B�A
paths (	B�A"
ResetWorkspaceChangesRequest7
name (	B)�A�A#
!dataform.googleapis.com/Workspace
paths (	B�A
clean (B�A"g
FetchFileDiffRequest<
	workspace (	B)�A�A#
!dataform.googleapis.com/Workspace
path (	B�A"/
FetchFileDiffResponse
formatted_diff (	"�
QueryDirectoryContentsRequest<
	workspace (	B)�A�A#
!dataform.googleapis.com/Workspace
path (	B�A
	page_size (B�A

page_token (	B�A"�
QueryDirectoryContentsResponseg
directory_entries (2L.google.cloud.dataform.v1beta1.QueryDirectoryContentsResponse.DirectoryEntry
next_page_token (	>
DirectoryEntry
file (	H 
	directory (	H B
entry"g
MakeDirectoryRequest<
	workspace (	B)�A�A#
!dataform.googleapis.com/Workspace
path (	B�A"
MakeDirectoryResponse"i
RemoveDirectoryRequest<
	workspace (	B)�A�A#
!dataform.googleapis.com/Workspace
path (	B�A"~
MoveDirectoryRequest<
	workspace (	B)�A�A#
!dataform.googleapis.com/Workspace
path (	B�A
new_path (	B�A"
MoveDirectoryResponse"b
ReadFileRequest<
	workspace (	B)�A�A#
!dataform.googleapis.com/Workspace
path (	B�A")
ReadFileResponse
file_contents ("d
RemoveFileRequest<
	workspace (	B)�A�A#
!dataform.googleapis.com/Workspace
path (	B�A"y
MoveFileRequest<
	workspace (	B)�A�A#
!dataform.googleapis.com/Workspace
path (	B�A
new_path (	B�A"
MoveFileResponse"z
WriteFileRequest<
	workspace (	B)�A�A#
!dataform.googleapis.com/Workspace
path (	B�A
contents (B�A"
WriteFileResponse"Y
InstallNpmPackagesRequest<
	workspace (	B)�A�A#
!dataform.googleapis.com/Workspace"
InstallNpmPackagesResponse"�
CompilationResult
name (	B�A
git_commitish (	B�AH >
	workspace (	B)�A�A#
!dataform.googleapis.com/WorkspaceH l
code_compilation_config (2F.google.cloud.dataform.v1beta1.CompilationResult.CodeCompilationConfigB�A"
dataform_core_version (	B�Ab
compilation_errors (2A.google.cloud.dataform.v1beta1.CompilationResult.CompilationErrorB�A�
CodeCompilationConfig
default_database (	B�A
default_schema (	B�A
default_location (	B�A
assertion_schema (	B�Ac
vars (2P.google.cloud.dataform.v1beta1.CompilationResult.CodeCompilationConfig.VarsEntryB�A
database_suffix (	B�A
schema_suffix (	B�A
table_prefix (	B�A+
	VarsEntry
key (	
value (	:8�
CompilationError
message (	B�A
stack (	B�A
path (	B�AA
action_target (2%.google.cloud.dataform.v1beta1.TargetB�A:��A�
)dataform.googleapis.com/CompilationResultiprojects/{project}/locations/{location}/repositories/{repository}/compilationResults/{compilation_result}B
source"�
ListCompilationResultsRequest:
parent (	B*�A�A$
"dataform.googleapis.com/Repository
	page_size (B�A

page_token (	B�A"�
ListCompilationResultsResponseM
compilation_results (20.google.cloud.dataform.v1beta1.CompilationResult
next_page_token (	
unreachable (	"^
GetCompilationResultRequest?
name (	B1�A�A+
)dataform.googleapis.com/CompilationResult"�
CreateCompilationResultRequest:
parent (	B*�A�A$
"dataform.googleapis.com/RepositoryQ
compilation_result (20.google.cloud.dataform.v1beta1.CompilationResultB�A"8
Target
database (	
schema (	
name (	"�
RelationDescriptor
description (	S
columns (2B.google.cloud.dataform.v1beta1.RelationDescriptor.ColumnDescriptor^
bigquery_labels (2E.google.cloud.dataform.v1beta1.RelationDescriptor.BigqueryLabelsEntryS
ColumnDescriptor
path (	
description (	
bigquery_policy_tags (	5
BigqueryLabelsEntry
key (	
value (	:8"�
CompilationResultAction5
target (2%.google.cloud.dataform.v1beta1.Target?
canonical_target (2%.google.cloud.dataform.v1beta1.Target
	file_path (	S
relation (2?.google.cloud.dataform.v1beta1.CompilationResultAction.RelationH W

operations (2A.google.cloud.dataform.v1beta1.CompilationResultAction.OperationsH U
	assertion (2@.google.cloud.dataform.v1beta1.CompilationResultAction.AssertionH Y
declaration (2B.google.cloud.dataform.v1beta1.CompilationResultAction.DeclarationH �
RelationA
dependency_targets (2%.google.cloud.dataform.v1beta1.Target
disabled (
tags (	N
relation_descriptor (21.google.cloud.dataform.v1beta1.RelationDescriptorc
relation_type (2L.google.cloud.dataform.v1beta1.CompilationResultAction.Relation.RelationType
select_query (	
pre_operations (	
post_operations (	x
incremental_table_config	 (2V.google.cloud.dataform.v1beta1.CompilationResultAction.Relation.IncrementalTableConfig
partition_expression
 (	
cluster_expressions (	!
partition_expiration_days ( 
require_partition_filter (r
additional_options (2V.google.cloud.dataform.v1beta1.CompilationResultAction.Relation.AdditionalOptionsEntry�
IncrementalTableConfig 
incremental_select_query (	
refresh_disabled (
unique_key_parts (	
update_partition_filter (	"
incremental_pre_operations (	#
incremental_post_operations (	8
AdditionalOptionsEntry
key (	
value (	:8"p
RelationType
RELATION_TYPE_UNSPECIFIED 	
TABLE
VIEW
INCREMENTAL_TABLE
MATERIALIZED_VIEW�

OperationsA
dependency_targets (2%.google.cloud.dataform.v1beta1.Target
disabled (
tags (	N
relation_descriptor (21.google.cloud.dataform.v1beta1.RelationDescriptor
queries (	

has_output (�
	AssertionA
dependency_targets (2%.google.cloud.dataform.v1beta1.Target<
parent_action (2%.google.cloud.dataform.v1beta1.Target
disabled (
tags (	
select_query (	N
relation_descriptor (21.google.cloud.dataform.v1beta1.RelationDescriptor]
DeclarationN
relation_descriptor (21.google.cloud.dataform.v1beta1.RelationDescriptorB
compiled_object"�
$QueryCompilationResultActionsRequest?
name (	B1�A�A+
)dataform.googleapis.com/CompilationResult
	page_size (B�A

page_token (	B�A
filter (	B�A"�
%QueryCompilationResultActionsResponseZ
compilation_result_actions (26.google.cloud.dataform.v1beta1.CompilationResultAction
next_page_token (	"�
WorkflowInvocation
name (	B�AM
compilation_result (	B1�A�A+
)dataform.googleapis.com/CompilationResultb
invocation_config (2B.google.cloud.dataform.v1beta1.WorkflowInvocation.InvocationConfigB�AK
state (27.google.cloud.dataform.v1beta1.WorkflowInvocation.StateB�A5
invocation_timing (2.google.type.IntervalB�A�
InvocationConfigD
included_targets (2%.google.cloud.dataform.v1beta1.TargetB�A
included_tags (	B�A-
 transitive_dependencies_included (B�A+
transitive_dependents_included (B�A5
(fully_refresh_incremental_tables_enabled (B�A"d
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED
	CANCELLED

FAILED
	CANCELING:��A�
*dataform.googleapis.com/WorkflowInvocationkprojects/{project}/locations/{location}/repositories/{repository}/workflowInvocations/{workflow_invocation}"�
ListWorkflowInvocationsRequest:
parent (	B*�A�A$
"dataform.googleapis.com/Repository
	page_size (B�A

page_token (	B�A"�
ListWorkflowInvocationsResponseO
workflow_invocations (21.google.cloud.dataform.v1beta1.WorkflowInvocation
next_page_token (	
unreachable (	"`
GetWorkflowInvocationRequest@
name (	B2�A�A,
*dataform.googleapis.com/WorkflowInvocation"�
CreateWorkflowInvocationRequest:
parent (	B*�A�A$
"dataform.googleapis.com/RepositoryS
workflow_invocation (21.google.cloud.dataform.v1beta1.WorkflowInvocationB�A"c
DeleteWorkflowInvocationRequest@
name (	B2�A�A,
*dataform.googleapis.com/WorkflowInvocation"c
CancelWorkflowInvocationRequest@
name (	B2�A�A,
*dataform.googleapis.com/WorkflowInvocation"�
WorkflowInvocationAction:
target (2%.google.cloud.dataform.v1beta1.TargetB�AD
canonical_target (2%.google.cloud.dataform.v1beta1.TargetB�AQ
state (2=.google.cloud.dataform.v1beta1.WorkflowInvocationAction.StateB�A
failure_reason (	B�A5
invocation_timing (2.google.type.IntervalB�Ad
bigquery_action (2F.google.cloud.dataform.v1beta1.WorkflowInvocationAction.BigQueryActionB�A)
BigQueryAction

sql_script (	B�A"f
State
PENDING 
RUNNING
SKIPPED
DISABLED
	SUCCEEDED
	CANCELLED

FAILED"�
%QueryWorkflowInvocationActionsRequest@
name (	B2�A�A,
*dataform.googleapis.com/WorkflowInvocation
	page_size (B�A

page_token (	B�A"�
&QueryWorkflowInvocationActionsResponse\\
workflow_invocation_actions (27.google.cloud.dataform.v1beta1.WorkflowInvocationAction
next_page_token (	2�>
Dataform�
ListRepositories6.google.cloud.dataform.v1beta1.ListRepositoriesRequest7.google.cloud.dataform.v1beta1.ListRepositoriesResponse"F���75/v1beta1/{parent=projects/*/locations/*}/repositories�Aparent�
GetRepository3.google.cloud.dataform.v1beta1.GetRepositoryRequest).google.cloud.dataform.v1beta1.Repository"D���75/v1beta1/{name=projects/*/locations/*/repositories/*}�Aname�
CreateRepository6.google.cloud.dataform.v1beta1.CreateRepositoryRequest).google.cloud.dataform.v1beta1.Repository"k���C"5/v1beta1/{parent=projects/*/locations/*}/repositories:
repository�Aparent,repository,repository_id�
UpdateRepository6.google.cloud.dataform.v1beta1.UpdateRepositoryRequest).google.cloud.dataform.v1beta1.Repository"m���N2@/v1beta1/{repository.name=projects/*/locations/*/repositories/*}:
repository�Arepository,update_mask�
DeleteRepository6.google.cloud.dataform.v1beta1.DeleteRepositoryRequest.google.protobuf.Empty"D���7*5/v1beta1/{name=projects/*/locations/*/repositories/*}�Aname�
FetchRemoteBranches9.google.cloud.dataform.v1beta1.FetchRemoteBranchesRequest:.google.cloud.dataform.v1beta1.FetchRemoteBranchesResponse"Q���KI/v1beta1/{name=projects/*/locations/*/repositories/*}:fetchRemoteBranches�
ListWorkspaces4.google.cloud.dataform.v1beta1.ListWorkspacesRequest5.google.cloud.dataform.v1beta1.ListWorkspacesResponse"S���DB/v1beta1/{parent=projects/*/locations/*/repositories/*}/workspaces�Aparent�
GetWorkspace2.google.cloud.dataform.v1beta1.GetWorkspaceRequest(.google.cloud.dataform.v1beta1.Workspace"Q���DB/v1beta1/{name=projects/*/locations/*/repositories/*/workspaces/*}�Aname�
CreateWorkspace5.google.cloud.dataform.v1beta1.CreateWorkspaceRequest(.google.cloud.dataform.v1beta1.Workspace"u���O"B/v1beta1/{parent=projects/*/locations/*/repositories/*}/workspaces:	workspace�Aparent,workspace,workspace_id�
DeleteWorkspace5.google.cloud.dataform.v1beta1.DeleteWorkspaceRequest.google.protobuf.Empty"Q���D*B/v1beta1/{name=projects/*/locations/*/repositories/*/workspaces/*}�Aname�
InstallNpmPackages8.google.cloud.dataform.v1beta1.InstallNpmPackagesRequest9.google.cloud.dataform.v1beta1.InstallNpmPackagesResponse"e���_"Z/v1beta1/{workspace=projects/*/locations/*/repositories/*/workspaces/*}:installNpmPackages:*�
PullGitCommits4.google.cloud.dataform.v1beta1.PullGitCommitsRequest.google.protobuf.Empty"R���L"G/v1beta1/{name=projects/*/locations/*/repositories/*/workspaces/*}:pull:*�
PushGitCommits4.google.cloud.dataform.v1beta1.PushGitCommitsRequest.google.protobuf.Empty"R���L"G/v1beta1/{name=projects/*/locations/*/repositories/*/workspaces/*}:push:*�
FetchFileGitStatuses:.google.cloud.dataform.v1beta1.FetchFileGitStatusesRequest;.google.cloud.dataform.v1beta1.FetchFileGitStatusesResponse"_���YW/v1beta1/{name=projects/*/locations/*/repositories/*/workspaces/*}:fetchFileGitStatuses�
FetchGitAheadBehind9.google.cloud.dataform.v1beta1.FetchGitAheadBehindRequest:.google.cloud.dataform.v1beta1.FetchGitAheadBehindResponse"^���XV/v1beta1/{name=projects/*/locations/*/repositories/*/workspaces/*}:fetchGitAheadBehind�
CommitWorkspaceChanges<.google.cloud.dataform.v1beta1.CommitWorkspaceChangesRequest.google.protobuf.Empty"T���N"I/v1beta1/{name=projects/*/locations/*/repositories/*/workspaces/*}:commit:*�
ResetWorkspaceChanges;.google.cloud.dataform.v1beta1.ResetWorkspaceChangesRequest.google.protobuf.Empty"S���M"H/v1beta1/{name=projects/*/locations/*/repositories/*/workspaces/*}:reset:*�
FetchFileDiff3.google.cloud.dataform.v1beta1.FetchFileDiffRequest4.google.cloud.dataform.v1beta1.FetchFileDiffResponse"]���WU/v1beta1/{workspace=projects/*/locations/*/repositories/*/workspaces/*}:fetchFileDiff�
QueryDirectoryContents<.google.cloud.dataform.v1beta1.QueryDirectoryContentsRequest=.google.cloud.dataform.v1beta1.QueryDirectoryContentsResponse"f���`^/v1beta1/{workspace=projects/*/locations/*/repositories/*/workspaces/*}:queryDirectoryContents�
MakeDirectory3.google.cloud.dataform.v1beta1.MakeDirectoryRequest4.google.cloud.dataform.v1beta1.MakeDirectoryResponse"`���Z"U/v1beta1/{workspace=projects/*/locations/*/repositories/*/workspaces/*}:makeDirectory:*�
RemoveDirectory5.google.cloud.dataform.v1beta1.RemoveDirectoryRequest.google.protobuf.Empty"b���\\"W/v1beta1/{workspace=projects/*/locations/*/repositories/*/workspaces/*}:removeDirectory:*�
MoveDirectory3.google.cloud.dataform.v1beta1.MoveDirectoryRequest4.google.cloud.dataform.v1beta1.MoveDirectoryResponse"`���Z"U/v1beta1/{workspace=projects/*/locations/*/repositories/*/workspaces/*}:moveDirectory:*�
ReadFile..google.cloud.dataform.v1beta1.ReadFileRequest/.google.cloud.dataform.v1beta1.ReadFileResponse"X���RP/v1beta1/{workspace=projects/*/locations/*/repositories/*/workspaces/*}:readFile�

RemoveFile0.google.cloud.dataform.v1beta1.RemoveFileRequest.google.protobuf.Empty"]���W"R/v1beta1/{workspace=projects/*/locations/*/repositories/*/workspaces/*}:removeFile:*�
MoveFile..google.cloud.dataform.v1beta1.MoveFileRequest/.google.cloud.dataform.v1beta1.MoveFileResponse"[���U"P/v1beta1/{workspace=projects/*/locations/*/repositories/*/workspaces/*}:moveFile:*�
	WriteFile/.google.cloud.dataform.v1beta1.WriteFileRequest0.google.cloud.dataform.v1beta1.WriteFileResponse"\\���V"Q/v1beta1/{workspace=projects/*/locations/*/repositories/*/workspaces/*}:writeFile:*�
ListCompilationResults<.google.cloud.dataform.v1beta1.ListCompilationResultsRequest=.google.cloud.dataform.v1beta1.ListCompilationResultsResponse"[���LJ/v1beta1/{parent=projects/*/locations/*/repositories/*}/compilationResults�Aparent�
GetCompilationResult:.google.cloud.dataform.v1beta1.GetCompilationResultRequest0.google.cloud.dataform.v1beta1.CompilationResult"Y���LJ/v1beta1/{name=projects/*/locations/*/repositories/*/compilationResults/*}�Aname�
CreateCompilationResult=.google.cloud.dataform.v1beta1.CreateCompilationResultRequest0.google.cloud.dataform.v1beta1.CompilationResult"����`"J/v1beta1/{parent=projects/*/locations/*/repositories/*}/compilationResults:compilation_result�Aparent,compilation_result�
QueryCompilationResultActionsC.google.cloud.dataform.v1beta1.QueryCompilationResultActionsRequestD.google.cloud.dataform.v1beta1.QueryCompilationResultActionsResponse"X���RP/v1beta1/{name=projects/*/locations/*/repositories/*/compilationResults/*}:query�
ListWorkflowInvocations=.google.cloud.dataform.v1beta1.ListWorkflowInvocationsRequest>.google.cloud.dataform.v1beta1.ListWorkflowInvocationsResponse"\\���MK/v1beta1/{parent=projects/*/locations/*/repositories/*}/workflowInvocations�Aparent�
GetWorkflowInvocation;.google.cloud.dataform.v1beta1.GetWorkflowInvocationRequest1.google.cloud.dataform.v1beta1.WorkflowInvocation"Z���MK/v1beta1/{name=projects/*/locations/*/repositories/*/workflowInvocations/*}�Aname�
CreateWorkflowInvocation>.google.cloud.dataform.v1beta1.CreateWorkflowInvocationRequest1.google.cloud.dataform.v1beta1.WorkflowInvocation"����b"K/v1beta1/{parent=projects/*/locations/*/repositories/*}/workflowInvocations:workflow_invocation�Aparent,workflow_invocation�
DeleteWorkflowInvocation>.google.cloud.dataform.v1beta1.DeleteWorkflowInvocationRequest.google.protobuf.Empty"Z���M*K/v1beta1/{name=projects/*/locations/*/repositories/*/workflowInvocations/*}�Aname�
CancelWorkflowInvocation>.google.cloud.dataform.v1beta1.CancelWorkflowInvocationRequest.google.protobuf.Empty"]���W"R/v1beta1/{name=projects/*/locations/*/repositories/*/workflowInvocations/*}:cancel:*�
QueryWorkflowInvocationActionsD.google.cloud.dataform.v1beta1.QueryWorkflowInvocationActionsRequestE.google.cloud.dataform.v1beta1.QueryWorkflowInvocationActionsResponse"Y���SQ/v1beta1/{name=projects/*/locations/*/repositories/*/workflowInvocations/*}:queryK�Adataform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.dataform.v1beta1BDataformProtoPZ=cloud.google.com/go/dataform/apiv1beta1/dataformpb;dataformpb�Google.Cloud.Dataform.V1Beta1�Google\\Cloud\\Dataform\\V1beta1� Google::Cloud::Dataform::V1beta1�Ad
*secretmanager.googleapis.com/SecretVersion6projects/{project}/secrets/{secret}/versions/{version}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

