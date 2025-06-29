<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * (-- api-linter: core::0134::request-mask-required=disabled
 *     aip.dev/not-precedent: UpdateNamespace RPC doesn't follow Google API format. --)
 * (-- api-linter: core::0134::request-resource-required=disabled
 *     aip.dev/not-precedent: GetWorkerBuildIdCompatibilityRequest RPC doesn't follow Google API format. --)
 * [cleanup-wv-pre-release]
 *
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest</code>
 */
class UpdateWorkerVersioningRulesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>string task_queue = 2;</code>
     */
    protected $task_queue = '';
    /**
     * A valid conflict_token can be taken from the previous
     * ListWorkerVersioningRulesResponse or UpdateWorkerVersioningRulesResponse.
     * An invalid token will cause this request to fail, ensuring that if the rules
     * for this Task Queue have been modified between the previous and current
     * operation, the request will fail instead of causing an unpredictable mutation.
     *
     * Generated from protobuf field <code>bytes conflict_token = 3;</code>
     */
    protected $conflict_token = '';
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type string $task_queue
     *     @type string $conflict_token
     *           A valid conflict_token can be taken from the previous
     *           ListWorkerVersioningRulesResponse or UpdateWorkerVersioningRulesResponse.
     *           An invalid token will cause this request to fail, ensuring that if the rules
     *           for this Task Queue have been modified between the previous and current
     *           operation, the request will fail instead of causing an unpredictable mutation.
     *     @type \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\InsertBuildIdAssignmentRule $insert_assignment_rule
     *     @type \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\ReplaceBuildIdAssignmentRule $replace_assignment_rule
     *     @type \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\DeleteBuildIdAssignmentRule $delete_assignment_rule
     *     @type \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\AddCompatibleBuildIdRedirectRule $add_compatible_redirect_rule
     *     @type \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\ReplaceCompatibleBuildIdRedirectRule $replace_compatible_redirect_rule
     *     @type \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\DeleteCompatibleBuildIdRedirectRule $delete_compatible_redirect_rule
     *     @type \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\CommitBuildId $commit_build_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string task_queue = 2;</code>
     * @return string
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    /**
     * Generated from protobuf field <code>string task_queue = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskQueue($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_queue = $var;

        return $this;
    }

    /**
     * A valid conflict_token can be taken from the previous
     * ListWorkerVersioningRulesResponse or UpdateWorkerVersioningRulesResponse.
     * An invalid token will cause this request to fail, ensuring that if the rules
     * for this Task Queue have been modified between the previous and current
     * operation, the request will fail instead of causing an unpredictable mutation.
     *
     * Generated from protobuf field <code>bytes conflict_token = 3;</code>
     * @return string
     */
    public function getConflictToken()
    {
        return $this->conflict_token;
    }

    /**
     * A valid conflict_token can be taken from the previous
     * ListWorkerVersioningRulesResponse or UpdateWorkerVersioningRulesResponse.
     * An invalid token will cause this request to fail, ensuring that if the rules
     * for this Task Queue have been modified between the previous and current
     * operation, the request will fail instead of causing an unpredictable mutation.
     *
     * Generated from protobuf field <code>bytes conflict_token = 3;</code>
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
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.InsertBuildIdAssignmentRule insert_assignment_rule = 4;</code>
     * @return \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\InsertBuildIdAssignmentRule|null
     */
    public function getInsertAssignmentRule()
    {
        return $this->readOneof(4);
    }

    public function hasInsertAssignmentRule()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.InsertBuildIdAssignmentRule insert_assignment_rule = 4;</code>
     * @param \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\InsertBuildIdAssignmentRule $var
     * @return $this
     */
    public function setInsertAssignmentRule($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\InsertBuildIdAssignmentRule::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.ReplaceBuildIdAssignmentRule replace_assignment_rule = 5;</code>
     * @return \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\ReplaceBuildIdAssignmentRule|null
     */
    public function getReplaceAssignmentRule()
    {
        return $this->readOneof(5);
    }

    public function hasReplaceAssignmentRule()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.ReplaceBuildIdAssignmentRule replace_assignment_rule = 5;</code>
     * @param \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\ReplaceBuildIdAssignmentRule $var
     * @return $this
     */
    public function setReplaceAssignmentRule($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\ReplaceBuildIdAssignmentRule::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.DeleteBuildIdAssignmentRule delete_assignment_rule = 6;</code>
     * @return \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\DeleteBuildIdAssignmentRule|null
     */
    public function getDeleteAssignmentRule()
    {
        return $this->readOneof(6);
    }

    public function hasDeleteAssignmentRule()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.DeleteBuildIdAssignmentRule delete_assignment_rule = 6;</code>
     * @param \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\DeleteBuildIdAssignmentRule $var
     * @return $this
     */
    public function setDeleteAssignmentRule($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\DeleteBuildIdAssignmentRule::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.AddCompatibleBuildIdRedirectRule add_compatible_redirect_rule = 7;</code>
     * @return \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\AddCompatibleBuildIdRedirectRule|null
     */
    public function getAddCompatibleRedirectRule()
    {
        return $this->readOneof(7);
    }

    public function hasAddCompatibleRedirectRule()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.AddCompatibleBuildIdRedirectRule add_compatible_redirect_rule = 7;</code>
     * @param \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\AddCompatibleBuildIdRedirectRule $var
     * @return $this
     */
    public function setAddCompatibleRedirectRule($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\AddCompatibleBuildIdRedirectRule::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.ReplaceCompatibleBuildIdRedirectRule replace_compatible_redirect_rule = 8;</code>
     * @return \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\ReplaceCompatibleBuildIdRedirectRule|null
     */
    public function getReplaceCompatibleRedirectRule()
    {
        return $this->readOneof(8);
    }

    public function hasReplaceCompatibleRedirectRule()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.ReplaceCompatibleBuildIdRedirectRule replace_compatible_redirect_rule = 8;</code>
     * @param \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\ReplaceCompatibleBuildIdRedirectRule $var
     * @return $this
     */
    public function setReplaceCompatibleRedirectRule($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\ReplaceCompatibleBuildIdRedirectRule::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.DeleteCompatibleBuildIdRedirectRule delete_compatible_redirect_rule = 9;</code>
     * @return \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\DeleteCompatibleBuildIdRedirectRule|null
     */
    public function getDeleteCompatibleRedirectRule()
    {
        return $this->readOneof(9);
    }

    public function hasDeleteCompatibleRedirectRule()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.DeleteCompatibleBuildIdRedirectRule delete_compatible_redirect_rule = 9;</code>
     * @param \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\DeleteCompatibleBuildIdRedirectRule $var
     * @return $this
     */
    public function setDeleteCompatibleRedirectRule($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\DeleteCompatibleBuildIdRedirectRule::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.CommitBuildId commit_build_id = 10;</code>
     * @return \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\CommitBuildId|null
     */
    public function getCommitBuildId()
    {
        return $this->readOneof(10);
    }

    public function hasCommitBuildId()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.CommitBuildId commit_build_id = 10;</code>
     * @param \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\CommitBuildId $var
     * @return $this
     */
    public function setCommitBuildId($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest\CommitBuildId::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

