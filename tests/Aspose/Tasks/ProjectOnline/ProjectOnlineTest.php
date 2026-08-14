<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ProjectOnlineTest.php">
*   Copyright (c) 2019 Aspose.Tasks Cloud
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

namespace Aspose\Tasks\Tests\ProjectOnline;

use Aspose\Tasks\Model\Requests\CreateNewProjectRequest;
use Aspose\Tasks\Model\Requests\PutImportProjectFromProjectOnlineRequest;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests\GetProjectListRequest;
use Aspose\Tasks\Tests\BaseTestContext;

class ProjectOnlineTest extends BaseTestContext
{
    public function testGetProjectListByTokenCredential()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $response = $this->tasks->getProjectList(new GetProjectListRequest
        ('http://project_server_instance.local/sites/pwa', 'SOMESECRETTOKEN'));

        $this->assertEquals(200, $response->getCode());
        $this->assertNotEmpty($response->getProjects());
    }

    public function testGetProjectListByLoginAndPasswordCredentials()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $response = $this->tasks->getProjectList(new GetProjectListRequest
        ('http://project_server_instance.local/sites/pwa', null, 'SomeLogin', 'SomePassword'));

        $this->assertEquals(200, $response->getCode());
        $this->assertNotEmpty($response->getProjects());
    }

    public function testCreateNewProjectByTokenCredential()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $remoteName = "testCreateNewProject.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $response = $this->tasks->createNewProject(new CreateNewProjectRequest
        ($remoteName, 'http://project_server_instance.local/sites/pwa', null, $folder, self::$storageName, 'SOMESECRETTOKEN'));

        $this->assertEquals(200, $response->getCode());
    }

    public function testCreateNewProjectByLoginAndPasswordCredentials()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $remoteName = "testCreateNewProject.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $response = $this->tasks->createNewProject(new CreateNewProjectRequest
        ($remoteName, 'http://project_server_instance.local/sites/pwa', null, $folder, self::$storageName, null, 'SomeLogin', 'SomePassword'));

        $this->assertEquals(200, $response->getCode());
    }

    public function testUpdateProjectByTokenCredential()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $remoteName = "testUpdateProject.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $response = $this->tasks->updateProject(new UpdateProjectRequest
        ($remoteName, 'http://project_server_instance.local/sites/pwa', null, $folder, self::$storageName, 'SOMESECRETTOKEN'));

        $this->assertEquals(200, $response->getCode());
    }

    public function testUpdateProjectByLoginAndPasswordCredentials()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $remoteName = "testUpdateProject.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $response = $this->tasks->updateProject(new UpdateProjectRequest
        ($remoteName, 'http://project_server_instance.local/sites/pwa', null, $folder, self::$storageName, null, 'SomeLogin', 'SomePassword'));

        $this->assertEquals(200, $response->getCode());
    }

    public function testPutImportProjectFromProjectOnlineByTokenCredential()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $remoteName = "testUpdateProject.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $response = $this->tasks->putImportProjectFromProjectOnline(new PutImportProjectFromProjectOnlineRequest
        ($remoteName, 'Some-Guid','http://project_server_instance.local/sites/pwa', null, null, $folder, self::$storageName, 'SOMESECRETTOKEN'));

        $this->assertEquals(200, $response->getCode());
    }

    public function testPutImportProjectFromProjectOnlineByLoginAndPasswordCredentials()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $remoteName = "testUpdateProject.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $response = $this->tasks->putImportProjectFromProjectOnline(new PutImportProjectFromProjectOnlineRequest
        ($remoteName, 'Some-Guid','http://project_server_instance.local/sites/pwa', 'SomeLogin', null,$folder, self::$storageName, null, 'SomePassword'));

        $this->assertEquals(200, $response->getCode());
    }
}
