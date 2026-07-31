<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Group.php">
 *   Copyright (c) 2021 Aspose.Tasks Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */
/*
 * Group
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * Group
 *
 * @description Represents a group definition. A Group object is a member of the ResourceGroups collection or the TaskGroups collection.
 */
class Group implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Group";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'uid' => 'int',
        'name' => 'string',
        'show_in_menu' => 'bool',
        'show_summary' => 'bool',
        'maintain_hierarchy' => 'bool',
        'group_assignments' => 'bool',
        'group_criteria' => '\Aspose\Tasks\Model\GroupCriterion[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'uid' => 'int32',
        'name' => null,
        'show_in_menu' => null,
        'show_summary' => null,
        'maintain_hierarchy' => null,
        'group_assignments' => null,
        'group_criteria' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uid' => 'uid',
        'name' => 'name',
        'show_in_menu' => 'showInMenu',
        'show_summary' => 'showSummary',
        'maintain_hierarchy' => 'maintainHierarchy',
        'group_assignments' => 'groupAssignments',
        'group_criteria' => 'groupCriteria'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'name' => 'setName',
        'show_in_menu' => 'setShowInMenu',
        'show_summary' => 'setShowSummary',
        'maintain_hierarchy' => 'setMaintainHierarchy',
        'group_assignments' => 'setGroupAssignments',
        'group_criteria' => 'setGroupCriteria'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'name' => 'getName',
        'show_in_menu' => 'getShowInMenu',
        'show_summary' => 'getShowSummary',
        'maintain_hierarchy' => 'getMaintainHierarchy',
        'group_assignments' => 'getGroupAssignments',
        'group_criteria' => 'getGroupCriteria'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['show_in_menu'] = isset($data['show_in_menu']) ? $data['show_in_menu'] : null;
        $this->container['show_summary'] = isset($data['show_summary']) ? $data['show_summary'] : null;
        $this->container['maintain_hierarchy'] = isset($data['maintain_hierarchy']) ? $data['maintain_hierarchy'] : null;
        $this->container['group_assignments'] = isset($data['group_assignments']) ? $data['group_assignments'] : null;
        $this->container['group_criteria'] = isset($data['group_criteria']) ? $data['group_criteria'] : array();
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uid'] === null) {
            $invalidProperties[] = "'uid' can't be null";
        }
        if ($this->container['show_in_menu'] === null) {
            $invalidProperties[] = "'show_in_menu' can't be null";
        }
        if ($this->container['show_summary'] === null) {
            $invalidProperties[] = "'show_summary' can't be null";
        }
        if ($this->container['maintain_hierarchy'] === null) {
            $invalidProperties[] = "'maintain_hierarchy' can't be null";
        }
        if ($this->container['group_assignments'] === null) {
            $invalidProperties[] = "'group_assignments' can't be null";
        }
        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['uid'] === null) {
            return false;
        }
        if ($this->container['show_in_menu'] === null) {
            return false;
        }
        if ($this->container['show_summary'] === null) {
            return false;
        }
        if ($this->container['maintain_hierarchy'] === null) {
            return false;
        }
        if ($this->container['group_assignments'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets uid
     *
     * @return int
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /*
     * Sets uid
     *
     * @param int $uid Gets or sets a unique identifier of a group.
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /*
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /*
     * Sets name
     *
     * @param string $name Gets or sets a name of a Group object.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /*
     * Gets show_in_menu
     *
     * @return bool
     */
    public function getShowInMenu()
    {
        return $this->container['show_in_menu'];
    }

    /*
     * Sets show_in_menu
     *
     * @param bool $show_in_menu Gets or sets a value indicating whether Project shows the group name in the Group drop-down list in the Ribbon.
     *
     * @return $this
     */
    public function setShowInMenu($show_in_menu)
    {
        $this->container['show_in_menu'] = $show_in_menu;

        return $this;
    }

    /*
     * Gets show_summary
     *
     * @return bool
     */
    public function getShowSummary()
    {
        return $this->container['show_summary'];
    }

    /*
     * Sets show_summary
     *
     * @param bool $show_summary Gets or sets a value indicating whether summary rows are displayed for the group.
     *
     * @return $this
     */
    public function setShowSummary($show_summary)
    {
        $this->container['show_summary'] = $show_summary;

        return $this;
    }

    /*
     * Gets maintain_hierarchy
     *
     * @return bool
     */
    public function getMaintainHierarchy()
    {
        return $this->container['maintain_hierarchy'];
    }

    /*
     * Sets maintain_hierarchy
     *
     * @param bool $maintain_hierarchy Gets or sets a value indicating whether to show all the levels of summary tasks for subtasks within group.
     *
     * @return $this
     */
    public function setMaintainHierarchy($maintain_hierarchy)
    {
        $this->container['maintain_hierarchy'] = $maintain_hierarchy;

        return $this;
    }

    /*
     * Gets group_assignments
     *
     * @return bool
     */
    public function getGroupAssignments()
    {
        return $this->container['group_assignments'];
    }

    /*
     * Sets group_assignments
     *
     * @param bool $group_assignments Gets or sets a value indicating whether assignments should be grouped instead of tasks.
     *
     * @return $this
     */
    public function setGroupAssignments($group_assignments)
    {
        $this->container['group_assignments'] = $group_assignments;

        return $this;
    }

    /*
     * Gets group_criteria
     *
     * @return \Aspose\Tasks\Model\GroupCriterion[]
     */
    public function getGroupCriteria()
    {
        return $this->container['group_criteria'];
    }

    /*
     * Sets group_criteria
     *
     * @param \Aspose\Tasks\Model\GroupCriterion[] $group_criteria Gets or sets a collection of criteria representing the fields in a group definition.
     *
     * @return $this
     */
    public function setGroupCriteria($group_criteria)
    {
        $this->container['group_criteria'] = $group_criteria;

        return $this;
    }
    /*
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /*
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /*
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /*
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /*
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


