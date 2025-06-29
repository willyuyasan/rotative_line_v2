<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.DescribeWorkerDeploymentResponse</code>
 */
class DescribeWorkerDeploymentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * This value is returned so that it can be optionally passed to APIs
     * that write to the Worker Deployment state to ensure that the state
     * did not change between this read and a future write.
     *
     * Generated from protobuf field <code>bytes conflict_token = 1;</code>
     */
    protected $conflict_token = '';
    /**
     * Generated from protobuf field <code>.temporal.api.deployment.v1.WorkerDeploymentInfo worker_deployment_info = 2;</code>
     */
    protected $worker_deployment_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $conflict_token
     *           This value is returned so that it can be optionally passed to APIs
     *           that write to the Worker Deployment state to ensure that the state
     *           did not change between this read and a future write.
     *     @type \Temporal\Api\Deployment\V1\WorkerDeploymentInfo $worker_deployment_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * This value is returned so that it can be optionally passed to APIs
     * that write to the Worker Deployment state to ensure that the state
     * did not change between this read and a future write.
     *
     * Generated from protobuf field <code>bytes conflict_token = 1;</code>
     * @return string
     */
    public function getConflictToken()
    {
        return $this->conflict_token;
    }

    /**
     * This value is returned so that it can be optionally passed to APIs
     * that write to the Worker Deployment state to ensure that the state
     * did not change between this read and a future write.
     *
     * Generated from protobuf field <code>bytes conflict_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConflictToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->conflict_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.deployment.v1.WorkerDeploymentInfo worker_deployment_info = 2;</code>
     * @return \Temporal\Api\Deployment\V1\WorkerDeploymentInfo|null
     */
    public function getWorkerDeploymentInfo()
    {
        return $this->worker_deployment_info;
    }

    public function hasWorkerDeploymentInfo()
    {
        return isset($this->worker_deployment_info);
    }

    public function clearWorkerDeploymentInfo()
    {
        unset($this->worker_deployment_info);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.deployment.v1.WorkerDeploymentInfo worker_deployment_info = 2;</code>
     * @param \Temporal\Api\Deployment\V1\WorkerDeploymentInfo $var
     * @return $this
     */
    public function setWorkerDeploymentInfo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Deployment\V1\WorkerDeploymentInfo::class);
        $this->worker_deployment_info = $var;

        return $this;
    }

}

