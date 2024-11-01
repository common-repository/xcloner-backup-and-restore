<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleAssignmentScheduleRequestFilterByCurrentUserOptions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Microsoft\Graph\Core\Enum;

/**
* RoleAssignmentScheduleRequestFilterByCurrentUserOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleAssignmentScheduleRequestFilterByCurrentUserOptions extends Enum
{
    /**
    * The Enum RoleAssignmentScheduleRequestFilterByCurrentUserOptions
    */
    const PRINCIPAL = "principal";
    const CREATED_BY = "createdBy";
    const APPROVER = "approver";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
