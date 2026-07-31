<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GroupOn.php">
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
 * GroupOn
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * GroupOn
 *
 * @description Specifies the type of grouping for a field used as a criterion in a group definition.
 */
class GroupOn
{
    /*
     * Possible values of this enum
     */
    const EACH_VALUE = 'EachValue';
    const INTERVAL = 'Interval';
    const DATE_EACH_VALUE = 'DateEachValue';
    const DATE_MINUTE = 'DateMinute';
    const DATE_HOUR = 'DateHour';
    const DATE_DAY = 'DateDay';
    const DATE_WEEK = 'DateWeek';
    const DATE_THIRD_OF_MONTH = 'DateThirdOfMonth';
    const DATE_MONTH = 'DateMonth';
    const DATE_QTR = 'DateQtr';
    const DATE_YEAR = 'DateYear';
    const DURATION_EACH_VALUE = 'DurationEachValue';
    const DURATION_MINUTES = 'DurationMinutes';
    const DURATION_HOURS = 'DurationHours';
    const DURATION_DAYS = 'DurationDays';
    const DURATION_WEEKS = 'DurationWeeks';
    const DURATION_MONTHS = 'DurationMonths';
    const OUTLINE_EACH_VALUE = 'OutlineEachValue';
    const OUTLINE_LEVEL = 'OutlineLevel';
    const PCT_EACH_VALUE = 'PctEachValue';
    const PCT_INTERVAL = 'PctInterval';
    const PCT199 = 'Pct199';
    const PCT150 = 'Pct150';
    const PCT125 = 'Pct125';
    const PCT110 = 'Pct110';
    const TEXT_EACH_VALUE = 'TextEachValue';
    const TEXT_PREFIX = 'TextPrefix';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EACH_VALUE,
            self::INTERVAL,
            self::DATE_EACH_VALUE,
            self::DATE_MINUTE,
            self::DATE_HOUR,
            self::DATE_DAY,
            self::DATE_WEEK,
            self::DATE_THIRD_OF_MONTH,
            self::DATE_MONTH,
            self::DATE_QTR,
            self::DATE_YEAR,
            self::DURATION_EACH_VALUE,
            self::DURATION_MINUTES,
            self::DURATION_HOURS,
            self::DURATION_DAYS,
            self::DURATION_WEEKS,
            self::DURATION_MONTHS,
            self::OUTLINE_EACH_VALUE,
            self::OUTLINE_LEVEL,
            self::PCT_EACH_VALUE,
            self::PCT_INTERVAL,
            self::PCT199,
            self::PCT150,
            self::PCT125,
            self::PCT110,
            self::TEXT_EACH_VALUE,
            self::TEXT_PREFIX,
        ];
    }
}


