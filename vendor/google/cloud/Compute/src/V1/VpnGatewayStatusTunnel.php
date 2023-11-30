<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains some information about a VPN tunnel.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.VpnGatewayStatusTunnel</code>
 */
class VpnGatewayStatusTunnel extends \Google\Protobuf\Internal\Message
{
    /**
     * The VPN gateway interface this VPN tunnel is associated with.
     *
     * Generated from protobuf field <code>optional uint32 local_gateway_interface = 158764330;</code>
     */
    private $local_gateway_interface = null;
    /**
     * The peer gateway interface this VPN tunnel is connected to, the peer gateway could either be an external VPN gateway or GCP VPN gateway.
     *
     * Generated from protobuf field <code>optional uint32 peer_gateway_interface = 214380385;</code>
     */
    private $peer_gateway_interface = null;
    /**
     * URL reference to the VPN tunnel.
     *
     * Generated from protobuf field <code>optional string tunnel_url = 78975256;</code>
     */
    private $tunnel_url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $local_gateway_interface
     *           The VPN gateway interface this VPN tunnel is associated with.
     *     @type int $peer_gateway_interface
     *           The peer gateway interface this VPN tunnel is connected to, the peer gateway could either be an external VPN gateway or GCP VPN gateway.
     *     @type string $tunnel_url
     *           URL reference to the VPN tunnel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The VPN gateway interface this VPN tunnel is associated with.
     *
     * Generated from protobuf field <code>optional uint32 local_gateway_interface = 158764330;</code>
     * @return int
     */
    public function getLocalGatewayInterface()
    {
        return isset($this->local_gateway_interface) ? $this->local_gateway_interface : 0;
    }

    public function hasLocalGatewayInterface()
    {
        return isset($this->local_gateway_interface);
    }

    public function clearLocalGatewayInterface()
    {
        unset($this->local_gateway_interface);
    }

    /**
     * The VPN gateway interface this VPN tunnel is associated with.
     *
     * Generated from protobuf field <code>optional uint32 local_gateway_interface = 158764330;</code>
     * @param int $var
     * @return $this
     */
    public function setLocalGatewayInterface($var)
    {
        GPBUtil::checkUint32($var);
        $this->local_gateway_interface = $var;

        return $this;
    }

    /**
     * The peer gateway interface this VPN tunnel is connected to, the peer gateway could either be an external VPN gateway or GCP VPN gateway.
     *
     * Generated from protobuf field <code>optional uint32 peer_gateway_interface = 214380385;</code>
     * @return int
     */
    public function getPeerGatewayInterface()
    {
        return isset($this->peer_gateway_interface) ? $this->peer_gateway_interface : 0;
    }

    public function hasPeerGatewayInterface()
    {
        return isset($this->peer_gateway_interface);
    }

    public function clearPeerGatewayInterface()
    {
        unset($this->peer_gateway_interface);
    }

    /**
     * The peer gateway interface this VPN tunnel is connected to, the peer gateway could either be an external VPN gateway or GCP VPN gateway.
     *
     * Generated from protobuf field <code>optional uint32 peer_gateway_interface = 214380385;</code>
     * @param int $var
     * @return $this
     */
    public function setPeerGatewayInterface($var)
    {
        GPBUtil::checkUint32($var);
        $this->peer_gateway_interface = $var;

        return $this;
    }

    /**
     * URL reference to the VPN tunnel.
     *
     * Generated from protobuf field <code>optional string tunnel_url = 78975256;</code>
     * @return string
     */
    public function getTunnelUrl()
    {
        return isset($this->tunnel_url) ? $this->tunnel_url : '';
    }

    public function hasTunnelUrl()
    {
        return isset($this->tunnel_url);
    }

    public function clearTunnelUrl()
    {
        unset($this->tunnel_url);
    }

    /**
     * URL reference to the VPN tunnel.
     *
     * Generated from protobuf field <code>optional string tunnel_url = 78975256;</code>
     * @param string $var
     * @return $this
     */
    public function setTunnelUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->tunnel_url = $var;

        return $this;
    }

}

