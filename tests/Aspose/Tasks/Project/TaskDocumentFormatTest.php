<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="TaskDocumentFormatTest.php">
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
use Aspose\Tasks\Model\Requests\PostTaskDocumentWithFormatRequest;
use Aspose\Tasks\Model\Requests\GetTaskDocumentWithFormatRequest;
use Aspose\Tasks\Tests\BaseTestContext;

class TaskDocumentFormatTest extends BaseTestContext
{
    public function testGetDocumentInCsvFormat()
    {
        $remoteName = "testGetDocumentInCsvFormat.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getTaskDocumentWithFormat(new GetTaskDocumentWithFormatRequest($remoteName,
            Model\ProjectFileFormat::CSV, false, self::$storageName, $folder));
        
        $this->assertNotNull($response);
        $this->assertStringContainsString("ID;Task_Name;Outline_Level;Duration;Start_Date;Finish_Date;Percent_Comp;Cost;Work", $response->current());
        $response->next();
        $this->assertStringContainsString("1;Five to Eight Weeks Before Moving;1;16 days;Thu 01.01.04 08:00;Thu 22.01.04 17:00;0%;$0;0 hrs", $response->current());
    }
    
    public function testGetDocumentAsZippedHtml()
    {
        $remoteName = "testGetDocumentAsZippedHtml.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getTaskDocumentWithFormat(new GetTaskDocumentWithFormatRequest($remoteName,
            Model\ProjectFileFormat::HTML, true, self::$storageName, $folder));
        
        $this->assertNotNull($response);
    }
}