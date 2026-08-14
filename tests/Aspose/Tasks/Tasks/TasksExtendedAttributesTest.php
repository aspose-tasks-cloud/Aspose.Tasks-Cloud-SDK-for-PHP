<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TasksExtendedAttributesTest.php">
 * Copyright (c) 2018 Aspose.Tasks Cloud
 * </copyright>
 * <summary>
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Tasks\Tests\Tasks;

use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Model\ExtendedAttributeDefinition;
use Aspose\Tasks\Model\ExtendedAttribute;
use Aspose\Tasks\Tests\BaseTestContext;
use DateTime;

class TasksExtendedAttributesTest extends BaseTestContext
{

    public function testEditTaskExtendedAttributeLookupValue()
    {
        $remoteName = "testEditTaskExtendedAttributeLookupValue.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $newExtendedAttribute = new ExtendedAttributeDefinition();
        $newExtendedAttribute->setCalculationType(Model\CalculationType::LOOKUP);
        $newExtendedAttribute->setCfType(Model\CustomFieldType::TEXT);
        $newExtendedAttribute->setFieldName("Text3");
        $newExtendedAttribute->setElementType(Model\ElementType::TASK);
        $newExtendedAttribute->setAlias("New Field");
        
        $val1 = new Model\Value();
        $val1->setDescription("descr1");
        $val1->setVal("Internal");
        $val1->setId(111);
        $val2 = new Model\Value();
        $val2->setDescription("descr2");
        $val2->setVal("External");
        $val2->setId(112);
        $newExtendedAttribute->setValueList(array(
            $val1,
            $val2
        ));
        
        $response = $this->tasks->putExtendedAttribute(new Requests\PutExtendedAttributeRequest($remoteName, $newExtendedAttribute, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $addedFieldId = $response->getExtendedAttribute()->getFieldId();
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        $task = $response->getTask();
        
        $extendedAttributeValue = new ExtendedAttribute();
        $extendedAttributeValue->setLookupValueId(112);
        $extendedAttributeValue->setFieldId($addedFieldId);
        
        $task->setExtendedAttributes(array_merge($task->getExtendedAttributes(), array(
            $extendedAttributeValue
        )));
        
        $response = $this->tasks->putTask(new Requests\PutTaskRequest($remoteName, 27, $task, null, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        
        $this->assertEquals(1, count($response->getTask()->getExtendedAttributes()));
        $this->assertEquals(188743737, $response->getTask()->getExtendedAttributes()[0]->getFieldId());
        $this->assertEquals(112, $response->getTask()->getExtendedAttributes()[0]->getLookupValueId());
    }

    public function testEditTaskExtendedAttributeDateValue()
    {
        $remoteName = "testEditTaskExtendedAttributeDateValue.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $newExtendedAttribute = new ExtendedAttributeDefinition();
        $newExtendedAttribute->setCalculationType(Model\CalculationType::NONE);
        $newExtendedAttribute->setCfType(Model\CustomFieldType::DATE);
        $newExtendedAttribute->setFieldName("Start7");
        $newExtendedAttribute->setElementType(Model\ElementType::TASK);
        $newExtendedAttribute->setAlias("New Date Field");
        
        $response = $this->tasks->putExtendedAttribute(new Requests\PutExtendedAttributeRequest($remoteName, $newExtendedAttribute, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        $task = $response->getTask();
        
        $extendedAttributeValue = new ExtendedAttribute();
        $extendedAttributeValue->setDateValue(new DateTime("2018-05-05T09:15:00"));
        $extendedAttributeValue->setFieldId("188743964");
        
        $task->setExtendedAttributes(array_merge($task->getExtendedAttributes(), array(
            $extendedAttributeValue
        )));
        
        $response = $this->tasks->putTask(new Requests\PutTaskRequest($remoteName, 27, $task, null, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        
        $this->assertEquals(1, count($response->getTask()->getExtendedAttributes()));
        $this->assertEquals(188743964, $response->getTask()->getExtendedAttributes()[0]->getFieldId());
        $this->assertEquals("2018-05-05T09:15:00", $response->getTask()->getExtendedAttributes()[0]->getDateValue()->format("Y-m-d\\TH:i:s"));
    }

    public function testEditTaskExtendedAttributeDurationValue()
    {
        $remoteName = "testEditTaskExtendedAttributeDurationValue.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $newExtendedAttribute = new ExtendedAttributeDefinition();
        $newExtendedAttribute->setCalculationType(Model\CalculationType::NONE);
        $newExtendedAttribute->setCfType(Model\CustomFieldType::DURATION);
        $newExtendedAttribute->setFieldName("Duration7");
        $newExtendedAttribute->setElementType(Model\ElementType::TASK);
        $newExtendedAttribute->setAlias("New Duration Field");
        
        $response = $this->tasks->putExtendedAttribute(new Requests\PutExtendedAttributeRequest($remoteName, $newExtendedAttribute, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        $task = $response->getTask();
        
        $extendedAttributeValue = new ExtendedAttribute();
        $durationValue = new Model\Duration();
        $durationValue->setTimeSpan("100.10:00:00");
        $durationValue->setTimeUnit(Model\TimeUnitType::DAY);
        $extendedAttributeValue->setDurationValue($durationValue);
        $extendedAttributeValue->setFieldId("188743958");
        
        $task->setExtendedAttributes(array_merge($task->getExtendedAttributes(), array($extendedAttributeValue)));
        
        $response = $this->tasks->putTask(new Requests\PutTaskRequest($remoteName, 27, $task, null, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        
        $this->assertEquals(1, count($response->getTask()->getExtendedAttributes()));
        $this->assertEquals(188743958, $response->getTask()->getExtendedAttributes()[0]->getFieldId());
        $this->assertEquals("100.10:00:00", $response->getTask()->getExtendedAttributes()[0]->getDurationValue()->getTimeSpan());
    }
    
    public function testEditTaskExtendedAttributeFlagValue()
    {
        $remoteName = "testEditTaskExtendedAttributeFlagValue.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $newExtendedAttribute = new ExtendedAttributeDefinition();
        $newExtendedAttribute->setCalculationType(Model\CalculationType::NONE);
        $newExtendedAttribute->setCfType(Model\CustomFieldType::FLAG);
        $newExtendedAttribute->setFieldName("Flag5");
        $newExtendedAttribute->setElementType(Model\ElementType::TASK);
        $newExtendedAttribute->setAlias("New Flag Field");
        
        $response = $this->tasks->putExtendedAttribute(new Requests\PutExtendedAttributeRequest($remoteName, $newExtendedAttribute, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        $task = $response->getTask();
        
        $extendedAttributeValue = new ExtendedAttribute();
        $extendedAttributeValue->setFlagValue(true);
        $extendedAttributeValue->setFieldId("188743756");
        
        $task->setExtendedAttributes(array_merge($task->getExtendedAttributes(), array($extendedAttributeValue)));
        
        $response = $this->tasks->putTask(new Requests\PutTaskRequest($remoteName, 27, $task, null, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        
        $this->assertEquals(1, count($response->getTask()->getExtendedAttributes()));
        $this->assertEquals(188743756, $response->getTask()->getExtendedAttributes()[0]->getFieldId());
        $this->assertEquals(true, $response->getTask()->getExtendedAttributes()[0]->getFlagValue());
    }
    
    public function testEditTaskExtendedAttributeNumericValue()
    {
        $remoteName = "testEditTaskExtendedAttributeNumericValue.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $newExtendedAttribute = new ExtendedAttributeDefinition();
        $newExtendedAttribute->setCalculationType(Model\CalculationType::NONE);
        $newExtendedAttribute->setCfType(Model\CustomFieldType::NUMBER);
        $newExtendedAttribute->setFieldName("Number11");
        $newExtendedAttribute->setElementType(Model\ElementType::TASK);
        $newExtendedAttribute->setAlias("New Number Field");
        
        $response = $this->tasks->putExtendedAttribute(new Requests\PutExtendedAttributeRequest($remoteName, $newExtendedAttribute, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        $task = $response->getTask();
        
        $extendedAttributeValue = new ExtendedAttribute();
        $extendedAttributeValue->setNumericValue(11.9);
        $extendedAttributeValue->setFieldId("188743987");
        
        $task->setExtendedAttributes(array_merge($task->getExtendedAttributes(), array($extendedAttributeValue)));
        
        $response = $this->tasks->putTask(new Requests\PutTaskRequest($remoteName, 27, $task, null, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        
        $this->assertEquals(1, count($response->getTask()->getExtendedAttributes()));
        $this->assertEquals(188743987, $response->getTask()->getExtendedAttributes()[0]->getFieldId());
        $this->assertEquals(11.9, $response->getTask()->getExtendedAttributes()[0]->getNumericValue());
    }
    
    public function testEditTaskExtendedAttributeCostValue()
    {
        $remoteName = "testEditTaskExtendedAttributeCostValue.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $newExtendedAttribute = new ExtendedAttributeDefinition();
        $newExtendedAttribute->setCalculationType(Model\CalculationType::NONE);
        $newExtendedAttribute->setCfType(Model\CustomFieldType::NUMBER);
        $newExtendedAttribute->setFieldName("Cost7");
        $newExtendedAttribute->setElementType(Model\ElementType::TASK);
        $newExtendedAttribute->setAlias("New Cost Field");
        
        $response = $this->tasks->putExtendedAttribute(new Requests\PutExtendedAttributeRequest($remoteName, $newExtendedAttribute, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        $task = $response->getTask();
        
        $extendedAttributeValue = new ExtendedAttribute();
        $extendedAttributeValue->setNumericValue(99.99);
        $extendedAttributeValue->setFieldId("188743941");
        
        $task->setExtendedAttributes(array_merge($task->getExtendedAttributes(), array($extendedAttributeValue)));
        
        $response = $this->tasks->putTask(new Requests\PutTaskRequest($remoteName, 27, $task, null, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        
        $this->assertEquals(1, count($response->getTask()->getExtendedAttributes()));
        $this->assertEquals(188743941, $response->getTask()->getExtendedAttributes()[0]->getFieldId());
        $this->assertEquals(99.99, $response->getTask()->getExtendedAttributes()[0]->getNumericValue());
    }
    
    public function testEditTaskExtendedAttributeTextValue()
    {
        $remoteName = "testEditTaskExtendedAttributeTextValue.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $newExtendedAttribute = new ExtendedAttributeDefinition();
        $newExtendedAttribute->setCalculationType(Model\CalculationType::NONE);
        $newExtendedAttribute->setCfType(Model\CustomFieldType::NUMBER);
        $newExtendedAttribute->setFieldName("Text3");
        $newExtendedAttribute->setElementType(Model\ElementType::TASK);
        $newExtendedAttribute->setAlias("New Cost Field");
        
        $response = $this->tasks->putExtendedAttribute(new Requests\PutExtendedAttributeRequest($remoteName, $newExtendedAttribute, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        $task = $response->getTask();
        
        $extendedAttributeValue = new ExtendedAttribute();
        $extendedAttributeValue->setTextValue("test text value");
        $extendedAttributeValue->setFieldId("188743737");
        
        $task->setExtendedAttributes(array_merge($task->getExtendedAttributes(), array($extendedAttributeValue)));
        
        $response = $this->tasks->putTask(new Requests\PutTaskRequest($remoteName, 27, $task, null, null, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getTask());
        
        $this->assertEquals(1, count($response->getTask()->getExtendedAttributes()));
        $this->assertEquals(188743737, $response->getTask()->getExtendedAttributes()[0]->getFieldId());
        $this->assertEquals("test text value", $response->getTask()->getExtendedAttributes()[0]->getTextValue());
    }
}