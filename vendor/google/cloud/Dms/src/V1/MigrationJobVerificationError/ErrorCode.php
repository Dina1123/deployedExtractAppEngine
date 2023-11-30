<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1\MigrationJobVerificationError;

use UnexpectedValueException;

/**
 * A general error code describing the type of error that occurred.
 *
 * Protobuf type <code>google.cloud.clouddms.v1.MigrationJobVerificationError.ErrorCode</code>
 */
class ErrorCode
{
    /**
     * An unknown error occurred
     *
     * Generated from protobuf enum <code>ERROR_CODE_UNSPECIFIED = 0;</code>
     */
    const ERROR_CODE_UNSPECIFIED = 0;
    /**
     * We failed to connect to one of the connection profile.
     *
     * Generated from protobuf enum <code>CONNECTION_FAILURE = 1;</code>
     */
    const CONNECTION_FAILURE = 1;
    /**
     * We failed to authenticate to one of the connection profile.
     *
     * Generated from protobuf enum <code>AUTHENTICATION_FAILURE = 2;</code>
     */
    const AUTHENTICATION_FAILURE = 2;
    /**
     * One of the involved connection profiles has an invalid configuration.
     *
     * Generated from protobuf enum <code>INVALID_CONNECTION_PROFILE_CONFIG = 3;</code>
     */
    const INVALID_CONNECTION_PROFILE_CONFIG = 3;
    /**
     * The versions of the source and the destination are incompatible.
     *
     * Generated from protobuf enum <code>VERSION_INCOMPATIBILITY = 4;</code>
     */
    const VERSION_INCOMPATIBILITY = 4;
    /**
     * The types of the source and the destination are incompatible.
     *
     * Generated from protobuf enum <code>CONNECTION_PROFILE_TYPES_INCOMPATIBILITY = 5;</code>
     */
    const CONNECTION_PROFILE_TYPES_INCOMPATIBILITY = 5;
    /**
     * No pglogical extension installed on databases, applicable for postgres.
     *
     * Generated from protobuf enum <code>NO_PGLOGICAL_INSTALLED = 7;</code>
     */
    const NO_PGLOGICAL_INSTALLED = 7;
    /**
     * pglogical node already exists on databases, applicable for postgres.
     *
     * Generated from protobuf enum <code>PGLOGICAL_NODE_ALREADY_EXISTS = 8;</code>
     */
    const PGLOGICAL_NODE_ALREADY_EXISTS = 8;
    /**
     * The value of parameter wal_level is not set to logical.
     *
     * Generated from protobuf enum <code>INVALID_WAL_LEVEL = 9;</code>
     */
    const INVALID_WAL_LEVEL = 9;
    /**
     * The value of parameter shared_preload_libraries does not include
     * pglogical.
     *
     * Generated from protobuf enum <code>INVALID_SHARED_PRELOAD_LIBRARY = 10;</code>
     */
    const INVALID_SHARED_PRELOAD_LIBRARY = 10;
    /**
     * The value of parameter max_replication_slots is not sufficient.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_MAX_REPLICATION_SLOTS = 11;</code>
     */
    const INSUFFICIENT_MAX_REPLICATION_SLOTS = 11;
    /**
     * The value of parameter max_wal_senders is not sufficient.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_MAX_WAL_SENDERS = 12;</code>
     */
    const INSUFFICIENT_MAX_WAL_SENDERS = 12;
    /**
     * The value of parameter max_worker_processes is not sufficient.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_MAX_WORKER_PROCESSES = 13;</code>
     */
    const INSUFFICIENT_MAX_WORKER_PROCESSES = 13;
    /**
     * Extensions installed are either not supported or having unsupported
     * versions.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_EXTENSIONS = 14;</code>
     */
    const UNSUPPORTED_EXTENSIONS = 14;
    /**
     * Unsupported migration type.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_MIGRATION_TYPE = 15;</code>
     */
    const UNSUPPORTED_MIGRATION_TYPE = 15;
    /**
     * Invalid RDS logical replication.
     *
     * Generated from protobuf enum <code>INVALID_RDS_LOGICAL_REPLICATION = 16;</code>
     */
    const INVALID_RDS_LOGICAL_REPLICATION = 16;
    /**
     * The gtid_mode is not supported, applicable for MySQL.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_GTID_MODE = 17;</code>
     */
    const UNSUPPORTED_GTID_MODE = 17;
    /**
     * The table definition is not support due to missing primary key or replica
     * identity.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_TABLE_DEFINITION = 18;</code>
     */
    const UNSUPPORTED_TABLE_DEFINITION = 18;
    /**
     * The definer is not supported.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_DEFINER = 19;</code>
     */
    const UNSUPPORTED_DEFINER = 19;
    /**
     * Migration is already running at the time of restart request.
     *
     * Generated from protobuf enum <code>CANT_RESTART_RUNNING_MIGRATION = 21;</code>
     */
    const CANT_RESTART_RUNNING_MIGRATION = 21;

    private static $valueToName = [
        self::ERROR_CODE_UNSPECIFIED => 'ERROR_CODE_UNSPECIFIED',
        self::CONNECTION_FAILURE => 'CONNECTION_FAILURE',
        self::AUTHENTICATION_FAILURE => 'AUTHENTICATION_FAILURE',
        self::INVALID_CONNECTION_PROFILE_CONFIG => 'INVALID_CONNECTION_PROFILE_CONFIG',
        self::VERSION_INCOMPATIBILITY => 'VERSION_INCOMPATIBILITY',
        self::CONNECTION_PROFILE_TYPES_INCOMPATIBILITY => 'CONNECTION_PROFILE_TYPES_INCOMPATIBILITY',
        self::NO_PGLOGICAL_INSTALLED => 'NO_PGLOGICAL_INSTALLED',
        self::PGLOGICAL_NODE_ALREADY_EXISTS => 'PGLOGICAL_NODE_ALREADY_EXISTS',
        self::INVALID_WAL_LEVEL => 'INVALID_WAL_LEVEL',
        self::INVALID_SHARED_PRELOAD_LIBRARY => 'INVALID_SHARED_PRELOAD_LIBRARY',
        self::INSUFFICIENT_MAX_REPLICATION_SLOTS => 'INSUFFICIENT_MAX_REPLICATION_SLOTS',
        self::INSUFFICIENT_MAX_WAL_SENDERS => 'INSUFFICIENT_MAX_WAL_SENDERS',
        self::INSUFFICIENT_MAX_WORKER_PROCESSES => 'INSUFFICIENT_MAX_WORKER_PROCESSES',
        self::UNSUPPORTED_EXTENSIONS => 'UNSUPPORTED_EXTENSIONS',
        self::UNSUPPORTED_MIGRATION_TYPE => 'UNSUPPORTED_MIGRATION_TYPE',
        self::INVALID_RDS_LOGICAL_REPLICATION => 'INVALID_RDS_LOGICAL_REPLICATION',
        self::UNSUPPORTED_GTID_MODE => 'UNSUPPORTED_GTID_MODE',
        self::UNSUPPORTED_TABLE_DEFINITION => 'UNSUPPORTED_TABLE_DEFINITION',
        self::UNSUPPORTED_DEFINER => 'UNSUPPORTED_DEFINER',
        self::CANT_RESTART_RUNNING_MIGRATION => 'CANT_RESTART_RUNNING_MIGRATION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

