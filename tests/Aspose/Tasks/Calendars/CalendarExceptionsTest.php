<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="CalendarExceptionsTest.php">
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

namespace Aspose\Tasks\Tests\Calendars;

use Aspose\Tasks\Model\CalendarException;
use Aspose\Tasks\Model\CalendarExceptionType;
use DateTime;
use Aspose\Tasks\Model\DayType;
use Aspose\Tasks\Model\Month;
use Aspose\Tasks\Model\MonthItemType;
use Aspose\Tasks\Model\MonthPosition;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Model\WorkingTime;
use Aspose\Tasks\Tests\BaseTestContext;

class CalendarExceptionsTest extends BaseTestContext
{
    public function testGetCalendarExceptions()
    {
        $remoteName = "testGetCalendarExceptions.mpp";
        $folder = $this->uploadTestFile("Calenar with exception.mpp", $remoteName, '');
        
        $response = $this->tasks->getCalendarExceptions(new Requests\GetCalendarExceptionsRequest($remoteName, 1, self::$storageName, $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getCalendarExceptions());
        $this->assertEquals(1, count($response->getCalendarExceptions()));
        $calendarException = $response->getCalendarExceptions()[0];
        
        $this->assertEquals(true, $calendarException->getDayWorking());
        $this->assertEquals(1, count($calendarException->getDaysOfWeek()));
        $this->assertEquals(DayType::MONDAY, $calendarException->getDaysOfWeek()[0]);
        $this->assertEquals("2018-02-13", $calendarException->getFromDate()->format("Y-m-d"));
        $this->assertEquals("2018-04-09", $calendarException->getToDate()->format("Y-m-d"));
        
        $this->assertEquals(Month::UNDEFINED, $calendarException->getMonth());
        $this->assertEquals(MonthItemType::UNDEFINED, $calendarException->getMonthItem());
        $this->assertEquals(MonthPosition::UNDEFINED, $calendarException->getMonthPosition());
        $this->assertEquals(CalendarExceptionType::WEEKLY, $calendarException->getType());
        $this->assertEquals(8, $calendarException->getOccurrences());
        $this->assertEquals(1, $calendarException->getPeriod());
        $this->assertEquals(2, count($calendarException->getWorkingTimes()));
        $this->assertEquals("09:00:00", $calendarException->getWorkingTimes()[0]->getFromTime()->format("H:i:s"));
        $this->assertEquals("12:34:00", $calendarException->getWorkingTimes()[0]->getToTime()->format("H:i:s"));
        $this->assertEquals("15:11:00", $calendarException->getWorkingTimes()[1]->getFromTime()->format("H:i:s"));
        $this->assertEquals("17:30:00", $calendarException->getWorkingTimes()[1]->getToTime()->format("H:i:s"));
    }
    
    public function testAddCalendarException()
    {
        $remoteName = "testAddCalendarException.mpp";
        $folder = $this->uploadTestFile("New project 2013.mpp", $remoteName, '');
        
        $calendarException = new CalendarException();
        $calendarException->setName("Non-working day exception");
        $calendarException->setDayWorking(false);
        $calendarException->setFromDate(new DateTime("2014-10-28"));
        $calendarException->setToDate(new DateTime("2015-08-05"));
        $calendarException->setOccurrences(10);
        $calendarException->setType(CalendarExceptionType::MONTHLY_BY_DAY);
        $calendarException->setEnteredByOccurrences(true);
        $calendarException->setMonthDay(5);
        $calendarException->setPeriod(1);
        
        $response = $this->tasks->postCalendarException(
            new Requests\PostCalendarExceptionRequest($remoteName, 1, $calendarException, null, self::$storageName, $folder));
        $this->assertEquals(201, $response->getCode());
        
        $response = $this->tasks->getCalendarExceptions(new Requests\GetCalendarExceptionsRequest($remoteName, 1, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getCalendarExceptions());
        $this->assertEquals(1, count($response->getCalendarExceptions()));
        $this->assertCalendarExceptionsAreEqual($calendarException, $response->getCalendarExceptions()[0]);
    }
    
    public function testEditCalendarException()
    {
        $remoteName = "testEditCalendarException.mpp";
        $folder = $this->uploadTestFile("Calenar with exception.mpp", $remoteName, '');
        
        $response = $this->tasks->getCalendarExceptions(new Requests\GetCalendarExceptionsRequest($remoteName, 1, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $calendarException = $response->getCalendarExceptions()[0];
        $calendarException->setDaysOfWeek(array(DayType::THURSDAY, DayType::FRIDAY));
        $workingTime = new WorkingTime();
        $workingTime->setFromTime(new DateTime("09:00:00"));
        $workingTime->setToTime(new DateTime("17:00:00"));
        $calendarException->setWorkingTimes(array($workingTime));
        $calendarException->setOccurrences(10);
        $calendarException->setEnteredByOccurrences(true);
        $calendarException->setPeriod(1);
        $calendarException->setName("Non-working day exception");
        $calendarException->setDayWorking(true);
        $calendarException->setFromDate(new DateTime("2014-10-28"));
        $calendarException->setToDate(new DateTime("2015-08-05"));
        
        $response = $this->tasks->putCalendarException(
            new Requests\PutCalendarExceptionRequest($remoteName, 1, $calendarException->getIndex(), $calendarException, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getCalendarExceptions(new Requests\GetCalendarExceptionsRequest($remoteName, 1, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $this->assertNotNull($response->getCalendarExceptions());
        $this->assertEquals(1, count($response->getCalendarExceptions()));
        
        $this->assertCalendarExceptionsAreEqual($calendarException, $response->getCalendarExceptions()[0]);
    }
    
    public function testDeleteCalendarException()
    {
        $remoteName = "testDeleteCalendarException.mpp";
        $folder = $this->uploadTestFile("Calenar with exception.mpp", $remoteName, '');
       
        $response = $this->tasks->deleteCalendarException(new Requests\DeleteCalendarExceptionRequest($remoteName, 1, 1, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
                
        $response = $this->tasks->getCalendarExceptions(new Requests\GetCalendarExceptionsRequest($remoteName, 1, self::$storageName, $folder));

        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getCalendarExceptions());
        $this->assertEquals(0, count($response->getCalendarExceptions()));
    }
    
    private function assertCalendarExceptionsAreEqual(CalendarException $c1, CalendarException $c2)
    {
        $this->assertEquals($c1->getName(), $c2->getName());
        $this->assertEquals($c1->getDayWorking(), $c2->getDayWorking());
        $this->assertEquals($c1->getEnteredByOccurrences(), $c2->getEnteredByOccurrences());
        $this->assertEquals($c1->getFromDate()->format("Y-m-d"), $c2->getFromDate()->format("Y-m-d"));
        
        $this->assertEquals($c1->getMonthDay(), $c2->getMonthDay());
        $this->assertEquals($c1->getOccurrences(), $c2->getOccurrences());
        $this->assertEquals($c1->getPeriod(), $c2->getPeriod());
        $this->assertEquals($c1->getToDate()->format("Y-m-d"), $c2->getToDate()->format("Y-m-d"));
        $this->assertEquals($c1->getType(), $c2->getType());
        $this->assertEquals(count($c1->getWorkingTimes()), count($c2->getWorkingTimes()));
        for ($i = 0; $i < count($c1->getWorkingTimes()); $i = $i + 1)
        {
            $this->assertEquals($c1->getWorkingTimes()[$i]->getFromTime()->format("H:i:s"), $c2->getWorkingTimes()[$i]->getFromTime()->format("H:i:s"));
            $this->assertEquals($c1->getWorkingTimes()[$i]->getToTime()->format("H:i:s"), $c2->getWorkingTimes()[$i]->getToTime()->format("H:i:s"));
        }
        
        $this->assertEquals(count($c1->getDaysOfWeek()), count($c2->getDaysOfWeek()));
        for ($i = 0; $i < count($c1->getDaysOfWeek()); $i = $i + 1)
        {
            $this->assertEquals($c1->getDaysOfWeek()[$i], $c2->getDaysOfWeek()[$i]);
        }
    }
}