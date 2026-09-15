<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="VbaTest.php">
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

namespace Aspose\Tasks\Tests\Vba;

use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Model\CreateVbaModuleRequest;
use Aspose\Tasks\Model\UpdateVbaModuleRequest;
use Aspose\Tasks\Model\VbaModuleType;
use Aspose\Tasks\Tests\BaseTestContext;

class VbaTest extends BaseTestContext
{
    public function testGetVbaProject()
    {
        $remoteName = "testGetVbaProject.mpp";
        $folder = $this->uploadTestFile("VbaProject3.mpp", $remoteName, '');
        
        $response = $this->tasks->getVbaProject(new Requests\GetVbaProjectRequest($remoteName, $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getVbaProject());
        $this->assertNotNull($response->getVbaProject()->getModules());
        $this->assertEquals(8, count($response->getVbaProject()->getModules()));
        $this->assertEquals("Module1", $response->getVbaProject()->getModules()[1]->getName());
        $this->assertTrue(strpos($response->getVbaProject()->getModules()[1]->getSourceCode(), 'Type MEMORYSTATUS') === 0);
    }

    public function testGetVbaModuleByIndex()
    {
        $remoteName = "testGetVbaModuleByIndex.mpp";
        $folder = $this->uploadTestFile("VbaProject3.mpp", $remoteName, '');

        $request = new Requests\GetVbaModuleRequest($remoteName, "1", $folder);
        $response = $this->tasks->getVbaModule($request);

        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getModule());
        $this->assertEquals("Module1", $response->getModule()->getName());
        $this->assertNotNull($response->getModule()->getSourceCode());
        $this->assertTrue(strpos($response->getModule()->getSourceCode(), 'Type MEMORYSTATUS') === 0);
    }

    public function testGetVbaModuleByName()
    {
        $remoteName = "testGetVbaModuleByName.mpp";
        $folder = $this->uploadTestFile("VbaProject3.mpp", $remoteName, '');

        $request = new Requests\GetVbaModuleRequest($remoteName, "Module1", $folder);
        $response = $this->tasks->getVbaModule($request);

        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getModule());
        $this->assertEquals("Module1", $response->getModule()->getName());
    }

    public function testPostVbaModule()
    {
        $remoteName = "testPostVbaModule.mpp";
        $folder = $this->uploadTestFile("VbaProject3.mpp", $remoteName, '');

        $createRequest = new CreateVbaModuleRequest();
        $createRequest->setName("NewTestModule");
        $createRequest->setType(VbaModuleType::PROCEDURAL_MODULE);
        $createRequest->setSourceCode("Sub TestProc()\n    MsgBox \"Hello\"\nEnd Sub");

        $request = new Requests\PostVbaModuleRequest($remoteName, $createRequest, null, $folder);
        $response = $this->tasks->postVbaModule($request);

        $this->assertEquals(201, $response->getCode());
        $this->assertNotNull($response->getModule());
        $this->assertEquals("NewTestModule", $response->getModule()->getName());
        $this->assertEquals(VbaModuleType::PROCEDURAL_MODULE, $response->getModule()->getType());
        $this->assertEquals("Sub TestProc()\n    MsgBox \"Hello\"\nEnd Sub", $response->getModule()->getSourceCode());
    }

    public function testPutVbaModule()
    {
        $remoteName = "testPutVbaModule.mpp";
        $folder = $this->uploadTestFile("VbaProject3.mpp", $remoteName, '');

        $newSourceCode = "Sub UpdatedProc()\n    MsgBox \"Updated\"\nEnd Sub";

        $updateRequest = new UpdateVbaModuleRequest();
        $updateRequest->setSourceCode($newSourceCode);

        $request = new Requests\PutVbaModuleRequest($remoteName, "Module1", $updateRequest, null, $folder);
        $response = $this->tasks->putVbaModule($request);

        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getModule());
        $this->assertEquals("Module1", $response->getModule()->getName());
        $this->assertEquals($newSourceCode, $response->getModule()->getSourceCode());

        $getResponse = new Requests\GetVbaModuleRequest($remoteName, "Module1", $folder);
        $getResult = $this->tasks->getVbaModule($getResponse);

        $this->assertEquals(200, $getResult->getCode());
        $this->assertNotNull($getResult->getModule());
        $this->assertEquals("Module1", $getResult->getModule()->getName());
        $this->assertEquals($newSourceCode, $getResult->getModule()->getSourceCode());
    }

    public function testDeleteVbaModule()
    {
        $remoteName = "testDeleteVbaModule.mpp";
        $folder = $this->uploadTestFile("VbaProject3.mpp", $remoteName, '');

        $getBeforeRequest = new Requests\GetVbaModuleRequest($remoteName, "Module1", $folder);
        $getBeforeResult = $this->tasks->getVbaModule($getBeforeRequest);
        $this->assertEquals(200, $getBeforeResult->getCode());
        $this->assertEquals("Module1", $getBeforeResult->getModule()->getName());

        $deleteRequest = new Requests\DeleteVbaModuleRequest($remoteName, "Module1", null, $folder);
        $deleteResult = $this->tasks->deleteVbaModule($deleteRequest);
        $this->assertEquals(200, $deleteResult->getCode());

        $getProjectRequest = new Requests\GetVbaProjectRequest($remoteName, $folder);
        $getProjectResult = $this->tasks->getVbaProject($getProjectRequest);
        $this->assertEquals(200, $getProjectResult->getCode());
        $moduleNames = array_map(function($module) { return $module->getName(); }, $getProjectResult->getVbaProject()->getModules());
        $this->assertNotContains("Module1", $moduleNames);
    }

    public function testClearVba()
    {
        $remoteName = "testClearVba.mpp";
        $folder = $this->uploadTestFile("VbaProject3.mpp", $remoteName, '');

        $getBeforeRequest = new Requests\GetVbaProjectRequest($remoteName, $folder);
        $getBeforeResult = $this->tasks->getVbaProject($getBeforeRequest);
        $this->assertEquals(200, $getBeforeResult->getCode());
        $this->assertGreaterThan(0, count($getBeforeResult->getVbaProject()->getModules()));

        $clearRequest = new Requests\ClearVbaRequest($remoteName, null, $folder);
        $clearResult = $this->tasks->clearVba($clearRequest);
        $this->assertEquals(200, $clearResult->getCode());

        $getAfterRequest = new Requests\GetVbaProjectRequest($remoteName, $folder);
        $getAfterResult = $this->tasks->getVbaProject($getAfterRequest);
        $this->assertEquals(200, $getAfterResult->getCode());
        $this->assertEquals(0, count($getAfterResult->getVbaProject()->getModules()));
    }
}
