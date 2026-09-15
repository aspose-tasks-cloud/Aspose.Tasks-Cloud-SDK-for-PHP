<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PrimaveraTaskProperties.php">
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
 * PrimaveraTaskProperties
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * PrimaveraTaskProperties
 *
 * @description Represents Primavera-specific properties for a task read from Primavera format (XER of P6XML).
 */
class PrimaveraTaskProperties implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PrimaveraTaskProperties";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'sequence_number' => 'int',
        'activity_id' => 'string',
        'remaining_early_finish' => '\DateTime',
        'remaining_early_start' => '\DateTime',
        'remaining_late_start' => '\DateTime',
        'remaining_late_finish' => '\DateTime',
        'raw_duration_type' => 'string',
        'raw_activity_type' => 'string',
        'raw_complete_percent_type' => 'string',
        'raw_status' => 'string',
        'duration_percent_complete' => 'double',
        'physical_percent_complete' => 'double',
        'actual_non_labor_units' => 'double',
        'actual_labor_units' => 'double',
        'units_percent_complete' => 'double',
        'remaining_labor_units' => 'double',
        'remaining_non_labor_units' => 'double',
        'duration_type' => '\Aspose\Tasks\Model\PrimaveraDurationType',
        'activity_type' => '\Aspose\Tasks\Model\PrimaveraActivityType',
        'percent_complete_type' => '\Aspose\Tasks\Model\PrimaveraPercentCompleteType',
        'actual_labor_cost' => 'float',
        'actual_nonlabor_cost' => 'float',
        'actual_material_cost' => 'float',
        'actual_expense_cost' => 'float',
        'remaining_expense_cost' => 'float',
        'actual_total_cost' => 'float',
        'budgeted_total_cost' => 'float',
        'budgeted_labor_cost' => 'float',
        'budgeted_nonlabor_cost' => 'float',
        'budgeted_material_cost' => 'float',
        'budgeted_expense_cost' => 'float',
        'primary_constraint_type' => '\Aspose\Tasks\Model\PrimaveraConstraintType',
        'primary_constraint_date' => '\DateTime',
        'secondary_constraint_type' => '\Aspose\Tasks\Model\PrimaveraConstraintType',
        'secondary_constraint_date' => '\DateTime',
        'planned_duration' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'sequence_number' => 'int32',
        'activity_id' => null,
        'remaining_early_finish' => 'date-time',
        'remaining_early_start' => 'date-time',
        'remaining_late_start' => 'date-time',
        'remaining_late_finish' => 'date-time',
        'raw_duration_type' => null,
        'raw_activity_type' => null,
        'raw_complete_percent_type' => null,
        'raw_status' => null,
        'duration_percent_complete' => 'double',
        'physical_percent_complete' => 'double',
        'actual_non_labor_units' => 'double',
        'actual_labor_units' => 'double',
        'units_percent_complete' => 'double',
        'remaining_labor_units' => 'double',
        'remaining_non_labor_units' => 'double',
        'duration_type' => null,
        'activity_type' => null,
        'percent_complete_type' => null,
        'actual_labor_cost' => 'decimal',
        'actual_nonlabor_cost' => 'decimal',
        'actual_material_cost' => 'decimal',
        'actual_expense_cost' => 'decimal',
        'remaining_expense_cost' => 'decimal',
        'actual_total_cost' => 'decimal',
        'budgeted_total_cost' => 'decimal',
        'budgeted_labor_cost' => 'decimal',
        'budgeted_nonlabor_cost' => 'decimal',
        'budgeted_material_cost' => 'decimal',
        'budgeted_expense_cost' => 'decimal',
        'primary_constraint_type' => null,
        'primary_constraint_date' => 'date-time',
        'secondary_constraint_type' => null,
        'secondary_constraint_date' => 'date-time',
        'planned_duration' => 'time-span'
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
        'sequence_number' => 'sequenceNumber',
        'activity_id' => 'activityId',
        'remaining_early_finish' => 'remainingEarlyFinish',
        'remaining_early_start' => 'remainingEarlyStart',
        'remaining_late_start' => 'remainingLateStart',
        'remaining_late_finish' => 'remainingLateFinish',
        'raw_duration_type' => 'rawDurationType',
        'raw_activity_type' => 'rawActivityType',
        'raw_complete_percent_type' => 'rawCompletePercentType',
        'raw_status' => 'rawStatus',
        'duration_percent_complete' => 'durationPercentComplete',
        'physical_percent_complete' => 'physicalPercentComplete',
        'actual_non_labor_units' => 'actualNonLaborUnits',
        'actual_labor_units' => 'actualLaborUnits',
        'units_percent_complete' => 'unitsPercentComplete',
        'remaining_labor_units' => 'remainingLaborUnits',
        'remaining_non_labor_units' => 'remainingNonLaborUnits',
        'duration_type' => 'durationType',
        'activity_type' => 'activityType',
        'percent_complete_type' => 'percentCompleteType',
        'actual_labor_cost' => 'actualLaborCost',
        'actual_nonlabor_cost' => 'actualNonlaborCost',
        'actual_material_cost' => 'actualMaterialCost',
        'actual_expense_cost' => 'actualExpenseCost',
        'remaining_expense_cost' => 'remainingExpenseCost',
        'actual_total_cost' => 'actualTotalCost',
        'budgeted_total_cost' => 'budgetedTotalCost',
        'budgeted_labor_cost' => 'budgetedLaborCost',
        'budgeted_nonlabor_cost' => 'budgetedNonlaborCost',
        'budgeted_material_cost' => 'budgetedMaterialCost',
        'budgeted_expense_cost' => 'budgetedExpenseCost',
        'primary_constraint_type' => 'primaryConstraintType',
        'primary_constraint_date' => 'primaryConstraintDate',
        'secondary_constraint_type' => 'secondaryConstraintType',
        'secondary_constraint_date' => 'secondaryConstraintDate',
        'planned_duration' => 'plannedDuration'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sequence_number' => 'setSequenceNumber',
        'activity_id' => 'setActivityId',
        'remaining_early_finish' => 'setRemainingEarlyFinish',
        'remaining_early_start' => 'setRemainingEarlyStart',
        'remaining_late_start' => 'setRemainingLateStart',
        'remaining_late_finish' => 'setRemainingLateFinish',
        'raw_duration_type' => 'setRawDurationType',
        'raw_activity_type' => 'setRawActivityType',
        'raw_complete_percent_type' => 'setRawCompletePercentType',
        'raw_status' => 'setRawStatus',
        'duration_percent_complete' => 'setDurationPercentComplete',
        'physical_percent_complete' => 'setPhysicalPercentComplete',
        'actual_non_labor_units' => 'setActualNonLaborUnits',
        'actual_labor_units' => 'setActualLaborUnits',
        'units_percent_complete' => 'setUnitsPercentComplete',
        'remaining_labor_units' => 'setRemainingLaborUnits',
        'remaining_non_labor_units' => 'setRemainingNonLaborUnits',
        'duration_type' => 'setDurationType',
        'activity_type' => 'setActivityType',
        'percent_complete_type' => 'setPercentCompleteType',
        'actual_labor_cost' => 'setActualLaborCost',
        'actual_nonlabor_cost' => 'setActualNonlaborCost',
        'actual_material_cost' => 'setActualMaterialCost',
        'actual_expense_cost' => 'setActualExpenseCost',
        'remaining_expense_cost' => 'setRemainingExpenseCost',
        'actual_total_cost' => 'setActualTotalCost',
        'budgeted_total_cost' => 'setBudgetedTotalCost',
        'budgeted_labor_cost' => 'setBudgetedLaborCost',
        'budgeted_nonlabor_cost' => 'setBudgetedNonlaborCost',
        'budgeted_material_cost' => 'setBudgetedMaterialCost',
        'budgeted_expense_cost' => 'setBudgetedExpenseCost',
        'primary_constraint_type' => 'setPrimaryConstraintType',
        'primary_constraint_date' => 'setPrimaryConstraintDate',
        'secondary_constraint_type' => 'setSecondaryConstraintType',
        'secondary_constraint_date' => 'setSecondaryConstraintDate',
        'planned_duration' => 'setPlannedDuration'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sequence_number' => 'getSequenceNumber',
        'activity_id' => 'getActivityId',
        'remaining_early_finish' => 'getRemainingEarlyFinish',
        'remaining_early_start' => 'getRemainingEarlyStart',
        'remaining_late_start' => 'getRemainingLateStart',
        'remaining_late_finish' => 'getRemainingLateFinish',
        'raw_duration_type' => 'getRawDurationType',
        'raw_activity_type' => 'getRawActivityType',
        'raw_complete_percent_type' => 'getRawCompletePercentType',
        'raw_status' => 'getRawStatus',
        'duration_percent_complete' => 'getDurationPercentComplete',
        'physical_percent_complete' => 'getPhysicalPercentComplete',
        'actual_non_labor_units' => 'getActualNonLaborUnits',
        'actual_labor_units' => 'getActualLaborUnits',
        'units_percent_complete' => 'getUnitsPercentComplete',
        'remaining_labor_units' => 'getRemainingLaborUnits',
        'remaining_non_labor_units' => 'getRemainingNonLaborUnits',
        'duration_type' => 'getDurationType',
        'activity_type' => 'getActivityType',
        'percent_complete_type' => 'getPercentCompleteType',
        'actual_labor_cost' => 'getActualLaborCost',
        'actual_nonlabor_cost' => 'getActualNonlaborCost',
        'actual_material_cost' => 'getActualMaterialCost',
        'actual_expense_cost' => 'getActualExpenseCost',
        'remaining_expense_cost' => 'getRemainingExpenseCost',
        'actual_total_cost' => 'getActualTotalCost',
        'budgeted_total_cost' => 'getBudgetedTotalCost',
        'budgeted_labor_cost' => 'getBudgetedLaborCost',
        'budgeted_nonlabor_cost' => 'getBudgetedNonlaborCost',
        'budgeted_material_cost' => 'getBudgetedMaterialCost',
        'budgeted_expense_cost' => 'getBudgetedExpenseCost',
        'primary_constraint_type' => 'getPrimaryConstraintType',
        'primary_constraint_date' => 'getPrimaryConstraintDate',
        'secondary_constraint_type' => 'getSecondaryConstraintType',
        'secondary_constraint_date' => 'getSecondaryConstraintDate',
        'planned_duration' => 'getPlannedDuration'
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
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['remaining_early_finish'] = isset($data['remaining_early_finish']) ? $data['remaining_early_finish'] : null;
        $this->container['remaining_early_start'] = isset($data['remaining_early_start']) ? $data['remaining_early_start'] : null;
        $this->container['remaining_late_start'] = isset($data['remaining_late_start']) ? $data['remaining_late_start'] : null;
        $this->container['remaining_late_finish'] = isset($data['remaining_late_finish']) ? $data['remaining_late_finish'] : null;
        $this->container['raw_duration_type'] = isset($data['raw_duration_type']) ? $data['raw_duration_type'] : null;
        $this->container['raw_activity_type'] = isset($data['raw_activity_type']) ? $data['raw_activity_type'] : null;
        $this->container['raw_complete_percent_type'] = isset($data['raw_complete_percent_type']) ? $data['raw_complete_percent_type'] : null;
        $this->container['raw_status'] = isset($data['raw_status']) ? $data['raw_status'] : null;
        $this->container['duration_percent_complete'] = isset($data['duration_percent_complete']) ? $data['duration_percent_complete'] : null;
        $this->container['physical_percent_complete'] = isset($data['physical_percent_complete']) ? $data['physical_percent_complete'] : null;
        $this->container['actual_non_labor_units'] = isset($data['actual_non_labor_units']) ? $data['actual_non_labor_units'] : null;
        $this->container['actual_labor_units'] = isset($data['actual_labor_units']) ? $data['actual_labor_units'] : null;
        $this->container['units_percent_complete'] = isset($data['units_percent_complete']) ? $data['units_percent_complete'] : null;
        $this->container['remaining_labor_units'] = isset($data['remaining_labor_units']) ? $data['remaining_labor_units'] : null;
        $this->container['remaining_non_labor_units'] = isset($data['remaining_non_labor_units']) ? $data['remaining_non_labor_units'] : null;
        $this->container['duration_type'] = isset($data['duration_type']) ? $data['duration_type'] : null;
        $this->container['activity_type'] = isset($data['activity_type']) ? $data['activity_type'] : null;
        $this->container['percent_complete_type'] = isset($data['percent_complete_type']) ? $data['percent_complete_type'] : null;
        $this->container['actual_labor_cost'] = isset($data['actual_labor_cost']) ? $data['actual_labor_cost'] : null;
        $this->container['actual_nonlabor_cost'] = isset($data['actual_nonlabor_cost']) ? $data['actual_nonlabor_cost'] : null;
        $this->container['actual_material_cost'] = isset($data['actual_material_cost']) ? $data['actual_material_cost'] : null;
        $this->container['actual_expense_cost'] = isset($data['actual_expense_cost']) ? $data['actual_expense_cost'] : null;
        $this->container['remaining_expense_cost'] = isset($data['remaining_expense_cost']) ? $data['remaining_expense_cost'] : null;
        $this->container['actual_total_cost'] = isset($data['actual_total_cost']) ? $data['actual_total_cost'] : null;
        $this->container['budgeted_total_cost'] = isset($data['budgeted_total_cost']) ? $data['budgeted_total_cost'] : null;
        $this->container['budgeted_labor_cost'] = isset($data['budgeted_labor_cost']) ? $data['budgeted_labor_cost'] : null;
        $this->container['budgeted_nonlabor_cost'] = isset($data['budgeted_nonlabor_cost']) ? $data['budgeted_nonlabor_cost'] : null;
        $this->container['budgeted_material_cost'] = isset($data['budgeted_material_cost']) ? $data['budgeted_material_cost'] : null;
        $this->container['budgeted_expense_cost'] = isset($data['budgeted_expense_cost']) ? $data['budgeted_expense_cost'] : null;
        $this->container['primary_constraint_type'] = isset($data['primary_constraint_type']) ? $data['primary_constraint_type'] : null;
        $this->container['primary_constraint_date'] = isset($data['primary_constraint_date']) ? $data['primary_constraint_date'] : null;
        $this->container['secondary_constraint_type'] = isset($data['secondary_constraint_type']) ? $data['secondary_constraint_type'] : null;
        $this->container['secondary_constraint_date'] = isset($data['secondary_constraint_date']) ? $data['secondary_constraint_date'] : null;
        $this->container['planned_duration'] = isset($data['planned_duration']) ? $data['planned_duration'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
        }
        if ($this->container['remaining_early_finish'] === null) {
            $invalidProperties[] = "'remaining_early_finish' can't be null";
        }
        if ($this->container['remaining_early_start'] === null) {
            $invalidProperties[] = "'remaining_early_start' can't be null";
        }
        if ($this->container['remaining_late_start'] === null) {
            $invalidProperties[] = "'remaining_late_start' can't be null";
        }
        if ($this->container['remaining_late_finish'] === null) {
            $invalidProperties[] = "'remaining_late_finish' can't be null";
        }
        if ($this->container['duration_percent_complete'] === null) {
            $invalidProperties[] = "'duration_percent_complete' can't be null";
        }
        if ($this->container['physical_percent_complete'] === null) {
            $invalidProperties[] = "'physical_percent_complete' can't be null";
        }
        if ($this->container['actual_non_labor_units'] === null) {
            $invalidProperties[] = "'actual_non_labor_units' can't be null";
        }
        if ($this->container['actual_labor_units'] === null) {
            $invalidProperties[] = "'actual_labor_units' can't be null";
        }
        if ($this->container['units_percent_complete'] === null) {
            $invalidProperties[] = "'units_percent_complete' can't be null";
        }
        if ($this->container['remaining_labor_units'] === null) {
            $invalidProperties[] = "'remaining_labor_units' can't be null";
        }
        if ($this->container['remaining_non_labor_units'] === null) {
            $invalidProperties[] = "'remaining_non_labor_units' can't be null";
        }
        if ($this->container['duration_type'] === null) {
            $invalidProperties[] = "'duration_type' can't be null";
        }
        if ($this->container['activity_type'] === null) {
            $invalidProperties[] = "'activity_type' can't be null";
        }
        if ($this->container['percent_complete_type'] === null) {
            $invalidProperties[] = "'percent_complete_type' can't be null";
        }
        if ($this->container['actual_labor_cost'] === null) {
            $invalidProperties[] = "'actual_labor_cost' can't be null";
        }
        if ($this->container['actual_nonlabor_cost'] === null) {
            $invalidProperties[] = "'actual_nonlabor_cost' can't be null";
        }
        if ($this->container['actual_material_cost'] === null) {
            $invalidProperties[] = "'actual_material_cost' can't be null";
        }
        if ($this->container['actual_expense_cost'] === null) {
            $invalidProperties[] = "'actual_expense_cost' can't be null";
        }
        if ($this->container['remaining_expense_cost'] === null) {
            $invalidProperties[] = "'remaining_expense_cost' can't be null";
        }
        if ($this->container['actual_total_cost'] === null) {
            $invalidProperties[] = "'actual_total_cost' can't be null";
        }
        if ($this->container['budgeted_total_cost'] === null) {
            $invalidProperties[] = "'budgeted_total_cost' can't be null";
        }
        if ($this->container['budgeted_labor_cost'] === null) {
            $invalidProperties[] = "'budgeted_labor_cost' can't be null";
        }
        if ($this->container['budgeted_nonlabor_cost'] === null) {
            $invalidProperties[] = "'budgeted_nonlabor_cost' can't be null";
        }
        if ($this->container['budgeted_material_cost'] === null) {
            $invalidProperties[] = "'budgeted_material_cost' can't be null";
        }
        if ($this->container['budgeted_expense_cost'] === null) {
            $invalidProperties[] = "'budgeted_expense_cost' can't be null";
        }
        if ($this->container['primary_constraint_type'] === null) {
            $invalidProperties[] = "'primary_constraint_type' can't be null";
        }
        if ($this->container['primary_constraint_date'] === null) {
            $invalidProperties[] = "'primary_constraint_date' can't be null";
        }
        if ($this->container['secondary_constraint_type'] === null) {
            $invalidProperties[] = "'secondary_constraint_type' can't be null";
        }
        if ($this->container['secondary_constraint_date'] === null) {
            $invalidProperties[] = "'secondary_constraint_date' can't be null";
        }
        if ($this->container['planned_duration'] === null) {
            $invalidProperties[] = "'planned_duration' can't be null";
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

        if ($this->container['sequence_number'] === null) {
            return false;
        }
        if ($this->container['remaining_early_finish'] === null) {
            return false;
        }
        if ($this->container['remaining_early_start'] === null) {
            return false;
        }
        if ($this->container['remaining_late_start'] === null) {
            return false;
        }
        if ($this->container['remaining_late_finish'] === null) {
            return false;
        }
        if ($this->container['duration_percent_complete'] === null) {
            return false;
        }
        if ($this->container['physical_percent_complete'] === null) {
            return false;
        }
        if ($this->container['actual_non_labor_units'] === null) {
            return false;
        }
        if ($this->container['actual_labor_units'] === null) {
            return false;
        }
        if ($this->container['units_percent_complete'] === null) {
            return false;
        }
        if ($this->container['remaining_labor_units'] === null) {
            return false;
        }
        if ($this->container['remaining_non_labor_units'] === null) {
            return false;
        }
        if ($this->container['duration_type'] === null) {
            return false;
        }
        if ($this->container['activity_type'] === null) {
            return false;
        }
        if ($this->container['percent_complete_type'] === null) {
            return false;
        }
        if ($this->container['actual_labor_cost'] === null) {
            return false;
        }
        if ($this->container['actual_nonlabor_cost'] === null) {
            return false;
        }
        if ($this->container['actual_material_cost'] === null) {
            return false;
        }
        if ($this->container['actual_expense_cost'] === null) {
            return false;
        }
        if ($this->container['remaining_expense_cost'] === null) {
            return false;
        }
        if ($this->container['actual_total_cost'] === null) {
            return false;
        }
        if ($this->container['budgeted_total_cost'] === null) {
            return false;
        }
        if ($this->container['budgeted_labor_cost'] === null) {
            return false;
        }
        if ($this->container['budgeted_nonlabor_cost'] === null) {
            return false;
        }
        if ($this->container['budgeted_material_cost'] === null) {
            return false;
        }
        if ($this->container['budgeted_expense_cost'] === null) {
            return false;
        }
        if ($this->container['primary_constraint_type'] === null) {
            return false;
        }
        if ($this->container['primary_constraint_date'] === null) {
            return false;
        }
        if ($this->container['secondary_constraint_type'] === null) {
            return false;
        }
        if ($this->container['secondary_constraint_date'] === null) {
            return false;
        }
        if ($this->container['planned_duration'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets sequence_number
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /*
     * Sets sequence_number
     *
     * @param int $sequence_number The sequence number of the WBS item (summary tasks). It is used to sort summary tasks in Primavera.
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /*
     * Gets activity_id
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /*
     * Sets activity_id
     *
     * @param string $activity_id Activity id field - a task's unique identifier used by Primavera.
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /*
     * Gets remaining_early_finish
     *
     * @return \DateTime
     */
    public function getRemainingEarlyFinish()
    {
        return $this->container['remaining_early_finish'];
    }

    /*
     * Sets remaining_early_finish
     *
     * @param \DateTime $remaining_early_finish Remaining early finish date - the date when the remaining work for the activity is scheduled to be finished.
     *
     * @return $this
     */
    public function setRemainingEarlyFinish($remaining_early_finish)
    {
        $this->container['remaining_early_finish'] = $remaining_early_finish;

        return $this;
    }

    /*
     * Gets remaining_early_start
     *
     * @return \DateTime
     */
    public function getRemainingEarlyStart()
    {
        return $this->container['remaining_early_start'];
    }

    /*
     * Sets remaining_early_start
     *
     * @param \DateTime $remaining_early_start Remaining early start date - the date when the remaining work for the activity is scheduled to begin.
     *
     * @return $this
     */
    public function setRemainingEarlyStart($remaining_early_start)
    {
        $this->container['remaining_early_start'] = $remaining_early_start;

        return $this;
    }

    /*
     * Gets remaining_late_start
     *
     * @return \DateTime
     */
    public function getRemainingLateStart()
    {
        return $this->container['remaining_late_start'];
    }

    /*
     * Sets remaining_late_start
     *
     * @param \DateTime $remaining_late_start Remaining late start date.
     *
     * @return $this
     */
    public function setRemainingLateStart($remaining_late_start)
    {
        $this->container['remaining_late_start'] = $remaining_late_start;

        return $this;
    }

    /*
     * Gets remaining_late_finish
     *
     * @return \DateTime
     */
    public function getRemainingLateFinish()
    {
        return $this->container['remaining_late_finish'];
    }

    /*
     * Sets remaining_late_finish
     *
     * @param \DateTime $remaining_late_finish Remaining late finish date.
     *
     * @return $this
     */
    public function setRemainingLateFinish($remaining_late_finish)
    {
        $this->container['remaining_late_finish'] = $remaining_late_finish;

        return $this;
    }

    /*
     * Gets raw_duration_type
     *
     * @return string
     */
    public function getRawDurationType()
    {
        return $this->container['raw_duration_type'];
    }

    /*
     * Sets raw_duration_type
     *
     * @param string $raw_duration_type Raw text representation (as in source file) of 'Duration Type' field of the activity.
     *
     * @return $this
     */
    public function setRawDurationType($raw_duration_type)
    {
        $this->container['raw_duration_type'] = $raw_duration_type;

        return $this;
    }

    /*
     * Gets raw_activity_type
     *
     * @return string
     */
    public function getRawActivityType()
    {
        return $this->container['raw_activity_type'];
    }

    /*
     * Sets raw_activity_type
     *
     * @param string $raw_activity_type Raw text representation (as in source file) of 'Activity Type' field of the activity.
     *
     * @return $this
     */
    public function setRawActivityType($raw_activity_type)
    {
        $this->container['raw_activity_type'] = $raw_activity_type;

        return $this;
    }

    /*
     * Gets raw_complete_percent_type
     *
     * @return string
     */
    public function getRawCompletePercentType()
    {
        return $this->container['raw_complete_percent_type'];
    }

    /*
     * Sets raw_complete_percent_type
     *
     * @param string $raw_complete_percent_type Raw text representation (as in source file) of '% Complete Type' field of the activity.
     *
     * @return $this
     */
    public function setRawCompletePercentType($raw_complete_percent_type)
    {
        $this->container['raw_complete_percent_type'] = $raw_complete_percent_type;

        return $this;
    }

    /*
     * Gets raw_status
     *
     * @return string
     */
    public function getRawStatus()
    {
        return $this->container['raw_status'];
    }

    /*
     * Sets raw_status
     *
     * @param string $raw_status Raw text representation (as in source file) of 'Status' field of the activity.
     *
     * @return $this
     */
    public function setRawStatus($raw_status)
    {
        $this->container['raw_status'] = $raw_status;

        return $this;
    }

    /*
     * Gets duration_percent_complete
     *
     * @return double
     */
    public function getDurationPercentComplete()
    {
        return $this->container['duration_percent_complete'];
    }

    /*
     * Sets duration_percent_complete
     *
     * @param double $duration_percent_complete Gets the value of duration percent complete.
     *
     * @return $this
     */
    public function setDurationPercentComplete($duration_percent_complete)
    {
        $this->container['duration_percent_complete'] = $duration_percent_complete;

        return $this;
    }

    /*
     * Gets physical_percent_complete
     *
     * @return double
     */
    public function getPhysicalPercentComplete()
    {
        return $this->container['physical_percent_complete'];
    }

    /*
     * Sets physical_percent_complete
     *
     * @param double $physical_percent_complete Gets the value of Physical Percent Complete.
     *
     * @return $this
     */
    public function setPhysicalPercentComplete($physical_percent_complete)
    {
        $this->container['physical_percent_complete'] = $physical_percent_complete;

        return $this;
    }

    /*
     * Gets actual_non_labor_units
     *
     * @return double
     */
    public function getActualNonLaborUnits()
    {
        return $this->container['actual_non_labor_units'];
    }

    /*
     * Sets actual_non_labor_units
     *
     * @param double $actual_non_labor_units Gets the value of actual non labor units.
     *
     * @return $this
     */
    public function setActualNonLaborUnits($actual_non_labor_units)
    {
        $this->container['actual_non_labor_units'] = $actual_non_labor_units;

        return $this;
    }

    /*
     * Gets actual_labor_units
     *
     * @return double
     */
    public function getActualLaborUnits()
    {
        return $this->container['actual_labor_units'];
    }

    /*
     * Sets actual_labor_units
     *
     * @param double $actual_labor_units Gets the value of actual labor units.
     *
     * @return $this
     */
    public function setActualLaborUnits($actual_labor_units)
    {
        $this->container['actual_labor_units'] = $actual_labor_units;

        return $this;
    }

    /*
     * Gets units_percent_complete
     *
     * @return double
     */
    public function getUnitsPercentComplete()
    {
        return $this->container['units_percent_complete'];
    }

    /*
     * Sets units_percent_complete
     *
     * @param double $units_percent_complete Gets the value of units percent complete.
     *
     * @return $this
     */
    public function setUnitsPercentComplete($units_percent_complete)
    {
        $this->container['units_percent_complete'] = $units_percent_complete;

        return $this;
    }

    /*
     * Gets remaining_labor_units
     *
     * @return double
     */
    public function getRemainingLaborUnits()
    {
        return $this->container['remaining_labor_units'];
    }

    /*
     * Sets remaining_labor_units
     *
     * @param double $remaining_labor_units Gets the value of remaining labor units.
     *
     * @return $this
     */
    public function setRemainingLaborUnits($remaining_labor_units)
    {
        $this->container['remaining_labor_units'] = $remaining_labor_units;

        return $this;
    }

    /*
     * Gets remaining_non_labor_units
     *
     * @return double
     */
    public function getRemainingNonLaborUnits()
    {
        return $this->container['remaining_non_labor_units'];
    }

    /*
     * Sets remaining_non_labor_units
     *
     * @param double $remaining_non_labor_units Gets the value of remaining non labor units.
     *
     * @return $this
     */
    public function setRemainingNonLaborUnits($remaining_non_labor_units)
    {
        $this->container['remaining_non_labor_units'] = $remaining_non_labor_units;

        return $this;
    }

    /*
     * Gets duration_type
     *
     * @return \Aspose\Tasks\Model\PrimaveraDurationType
     */
    public function getDurationType()
    {
        return $this->container['duration_type'];
    }

    /*
     * Sets duration_type
     *
     * @param \Aspose\Tasks\Model\PrimaveraDurationType $duration_type Gets the value of 'Duration Type' field of the activity.
     *
     * @return $this
     */
    public function setDurationType($duration_type)
    {
        $this->container['duration_type'] = $duration_type;

        return $this;
    }

    /*
     * Gets activity_type
     *
     * @return \Aspose\Tasks\Model\PrimaveraActivityType
     */
    public function getActivityType()
    {
        return $this->container['activity_type'];
    }

    /*
     * Sets activity_type
     *
     * @param \Aspose\Tasks\Model\PrimaveraActivityType $activity_type Gets the value of 'Activity Type' field.
     *
     * @return $this
     */
    public function setActivityType($activity_type)
    {
        $this->container['activity_type'] = $activity_type;

        return $this;
    }

    /*
     * Gets percent_complete_type
     *
     * @return \Aspose\Tasks\Model\PrimaveraPercentCompleteType
     */
    public function getPercentCompleteType()
    {
        return $this->container['percent_complete_type'];
    }

    /*
     * Sets percent_complete_type
     *
     * @param \Aspose\Tasks\Model\PrimaveraPercentCompleteType $percent_complete_type Gets the value of '% Complete Type' field of the activity.
     *
     * @return $this
     */
    public function setPercentCompleteType($percent_complete_type)
    {
        $this->container['percent_complete_type'] = $percent_complete_type;

        return $this;
    }

    /*
     * Gets actual_labor_cost
     *
     * @return float
     */
    public function getActualLaborCost()
    {
        return $this->container['actual_labor_cost'];
    }

    /*
     * Sets actual_labor_cost
     *
     * @param float $actual_labor_cost Gets the value of actual labor cost.
     *
     * @return $this
     */
    public function setActualLaborCost($actual_labor_cost)
    {
        $this->container['actual_labor_cost'] = $actual_labor_cost;

        return $this;
    }

    /*
     * Gets actual_nonlabor_cost
     *
     * @return float
     */
    public function getActualNonlaborCost()
    {
        return $this->container['actual_nonlabor_cost'];
    }

    /*
     * Sets actual_nonlabor_cost
     *
     * @param float $actual_nonlabor_cost Gets the value of actual non labor cost.
     *
     * @return $this
     */
    public function setActualNonlaborCost($actual_nonlabor_cost)
    {
        $this->container['actual_nonlabor_cost'] = $actual_nonlabor_cost;

        return $this;
    }

    /*
     * Gets actual_material_cost
     *
     * @return float
     */
    public function getActualMaterialCost()
    {
        return $this->container['actual_material_cost'];
    }

    /*
     * Sets actual_material_cost
     *
     * @param float $actual_material_cost Gets the value of actual material cost.
     *
     * @return $this
     */
    public function setActualMaterialCost($actual_material_cost)
    {
        $this->container['actual_material_cost'] = $actual_material_cost;

        return $this;
    }

    /*
     * Gets actual_expense_cost
     *
     * @return float
     */
    public function getActualExpenseCost()
    {
        return $this->container['actual_expense_cost'];
    }

    /*
     * Sets actual_expense_cost
     *
     * @param float $actual_expense_cost Gets the value of actual expense cost.
     *
     * @return $this
     */
    public function setActualExpenseCost($actual_expense_cost)
    {
        $this->container['actual_expense_cost'] = $actual_expense_cost;

        return $this;
    }

    /*
     * Gets remaining_expense_cost
     *
     * @return float
     */
    public function getRemainingExpenseCost()
    {
        return $this->container['remaining_expense_cost'];
    }

    /*
     * Sets remaining_expense_cost
     *
     * @param float $remaining_expense_cost Gets the value of remaining expense cost.
     *
     * @return $this
     */
    public function setRemainingExpenseCost($remaining_expense_cost)
    {
        $this->container['remaining_expense_cost'] = $remaining_expense_cost;

        return $this;
    }

    /*
     * Gets actual_total_cost
     *
     * @return float
     */
    public function getActualTotalCost()
    {
        return $this->container['actual_total_cost'];
    }

    /*
     * Sets actual_total_cost
     *
     * @param float $actual_total_cost Gets the total value of actual costs.
     *
     * @return $this
     */
    public function setActualTotalCost($actual_total_cost)
    {
        $this->container['actual_total_cost'] = $actual_total_cost;

        return $this;
    }

    /*
     * Gets budgeted_total_cost
     *
     * @return float
     */
    public function getBudgetedTotalCost()
    {
        return $this->container['budgeted_total_cost'];
    }

    /*
     * Sets budgeted_total_cost
     *
     * @param float $budgeted_total_cost Gets the total value of budgeted (or planned) costs.
     *
     * @return $this
     */
    public function setBudgetedTotalCost($budgeted_total_cost)
    {
        $this->container['budgeted_total_cost'] = $budgeted_total_cost;

        return $this;
    }

    /*
     * Gets budgeted_labor_cost
     *
     * @return float
     */
    public function getBudgetedLaborCost()
    {
        return $this->container['budgeted_labor_cost'];
    }

    /*
     * Sets budgeted_labor_cost
     *
     * @param float $budgeted_labor_cost Gets the value of budgeted (or planned) labor cost.
     *
     * @return $this
     */
    public function setBudgetedLaborCost($budgeted_labor_cost)
    {
        $this->container['budgeted_labor_cost'] = $budgeted_labor_cost;

        return $this;
    }

    /*
     * Gets budgeted_nonlabor_cost
     *
     * @return float
     */
    public function getBudgetedNonlaborCost()
    {
        return $this->container['budgeted_nonlabor_cost'];
    }

    /*
     * Sets budgeted_nonlabor_cost
     *
     * @param float $budgeted_nonlabor_cost Gets the value of budgeted (or planned) non labor cost.
     *
     * @return $this
     */
    public function setBudgetedNonlaborCost($budgeted_nonlabor_cost)
    {
        $this->container['budgeted_nonlabor_cost'] = $budgeted_nonlabor_cost;

        return $this;
    }

    /*
     * Gets budgeted_material_cost
     *
     * @return float
     */
    public function getBudgetedMaterialCost()
    {
        return $this->container['budgeted_material_cost'];
    }

    /*
     * Sets budgeted_material_cost
     *
     * @param float $budgeted_material_cost Gets the value of of budgeted (or planned) material cost.
     *
     * @return $this
     */
    public function setBudgetedMaterialCost($budgeted_material_cost)
    {
        $this->container['budgeted_material_cost'] = $budgeted_material_cost;

        return $this;
    }

    /*
     * Gets budgeted_expense_cost
     *
     * @return float
     */
    public function getBudgetedExpenseCost()
    {
        return $this->container['budgeted_expense_cost'];
    }

    /*
     * Sets budgeted_expense_cost
     *
     * @param float $budgeted_expense_cost Gets the value of budgeted (or planned) expense cost.
     *
     * @return $this
     */
    public function setBudgetedExpenseCost($budgeted_expense_cost)
    {
        $this->container['budgeted_expense_cost'] = $budgeted_expense_cost;

        return $this;
    }

    /*
     * Gets primary_constraint_type
     *
     * @return \Aspose\Tasks\Model\PrimaveraConstraintType
     */
    public function getPrimaryConstraintType()
    {
        return $this->container['primary_constraint_type'];
    }

    /*
     * Sets primary_constraint_type
     *
     * @param \Aspose\Tasks\Model\PrimaveraConstraintType $primary_constraint_type Gets a type of primary constraint.
     *
     * @return $this
     */
    public function setPrimaryConstraintType($primary_constraint_type)
    {
        $this->container['primary_constraint_type'] = $primary_constraint_type;

        return $this;
    }

    /*
     * Gets primary_constraint_date
     *
     * @return \DateTime
     */
    public function getPrimaryConstraintDate()
    {
        return $this->container['primary_constraint_date'];
    }

    /*
     * Sets primary_constraint_date
     *
     * @param \DateTime $primary_constraint_date Gets the date of primary constraint.
     *
     * @return $this
     */
    public function setPrimaryConstraintDate($primary_constraint_date)
    {
        $this->container['primary_constraint_date'] = $primary_constraint_date;

        return $this;
    }

    /*
     * Gets secondary_constraint_type
     *
     * @return \Aspose\Tasks\Model\PrimaveraConstraintType
     */
    public function getSecondaryConstraintType()
    {
        return $this->container['secondary_constraint_type'];
    }

    /*
     * Sets secondary_constraint_type
     *
     * @param \Aspose\Tasks\Model\PrimaveraConstraintType $secondary_constraint_type Gets a type of secondary constraint.
     *
     * @return $this
     */
    public function setSecondaryConstraintType($secondary_constraint_type)
    {
        $this->container['secondary_constraint_type'] = $secondary_constraint_type;

        return $this;
    }

    /*
     * Gets secondary_constraint_date
     *
     * @return \DateTime
     */
    public function getSecondaryConstraintDate()
    {
        return $this->container['secondary_constraint_date'];
    }

    /*
     * Sets secondary_constraint_date
     *
     * @param \DateTime $secondary_constraint_date Gets the date of secondary constraint.
     *
     * @return $this
     */
    public function setSecondaryConstraintDate($secondary_constraint_date)
    {
        $this->container['secondary_constraint_date'] = $secondary_constraint_date;

        return $this;
    }

    /*
     * Gets planned_duration
     *
     * @return string
     */
    public function getPlannedDuration()
    {
        return $this->container['planned_duration'];
    }

    /*
     * Sets planned_duration
     *
     * @param string $planned_duration Gets the original or planned duration -- the total working time from the task planned start date to the planned finish date.
     *
     * @return $this
     */
    public function setPlannedDuration($planned_duration)
    {
        $this->container['planned_duration'] = $planned_duration;

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


