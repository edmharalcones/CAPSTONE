<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodolistController extends Controller
{
public function index() {
    return view('welcome', ['ListItems' => ListItem::all()]);
}


    public function saveItem(Request $request){
        $newListItem = new ListItem;
        $newListItem->name = $request->ListItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

       return redirect('/');
    

    }
}
