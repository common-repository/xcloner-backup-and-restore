<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectionOperationStatus File
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
* ConnectionOperationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectionOperationStatus extends Enum
{
    /**
    * The Enum ConnectionOperationStatus
    */
    const UNSPECIFIED = "unspecified";
    const INPROGRESS = "inprogress";
    const COMPLETED = "completed";
    const FAILED = "failed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
