<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AclType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\ExternalConnectors\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Microsoft\Graph\Core\Enum;

/**
* AclType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AclType extends Enum
{
    /**
    * The Enum AclType
    */
    const USER = "user";
    const GROUP = "group";
    const EVERYONE = "everyone";
    const EVERYONE_EXCEPT_GUESTS = "everyoneExceptGuests";
    const EXTERNAL_GROUP = "externalGroup";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
