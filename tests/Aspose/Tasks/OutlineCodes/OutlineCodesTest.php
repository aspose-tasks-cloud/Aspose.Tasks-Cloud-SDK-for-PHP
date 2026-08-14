<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="OutlineCodesTest.php">
*   Copyright (c) 2018 Aspose.Tasks for Cloud
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

namespace Aspose\Tasks\Tests\OutlineCodes;

use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Tests\BaseTestContext;

class OutlineCodesTest extends BaseTestContext
{
    public function testGetOutlineCodes()
    {
        $remoteName = "testGetOutlineCodes.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getOutlineCodes(new Requests\GetOutlineCodesRequest($remoteName, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getOutlineCodes());
        $this->assertEquals(2, count($response->getOutlineCodes()->getList()));
    }
    
    public function testGetOutlineCode()
    {
        $remoteName = "testGetOutlineCode.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getOutlineCodeByIndex(new Requests\GetOutlineCodeByIndexRequest($remoteName, 1, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getOutlineCode());
        $this->assertEquals("F45D601B-70C5-E311-A5BA-D43D7E937F92", $response->getOutlineCode()->getGuid());
    }
    
    public function testDeleteOutlineCodeByIndex()
    {
        $remoteName = "testDeleteOutlineCodeByIndex.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->deleteOutlineCodeByIndex(new Requests\DeleteOutlineCodeByIndexRequest($remoteName, 1, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getOutlineCodes(new Requests\GetOutlineCodesRequest($remoteName, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getOutlineCodes());
        $this->assertEquals(1, count($response->getOutlineCodes()->getList()));
        $this->assertEquals(1, $response->getOutlineCodes()->getList()[0]->getIndex());
    }
}