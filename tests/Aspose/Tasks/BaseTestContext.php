<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseTestContext.php">
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

use Aspose\Tasks\Configuration;
use Aspose\Tasks\TasksApi;
use Aspose\Tasks\Model\Requests;
use PHPUnit\Framework\TestCase;

abstract class BaseTestContext extends TestCase
{
    protected $tasks;

    protected $config;
    protected $uploadedTestFiles;
    protected static $baseTestPath = "Temp/SdkTests/TestData/";
    protected static $baseTestOut = "TestOut/";
    protected static $storageName = "";

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->config = new Configuration();
        $this->uploadedTestFiles = array();
        /*
         * To run with your own credentials please, replace parameter in methods 'setAppKey' and 'setAppSid' accordingly to your's AppSid and AppKey
         */
        $this->config->setHost('https://api.aspose.cloud');
        $this->config->setAppKey("yourAppKey");
        $this->config->setAppSid("yourAppKey");

        $this->tasks = new TasksApi(null, $this->config);
    }

    /**
     * Clean after running each test case
     */
    public function tearDown(): void
    {
        foreach ($this->uploadedTestFiles as $uploadedTestFile) {
            $request = new Requests\DeleteFileRequest($uploadedTestFile);
            $this->tasks->deleteFile($request);
        }

    }
    
    public function uploadTestFile($localName, $remoteName, $subfolder = '')
    {
        if(strlen($subfolder) != 0) {
            $subfolder = $subfolder . "/";
        }
            
        $fullName = self::$baseTestPath . $subfolder . $remoteName;
        
        $file = realpath(__DIR__ . '/../../..') . '/TestData/' . $localName;
        $request = new Requests\UploadFileRequest($fullName, $file);
        $response = $this->tasks->uploadFile($request);
        $this->uploadedTestFiles[] = $fullName;
        return self::$baseTestPath . $subfolder;
    }
}