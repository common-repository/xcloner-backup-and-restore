<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintCertificateSigningRequest File
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

/**
* PrintCertificateSigningRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintCertificateSigningRequest extends Entity
{
    /**
    * Gets the content
    * A base64-encoded pkcs10 certificate request. Read-only.
    *
    * @return string|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    * A base64-encoded pkcs10 certificate request. Read-only.
    *
    * @param string $val The value of the content
    *
    * @return PrintCertificateSigningRequest
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    /**
    * Gets the transportKey
    * The base64-encoded public portion of an asymmetric key that is generated by the client. Read-only.
    *
    * @return string|null The transportKey
    */
    public function getTransportKey()
    {
        if (array_key_exists("transportKey", $this->_propDict)) {
            return $this->_propDict["transportKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transportKey
    * The base64-encoded public portion of an asymmetric key that is generated by the client. Read-only.
    *
    * @param string $val The value of the transportKey
    *
    * @return PrintCertificateSigningRequest
    */
    public function setTransportKey($val)
    {
        $this->_propDict["transportKey"] = $val;
        return $this;
    }
}