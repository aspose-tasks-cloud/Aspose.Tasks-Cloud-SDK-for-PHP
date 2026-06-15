<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Resource.php">
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
 * Resource
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * Resource
 *
 * @description Represents a project resource.
 */
class Resource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Resource";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'is_root' => 'bool',
        'name' => 'string',
        'uid' => 'int',
        'id' => 'int',
        'guid' => 'string',
        'type' => '\Aspose\Tasks\Model\ResourceType',
        'is_null' => 'bool',
        'initials' => 'string',
        'phonetics' => 'string',
        'nt_account' => 'string',
        'windows_user_account' => 'string',
        'workgroup' => '\Aspose\Tasks\Model\WorkGroupType',
        'material_label' => 'string',
        'code' => 'string',
        'group' => 'string',
        'email_address' => 'string',
        'hyperlink' => 'string',
        'hyperlink_address' => 'string',
        'hyperlink_sub_address' => 'string',
        'max_units' => 'double',
        'peak_units' => 'double',
        'over_allocated' => 'bool',
        'available_from' => '\DateTime',
        'available_to' => '\DateTime',
        'start' => '\DateTime',
        'finish' => '\DateTime',
        'can_level' => 'bool',
        'accrue_at' => '\Aspose\Tasks\Model\CostAccrualType',
        'work' => 'string',
        'regular_work' => 'string',
        'overtime_work' => 'string',
        'actual_work' => 'string',
        'remaining_work' => 'string',
        'actual_overtime_work' => 'string',
        'remaining_overtime_work' => 'string',
        'percent_work_complete' => 'int',
        'standard_rate' => 'float',
        'standard_rate_format' => '\Aspose\Tasks\Model\RateFormatType',
        'cost' => 'float',
        'overtime_rate_format' => '\Aspose\Tasks\Model\RateFormatType',
        'overtime_cost' => 'float',
        'cost_per_use' => 'float',
        'actual_cost' => 'float',
        'actual_overtime_cost' => 'float',
        'remaining_cost' => 'float',
        'remaining_overtime_cost' => 'float',
        'work_variance' => 'double',
        'cost_variance' => 'double',
        'sv' => 'double',
        'cv' => 'double',
        'acwp' => 'double',
        'calendar_uid' => 'int',
        'notes_text' => 'string',
        'notes' => 'string',
        'notes_rtf' => 'string',
        'bcws' => 'double',
        'bcwp' => 'double',
        'is_generic' => 'bool',
        'is_inactive' => 'bool',
        'is_enterprise' => 'bool',
        'booking_type' => '\Aspose\Tasks\Model\BookingType',
        'actual_work_protected' => 'string',
        'actual_overtime_work_protected' => 'string',
        'active_directory_guid' => 'string',
        'creation_date' => '\DateTime',
        'cost_center' => 'string',
        'is_cost_resource' => 'bool',
        'team_assignment_pool' => 'bool',
        'assignment_owner' => 'string',
        'assignment_owner_guid' => 'string',
        'is_budget' => 'bool',
        'budget_work' => 'string',
        'budget_cost' => 'float',
        'overtime_rate' => 'float',
        'baselines' => '\Aspose\Tasks\Model\Baseline[]',
        'extended_attributes' => '\Aspose\Tasks\Model\ExtendedAttribute[]',
        'outline_codes' => '\Aspose\Tasks\Model\OutlineCode[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'is_root' => null,
        'name' => null,
        'uid' => 'int32',
        'id' => 'int32',
        'guid' => null,
        'type' => null,
        'is_null' => null,
        'initials' => null,
        'phonetics' => null,
        'nt_account' => null,
        'windows_user_account' => null,
        'workgroup' => null,
        'material_label' => null,
        'code' => null,
        'group' => null,
        'email_address' => null,
        'hyperlink' => null,
        'hyperlink_address' => null,
        'hyperlink_sub_address' => null,
        'max_units' => 'double',
        'peak_units' => 'double',
        'over_allocated' => null,
        'available_from' => 'date-time',
        'available_to' => 'date-time',
        'start' => 'date-time',
        'finish' => 'date-time',
        'can_level' => null,
        'accrue_at' => null,
        'work' => 'time-span',
        'regular_work' => 'time-span',
        'overtime_work' => 'time-span',
        'actual_work' => 'time-span',
        'remaining_work' => 'time-span',
        'actual_overtime_work' => 'time-span',
        'remaining_overtime_work' => 'time-span',
        'percent_work_complete' => 'int32',
        'standard_rate' => 'decimal',
        'standard_rate_format' => null,
        'cost' => 'decimal',
        'overtime_rate_format' => null,
        'overtime_cost' => 'decimal',
        'cost_per_use' => 'decimal',
        'actual_cost' => 'decimal',
        'actual_overtime_cost' => 'decimal',
        'remaining_cost' => 'decimal',
        'remaining_overtime_cost' => 'decimal',
        'work_variance' => 'double',
        'cost_variance' => 'double',
        'sv' => 'double',
        'cv' => 'double',
        'acwp' => 'double',
        'calendar_uid' => 'int32',
        'notes_text' => null,
        'notes' => null,
        'notes_rtf' => null,
        'bcws' => 'double',
        'bcwp' => 'double',
        'is_generic' => null,
        'is_inactive' => null,
        'is_enterprise' => null,
        'booking_type' => null,
        'actual_work_protected' => 'time-span',
        'actual_overtime_work_protected' => 'time-span',
        'active_directory_guid' => null,
        'creation_date' => 'date-time',
        'cost_center' => null,
        'is_cost_resource' => null,
        'team_assignment_pool' => null,
        'assignment_owner' => null,
        'assignment_owner_guid' => null,
        'is_budget' => null,
        'budget_work' => 'time-span',
        'budget_cost' => 'decimal',
        'overtime_rate' => 'decimal',
        'baselines' => null,
        'extended_attributes' => null,
        'outline_codes' => null
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
        'is_root' => 'isRoot',
        'name' => 'name',
        'uid' => 'uid',
        'id' => 'id',
        'guid' => 'guid',
        'type' => 'type',
        'is_null' => 'isNull',
        'initials' => 'initials',
        'phonetics' => 'phonetics',
        'nt_account' => 'ntAccount',
        'windows_user_account' => 'windowsUserAccount',
        'workgroup' => 'workgroup',
        'material_label' => 'materialLabel',
        'code' => 'code',
        'group' => 'group',
        'email_address' => 'emailAddress',
        'hyperlink' => 'hyperlink',
        'hyperlink_address' => 'hyperlinkAddress',
        'hyperlink_sub_address' => 'hyperlinkSubAddress',
        'max_units' => 'maxUnits',
        'peak_units' => 'peakUnits',
        'over_allocated' => 'overAllocated',
        'available_from' => 'availableFrom',
        'available_to' => 'availableTo',
        'start' => 'start',
        'finish' => 'finish',
        'can_level' => 'canLevel',
        'accrue_at' => 'accrueAt',
        'work' => 'work',
        'regular_work' => 'regularWork',
        'overtime_work' => 'overtimeWork',
        'actual_work' => 'actualWork',
        'remaining_work' => 'remainingWork',
        'actual_overtime_work' => 'actualOvertimeWork',
        'remaining_overtime_work' => 'remainingOvertimeWork',
        'percent_work_complete' => 'percentWorkComplete',
        'standard_rate' => 'standardRate',
        'standard_rate_format' => 'standardRateFormat',
        'cost' => 'cost',
        'overtime_rate_format' => 'overtimeRateFormat',
        'overtime_cost' => 'overtimeCost',
        'cost_per_use' => 'costPerUse',
        'actual_cost' => 'actualCost',
        'actual_overtime_cost' => 'actualOvertimeCost',
        'remaining_cost' => 'remainingCost',
        'remaining_overtime_cost' => 'remainingOvertimeCost',
        'work_variance' => 'workVariance',
        'cost_variance' => 'costVariance',
        'sv' => 'sv',
        'cv' => 'cv',
        'acwp' => 'acwp',
        'calendar_uid' => 'calendarUid',
        'notes_text' => 'notesText',
        'notes' => 'notes',
        'notes_rtf' => 'notesRTF',
        'bcws' => 'bcws',
        'bcwp' => 'bcwp',
        'is_generic' => 'isGeneric',
        'is_inactive' => 'isInactive',
        'is_enterprise' => 'isEnterprise',
        'booking_type' => 'bookingType',
        'actual_work_protected' => 'actualWorkProtected',
        'actual_overtime_work_protected' => 'actualOvertimeWorkProtected',
        'active_directory_guid' => 'activeDirectoryGuid',
        'creation_date' => 'creationDate',
        'cost_center' => 'costCenter',
        'is_cost_resource' => 'isCostResource',
        'team_assignment_pool' => 'teamAssignmentPool',
        'assignment_owner' => 'assignmentOwner',
        'assignment_owner_guid' => 'assignmentOwnerGuid',
        'is_budget' => 'isBudget',
        'budget_work' => 'budgetWork',
        'budget_cost' => 'budgetCost',
        'overtime_rate' => 'overtimeRate',
        'baselines' => 'baselines',
        'extended_attributes' => 'extendedAttributes',
        'outline_codes' => 'outlineCodes'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_root' => 'setIsRoot',
        'name' => 'setName',
        'uid' => 'setUid',
        'id' => 'setId',
        'guid' => 'setGuid',
        'type' => 'setType',
        'is_null' => 'setIsNull',
        'initials' => 'setInitials',
        'phonetics' => 'setPhonetics',
        'nt_account' => 'setNtAccount',
        'windows_user_account' => 'setWindowsUserAccount',
        'workgroup' => 'setWorkgroup',
        'material_label' => 'setMaterialLabel',
        'code' => 'setCode',
        'group' => 'setGroup',
        'email_address' => 'setEmailAddress',
        'hyperlink' => 'setHyperlink',
        'hyperlink_address' => 'setHyperlinkAddress',
        'hyperlink_sub_address' => 'setHyperlinkSubAddress',
        'max_units' => 'setMaxUnits',
        'peak_units' => 'setPeakUnits',
        'over_allocated' => 'setOverAllocated',
        'available_from' => 'setAvailableFrom',
        'available_to' => 'setAvailableTo',
        'start' => 'setStart',
        'finish' => 'setFinish',
        'can_level' => 'setCanLevel',
        'accrue_at' => 'setAccrueAt',
        'work' => 'setWork',
        'regular_work' => 'setRegularWork',
        'overtime_work' => 'setOvertimeWork',
        'actual_work' => 'setActualWork',
        'remaining_work' => 'setRemainingWork',
        'actual_overtime_work' => 'setActualOvertimeWork',
        'remaining_overtime_work' => 'setRemainingOvertimeWork',
        'percent_work_complete' => 'setPercentWorkComplete',
        'standard_rate' => 'setStandardRate',
        'standard_rate_format' => 'setStandardRateFormat',
        'cost' => 'setCost',
        'overtime_rate_format' => 'setOvertimeRateFormat',
        'overtime_cost' => 'setOvertimeCost',
        'cost_per_use' => 'setCostPerUse',
        'actual_cost' => 'setActualCost',
        'actual_overtime_cost' => 'setActualOvertimeCost',
        'remaining_cost' => 'setRemainingCost',
        'remaining_overtime_cost' => 'setRemainingOvertimeCost',
        'work_variance' => 'setWorkVariance',
        'cost_variance' => 'setCostVariance',
        'sv' => 'setSv',
        'cv' => 'setCv',
        'acwp' => 'setAcwp',
        'calendar_uid' => 'setCalendarUid',
        'notes_text' => 'setNotesText',
        'notes' => 'setNotes',
        'notes_rtf' => 'setNotesRtf',
        'bcws' => 'setBcws',
        'bcwp' => 'setBcwp',
        'is_generic' => 'setIsGeneric',
        'is_inactive' => 'setIsInactive',
        'is_enterprise' => 'setIsEnterprise',
        'booking_type' => 'setBookingType',
        'actual_work_protected' => 'setActualWorkProtected',
        'actual_overtime_work_protected' => 'setActualOvertimeWorkProtected',
        'active_directory_guid' => 'setActiveDirectoryGuid',
        'creation_date' => 'setCreationDate',
        'cost_center' => 'setCostCenter',
        'is_cost_resource' => 'setIsCostResource',
        'team_assignment_pool' => 'setTeamAssignmentPool',
        'assignment_owner' => 'setAssignmentOwner',
        'assignment_owner_guid' => 'setAssignmentOwnerGuid',
        'is_budget' => 'setIsBudget',
        'budget_work' => 'setBudgetWork',
        'budget_cost' => 'setBudgetCost',
        'overtime_rate' => 'setOvertimeRate',
        'baselines' => 'setBaselines',
        'extended_attributes' => 'setExtendedAttributes',
        'outline_codes' => 'setOutlineCodes'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_root' => 'getIsRoot',
        'name' => 'getName',
        'uid' => 'getUid',
        'id' => 'getId',
        'guid' => 'getGuid',
        'type' => 'getType',
        'is_null' => 'getIsNull',
        'initials' => 'getInitials',
        'phonetics' => 'getPhonetics',
        'nt_account' => 'getNtAccount',
        'windows_user_account' => 'getWindowsUserAccount',
        'workgroup' => 'getWorkgroup',
        'material_label' => 'getMaterialLabel',
        'code' => 'getCode',
        'group' => 'getGroup',
        'email_address' => 'getEmailAddress',
        'hyperlink' => 'getHyperlink',
        'hyperlink_address' => 'getHyperlinkAddress',
        'hyperlink_sub_address' => 'getHyperlinkSubAddress',
        'max_units' => 'getMaxUnits',
        'peak_units' => 'getPeakUnits',
        'over_allocated' => 'getOverAllocated',
        'available_from' => 'getAvailableFrom',
        'available_to' => 'getAvailableTo',
        'start' => 'getStart',
        'finish' => 'getFinish',
        'can_level' => 'getCanLevel',
        'accrue_at' => 'getAccrueAt',
        'work' => 'getWork',
        'regular_work' => 'getRegularWork',
        'overtime_work' => 'getOvertimeWork',
        'actual_work' => 'getActualWork',
        'remaining_work' => 'getRemainingWork',
        'actual_overtime_work' => 'getActualOvertimeWork',
        'remaining_overtime_work' => 'getRemainingOvertimeWork',
        'percent_work_complete' => 'getPercentWorkComplete',
        'standard_rate' => 'getStandardRate',
        'standard_rate_format' => 'getStandardRateFormat',
        'cost' => 'getCost',
        'overtime_rate_format' => 'getOvertimeRateFormat',
        'overtime_cost' => 'getOvertimeCost',
        'cost_per_use' => 'getCostPerUse',
        'actual_cost' => 'getActualCost',
        'actual_overtime_cost' => 'getActualOvertimeCost',
        'remaining_cost' => 'getRemainingCost',
        'remaining_overtime_cost' => 'getRemainingOvertimeCost',
        'work_variance' => 'getWorkVariance',
        'cost_variance' => 'getCostVariance',
        'sv' => 'getSv',
        'cv' => 'getCv',
        'acwp' => 'getAcwp',
        'calendar_uid' => 'getCalendarUid',
        'notes_text' => 'getNotesText',
        'notes' => 'getNotes',
        'notes_rtf' => 'getNotesRtf',
        'bcws' => 'getBcws',
        'bcwp' => 'getBcwp',
        'is_generic' => 'getIsGeneric',
        'is_inactive' => 'getIsInactive',
        'is_enterprise' => 'getIsEnterprise',
        'booking_type' => 'getBookingType',
        'actual_work_protected' => 'getActualWorkProtected',
        'actual_overtime_work_protected' => 'getActualOvertimeWorkProtected',
        'active_directory_guid' => 'getActiveDirectoryGuid',
        'creation_date' => 'getCreationDate',
        'cost_center' => 'getCostCenter',
        'is_cost_resource' => 'getIsCostResource',
        'team_assignment_pool' => 'getTeamAssignmentPool',
        'assignment_owner' => 'getAssignmentOwner',
        'assignment_owner_guid' => 'getAssignmentOwnerGuid',
        'is_budget' => 'getIsBudget',
        'budget_work' => 'getBudgetWork',
        'budget_cost' => 'getBudgetCost',
        'overtime_rate' => 'getOvertimeRate',
        'baselines' => 'getBaselines',
        'extended_attributes' => 'getExtendedAttributes',
        'outline_codes' => 'getOutlineCodes'
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
        $this->container['is_root'] = isset($data['is_root']) ? $data['is_root'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['is_null'] = isset($data['is_null']) ? $data['is_null'] : null;
        $this->container['initials'] = isset($data['initials']) ? $data['initials'] : null;
        $this->container['phonetics'] = isset($data['phonetics']) ? $data['phonetics'] : null;
        $this->container['nt_account'] = isset($data['nt_account']) ? $data['nt_account'] : null;
        $this->container['windows_user_account'] = isset($data['windows_user_account']) ? $data['windows_user_account'] : null;
        $this->container['workgroup'] = isset($data['workgroup']) ? $data['workgroup'] : null;
        $this->container['material_label'] = isset($data['material_label']) ? $data['material_label'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['hyperlink'] = isset($data['hyperlink']) ? $data['hyperlink'] : null;
        $this->container['hyperlink_address'] = isset($data['hyperlink_address']) ? $data['hyperlink_address'] : null;
        $this->container['hyperlink_sub_address'] = isset($data['hyperlink_sub_address']) ? $data['hyperlink_sub_address'] : null;
        $this->container['max_units'] = isset($data['max_units']) ? $data['max_units'] : 1.0;
        $this->container['peak_units'] = isset($data['peak_units']) ? $data['peak_units'] : null;
        $this->container['over_allocated'] = isset($data['over_allocated']) ? $data['over_allocated'] : null;
        $this->container['available_from'] = isset($data['available_from']) ? $data['available_from'] : null;
        $this->container['available_to'] = isset($data['available_to']) ? $data['available_to'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['finish'] = isset($data['finish']) ? $data['finish'] : null;
        $this->container['can_level'] = isset($data['can_level']) ? $data['can_level'] : true;
        $this->container['accrue_at'] = isset($data['accrue_at']) ? $data['accrue_at'] : null;
        $this->container['work'] = isset($data['work']) ? $data['work'] : null;
        $this->container['regular_work'] = isset($data['regular_work']) ? $data['regular_work'] : null;
        $this->container['overtime_work'] = isset($data['overtime_work']) ? $data['overtime_work'] : null;
        $this->container['actual_work'] = isset($data['actual_work']) ? $data['actual_work'] : null;
        $this->container['remaining_work'] = isset($data['remaining_work']) ? $data['remaining_work'] : null;
        $this->container['actual_overtime_work'] = isset($data['actual_overtime_work']) ? $data['actual_overtime_work'] : null;
        $this->container['remaining_overtime_work'] = isset($data['remaining_overtime_work']) ? $data['remaining_overtime_work'] : null;
        $this->container['percent_work_complete'] = isset($data['percent_work_complete']) ? $data['percent_work_complete'] : null;
        $this->container['standard_rate'] = isset($data['standard_rate']) ? $data['standard_rate'] : null;
        $this->container['standard_rate_format'] = isset($data['standard_rate_format']) ? $data['standard_rate_format'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['overtime_rate_format'] = isset($data['overtime_rate_format']) ? $data['overtime_rate_format'] : null;
        $this->container['overtime_cost'] = isset($data['overtime_cost']) ? $data['overtime_cost'] : null;
        $this->container['cost_per_use'] = isset($data['cost_per_use']) ? $data['cost_per_use'] : null;
        $this->container['actual_cost'] = isset($data['actual_cost']) ? $data['actual_cost'] : null;
        $this->container['actual_overtime_cost'] = isset($data['actual_overtime_cost']) ? $data['actual_overtime_cost'] : null;
        $this->container['remaining_cost'] = isset($data['remaining_cost']) ? $data['remaining_cost'] : null;
        $this->container['remaining_overtime_cost'] = isset($data['remaining_overtime_cost']) ? $data['remaining_overtime_cost'] : null;
        $this->container['work_variance'] = isset($data['work_variance']) ? $data['work_variance'] : null;
        $this->container['cost_variance'] = isset($data['cost_variance']) ? $data['cost_variance'] : null;
        $this->container['sv'] = isset($data['sv']) ? $data['sv'] : null;
        $this->container['cv'] = isset($data['cv']) ? $data['cv'] : null;
        $this->container['acwp'] = isset($data['acwp']) ? $data['acwp'] : null;
        $this->container['calendar_uid'] = isset($data['calendar_uid']) ? $data['calendar_uid'] : null;
        $this->container['notes_text'] = isset($data['notes_text']) ? $data['notes_text'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['notes_rtf'] = isset($data['notes_rtf']) ? $data['notes_rtf'] : null;
        $this->container['bcws'] = isset($data['bcws']) ? $data['bcws'] : null;
        $this->container['bcwp'] = isset($data['bcwp']) ? $data['bcwp'] : null;
        $this->container['is_generic'] = isset($data['is_generic']) ? $data['is_generic'] : null;
        $this->container['is_inactive'] = isset($data['is_inactive']) ? $data['is_inactive'] : null;
        $this->container['is_enterprise'] = isset($data['is_enterprise']) ? $data['is_enterprise'] : null;
        $this->container['booking_type'] = isset($data['booking_type']) ? $data['booking_type'] : null;
        $this->container['actual_work_protected'] = isset($data['actual_work_protected']) ? $data['actual_work_protected'] : null;
        $this->container['actual_overtime_work_protected'] = isset($data['actual_overtime_work_protected']) ? $data['actual_overtime_work_protected'] : null;
        $this->container['active_directory_guid'] = isset($data['active_directory_guid']) ? $data['active_directory_guid'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['cost_center'] = isset($data['cost_center']) ? $data['cost_center'] : null;
        $this->container['is_cost_resource'] = isset($data['is_cost_resource']) ? $data['is_cost_resource'] : null;
        $this->container['team_assignment_pool'] = isset($data['team_assignment_pool']) ? $data['team_assignment_pool'] : null;
        $this->container['assignment_owner'] = isset($data['assignment_owner']) ? $data['assignment_owner'] : null;
        $this->container['assignment_owner_guid'] = isset($data['assignment_owner_guid']) ? $data['assignment_owner_guid'] : null;
        $this->container['is_budget'] = isset($data['is_budget']) ? $data['is_budget'] : null;
        $this->container['budget_work'] = isset($data['budget_work']) ? $data['budget_work'] : null;
        $this->container['budget_cost'] = isset($data['budget_cost']) ? $data['budget_cost'] : null;
        $this->container['overtime_rate'] = isset($data['overtime_rate']) ? $data['overtime_rate'] : null;
        $this->container['baselines'] = isset($data['baselines']) ? $data['baselines'] : array();
        $this->container['extended_attributes'] = isset($data['extended_attributes']) ? $data['extended_attributes'] : array();
        $this->container['outline_codes'] = isset($data['outline_codes']) ? $data['outline_codes'] : array();
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_root'] === null) {
            $invalidProperties[] = "'is_root' can't be null";
        }
        if ($this->container['uid'] === null) {
            $invalidProperties[] = "'uid' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['is_null'] === null) {
            $invalidProperties[] = "'is_null' can't be null";
        }
        if ($this->container['workgroup'] === null) {
            $invalidProperties[] = "'workgroup' can't be null";
        }
        if ($this->container['max_units'] === null) {
            $invalidProperties[] = "'max_units' can't be null";
        }
        if ($this->container['peak_units'] === null) {
            $invalidProperties[] = "'peak_units' can't be null";
        }
        if ($this->container['over_allocated'] === null) {
            $invalidProperties[] = "'over_allocated' can't be null";
        }
        if ($this->container['available_from'] === null) {
            $invalidProperties[] = "'available_from' can't be null";
        }
        if ($this->container['available_to'] === null) {
            $invalidProperties[] = "'available_to' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['finish'] === null) {
            $invalidProperties[] = "'finish' can't be null";
        }
        if ($this->container['can_level'] === null) {
            $invalidProperties[] = "'can_level' can't be null";
        }
        if ($this->container['accrue_at'] === null) {
            $invalidProperties[] = "'accrue_at' can't be null";
        }
        if ($this->container['work'] === null) {
            $invalidProperties[] = "'work' can't be null";
        }
        if ($this->container['regular_work'] === null) {
            $invalidProperties[] = "'regular_work' can't be null";
        }
        if ($this->container['overtime_work'] === null) {
            $invalidProperties[] = "'overtime_work' can't be null";
        }
        if ($this->container['actual_work'] === null) {
            $invalidProperties[] = "'actual_work' can't be null";
        }
        if ($this->container['remaining_work'] === null) {
            $invalidProperties[] = "'remaining_work' can't be null";
        }
        if ($this->container['actual_overtime_work'] === null) {
            $invalidProperties[] = "'actual_overtime_work' can't be null";
        }
        if ($this->container['remaining_overtime_work'] === null) {
            $invalidProperties[] = "'remaining_overtime_work' can't be null";
        }
        if ($this->container['percent_work_complete'] === null) {
            $invalidProperties[] = "'percent_work_complete' can't be null";
        }
        if ($this->container['standard_rate'] === null) {
            $invalidProperties[] = "'standard_rate' can't be null";
        }
        if ($this->container['standard_rate_format'] === null) {
            $invalidProperties[] = "'standard_rate_format' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['overtime_rate_format'] === null) {
            $invalidProperties[] = "'overtime_rate_format' can't be null";
        }
        if ($this->container['overtime_cost'] === null) {
            $invalidProperties[] = "'overtime_cost' can't be null";
        }
        if ($this->container['cost_per_use'] === null) {
            $invalidProperties[] = "'cost_per_use' can't be null";
        }
        if ($this->container['actual_cost'] === null) {
            $invalidProperties[] = "'actual_cost' can't be null";
        }
        if ($this->container['actual_overtime_cost'] === null) {
            $invalidProperties[] = "'actual_overtime_cost' can't be null";
        }
        if ($this->container['remaining_cost'] === null) {
            $invalidProperties[] = "'remaining_cost' can't be null";
        }
        if ($this->container['remaining_overtime_cost'] === null) {
            $invalidProperties[] = "'remaining_overtime_cost' can't be null";
        }
        if ($this->container['work_variance'] === null) {
            $invalidProperties[] = "'work_variance' can't be null";
        }
        if ($this->container['cost_variance'] === null) {
            $invalidProperties[] = "'cost_variance' can't be null";
        }
        if ($this->container['sv'] === null) {
            $invalidProperties[] = "'sv' can't be null";
        }
        if ($this->container['cv'] === null) {
            $invalidProperties[] = "'cv' can't be null";
        }
        if ($this->container['acwp'] === null) {
            $invalidProperties[] = "'acwp' can't be null";
        }
        if ($this->container['calendar_uid'] === null) {
            $invalidProperties[] = "'calendar_uid' can't be null";
        }
        if ($this->container['bcws'] === null) {
            $invalidProperties[] = "'bcws' can't be null";
        }
        if ($this->container['bcwp'] === null) {
            $invalidProperties[] = "'bcwp' can't be null";
        }
        if ($this->container['is_generic'] === null) {
            $invalidProperties[] = "'is_generic' can't be null";
        }
        if ($this->container['is_inactive'] === null) {
            $invalidProperties[] = "'is_inactive' can't be null";
        }
        if ($this->container['is_enterprise'] === null) {
            $invalidProperties[] = "'is_enterprise' can't be null";
        }
        if ($this->container['booking_type'] === null) {
            $invalidProperties[] = "'booking_type' can't be null";
        }
        if ($this->container['actual_work_protected'] === null) {
            $invalidProperties[] = "'actual_work_protected' can't be null";
        }
        if ($this->container['actual_overtime_work_protected'] === null) {
            $invalidProperties[] = "'actual_overtime_work_protected' can't be null";
        }
        if ($this->container['creation_date'] === null) {
            $invalidProperties[] = "'creation_date' can't be null";
        }
        if ($this->container['is_cost_resource'] === null) {
            $invalidProperties[] = "'is_cost_resource' can't be null";
        }
        if ($this->container['team_assignment_pool'] === null) {
            $invalidProperties[] = "'team_assignment_pool' can't be null";
        }
        if ($this->container['is_budget'] === null) {
            $invalidProperties[] = "'is_budget' can't be null";
        }
        if ($this->container['budget_work'] === null) {
            $invalidProperties[] = "'budget_work' can't be null";
        }
        if ($this->container['budget_cost'] === null) {
            $invalidProperties[] = "'budget_cost' can't be null";
        }
        if ($this->container['overtime_rate'] === null) {
            $invalidProperties[] = "'overtime_rate' can't be null";
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

        if ($this->container['is_root'] === null) {
            return false;
        }
        if ($this->container['uid'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['is_null'] === null) {
            return false;
        }
        if ($this->container['workgroup'] === null) {
            return false;
        }
        if ($this->container['max_units'] === null) {
            return false;
        }
        if ($this->container['peak_units'] === null) {
            return false;
        }
        if ($this->container['over_allocated'] === null) {
            return false;
        }
        if ($this->container['available_from'] === null) {
            return false;
        }
        if ($this->container['available_to'] === null) {
            return false;
        }
        if ($this->container['start'] === null) {
            return false;
        }
        if ($this->container['finish'] === null) {
            return false;
        }
        if ($this->container['can_level'] === null) {
            return false;
        }
        if ($this->container['accrue_at'] === null) {
            return false;
        }
        if ($this->container['work'] === null) {
            return false;
        }
        if ($this->container['regular_work'] === null) {
            return false;
        }
        if ($this->container['overtime_work'] === null) {
            return false;
        }
        if ($this->container['actual_work'] === null) {
            return false;
        }
        if ($this->container['remaining_work'] === null) {
            return false;
        }
        if ($this->container['actual_overtime_work'] === null) {
            return false;
        }
        if ($this->container['remaining_overtime_work'] === null) {
            return false;
        }
        if ($this->container['percent_work_complete'] === null) {
            return false;
        }
        if ($this->container['standard_rate'] === null) {
            return false;
        }
        if ($this->container['standard_rate_format'] === null) {
            return false;
        }
        if ($this->container['cost'] === null) {
            return false;
        }
        if ($this->container['overtime_rate_format'] === null) {
            return false;
        }
        if ($this->container['overtime_cost'] === null) {
            return false;
        }
        if ($this->container['cost_per_use'] === null) {
            return false;
        }
        if ($this->container['actual_cost'] === null) {
            return false;
        }
        if ($this->container['actual_overtime_cost'] === null) {
            return false;
        }
        if ($this->container['remaining_cost'] === null) {
            return false;
        }
        if ($this->container['remaining_overtime_cost'] === null) {
            return false;
        }
        if ($this->container['work_variance'] === null) {
            return false;
        }
        if ($this->container['cost_variance'] === null) {
            return false;
        }
        if ($this->container['sv'] === null) {
            return false;
        }
        if ($this->container['cv'] === null) {
            return false;
        }
        if ($this->container['acwp'] === null) {
            return false;
        }
        if ($this->container['calendar_uid'] === null) {
            return false;
        }
        if ($this->container['bcws'] === null) {
            return false;
        }
        if ($this->container['bcwp'] === null) {
            return false;
        }
        if ($this->container['is_generic'] === null) {
            return false;
        }
        if ($this->container['is_inactive'] === null) {
            return false;
        }
        if ($this->container['is_enterprise'] === null) {
            return false;
        }
        if ($this->container['booking_type'] === null) {
            return false;
        }
        if ($this->container['actual_work_protected'] === null) {
            return false;
        }
        if ($this->container['actual_overtime_work_protected'] === null) {
            return false;
        }
        if ($this->container['creation_date'] === null) {
            return false;
        }
        if ($this->container['is_cost_resource'] === null) {
            return false;
        }
        if ($this->container['team_assignment_pool'] === null) {
            return false;
        }
        if ($this->container['is_budget'] === null) {
            return false;
        }
        if ($this->container['budget_work'] === null) {
            return false;
        }
        if ($this->container['budget_cost'] === null) {
            return false;
        }
        if ($this->container['overtime_rate'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets is_root
     *
     * @return bool
     */
    public function getIsRoot()
    {
        return $this->container['is_root'];
    }

    /*
     * Sets is_root
     *
     * @param bool $is_root Gets the flag indicating whether resource is a root resource. Root resource is         a special resource which is intended to support internals of MS Project's formats         and is not intended to be used directly from the user's code.
     *
     * @return $this
     */
    public function setIsRoot($is_root)
    {
        $this->container['is_root'] = $is_root;

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
     * @param string $name The name of a resource.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
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
     * @param int $uid The unique identifier of a resource.
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /*
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /*
     * Sets id
     *
     * @param int $id The position identifier of a resource within the list of resources.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /*
     * Gets guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /*
     * Sets guid
     *
     * @param string $guid Contains the generated unique identification code for the resource.
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /*
     * Gets type
     *
     * @return \Aspose\Tasks\Model\ResourceType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /*
     * Sets type
     *
     * @param \Aspose\Tasks\Model\ResourceType $type The type of a resource.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /*
     * Gets is_null
     *
     * @return bool
     */
    public function getIsNull()
    {
        return $this->container['is_null'];
    }

    /*
     * Sets is_null
     *
     * @param bool $is_null Determines whether a resource is null.
     *
     * @return $this
     */
    public function setIsNull($is_null)
    {
        $this->container['is_null'] = $is_null;

        return $this;
    }

    /*
     * Gets initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /*
     * Sets initials
     *
     * @param string $initials The initials of a resource.
     *
     * @return $this
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

        return $this;
    }

    /*
     * Gets phonetics
     *
     * @return string
     */
    public function getPhonetics()
    {
        return $this->container['phonetics'];
    }

    /*
     * Sets phonetics
     *
     * @param string $phonetics The phonetic spelling of the resource name. For use with Japanese only.
     *
     * @return $this
     */
    public function setPhonetics($phonetics)
    {
        $this->container['phonetics'] = $phonetics;

        return $this;
    }

    /*
     * Gets nt_account
     *
     * @return string
     */
    public function getNtAccount()
    {
        return $this->container['nt_account'];
    }

    /*
     * Sets nt_account
     *
     * @param string $nt_account The NT account associated with a resource.
     *
     * @return $this
     */
    public function setNtAccount($nt_account)
    {
        $this->container['nt_account'] = $nt_account;

        return $this;
    }

    /*
     * Gets windows_user_account
     *
     * @return string
     */
    public function getWindowsUserAccount()
    {
        return $this->container['windows_user_account'];
    }

    /*
     * Sets windows_user_account
     *
     * @param string $windows_user_account The NT account associated with a resource.
     *
     * @return $this
     */
    public function setWindowsUserAccount($windows_user_account)
    {
        $this->container['windows_user_account'] = $windows_user_account;

        return $this;
    }

    /*
     * Gets workgroup
     *
     * @return \Aspose\Tasks\Model\WorkGroupType
     */
    public function getWorkgroup()
    {
        return $this->container['workgroup'];
    }

    /*
     * Sets workgroup
     *
     * @param \Aspose\Tasks\Model\WorkGroupType $workgroup The type of a workgroup to which a resource belongs.  type.
     *
     * @return $this
     */
    public function setWorkgroup($workgroup)
    {
        $this->container['workgroup'] = $workgroup;

        return $this;
    }

    /*
     * Gets material_label
     *
     * @return string
     */
    public function getMaterialLabel()
    {
        return $this->container['material_label'];
    }

    /*
     * Sets material_label
     *
     * @param string $material_label The unit of measure for the material resource. Read/write String.
     *
     * @return $this
     */
    public function setMaterialLabel($material_label)
    {
        $this->container['material_label'] = $material_label;

        return $this;
    }

    /*
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /*
     * Sets code
     *
     * @param string $code The code or other information about a resource.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /*
     * Gets group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /*
     * Sets group
     *
     * @param string $group The group to which a resource belongs.
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /*
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /*
     * Sets email_address
     *
     * @param string $email_address email_address
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /*
     * Gets hyperlink
     *
     * @return string
     */
    public function getHyperlink()
    {
        return $this->container['hyperlink'];
    }

    /*
     * Sets hyperlink
     *
     * @param string $hyperlink The title of a hyperlink associated with a resource.
     *
     * @return $this
     */
    public function setHyperlink($hyperlink)
    {
        $this->container['hyperlink'] = $hyperlink;

        return $this;
    }

    /*
     * Gets hyperlink_address
     *
     * @return string
     */
    public function getHyperlinkAddress()
    {
        return $this->container['hyperlink_address'];
    }

    /*
     * Sets hyperlink_address
     *
     * @param string $hyperlink_address The hyperlink associated with a resource.
     *
     * @return $this
     */
    public function setHyperlinkAddress($hyperlink_address)
    {
        $this->container['hyperlink_address'] = $hyperlink_address;

        return $this;
    }

    /*
     * Gets hyperlink_sub_address
     *
     * @return string
     */
    public function getHyperlinkSubAddress()
    {
        return $this->container['hyperlink_sub_address'];
    }

    /*
     * Sets hyperlink_sub_address
     *
     * @param string $hyperlink_sub_address The document bookmark of a hyperlink associated with a resource. Read/write String.
     *
     * @return $this
     */
    public function setHyperlinkSubAddress($hyperlink_sub_address)
    {
        $this->container['hyperlink_sub_address'] = $hyperlink_sub_address;

        return $this;
    }

    /*
     * Gets max_units
     *
     * @return double
     */
    public function getMaxUnits()
    {
        return $this->container['max_units'];
    }

    /*
     * Sets max_units
     *
     * @param double $max_units The maximum number of units of a resource is available.
     *
     * @return $this
     */
    public function setMaxUnits($max_units)
    {
        $this->container['max_units'] = $max_units;

        return $this;
    }

    /*
     * Gets peak_units
     *
     * @return double
     */
    public function getPeakUnits()
    {
        return $this->container['peak_units'];
    }

    /*
     * Sets peak_units
     *
     * @param double $peak_units The largest number of units assigned to a resource at any time.
     *
     * @return $this
     */
    public function setPeakUnits($peak_units)
    {
        $this->container['peak_units'] = $peak_units;

        return $this;
    }

    /*
     * Gets over_allocated
     *
     * @return bool
     */
    public function getOverAllocated()
    {
        return $this->container['over_allocated'];
    }

    /*
     * Sets over_allocated
     *
     * @param bool $over_allocated over_allocated
     *
     * @return $this
     */
    public function setOverAllocated($over_allocated)
    {
        $this->container['over_allocated'] = $over_allocated;

        return $this;
    }

    /*
     * Gets available_from
     *
     * @return \DateTime
     */
    public function getAvailableFrom()
    {
        return $this->container['available_from'];
    }

    /*
     * Sets available_from
     *
     * @param \DateTime $available_from The first date when a resource is available.
     *
     * @return $this
     */
    public function setAvailableFrom($available_from)
    {
        $this->container['available_from'] = $available_from;

        return $this;
    }

    /*
     * Gets available_to
     *
     * @return \DateTime
     */
    public function getAvailableTo()
    {
        return $this->container['available_to'];
    }

    /*
     * Sets available_to
     *
     * @param \DateTime $available_to The last date when a resource is available.
     *
     * @return $this
     */
    public function setAvailableTo($available_to)
    {
        $this->container['available_to'] = $available_to;

        return $this;
    }

    /*
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /*
     * Sets start
     *
     * @param \DateTime $start The scheduled start date of a resource. This property is calculated on demand and cannot be set directly.
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /*
     * Gets finish
     *
     * @return \DateTime
     */
    public function getFinish()
    {
        return $this->container['finish'];
    }

    /*
     * Sets finish
     *
     * @param \DateTime $finish The scheduled finish date of a resource. This property is calculated on demand and cannot be set directly.
     *
     * @return $this
     */
    public function setFinish($finish)
    {
        $this->container['finish'] = $finish;

        return $this;
    }

    /*
     * Gets can_level
     *
     * @return bool
     */
    public function getCanLevel()
    {
        return $this->container['can_level'];
    }

    /*
     * Sets can_level
     *
     * @param bool $can_level Determines whether a resource can be leveled.
     *
     * @return $this
     */
    public function setCanLevel($can_level)
    {
        $this->container['can_level'] = $can_level;

        return $this;
    }

    /*
     * Gets accrue_at
     *
     * @return \Aspose\Tasks\Model\CostAccrualType
     */
    public function getAccrueAt()
    {
        return $this->container['accrue_at'];
    }

    /*
     * Sets accrue_at
     *
     * @param \Aspose\Tasks\Model\CostAccrualType $accrue_at Determines how cost is accrued against the resource.
     *
     * @return $this
     */
    public function setAccrueAt($accrue_at)
    {
        $this->container['accrue_at'] = $accrue_at;

        return $this;
    }

    /*
     * Gets work
     *
     * @return string
     */
    public function getWork()
    {
        return $this->container['work'];
    }

    /*
     * Sets work
     *
     * @param string $work The total work assigned to a resource across all assigned tasks.
     *
     * @return $this
     */
    public function setWork($work)
    {
        $this->container['work'] = $work;

        return $this;
    }

    /*
     * Gets regular_work
     *
     * @return string
     */
    public function getRegularWork()
    {
        return $this->container['regular_work'];
    }

    /*
     * Sets regular_work
     *
     * @param string $regular_work The amount of non-overtime work assigned to a resource.
     *
     * @return $this
     */
    public function setRegularWork($regular_work)
    {
        $this->container['regular_work'] = $regular_work;

        return $this;
    }

    /*
     * Gets overtime_work
     *
     * @return string
     */
    public function getOvertimeWork()
    {
        return $this->container['overtime_work'];
    }

    /*
     * Sets overtime_work
     *
     * @param string $overtime_work The amount of overtime work assigned to a resource.
     *
     * @return $this
     */
    public function setOvertimeWork($overtime_work)
    {
        $this->container['overtime_work'] = $overtime_work;

        return $this;
    }

    /*
     * Gets actual_work
     *
     * @return string
     */
    public function getActualWork()
    {
        return $this->container['actual_work'];
    }

    /*
     * Sets actual_work
     *
     * @param string $actual_work The amount of actual work performed by a resource.
     *
     * @return $this
     */
    public function setActualWork($actual_work)
    {
        $this->container['actual_work'] = $actual_work;

        return $this;
    }

    /*
     * Gets remaining_work
     *
     * @return string
     */
    public function getRemainingWork()
    {
        return $this->container['remaining_work'];
    }

    /*
     * Sets remaining_work
     *
     * @param string $remaining_work The amount of remaining work required to complete all assigned tasks.
     *
     * @return $this
     */
    public function setRemainingWork($remaining_work)
    {
        $this->container['remaining_work'] = $remaining_work;

        return $this;
    }

    /*
     * Gets actual_overtime_work
     *
     * @return string
     */
    public function getActualOvertimeWork()
    {
        return $this->container['actual_overtime_work'];
    }

    /*
     * Sets actual_overtime_work
     *
     * @param string $actual_overtime_work The amount of actual overtime work performed by a resource.
     *
     * @return $this
     */
    public function setActualOvertimeWork($actual_overtime_work)
    {
        $this->container['actual_overtime_work'] = $actual_overtime_work;

        return $this;
    }

    /*
     * Gets remaining_overtime_work
     *
     * @return string
     */
    public function getRemainingOvertimeWork()
    {
        return $this->container['remaining_overtime_work'];
    }

    /*
     * Sets remaining_overtime_work
     *
     * @param string $remaining_overtime_work The amount of remaining overtime work required to complete all tasks.
     *
     * @return $this
     */
    public function setRemainingOvertimeWork($remaining_overtime_work)
    {
        $this->container['remaining_overtime_work'] = $remaining_overtime_work;

        return $this;
    }

    /*
     * Gets percent_work_complete
     *
     * @return int
     */
    public function getPercentWorkComplete()
    {
        return $this->container['percent_work_complete'];
    }

    /*
     * Sets percent_work_complete
     *
     * @param int $percent_work_complete The percentage of work completed across all tasks.
     *
     * @return $this
     */
    public function setPercentWorkComplete($percent_work_complete)
    {
        $this->container['percent_work_complete'] = $percent_work_complete;

        return $this;
    }

    /*
     * Gets standard_rate
     *
     * @return float
     */
    public function getStandardRate()
    {
        return $this->container['standard_rate'];
    }

    /*
     * Sets standard_rate
     *
     * @param float $standard_rate The standard rate of a resource. This value retrieved from the current date if a rate table exists for a resource.
     *
     * @return $this
     */
    public function setStandardRate($standard_rate)
    {
        $this->container['standard_rate'] = $standard_rate;

        return $this;
    }

    /*
     * Gets standard_rate_format
     *
     * @return \Aspose\Tasks\Model\RateFormatType
     */
    public function getStandardRateFormat()
    {
        return $this->container['standard_rate_format'];
    }

    /*
     * Sets standard_rate_format
     *
     * @param \Aspose\Tasks\Model\RateFormatType $standard_rate_format The units used by Microsoft Project to display the standard rate.
     *
     * @return $this
     */
    public function setStandardRateFormat($standard_rate_format)
    {
        $this->container['standard_rate_format'] = $standard_rate_format;

        return $this;
    }

    /*
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /*
     * Sets cost
     *
     * @param float $cost The total project cost for a resource across all assigned tasks.
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /*
     * Gets overtime_rate_format
     *
     * @return \Aspose\Tasks\Model\RateFormatType
     */
    public function getOvertimeRateFormat()
    {
        return $this->container['overtime_rate_format'];
    }

    /*
     * Sets overtime_rate_format
     *
     * @param \Aspose\Tasks\Model\RateFormatType $overtime_rate_format The units used by Microsoft Project to display the overtime rate.
     *
     * @return $this
     */
    public function setOvertimeRateFormat($overtime_rate_format)
    {
        $this->container['overtime_rate_format'] = $overtime_rate_format;

        return $this;
    }

    /*
     * Gets overtime_cost
     *
     * @return float
     */
    public function getOvertimeCost()
    {
        return $this->container['overtime_cost'];
    }

    /*
     * Sets overtime_cost
     *
     * @param float $overtime_cost The total overtime cost of a resource including actual and remaining overtime costs.
     *
     * @return $this
     */
    public function setOvertimeCost($overtime_cost)
    {
        $this->container['overtime_cost'] = $overtime_cost;

        return $this;
    }

    /*
     * Gets cost_per_use
     *
     * @return float
     */
    public function getCostPerUse()
    {
        return $this->container['cost_per_use'];
    }

    /*
     * Sets cost_per_use
     *
     * @param float $cost_per_use The cost per use of a resource. This value retrieved from the current date if a rate table exists for the resource.
     *
     * @return $this
     */
    public function setCostPerUse($cost_per_use)
    {
        $this->container['cost_per_use'] = $cost_per_use;

        return $this;
    }

    /*
     * Gets actual_cost
     *
     * @return float
     */
    public function getActualCost()
    {
        return $this->container['actual_cost'];
    }

    /*
     * Sets actual_cost
     *
     * @param float $actual_cost The actual cost incurred by the resource across all assigned tasks.
     *
     * @return $this
     */
    public function setActualCost($actual_cost)
    {
        $this->container['actual_cost'] = $actual_cost;

        return $this;
    }

    /*
     * Gets actual_overtime_cost
     *
     * @return float
     */
    public function getActualOvertimeCost()
    {
        return $this->container['actual_overtime_cost'];
    }

    /*
     * Sets actual_overtime_cost
     *
     * @param float $actual_overtime_cost The actual overtime cost incurred by the resource across all assigned tasks.
     *
     * @return $this
     */
    public function setActualOvertimeCost($actual_overtime_cost)
    {
        $this->container['actual_overtime_cost'] = $actual_overtime_cost;

        return $this;
    }

    /*
     * Gets remaining_cost
     *
     * @return float
     */
    public function getRemainingCost()
    {
        return $this->container['remaining_cost'];
    }

    /*
     * Sets remaining_cost
     *
     * @param float $remaining_cost The remaining projected cost of a resource to complete all assigned tasks.
     *
     * @return $this
     */
    public function setRemainingCost($remaining_cost)
    {
        $this->container['remaining_cost'] = $remaining_cost;

        return $this;
    }

    /*
     * Gets remaining_overtime_cost
     *
     * @return float
     */
    public function getRemainingOvertimeCost()
    {
        return $this->container['remaining_overtime_cost'];
    }

    /*
     * Sets remaining_overtime_cost
     *
     * @param float $remaining_overtime_cost The remaining projected overtime cost of a resource to complete all assigned tasks.
     *
     * @return $this
     */
    public function setRemainingOvertimeCost($remaining_overtime_cost)
    {
        $this->container['remaining_overtime_cost'] = $remaining_overtime_cost;

        return $this;
    }

    /*
     * Gets work_variance
     *
     * @return double
     */
    public function getWorkVariance()
    {
        return $this->container['work_variance'];
    }

    /*
     * Sets work_variance
     *
     * @param double $work_variance The difference between a baseline work and a work
     *
     * @return $this
     */
    public function setWorkVariance($work_variance)
    {
        $this->container['work_variance'] = $work_variance;

        return $this;
    }

    /*
     * Gets cost_variance
     *
     * @return double
     */
    public function getCostVariance()
    {
        return $this->container['cost_variance'];
    }

    /*
     * Sets cost_variance
     *
     * @param double $cost_variance The difference between a baseline cost and a cost.
     *
     * @return $this
     */
    public function setCostVariance($cost_variance)
    {
        $this->container['cost_variance'] = $cost_variance;

        return $this;
    }

    /*
     * Gets sv
     *
     * @return double
     */
    public function getSv()
    {
        return $this->container['sv'];
    }

    /*
     * Sets sv
     *
     * @param double $sv The earned value schedule variance, through the project status date.
     *
     * @return $this
     */
    public function setSv($sv)
    {
        $this->container['sv'] = $sv;

        return $this;
    }

    /*
     * Gets cv
     *
     * @return double
     */
    public function getCv()
    {
        return $this->container['cv'];
    }

    /*
     * Sets cv
     *
     * @param double $cv The earned value cost variance, through the project status date.
     *
     * @return $this
     */
    public function setCv($cv)
    {
        $this->container['cv'] = $cv;

        return $this;
    }

    /*
     * Gets acwp
     *
     * @return double
     */
    public function getAcwp()
    {
        return $this->container['acwp'];
    }

    /*
     * Sets acwp
     *
     * @param double $acwp The actual cost of a work performed by a resource for the project to-date.
     *
     * @return $this
     */
    public function setAcwp($acwp)
    {
        $this->container['acwp'] = $acwp;

        return $this;
    }

    /*
     * Gets calendar_uid
     *
     * @return int
     */
    public function getCalendarUid()
    {
        return $this->container['calendar_uid'];
    }

    /*
     * Sets calendar_uid
     *
     * @param int $calendar_uid The calendar of a resource.
     *
     * @return $this
     */
    public function setCalendarUid($calendar_uid)
    {
        $this->container['calendar_uid'] = $calendar_uid;

        return $this;
    }

    /*
     * Gets notes_text
     *
     * @return string
     */
    public function getNotesText()
    {
        return $this->container['notes_text'];
    }

    /*
     * Sets notes_text
     *
     * @param string $notes_text Notes' plain text extracted from RTF data.
     *
     * @return $this
     */
    public function setNotesText($notes_text)
    {
        $this->container['notes_text'] = $notes_text;

        return $this;
    }

    /*
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /*
     * Sets notes
     *
     * @param string $notes The text notes associated with a resource.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /*
     * Gets notes_rtf
     *
     * @return string
     */
    public function getNotesRtf()
    {
        return $this->container['notes_rtf'];
    }

    /*
     * Sets notes_rtf
     *
     * @param string $notes_rtf The text notes in RTF format. Supported for MPP formats only.
     *
     * @return $this
     */
    public function setNotesRtf($notes_rtf)
    {
        $this->container['notes_rtf'] = $notes_rtf;

        return $this;
    }

    /*
     * Gets bcws
     *
     * @return double
     */
    public function getBcws()
    {
        return $this->container['bcws'];
    }

    /*
     * Sets bcws
     *
     * @param double $bcws The budget cost of a work scheduled for a resource.
     *
     * @return $this
     */
    public function setBcws($bcws)
    {
        $this->container['bcws'] = $bcws;

        return $this;
    }

    /*
     * Gets bcwp
     *
     * @return double
     */
    public function getBcwp()
    {
        return $this->container['bcwp'];
    }

    /*
     * Sets bcwp
     *
     * @param double $bcwp The budgeted cost of a work performed by a resource for the project to-date.
     *
     * @return $this
     */
    public function setBcwp($bcwp)
    {
        $this->container['bcwp'] = $bcwp;

        return $this;
    }

    /*
     * Gets is_generic
     *
     * @return bool
     */
    public function getIsGeneric()
    {
        return $this->container['is_generic'];
    }

    /*
     * Sets is_generic
     *
     * @param bool $is_generic Determines whether a resource is generic.
     *
     * @return $this
     */
    public function setIsGeneric($is_generic)
    {
        $this->container['is_generic'] = $is_generic;

        return $this;
    }

    /*
     * Gets is_inactive
     *
     * @return bool
     */
    public function getIsInactive()
    {
        return $this->container['is_inactive'];
    }

    /*
     * Sets is_inactive
     *
     * @param bool $is_inactive Determines whether a resource is inactive.
     *
     * @return $this
     */
    public function setIsInactive($is_inactive)
    {
        $this->container['is_inactive'] = $is_inactive;

        return $this;
    }

    /*
     * Gets is_enterprise
     *
     * @return bool
     */
    public function getIsEnterprise()
    {
        return $this->container['is_enterprise'];
    }

    /*
     * Sets is_enterprise
     *
     * @param bool $is_enterprise Determines whether a resource is an Enterprise resource.
     *
     * @return $this
     */
    public function setIsEnterprise($is_enterprise)
    {
        $this->container['is_enterprise'] = $is_enterprise;

        return $this;
    }

    /*
     * Gets booking_type
     *
     * @return \Aspose\Tasks\Model\BookingType
     */
    public function getBookingType()
    {
        return $this->container['booking_type'];
    }

    /*
     * Sets booking_type
     *
     * @param \Aspose\Tasks\Model\BookingType $booking_type The booking type of a resource.
     *
     * @return $this
     */
    public function setBookingType($booking_type)
    {
        $this->container['booking_type'] = $booking_type;

        return $this;
    }

    /*
     * Gets actual_work_protected
     *
     * @return string
     */
    public function getActualWorkProtected()
    {
        return $this->container['actual_work_protected'];
    }

    /*
     * Sets actual_work_protected
     *
     * @param string $actual_work_protected The duration through which actual work is protected.
     *
     * @return $this
     */
    public function setActualWorkProtected($actual_work_protected)
    {
        $this->container['actual_work_protected'] = $actual_work_protected;

        return $this;
    }

    /*
     * Gets actual_overtime_work_protected
     *
     * @return string
     */
    public function getActualOvertimeWorkProtected()
    {
        return $this->container['actual_overtime_work_protected'];
    }

    /*
     * Sets actual_overtime_work_protected
     *
     * @param string $actual_overtime_work_protected The duration through which actual overtime work is protected.
     *
     * @return $this
     */
    public function setActualOvertimeWorkProtected($actual_overtime_work_protected)
    {
        $this->container['actual_overtime_work_protected'] = $actual_overtime_work_protected;

        return $this;
    }

    /*
     * Gets active_directory_guid
     *
     * @return string
     */
    public function getActiveDirectoryGuid()
    {
        return $this->container['active_directory_guid'];
    }

    /*
     * Sets active_directory_guid
     *
     * @param string $active_directory_guid The Active Directory Guid for a resource.
     *
     * @return $this
     */
    public function setActiveDirectoryGuid($active_directory_guid)
    {
        $this->container['active_directory_guid'] = $active_directory_guid;

        return $this;
    }

    /*
     * Gets creation_date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /*
     * Sets creation_date
     *
     * @param \DateTime $creation_date The date when a resource was created.
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /*
     * Gets cost_center
     *
     * @return string
     */
    public function getCostCenter()
    {
        return $this->container['cost_center'];
    }

    /*
     * Sets cost_center
     *
     * @param string $cost_center Indicates which cost center the costs accrued by the resource should be charged to.
     *
     * @return $this
     */
    public function setCostCenter($cost_center)
    {
        $this->container['cost_center'] = $cost_center;

        return $this;
    }

    /*
     * Gets is_cost_resource
     *
     * @return bool
     */
    public function getIsCostResource()
    {
        return $this->container['is_cost_resource'];
    }

    /*
     * Sets is_cost_resource
     *
     * @param bool $is_cost_resource Determines whether a resource is a cost resource.
     *
     * @return $this
     */
    public function setIsCostResource($is_cost_resource)
    {
        $this->container['is_cost_resource'] = $is_cost_resource;

        return $this;
    }

    /*
     * Gets team_assignment_pool
     *
     * @return bool
     */
    public function getTeamAssignmentPool()
    {
        return $this->container['team_assignment_pool'];
    }

    /*
     * Sets team_assignment_pool
     *
     * @param bool $team_assignment_pool Determines whether the current resource is a team resource.
     *
     * @return $this
     */
    public function setTeamAssignmentPool($team_assignment_pool)
    {
        $this->container['team_assignment_pool'] = $team_assignment_pool;

        return $this;
    }

    /*
     * Gets assignment_owner
     *
     * @return string
     */
    public function getAssignmentOwner()
    {
        return $this->container['assignment_owner'];
    }

    /*
     * Sets assignment_owner
     *
     * @param string $assignment_owner The name of an assignment owner.
     *
     * @return $this
     */
    public function setAssignmentOwner($assignment_owner)
    {
        $this->container['assignment_owner'] = $assignment_owner;

        return $this;
    }

    /*
     * Gets assignment_owner_guid
     *
     * @return string
     */
    public function getAssignmentOwnerGuid()
    {
        return $this->container['assignment_owner_guid'];
    }

    /*
     * Sets assignment_owner_guid
     *
     * @param string $assignment_owner_guid The GUID of an assignment owner.
     *
     * @return $this
     */
    public function setAssignmentOwnerGuid($assignment_owner_guid)
    {
        $this->container['assignment_owner_guid'] = $assignment_owner_guid;

        return $this;
    }

    /*
     * Gets is_budget
     *
     * @return bool
     */
    public function getIsBudget()
    {
        return $this->container['is_budget'];
    }

    /*
     * Sets is_budget
     *
     * @param bool $is_budget Determines whether a resource is a budget resource.
     *
     * @return $this
     */
    public function setIsBudget($is_budget)
    {
        $this->container['is_budget'] = $is_budget;

        return $this;
    }

    /*
     * Gets budget_work
     *
     * @return string
     */
    public function getBudgetWork()
    {
        return $this->container['budget_work'];
    }

    /*
     * Sets budget_work
     *
     * @param string $budget_work The budget work for a budget work or material resource.
     *
     * @return $this
     */
    public function setBudgetWork($budget_work)
    {
        $this->container['budget_work'] = $budget_work;

        return $this;
    }

    /*
     * Gets budget_cost
     *
     * @return float
     */
    public function getBudgetCost()
    {
        return $this->container['budget_cost'];
    }

    /*
     * Sets budget_cost
     *
     * @param float $budget_cost The budget cost for a budget cost resource.
     *
     * @return $this
     */
    public function setBudgetCost($budget_cost)
    {
        $this->container['budget_cost'] = $budget_cost;

        return $this;
    }

    /*
     * Gets overtime_rate
     *
     * @return float
     */
    public function getOvertimeRate()
    {
        return $this->container['overtime_rate'];
    }

    /*
     * Sets overtime_rate
     *
     * @param float $overtime_rate The overtime rate of a resource. This value retrieved from the current date if a rate table exists for a resource.
     *
     * @return $this
     */
    public function setOvertimeRate($overtime_rate)
    {
        $this->container['overtime_rate'] = $overtime_rate;

        return $this;
    }

    /*
     * Gets baselines
     *
     * @return \Aspose\Tasks\Model\Baseline[]
     */
    public function getBaselines()
    {
        return $this->container['baselines'];
    }

    /*
     * Sets baselines
     *
     * @param \Aspose\Tasks\Model\Baseline[] $baselines Gets or sets the collection of baseline values of the resource.
     *
     * @return $this
     */
    public function setBaselines($baselines)
    {
        $this->container['baselines'] = $baselines;

        return $this;
    }

    /*
     * Gets extended_attributes
     *
     * @return \Aspose\Tasks\Model\ExtendedAttribute[]
     */
    public function getExtendedAttributes()
    {
        return $this->container['extended_attributes'];
    }

    /*
     * Sets extended_attributes
     *
     * @param \Aspose\Tasks\Model\ExtendedAttribute[] $extended_attributes Resource extended attributes.
     *
     * @return $this
     */
    public function setExtendedAttributes($extended_attributes)
    {
        $this->container['extended_attributes'] = $extended_attributes;

        return $this;
    }

    /*
     * Gets outline_codes
     *
     * @return \Aspose\Tasks\Model\OutlineCode[]
     */
    public function getOutlineCodes()
    {
        return $this->container['outline_codes'];
    }

    /*
     * Sets outline_codes
     *
     * @param \Aspose\Tasks\Model\OutlineCode[] $outline_codes Resource outline codes.
     *
     * @return $this
     */
    public function setOutlineCodes($outline_codes)
    {
        $this->container['outline_codes'] = $outline_codes;

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


