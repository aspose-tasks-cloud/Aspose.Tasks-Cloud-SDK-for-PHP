<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ResourceLevelTest.php">
*   Copyright (c) 2025 Aspose.Tasks Cloud
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

namespace Aspose\Tasks\Tests\Resources;

use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Tests\BaseTestContext;

class ResourceLevelTest extends BaseTestContext
{
    public function testLevelTasksWithoutBody()
    {
        $remoteName = "testLevelTasksWithoutBody.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');

        $response = $this->tasks->levelTasks(new Requests\LevelTasksRequest($remoteName,null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getAffectedTaskUids());
        $this->assertEquals(2, count($response->getAffectedTaskUids()));
    }

    public function testLevelTasksWithBody()
    {
        $remoteName = "testLevelTasksWithBody.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');

        $options = new Model\LevelingOptions();
        $options->setLevelingOrder(Model\LevelingOrder::STANDARD);
        $options->setResourceUids(array(2, 999));

        $response = $this->tasks->levelTasks(new Requests\LevelTasksRequest($remoteName, $options, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getAffectedTaskUids());
        $this->assertEquals(1, count($response->getAffectedTaskUids()));
    }

    public function testClearLevelingWithoutBody()
    {
        $remoteName = "testClearLevelingWithoutBody.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');

        $response = $this->tasks->clearLeveling(new Requests\ClearLevelingRequest($remoteName,null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
    }

    public function testClearLevelingWithBody()
    {
        $remoteName = "testClearLevelingWithBody.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');

        $response = $this->tasks->clearLeveling(new Requests\ClearLevelingRequest($remoteName, array(24, 9999), self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
    }
}