<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="GroupsTest.php">
*   Copyright (c) 2026 Aspose.Tasks for Cloud
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

namespace Aspose\Tasks\Tests\Groups;

use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Tests\BaseTestContext;

class GroupsTest extends BaseTestContext
{
    public function testGetResourceGroups()
    {
        $remoteName = "testGetResourceGroups.mpp";
        $folder = $this->uploadTestFile("ProjectWithGroups.mpp", $remoteName, '');

        $response = $this->tasks->getResourceGroups(new Requests\GetResourceGroupsRequest($remoteName, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getGroups());
        $this->assertNotNull($response->getGroups()->getList());
        $this->assertGreaterThan(0, count($response->getGroups()->getList()));
    }

    public function testGetResourceGroup()
    {
        $remoteName = "testGetResourceGroup.mpp";
        $folder = $this->uploadTestFile("ProjectWithGroups.mpp", $remoteName, '');

        $response = $this->tasks->getResourceGroups(new Requests\GetResourceGroupsRequest($remoteName, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertGreaterThan(0, count($response->getGroups()->getList()));

        $groupUid = $response->getGroups()->getList()[0]->getUid();

        $response = $this->tasks->getResourceGroup(new Requests\GetResourceGroupRequest($remoteName, $groupUid, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getGroup());
        $this->assertEquals($groupUid, $response->getGroup()->getUid());
        $this->assertNotNull($response->getGroup()->getName());
    }

    public function testGetGroupedResources()
    {
        $remoteName = "testGetGroupedResources.mpp";
        $folder = $this->uploadTestFile("ProjectWithGroups.mpp", $remoteName, '');

        $response = $this->tasks->getResourceGroups(new Requests\GetResourceGroupsRequest($remoteName, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertGreaterThan(1, count($response->getGroups()->getList()));

        $groupUid = $response->getGroups()->getList()[1]->getUid();

        $response = $this->tasks->getGroupedResources(new Requests\GetGroupedResourcesRequest($remoteName, $groupUid, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getBuckets());
        $this->assertGreaterThan(0, count($response->getBuckets()));

        foreach ($response->getBuckets() as $bucket) {
            $this->assertNotNull($bucket->getKey());
            $this->assertNotNull($bucket->getResources());
        }
    }

    public function testGetTaskGroups()
    {
        $remoteName = "testGetTaskGroups.mpp";
        $folder = $this->uploadTestFile("ProjectWithGroups.mpp", $remoteName, '');

        $response = $this->tasks->getTaskGroups(new Requests\GetTaskGroupsRequest($remoteName, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getGroups());
        $this->assertNotNull($response->getGroups()->getList());
        $this->assertGreaterThan(1, count($response->getGroups()->getList()));
    }

    public function testGetTaskGroup()
    {
        $remoteName = "testGetTaskGroup.mpp";
        $folder = $this->uploadTestFile("ProjectWithGroups.mpp", $remoteName, '');

        $response = $this->tasks->getTaskGroups(new Requests\GetTaskGroupsRequest($remoteName, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertGreaterThan(1, count($response->getGroups()->getList()));

        $groupUid = $response->getGroups()->getList()[0]->getUid();

        $response = $this->tasks->getTaskGroup(new Requests\GetTaskGroupRequest($remoteName, $groupUid, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getGroup());
        $this->assertEquals($groupUid, $response->getGroup()->getUid());
        $this->assertEquals("Percent complete", $response->getGroup()->getName());
        $this->assertNotNull($response->getGroup()->getGroupCriteria());
        $this->assertGreaterThan(0, count($response->getGroup()->getGroupCriteria()));
    }

    public function testGetGroupedTasks()
    {
        $remoteName = "testGetGroupedTasks.mpp";
        $folder = $this->uploadTestFile("ProjectWithGroups.mpp", $remoteName, '');

        $response = $this->tasks->getTaskGroups(new Requests\GetTaskGroupsRequest($remoteName, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertGreaterThan(1, count($response->getGroups()->getList()));

        $groupUid = $response->getGroups()->getList()[0]->getUid();

        $response = $this->tasks->getGroupedTasks(new Requests\GetGroupedTasksRequest($remoteName, $groupUid, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getBuckets());
        $this->assertGreaterThan(0, count($response->getBuckets()));

        foreach ($response->getBuckets() as $bucket) {
            $this->assertNotNull($bucket->getKey());
            $this->assertNotNull($bucket->getTasks());
        }
    }
}
