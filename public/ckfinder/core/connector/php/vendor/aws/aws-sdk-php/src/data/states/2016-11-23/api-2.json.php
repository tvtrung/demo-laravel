<?php
// This file was auto-generated from sdk-root/src/data/states/2016-11-23/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-11-23', 'endpointPrefix' => 'states', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceAbbreviation' => 'AWS SFN', 'serviceFullName' => 'AWS Step Functions', 'serviceId' => 'SFN', 'signatureVersion' => 'v4', 'targetPrefix' => 'AWSStepFunctions', 'uid' => 'states-2016-11-23', ], 'operations' => [ 'CreateActivity' => [ 'name' => 'CreateActivity', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateActivityInput', ], 'output' => [ 'shape' => 'CreateActivityOutput', ], 'errors' => [ [ 'shape' => 'ActivityLimitExceeded', ], [ 'shape' => 'InvalidName', ], ], 'idempotent' => true, ], 'CreateStateMachine' => [ 'name' => 'CreateStateMachine', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateStateMachineInput', ], 'output' => [ 'shape' => 'CreateStateMachineOutput', ], 'errors' => [ [ 'shape' => 'InvalidArn', ], [ 'shape' => 'InvalidDefinition', ], [ 'shape' => 'InvalidName', ], [ 'shape' => 'StateMachineAlreadyExists', ], [ 'shape' => 'StateMachineDeleting', ], [ 'shape' => 'StateMachineLimitExceeded', ], ], 'idempotent' => true, ], 'DeleteActivity' => [ 'name' => 'DeleteActivity', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteActivityInput', ], 'output' => [ 'shape' => 'DeleteActivityOutput', ], 'errors' => [ [ 'shape' => 'InvalidArn', ], ], ], 'DeleteStateMachine' => [ 'name' => 'DeleteStateMachine', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteStateMachineInput', ], 'output' => [ 'shape' => 'DeleteStateMachineOutput', ], 'errors' => [ [ 'shape' => 'InvalidArn', ], ], ], 'DescribeActivity' => [ 'name' => 'DescribeActivity', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeActivityInput', ], 'output' => [ 'shape' => 'DescribeActivityOutput', ], 'errors' => [ [ 'shape' => 'ActivityDoesNotExist', ], [ 'shape' => 'InvalidArn', ], ], ], 'DescribeExecution' => [ 'name' => 'DescribeExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeExecutionInput', ], 'output' => [ 'shape' => 'DescribeExecutionOutput', ], 'errors' => [ [ 'shape' => 'ExecutionDoesNotExist', ], [ 'shape' => 'InvalidArn', ], ], ], 'DescribeStateMachine' => [ 'name' => 'DescribeStateMachine', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeStateMachineInput', ], 'output' => [ 'shape' => 'DescribeStateMachineOutput', ], 'errors' => [ [ 'shape' => 'InvalidArn', ], [ 'shape' => 'StateMachineDoesNotExist', ], ], ], 'DescribeStateMachineForExecution' => [ 'name' => 'DescribeStateMachineForExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeStateMachineForExecutionInput', ], 'output' => [ 'shape' => 'DescribeStateMachineForExecutionOutput', ], 'errors' => [ [ 'shape' => 'ExecutionDoesNotExist', ], [ 'shape' => 'InvalidArn', ], ], ], 'GetActivityTask' => [ 'name' => 'GetActivityTask', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetActivityTaskInput', ], 'output' => [ 'shape' => 'GetActivityTaskOutput', ], 'errors' => [ [ 'shape' => 'ActivityDoesNotExist', ], [ 'shape' => 'ActivityWorkerLimitExceeded', ], [ 'shape' => 'InvalidArn', ], ], ], 'GetExecutionHistory' => [ 'name' => 'GetExecutionHistory', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetExecutionHistoryInput', ], 'output' => [ 'shape' => 'GetExecutionHistoryOutput', ], 'errors' => [ [ 'shape' => 'ExecutionDoesNotExist', ], [ 'shape' => 'InvalidArn', ], [ 'shape' => 'InvalidToken', ], ], ], 'ListActivities' => [ 'name' => 'ListActivities', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListActivitiesInput', ], 'output' => [ 'shape' => 'ListActivitiesOutput', ], 'errors' => [ [ 'shape' => 'InvalidToken', ], ], ], 'ListExecutions' => [ 'name' => 'ListExecutions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListExecutionsInput', ], 'output' => [ 'shape' => 'ListExecutionsOutput', ], 'errors' => [ [ 'shape' => 'InvalidArn', ], [ 'shape' => 'InvalidToken', ], [ 'shape' => 'StateMachineDoesNotExist', ], ], ], 'ListStateMachines' => [ 'name' => 'ListStateMachines', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListStateMachinesInput', ], 'output' => [ 'shape' => 'ListStateMachinesOutput', ], 'errors' => [ [ 'shape' => 'InvalidToken', ], ], ], 'SendTaskFailure' => [ 'name' => 'SendTaskFailure', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SendTaskFailureInput', ], 'output' => [ 'shape' => 'SendTaskFailureOutput', ], 'errors' => [ [ 'shape' => 'TaskDoesNotExist', ], [ 'shape' => 'InvalidToken', ], [ 'shape' => 'TaskTimedOut', ], ], ], 'SendTaskHeartbeat' => [ 'name' => 'SendTaskHeartbeat', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SendTaskHeartbeatInput', ], 'output' => [ 'shape' => 'SendTaskHeartbeatOutput', ], 'errors' => [ [ 'shape' => 'TaskDoesNotExist', ], [ 'shape' => 'InvalidToken', ], [ 'shape' => 'TaskTimedOut', ], ], ], 'SendTaskSuccess' => [ 'name' => 'SendTaskSuccess', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SendTaskSuccessInput', ], 'output' => [ 'shape' => 'SendTaskSuccessOutput', ], 'errors' => [ [ 'shape' => 'TaskDoesNotExist', ], [ 'shape' => 'InvalidOutput', ], [ 'shape' => 'InvalidToken', ], [ 'shape' => 'TaskTimedOut', ], ], ], 'StartExecution' => [ 'name' => 'StartExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartExecutionInput', ], 'output' => [ 'shape' => 'StartExecutionOutput', ], 'errors' => [ [ 'shape' => 'ExecutionLimitExceeded', ], [ 'shape' => 'ExecutionAlreadyExists', ], [ 'shape' => 'InvalidArn', ], [ 'shape' => 'InvalidExecutionInput', ], [ 'shape' => 'InvalidName', ], [ 'shape' => 'StateMachineDoesNotExist', ], [ 'shape' => 'StateMachineDeleting', ], ], 'idempotent' => true, ], 'StopExecution' => [ 'name' => 'StopExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopExecutionInput', ], 'output' => [ 'shape' => 'StopExecutionOutput', ], 'errors' => [ [ 'shape' => 'ExecutionDoesNotExist', ], [ 'shape' => 'InvalidArn', ], ], ], 'UpdateStateMachine' => [ 'name' => 'UpdateStateMachine', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateStateMachineInput', ], 'output' => [ 'shape' => 'UpdateStateMachineOutput', ], 'errors' => [ [ 'shape' => 'InvalidArn', ], [ 'shape' => 'InvalidDefinition', ], [ 'shape' => 'MissingRequiredParameter', ], [ 'shape' => 'StateMachineDeleting', ], [ 'shape' => 'StateMachineDoesNotExist', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'ActivityDoesNotExist' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ActivityFailedEventDetails' => [ 'type' => 'structure', 'members' => [ 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'ActivityLimitExceeded' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ActivityList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActivityListItem', ], ], 'ActivityListItem' => [ 'type' => 'structure', 'required' => [ 'activityArn', 'name', 'creationDate', ], 'members' => [ 'activityArn' => [ 'shape' => 'Arn', ], 'name' => [ 'shape' => 'Name', ], 'creationDate' => [ 'shape' => 'Timestamp', ], ], ], 'ActivityScheduleFailedEventDetails' => [ 'type' => 'structure', 'members' => [ 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'ActivityScheduledEventDetails' => [ 'type' => 'structure', 'required' => [ 'resource', ], 'members' => [ 'resource' => [ 'shape' => 'Arn', ], 'input' => [ 'shape' => 'Data', ], 'timeoutInSeconds' => [ 'shape' => 'TimeoutInSeconds', 'box' => true, ], 'heartbeatInSeconds' => [ 'shape' => 'TimeoutInSeconds', 'box' => true, ], ], ], 'ActivityStartedEventDetails' => [ 'type' => 'structure', 'members' => [ 'workerName' => [ 'shape' => 'Identity', ], ], ], 'ActivitySucceededEventDetails' => [ 'type' => 'structure', 'members' => [ 'output' => [ 'shape' => 'Data', ], ], ], 'ActivityTimedOutEventDetails' => [ 'type' => 'structure', 'members' => [ 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'ActivityWorkerLimitExceeded' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Arn' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'Cause' => [ 'type' => 'string', 'max' => 32768, 'min' => 0, ], 'CreateActivityInput' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'Name', ], ], ], 'CreateActivityOutput' => [ 'type' => 'structure', 'required' => [ 'activityArn', 'creationDate', ], 'members' => [ 'activityArn' => [ 'shape' => 'Arn', ], 'creationDate' => [ 'shape' => 'Timestamp', ], ], ], 'CreateStateMachineInput' => [ 'type' => 'structure', 'required' => [ 'name', 'definition', 'roleArn', ], 'members' => [ 'name' => [ 'shape' => 'Name', ], 'definition' => [ 'shape' => 'Definition', ], 'roleArn' => [ 'shape' => 'Arn', ], ], ], 'CreateStateMachineOutput' => [ 'type' => 'structure', 'required' => [ 'stateMachineArn', 'creationDate', ], 'members' => [ 'stateMachineArn' => [ 'shape' => 'Arn', ], 'creationDate' => [ 'shape' => 'Timestamp', ], ], ], 'Data' => [ 'type' => 'string', 'max' => 32768, ], 'Definition' => [ 'type' => 'string', 'max' => 1048576, 'min' => 1, ], 'DeleteActivityInput' => [ 'type' => 'structure', 'required' => [ 'activityArn', ], 'members' => [ 'activityArn' => [ 'shape' => 'Arn', ], ], ], 'DeleteActivityOutput' => [ 'type' => 'structure', 'members' => [], ], 'DeleteStateMachineInput' => [ 'type' => 'structure', 'required' => [ 'stateMachineArn', ], 'members' => [ 'stateMachineArn' => [ 'shape' => 'Arn', ], ], ], 'DeleteStateMachineOutput' => [ 'type' => 'structure', 'members' => [], ], 'DescribeActivityInput' => [ 'type' => 'structure', 'required' => [ 'activityArn', ], 'members' => [ 'activityArn' => [ 'shape' => 'Arn', ], ], ], 'DescribeActivityOutput' => [ 'type' => 'structure', 'required' => [ 'activityArn', 'name', 'creationDate', ], 'members' => [ 'activityArn' => [ 'shape' => 'Arn', ], 'name' => [ 'shape' => 'Name', ], 'creationDate' => [ 'shape' => 'Timestamp', ], ], ], 'DescribeExecutionInput' => [ 'type' => 'structure', 'required' => [ 'executionArn', ], 'members' => [ 'executionArn' => [ 'shape' => 'Arn', ], ], ], 'DescribeExecutionOutput' => [ 'type' => 'structure', 'required' => [ 'executionArn', 'stateMachineArn', 'status', 'startDate', 'input', ], 'members' => [ 'executionArn' => [ 'shape' => 'Arn', ], 'stateMachineArn' => [ 'shape' => 'Arn', ], 'name' => [ 'shape' => 'Name', ], 'status' => [ 'shape' => 'ExecutionStatus', ], 'startDate' => [ 'shape' => 'Timestamp', ], 'stopDate' => [ 'shape' => 'Timestamp', ], 'input' => [ 'shape' => 'Data', ], 'output' => [ 'shape' => 'Data', ], ], ], 'DescribeStateMachineForExecutionInput' => [ 'type' => 'structure', 'required' => [ 'executionArn', ], 'members' => [ 'executionArn' => [ 'shape' => 'Arn', ], ], ], 'DescribeStateMachineForExecutionOutput' => [ 'type' => 'structure', 'required' => [ 'stateMachineArn', 'name', 'definition', 'roleArn', 'updateDate', ], 'members' => [ 'stateMachineArn' => [ 'shape' => 'Arn', ], 'name' => [ 'shape' => 'Name', ], 'definition' => [ 'shape' => 'Definition', ], 'roleArn' => [ 'shape' => 'Arn', ], 'updateDate' => [ 'shape' => 'Timestamp', ], ], ], 'DescribeStateMachineInput' => [ 'type' => 'structure', 'required' => [ 'stateMachineArn', ], 'members' => [ 'stateMachineArn' => [ 'shape' => 'Arn', ], ], ], 'DescribeStateMachineOutput' => [ 'type' => 'structure', 'required' => [ 'stateMachineArn', 'name', 'definition', 'roleArn', 'creationDate', ], 'members' => [ 'stateMachineArn' => [ 'shape' => 'Arn', ], 'name' => [ 'shape' => 'Name', ], 'status' => [ 'shape' => 'StateMachineStatus', ], 'definition' => [ 'shape' => 'Definition', ], 'roleArn' => [ 'shape' => 'Arn', ], 'creationDate' => [ 'shape' => 'Timestamp', ], ], ], 'Error' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'ErrorMessage' => [ 'type' => 'string', ], 'EventId' => [ 'type' => 'long', ], 'ExecutionAbortedEventDetails' => [ 'type' => 'structure', 'members' => [ 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'ExecutionAlreadyExists' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ExecutionDoesNotExist' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ExecutionFailedEventDetails' => [ 'type' => 'structure', 'members' => [ 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'ExecutionLimitExceeded' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ExecutionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExecutionListItem', ], ], 'ExecutionListItem' => [ 'type' => 'structure', 'required' => [ 'executionArn', 'stateMachineArn', 'name', 'status', 'startDate', ], 'members' => [ 'executionArn' => [ 'shape' => 'Arn', ], 'stateMachineArn' => [ 'shape' => 'Arn', ], 'name' => [ 'shape' => 'Name', ], 'status' => [ 'shape' => 'ExecutionStatus', ], 'startDate' => [ 'shape' => 'Timestamp', ], 'stopDate' => [ 'shape' => 'Timestamp', ], ], ], 'ExecutionStartedEventDetails' => [ 'type' => 'structure', 'members' => [ 'input' => [ 'shape' => 'Data', ], 'roleArn' => [ 'shape' => 'Arn', ], ], ], 'ExecutionStatus' => [ 'type' => 'string', 'enum' => [ 'RUNNING', 'SUCCEEDED', 'FAILED', 'TIMED_OUT', 'ABORTED', ], ], 'ExecutionSucceededEventDetails' => [ 'type' => 'structure', 'members' => [ 'output' => [ 'shape' => 'Data', ], ], ], 'ExecutionTimedOutEventDetails' => [ 'type' => 'structure', 'members' => [ 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'GetActivityTaskInput' => [ 'type' => 'structure', 'required' => [ 'activityArn', ], 'members' => [ 'activityArn' => [ 'shape' => 'Arn', ], 'workerName' => [ 'shape' => 'Name', ], ], ], 'GetActivityTaskOutput' => [ 'type' => 'structure', 'members' => [ 'taskToken' => [ 'shape' => 'TaskToken', ], 'input' => [ 'shape' => 'Data', ], ], ], 'GetExecutionHistoryInput' => [ 'type' => 'structure', 'required' => [ 'executionArn', ], 'members' => [ 'executionArn' => [ 'shape' => 'Arn', ], 'maxResults' => [ 'shape' => 'PageSize', ], 'reverseOrder' => [ 'shape' => 'ReverseOrder', ], 'nextToken' => [ 'shape' => 'PageToken', ], ], ], 'GetExecutionHistoryOutput' => [ 'type' => 'structure', 'required' => [ 'events', ], 'members' => [ 'events' => [ 'shape' => 'HistoryEventList', ], 'nextToken' => [ 'shape' => 'PageToken', ], ], ], 'HistoryEvent' => [ 'type' => 'structure', 'required' => [ 'timestamp', 'type', 'id', ], 'members' => [ 'timestamp' => [ 'shape' => 'Timestamp', ], 'type' => [ 'shape' => 'HistoryEventType', ], 'id' => [ 'shape' => 'EventId', ], 'previousEventId' => [ 'shape' => 'EventId', ], 'activityFailedEventDetails' => [ 'shape' => 'ActivityFailedEventDetails', ], 'activityScheduleFailedEventDetails' => [ 'shape' => 'ActivityScheduleFailedEventDetails', ], 'activityScheduledEventDetails' => [ 'shape' => 'ActivityScheduledEventDetails', ], 'activityStartedEventDetails' => [ 'shape' => 'ActivityStartedEventDetails', ], 'activitySucceededEventDetails' => [ 'shape' => 'ActivitySucceededEventDetails', ], 'activityTimedOutEventDetails' => [ 'shape' => 'ActivityTimedOutEventDetails', ], 'executionFailedEventDetails' => [ 'shape' => 'ExecutionFailedEventDetails', ], 'executionStartedEventDetails' => [ 'shape' => 'ExecutionStartedEventDetails', ], 'executionSucceededEventDetails' => [ 'shape' => 'ExecutionSucceededEventDetails', ], 'executionAbortedEventDetails' => [ 'shape' => 'ExecutionAbortedEventDetails', ], 'executionTimedOutEventDetails' => [ 'shape' => 'ExecutionTimedOutEventDetails', ], 'lambdaFunctionFailedEventDetails' => [ 'shape' => 'LambdaFunctionFailedEventDetails', ], 'lambdaFunctionScheduleFailedEventDetails' => [ 'shape' => 'LambdaFunctionScheduleFailedEventDetails', ], 'lambdaFunctionScheduledEventDetails' => [ 'shape' => 'LambdaFunctionScheduledEventDetails', ], 'lambdaFunctionStartFailedEventDetails' => [ 'shape' => 'LambdaFunctionStartFailedEventDetails', ], 'lambdaFunctionSucceededEventDetails' => [ 'shape' => 'LambdaFunctionSucceededEventDetails', ], 'lambdaFunctionTimedOutEventDetails' => [ 'shape' => 'LambdaFunctionTimedOutEventDetails', ], 'stateEnteredEventDetails' => [ 'shape' => 'StateEnteredEventDetails', ], 'stateExitedEventDetails' => [ 'shape' => 'StateExitedEventDetails', ], ], ], 'HistoryEventList' => [ 'type' => 'list', 'member' => [ 'shape' => 'HistoryEvent', ], ], 'HistoryEventType' => [ 'type' => 'string', 'enum' => [ 'ActivityFailed', 'ActivityScheduleFailed', 'ActivityScheduled', 'ActivityStarted', 'ActivitySucceeded', 'ActivityTimedOut', 'ChoiceStateEntered', 'ChoiceStateExited', 'ExecutionFailed', 'ExecutionStarted', 'ExecutionSucceeded', 'ExecutionAborted', 'ExecutionTimedOut', 'FailStateEntered', 'LambdaFunctionFailed', 'LambdaFunctionScheduleFailed', 'LambdaFunctionScheduled', 'LambdaFunctionStartFailed', 'LambdaFunctionStarted', 'LambdaFunctionSucceeded', 'LambdaFunctionTimedOut', 'SucceedStateEntered', 'SucceedStateExited', 'TaskStateAborted', 'TaskStateEntered', 'TaskStateExited', 'PassStateEntered', 'PassStateExited', 'ParallelStateAborted', 'ParallelStateEntered', 'ParallelStateExited', 'ParallelStateFailed', 'ParallelStateStarted', 'ParallelStateSucceeded', 'WaitStateAborted', 'WaitStateEntered', 'WaitStateExited', ], ], 'Identity' => [ 'type' => 'string', 'max' => 256, ], 'InvalidArn' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidDefinition' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidExecutionInput' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidName' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidOutput' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidToken' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'LambdaFunctionFailedEventDetails' => [ 'type' => 'structure', 'members' => [ 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'LambdaFunctionScheduleFailedEventDetails' => [ 'type' => 'structure', 'members' => [ 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'LambdaFunctionScheduledEventDetails' => [ 'type' => 'structure', 'required' => [ 'resource', ], 'members' => [ 'resource' => [ 'shape' => 'Arn', ], 'input' => [ 'shape' => 'Data', ], 'timeoutInSeconds' => [ 'shape' => 'TimeoutInSeconds', 'box' => true, ], ], ], 'LambdaFunctionStartFailedEventDetails' => [ 'type' => 'structure', 'members' => [ 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'LambdaFunctionSucceededEventDetails' => [ 'type' => 'structure', 'members' => [ 'output' => [ 'shape' => 'Data', ], ], ], 'LambdaFunctionTimedOutEventDetails' => [ 'type' => 'structure', 'members' => [ 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'ListActivitiesInput' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'PageSize', ], 'nextToken' => [ 'shape' => 'PageToken', ], ], ], 'ListActivitiesOutput' => [ 'type' => 'structure', 'required' => [ 'activities', ], 'members' => [ 'activities' => [ 'shape' => 'ActivityList', ], 'nextToken' => [ 'shape' => 'PageToken', ], ], ], 'ListExecutionsInput' => [ 'type' => 'structure', 'required' => [ 'stateMachineArn', ], 'members' => [ 'stateMachineArn' => [ 'shape' => 'Arn', ], 'statusFilter' => [ 'shape' => 'ExecutionStatus', ], 'maxResults' => [ 'shape' => 'PageSize', ], 'nextToken' => [ 'shape' => 'PageToken', ], ], ], 'ListExecutionsOutput' => [ 'type' => 'structure', 'required' => [ 'executions', ], 'members' => [ 'executions' => [ 'shape' => 'ExecutionList', ], 'nextToken' => [ 'shape' => 'PageToken', ], ], ], 'ListStateMachinesInput' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'PageSize', ], 'nextToken' => [ 'shape' => 'PageToken', ], ], ], 'ListStateMachinesOutput' => [ 'type' => 'structure', 'required' => [ 'stateMachines', ], 'members' => [ 'stateMachines' => [ 'shape' => 'StateMachineList', ], 'nextToken' => [ 'shape' => 'PageToken', ], ], ], 'MissingRequiredParameter' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Name' => [ 'type' => 'string', 'max' => 80, 'min' => 1, ], 'PageSize' => [ 'type' => 'integer', 'max' => 1000, 'min' => 0, ], 'PageToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'ReverseOrder' => [ 'type' => 'boolean', ], 'SendTaskFailureInput' => [ 'type' => 'structure', 'required' => [ 'taskToken', ], 'members' => [ 'taskToken' => [ 'shape' => 'TaskToken', ], 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'SendTaskFailureOutput' => [ 'type' => 'structure', 'members' => [], ], 'SendTaskHeartbeatInput' => [ 'type' => 'structure', 'required' => [ 'taskToken', ], 'members' => [ 'taskToken' => [ 'shape' => 'TaskToken', ], ], ], 'SendTaskHeartbeatOutput' => [ 'type' => 'structure', 'members' => [], ], 'SendTaskSuccessInput' => [ 'type' => 'structure', 'required' => [ 'taskToken', 'output', ], 'members' => [ 'taskToken' => [ 'shape' => 'TaskToken', ], 'output' => [ 'shape' => 'Data', ], ], ], 'SendTaskSuccessOutput' => [ 'type' => 'structure', 'members' => [], ], 'StartExecutionInput' => [ 'type' => 'structure', 'required' => [ 'stateMachineArn', ], 'members' => [ 'stateMachineArn' => [ 'shape' => 'Arn', ], 'name' => [ 'shape' => 'Name', ], 'input' => [ 'shape' => 'Data', ], ], ], 'StartExecutionOutput' => [ 'type' => 'structure', 'required' => [ 'executionArn', 'startDate', ], 'members' => [ 'executionArn' => [ 'shape' => 'Arn', ], 'startDate' => [ 'shape' => 'Timestamp', ], ], ], 'StateEnteredEventDetails' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'Name', ], 'input' => [ 'shape' => 'Data', ], ], ], 'StateExitedEventDetails' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'Name', ], 'output' => [ 'shape' => 'Data', ], ], ], 'StateMachineAlreadyExists' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'StateMachineDeleting' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'StateMachineDoesNotExist' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'StateMachineLimitExceeded' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'StateMachineList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StateMachineListItem', ], ], 'StateMachineListItem' => [ 'type' => 'structure', 'required' => [ 'stateMachineArn', 'name', 'creationDate', ], 'members' => [ 'stateMachineArn' => [ 'shape' => 'Arn', ], 'name' => [ 'shape' => 'Name', ], 'creationDate' => [ 'shape' => 'Timestamp', ], ], ], 'StateMachineStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'DELETING', ], ], 'StopExecutionInput' => [ 'type' => 'structure', 'required' => [ 'executionArn', ], 'members' => [ 'executionArn' => [ 'shape' => 'Arn', ], 'error' => [ 'shape' => 'Error', ], 'cause' => [ 'shape' => 'Cause', ], ], ], 'StopExecutionOutput' => [ 'type' => 'structure', 'required' => [ 'stopDate', ], 'members' => [ 'stopDate' => [ 'shape' => 'Timestamp', ], ], ], 'TaskDoesNotExist' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'TaskTimedOut' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'TaskToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'TimeoutInSeconds' => [ 'type' => 'long', ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UpdateStateMachineInput' => [ 'type' => 'structure', 'required' => [ 'stateMachineArn', ], 'members' => [ 'stateMachineArn' => [ 'shape' => 'Arn', ], 'definition' => [ 'shape' => 'Definition', ], 'roleArn' => [ 'shape' => 'Arn', ], ], ], 'UpdateStateMachineOutput' => [ 'type' => 'structure', 'required' => [ 'updateDate', ], 'members' => [ 'updateDate' => [ 'shape' => 'Timestamp', ], ], ], ],];
