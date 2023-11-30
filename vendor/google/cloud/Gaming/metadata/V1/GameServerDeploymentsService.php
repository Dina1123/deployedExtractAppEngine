<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_deployments_service.proto

namespace GPBMetadata\Google\Cloud\Gaming\V1;

class GameServerDeploymentsService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerDeployments::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/cloud/gaming/v1/game_server_deployments_service.protogoogle.cloud.gaming.v1google/api/client.proto4google/cloud/gaming/v1/game_server_deployments.proto#google/longrunning/operations.proto2�
GameServerDeploymentsService�
ListGameServerDeployments8.google.cloud.gaming.v1.ListGameServerDeploymentsRequest9.google.cloud.gaming.v1.ListGameServerDeploymentsResponse"J���;9/v1/{parent=projects/*/locations/*}/gameServerDeployments�Aparent�
GetGameServerDeployment6.google.cloud.gaming.v1.GetGameServerDeploymentRequest,.google.cloud.gaming.v1.GameServerDeployment"H���;9/v1/{name=projects/*/locations/*/gameServerDeployments/*}�Aname�
CreateGameServerDeployment9.google.cloud.gaming.v1.CreateGameServerDeploymentRequest.google.longrunning.Operation"����S"9/v1/{parent=projects/*/locations/*}/gameServerDeployments:game_server_deployment�Aparent,game_server_deployment�A)
GameServerDeploymentOperationMetadata�
DeleteGameServerDeployment9.google.cloud.gaming.v1.DeleteGameServerDeploymentRequest.google.longrunning.Operation"u���;*9/v1/{name=projects/*/locations/*/gameServerDeployments/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
UpdateGameServerDeployment9.google.cloud.gaming.v1.UpdateGameServerDeploymentRequest.google.longrunning.Operation"����j2P/v1/{game_server_deployment.name=projects/*/locations/*/gameServerDeployments/*}:game_server_deployment�A"game_server_deployment,update_mask�A)
GameServerDeploymentOperationMetadata�
GetGameServerDeploymentRollout=.google.cloud.gaming.v1.GetGameServerDeploymentRolloutRequest3.google.cloud.gaming.v1.GameServerDeploymentRollout"P���CA/v1/{name=projects/*/locations/*/gameServerDeployments/*}/rollout�Aname�
!UpdateGameServerDeploymentRollout@.google.cloud.gaming.v1.UpdateGameServerDeploymentRolloutRequest.google.longrunning.Operation"����T2I/v1/{rollout.name=projects/*/locations/*/gameServerDeployments/*}/rollout:rollout�Arollout,update_mask�A)
GameServerDeploymentOperationMetadata�
"PreviewGameServerDeploymentRolloutA.google.cloud.gaming.v1.PreviewGameServerDeploymentRolloutRequestB.google.cloud.gaming.v1.PreviewGameServerDeploymentRolloutResponse"b���\\2Q/v1/{rollout.name=projects/*/locations/*/gameServerDeployments/*}/rollout:preview:rollout�
FetchDeploymentState3.google.cloud.gaming.v1.FetchDeploymentStateRequest4.google.cloud.gaming.v1.FetchDeploymentStateResponse"Y���S"N/v1/{name=projects/*/locations/*/gameServerDeployments/*}:fetchDeploymentState:*O�Agameservices.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBR
com.google.cloud.gaming.v1PZ2cloud.google.com/go/gaming/apiv1/gamingpb;gamingpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

