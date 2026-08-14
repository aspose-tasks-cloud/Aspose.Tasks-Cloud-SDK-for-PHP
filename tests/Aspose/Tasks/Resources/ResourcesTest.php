<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ResourcesTest.php">
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

namespace Aspose\Tasks\Tests\Resources;

use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Tests\BaseTestContext;
use DateTime;

class ResourcesTest extends BaseTestContext
{
    public function testGetResources()
    {
        $remoteName = "testGetResources.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getResources(new Requests\GetResourcesRequest($remoteName, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getResources());
        $this->assertNotNull($response->getResources()->getResourceItem());
        $this->assertEquals(2, count($response->getResources()->getResourceItem()));
        
        $this->assertEquals("Project manager", $response->getResources()->getResourceItem()[1]->getName());
        $this->assertEquals(1, $response->getResources()->getResourceItem()[1]->getUid());
        $this->assertEquals(1, $response->getResources()->getResourceItem()[1]->getId());
    }
    
    public function testAddResource()
    {
        $remoteName = "testAddResource.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getResources(new Requests\GetResourcesRequest($remoteName, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getResources());
        $this->assertNotNull($response->getResources()->getResourceItem());
        
        $count = count($response->getResources()->getResourceItem());
        
        $response = $this->tasks->postResource(new Requests\PostResourceRequest($remoteName, "new resource", null, null, self::$storageName, $folder));
        $this->assertEquals(201, $response->getCode());
        $addedResourceUid = $response->getResourceItem()->getUid();
        
        $response = $this->tasks->getResources(new Requests\GetResourcesRequest($remoteName, self::$storageName, $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getResources());
        $this->assertNotNull($response->getResources()->getResourceItem());
        
        $this->assertEquals($count + 1, count($response->getResources()->getResourceItem()));
        
        foreach($response->getResources()->getResourceItem() as $r)
        {
            if($r->getUid() == $addedResourceUid) {
                $addedResourceItem = $r;
                break;
            }
        }
        
        $this->assertNotNull($addedResourceItem);
        $this->assertEquals("new resource", $addedResourceItem->getName());
    }
    
    public function testEditResource()
    {
        $remoteName = "testEditResource.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');
        
        $response = $this->tasks->getResource(new Requests\GetResourceRequest($remoteName, 1, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getResource());
        
        $resource = $response->getResource();
        $resource->setName("Modified Resource1");
        $resource->setCost(200);
        $resource->setStart(new DateTime("2000-10-10"));
        $resource->setWork("100.10:00:00");
        $resource->setFinish(new DateTime("2000-10-10"));
        $resource->setOvertimeWork("4.04:00:00");
        $resource->setStandardRate(101);
        
        $baseline = new Model\Baseline();
        $baseline->setBaselineNumber(Model\BaselineType::BASELINE1);
        $baseline->setCost(44);
        $resource->setBaselines(array($baseline));
        
        $response = $this->tasks->putResource(new Requests\PutResourceRequest($remoteName, 1, $resource, Model\CalculationMode::NONE, false, self::$storageName, $folder, null));
        $this->assertEquals(200, $response->getCode());
        
        $resourceAfterModification = $response->getResource();
        
        $this->assertEquals(1, count($resourceAfterModification->getBaselines()));
        $this->assertEquals(Model\BaselineType::BASELINE1, $resourceAfterModification->getBaselines()[0]->getBaselineNumber());
        $this->assertEquals(44, $resourceAfterModification->getBaselines()[0]->getCost());
        $this->assertEquals($resource->getStandardRate(), $resourceAfterModification->getStandardRate());
        $this->assertNotEquals($resource->getStart()->format(\DATE_ISO8601), $resourceAfterModification->getStart()->format(\DATE_ISO8601));
        $this->assertEquals($resource->getWork(), $resourceAfterModification->getWork());
        $this->assertNotEquals($resource->getFinish()->format(\DATE_ISO8601), $resourceAfterModification->getFinish()->format(\DATE_ISO8601));
        $this->assertEquals($resource->getOvertimeWork(), $resourceAfterModification->getOvertimeWork());
        $this->assertEquals($resource->getCost(), $resourceAfterModification->getCost());
    }
    
    
    public function testDeleteResource()
    {
        $remoteName = "testDeleteResource.mpp";
        $folder = $this->uploadTestFile("Plan_with_resource.mpp", $remoteName, '');

        $getRequest = new Requests\GetResourcesRequest($remoteName, self::$storageName, $folder);
        $response = $this->tasks->GetResources($getRequest);
        $resourcesCountBeforeDelete = count($response->getResources()->getResourceItem());

        $response = $this->tasks->deleteResource(new Requests\DeleteResourceRequest($remoteName, 1, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->GetResources($getRequest);
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getResources());
        $this->assertNotNull($response->getResources()->getResourceItem());
        $this->assertLessThan($resourcesCountBeforeDelete, count($response->getResources()->getResourceItem()));
    }
}