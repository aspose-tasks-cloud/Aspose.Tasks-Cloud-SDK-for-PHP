<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ReportTest.php">
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

namespace Aspose\Tasks\Tests\Reports;

use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests\GetRiskAnalysisReportRequest;
use Aspose\Tasks\Model\Requests\GetCriticalPathRequest;
use Aspose\Tasks\Model\Requests\GetReportPdfRequest;
use Aspose\Tasks\Tests\BaseTestContext;

class ReportTest extends BaseTestContext
{
    public function testGetReportPdf()
    {
        $remoteName = "testGetReportPdf.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getReportPdf(new GetReportPdfRequest($remoteName, Model\ReportType::MILESTONES, self::$storageName, $folder));
        
        $this->assertNotNull($response);
        $this->assertEquals("%PDF", $response->fread(4));
    }
    
    public function testGetCriticalPath()
    {
        $remoteName = "testGetCriticalPath.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        $response = $this->tasks->getCriticalPath(new GetCriticalPathRequest($remoteName, self::$storageName, $folder));
        
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTasks());
        $this->assertNotNull($response->getTasks()->getTaskItem());
        $this->assertEquals(76, count($response->getTasks()->getTaskItem()));
    }
    
    public function testGetRiskAnalysisReport()
    {
        $remoteName = "testGetRiskAnalysisReport.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        $response = $this->tasks->getRiskAnalysisReport(new GetRiskAnalysisReportRequest($remoteName,
            1,
            Model\ProbabilityDistributionType::NORMAL,
            80,
            130,
            Model\ConfidenceLevel::CL85,
            200,
            self::$storageName, 
            $folder,
            null));
        
        $this->assertNotNull($response);
        $this->assertEquals("%PDF", $response->fread(4));
    }
}