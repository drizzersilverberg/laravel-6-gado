<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    // BROWSE
    public function index() {
        $items = Item::all(); // Item::all() = mengambil semua data items menggunakan model Item
        // dd($items->toArray());
        return view('items.index', compact('items'));
    }

    // READ
    public function show($itemId) {
        $item = Item::find($itemId); // Item::find($itemId) mengambil satu item berdasarkan id item
        return view('items.show', compact('item'));
    }

    // EDIT (Update)
    // ADD (Create)
    // DELETE
}
