<?php

namespace App\Controllers;

use App\Models\Item;

class GalleryController
{
    public function index()
    {
        $items = Item::all();
        require_once '../src/Views/gallery/index.php';
    }

    public function create()
    {
        require_once '../src/Views/gallery/form.php';
    }

    public function store($data)
    {
        $item = new Item();
        $item->title = $data['title'];
        $item->description = $data['description'];
        $item->image = $data['image'];
        $item->save();
        header('Location: /gallery');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        require_once '../src/Views/gallery/form.php';
    }

    public function update($id, $data)
    {
        $item = Item::find($id);
        $item->title = $data['title'];
        $item->description = $data['description'];
        $item->image = $data['image'];
        $item->save();
        header('Location: /gallery');
    }

    public function delete($id)
    {
        $item = Item::find($id);
        $item->delete();
        header('Location: /gallery');
    }
}