<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantAllowBlockListEntryResult File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }

/**
* TenantAllowBlockListEntryResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantAllowBlockListEntryResult extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the entryType
    * The entry type of tenant allow block list. The possible values are: url, fileHash, sender, recipient and unkownFutureValue.
    *
    * @return TenantAllowBlockListEntryType|null The entryType
    */
    public function getEntryType()
    {
        if (array_key_exists("entryType", $this->_propDict)) {
            if (is_a($this->_propDict["entryType"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\TenantAllowBlockListEntryType") || is_null($this->_propDict["entryType"])) {
                return $this->_propDict["entryType"];
            } else {
                $this->_propDict["entryType"] = new TenantAllowBlockListEntryType($this->_propDict["entryType"]);
                return $this->_propDict["entryType"];
            }
        }
        return null;
    }

    /**
    * Sets the entryType
    * The entry type of tenant allow block list. The possible values are: url, fileHash, sender, recipient and unkownFutureValue.
    *
    * @param TenantAllowBlockListEntryType $val The value to assign to the entryType
    *
    * @return TenantAllowBlockListEntryResult The TenantAllowBlockListEntryResult
    */
    public function setEntryType($val)
    {
        $this->_propDict["entryType"] = $val;
         return $this;
    }

    /**
    * Gets the expirationDateTime
    * Specifies when will this entry expire in date time.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * Specifies when will this entry expire in date time.
    *
    * @param \DateTime $val The value to assign to the expirationDateTime
    *
    * @return TenantAllowBlockListEntryResult The TenantAllowBlockListEntryResult
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the identity
    * Specifies the identity of the entry generated by the tenant allow block list system.
    *
    * @return string|null The identity
    */
    public function getIdentity()
    {
        if (array_key_exists("identity", $this->_propDict)) {
            return $this->_propDict["identity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identity
    * Specifies the identity of the entry generated by the tenant allow block list system.
    *
    * @param string $val The value of the identity
    *
    * @return TenantAllowBlockListEntryResult
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Specifies whether the tenant allow block list entry creation operation was successful. The possible values are: notStarted, running, succeeded, failed, skipped and unkownFutureValue.
    *
    * @return LongRunningOperationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\LongRunningOperationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new LongRunningOperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Specifies whether the tenant allow block list entry creation operation was successful. The possible values are: notStarted, running, succeeded, failed, skipped and unkownFutureValue.
    *
    * @param LongRunningOperationStatus $val The value to assign to the status
    *
    * @return TenantAllowBlockListEntryResult The TenantAllowBlockListEntryResult
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
    /**
    * Gets the value
    * Specifies the value of the created tenant allow block list entry.
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Specifies the value of the created tenant allow block list entry.
    *
    * @param string $val The value of the value
    *
    * @return TenantAllowBlockListEntryResult
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
