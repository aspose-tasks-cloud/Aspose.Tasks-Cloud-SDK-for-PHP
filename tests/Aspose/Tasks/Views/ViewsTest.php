<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ViewsTest.php">
*   Copyright (c) 2024 Aspose.Tasks Cloud
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

namespace Aspose\Tasks\Tests\Views;

use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Tests\BaseTestContext;

class ViewsTest extends BaseTestContext
{
    public function testGetViews()
    {
        $remoteName = "testGetViews.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');

        /** @var Model\ViewsResponse $response */
        $response = $this->tasks->getViews(new Requests\GetViewsRequest($remoteName,
            null,
            $folder));

        $this->assertEquals(200, $response->getCode());
        $this->assertNotNull($response->getViews());

        $firstView = $response->getViews()[0];
        $this->assertNotNull($firstView);
        $this->assertEquals(true, $firstView->getShowInMenu());
        $this->assertEquals(Model\ItemType::TASK_ITEM, $firstView->getType());
        $this->assertEquals(Model\ViewScreen::GANTT, $firstView->getScreen());
        $this->assertEquals("&Gantt Chart", $firstView->getName());
        $this->assertEquals(1, $firstView->getUid());
    }

    public function testGetAllTableTextStyles()
    {
        $remoteName = "testGetAllTableTextStyles.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        /** @var Model\TableTextStylesResponse $response */
        $response = $this->tasks->getAllTableTextStyles(new Requests\GetAllTableTextStylesRequest($remoteName,
            2,
            null,
            $folder));

        $this->assertEquals(200, $response->getCode());
        $this->assertEquals(8, count($response->getItems()));
    }

    public function testGetTableTextStyle()
    {
        $remoteName = "testGetTableTextStyle.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        /** @var Model\TableTextStyleResponse $response */
        $response = $this->tasks->getTableTextStyle(new Requests\GetTableTextStyleRequest($remoteName,
            2,
            29,
            null,
            null,
            $folder));

        $this->assertEquals(200, $response->getCode());
        /** @var Model\TableTextStyle $tableTextStyle */
        $tableTextStyle = $response->getTableTextStyle();
        $this->assertNotNull($tableTextStyle);;
        $this->assertEquals(29, $tableTextStyle->getRowUid());
        $this->assertEquals(Model\Field::UNDEFINED, $tableTextStyle->getField());
        $this->assertEquals(Model\TextItemType::ALLOCATED, $tableTextStyle->getItemType());
        $this->assertEquals(Model\Colors::TRANSPARENT, $tableTextStyle->getColor());
        $this->assertEquals(Model\BackgroundPattern::HOLLOW, $tableTextStyle->getBackgroundPattern());
        $this->assertEquals(Model\Colors::TRANSPARENT, $tableTextStyle->getBackgroundColor());
    }

    public function testCreateTableTextStyle()
    {
        $remoteName = "testCreateTableTextStyle.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');

        $newTableTextStyle = new Model\TableTextStyle();
        $newTableTextStyle->setRowUid(3);
        $newTableTextStyle->setField(Model\Field::TASK_NAME);
        $newTableTextStyle->setItemType(Model\TextItemType::ALLOCATED);
        $newTableTextStyle->setColor(Model\Colors::RED);
        $newTableTextStyle->setBackgroundPattern(Model\BackgroundPattern::HOLLOW);
        $newTableTextStyle->setBackgroundColor(Model\Colors::GREEN_YELLOW);

        $createRequest = new Requests\CreateTableTextStyleRequest($remoteName,
            1,
            $newTableTextStyle,
            null,
            null,
            $folder);

        /** @var Model\AsposeResponse $createResponse */
        $createResponse = $this->tasks->createTableTextStyle($createRequest);
        $this->assertEquals(201, $createResponse->getCode());

        /** @var Model\TableTextStyleResponse $getResponse */
        $getResponse = $this->tasks->getTableTextStyle(new Requests\GetTableTextStyleRequest($remoteName,
            $createRequest->get_view_uid(),
            $newTableTextStyle->getRowUid(),
            null,
            null,
            $folder));

        /** @var Model\TableTextStyle $savedTableTextStyle */
        $savedTableTextStyle = $getResponse->getTableTextStyle();
        $this->assertEquals($newTableTextStyle->getRowUid(), $savedTableTextStyle->getRowUid());
        $this->assertEquals($newTableTextStyle->getField(), $savedTableTextStyle->getField());
        $this->assertEquals($newTableTextStyle->getItemType(), $savedTableTextStyle->getItemType());
        $this->assertEquals($newTableTextStyle->getColor(), $savedTableTextStyle->getColor());
        $this->assertEquals($newTableTextStyle->getBackgroundPattern(), $savedTableTextStyle->getBackgroundPattern());
        $this->assertEquals($newTableTextStyle->getBackgroundColor(), $savedTableTextStyle->getBackgroundColor());
    }

    public function testUpdateTableTextStyle()
    {
        $remoteName = "testUpdateTableTextStyle.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $getRequest = new Requests\GetTableTextStyleRequest($remoteName,
            2,
            29,
            null,
            null,
            $folder);
        /** @var Model\TableTextStyleResponse $getResponse */
        $getResponse = $this->tasks->getTableTextStyle($getRequest);
        $this->assertEquals(Model\Colors::TRANSPARENT, $getResponse->getTableTextStyle()->getColor());
        $this->assertEquals(Model\Colors::TRANSPARENT, $getResponse->getTableTextStyle()->getBackgroundColor());

        $updateRequest = new Requests\UpdateTableTextStyleRequest($remoteName,
            1,
            $getResponse->getTableTextStyle(),
            null,
            null,
            $folder);

        /** @var Model\AsposeResponse $updateResponse */
        $updateResponse = $this->tasks->updateTableTextStyle($updateRequest);
        $this->assertEquals(200, $updateResponse->getCode());

        $getResponse = $this->tasks->getTableTextStyle($getRequest);

        /** @var Model\TableTextStyle $savedTableTextStyle */
        $savedTableTextStyle = $getResponse->getTableTextStyle();
        $this->assertEquals($updateRequest->get_table_text_style()->getColor(), $savedTableTextStyle->getColor());
        $this->assertEquals($updateRequest->get_table_text_style()->getBackgroundColor(), $savedTableTextStyle->getBackgroundColor());
    }

    public function testDeleteTableTextStyle()
    {
        $remoteName = "testDeleteTableTextStyle.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $getRequest = new Requests\GetAllTableTextStylesRequest($remoteName,
            2,
            null,
            $folder);
        /** @var Model\TableTextStylesResponse $getResponse */
        $getResponse = $this->tasks->getAllTableTextStyles($getRequest);

        $this->assertEquals(8, count($getResponse->getItems()));

        /** @var Model\AsposeResponse $deleteResponse */
        $deleteResponse = $this->tasks->deleteTableTextStyle(new Requests\DeleteTableTextStyleRequest($remoteName,
            $getRequest->get_view_uid(),
            29,
            null,
            null,
            null,
            $folder));
        $this->assertEquals(200, $deleteResponse->getCode());

        /** @var Model\TableTextStylesResponse $getResponse */
        $getResponse = $this->tasks->getAllTableTextStyles($getRequest);

        $this->assertEquals(7, count($getResponse->getItems()));
    }
}