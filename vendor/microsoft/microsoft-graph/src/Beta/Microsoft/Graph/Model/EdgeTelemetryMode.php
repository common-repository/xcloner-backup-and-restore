<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdgeTelemetryMode File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Microsoft\Graph\Core\Enum;

/**
* EdgeTelemetryMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdgeTelemetryMode extends Enum
{
    /**
    * The Enum EdgeTelemetryMode
    */
    const NOT_CONFIGURED = "notConfigured";
    const INTRANET = "intranet";
    const INTERNET = "internet";
    const INTRANET_AND_INTERNET = "intranetAndInternet";
}
