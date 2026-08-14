<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="TasksApiTest.php">
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

namespace Aspose\Tasks\Tests;

use Aspose\Tasks\Tests\BaseTestContext;
use ReflectionFunctionAbstract;

class TasksApiTest extends BaseTestContext
{
    public function testApiCoverage()
    {
        $classarr = array('Assignments\AssignmentsTest',
            'Calendars\CalendarExceptionsTest',
            'Calendars\CalendarsTest',
            'Calendars\CalendarWorkWeeksTest',
            'DocumentProperties\DocumentPropertiesTest',
            'ExtendedAttributes\ExtendedAttributesTest',
            'Groups\GroupsTest',
            'OutlineCodes\OutlineCodesTest',
            'Project\ReadProjectTest',
            'Project\ImportProjectTest',
            'Project\GetPageCountTest',
            'Project\TaskDocumentFormatTest',
            'ProjectOnline\ProjectOnlineTest',
            'Recalculation\RecalculationTest',
            'Reports\ReportTest',
            'Resources\ResourcesTest',
            'Resources\ResourceLevelTest',
            'Storage\FilesTest',
            'TaskLinks\TaskLinksTest',
            'Tasks\TasksTest',
            'Tasks\TasksExtendedAttributesTest',
            'Tasks\TaskRecurringInfoTest',
            'Tasks\TaskPrimaveraPropertiesTest',
            'TimephasedData\TimephasedDataTest',
            'Vba\VbaTest',
            'Views\ViewsTest',
            'Wbs\WbsTest'
        );

        $ignoredApiMethods = [
            'copyFile',
            'deleteFile',
            'moveFile',
            'uploadFile',
            'copyFolder',
            'createFolder',
            'deleteFolder',
            'getFilesList',
            'moveFolder',
            'getDiscUsage',
            'getFileVersions',
            'objectExists',
            'storageExists'
        ];

        $apiClass = new \ReflectionClass('Aspose\Tasks\TasksApi');
        $testMethods = [];
        foreach ($classarr as $cls) {
            $fullname = dirname(__FILE__) . '\\' . $cls . '.php';
            include_once $fullname;
            $e = explode('\\', $cls);
            $className = array_pop($e);
            $fullClassName = 'Aspose\\Tasks\\Tests\\' . $cls;
            $refClass = new \ReflectionClass($fullClassName);
            foreach ($refClass->getMethods() as $testFixtureMethod) {
                if ($testFixtureMethod->class == $fullClassName) {
                    $apiCalls = self::getApiFunctionCallFromFunctionBody($testFixtureMethod);
                    foreach ($apiCalls as $apiCall) {
                        $testMethods[$apiCall] = true;
                    }
                }
            }
        }

        $methods = $apiClass->getMethods(\ReflectionMethod::IS_PROTECTED);
        $errorList = "";

        foreach ($methods as $method) {
            $methodName = "";
            try {
                $methodName = lcfirst(str_replace("Request", '', $method->getName()));
                if ((!array_key_exists($methodName, $testMethods) || !$testMethods[$methodName])
                    && !in_array($methodName, $ignoredApiMethods)) {
                    $errorList = $errorList . $methodName . "\n";
                }
            } catch (\ReflectionException $e) {
                $errorList = $errorList . $methodName . "\n";
            }
            unset($method);
        }

        $this->assertEquals(0, strlen($errorList), "Uncovered API methods\n" . $errorList);
    }

    private function getApiFunctionCallFromFunctionBody(ReflectionFunctionAbstract $func)
    {
        $filename = $func->getFileName();
        $start_line = $func->getStartLine() - 1; // it's actually - 1, otherwise you wont get the function() block
        $end_line = $func->getEndLine();
        $length = $end_line - $start_line;

        $source = file($filename);
        $result = array();

        foreach (array_slice($source, $start_line, $length) as $codeLine) {
            if (preg_match('/\$this->tasks->([a-zA-Z0-9]+)\(/', $codeLine, $match)) {
                $result[] = $match[1];
            }
        }

        return $result;
    }
}
