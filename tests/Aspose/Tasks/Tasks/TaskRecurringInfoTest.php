<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="TaskRecurringInfoTest.php">
*   Copyright (c) 2018 Aspose.Tasks Cloud
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

namespace Aspose\Tasks\Tests\Tasks;

use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Model\ExtendedAttributeDefinition;
use Aspose\Tasks\Model\ExtendedAttribute;
use Aspose\Tasks\Model\RecurringInfo;
use Aspose\Tasks\Model\RecurrencePattern;
use Aspose\Tasks\Model\WeekDayType;
use DateTime;
use Aspose\Tasks\Tests\BaseTestContext;

class TaskRecurringInfoTest extends BaseTestContext
{
    public function testGetTaskRecurringInfo()
    {
        $remoteName = "testGetTaskRecurringInfo.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');
        
        $response = $this->tasks->getTaskRecurringInfo(new Requests\GetTaskRecurringInfoRequest($remoteName, 6, self::$storageName, $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getRecurringInfo());
        
        $entity = $response->getRecurringInfo();
        $this->assertEquals(2, $entity->getOccurrences());
        $this->assertEquals(Model\RecurrencePattern::MONTHLY, $entity->getRecurrencePattern());
        $this->assertEquals(true, $entity->getUseEndDate());
        $this->assertEquals(false, $entity->getMonthlyUseOrdinalDay());
        $this->assertEquals(1, $entity->getMonthlyDay());
        $this->assertEquals(Model\WeekDayType::NONE, $entity->getWeeklyDays());
        $this->assertEquals(Model\OrdinalNumber::SECOND, $entity->getYearlyOrdinalNumber());
    }
    
    public function testEditRecurringTask()
    {
        $remoteName = "testEditRecurringTask.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');
        
        $response = $this->tasks->getTaskRecurringInfo(new Requests\GetTaskRecurringInfoRequest($remoteName, 6, self::$storageName, $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getRecurringInfo());
        
        $entity = $response->getRecurringInfo();
        $entity->setOccurrences(10);
        
        $request = new Requests\PutTaskRecurringInfoRequest($remoteName, 6, $entity, null, self::$storageName, $folder);
        $response = $this->tasks->putTaskRecurringInfo($request);
        
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTaskRecurringInfo(new Requests\GetTaskRecurringInfoRequest($remoteName, 6, self::$storageName, $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getRecurringInfo());
        
        $this->assertEquals(10, $entity->getOccurrences());
        $this->assertEquals(Model\RecurrencePattern::MONTHLY, $entity->getRecurrencePattern());
        $this->assertEquals(true, $entity->getUseEndDate());
        $this->assertEquals(false, $entity->getMonthlyUseOrdinalDay());
        $this->assertEquals(1, $entity->getMonthlyDay());
        $this->assertEquals(Model\WeekDayType::NONE, $entity->getWeeklyDays());
        $this->assertEquals(Model\OrdinalNumber::SECOND, $entity->getYearlyOrdinalNumber());
    }
    
    public function testAddRecurringTask()
    {
        $remoteName = "testAddRecurringTask.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');
        
        $recurringInfo = new RecurringInfo();
        $recurringInfo->setRecurrencePattern(RecurrencePattern::WEEKLY);
        $recurringInfo->setOccurrences(4);
        $recurringInfo->setWeeklyRepetitions(3);
        $recurringInfo->setWeeklyDays("Wednesday, Thursday");
        $recurringInfo->setStartDate(new DateTime("2018-01-01T08:00:00"));
        $recurringInfo->setEndDate(new DateTime("2018-12-31T00:00:00"));
        $recurringInfo->setUseEndDate(true);
        
        $request = new Requests\PostTaskRecurringInfoRequest($remoteName, 0, "New recurring task", $recurringInfo, "Standard", null, self::$storageName, $folder);
        $response = $this->tasks->postTaskRecurringInfo($request);
        
        $this->assertEquals(201, $response->getCode());
        $this->assertNotNull($response->getTaskItem());
        
        
        $getTaskResponse = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, $response->getTaskItem()->getUid(), self::$storageName, $folder));
        $this->assertEquals(200, $getTaskResponse->getCode());
        $this->assertEquals(36, count($getTaskResponse->getTask()->getSubtasksUids()));
       
        $lastTaskUid = $getTaskResponse->getTask()->getSubtasksUids()[35];
        $getTaskResponse = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, $lastTaskUid, self::$storageName, $folder));
        
        $this->assertEquals(200, $getTaskResponse->getCode());
        $this->assertNotNull($getTaskResponse->getTask());
        
        $this->assertEquals("2018-12-27T08:00:00", $getTaskResponse->getTask()->getStart()->format("Y-m-d\\TH:i:s"));
    }
}