<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="TimephasedDataTest.php">
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

namespace Aspose\Tasks\Tests\TimephasedData;

use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Tests\BaseTestContext;

class TimephasedDataTest extends BaseTestContext
{
    public function testGetTaskTimephasedData()
    {
        $remoteName = "testGetTaskTimephasedData.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getTaskTimephasedData(new Requests\GetTaskTimephasedDataRequest($remoteName,
            27,
            Model\TimephasedDataType::TASK_WORK,
            null,
            null,
            $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getItems());
        
        $timephasedDataItems = $response->getItems();
        $this->assertNotNull($timephasedDataItems);
        $this->assertTrue(count($timephasedDataItems) > 0);
        
        for ($i = 0; $i < count($timephasedDataItems); $i++)
        {
            $this->assertEquals(Model\TimephasedDataType::TASK_WORK, $timephasedDataItems[$i]->getTimephasedDataType());
            $this->assertEquals(27, $timephasedDataItems[$i]->getUid());
        }
    }
    
    public function testGetResourceTimephasedData()
    {
        $remoteName = "testGetResourceAssignmentTimephasedData.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getResourceTimephasedData(new Requests\GetResourceTimephasedDataRequest($remoteName,
            1,
            Model\TimephasedDataType::RESOURCE_WORK,
            null,
            null,
            $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getItems());
        
        $timephasedDataItems = $response->getItems();
        $this->assertNotNull($timephasedDataItems);
        $this->assertTrue(count($timephasedDataItems) > 0);
        
        for ($i = 0; $i < count($timephasedDataItems); $i++)
        {
            $this->assertEquals(Model\TimephasedDataType::RESOURCE_WORK, $timephasedDataItems[$i]->getTimephasedDataType());
            $this->assertEquals(1, $timephasedDataItems[$i]->getUid());
        }
    }
    
    public function testGetResourceAssignmentTimephasedData()
    {
        $remoteName = "testGetResourceAssignmentTimephasedData.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getAssignmentTimephasedData(new Requests\GetAssignmentTimephasedDataRequest($remoteName, 
            66, 
            Model\TimephasedDataType::ASSIGNMENT_WORK,
            null,
            null,
            $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getItems());
        
        $timephasedDataItems = $response->getItems();
        $this->assertNotNull($timephasedDataItems);
        $this->assertTrue(count($timephasedDataItems) > 0);
        
        for ($i = 0; $i < count($timephasedDataItems); $i++)
        {
            $this->assertEquals(Model\TimephasedDataType::ASSIGNMENT_WORK, $timephasedDataItems[$i]->getTimephasedDataType());
            $this->assertEquals(66, $timephasedDataItems[$i]->getUid());
        }
    }
}