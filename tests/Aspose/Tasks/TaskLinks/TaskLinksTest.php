<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="TaskLinksTest.php">
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

namespace Aspose\Tasks\Tests\TaskLinks;

use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Model\TaskLink;
use Aspose\Tasks\Tests\BaseTestContext;

class TaskLinksTest extends BaseTestContext
{
    public function testGetTaskLinks()
    {
        $remoteName = "testGetTaskLinks.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        $response = $this->tasks->getTaskLinks(new Requests\GetTaskLinksRequest($remoteName, self::$storageName, $folder, null));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTaskLinks());
        $this->assertEquals(24, count($response->getTaskLinks()));
    }
    
    public function testAddTaskLink()
    {
        $remoteName = "testAddTaskLink.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $taskLink = new TaskLink();
        $taskLink->setPredecessorUid(28);
        $taskLink->setSuccessorUid(30);
        $taskLink->setLinkType(Model\TaskLinkType::START_TO_START);
        $taskLink->setLag(9600);
        $taskLink->setLagFormat(Model\TimeUnitType::DAY);
        
        $response = $this->tasks->postTaskLink(new Requests\PostTaskLinkRequest($remoteName, $taskLink, self::$storageName, $folder, null));
        $this->assertEquals(200, $response->getCode());
    }
    
    public function testEditTaskLink()
    {
        $remoteName = "testEditTaskLink.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getTaskLinks(new Requests\GetTaskLinksRequest($remoteName, self::$storageName, $folder, null));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTaskLinks());
        
        $taskLinkToEdit = $response->getTaskLinks()[0];
        
        // Modification of PredecessorUid and SuccessorUid fields is not supported.
        $taskLinkToEdit->setLinkType(Model\TaskLinkType::START_TO_FINISH);
        $taskLinkToEdit->setLag(9600);
        $taskLinkToEdit->setLagFormat(Model\TimeUnitType::DAY);
        
        $response = $this->tasks->putTaskLink(new Requests\PutTaskLinkRequest($remoteName, 1, $taskLinkToEdit, self::$storageName, $folder, null));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTaskLinks(new Requests\GetTaskLinksRequest($remoteName, self::$storageName, $folder, null));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTaskLinks());
        
        $this->assertEquals(Model\TaskLinkType::START_TO_FINISH, $response->getTaskLinks()[0]->getLinkType());
        $this->assertEquals(9600, $response->getTaskLinks()[0]->getLag());
        $this->assertEquals(Model\TimeUnitType::DAY, $response->getTaskLinks()[0]->getLagFormat());
        $this->assertEquals("16:00:00", $response->getTaskLinks()[0]->getLinkLagTimeSpan());
    }
    
    public function testDeleteTaskLink()
    {
        $remoteName = "testDeleteTaskLink.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->deleteTaskLink(new Requests\DeleteTaskLinkRequest($remoteName, 1, self::$storageName, $folder, null));
        
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTaskLinks(new Requests\GetTaskLinksRequest($remoteName, self::$storageName, $folder, null));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTaskLinks());
        $this->assertEquals(23, count($response->getTaskLinks()));
    }
}