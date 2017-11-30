<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function list()
    {
    	$query = request()->get('query', '');

    	$items = Item::all();

    	if($query) {
    		$items = Item::where('name', 'LIKE', "%$query%")->get();
    	}


    	return view('items.list', compact('items', 'query'));
    }

    public function showNewForm()
    {
    	return view('items.form');
    }

    public function store()
    {
    	dd(request()->all());
    }
}
