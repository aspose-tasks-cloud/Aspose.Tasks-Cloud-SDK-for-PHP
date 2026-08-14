<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="TaskPrimaveraPropertiesTest.php">
*   Copyright (c) 2022 Aspose.Tasks Cloud
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
use Aspose\Tasks\Model\PrimaveraDurationType;
use Aspose\Tasks\Model\PrimaveraActivityType;
use Aspose\Tasks\Model\PrimaveraPercentCompleteType;
use Aspose\Tasks\Tests\BaseTestContext;

class TaskPrimaveraPropertiesTest extends BaseTestContext
{
    public function testGetPrimaveraTaskProperties()
    {
        $remoteName = "testGetPrimaveraTaskProperties.xml";
        $folder = $this->uploadTestFile("p6_multiproject.xml", $remoteName, '');

        $response = $this->tasks->getPrimaveraTaskProperties(new Requests\GetPrimaveraTaskPropertiesRequest($remoteName, 1, $folder, self::$storageName));

        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getPrimaveraProperties());

        $entity = $response->getPrimaveraProperties();
        $this->assertEquals(0, $entity->getSequenceNumber());
        $this->assertEquals("A1040", $entity->getActivityId());
        $this->assertEquals("2000-10-12T08:00:00", $entity->getRemainingEarlyStart()->format("Y-m-d\\TH:i:s"));
        $this->assertEquals("2000-10-12T17:00:00", $entity->getRemainingEarlyFinish()->format("Y-m-d\\TH:i:s"));
        $this->assertEquals("2000-10-12T08:00:00", $entity->getRemainingLateStart()->format("Y-m-d\\TH:i:s"));
        $this->assertEquals("2000-10-12T17:00:00", $entity->getRemainingLateFinish()->format("Y-m-d\\TH:i:s"));
        $this->assertEquals("Fixed Units", $entity->getRawDurationType());
        $this->assertEquals("Task Dependent", $entity->getRawActivityType());
        $this->assertEquals("Units", $entity->getRawCompletePercentType());
        $this->assertEquals("Not Started", $entity->getRawStatus());
        $this->assertEquals(PrimaveraDurationType::FIXED_UNITS, $entity->getDurationType());
        $this->assertEquals(PrimaveraActivityType::TASK_DEPENDENT, $entity->getActivityType());
        $this->assertEquals(PrimaveraPercentCompleteType::UNITS, $entity->getPercentCompleteType());
    }
}