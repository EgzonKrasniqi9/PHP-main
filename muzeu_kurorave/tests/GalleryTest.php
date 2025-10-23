<?php

use PHPUnit\Framework\TestCase;
use src\Controllers\GalleryController;
use src\Models\Item;

class GalleryTest extends TestCase
{
    protected $galleryController;

    protected function setUp(): void
    {
        $this->galleryController = new GalleryController();
    }

    public function testAddItem()
    {
        $item = new Item();
        $item->setTitle('Test Item');
        $item->setDescription('This is a test description.');
        $item->setImage('test-image.jpg');

        $result = $this->galleryController->addItem($item);
        $this->assertTrue($result);
    }

    public function testGetItems()
    {
        $items = $this->galleryController->getItems();
        $this->assertIsArray($items);
        $this->assertNotEmpty($items);
    }

    public function testDeleteItem()
    {
        $itemId = 1; // Assuming an item with ID 1 exists
        $result = $this->galleryController->deleteItem($itemId);
        $this->assertTrue($result);
    }
}