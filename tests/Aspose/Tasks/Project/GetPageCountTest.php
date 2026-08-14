<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="GetPageCountTest.php">
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

namespace Aspose\Tasks\Tests\Project;

use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests\GetPageCountRequest;
use DateTime;
use Aspose\Tasks\Tests\BaseTestContext;

class GetPageCountTest extends BaseTestContext
{
    public function testGetPageCountWithPresentationFormat()
    {
        $remoteName = "testGetPageCountWithPresentationFormat.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getPageCount(new GetPageCountRequest($remoteName,
            null, 
            Model\PresentationFormat::TASK_USAGE,
            Model\Timescale::MONTHS,
            null,
            null,
            $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertEquals(4, $response->getPageCount());
    }
    
    public function testGetPageCountWithPresentationFormatAndDateInterval()
    {
        $remoteName = "testGetDocumentInCsvFormatWithSaveOptions.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getPageCount(new GetPageCountRequest($remoteName,
            null,
            Model\PresentationFormat::TASK_USAGE,
            Model\Timescale::MONTHS,
            new DateTime("2004-01-01"),
            new DateTime("2004-02-28"),
            $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertEquals(4, $response->getPageCount());
    }
}