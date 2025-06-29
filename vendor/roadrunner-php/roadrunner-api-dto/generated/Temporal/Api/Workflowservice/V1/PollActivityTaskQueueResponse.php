<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.PollActivityTaskQueueResponse</code>
 */
class PollActivityTaskQueueResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier for this task
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     */
    protected $task_token = '';
    /**
     * The namespace the workflow which requested this activity lives in
     *
     * Generated from protobuf field <code>string workflow_namespace = 2;</code>
     */
    protected $workflow_namespace = '';
    /**
     * Type of the requesting workflow
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     */
    protected $workflow_type = null;
    /**
     * Execution info of the requesting workflow
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 4;</code>
     */
    protected $workflow_execution = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 5;</code>
     */
    protected $activity_type = null;
    /**
     * The autogenerated or user specified identifier of this activity. Can be used to complete the
     * activity via `RespondActivityTaskCompletedById`. May be re-used as long as the last usage
     * has resolved, but unique IDs for every activity invocation is a good idea.
     *
     * Generated from protobuf field <code>string activity_id = 6;</code>
     */
    protected $activity_id = '';
    /**
     * Headers specified by the scheduling workflow. Commonly used to propagate contextual info
     * from the workflow to its activities. For example, tracing contexts.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 7;</code>
     */
    protected $header = null;
    /**
     * Arguments to the activity invocation
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 8;</code>
     */
    protected $input = null;
    /**
     * Details of the last heartbeat that was recorded for this activity as of the time this task
     * was delivered.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads heartbeat_details = 9;</code>
     */
    protected $heartbeat_details = null;
    /**
     * When was this task first scheduled
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_time = 10;</code>
     */
    protected $scheduled_time = null;
    /**
     * When was this task attempt scheduled
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_attempt_scheduled_time = 11;</code>
     */
    protected $current_attempt_scheduled_time = null;
    /**
     * When was this task started (this attempt)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_time = 12;</code>
     */
    protected $started_time = null;
    /**
     * Starting at 1, the number of attempts to perform this activity
     *
     * Generated from protobuf field <code>int32 attempt = 13;</code>
     */
    protected $attempt = 0;
    /**
     * First scheduled -> final result reported timeout
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 14;</code>
     */
    protected $schedule_to_close_timeout = null;
    /**
     * Current attempt start -> final result reported timeout
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 15;</code>
     */
    protected $start_to_close_timeout = null;
    /**
     * Window within which the activity must report a heartbeat, or be timed out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration heartbeat_timeout = 16;</code>
     */
    protected $heartbeat_timeout = null;
    /**
     * This is the retry policy the service uses which may be different from the one provided
     * (or not) during activity scheduling. The service can override the provided one if some
     * values are not specified or exceed configured system limits.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 17;</code>
     */
    protected $retry_policy = null;
    /**
     * Server-advised information the SDK may use to adjust its poller count.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.PollerScalingDecision poller_scaling_decision = 18;</code>
     */
    protected $poller_scaling_decision = null;
    /**
     * Priority metadata
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Priority priority = 19;</code>
     */
    protected $priority = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $task_token
     *           A unique identifier for this task
     *     @type string $workflow_namespace
     *           The namespace the workflow which requested this activity lives in
     *     @type \Temporal\Api\Common\V1\WorkflowType $workflow_type
     *           Type of the requesting workflow
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *           Execution info of the requesting workflow
     *     @type \Temporal\Api\Common\V1\ActivityType $activity_type
     *     @type string $activity_id
     *           The autogenerated or user specified identifier of this activity. Can be used to complete the
     *           activity via `RespondActivityTaskCompletedById`. May be re-used as long as the last usage
     *           has resolved, but unique IDs for every activity invocation is a good idea.
     *     @type \Temporal\Api\Common\V1\Header $header
     *           Headers specified by the scheduling workflow. Commonly used to propagate contextual info
     *           from the workflow to its activities. For example, tracing contexts.
     *     @type \Temporal\Api\Common\V1\Payloads $input
     *           Arguments to the activity invocation
     *     @type \Temporal\Api\Common\V1\Payloads $heartbeat_details
     *           Details of the last heartbeat that was recorded for this activity as of the time this task
     *           was delivered.
     *     @type \Google\Protobuf\Timestamp $scheduled_time
     *           When was this task first scheduled
     *     @type \Google\Protobuf\Timestamp $current_attempt_scheduled_time
     *           When was this task attempt scheduled
     *     @type \Google\Protobuf\Timestamp $started_time
     *           When was this task started (this attempt)
     *     @type int $attempt
     *           Starting at 1, the number of attempts to perform this activity
     *     @type \Google\Protobuf\Duration $schedule_to_close_timeout
     *           First scheduled -> final result reported timeout
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *     @type \Google\Protobuf\Duration $start_to_close_timeout
     *           Current attempt start -> final result reported timeout
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *     @type \Google\Protobuf\Duration $heartbeat_timeout
     *           Window within which the activity must report a heartbeat, or be timed out.
     *     @type \Temporal\Api\Common\V1\RetryPolicy $retry_policy
     *           This is the retry policy the service uses which may be different from the one provided
     *           (or not) during activity scheduling. The service can override the provided one if some
     *           values are not specified or exceed configured system limits.
     *     @type \Temporal\Api\Taskqueue\V1\PollerScalingDecision $poller_scaling_decision
     *           Server-advised information the SDK may use to adjust its poller count.
     *     @type \Temporal\Api\Common\V1\Priority $priority
     *           Priority metadata
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifier for this task
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @return string
     */
    public function getTaskToken()
    {
        return $this->task_token;
    }

    /**
     * A unique identifier for this task
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->task_token = $var;

        return $this;
    }

    /**
     * The namespace the workflow which requested this activity lives in
     *
     * Generated from protobuf field <code>string workflow_namespace = 2;</code>
     * @return string
     */
    public function getWorkflowNamespace()
    {
        return $this->workflow_namespace;
    }

    /**
     * The namespace the workflow which requested this activity lives in
     *
     * Generated from protobuf field <code>string workflow_namespace = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_namespace = $var;

        return $this;
    }

    /**
     * Type of the requesting workflow
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     * @return \Temporal\Api\Common\V1\WorkflowType|null
     */
    public function getWorkflowType()
    {
        return $this->workflow_type;
    }

    public function hasWorkflowType()
    {
        return isset($this->workflow_type);
    }

    public function clearWorkflowType()
    {
        unset($this->workflow_type);
    }

    /**
     * Type of the requesting workflow
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     * @param \Temporal\Api\Common\V1\WorkflowType $var
     * @return $this
     */
    public function setWorkflowType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowType::class);
        $this->workflow_type = $var;

        return $this;
    }

    /**
     * Execution info of the requesting workflow
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 4;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution|null
     */
    public function getWorkflowExecution()
    {
        return $this->workflow_execution;
    }

    public function hasWorkflowExecution()
    {
        return isset($this->workflow_execution);
    }

    public function clearWorkflowExecution()
    {
        unset($this->workflow_execution);
    }

    /**
     * Execution info of the requesting workflow
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 4;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setWorkflowExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->workflow_execution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 5;</code>
     * @return \Temporal\Api\Common\V1\ActivityType|null
     */
    public function getActivityType()
    {
        return $this->activity_type;
    }

    public function hasActivityType()
    {
        return isset($this->activity_type);
    }

    public function clearActivityType()
    {
        unset($this->activity_type);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 5;</code>
     * @param \Temporal\Api\Common\V1\ActivityType $var
     * @return $this
     */
    public function setActivityType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\ActivityType::class);
        $this->activity_type = $var;

        return $this;
    }

    /**
     * The autogenerated or user specified identifier of this activity. Can be used to complete the
     * activity via `RespondActivityTaskCompletedById`. May be re-used as long as the last usage
     * has resolved, but unique IDs for every activity invocation is a good idea.
     *
     * Generated from protobuf field <code>string activity_id = 6;</code>
     * @return string
     */
    public function getActivityId()
    {
        return $this->activity_id;
    }

    /**
     * The autogenerated or user specified identifier of this activity. Can be used to complete the
     * activity via `RespondActivityTaskCompletedById`. May be re-used as long as the last usage
     * has resolved, but unique IDs for every activity invocation is a good idea.
     *
     * Generated from protobuf field <code>string activity_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setActivityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->activity_id = $var;

        return $this;
    }

    /**
     * Headers specified by the scheduling workflow. Commonly used to propagate contextual info
     * from the workflow to its activities. For example, tracing contexts.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 7;</code>
     * @return \Temporal\Api\Common\V1\Header|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Headers specified by the scheduling workflow. Commonly used to propagate contextual info
     * from the workflow to its activities. For example, tracing contexts.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 7;</code>
     * @param \Temporal\Api\Common\V1\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Header::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Arguments to the activity invocation
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 8;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getInput()
    {
        return $this->input;
    }

    public function hasInput()
    {
        return isset($this->input);
    }

    public function clearInput()
    {
        unset($this->input);
    }

    /**
     * Arguments to the activity invocation
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 8;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Details of the last heartbeat that was recorded for this activity as of the time this task
     * was delivered.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads heartbeat_details = 9;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getHeartbeatDetails()
    {
        return $this->heartbeat_details;
    }

    public function hasHeartbeatDetails()
    {
        return isset($this->heartbeat_details);
    }

    public function clearHeartbeatDetails()
    {
        unset($this->heartbeat_details);
    }

    /**
     * Details of the last heartbeat that was recorded for this activity as of the time this task
     * was delivered.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads heartbeat_details = 9;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setHeartbeatDetails($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->heartbeat_details = $var;

        return $this;
    }

    /**
     * When was this task first scheduled
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_time = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getScheduledTime()
    {
        return $this->scheduled_time;
    }

    public function hasScheduledTime()
    {
        return isset($this->scheduled_time);
    }

    public function clearScheduledTime()
    {
        unset($this->scheduled_time);
    }

    /**
     * When was this task first scheduled
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScheduledTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->scheduled_time = $var;

        return $this;
    }

    /**
     * When was this task attempt scheduled
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_attempt_scheduled_time = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCurrentAttemptScheduledTime()
    {
        return $this->current_attempt_scheduled_time;
    }

    public function hasCurrentAttemptScheduledTime()
    {
        return isset($this->current_attempt_scheduled_time);
    }

    public function clearCurrentAttemptScheduledTime()
    {
        unset($this->current_attempt_scheduled_time);
    }

    /**
     * When was this task attempt scheduled
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_attempt_scheduled_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCurrentAttemptScheduledTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->current_attempt_scheduled_time = $var;

        return $this;
    }

    /**
     * When was this task started (this attempt)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_time = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartedTime()
    {
        return $this->started_time;
    }

    public function hasStartedTime()
    {
        return isset($this->started_time);
    }

    public function clearStartedTime()
    {
        unset($this->started_time);
    }

    /**
     * When was this task started (this attempt)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_time = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartedTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->started_time = $var;

        return $this;
    }

    /**
     * Starting at 1, the number of attempts to perform this activity
     *
     * Generated from protobuf field <code>int32 attempt = 13;</code>
     * @return int
     */
    public function getAttempt()
    {
        return $this->attempt;
    }

    /**
     * Starting at 1, the number of attempts to perform this activity
     *
     * Generated from protobuf field <code>int32 attempt = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setAttempt($var)
    {
        GPBUtil::checkInt32($var);
        $this->attempt = $var;

        return $this;
    }

    /**
     * First scheduled -> final result reported timeout
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 14;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getScheduleToCloseTimeout()
    {
        return $this->schedule_to_close_timeout;
    }

    public function hasScheduleToCloseTimeout()
    {
        return isset($this->schedule_to_close_timeout);
    }

    public function clearScheduleToCloseTimeout()
    {
        unset($this->schedule_to_close_timeout);
    }

    /**
     * First scheduled -> final result reported timeout
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 14;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setScheduleToCloseTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->schedule_to_close_timeout = $var;

        return $this;
    }

    /**
     * Current attempt start -> final result reported timeout
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 15;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStartToCloseTimeout()
    {
        return $this->start_to_close_timeout;
    }

    public function hasStartToCloseTimeout()
    {
        return isset($this->start_to_close_timeout);
    }

    public function clearStartToCloseTimeout()
    {
        unset($this->start_to_close_timeout);
    }

    /**
     * Current attempt start -> final result reported timeout
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 15;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartToCloseTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_to_close_timeout = $var;

        return $this;
    }

    /**
     * Window within which the activity must report a heartbeat, or be timed out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration heartbeat_timeout = 16;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getHeartbeatTimeout()
    {
        return $this->heartbeat_timeout;
    }

    public function hasHeartbeatTimeout()
    {
        return isset($this->heartbeat_timeout);
    }

    public function clearHeartbeatTimeout()
    {
        unset($this->heartbeat_timeout);
    }

    /**
     * Window within which the activity must report a heartbeat, or be timed out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration heartbeat_timeout = 16;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setHeartbeatTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->heartbeat_timeout = $var;

        return $this;
    }

    /**
     * This is the retry policy the service uses which may be different from the one provided
     * (or not) during activity scheduling. The service can override the provided one if some
     * values are not specified or exceed configured system limits.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 17;</code>
     * @return \Temporal\Api\Common\V1\RetryPolicy|null
     */
    public function getRetryPolicy()
    {
        return $this->retry_policy;
    }

    public function hasRetryPolicy()
    {
        return isset($this->retry_policy);
    }

    public function clearRetryPolicy()
    {
        unset($this->retry_policy);
    }

    /**
     * This is the retry policy the service uses which may be different from the one provided
     * (or not) during activity scheduling. The service can override the provided one if some
     * values are not specified or exceed configured system limits.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 17;</code>
     * @param \Temporal\Api\Common\V1\RetryPolicy $var
     * @return $this
     */
    public function setRetryPolicy($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\RetryPolicy::class);
        $this->retry_policy = $var;

        return $this;
    }

    /**
     * Server-advised information the SDK may use to adjust its poller count.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.PollerScalingDecision poller_scaling_decision = 18;</code>
     * @return \Temporal\Api\Taskqueue\V1\PollerScalingDecision|null
     */
    public function getPollerScalingDecision()
    {
        return $this->poller_scaling_decision;
    }

    public function hasPollerScalingDecision()
    {
        return isset($this->poller_scaling_decision);
    }

    public function clearPollerScalingDecision()
    {
        unset($this->poller_scaling_decision);
    }

    /**
     * Server-advised information the SDK may use to adjust its poller count.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.PollerScalingDecision poller_scaling_decision = 18;</code>
     * @param \Temporal\Api\Taskqueue\V1\PollerScalingDecision $var
     * @return $this
     */
    public function setPollerScalingDecision($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\PollerScalingDecision::class);
        $this->poller_scaling_decision = $var;

        return $this;
    }

    /**
     * Priority metadata
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Priority priority = 19;</code>
     * @return \Temporal\Api\Common\V1\Priority|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    public function hasPriority()
    {
        return isset($this->priority);
    }

    public function clearPriority()
    {
        unset($this->priority);
    }

    /**
     * Priority metadata
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Priority priority = 19;</code>
     * @param \Temporal\Api\Common\V1\Priority $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Priority::class);
        $this->priority = $var;

        return $this;
    }

}

