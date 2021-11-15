<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class PageController extends Controller
{
    public function index() {
        $items = Gallery::all();
    	return view('/welcome', compact('items'));
    }

    public function manage() {
    	$items = Gallery::all();
    	return view('/manage', compact('items'));
    }

    public function insert() {
    	return view('/insert');
    }

    public function update($id) {
        $item = Gallery::find($id);
        return view('/update', compact('item'));
    }
}
