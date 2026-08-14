<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="WbsTest.php">
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

namespace Aspose\Tasks\Tests\Wbs;

use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Tests\BaseTestContext;

class WbsTest extends BaseTestContext
{
    public function testGetWbsDefinition()
    {
        $remoteName = "testGetWbsDefinition.mpp";
        $folder = $this->uploadTestFile("WBSDefinition.mpp", $remoteName, '');
        
        $response = $this->tasks->getWbsDefinition(new Requests\GetWbsDefinitionRequest($remoteName, self::$storageName, $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertEquals(true, $response->getWbsDefinition()->getGenerateWbsCode());
        $this->assertEquals(true, $response->getWbsDefinition()->getVerifyUniqueness());
    }
    
    public function testRenumberWbsCode()
    {
        $remoteName = "testRenumberWbsCode.mpp";
        $folder = $this->uploadTestFile("WBSDefinition.mpp", $remoteName, '');
        
        $response = $this->tasks->putRenumberWbsCode(new Requests\PutRenumberWbsCodeRequest($remoteName, [], self::$storageName, null, $folder));
        $this->assertEquals(200, $response->getCode());
    }
}