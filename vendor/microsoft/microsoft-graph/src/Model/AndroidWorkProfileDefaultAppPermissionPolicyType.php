<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidWorkProfileDefaultAppPermissionPolicyType File
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
* AndroidWorkProfileDefaultAppPermissionPolicyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidWorkProfileDefaultAppPermissionPolicyType extends Enum
{
    /**
    * The Enum AndroidWorkProfileDefaultAppPermissionPolicyType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const PROMPT = "prompt";
    const AUTO_GRANT = "autoGrant";
    const AUTO_DENY = "autoDeny";
}
