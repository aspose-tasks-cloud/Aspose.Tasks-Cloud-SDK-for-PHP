<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GroupCriterion.php">
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
 * GroupCriterion
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * GroupCriterion
 *
 * @description Represents a criterion in a group definition.
 */
class GroupCriterion implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "GroupCriterion";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'field' => '\Aspose\Tasks\Model\Field',
        'ascending' => 'bool',
        'group_on' => '\Aspose\Tasks\Model\GroupOn',
        'group_interval' => 'string',
        'start_at' => 'string',
        'cell_color' => '\Aspose\Tasks\Model\Colors',
        'font_color' => '\Aspose\Tasks\Model\Colors',
        'pattern' => '\Aspose\Tasks\Model\BackgroundPattern',
        'font' => '\Aspose\Tasks\Model\FontInfo'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'field' => null,
        'ascending' => null,
        'group_on' => null,
        'group_interval' => null,
        'start_at' => null,
        'cell_color' => null,
        'font_color' => null,
        'pattern' => null,
        'font' => null
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
        'field' => 'field',
        'ascending' => 'ascending',
        'group_on' => 'groupOn',
        'group_interval' => 'groupInterval',
        'start_at' => 'startAt',
        'cell_color' => 'cellColor',
        'font_color' => 'fontColor',
        'pattern' => 'pattern',
        'font' => 'font'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field' => 'setField',
        'ascending' => 'setAscending',
        'group_on' => 'setGroupOn',
        'group_interval' => 'setGroupInterval',
        'start_at' => 'setStartAt',
        'cell_color' => 'setCellColor',
        'font_color' => 'setFontColor',
        'pattern' => 'setPattern',
        'font' => 'setFont'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field' => 'getField',
        'ascending' => 'getAscending',
        'group_on' => 'getGroupOn',
        'group_interval' => 'getGroupInterval',
        'start_at' => 'getStartAt',
        'cell_color' => 'getCellColor',
        'font_color' => 'getFontColor',
        'pattern' => 'getPattern',
        'font' => 'getFont'
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
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['ascending'] = isset($data['ascending']) ? $data['ascending'] : null;
        $this->container['group_on'] = isset($data['group_on']) ? $data['group_on'] : null;
        $this->container['group_interval'] = isset($data['group_interval']) ? $data['group_interval'] : null;
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['cell_color'] = isset($data['cell_color']) ? $data['cell_color'] : null;
        $this->container['font_color'] = isset($data['font_color']) ? $data['font_color'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        if ($this->container['ascending'] === null) {
            $invalidProperties[] = "'ascending' can't be null";
        }
        if ($this->container['group_on'] === null) {
            $invalidProperties[] = "'group_on' can't be null";
        }
        if ($this->container['cell_color'] === null) {
            $invalidProperties[] = "'cell_color' can't be null";
        }
        if ($this->container['font_color'] === null) {
            $invalidProperties[] = "'font_color' can't be null";
        }
        if ($this->container['pattern'] === null) {
            $invalidProperties[] = "'pattern' can't be null";
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

        if ($this->container['field'] === null) {
            return false;
        }
        if ($this->container['ascending'] === null) {
            return false;
        }
        if ($this->container['group_on'] === null) {
            return false;
        }
        if ($this->container['cell_color'] === null) {
            return false;
        }
        if ($this->container['font_color'] === null) {
            return false;
        }
        if ($this->container['pattern'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets field
     *
     * @return \Aspose\Tasks\Model\Field
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /*
     * Sets field
     *
     * @param \Aspose\Tasks\Model\Field $field Gets or sets the field being grouped by.
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }

    /*
     * Gets ascending
     *
     * @return bool
     */
    public function getAscending()
    {
        return $this->container['ascending'];
    }

    /*
     * Sets ascending
     *
     * @param bool $ascending Gets or sets a value indicating whether a field used as a criterion in a group definition is sorted in ascending order. False if the field is sorted in descending order.
     *
     * @return $this
     */
    public function setAscending($ascending)
    {
        $this->container['ascending'] = $ascending;

        return $this;
    }

    /*
     * Gets group_on
     *
     * @return \Aspose\Tasks\Model\GroupOn
     */
    public function getGroupOn()
    {
        return $this->container['group_on'];
    }

    /*
     * Sets group_on
     *
     * @param \Aspose\Tasks\Model\GroupOn $group_on Gets or sets the type of grouping for a field used as a criterion in a group definition.
     *
     * @return $this
     */
    public function setGroupOn($group_on)
    {
        $this->container['group_on'] = $group_on;

        return $this;
    }

    /*
     * Gets group_interval
     *
     * @return string
     */
    public function getGroupInterval()
    {
        return $this->container['group_interval'];
    }

    /*
     * Sets group_interval
     *
     * @param string $group_interval Gets or sets the interval for a field used as a criterion in a group definition.
     *
     * @return $this
     */
    public function setGroupInterval($group_interval)
    {
        $this->container['group_interval'] = $group_interval;

        return $this;
    }

    /*
     * Gets start_at
     *
     * @return string
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /*
     * Sets start_at
     *
     * @param string $start_at Gets or sets the start of the intervals for a field used as a criterion in a group definition.
     *
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /*
     * Gets cell_color
     *
     * @return \Aspose\Tasks\Model\Colors
     */
    public function getCellColor()
    {
        return $this->container['cell_color'];
    }

    /*
     * Sets cell_color
     *
     * @param \Aspose\Tasks\Model\Colors $cell_color Gets or sets the color of the cell background for a field used as a criterion in a group definition.
     *
     * @return $this
     */
    public function setCellColor($cell_color)
    {
        $this->container['cell_color'] = $cell_color;

        return $this;
    }

    /*
     * Gets font_color
     *
     * @return \Aspose\Tasks\Model\Colors
     */
    public function getFontColor()
    {
        return $this->container['font_color'];
    }

    /*
     * Sets font_color
     *
     * @param \Aspose\Tasks\Model\Colors $font_color Gets or sets the color of the font for a field used as a criterion in a group definition.
     *
     * @return $this
     */
    public function setFontColor($font_color)
    {
        $this->container['font_color'] = $font_color;

        return $this;
    }

    /*
     * Gets pattern
     *
     * @return \Aspose\Tasks\Model\BackgroundPattern
     */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /*
     * Sets pattern
     *
     * @param \Aspose\Tasks\Model\BackgroundPattern $pattern Gets or sets the pattern of the cell for a field used as a criterion in a group definition.
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;

        return $this;
    }

    /*
     * Gets font
     *
     * @return \Aspose\Tasks\Model\FontInfo
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /*
     * Sets font
     *
     * @param \Aspose\Tasks\Model\FontInfo $font Gets or sets the font for a criterion in a group definition.
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

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


