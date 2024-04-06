<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class ViewController extends Controller
{
    public function getData() {
        $data=Todo::all();
        return view('todos.viewfile',['data'=> $data]);
    }
}
